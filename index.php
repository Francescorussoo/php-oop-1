<?php
class Movie {
    public $title;
    public $director;

    public function __construct($title, $director) {
        $this->title = $title;
        $this->director = $director;
    }

    public function printDetails() {
        echo "Titolo: " . $this->title . "<br>";
        echo "Regista: " . $this->director . "<br><br>";
    }
}

$movie1 = new Movie("Interstellar", "Christopher Nolan");
$movie2 = new Movie("Pulp Fiction", "Quentin Tarantino");

$movie1->printDetails();
$movie2->printDetails();
?>
