@extends('admin.layout.app')

@section('tittle', 'Tambah contact')

@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Tambah Contact</h6>
                    <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="mb-3">
                            <label for="kontak" class="form-label">Kontak</label>
                            <input type="text" class="form-control" id="kontak" name="kontak" required>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="hari_operasional" class="form-label">Hari Buka</label>
                                    <input type="text" class="form-control" id="hari_operasional" name="hari buka"
                                        required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="hari_operasional" class="form-label">Hari Tutup</label>
                                    <input type="text" class="form-control" id="hari_operasional" name="hari tutup"
                                        required>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="jam_oprasional" class="form-label">Jam Oprasional (Buka)</label>
                                    <input type="time" class="form-control" id="jam_oprasional" name="jam_buka"
                                        required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="jam_oprasional" class="form-label">Jam Oprasional (Tutup)</label>
                                    <input type="time" class="form-control" id="jam_oprasional" name="jam_tutup"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>

        </div>


    @endsection
