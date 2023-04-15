<div class="main-content">
    <div class="wrapper">
        <h1>Satistical</h1>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th class="table-danger" scope="col"></th>
                    <th class="table-danger" scope="col">Category ID</th>
                    <th class="table-danger" scope="col">Category Name</th>
                    <th class="table-danger" scope="col">Quantity</th>
                    <th class="table-danger" scope="col">Lowest price</th>
                    <th class="table-danger" scope="col">Highest price</th>
                    <th class="table-danger" scope="col">Average price</th>
                </tr>
            </thead>
            <?php
            foreach ($listsatistical as $satistical) {
                extract($satistical);
                echo '<tr>
                                <td><input type="checkbox" name="" class="chkboxname mt-4"  id="checkbox"></td>
                                <td><div class="mt-4">' . $category_id . '</div></td>
                                <td><div class="mt-4">' . $categoryname . '</div></td>
                                <td><div class="mt-4">' . $countfood . '</div></td>
                                <td><div class="mt-4">' . $minprice . '</div></td>
                                <td><div class="mt-4">' . $maxprice . '</div></td>
                                <td><div class="mt-4">' . $avgprice . '</div></td>
                            </tr>';
            }
            ?>
        </table>
        <div class="input">
            <a href="index.php?act=chart"><input type="button" class="btn btn-danger" value="Chart"></a>
        </div>
    </div>

</div>
</div>