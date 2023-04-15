<?php

function viewcart()
{
    $total = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        if (isset($cart[2])) {
            $hinhpath = "";
            $hinh = $hinhpath . $cart[2];
        } else {
            $hinh = "no photo";
        }

        $money = $cart[4] * $cart[3];
        $total += $money;
        echo '
      <hr class="my-4">
      <div class="row mb-4 d-flex justify-content-between align-items-center">
        <div class="col-md-2 col-lg-2 col-xl-2">
          <img src=' . $hinh . ' width="100" height="100" alt="">
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3">
          <h6 class="text-muted">' . $cart[1] . '</h6>
        </div>
        <div class="d-flex justify-content-center align-items-center col-md-3 col-lg-3 col-xl-3">
          <input type="text" class="form-control quantity-input" value=' . $cart[4] . '>
          <!-- <button onclick="minus()" name="minus" class="border border-0"><i class="fa-solid fa-minus"></i></button>
          <input type="text" class="text-muted text-center border-0" style="width:25%" id="amount" name="amount" value=' . $cart[4] . '>

          <button onclick="plus()" name="plus" class="border border-0"><i class="fa-solid fa-plus"></i></button> -->
        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
          <h6 class="mb-0">' . $cart[5] . '</h6>
        </div>
        
      </div> ';
    }
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

function insert_bill($id_user, $name, $email, $tel, $address, $pttt, $orderdate, $totalbill)
{
    $sql = "insert into tbl_bill (id_user, bill_name, bill_email, bill_tel, bill_address, bill_pttt, orderdate, totalbill) values('$id_user', '$name', '$email', '$tel', '$address', '$pttt', '$orderdate', '$totalbill')";
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

function update_bill($id, $bill_name, $bill_address, $bill_tel, $bill_email, $bill_pttt, $totalbill, $orderdate, $bill_stt)
{
    $sql = "update tbl_bill set bill_name='" . $bill_name . "', bill_address='" . $bill_address . "', bill_tel='" . $bill_tel . "', bill_email='" . $bill_email . "', bill_pttt='" . $bill_pttt . "', totalbill='" . $totalbill . "', orderdate='" . $orderdate . "', bill_stt='" . $bill_stt . "' where id=" . $id;
    pdo_execute($sql);
}


function loadall_cart($idbill)
{
    $sql = "select * from tbl_cart where id_bill=" . $idbill;
    $cart = pdo_query($sql);
    return $cart;
}
function loadall_cart_count($idbill)
{
    $sql = "select * from tbl_cart where id_bill=" . $idbill;
    $cart = pdo_query($sql);
    return sizeof($cart);
}

function loadall_bill($id_user = 0)
{
    $sql = "select * from tbl_bill where 1";
    if ($id_user > 0) $sql .= " and id_user=" . $id_user;
    // if ($kyw != "") $sql .= " and id like '%" . $kyw . "%'";
    $sql .= " order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}

function delete_bill($id)
{
    $sql = "delete from tbl_bill where id=" . $id;
    pdo_execute($sql);
}

function get_stt_order($n)
{
    switch ($n) {
        case '0':
            $stt = 'Đơn hàng mới';
            break;
        case '1':
            $stt = 'Đang xử lý';
            break;
        case '2':
            $stt = 'Đang giao hàng';
            break;
        case '3':
            $stt = 'Giao thành công';
            break;
        default:
            $stt = 'Đơn hàng mới';
            break;
    }
    return $stt;
}

function billct($listbill)
{
    $total = 0;
    foreach ($listbill as $cart) {
        if (isset($cart['image'])) {
            $hinhpath = "";
            $hinh = $hinhpath . $cart['image'];
        } else {
            $hinh = "no photo";
        }
        $total += $cart['money'];
        echo '
        <div class="row mb-4 d-flex justify-content-between align-items-center">
            <div class="col-md-2 col-lg-1 col-xl-2">
                <img src=' . $hinh . ' width="100" height="100" alt="">
            </div>
            <div class="col-md-3 col-lg-1 col-xl-3">
                <h6 class="text-muted">' . $cart['name'] . '</h6>
            </div>
            <div class="d-flex justify-content-center align-items-center col-md-3 col-lg-3 col-xl-3">
                <p class="text-muted text-center border-0" name="amount">' . $cart['quantity'] . '</p>
            </div>
            <div class="col-md-3 col-lg-1 col-xl-2 offset-lg-1">
                <h6 class="mb-0">' . $cart['money'] . '</h6>
            </div>
        </div>
    ';
    }
}
