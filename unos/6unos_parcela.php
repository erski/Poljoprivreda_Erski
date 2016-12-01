

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Početna stranica</title>


</head>
<body>
<?php
include_once ("../include/poseban_header.php");
?>


<h1><b>USPEŠNO STE UNELI NOVU PARCELU</b></h1><br><br>


<h1><b><a href="../parcele.php">KLIKNITE NA OVAJ TEKST KAKO BI STE SE VRATILI</a> </b></h1><br><br>




<?php
if (isset($_POST["naziv"]) && isset($_POST["br_parcele"])){


    $con=mysqli_connect('localhost', 'root', '','Poljoprivreda') or die ("Nema konekcije sa bazom");
    $i="id";
    $n=$_POST["naziv"];
    $b=$_POST["br_parcele"];
    $k1=$_POST["koordinate1"];
    $k2=$_POST["koordinate2"];
    $v1=$_POST["velicina1"];
    $v2=$_POST["velicina2"];
    $v3=$_POST["velicina3"];
    $datum=$_POST["datum"];
    $c=$_POST["cena"];
    $g=$_POST["vecito_godisnje"];

    $sql= $con->query("INSERT INTO Parcele (id, naziv, broj_parcele, koordinate1, koordinate2, velicina1, velicina2, velicina3, godina_kupovine, cena, vecito_godisnje) VALUES ('$i','$n', '$b', '$k1', '$k2', '$v1', '$v2', '$v3', '$datum', '$c', '$g')");
}
?>

<?php
if (isset($_POST["naziv"]) && isset($_POST["br_parcele"])){


    $con=mysqli_connect('localhost', 'root', '','Poljoprivreda') or die ("Nema konekcije sa bazom");
    $i="id";
    $n=$_POST["naziv"];
    $b=$_POST["br_parcele"];
    $k1=$_POST["koordinate1"];
    $k2=$_POST["koordinate2"];
    $v1=$_POST["velicina1"];
    $v2=$_POST["velicina2"];
    $v3=$_POST["velicina3"];
    $datum=$_POST["datum"];
    $c=$_POST["cena"];
    $g=$_POST["vecito_godisnje"];

    $sql= $con->query("INSERT INTO Parcele2 (id, naziv, broj_parcele, koordinate1, koordinate2, velicina1, velicina2, velicina3, godina_kupovine, cena, vecito_godisnje) VALUES ('$i','$n', '$b', '$k1', '$k2', '$v1', '$v2', '$v3', '$datum', '$c', '$g')");
}
?>


<?php
include_once ("../include/footer.php");
?>
</body>
</html>
