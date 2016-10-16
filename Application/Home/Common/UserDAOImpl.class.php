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
     * @param $username
     * @param $passwd
     * 登录成功->查询权限->写入session->返回true
     * 登录失败->返回false
     * @return boolean
     */
    public function login($username, $passwd){

        //验证登录次数
        $res1 = $this->verifyTimes($username);
        //登录验证
        $res2 = $this->verifyAcc($username, $passwd);

        //查询权限
        $this->queryPrivileges($res2);

        //返回
        return $res2;
    }

    private function verifyTimes($username){
        //验证登录次数
        $user = M("user");
        $condition['user_name'] = $username;

    }

    private function verifyAcc($username, $passwd){
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

            $user->user_Login = 0;
            $user->where('user_name='.$username)->save();

            return true;
        }
        else{
            $user->user_Login++;
            $user->where('user_name='.$username)->save();
            return false;
        }
    }

    private function queryPrivileges($res){
        if($res == false)
            return ;

        //查询逻辑
        $group = D("group");
        $condition['group_id'] = $_SESSION['group'];
        $result = $group->where($condition)->find();
        $privilege = array(
            'gId'=> $result['group_id'],
            'gName' => $result['group_name'],
            'gOrderQ' =>$result['group_order_q'],
            'gOrderE' =>$result['group_order_e'],
            'gMaterialsQ' =>$result['group_materials_q'],
            'gMaterialsE' =>$result['group_materials_e'],
            'gStockQ' =>$result['group_stock_q'],
            'gStockE' =>$result['group_stock_e'],
            'gWorkScheQ' =>$result['group_work_schedule_q'],
            'gWorkScheE' =>$result['group_work_schedule_e'],
            'gGalQ' =>$result['group_galvalume_q'],
            'gGalE' =>$result['group_galvalume_e'],
            'gColorQ' =>$result['group_color_coating_q'],
            'gColorE' =>$result['group_color_coating_e'],
            'gCostQ' =>$result['group_cost_q'],
            'gCostE' =>$result['group_cost_e'],
            'gQualityQ' =>$result['group_quality_q'],
            'gQualityE' =>$result['group_quality_e'],
            'gUserQ' =>$result['group_user_q'],
            'gUserE' =>$result['group_user_e']
        );
        $_SESSION['privilege'] = $privilege;
    }
}