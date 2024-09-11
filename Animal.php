<?php

class Animal{
    public $nome;
    public $raca;
    public $quantPatas;
    public $cor;
    public $peso;
    public $tamanho;



    public function __construct($nome, $raca, $quantPatas, $cor, $peso, $tamanho){
        $this->nome;
        $this->raca;
        $this->quantPatas;
        $this->cor;
        $this->peso;
        $this->tamanho;
    }

    public function falar(){
        echo"Animal Falando";
    }

}


$animal1 = new Animal("Pitoco", "Bulldog", 4, "Marrom", 55, "Médio");