@extends('.admin.layout.app')

@section('title','Admin about')

@section('content')
<div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                <a href="{{route('about.tambah')}}" class="btn btn-primary btn-sm">Tambah</a>
                    <table class="table text-nowrap align-middle mb-0" id="about" >
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th scope="col" class="ps-0">NO</th>
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
                        <td  class="text-center">{{$about->tahun_berdiri}}</td>
                        <td  class="text-center">{{$about->latar_belakang}}</td>
                        <td  class="text-center">{{$about->visi}}</td>
                        <td  class="text-center">{{$about->misi}}</td>
                        <td>
                            <a href="{{route('about.edit', $about->id_about)}}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{route('about.delete', $about->id_about)}}" class="btn btn-primary btn-sm">Hapus</a>
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