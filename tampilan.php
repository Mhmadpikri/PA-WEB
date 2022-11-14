<!-- untuk menampilkan data dan untuk menambahkan data -->

<?php
    require 'config.php';

    $result = mysqli_query($query, "SELECT * FROM boking");

// ketika tombol cari ditekan
if(isset($_POST["cari"])){
    $key = $_POST["keyword"];
    $result = mysqli_query($query, "SELECT * FROM boking WHERE nama LIKE '%$key%'");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampilan bokingan</title>
    <link rel="stylesheet" href="edit.css">


</head>
<body>
    <div class="down" >
        <div class="tambah">
            <a href="daftar.php">TAMBAH DATA</a><br>
        </div>
            <table border="1">
                    <h3> DAFTAR BOKINGAN </h3>
                    <div class="edit">
                        <form action="" method="post">
                            <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan yang ingin dicari" autocomplete="off">
                            <button type="submit" name="cari">Search</button>
                        </form><br><br>
                    </div>
                    <tr>
                        <td text-align = "center">Nomor</td>
                        <td text-align = "center">Nama Lengkap</td>
                        <td text-align = "center">umur</td>
                        <td text-align = "center">tanggal boking</td>
                        <td text-align = "center">jenis kelamin</td>
                        <td text-align = "center">metode Pembayaran</td>
                        <th colspan='2'>action</th>  
                    </tr>
                    <?php
                        $i = 1;
                        while($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?=$i; ?></td>
                        <td><?=$row["nama"] ?></td>
                        <td><?=$row["umur"] ?></td>
                        <td><?=$row["tglboking"] ?></td>
                        <td><?=$row["jk"] ?></td>
                        <td><?=$row["metode"] ?></td>
                        <td><a href="update.php?id=<?=$row['id']?>">UPDATE</a></+td>
                        <td><a href="delete.php?id=<?=$row['id']?>">DELETE</a></td>
                    </tr>
                    </tr>
                        <?php
                        $i++;
                            }
                        ?>
            </table>
        </div>    
</body>
</html>
