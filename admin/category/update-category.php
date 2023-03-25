<?php
if (is_array($category)){
    extract($category);
}
?>
<div class="row">
            <div class="row frmtitle">
                <h1>Category Update</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatecategory" method="POST">
                    <div class="row mb10">
                        Category Code <br>
                        <input type="text" name="categorycode" disabled>
                    </div>
                    <div class="row mb10">
                        Category Name <br>
                        <input type="text" name="categoryname" value="<?php if(isset($categoryname)&&($categoryname!="")) echo $categoryname; ?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                        <input type="submit" name="update" value="Update">
                        <input type="reset" value="Reset">
                        <a href="index.php?act=listcategory"><input type="button" value="List"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>