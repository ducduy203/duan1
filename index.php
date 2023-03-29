<?php
include 'views/header.php';

include 'model/PDO.php';
include 'model/category.php';
include 'model/food.php';

// $newfood = loadall_food_home();

if ((isset($_GET['act'])) && ($_GET['act']) != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'category':
            include "views/categories.php";
            break;

        case 'food':
            include "views/foods.php";
            break;

        case 'contact':
            include "views/contact.php";
            break;

        default:
            break;
    }
} else {
    include 'views/home.php';
}


include 'views/footer.php';
