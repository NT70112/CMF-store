<?php

header('Content-Type: application/json; charset=utf-8');

$pdo = new PDO('sqlite:' . __DIR__ . '/../data/base.sqlite');

$stmt = $pdo->query('SELECT product_id, quantity FROM cart');

$stmtArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode([
    'cart' => $stmtArray
]);

?>