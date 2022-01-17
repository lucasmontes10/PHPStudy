<?php
include_once('../header.php');
?>
<h1>Qual seu nome?</h1>
<br/>
<form action="tratador.php" method="POST">
    <label>
        <input type="text" placeholder="Digite seu nome" name="nomeLogin">
    </label>
    <label>
        <input type="submit" name="enviar">
    </label>
</form>