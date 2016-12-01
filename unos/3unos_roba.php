
<?php
if (empty($_POST["vlaga"]) or empty($_POST["kolicina"]) or empty($_POST["br_o"])){


    header("location: ../index.php");

}else{
    include_once ("../include/baze.php");

    $m=$_POST["mesto"];
    $ime=$_POST["ime"];
    $v=$_POST["vrsta"];
    $d=$_POST["datum"];
    $k=$_POST["neto_kolicina"];
    $jus_kolicina = $_POST["jus_kolicina"];
    $vlaga=$_POST["vlaga"];
    $n=$_POST["necistoca"];
    $komentar = $_POST["komentar"];
    $br_o=$_POST["br_o"];

    $sql= $con->query("INSERT INTO Roba (id, mesto_predaje ,ime, naziv_kulture, datum, neto_kolicina, jus_kolicina, vlaga, necistoca, komentar, broj_odvage) VALUES ('', '$m','$ime' ,'$v', '$d', '$k', $jus_kolicina, '$vlaga', '$n', '$komentar', '$br_o')");

    header("location: ../3roba.php");
}
?>
