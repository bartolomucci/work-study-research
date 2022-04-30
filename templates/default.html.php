<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title>ALTERNANCES Région Grand-Est</title>
</head>
<body>
    <header>
    <nav class="navbar">
<?php
if($_SERVER['HTTP_REFERER'] == 'http://www.alternance.loc/?controller=home&action=agences')
{
    echo'<a class="btn btn-primary" href="/">Accueil</a>';
}
else
{
    echo '<a class="btn btn-primary" href="/?controller=home&action=agences">Agences</a>';
}
?>
    </nav>
    </header>

    <div class="container">

    <main>
        <?= $content ?>
    </main>

    </div>

    <footer>
        
    </footer>
</body>
</html>