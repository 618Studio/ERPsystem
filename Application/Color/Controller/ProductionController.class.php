<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/10/17
 * Time: 23:06
 */
namespace Color\Controller;
use Think\Controller;
class ProductionController extends Controller {
    public function  index(){
        $this->display();
    }

    public function preprocess(){
        $this->display();
    }
}