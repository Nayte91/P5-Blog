<?php

require_once __DIR__.'/bootstrap.php';

// Sample data
$foo = [
    [ 'name'          => 'Alice' ],
    [ 'name'          => 'Bob' ],
    [ 'name'          => 'Charlie' ],
    [ 'name'          => 'David' ],
    [ 'name'          => 'Eve' ],
];

// Render our view
echo $twig->render('index.html.twig', ['foo' => $foo] );