<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prskanje</title>

    <?php
    include_once ("include/povezivanje.php");
    ?>
</head>
<body>
<?php
include_once ("include/header.php");
include_once ("include/navigacija_prskanje_spartanje.php");
?>


<h1><b><u>PRSKANJE</u></b></h1> <br>

<table width="100%">
    <tr>
        <td width="70%" class="fix">

            <h2 align="center"><b>ISPRSKANE PARCELE</b></h2><br><br>

        </td>


        <td width="30%" id="unos">
            <h2 align="center"><b>UNES PRSKANJA</b></h2><br><br>


            <form align="center" action="unos_prskanje.php" method="post">

                <label for="parcela">Parcela:</label><br>
                <input type="text" name="parcele" placeholder="Parcela" id="parcela"><br><br><br>

                <label for="datum">Datum:</label><br>
                <input type="date" name="datum"placeholder="datum" id="datum"><br><br><br>

                <label for="hemija1">Hemija 1:</label><br>
                <input type="text" name="hemija1" placeholder="hemija 1" id="hemija1"><br><br><br>

                <label for="hemija2">Hemija 2:</label><br>
                <input type="text" name="hemija2" placeholder="hemija 2" id="hemija2"><br><br><br>

                <label for="hemija3">Hemija 3:</label><br>
                <input type="text" name="hemija3" placeholder="hemija 3" id="hemija3"><br><br><br>

                <label>Naziv:</label><br>
                <select name="naziv">
                    <option value="Prskanje">Prskanje</option>
                </select><br><br><br>

                <button type="submit" value="Posalji">Posalji</button>
                <button type="reset" value="Obrisi">Obrisi</button>

                <?php
                if (isset($_POST["datum"]) && isset($_POST["hemija"])){

                    include_once ("include/baze.php");
                    $i="id";
                    $h1=$_POST["hemija1"];
                    $h2=$_POST["hemija2"];
                    $h3=$_POST["hemija3"];
                    $d=$_POST["datum"];
                    $n=$_POST["naziv"];

                    $sql= $con->query("INSERT INTO parcele_prskanje (id, datum, hemija, naziv) VALUES ('$i','$d', '$h'  , '$n')");
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