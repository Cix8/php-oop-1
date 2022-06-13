<?php 
class Movie {
    public $title;
    public $original_title;
    public $genre;
    public $original_language;
    public $vote;
    public $vote_stars;

    function __construct($_title,$_original_title,$_genre,$_original_langauge,$_vote)
    {
        $this->title = $_title;
        $this->original_title = $_original_title;
        $this->genre = $_genre;
        $this->original_language = $_original_langauge;
        $this->vote = $_vote;
        $this->vote_stars = $this->getStarsVote($_vote);
    }

    public function getStarsVote($original_vote)
    {
        $result_vote = $original_vote / 2;
        return round($result_vote);
    }
}

$movies = [];

$movies[] = new Movie("Il Miglio Verde", "The Green Mile", "drama", "english" , 8.5);
$movies[] = new Movie("Django Unchained", "Django Unchained", "western", "english", 9);

var_dump($movies);
?>