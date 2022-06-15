<?php

trait Indirizzo {
    public $paese;
    public $comune;
    public $indirizzo;

        public function printIndirizzi(){
            return "$this->paese $this->comune $this->indirizzo";
        }

        public function setIndirizzi($_paese, $_comune, $_indirizzo){
            $this->paese = $_paese;
            $this->comune = $_comune;
            $this->indirizzo = $_indirizzo;
        }
}