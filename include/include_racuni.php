<?php
include_once ("baze.php");
?>

<div class="form-group">
    <label class="control-label">Uplata na račun:</label>
    <select class="form-control"  name="racun">


        <?php

        $result1=mysqli_query($con,"SELECT *
                            FROM Racuni ");
        while($row=mysqli_fetch_array($result1))
        {
            $ime_prezime = $row["ime_prezime"];
            $ime_banke = $row["ime_banke"];
            $broj_racuna = $row["broj_racuna"];
            ?>

            <option value="<?php echo $ime_prezime.' / '.$ime_banke.' / '.$broj_racuna;?> "><?php echo $ime_prezime.' / '.$ime_banke.' / '.$broj_racuna;?></option>;

            <?php
        }

        ?>

    </select><br>
</div>