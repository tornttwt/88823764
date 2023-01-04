<form method="post">
    Fist Number : <input name="start" type="text"
    value="<?php echo isset($_POST['start'])
        ? $_POST['start'] : "" ; ?>">
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    Last Number : <input name="end" type="text"
    value="<?php echo isset($_POST['end'])
        ? $_POST['end'] : "" ; ?>">
    <button type="submit">Submit</button>
</form>


<table>
    <?php
    $start = isset($_POST['start'])
        ? intval($_POST['start'])
        : 0;
    $end = isset($_POST['end'])
        ? intval($_POST['end'])
        : 0;
    ?>
    <tr>
        <?php print "Odd numbers are"?>
        <?php
        for($i = $start ; $i <= $end ; $i++){ ?>

            <?php
            if ($i % 2 != 0){
                echo $i;
            }
            ?>
        <?php } ?>
    </tr>
    <?php echo "<br>" ?>
    <tr>
        <?php print "Even numbers are"?>
        <?php
        for($i = $start ; $i <= $end ; $i++){ ?>

            <?php
            if ($i % 2 == 0){
                echo $i;
            }
            ?>
        <?php } ?>
    </tr>
</table>