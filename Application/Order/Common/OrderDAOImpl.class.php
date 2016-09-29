<?php
namespace Order\Common;
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/9/29
 * Time: 13:10
 */
class OrderDAOImpl implements IOrderDAO{
    //查询订单
    public function queryOrder(){
        $model = D("Order");
        $return_data = $model->select();
        return $return_data;
    }

    //增加订单
    public function addOrder(){

    }

    //分页得到订单
    public function getOrder($param_array){
        $model = D("Order");
        $return_data['draw'] = $param_array["draw"];
        $return_data['recordsTotal'] = $model->count();

        $data = $model->select();
        foreach ($data as $key=>$value){
            $return_data['data'][$key] = $model->parseFieldsMap($data[$key],1);
        }

        return $return_data;
    }
}