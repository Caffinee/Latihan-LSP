@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>List Data Nilai Siswa</h2>
            <a href="/nilai/create" class="button-primary">Tambah Data</a>
            @if (session('Success'))
                <p clas="text-success">{{ session('Success') }}</p>
            @endif
            @if (session('Error'))
                <p class="text-danger">{{ session('Error') }}</p>
            @endif
            <table cellpadding="15" style="text-align: center;">
                <tr>
                    <th>No</th>
                    <th>Pengajar</th>
                    <th>Nama Siswa</th>
                    <th>Ulangan Harian</th>
                    <th>Ulangan Tengah Semester</th>
                    <th>Ulangan Akhir Semester</th>
                    <th>Nilai Akhir</th>
                    <th>Action</th>
                </tr>
            @foreach ($nilai as $n)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $n->mengajar->guru->nama_guru }}</td>
                    <td>{{ $n->siswa->nama_siswa }}</td>
                    <td>{{ $n->uh }}</td>
                    <td>{{ $n->uts }}</td>
                    <td>{{ $n->uas }}</td>
                    <td>{{ $n->na }}</td>
                    {{-- @if (session('user')->role == 'guru') --}}
                    <td>
                        <a href="/nilai/edit/{{ $n->id }}" class="button-warning">Edit</a>
                        <a href="/nilai/destroy/{{ $n->id }}" class="button-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                    {{-- @endif --}}
                </tr>
            @endforeach
        </table>

        </b>
    </center>
@endsection