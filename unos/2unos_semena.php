
<?php
include_once ("../include/baze.php");


if (empty($_POST["kolicina"]) or empty($_POST["cena"]) or empty($_POST["sorta"])){
    header("location: ../index.php");
}else{

    $vrsta=$_POST["vrsta"];
    $s=$_POST["sorta"];
    $k=$_POST["kolicina"];
    $c=$_POST["cena"];
    $d=$_POST["datum"];

    $sql= $con->query("INSERT INTO Kupljeno_seme (id, id_vrsta ,sorta, kolicina, cena, datum) VALUES ('', '$vrsta' ,'$s', '$k', '$c', '$d')");
    header("location: ../2seme.php");
}
?>