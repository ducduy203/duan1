<div class="main-content">
    <div class="wrapper">
        <h1>Manage Food</h1>
        <a class="btn btn-primary mb-4" href="add-user.php">Add user</a>

        <table class="table">
            <thead>
                <tr>
                    <th class="table-danger" scope="col"></th>
                    <th class="table-danger" scope="col">Mã Sản Phẩm</th>
                    <th class="table-danger" scope="col">Tên Sản Phẩm</th>
                    <th class="table-danger" scope="col">Mô Tả</th>
                    <th class="table-danger" scope="col">Giá</th>
                    <th class="table-danger" scope="col">Image</th>
                    <th class="table-danger" scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listfood as $food) {
                    extract($food);
                    $updatefood = "index.php?act=updatefood&id=".$id;
                    $xoasp = "index.php?act=xoasp&id=".$id;
                    echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$description.'</td>
                        <td>'.$price.'</td>
                        <td>'.$image.'</td>
                        <td>
                            <a href="' . $updatefood . '">
                                <input class="btn btn-danger" type="button" value="Update">
                            </a>
                            <a href="' . $xoasp . '">
                            <input class="btn btn-danger" onclick="return confirm(`Are you sure?`);" type="button" value="Delete">
                        </a>
                        </td>
                    </tr>';
                }
                ?>
            </tbody>
        </table>

    </div>
</div>