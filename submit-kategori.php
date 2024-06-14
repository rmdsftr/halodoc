<?php 
    include 'koneksi.php';

    $kode = $_POST['kode'];
    $spesialisasi = $_POST['spesialisasi'];
    $icon = $_FILES['icon']['name'];

    $result = mysqli_query($conn, "SELECT id_kategori FROM kategori_dokter WHERE id_kategori='$kode'");
    if(mysqli_num_rows($result) > 0){
        echo
        "<script>
            alert ('Terdapat duplicate entry. Data tidak dapat dimasukkan');
            document.location.href='Admin/kategori.php';
        </script>";
    } else {
        move_uploaded_file($_FILES['icon']['tmp_name'], 'images/'.$icon);
        $query = mysqli_query($conn, "INSERT INTO kategori_dokter(id_kategori, spesialisasi, icon) VALUES ('$kode', '$spesialisasi','$icon')");
        if($query){
            echo
            "<script>
                alert ('Data berhasil terinput');
                document.location.href='Admin/kategori.php';
            </script>";
        } else {
            echo
            "<script>
                alert ('Data gagal terinput');
                document.location.href='Admin/kategori.php';
            </script>";
        }
    }

?>