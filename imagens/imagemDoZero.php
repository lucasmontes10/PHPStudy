<?php

//criamos a imgem do 0
$imagem = imagecreatetruecolor(300, 300);

//colocando a cor da imagem
$cor = imagecolorallocate($imagem, 255, 25, 60);

//pintando a nossa primeira imagem
imagefill($imagem, 0, 0, $cor);

//transformando a nossa page que vai reconhecer a imagem
header("Content-Type: image/jpeg");

imagejpeg($imagem, null, 100);

//salva na mesma pasta a imagem q estava disponível no navegador
imagepng($imagem, 'nova_imagem.png');

