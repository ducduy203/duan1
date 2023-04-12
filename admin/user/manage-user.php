<div class="main-content">
    <div class="wrapper">
        <h1>Manage User</h1>
        <table class="table mt-5" style="margin-bottom: 200px;">
            <thead>
                <tr>
                    <th class="table-danger" scope="col"></th>
                    <th class="table-danger" scope="col">ID</th>
                    <th class="table-danger" scope="col">Email</th>
                    <th class="table-danger" scope="col">Username</th>
                    <th class="table-danger" scope="col">Address</th>
                    <th class="table-danger" scope="col">Tel</th>
                    <th class="table-danger" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listuser as $user) {
                    extract($user);
                    $deleteuser = "index.php?act=deleteuser&id=" . $id;
                    echo '<tr>
                        <td><input class="mt-4" type="checkbox" name="" id=""></td>
                        <td><div class="mt-4">' . $id . '</div></td>
                        <td><div class="mt-4">' . $email . '</div></td>
                        <td><div class="mt-4">' . $username . '</div></td>
                        <td><div class="mt-4">' . $address . '</div></td>
                        <td><div class="mt-4">' . $tel . '</div></td>
                        <td>
                            <a href="' . $deleteuser . '">
                                <input class="btn btn-danger" onclick="return confirm(`Are you sure?`);" type="button" value="Delete">
                            </a>
                        </td>
                    </tr>';
                }
                ?>
            </tbody>
        </table>

    </div>
</div>