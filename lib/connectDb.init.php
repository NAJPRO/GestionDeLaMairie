<?php
function connectDb(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=mariage', 'root', '');
    } catch (\PDOException $e) {
        die($e->getMessage());
        return null;
    }
    return $db;
}
