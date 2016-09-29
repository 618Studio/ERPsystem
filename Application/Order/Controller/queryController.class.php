<?php
namespace Order\Controller;
use Think\Controller;
use Order\Common;
class queryController extends Controller {
    public function index(){
        $this->display();
    }

    public function order(){
        $objetc = new Common\OrderDAOImpl();
        $this->ajaxReturn($objetc->getOrder());
    }
}