<?php
include_once(__DIR__ . "/bootstrap.inc.php");

$allOpmerkingen = Opmerking::getAllOpmerkingen();
$allHerinneringen = Herinnering::getAllHerinneringen();

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
    <link rel="stylesheet" href="css/homepage.css">
    <title>HomeEase Home</title>
</head>

<body>
    <?php include_once("header.inc.php"); ?>

    <div>
        <div class="sub">
            <h2>🩺 Parameters</h2>
            <a href="">Toon alle</a>
        </div>



        <svg class="add" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.25 12.5H18.75M12.5 18.75V6.25" stroke="#292929" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <hr>
    </div>

    <div>
        <div class="sub">
            <h2>🖌️ Opmerkingen</h2>
            <a href="">Toon alle</a>
        </div>

        <?php foreach ($allOpmerkingen as $opmerking) :  ?>
            <div class="opmerking">
                <span><?php echo date('d/m', strtotime($opmerking['datum'])) ?></span>
                <p><?php echo htmlspecialchars($opmerking['opmerking']) ?></p>
            </div>
        <?php endforeach; ?>

        <svg class="add" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.25 12.5H18.75M12.5 18.75V6.25" stroke="#292929" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <hr>
    </div>

    <div>
        <div class="sub">
            <h2>💡 Herinneringen</h2>
            <a href="">Toon alle</a>
        </div>

        <?php foreach ($allHerinneringen as $herinnering) : ?>
            <div class="herinnering">
                <span><?php echo date('d/m', strtotime($herinnering['datum'])) ?></span>
                <p><?php echo htmlspecialchars($herinnering['herinnering']) ?></p>
            </div>
        <?php endforeach; ?>

        <svg class="add" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.25 12.5H18.75M12.5 18.75V6.25" stroke="#292929" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </div>

    <?php include_once("nav.inc.php"); ?>
</body>

</html>