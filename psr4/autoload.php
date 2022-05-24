<?php
spl_autoload_register(function($class){
    //matematica\Basico, valor da variavel class nesse exemplo
    $baseDir = __DIR__ . '\classes\\';
    $dirSep = DIRECTORY_SEPARATOR; // DIRECTORY_SEPARATOR pega o padrão do sistema usado
    $file = $baseDir . $dirSep . str_replace('\\', $dirSep, $class) . '.php';
    echo $file;
    if (file_exists($file)) {
        require $file;
    }
});
?>
