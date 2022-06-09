<?php

//Nunca salve as senhas como elas vêm pro banco de dados, por isso é necessáario
//o processo de incriptogração de senhas 

//gerar um Hash é criar um código que relaciona essa senha
//a Hash nn tem como eu converter para a senha geral


?>

<h1>Cadastro da senha</h1>
<form action="login.php" method="POST">
    <label>
        Senha: <br>
        <input type="text" name="senha"/>
    </label>
    <input type="submit" value="enviar">
</form>
