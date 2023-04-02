<?php
if (is_array($food)) {
    extract($food);
}
?>


<div class="row">
    <div class="row frmtitle">
        <h1>Update Food</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatefood" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Mã Sản Phẩm <br>
                <input type="text" name="id" disabled>
            </div>
            <div class="row mb10">
                Tên Sản Phẩm <br>
                <input type="text" name="name" value="<?php if (isset($name) && ($name != "")) echo $name; ?>">
            </div>
            <div class="row mb10">
                Mô Tả <br>
                <textarea name="description" id="" cols="30" row="10"><?php if (isset($description) && ($description != "")) echo $description; ?>"</textarea>
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="text" name="price" value="<?php if (isset($price) && ($price != "")) echo $price; ?>">
            </div>
            <div class="row mb10">
                Image <br>
                <input type="file" name="hinh" id="">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" id="" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                <input type="submit" name="update" value="Cập Nhập">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=listfood"><input type="button" value="Danh Sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>