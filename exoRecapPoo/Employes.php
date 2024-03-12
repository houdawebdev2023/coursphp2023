<?php

class Employes
{
    private int $matricule;
    private string $nom;
    private string $prenom;
    private dateTime $dateNaissance;
    private dateTime $dateEmbauche;
    private float $salaire;
    private int $age;
    private int $anciennete;

    //getters:

    public function getmatricule():int{
        return $this -> matricule;
    }
    public function getnom():string{
        return $this -> nom;
    }
    public function getprenom():string{
        return $this -> prenom;
    }
    public function getdetNaissance():string{
        return $this -> dateNaissance;
    }
    public function getdateEmbauche():string{
        return $this -> dateEmbauche;
    }
    public function getsalaire():float{
        return $this -> salaire;
    }
    public function getage():int{
        return $this -> age;
    }
    public function getanciennete():float{
        return $this -> anciennete;
    }
    //setters:

    public function setmatricule($Matricule):int{
        $this->matricule=$Matricule;
    }
    public function setnom($Nom):int{
        $this->nom=$Nom;
    }
    public function setprenom($Prenom):int{
        $this->prenom=$Prenom;
    }
    public function setdateNaissance($DateNaissance):int{
        $this->dateNaissance=$DateNaissance;
    }
    public function setdateEmbauche($DateEmbauche):int{
        $this->dateEmbauche=$DateEmbauche;
    }
    public function setsalaire($Salaire):int{
        $this->salaire=$Salaire;
    }
    public function setage($Age):int{
        $this->age=$Age;
    }
    public function setanciennete($Anciennete):int{
        $this->anciennete=$Anciennete;
    }



    //constructeur:

    public function __construct(int $unMatricule, string $Nom, string $Prenom, dateTime $DateNaissance, dateTime $DateEmbauche,float $Salaire){
        $this->Matricule=$Matricule;
        $this->Nom=$Nom;
        $this->Prenom=$Prenom;
        $this->DateNaissance=$DateNaissance;
        $this->DateEmbauche=$DateEmbauche;
        $this->Salaire=$Salaire;

    }

}