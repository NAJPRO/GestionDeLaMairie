<?php
    class Documents{
        private $id_document;
        private $cni;
        private $acteNaissance;
        private $acteMariage;
        private $doc_perso;

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
        public function setId($id){
            $this->id = $id;
        }
        public function setCni($cni){
            $this->cni = $cni;
        }
        public function setActeNaissance($acte){
            $this->acteNaissance = $acte;
        }
        public function setActeMariage($acte){
            $this->acteMariage = $acte;
        }
        public function setDoc_perso($perso){
            $this->doc_perso = $perso;
        }
    }