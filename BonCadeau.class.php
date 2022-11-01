<?php
class BonCadeau{
    protected int $price;
    protected string $lastnamebeneficiaire;
    protected string $firstnamebeneficiaire;
    protected string $lastnamedonnateur;
    protected string $firstnamedonnateur;
    protected string $date;


public function __construct(int $price, string $lastnamebeneficiaire, string $firstnamebeneficiaire,
string $lastnamedonnateur, string $firstnamedonnateur, string $date)
{
    $this->price=$price;
    $this->lastnamebeneficiaire=$lastnamebeneficiaire;
    $this->firstnamebeneficiaire=$firstnamebeneficiaire;
    $this->lastnamedonnateur=$lastnamedonnateur;
    $this->firstnamedonnateur=$firstnamedonnateur;
    $this->date=$date;
}

public function showAll(){


}

public function AfficherBonCadeau(){?>
<section>
    <p>Montant du bon: <?=$this->getPriceMontant(); ?></p>
    <p>Beneficiaire: <?= $this->lastnamebeneficiaire?> <?= $this->firstnamebeneficiaire?></p>
    <p>Donnateur: <?= $this->lastnamedonnateur?> <?= $this->firstnamedonnateur?></p>
    <p>Date: <?=$this->date ?></p>
    </section>
    <?php
}

public function getPriceMontant() {
    if($this->price > 10 && $this->price < 10000){
        return $this->price.'€';
    } 
}

}
?> 

<link rel="stylesheet" href="style/style.css">

<h1>CONSIGNE</h1>

<p>

Ensuite créez le fichier bon-cadeau.php. 
Lors de la réception des informations, vous devrez créer un objet bon cadeau 
à partir d'une classe bon cadeau. Pour cela, créez un fichier BonCadeau.class.php 
et créez y une classe BonCadeau qui devra respecter les contraites suivantes:

Contenir toutes les propriétés nécessaires pour stocker les informations d'un 
bon cadeau provenant du formulaire ainsi qu'un numéro de bon cadeau et une date limite d'utilisation
Dans le constructeur, créer la valeur de la propriété numéro de bon cadeau à 
partir de la date du bon sous la forme: mois - annee - 2 chiffre aléatoire 
Dans le constructeur, créer la valeur de la propriété date d'expiration en 
ajoutant un an à la date du bon
Idéalement, les propriétés devront être protected, vous devrez créer des getter 
et des setter (ou utiliser les méthodes magiques __get et __set)
Contenir une méthode permettant d'afficher le bon cadeau avec toutes ses informations en HTML
 

Dans le fichier bon-cadeau.php, récupérez les données envoyées par le formulaire et 
utilisez les pour créer un nouvel objet BonCadeau. Affichez ensuite le bon cadeau sur la page.

</p>