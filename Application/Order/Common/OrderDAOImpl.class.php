<?php
namespace Order\Common;
use Think\Exception;

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/9/29
 * Time: 13:10
 */
class OrderDAOImpl implements IOrderDAO{
    //查询订单
    public function queryOrder($param_array){
        $model = D("Order");

        $condition[0] = "order_id like '%".$param_array['search']['value']."' or ";
        $condition[1] = "order_customer_name like '%".$param_array['search']['value']."' or ";
        $condition[2] = "order_contract_nr like '%".$param_array['search']['value']."' or ";
        $condition[3] = "order_delivery_date like '%".$param_array['search']['value']."' or ";
        $condition[4] = "order_order_date like '%".$param_array['search']['value']."' or ";
        $condition[5] = "order_content like '%".$param_array['search']['value']."%"."' or ";
        $condition[6] = "order_other like '%".$param_array['search']['value']."%"."' or ";
        $condition[7] = "order_state like '%".$param_array['search']['value']."%'";

        $where = "";
        foreach($condition as $value){
            $where = $where.$value;
        }

        $return_data['draw'] = $param_array["draw"];
        $return_data['recordsTotal'] = $model->where($where)->count();
        $return_data['recordsFiltered'] = $model->where($where)->count();

        if($return_data['recordsFiltered']!=0){
            $data = $model->where($where)->select();
            foreach ($data as $key=>$value){
                $return_data['data'][$key] = $model->parseFieldsMap($data[$key],1);
                $return_data['data'][$key]['look'] = "<img src='".__ROOT__."/Public/assets/advanced-datatable/examples/examples_support/details_open.png'>";
            }
        }
        else{
            $return_data['data']=array();
        }

        return $return_data;
    }

    //增加订单
    public function addOrder(){
        try{
            $model = D("order");
            $model->create();
            $return_data['result'] = $model->add();
        }catch(Exception $e){
            $return_data['result'] = 0;
        }
        return $return_data;
    }

    //分页得到订单
    public function getOrder($param_array){
        $model = D("Order");
        $return_data['draw'] = $param_array["draw"];
        $return_data['recordsTotal'] = $model->count();
        $return_data['recordsFiltered'] = $model->count();
        $data = $model->select();
        foreach ($data as $key=>$value){
            $return_data['data'][$key] = $model->parseFieldsMap($data[$key],1);
            $return_data['data'][$key]['look'] = "<img src='".__ROOT__."/Public/assets/advanced-datatable/examples/examples_support/details_open.png'>";
        }

        return $return_data;
    }
}