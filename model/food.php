<?php

function insert_food($name, $description, $price, $hinh, $category_id)
{
    if ($hinh == false) {
        $sql = "INSERT INTO `tbl_food` (`name`, `description`, `price`, `category_id`) VALUES ('$name', '$description', '$price', '$category_id')";
        pdo_execute($sql);
    } else {
        $sql = "INSERT INTO `tbl_food` (`name`, `description`, `price`, `image`, `category_id`) VALUES ('$name', '$description', '$price', '$hinh', '$category_id')";
        pdo_execute($sql);
    }
}

function delete_food($id)
{
    $sql = "delete from tbl_food where id=" . $id;
    pdo_execute($sql);
}
function loadall_food($keyword, $category_id)
{
    $sql = " select * from tbl_food where 1";
    if ($keyword != "") {
        $sql .= " and name like '%" . $keyword . "%'";
    }

    if ($category_id > 0) {
        $sql .= " and category_id = '" . $category_id . "'";
    }
    $sql .= " order by id desc";
    $listfood = pdo_query($sql);
    return $listfood;
}
function loadone_food($id)
{
    $sql = "select * from tbl_food where id=" . $id;
    $food = pdo_query_one($sql);
    return $food;
}
function load_food_cungloai($id, $category_id)
{
    $sql = " select * from tbl_food where category_id=" . $category_id . " AND id <>" . $id;
    $listfood = pdo_query($sql);
    return $listfood;
}
function update_food($id, $name, $description, $price, $save)
{
    if (!$save) {
        $sql = "UPDATE tbl_food SET name='" . $name . "', description='" . $description . "', price='" . $price . "' WHERE id=" . $id;
        pdo_execute($sql);
    } else {
        $sql = "UPDATE tbl_food SET name='" . $name . "', description='" . $description . "', price='" . $price . "', image='" . $save . "' WHERE id=" . $id;
        pdo_execute($sql);
    }
}
