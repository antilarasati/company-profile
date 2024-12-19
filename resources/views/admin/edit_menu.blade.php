@extends('.admin.layout.app')

@section('title','Admin Edit Menu')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit Menu</h6>
                <form action="{{route('menu.update', $menu->id_menu)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama" class="form-label">NAMA</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama', $menu->nama)}}">
                        <div class="text-danger">
                            @error('nama')
                            {{$message}}
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">DESKRIPSI</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{old('deskripsi', $menu->deskripsi)}}">
                        <div class="text-danger">
                        @error('deskripsi')
                        {{$message}}
                        @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="harga_menu" class="form-label">HARGA MENU</label>
                        <input type="text" class="form-control" id="harga_menu" name="harga_menu" value="{{old('harga_menu', $menu->harga_menu)}}">
                        <div class="text-danger">
                        @error('harga_menu')
                        {{$message}}
                        @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label">FOTO</label>
                        <input type="file" class="form-control" id="foto" name="foto" value="{{old('foto', $menu->foto)}}">
                        <div class="text-danger">
                        @error('foto')
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