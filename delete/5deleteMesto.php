<?php
// check request
if(isset($_GET['id']) && isset($_GET['id']) != "")
{
    // include Database connection file
    include_once ("../include/baze.php");

    // get user id
    $mesto_id = $_GET['id'];

    $result = mysqli_query($con, "DELETE FROM Mesta_predaje WHERE id = '$mesto_id'");
    header("location: ../5racuni.php");


}
else{
    header("location: ../login.php");
}
?>