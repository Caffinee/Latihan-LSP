@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>Tambah Mata Pelajaran</h2>
            <a href="/mapel/index" class="button-primary">Kembali</a>
            <form action="/mapel/store" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">Nama Mata Pelajaran</td>
                    <td class="bar"><input type="text" name="nama_mapel"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button class="button-primary" type="submit">Simpan</button></center>
                    </td>
                </tr>
            </table>
            </form>
        </b>
    </center>
@endsection