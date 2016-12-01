<?php

include ("../include/baze.php");


if(isset($_POST['submit_racuni'])) {

    $racuni_id = $_POST["id"];
    $ime_prezime = $_POST["ime_prezime"];
    $ime_banke = $_POST["ime_banke"];
    $broj_racuna = $_POST["broj_racuna"];
    $stanje = $_POST["stanje"];


    mysqli_query($con, "UPDATE Racuni SET ime_prezime = '$ime_prezime', ime_banke = '$ime_banke', broj_racuna = '$broj_racuna', stanje = '$stanje' WHERE id = '$racuni_id'");
    header("location: ../5racuni.php");
}else{
    header("location: ../login.php");
}



?>