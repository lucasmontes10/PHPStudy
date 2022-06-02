<?php

require "config.php";

$sql = $pdo->query("SELECT * FROM usuarios");

$lista = [];

if ($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

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
            <td><?php echo $usuario['id']; ?></td>
            <td><?php echo $usuario['nome']?></td>
            <td><?php echo $usuario['email']?></td>
            <td>
                <a href="excluir.php?id=<?= $usuario['id']?>" onclick="return confirm('Você está certo disso?')">[Excluir]</a>
                <a href="alterar.php?id=<?= $usuario['id']?>">[Alterar]</a>
            </td>
        </tr>
    <?php endforeach;?>
</table> 
