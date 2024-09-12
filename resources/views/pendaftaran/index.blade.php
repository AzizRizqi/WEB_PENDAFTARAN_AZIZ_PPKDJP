<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Peserta Didik Baru</title>
    <link rel="stylesheet" href="admin/assets/css/style.css">
</head>

<body>
    <div class="info-section">
        <h1>Formulir Pendaftaran Peserta Didik Baru</h1>
        <p>
            Pusat Pelatihan Kerja Daerah (PPKD) Jakarta Pusat membuka kembali pelatihan kerja untuk meningkatkan kompetensi warga DKI Jakarta agar mampu bersaing di dunia kerja.
        </p>
        <p>Adapun Pelatihan yang diselenggarakan adalah :</p>
        <ul>
            <li>1. Operator Komputer</li>
            <li>2. Bahasa Inggris</li>
            <li>3. Desain Grafis</li>
            <li>4. Tata Boga</li>
            <li>5. Tata Busana</li>
            <li>6. Tata Graha</li>
            <li>7. Teknik Pendingin</li>
            <li>8. Teknik Komputer</li>
            <li>9. Otomotif Sepeda Motor</li>
            <li>10. Jaringan Komputer</li>
            <li>11. Barista</li>
            <li>12. Bahasa Korea</li>
            <li>13. Make Up Artist</li>
            <li>14. Multimedia - Video Editor</li>
            <li>15. Content Creator</li>
            <li>16. Web Programming</li>
        </ul>
        <p>Sebelum melanjutkan ke halaman berikutnya, pastikan syarat pendaftaran berikut sudah disiapkan:</p>
        <ul>
            <li>1. Softcopy KTP DKI Jakarta</li>
            <li>2. Sofcopy Kartu Keluarga</li>
            <li>3. Softcopy ijazah terakhir</li>
            <li>4. Softcopy Pas foto 3 x 4 (latar belakang merah)</li>
            <li>5. Softcopy Sertifikat Vaksin Covid-19</li>
            <li>6. Surat Keterangan Domisili DKI Jakarta bagi KTP Luar DKI Jakarta</li>
        </ul>
        <p><strong>* Semua persyaratan tersebut diupload di form pendaftaran</strong></p>
        <p>
            Waktu pelatihan: Daftar Segera<br>
            Hari pelatihan: Senin – Jumat<br>
            Pukul: 08.00 – 15.00 WIB
        </p>
        <p><strong>*Keputusan hasil seleksi berlaku mutlak dan tidak bisa diganggu gugat</strong></p>
    </div>

    <div class="form-container">
        <h2>Formulir Pendaftaran</h2>
        <form action="{{ route('pendaftaran.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select name="id_jurusan" id="id_jurusan" class="form-control">
                    @foreach ($jurusan as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_jurusan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="gelombang">Gelombang</label>
                <select name="id_gelombang" id="id_gelombang" class="form-control">
                    @foreach ($gelombang as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_gelombang }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap *</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" required>
            </div>

            <div class="form-group">
                <label for="nik">Nik *</label>
                <input type="number" id="nik" name="nik" required>
            </div>

            <div class="form-group">
                <label for="unggah-akta">Unggah Akta Kelahiran *</label>
                <input type="file" id="kartu_keluarga" name="kartu_keluarga" class="file-upload" required>
            </div>

            <div class="form-group">
                <label for="jenis-kelamin">Jenis Kelamin *</label>
                <select id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir *</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" required>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir *</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>

            <div class="form-group">
                <label for="pendidikan_terakhir">Pendidikan Terakhir *</label>
                <input type="text" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
            </div>

            <div class="form-group">
                <label for="nama_sekolah">Nama Sekolah *</label>
                <input type="text" id="nama_sekolah" name="nama_sekolah" required>
            </div>

            <div class="form-group">
                <label for="kejuruan">Kejuruan *</label>
                <input type="text" id="kejuruan" name="kejuruan" required>
            </div>

            <div class="form-group">
                <label for="nomer_hp">No HP *</label>
                <input type="number" id="nomer_hp" name="nomer_hp" required>
            </div>

            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="email" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="aktivitas_saat_ini">Aktivitas Saat ini *</label>
                <input type="text" id="aktivitas_saat_ini" name="aktivitas_saat_ini" required>
            </div>

            <div class="form-group">
                <label for="status">Status *</label>
                <input type="text" id="status" name="status">
            </div>

            <div class="form-group">
                <button type="submit" class="submit-btn">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
