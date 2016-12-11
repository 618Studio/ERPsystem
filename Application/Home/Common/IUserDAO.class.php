<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/9/30
 * Time: 19:26
 */
namespace Home\Common;
interface IUserDAO{
    //登录
    public function login($username, $passwd);
}