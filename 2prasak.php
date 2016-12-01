<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prašak</title>
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
include_once ("include/navigacija_prasak_hemija_seme.php");
?>
</nav><br>

            <div class="col-lg-offset-1 col-lg-10">
                <h2 align="center"><b>KUPLJENI PRASAK</b></h2><br><br>

                <table width="100%" id="tabela_center" class="table table-hover">
                    <tr>
                        <td id="tdt" width="4%"><b>No.</b></td>
                        <td id="tdt" width="20%"><b>NAZIV</b></td>
                        <td id="tdt" width="20%"><b>KOLICINA</b></td>
                        <td id="tdt" width="20%"><b>CENA</b></td>
                        <td id="tdt"><b>DATUM</b></td>
                        <td id="tdt" width="8%"><b>UPDATE</b></td>
                        <td id="tdt" width="8%"><b>DELETE</b></td>
                    </tr>

                    <?php
                    $number = 1;
                    $number2 = 1;


                    $result=mysqli_query($con,"SELECT *
                            FROM Kupljen_prasak ORDER BY datum DESC ");
                    while($row=mysqli_fetch_array($result))
                    {
                        $prasak_id = $row["id"];
                        $naziv = $row["naziv"];
                        $kolicina = $row["kolicina"];
                        $cena = $row["cena"];
                        $datum = $row["datum"];

                        echo
                            '<tr><td id="tdt">'.$number.
                            '<td id="tdt">'.$naziv.
                            '</td> <td id="tdt">'.$kolicina." kilograma".
                            '</td> <td id="tdt">'.$cena." dinara".
                            '</td> <td id="tdt">'.$datum.
                            '</td> <td id="tdt">';?>

                        <button class='btn btn-primary' data-toggle='modal' data-target='#<?php echo "$number2";?>'> UPDATE</button>

                        <div class="modal fade" id='<?php echo "$number2";?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 align="center" class="modal-title" id="exampleModalLabel">IZMENA KUPLJENOG PRAŠKA/h4>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="update/2updatePrasak.php">

                                            <div class="form-group">
                                                <label class="control-label">ID:</label>
                                                <select class="form-control" name="id">
                                                    <option value="<?php echo $prasak_id; ?>">...</option>
                                                </select><br>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Naziv:</label>
                                                <input class="form-control" type="text" value='<?php echo "$naziv";?>' name="naziv" placeholder="Naziv"><br>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Količina:</label>
                                                <input class="form-control" type="number" value='<?php echo "$kolicina";?>' name="kolicina" placeholder="Količina"><br>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Cena:</label>
                                                <input class="form-control" type="number" value='<?php echo "$cena";?>' name="cena" placeholder="Cena"><br>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Datum:</label>
                                                <input class="form-control" type="date" value='<?php echo "$datum";?>' name="datum"><br>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" name="submit_prasak" value="Posalji" onclick='updatePrasak()' class="btn btn-default">Pošalji</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <?php echo
                        '</td> <td id="tdt">'."<a href='delete/2deletePrasak.php?id=$prasak_id'><button onclick='deletePrasak()' class='btn btn-danger'>DELETE</button> </a>
                                </td> </tr>";
                        $number++;
                        $number2++;

                    }
                    mysqli_close($con)
                    ?>
                </table>
            </div>

    <script>
        function updatePrasak() {
            alert("Uspešno ste izmenili kupljen prašak!");
        }
        function deletePrasak() {
            alert("Uspešno ste obrisali kupljen prašak!");
        }
    </script>

    <?php

}else{
    header("location: login.php");
}
?>


</body>
</html>