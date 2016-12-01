
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roba - Soja</title>
    <link rel="icon" type="image/jpg" href="18453452-Floral-initial-capital-letter-E-Stock-Vector.jpg">

    <?php
    include_once ("include/povezivanje.php");
    include_once ("funkcije/functions.php");
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
include ("include/baze.php");
?>
</nav><br>





<div class=" col-lg-12">
    <h2><b><u>SOJA</u></b></h2> <br><br><br>


                <div class="container-fluid">

                    <table width="100%" id="tabela_center" class="table table-hover">
                        <tr>
                            <td id="tdt" width="4%"><b>No.</b></td>
                            <td id="tdt" width="20%"><b>MESTO</b></td>
                            <td id="tdt" width="11%"><b>IME</b></td>
                            <td id="tdt" width="6%"><b>NAZIV KULTURE</b></td>
                            <td id="tdt" width="9%"><b>DATUM</b></td>
                            <td id="tdt" width="11%"><b>NETO KOLICINA</b></td>
                            <td id="tdt" width="11%"><b>JUS KOLICINA</b></td>
                            <td id="tdt" width="7%"><b>VLAGA</b></td>
                            <td id="tdt" width="4%"><b>NEČISTOĆA</b></td>
                            <td id="tdt" width="8%"><b>BR. ODV.</b></td>
                            <td id="tdt" width="8%"><b>UPDATE</b></td>
                            <td id="tdt" width="8%"><b>DELETE</b></td>
                        </tr>

                        <?php
                        $number = 1;
                        $number2 = 1;

                        $result1=mysqli_query($con,"SELECT *
                            FROM Roba WHERE naziv_kulture='soja' ORDER BY mesto_predaje, ime, datum DESC ");
                        while($row=mysqli_fetch_array($result1))
                        {
                            $r_id = $row["id"];
                            $r_mesto = $row["mesto_predaje"];
                            $r_ime = $row["ime"];
                            $r_naziv_kulture = $row['naziv_kulture'];
                            $r_datum = $row['datum'];
                            $r_kolicina = $row['neto_kolicina'];
                            $r_jus_kolicina = $row["jus_kolicina"];
                            $r_vlaga = $row['vlaga'];
                            $r_necistoca = $row['necistoca'];
                            $r_odvaga = $row['broj_odvage'];
                            $r_komentar = $row['komentar'];
                            echo
                                '<tr><td id="tdt">'.$number.
                                '<td id="tdt">'.$r_mesto.
                                '</td> <td id="tdt">'.$r_ime.
                                '</td> <td id="tdt">'.$r_naziv_kulture.
                                '</td> <td id="tdt">'.$r_datum.
                                '</td> <td id="tdt">'.$r_kolicina." kilograma".
                                '</td> <td id="tdt">'.$r_jus_kolicina." kilograma".
                                '</td> <td id="tdt">'.$r_vlaga." %".
                                '</td> <td id="tdt">'.$r_necistoca.
                                '</td> <td id="tdt">'.$r_odvaga.
                                '</td> <td id="tdt">';?>

                            <button class='btn btn-primary' data-toggle='modal' data-target='#<?php echo "$number2";?>'> UPDATE</button>

                                <div class="modal fade" id='<?php echo "$number2";?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 align="center" class="modal-title" id="exampleModalLabel">IZMENA PREDATE SOJE</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="update/3updateRobaSoja.php">

                                                    <div class="form-group">
                                                        <label class="control-label">ID:</label>
                                                        <select class="form-control" name="id">
                                                            <option value="<?php echo $r_id; ?>">...</option>
                                                        </select><br>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Mesto predaje:</label>
                                                        <input class="form-control" type="text" value='<?php echo "$r_mesto";?>' name="mesto"><br>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Na čije ime je predato:</label>
                                                        <input class="form-control" type="text" value='<?php echo "$r_ime";?>' name="ime"><br>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Vrsta kulture:</label>
                                                        <select class="form-control" name="vrsta">
                                                            <option value="soja">Soja</option>
                                                        </select><br>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Datum:</label>
                                                        <input class="form-control" type="date" value='<?php echo "$r_datum";?>' name="datum"><br>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Neto količina:</label>
                                                        <input class="form-control" type="number" value='<?php echo "$r_kolicina";?>' name="neto_kolicina" placeholder="Količina"><br>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Jus količina:</label>
                                                        <input class="form-control" type="number" value='<?php echo "$r_jus_kolicina";?>' name="jus_kolicina" placeholder="Količina"><br>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Vlaga:</label>
                                                        <input class="form-control" type="text" value='<?php echo "$r_vlaga";?>' name="vlaga" placeholder="Vlaga"><br>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Nečistoća:</label>
                                                        <input class="form-control" type="number" value='<?php echo "$r_necistoca";?>' name="necistoca" placeholder="Nečistoća"><br>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Broj odvage:</label>
                                                        <input class="form-control" type="number" name="br_o" value='<?php echo "$r_odvaga";?>' placeholder="Broj odvage"><br>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Komentar:</label>
                                                        <textarea class="form-control" type="text" name="komentar"  placeholder="Komentar" rows="4"><?php echo "$r_komentar";?></textarea><br>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" name="submit_update_soja" value="Posalji" onclick='updateRobe()' class="btn btn-default">Pošalji</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <?php echo
                                '</td> <td id="tdt">'."<a href='delete/3deleteRobaSoja.php?id=$r_id'><button onclick='brisanjeRobe()' class='btn btn-danger'>DELETE</button> </a>
                                </td> </tr>";
                            $number++;
                            $number2++;


                        }
                        mysqli_close($con)
                        ?>
                    </table>
                </div><br><br>

</div>
<script>
    function updateRobe() {
        alert("Uspesno ste izmenili informacije!");
    }

    function brisanjeRobe() {
        alert("Obrisali ste željenu robu!");
    }
</script>

    <?php

}else{
    header("location: login.php");
}
?>

</body>
</html>