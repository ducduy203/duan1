<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WowFood</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="js/home.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>

    <!-- Navbar Section Starts Here -->
            <div class="navbar bg-dark">
                <a class="ms-5 fw-bold text-decoration-none my-2 text-white"> WowFood - Taste the goodness in every bite!</a>
                
                <div class="dropdown show me-4 my-2  d-flex" >
                    <a href="index.php?act=viewcart" class="" >
                            <span class="material-symbols-outlined text-light mt-2 ms-3">
                                shopping_cart
                            </span>
                    </a>
                    &ensp; &ensp;
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item d-flex" href="index.php?act=login">Login
                            <span class="ms-2 material-symbols-outlined">
                            login
                            </span>
                        </a>
                        
                        <a class="dropdown-item d-flex" href="#">Logout 
                        <span class=" ms-2 material-symbols-outlined">
                            logout
                        </span>
                        </a>
                        <!-- <a class="dropdown-item" href="#">Registerin</a> -->
                    </div>
                </div>
            </div>
    <section class="navbar">
        <div class="container" style="display: grid; grid-template-columns: 1fr 2fr">
            <img src="views/images/logo.png" alt="Restaurant Logo" class="">

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
                        <form class="d-flex ms-5" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" required>
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <div id="carouselExampleRide" class="carousel slide px-3" data-bs-ride="true">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="views/images/banner1.jpg" class="d-block w-100" style="height: 400px" alt="">
        </div>
        <div class="carousel-item">
        <img src="views/images/banner2.jpg" class="d-block w-100" style="height: 400px" alt="">
        </div>
        <div class="carousel-item">
        <img src="views/images/banner3.jpg" class="d-block w-100" style="height: 400px" alt="">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>