<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/10/15
 * Time: 19:11
 */
namespace Warehouse\Controller;
use Think\Controller;
use Warehouse\Common;
class OutController extends Controller{
    public function index(){
        //权限输出
        $this->assign("privilege", session("privilege"));
        $this->display();
    }
}