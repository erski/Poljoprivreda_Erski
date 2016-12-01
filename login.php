<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="icon" type="image/jpg" href="18453452-Floral-initial-capital-letter-E-Stock-Vector.jpg">
    <link rel="stylesheet" type="text/css" href="css/nov_css.css">
</head>
<body style="background: black">
<?php include_once ("funkcije/functions.php"); ?>


<form method="post" action="login.php" id="formaLogin">

        <label>Korisnicko ime:</label><br>
        <input type="text"name='username' placeholder="Korisnicko ime"><br><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" placeholder="Password"><br><br><br>

        <button type="submit" name="submit" value="Login" class="btn btn-default">Posalji</button><br><br>

    <?php


    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = ($_POST['password']);


        if (empty($username) or empty($password)) {
            echo 'Polja su prazna! ! !<br>';

        } else {
            $check_login = mysqli_query($con, "SELECT * FROM Korisnici WHERE korisnicko_ime='$username' AND password= '$password'");
            while ($run = mysqli_fetch_array($check_login)){
                $user_id = $run['id'];
                $type123 = $run['type123'];
            }

            if (isset($user_id) and $user_id !=0 and $user_id !=null) {
                if ($type123 == 'd'){
                    echo 'Tvoj nalog je deaktiviran od stane admina! ! !<br>';
                }else{
                    $_SESSION['user_id']=$user_id;
                    header('location: index.php');

                }
            } else {
                echo 'Pogresni podaci! ! !<br>';
            }
        }
    }
    ?>
</form>





</body>
</html>
