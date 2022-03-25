<?php

    class Compte {

            private string $_libelle;
            private float $_soldeIn;
            private string $_devise;
            private Titulaire $_titulaireDeCompte;


            public function __construct ($libelle,$soldeIn,$devise,$titulaireDeCompte) {
            
            $this ->_libelle = $libelle ;
            $this ->_soldeIn = $soldeIn ;
            $this ->_devise = $devise ;
            $this ->_titulaireDeCompte = $titulaireDeCompte ;
            $this ->_titulaireDeCompte -> ajouterCompte ($this);

        }
        
        public function getLibelle (){
            return $this ->_libelle;
        }

        public function getSoldeIn (){
            return $this ->_soldeIn;
        }

        public function credit($montant){
            $this->_soldeIn =$this->_soldeIn+$montant;
            return $this->_soldeIn;
        }

        public function debit($retrait){
            $this->_soldeIn =$this->_soldeIn-$retrait;
            return $this->_soldeIn;
        }
       
        
            
        public function getDevise (){
            return $this ->_devise;
        }

        public function getTitulaireDeCompte (){
            return $this ->_titulaireDeCompte;
        }

        public function setLibelle (){
            return $this ->_libelle;
        }

        public function setSoldeIn (){
            return $this ->_soldeIn;
        }

        public function setDevise (){
            return $this ->_devise;
        }

        public function setTitulaireDeCompte (){
            return $this ->_soldeTitulaireDeCompte;
        }
        
        
        public function virement($compte, $montant){
            // on débite le compte source de $montant à partir duquel on effectue le virement

            $this -> debit ($montant);

            // on crédite le compte cible du même montant

            $compte -> credit ($montant);

        }
        
        public function __toString () {
            return $this -> _libelle." ".$this -> _soldeIn." ".
            $this -> _devise." <br>";
        }

    }
?>