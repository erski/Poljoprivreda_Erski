<?php

include ("../include/baze.php");


if(isset($_POST['submit_ime_predaje'])) {

    $ime_id = $_POST["id"];
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];


    mysqli_query($con, "UPDATE Imena_predaje SET ime = '$ime', prezime = '$prezime' WHERE id = '$ime_id'");
    header("location: ../5racuni.php");
}else{
    header("location: ../login.php");
}



?>