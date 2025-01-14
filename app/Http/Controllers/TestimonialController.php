<?php

namespace App\Http\Controllers;

use App\Models\testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function testimon()
    {
        $testimons = testimonial::all();
        return view('admin.testimon', compact('testimons'));
    }

    public function testimonial(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'deskripsi' => 'required',
        ]);

        testimonial::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('user.home')->with('success', 'testimonial berhasil ditambahkan!');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
{
    $testimon = testimonial::find($id);

    if (!$testimon) {
        return redirect()->back()->with('error', 'Data testimon tidak ditemukan.');
    }

    $testimon->delete();

    return redirect()->back()->with('success', 'Data testimon berhasil dihapus.');
}

}
