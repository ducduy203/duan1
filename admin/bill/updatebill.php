<?php
if (is_array($food)) {
    extract($food);
}
?>

<style>
    form {
        width: 600px;
        margin-left: 400px;
        margin-bottom: 50px;
    }

    .center {
        text-align: center;
    }

    body {
        background-color: #f1f2f6;
        ;
    }
</style>
<div class="row">
    <div class="row center  mt-4 mb-4">
        <h1>Update Bill</h1>
    </div>
    <div class="">
        <form action="index.php?act=updatebill" method="post">
            <div>
                <label class="form-label">ID</label>
                <input type="text" class="form-control" name="id" disabled value="<?php if (isset($id) && ($id != "")) echo $id; ?>">
            </div>
            <div>
                <label class="form-label">Client</label>
                <input type="text" class="form-control" name="bill_name" value="<?php if (isset($bill_name) && ($bill_name != "")) echo $bill_name; ?>">
                <input type="text" class="form-control" name="bill_address" value="<?php if (isset($bill_address) && ($bill_address != "")) echo $bill_address; ?>">
                <input type="text" class="form-control" name="bill_tel" value="<?php if (isset($bill_tel) && ($bill_tel != "")) echo $bill_tel; ?>">
                <input type="text" class="form-control" name="bill_email" value="<?php if (isset($bill_email) && ($bill_email != "")) echo $bill_email; ?>">

            </div>
            <div>
                <label class="form-label">Payment Methods</label>
                <input class="form-control" name="bill_pttt" id="" cols="10" rows="4" value="<?php if (isset($bill_pttt) && ($bill_pttt != "")) echo $bill_pttt; ?>">
            </div>
            <div>
                <label class="form-label">Total bill</label>
                <input type="text" class="form-control" name="totalbill" value="<?php if (isset($totalbill) && ($totalbill != "")) echo $totalbill; ?>">
            </div>
            <div>
                <label class="form-label">Order date</label>
                <input type="text" class="form-control" name="orderdate" value="<?php if (isset($orderdate) && ($orderdate != "")) echo $orderdate; ?>">
            </div>
            <div>
                <label class="form-label">Order Status</label>
                <input type="text" class="form-control" name="bill_stt" value="<?php if (isset($bill_stt) && ($bill_stt != "")) echo $bill_stt; ?>">
                <!-- <select class="form-select" name="bill_stt" id="" value="<?php if (isset($bill_stt) && ($bill_stt != "")) echo $bill_stt; ?>">
                    <option name="bill_stt">Đơn hàng mới</option>
                    <option value="">Đang xử lý</option>
                    <option value="">Đang giao hàng</option>
                    <option value="">Giao thành công</option>
                </select> -->
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <input type="hidden" name="id" id="" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
            <input type="submit" class="btn btn-primary" name="update" value="Update">
            <a href="index.php?act=listbill"><input type="button" class="btn btn-primary" value="List"></a>
            <input type="reset" class="btn btn-primary" name="reset" value="Reset">
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>