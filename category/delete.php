<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 18/09/2018
 * Time: 22:28
 */

require "../product_adapter.php";


$category_id = $_GET['id'];


deleteCategory($category_id);
header('Location: ../index.php');
exit();