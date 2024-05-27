<?php
    class Documents{
        public $id_document;
        public $cni;
        public $acteNaissance;
        public $acteMariage;
        public $doc_perso;

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