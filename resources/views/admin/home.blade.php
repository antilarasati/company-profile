@extends('admin.layout.app')

@section('title', 'Admin Home')

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
                    @if ($homes->isEmpty())
                    <a href="{{ route('home.tambah') }}" class="btn btn-primary btn-sm">Tambah</a>
                    @endif
                    <table class="table" id="home">
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th scope="col" class="ps-0">NO</th>
                                <th scope="col" class="text-center">NAMA RESTO</th>
                                <th scope="col" class="text-center">TAGLINE</th>
                                <th scope="col" class="text-center">SLOGAN</th>
                                <th scope="col" class="text-center">DESKRIPSI</th>
                                <th scope="col" class="text-center">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($homes as $home)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $home->nama_resto }}</td>
                                    <td>{{ Str::limit($about->tagline, 40, '...') }}</td>
                                    <td>{{ Str::limit($about->slogan, 40, '...') }}</td>
                                    <td>{{ Str::limit($about->deskripsi, 40, '...') }}</td>
                                    <td>
                                        <a href="{{ route('home.edit', $home->id_home) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ route('home.delete', $home->id_home) }}"
                                            class="btn btn-primary btn-sm">Hapus</a>
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
            $('#home').DataTable();
        });
    </script>

@endsection
