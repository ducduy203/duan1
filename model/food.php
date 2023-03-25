<?php
function insert_food($name, $description, $price, $image)
{
    $sql = "insert into tbl_food(name, description, price,image ) values('$name', '$description', '$price', '$image')";
    pdo_execute($sql);
}

function delete_food($id)
{
    $sql = "delete from tbl_food where id=" . $id;
    pdo_execute($sql);
}

function loadall_food()
{
    $sql = " select * from tbl_food";
    $listfood = pdo_query($sql);
    return $listfood;
}

function loadone_food($id)
{
    $sql = " select * from tbl_food where id=".$id;
    $listfood = pdo_query_one($sql);
    return $listfood;
}

function update_food($id,$name, $description, $price, $image)
{
    $sql = " update tbl_food set name='".$name."', description='".$description."', price='".$price."', image='".$image."' where id=".$id;
    pdo_execute($sql);
}
