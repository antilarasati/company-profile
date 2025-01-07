@extends('.admin.layout.app')

@section('title','Admin Contact')

@section('content')
<div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    @if ($contacts->isEmpty())
                    <a href="{{route('contact.tambah')}}" class="btn btn-primary btn-sm">Tambah</a>
                    @endif
                    <table class="table text-nowrap align-middle mb-0" id="contact" >
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th scope="col" class="ps-0">NO</th>
                                <th scope="col" class="text-center">ALAMAT</th>
                                <th scope="col" class="text-center">KONTAK</th>
                                <th scope="col" class="text-center">HARI OPRASIONAL</th>
                                <th scope="col" class="text-center">JAM OPRASIONAL</th>
                                <th scope="col" class="text-center">EMAIL</th>
                                <th scope="col" class="text-center">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                    @foreach($contacts as $contact)

                        <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td  class="text-center">{{$contact->alamat}}</td>
                        <td  class="text-center">{{$contact->kontak}}</td>
                        <td  class="text-center">{{$contact->hari_oprasional}}</td>
                        <td  class="text-center">{{$contact->jam_oprasional}}</td>
                        <td  class="text-center">{{$contact->email}}</td>
                        <td>
                            <a href="{{route('contact.edit', $contact->id_contact)}}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{route('contact.delete', $contact->id_contact)}}" class="btn btn-primary btn-sm">Hapus</a>
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
        $('#contact').DataTable();
    });
</script>

@endsection
