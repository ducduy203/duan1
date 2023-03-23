<?php
function insert_admin($full_name, $username, $password)
{
    $sql = "insert into tbl_admin(full_name, username, password) values('$full_name', '$username', '$password')";
    pdo_execute($sql);
}

function delete_admin($id)
{
    $sql = "delete from tbl_admin where id=.$id";
    pdo_execute($sql);
}
