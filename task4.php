<?php

class Item{
    private $name;
    private $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
}

class Book extends Item{
    private $author;
    public function __construct($name, $price, $author){
        parent::__construct($name, $price);
        $this->author = $author;
    }
    public function getAuthor(){
        return $this->author;
    }
}
class DVD extends Item{
    private $director;

    public function __construct($name, $price, $director){
        parent::__construct($name, $price);
        $this->director = $director;
    }
    public function getDirector(){
        return $this->director;
    }
}
class Magazine extends Item{
    private $types;
    public function __construct($name, $price, $types){
        parent::__construct($name, $price);
        $this->types = $types;
    }
    public function getTypes(){
        return $this->types;
    }

}
$book = new Book("Ekinshi bolma", "5000", "Kuansyh Shonbay");
$dvd = new DVD("GAMES", "12000", "Kuka Beysekeev");
$magazin = new Magazine("Marca", "4500", "Sport");

echo $book->getName()."\n";
echo $book->getPrice()."\n";