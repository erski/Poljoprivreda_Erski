<?php
// check request
if(isset($_GET['id']) && isset($_GET['id']) != "")
{
    // include Database connection file
    include_once ("../include/baze.php");

    // get user id
    $user_id = $_GET['id'];

    $result = mysqli_query($con, "DELETE FROM Korisnici WHERE id = '$user_id'");
     header("location: ../profil.php");


}
else{
    header("location: ../login.php");
}
?>