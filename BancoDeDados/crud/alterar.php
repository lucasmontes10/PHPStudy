<?php
require "config.php";
require_once "dao/usuarioDAOMySql.php";
$dados = false;

//Pegamos o id do que queremos
$id = filter_input(INPUT_GET, 'id');
$usuarioDAO = new usuarioDAOMySql($pdo);

if ($id){
    // //Preparar nossa pesquisa no Banco Dados
    // $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    // $sql->bindValue(":id", $id);
    // $sql->execute();
    // $dados = $sql->fetch(PDO::FETCH_ASSOC);

    $dados = $usuarioDAO->findById($id);

}
if ($dados == false){
    header("Location:index.php");
    exit;
}
?>


<h1>Alterar um Registro</h1>

<form action="alterar_receptor.php" method="POST">
    <input type="hidden" name = "id" value="<?=$dados->getId()?> ">
    <label>
        Nome:<br>
        <input type="text" name="name" autocomplete="NULL" value="<?=$dados->getNome()?>">
    </label><br><br/>
    <label>
        Email: <br>
        <input type="email" name="email" autocomplete="NULL" value="<?=$dados->getEmail()?>">
    </label> <br><br>
    <input type="submit" value="Alterar">
</form>