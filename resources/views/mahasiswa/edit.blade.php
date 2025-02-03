<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>

<body>
    <h2>Edit Mahasiswa</h2>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}" required>
        <br>

        <label>NIM:</label>
        <input type="text" name="nim" value="{{ $mahasiswa->nim }}" required>
        <br>

        <label>Jurusan:</label>
        <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}" required>
        <br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('mahasiswa.index') }}">Kembali</a>
</body>

</html>
