<?php

class Book{
    var $title;
    var $author;
    var $pages;

    function __construct($aTitle, $aAuthor, $aPages){
        $this -> title =  $aTitle;
        $this ->author =  $aAuthor;
        $this -> pages = $aPages;
    }

    function print(){
        echo $this -> title;
        echo $this -> author;
        echo $this -> pages;
    }
}

$book1 = new Book("A Montanha Mágina", "Thomas Mann", 826);

$book1->print();

?>