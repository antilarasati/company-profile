@extends('.admin.layout.app')

@section('title','Admin Edit Contact')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit Contact</h6>
                <form action="{{route('contact.update', $contact->id_contact)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="alamat" class="form-label">ALAMAT</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{old('alamat', $contact->alamat)}}">
                        <div class="text-danger">
                            @error('alamat')
                            {{$message}}
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="kontak" class="form-label">KONTAK</label>
                        <input type="text" class="form-control" id="kontak" name="kontak" value="{{old('kontak', $contact->kontak)}}">
                        <div class="text-danger">
                        @error('kontak')
                        {{$message}}
                        @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="hari_operasional" class="form-label">Hari Buka</label>
                                <input type="text" class="form-control" id="hari_operasional" name="hari_buka" value="{{ old('hari_buka', explode(' - ', $contact->hari_operasional)[0] ?? '') }}"
                                    required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="hari_operasional" class="form-label">Hari Tutup</label>
                                <input type="text" class="form-control" id="hari_operasional" name="hari_tutup" value="{{ old('hari_tutup', explode(' - ', $contact->hari_operasional)[1] ?? '') }}"
                                    required>
                            </div>
                        </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="jam_oprasional" class="form-label">Jam Oprasional (Buka)</label>
                                <input type="time" class="form-control" id="jam_oprasional" name="jam_buka" value="{{ old('jam_buka', explode(' - ', $contact->jam_oprasional)[0] ?? '') }}"
                                    required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="jam_oprasional" class="form-label">Jam Oprasional (Tutup)</label>
                                <input type="time" class="form-control" id="jam_oprasional" name="jam_tutup" value="{{ old('jam_tutup', explode(' - ', $contact->jam_oprasional)[1] ?? '') }}"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{old('email', $contact->email)}}">
                        <div class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                        </div>

                        </div>
                    <button type="submit" class="btn btn-primary">SAVE</button>

                </form>
            </div>
        </div>

    </div>


    @endsection
