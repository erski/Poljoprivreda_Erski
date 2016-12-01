<?php

include ("../include/baze.php");


if(isset($_POST['submit_seme'])) {


    $seme_id = $_POST["id"];
    $sorta = $_POST["sorta"];
    $kolicina = $_POST["kolicina"];
    $cena = $_POST["cena"];
    $datum = $_POST["datum"];


    mysqli_query($con, "UPDATE Kupljeno_seme SET  kolicina = '$kolicina', sorta = '$sorta', cena = '$cena', datum = '$datum' WHERE id = '$seme_id'");
    header("location: ../2seme.php");
}else{
    header("location: ../login.php");
}



?>