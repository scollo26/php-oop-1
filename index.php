<?php
    // dichiarazione della classe
    class Movie {
        // dichiarazione delle proprietà
        public $titolo;
        public $durata;
        public $anno;
        public $genere;
        // dichiarazione costruttore
        function __construct($_titolo, $_durata, $_anno, $_genere)
        {
            $this->titolo = $_titolo;
            $this->durata = $_durata;
            $this->anno = $_anno;
            $this->genere = $_genere;
        }
        // dichiarazione e definizione dei metodi
        public function setTitolo($_titolo){
            $this->titolo = $_titolo;
        }
        public function setDurata($_durata){
            $this->durata = $_durata;
        }
        public function setAnno($_anno){
            $this->anno = $_anno;
        }
        public function setGenere($_genere){
            $this->genere = $_genere;
        }
        public function getTitolo(){
            return $this->titolo;
        }
        public function getDurata(){
            return $this->durata;
        }
        public function getAnno(){
            return $this->anno;
        }
        public function getGenere(){
            return $this->genere;
        }
    }
   // stampa
    $IronMan = new Movie('Iron Man', '126 ', '	2008', 'azione');
    
    $BatmanBegins = new Movie('Batman Begins', '140 ', '	2005', 'azione');
    
    $Avengers = new Movie('Avengers: Infinity War', '149 ', '2018', 'fantascienza');
   
    var_dump($Avengers, $BatmanBegins,$IronMan);

?>