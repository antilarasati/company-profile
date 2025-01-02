@extends('.admin.layout.app')

@section('title','Admin Edit About')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit About</h6>
                <form action="{{route('about.update', $about->id_about)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="foto1" class="form-label">FOTO1</label>
                        <input type="file" class="form-control" id="foto1" name="foto1" value="{{old('foto1', $about->foto1)}}">
                        <div class="text-danger">
                            @error('foto1')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="foto2" class="form-label">FOTO2</label>
                        <input type="file" class="form-control" id="foto2" name="foto2" value="{{old('foto2', $about->foto2)}}">
                        <div class="text-danger">
                            @error('foto2')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="foto3" class="form-label">FOTO3</label>
                        <input type="file" class="form-control" id="foto3" name="foto3" value="{{old('foto3', $about->foto3)}}">
                        <div class="text-danger">
                            @error('foto3')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="foto4" class="form-label">FOTO4</label>
                        <input type="file" class="form-control" id="foto4" name="foto4" value="{{old('foto4', $about->foto4)}}">
                        <div class="text-danger">
                            @error('foto4')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tahun_berdiri" class="form-label">TAHUN BERDIRI</label>
                        <input type="text" class="form-control" id="tahun_berdiri" name="tahun_berdiri" value="{{old('tahun_berdiri', $about->tahun_berdiri)}}">
                        <div class="text-danger">
                            @error('tahun_berdiri')
                            {{$message}}
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="latar_belakang" class="form-label">LATAR BELAKANG</label>
                        <textarea name="latar_belakang" id="latar_belakang" rows="5" class="form-control">{{ old('latar_belakang', $about->latar_belakang) }}</textarea>
                        <div class="text-danger">
                            @error('latar_belakang')
                            {{$message}}
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="visi" class="form-label">VISI</label>
                        <textarea name="visi" id="visi" rows="5" class="form-control">{{ old('visi', $about->visi) }}</textarea>
                        <div class="text-danger">
                            @error('visi')
                            {{$message}}
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="misi" class="form-label">MISI</label>
                        <textarea name="misi" id="misi" rows="5" class="form-control">{{ old('misi', $about->misi) }}</textarea>
                        <div class="text-danger">
                            @error('misi')
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