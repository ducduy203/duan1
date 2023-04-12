<?php

function viewcart()
{
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
    }
    echo '
        <div class="row mb-4 d-flex justify-content-between align-items-center">
            <div class="col-md-2 col-lg-1 col-xl-2">
                <img src=' . $hinh . ' width="100" height="100" alt="">
            </div>
            <div class="col-md-3 col-lg-1 col-xl-3">
                <h6 class="text-muted">' . $cart[1] . '</h6>
            </div>
            <div class="d-flex justify-content-center align-items-center col-md-3 col-lg-3 col-xl-3">
                <button onclick="minus()" name="minus" class="border border-0"><i class="fa-solid fa-minus"></i></button>
                <input type="text" class="text-muted text-center border-0" style="width:25%" id="amount" name="amount" value=' . $cart[4] . '>

                <button onclick="plus()" name="plus" class="border border-0"><i class="fa-solid fa-plus"></i></button>
            </div>
            <div class="col-md-3 col-lg-1 col-xl-2 offset-lg-1">
                <h6 class="mb-0">' . $cart[5] . '</h6>
            </div>
        </div>
        <div class="row">
            <p class="col fw-bold">Tổng đơn hàng: </p>
            <p class="col fw-bold" style="padding-left: 26em">' . $total . '</p>
        </div>
    ';
    $i += 1;
}

function totalbill()
{
    $total = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $money = $cart[4] * $cart[3];
        $total += $money;
    }
    return $total;
}

function insert_bill($name, $email, $tel, $address, $orderdate, $totalbill)
{
    $sql = "insert into tbl_bill (bill_name, bill_email, bill_tel, bill_address, orderdate, totalbill) values('$name', '$email', '$tel', '$address', '$orderdate', '$totalbill')";
    return  pdo_execute_return_lastInsertID($sql);
}

function insert_cart($id_user, $id_food, $image, $name, $price, $quantity, $money, $id_bill)
{
    $sql = "insert into tbl_cart(id_user, id_food, image, name, price, quantity, money, id_bill) values('$id_user', '$id_food', '$image', '$name', '$price', '$quantity', '$money', '$id_bill')";
    pdo_execute($sql);
}

function loadone_bill($id)
{
    $sql = "select * from tbl_bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}

function loadone_cart($idbill)
{
    $sql = "select * from tbl_cart where id_bill=" . $idbill;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_bill()
{
    $sql = "select * from tbl_bill order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}

function billct($listbill)
{
    $total = 0;
    $i = 0;
    foreach ($listbill as $cart) {
        if (isset($cart['image'])) {
            $hinhpath = "";
            $hinh = $hinhpath . $cart[2];
        } else {
            $hinh = "no photo";
        }

        // $money = $cart['quantity'] * $cart['price'];
        $total += $cart['money'];
    }
    echo '
        <div class="row mb-4 d-flex justify-content-between align-items-center">
            <div class="col-md-2 col-lg-1 col-xl-2">
                <img src=' . $hinh . ' width="100" height="100" alt="">
            </div>
            <div class="col-md-3 col-lg-1 col-xl-3">
                <h6 class="text-muted">' . $cart['name'] . '</h6>
            </div>
            <div class="d-flex justify-content-center align-items-center col-md-3 col-lg-3 col-xl-3">
                <button onclick="minus()" name="minus" class="border border-0"><i class="fa-solid fa-minus"></i></button>
                <input type="text" class="text-muted text-center border-0" style="width:25%" id="amount" name="amount" value=' . $cart['quantity'] . '>

                <button onclick="plus()" name="plus" class="border border-0"><i class="fa-solid fa-plus"></i></button>
            </div>
            <div class="col-md-3 col-lg-1 col-xl-2 offset-lg-1">
                <h6 class="mb-0">' . $cart['money'] . '</h6>
            </div>
        </div>
        <div class="row">
            <p class="col fw-bold">Tổng đơn hàng: </p>
            <p class="col fw-bold" style="padding-left: 26em">' . $total . '</p>
        </div>
    ';
    $i += 1;
}
