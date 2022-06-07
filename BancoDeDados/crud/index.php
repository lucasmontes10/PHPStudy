<?php

require "config.php";
require "dao/usuarioDAOMySql.php";

$usuarioDAO = new usuarioDAOMySql($pdo);
$lista = $usuarioDAO->findAll();

// $sql = $pdo->query("SELECT * FROM usuarios");

// $lista = [];

// if ($sql->rowCount() > 0){
//     $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
// }

?>

<a href="adicionar.php">Adicionar dado</a>

<table border="1" width = "100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php 
    foreach($lista as $usuario):
    ?>
        <tr>
            <td><?= $usuario->getId() ?></td>
            <td><?= $usuario->getNome() ?></td>
            <td><?= $usuario->getEmail() ?></td>
            <td>
                <a href="excluir.php?id=<?= $usuario->getId() ?>" onclick="return confirm('Você está certo disso?')">[Excluir]</a>
                <a href="alterar.php?id=<?= $usuario->getId() ?>">[Alterar]</a>
            </td>
        </tr>
    <?php endforeach;?>
</table> 
