<?php
include "../model/PDO.php";
include "../model/food.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style3.css">
    <title>WowFood</title>


</head>

<body>
    <div class="product">

            <?php
				// $sp = loadone_sanpham($id);
				if (isset($_GET['id']) && ($_GET['id'] > 0)) {
					$id = $_GET['id'];
					$onefood = loadone_food($id);
					if (!$onefood) {
						echo "Sản phẩm không tồn tại.";
					} else {
						$image = $onefood['image'];
						$name = $onefood['name'];
						$price = $onefood['price'];
						$description = $onefood['description'];
				?>
				<div class="product__photo">
                    <div class="">
                        <img class="photo-main" src="<?= $image ?>" alt="green apple slice" style="height: 250px;">
                    </div>
                    <div class="variant">
                        <h3></h3>
                        <ul>
                            <li>12cm</li>
                            <li>18cm</li>
                            <li>22cm</li>
                        </ul>
                    </div>
                </div>
                <div class="product__info">
                    <div class="title">
                        <h1><?= $name ?></h1>
                        <span>COD: <?= $id ?></span>
                    </div>
                    <div class="price">
                        <span><?= $price ?></span> đ
                    </div>
                    <div class="description">
                        <h3>INCLUDES</h3>
                        <ul>
                            <li><?= $description ?></li>
                            <li>Cà chua</li>
                            <li>Xúc xích</li>
                            <li>..</li>
                        </ul>
                    </div>
                    <button class="buy--btn">ADD TO CART</button>
                </div>
					<?php } ?>

				<?php } ?>


    </div>

    <div>
        <h2 style="color: #4c4c4c; margin-top: 2em;">Comment</h2>

        <div>
            <div class="user">
                <img class="avt" src="images/menu-pizza.jpg" alt="">
                <p>Thảo Phạm</p>
            </div>
            <div style="margin-left: 20px;">
                <p>Món ngon</p>
                <p class="time">20-03-2022 12:04</p>
            </div>
        </div>
        <div>
            <div class="user">
                <img class="avt" src="images/momo.jpg" alt="">
                <p>Dâu</p>
            </div>
            <div style="margin-left: 20px;">
                <p>Alo alo</p>
                <p class="time">20-03-2021 17:09</p>
            </div>
        </div>

    </div>

</body>

</html>