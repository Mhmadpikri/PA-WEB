<!-- untuk update data atau edit data -->

<?php

    require 'config.php'; //menghentikan codingan dibawwahnya ketika ada eror sedangkan INCLUDE tetap jalan

    //untuk menangkap url yang dikirimkan
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    //tampilkan value inputan dari id
    $result = mysqli_query($query,
        "SELECT * FROM boking WHERE id='$id'");
    $row = mysqli_fetch_array($result);

    if(isset($_POST['Kirim'])){
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $tglboking = $_POST['tglboking'];
        $jk = $_POST['jk'];
        $metode = $_POST['metode'];

        //untuk menampung ke database
        $result = mysqli_query($db, 
        "UPDATE boking SET 
            nama='$nama', 
            umur='$umur', 
            tglboking='$tglboking',
            jk='$jk',
            metode='$metode'
        WHERE id='$id'");  //butuh variable untuk conect pake $db
        
        if($result){
            echo "
                <script>
                    alert('selamat anda berhasil update data');
                    document.location.href = 'tampilan.php';
                </script>
                ";
        }else {
            echo "
                <script>
                    alert('Anda gagal update, silahakan cek data anda');
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
    <title>Update</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <div class = "drop">
        <form action = "" method="POST" class = "drop">
                <table>
                    <tr>
                        <td class="judul" colspan="3">FORM FOR UPDATE</td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nama" placeholder= "masukkan nama"  value=<?=$row['nama']?>></td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td><input type="number " name="umur" placeholder= "masukkan umur"  value=<?=$row['umur']?>></td>
                    </tr>
                    <tr>
                        <td>Tanggal Boking</td>
                        <td>:</td>
                        <td><input type="date" name="tglboking" value=<?=$row['tglboking']?> ></td>
                    </tr>
                    <tr>
                        <td>jenis kelamin</td>
                        <td>:</td>
                        <td><select name= "jk" id="" value=<?=$row['jk']?>>
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Metode Pembayaran</td>
                        <td>:</td>
                        <td><select name= "metode" id="" value=<?=$row['metode']?>>
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