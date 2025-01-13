<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function contact()
    {
        $contacts = Contact::all();
        return view('admin.contact', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contact = Contact::first();
        if($contact)
        {
        return redirect()->route('contact');
        }else {
            return view('admin.contact_tambah');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'alamat' => 'required',
            'kontak' => 'required',
            'hari_buka' => 'required',
            'hari_tutup' => 'required',
            'jam_buka' => 'required',
            'jam_tutup' => 'required',
            'email' => 'required',
        ]);

        // Gabungkan jam buka dan tutup
        $jamOprasional = $request->jam_buka . ' - ' . $request->jam_tutup;

        // Gabungkan hari buka dan tutup
        $hariOprasional = $request->hari_buka . ' - ' . $request->hari_tutup;

        Contact::create([
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'hari_oprasional' => $hariOprasional,
            'jam_oprasional' => $jamOprasional,
            'email' => $request->email,
        ]);

        return redirect()->route('contact')->with('success', 'Data Contact Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_contact)
    {
        $contact = Contact::find($id_contact);
        if (!$contact) {
            return back();
        }
        return view('admin.edit_contact', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_contact)
    {
        $contact = Contact::find($id_contact);
        $request->validate([
            'alamat' => 'required',
            'kontak' => 'required',
            'hari_buka' => 'required',
            'hari_tutup' => 'required',
            'jam_buka' => 'required',
            'jam_tutup' => 'required',
            'email' => 'required',
        ]);

        // Gabungkan jam buka dan tutup
        $jamOprasional = $request->jam_buka . ' - ' . $request->jam_tutup;

        // Gabungkan hari buka dan tutup
        $hariOprasional = $request->hari_buka . ' - ' . $request->hari_tutup;

        $contact->update([
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'hari_oprasional' => $hariOprasional,
            'jam_oprasional' => $jamOprasional,
            'email' => $request->email,
        ]);

        return redirect()->route('contact', $id_contact)->with('success', 'Data Contact Berhasil di Edit');
    }


    public function delete($id)
    {
        $contact = contact::find($id);

        if ($contact->foto) {
            $foto = $contact->foto;

            if (Storage::disk('public')->exists($foto)) {
                Storage::disk('public')->delete($foto);
            }
        }

        $contact->delete();

        return redirect()->back()->with('success', 'Data Contact berhasil di hapus.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
