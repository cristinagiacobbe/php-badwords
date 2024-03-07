<?php
$censoredPar = []

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post result</title>
</head>

<body>
    <p><?php echo $_GET["par"] ?></p>
    <p><?php echo strlen($_GET["par"]) ?></p>

    <p><?php if (str_contains($_GET["par"], $_GET["badword"])) : ?>
            <?php $censoredPar = str_replace($_GET["badword"], "***", $_GET["par"]) ?>
            <?php echo $censoredPar ?>
    <p><?php echo strlen($censoredPar) ?></p>
<?php endif; ?></p>
</body>

</html>