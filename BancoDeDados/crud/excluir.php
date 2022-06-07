<?php
require "config.php";
require_once "dao/usuarioDAOMySql.php";
$usuarioDAO = new usuarioDAOMySql($pdo);

$id = filter_input(INPUT_GET, 'id');

if ($id){
    $usuarioDAO->remove($id);
    // $sql = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
    // $sql->bindValue(":id", $id);
    // $sql->execute();

}
header("Location:index.php");
exit;
?>
