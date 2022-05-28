<?php
$user_name = 'Юрий'; // укажите здесь ваше имя

$categories = [
    'boards' => 'Доски и лыжи',
    'attachment' => 'Крепления',
    'boots' => 'Ботинки',
    'clothing' => 'Одежда',
    'tools' => 'Инструменты',
    'other' =>  'Разное'
];

$products = [
    [
        'name' => '2014 Rossignol District Snowboard',
        'category' => $categories['boards'],
        'price' => 10999,
        'url' => 'img/lot-1.jpg',
        'expiration' => '2023-10-25'
    ],
    [
        'name' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => $categories['boards'],
        'price' => 159999,
        'url' => 'img/lot-2.jpg',
        'expiration' => '2023-11-22'
    ],
    [
        'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => $categories['attachment'],
        'price' => 8000,
        'url' => 'img/lot-3.jpg',
        'expiration' => '2023-08-18'
    ],
    [
        'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => $categories['boots'],
        'price' => 10999,
        'url' => 'img/lot-4.jpg',
        'expiration' => '2023-07-12'
    ],
    [
        'name' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => $categories['clothing'],
        'price' => 7500,
        'url' => 'img/lot-5.jpg',
        'expiration' => '2023-06-15'
    ],
    [
        'name' => 'Маска Oakley Canopy',
        'category' => $categories['other'],
        'price' => 5400,
        'url' => 'img/lot-6.jpg',
        'expiration' => '2022-06-07'
    ],
];
