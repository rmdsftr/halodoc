<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kategori</title>
    <link rel="stylesheet" href="../css/form-alumnus.css">
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
            <select name="" id="">
                <option value="S1">S1 - Sarjana</option>
                <option value="S2">S2 - Magister</option>
                <option value="S3">S3 - Doktor</option>
                <option value="Professor">Professor</option>
            </select>
            <input type="text" placeholder="Perguruan tinggi">
            <button>Simpan</button>
        </form>
        <table>
            <thead>
                <th>Pilih</th>
                <th>ID alumnus</th>
                <th>Jenjang pendidikan</th>
                <th>Perguruan Tinggi</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>101</td>
                    <td>S2 - Magister</td>
                    <td>Universitas Indonesia</td>
                    <td>
                        <button class="edit"><img src="../images/icon edit.png" alt=""></button>
                        <button class="hapus"><img src="../images/icon hapus.png" alt=""></button>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>102</td>
                    <td>S1 - Sarjana</td>
                    <td>Universitas Andalas</td>
                    <td>
                        <button class="edit"><img src="../images/icon edit.png" alt=""></button>
                        <button class="hapus"><img src="../images/icon hapus.png" alt=""></button>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>103</td>
                    <td>S1 - Sarjana</td>
                    <td>Universitas Diponegoro</td>
                    <td>
                        <button class="edit"><img src="../images/icon edit.png" alt=""></button>
                        <button class="hapus"><img src="../images/icon hapus.png" alt=""></button>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>104</td>
                    <td>S1 - Sarjana</td>
                    <td>Universitas Indonesia</td>
                    <td>
                        <button class="edit"><img src="../images/icon edit.png" alt=""></button>
                        <button class="hapus"><img src="../images/icon hapus.png" alt=""></button>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>105</td>
                    <td>S2 - Magister</td>
                    <td>Universitas Padjajaran</td>
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