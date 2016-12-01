<?php
// check request
if(isset($_GET['id']) && isset($_GET['id']) != "")
{
    // include Database connection file
    include_once ("../include/baze.php");

    // get user id
    $prasak_id = $_GET['id'];

    $result = mysqli_query($con, "DELETE FROM Kupljen_prasak WHERE id = '$prasak_id'");
    header("location: ../2prasak.php");


}
else{
    header("location: ../login.php");
}
?>