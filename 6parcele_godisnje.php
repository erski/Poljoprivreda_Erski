<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parcele - Godišnje</title>

    <?php
    include_once ("include/povezivanje.php");
    ?>
</head>
<body>
<?php
include_once ("include/header.php");
include_once ("include/navigacija_parcele.php");
?>


<h1><b><u>GODIŠNJE PARCELE</u></b></h1> <br>



<div class="container-fluid">
<table width="100%" class="table">
    <tr>
        <td width="70%" class="fix">

            <h2 align="center"><b>GODIŠNJA ZEMLJA</b></h2>   <br><br>

            <table width="100%" id="tabela_center" class="table">
                <tr>
                    <td id="tdt" width="13.5%"><b>NAZIV</b></td>
                    <td id="tdt" width="13.5%"><b>BROJ PARCELE</b></td>
                    <td id="tdt" width="13.5%"><b>KORDINATE</b></td>
                    <td id="tdt" ><b>VELICINA1</b></td>
                    <td id="tdt" width="13.5%"><b>GODINA KUPOVINE</b></td>
                    <td id="tdt" width="13.5%"><b>CENA</b></td>
                    <td id="tdt" width="13.5%"><b>VECITO/GODISNJE</b></td>
                </tr>

                <?php
                include_once ("include/baze.php");
                $result=mysqli_query($con,"SELECT *
                            FROM Parcele WHERE vecito_godisnje='godisnje' ORDER BY velicina1 DESC ");
                while($row=mysqli_fetch_array($result))
                {
                    echo
                        '<tr><td id="tdt">'.$row['naziv'].
                        '</td> <td id="tdt">'.$row['broj_parcele'].
                        '</td> <td id="tdt">'.$row['koordinate1']." / ".$row['koordinate2'].
                        '</td> <td id="tdt">'.$row['velicina1']." ha ".$row['velicina2']." ara ".$row['velicina3']." m".
                        '</td> <td id="tdt">'.$row['godina_kupovine'].
                        '</td> <td id="tdt">'.$row['cena'].
                        '</td> <td id="tdt">'.$row['vecito_godisnje'].
                        '</td> </tr>';
                }
                mysqli_close($con);
                ?>


            </table>
        </td>


        <td width="30%" id="unos">

            <h2 align="center"><b>UNOS GODIŠNJIH PARCELA</b></h2><br><br>


              <form align="center" action="unos/unos_parcela.php" method="post">

                <label>Naziv parcele:</label><br>
                <input type="text" name="naziv" placeholder="Naziv"><br><br><br>

                <label>Broj parcele:</label><br>
                <input type="number" name="br_parcele"  placeholder="Broj parcele"><br><br><br>

                <label >Kordinate1:</label><br>
                <input type="number" name="koordinate1"  placeholder="Kordinate1"><br>
                <label for="cena">Kordinate2:</label><br>
                <input type="number" name="koordinate2"  placeholder="Kordinate2"><br><br><br>


                <label>Veličina parcele - hektari:</label><br>
                <table width="50%" align="center"><tr>
                        <td width="75%"><input type="number" name="velicina1"  placeholder="Velicina parcele - hektari"></td>
                        <td>hektara</td>
                    </tr>
                    <tr>
                        <td width="75%"><input type="number" name="velicina2"  placeholder="Velicina parcele - ari"></td>
                        <td>ara</td>
                    </tr>
                    <tr>
                        <td width="75%"><input type="number" name="velicina3"  placeholder="Velicina parcele - metri"></td>
                        <td>metara</td>
                    </tr>
                </table><br><br>

                <label>Datum:</label><br>
                <input type="date" name="datum" ><br><br><br>

                <label >Cena:</label><br>
                <input type="number" name="cena"  placeholder="Cena"><br><br><br>


                <label>Godisnje</label><br>
                  <select name="vecito_godisnje">
                      <option value="Godisnje">Godisnje</option>
                      <option value="Vecita">Vecita</option>
                  </select><br><br><br>

                <button type="submit" value="Posalji">Posalji</button>
                <button type="reset" value="Obrisi">Obrisi</button>


            </form>

        </td>
    </tr>
</table>
</div>

</body>
</html>