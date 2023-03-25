<div class="row">
    <div class="row frmtitle">
       <h1>Thêm Mới Sản Phẩm</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Mã Sản Phẩm <br>
                <input type="text" name="masp" disabled>
            </div>
            <div class="row mb10">
                Tên Sản Phẩm <br>
                <input type="text" name="tensp">
            </div>
            <div class="row mb10">
                Mô Tả <br>
                <textarea name="mota" id="" cols="30" row="10"></textarea>
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="text" name="gia">
            </div>
            <div class="row mb10">
                Image <br>
                <input type="file" name="image" id="">
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="Thêm Mới">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh Sách"></a>
            </div>
            <?php 
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
    </div>
</div>