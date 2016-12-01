<?php

include ("../include/baze.php");


if(isset($_POST['submit_radnici'])) {


    $radnici_id = $_POST["id"];
    $datum = $_POST["datum"];
    $ime_prezime = $_POST["ime_prezime"];
    $broj_sati = $_POST["broj_sati"];
    $plata = $_POST["plata"];
    $komentar = $_POST["komentar"];


    mysqli_query($con, "UPDATE Radnici SET datum = '$datum', ime_prezime = '$ime_prezime', broj_sati = '$broj_sati', plata = '$plata', komentar = '$komentar' WHERE id = '$radnici_id'");
    header("location: ../1radnici.php");
}else{
    header("location: ../login.php");
}



?>