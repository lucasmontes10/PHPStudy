<?php
echo "<pre>";
print_r($_FILES);
$arquivos_permitidos = ['image/jpeg', 'image/jpg', 'image/png'];
if (in_array($_FILES['arquivo']['type'], $arquivos_permitidos)){
    $novo_nome = md5(time().rand(0, 1000))."jpg";
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'upload/'.$novo_nome);
    echo "Arquivo enviado com sucesso";
}else{
    echo "Formato de arquivo não suportado";
}