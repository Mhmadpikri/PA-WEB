<?php

    require 'config.php'; //menghentikan codingan dibawwahnya ketika ada eror sedangkan INCLUDE tetap jalan

    if(isset($_POST['Kirim'])){
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $tglboking= $_POST['tglboking'];
        $jk = $_POST['jk'];
        $metode = $_POST['metode'];

        //untuk menampung ke database
        $result = mysqli_query($query, "INSERT INTO boking (nama, umur, tglboking, jk, metode) VALUES ('$nama', '$umur', '$tglboking', '$jk', '$metode')");  //butuh variable untuk conect pake $db
        
        if($result){
            echo "
                <script>
                    alert('selamat anda sudah terdaftar');
                    document.location.href = 'tampilan.php';
                </script>
                ";
        }else {
            echo "
                <script>
                    alert('Anda gagal, silahakan cek data anda');
                </script>
                ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar boking</title>
    <link rel="stylesheet" href="tampilan.css">
</head>
<body>
    <div class = "drop">
        <form action = "" method="POST" class = "drop">
                <table>
                    <tr>
                        <td class="judul" colspan="3">FORM FOR BOKING</td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nama" placeholder= "masukkan nama"></td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td><input type="number" name="umur" placeholder= "masukkan umur"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Boking</td>
                        <td>:</td>
                        <td><input type="date" name="tglboking" ></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><input type="radio" name="jk" value= "Pria">Pria
                        <input type="radio" name="jk" value= "Wanita">Wanita</td>
                    </tr>
                    <tr>
                        <td>Metode Pembayaran</td>
                        <td>:</td>
                        <td><select name= "metode" id="">
                            <option value="Cash">Cash</option>
                            <option value="Transfer">Transfer</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td  class = "input">
                        <input type="submit" name="Kirim"> 
                    </tr>
                </table>
        </form>
        
    </div>

</body>
</html>
