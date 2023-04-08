<div class="main-content">
    <div class="wrapper">
        <h1>List Category</h1>
        <a class="btn btn-primary mb-4" href="index.php?act=addcategory">Add Category</a>

        <table class="table">
            <thead>
                <tr>
                    <th class="table-danger" scope="col"></th>
                    <th class="table-danger" scope="col">Category Code</th>
                    <th class="table-danger" scope="col">Category Name</th>
                    <th class="table-danger" scope="col">Category Image</th>
                    <th class="table-danger" scope="col"></th>
                </tr>
            </thead>
            <?php
            foreach ($listcategory as $category) {
                extract($category);
                $updatecategory = "index.php?act=updatecategory&id=" . $id;
                $deletecategory = "index.php?act=deletecategory&id=" . $id;
                $hinhpath = "/DUAN1/admin/" . $image;
                if ($image) {
                    $hinh = "<img src='" . $hinhpath . "' height='80'>";
                } else {
                    $hinh = "no photo";
                }
                echo '<tr>
                                <td><input type="checkbox" name="" class="chkboxname mt-4"  id="checkbox' . $id . '"></td>
                                <td><div class="mt-4">' . $id . '</div></td>
                                <td><div class="mt-4">' . $categoryname . '</div></td>
                                <td>' . $hinh . '</td>
                                
                                <td>
                                <div class="mt-3">
                                <a href="' . $updatecategory . '"><input class="btn btn-danger" type="button" value="Category Update"></a>
                                <a href="' . $deletecategory . '"><input class="btn btn-danger" onclick="return confirm(`Are you sure?`);" type="button" value="Delete">
                                </a>
                                </div>
                                </td>
                            </tr>';
            }
            ?>
        </table>
        <div class="input">
            <a href="index.php?act=addcategory"><input type="button" class="btn btn-danger" value="Add More"></a>
        </div>
    </div>

</div>
</div>