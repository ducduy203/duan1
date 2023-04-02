<?php
session_start();
include 'model/PDO.php';
include 'model/category.php';
include 'model/food.php';

if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

if ((isset($_GET['act'])) && ($_GET['act']) != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'category':
            include 'views/header.php';
            $listcategory = loadall_category();
            include  "views/categories.php";
            include 'views/footer.php';

            break;

        case 'food':
            include 'views/header.php';
            $listfood = loadall_food_home();
            include "views/foods.php";
            include 'views/footer.php';
            break;

        case 'food-detail':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $onefood = loadone_food($id);
                include "views/food-detail.php";
            }else{
                include "views/home.php";
            }
        case 'order':
            include "views/order.php";
            break;

        case 'contact':
            include "views/contact.php";
            break;

        case 'login':
            include "views/login.php";
            break;

        case 'register':
            include "views/register.php";
            break;

            case 'addtocart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $image=$_POST['image'];
                    $price=$_POST['price'];
                    $quantity=1;
                    $money=$quantity * $price;
                    $foodadd=[$id,$name,$image,$price,$quantity,$money];
                    array_push($_SESSION['mycart'],$foodadd);
                    
                }
    
                include "views/cart/viewcart.php";
                break;
        default:
            break;
    }
} else {
    include 'views/header.php';
    include 'views/home.php';
    include 'views/footer.php';
}

