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
    <!-- FONT AWESOME 6.4.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="title">Animal E-Commerce</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <?php
                    $count = 0;
                    foreach ($products as $product) {
                        if ($count === 3) {
                            echo '</div><div class="row">';
                        }
                        echo '<div class="col-12 col-md-4">';
                        echo '<div class="card" style="width: 18rem;">';
                        echo '<img class="card-img-top" src="' . $product->getImage() . '" alt="Card image cap">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $product->getTitle() . '</h5>';
                        echo '<p class="card-text">' . $product->getPrice() . '</p>';
                        echo '<a href="#" class="btn btn-primary">View Product</a>';
                        echo '<i class="icon">' . $product->getIconCategory() . '</i>';
                        echo '<p class="card-text">' . $product->getArticleType() . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        $count++;
                    }
                    ?>
                </div>
            </div>
        </div>
</body>

</html>