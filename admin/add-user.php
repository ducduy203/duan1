<?php
// include 'partials/menu.php';
// include 'partials/menu.php';
include '../model/PDO.php';
include '../model/user.php';
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add User</h1>

        <form action="" method="post">
            <table>
                <tr>
                    <td>Full name: </td>
                    <td><input type="text" name="full_name"></td>
                </tr>
                <tr>
                    <td>User name: </td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan=""><input type="submit" name="submit" value="Add admin"></td>
                </tr>
            </table>
        </form>

    </div>
</div>

<?php include 'partials/footer.php' ?>

<?php
if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    insert_user($full_name, $username, $password);
}
?>