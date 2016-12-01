<?php

include ("../include/baze.php");


if(isset($_POST['submit_prasak'])) {


    $prasak_id = $_POST["id"];
    $naziv = $_POST["naziv"];
    $kolicina = $_POST["kolicina"];
    $cena = $_POST["cena"];
    $datum = $_POST["datum"];


    mysqli_query($con, "UPDATE Kupljen_prasak SET  naziv = '$naziv', kolicina = '$kolicina', cena = '$cena', datum = '$datum' WHERE id = '$prasak_id'");
    header("location: ../2prasak.php");
}else{
    header("location: ../logout.php");
}



?>