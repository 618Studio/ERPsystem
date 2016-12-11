<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/10/16
 * Time: 20:07
 */
namespace Warehouse\Controller;
use Think\Controller;
use Warehouse\Common;
class InController extends Controller{
    public function index(){
        //权限输出
        $this->assign("privilege", session("privilege"));
        $this->display();
    }
}