<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function about()
    {
        $abouts = About::all();
        return view('admin.about', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about_tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto1' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
            'foto2' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
            'foto3' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
            'foto4' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
            'tahun_berdiri' => 'required',
            'latar_belakang' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $foto1 = null;

        if ($request->hasFile('foto1')) {
            $uniqueField = uniqid(). '_' . $request->file('foto1')->getClientOriginalName();

            $request->file('foto1')->storeAs('foto1_about', $uniqueField, 'public');

            $foto1 = 'foto1_about/' . $uniqueField;
        }

        $foto2 = null;

        if ($request->hasFile('foto2')) {
            $uniqueField = uniqid(). '_' . $request->file('foto2')->getClientOriginalName();

            $request->file('foto2')->storeAs('foto2_about', $uniqueField, 'public');

            $foto2 = 'foto2_about/' . $uniqueField;
        }

        $foto3 = null;

        if ($request->hasFile('foto3')) {
            $uniqueField = uniqid(). '_' . $request->file('foto3')->getClientOriginalName();

            $request->file('foto3')->storeAs('foto3_about', $uniqueField, 'public');

            $foto3 = 'foto3_about/' . $uniqueField;
        }

        $foto4 = null;

        if ($request->hasFile('foto4')) {
            $uniqueField = uniqid(). '_' . $request->file('foto4')->getClientOriginalName();

            $request->file('foto4')->storeAs('foto4_about', $uniqueField, 'public');

            $foto4 = 'foto4_about/' . $uniqueField;
        }

        About::create([
            'foto1' => $foto1,
            'foto2' => $foto2,
            'foto3' => $foto3,
            'foto4' => $foto4,
            'tahun_berdiri' => $request->tahun_berdiri,
            'latar_belakang' => $request->latar_belakang,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);

        return redirect()->route('about')->with('success','Data About Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_about)
    {
        $about = About::find($id_about);
        if (!$about) {
            return back();
        }
        return view('admin.edit_about', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_about)
    {
        $about = About::find($id_about);
        $request->validate([
            'foto1' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
            'foto2' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
            'foto3' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
            'foto4' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
            'tahun_berdiri' => 'required',
            'latar_belakang' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $foto1 = $about->foto1;

        if ($request->hasFile('foto1')) {
            $uniqueField = uniqid(). '_' . $request->file('foto1')->getClientOriginalName();

            $request->file('foto1')->storeAs('foto1_about', $uniqueField, 'public');

            $foto1 = 'foto1_about/' . $uniqueField;
        }

        $foto2 = $about->foto2;

        if ($request->hasFile('foto2')) {
            if ($foto2) {
                Storage::disk('public')->delete($foto2);
            }
            $uniqueField = uniqid() . '_' . $request->file('foto2')->getClientOriginalName();

            $request->file('foto2')->storeAs('foto2_about', $uniqueField, 'public');

            $foto2 = 'foto2_about/' . $uniqueField;
        }

        $foto3 = $about->foto3;

        if ($request->hasFile('foto3')) {
            if ($foto3) {
                Storage::disk('public')->delete($foto3);
            }
            $uniqueField = uniqid() . '_' . $request->file('foto3')->getClientOriginalName();

            $request->file('foto3')->storeAs('foto3_about', $uniqueField, 'public');

            $foto3 = 'foto3_about/' . $uniqueField;
        }

        $foto4 = $about->foto4;

        if ($request->hasFile('foto4')) {
            if ($foto4) {
                Storage::disk('public')->delete($foto4);
            }
            $uniqueField = uniqid() . '_' . $request->file('foto4')->getClientOriginalName();

            $request->file('foto4')->storeAs('foto4_about', $uniqueField, 'public');

            $foto4 = 'foto4_about/' . $uniqueField;
        }

        $about->update([
            'foto1' => $foto1,
            'foto2' => $foto2,
            'foto3' => $foto3,
            'foto4' => $foto4,
            'tahun_berdiri' => $request->tahun_berdiri,
            'latar_belakang' => $request->latar_belakang,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);

        return redirect()->route('about')->with('success', 'Data about Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $about = about::find($id);

        if ($about->foto) {
            $foto = $about->foto;

            if (Storage::disk('public')->exists($foto)) {
                Storage::disk('public')->delete($foto);
            }
        }

        $about->delete();

        return redirect()->back()->with('success', 'Data About berhasil di hapus.');
    }
}
