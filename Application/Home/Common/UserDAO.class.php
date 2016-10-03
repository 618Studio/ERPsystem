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
        $this->queryPrivileges($username,$res);

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
            $_SESSION['isLogin']=1;           //登陆状态存入session
            $_SESSION['username']=$res['user_name'];  //把用户名存入session
            $_SESSION['id']=$res['user_id'];   //把用户id存入session
            $_SESSION['group']=$res['user_group']; //把用户所属用户组写入session
            return true;
        }
        else{
            return false;
        }
    }

    private function queryPrivileges($res){
        if($res == false)
            return ;

        //查询逻辑
        $group = D("group");
        $condition['gId'] = $_SESSION['group'];
        $result = $group->where($condition)->find();
        $privilege = array(
            'gId'=> $result['gId'],
            'gName' => $result['gName'],
            'gOrderQ' =>$result['gOrderQ'],
            'gOrderE' =>$result['gOrderE'],
            'gMaterialsQ' =>$result['gMaterialsQ'],
            'gMaterialsE' =>$result['gMaterialsE'],
            'gStockQ' =>$result['gStockQ'],
            'gStockE' =>$result['gStockE'],
            'gWorkScheQ' =>$result['gWorkScheQ'],
            'gWorkScheE' =>$result['gWorkScheE'],
            'gGalQ' =>$result['gGalQ'],
            'gGalE' =>$result['gGalE'],
            'gColorQ' =>$result['gColorQ'],
            'gColorE' =>$result['gColorE'],
            'gCostQ' =>$result['gCostQ'],
            'gCostE' =>$result['gCostE'],
            'gQualityQ' =>$result['gQualityQ'],
            'gQualityE' =>$result['gQualityE'],
            'gUserQ' =>$result['gUserQ'],
            'gUserE' =>$result['gUserE']
        );
        $_SESSION['privilege'] = $privilege;
    }
}