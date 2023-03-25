<div class="row">
            <div class="row frmtitle">
                <h1>Category List</h1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>Category Code</th>
                            <th>Category Name</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach ($listcategory as $category) {
                                extract($category);
                                $updatecategory="index.php?act=updatecategory&id=".$id;
                                $deletecategory="index.php?act=deletecategory&id=".$id;
                                echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$categoryname.'</td>
                                <td><a href="'.$updatecategory.'"><input type="button" value="Category Update"></a> <a href="'.$deletecategory.'"><input type="button" value="Delete"></a></td>
                            </tr>';
                            }
                        ?>
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="Select All">
                    <input type="button" value="Deselect All">
                    <input type="button" value="Delete Selected">
                    <a href="index.php?act=addcategory"><input type="button" value="Add More"></a>
                </div>
            </div>
        </div>