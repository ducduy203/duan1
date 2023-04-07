<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    // var_dump($_SESSION['mycart']);
                    foreach ($_SESSION['mycart'] as $cart) {

                      // Kiểm tra biến $image tồn tại
                      if (isset($cart[2])) {
                        $hinhpath = "";
                        $hinh = $hinhpath . $cart[2];
                      } else {
                        $hinh = "no photo";
                      }
                      
                      $money = $cart[4] * $cart[3];
                      $total += $money;
                      $delete = '<a href="index.php?act=delete&idcart=' . $i . '" style="color: black;"><ion-icon name="trash-outline"></ion-icon></a>';
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
                          <button onclick="minus()" name="minus" class="border border-0"><i class="fa-solid fa-minus"></i></button>
                          <input type="text" class="text-muted text-center border-0" style="width:25%" id="amount" name="amount" value="1">
                          <button onclick="plus()" name="plus" class="border border-0"><i class="fa-solid fa-plus"></i></button>
                        </div>

                        <!-- <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                          <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control form-control-sm" />
                        </div> -->

                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                          <h6 class="mb-0"><?= $cart[5] ?></h6>
                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                          <?= $delete ?>
                        </div>
                      </div>

                    <?php }
                    $i += 1;
                    ?>
                    <script>
                        let amountElement = document.getElementById('amount')
                        let amount= amountElement.value
                        let render =(amount)=>{
                          amountElement.value = amount
                        }
                        let plus=()=>{
                          amount++
                          render(amount);
                        }
                        let minus=()=>{
                          if(amount>0)
                          amount--
                          render(amount);
                        }
                        amountElement.addEventListener('input',()=>{
                          amount = amountElement.value;
                          amount = isNaN(amount)?1:amount;
                          render(amount);
                          console.log(amount);
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

                    <div class="d-flex justify-content-between mb-4">
                      <h5 class="text-uppercase">Items</h5>
                      <h5> </h5>
                    </div>

                    <h5 class="text-uppercase mb-3">Shipping</h5>

                    <div class="mb-4 pb-2">
                      <select class="select">
                        <option value="1">Standard-Delivery- €5.00</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                      </select>
                    </div>

                    <h5 class="text-uppercase mb-3">Give code</h5>

                    <div class="mb-5">
                      <div class="form-outline">
                        <input placeholder="Enter your code" type="text" id="form3Examplea2" class="form-control form-control-lg" />

                      </div>
                    </div>

                    <hr class="my-4">

                    <div class="d-flex justify-content-between mb-5">
                      <h5 class="text-uppercase">Total price</h5>
                      <h5>€ 137.00</h5>
                    </div>

                    <button type="button" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark">Register</button>

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
</body>

</html>