<?php
//Nesse arquivo iremos tratar de arquivos em php
//Motivação: Por exemplo um site com o mesmo cabeçalho e rodpé,seria interessante 
//repetir o arquivo, pois já está criado
require_once('modulo1.php');
//Trouxe todo o contéudo do modulo 1, porém apenas uma vez
//Um ponto interessante é que as variaveis também são importadas para esse arquivo
include('modulonnexiste.php');
//A unica diferença do include pro require é que aqui no include o código não para se o 
//arquivo não existir
