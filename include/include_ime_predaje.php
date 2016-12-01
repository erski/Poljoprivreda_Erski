<?php
include_once ("baze.php");
?>

<div class="form-group">
    <label class="control-label">Ime:</label>
    <select class="form-control"  name="ime">


        <?php

        $result1=mysqli_query($con,"SELECT *
                            FROM Imena_predaje ");
        while($row=mysqli_fetch_array($result1))
        {
            $ime = $row["ime"];
            $prezime = $row["prezime"];

            ?>

            <option value="<?php echo $ime.' '.$prezime;?> "><?php echo $ime.' '.$prezime;?></option>;

            <?php
        }

        ?>

    </select><br>
</div>