<?php

$movies = [
    [
        'name' => 'Star Wars: A New Hope',
        'director' => 'George Lucas',
        'releaseYear' => 1977,
        'purchaseUrl' => 'http://example.com'
    ],

    [
        'name' => 'The Dark Knight',
        'director' => 'Christopher Nolan',
        'releaseYear' => 2008,
        'purchaseUrl' => 'http://example.com'
    ],

    [
        'name' => 'Forward Unto Dawn',
        'director' => 'Stewart Hendler',
        'releaseYear' => 2012,
        'purchaseUrl' => 'http://example.com'
    ],

    [
        'name' => "Jurassic Park",
        'director' => 'Steven Spielberg',
        'releaseYear' => 1993,
        'purchaseUrl' => 'http://example.com'
    ]
];

function filter($items, $fn)
{
    $filteredItems = [];

    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}

$filterMovies = array_filter($movies, function ($movie) {
    return $movie['releaseYear'] > 1980 && $movie['releaseYear'] < 2023;
});

require "index.view.php";
