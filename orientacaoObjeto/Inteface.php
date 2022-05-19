<?php
interface IDataBase{
    function adicionarDado(string $texto);
    function removerDado();
    function alterarDado();
}

class MySql implements IDataBase{
    protected $dados = array();
    function adicionarDado(string $texto){
        array_push($this->dados, $texto);
    }
    function removerDado()
    {
        
    }
    function alterarDado()
    {
        
    }
    function getDados(){
        print_r($this->dados);
    }
}

class MongoDb implements IDataBase{
    function adicionarDado(string $dado)
    {
        
    }
    function removerDado()
    {
        
    }
    function alterarDado()
    {
        
    }
}

$conexao = new MySql();
$conexao->adicionarDado("Esse dado foi adicionado");
$conexao->getDados();
?>