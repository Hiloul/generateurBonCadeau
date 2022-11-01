<?php
include __DIR__."/BonCadeau.class.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
       
    
        $bonCadeau1 = new BonCadeau($_POST['price'],
        $_POST['firstnamebeneficiaire'],
        $_POST['lastnamebeneficiaire'],
        $_POST['firstnamedonnateur'],
        $_POST['lastnamedonnateur'],
        $_POST['date']);
    }
   


?>
 <link rel="stylesheet" href="style/style.css">
<h1>Formulaire à imprimer</h1>


<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bonCadeau1 ->AfficherBonCadeau();
      
    }

    ?>
    
 