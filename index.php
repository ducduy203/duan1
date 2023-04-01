<?php
include 'views/header.php';
include 'model/PDO.php';
include 'model/category.php';
include 'model/food.php';



if ((isset($_GET['act'])) && ($_GET['act']) != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'category':
            $listcategory = loadall_category();
            include "views/categories.php";
            break;

        case 'food':
            $listfood = loadall_food_home();
            include "views/foods.php";
            break;

        case 'food-detail':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $onefood = loadone_food($id);
                include "views/food-detail.php";
            }else{
                include "views/home.php";
            }

        case 'contact':
            include "views/contact.php";
            break;

        case 'login':
            include "views/login.php";
            break;

        case 'register':
            include "views/register.php";
            break;

        default:
            break;
    }
} else {
    include 'views/home.php';
}


include 'views/footer.php';
