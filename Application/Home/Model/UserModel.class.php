<?php
/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 2016/10/1
 * Time: 下午12:09
 */

namespace Home\Model;


class UserModel
{
    protected $_map = array(
        'uid' =>'user_id', // 把表单映射到数据表
        'uName' =>'user_name',
        'uPw' =>'user_password',
        'uLevel' =>'user_level'
    );
}