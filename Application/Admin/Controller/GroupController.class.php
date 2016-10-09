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
        //权限输出
        $this->assign("privilege",session("privilege"));
        
        $object = new Common\GroupDAOImpl();

        $return_data = $object->getId_Name();

        $this->assign("group",$return_data);

        $this->display();
    }

    public function getPrivilege(){
        $id = I("post.id");

        $object = new Common\GroupDAOImpl();

        $return_data = $object->getprivilege($id);

        $this->ajaxReturn($return_data);
    }

    //返回所编辑权限
    public function edit(){
        $object = new Common\GroupDAOImpl();

        $returnData = $object->edit();

        $this->ajaxReturn($returnData);

    }

    //用于增加群组的接口
    public function add(){
        $id = I("post.id");
        $object = new Common\GroupDAOImpl();

        $this->ajaxReturn($object->add());
    }

    //用于删除数组的接口
    public function delete(){
        $id = I("post.gId");
        $object = new Common\GroupDAOImpl();

        $return_data = $object->delete($id);

        $this->ajaxReturn($return_data);
    }
}