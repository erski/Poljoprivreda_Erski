<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Gorivo / Radnici</title>
    <link rel="icon" type="image/jpg" href="18453452-Floral-initial-capital-letter-E-Stock-Vector.jpg">

    <?php
    include_once ("include/povezivanje.php");
    include_once ("funkcije/functions.php");
    include ("include/baze.php");
    ?>
</head>
<body>


<?php
if (loggedin()){
?>

    <nav class="col-lg-12">
        <?php
        include ("include/header.php");
        include ("include/navigacija_gorivo_radnici.php");
        ?>
    </nav><br>





<div class="row">
    <div class="container col-lg-offset-1 col-lg-5">
        <h1><b><u>RADNICI</u></b></h1><br><br>

        <table width="100%" id="tabela_center" class="table table-hover">
            <tr>
                <td id="tdt" width="33.3%"><b>IME I PREZIME</b></td>
                <td id="tdt"><b>BROJ SATI</b></td>
                <td id="tdt" width="33.3%"><b>UKUPNA ZARADA</b></td>
            </tr>

            <?php
            $con=mysqli_connect('localhost', 'root', '','Poljoprivreda') or die ("Nema konekcije sa bazom");
            $result=mysqli_query($con,"SELECT ime_prezime, sum(broj_sati) as broj_sati, sum(plata) AS plata
                            FROM Radnici GROUP BY ime_prezime");
            while($row=mysqli_fetch_array($result))
            {
                echo
                    '<tr></td> <td id="tdt">'.$row['ime_prezime'].
                    '</td> <td id="tdt">'.$row['broj_sati']." h".
                    '</td> <td id="tdt">'.$row['plata']."dinara".
                    '</td> </tr>';
            }
            mysqli_close($con)
            ?>

        </table><br><br><br>
    </div>



    <div class="container col-lg-5">
        <h1><b><u>GORIVO</u></b></h1><br><br>

        <table width="100%" id="tabela_center" class="table table-hover">
            <tr>
                <td id="tdt" width="33.3%"><b>TIP GORIVA</b></td>
                <td id="tdt" width="33.3%"><b>KOLIČINA</b></td>
                <td id="tdt"><b>CENA</b></td>
            </tr>

            <?php
            $con=mysqli_connect('localhost', 'root', '','Poljoprivreda') or die ("Nema konekcije sa bazom");
            $result=mysqli_query($con,"SELECT tip_goriva, sum(cena) AS cena, sum(kolicina) AS kolicina
                            FROM Gorivo GROUP BY tip_goriva");
            while($row=mysqli_fetch_array($result))
            {
                echo
                    '<tr><td id="tdt">'.$row['tip_goriva'].
                    '</td> <td id="tdt">'.$row['kolicina']." litara".
                    '</td> <td id="tdt">'.$row['cena']." dinara".
                    '</td> </tr>';
            }
            mysqli_close($con)
            ?>

        </table><br><br><br>
    </div>
</div>


    <?php

}else{
    header("location: login.php");
}
?>


</body>
</html>