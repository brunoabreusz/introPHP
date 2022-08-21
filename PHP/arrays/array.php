<?php

$cars = array(
    ['fiat', 'uno', 'ferrari'], [1,2,3]
);

//var_dump($cars[1]);

$carros = ['fiat', 'uno', 'ferrari'];
//echo $carros[0];

// array composto.

$car = [
    'cor' => 'branco',
    'portas' => 4,
    'modelo' => 2021,
];

$car['airbag'] = true;

//echo $car['airbag'];

// array multidimencional

$modelos = [
    'Mercedes' => [
        'color' => 'black',
        'motor' => 'v8',
    ],
    'Ford' => [
        'color' => 'white',
        'motor' => 'meeiro'
    ]
];

echo $modelos['Mercedes']['color'];
