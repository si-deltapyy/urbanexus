<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Penduduk</title>
</head>
<body>
    <h1>Edit Data Penduduk</h1>
    <form action="{{ route('penduduk.update', $penduduk->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="{{ $penduduk->nama }}"><br><br>
        
        <label for="nik">NIK</label>
        <input type="text" name="nik" id="nik" value="{{ $penduduk->nik }}"><br><br>
        
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ $penduduk->tanggal_lahir }}"><br><br>
        
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ $penduduk->tempat_lahir }}"><br><br>
        
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="Laki-laki" {{ $penduduk->jenis_kelamin === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="Perempuan" {{ $penduduk->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select><br><br>
        
        <label for="no_rt">Nomor RT</label>
        <input type="number" name="no_rt" id="no_rt" value="{{ $penduduk->no_rt }}"><br><br>
        
        <label for="no_rw">Nomor RW</label>
        <input type="number" name="no_rw" id="no_rw" value="{{ $penduduk->no_rw }}"><br><br>
        
        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="Hidup" {{ $penduduk->status === 'Hidup' ? 'selected' : '' }}>Hidup</option>
            <option value="Meninggal" {{ $penduduk->status === 'Meninggal' ? 'selected' : '' }}>Meninggal</option>
        </select><br><br>
        
        <label for="no_kk">Nomor KK</label>
        <input type="text" name="no_kk" id="no_kk" value="{{ $penduduk->no_kk }}"><br><br>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
