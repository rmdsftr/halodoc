<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Dokter</title>
    <link rel="stylesheet" href="../css/form-dokter.css">
</head>
<body>

    <form action="">
        <div class="kiri">
            <h4>Formulir Pendaftaran Dokter</h4>

            <label for="">Nomor SIP</label>
            <input type="text" name="sip">

            <label for="">Nomor STR</label>
            <input type="text">

            <label for="">Nama Dokter</label>
            <input type="text" name="nama" placeholder="Nama lengkap beserta gelar">

            <label for="">Spesialisasi</label>
            <select name="spesialisasi" id="">
                <option value="">Dokter Umum</option>
                <option value="">Psikiater</option>
                <option value="">Spesialis Paru</option>
            </select>

            <label for="">Biaya Konsultasi</label>
            <input type="number" name="harga" min="0">
        </div>

        <div class="tengah">

            <label for="">Pengalaman praktik</label>
            <input type="number" name="pengalaman" min="0" placeholder="Sudah berapa tahun?">

            <label for="">Bidang Keahlian</label>
            <div class="bidang">
                <a href=""><button>+</button></a>
                <p>Pilih bidang keahlian</p>
            </div>

            <label for="">Alumnus</label>
            <div class="alumnus">
                <a href=""><button>+</button></a>
                <p>Riwayat perguruan tinggi</p>
            </div>

            <label for="">Tempat Praktik</label>
            <input type="text" name="tempat">

            <label for="">Nomor telepon/WhatsApp</label>
            <input type="text" name="nomor">
        </div>

        <div class="kanan">

            <div class="profile-picture">
                <img src="../images/upload.png" alt="">
                <input type="file" name="foto" onchange="upload()" accept="image/*" class="upload">
            </div>

            <label for="">Password Akun</label>
            <input type="password" name="password" maxlength="8" placeholder="Maksimal 8 karakter">

            <label for="">Konfirmasi Password</label>
            <input type="password" placeholder="Maksimal 8 karakter">

            <button class="simpan">Simpan</button>
            <a href="dokter.html" class="kembali">Kembali</a>
        </div>
    </form>
    
</body>
</html>