<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php
    include_once ("include/povezivanje.php");
    include_once ("funkcije/functions.php");
    include_once ("include/baze.php");
    ?>
</head>
<body>
<?php
if(loggedin()){

    if ($user_level == 2 or $user_level == 3){
        header("location: index.php");
    }else{



    ?>


<nav class="col-lg-12">
    <?php
    include_once ("include/header.php");
    ?>
</nav><br>
<div class="col-lg-offset-1 col-lg-10">

    <h2><b><u>PROFIL </u></b></h2><br><br>


    <h4> Dobrodosli <?php echo $kor_ime.' '.$kor_prezime?></h4><br><br>

    <button class="center-block btn btn-primary" data-toggle="modal" data-target="#exampleModal1"> UNESI NOVOG KORISNIKA</button><br>

    <table id="tabela_center" border="1" width="100%" align="center" class="table table-hover">
            <tr>
                <td width="4%">No.</td>
                <td width="30%" >IME I PREZIME</td>
                <td width="17%">KORISNICKO IME</td>
                <td width="17%">PASSWORD</td>
                <td width="8%">STATUS</td>
                <td width="8%">LEVEL</td>
                <td width="8%">UPDATE</td>
                <td width="8%">DELETE</td></tr>


<?php
            $number=1;
            $number2=1;
        $list_query1 =mysqli_query($con, "SELECT * FROM Korisnici ");
        while ($run_list1 = mysqli_fetch_array($list_query1)){
            $u_id = $run_list1['id'];
            $u_ime = $run_list1['ime'];
            $u_prezime = $run_list1['prezime'];
            $u_username =$run_list1['korisnicko_ime'];
            $u_password = $run_list1['password'];
            $u_type123 = $run_list1['type123'];
            $u_lvl = $run_list1['user_level'];
?>

        <tr>
            <td><?php echo $number; ?></td>
            <td><?php echo $u_ime.' '.$u_prezime; ?></td>
            <td><?php echo $u_username; ?></td>
            <td><?php echo $u_password; ?></td>

            <td>
<?php
                if ($u_type123 == 'a'){
                echo "<a href='funkcije/status.php?id=$u_id&type123=$u_type123' onclick='statusKorisnika1()'>Aktivan</a>";
                }else if($u_type123 == 'd'){
                echo "<a href='funkcije/status.php?id=$u_id&type123=$u_type123' onclick='statusKorisnika2()'>Deaktiviran</a>";
                }
?>
            </td>
            <td>
                <?php
                if ($u_lvl == 1){
                    echo "<a href='funkcije/level.php?id=$u_id&user_level=$u_lvl' onclick='levelKorisnika1()'>Admin</a>";
                }else if($u_lvl == 2){
                    echo "<a href='funkcije/level.php?id=$u_id&user_level=$u_lvl' onclick='levelKorisnika2()'>Member 1</a>";
                }
                else if($u_lvl == 3){
                    echo "<a href='funkcije/level.php?id=$u_id&user_level=$u_lvl' onclick='levelKorisnika3()'>Member 2</a>";
                }
                ?>
            </td>
            <td>
                <button class='btn btn-primary' data-toggle='modal' data-target='#<?php echo "$number2";?>'> UPDATE</button>

                <div class="modal fade" id='<?php echo "$number2";?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 align="center" class="modal-title" id="exampleModalLabel">UNOS RADNIKA</h4>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="funkcije/options_reg.php">

                                    <div class="form-group">
                                        <label class="control-label">ID</label>
                                        <select class="form-control" name="id">
                                            <option value='<?php echo "$u_id";?>'>...</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Ime</label>
                                        <input type="text" name="ime" value='<?php echo "$u_ime"; ?>' placeholder="Ime" class="form-control"><br>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Prezime:</label>
                                        <input type="text" name="prezime" value='<?php echo "$u_prezime"; ?>' placeholder="Prezime" class="form-control"><br>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Korisnicko ime:</label>
                                        <input type="text" name="korisnicko_ime" value='<?php echo "$u_username"; ?>' placeholder="Korisnicko ime" class="form-control"><br>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Password:</label>
                                        <input type="password" name="password" value='<?php echo "$u_password"; ?>' placeholder="Password" class="form-control"><br>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Status:</label><br>
                                        <select name="status">
                                            <option value='a'>a</option>
                                            <option value='d'>d</option>
                                        </select><br>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Level:</label><br>
                                        <select name="level">
                                            <option value='3'>member 2</option>
                                            <option value='2'>member 1</option>
                                            <option value='1'>admin</option>
                                        </select><br>
                                    </div>


                                    <div class="modal-footer">
                                        <button type="submit" name="submit_update_korisnici" onclick="updateKorisnika()" value="Posalji" class="btn btn-default">Pošalji</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </td>
            <td>
                <?php echo "<a href='delete/deleteUser.php?id=$u_id'><button onclick='brisanjeKorisnika()' class='btn btn-danger'>DELETE</button> </a>";
                ?>
            </td>
        </tr>


    <?php
            $number++ ;
            $number2++;
        }
    ?>
    </table>
</div>


    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 align="center" class="modal-title" id="exampleModalLabel">UNOS NOVOG KORISNIKA</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="funkcije/options_reg.php">

                        <div class="form-group">
                            <label class="control-label">Ime</label>
                            <input type="text" name="ime" placeholder="Ime" class="form-control"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Prezime:</label>
                            <input type="text" name="prezime" placeholder="Prezime" class="form-control"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Korisnicko ime:</label>
                            <input type="text" name="korisnicko_ime" placeholder="Korisnicko ime" class="form-control"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Password:</label>
                            <input type="password" name="password"  placeholder="Password" class="form-control"><br>
                        </div>


                        <div class="modal-footer">
                            <button type="submit"  name="submit_korisnici" onclick="kreiranjeKorisnika()" value="Posalji" class="btn btn-default">Pošalji</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>




        <script type="text/javascript" src="js/script123.js"></script>

<?php
    }
}else{
    header("location: logout.php");

}?>

</body>
</html>