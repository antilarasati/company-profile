@extends('admin.layout.app')

@section('title','Tambah Tim')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Tambah Tim</h6>
                <form action="{{route('tim.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto" required>
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <select id="jabatan" name="jabatan" class="form-select" required>
                            <option value="">-- Pilih Jabatan --</option>
                            <option value="Manajer Restoran">Manajer Restoran</option>
                            <option value="Kepala Koki">Kepala Koki</option>
                            <option value="Koki">Koki</option>
                            <option value="Pelayan">Pelayan</option>
                            <option value="Kasir">Kasir</option>
                            <option value="Barista">Barista</option>
                            <option value="Pencuci Piring">Pencuci Piring</option>
                            <option value="Pramusaji">Pramusaji</option>
                            <option value="Asisten Dapur">Asisten Dapur</option>
                            <option value="Pengelola Pesanan">Pengelola Pesanan</option>
                            <option value="Staf Logistik">Staf Logistik</option>
                            <option value="Pramuniaga">Pramuniaga</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>

    </div>


    @endsection
