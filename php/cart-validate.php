<?php
$data = $_POST['phone'];

if (!is_numeric($data)) {
    echo 'Please enter a valid phone number.';
    exit;
}
