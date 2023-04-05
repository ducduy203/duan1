<style>
    h1{
	font-weight: normal;
	font-size: 4em;
	margin: 0 auto;
	margin-top: 30px;
	width: 500px;
	color: #F90;
	text-align: center;
    padding-bottom: 20px;
    }
    .input{
        margin-left: 220px;
        width: 400px;
        display: flex;
        gap: 10px;
        justify-content: space-between;
        align-items:center;
    }
	
</style>

<div class="main-content">
            <div class="wrapper">
                <h1>List Category</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="table-danger" scope="col"><input type="checkbox" name="" id="checkboxAll"></th>
                                <th class="table-danger" scope="col">Category Code</th>
                                <th class="table-danger" scope="col">Category Name</th>
                                <th class="table-danger" scope="col">Category Image</th>
                                <th class="table-danger" scope="col"></th>
                            </tr>
                        </thead>
                        <?php
                            foreach ($listcategory as $category) {
                                extract($category);
                                $updatecategory="index.php?act=updatecategory&id=".$id;
                                $deletecategory="index.php?act=deletecategory&id=".$id;
                                $hinhpath = "/DUAN1/admin/" . $image;
                                if ($image) {
                                    $hinh = "<img src='" . $hinhpath . "' height='80'>";
                                } else {
                                    $hinh = "no photo";
                                }
                                echo '<tr>
                                <td><input type="checkbox" name="" class="chkboxname" id="checkbox'.$id.'"></td>
                                <td>'.$id.'</td>
                                <td>'.$categoryname.'</td>
                                <td>'.$hinh.'</td>
                                <td><a href="'.$updatecategory.'"><input class="btn btn-danger" type="button" value="Category Update"></a> <a href="'.$deletecategory.'"><input class="btn btn-danger" type="button" value="Delete"></a></td>
                            </tr>';
                            }
                        ?>
                    </table>
                </div>
                <div class="input">
                    <input type="button" class="btn btn-danger" value="Select All">
                    <input type="button" class="btn btn-danger" value="Deselect All">
                    <input type="button" class="btn btn-danger" value="Delete Selected">
                    <a href="index.php?act=addcategory"><input type="button" class="btn btn-danger" value="Add More"></a>
                </div>
                <!-- <script type="text/javascript">
                    $(document).ready(function(){
                        $("#checkboxAll").click(funtion(){
                            $(".chkboxname").prop('checked',$(this).prod('checked'));
                        });
                    });
                </script> -->
            </div>
        </div>

