<?php
namespace  App\Banque;

class CompteEpargne extends Compte
/**
 * Compte avec taux d'intérêts
 */
{
    /**
     * Taux d'intérêts du compte
     * @var int
     */
    private $taux_interets;
    /**
     * 
     * Construceur de compte epargne
     * @param string $nom Nom du titulaire
     * @param float  $montant Montant du solde à l'ouverture
     * @param int $taux Taux interet
     * @return void
     * 
     */

    public function __construct(string $nom, float $montant, int $taux)
    {
        //On transfère les valeurs nécessaires au constructeur parent
        parent::__construct($nom, $montant);

        $this->taux_interets = $taux;
    }

    /**
     * Get taux d'intérêts du compte
     *
     * @return  int
     */ 
    public function getTauxInterets():int
    {
        return $this->taux_interets;
    }

    /**
     * Set taux d'intérêts du compte
     *
     * @param  int  $taux_interets  Taux d'intérêts du compte
     *
     * @return  self
     */ 
    public function setTauxInterets(int $taux_interets): self
    {
        if($taux_interets >= 0){
        $this->taux_interets = $taux_interets;
        }

        return $this;
    }

    public function verserInterets(){
        $this->solde = $this->solde + ($this->solde * $this->taux_interets / 100);
    }
}