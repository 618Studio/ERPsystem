<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/10/10
 * Time: 10:18
 */
namespace Admin\Controller;
use Think\Controller;
use Admin\Common;

class UserController extends Controller{
    public function index(){
        $this->display();
    }

    public function getUser(){
        $param_array['draw'] = I("get.draw");
        $param_array['start'] = I("get.start");
        $param_array['length'] = I("get.length");
        $param_array['search'] = I("get.search");
        $object = new Common\UserDAOImpl();

        $this->ajaxReturn($object->getUser());
    }

    public function update(){
        $object = new Common\UserDAOImpl();
        return $object->updateUser();
    }

    public function delete(){
        $id = I("post.uId");
        $object = new Common\UserDAOImpl();
        return $object->deleteUser($id);
    }

    public function add(){
        $object = new Common\UserDAOImpl();
        return $object->addUser();
    }

}
