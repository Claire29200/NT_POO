<?php

namespace App\Banque;
/**
 * Objet compte bancaire
 */
abstract class Compte
{
    //Proprietes
    /**
     * Titulaire du compte
     
     *
     * @var string
     */
    private string $titulaire;
    
     
    /**
     * Solde de compte
     * 
     *
     * @var float
     */
    protected $solde;
// Instancier l'objet, l'utiliser sous la forme :d'une variable

/**
 * Constructeur du compte bancaire
 * @param string $nom Nom du titulaire du compte
 * @param float $montant Montant du solde à l'ouverture
 */

public function __construct(string $nom, float $montant = 100)
{
    //On attribue le nom à la propriété titulaire de l'instance crée
    $this->titulaire = $nom;

    //On attribue le montant à la propriété solde de l'instance crée
    $this->solde = $montant;
}

/**
 * Déposer de l'argent sur le compte
 *
 * @param float $montant montant déposé
 * @return void 
 */
public function deposer(float $montant)
{
 // On vérifie si le montant est positif
 if($montant > 0){
    $this->solde += $montant;
 }
}
public function voirSolde()
{
    echo "Le solde du compte est de $this->solde euros.";
}
public function retirer(float $montant)
{
    // On vérifie si le montant est positif et le solde
    if($montant > 0 && $this->solde >= $montant){
        $this->solde -= $montant;
    }else {
        echo "Montant invalide ou solde insuffisant";
    }
}
}