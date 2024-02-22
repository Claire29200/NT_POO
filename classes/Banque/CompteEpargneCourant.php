<?php

class CompteEpargneCourant extends CompteEpargne
{
    private $decouvert;
    /**
     * Construceur de compte courant
     * @param string $nom Nom du titulaire
     * @param float  $montant Montant du solde à l'ouverture
     * @param int $decouvert  Decouvert autorisé
     * @return void
     */

    public function __construct(string $nom, float $montant, int $taux, int $decouvert)
    {
        //on transfère les infos nécessaires au constructeur de Compte
        parent::__construct($nom, $montant, $taux);

        $this->decouvert = $decouvert;
    }

    public function getDecouvert():int
    {
        return $this->decouvert;
    }
    public function setDecouvert(int $montant): self
    {
        if($montant >= 0){
            $this->decouvert = $montant;
    }
    return $this;
    }


    public function retirer(float $montant)
    {
        //On vérifie si le découvert autorise le retrait
        if($montant > 0 && $this->solde - $montant >= -$this->decouvert){
              $this->solde -= $montant;           
        }else{
            echo 'Solde insuffisant';
        }
    }
}