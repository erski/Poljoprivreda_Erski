<?php

include ("../include/baze.php");


if(isset($_POST['submit_hemija'])) {


    $hemija_id = $_POST["id"];
    $naziv = $_POST["naziv"];
    $kolicina = $_POST["kolicina"];
    $cena = $_POST["cena"];
    $datum = $_POST["datum"];


    mysqli_query($con, "UPDATE Kupljena_hemija SET  naziv = '$naziv', kolicina = '$kolicina', cena = '$cena', datum = '$datum' WHERE id = '$hemija_id'");
    header("location: ../2hemija.php");
}else{
    header("location: ../logout.php");
}



?>