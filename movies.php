<?php class Movie
{
    public $title;
    public $genre;
    public $rating;
    public $language;

    public function getMoviedetails()
    {
        $result = $this->title . ", " . $this->genre . ", " . $this->rating . "- " . $this->language . ".";
        return $result;
    }
    public function __construct($titolo, $genere, $punteggio, $lingua)
    {
        $this->title = $titolo;
        $this->genre = $genere;
        $this->rating = $punteggio;
        $this->language = $lingua;
    }
}
