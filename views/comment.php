<?php
session_start();
include '../model/PDO.php';
include '../model/comment.php';
$id_food = $_REQUEST['id_food'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .btnsend {
            background-color: #0D6EFD;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 10px;
        }

        .btnsend:hover {
            background-color: #0a53be;
        }

        .formcmt {
            padding: 7px 0 0 10px;
            border-radius: 10px;
            border: 1px solid #dee2e6;
        }
    </style>
</head>

<body>
    <div style="margin-top: 20px">
        <form action="<?= $_SERVER['PHP_SELF']; ?>" class="row g-2" method="post">
            <div>
                <input type="hidden" name="id_food" value="<?= $id_food ?>">
                <input type="hidden" name="id_user" value="<?= $id_user ?>">
            </div>
            <div class="col-auto" style="margin-bottom: 20px">
                <textarea name="content" class="formcmt" id="" cols="40" rows="5" placeholder="Write a comment"></textarea>
            </div>
            <div class="col-auto">
                <input type="submit" class="btnsend" name="send" value="Send">
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['send']) && ($_POST['send'])) {
        $content = $_POST['content'];
        $id_food = $_POST['id_food'];
        $id_user = $_SESSION['user']['id'];
        $date = date('Y/m/d');
        insert_comment($content, $id_food, $id_user, $date);
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    ?>
</body>

</html>