<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>

</head>

<body>

    <h1>Recommended Books</h1>

    <?php
    $books = [
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'http:??example.com'
        ],

        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip k. Dick',
            'purchaseUrl' =>  'http://examples.com'
        ]
    ];

    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                </= $book[0]; ?>
            </li>
        <?php endforeach; ?>
    </ul>


</body>

</html>