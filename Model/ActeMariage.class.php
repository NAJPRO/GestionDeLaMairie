<?php
class ActeMariage{
    public $identifiant;
    public $conjoin;
    public $conjointe;
    public $temoin_conjoin;
    public $temoin_conjointe;
    public $pere_conjoin;
    public $pere_conjointe;
    public $mere_conjoin;
    public $mere_conjointe;
    public $nom_maire;
    public $date_etablissement;
    public $statut;


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