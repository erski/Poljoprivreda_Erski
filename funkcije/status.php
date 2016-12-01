<?php

include ("functions.php");
include ("../include/baze.php");

if (loggedin()){
    $u_id = $_GET ['id'];
    $u_type123 = $_GET['type123'];

    if ($u_type123 =='a'){
        mysqli_query($con, "UPDATE Korisnici SET type123='d' WHERE id='$u_id'");
        header('location: ../profil.php');
    }else if ($u_type123== 'd'){
        mysqli_query($con, "UPDATE Korisnici SET type123='a' WHERE id='$u_id'");
        header('location: ../profil.php');
    }
}else{
    header("location: ../login.php");
}
