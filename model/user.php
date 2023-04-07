<?php
function insert_user($email, $username, $password)
{
    $sql = "insert into tbl_user(email, username, password) values('$email', '$username', '$password')";
    pdo_execute($sql);
}

function checkuser($username, $password)
{
    $sql = " select * from tbl_user where username='" . $username . "' and password='" . $password . "'";
    $user = pdo_query_one($sql);
    return $user;
}

function checkemail($email)
{
    $sql = " select * from tbl_user where email='" . $email . "'";
    $email = pdo_query_one($sql);
    return $email;
}

function delete_user($id)
{
    $sql = "delete from tbl_user where id=" . $id;
    pdo_execute($sql);
}

function loadall_user()
{
    $sql = " select * from tbl_user";
    $listuser = pdo_query($sql);
    return $listuser;
}

function update_user($id, $email, $username, $password, $address, $tel)
{
    $sql = "update tbl_user set email='" . $email . "', username='" . $username . "', password='" . $password . "', address='" . $address . "', tel='" . $tel . "' where id=" . $id;
    pdo_execute($sql);
}
