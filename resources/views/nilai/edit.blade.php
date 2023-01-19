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
                        @if ($nilai->mengajar_id == $m->id)
                        <option value="{{ $m->id}}" selected>{{ $m->guru->nama_guru }}</option>
                        @else
                        <option value="{{ $m->id}}">{{ $m->guru->nama_guru }}</option>
                        @endif
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
                        @if ($nilai->siswa_id == $s->id)
                            <option value="{{ $s->id}}" selected>{{ $s->nama_siswa }}</option>
                        @else
                            <option value="{{ $s->id}}">{{ $s->nama_siswa }}</option>
                        @endif
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>    
                <td class="bar">Ulangan Harian</td>
                <td class="bar"><input type="number" name="uh" value="{{ $nilai->uh }}"></td>
            </tr>
            <tr>    
                <td class="bar">Ulangan Tengah Semester</td>
                <td class="bar"><input type="number" name="uts" value="{{ $nilai->uts }}"></td>
            </tr>
            <tr>    
                <td class="bar">Ulangan Akhir Semester</td>
                <td class="bar"><input type="number" name="uas" value="{{ $nilai->uas }}"></td>
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