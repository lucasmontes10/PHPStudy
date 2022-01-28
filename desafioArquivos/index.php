<form method="POST" action="index.php">
    <label>
        Adicionar Nome:
    </label>
    <label>
        <input type="text" placeholder="Digite o Nome a ser adicionado" name="nome">
        <input type="submit" name="enviar">
    </label>
</form>

<?php
$textoArquivo = file_get_contents("nomes.txt");
$textoAtual = filter_input(INPUT_POST, 'nome');
$textoArquivo .= "\n".$textoAtual;
if ($textoAtual){
    file_put_contents('nomes.txt', $textoArquivo);
}

$textoArquivo = explode("\n", $textoArquivo);
echo "<ul>";
foreach ($textoArquivo as $chave => $valor){
    if ($chave > 0){
        echo "<li>".$valor."</li>";
    }
}
echo "</ul>";
