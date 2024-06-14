<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kategori</title>
    <link rel="stylesheet" href="../css/form-bidang.css">
</head>
<body>

    <main>
        <div class="back">
            <a href=""><img src="../images/back.png" alt=""></a>
            <p>Formulir Pendaftaran Dokter</p>
            <button>Simpan pilihan</button>
        </div>
        <form action="">
            <input type="text" placeholder="ID">
            <input type="text" placeholder="Bidang keahlian">
            <button>Simpan</button>
        </form>
        <table>
            <thead>
                <th>Pilih</th>
                <th>ID Bidang</th>
                <th>Bidang Keahlian</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>101</td>
                    <td>Gangguan kepribadian</td>
                    <td>
                        <button class="edit"><img src="../images/icon edit.png" alt=""></button>
                        <button class="hapus"><img src="../images/icon hapus.png" alt=""></button>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>102</td>
                    <td>Gangguan mood</td>
                    <td>
                        <button class="edit"><img src="../images/icon edit.png" alt=""></button>
                        <button class="hapus"><img src="../images/icon hapus.png" alt=""></button>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>103</td>
                    <td>depresi</td>
                    <td>
                        <button class="edit"><img src="../images/icon edit.png" alt=""></button>
                        <button class="hapus"><img src="../images/icon hapus.png" alt=""></button>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>104</td>
                    <td>gangguan kecemasan</td>
                    <td>
                        <button class="edit"><img src="../images/icon edit.png" alt=""></button>
                        <button class="hapus"><img src="../images/icon hapus.png" alt=""></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
    
</body>
</html>