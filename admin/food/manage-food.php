<div class="main-content">
    <div class="wrapper">
        <h1>Manage Food</h1>
        <a class="btn btn-primary mb-4" href="index.php?act=addfood">Add Food</a>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th class="table-danger" scope="col"></th>
                    <th class="table-danger" scope="col">ID</th>
                    <th class="table-danger" scope="col">Name</th>
                    <th class="table-danger" scope="col">Description</th>
                    <th class="table-danger" scope="col">Price</th>
                    <th class="table-danger" scope="col">Image</th>
                    <th class="table-danger" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listfood as $food) {
                    extract($food);
                    $updatefood = "index.php?act=updatef&id=" . $id;
                    $deletefood = "index.php?act=deletefood&id=" . $id;
                    $hinhpath = "/DUAN1/admin/" . $image;
                    if ($image) {
                        $hinh = "<img src='" . $hinhpath . "' height='80'; width='80'>";
                    } else {
                        $hinh = "no photo";
                    }
                    echo '<tr>
                        <td><input type="checkbox" name="" id="" class="mt-4"></td>
                        <td><div class="mt-4">' . $id . '</div></td>
                        <td><div class="mt-4">' . $name . '</div></td>
                        <td><div class="mt-4">' . $description . '</div></td>
                        <td><div class="mt-4">' . $price . '</div></td>
                        <td>' . $hinh . '</td>
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
        <div class="input">
            <a href="index.php?act=addfood"><input type="button" class="btn btn-danger" value="Add More"></a>
        </div>
    </div>
</div>