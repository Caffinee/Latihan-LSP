@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>Tambah Data</h2>
            <a href="/mengajar/index" class="button-primary">Kembali</a>
            <form action="/mengajar/update/{{ $mengajar->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">Nama guru</td>
                    <td class="bar">
                        <select name="guru_id">
                            <option></option>
                            @foreach ($guru as $g)
                                @if ($mengajar->guru_id == $g->id)
                                <option value="{{ $g->id }}" selected>{{ $g->nama_guru }}</option>
                                @else
                                <option value="{{ $g->id }}">{{ $g->nama_guru }}</option>
                                @endif
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Nama Mapel</td>
                    <td class="bar">
                        <select name="mapel_id">
                        @foreach ($mapel as $m)
                        @if ($mengajar->mapel_id == $m->id)
                        <option value="{{ $m->id }}" selected>{{ $m->nama_mapel }}</option>
                        @else
                        <option value="{{ $m->id }}">{{ $m->nama_mapel }}</option>
                        @endif
                        @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Kelas</td>
                    <td class="bar">
                        <select name="kelas_id">
                        @foreach ($kelas as $k)
                        @if ($mengajar->kelas_id == $k->id)
                        <option value="{{ $k->id }}" selected>{{ $k->nama_kelas }}</option>
                        @else
                        <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                        @endif
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