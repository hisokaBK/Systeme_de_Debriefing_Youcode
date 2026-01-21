<?php

namespace app\models;

class Sptint
{
    private int $id ;
    private string $nom;
    private string $photo ;
    private string $date_debut;
    private string $date_fin;
    private string $created_at;
    private string $updated_at ;

    public function __construct(
        int $id,
        string $nom ,
        string $photo ,
        string $date_debut ,
        string $date_fin ,
        string $created_at ,
        ?string $updated_at 
    ) {
        $this->id = $id;
        $this->nom = $nom;
        $this->photo = $photo;
        $this->date_debut = $date_debut;
        $this->date_fin = $date_fin;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function __get(string $property)
    {
            return $this->$property;
    }

    public function __set(string $property, $value): void
    {
            $this->$property = $value;
    }
}
