<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/10/3
 * Time: 20:54
 */
namespace Admin\Common;
interface IGroupDAO{
    //获取群组名和编号
    public function getId_Name();

    //根据ID获取详细权限
    public function getPrivilege($id);

    //增加群组
    public function add();

    //编辑群组
    public function edit();

    //删除群组
    public function delete($id);

    //获得群组
    public function getGroup();
}