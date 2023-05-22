<?php
include_once(__DIR__ . "/bootstrap.inc.php");

if (!empty($_POST)) {
    try {
        $herinnering = new Herinnering();
        $herinnering->setDate($_POST['datum']);
        $herinnering->setHerinnering($_POST['herinnering']);
        $herinnering->addHerinnering();
        header("Location: index.php");
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
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
    <title>HomeEase Herinnering Toevoegen</title>
</head>

<body>
    <div class="sub">
        <h2>Voeg herinnering toe</h2>
        <a href="index.php">ga terug</a>
    </div>
    <form action="" method="post">
        <?php if (isset($error)) : ?>
            <div class="form__error">
                <p>
                    <?php echo $error; ?>
                </p>
            </div>
        <?php endif; ?>
        <div class="form__field">
            <label for="datum">Datum</label>
            <input type="date" name="datum" id="datum">
        </div>
        <div class="form__field">
            <label for="opmerking">Herinnering</label>
            <input type="text" name="herinnering" id="herinnering" placeholder="Geef hier de herinnering in" required>
        </div>
        <div class="form__field">
            <input type="submit" value="Toevoegen" id="add_btn_form">
        </div>
    </form>

    <?php include_once("header.inc.php"); ?>
    <?php include_once("nav.inc.php"); ?>
</body>

</html>