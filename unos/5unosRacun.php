
<?php
include_once ("../include/baze.php");


if (empty($_POST["ime_prezime1"]) or empty($_POST["ime_banke1"]) or empty($_POST["broj_racuna1"])){
    header("location: ../index.php");
}else{

    $ime_prezime = $_POST["ime_prezime1"];
    $ime_banke = $_POST["ime_banke1"];
    $broj_racuna = $_POST["broj_racuna1"];
    $stanje = $_POST["stanje1"];

    $sql= $con->query("INSERT INTO Racuni (id, ime_prezime ,ime_banke, broj_racuna, stanje) VALUES ('', '$ime_prezime' ,'$ime_banke', '$broj_racuna', '$stanje')");
    header("location: ../5racuni.php");
}
?>