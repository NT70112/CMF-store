<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit;
}

$email = trim($_POST['email'] ?? '');

$message = trim($_POST['message'] ?? '');

$name = trim($_POST['name'] ?? '');

if ($name === '') {
    echo "name can't be empty.";
    exit;
}

if ($email === '') {
    echo "Email can't be empty.";
    exit;
}

if ($message === '') {
    echo "message can't be empty.";
    exit;
}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Please enter a valid email address.';
    exit;
}
?>