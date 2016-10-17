<?php
namespace Home\Controller;
use Think\Controller;
use Home\Common;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function login(){
        $userId = I("post.userId");
        $passwd = I("post.passwd");

        //进行登录过程
        $object = new Common\UserDAOImpl();
        $return_data = array();
        $return_data["login"] = $object->login($userId,$passwd);

        $this->ajaxReturn($return_data);
    }
}