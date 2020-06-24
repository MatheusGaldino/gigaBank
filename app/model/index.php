<?php 
require 'db.php';
echo "foi";
$conn = new DataBase("https://matheus.capslockinfo.com.br/", "matheus", "mudar@2019", "matheus_gigabank");

echo $conn->debugar();