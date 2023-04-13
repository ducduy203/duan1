<div class="main-content">
    <div class="wrapper">
        <h1>List Order</h1>

        <form action="index.php?act=listbill" method="post">
            <input type="text" name="kyw">
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
                    $updatefood = "index.php?act=updatef&id=" . $id;
                    $deletefood = "index.php?act=deletefood&id=" . $id;
                    // $hinhpath = "/DUAN1/admin/" . $image;
                    // if ($image) {
                    //     $hinh = "<img src='" . $hinhpath . "' height='80'; width='80'>";
                    // } else {
                    //     $hinh = "no photo";
                    // }
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
                            <a href="' . $updatefood . '">
                                <input class="btn btn-danger" type="button" value="Update">
                            </a>
                            <a href="' . $deletefood . '">
                                <input class="btn btn-danger" onclick="return confirm(`Are you sure?`);" type="button" value="Delete">
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