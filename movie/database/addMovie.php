<?php
include_once('config.php');

if(isset($_POST['submit']))
{
    $movie_name = $_POST['movie_name'];
    $movie_desc = $_POST['movie_desc'];
    $movie_quality = $_POST['movie_quality'];
    $movie_rating = $_POST['movie_rating'];
    $movie_image = $_POST['movie_image'];


    $sql  = "INSERT INTO movies(movie_name, movie_desc, movie_quality, movie_rating, movie_image)
    VALUES (:movie_name, :movie_desc, :movie_quality, :movie_rating, :movie_image)";

    $insertMovies = $conn->prepare($sql);

    $insertMovies->bindParam(":movie_name", $movie_name);
    $insertMovies->bindParam(":movie_desc", $movie_desc);
    $insertMovies->bindParam(":movie_quality", $movie_quality);
    $insertMovies->bindParam(":movie_rating", $movie_rating);
    $insertMovies->bindParam(":movie_image", $movie_image);

    $insertMovies->execute();
    header("Location: movies.php");
}

?>