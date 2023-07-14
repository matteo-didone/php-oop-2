<?php
/*
Imagine what classes are needed to create an online shop with the following characteristics:
The e-commerce sells products for animals.
The products are categorized into Dogs or Cats.
In addition to food, the products will also include toys, kennels, etc.
We print cards containing the details of the products, such as image, title, price, category icon, and the type of item being viewed (product, food, toy, kennel)
*/

include __DIR__ . '/Classes/AnimalProducts.php';
include __DIR__ . '/Classes/Toy.php';
include __DIR__ . '/Classes/Food.php';
include __DIR__ . '/Classes/Kennel.php';
include __DIR__ . '/Database/db.php';


function printArray($arrayToBePrinted)
{
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
    <title>PHP OOP 2</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Animal E-Commerce</h1>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <?php
            foreach ($products as $product) {
                echo '<div class="card" style="width: 18rem;">';
                echo '<img class="card-img-top" src="' . $product->getImage() . '" alt="Card image cap">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $product->getTitle() . '</h5>';
                echo '<p class="card-text">' . $product->getPrice() . '</p>';
                echo '<a href="#" class="btn btn-primary">View Product</a>';
                echo '<img class="card-img-top" src="' . $product->getIconCategory() . '" alt="Card image cap">';
                echo '<p class="card-text">' . $product->getArticleType() . '</p>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>

    </div>
</body>

</html>