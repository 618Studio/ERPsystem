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

    public function index(){
        $this->display();
        //需要一个数组 里面是所有的group，包括group所具有的权限
    }

    //用于增加群组的接口
    public function add(){

    }

    //用于更新群组的接口
    public function update(){

    }

    //用于删除数组的接口
    public function delete(){

    }
}