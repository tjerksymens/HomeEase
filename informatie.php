<?php
include_once(__DIR__ . "/bootstrap.inc.php");

$allInformatieThuiszorg = Informatie::getAllInformatieThuiszorg();
$allInformatieWatMoetJeDoen = Informatie::getAllInformatieWatMoetJeDoen();
$allInformatieSymptomen = Informatie::getAllInformatieSymptomen();

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
    <link rel="stylesheet" href="css/info.css">
    <title>HomeEase Inforamtie Pagina</title>
</head>

<body>
    <div class="info_page">
        <h1>Informatie</h1>

        <div class="thuiszorg">
            <h2>Tuiszorg</h2>
            <hr>
            <?php foreach ($allInformatieThuiszorg as $informatie) :  ?>
                <div class="arr_title">
                    <svg width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.940002 12.2802L5.28667 7.93355C5.8 7.42021 5.8 6.58022 5.28667 6.06688L0.940002 1.72021" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p><?php echo htmlspecialchars($informatie['title']) ?></p>
                </div>
                <hr>
            <?php endforeach; ?>
        </div>

        <div class="wat_moet_je">
            <h2>Wat moet je doen bij...</h2>
            <hr>
            <?php foreach ($allInformatieWatMoetJeDoen as $wmj) :  ?>
                <div class="arr_title">
                    <svg width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.940002 12.2802L5.28667 7.93355C5.8 7.42021 5.8 6.58022 5.28667 6.06688L0.940002 1.72021" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p><?php echo htmlspecialchars($wmj['title']) ?></p>
                </div>
                <hr>
            <?php endforeach; ?>
        </div>

        <div class="symptomen">
            <h2>Symptomen leiden tot...</h2>
            <hr>
            <?php foreach ($allInformatieSymptomen as $symptomen) :  ?>
                <div class="arr_title">
                    <svg width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.940002 12.2802L5.28667 7.93355C5.8 7.42021 5.8 6.58022 5.28667 6.06688L0.940002 1.72021" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p><?php echo htmlspecialchars($symptomen['title']) ?></p>
                </div>
                <hr>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include_once("header.inc.php"); ?>
    <?php include_once("nav.inc.php"); ?>
</body>

</html>