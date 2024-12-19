@extends('.admin.layout.app')

@section('title','Admin tim')

@section('content')
<div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                <a href="{{route('tim.tambah')}}" class="btn btn-primary btn-sm">Tambah</a>
                    <table class="table text-nowrap align-middle mb-0" id="tim" >
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th scope="col" class="ps-0">NO</th>
                                <th scope="col" class="text-center">NAMA</th>
                                <th scope="col" class="text-center">FOTO</th>
                                <th scope="col" class="text-center">JABATAN</th>
                                <th scope="col" class="text-center">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                    @foreach($tims as $tim)

                        <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td  class="text-center">{{$tim->nama}}</td>
                        <td>
                        <img src="{{ asset('storage/' . $tim->foto) }}" alt="" height="50">
                        </td>
                        <td  class="text-center">{{$tim->jabatan}}</td>
                        <td class="text-center">
                            <a href="{{route('tim.edit', $tim->id_tim)}}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{route('tim.delete', $tim->id_tim)}}" class="btn btn-primary btn-sm">Hapus</a>
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
        $('#homes').DataTable();
    });
</script>

@endsection