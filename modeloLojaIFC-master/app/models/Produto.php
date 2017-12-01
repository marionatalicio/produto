<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 09/11/2017
 * Time: 10:40
 */

require_once "Conexao.php";

class Produto {

    public $id;
    public $nome;
    public $preco;
    public $categoria;
    public $estoque;
    //estoque

    public function __construct($nome, $preco, $categoria, $estoque, $id = null){ //estoque
        $this->nome = $nome;
        $this->preco = $preco;
        $this->categoria = $categoria;
        $this->estoque = $estoque;
        $this->id = $id;
    }

    public function estaDisponivel(){
        if ($this->estoque > 0){
            return "esta disponivel";
        }

        return "nao esta disponivel";

    }


}
