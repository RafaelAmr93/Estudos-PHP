<?php
//tive que trocar para BookManual porque estava pegando a classe do arquivo constructor.php
class BookManual{
    var $title;
    var $author;
    var $pages;
}

$book1 = new BookManual();
$book1->title = "Dom Casmurro";
$book1->author = "Machado de Assis";
$book1->pages = 250;

$book2 = new BookManual();
$book2 -> title = "O Triste Fim de Policarpo Quaresma";
$book2 -> author = "Lima Barreto";
$book2 -> pages = 180;

//não imprime o objeto todo
echo $book1 -> title;



?>