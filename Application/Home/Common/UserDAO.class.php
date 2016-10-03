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
        $condition['user_name'] = $username;
        $condition['user_password'] = $passwd;
        $res = $user->where($condition)->find();
        if($res){
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