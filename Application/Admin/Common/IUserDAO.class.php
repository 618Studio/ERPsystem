<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/10/11
 * Time: 7:29
 */
namespace Admin\Common;
interface IUserDAO{
    //获取用户
    function getUser($param_array);

    //增加用户
    function addUser();

    //删除用户
    function deleteUser($id);

    //修改用户
    function updateUser();
}
