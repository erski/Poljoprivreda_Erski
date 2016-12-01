<?php
// check request
if(isset($_GET['id']) && isset($_GET['id']) != "")
{
    // include Database connection file
    include_once ("../include/baze.php");

    // get user id
    $hemija_id = $_GET['id'];

    $result = mysqli_query($con, "DELETE FROM Kupljena_hemija WHERE id = '$hemija_id'");
    header("location: ../2hemija.php");


}
else{
    header("location: ../login.php");
}
?>