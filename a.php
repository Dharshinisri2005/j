<?php
$products = [
  ["name" => "Product A", "price" => 19.99],
  ["name" => "Product B", "price" => 29.99],
  ["name" => "Product C", "price" => 14.99]
];

header('Content-Type: application/json');
echo json_encode($products);
