<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Dokter</title>
    <link rel="stylesheet" href="../css/dokter.css">
</head>
<body>

    <nav>
        <div class="kiri">
            <img src="../images/halodoc-logo.webp" alt="">
            <div class="menu">
                <ul>
                    <li><a href="" class="active">Beranda</a></li>
                    <li><a href="">Konsultasi Dokter</a></li>
                    <li><a href="">Transaksi Apotik</a></li>
                    <li><a href="">Pendaftaran Rumah Sakit</a></li>
                </ul>
            </div>
            <div class="kanan">
                <img src="../images/icon profile.png" alt="">
                <h3>Hi, <span>Admin</span>!</h3>
            </div>
        </div>
    </nav>

    <div class="subnav">
        <h4><a href="dashboard-admin.html">Beranda</a> &ensp; > &ensp; Kelola Dokter</h4>
    </div>

    <div class="container">
        <div class="submenu">
            <a href=""><h3 class="active">Kelola Dokter Terdaftar</h3></a>
            <a href="kategori.html"><h3 class="hover">Kelola Kategori</h3></a>
        </div>
        <div class="tambah-cari">
            <a href="form-dokter.html"><button>+ Daftarkan dokter baru</button></a>
            <div class="cari">
                <input type="search" placeholder="Cari dokter berdasarkan nama atau NIP" name="search-dokter">
                <button>Cari</button>
            </div>
        </div>

        <table>
            <thead>
                <th>Nomor SIP</th>
                <th>Nama dokter</th>
                <th>Kategori</th>
                <th>Pengalaman</th>
                <th>Harga</th>
                <th>Bidang Keahlian</th>
                <th>Alumnus</th>
                <th>Tempat praktik</th>
                <th>Nomor STR</th>
                <th>Password</th>
                <th>Foto</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <tr>
                    <td>9080380</td>
                    <td>ramadhani safitri</td>
                    <td>psikiater</td>
                    <td>10 tahun</td>
                    <td>50.000</td>
                    <td>gangguan kepribadian</td>
                    <td>kedokteran UI</td>
                    <td>RS awal bros</td>
                    <td>898498508</td>
                    <td>behelhijau</td>
                    <td><img src="../images/unnamed.jpg" alt=""></td>
                    <td>
                        <button class="edit"><img src="../images/icon edit.png" alt=""></button>
                        <button class="hapus"><img src="../images/icon hapus.png" alt=""></button>
                    </td>
                </tr>
                
            </tbody>
        </table>

    </div>
    
</body>
</html>