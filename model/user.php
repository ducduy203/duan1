<?php
function insert_user($full_name, $username, $password)
{
    $sql = "insert into tbl_user(full_name, username, password) values('$full_name', '$username', '$password')";
    pdo_execute($sql);
}

function delete_user($id)
{
    $sql = "delete from tbl_user where id=.$id";
    pdo_execute($sql);
}

function loadall_user()
{
    $sql = " select * from tbl_user";
    $listuser = pdo_query($sql);
    return $listuser;
}
