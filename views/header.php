<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WowFood</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style3.css">

    <link rel="stylesheet" href="js/home.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>

    <!-- Navbar Section Starts Here -->
    <div class="navbar bg-dark">
        <a class="ms-5 fw-bold text-decoration-none my-2 text-white"> WowFood - Taste the goodness in every bite!</a>

        <div class="dropdown show me-4 my-2  d-flex">
            <a href="index.php?act=viewcart" class="">
                <span class="material-symbols-outlined text-light mt-2 ms-3">
                    shopping_cart
                </span>
            </a>
            <a href="index.php?act=orderhistory" class="">
                Lịch sử
            </a>
            &ensp; &ensp;
            <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
            ?>
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hello, <?= $username ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="margin-top: 40px; margin-left: 35px;">
                    <a class="dropdown-item d-flex" href="index.php?act=editacc">
                        Edit Acount
                    </a>
                    <button onclick="return confirm(`Are you sure?`);" style="border: none; background-color: white;">

                        <a class="dropdown-item d-flex" href="index.php?act=logout">Logout
                            <span class=" ms-2 material-symbols-outlined">
                                Logout
                            </span>
                        </a>
                    </button>
                    <?php
                    if ($role == 1) { ?>
                        <a class="dropdown-item d-flex" href="admin">
                            Login Admin
                        </a>
                    <?php } ?>

                </div>
            <?php } else { ?>
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Account
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="margin-top: 40px; margin-left: 35px;">
                    <a class="dropdown-item d-flex" href="index.php?act=login">Login
                        <span class="ms-2 material-symbols-outlined">
                            Login
                        </span>
                    </a>

                    <a class="dropdown-item d-flex" href="#">Logout
                        <span class=" ms-2 material-symbols-outlined">
                            Logout
                        </span>
                    </a>
                </div>
            <?php } ?>

        </div>
    </div>
    <section class="navbar">
        <div class="container" style="display: grid; grid-template-columns: 1fr 2fr">
            <a href="index.php"><img src="views/images/logo.png" alt="Restaurant Logo" class=""></a>

            <nav class="navbar navbar-expand-xxl navbar-light">
                <div class="collapse navbar-collapse " id="navbarNavDropdown">
                    <ul class="navbar-nav pe-5">
                        <li class="nav-item me-4">
                            <a class="nav-link active fw-bold fs-4" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link fw-bold fs-4" href="index.php?act=category">Category</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link fw-bold fs-4" href="index.php?act=food">Food</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link fw-bold fs-4" href="index.php?act=contact">Contact</a>
                        </li>
                    </ul>

                    <?php
                    $category_id = 0; // Thiết lập giá trị mặc định cho category_id là 0

                    if (isset($_POST['listok'])) {
                        $keyword = $_POST['keyword'];
                        $category_id = $_POST['category_id'];
                        // Thêm các xử lý tìm kiếm tại đây
                    }
                    ?>
                    <form action="index.php?act=food" class="d-flex ms-1" role="search" method="post">
                        <input class="form-control me-1" name="keyword" type="search" placeholder="Search" aria-label="Search" required>
                        <input type="hidden" name="category_id" value="<?php echo $category_id ?>">
                        <input class="btn btn-outline-success ms-1" type="submit" name="listok" value="Search">
                    </form>
                </div>
        </div>
        </nav>
        </div>
    </section>




</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>