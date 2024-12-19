@extends('admin.layout.app')

@section('tittle','Tambah home')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Tambah Home</h6>
                <form action="{{route('home.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_resto" class="form-label">Nama Resto</label>
                        <input type="text" class="form-control" id="nama_resto" name="nama_resto" required>
                    </div>

                    <div class="mb-3">
                        <label for="tagline" class="form-label">Tagline</label>
                        <input type="text" class="form-control" id="tagline" name="tagline" required>
                    </div>

                    <div class="mb-3">
                        <label for="slogan" class="form-label">Slogan</label>
                        <input type="text" class="form-control" id="slogan" name="slogan" required>
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>

    </div>


    @endsection