@extends('admin.layout.app')

@section('title','Tambah About')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Tambah About</h6>
                <form action="{{route('about.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="foto1" class="form-label">Foto1</label>
                        <input type="file" class="form-control" id="foto1" name="foto1" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto2" class="form-label">Foto2</label>
                        <input type="file" class="form-control" id="foto2" name="foto2" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto3" class="form-label">Foto3</label>
                        <input type="file" class="form-control" id="foto3" name="foto3" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto4" class="form-label">Foto4</label>
                        <input type="file" class="form-control" id="foto4" name="foto4" required>
                    </div>
                    <div class="mb-3">
                        <label for="tahun_berdiri" class="form-label">Tahun Berdiri</label>
                        <input type="text" class="form-control" id="tahun_berdiri" name="tahun_berdiri" required>
                    </div>

                    <div class="mb-3">
                        <label for="latar_belakang" class="form-label">Latar Belakang</label>
                        <textarea name="latar_belakang" id="latar_belakang" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="visi" class="form-label">Visi</label>
                        <textarea name="visi" id="visi" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="misi" class="form-label">Misi</label>
                        <textarea name="misi" id="misi" rows="5" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>

    </div>


    @endsection
