<?php 
//Nesse modulo iremos trabalhar com as funções nativas de array em php

$array_dias_mes = range(1, 31, 1);
//Ira criar um array com os valores de 1 até 31

foreach($array_dias_mes as $dias){
    //echo $dias."<br/>";
}

$usuario = [
    'nome' => 'Lucas',
    'idade' => 20,
    'empresa' => 'Globo',
    'cor' => 'Vermelho'
];

if(key_exists('empresa', $usuario)){
    echo "Bem vindo, ".$usuario['nome']." tudo bem?";
}else{
    echo "Essa chave não existe no sistema";
}

//Fazendo uma tabela vertical
?>
<table border="1px">
    <?php foreach($usuario as $chave => $valor):?>
    <tr>
        <th><?php echo $chave; ?></th>
        <th><?php echo $valor; ?></th>
    </tr>
    <?php endforeach;?>
</table>
<br/><br/>

<!-- Fazendo uma tabela na horizontal -->
<table border="1px">
    <tr>
        <?php
            $array_chaves = array_keys($usuario);
            foreach($array_chaves as $item): 
        ?>
        <td><?php echo $item; ?></td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php
            $array_valores = array_values($usuario);
            foreach($array_valores as $item):
        ?>
        <td><?php echo $item; ?></td>
        <?php endforeach;?>        
    </tr>
</table>
