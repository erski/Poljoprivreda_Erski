
<?php
include_once ("../include/baze.php");


    if (empty($_POST["naziv"]) && empty($_POST["kolicina"])) {
        header("location: ../index.php");
    }
    else{

        $n = $_POST["naziv"];
        $k = $_POST["kolicina"];
        $c = $_POST["cena"];
        $d = $_POST["datum"];

        $sql = $con->query("INSERT INTO Kupljen_prasak (id, naziv, kolicina, cena, datum) VALUES ('','$n', '$k', '$c', '$d')");
        header("location: ../2prasak.php");
    }
?>