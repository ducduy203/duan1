<?php
session_start();
include 'model/PDO.php';
include 'model/category.php';
include 'model/food.php';
include 'model/comment.php';
include 'model/user.php';


if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

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
                $listcomment = loadOneFood_comment($_GET['id']);
                $id_food = $_GET['id'];
                $id_user = isset($_SESSION['username']['id']) ? $_SESSION['username']['id'] : '';
                include "views/food-detail.php";
            } else {
                include "views/home.php";
            }
            // include "views/food-detail.php";
            break;

        case 'order':
            include "views/order.php";
            break;

        case 'contact':
            include "views/contact.php";
            break;

        case 'register':
            if (isset($_POST['register']) && ($_POST['register'] > 0)) {
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                insert_user($email, $username, $password);
                $thongbao = "Sign Up Success";
            }
            include "views/account/register.php";
            break;

        case 'login':
            if (isset($_POST['login']) && ($_POST['login'] > 0)) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $checkuser = checkuser($username, $password);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('Location: index.php');
                } else {
                    $thongbao = "Account does not exist";
                }
            }
            include "views/account/login.php";
            break;

        case 'logout':
            session_destroy();
            header("Location: index.php");
            break;

        case 'editacc':
            if (isset($_POST['update']) && ($_POST['update'] > 0)) {
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];

                update_user($id, $email, $username, $password, $address, $tel);
                $thongbao = "Account update successful";
                $_SESSION['user'] = checkuser($username, $password);
            }
            include "views/account/editacc.php";
            break;

        case 'forgotpass':
            if (isset($_POST['sendcode']) && ($_POST['sendcode'] > 0)) {
                $email = $_POST['email'];
                $email = checkemail($email);
                if (is_array($email)) {
                    $thongbao = "Your password: " . $email['password'];
                } else {
                    $thongbao = "Email does not exist";
                }
            }
            include "views/account/forgotpass.php";
            break;

        case 'viewcart':
            include "views/cart/viewcart.php";
            break;

        case 'addtocart':
            if (isset($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $hinh = $_POST['hinh'];
                $price = $_POST['price'];
                $quantity = 1;
                $money = $quantity * $price;
                $foodadd = [$id, $name, $hinh, $price, $quantity, $money];
                array_push($_SESSION['mycart'], $foodadd);
            }

            include "views/cart/viewcart.php";
            break;

        case 'delete':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('location: index.php?act=viewcart');
            break;
        default:
            break;
    }
} else {
    include 'views/header.php';
    $listcategory = loadall_category();
    $listfood = loadall_food_home();
    include 'views/home.php';
    include 'views/footer.php';
}
