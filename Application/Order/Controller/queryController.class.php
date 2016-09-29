<?php
namespace Order\Controller;
use Think\Controller;
use Order\Common;
class queryController extends Controller {
    public function index(){
        $objetc = new Common\OrderDAOImpl();
        $this->ajaxReturn($objetc->getOrder());
    }
}