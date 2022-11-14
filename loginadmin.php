<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>login</title>
</head>
<body>
    
    <form action="" method="post">
    <h3>Login Admin</h3>
        <div class="inputbox">
            <label for="">Username</label><br>
            <input type="text" name="user"><br><br>
        </div>
        <div class="inputbox">
            <label for="">Password</label><br>
            <input type="password" name="password"><br><br>
        </div>
        <div class="inputbox">     
            <input type="submit" name="login" value="login">
        </div>
    </p>
    </form>



</body>
</html>

<?php
    session_start();
    require 'config3.php';

    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $password = $_POST['password'];

        $query = "SELECT * FROM pemilik 
                WHERE user='$user'";
        $result = $db->query($query);
        $row = mysqli_fetch_array($result);
        $username = $row['username'];

        if($password== $row['pasw']){
            $_SESSION['login'] = true;

            echo "<script>
                    alert('SELAMAT DATANG $username');
                    document.location.href = 'admin2.php';
                    </script>";
        }else{
            echo "<script>
                    alert('password yang anda masukkan salah !!!');
                    document.location.href = 'loginadmin.php';
                    </script>";
        }
    }