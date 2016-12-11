<?php
namespace Order\Controller;
use Think\Controller;
use Order\Common;
class QueryController extends Controller {
    public function index(){
        //权限输出
        $this->assign("privilege",session("privilege"));
        $this->display();
    }

    public function order(){
        $param_array['draw'] = I("get.draw");
        $param_array['start'] = I("get.start");
        $param_array['length'] = I("get.length");
        $param_array['search'] = I("get.search");
        $object = new Common\OrderDAOImpl();

        if($param_array['search']['value']=="")
            $this->ajaxReturn($object->getOrder($param_array));
        else
            $this->ajaxReturn($object->queryOrder($param_array));
    }
}