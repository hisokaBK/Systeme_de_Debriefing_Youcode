<?php

namespace App\Models;

class Utilisateur
{
    private int $id ;
    private string $prenom;
    private string $nom;
    private string $email;
    private string $photo;
    private string $motDePasse;
    private string $role;
    private bool $actif;
    private string $createdAt ;
    private string $updatedAt ;

    public function __construct(
        string $id,
        string $prenom,
        string $nom,
        string $email,
        string $photo,
        string $role,
        string $motDePasse,
        bool $actif = true
    ) {
        $this->id = $id ;
        $this->prenom      = $prenom;
        $this->nom         = $nom;
        $this->email       = $email;
        $this->photo       = $photo;
        $this->motDePasse  = $motDePasse;
        $this->role        = $role;
        $this->actif       = $actif;
    }

    public function __get(string $property)
    {
            return $this->$property;
    }


    public function __set(string $property, $value): void {
        $this->$property = $value;
    }
}
