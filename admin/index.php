<?php
include 'partials/menu.php';
include '../model/PDO.php';
include '../model/user.php';
include '../model/category.php';
include '../model/food.php';


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

            case 'addsp':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tenloai = $_POST['tenloai'];
                    insert_food($name, $description, $price, $image);
                    $thongbao = "Thêm Thành Công!";
                }
                include "food/add.php";
                break;
    
            case 'manage-food':
                $listfood = loadall_food();
                include "food/manage-food.php";
                break;
    
            case 'xoasp':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_food($_GET['id']);
                }
                $listfood = loadall_food();
                include "food/manage-food.php";
                break;
    
            case 'updatefood':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sp = loadone_food($_GET['id']);
                }
                include "food/manage-food.php";
                break;
    
            case 'updatef':
                if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                    $name = $_POST['name'];
                    $description = $_POST['description'];
                    $price = $_POST['price'];
                    $image = $_POST['image'];
                    $id = $_POST['id'];
                    update_food($id, $name, $description, $price, $image);
                    $thongbao = "Cập nhập thành công !";
                }
                $listfood = loadall_food();
                include "food/manage-food.php";
                break;

        case 'addcategory':
            if (isset($_POST['addnew']) && ($_POST['addnew'])) {
                $categoryname=$_POST['categoryname'];
                insert_category($categoryname);
                $thongbao="Successfully Added New";
            }
            include "category/add-category.php";
            break;

        case 'listcategory':
            $listcategory=loadall_category();
            include "category/list-category.php";
            break;    
            
        case 'deletecategory':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_category($_GET['id']);
            }
            $listcategory=loadall_category("",0);
            include "category/list-category.php";
            break;

        case 'updatecategory':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $category=loadone_category($_GET['id']);
            }
            include "category/update-category.php";
            break;
        case 'updatecate':
            if(isset($_POST['updatecategory'])&&($_POST['updatecategory'])){
                $categoryname=$_POST['categoryname'];
                $id=$_POST['id'];
                update_category($id,$categoryname);
                $thongbao="Cập nhật thành công";
            }
            $listcategory=loadall_category();
            include "category/add-category.php";
            break;

        default:
            break;
    }
} else {
}

include 'partials/footer.php';
