<?php
namespace App\core\domain\entities;

class Praticien{
    private int $id;
    private string $nom;
    private string $prenom;
    private string $ville;
    private string $email;
    private string $telephone;

    public function __construct(
        int $id,
        string $nom,
        string $prenom,
        string $ville,
        string $email,
        string $telephone
    ){
        $this->id=$id;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->ville=$ville;
        $this->email=$email;
        $this->telephone=$telephone;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getVille(){
        return $this->ville;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getTelephone(){
        return $this->telephone;
    }
}