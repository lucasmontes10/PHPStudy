<?php

$senha = filter_input(INPUT_POST, 'senha');

$hash = password_hash($senha, PASSWORD_DEFAULT);

?>

<h1>Entre com a senha</h1>
<form action="login_recebedor.php" method="POST">
    <label>
        Senha:
        <input type="text" name="senha">
    </label>
    <input type="submit" value = "enviar">
</form>