<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>

</head>

<body>

    <h1>Recommended Books</h1>

    <?php
    $movies = [
        [
            'name' => 'Star Wars: A New Hope',
            'director' => 'George Lucas',
            'releaseYear' => 1977,
        ],

        [
            'name' => 'The Dark Knight',
            'director' => 'Christopher Nolan',
            'releaseYear' => 2008,
        ],

        [
            'name' => 'Forward Unto Dawn',
            'director' => 'Stewart Hendler',
            'releaseYear' => 2012,
        ],

        [
            'name' => "Jurassic Park",
            'director' => 'Steven Spielberg',
            'releaseYear' => 1993
        ]
    ];

    function filterByYear($items, $year)
    {
        $filteredItems = [];

        foreach ($items as $item) {
            if ($item['releaseYear'] > $year) {
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    }

    $filterMovies = filterByYear($movies, 2000);

    ?>

    <ul>
        <?php foreach ($filterMovies as $movie) : ?>
            <li>
                <?= $movie['name']; ?>. <?= $movie['releaseYear'] ?>. By <?= $movie['director'] ?>;
            </li>

        <?php endforeach; ?>
    </ul>

</body>

</html>