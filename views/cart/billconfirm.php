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
    <section class="" style="background-color: #d2c9ff">
        <div class=" container h-100" style="padding-top: 50px; width: 60%">

            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    </div>

                    <?php
                    if (isset($bill) && (is_array($bill))) {
                        extract($bill);
                    }
                    ?>

                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body mx-4">
                                <div class="container">
                                    <p style="text-align: center;"><i style="font-size: 30px; box-shadow: 2px 2px 3px; padding: 5px 20px">Cảm ơn bạn đã đặt hàng</i></p>
                                    <p class="my-2 mt-5 fw-bold" style="font-size: 20px;"><b>Order Information: NO.<?= $bill['id'] ?></b> <i class="ms-5">Payment Methods: <?= $bill['bill_pttt'] ?></i></p>

                                    <div class="col d-flex">
                                        <ul class="list-unstyled">
                                            <li class="text-black">Client Name: <i><?= $bill['bill_name'] ?></i></li>
                                            <li class="text-black mt-1">Email: <i><?= $bill['bill_email'] ?></i></li>
                                            <li class="text-black mt-1">Tel: <i><?= $bill['bill_tel'] ?></i></li>
                                            <li class="text-black mt-1">Address: <i><?= $bill['bill_address'] ?></i></li>
                                            <li class="text-black mt-1">Time: <i><?= $bill['orderdate'] ?></i></li>
                                        </ul>
                                        <hr>
                                    </div>
                                    <?php
                                    billct($billct);
                                    ?>

                                    <div class="row text-black">

                                        <div class="col-xl-12">
                                            <p class="float-end fw-bold" style="font-size: 20px">Total bill: <?= $bill['totalbill'] ?> đ</p>
                                        </div>
                                        <hr style="border: 2px solid black;">
                                    </div>
                                    <div class="text-center" style="margin-top: 10px;">
                                        <img src="views/images/logo.png" alt="" srcset="">
                                    </div>

                                </div>
                            </div>
                        </div>
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