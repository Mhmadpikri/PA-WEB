<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
    <link rel="stylesheet" href="upload.css">
</head>
<body>
    <div class="down">
        <div class="tambah">
            <h3>CATALOG</h3>
        </div class="form">
            <form action="" method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>
                            Tanggal upload
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <?=date("d-m-Y")?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nama Catalog
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <input type="text" name="nama"> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Upload Gambar
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <input type="file" name="foto">
                        </td>
                    </tr>
                </table>
            
                    <input type="hidden" name="upload" value=<?=date("d-m-Y")?>>
                    <input class="submit" type="submit"  name="submit">
            </form>
    </div>
</body>
</html>

<?php
    require 'config2.php';

    if(isset($_POST['submit'])){
        $upload= $_POST['upload'];
        $nama = $_POST['nama'];

        $foto = $_FILES['foto']['name'];

        // Memisahkan nama file dengan tipe file
        $x = explode('.',$foto);
        $ekstensi = strtolower(end($x));
        $foto_baru = "$nama.$ekstensi";

        // $ukuran = $_FILES['gambar']['size'];

        $tmp = $_FILES['foto']['tmp_name'];

        if(move_uploaded_file($tmp, "foto/$foto_baru")){

            $query = "INSERT INTO contoh (upload, foto) VALUES ('$upload', '$foto_baru')";
            $result = $db->query($query);
    
            if($result){
                header("Location:catalog.php");
            }else{
                echo "gagal kirim";
            }
        }
    }

?>