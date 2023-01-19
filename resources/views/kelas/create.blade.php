@extends('main.layout')
@section('content')
    <center>
        <h2>Tambah Data Kelas</h2>
        <a href="/kelas/index" class="button-primary">Kembali</a>
        <form action="/kelas/store" method="post">
        @csrf
        <table width="50%">
            <tr>
                <td class="bar">Kelas</td>
                <td class="bar"><input type="text" name="nama_kelas"></td>
            </tr>
            <tr>
                <td class="bar">Jurusan</td>
                <td class="bar">
                    <select name="jurusan_id">
                        <option></option>
                        @foreach ($jurusan as $j)
                            <option value="{{ $j->id }}">{{ $j->nama_jurusan }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><button class="button-primary" type="submit">Simpan</button></center>
                </td>
            </tr>
        </table>
        </form>
    </center>
@endsection