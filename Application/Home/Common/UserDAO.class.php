<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/9/30
 * Time: 19:27
 */
namespace Home\Common;
class UserDAO{

    /**
     * @param $username
     * @param $passwd
     * 登录成功->查询权限->写入session->返回true
     * 登录失败->返回false
     * @return boolean
     */
    public function login($username, $passwd){

        //登录验证
        $verfi = $this->verfiy($username, $passwd);

        //查询权限
        $this->queryPrivileges($verfi);

        //返回
        return $verfi;
    }

    private function verfiy($username, $passwd){
        //登录验证
        if($username=="admin" && $passwd=="123456"){
            return true;
        }
        else{
            return false;
        }
    }

    private function queryPrivileges($verfi){
        if($verfi == false)
            return ;

        //查询逻辑
        //...
    }
}