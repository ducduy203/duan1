<?php

function loadall_satistical()
{
    $sql = "SELECT tbl_category.id as category_id, tbl_category.categoryname as categoryname, count(tbl_food.id) as countfood, min(tbl_food.price) as minprice, max(tbl_food.price) as maxprice, avg(tbl_food.price) as avgprice";
    $sql .= " FROM tbl_food left JOIN tbl_category ON tbl_category.id=tbl_food.category_id";
    $sql .= " GROUP BY tbl_category.id ORDER BY tbl_category.id DESC";
    $listsatistical = pdo_query($sql);
    return $listsatistical;
}
