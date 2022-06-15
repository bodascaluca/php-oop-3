<?php

include_once __DIR__ . "/Prodotto.php";
include_once __DIR__ . "/Indirizzo.php";

class Utente {
    use Indirizzo;

    public $nome;
    public $email;
    public $carta;
    public $mese_scadenza;
    public $anno_scadenza;
    public $carello = [];
    public $emailArray = [];
    private $prezzo_da_scontare;

    function __construct($_nome, $_email, $_carta, $_mese_scadenza, $_anno_scadenza){
        $this->nome = $_nome;
        $this->email = $_email;
        $this->carta = $_carta;
        $this->mese_scadenza = $_mese_scadenza;
        $this->anno_scadenza = $_anno_scadenza;
    }

    function addProductCart($_product){
        if($_product->disponibile){
            $this->carello[] = $_product;
        } else {
          throw new Exception("Prodotto non disponibile");
        }
    }
// OOP2
    // function getTotalPrice(){
    //     $total_price = 0;
    //     foreach($this->carello as $item){
    //         $total_price += $item->prezzo;
    //     }
    //     return $total_price;
    // } 

    //OPP3

    function getTotalPrice(){
        $total_price = 0;
        foreach($this->carello as $item){
            $total_price += $item->prezzo;
        }
        if($this->emailCheck()){
            $total_price= $total_price * 0.8;
        }
        return $total_price;
    } 

    function emailCheck(){
        $newPrice = 0;
        if($this->email && $this->nome){
            return true;
        }else {
            return false;
        }
    }

    function yearValidation(){
        $current_mese= 11;
        $current_year = 2022;
        if($this->anno_scadenza >= $current_year && $this->mese_scadenza <= $current_mese){
            return "La tua carta è valida, puoi procedere al pagamento";
        } else {
            return "La tua carta non è valida inserisci una nuova carta di pagamento" ;
        }
    }
}