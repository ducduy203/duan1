<?php
session_start();
include 'partials/menu.php';
include '../model/PDO.php';
include '../model/user.php';
include '../model/category.php';
include '../model/food.php';
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'listuser':
            $listuser = loadall_user();
            include "user/manage-user.php";
            break;
        case 'deleteuser':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_user($_GET['id']);
            }
            $listuser = loadall_user();
            include "user/manage-user.php";
            break;

        case 'addcategory':
            if (isset($_POST['addnew']) && ($_POST['addnew'])) {
                $categoryname = $_POST['categoryname'];
                $categorynameErr = "";
                $categoryname = "";

                $image = $_FILES['hinh'];
                if (empty($_POST["categoryname"])) {
                    $categorynameErr = "Name is required";
                } else {
                    $categoryname = test_input($_POST["categoryname"]);
                    if (!preg_match("/^[a-zA-Z-' ]*$/", $categoryname)) {
                        $categorynameErr = "Only letters and white space allowed";
                    }
                }
                if (empty($categorynameErr)) {
                    if ($image['size'] == 0) {
                        $hinh = false;
                        insert_category($categoryname, $hinh);
                        $thongbao = "Successfully Added New";
                    } else {
                        $hinh = 'imgs/' . basename($image['name']);
                        if (move_uploaded_file($image["tmp_name"], $hinh)) {
                            insert_category($categoryname, $hinh);
                            $thongbao = "Successfully Added New";
                        }
                    }
                    insert_category($categoryname, $hinh);
                    $thongbao = "Successfully Added New";
                }
            }
            include "category/add-category.php";
            break;

        case 'listcategory':
            $listcategory = loadall_category();
            include "category/list-category.php";
            break;

        case 'deletecategory':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_category($_GET['id']);
            }
            $listcategory = loadall_category("", 0);
            include "category/list-category.php";
            break;

        case 'updatecategory':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $category = loadone_category($_GET['id']);
            }
            include "category/update-category.php";
            break;
        case 'updatecate':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $categoryname = $_POST['categoryname'];
                $id = $_POST['id'];
                $image = $_FILES['hinh'];
                if ($image['size'] == 0) {
                    $save = false;
                    update_category($id, $categoryname, $save);
                } else {
                    $save = 'imgs/' . basename($image['name']);
                    if (move_uploaded_file($image["tmp_name"], $save)) {
                        update_category($id, $categoryname, $save);
                    }
                }
                update_category($id, $categoryname, $save);
                $thongbao = "Cập nhật thành công";
            }


            $listcategory = loadall_category();
            include "category/list-category.php";
            break;

        case 'addfood':
            if (isset($_POST['add']) && ($_POST['add'])) {
                $category_id = $_POST['category_id'];
                $name = $_POST['name'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $image = $_FILES['hinh'];
                if ($image['size'] == 0) {
                    $hinh = false;
                    insert_food($name, $description, $price, $hinh, $category_id);
                    $thongbao = "Thêm thành công";
                } else {
                    $hinh = 'imgs/' . basename($image['name']);
                    if (move_uploaded_file($image["tmp_name"], $hinh)) {
                        insert_food($name, $description, $price, $hinh, $category_id);
                        $thongbao = "Thêm thành công";
                    }
                }
            }
            $listcategory = loadall_category();
            include "food/add.php";
            break;

        case 'listfood':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $keyword = $_POST['keyword'];
                $category_id = $_POST['category_id'];
            } else {
                $keyword = '';
                $category_id = 0;
            }
            $listcategory = loadall_category();
            $listfood = loadall_food($keyword, $category_id);
            include "food/manage-food.php";
            break;

        case 'deletefood':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_food($_GET['id']);
            }
            $listfood = loadall_food("", 0);
            include "food/manage-food.php";
            break;

        case 'updatef':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $food = loadone_food($_GET['id']);
            }
            include "food/update.php";
            break;

        case 'updatefood':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $name = $_POST['name'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $image = $_FILES['hinh'];
                $id = $_POST['id'];
                if ($image['size'] == 0) {
                    $save = false;
                    update_food($id, $name, $description, $price, $save);
                    $thongbao = "Cập nhật thành công";
                } else {
                    $save = 'imgs/' . basename($image['name']);
                    if (move_uploaded_file($image['tmp_name'], $save)) {

                        update_food($id, $name, $description, $price, $save);
                        $thongbao = "Cập nhật thành công";
                    }
                }
            }
            $listfood = loadall_food("", 0);
            include "food/manage-food.php";
            break;


        default:
            break;
    }
} else {
}

include 'partials/footer.php';
