@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>Tambah Data</h2>
            <a href="/mengajar/index" class="button-primary">Kembali</a>
            <form action="/mengajar/store" method="post">
            @csrf
            <table width="35%">
                <tr>
                    <td class="bar">Nama guru</td>
                    <td class="bar">
                        <select name="guru_id">
                            <option></option>
                            @foreach ($guru as $g)
                                <option value="{{ $g->id }}">{{ $g->nama_guru }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Nama Mapel</td>
                    <td class="bar">
                        <select name="mapel_id">
                        @foreach ($mapel as $m)
                            <option value="{{ $m->id }}">{{ $m->nama_mapel }}</option>
                        @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Kelas</td>
                    <td class="bar">
                        <select name="kelas_id">
                        @foreach ($kelas as $k)
                            <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                        @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button type="submit" class="button-primary">Simpan</button></center>
                    </td>
                </tr>
            </table>
            </form>
        </b>
    </center>
@endsection