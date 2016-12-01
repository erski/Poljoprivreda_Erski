<?php
// check request
if(isset($_GET['id']) && isset($_GET['id']) != "")
{
    // include Database connection file
    include_once ("../include/baze.php");

    // get user id
    $seme_id = $_GET['id'];

    $result = mysqli_query($con, "DELETE FROM Kupljeno_seme WHERE id = '$seme_id'");
    header("location: ../2seme.php");


}
else{
    header("location: ../login.php");
}
?>