<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/9/29
 * Time: 13:08
 */

namespace Order\Common;


interface IOrderDAO{
    //分页查询订单
    public function queryOrder($param_array);
    //增加订单
    public function addOrder();
    //分页获得订单
    public function getOrder($param_array);
}