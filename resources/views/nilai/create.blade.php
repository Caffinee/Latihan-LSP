@extends('main.layout')
@section('content')
    <center>
        <h2>Tambah Data Nilai</h2>
        <a href="/nilai/index" class="button-primary">Kembali</a>
        <form action="/nilai/store" method="post">
        @csrf
        <table width="50%">
            <tr>
                <td class="bar">Pengajar</td>
                <td class="bar">
                    <select name="mengajar_id">
                        <option></option>
                        @foreach ($mengajar as $m)
                            <option value="{{ $m->id}}">{{ $m->guru->nama_guru }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>    
            <tr>
                <td class="bar">Siswa</td>
                <td class="bar">
                    <select name="siswa_id">
                        <option></option>
                        @foreach ($siswa as $s)
                            <option value="{{ $s->id}}">{{ $s->nama_siswa }}</option>
                        @endforeach
                    </select>
                </td>    

            </tr>
            <tr>    
                <td class="bar">Ulangan Harian</td>
                <td class="bar"><input type="number" name="uh"></td>
            </tr>
            <tr>    
                <td class="bar">Ulangan Tengah Semester</td>
                <td class="bar"><input type="number" name="uts"></td>
            </tr>
            <tr>    
                <td class="bar">Ulangan Akhir Semester</td>
                <td class="bar"><input type="number" name="uas"></td>
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