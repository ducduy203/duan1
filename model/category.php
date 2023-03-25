<?php

function insert_category($categoryname)
{
    $sql = "insert into tbl_category(categoryname) values('$categoryname')";
    pdo_execute($sql);
}

function delete_category($id){
    $sql="delete from tbl_category where id=".$id;
    pdo_execute($sql);
}
function loadall_category(){
    $sql="select * from tbl_category order by id desc";
    $listcategory=pdo_query($sql);
    return $listcategory;
}
function loadone_category($id){
    $sql="select * from tbl_category where id=".$id;
    $category=pdo_query_one($sql);
    return $category;
}
function update_category($id,$categoryname){
    $sql="update tbl_category set name='".$categoryname."' where id=".$id;
    pdo_execute($sql);
}
?>
