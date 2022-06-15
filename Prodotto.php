<?php 

class Prodotto {
    public $nome_prodotto;
    public $marca;
    public $prezzo;
    public $disponibile=true;

    function __construct($_nome_prodotto, $_marca, $_prezzo){
        $this->marca = $_marca;
        $this->nome_prodotto = $_nome_prodotto;
        $this->prezzo = $_prezzo;
        }

        public function ptinInfo(){
            return "$this->nome_prodotto della marca $this->marca, costo $this->prezzo €";
        }
}