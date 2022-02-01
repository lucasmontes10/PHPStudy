<?php
//Iremos nesse modulo tratar de alguns assuntos importantissimos
//Formulários, Validações, e etc

//Http Request
include("header.php");
//Post envia internamente os dados
//Get envia atraves da própria url
//Se eu não falo a minha action ele envia para meu próprio arquivo/tela
?>

<form method="GET" action="recebedor.php">
    <label>
        Nome:
        <br/>
        <input type="text" name="nome" />
    </label>
    <br/>
    <br/>
    <label>
        Idade:
        <br/>
        <input type = "text" name="idade"/>
    </label>
    <br/>
    <br/>
    <label>
        email:
        <br/>
        <input type="email" name="email">
    </label>
    <br/>
    <br/>
    <input type="submit" value = "enviar">
</form>
<?php
    session_start();
    if ($_SESSION['avisos']){
        echo $_SESSION['avisos'];
        $_SESSION['avisos'] = '';
    }else{
        $_SESSION['avisos'] = '';
    }
?>
<form action="logar.php" method="GET">
    <label>
        email:
        <br/>
        <input type="email" name="emailLogar">
    </label>
    <br/>
    <label>
        Senha:
        <br/>
        <input type="password" name="senhaLogar">
    </label>
    <br/>
    <br/>
    <input type="submit" value = "enviarLogar">
</form>

<?php
//pegando arquivos de procedencia externa 
$texto_Externo = file_get_contents('exemplo.txt');
$texto_Externo = explode('\n', $texto_Externo);
foreach ($texto_Externo as $linha){
    echo $linha."<br/><br/>";
}

//modificando o nome do arquivo da raiz
rename('exemplo.txt', 'modificado.txt');