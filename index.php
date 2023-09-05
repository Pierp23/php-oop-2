<?php
require_once __DIR__ . '/classes.php';
require_once __DIR__ . '/newObjects.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>OOP - parte 2</title>
</head>

<body>
    <main>
        <section class="container">
            <h1>IL MIO PET STORE</h1>
            <div class="my-row">
                <?php foreach ($products as $product) { ?>
                    <div class="my-col">
                        <div class="card">
                            <h2>
                                <?php echo $product->name ?>
                            </h2>
                            <div class="img">
                                <?php echo '<img src="' . $product->img . '">' ?>
                            </div>
                            <div>
                                <span>Categoria: </span>
                                <?php echo $product->category ?>
                            </div>
                            <div>
                                <span>Prezzo: €</span>
                                <?php echo $product->price ?>

                            </div>
                            <div>
                                <span>Tipologia: </span>
                                <?php echo $product->type ?>
                            </div>
                        </div>

                    </div>
                <?php } ?>
            </div>
        </section>
    </main>

    <!-- VUEJS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- JS -->
    <script src="js/scripts.js"></script>
</body>

</html>