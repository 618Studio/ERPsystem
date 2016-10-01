<?php
namespace Order\Controller;
use Think\Controller;
use Order\Common;
class addController extends Controller {
    public function index(){
        $this->display();
    }

    public function order(){
        $param_array['oid'] = I("post.oid");
        $param_array['oCusName'] = I("post.oCusName");
        $param_array['oCnr'] = I("post.oCnr");
        $param_array['oDelDate'] = I("post.oDelDate");
        $param_array['oOrdDate'] = I("post.oOrdDate");
        $param_array['oContent'] = I("post.oContent");
        $param_array['oState'] = I("post.oState");
        $param_array['oOther'] = I("post.oOther");

        $objetc = new Common\OrderDAOImpl();

        $this->ajaxReturn($objetc->addOrder($param_array));
    }
}