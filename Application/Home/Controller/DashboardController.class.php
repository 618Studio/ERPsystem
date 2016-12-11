<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/10/20
 * Time: 22:09
 */
namespace Home\Controller;
use Think\Controller;
use Home\Common;
class DashboardController extends Controller
{
    public function index()
    {
        $this->display();
    }
}