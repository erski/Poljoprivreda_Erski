<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posejan suncokret</title>

    <?php
    include_once ("include/povezivanje.php");
    ?>
</head>
<body>
<?php
include_once ("include/header.php");
include_once ("include/navigacija_setva.php");
?>




<h1><b><u>POSEJAN SUNCOKRET</u></b></h1> <br>


<table width="100%">
    <tr>
        <td width="70%" class="fix">

            <h2 align="center"><b>POSEJAN SUNCOKRET</b></h2><br><br>

        </td>


        <td width="30%" id="unos">
            <h2 align="center"><b>UNESI POSEJAN SUNCOKRET</b></h2><br><br>
            <form align="center">
                <label for="ime">Ime parcele:</label><br>
                <input type="text" name="ime" id="ime" placeholder="ime parcele"><br><br><br><br>

                <label for="prezime">Datum sejanja:</label><br>
                <input type="text" name="prezime" id="prezime" placeholder="datum"><br><br><br><br>

                <label for="br_sati">Posejana sorta:</label><br>
                <input type="text" name="br_sati" id="br_sati" placeholder="posejana sorta"><br><br><br><br>

                <label for="cena">Potrošena količina semena:</label><br>
                <input type="text" name="cena" id="cena" placeholder="potroseno seme"><br><br><br><br>

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