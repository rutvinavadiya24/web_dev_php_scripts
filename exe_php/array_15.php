<?php
$movies = array(
    array(
        "title" => "Movie 1",
        "director" => "Director 1",
        "release_year" => 2020
    ),
    array(
        "title" => "Movie 2",
        "director" => "Director 2",
        "release_year" => 2021
    )
);

// Display information for movie 1
echo "Title: " . $movies[0]['title'] . "<br>";
echo "Director: " . $movies[0]['director'] . "<br>";
echo "Release Year: " . $movies[0]['release_year'] . "<br>";
?>