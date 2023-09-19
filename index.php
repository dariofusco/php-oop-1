<?php

require_once __DIR__ . '/Movie.php';

var_dump($signoreDegliAnelli);
var_dump($matrix);

echo $signoreDegliAnelli->getFullDescription();
echo $signoreDegliAnelli->genre->getFullGenre() . '<br>';

echo $matrix->getFullDescription();
echo $matrix->genre->getFullGenre() . '<br>';

?>