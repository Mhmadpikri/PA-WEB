<!-- untuk update data atau edit data -->

<?php

    require 'config2.php'; //menghentikan codingan dibawwahnya ketika ada eror sedangkan INCLUDE tetap jalan

    //untuk menangkap url yang dikirimkan
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    //tampilkan value inputan dari id
    $result = mysqli_query($db,
        "SELECT * FROM contoh WHERE id='$id'");
    $row = mysqli_fetch_array($result);

    if(isset($_POST['submit'])){
        $upload= $_POST['upload'];
        $foto = $_FILES['foto']['name'];

        // Memisahkan nama file dengan tipe file
        $x = explode('.',$foto);
        $ekstensi = strtolower(end($x));
        $foto_baru = "$nama.$ekstensi";

        // $ukuran = $_FILES['gambar']['size'];

        $tmp = $_FILES['foto']['tmp_name'];

        if(move_uploaded_file($tmp, "foto/$foto_baru")){

            $result = mysqli_query($db, 
        "UPDATE contoh SET 
            upload='$upload', 
            foto='$foto_baru'
        WHERE id='$id'");        
    
            if($result){
                header("Location:catalog.php");
            }else{
                echo "gagal kirim";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
    <link rel="stylesheet" href="ugambar.css">
</head>
<body>
    <div class="gambar">
        <h3>CATALOG</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <p>Tanggal upload : <?=date("d-m-Y")?></p>

            <label for="">Upload Gambar Buku : </label> <br><br>
            <input type="file" name="foto" value=<?=$row['foto']?>> <br><br>

            <input type="hidden" name="upload" value=<?=date("d-m-Y")?>>
            <input type="submit" name="submit">
        </form>
    </div>
</body>
</html>