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
                <div class="my-col">
                    <div class="card">
                        <h2>
                            <?php echo $crocchette->name ?>
                        </h2>
                        <div class="img">
                            <?php echo '<img src="' . $crocchette->img . '">' ?>
                        </div>
                        <div>
                            <span>Categoria: </span>
                            <?php echo $crocchette->category ?>
                        </div>
                        <div>
                            <span>Prezzo: €</span>
                            <?php echo $crocchette->price ?>

                        </div>
                        <div>
                            <span>Tipologia: </span>
                            <?php echo $crocchette->type ?>
                        </div>
                    </div>
                </div>
                <div class="my-col">
                    <div class="card">
                        <h2>
                            <?php echo $palla->name ?>
                        </h2>
                        <div class="img">
                            <?php echo '<img src="' . $palla->img . '">' ?>
                        </div>
                        <div>
                            <span>Categoria: </span>
                            <?php echo $palla->category ?>
                        </div>
                        <div>
                            <span>Prezzo: €</span>
                            <?php echo $palla->price ?>

                        </div>
                        <div>
                            <span>Tipologia: </span>
                            <?php echo $palla->type ?>
                        </div>
                    </div>
                </div>

                <div class="my-col">
                    <div class="card">
                        <h2>
                            <?php echo $cuccia->name ?>
                        </h2>
                        <div class="img">
                            <?php echo '<img src="' . $cuccia->img . '">' ?>
                        </div>
                        <div>
                            <span>Categoria: </span>
                            <?php echo $cuccia->category ?>
                        </div>
                        <div>
                            <span>Prezzo: €</span>
                            <?php echo $cuccia->price ?>

                        </div>
                        <div>
                            <span>Tipologia: </span>
                            <?php echo $cuccia->type ?>
                        </div>
                    </div>
                </div>
                <div class="my-col">
                    <div class="card">
                        <h2>
                            <?php echo $scatolette->name ?>
                        </h2>
                        <div class="img">
                            <?php echo '<img src="' . $scatolette->img . '">' ?>
                        </div>
                        <div>
                            <span>Categoria: </span>
                            <?php echo $scatolette->category ?>
                        </div>
                        <div>
                            <span>Prezzo: €</span>
                            <?php echo $scatolette->price ?>

                        </div>
                        <div>
                            <span>Tipologia: </span>
                            <?php echo $scatolette->type ?>
                        </div>
                    </div>
                </div>
                <div class="my-col">
                    <div class="card">
                        <h2>
                            <?php echo $elastici->name ?>
                        </h2>
                        <div class="img">
                            <?php echo '<img src="' . $elastici->img . '">' ?>
                        </div>
                        <div>
                            <span>Categoria: </span>
                            <?php echo $elastici->category ?>
                        </div>
                        <div>
                            <span>Prezzo: €</span>
                            <?php echo $elastici->price ?>

                        </div>
                        <div>
                            <span>Tipologia: </span>
                            <?php echo $elastici->type ?>
                        </div>
                    </div>
                </div>
                <div class="my-col">
                    <div class="card">
                        <h2>
                            <?php echo $gel->name ?>
                        </h2>
                        <div class="img">
                            <?php echo '<img src="' . $gel->img . '">' ?>
                        </div>
                        <div>
                            <span>Categoria: </span>
                            <?php echo $gel->category ?>
                        </div>
                        <div>
                            <span>Prezzo: €</span>
                            <?php echo $gel->price ?>

                        </div>
                        <div>
                            <span>Tipologia: </span>
                            <?php echo $gel->type ?>
                        </div>
                    </div>
                </div>
                <div class="my-col">
                    <div class="card">
                        <h2>
                            <?php echo $tiraGraffi->name ?>
                        </h2>
                        <div class="img">
                            <?php echo '<img src="' . $tiraGraffi->img . '">' ?>
                        </div>
                        <div>
                            <span>Categoria: </span>
                            <?php echo $tiraGraffi->category ?>
                        </div>
                        <div>
                            <span>Prezzo: €</span>
                            <?php echo $tiraGraffi->price ?>

                        </div>
                        <div>
                            <span>Tipologia: </span>
                            <?php echo $tiraGraffi->type ?>
                        </div>
                    </div>
                </div>
                <div class="my-col">
                    <div class="card">
                        <h2>
                            <?php echo $lettiera->name ?>
                        </h2>
                        <div class="img">
                            <?php echo '<img src="' . $lettiera->img . '">' ?>
                        </div>
                        <div>
                            <span>Categoria: </span>
                            <?php echo $lettiera->category ?>
                        </div>
                        <div>
                            <span>Prezzo: €</span>
                            <?php echo $lettiera->price ?>

                        </div>
                        <div>
                            <span>Tipologia: </span>
                            <?php echo $lettiera->type ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- VUEJS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- JS -->
    <script src="js/scripts.js"></script>
</body>

</html>