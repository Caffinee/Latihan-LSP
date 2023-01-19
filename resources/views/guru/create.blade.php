@extends('main.layout')
@section('content')
    <center>
        <br>
            <h2>Tambah Data Guru</h2>
            <a href="/guru/index" class="button-primary">Batal</a>
            <form method="post" action="/guru/store">
                @csrf
                <table width="50%">
                    <tr>
                        <td class="bar">NIP</td>
                        <td class="bar">
                            <input type="number" name="nip">
                        </td>
                    </tr>
                    <tr>
                        <td class="bar">Nama guru</td>
                        <td class="bar">
                            <input type="text" name="nama_guru">
                        </td>
                    </tr>
                    <tr>
                        <td class="bar">Jenis Kelamin</td>
                        <td class="bar">
                            <input type="radio" name="jk" value="L">Laki-Laki
                            <input type="radio" name="jk" value="P">Perepmuan
                        </td>
                    </tr>
                    <tr>
                        <td class="bar">Alamat</td>
                        <td class="bar">
                            <input type="text" name="alamat">
                        </td>
                    </tr>
                    <tr>
                        <td class="bar">Password</td>
                        <td class="bar">
                            <input type="password" name="password">
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