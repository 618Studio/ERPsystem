<?php
/**
 * Created by PhpStorm.
 * User: Feller
 * Date: 2016/10/11
 * Time: 12:03
 */
namespace Warehouse\Controller;
use Think\Controller;
use Warehouse\Common;

class AddController extends Controller{
    public function index()
    {
        //权限输出
        $this->assign("privilege", session("privilege"));
        $this->display();
    }
}