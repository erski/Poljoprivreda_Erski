<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Računi</title>
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
    if ($user_level == 2 or $user_level == 3){
        header("location: index.php");
    }else{

        ?>


<nav class="col-lg-12">
    <?php
    include_once ("include/header.php");



    ?>
    <br><br><br>
</nav><br>







<div class="col-lg-12 container">



    <!--kontejner u kome se ispisuju postojeci racuni, update i delete-->

        <h2><b><u>RAČUNI</u></b></h2> <br>

        <button class="center-block btn btn-primary" data-toggle="modal" data-target="#exampleModal1"> UNESI NOV RAČUN</button><br>


        <div class="container col-lg-offset-1 col-lg-10">

            <table width="100%" id="tabela_center" class="table table-hover">
                <tr>
                    <td id="tdt" width="4%"><b>No.</b></td>
                    <td id="tdt" width="18%"><b>IME I PREZIME</b></td>
                    <td id="tdt" width="18%"><b>BANKA</b></td>
                    <td id="tdt" width="20%"><b>BROJ RAČUNA</b></td>
                    <td id="tdt" width="19%"><b>STANJE</b></td>
                    <td id="tdt" width="8%"><b>UPDATE</b></td>
                    <td id="tdt" width="8%"><b>DELETE</b></td>
                </tr>

                <?php
                $number1 = 1;
                $number2 = 1;


                $result1=mysqli_query($con,"SELECT id, ime_prezime, ime_banke, broj_racuna, stanje
                            FROM Racuni  ORDER BY ime_prezime");
                while($row=mysqli_fetch_array($result1))
                {
                    $racuni_id = $row["id"];
                    $ime_prezime = $row["ime_prezime"];
                    $ime_banke = $row["ime_banke"];
                    $broj_racuna = $row["broj_racuna"];
                    $stanje = $row["stanje"];

                    echo
                        '<tr><td id="tdt">'.$number1.
                        '<td id="tdt">'.$ime_prezime.
                        '</td> <td id="tdt">'.$ime_banke.
                        '</td> <td id="tdt">'.$broj_racuna.
                        '</td> <td id="tdt">'.$stanje.
                        '</td> <td id="tdt">';?>

                    <button class='btn btn-primary' data-toggle='modal' data-target='#<?php echo "$number2";?>'> UPDATE</button>

                    <div class="modal fade" id='<?php echo "$number2";?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 align="center" class="modal-title" id="exampleModalLabel">IZMENA RAČUNA</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="update/5updateRacun.php">

                                        <div class="form-group">
                                            <label class="control-label">ID:</label>
                                            <select class="form-control" name="id">
                                                <option value="<?php echo $racuni_id; ?>">...</option>
                                            </select><br>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Ime i prezime:</label>
                                            <input class="form-control" type="text" value='<?php echo "$ime_prezime";?>' name="ime_prezime"><br>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Ime banke:</label>
                                            <input class="form-control" type="text" value='<?php echo "$ime_banke";?>' name="ime_banke"><br>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Broj racuna:</label>
                                            <input class="form-control" type="text" value='<?php echo "$broj_racuna";?>' name="broj_racuna"><br>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Stanje racuna:</label>
                                            <input class="form-control" type="text" value='<?php echo "$stanje";?>' name="stanje"><br>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" name="submit_racuni" value="Posalji" onclick='updateRacuna()' class="btn btn-default">Pošalji</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <?php

                    echo
                    '</td> <td id="tdt">'."<a href='delete/5deleteRacun.php?id=$racuni_id'><button onclick='brisanjeRacuna()' class='btn btn-danger'>DELETE</button> </a></td>"."
                                </td>
                                </tr>";


                    $number1++;
                    $number2++;


                }

                ?>
            </table>
    </div>

</div>



        <!--kontejner za ispis, update i delete imena na koga se predaje-->

        <div class="col-lg-12 container"><br><br>
            <hr>

            <h3><b><u>IME NA KOGA SE PREDAJE</u></b></h3> <br>

            <button class="center-block btn btn-primary" data-toggle="modal" data-target="#exampleModal2">UNESI NOVO IME</button><br>


            <div class="container col-lg-offset-1 col-lg-10">

                <table width="100%" id="tabela_center" class="table table-hover">
                    <tr>
                        <td id="tdt" width="4%"><b>No.</b></td>
                        <td id="tdt" width="40%"><b>IME</b></td>
                        <td id="tdt" width="40%"><b>PREZIME</b></td>
                        <td id="tdt" width="8%"><b>UPDATE</b></td>
                        <td id="tdt" width="8%"><b>DELETE</b></td>
                    </tr>

                    <?php
                    $number1 = 1;



                    $result1=mysqli_query($con,"SELECT id, ime, prezime
                            FROM Imena_predaje  ORDER BY ime");
                    while($row=mysqli_fetch_array($result1))
                    {
                        $ime_predaje_id = $row["id"];
                        $ime = $row["ime"];
                        $prezime = $row["prezime"];

                        echo
                            '<tr><td id="tdt">'.$number1.
                            '</td> <td id="tdt">'.$ime.
                            '</td> <td id="tdt">'.$prezime.
                            '</td> <td id="tdt">';?>

                        <button class='btn btn-primary' data-toggle='modal' data-target='#<?php echo "$number2";?>'> UPDATE</button>

                        <div class="modal fade" id='<?php echo "$number2";?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 align="center" class="modal-title" id="exampleModalLabel">IZMENA</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="update/5updateIME.php">

                                            <div class="form-group">
                                                <label class="control-label">ID:</label>
                                                <select class="form-control" name="id">
                                                    <option value="<?php echo $ime_predaje_id; ?>">...</option>
                                                </select><br>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Ime:</label>
                                                <input class="form-control" type="text" value='<?php echo "$ime";?>' name="ime"><br>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Prezime:</label>
                                                <input class="form-control" type="text" value='<?php echo "$prezime";?>' name="prezime"><br>
                                            </div>


                                            <div class="modal-footer">
                                                <button type="submit" name="submit_ime_predaje" value="Posalji" onclick='' class="btn btn-default">Pošalji</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <?php

                        echo
                            '</td> <td id="tdt">'."<a href='delete/5deleteIme.php?id=$ime_predaje_id'><button onclick='' class='btn btn-danger'>DELETE</button> </a></td>"."
                                </td>
                                </tr>";

                        $number1++;
                        $number2++;


                    }

                    ?>
                </table>
            </div>

        </div>





        <!--kontejner za predajna mesta, ispis, update i delete -->

        <div class="col-lg-12 container"><br><br>
            <hr>

            <h3><b><u>IME MESTA PREDAJE</u></b></h3> <br>

            <button class="center-block btn btn-primary" data-toggle="modal" data-target="#exampleModal3">UNESI NOVO MESTO</button><br>


            <div class="container col-lg-offset-1 col-lg-10">

                <table width="100%" id="tabela_center" class="table table-hover">
                    <tr>
                        <td id="tdt" width="4%"><b>No.</b></td>
                        <td id="tdt" width="80%"><b>IME</b></td>
                        <td id="tdt" width="8%"><b>UPDATE</b></td>
                        <td id="tdt" width="8%"><b>DELETE</b></td>
                    </tr>

                    <?php
                    $number1 = 1;



                    $result1=mysqli_query($con,"SELECT *
                            FROM Mesta_predaje  ORDER BY ime");
                    while($row=mysqli_fetch_array($result1))
                    {
                        $mesto_predaje_id = $row["id"];
                        $ime1 = $row["ime"];


                        echo
                            '<tr><td id="tdt">'.$number1.
                            '</td> <td id="tdt">'.$ime1.
                            '</td> <td id="tdt">';?>

                        <button class='btn btn-primary' data-toggle='modal' data-target='#<?php echo "$number2";?>'> UPDATE</button>

                        <div class="modal fade" id='<?php echo "$number2";?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 align="center" class="modal-title" id="exampleModalLabel">IZMENA MESTA PREDAJE</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="update/5updateMesto.php">

                                            <div class="form-group">
                                                <label class="control-label">ID:</label>
                                                <select class="form-control" name="id">
                                                    <option value="<?php echo $mesto_predaje_id; ?>">...</option>
                                                </select><br>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Ime:</label>
                                                <input class="form-control" type="text" value='<?php echo "$ime1";?>' name="ime"><br>
                                            </div>


                                            <div class="modal-footer">
                                                <button type="submit" name="submit_mesto_predaje" value="Posalji" onclick='' class="btn btn-default">Pošalji</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <?php

                        echo
                            '</td> <td id="tdt">'."<a href='delete/5deleteMesto.php?id=$mesto_predaje_id'><button onclick='' class='btn btn-danger'>DELETE</button> </a></td>"."
                                </td>
                                </tr>";

                        $number1++;
                        $number2++;


                    }

                    ?>
                </table>
            </div>

        </div>




        <!--modal za unos novog mesta gde se predaje-->

        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 align="center" class="modal-title" id="exampleModalLabel">UNOS NOVOG MESTA PREDAJE</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="unos/5unosMesta.php">

                            <div class="form-group">
                                <label class="control-label">Mesto:</label>
                                <input type="text" name="ime" placeholder="Ime mesta" class="form-control"><br>
                            </div>

                            <div class="modal-footer">
                                <button type="submit"  name="submit123" onclick="" value="Posalji" class="btn btn-default">Pošalji</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>




        <!--modal za unos novog imena na koga se predaje-->

        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 align="center" class="modal-title" id="exampleModalLabel">UNOS NOVOG IMENA NA KOJE SE PREDAJE</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="unos/5unosImePredaje.php">

                            <div class="form-group">
                                <label class="control-label">Ime:</label>
                                <input type="text" name="ime" placeholder="Ime" class="form-control"><br>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Prezime:</label>
                                <input type="text" name="prezime" placeholder="Prezime" class="form-control"><br>
                            </div>

                            <div class="modal-footer">
                                <button type="submit"  name="submit_ime" onclick="" value="Posalji" class="btn btn-default">Pošalji</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>




        <!--modal za unos novog racuna-->

        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 align="center" class="modal-title" id="exampleModalLabel">UNOS NOVOG RAČUNA</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="unos/5unosRacun.php">

                            <div class="form-group">
                                <label class="control-label">Ime i prezime na koga je račun:</label>
                                <input type="text" name="ime_prezime1" placeholder="Ime i prezime" class="form-control"><br>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Ime banke:</label>
                                <input type="text" name="ime_banke1" placeholder="Ime banke" class="form-control"><br>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Broj računa:</label>
                                <input type="text" name="broj_racuna1" placeholder="Broj računa" class="form-control"><br>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Stanje:</label>
                                <input type="number" name="stanje1"  placeholder="Stanje novca" class="form-control"><br>
                            </div>


                            <div class="modal-footer">
                                <button type="submit"  name="submit_racun11" onclick="kreiranjeRacuna()" value="Posalji" class="btn btn-default">Pošalji</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <script>




            function kreiranjeImena() {
                alert("Uspešno ste uneli novo ime na koga mozete primati robu");
            }
            function updateIme() {
                alert("Upsešno ste izmenili ime");
            }
            function deleteIme() {
                alert("Uspešno ste obrisali ime");
            }
            function updateRacuna() {
                alert("Uspešno ste izmenili račun!");
            }

            function brisanjeRacuna() {
                alert("Uspešno ste obrisali račun!");
            }
            function kreiranjeRacuna() {
                alert("Uspešno ste uneli nov racun");
            }
        </script>



        <?php
    }
}else{
    header("location: logout.php");
}
?>

</body>
</html>