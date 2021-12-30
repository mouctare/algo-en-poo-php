<?php

 class Voiture
 {
     private string $marque;
     private string $model;
     private string $coverColor;
     private int $numberPorte;
     private int $priceTTC;
     private $insElectric = false;
     public static $voitures;
     const MINI = 3;
     const NORMAL = 5;
     const TVA = 20;

     public function __construct($marque, $model, $coverColor, $numberPorte, $priceHT)
     {
         $this->marque = $marque;
         $this->model = $model;
         $this->coverColor = $coverColor;
         $this->numberPorte = $numberPorte;
         $this->insElectric = false;
         $this->priceTTC = $priceHT + $priceHT * self::TVA/100;
         self::$voitures[] = $this; // c'est à dire , l'objet que je suis entrain de créer
     }
     public function dispLayCar()
     {
         echo " Cette voiture  est une " .  $this->marque .  " de la marque "
                . $this->model . " " .  " de couleur " . $this->coverColor .
                " elle a "  . $this->numberPorte . " portes "  . " son prix est de " .$this->priceTTC .($this->insElectric ? " c'est une voiture électric" : " elle est au gazoil") ;
     }

     public function getMarque()
     {
         return $this->marque;
     }
     public function setMarque(string $marque)
     {
         $this->marque = $marque;
     }
     public function getModel()
     {
         return $this->model;
     }
     public function setModel(string $model)
     {
         $this->model = $model;
     }
     public function getCoverColor()
     {
         return $this->coverColor;
     }
     public function setCoverColor(string $coverColor)
     {
         $this->coverColor = $coverColor;
     }
     public function getNumberPorte()
     {
         return $this->numberPorte;
     }
     public function setNumberPorte(int $numberPorte)
     {
         $this->numberPorte = $numberPorte;
     }
     public function getInsElectric()
     {
         return $this->insElectric;
     }
     public function setInsElectric(bool $insElectric)
     {
         $this->insElectric = $insElectric;
     }
   
     public function getPriceTTC()
     {
         return $this->priceTTC;
     }
 
     public function setPriceTTC($price)
     {
         $this->priceTTC = $price;
 
         return $this;
     }

     public static function afficherVoitureMarque($marque)
     {
         for ($i = 0; $i < count(self::$voitures); $i++) {
             if (self::$voitures[$i]->getMarque() !== $marque) {
                 printf(" Nous  ne trouvons pas " . $marque . " dans notre parc ");
             }
         }
     }
 }


$v1 = new Voiture("Toyota", "Ryas", "noir", Voiture::MINI, 3000);

$v2 = new Voiture("Toyota", "Risau", "rouge", Voiture::MINI, 6000);

$v3 = new Voiture("Troen", "Ryas", "jaune", Voiture::MINI, 2000 );

//$tab = [$v1, $v2, $v3];

for($i = 0; $i < count(Voiture::$voitures); $i++){
    echo Voiture::$voitures[$i];

}

Voiture::afficherVoitureMarque("Yotota");