<?php

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Générateur de Bons-Cadeaux</title>
</head>
<body>
<h1>Générateur de Bon-Cadeau</h1>

<form action="bon-cadeau.php" method="POST">
    <p>
<label for="price">Montant: </label>
<input type="number" name="price" placeholder="10/10000€">
    </p>

    <p>
<label for="name1">Bénéficiaire: </label>
<input type="text" name="lastnamebeneficiaire" placeholder="nom">
<input type="text" name="firstnamebeneficiaire" placeholder="prénom">
    </p>

    <p>
<label for="name1">Donnateur: </label>
<input type="text" name="lastnamedonnateur" placeholder="nom">
<input type="text" name="firstnamedonnateur" placeholder="prénom">
    </p>

<p>
    <label for="date">Date d'expiration: </label>
<input type="date" name="date">
</p>
<p>
    <input type="submit" value="Envoyer" id="sub">
</p>
</form>



</body>
</html>