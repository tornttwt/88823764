<form method="post">
    <input name="start" type="text"
    value="<?php echo isset($_POST['start'])
        ? $_POST['start'] : "" ; ?>">
    <button type="submit">Submit</button>
</form>

<form method="post">
    <input name="end" type="text"
    value="<?php echo isset($_POST['end'])
        ? $_POST['end'] : "" ; ?>">
    <button type="submit">Submit</button>
</form>

<table>
    <?php
    $start = isset($_POST['start'])
        ? intval($_POST['start'])
        : 2;
    $end = isset($_POST['end'])
        ? intval($_POST['end'])
        : 2;
    ?>
    <?php print "Even numbers are"?>
    <?php
    for($i = $start ; $i <= $end ; $i++){ ?>}

    <?php
    if ($i % 2 == 0){
        echo $i;
    }
    ?>
    <?php } ?>
    
    <?php print "Even numbers are"?>
    <?php
    for($i = $start ; $i <= $end ; $i++){ ?>}

    <?php
    if ($i % 2 != 0){
        echo $i;
    }
    ?>
    

<?php } ?>
</table>