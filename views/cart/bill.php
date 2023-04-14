<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6900a52b5c.js" crossorigin="anonymous"></script>
    <title>ViewCart</title>
</head>
<style>
    @media (min-width: 1025px) {
        .h-custom {
            height: 100vh !important;
        }
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
    }

    .card-registration .select-arrow {
        top: 13px;
    }

    .bg-grey {
        background-color: #eae8e8;
    }

    @media (min-width: 992px) {
        .card-registration-2 .bg-grey {
            border-top-right-radius: 16px;
            border-bottom-right-radius: 16px;
        }
    }

    @media (max-width: 991px) {
        .card-registration-2 .bg-grey {
            border-bottom-left-radius: 16px;
            border-bottom-right-radius: 16px;
        }
    }
</style>

<body>
    <section class="" style="background-color: #d2c9ff; height: 800px">
        <div class="container h-100" style="padding-top: 50px; width: 100%; display: grid; grid-template-columns: 1fr 1fr; gap: 5em">
            <div>
                <p class="mt-3" style="font-weight: 600; font-size: 30px; text-align: center; margin-bottom: 40px">Thông Tin Đơn Hàng</p>
                <?php
                viewcart();
                ?>
            </div>
            <div class="card" style="border-radius: 15px;">
                <div class="card-body mx-4">
                    <div class="container">

                        <p class="mt-3" style="font-weight: 600; font-size: 30px; text-align: center">Thông Tin Khách Hàng</p>

                        <?php
                        if (isset($_SESSION['user'])) {
                            $name = $_SESSION['user']['username'];
                            $email = $_SESSION['user']['email'];
                            $tel = $_SESSION['user']['tel'];
                            $address = $_SESSION['user']['address'];
                        } else {
                            $name = "";
                            $email = "";
                            $tel = "";
                            $address = "";
                        }
                        ?>

                        <form class="mt-5" action="index.php?act=billconfirm" method="post">
                            <div class="form-outline form-white mb-4">
                                <input name="username" type="text" id="typeName" class="form-control form-control-lg" size="17" placeholder="UserName" value="<?= $name ?>" />
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input name="email" type="text" id="typeName" class="form-control form-control-lg" size="17" placeholder="Email" value="<?= $email ?>" />
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input name="tel" type="text" id="typeText" class="form-control form-control-lg" size="17" placeholder="Phone" value="<?= $tel ?>" />
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input name="address" type="text" id="typeText" class="form-control form-control-lg" size="17" placeholder="Address" value="<?= $address ?>" />
                            </div>

                            <div class="" style="margin-top: 20px;">
                                <h4>Phương Thức Thanh Toán</h4>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pttt" value="1" checked>Thanh Toán Khi Nhận Hàng
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pttt" value="2">Thanh Toán Online
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pttt" value="3">Chuyển khoản
                                </div>
                            </div>
                            <div class="pt-5">
                                <h6 class="mb-0"><a href="index.php?act=viewcart" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Back to cart</a></h6>
                            </div>
                            <div class="modal-footer">
                                <button onclick="return confirm('Are you sure you want to order?');" style="border: none">
                                    <input type="submit" name="order" value="Order" class="btn btn-primary">
                                </button>
                            </div>
                        </form>



                    </div>
                </div>
            </div>

        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>