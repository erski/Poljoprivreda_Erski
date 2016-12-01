<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roba</title>
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
        include_once ("include/navigacija_roba.php");
        ?>
</nav><br>
<script type="text/javascript" href="js/script123.js"></script>




<div class="container col-lg-12">
    <h2><b>ROBA</b></h2><br><br><br>

    <div class="row col-lg-12">

        <div class="col-lg-6 container fix">
            <h4><b>KUKURUZ UKUPNO</b></h4>

            <table width="100%" class="table table-hover">
                <tr>
                    <td id="tdt"><b>MESTO</b></td>
                    <td id="tdt" width="20%"><b>IME</b></td>
                    <td id="tdt" width="20%"><b>NAZIV KULTURE</b></td>
                    <td id="tdt" width="20%"><b>NETO KOLICINA</b></td>
                    <td id="tdt" width="20%"><b>JUS KOLICINA</b></td>
                </tr>

                <?php

                $result1=mysqli_query($con,"SELECT SUM(neto_kolicina) AS ukupno_predato, sum(jus_kolicina) AS ukupno_jus, ime, mesto_predaje, naziv_kulture
                            FROM Roba WHERE naziv_kulture='kukuruz' GROUP BY mesto_predaje, ime");
                while($row=mysqli_fetch_array($result1))
                {
                    echo
                        '<tr><td id="tdt">'.$row['mesto_predaje'].
                        '</td> <td id="tdt">'.$row['ime'].
                        '</td> <td id="tdt">'.$row['naziv_kulture'].
                        '</td> <td id="tdt">'.$row['ukupno_predato']." kilograma".
                        '</td> <td id="tdt">'.$row['ukupno_jus']." kilograma".
                        '</td> </tr>';
                }

                $result1=mysqli_query($con,"SELECT SUM(neto_kolicina) AS ukupno_predato,sum(jus_kolicina) AS ukupno_jus
                            FROM Roba WHERE naziv_kulture='kukuruz'");
                while($row=mysqli_fetch_array($result1))
                {
                    echo
                        '<tr><td id="tdt" colspan="3"> UKUPNO: '.
                        '</td> <td id="tdt">'.$row['ukupno_predato']." kilograma".
                        '</td> <td id="tdt">'.$row['ukupno_jus']." kilograma".
                        '</td> </tr>';
                }

                ?>

            </table>
        </div>

        <div class="col-lg-6 container fix">
            <h4><b>SOJA UKUPNO</b></h4>

            <table width="100%" class="table table-hover">
                <tr>
                    <td id="tdt"><b>MESTO</b></td>
                    <td id="tdt" width="20%"><b>IME</b></td>
                    <td id="tdt" width="20%"><b>NAZIV KULTURE</b></td>
                    <td id="tdt" width="20%"><b>NETO KOLICINA</b></td>
                    <td id="tdt" width="20%"><b>JUS KOLICINA</b></td>
                </tr>

                <?php

                $result1=mysqli_query($con,"SELECT SUM(neto_kolicina) AS ukupno_predato, sum(jus_kolicina) AS ukupno_jus, ime, mesto_predaje, naziv_kulture
                            FROM Roba WHERE naziv_kulture='soja' GROUP BY mesto_predaje, ime");
                while($row=mysqli_fetch_array($result1))
                {
                    echo
                        '<tr><td id="tdt">'.$row['mesto_predaje'].
                        '</td> <td id="tdt">'.$row['ime'].
                        '</td> <td id="tdt">'.$row['naziv_kulture'].
                        '</td> <td id="tdt">'.$row['ukupno_predato']." kilograma".
                        '</td> <td id="tdt">'.$row['ukupno_jus']." kilograma".
                        '</td> </tr>';
                }

                $result1=mysqli_query($con,"SELECT SUM(neto_kolicina) AS ukupno_predato,sum(jus_kolicina) AS ukupno_jus
                            FROM Roba WHERE naziv_kulture='soja'");
                while($row=mysqli_fetch_array($result1))
                {
                    echo
                        '<tr><td id="tdt" colspan="3"> UKUPNO: '.
                        '</td> <td id="tdt">'.$row['ukupno_predato']." kilograma".
                        '</td> <td id="tdt">'.$row['ukupno_jus']." kilograma".
                        '</td> </tr>';
                }

                ?>

            </table>
        </div>

    </div>
</div>


    <div class="col-lg-12"><br><br><br></div>

<div class="container col-lg-12">



    <div class="row col-lg-12">

        <div class="col-lg-6 container fix">
            <h4><b>SUNCOKRET UKUPNO</b></h4>

            <table width="100%" class="table table-hover">
                <tr>
                    <td id="tdt"><b>MESTO</b></td>
                    <td id="tdt" width="20%"><b>IME</b></td>
                    <td id="tdt" width="20%"><b>NAZIV KULTURE</b></td>
                    <td id="tdt" width="20%"><b>NETO KOLICINA</b></td>
                    <td id="tdt" width="20%"><b>JUS KOLICINA</b></td>
                </tr>

                <?php

                $result1=mysqli_query($con,"SELECT SUM(neto_kolicina) AS ukupno_predato, sum(jus_kolicina) AS ukupno_jus, ime, mesto_predaje, naziv_kulture
                            FROM Roba WHERE naziv_kulture='suncokret' GROUP BY mesto_predaje, ime");
                while($row=mysqli_fetch_array($result1))
                {
                    echo
                        '<tr><td id="tdt">'.$row['mesto_predaje'].
                        '</td> <td id="tdt">'.$row['ime'].
                        '</td> <td id="tdt">'.$row['naziv_kulture'].
                        '</td> <td id="tdt">'.$row['ukupno_predato']." kilograma".
                        '</td> <td id="tdt">'.$row['ukupno_jus']." kilograma".
                        '</td> </tr>';
                }

                $result1=mysqli_query($con,"SELECT SUM(neto_kolicina) AS ukupno_predato,sum(jus_kolicina) AS ukupno_jus
                            FROM Roba WHERE naziv_kulture='suncokret'");
                while($row=mysqli_fetch_array($result1))
                {
                    echo
                        '<tr><td id="tdt" colspan="3"> UKUPNO: '.
                        '</td> <td id="tdt">'.$row['ukupno_predato']." kilograma".
                        '</td> <td id="tdt">'.$row['ukupno_jus']." kilograma".
                        '</td> </tr>';
                }

                ?>

            </table>
        </div>

        <div class="col-lg-6 container fix">
            <h4><b>ŽITO UKUPNO</b></h4>

            <table width="100%" class="table table-hover">
                <tr>
                    <td id="tdt"><b>MESTO</b></td>
                    <td id="tdt" width="20%"><b>IME</b></td>
                    <td id="tdt" width="20%"><b>NAZIV KULTURE</b></td>
                    <td id="tdt" width="20%"><b>NETO KOLICINA</b></td>
                    <td id="tdt" width="20%"><b>JUS KOLICINA</b></td>
                </tr>

                <?php

                $result1=mysqli_query($con,"SELECT SUM(neto_kolicina) AS ukupno_predato, sum(jus_kolicina) AS ukupno_jus, ime, mesto_predaje, naziv_kulture
                            FROM Roba WHERE naziv_kulture='zito' GROUP BY mesto_predaje, ime");
                while($row=mysqli_fetch_array($result1))
                {
                    echo
                        '<tr><td id="tdt">'.$row['mesto_predaje'].
                        '</td> <td id="tdt">'.$row['ime'].
                        '</td> <td id="tdt">'.$row['naziv_kulture'].
                        '</td> <td id="tdt">'.$row['ukupno_predato']." kilograma".
                        '</td> <td id="tdt">'.$row['ukupno_jus']." kilograma".
                        '</td> </tr>';
                }

                $result1=mysqli_query($con,"SELECT SUM(neto_kolicina) AS ukupno_predato,sum(jus_kolicina) AS ukupno_jus
                            FROM Roba WHERE naziv_kulture='zito'");
                while($row=mysqli_fetch_array($result1))
                {
                    echo
                        '<tr><td id="tdt" colspan="3"> UKUPNO: '.
                        '</td> <td id="tdt">'.$row['ukupno_predato']." kilograma".
                        '</td> <td id="tdt">'.$row['ukupno_jus']." kilograma".
                        '</td> </tr>';
                }

                ?>

            </table>
        </div>

    </div>


</div>

    <div class="col-lg-12"><br><br><br></div>


    <div class="col-lg-12 container">
        <h4><b>ŠEĆERNA REPA UKUPNO</b></h4>

        <table width="100%" class="table table-hover">
            <tr>
                <td id="tdt"><b>MESTO</b></td>
                <td id="tdt" width="20%"><b>IME</b></td>
                <td id="tdt" width="20%"><b>NAZIV KULTURE</b></td>
                <td id="tdt" width="20%"><b>NETO KOLICINA</b></td>
                <td id="tdt" width="20%"><b>JUS KOLICINA</b></td>
            </tr>

            <?php

            $result1=mysqli_query($con,"SELECT SUM(neto_kolicina) AS ukupno_predato, sum(jus_kolicina) AS ukupno_jus, ime, mesto_predaje, naziv_kulture
                            FROM Roba WHERE naziv_kulture='secerna repa' GROUP BY mesto_predaje, ime");
            while($row=mysqli_fetch_array($result1))
            {
                echo
                    '<tr><td id="tdt">'.$row['mesto_predaje'].
                    '</td> <td id="tdt">'.$row['ime'].
                    '</td> <td id="tdt">'.$row['naziv_kulture'].
                    '</td> <td id="tdt">'.$row['ukupno_predato']." kilograma".
                    '</td> <td id="tdt">'.$row['ukupno_jus']." kilograma".
                    '</td> </tr>';
            }

            $result1=mysqli_query($con,"SELECT SUM(neto_kolicina) AS ukupno_predato,sum(jus_kolicina) AS ukupno_jus
                            FROM Roba WHERE naziv_kulture='secerna repa'");
            while($row=mysqli_fetch_array($result1))
            {
                echo
                    '<tr><td id="tdt" colspan="3"> UKUPNO: '.
                    '</td> <td id="tdt">'.$row['ukupno_predato']." kilograma".
                    '</td> <td id="tdt">'.$row['ukupno_jus']." kilograma".
                    '</td> </tr>';
            }

            ?>

        </table>


    </div>





<div class="col-lg-12"><br><br><br></div>

    <?php

}else{
    header("location: login.php");
}
?>


</body>
</html>