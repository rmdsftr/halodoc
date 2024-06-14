<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kategori</title>
    <link rel="stylesheet" href="../css/form-kategori.css">
</head>
<body>

    <form action="../submit-kategori.php" method="post" enctype="multipart/form-data">
        <label for="">Kode Kategori</label>
        <input type="text" name="kode">

        <label for="">Spesialisasi</label>
        <input type="text" name="spesialisasi">

        <label for="">Unggah icon</label>
        <input type="file" name="icon" class="icon">

        <button type="submit">Simpan</button>
        <a href="kategori.php">Kembali</a>
    </form>
    
</body>
</html>