<?php
    class Titulaire {
        private string $_nom ;
        private string $_prenom ;
        private DateTime $_dateNaissance ;
        private string $_ville ;
        private array $_tableauCompte ;


        public function __construct ($nom,$prenom,$dateNaissance,$ville){
            $this ->_nom = $nom ;
            $this ->_prenom = $prenom ;
            $this ->_dateNaissance = new DateTime ($dateNaissance) ;
            $this ->_ville = $ville ;
            $this ->_tableauCompte = [];
        }
    
        public function getNom () {
            return $this ->_nom;
        }

        public function getPrenom () {
            return $this ->_prenom;
        }

        public function getDateNaissance () {
            return $this ->_dateNaissance -> format ('Y m d');
        }

        public function getVille () {
            return $this ->_ville;
        }

        public function setNom ($nom) {
            $this ->_nom = $nom ;
        }

        public function setPrenom ($prenom) {
            $this ->_prenom = $prenom ;
        }

        public function setDateNaissance ($dateNaissance) {
            $this ->_dateNaissance = $dateNaissance ;
        }

        public function setVille ($ville) {
            $this ->_ville = $ville ;
        }

        public function ajouterCompte ($titulaire){
            $this ->_tableauCompte [] = $titulaire ;
        }

        public function afficherComptes(){
            if(count($this->_tableauCompte) > 0){
                echo "<h3>$this</h3>";
                foreach($this->_tableauCompte as $compte)
                    echo $compte;
            }else{
                echo "<h1>$this</h1><br>";
            }
        }

        public function __toString () {
            return $this -> _nom." ".$this -> _prenom;
        }
    }
?>