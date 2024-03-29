<?php
require_once "models/Usuario.php";

class usuarioDAOMySql implements UsuarioDAO{
    private $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver; 
    }

    public function add(Usuario $u){
        //verificar se o email já é existente no banco de dados
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $sql->bindValue(':email', $u->getEmail());
        $sql->execute();
        if ($sql->rowCount() === 0){
            $sql = $this->pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:name, :email)");
            $sql->bindValue(':name', $u->getNome());
            $sql->bindValue(':email', $u->getEmail());
            $sql->execute();
            //Adiciona o id ao meu objeto
            $u->setId($this->pdo->lastInsertId());
            header("Location:index.php");
            exit;
        }else{
            header("Location:adicionar.php");
            exit;
        }
    }
    public function findAll(){
        $lista = [];
        $sql = $this->pdo->query("SELECT * FROM usuarios");
        if ($sql->rowCount() > 0){
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);
            foreach($data as $item){
                $u = new Usuario();
                $u->setId($item['id']);
                $u->setNome($item['nome']);
                $u->setEmail($item['email']);
                $lista[] = $u;
            }
        }
        return $lista;
    }
    public function findById($id){
        $usuario = new Usuario();
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
        if ($sql->rowCount() > 0){
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            $usuario->setId($dados['id']);
            $usuario->setNome($dados['nome']);
            $usuario->setEmail($dados['email']);
            return $usuario;
        }else{
            return false;
        }
    }
    public function remove($id){
        $sql = $this->pdo->prepare("DELETE FROM usuarios WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
    public function update(Usuario $u){
        $sql = $this->pdo->prepare("UPDATE usuarios SET nome = :name, email = :email WHERE id = :id");
        $sql->bindValue(':name', $u->getNome());
        $sql->bindValue(':email', $u->getEmail());
        $sql->bindValue(':id', $u->getId());
        $sql->execute();
        header("Location:index.php");
        exit;
    }   
}



?>