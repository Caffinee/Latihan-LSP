@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>List Data Kelas</h2>
            <a href="/kelas/create" class="button-primary">Tambah Data Kelas</a>
            @if (session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @endif
            @if (session('error'))
            <p class="text-danger">{{ session('error') }}</p>
            @endif

            <table cellpadding="30" style="text-align: center;">
                <tr>
                    <th>No</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Action</th>
                </tr>
                @foreach ($kelas as $k)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $k->nama_kelas }}</td>
                    <td>{{ $k->jurusan->nama_jurusan }}</td>
                    <td>
                        <a href="/kelas/edit/{{ $k->id }}" class="button-warning">Edit</a>
                        <a href="/kelas/destroy/{{ $k->id }}" class="button-danger" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
                    </td>
                    </tr>
                @endforeach
            </table>
        </b>
    </center>
@endsection