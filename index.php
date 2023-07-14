<?php
/*
Imagine what classes are needed to create an online shop with the following characteristics:
The e-commerce sells products for animals.
The products are categorized into Dogs or Cats.
In addition to food, the products will also include toys, kennels, etc.
We print cards containing the details of the products, such as image, title, price, category icon, and the type of item being viewed (product, food, toy, kennel)
*/

include __DIR__ . '/Classes/AnimalProducts.php';
include __DIR__ . '/Classes/DogProducts.php';
include __DIR__ . '/Classes/CatProducts.php';;


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