<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function menu()
    {
        $menus = Menu::all();
        return view('admin.menu', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menu_tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga_menu' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        $foto = null;

         if ($request->hasFile('foto')) {
             $uniqueField = uniqid(). '_' . $request->file('foto')->getClientOriginalName();

             $request->file('foto')->storeAs('foto_menu', $uniqueField, 'public');

             $foto = 'foto_menu/' . $uniqueField;
         }

        Menu::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga_menu' => $request->harga_menu,
            'foto' => $foto,
        ]);

        return redirect()->route('menu')->with('success','Data Menu Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_menu)
    {
        $menu = Menu::find($id_menu);
        if (!$menu) {
            return back();
        }
        return view('admin.edit_menu', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_menu)
    {
        $menu = Menu::find($id_menu);
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga_menu' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        $foto = $menu->foto;

        if ($request->hasFile('foto')) {
            if ($foto) {
                Storage::disk('public')->delete($foto);
            }
            $uniqueField = uniqid() . '_' . $request->file('foto')->getClientOriginalName();

            $request->file('foto')->storeAs('foto_menu', $uniqueField, 'public');

            $foto = 'foto_menu/' . $uniqueField;
        }

        $menu->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga_menu' => $request->harga_menu,
            'foto' => $foto,
        ]);

        return redirect()->route('menu')->with('success', 'Data Menu Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }

    public function delete($id)
    {
        $menu = menu::find($id);

        if ($menu->foto) {
            $foto = $menu->foto;

            if (Storage::disk('public')->exists($foto)) {
                Storage::disk('public')->delete($foto);
            }
        }

        $menu->delete();

        return redirect()->back()->with('success', 'Data menu berhasil di hapus.');
    }
}
