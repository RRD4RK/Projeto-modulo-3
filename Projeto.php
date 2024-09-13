<?php

class Animal{
    public $nome;
    public $raca;
    public $quantPatas;
    public $cor;
    public $peso;
    public $tamanho;
    public $Humano;


    public function __construct($nome, $raca, $quantPatas, $cor, $peso, $tamanho, $Humano){
        $this->nome;
        $this->raca;
        $this->quantPatas;
        $this->cor;
        $this->peso;
        $this->tamanho;
        $this->Humano;
    }

    public function falar(){
        echo"Animal Falando";
    }

}


class cachorro extends Animal{
    public function falar(){
        echo "Au Au";
    }
}

class Gato extends Animal{
    public function falar(){
        echo "Miau Miau";
    }
}

class Pintinho extends Animal{
    public function falar(){
        echo "Piu Piu";
    }
}

class Humano{
    public $nome;
    public $idade;
    public $endereco;
    public $contato;

    public function __construct($nome, $idade, $endereco, $contato){
    $this->nome;
    $this->idade;
    $this->endereco;
    $this->contato;
    }

}

class Funcionarios extends Humano{
    public $salario;
    public function __construct($nome, $idade, $endereco, $contato,$salario){
        parent::__construct($nome, $idade, $endereco, $contato);
        $this->salario=$salario;
    }

}

class Balconista extends Funcionarios{
    public function __construct($nome, $idade, $endereco, $contato, $salario){
        parent::__construct($nome, $idade, $endereco, $contato, $salario);
    }
}

class Veterinario extends Funcionarios{
    public function __construct($nome, $idade, $endereco, $contato, $salario){
        parent::__construct($nome, $idade, $endereco, $contato, $salario);
    }
}
class Vendedor extends Funcionarios{
    public function __construct($nome, $idade, $endereco, $contato, $salario){
        parent::__construct($nome, $idade, $endereco, $contato, $salario);
    }
}

class Produtos{
    public $nome;
    public $preco;
    public function __construct($nome, $preco){
        $this->nome;
        $this->preco;
    }
}

class Venda {
    public $humano;
    public $produtos=[];
    public function __construct(Humano $humano){
        $this->Humano = $humano;
    }

    public function novaVenda(Produtos $produtos){
        $this->produtos[] = $produtos;
    }
}

$HumanosCad=[];
$Animais=[];
$Funcionario=[];
$Produto=[];
$venda=[];

$escolha="";
function Menu($escolha){
    global $escolha;
    echo"Bem Vindo ao Sistema\n";
    echo"1-Adicionar Dono\n
    2-Adicionar Animal\n
    3-Adicionar Funcionario\n
    4-Adicionar Produto\n
    5-Adicionar Venda\n
    6-Encerrar Sistema\n";
    do{
        $escolha=readline("Escolha o que deseja fazer");
    }while($escolha<1 and $escolha>6);

    if($escolha == 1){
        addHumano($escolha);
    }
    elseif($escolha == 2){
        addAnimal($escolha);
    }
    elseif($escolha == 3){
        addFunc($escolha);
    }
    elseif($escolha == 4){
        addProd($escolha);
    }
    elseif($escolha == 5){
        addVenda($escolha);
    }
    elseif($escolha == 6){
        fecharSis($escolha);
    }
}

function addHumano($escolha){
    global $HumanosCad;
    do{
        $nome = readline("Nome:");
        $idade = readline("Idade:");
        $endereco = readline("Endereço:");
        $contato = readline("Contato:");
        
        $humano = new Humano($nome, $idade, $endereco, $contato);
        $HumanosCad[]= $humano;
        echo "Humano adicionado com sucesso\n";
    
        $cadastrar = readline("Deseja continuar cadastrando\n
        1-Sim\n
        2-Não");
    }while($cadastrar=="1");
    if($cadastrar == "2"){
        Menu($escolha);
    }
}

function addAnimal($escolha){
    global $Humano;


 do{
        $nome = readline("Nome: ");
        $raca = readline("Raça: ");
        $quantPatas = readline("Quantidade de Patas: ");
        $cor = readline("Cor: ");
        $peso = readline("Peso: ");
        $tamanho = readline("Tamanho: ");

        
        $Animal = new Animal($nome, $raca, $quantPatas, $cor, $peso, $tamanho, $Humano);
        $Animais[]= $Animal;
        echo "Animal adicionado com sucesso\n";
    
        $cadastrar = readline("Deseja continuar cadastrando\n
        1-Sim\n
        2-Não");
    }while($cadastrar=="1");
    if($cadastrar == "2"){
        Menu($escolha);
    }
}


Menu($escolha);