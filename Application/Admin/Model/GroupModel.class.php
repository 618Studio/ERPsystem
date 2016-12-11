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
        'gOrder' =>'group_orderAuthority',
        'gMaterials' =>'group_materialsAuthority',
        'gWork' =>'group_workAuthority',
        'gQualityCost' =>'group_quality_costAuthority',
        'gInfo' =>'group_informationAuthority'
    );
}