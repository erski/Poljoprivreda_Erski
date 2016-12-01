<?php

include ("../include/baze.php");


if(isset($_POST['submit_update_zito'])) {
    $r_id = $_POST["id"];
    $r_mesto = $_POST["mesto"];
    $r_ime = $_POST["ime"];
    $r_naziv_kulture = $_POST["vrsta"];
    $r_datum = $_POST["datum"];
    $r_kolicina = $_POST["neto_kolicina"];
    $r_jus_kolicina = $_POST["jus_kolicina"];
    $r_vlaga = $_POST["vlaga"];
    $r_necistoca = $_POST["necistoca"];
    $r_odvaga = $_POST["br_o"];
    $r_komentar = $_POST["komentar"];

    mysqli_query($con, "UPDATE Roba SET mesto_predaje = '$r_mesto', ime = '$r_ime', naziv_kulture = '$r_naziv_kulture', datum = '$r_datum', neto_kolicina = '$r_kolicina', jus_kolicina ='$r_jus_kolicina', vlaga = '$r_vlaga', necistoca = '$r_necistoca', komentar = '$r_komentar', broj_odvage = '$r_odvaga' WHERE id = '$r_id'");
    header("location: ../3roba_zito.php");
}



?>