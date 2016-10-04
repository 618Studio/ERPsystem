<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/10/3
 * Time: 20:54
 */
namespace Admin\Common;
interface IGroupDAO{
    //获取群组
    public function get();
    
    //增加群组
    public function add();

    //修改群组
    public function update();

    //删除群组
    public function delete();

    //通过组id获取该组权限
    public function getPrivilegeByGid();
}