<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Špartanja</title>



    <?php
    include_once ("include/povezivanje.php");
    ?>
</head>
<body>
<?php
include_once ("include/header.php");
include_once ("include/navigacija_prskanje_spartanje.php");
?>

<h1><b><u>ŠPARTANJE</u></b></h1> <br>
<table width="100%">
    <tr>
        <td width="70%" class="fix">

            <h2 align="center"><b>ISŠPARTANE PARCELE</b></h2><br><br>



        </td>


        <td width="30%" id="unos">
            <h2 align="center"><b>UNOS ŠPARTANJA</b></h2><br><br>

            <form align="center" action="unos_spartanje.php" method="post">

                <label for="parcela">Parcela:</label><br>
                <input type="text" name="parcele" placeholder="Parcela" id="parcela"><br><br><br>

                <label for="datum">Datum:</label><br>
                <input type="date" name="datum"placeholder="datum" id="datum"><br><br><br>

                <label for="naziv">Naziv:</label><br>
                <select name="naziv" id="naziv">
                    <option value="Spartanje">Špartanje</option>
                    <option value="Zagrtanje">Zagrtanje</option>
                </select><br><br><br>

                <button type="submit" value="Posalji">Posalji</button>
                <button type="reset" value="Obrisi">Obrisi</button>

                <?php
                if (isset($_POST["datum"]) && isset($_POST["naziv"])){

                    include_once ("include/baze.php");
                    $i="id";
                    $d=$_POST["datum"];
                    $n=$_POST["naziv"];

                    $sql= $con->query("INSERT INTO parcele_spartanje (id, datum ,naziv) VALUES ('$i','$d', '$n')");
                }
                ?>

            </form>

        </td>
    </tr>
</table>


<?php
include_once ("include/footer.php");
?>
</body>
</html>