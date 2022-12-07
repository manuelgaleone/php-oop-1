<?php
class Movie
{
    public $title;
    public $genre;
    public $year;
    public $author;

    //Instauro il Construct per semplificare le istanze di ogni oggetto
    function __construct($title, $genre, $year, $author)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->author = $author;
    }
}

class Genre
{
    public $type;
    public $subgenre;

    //Instauro il Construct per semplificare le istanze di ogni oggetto
    function __construct($type, $subgenre)
    {
        $this->type = $type;
        $this->subgenre = $subgenre;
    }
}
