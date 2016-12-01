<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prskanje / Špartanje</title>


    <?php
    include_once ("include/povezivanje.php");
    ?>
</head>
<body>
<nav class="col-lg-12">
<?php
include_once ("include/header.php");
include_once ("include/navigacija_prskanje_spartanje.php");
?>
</nav>

<br><br><br>

<table width="100%" id="tabela_setva">
    <tr>
        <td width="50%">
            <h2><b><u>PRSKANJE</u></b></h2>

            <table width="50%" id="tabela_center" class="fix">
                <tr>
                    <td id="tdt" width="33.33%"><b>DATUM</b></td>
                    <td id="tdt" width="33.33%"><b>HEMIJA</b></td>
                    <td id="tdt"><b>NAZIV</b></td>
                </tr>

                <?php
                $con=mysqli_connect('localhost', 'root', '','Poljoprivreda') or die ("Nema konekcije sa bazom");
                $result=mysqli_query($con,"SELECT *
                            FROM parcele_prskanje ORDER BY datum DESC ");
                while($row=mysqli_fetch_array($result))
                {
                    echo
                        '<tr><td id="tdt">'.$row['datum'].
                        '</td> <td id="tdt">'.$row['hemija'].
                        '</td> <td id="tdt">'.$row['naziv'].
                        '</td> </tr>';
                }
                mysqli_close($con)
                ?>
            </table><br><br><br>

        </td>

        <td width="50%" id="unos" class="fix">
            <h2><b><u>ŠPARTANJE</u></b></h2>
            <table width="100%" id="tabela_center">
                <tr>
                    <td id="tdt" width="33.33%"><b>DATUM</b></td>
                    <td id="tdt" width="33.33%"><b>NAZIV</b></td>
                </tr>

                <?php
                $con=mysqli_connect('localhost', 'root', '','Poljoprivreda') or die ("Nema konekcije sa bazom");
                $result=mysqli_query($con,"SELECT *
                            FROM parcele_spartanje ORDER BY datum DESC ");
                while($row=mysqli_fetch_array($result))
                {
                    echo
                        '<tr><td id="tdt">'.$row['datum'].
                        '</td> <td id="tdt">'.$row['naziv'].
                        '</td> </tr>';
                }
                mysqli_close($con)
                ?>

            </table><br><br><br>
        </td>
    </tr>
</table>


</body>
</html>