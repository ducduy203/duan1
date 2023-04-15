<div class="main-content">
    <div class="wrapper">
        <h1>List Order</h1>
        <?php
        $id_user = 0;
        if (isset($_POST['listok'])) {
            $keyword = $_POST['kyw'];
            $id_user = $_POST['id_user'];
        }
        ?>
        <form action="index.php?act=listbill" method="post">
            <input type="text" name="kyw" value="<?php echo $kyw ?>">
            <input type="hidden" name="category_id" value="<?php echo $category_id ?>">

            <input type="submit" name="listtok" id="" value="Search">
        </form>

        <table class="table mt-4" style="margin-bottom: 200px;">
            <thead>
                <tr>
                    <th class="table-danger" scope="col"></th>
                    <th class="table-danger" scope="col">Code Orders</th>
                    <th class="table-danger" scope="col">Client</th>
                    <th class="table-danger" scope="col">Quantity</th>
                    <th class="table-danger" scope="col">Money</th>
                    <th class="table-danger" scope="col">Order Date</th>
                    <th class="table-danger" scope="col">Order Status</th>
                    <th class="table-danger" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listbill as $bill) {
                    extract($bill);
                    $updatebill = "index.php?act=updateb&id=" . $id;
                    $deletebill = "index.php?act=deletebill&id=" . $id;
                    $client = $bill["bill_name"] . '
                    <br>' . $bill["bill_email"] . '
                    <br>' . $bill["bill_tel"] . '
                    <br>' . $bill["bill_address"];
                    $countfood = loadall_cart_count($bill["id"]);
                    $stt_order = get_stt_order($bill["bill_stt"]);
                    echo '<tr>
                        <td><input type="checkbox" name="" id="" class="mt-4"></td>
                        <td><div class="mt-2">' . $bill['id'] . '</div></td>
                        <td><div class="mt-2">' . $client . '</div></td>
                        <td><div class="mt-2">' . $countfood . '</div></td>
                        <td><div class="mt-2">' . $bill["totalbill"] . '</div></td>
                        <td><div class="mt-2">' . $bill["orderdate"] . '</div></td>
                        <td><div class="mt-2">' . $stt_order . '</div></td>
                        <td>
                            <div class="mt-4" style="display: grid; gap: 4px; grid-template-columns: 1fr 1fr">
                            <a href="' . $updatebill . '">
                                <input class="btn btn-danger" type="button" value="Update">
                            </a>
                            <a href="' . $deletebill . '">
                                <input class="btn btn-danger" onclick="return confirm(`Are you sure?`);" type="button" value="Cancel">
                            </a>
                            </div>
                        </td>
                    </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>