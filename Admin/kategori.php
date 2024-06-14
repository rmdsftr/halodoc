<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "halodoc";
    
    $conn = mysqli_connect($server, $user, $pass, $database);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Dokter</title>
    <link rel="stylesheet" href="../css/kategori.css">
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
                <h3>Hi, <span>user's name</span>!</h3>
            </div>
        </div>
    </nav>

    <div class="subnav">
        <h4><a href="dashboard-admin.html">Beranda</a> &ensp; > &ensp; Kelola Dokter</h4>
    </div>

    <div class="container">
        <div class="submenu">
            <a href="dokter.html"><h3 class="hover">Kelola Dokter Terdaftar</h3></a>
            <a href=""><h3 class="active">Kelola Kategori</h3></a>
        </div>
        <div class="tambah-cari">
            <a href="form-kategori.php"><button>+ Tambah kategori</button></a>
            <div class="cari">
                <input type="search" placeholder="Cari berdasarkan kode atau kategori" name="search-kategori">
                <button>Cari</button>
            </div>
        </div>

        <table>
            <thead>
                <th>ID Kategori</th>
                <th>Spesialisasi</th>
                <th>Jumlah dokter</th>
                <th>Icon</th>
                <th>Aksi</th>
            </thead>
            <tbody>

                <?php 
                    $ambil = mysqli_query($conn, "SELECT * FROM kategori_dokter");
                    while($pecah = mysqli_fetch_assoc($ambil)){
                ?>
                <tr>
                    <td><?php echo $pecah['id_kategori']; ?></td>
                    <td><?php echo $pecah['spesialisasi']; ?></td>
                    <td><p>jumlah</p></td>
                    <td><img src="../images/<?php echo $pecah['icon']; ?>" alt=""></td>
                    <td>
                        <button class="edit"><img src="../images/icon edit.png" alt=""></button>
                        <button class="hapus"><img src="../images/icon hapus.png" alt=""></button>
                    </td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>

    </div>
    
</body>
</html>