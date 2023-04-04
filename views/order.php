<head>
    <style>
        * {
            margin: 0 0;
            padding: 0 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .img-responsive {
            width: 100%;
            height: 120px;
        }

        .img-curve {
            border-radius: 15px;
        }

        .text-center {
            text-align: center;
        }

        .btn {
            padding: 1%;
            border: none;
            font-size: 1rem;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #ff6b81;
            color: white;
            cursor: pointer;
        }

        .btn-primary:hover {
            color: white;
            background-color: #ff4757;
        }

        h2 {
            color: #2f3542;
            font-size: 2rem;
            margin-bottom: 2%;
        }

        h3 {
            font-size: 1.5rem;
        }

        fieldset {
            border: 1px solid white;
            margin: 5%;
            padding: 3%;
            border-radius: 5px;
        }

        .food-search {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            padding: 7% 0;
        }

        .food-menu-img {
            width: 20%;
            float: left;
        }

        .food-menu-desc {
            width: 70%;
            float: left;
            margin-left: 8%;
        }

        /* for Order Section */
        .order {
            width: 50%;
            margin: 0 auto;
        }

        .input-responsive {
            width: 96%;
            padding: 1%;
            margin-bottom: 3%;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
        }

        .order-label {
            margin-bottom: 1%;
            font-weight: bold;
        }

        .food-price {
            font-size: 1.2rem;
            margin: 2% 0;
        }
    </style>
</head>
<section class="food-search" style="background-image: url(views/images/bg.jpg)">
    <div class="container">

        <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

        <form action="#" class="order">
            <fieldset>
                <legend>Selected Food</legend>
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
                        <a href="index.php" class="food-menu-img">
                            <img src="admin/<?= $image ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                        </a>

                        <div class="food-menu-desc">
                            <h3><?= $name ?></h3>
                            <p class="food-price"><?= $price ?> đ</p>

                            <div class="order-label">Quantity</div>
                            <input type="number" name="qty" class="input-responsive" value="1" required>


                            <div class="order-label">Size</div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    S
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    M
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    L
                                </label>
                            </div>

                        </div>
                    <?php } ?>

                <?php } ?>




            </fieldset>

            <fieldset>
                <legend>Delivery Details</legend>
                <div class="order-label">Full Name</div>
                <input type="text" name="full-name" placeholder="Full Name" class="input-responsive" required>

                <div class="order-label">Phone Number</div>
                <input type="tel" name="contact" placeholder="Phone Number" class="input-responsive" required>

                <div class="order-label">Email</div>
                <input type="email" name="email" placeholder="Email" class="input-responsive" required>

                <div class="order-label">Address</div>
                <textarea name="address" rows="10" placeholder="Address" class="input-responsive" required></textarea>

                <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary"> &ensp;
                <input type="submit" name="Back" value="Back" class="btn btn-primary">

            </fieldset>

        </form>

    </div>
</section>