<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gorivo</title>
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


<div class="row">
    <div class="container-fluid col-lg-offset-1 col-lg-10 ">

            <h2 align="center"><b>GORIVO</b></h2><br><br>

            <table width="90%" id="tabela_center" class="table table-hover">
                <tr>
                    <td id="tdt" width="12.5%"><b>No.</b></td>
                    <td id="tdt" width="25%"><b>TIP GORIVA</b></td>
                    <td id="tdt" width="25%"><b>DATUM</b></td>
                    <td id="tdt" width="25%"><b>KOLIČINA</b></td>
                    <td id="tdt" width="25%"><b>CENA</b></td>
                    <td id="tdt" width="12.5%"><b>UPDATE</b></td>
                    <td id="tdt" width="12.5%"><b>DELETE</b></td>
                </tr>

                <?php
                $number1 =1;
                $number2 =1;


                $result=mysqli_query($con,"SELECT *
                            FROM Gorivo ORDER BY datum DESC ");
                while($row=mysqli_fetch_array($result))

                {
                    $gorivo_id = $row["id"];
                    $tip = $row["tip_goriva"];
                    $datum = $row["datum"];
                    $kolicina = $row["kolicina"];
                    $cena = $row["cena"];

                    echo
                        '<tr><td id="tdt">'.$number1.
                        '<td id="tdt">'.$tip.
                        '</td> <td id="tdt">'.$datum.
                        '</td> <td id="tdt">'.$kolicina." litara".
                        '</td> <td id="tdt">'.$cena." dinara".
                        '</td> <td id="tdt">'; ?>

                    <button class='btn btn-primary' data-toggle='modal' data-target='#<?php echo "$number2";?>'> UPDATE</button>

                    <div class="modal fade" id='<?php echo $number2; ?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 align="center" class="modal-title" id="exampleModalLabel">IZMENI GORIVO</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="update/1updateGorivo.php">

                                        <div class="form-group">
                                            <label class="control-label">ID:</label>
                                            <select class="form-control" name="id">
                                                <option value='<?php echo "$gorivo_id"; ?>'>...</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Tip:</label>
                                            <input type="text" value='<?php echo "$tip"; ?>' name="tip" placeholder="Tip" class="form-control"><br>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Datum:</label>
                                            <input type="date" value='<?php echo "$datum"; ?>' name="datum" placeholder="Datum" class="form-control"><br>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Kolicina:</label>
                                            <input type="number" name="kolicina" value='<?php echo "$kolicina"; ?>' placeholder="Kolicina" class="form-control"><br>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Cena:</label>
                                            <input type="number" name="cena" value='<?php echo "$cena"; ?>' placeholder="Cena" class="form-control"><br>
                                        </div>


                                        <div class="modal-footer">
                                            <button type="submit" name="submit_gorivo" onclick="updateGorivo()" value="Posalji" class="btn btn-default">Pošalji</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <?php
                    echo '</td> <td id="tdt">'."<a href='delete/1deleteGorivo.php?id=$gorivo_id'><button onclick='deleteGorivo()' class='btn btn-danger'>DELETE</button> </a>".
                        '</td> </tr>';




                    $number1++;
                    $number2++;
                }

                mysqli_close($con)
                ?>

            </table>
</div>
</div>


<script>
    function updateGorivo() {
        alert("Uspešno ste imzmenili gorivo!");

    }
    function deleteGorivo() {
        alert("Uspešno ste obrisali gorivo!");

    }
</script>


    <?php

}else{
    header("location: login.php");
}
?>

</body>
</html>