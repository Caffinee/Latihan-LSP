@extends('main.layout')
@section('content')
    <center>
    <h2>List Data Jurusan</h2>
    </center>
    <a href="/jurusan/create" class="button-primary" style="margin-left: 28%;font-size: 16px;">Tambah Data Jurusan</a>
    <center>
    <table cellpadding="30" style="text-align: center;">
        <tr>
            <th>No</th>
            <th>Nama Jurusan</th>
            <th>Action</th>
        </tr>
        @foreach($jurusan as $j)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $j->nama_jurusan }}</td>
            <td>
                <b>
                <a href="/jurusan/edit/{{ $j->id }}" class="button-warning" style="font-size: 16px">Edit</a>
                <a href="/jurusan/destroy/{{ $j->id }}" class="button-danger" style="font-size: 16px" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </b>
            </td>
        </tr>
        @endforeach
    </table>
    </center>
@endsection