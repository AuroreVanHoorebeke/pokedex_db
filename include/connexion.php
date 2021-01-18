<?php
include 'secrets.php';
$dbh = new PDO('mysql:host=localhost;dbname=pokedex', $user, $pass);