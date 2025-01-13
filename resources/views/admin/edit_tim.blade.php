@extends('.admin.layout.app')

@section('title','Edit Tim')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit Tim</h6>
                <form action="{{route('tim.update', $tim->id_tim)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama" class="form-label">NAMA</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama', $tim->nama)}}">
                        <div class="text-danger">
                            @error('nama')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">FOTO</label>
                        <input type="file" class="form-control" id="foto" name="foto" value="{{old('foto', $tim->foto)}}">
                        <div class="text-danger">
                        @error('foto')
                        {{$message}}
                        @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">JABATAN</label>
                        <select id="jabatan" name="jabatan" class="form-select" required>
                            <option value="">-- Pilih Jabatan --</option>
                            <option value="Manajer Restoran" <?= $tim->jabatan == 'Manajer Restoran' ? 'selected' : '' ?>>Manajer Restoran</option>
                            <option value="Kepala Koki" <?= $tim->jabatan == 'Kepala Koki' ? 'selected' : '' ?>>Kepala Koki</option>
                            <option value="Koki" <?= $tim->jabatan == 'Koki' ? 'selected' : '' ?>>Koki</option>
                            <option value="Pelayan" <?= $tim->jabatan == 'Pelayan' ? 'selected' : '' ?>>Pelayan</option>
                            <option value="Kasir" <?= $tim->jabatan == 'Kasir' ? 'selected' : '' ?>>Kasir</option>
                            <option value="Barista" <?= $tim->jabatan == 'Barista' ? 'selected' : '' ?>>Barista</option>
                            <option value="Pencuci Piring" <?= $tim->jabatan == 'Pencuci Piring' ? 'selected' : '' ?>>Pencuci Piring</option>
                            <option value="Pramusaji" <?= $tim->jabatan == 'Pramusaji' ? 'selected' : '' ?>>Pramusaji</option>
                            <option value="Asisten Dapur" <?= $tim->jabatan == 'Asisten Dapur' ? 'selected' : '' ?>>Asisten Dapur</option>
                            <option value="Pengelola Pesanan" <?= $tim->jabatan == 'Pengelola Pesanan' ? 'selected' : '' ?>>Pengelola Pesanan</option>
                            <option value="Staf Logistik" <?= $tim->jabatan == 'Staf Logistik' ? 'selected' : '' ?>>Staf Logistik</option>
                            <option value="Pramuniaga" <?= $tim->jabatan == 'Pramuniaga' ? 'selected' : '' ?>>Pramuniaga</option>
                        </select>
                        <div class="text-danger">
                        @error('jabatan')
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
