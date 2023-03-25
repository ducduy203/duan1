<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1>

        <div class="row frmcontent">
                <form action="index.php?act=addcategory" method="POST">
                    <div class="row mb10">
                        Category Code <br>
                        <input type="text" name="categorycode" disabled>
                    </div>
                    <div class="row mb10">
                        Category Name <br>
                        <input type="text" name="categoryname">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="addnew" value="Add New">
                        <input type="reset" value="Reset">
                        <a href="index.php?act=listcategory"><input type="button" value="Category List"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
                </form>
            </div>

    </div>
</div>

<!-- <?php include 'partials/footer.php' ?> -->

