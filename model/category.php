<?php

function insert_category($categoryname, $hinh)
{
    if ($hinh == false) {
        $sql = "insert into tbl_category (categoryname) values ('$categoryname')";
        pdo_execute($sql);
    } else {
        $sql = "insert into tbl_category(categoryname, image) values('$categoryname', '$hinh')";
        pdo_execute($sql);
    }
}

function delete_category($id)
{
    $sql = "delete from tbl_category where id=" . $id;
    pdo_execute($sql);
}
function loadall_category()
{
    $sql = "select * from tbl_category order by id desc";
    $listcategory = pdo_query($sql);
    return $listcategory;
}
function loadone_category($id)
{
    $sql = "select * from tbl_category where id=" . $id;
    $category = pdo_query_one($sql);
    return $category;
}
function update_category($id, $categoryname, $save)
{
    if (!$save) {
        $sql = "update tbl_category set categoryname='" . $categoryname . "' where id=" . $id;
        pdo_execute($sql);
    } else {
        $sql = "update tbl_category set categoryname='" . $categoryname . "', image='" . $save . "' WHERE id=" . $id;
        pdo_execute($sql);
    }
}
