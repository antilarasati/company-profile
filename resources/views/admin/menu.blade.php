@extends('.admin.layout.app')

@section('title', 'Admin Menu')

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
                    <a href="{{ route('menu.tambah') }}" class="btn btn-primary btn-sm">Tambah</a>
                    <table class="table text-nowrap align-middle mb-0" id="menu">
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th scope="col" class="ps-0">NO</th>
                                <th scope="col" class="text-center">NAMA</th>
                                <th scope="col" class="text-center">DESKRIPSI</th>
                                <th scope="col" class="text-center">HARGA MENU</th>
                                <th scope="col" class="text-center">FOTO</th>
                                <th scope="col" class="text-center">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($menus as $menu)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $menu->nama }}</td>
                                    <td>{{ Str::limit($menu->menu, 40, '...') }}</td>
                                    <td>{{ $menu->harga_menu }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $menu->foto) }}" alt="" height="50">
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('menu.edit', $menu->id_menu) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ route('menu.delete', $menu->id_menu) }}"
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
            $('#menu').DataTable();
        });
    </script>

@endsection
