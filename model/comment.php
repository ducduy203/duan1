<?php
require_once "pdo.php";
function insert_comment($content, $id_food, $id_user, $date)
{
    $sql = "INSERT INTO `tbl_comment` (`content`, `id_user`, `id_food`, `date`) VALUES ('$content', '$id_user', '$id_food', '$date')";
    pdo_execute($sql);
}

function loadall_comment()
{
    $sql = " select * from tbl_comment order by id desc";
    $listcomment = pdo_query($sql);
    return $listcomment;
}
function load_comment()
{
    $sql = " select * from tbl_comment";
    $listcomment = pdo_query($sql);
    return $listcomment;
}
function delete_comment($id)
{
    $sql = "delete from tbl_comment where id=" . $id;
    pdo_execute($sql);
}
function loadOneFood_comment($id_food)
{
    $sql = "select * from tbl_comment where id_food ='$id_food' order by id desc";
    $listcomment = pdo_query($sql);
    return $listcomment;
}
