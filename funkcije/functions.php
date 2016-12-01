<?php

include 'include/baze.php';

session_start();
function loggedin(){
    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
        return true;
    }
    else{
        return false;
    }
}
$kor_id = $_SESSION['user_id'];

$list_query1 =mysqli_query($con, "SELECT * FROM Korisnici WHERE id='$kor_id'");
while ($run_list1 = mysqli_fetch_array($list_query1)){
    $kor_ime = $run_list1['ime'];
    $kor_prezime = $run_list1['prezime'];
    $user_level = $run_list1['user_level'];
}


    ?>