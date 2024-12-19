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
                        <input type="text" class="form-control" id="latar_belakang" name="latar_belakang" value="{{old('latar_belakang', $about->latar_belakang)}}">
                        <div class="text-danger">
                        @error('latar_belakang')
                        {{$message}}
                        @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="visi" class="form-label">VISI</label>
                        <input type="text" class="form-control" id="visi" name="visi" value="{{old('visi', $about->visi)}}">
                        <div class="text-danger">
                        @error('visi')
                        {{$message}}
                        @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="misi" class="form-label">MISI</label>
                        <input type="text" class="form-control" id="misi" name="misi" value="{{old('misi', $about->misi)}}">
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