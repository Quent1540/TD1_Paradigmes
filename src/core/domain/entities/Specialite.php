<?php


class Specialite {
    private int $id;
    private string $libelle;
    private string $description;

    public function __construct(
        int $id,
        string $libelle,
        string $description
    ){
        $this->id=$id;
        $this->description=$description;
        $this->libelle=$libelle;
    }
}