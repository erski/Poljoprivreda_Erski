<?php

include ("../include/baze.php");


if(isset($_POST['submit_update_secerna_repa'])) {

    $obracunata_roba_id = $_POST["id"];
    $vrsta_kulture2 = $_POST["vrsta_kulture2"];
    $mesto = $_POST["mesto"];
    $ime = $_POST["ime"];
    $datum = $_POST["datum"];
    $ukupna_kolicina = $_POST["ukupna_kolicina"];
    $cena = $_POST["cena"];
    $uplata_na_racun = $_POST["uplata_na_racun"];
    $komentar = $_POST["komentar"];

    mysqli_query($con, "UPDATE Obracunata_roba SET vrsta_kulture2 = '$vrsta_kulture2', mesto = '$mesto', ime = '$ime', datum = '$datum', ukupna_kolicina = '$ukupna_kolicina', cena = '$cena', uplata_na_racun = '$uplata_na_racun', komentar = '$komentar' WHERE id = '$obracunata_roba_id'");
    header("location: ../4obracunata_roba_secerna_repa.php");
}else{
    header("location: ../index.php");
}
?>