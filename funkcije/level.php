


<?php

include ("functions.php");
include ("../include/baze.php");


if (loggedin()){
    $u_id = $_GET ['id'];
    $u_lvl = $_GET['user_level'];

    if ($u_lvl ==1){
        mysqli_query($con, "UPDATE Korisnici SET user_level=2 WHERE id='$u_id'");
        header('location: ../profil.php');
    }else if ($u_lvl == 2){
        mysqli_query($con, "UPDATE Korisnici SET user_level=3 WHERE id='$u_id'");
        header('location: ../profil.php');
    }else if ($u_lvl == 3){
    mysqli_query($con, "UPDATE Korisnici SET user_level=1 WHERE id='$u_id'");
    header('location: ../profil.php');
    }


}else{
    header("location: ../login.php");
}