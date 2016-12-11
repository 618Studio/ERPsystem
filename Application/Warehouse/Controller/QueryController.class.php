<?php
/**
 * Created by PhpStorm.
 * User: Feller
 * Date: 2016/10/12
 * Time: 20:07
 */
class QueryController extends Controller{
    public function index(){
        //权限输出
        $this->assign("privilege", session("privilege"));
        $this->display();
    }
}