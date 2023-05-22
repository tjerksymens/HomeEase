<?php
include_once(__DIR__ . "/bootstrap.inc.php");

$allOpmerkingen = Opmerking::getAllOpmerkingen();

?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/arial-rounded-mt-bold" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/home.css">
    <title>HomeEase Alle Opmerking</title>
</head>

<body>
    <div class="sub">
        <h2>🖌️ Alle opmerkingen</h2>
        <a href="index.php">ga terug</a>
    </div>

    <?php foreach ($allOpmerkingen as $opmerking) :  ?>
        <div class="opmerking">
            <span><?php echo date('d/m', strtotime($opmerking['datum'])) ?></span>
            <p><?php echo htmlspecialchars($opmerking['opmerking']) ?></p>
        </div>
    <?php endforeach; ?>

    <?php include_once("header.inc.php"); ?>
    <?php include_once("nav.inc.php"); ?>
</body>

</html>