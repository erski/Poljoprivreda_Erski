<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Obračunat kukuruz</title>
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

        <h1><b><u>OBRAČUNAT KUKURUZ</u></b></h1> <br><br>

        <table width="100%" id="tabela_center" class="table table-hover">
            <tr>
                <td id="tdt" width="4%"><b>No.</b></td>
                <td id="tdt"><b>MESTO</b></td>
                <td id="tdt" width="12.5%"><b>IME</b></td>
                <td id="tdt" width="12.5%"><b>NAZIV KULTURE</b></td>
                <td id="tdt" width="12.5%"><b>DATUM</b></td>
                <td id="tdt" width="12.5%"><b>KOLICINA</b></td>
                <td id="tdt" width="12.5%"><b>CENA</b></td>
                <td id="tdt" width="12.5%"><b>RACUN</b></td>
                <td id="tdt" width="12.5%"><b>KOMENTAR</b></td>
                <td id="tdt" width="8%"><b>UPDATE</b></td>
                <td id="tdt" width="8%"><b>DELETE</b></td>
            </tr>

            <?php
            $number1 = 1;
            $number2 = 2;



            $result1=mysqli_query($con,"SELECT *
                            FROM Obracunata_roba WHERE vrsta_kulture2='kukuruz' ORDER BY ime ASC ");
            while($row=mysqli_fetch_array($result1))
            {
                $obracunata_roba_id = $row["id"];
                $mesto = $row["mesto"];
                $ime = $row["ime"];
                $vrsta_kulture2 = $row["vrsta_kulture2"];
                $datum = $row["datum"];
                $ukupna_kolicina = $row["ukupna_kolicina"];
                $cena = $row["cena"];
                $uplata_na_racun = $row["uplata_na_racun"];
                $komentar = $row["komentar"];

                echo
                    '<tr><td id="tdt">'.$number1.
                    '<td id="tdt">'.$mesto.
                    '</td> <td id="tdt">'.$ime.
                    '</td> <td id="tdt">'.$vrsta_kulture2.
                    '</td> <td id="tdt">'.$datum.
                    '</td> <td id="tdt">'.$ukupna_kolicina." kilograma".
                    '</td> <td id="tdt">'.$cena." din".
                    '</td> <td id="tdt">'.$uplata_na_racun.
                    '</td> <td id="tdt">'.$komentar.
                    '</td> <td id="tdt">';?>

                <button class='btn btn-primary' data-toggle='modal' data-target='#<?php echo "$number2";?>'> UPDATE</button>

                <div class="modal fade" id='<?php echo "$number2";?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 align="center" class="modal-title" id="exampleModalLabel">IZMENA PREDATOG KUKURUZA</h4>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="update/4updateObracunataRobaKukuruz.php">

                                    <div class="form-group">
                                        <label class="control-label">ID:</label>
                                        <select class="form-control" name="id">
                                            <option value="<?php echo $obracunata_roba_id; ?>">...</option>
                                        </select><br>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Mesto predaje:</label>
                                        <input class="form-control" type="text" value='<?php echo "$mesto";?>' name="mesto"><br>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Na čije ime je predato:</label>
                                        <input class="form-control" type="text" value='<?php echo "$ime";?>' name="ime"><br>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Vrsta kulture:</label>
                                        <select class="form-control" name="vrsta_kulture2">
                                            <option value='<?php echo "$vrsta_kulture2";?>'>Kukuruz</option>
                                        </select><br>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Datum:</label>
                                        <input class="form-control" type="date" value='<?php echo "$datum";?>' name="datum"><br>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Ukupna količina:</label>
                                        <input class="form-control" type="number" value='<?php echo "$ukupna_kolicina";?>' name="ukupna_kolicina" placeholder="Količina"><br>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Cena:</label>
                                        <input class="form-control" type="number" value='<?php echo "$cena";?>' name="cena" placeholder="Cena"><br>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Uplata na racun:</label>
                                        <input class="form-control" type="text" value='<?php echo "$uplata_na_racun";?>' name="uplata_na_racun" placeholder="Racun"><br>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Komentar:</label>
                                        <input class="form-control" type="text" name="komentar" value='<?php echo "$komentar";?>' placeholder="Komentar"><br>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" name="submit_update_kukuruz" value="Posalji" onclick='updateRobe()' class="btn btn-default">Pošalji</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <?php echo
                '</td> <td id="tdt">'."<a href='delete/4deleteObracunataRobaKukuruz.php?id=$obracunata_roba_id'><button onclick='brisanjeRobe()' class='btn btn-danger'>DELETE</button> </a>
                                </td> </tr>";

                $number1++;
                $number2++;
            }
            mysqli_close($con)
            ?>
        </table><br><br>



    </div>



    <div class="col-lg-12"><br><br><br></div>

    <?php

}else{
    header("location: login.php");
}
?>
</body>
</html>