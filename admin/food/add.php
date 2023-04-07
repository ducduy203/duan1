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
    <div class="row center mt-4 mb-4">
        <h1>Add Food</h1>
    </div>
    <div class="">
        <form action="index.php?act=addfood" method="post" enctype="multipart/form-data">
            <div>
                Category List<br>
                <select class="form-select" name="category_id">
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
                <textarea class="form-control" name="description" id="" cols="10" rows="4"></textarea>
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
            <input type="submit" class="btn btn-primary" name="add" value="Add New">
            <a href="index.php?act=listfood"><input type="button" class="btn btn-primary" value="List"></a>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>

        </form>

    </div>
</div>