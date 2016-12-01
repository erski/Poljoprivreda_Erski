<?php
if (empty($_POST["ime"]) or empty($_POST["kolicina"]) or empty($_POST["cena"])){
    header("location: ../index.php");
}else{


    include_once ("../include/baze.php");

    $vrsta2=$_POST["vrsta2"];
    $mesto=$_POST["mesto"];
    $ime=$_POST["ime"];
    $datum=$_POST["datum"];
    $kolicina=$_POST["kolicina"];
    $cena=$_POST["cena"];
    $racun=$_POST["racun"];
    $komentar=$_POST["komentar"];

    $sql= $con->query("INSERT INTO Obracunata_roba (id, vrsta_kulture2, mesto, ime, datum, ukupna_kolicina, cena, uplata_na_racun, komentar) VALUES ('', '$vrsta2' ,'$mesto', '$ime', '$datum', '$kolicina', '$cena', '$racun', '$komentar')");

    header("location: ../4obracunata_roba.php");


}



?>