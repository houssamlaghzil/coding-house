<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Coding house</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
    <link id="cssTheme" rel="stylesheet" href="css/themes/default.css" title="defaultStyle"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/pages/login.css"/>
    <?php
$numero = rand(0, 3);// un numero aléatoire de 0 à 3
?>
    <link rel="stylesheet" href="css/<?php echo $numero;?>.css)"/>
</head>

<body class="login">

<?php include("header.php"); ?>

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

<form class="login">
    <section class="login">
    <label class="email">email</label>
    <label>
        <input type="text"/>
    </label>
    <label class="password">password</label>
    <label>
        <input type="password"/>
    </label>
    <button><span>Valider</span></button>
    <button><span>mdp oublié</span></button>
    </section>
</form>

<footer class="login">
    Coding Factory 2020
</footer>

</body>

</html>
