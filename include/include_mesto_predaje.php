<?php
include_once ("baze.php");
?>

<div class="form-group">
    <label class="control-label">Mesto predaje:</label>
    <select class="form-control"  name="mesto">


        <?php

        $result1=mysqli_query($con,"SELECT *
                            FROM Mesta_predaje ");
        while($row=mysqli_fetch_array($result1))
        {
            $name = $row["ime"];


            ?>

            <option value="<?php echo $name;?> "><?php echo $name;?></option>;

            <?php
        }

        ?>

    </select><br>
</div>