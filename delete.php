<?php

require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($query,
        "DELETE FROM boking WHERE id='$id'");
    if($result){
        header("Location:tampilan.php");
    }
}