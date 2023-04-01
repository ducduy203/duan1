<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WowFood</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="js/home.js">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
</head>

<body>

    <!-- Navbar Section Starts Here -->
            <div class="navbar bg-dark ">
                <a class="mx-5 fw-bold text-decoration-none my-2 text-white"> WowFood - Taste the goodness in every bite!</a>
                
                <div class="dropdown show mx-5 my-2">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="views/login.php">Login</a>
                        <a class="dropdown-item" href="#">Logout</a>
                        <!-- <a class="dropdown-item" href="#">Registerin</a> -->
                    </div>
                </div>
            </div>
    <section class="navbar">
        <div class="container">
            <div class="">
                <a href="#" title="Logo">
                    <img src="views/images/logo.png" alt="Restaurant Logo" class="">
                </a>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">


                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item mx-3">
                                <a class="nav-link active fw-bold fs-4" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link fw-bold fs-4" href="index.php?act=category">Category</a>
                            </li>
                            <li class="nav-item mx-3"> 
                                <a class="nav-link fw-bold fs-4" href="index.php?act=food">Food</a>
                            </li>
                            <li class="nav-item ms-3">
                                <a class="nav-link fw-bold fs-4" href="index.php?act=contact">Contact</a>
                            </li>
                            <li class="nav-item ms-3">
                                <a class="nav-link fw-bold fs-4" href="views/login.php">Login</a>
                            </li>
                        </ul>
                        <form action="food-search.php" method="POST" class="text-center container" style="padding-left: 100px">
                            <input type="search" name="search" class="border border-secondary border-1 rounded-1" style="height: 37px; padding: 10px; outline: none" placeholder="Search for Food.." required>
                            <input type="submit" name="submit" value="Search" class="btn btn-primary w">
                        </form>
                    </div>
                </div>
            </nav>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center" style="background-image: url(https://png.pngtree.com/thumb_back/fw800/back_our/20190621/ourmid/pngtree-simple-food-top-view-banner-image_178573.jpg)">
        <div class="container">

            

        </div>
    </section>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>