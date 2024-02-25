<?php 

const SERVER = 'localhost:3306';
const USER = "root";
const PASSWORD = "";
const DATA_BASE = "budgets";
const CONFIG = "mysql:host=" . SERVER . ";dbname=" . DATA_BASE. ";charset=utf8";

try {
    $con = new PDO(CONFIG, USER, PASSWORD);
    $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException$e) {
    throw new PDOException($e->getMessage());
}


