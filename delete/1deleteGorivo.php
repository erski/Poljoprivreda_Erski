<?php
// check request
if(isset($_GET['id']) && isset($_GET['id']) != "")
{
    // include Database connection file
    include_once ("../include/baze.php");

    // get user id
    $gorivo_id = $_GET['id'];

    $result = mysqli_query($con, "DELETE FROM Gorivo WHERE id = '$gorivo_id'");
    header("location: ../1gorivo.php");


}
else{
    header("location: ../login.php");
}
?>