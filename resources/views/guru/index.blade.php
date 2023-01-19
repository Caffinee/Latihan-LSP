@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>List Data Guru</h2>
    </center>
            <a href="/guru/create" class="button-primary" style="margin-left: 7%;font-size: 16px;">Tambah Data Guru</a>
    <center>
            <table cellpadding="30" style="text-align: center;">
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
                @foreach($guru as $g)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $g->nip }}</td>
                    <td>{{ $g->nama_guru }}</td>
                    <td>{{ $g->jk == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                    <td>{{ $g->alamat }}</td>
                    <td>{{ $g->password }}</td>
                    <td>
                        <a href="/guru/edit/{{$g->id}}" class="button-warning" style="font-size: 16px">Edit</a>
                        <a href="/guru/destroy/{{$g->id}}" class="button-danger" onclick="return confirm('Yakin ingin dihapus?') " style="font-size: 16px">Hapus</a>
                      </td>
                </tr>
                @endforeach
            </table>
        </b>
    </center>
@endsection