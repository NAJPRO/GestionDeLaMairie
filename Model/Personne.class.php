<?php
 class Personne{
    protected $identifiant;
    protected $nom;
    protected $prenom;
    protected $date_naissance;
    protected $contact;
    protected $email;
    protected $sexe;
    protected $nature;



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

    public function setIdentifiant($id){
        $this->identifiant = $id;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function setDate_naissance($date){
        $this->date_naissance = $date;
    }

    public function setContact($contact){
        $this->contact = $contact;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setSexe($sexe){
        $this->sexe = $sexe;
    }

    public function setNature($nature){
        $t = ['mari', 'mariee', 'temoins', 'parent'];
        if(in_array($nature, $t)){
            $this->nature = $nature;
        }
    }
}