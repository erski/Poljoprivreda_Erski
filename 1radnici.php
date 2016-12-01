<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Radnici</title>
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
include_once ("include/navigacija_gorivo_radnici.php");
?>
</nav><br>

    <div class="container-fluid col-lg-offset-1 col-lg-10 ">

        <h2 align="center"><b>RADNICI</b></h2>

        <table width="100%" id="tabela_center" class="table table-hover">
            <tr>
                <td id="tdt" width="12.5%"><b>No.</b></td>
                <td id="tdt" width="12.5%"><b>DATUM</b></td>
                <td id="tdt" width="15.5%"><b>IME I PREZIME</b></td>
                <td id="tdt"><b>BROJ SATI</b></td>
                <td id="tdt" width=""><b>PLATA</b></td>
                <td id="tdt" width="12.5%"><b>KOMENTAR</b></td>
                <td id="tdt" width="12.5%"><b>UPDATE</b></td>
                <td id="tdt" width="12.5%"><b>DELETE</b></td>
            </tr>

            <?php
            $number1 = 1;
            $number2 = 1;


            $result=mysqli_query($con,"SELECT *
                            FROM Radnici ORDER BY datum DESC ");
            while($row=mysqli_fetch_array($result))
            {
                $radnici_id = $row["id"];

                $datum = $row["datum"];
                $ime_prezime = $row["ime_prezime"];
                $broj_sati = $row["broj_sati"];
                $plata = $row["plata"];
                $komentar = $row["komentar"];

                echo
                    '<tr><td id="tdt">'.$number1.
                    '</td> <td id="tdt">'.$datum.
                    '</td> <td id="tdt">'.$ime_prezime.
                    '</td> <td id="tdt">'.$broj_sati." h".
                    '</td> <td id="tdt">'.$plata." dinara".
                    '</td> <td id="tdt">'.$komentar.
                    '</td> <td id="tdt">'; ?>

                <button class='btn btn-primary' data-toggle='modal' data-target='#<?php echo "$number2";?>'> UPDATE</button>

                <div class="modal fade" id='<?php echo $number2; ?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 align="center" class="modal-title" id="exampleModalLabel">IZMENI RADNIKA</h4>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="update/1updateRadnika.php">

                                    <div class="form-group">
                                        <label class="control-label">ID:</label>
                                        <select class="form-control" name="id">
                                            <option value='<?php echo "$radnici_id"; ?>'>...</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Datum:</label>
                                        <input type="date" value='<?php echo "$datum"; ?>' name="datum" placeholder="datum" class="form-control"><br>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Ime i prezime radnika:</label>
                                        <input type="text" value='<?php echo "$ime_prezime"; ?>' name="ime_prezime" placeholder="Ime" class="form-control"><br>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Broj sati koje je odradio:</label>
                                        <input type="number" name="broj_sati" value='<?php echo "$broj_sati"; ?>' placeholder="Br sati" class="form-control"><br>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Plata:</label>
                                        <input type="number" name="plata" value='<?php echo "$plata"; ?>' placeholder="Cena" class="form-control"><br>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Komentar:</label>
                                        <textarea type="text" name="komentar" rows="3" placeholder="Komentar" class="form-control" ><?php echo "$komentar"; ?></textarea><br>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" name="submit_radnici" onclick="updateRadnika()" value="Posalji" class="btn btn-default">Pošalji</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            <?php
                    echo '</td> <td id="tdt">'."<a href='delete/1deleteRadnika.php?id=$radnici_id'><button onclick='deleteRadnika()' class='btn btn-danger'>DELETE</button> </a>".
                    '</td> </tr>';

                $number1++;
                $number2++;
            }
            ?>
            <br><br><br>
        </table>
    </div>

<script>
    function updateRadnika() {
        alert("Uspesno ste izmenili radnika!");
    }

    function deleteRadnika() {
        alert("Uspesno ste obrisali radnika!");
    }
</script>


    <?php

}else{
header("location: login.php");
}
?>


</body>
</html>