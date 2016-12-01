<?php

include ("functions.php");
include ("../include/baze.php");

    if(isset($_POST['submit_korisnici'])) {
        $ime = $_POST["ime"];
        $prezime = $_POST["prezime"];
        $username = $_POST['korisnicko_ime'];
        $password = $_POST['password'];

        if (empty($username) or empty($password) or empty($ime) or empty($prezime)) {
            echo '<h1>Polja su prazna!</h1>';
            header("location: ../index.php");
        }else {
            mysqli_query($con, "INSERT INTO Korisnici (id, ime, prezime, korisnicko_ime, password, type123, user_level) VALUES('', '$ime', '$prezime', '$username', '$password','d', '3')");
            header("location: ../profil.php");
        }
    }



if(isset($_POST['submit_update_korisnici'])) {
    $id = $_POST["id"];
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    $username = $_POST['korisnicko_ime'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $level= $_POST['level'];

    if (empty($id) or empty($username) or empty($password) or empty($ime) or empty($prezime)) {
        echo '<h1>Polja su prazna!</h1>';
        header("location: ../index.php");
    }else {
        mysqli_query($con, "UPDATE Korisnici SET ime = '$ime', prezime = '$prezime', korisnicko_ime = '$username', password = '$password', type123 = '$status', user_level = '$level' WHERE id = '$id'");
        header("location: ../profil.php");
    }
}


?>