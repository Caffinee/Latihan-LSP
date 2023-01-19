<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>Laract Penilaian Siswa</title>
</head>
<body>
    <!-- HEADER -->
    <div class="header">
        <img src="{{ asset('/gambar/header.jpg') }}" width="100%" height="40%">
    </div>

    <!-- MENU -->
    <div class="menu">
        <b>
            <a href="/Home">Home</a>
            {{-- @if (session('user')->role == 'admin') --}}
            <a href="/guru/index">Guru</a>
            <a href="/jurusan/index">Jurusan</a>
            <a href="/kelas/index">Kelas</a>
            <a href="/siswa/index">Siswa</a>
            <a href="/mapel/index">Mata Pelajaran</a>
            <a href="/mengajar/index">Mengajar</a>
        {{-- @else --}}
        <a href="/nilai/index">Nilai</a>
        {{-- @endif --}}
        <a href="/logout">Logout</a>
        </b>
    </div>

    <!-- CONTENT -->
    @yield('content')

    <!-- FOOTER -->
    <div class="footer">
        <center>
            <p>
                &copy; {{ date('Y') }} - UJIKOM LSP
            </p>
        </center>
    </div>
</body>
</html>