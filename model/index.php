<?php 
require 'db.php';
echo "foi";
$conn = new DataBase("localhost", "root", "", "test");

echo $conn->debugar();