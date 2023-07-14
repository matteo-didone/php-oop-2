<?php
/*
Creare un layout completo per stampare a schermo una lista di movies.
*/

include __DIR__ . '/Models/movie.php';
include __DIR__ . '/Models/objects.php';
include __DIR__ . '/Models/db.php';

// Creating instances of Movie class and assigning them to variables $classicMovie and $modernMovie
$classicMovie = new Movie(
    'The Godfather',
    1972,
    ['Crime'],
    'Francis Ford Coppola',
    'R',
    ['Marlon Brando', 'Al Pacino', 'James Caan', 'Robert Duvall'],
    'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
    'Paramount Pictures',
    'Paramount Pictures'
);

$modernMovie = new Movie(
    'The Dark Knight',
    2008,
    ['Action', 'Crime', 'Drama'],
    'Christopher Nolan',
    'PG-13',
    ['Christian Bale', 'Heath Ledger', 'Aaron Eckhart', 'Michael Caine'],
    'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
    'Warner Bros. Pictures',
    'Warner Bros. Pictures'
);

$movies = [ $classicMovie, $modernMovie ];

function printArray($arrayToBePrinted) {
    foreach ($arrayToBePrinted as $key => $value) {
        echo $value . "\n";
    }
}

?>

<!DOCTYPE html>

<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Movie List</h1>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Title</th>
                    <th scope="col">Release Year</th>
                    <th scope="col">Movie Genre</th>
                    <th scope="col">Movie Director</th>
                    <th scope="col">Movie Rating</th>
                    <th scope="col">Movie Cast</th>
                    <th scope="col">Movie Description</th>
                    <th scope="col">Movie Distributor</th>
                    <th scope="col">Movie Production Studio</th>
                </tr>
            </thead>
            
            <tbody>
                <?php foreach ($movies as $movie) { ?>
                <tr>
                    <td><?php echo $movie->getMovieTitle(); ?></td>
                    <td><?php echo $movie->getReleaseYear(); ?></td>
                    <td><?php printArray($movie->getMovieGenre()); ?></td>
                    <td><?php echo $movie->getMovieDirector(); ?></td>
                    <td><?php echo $movie->getMovieRating(); ?></td>
                    <td><?php printArray($movie->getMovieCast()); ?></td>
                    <td><?php echo $movie->getMovieDescription(); ?></td>
                    <td><?php echo $movie->getMovieDistributor(); ?></td>
                    <td><?php echo $movie->getMovieProductionStudio(); ?></td>
                </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
</body>

</html>