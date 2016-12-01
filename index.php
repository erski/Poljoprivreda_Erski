<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Početna stranica</title>
    <link rel="icon" type="image/jpg" href="18453452-Floral-initial-capital-letter-E-Stock-Vector.jpg">

    <?php
    include_once ("include/povezivanje.php");
    include_once ("funkcije/functions.php");
    ?>
</head>
<body>
<?php
if(loggedin()){     ?>



<nav class="col-lg-12">
        <?php
        include_once ("include/header.php");
        ?>
</nav><br>

    <div class="col-lg-offset-1 col-lg-10">
        <h1><b><u>POCETNA STRANA</u></b></h1>

        <h4>ispis za tekucu sezonu, spisak svih parcela, sa datumima setve, prskanjem, spartanjem i vrsidbe i kolicinom prinosa</h4>

        <svg id="svg" version="1.1" width="600" height="600" viewBox="0 0 320 320" fill="none" stroke="#000" stroke-linecap="round"
             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                <path id="r1">
                    <animate id="p1" attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite"/>
                    <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin"/>
                </path>
                <path id="r2">
                    <animate attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite" begin="p1.begin+1s"/>
                    <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin+1s"/>
                </path>
                <path id="r3">
                    <animate attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite" begin="p1.begin+2s"/>
                    <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin+2s"/>
                </path>
                <path id="r4">
                    <animate id="p1" attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite" begin="p1.begin+3s"/>
                    <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin+3s"/>
                </path>
                <path id="r5">
                    <animate attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite" begin="p1.begin+4s"/>
                    <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin+4s"/>
                </path>
                <path id="r6">
                    <animate attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite" begin="p1.begin+5s"/>
                    <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin+5s"/>
                </path>
            </defs>
            <use xlink:href="#r1"/>
            <use xlink:href="#r1" transform="rotate(60 160 160)"/>
            <use xlink:href="#r1" transform="rotate(120 160 160)"/>
            <use xlink:href="#r1" transform="rotate(180 160 160)"/>
            <use xlink:href="#r1" transform="rotate(240 160 160)"/>
            <use xlink:href="#r1" transform="rotate(300 160 160)"/>
            <use xlink:href="#r2" transform="rotate(30 160 160)"/>
            <use xlink:href="#r2" transform="rotate(90 160 160)"/>
            <use xlink:href="#r2" transform="rotate(150 160 160)"/>
            <use xlink:href="#r2" transform="rotate(210 160 160)"/>
            <use xlink:href="#r2" transform="rotate(270 160 160)"/>
            <use xlink:href="#r2" transform="rotate(330 160 160)"/>
            <use xlink:href="#r3"/>
            <use xlink:href="#r3" transform="rotate(60 160 160)"/>
            <use xlink:href="#r3" transform="rotate(120 160 160)"/>
            <use xlink:href="#r3" transform="rotate(180 160 160)"/>
            <use xlink:href="#r3" transform="rotate(240 160 160)"/>
            <use xlink:href="#r3" transform="rotate(300 160 160)"/>
            <use xlink:href="#r4" transform="rotate(30 160 160)"/>
            <use xlink:href="#r4" transform="rotate(90 160 160)"/>
            <use xlink:href="#r4" transform="rotate(150 160 160)"/>
            <use xlink:href="#r4" transform="rotate(210 160 160)"/>
            <use xlink:href="#r4" transform="rotate(270 160 160)"/>
            <use xlink:href="#r4" transform="rotate(330 160 160)"/>
            <use xlink:href="#r5"/>
            <use xlink:href="#r5" transform="rotate(60 160 160)"/>
            <use xlink:href="#r5" transform="rotate(120 160 160)"/>
            <use xlink:href="#r5" transform="rotate(180 160 160)"/>
            <use xlink:href="#r5" transform="rotate(240 160 160)"/>
            <use xlink:href="#r5" transform="rotate(300 160 160)"/>
            <use xlink:href="#r6" transform="rotate(30 160 160)"/>
            <use xlink:href="#r6" transform="rotate(90 160 160)"/>
            <use xlink:href="#r6" transform="rotate(150 160 160)"/>
            <use xlink:href="#r6" transform="rotate(210 160 160)"/>
            <use xlink:href="#r6" transform="rotate(270 160 160)"/>
            <use xlink:href="#r6" transform="rotate(330 160 160)"/>
        </svg>
    </div>






<div>
    <p>ja sam milan</p>
</div>

    <?php
}else
    header("location: login.php");
?>
</body>
</html>