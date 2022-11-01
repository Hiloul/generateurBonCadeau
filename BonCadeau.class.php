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
    <p>Montant du bon: <?=random_int(10,10000)?></p>
    <p>Beneficiaire: <?= $this->getFullNameBeneficiaire();?></p>
    <p>Donnateur: <?= $this->getFullNameDonnateur();?></p>
    <p>Date: <?=$this->date ?></p>
    </section>
    <?php
}

public function getPriceMontant() {
    if($this->price > 10 && $this->price < 10000){
        return $this->price.'€';
    } 
}


public function getFullNameBeneficiaire(){
    return strtoupper($this->firstnamebeneficiaire)." ".$this->lastnamebeneficiaire;
    }

    public function getFullNameDonnateur(){
        return strtoupper($this->firstnamedonnateur)." ".$this->lastnamedonnateur;
        }

       
public function setDate(string $date) {
    if ($this ->date > 2022/05/05) {
        $this->date = $date;
    }
}
}


//creer un nouvel objet stocke dans => constructeur pour passe les donnees 
$boncadeau1 = new BonCadeau(5000, "Louis","Monsieur","Louisa","Madame","2022/07/08");
echo $boncadeau1->AfficherBonCadeau()."<br>";

?> 

<link rel="stylesheet" href="style/style.css">

<h1>CONSIGNE</h1>

<p>
Contenir toutes les propriétés provenant du formulaire ainsi qu'un numéro de bon cadeau et une date limite d'utilisation
Dans le constructeur, créer la valeur de la propriété numéro de bon cadeau à 
partir de la date du bon sous la forme: mois - annee - 2 chiffre aléatoire 
Dans le constructeur, créer la valeur de la propriété date d'expiration en 
ajoutant un an à la date du bon
</p>

