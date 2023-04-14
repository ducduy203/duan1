<style>
    .boxhv:hover img {
        transform: scale(1.1);
        transition: 0.5s;
    }

    .boxhv:hover {
        transform: scale(1.1);
        transition: 0.5s;
    }
</style>

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
            <form action="index.php?act=addtocart" method="post" class="food-menu-box boxhv" style="margin: 30px 0 0 50px">
                <a href="index.php?act=food-detail&id=<?php echo $id; ?>" class="food-menu-img">
                    <img src="<?= $hinh ?>" width="120px" height="120px" class="rounded-4 imghover">
                </a>

                <div class="food-menu-desc">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="hidden" name="name" value="<?= $name ?>">
                    <input type="hidden" name="price" value="<?= $price ?>">
                    <input type="hidden" name="description" value="<?= $description ?>">
                    <input type="hidden" name="hinh" value="<?= $hinh ?>">


                    <a href="index.php?act=food-detail&id=<?php echo $id; ?>" style="text-decoration: none; color: #ff6b81">
                        <h4><?= $name ?></h4>
                    </a>
                    <p class="food-price"><?= $price ?> đ</p>
                    <p class="food-detail"><?= $description ?></p>
                    <br>
                    <button type="submit" name="addtocart" class="btn" style="background: linear-gradient(30deg, #fc5c7d, #6a82fb); color: #fff">Add to cart</button>


                </div>

            </form>
        <?php } ?>


        <div class="clearfix"></div>


    </div>

</section>