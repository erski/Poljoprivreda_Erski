
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vrsidba kukuruza</title>

    <?php
    include_once ("include/povezivanje.php");
    ?>
</head>
<body>
<?php
include_once ("include/header.php");
include_once ("include/navigacija_vrsidba.php");
?>

<h1><b><u>VRSIDBA KUKURUZA</u></b></h1> <br>
<table width="100%">
    <tr>
        <td width="70%" class="fix">

            <h2 align="center"><b>PRINOSI KUKURUZA SA PARCELA...</b></h2><br><br>

        </td>


        <td width="30%" id="unos">
            <h2 align="center"><b>UNESI PRINOSE KUKURUZA ZA ODREDJENE PARCELE</b></h2><br><br>
            <form align="center">
                <label for="ime">Ime radnika:</label><br>
                <input type="text" name="ime" id="ime" placeholder="ime"><br><br><br><br>

                <label for="prezime">Prezime radnika:</label><br>
                <input type="text" name="prezime" id="prezime" placeholder="prezime"><br><br><br><br>

                <label for="br_sati">Broj sati koje je odradio:</label><br>
                <input type="text" name="br_sati" id="br_sati" placeholder="br sati"><br><br><br><br>

                <label for="cena">Cena:</label><br>
                <input type="text" name="cena" id="cena" placeholder="cena za 1h"><br><br><br><br>

                <label for="datum">Datum:</label><br>
                <input type="text" name="datum" id="datum" placeholder="datum" ><br><br><br><br>

                <button type="submit" value="Posalji">Posalji</button>
                <button type="reset" value="Obrisi">Obrisi</button>
            </form>
        </td>
    </tr>
</table>


<?php
include_once ("include/footer.php");
?>
</body>
</html>