<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

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
        return view('admin.contact_tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'alamat' => 'required',
            'kontak' => 'required',
            'jam_oprasional' => 'required',
            'email' => 'required',
        ]);

        Contact::create([
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'jam_oprasional' => $request->jam_oprasional,
            'email' => $request->email,
        ]);

        return redirect()->route('contact')->with('success','Data Contact Berhasil di Tambah');
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
            'jam_oprasional' => 'required',
            'email' => 'required',
        ]);

        $contact->update([
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'jam_oprasional' => $request->jam_oprasional,
            'email' => $request->email,
        ]);

        return redirect()->route('contact', $id_contact)->with('success', 'Data Contact Berhasil di Edit');
    }


    public function delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect()->back()->with('success', 'data Contact Berhasil diHapus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
