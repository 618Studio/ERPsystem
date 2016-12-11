<?php
/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 2016/11/29
 * Time: 下午7:34
 */

namespace Admin\Model;

use Think\Model;

class UserInfoModel extends Model
{
    protected $_map = array(
        'uId'=>'user_id',
        'uName'=>'user_name',
        'gId'=>'user_group',
    );
}
