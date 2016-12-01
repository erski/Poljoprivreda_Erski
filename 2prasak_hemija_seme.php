<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prašak / Hemija / Semena</title>
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
</nav>


    <div class="col-lg-12"><br><br><br></div>

<div class="container col-lg-12">

        <div class="row">


            <div class="container col-lg-6 fix">

                <h2><b><u>KUPLJENA HEMIJA</u></b></h2>
                <br>
                <table width="100%" id="tabela_center" class="table table-hover">
                    <tr>
                        <td id="tdt" width="17%"><b>DATUM</b></td>
                        <td id="tdt" width="23%"><b>NAZIV</b></td>
                        <td id="tdt" width="30%"><b>KOLICINA</b></td>
                        <td id="tdt" width="30%"><b>CENA</b></td>
                    </tr>

                    <?php

                    $result=mysqli_query($con,"SELECT *
                            FROM Kupljena_hemija ORDER BY datum DESC ");
                    while($row=mysqli_fetch_array($result))
                    {
                        echo
                            '<tr><td id="tdt">'.$row['datum'].
                            '</td> <td id="tdt">'.$row['naziv'].
                            '</td> <td id="tdt">'.$row['kolicina']." litara".
                            '</td> <td id="tdt">'.$row['cena']." dinara".
                            '</td> </tr>';
                    }

                    $result1=mysqli_query($con,"SELECT SUM(cena) AS ukupna_cena
                            FROM Kupljena_hemija ");
                    while($row=mysqli_fetch_array($result1))
                    {
                        echo
                            '<tr><td id="tdt" colspan="3"> UKUPNO: '.
                            '</td> <td id="tdt">'.$row['ukupna_cena']." dinara".
                            '</td> </tr>';
                    }

                    ?>

                </table>
            </div>

            <div class="container col-lg-6 fix">
                <h2><b><u>KUPLJEN PRASAK</u></b></h2>
                <br>
                <table width="100%" id="tabela_center" class="table table-hover">
                    <tr>
                        <td id="tdt" width="17%"><b>DATUM</b></td>
                        <td id="tdt" width="23%"><b>NAZIV</b></td>
                        <td id="tdt" width="30%"><b>KOLICINA</b></td>
                        <td id="tdt" width="30%"><b>CENA</b></td>
                    </tr>

                    <?php

                    $result=mysqli_query($con,"SELECT *
                            FROM Kupljen_prasak ORDER BY datum DESC ");
                    while($row=mysqli_fetch_array($result))
                    {
                        echo
                            '<tr><td id="tdt">'.$row['datum'].
                            '</td> <td id="tdt">'.$row['naziv'].
                            '</td> <td id="tdt">'.$row['kolicina']." kilograma".
                            '</td> <td id="tdt">'.$row['cena']." dinara".
                            '</td> </tr>';
                    }

                    $result1=mysqli_query($con,"SELECT SUM(cena) AS ukupna_cena
                            FROM Kupljen_prasak ");
                    while($row=mysqli_fetch_array($result1))
                    {
                        echo
                            '<tr><td id="tdt" colspan="3"> UKUPNO: '.
                            '</td> <td id="tdt">'.$row['ukupna_cena']." dinara".
                            '</td> </tr>';
                    }


                    ?>

                </table>

            </div>

        </div>

        <br><br><br>



        <div class="row col-lg-12">

            <h2><b><u>KUPLJENO SEME</u></b></h2>
            <br><br>

            <div class=" container col-lg-6 fix">


                    <h5><b>KUKURUZ<b></h5>
                    <table width="100%" id="tabela_center" class="table table-hover">
                        <tr>
                            <td id="tdt" width="33%"><b>SORTA</b></td>
                            <td id="tdt" width="33%"><b>KOLICINA</b></td>
                            <td id="tdt" width="33%"><b>CENA</b></td>
                        </tr>

                        <?php

                        $result=mysqli_query($con,"SELECT datum, sorta, sum(kolicina) AS kolicina, sum(cena) AS cena
                            FROM Kupljeno_seme WHERE id_vrsta=1 GROUP BY sorta");
                        while($row=mysqli_fetch_array($result))
                        {
                            echo
                                '<tr><td id="tdt">'.$row['sorta'].
                                '</td> <td id="tdt">'.$row['kolicina']." vreca".
                                '</td> <td id="tdt">'.$row['cena']." dinara".
                                '</td> </tr>';
                        }

                        $result1=mysqli_query($con,"SELECT SUM(cena) AS ukupna_cena
                            FROM Kupljeno_seme WHERE id_vrsta=1");
                        while($row=mysqli_fetch_array($result1))
                        {
                            echo
                                '<tr><td id="tdt" colspan="2"> UKUPNO: '.
                                '</td> <td id="tdt">'.$row['ukupna_cena']." dinara".
                                '</td> </tr>';
                        }

                        ?>

                    </table>
            </div>

            <div class="col-lg-6 container fix">
                <h5><b>SOJA<b></h5>
                <table width="100%" id="tabela_center" class="table table-hover">
                    <tr>
                        <td id="tdt" width="33%"><b>SORTA</b></td>
                        <td id="tdt" width="33%"><b>KOLICINA</b></td>
                        <td id="tdt" width="33%"><b>CENA</b></td>
                    </tr>

                    <?php

                    $result=mysqli_query($con,"SELECT datum, sorta, sum(kolicina) AS kolicina, sum(cena) AS cena
                            FROM Kupljeno_seme WHERE id_vrsta=2 GROUP BY sorta");
                    while($row=mysqli_fetch_array($result))
                    {
                        echo
                            '<tr><td id="tdt">'.$row['sorta'].
                            '</td> <td id="tdt">'.$row['kolicina']." vreca".
                            '</td> <td id="tdt">'.$row['cena']." dinara".
                            '</td> </tr>';
                    }

                    $result1=mysqli_query($con,"SELECT SUM(cena) AS ukupna_cena
                            FROM Kupljeno_seme WHERE id_vrsta=2");
                    while($row=mysqli_fetch_array($result1))
                    {
                        echo
                            '<tr><td id="tdt" colspan="2"> UKUPNO: '.
                            '</td> <td id="tdt">'.$row['ukupna_cena']." dinara".
                            '</td> </tr>';
                    }

                    ?>

                </table>
            </div>

            <div class="col-lg-12">
                <br><br>
            </div>
        </div>

    <div class="container col-lg-12">
        <div class="container col-lg-4 fix">
            <h5><b>ŠEĆERNA REPA<b></h5>
            <table width="100%" id="tabela_center" class="table table-hover">
                <tr>
                    <td id="tdt" width="33%"><b>SORTA</b></td>
                    <td id="tdt" width="33%"><b>KOLICINA</b></td>
                    <td id="tdt" width="33%"><b>CENA</b></td>

                    <?php

                    $result=mysqli_query($con,"SELECT datum, sorta, sum(kolicina) AS kolicina, sum(cena) AS cena
                            FROM Kupljeno_seme WHERE id_vrsta=3 GROUP BY sorta");
                    while($row=mysqli_fetch_array($result))
                    {
                        echo
                            '<tr><td id="tdt">'.$row['sorta'].
                            '</td> <td id="tdt">'.$row['kolicina']." vreca".
                            '</td> <td id="tdt">'.$row['cena']." dinara".
                            '</td> </tr>';
                    }
                    $result1=mysqli_query($con,"SELECT SUM(cena) AS ukupna_cena
                            FROM Kupljeno_seme WHERE id_vrsta=3");
                    while($row=mysqli_fetch_array($result1))
                    {
                        echo
                            '<tr><td id="tdt" colspan="2"> UKUPNO: '.
                            '</td> <td id="tdt">'.$row['ukupna_cena']." dinara".
                            '</td> </tr>';
                    }

                    ?>

            </table>
        </div>

        <div class="container col-lg-4 fix">
            <h5><b>SUNCOKRET<b></h5>
            <table width="100%" id="tabela_center" class="table table-hover">
                <tr>
                    <td id="tdt" width="33%"><b>SORTA</b></td>
                    <td id="tdt" width="33%"><b>KOLICINA</b></td>
                    <td id="tdt" width="33%"><b>CENA</b></td>
                </tr>

                <?php

                $result=mysqli_query($con,"SELECT datum, sorta, sum(kolicina) AS kolicina, sum(cena) AS cena
                            FROM Kupljeno_seme WHERE id_vrsta=4 GROUP BY sorta");
                while($row=mysqli_fetch_array($result))
                {
                    echo
                        '<tr><td id="tdt">'.$row['sorta'].
                        '</td> <td id="tdt">'.$row['kolicina']." vreca".
                        '</td> <td id="tdt">'.$row['cena']." dinara".
                        '</td> </tr>';
                }

                $result1=mysqli_query($con,"SELECT SUM(cena) AS ukupna_cena
                            FROM Kupljeno_seme WHERE id_vrsta=4");
                while($row=mysqli_fetch_array($result1))
                {
                    echo
                        '<tr><td id="tdt" colspan="2"> UKUPNO: '.
                        '</td> <td id="tdt">'.$row['ukupna_cena']." dinara".
                        '</td> </tr>';
                }

                ?>
            </table>
        </div>

        <div class="container col-lg-4 fix">
            <h5><b>ŽITO<b></h5>
            <table width="100%" id="tabela_center" class="table table-hover">
                <tr>
                    <td id="tdt" width="33%"><b>SORTA</b></td>
                    <td id="tdt" width="33%"><b>KOLICINA</b></td>
                    <td id="tdt" width="33%"><b>CENA</b></td>
                </tr>

                <?php

                $result=mysqli_query($con,"SELECT sorta, sum(kolicina) AS kolicina, sum(cena) AS cena
                            FROM Kupljeno_seme WHERE id_vrsta=5 GROUP BY sorta");
                while($row=mysqli_fetch_array($result))
                {
                    echo
                        '<tr><td id="tdt">'.$row['sorta'].
                        '</td> <td id="tdt">'.$row['kolicina']." vreca".
                        '</td> <td id="tdt">'.$row['cena']." dinara".
                        '</td> </tr>';
                }

                $result1=mysqli_query($con,"SELECT SUM(cena) AS ukupna_cena
                            FROM Kupljeno_seme WHERE id_vrsta=5");
                while($row=mysqli_fetch_array($result1))
                {
                    echo
                        '<tr><td id="tdt" colspan="2"> UKUPNO: '.
                        '</td> <td id="tdt">'.$row['ukupna_cena']." dinara".
                        '</td> </tr>';
                }
                mysqli_close($con);
                ?>
            </table>
        </div>
    </div>
</div>



    <div class="col-lg-12">

        <br><br><br>
    </div>



    <?php

}else{
    header("location: login.php");
}
?>

</body>
</html>