<?php
include_once(__DIR__ . "/bootstrap.inc.php");

$allOpmerkingen = Opmerking::getLatestOpmerkingen();
$allHerinneringen = Herinnering::getSoonestHerinneringen();
$latestParameters = Parameters::getLatestParameters();
$latestDatetime = $latestParameters['datum'];
$datetimeObj = new DateTime($latestDatetime);
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
    <title>HomeEase Home</title>
</head>

<body>
    <div>
        <div class="sub">
            <h2>🩺 Parameters</h2>
        </div>

        <div class="parameters">
            <div class="bloeddruk">
                <div>
                    <h3>Bloeddruk</h3>

                    <div class="timedate">
                        <div>
                            <span>Tijd</span>
                            <b><?php echo htmlspecialchars($datetimeObj->format('H:i')); ?></b>
                        </div>
                        <div>
                            <span>Datum</span>
                            <b><?php echo htmlspecialchars($datetimeObj->format('d/m/y')); ?></b>
                        </div>
                    </div>

                    <div class="mmHg">
                        <div>
                            <b>SYS</b>
                            <span>mmHg</span>
                        </div>
                        <div>
                            <p><?php echo htmlspecialchars($latestParameters['bovendruk']) ?></p>
                        </div>
                        <div>
                            <b>DIA</b>
                            <span>mmHg</span>
                        </div>
                        <div>
                            <p><?php echo htmlspecialchars($latestParameters['onderdruk']) ?></p>
                        </div>
                    </div>

                    <span>Goede bloeddruk</span>
                </div>
                <div>
                    <svg class="pijltje" width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.15873 14.5453L7.42877 9.15682C8.16925 8.52046 8.16925 7.47914 7.42877 6.84278L1.15873 1.45435" stroke="#292929" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg class="param_bloeddruk" width="4" height="130" viewBox="0 0 4 130" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="2.30953" y1="1.86377" x2="2.30953" y2="16.3183" stroke="#FE0404" stroke-width="3" stroke-linecap="round" />
                        <line x1="2.30953" y1="27.3184" x2="2.30953" y2="41.7729" stroke="#FF8B03" stroke-width="3" stroke-linecap="round" />
                        <line x1="2.30953" y1="52.7729" x2="2.30953" y2="67.2275" stroke="#EBE31B" stroke-width="3" stroke-linecap="round" />
                        <line x1="2.30953" y1="78.2275" x2="2.30953" y2="127.591" stroke="#0B6253" stroke-width="3" stroke-linecap="round" />
                    </svg>
                </div>
            </div>
            <div class="temperatuur_gewicht">
                <div class="temperatuur koorts">
                    <h3>Temperatuur</h3>
                    <p class="value"><?php echo htmlspecialchars($latestParameters['temperatuur']) . "°C" ?></p>
                    <p>Hoge koorts</p>
                </div>
                <div class="gewicht">
                    <h3>Gewicht</h3>
                    <p class="value"><?php echo htmlspecialchars($latestParameters['gewicht']) . " kg" ?></p>
                    <p class="txt">Bmi <span>20.2</span></p>
                    <svg class="marker" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.65142 2.91504L6.68465 4.93674C6.33428 5.1755 5.76095 5.1755 5.41058 4.93674L2.44381 2.91504" stroke="black" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg class="param_gewicht" width="88%" viewBox="0 0 142 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.92064 1.51196H19.6667" stroke="#2CB2FD" stroke-width="3" stroke-linecap="round" />
                        <path d="M25.127 1.51196L57.8889 1.51196" stroke="#0B6253" stroke-width="3" stroke-linecap="round" />
                        <path d="M90.6508 1.51196H112.492" stroke="#FF8B03" stroke-width="3" stroke-linecap="round" />
                        <path d="M63.3492 1.51196L85.1905 1.51196" stroke="#EBE31B" stroke-width="3" stroke-linecap="round" />
                        <path d="M117.952 1.51196H139.794" stroke="#FE0404" stroke-width="3" stroke-linecap="round" />
                    </svg>
                    <p class="txt">Het gewicht is goed</p>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <div>
        <div class="sub">
            <h2>🖌️ Opmerkingen</h2>
            <a href="allOpmerkingen.php">Toon alle</a>
        </div>

        <?php foreach ($allOpmerkingen as $opmerking) :  ?>
            <div class="opmerking">
                <span><?php echo date('d/m', strtotime($opmerking['datum'])) ?></span>
                <p><?php echo htmlspecialchars($opmerking['opmerking']) ?></p>
            </div>
        <?php endforeach; ?>

        <a href="addOpmerking.php">
            <svg class="add" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.25 12.5H18.75M12.5 18.75V6.25" stroke="#292929" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
        <hr>
    </div>

    <div>
        <div class="sub">
            <h2>💡 Herinneringen</h2>
            <a href="allHerinneringen.php">Toon alle</a>
        </div>

        <?php foreach ($allHerinneringen as $herinnering) : ?>
            <div class="herinnering">
                <span><?php echo date('d/m', strtotime($herinnering['datum'])) ?></span>
                <p><?php echo htmlspecialchars($herinnering['herinnering']) ?></p>
            </div>
        <?php endforeach; ?>

        <a href="addHerinnering.php">
            <svg class="add" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.25 12.5H18.75M12.5 18.75V6.25" stroke="#292929" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div>

    <?php include_once("header.inc.php"); ?>
    <?php include_once("nav.inc.php"); ?>
</body>

</html>