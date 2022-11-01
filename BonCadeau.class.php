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
$boncadeau1 = new BonCadeau(5000, "Monsieur","Louis","MAdame","LOuisa","2022/07/08");
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

<?php
/*
 * L'entrée est constituée de champs séparés par un point-virgule,
 * et le premier champ est un ID à utiliser comme clé.
 */

$input = <<<'EOF'
1;PHP;Likes dollar signs
2;Python;Likes whitespace
3;Ruby;Likes blocks
EOF;

function input_parser($input) {
    foreach (explode("\n", $input) as $line) {
        $fields = explode(';', $line);
        $id = array_shift($fields);

        yield $id => $fields;
    }
}

foreach (input_parser($input) as $id => $fields) {
    echo "$id:\n";
    echo "    $fields[0]\n";
    echo "    $fields[1]\n";
}
?>