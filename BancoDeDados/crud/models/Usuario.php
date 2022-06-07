<?php

class Usuario{
    private $id;
    private $nome;
    private $email;


    function getId(){
        return $this->id;
    }
    function setId($id){
        $this->id = trim($id);
    }

    function getNome(){
        return $this->nome;
    }
    function setNome($nome){
        $this->nome = ucwords(trim($nome));
    }

    function getEmail(){
        return $this->email;
    }
    function setEmail($email){
        $this->email = strtolower(trim($email));
    }
}

interface UsuarioDAO{
    public function add(Usuario $u);
    public function findAll();
    public function findById($id);
    public function remove($id);
    public function update(Usuario $u);
}

?>