<?php
// check request
if(isset($_GET['id']) && isset($_GET['id']) != "")
{
    // include Database connection file
    include_once ("../include/baze.php");

    // get user id
    $radnici_id = $_GET['id'];

    $result = mysqli_query($con, "DELETE FROM Radnici WHERE id = '$radnici_id'");
    header("location: ../1radnici.php");


}
else{
    header("location: ../login.php");
}
?>