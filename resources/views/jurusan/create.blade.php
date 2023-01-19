@extends('main.layout')
@section('content')
    <center>
    <h2>Tambah Data Jurusan</h2>
    <a href="/jurusan/index" class="button-primary">Batal</a>
    <form action="/jurusan/store" method="post">
    <table width="50%">
        @csrf<tr>
            <td class="bar">Nama Jurusan</td>
            <td class="bar">
                <input type="text" name="nama_jurusan">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <center><button class="button-primary" type="submit">Simpan</button></center>
            </td>
        </tr>
    </table>
    </center>
    </form>
@endsection