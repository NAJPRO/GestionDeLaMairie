<?php
 class Personne{
    public $identifiant;
    public $nom;
    public $prenom;
    public $date_naissance;
    public $contact;
    public $email;
    public $sexe;
    public $nature;



    public function __construct($array)
    {
        $this->hydrater($array);   
    }

    public function hydrater($array){
        foreach ($array as $arg => $val) {
            $this->$arg = $val;
        }
    }

}