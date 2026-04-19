<?php
require_once "models/Database.php";

$db = new Database();
$conn = $db->connect();

if($conn){
    echo "Connexion réussie ";
}
?>