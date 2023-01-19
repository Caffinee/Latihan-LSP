@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>List Data Siswa</h2>
            <a href="/siswa/create" class="button-primary">Tambah Data</a>
            @if (session('Success'))
                <p class="text-success">{{ session('Success') }}</p>
            @endif
            @if (session('error'))
            <p class="text-danger">{{ session('error') }}</p>
            @endif
            <table cellpadding="30" style="text-align: center;">
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Kelas</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
                @foreach ($siswa as $s)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $s->nis }}</td>
                    <td>{{ $s->nama_siswa }}</td>
                    <td>{{ $s->jk == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                    <td>{{ $s->alamat }}</td>
                    <td>{{ $s->kelas->nama_kelas }}</td>
                    <td>{{ $s->password }}</td>
                    <td>
                        <a href="/siswa/edit/{{ $s->id }}" class="button-warning">Edit</a>
                        <a href="/siswa/destroy/{{ $s->id }}" class="button-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>   
                @endforeach
            </table>
        </b>
    </center>
@endsection