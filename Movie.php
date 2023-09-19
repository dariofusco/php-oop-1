<?php
require_once __DIR__ . '/Genre.php';
class Movie
{
    public $title;
    public $genre;
    public $year;

    public function __construct($title, Genre $genre, $year)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    public function getFullDescription()
    {
        return 'Titolo: ' . $this->title . ', Anno: ' . $this->year . ', Genere: ';
    }
}

$signoreDegliAnelli = new Movie('Il Signore Degli Anelli', new Genre('Fantasy', 'Azione', 'Avventura'), '2002');
$matrix = new Movie('Matrix', new Genre('Fantascienza', 'Azione', 'Avventura'), '1999');

?>
