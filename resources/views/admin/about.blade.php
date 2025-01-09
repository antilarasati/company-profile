@extends('admin.layout.app')

@section('title','Admin About')

@section('content')
<div class="col-lg-12">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    @if ($abouts->isEmpty())
                    <a href="{{route('about.tambah')}}" class="btn btn-primary btn-sm">Tambah</a>
                    @endif
                    <table class="table" id="about" >
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th scope="col" class="ps-0">NO</th>
                                <th scope="col" class="text-center">FOTO1</th>
                                <th scope="col" class="text-center">FOTO2</th>
                                <th scope="col" class="text-center">FOTO3</th>
                                <th scope="col" class="text-center">FOTO4</th>
                                <th scope="col" class="text-center">TAHUN BERDIRI</th>
                                <th scope="col" class="text-center">LATAR BELAKANG</th>
                                <th scope="col" class="text-center">VISI</th>
                                <th scope="col" class="text-center">MISI</th>
                                <th scope="col" class="text-center">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                    @foreach($abouts as $about)

                        <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>
                            <img src="{{ asset('storage/' . $about->foto1) }}" alt="" height="50">
                        </td>
                        <td>
                            <img src="{{ asset('storage/' . $about->foto2) }}" alt="" height="50">
                        </td>
                        <td>
                            <img src="{{ asset('storage/' . $about->foto3) }}" alt="" height="50">
                        </td>
                        <td>
                            <img src="{{ asset('storage/' . $about->foto4) }}" alt="" height="50">
                        </td>
                        <td>{{$about->tahun_berdiri}}</td>
                        <td>{{ Str::limit($about->latar_belakang, 40, '...') }}</td>
                        <td>{{ Str::limit($about->visi, 40, '...') }}</td>
                        <td>{{ Str::limit($about->misi, 40, '...') }}</td>
                        <td>
                            <a href="{{route('about.edit', $about->id_about)}}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{route('about.delete', $about->id_about)}}" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-primary btn-sm">Hapus</a>
                        </td>

                    </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function() {
        $('#about').DataTable();
    });
</script>

@endsection
