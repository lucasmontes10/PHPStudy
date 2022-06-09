<?php

$arquivo = 'paisagem-natural.png';
$maxWidth = 1500;
$maxHeight = 1500;

list($originalWidth, $originalHeight) = getimagesize($arquivo);

//continha padrão agora para calcular o desvio

$ratio = $originalWidth / $originalHeight;

$ratioDes = $maxWidth / $maxHeight;

$finalWidth = 0;
$finalHeight = 0;

if ($raioDes > $ratio){
    $finalWidth = $maxHeight / $ratio;
    $finalHeight = $maxHeight;
}else{
    $finalHeight = $maxWidth / $ratio;
    $finalWidth = $maxWidth;
}
//criamos uma imagem para receber a atual, mas com os parâmetros redefinidos
$imagem = imagecreatetruecolor($finalWidth, $finalHeight);

//Preparando a imagem original
$originalImage = imagecreatefromwebp($arquivo);

//copiando a imagem original para a criada
imagecopyresampled($imagem, $originalImage, 0, 0, 0, 0, $finalWidth, $finalHeight, 
$originalWidth, $originalHeight);

header("Content-Type: image/jpeg");
imagewebp($imagem, null, 100);
?>