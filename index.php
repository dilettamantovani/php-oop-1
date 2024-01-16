<?php
require __DIR__ . '/models/Movies.php';

$Movie1 = new Movie("La sociedad de la nieve", "Drama", "4/5", "Spanish");
$Movie2 = new Movie("Maestro", "Drama", "3/5", "English");
$Movie3 = new Movie("Oppenheimer", "Drama, Biographical, Historical", "4.1/5", "English");



var_dump($Movie1);
echo $Movie1->getMoviedetails();
var_dump($Movie2);
echo $Movie2->getMoviedetails();
echo $Movie3->getMoviedetails();
