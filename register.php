<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>REGISTRASI</title>
</head>
<body>

    <form action="" method="post">
    <h3>Registrasi akun</h3>
        <div class="inputbox">
            <label for="">Email</label><br>
            <input type="text" name="email"><br><br>
        </div>
        <div class="inputbox">
            <label for="">username</label><br>
            <input type="text" name="username"><br><br>
        </div>
        <div class="inputbox">
            <label for="">No. Telpon</label><br>
            <input type="text" name="telpon"><br><br>
        </div>
        <div class="inputbox">
            <label for="">password</label><br>
            <input type="password" name="password"><br><br>
        </div>
        <div class="inputbox">
            <label for="">Konfirmasi Password</label><br>
            <input type="password" name="konfirmasi"><br><br>
        </div>
        <div class="inputbox">
            <input type="submit" name="regis" value="Registrasi">
        </div>
        <p>Sudah punya akun ?
        <a href="login.php">login</a>
    </p>
    </form>


</body>
</html>

<?php
    require 'config3.php';
    if(isset($_POST['regis'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $telpon = $_POST['telpon'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];

        // cek username telah digunakan atau belum
        $user = $db->query("SELECT * FROM member WHERE username='$username'");

        if(mysqli_num_rows($user) > 0){
            echo "<script>
                    alert('username telah digunakan, buat yang lain')
                </script>";
        }else{

            //konfirmasi password udah bener atau belum
            if($password == $konfirmasi){

                $password = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO member (email,username,telpon,psw)
                            VALUES ('$email','$username','$telpon', '$password')";
                $result = $db->query($query);

                if($result){
                    echo "<script>
                            alert('ANDA BERHASIL MEMBUAT AKUN');
                        </script>";
                }else{
                    echo "<script>
                            alert('REGISTRASI GAGAL');
                        </script>";
                }
            }else{
                echo "<script>
                        alert('konfirmasi password salah')
                    </script>";
            }
        }
    }