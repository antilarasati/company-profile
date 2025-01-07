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
                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{old('jabatan', $tim->jabatan)}}">
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
