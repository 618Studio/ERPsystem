<?php
/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 2016/10/3
 * Time: 上午10:49
 */

namespace Admin\Model;

use Think\Model;

class GroupModel extends Model
{
    protected $_map = array(
        'gId'=> 'group_id',
        'gName' => 'group_name',
        'gOrderQ' =>'group_order_q',
        'gOrderE' =>'group_order_e',
        'gMaterialsQ' =>'group_materials_q',
        'gMaterialsE' =>'group_materials_e',
        'gStockQ' =>'group_stock_q',
        'gStockE' =>'group_stock_e',
        'gWorkScheQ' =>'group_work_schedule_q',
        'gWorkScheE' =>'group_work_schedule_e',
        'gGalQ' =>'group_galvalume_q',
        'gGalE' =>'group_galvalume_e',
        'gColorQ' =>'group_color_coating_q',
        'gColorE' =>'group_color_coating_e',
        'gCostQ' =>'group_cost_q',
        'gCostE' =>'group_cost_e',
        'gQualityQ' =>'group_quality_q',
        'gQualityE' =>'gQualityE',
        'gUserQ' =>'group_user_q',
        'gUserE' =>'group_user_e'
    );
}