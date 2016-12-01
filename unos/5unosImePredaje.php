
<?php
include_once ("../include/baze.php");


if (empty($_POST["ime"]) or empty($_POST["prezime"])){
    header("location: ../index.php");
}else{

    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];


    $sql= $con->query("INSERT INTO Imena_predaje (id, ime ,prezime) VALUES ('', '$ime' ,'$prezime')");
    header("location: ../5racuni.php");
}
?>