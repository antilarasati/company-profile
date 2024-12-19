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

                    <div class="mb-3">
                        <label for="jam_oprasional" class="form-label">JAM OPRASIONAL</label>
                        <input type="text" class="form-control" id="jam_oprasional" name="jam_oprasional" value="{{old('jam_oprasional', $contact->jam_oprasional)}}">
                        <div class="text-danger">
                        @error('jam_oprasional')
                        {{$message}}
                        @enderror
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