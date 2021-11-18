<?php 

$file = file_get_contents(__DIR__ . '/a.json', true);
$products = json_decode($file);
?>