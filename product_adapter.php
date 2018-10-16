<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 18/09/2018
 * Time: 13:57
 */

require "database/database.php";

$database = new Database();
$conn = $database->connect('root', '123456@Abc', 'library_database');

function getCategories () {
    global $conn;
    $sql = "SELECT * FROM category ORDER BY id";
    $result = $conn->query($sql);
    $categories = $result->fetchAll(PDO::FETCH_ASSOC);
    return $categories;
}

function insertCategory($nameCategory) {
    global $conn;
    $sql = "INSERT INTO category (category_name) VALUE ('$nameCategory')";
    $conn->exec($sql);
}


function upCategory($category_id, $nameCategory) {
    global $conn;
    $sql = "UPDATE `category` SET `category_name` = '$nameCategory' WHERE `id` = '$category_id'";
    $conn->exec($sql);
}


function deleteCategory ($category_id) {
    global $conn;
    $sql = "DELETE FROM `category` WHERE `id` = '$category_id'";
    $conn->exec($sql);
}


function getById ($id) {
    global $conn;
    $sql = "SELECT * FROM category WHERE id = '$id'";
    $result = $conn->prepare($sql);
    $result->execute();
    $data = $result->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}