<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>

</head>

<body>

    <h1>Recommended Movies</h1>


    <ul>
        <?php foreach ($filterMovies as $movie) : ?>
            <li>
                <a href="<?= $movie['purchaseUrl'] ?>">
                    <?= $movie['name']; ?>. <?= $movie['releaseYear'] ?>. By <?= $movie['director'] ?>;
                </a>
            </li>

        <?php endforeach; ?>

    </ul>

</body>

</html>