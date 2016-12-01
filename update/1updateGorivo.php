<?php

include ("../include/baze.php");


if(isset($_POST['submit_gorivo'])) {

    $gorivo_id = $_POST["id"];
    $tip = $_POST["tip"];
    $datum = $_POST["datum"];
    $kolicina = $_POST["kolicina"];
    $cena = $_POST["cena"];


    mysqli_query($con, "UPDATE Gorivo SET tip_goriva = '$tip', datum = '$datum', kolicina = '$kolicina', cena = '$cena' WHERE id = '$gorivo_id'");
    header("location: ../1gorivo.php");
}else{
    header("location: ../login.php");
}



?>