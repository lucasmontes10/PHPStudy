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

$post_one = new Post(20, 10, 'Lucas Montes');
echo "Number of likes is \n".$post_one->likes;
$post_one->setAuthor("Benardo");
$post_one->addLikes();
echo "The new number of likes is ".$post_one->likes;
$post_one->printInformation();
//Typed Properties

//Propriedades tipadas

//por exemplo a variavel tipada like precisa ser usada para que não coloquem um tipo
//para que a pessoa não entre com um tipo diferente de dado esperado


//Construtor é usado quando queremos definir características para uma determinada classe,
//possibilitando ela já ser criada com essas características

//Encapsulamento tornando as propriedades um pouco mais com um sistema de proteção
//criar o set e o get para utilizar das informações

