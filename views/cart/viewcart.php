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
  <section class="h-100" style="background-color: #d2c9ff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-8">
                  <div class="p-5">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                      <h1 class="fw-bold mb-0 text-black text-danger">Shopping Cart</h1>

                    </div>

                    <?php
                    $total = 0;
                    $i = 0;
                    foreach ($_SESSION['mycart'] as $cart) {
                      if (isset($cart[2])) {
                        $hinhpath = "";
                        $hinh = $hinhpath . $cart[2];
                      } else {
                        $hinh = "no photo";
                      }

                      $money = $cart[4] * $cart[3];
                      $total += $money;
                      $delete = '<a href="index.php?act=delete&idcart=' . $i . '" style="color: black;"><ion-icon name="trash-outline"></ion-icon></a>';
                      $i += 1;

                    ?>
                      <hr class="my-4">
                      <div class="row mb-4 d-flex justify-content-between align-items-center">
                        <div class="col-md-2 col-lg-2 col-xl-2">
                          <img src="<?= $hinh ?>" width="100" height="100" alt="">
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3">
                          <h6 class="text-muted"><?= $cart[1] ?></h6>
                        </div>
                        <div class="d-flex justify-content-center align-items-center col-md-3 col-lg-3 col-xl-3">
                          
                          <input type="text" class="form-control quantity-input" value="<?= $cart[4] ?>">
                         
                          <!-- <button onclick="minus()" name="minus" class="border border-0"><i class="fa-solid fa-minus"></i></button>
                          <input type="text" class="text-muted text-center border-0" style="width:25%" id="amount" name="amount" value="<?= $cart[4] ?>">

                          <button onclick="plus()" name="plus" class="border border-0"><i class="fa-solid fa-plus"></i></button> -->
                        </div>

                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                          <h6 class="mb-0"><?= $cart[5] ?></h6>
                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                          <?= $delete ?>
                        </div>
                      </div>

                    <?php } ?>
                    <script>
                      $(document).ready(function() {
                        // Plus button click
                        $(document).on('click', '.plus-btn', function() {
                          var input = $(this).prev('input.quantity-input');
                          var quantity = parseInt(input.val());
                          input.val(quantity + 1);
                        });

                        // Minus button click
                        $(document).on('click', '.minus-btn', function() {
                          var input = $(this).next('input.quantity-input');
                          var quantity = parseInt(input.val());
                          if (quantity > 1) {
                            input.val(quantity - 1);
                          }
                        });
                      });
                    </script>



                    <hr class="my-4">

                    <div class="pt-5">
                      <h6 class="mb-0"><a href="index.php?act=food" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 bg-grey">
                  <div class="p-5">
                    <h3 class="fw-bold mb-5 mt-2 pt-1 text-danger">Summary</h3>
                    <hr class="my-4">

                   

                    <h5 class="text-uppercase mb-3">Give code</h5>

                    <div class="mb-5">
                      <div class="form-outline">
                        <input placeholder="Enter your code" type="text" id="form3Examplea2" class="form-control form-control-lg" />

                      </div>
                    </div>

                    <hr class="my-4">

                    <div class="d-flex justify-content-between mb-5">
                      <h5 class="fw-bold text-uppercase">Total price</h5>
                      <h5 class="fw-bold"><?= $total ?> đ</h5>
                    </div>

                    <a type="button" class="btn btn-dark btn-block btn-lg" href="index.php?act=bill" style="color: #fff; text-decoration: none;">Register</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <h2 class="text-center">See More Food</h2>
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
        <form action="index.php?act=addtocart" method="post" class="food-menu-box" style="margin: 30px 0 0 50px">
          <a href="index.php?act=food-detail&id=<?php echo $id; ?>" class="food-menu-img">
            <img src="<?= $hinh ?>" width="120px" height="120px" class="rounded-4">
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
            <button type="submit" name="addtocart" class="btn btn-danger">Add to cart</button>

          </div>

        </form>
      <?php } ?>


      <div class="clearfix"></div>


    </div>
  </section>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>