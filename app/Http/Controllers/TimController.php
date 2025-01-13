<?php

namespace App\Http\Controllers;

use App\Models\Tim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tim()
    {
        $tims = Tim::all();
        return view('admin.tim', compact('tims'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tim_tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',
            'jabatan' => 'required',

        ]);

        $foto = null;

         if ($request->hasFile('foto')) {
             $uniqueField = uniqid(). '_' . $request->file('foto')->getClientOriginalName();

             $request->file('foto')->storeAs('foto_tim', $uniqueField, 'public');

             $foto = 'foto_tim/' . $uniqueField;
         }

        Tim::create([
            'nama' => $request->nama,
            'foto' => $foto,
            'jabatan' => $request->jabatan,

        ]);

        return redirect()->route('tim')->with('success','Data tim Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tim $tim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_tim)
    {
        $tim = Tim::find($id_tim);
        if (!$tim) {
            return back();
        }
        return view('admin.edit_tim', compact('tim'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $tim)
    {
        $tim = Tim::find($tim);

        $request->validate([
            'nama' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
            'jabatan' => 'required',

        ]);

        $foto = $tim->foto;

        if ($request->hasFile('foto')) {
            if ($foto) {
                Storage::disk('public')->delete($foto);
            }
            $uniqueField = uniqid() . '_' . $request->file('foto')->getClientOriginalName();

            $request->file('foto')->storeAs('foto_tim', $uniqueField, 'public');

            $foto = 'foto_tim/' . $uniqueField;
        }

        $tim->update([
            'nama' => $request->nama,
            'foto' => $foto,
            'jabatan' => $request->jabatan,
        ]);

        return redirect()->route('tim')->with('success', 'Data Tim Berhasil di Edit');
    }


    public function delete($id)
    {
        $tim = tim::find($id);

        if ($tim->foto) {
            $foto = $tim->foto;

            if (Storage::disk('public')->exists($foto)) {
                Storage::disk('public')->delete($foto);
            }
        }

        $tim->delete();

        return redirect()->back()->with('success', 'Data tim berhasil di hapus.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tim $tim)
    {
        //
    }
}
