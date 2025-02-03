<h1>Lihat Mahasiswa</h1>
<p>nama: {{ $mahasiswa->nama }}</p>
<p>nim: {{ $mahasiswa->nim }}</p>
<p>jurusan: {{ $mahasiswa->jurusan }}</p>

<a href="{{ route('mahasiswa.index') }}" class="btn btn-primary">Kembali</a>
