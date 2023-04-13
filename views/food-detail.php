<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        * {
            box-sizing: border-box;
        }

        .cols-2 {
            grid-template-columns: 1fr 1fr;
        }

        html,
        body {
            height: 100%;
        }

        body {
            margin: 10px 50px 10px 50px;
            display: grid;
            grid-template-columns: 2fr 1fr;
            grid-gap: 30px;
            font-family: "Raleway", sans-serif;
            background-color: #9ee2c4;
        }

        h3 {
            font-size: 0.7em;
            letter-spacing: 1.2px;
            color: #a6a6a6;
        }

        img {
            max-width: 100%;
            filter: drop-shadow(1px 1px 3px #a6a6a6);
        }

        /* ----- Product Section ----- */
        .product {
            display: grid;
            grid-template-columns: 0.9fr 1fr;
            margin: auto;
            padding: 2.5em 0;
            min-width: 500px;
            min-height: 500px;
            background-color: white;
            border-radius: 5px;
        }

        .product__photo {
            position: relative;

        }

        .photo-main {
            position: absolute;
            left: -3em;
            top: 30px;
            width: 300px;
            /* height: 300px; */
            border-radius: 50%;
            box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;
        }

        .product__info {
            padding: 0.8em 0;
        }

        .title h1 {
            margin-bottom: 1em;
            color: #4c4c4c;
            font-size: 1.5em;
            font-weight: 900;
        }

        .price {
            margin: 1.5em 0;
            color: #ff3f40;
            font-size: 1.2em;
        }

        .price span {
            padding-left: 0.15em;
            font-size: 1.5em;
        }



        .buy--btn {
            margin: 2em 0;
            padding: 1.5em 3.1em;
            border: none;
            border-radius: 7px;
            font-size: 0.8em;
            font-weight: 700;
            letter-spacing: 1.3px;
            color: #fff;
            background-color: #ff3f40;
            box-shadow: 2px 2px 25px -7px #4c4c4c;
            cursor: pointer;
        }

        .time {
            font-size: 0.8em;
            color: #807e7e;
        }

        .user {
            display: flex;
            align-items: center;
            grid-gap: 8px;
            font-weight: 600;
        }

        .avt {
            width: 30px;
            height: 30px;
            border-radius: 50px;
        }
    </style>
</head>

<body>
    <div class="product">
        <?php
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            $onefood = loadone_food($id);
            $image = $onefood['image'];
            $name = $onefood['name'];
            $price = $onefood['price'];
            $description = $onefood['description'];
            $hinhpath = "http://localhost/DUAN1/admin/" . $image;
            if ($image) {
                $hinh = $hinhpath;
            } else {
                $hinh = "no photo";
            }
        ?>
            <div class="product__photo">
                <div class="">
                    <img class="photo-main" src="<?= $hinh ?>" alt="green apple slice" style="height: 250px;">
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
                        <li style="width: 150px"><?= $description ?></li>
                    </ul>
                </div>
                <button class="buy--btn">ADD TO CART</button>

                <div class="pt-5">
                    <h6 class="mb-0"><a href="index.php?act=food" class="text-body" ><i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                </div>
            </div>
        <?php } ?>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#comment").load("views/comment.php", {
                id_food: <?= $id ?>
            });
        });
    </script>


    <div>
        <h2 style="color: #4c4c4c; margin-top: 2em;">Comment</h2>
        <?php
        foreach ($listcomment as  $comment) {
            extract($comment);
        ?>
            <div>
                <div class="user">
                    <img class="avt" src="views/images/avt.jpg" alt="">
                    <p>User code: <?= $comment['id_user']; ?></p>
                </div>
                <div style="margin-left: 20px;">
                    <p><?= $comment['content']; ?></p>
                    <p class="time"><?= $comment['date']; ?></p>
                </div>
            </div>
        <?php } ?>

        <div style="margin-top: 2em" id="comment"></div>

    </div>

</body>

</html>