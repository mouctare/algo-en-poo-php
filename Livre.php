<?php

class Biblio{
    private $romans = [];
    private $bds = [];
    private $ploar = [];

    public function __construct()
    {
     
    }

    public function ajoutLivre($livre){
        if($livre->getType() === "roman"){
            $this->romans[] = $livre;
        } else if($livre->getType() === "bd"){
            $this->bds[] = $livre;
        }else if($livre->getType() === "polar"){
            $this->ploar[] = $livre;
        }
    }

    public function __toString()
    {
        $text = "";
        $text .= "************* Romans ********** <br/>";
        for ($i = 0 ; $i < count($this->romans); $i++) {
            $text .= $this->romans[$i];
        }
        $text .= "************* BDS ********** <br/>";
        for ($i = 0 ; $i < count($this->bds); $i++) {
            $text .= $this->bds[$i];
        }
        $text .= "************* Polars ********** <br/>";
        for ($i = 0 ; $i < count($this->ploar); $i++) {
            $text .= $this->ploar[$i];
        }
        return $text;
    }
   
}


class Livre{
    private $title;
    private $nbPages;
    private $coverColor;
    private $isTraduction = false;
    private $type;

    public function ___construct($title, $nbPages, $coverColor, $isTraduction, $type){
        $this->title = $title;
        $this->nbPages = $nbPages;
        $this->coverColor = $coverColor;
        $this->isTraduction = $isTraduction;
        $this->type = $type;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of nbPages
     */ 
    public function getNbPages()
    {
        return $this->nbPages;
    }

    /**
     * Set the value of nbPages
     *
     * @return  self
     */ 
    public function setNbPages($nbPages)
    {
        $this->nbPages = $nbPages;

        return $this;
    }

  

    /**
     * Get the value of coverColor
     */ 
    public function getCoverColor()
    {
        return $this->coverColor;
    }

    /**
     * Set the value of coverColor
     *
     * @return  self
     */ 
    public function setCoverColor($coverColor)
    {
        $this->coverColor = $coverColor;

        return $this;
    }

    
     
     public function __toString()
     {
         $texte = "";
         $texte  .=  "Livre : ".$this->title. "<br />";
         $texte .= "Nb pages : ".$this->nbPages. "<br />";
         $texte  .=  "Couverture : ".$this->coverColor. "<br />";
         $texte  .=  "Ce livre est de type : ".$this->type. "<br />";
         $texte  .=  $this->isTraduction ? " Livre traduit en anglais" : "Livre non traduit en anglais"  ."<br />";
        
         return $texte;
     }


    public function ajouterPages($nbAAjouter){
        $this->nbPages += $nbAAjouter;
    }

    


    

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of isTraduction
     */
    public function getIsTraduction()
    {
        return $this->isTraduction;
    }

    /**
     * Set the value of isTraduction
     */
    public function setIsTraduction($isTraduction): self
    {
        $this->isTraduction = $isTraduction;

        return $this;
    }

    
    
}


$livre1 = new Livre();
$livre1->setTitle("L'algo");
$livre1->setNbPages("500");
$livre1->setCoverColor("noir");
$livre1->setType("bd");
$livre1->setIsTraduction(false);
echo $livre1;

$livre2 = new Livre();
$livre2->setTitle("Java");
$livre2->setNbPages("500");
$livre2->setCoverColor("rouge");
$livre2->setType("roman");
$livre2->setIsTraduction(true);
echo $livre2;
$livre3 = new Livre();
$livre3->setTitle("L'algo");
$livre3->setNbPages("500");
$livre3->setCoverColor("noir");
$livre3->setType("roman");
$livre3->setIsTraduction(false);
echo $livre3;

$livre4 = new Livre();
$livre4->setTitle("L'algo-en php");
$livre4->setNbPages("200");
$livre4->setCoverColor("blanc");
$livre4->setType("polar");
$livre4->setIsTraduction(true);
echo $livre4;



$biblioMGA = new Biblio();
$biblioMGA->ajoutLivre($livre1);
$biblioMGA->ajoutLivre($livre2);
$biblioMGA->ajoutLivre($livre3);
$biblioMGA->ajoutLivre($livre4);
echo $biblioMGA;









/* $livre1->afficherLivre();
echo "**************<br/>";
$livre1->setTitle("Algo");
$livre1->ajouterPages(10);
$livre1->setCoverColor("rose");
$livre1->basculerEnAnglais();
$livre1->afficherLivre(); */