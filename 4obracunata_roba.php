<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Obracunata roba</title>
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
include_once ("include/header.php");
include_once ("include/navigacija_obracunata_roba.php");
?>
</nav><br>




<div class="col-lg-12 container">

    <h2><b>OBRAČUNATA ROBA</b></h2><br><br>

    <div class="col-lg-12 container">
        <h5><b>OBRAČUNAT KUKURUZ</b></h5>

        <table width="100%" id="tabela_center" class="table table-hover">
            <tr>
                <td id="tdt" width="15%"><b>MESTO</b></td>
                <td id="tdt" width="8%"><b>IME</b></td>
                <td id="tdt" width="9%"><b>NAZIV KULTURE</b></td>
                <td id="tdt" width="8%"><b>DATUM</b></td>
                <td id="tdt" width="12.5%"><b>KOLICINA</b></td>
                <td id="tdt" width="12.5%"><b>CENA</b></td>
                <td id="tdt"><b>RACUN ZA UPLATU</b></td>
                <td id="tdt" width="12.5%"><b>KOMENTAR</b></td>
            </tr>

            <?php

            $result1=mysqli_query($con,"SELECT *
                            FROM Obracunata_roba WHERE vrsta_kulture2='kukuruz' ORDER BY mesto ASC ");
            while($row=mysqli_fetch_array($result1))
            {
                echo
                    '<tr><td id="tdt">'.$row['mesto'].
                    '</td> <td id="tdt">'.$row['ime'].
                    '</td> <td id="tdt">'.$row['vrsta_kulture2'].
                    '</td> <td id="tdt">'.$row['datum'].
                    '</td> <td id="tdt">'.$row['ukupna_kolicina']." kilograma".
                    '</td> <td id="tdt">'.$row['cena']." din".
                    '</td> <td id="tdt">'.$row['uplata_na_racun'].
                    '</td> <td id="tdt">'.$row['komentar'].
                    '</td> </tr>';
            }

            ?>
        </table><br><br>
    </div>



    <div class="col-lg-12 container"><hr>
        <h5><b>OBRAČUNAZA SOJA</b></h5>

        <table width="100%" id="tabela_center" class="table table-hover">
            <tr>
                <td id="tdt"><b>MESTO</b></td>
                <td id="tdt" width="12.5%"><b>IME</b></td>
                <td id="tdt" width="12.5%"><b>NAZIV KULTURE</b></td>
                <td id="tdt" width="12.5%"><b>DATUM</b></td>
                <td id="tdt" width="12.5%"><b>KOLICINA</b></td>
                <td id="tdt" width="12.5%"><b>CENA</b></td>
                <td id="tdt" width="12.5%"><b>RACUN ZA UPLATU</b></td>
                <td id="tdt" width="12.5%"><b>KOMENTAR</b></td>
            </tr>

            <?php

            $result1=mysqli_query($con,"SELECT *
                            FROM Obracunata_roba WHERE vrsta_kulture2='soja' ORDER BY mesto ASC ");
            while($row=mysqli_fetch_array($result1))
            {
                echo
                    '<tr><td id="tdt">'.$row['mesto'].
                    '</td> <td id="tdt">'.$row['ime'].
                    '</td> <td id="tdt">'.$row['vrsta_kulture2'].
                    '</td> <td id="tdt">'.$row['datum'].
                    '</td> <td id="tdt">'.$row['ukupna_kolicina']." kilograma".
                    '</td> <td id="tdt">'.$row['cena']." din".
                    '</td> <td id="tdt">'.$row['uplata_na_racun'].
                    '</td> <td id="tdt">'.$row['komentar'].
                    '</td> </tr>';
            }

            ?>
        </table><br><br>
    </div>




    <div class="col-lg-12 container"><hr>
        <h5><b>OBRAČUNATA ŠEĆERNA REPA</b></h5>

        <table width="100%" id="tabela_center" class="table table-hover">
            <tr>
                <td id="tdt"><b>MESTO</b></td>
                <td id="tdt" width="12.5%"><b>IME</b></td>
                <td id="tdt" width="12.5%"><b>NAZIV KULTURE</b></td>
                <td id="tdt" width="12.5%"><b>DATUM</b></td>
                <td id="tdt" width="12.5%"><b>KOLICINA</b></td>
                <td id="tdt" width="12.5%"><b>CENA</b></td>
                <td id="tdt" width="12.5%"><b>RACUN ZA UPLATU</b></td>
                <td id="tdt" width="12.5%"><b>KOMENTAR</b></td>
            </tr>

            <?php

            $result1=mysqli_query($con,"SELECT *
                            FROM Obracunata_roba WHERE vrsta_kulture2='secerna repa' ORDER BY mesto ASC ");
            while($row=mysqli_fetch_array($result1))
            {
                echo
                    '<tr><td id="tdt">'.$row['mesto'].
                    '</td> <td id="tdt">'.$row['ime'].
                    '</td> <td id="tdt">'.$row['vrsta_kulture2'].
                    '</td> <td id="tdt">'.$row['datum'].
                    '</td> <td id="tdt">'.$row['ukupna_kolicina']." kilograma".
                    '</td> <td id="tdt">'.$row['cena']." din".
                    '</td> <td id="tdt">'.$row['uplata_na_racun'].
                    '</td> <td id="tdt">'.$row['komentar'].
                    '</td> </tr>';
            }

            ?>
        </table><br><br>
    </div>




    <div class="col-lg-12 container"><hr>
        <h5><b>OBRAČUNAT SUNCOKRET</b></h5>

        <table width="100%" id="tabela_center" class="table table-hover">
            <tr>
                <td id="tdt"><b>MESTO</b></td>
                <td id="tdt" width="12.5%"><b>IME</b></td>
                <td id="tdt" width="12.5%"><b>NAZIV KULTURE</b></td>
                <td id="tdt" width="12.5%"><b>DATUM</b></td>
                <td id="tdt" width="12.5%"><b>KOLICINA</b></td>
                <td id="tdt" width="12.5%"><b>CENA</b></td>
                <td id="tdt" width="12.5%"><b>RACUN ZA UPLATU</b></td>
                <td id="tdt" width="12.5%"><b>KOMENTAR</b></td>
            </tr>

            <?php

            $result1=mysqli_query($con,"SELECT *
                            FROM Obracunata_roba WHERE vrsta_kulture2='suncokret' ORDER BY mesto ASC ");
            while($row=mysqli_fetch_array($result1))
            {
                echo
                    '<tr><td id="tdt">'.$row['mesto'].
                    '</td> <td id="tdt">'.$row['ime'].
                    '</td> <td id="tdt">'.$row['vrsta_kulture2'].
                    '</td> <td id="tdt">'.$row['datum'].
                    '</td> <td id="tdt">'.$row['ukupna_kolicina']." kilograma".
                    '</td> <td id="tdt">'.$row['cena']." din".
                    '</td> <td id="tdt">'.$row['uplata_na_racun'].
                    '</td> <td id="tdt">'.$row['komentar'].
                    '</td> </tr>';
            }

            ?>
        </table><br><br>
    </div>




    <div class="col-lg-12 container"><hr>
        <h5><b>OBRAČUNATO ŽITO</b></h5>

        <table width="100%" id="tabela_center" class="table table-hover">
            <tr>
                <td id="tdt"><b>MESTO</b></td>
                <td id="tdt" width="12.5%"><b>IME</b></td>
                <td id="tdt" width="12.5%"><b>NAZIV KULTURE</b></td>
                <td id="tdt" width="12.5%"><b>DATUM</b></td>
                <td id="tdt" width="12.5%"><b>KOLICINA</b></td>
                <td id="tdt" width="12.5%"><b>CENA</b></td>
                <td id="tdt" width="12.5%"><b>RACUN ZA UPLATU</b></td>
                <td id="tdt" width="12.5%"><b>KOMENTAR</b></td>
            </tr>

            <?php

            $result1=mysqli_query($con,"SELECT *
                            FROM Obracunata_roba WHERE vrsta_kulture2='zito' ORDER BY mesto ASC ");
            while($row=mysqli_fetch_array($result1))
            {
                echo
                    '<tr><td id="tdt">'.$row['mesto'].
                    '</td> <td id="tdt">'.$row['ime'].
                    '</td> <td id="tdt">'.$row['vrsta_kulture2'].
                    '</td> <td id="tdt">'.$row['datum'].
                    '</td> <td id="tdt">'.$row['ukupna_kolicina']." kilograma".
                    '</td> <td id="tdt">'.$row['cena']." din".
                    '</td> <td id="tdt">'.$row['uplata_na_racun'].
                    '</td> <td id="tdt">'.$row['komentar'].
                    '</td> </tr>';
            }
            mysqli_close($con)
            ?>
        </table><br><br>
    </div>


</div>





    <div class="col-lg-12"><br><br><br></div>

    <?php

}else{
    header("location: login.php");
}
?>



</body>
</html>