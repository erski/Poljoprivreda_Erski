<?php
// check request
if(isset($_GET['id']) && isset($_GET['id']) != "")
{
    // include Database connection file
    include_once ("../include/baze.php");

    // get user id
    $roba_id = $_GET['id'];

    $result = mysqli_query($con, "DELETE FROM Roba WHERE id = '$roba_id'");
    header("location: ../3roba_secerna_repa.php");


}
else{
    header("location: ../login.php");
}
?>