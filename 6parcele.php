<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parcele</title>

    <?php
    include_once ("include/povezivanje.php");
    ?>
</head>
<body>
<nav class="col-lg-12">
<?php
include_once ("include/header.php");
include_once ("include/navigacija_parcele.php");
?>
</nav><br>





<h1><b>SVE PARCELE</b></h1><br><br>

<div class="container-fluid">

    <div class="container-fluid">

    <h3><b>VEČITA ZEMLJA</b></h3><br>

        <table width="100%" id="tabela_center">
            <tr>
                <td id="tdt" width="13.5%"><b>BROJ PARCELE</b></td>
                <td id="tdt" width="13.5%"><b>NAZIV</b></td>
                <td id="tdt" width="13.5%"><b>KORDINATE</b></td>
                <td id="tdt" ><b>VELICINA1</b></td>
                <td id="tdt" width="13.5%"><b>GODINA KUPOVINE</b></td>
                <td id="tdt" width="13.5%"><b>CENA</b></td>
                <td id="tdt" width="13.5%"><b>VECITO/GODISNJE</b></td>
            </tr>

            <?php
            include_once ("include/baze.php");
            $result1=mysqli_query($con,"SELECT *
                            FROM Parcele1 WHERE vecito_godisnje='vecita' ORDER BY velicina1 DESC ");
            while($row=mysqli_fetch_array($result1))
            {
                echo
                    '<tr><td id="tdt">'.$row['broj_parcele'].
                    '</td> <td id="tdt">'.$row['naziv'].
                    '</td> <td id="tdt">'.$row['koordinate1']." / ".$row['koordinate2'].
                    '</td> <td id="tdt">'.$row['velicina1']." ha ".$row['velicina2']." ara ".$row['velicina3']." m".
                    '</td> <td id="tdt">'.$row['godina_kupovine'].
                    '</td> <td id="tdt">'.$row['cena'].
                    '</td> <td id="tdt">'.$row['vecito_godisnje'].
                    '</td> </tr>';
            }

            ?>
        </table>
    </div><br><br>



    <div class="container-fluid">

        <h3><b>GODIŠNJA ZEMLJA</b></h3><br>


        <table width="100%" id="tabela_center">
            <tr>
                <td id="tdt" width="13.5%"><b>BROJ PARCELE</b></td>
                <td id="tdt" width="13.5%"><b>NAZIV</b></td>
                <td id="tdt" width="13.5%"><b>KORDINATE</b></td>
                <td id="tdt" > <b>VELICINA1</b></td>
                <td id="tdt" width="13.5%"><b>GODINA KUPOVINE</b></td>
                <td id="tdt" width="13.5%"><b>CENA</b></td>
                <td id="tdt" width="13.5%"><b>VECITO/GODISNJE</b></td>
            </tr>

            <?php
            include_once ("include/baze.php");
            $result2=mysqli_query($con,"SELECT *
                            FROM Parcele1 WHERE vecito_godisnje='godisnje' ORDER BY velicina1 DESC ");
            while($row=mysqli_fetch_array($result2))
            {
                echo
                    '<tr><td id="tdt">'.$row['broj_parcele'].
                    '</td> <td id="tdt">'.$row['naziv'].
                    '</td> <td id="tdt">'.$row['koordinate1']." / ".$row['koordinate2'].
                    '</td> <td id="tdt">'.$row['velicina1']." ha ".$row['velicina2']." ara ".$row['velicina3']." m".
                    '</td> <td id="tdt">'.$row['godina_kupovine'].
                    '</td> <td id="tdt">'.$row['cena'].
                    '</td> <td id="tdt">'.$row['vecito_godisnje'].
                    '</td> </tr>';
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>