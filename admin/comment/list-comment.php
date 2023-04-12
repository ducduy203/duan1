<div class="main-content">
    <div class="wrapper">
        <h1>Manage Food</h1>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th class="table-danger" scope="col"></th>
                    <th class="table-danger" scope="col">ID</th>
                    <th class="table-danger" scope="col">Content</th>
                    <th class="table-danger" scope="col">ID Food</th>
                    <th class="table-danger" scope="col">ID User</th>
                    <th class="table-danger" scope="col">Date</th>
                    <th class="table-danger" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listcomment as $comment) {
                    extract($comment);
                    $deletefood = "index.php?act=deletecomment&id=" . $id;
                    echo '<tr>
                        <td><input type="checkbox" name="" id="" class="mt-4"></td>
                        <td><div class="mt-4">' . $id . '</div></td>
                        <td><div class="mt-4">' . $content . '</div></td>
                        <td><div class="mt-4">' . $id_food . '</div></td>
                        <td><div class="mt-4">' . $id_user . '</div></td>
                        <td><div class="mt-4">' . $date . '</div></td>
                        <td>
                            <div class="mt-3" style="display: grid; gap: 4px; grid-template-columns: 1fr 1fr">
                            <a href="' . $deletefood . '">
                                <input class="btn btn-danger" onclick="return confirm(`Are you sure?`);" type="button" value="Delete">
                            </a>
                            </div>
                        </td>
                    </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>