<?php

namespace app\models;

class Competences
{
    private int $id ;
    private string $nom;
    private string $code ;
    private string $description;
    private string $created_at;
    private string $updated_at ;

    public function __construct(
        int $id,
        string $nom ,
        string $code ,
        string $description ,
        string $created_at ,
        ?string $updated_at 
    ) {
        $this->id = $id;
        $this->nom = $nom;
        $this->code = $code;
        $this->description = $description;
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
