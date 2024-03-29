<?php

class Post{
    public int $likes = 0;
    protected int $comentarios = 0;
    private string $author;

    public function __construct(int $quantLikes = 0, int $quantComentarios = 0, string $author){
        $this->likes = $quantLikes;
        $this->comentarios = $quantComentarios;
        $this->author = $author;
        
    }
    public function printInformation(){
        echo "<br/>";
        echo "Number of likes is".$this->likes."<br/>";
        echo "Number of comments is".$this->comentarios."<br/>";
        echo "The name of the author is".$this->author."<br/>";
    }
    public function addLikes(){
        $this->likes += 1;
    }

    public function setAuthor($nome){
        $this->author = ucfirst($nome);
    }

    public function getAuthor(){
        return $this->author ?? "Visitante";
    }
}

class Matematica{
    public static string $info = "Classe com atributos e metodos estaticos";
    public static function Somar(int $x, int $y){
        return $x + $y;
    }
}


$post_one = new Post(20, 10, 'Lucas Montes');
echo "Number of likes is \n".$post_one->likes;
$post_one->setAuthor("Benardo");
$post_one->addLikes();
echo "The new number of likes is ".$post_one->likes;
$post_one->printInformation();
echo "</br>";
echo Matematica::$info." e a soma e:".Matematica::Somar(10, 20);
//Typed Properties

//Propriedades tipadas

//por exemplo a variavel tipada like precisa ser usada para que não coloquem um tipo
//para que a pessoa não entre com um tipo diferente de dado esperado


//Construtor é usado quando queremos definir características para uma determinada classe,
//possibilitando ela já ser criada com essas características

//Encapsulamento tornando as propriedades um pouco mais com um sistema de proteção
//criar o set e o get para utilizar das informações

//Herança: Uma classe torna geral e outras herdam as características específicas dessa classe

class Foto extends Post{
    private $id;

    function __construct($id){
        $this->setId($id);
    }

    function getId(){
        return $this->id;
    }
    function setId($id){
        $this->id = $id;
    }
}

//Aqui a classe Foto herda todas as caracteristicas de Post, então pega todas as infos, atributos e metodos

//Entretanto vc não vai conseguir herdar um atributo privado da classe mãe, apenas dentro da classe

//Já na propriedade protected, você consegue ter acesso na classe e nas classes herdadas


//Entendendo Interface

//fazendo o uso de interface: guia de implementação de uma classe, abstrato do abstrato
//Exemplo clássico e simples:
//criar um controle de qualidade

