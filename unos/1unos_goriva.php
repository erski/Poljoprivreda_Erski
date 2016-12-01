<?php
include_once ("../include/baze.php");

if (empty($_POST["kolicina"]) && empty($_POST["cena"])) {
    header("location: ../index.php");
}else {
    include_once("../include/baze.php");
    $i = "id";
    $t = $_POST["tip"];
    $datum = $_POST["datum"];
    $k = $_POST["kolicina"];
    $c = $_POST["cena"];

    $sql = $con->query("INSERT INTO Gorivo (id, tip_goriva ,datum, kolicina, cena) VALUES ('$i','$t','$datum','$k','$c' )");
    header("location: ../1gorivo.php");
}
?>