<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

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
            'tahun_berdiri' => 'required',
            'latar_belakang' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        About::create([
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
            'tahun_berdiri' => 'required',
            'latar_belakang' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $about->update([
            'tahun_berdiri' => $request->tahun_berdiri,
            'latar_belakang' => $request->latar_belakang,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);

        return redirect()->route('about', $id_about)->with('success', 'Data about Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $about = About::find($id);
        $about->delete();

        return redirect()->back()->with('success', 'data about Berhasil diHapus');
    }
}
