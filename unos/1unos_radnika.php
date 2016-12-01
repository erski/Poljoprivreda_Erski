<?php

if (empty($_POST["ime_prezime"]) or empty($_POST["broj_sati"])) {
    header("location: ../index.php");
}else{
    include_once ("../include/baze.php");
    $datum=$_POST["datum"];
    $ime_prezime=$_POST["ime_prezime"];
    $b=$_POST["broj_sati"];
    $plata=$_POST["plata"];
    $k=$_POST["komentar"];

    $sql= $con->query("INSERT INTO Radnici (id, datum, ime, broj_sati, plata, komentar) VALUES ('','$datum','$ime', '$b', '$plata','$k' )");

    header("location: ../1radnici.php");
}
?>

