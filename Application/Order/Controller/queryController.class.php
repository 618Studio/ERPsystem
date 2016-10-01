<?php
namespace Order\Controller;
use Think\Controller;
use Order\Common;
class QueryController extends Controller {
    public function index(){
        $this->display();
    }

    public function order(){
        $param_array['draw'] = I("get.draw");
        $param_array['start'] = I("get.start");
        $param_array['length'] = I("get.length");
        $param_array['search'] = I("get.search");
        $objetc = new Common\OrderDAOImpl();

        if($param_array['search']['value']=="")
            $this->ajaxReturn($objetc->getOrder($param_array));
        else
            $this->ajaxReturn($objetc->queryOrder($param_array));
    }
}