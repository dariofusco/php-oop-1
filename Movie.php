<?php

class Movie
{
    public $title;
    public $genre;
    public $year;

    public function __construct($_title, $_genre, $_year)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
    }

    public function getFullDescription()
    {
        return 'Titolo: ' . $this->title . ', Genere: ' . $this->genre . ', Anno: ' . $this->year;
    }
}

$signoreDegliAnelli = new Movie('Il Signore Degli Anelli', 'Fantasy', '2002');
$matrix = new Movie('Matrix', 'Fantascienza', '1999');

?>
