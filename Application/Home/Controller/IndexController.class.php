<?php
namespace Home\Controller;
use Think\Controller;
use Home\Common;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function login(){
        $username = I("post.username");
        $passwd = I("post.passwd");

        //进行登录过程
        $object = new Common\UserDAO();
        $return_data = array();
        $return_data["login"] = $object->login($username,$passwd);

        $this->ajaxReturn($return_data);
    }
}