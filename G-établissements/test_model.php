<?php
require_once "models/Etablissement.php";

// test insert
Etablissement::create("School A", "Nador", "Rue 1");

// test read
$data = Etablissement::getAll();

print_r($data);
?>