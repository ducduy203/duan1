<?php

include('./config/constants.php');
include('login-check.php');

?>


<html>

<head>
    <title>WowFood - Home Page</title>
    <link rel="stylesheet" href="../css/admin.css">
    <!-- <link rel="stylesheet" href="../css/style2.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="menu text-center">
        <div class="wrapper">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?act=listuser">User</a></li>
                <li><a href="index.php?act=addcategory">Category</a></li>
                <li><a href="manage-food.php">Food</a></li>
                <li><a href="manage-order.php">Order</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>