<section class="food-menu">
    <div class="container">
        <h2 class="text-center">Food Menu</h2>


        <?php
        foreach ($listfood as $food) {
            extract($food);
            if ($image) {
                $hinhpath = "/DUAN1/views/" . $image;
                $hinh = $hinhpath;
            } else {
                $hinh = "no photo";
            }
            echo '
                <div class="food-menu-box">
                    <div class="food-menu-img">
                        <img src="' . $hinh . '" width="120px" height="120px">
                    </div>

                    <div class="food-menu-desc">
                        <a href="food-detail.php" style="text-decoration: none; color: #ff6b81">
                            <h4>' . $name . '</h4>
                        </a>
                        <p class="food-price">' . $price . ' đ</p>
                        <p class="food-detail">' . $description . '</p>
                        <br>
                        <a href="views/order.php" class="btn btn-danger">Order Now</a>
                    </div>
                </div>
                ';
        }
        ?>

        <div class="clearfix"></div>
        <span class="material-symbols-outlined">add_box</span>


    </div>

</section>