<?php

include ("../include/baze.php");


if(isset($_POST['submit_mesto_predaje'])) {

    $mesto_predaje = $_POST["id"];
    $ime = $_POST["ime"];


    mysqli_query($con, "UPDATE Mesta_predaje SET ime = '$ime' WHERE id = '$mesto_predaje'");
    header("location: ../5racuni.php");
}else{
    header("location: ../login.php");
}



?>