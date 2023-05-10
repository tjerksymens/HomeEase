<?php
include_once("bootstrap.inc.php");

$taken = Taken::getAllTakenGedaan();

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
    <link rel="stylesheet" href="css/taken.css">
    <title>HomeEase Takenlijst</title>
    <style>
        .gedaan {
            text-decoration: underline;
            text-underline-offset: 8px;
        }

        .taak p {
            display: grid;
            grid-template-columns: 35% 65%;
            line-height: 48px;
        }
    </style>
</head>

<body>

    <h1>Takenlijst</h1>

    <div class="takenlijst">
        <a class="te_doen" href="teDoen.php">Te doen</a>
        <a class="in_behandeling" href="takenlijst.php">In behandeling</a>
        <a class="gedaan" href="gedaan.php">Gedaan</a>
    </div>

    <div class="taken">
        <?php foreach ($taken as $taak) : ?>
            <div class="taak">
                <p><strong><?php echo htmlspecialchars($taak['verzorger']) . " "; ?></strong><?php echo htmlspecialchars($taak['title']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <svg class="add_btn" width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="52" height="52" rx="4" fill="#0B6253" />
        <path d="M13 26H39M26 39V13" stroke="#F5F3F3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    </svg>

    <?php include_once("header.inc.php"); ?>
    <?php include_once("nav.inc.php"); ?>
</body>

</html>