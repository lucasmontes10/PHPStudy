<?php
require "config.php";
$dados = [];

//Pegamos o id do que queremos
$id = filter_input(INPUT_GET, 'id');

if ($id){
    //Preparar nossa pesquisa no Banco Dados
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();
    $dados = $sql->fetch(PDO::FETCH_ASSOC);

}else{
    header("Location:index.php");
    exit;
}
?>


<h1>Alterar um Registro</h1>
<form action="alterar_receptor.php" method="POST">
    <input type="hidden" name = "id" value="<?=$dados['id']?> ">
    <label>
        Nome:<br>
        <input type="text" name="name" autocomplete="NULL" value="<?=$dados['nome']?>">
    </label><br><br/>
    <label>
        Email: <br>
        <input type="email" name="email" autocomplete="NULL" value="<?=$dados['email']?>">
    </label> <br><br>
    <input type="submit" value="Alterar">
</form>