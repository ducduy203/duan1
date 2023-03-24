<?php
include 'partials/menu.php';
include '../model/PDO.php';
include '../model/user.php';

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

        default:
            break;
    }
} else {
}

include 'partials/footer.php';
