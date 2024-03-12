<?php

class Voiture{
    /* attributs et méthodes
    ...
    */
    private string $couleur = "Blanche";
    private float $poids = 1500.0;
    private int $prix = 7800;
    public function demarrer(): void{
        echo "démarer\n";
    }
    public function acceler(): void{
        echo "accelerer\n";
    }
    public function changerCouleur(string $nouvelleCouleur): void{
        $this->couleur = $nouvelleCouleur;
    }
    public function changerPoids(float $nouveauPoids): void{
        $this->poids = $nouveauPoids;
    }
    public function changerPrix(float $nouveauPrix): void{
        $this->prix = $nouveauPrix;
    }
    public function obtenirCouleur(): string{
        return $this->couleur;
    }
    public function obtenirPoids(): float{
        return $this->poids;
    }
    public function obtenirPrix(): int{
        return $this->prix;
    }


    // public $couleur;
    // public $poids;
    // public $prix;



    
}

