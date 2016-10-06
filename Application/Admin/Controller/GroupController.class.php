<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/10/3
 * Time: 20:34
 */
namespace Admin\Controller;
use Think\Controller;
use Admin\Common;

class GroupController extends Controller{

    //初始化界面
    public function index(){
        $object = new Common\GroupDAOImpl();

        $return_data = $object->getId_Name();

        $this->assign("group",$return_data);

        $this->display();
    }

    public function getRight(){
        $id = I("post.id");

        $object = new Common\GroupDAOImpl();

        $return_data = array();
        $return_data["privilege"] = $object->getprivilege($id);

        $this->ajaxReturn($return_data);
    }

    //返回所编辑权限
    public function edit(){
        $object = new Common\GroupDAOImpl();

        $object->edit();

    }

    //用于增加群组的接口
    public function add(){
        $id = I("post.id");
        $object = new Common\GroupDAOImpl();

        $return_data = $object->add();

        $this->ajaxReturn($return_data);
    }

    //用于更新群组的接口
    public function update(){
        $object = new Common\GroupDAOImpl();


    }

    //用于删除数组的接口
    public function delete(){

    }

    //通过组id获取组权限
    public function privilege(){

    }
}