<?php
require_once 'helpers.php';
require_once 'functions.php';
require_once 'data.php';

var_dump(get_dt_range('2022-05-31'));

$content = include_template('main.php', [
    'categories' => $categories,
    'products' => $products
]);

$layout = include_template('layout.php', [
    'is_auth' => rand(0, 1),
    'user_name' => $user_name,
    'content' => $content,
    'categories' => $categories,
    'title' => 'New title'
]);

print($layout);
