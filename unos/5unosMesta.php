
<?php
include_once ("../include/baze.php");


if (empty($_POST["ime"])){
    header("location: ../index.php");
}else{

    $ime = $_POST["ime"];


    $sql= $con->query("INSERT INTO Mesta_predaje (id, ime ) VALUES ('', '$ime' )");
    header("location: ../5racuni.php");
}
?>