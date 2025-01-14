@extends('admin.layout.app')

@section('title','Admin Testimonial')

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
                    <table class="table" id="testimonial" >
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th scope="col" class="ps-0">NO</th>
                                <th scope="col" class="text-center">NAMA</th>
                                <th scope="col" class="text-center">EMAIL</th>
                                <th scope="col" class="text-center">PESAN</th>
                                <th scope="col" class="text-center">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                    @foreach($testimons as $testimon)
                        <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$testimon->nama}}</td>
                        <td>{{$testimon->email}}</td>
                        <td>{{$testimon->deskripsi}}</td>
                        <td>
                            <a href="{{ route('testimon.delete', $testimon->id_testimonial) }}" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-primary btn-sm">Hapus</a>

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
        $('#testimon').DataTable();
    });
</script>

@endsection
