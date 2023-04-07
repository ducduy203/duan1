<div class="main-content">
    <div class="wrapper">
        <h1>Manage User</h1>
        <table class="table">
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
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $id . '</td>
                        <td>' . $email . '</td>
                        <td>' . $username . '</td>
                        <td>' . $address . '</td>
                        <td>' . $tel . '</td>
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