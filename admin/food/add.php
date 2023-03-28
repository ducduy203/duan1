<style>
    form {
        width: 500px;
        margin: 300px;
        margin-bottom: 50px;
    }
</style>

<div class="row">
    <div class="row frmtitle">
        <h1>Add Food</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addfood" method="post" enctype="multipart/form-data">
            <div>
                Category <br>
                <select name="category_id">
                    <?php
                    foreach ($listcategory as $category) {
                        extract($category);
                        echo '<option value="' . $id . '">' . $categoryname . '</option>';
                    }

                    ?>
                </select>
            </div>
            <div>
                <label class="form-label">ID</label>
                <input type="text" class="form-control" name="id" disabled>
            </div>
            <div>
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div>
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div>
                <label class="form-label">Price</label>
                <input type="text" class="form-control" name="price">
            </div>
            <div>
                <label class="form-label">Image</label>
                <input type="file" class="form-control" name="hinh">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <input type="submit" class="btn btn-primary" name="add" value="Thêm Mới">
            <a href="index.php?act=listfood"><input type="button" class="btn btn-primary" value="Danh Sách"></a>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>

        </form>

    </div>
</div>