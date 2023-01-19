@extends('main.layout')
@section('content')
    <center>
        <h2>Edit Data Kelas</h2>
        <a href="/kelas/index" class="button-primary">Kembali</a>
        <form action="/kelas/update/{{ $kelas->id }}" method="post">
        @csrf
        <table width="50%">
            <tr>
                <td class="bar">Kelas</td>
                <td class="bar"><input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}"></td>
            </tr>
            <tr>
                <td class="bar">Jurusan</td>
                <td class="bar">
                    <select name="jurusan_id">
                        <option></option>
                        @foreach ($jurusan as $j)
                        @if ($kelas->jurusan_id == $j->id)
                            <option value="{{ $j->id }}" selected>{{ $j->nama_jurusan }}</option>
                        @else
                        <option value="{{ $j->id }}">{{ $j->nama_jurusan }}</option>
                        @endif
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