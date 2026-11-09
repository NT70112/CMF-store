<?php

header('Content-Type: application/json; charset=utf-8');

$pdo = new PDO('sqlite:' . __DIR__ . '/../data/base.sqlite');

$pdo->exec(
    "CREATE TABLE IF NOT EXISTS cart (
        product_id TEXT PRIMARY KEY,
        quantity INTEGER CHECK (quantity>=0)
    );"
);

$input = file_get_contents('php://input');
$data = json_decode($input, true);
$productId = $data['productId'];
$action = $data['action'];

function counter(string $action, int $count): int
{
    if ($action === 'increment') {
        $count++;
    } elseif ($action === 'decrement' && $count != 0) {
        $count--;
    }

    return $count;
}

$stmt = $pdo->prepare(
    'SELECT quantity FROM cart WHERE product_id = :productId'
);

$stmt->execute([
    'productId' => $productId,
]);


$storedCount = $stmt->fetchColumn();
if ($storedCount === false) {
    $count = 0;
    $stmt = $pdo->prepare(
        "INSERT INTO cart (product_id,quantity)
    VALUES (:productId,:count)"
    );
} else {
    $count = (int) $storedCount;

    $stmt = $pdo->prepare(
        "UPDATE cart
    SET quantity = :count
    WHERE product_id = :productId;"
    );
}


$count = counter($action, $count);

$stmt->execute([
    'productId' => $productId,
    'count' => $count
]);

echo json_encode([
    'productId' => $productId,
    'action' => $action,
    'quantity' => $count
]);
