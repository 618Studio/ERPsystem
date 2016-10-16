<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/10/11
 * Time: 7:34
 */
namespace Admin\Model;

use Think\Model;

class UserModel extends Model{

    protected $_map = array(
        'uId'=>'user_id',
        'uName'=>'user_name',
        'uPasswd'=>'user_password',
        'gId'=>'user_group',
        'uLoginTimes'=>'user_Login'
    );
}