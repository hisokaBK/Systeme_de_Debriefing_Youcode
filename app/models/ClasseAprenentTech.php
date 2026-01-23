<?php

namespace app\models;

class ClasseAprenentTech
{
    private int $id ;
    private int $teacher_id ;
    private int $apprenant_id ;
    private int $classeAprenentTech_id ;
    private string $created_at;
    private string $updated_at ;

    public function __construct(
        int $id,
        int $teacher_id ,
        int $apprenant_id ,
        int $classeAprenentTech_id ,
        string $created_at ,
        ?string $updated_at 
    ) {
        $this->id = $id;
        $this->teacher_id = $teacher_id;
        $this->apprenant_id = $apprenant_id;
        $this->classeAprenentTech_id = $classeAprenentTech_id;
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
