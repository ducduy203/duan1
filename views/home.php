<div id="carouselExampleAutoplaying" class="container carousel slide px-3" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <img src="views/images/banner1.jpg" class="d-block w-100" style="height: 400px" alt="">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="views/images/banner2.jpg" class="d-block w-100" style="height: 400px" alt="">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="views/images/banner3.jpg" class="d-block w-100" style="height: 400px" alt="">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<section class="categories ">
    <div class="container">
        <h2 class="text-center text-black fw-bold fs-1 mb-4">Category</h2>
        <div class="container text-center">
            <div class="row row-cols-auto ">
                <?php
                foreach ($listcategory as $category) {
                    extract($category);
                    if ($image) {
                        $hinhpath = "/DUAN1/admin/" . $image;
                        $hinh = $hinhpath;
                    } else {
                        $hinh = "no photo";
                    }

                ?>
                    <div class="col border rounded bg-dark-subtle me-5">
                        <div class="border rounded-circle bg-body mt-4 mb-3">
                            <img src="<?= $hinh ?>" alt="" class="img-responsive m-4" style="width: 70px; height: 70px">
                        </div>
                        <div class="mb-4">
                            <a href="" class="text-decoration-none text-black fw-bold fs-5"><?= $categoryname ?></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
</section>
<!-- Categories Section Ends Here -->

<!-- fOOD MEnu Section Starts Here -->
<section class="food-menu">
    <div class="container">
        <h2 class="text-center">Food Menu</h2>

        <?php
        foreach ($listfood as $food) {
            extract($food);
            if ($image) {
                $hinhpath = "/DUAN1/admin/" . $image;
                $hinh = $hinhpath;
            } else {
                $hinh = "no photo";
            }
        ?>
            <form action="index.php?act=addtocart&id=<?php echo $id; ?>" method="post" class="food-menu-box" style="margin: 30px 0 0 50px">
                <a href="index.php?act=food-detail&id=<?php echo $id; ?>" class="food-menu-img">
                    <img src="<?= $hinh ?>" width="120px" height="120px">
                </a>

                <div class="food-menu-desc">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="hidden" name="name" value="<?= $name ?>">
                    <input type="hidden" name="price" value="<?= $price ?>">
                    <input type="hidden" name="description" value="<?= $description ?>">
                    <input type="hidden" name="hinh" value="<?= $hinh ?>">


                    <a href="views/food-detail.php?id=<?php echo $id; ?>" style="text-decoration: none; color: #ff6b81">
                        <h4><?= $name ?></h4>
                    </a>
                    <p class="food-price"><?= $price ?> đ</p>
                    <p class="food-detail"><?= $description ?></p>
                    <br>
                    <a href="index.php?act=order&id=<?php echo $id; ?>" class="btn btn-danger">Order Now</a> &ensp;
                    <button type="submit" name="addtocart" class="btn btn-danger">Add</button>

                </div>

            </form>
        <?php } ?>


        <div class="clearfix"></div>



    </div>

    <p class="text-center">
        <a href="#">See All Foods</a>
    </p>
</section>