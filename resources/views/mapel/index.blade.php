@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>List Data Pelajaran</h2>
            <a href="/mapel/create" class="button-primary">Tambah Data</a>
            @if(session('success'))
            <p class="text-success">{{ session('success') }}</p>
            @endif
            @if( session('error'))
            <p class="text-danger">{{ session('error') }}</p>
            @endif

            <table cellpadding="30" style="text-align: center;">
                <tr>
                    <th>NO</th>
                    <th>Mata Pelajaran</th>
                    <th>Action</th>
                </tr>
                @foreach ($mapel as $m)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $m->nama_mapel }}</td>
                        <td colspan="2">
                            <a href="/mapel/edit/{{ $m->id }}" class="button-warning">Edit</a>
                            <a href="/mapel/destroy/{{ $m->id }}" class="button-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </b>
    </center>
@endsection