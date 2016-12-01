<?php
// check request
if(isset($_GET['id']) && isset($_GET['id']) != "")
{
    // include Database connection file
    include_once ("../include/baze.php");

    // get user id
    $ime_id = $_GET['id'];

    $result = mysqli_query($con, "DELETE FROM Imena_predaje WHERE id = '$ime_id'");
    header("location: ../5racuni.php");


}
else{
    header("location: ../login.php");
}
?>