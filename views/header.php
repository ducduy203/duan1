<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WowFood</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="views/images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
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

            <form action="food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary w">
            </form>

        </div>
    </section>

</body>

</html>