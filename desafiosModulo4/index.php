<?php

if(isset($_COOKIE['name'])){
    echo "Olá, ".$_COOKIE['name']."-- ";    
}else{
    header("Location: login.php");
    exit;
}
?>
<a href="sair.php"> Sair </a>