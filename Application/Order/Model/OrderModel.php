<?php
/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 2016/9/29
 * Time: 下午1:40
 */

namespace Order\Model;

use Think\Model;

class OrderModel extends Model
{
    protected $_map = array(
        'oid' =>'order_id', // 把表单映射到数据表
        'oCusName' =>'order_customerName',
        'oCnr' =>'order_contractNr',
        'oDelDate' =>'order_deliveryDate',
        'oOrdDate' =>'order_orderDate',
        'oContent' =>'order_content',
        'oState' =>'order_state',
        'oOther' =>'order_other'
    );
}