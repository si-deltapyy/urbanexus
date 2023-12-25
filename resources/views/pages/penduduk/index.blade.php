<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penduduk</title>
</head>
<body>

    <h2>Data Penduduk</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <h3>Tambah Penduduk</h3>
    <form action="{{ route('penduduk.store') }}" method="post">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <label for="nik">NIK:</label>
        <input type="text" name="nik" required>
        <br>
        <label for="no_kk">No KK:</label>
        <input type="text" name="no_kk" required>
        <br>
        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" required>
        <br>
        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" name="tempat_lahir" required>
        <br>
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br>
        <label for="status">Status:</label>
        <select name="status" required>
            <option value="Hidup">Hidup</option>
            <option value="Meninggal">Meninggal</option>
        </select>
        <br>
        <label for="no_rt">RT:</label>
        <input type="number" name="no_rt" required>
        <br>
        <label for="no_rw">RW:</label>
        <input type="number" name="no_rw" required>
        <br>
        <button type="submit">Tambah Penduduk</button>
    </form>

    <h3>Data Penduduk</h3>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>NIK</th>
            <th>No KK</th>
            <th>No RT</th>
            <th>No RW</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach($penduduk as $p)
        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->nik }}</td>
            <td>{{ $p->no_kk }}</td>
            <td>{{ $p->no_rt }}</td>
            <td>{{ $p->no_rw }}</td>
            <td>{{ $p->tanggal_lahir }}</td>
            <td>{{ $p->tempat_lahir }}</td>
            <td>{{ $p->jenis_kelamin }}</td>
            <td>{{ $p->umur }}</td>
            <td>{{ $p->status }}</td>
            <td>
            <a href="{{ route('penduduk.edit', $p->id) }}">Edit</a>
            <form action="{{ route('penduduk.destroy', $p->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
        </tr>
        @endforeach
    </table>
    <div class="container">
        <h1>Statistik Umur Penduduk</h1>

        <ul>
            <li>1-5 Tahun (Balita): {{ $balita }}</li>
            <li>6-12 Tahun (Anak-anak): {{ $anak_anak }}</li>
            <li>13-20 Tahun (Remaja): {{ $remaja }}</li>
            <li>21-50 Tahun (Dewasa): {{ $dewasa }}</li>
            <li>> 50 Tahun (Lansia): {{ $lansia }}</li>
        </ul>
    </div>

</body>
</html>
