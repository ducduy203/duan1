<?php
session_start();
include 'model/PDO.php';
include 'model/category.php';
include 'model/food.php';
include 'model/comment.php';
include 'model/user.php';
include 'model/cart.php';

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

if ((isset($_GET['act'])) && ($_GET['act']) != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'category':
            include 'views/header.php';
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $keyword = $_POST['keyword'];
                $category_id = $_POST['category_id'];
            } else {
                $keyword = '';
                $category_id = 0;
            }
            if (isset($_GET['category_id']) && ($_GET['category_id'] > 0)) {
                $category_id = $_GET['category_id'];
            }
            $listfood = loadall_food_home($keyword, $category_id);
            $listcategory = loadall_category();
            include  "views/categories.php";
            include 'views/footer.php';

            break;

        case 'food':
            include 'views/header.php';

            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $keyword = $_POST['keyword'];
                $category_id = $_POST['category_id'];
            } else {
                $keyword = '';
                $category_id = 0;
            }
            if (isset($_GET['category_id']) && ($_GET['category_id'] > 0)) {
                $category_id = $_GET['category_id'];
            }
            $listcategory = loadall_category();
            $listfood = loadall_food_home($keyword, $category_id);
            include "views/foods.php";
            include 'views/footer.php';
            break;

        case 'food-detail':
            include 'views/header.php';
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
            include 'views/footer.php';
            break;

        case 'order':
            include "views/order.php";
            break;

        case 'contact':
            include 'views/header.php';
            include "views/contact.php";
            include 'views/footer.php';
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
            include 'views/header.php';
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $keyword = $_POST['keyword'];
                $category_id = $_POST['category_id'];
            } else {
                $keyword = '';
                $category_id = 0;
            }
            $listfood = loadall_food_home($keyword, $category_id);
            include "views/cart/viewcart.php";
            break;

        case 'addtocart':
            include 'views/header.php';
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $keyword = $_POST['keyword'];
                $category_id = $_POST['category_id'];
            } else {
                $keyword = '';
                $category_id = 0;
            }
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
            $listfood = loadall_food_home($keyword, $category_id);
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

        case 'bill':
            include 'views/header.php';
            include "views/cart/bill.php";
            break;

        case 'billconfirm':
            include 'views/header.php';

            if (isset($_POST['order']) && ($_POST['order'] > 0)) {
                if (isset($_SESSION['user'])) {
                    $id_user = $_SESSION['user']['id'];
                } else {
                    $id = 0;
                }
                $username = $_POST['username'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $pttt = $_POST['pttt'];
                $address = $_POST['address'];
                $orderdate = date('Y/m/d');
                $totalbill = totalbill();
                $idbill = insert_bill($id_user, $username, $email, $tel, $address, $pttt, $orderdate, $totalbill);

                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                }
                $_SESSION['cart'] = [];
            }
            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            include "views/cart/billconfirm.php";
            break;

        case 'orderhistory':
            include 'views/header.php';
            // $listbill = loadall_bill($_SESSION['user']['id']);
            if (isset($_SESSION['user']) && $_SESSION['user']) {
                $user = $_SESSION['user'];
                $listbill = loadall_bill($user['id']);
            } else {
                $listbill = null;
            }
            // $billct = loadall_cart($idbill);
            include "views/cart/orderhistory.php";
            include 'views/footer.php';
            break;

        default:
            break;
    }
} else {
    include 'views/header.php';
    if (isset($_POST['listok']) && ($_POST['listok'])) {
        $keyword = $_POST['keyword'];
        $category_id = $_POST['category_id'];
    } else {
        $keyword = '';
        $category_id = 0;
    }
    $listcategory = loadall_category();
    $listfood = loadall_food_home($keyword, $category_id);
    include 'views/home.php';
    include 'views/footer.php';
}
