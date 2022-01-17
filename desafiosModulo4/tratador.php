<?php
$nome = filter_input(INPUT_POST, 'nomeLogin');
setcookie('name', $nome, time() + (86400*3));
header("Location: index.php");
exit;