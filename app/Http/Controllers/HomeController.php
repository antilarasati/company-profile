<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Home;
use App\Models\User;
use App\Models\Menu;
use App\Models\testimonial;
use App\Models\Tim;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function userhome()
    {
        $home = Home::first();
        $about = About::first();
        $menus = Menu::all();
        $testimonials = testimonial::all();
        $tims = Tim::all();
        $contact = Contact::first();

        $alamat = $contact->alamat;

        // Ambil tahun berdiri dari model About
        $tahunBerdiri = $about->tahun_berdiri; // Misalkan kolom ini ada di tabel abouts
        $currentYear = Carbon::now()->year; // Ambil tahun sekarang

        // Hitung selisih tahun
        $yearsInBusiness = $currentYear - $tahunBerdiri;
        return view('user.home', compact('home', 'about', 'menus', 'testimonials', 'tims', 'yearsInBusiness', 'contact', 'alamat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function profile()
    {
        $profile = Auth::user();
        return view('admin.profile', compact('profile'));
    }

    public function updateprofile(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);

        $request->validate([
            'username' => 'required|unique:users,username,' . $id . ',id',
            'password' => 'nullable|min:6',
            'name' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048'


        ]);

        $foto = $user->foto;

        if ($request->hasFile('foto')) {
            $uniqueField = uniqid(). '_' . $request->file('foto')->getClientOriginalName();

            $request->file('foto')->storeAs('foto', $uniqueField, 'public');

            $foto = 'foto/' . $uniqueField;
        }

        $user->update([
            'username' => $request->username,
            'password' => $request->filled('password') ? Hash::make($request->password) : $user->password,
            'name' => $request->name,
            'foto' => $foto
        ]);

        return redirect()->route('admin.profile')->with('success', 'Data Admin Berhasil di Edit');
    }

    public function logoutAdmin(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }



    public function home()
    {
        $homes = Home::all();
        return view('admin.home', compact('homes'));
    }


    public function create()
    {
        return view('admin.home_tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_resto' => 'required',
            'tagline' => 'required',
            'slogan' => 'required',
            'deskripsi' => 'required',
        ]);

        Home::create([
            'nama_resto' => $request->nama_resto,
            'tagline' => $request->tagline,
            'slogan' => $request->slogan,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('home')->with('success', 'Data home Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_home)
    {
        $home = Home::find($id_home);
        if (!$home) {
            return back();
        }
        return view('admin.edit_home', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_home)
    {
        $home = Home::find($id_home);
        $request->validate([
            'nama_resto' => 'required',
            'tagline' => 'required',
            'slogan' => 'required',
            'deskripsi' => 'required',
        ]);

        $home->update([
            'nama_resto' => $request->nama_resto,
            'tagline' => $request->tagline,
            'slogan' => $request->slogan,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('home')->with('success', 'Data Home Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $home = home::find($id);

        if ($home->foto) {
            $foto = $home->foto;

            if (Storage::disk('public')->exists($foto)) {
                Storage::disk('public')->delete($foto);
            }
        }

        $home->delete();

        return redirect()->back()->with('success', 'Data Home berhasil di hapus.');
    }
}
