<?php

class Movie {
    public $title;
    public $year;
    
    public function __construct($_title, $_year)
    {
        $this->title = $_title;
        $this->year = $_year;
    }
}

$signoreDegliAnelli = new Movie('Il Signore Degli Anelli', '2002');

?>