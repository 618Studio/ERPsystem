<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/9/30
 * Time: 19:27
 */
namespace Home\Common;
class UserDAOImpl implements IUserDAO {

    /**
     * @param $userId
     * @param $passwd
     * 登录成功->查询权限->写入session->返回true
     * 登录失败->返回false
     * @return boolean
     */
    public function login($userId, $passwd){
        $res = 0;
        //验证登录次数
        if($this->verifyTimes($userId)) {
            //登录验证
            if($this->verifyAcc($userId, $passwd)){
                $res = 1;
            }

            //查询权限
            $this->queryPrivileges($res);
        }else{
            $res = 2;
        }
        //返回
        return $res;
    }

    private function verifyTimes($userId){
        //验证登录次数
        $user = M("user");
        $condition['user_id'] = $userId;
        if($user->where($condition)->getField('user_Login') != 3){
            $res = true;
        }else{
            $res = false;
        }
        return $res;
    }

    private function verifyAcc($userId, $passwd){
        //登录验证
        $user = M("user");
        $condition['user_id'] = $userId;
        $condition['user_password'] = $passwd;
        $res = $user->where($condition)->find();
        if($res){
            $_SESSION['isLogin'] = 1;           //登陆状态存入session
            $_SESSION['username'] = $res['user_name'];  //把用户名存入session
            $_SESSION['id'] = $res['user_id'];   //把用户id存入session
            $_SESSION['group'] = $res['user_group']; //把用户所属用户组写入session

            $user->user_Login = 0;
            $condition['user_id'] = $userId;
            $user->where($condition)->save();

            return true;
        }
        else{
            $condition_1['user_id'] = $userId;
            $user->where($condition_1)->setInc('user_Login');
            return false;
        }
    }

    private function queryPrivileges($res){
        if($res == 0)
            return ;

        //查询逻辑
        $group = D("group");
        $condition['group_id'] = $_SESSION['group'];
        $result = $group->where($condition)->find();
        $privilege = array(
            'gId'=> $result['group_id'],
            'gName' => $result['group_name'],

            'gOrder' => $result['group_order'],
            'gMaterials' => $result['group_materials'],
            'gWork' => $result['group_work'],
            'gQualityCost' => $result['group_quality_cost'],
            'gInfo' => $result['group_information']
        );
        $_SESSION['privilege'] = $privilege;
    }
}