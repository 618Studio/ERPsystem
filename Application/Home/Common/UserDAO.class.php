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
        $res = $this->verfiy($username, $passwd);

        //查询权限
        $this->queryPrivileges($username);

        //返回
        return $res;
    }

    private function verfiy($username, $passwd){
        //登录验证
        $user = M("user");
        $password = $user->query('select user_password from erp_user where user_name = '.$username);
        if($passwd==$password){
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