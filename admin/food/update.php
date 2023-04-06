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
        <h1>Update Food</h1>
    </div>
    <div class="">
        <form action="index.php?act=updatefood" method="post" enctype="multipart/form-data">
            <div>
                <label class="form-label">ID</label>
                <input type="text" class="form-control" name="id" disabled>
            </div>
            <div>
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="<?php if (isset($name) && ($name != "")) echo $name; ?>">
            </div>
            <div>
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" id="" cols="10" rows="4"><?php if (isset($description) && ($description != "")) echo $description; ?></textarea>
            </div>
            <div>
                <label class="form-label">Price</label>
                <input type="text" class="form-control" name="price" value="<?php if (isset($price) && ($price != "")) echo $price; ?>">
            </div>
            <div>
                <label class="form-label">Image</label>
                <input type="file" class="form-control" name="hinh">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <input type="hidden" name="id" id="" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
            <input type="submit" class="btn btn-primary" name="update" value="Cập nhật">
            <a href="index.php?act=listfood"><input type="button" class="btn btn-primary" value="Danh Sách"></a>
            <input type="reset" class="btn btn-primary" name="reset" value="Reset">
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>