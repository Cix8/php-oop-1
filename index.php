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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div>
        <ul>
            <?php foreach ($movies as $movie) { ?>
                <li>
                    <?php foreach ($movie as $key => $value) { ?>
                        <div class="<?php echo $key ?>">
                            <small><?php echo $key ?>:</small>
                            <span><?php echo $value ?></span>
                        </div>
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </div>

</body>
</html>