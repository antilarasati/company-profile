@extends('admin.layout.app')

@section('tittle','Tambah about')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Tambah About</h6>
                <form action="{{route('about.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="tahun_berdiri" class="form-label">Tahun Berdiri</label>
                        <input type="text" class="form-control" id="tahun_berdiri" name="tahun_berdiri" required>
                    </div>

                    <div class="mb-3">
                        <label for="latar_belakang" class="form-label">Latar Belakang</label>
                        <input type="text" class="form-control" id="latar_belakang" name="latar_belakang" required>
                    </div>

                    <div class="mb-3">
                        <label for="visi" class="form-label">Visi</label>
                        <input type="text" class="form-control" id="visi" name="visi" required>
                    </div>

                    <div class="mb-3">
                        <label for="misi" class="form-label">Misi</label>
                        <input type="text" class="form-control" id="misi" name="misi" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>

    </div>


    @endsection