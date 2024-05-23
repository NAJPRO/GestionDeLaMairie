<?php
class ActeMariage{
    private $identifiant;
    private Personne $conjoin;
    private Personne $conjointe;
    private Personne $temoin_conjoin;
    private Personne $temoin_conjointe;
    private Personne $pere_conjoin;
    private Personne $pere_conjointe;
    private Personne $mere_conjoin;
    private Personne $mere_conjointe;
    private $nom_maire;
    private $date_etablissement;


    public function __construct($array)
    {
        $this->hydrater($array);   
    }

    public function hydrater($array){
        foreach ($array as $arg => $val) {
            $method = 'set'. ucfirst($arg);
            if(method_exists($this, $method)){
                $this->$method($val);
            }
            # code...
        }
    }

    public function __get($arg){
        return $this->$arg;
    }

    public function setConjoin($perso){
        if(is_object($perso)){
            if($perso->nature == 'mari'){
                $this->conjoin = $perso;
            }
        }
    }

    public function setConjointe($perso){
        if(is_object($perso)){
            if($perso->nature == 'mariee'){
                $this->conjoin = $perso;
            }
        }
    }

    public function setTemoin_onjoin($perso){
        if(is_object($perso)){
            if($perso->nature == 'temoins'){
                $this->conjoin = $perso;
            }
        }
    }

    public function setTemoin_conjointe($perso){
        if(is_object($perso)){
            if($perso->nature == 'temoins'){
                $this->conjoin = $perso;
            }
        }
    }

    public function setPere_conjoin($perso){
        if(is_object($perso)){
            if($perso->nature == 'parent'){
                $this->conjoin = $perso;
            }
        }
    }

    public function setPere_conjointe($perso){
        if(is_object($perso)){
            if($perso->nature == 'parent'){
                $this->conjoin = $perso;
            }
        }
    }

    public function setMere_conjoin($perso){
        if(is_object($perso)){
            if($perso->nature == 'parent'){
                $this->conjoin = $perso;
            }
        }
    }

    public function setMere_conjointe($perso){
        if(is_object($perso)){
            if($perso->nature == 'parent'){
                $this->conjoin = $perso;
            }
        }
    }

    public function setIdentifiant($id){
        $this->identifiant = $id;
    }
    public function setNom_maire($maire){
        $this->nom_maire = $maire;
    }

    public function setDate_etablissement($date){
        $this->date_etablissement = $date;
    }
}