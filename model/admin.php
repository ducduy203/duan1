<?php
function insert_admin($full_name, $username, $password)
{
    $sql = "insert into tbl_admin(full_name, username, password) values('$full_name', '$username', '$password')";
    pdo_execute($sql);
}
