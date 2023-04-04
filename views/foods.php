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

</section>