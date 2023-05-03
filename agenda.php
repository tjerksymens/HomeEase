<?php



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
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/calendar.js"></script>
    <title>HomeEase Agenda</title>
</head>

<body>
    <h1>Agenda</h1>

    <div class="container">
        <div class="calendar">
            <div class="calendar-header">
                <div class="month-picker" id="month-picker"> Mei </div>
                <div class="year-picker" id="year-picker">
                    <span class="year-change" id="pre-year">
                        <pre><</pre>
                    </span>
                    <span id="year">2023</span>
                    <span class="year-change" id="next-year">
                        <pre>></pre>
                    </span>
                </div>
            </div>

            <div class="calendar-body">
                <div class="calendar-week-days">
                    <div>Ma</div>
                    <div>Di</div>
                    <div>Wo</div>
                    <div>Do</div>
                    <div>Vr</div>
                    <div>Za</div>
                    <div>Zo</div>
                    <div class="calendar-days"></div>
                </div>
                <div class="calendar-footer"></div>
                <div class="date-time-formate">
                    <div class="day-text-formate">VANDAAG</div>
                    <div class="date-formate">03 - mei - 2023</div>
                </div>

                <div class="month-list"></div>

            </div>

        </div>
    </div>

    <?php include_once("nav.inc.php"); ?>
</body>

</html>