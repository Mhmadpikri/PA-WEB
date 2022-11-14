<?php

require 'config2.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($db,
        "DELETE FROM contoh WHERE id='$id'");
    if($result){
        header("Location:catalog.php");
    }
}