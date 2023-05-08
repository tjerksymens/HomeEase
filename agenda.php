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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/agenda.css">
    <title>HomeEase Agenda</title>
</head>
<h1>Agenda</h1>

<body class="light">
    <div class="calendar">
        <div class="calendar-header">
            <span id="month-picker">
                Mei
            </span>
            <div class="year-picker">
                <span class="year-change" id="prev-year">
                    <pre><</pre>
                </span>
                <spand id="year">2023</spand>
                <span class="year-change" id="next-year">
                    <pre>></pre>
                </span>
            </div>
        </div>

        <div class="calendar-body">
            <div class="calendar-week-day">
                <div>Ma</div>
                <div>Di</div>
                <div>Wo</div>
                <div>Do</div>
                <div>Vr</div>
                <div>Za</div>
                <div>Zo</div>
            </div>
            <div class="calendar-days">
                <div>1
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div>2</div>
                <div>3</div>
                <div>4</div>
                <div>5</div>
                <div>6</div>
                <div>7</div>
                <div>1</div>
                <div>2</div>
                <div>3</div>
                <div>4</div>
                <div>5</div>
                <div>6</div>
                <div>7</div>

            </div>
        </div>

        <div class="month-list"></div>

    </div>

    <?php include_once("nav.inc.php"); ?>
    <script src="js/script.js"></script>
</body>

</html>