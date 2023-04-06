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
                                <td><input type="checkbox" name="" class="chkboxname" id="checkbox' . $id . '"></td>
                                <td>' . $id . '</td>
                                <td>' . $categoryname . '</td>
                                <td>' . $hinh . '</td>
                                <td><a href="' . $updatecategory . '"><input class="btn btn-danger" type="button" value="Category Update"></a> <a href="' . $deletecategory . '"><input class="btn btn-danger" type="button" value="Delete"></a></td>
                            </tr>';
            }
            ?>
        </table>
        <div class="input">
            <input type="button" class="btn btn-danger" value="Select All">
            <input type="button" class="btn btn-danger" value="Deselect All">
            <input type="button" class="btn btn-danger" value="Delete Selected">
            <a href="index.php?act=addcategory"><input type="button" class="btn btn-danger" value="Add More"></a>
        </div>
    </div>

</div>
</div>