@extends('.admin.layout.app')

@section('title','Admin Edit Home')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit Home</h6>
                <form action="{{route('home.update', $home->id_home)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama_resto" class="form-label">NAMA RESTO</label>
                        <input type="text" class="form-control" id="nama_resto" name="nama_resto" value="{{old('nama_resto', $home->nama_resto)}}">
                        <div class="text-danger">
                            @error('nama_resto')
                            {{$message}}
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="tagline" class="form-label">TAGLINE</label>
                        <input type="text" class="form-control" id="tagline" name="tagline" value="{{old('tagline', $home->tagline)}}">
                        <div class="text-danger">
                        @error('tagline')
                        {{$message}}
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slogan" class="form-label">SLOGAN</label>
                        <input type="text" class="form-control" id="slogan" name="slogan" value="{{old('slogan', $home->slogan)}}">
                        <div class="text-danger">
                        @error('slogan')
                        {{$message}}
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">DESKRIPSI</label>
                        <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control">{{ old('deskripsi', $home->deskripsi) }}</textarea>
                        <div class="text-danger">
                            @error('deskripsi')
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