<?php
/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 2016/10/3
 * Time: 上午10:49
 */

namespace Home\Model;

use Think\Model;

class GroupModel extends Model
{
    protected $_map = array(
        'gId'=> 'group_id',
        'gName' => 'group_name',
        'gOrder' =>'group_order',
        'gMaterials' =>'group_materials',
        'gWork' =>'group_work',
        'gQualityCost' =>'group_quality_cost',
        'gInfo' =>'group_information'
    );
}