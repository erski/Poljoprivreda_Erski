
<?php

include_once ("../include/baze.php");


if (empty($_POST["kolicina"]) or empty($_POST["cena"]) or empty($_POST["naziv"])){
    header("location: ../index.php");
}else{


    $n=$_POST["naziv"];
    $k=$_POST["kolicina"];
    $c=$_POST["cena"];
    $d=$_POST["datum"];

    $sql= $con->query("INSERT INTO Kupljena_hemija (id, naziv, kolicina, cena, datum) VALUES ('','$n', '$k', '$c', '$d')");
header("location: ../2hemija.php");
}
?>
