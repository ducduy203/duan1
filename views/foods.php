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
                <div class="food-menu-box" style="margin: 30px 0 0 50px">
                    <div class="food-menu-img">
                        <img src="<?= $hinh ?>" width="120px" height="120px">
                    </div>

                    <div class="food-menu-desc">
                        <a href="views/food-detail.php?id=<?php echo $id; ?>" style="text-decoration: none; color: #ff6b81">
                            <h4><?= $name ?></h4>
                        </a>
                        <p class="food-price"><?= $price ?> đ</p>
                        <p class="food-detail"><?= $description ?></p>
                        <br>
                        <a href="views/order.php?id=<?php echo $id; ?>" class="btn btn-danger">Order Now</a> &ensp;
                        <a href="index.php?act=cart" class="btn btn-danger">Add</a>
                    </div>
                </div>
				<?php } ?>
        

        <div class="clearfix"></div>


    </div>

</section>