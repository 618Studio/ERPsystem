<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/10/3
 * Time: 20:57
 */
namespace Admin\Common;
class GroupDAOImpl implements IGroupDAO{
    //获取群组
    public function get(){
        $group = D("group");
        $data = $group->getField("group_id,group_name");
        return $data;
    }

    //增加群组
    public function add(){

    }
    //通过组id获取该组权限
    public function getPrivilegeByGid(){
        
    }
    
    //修改群组
    public function update(){

    }

    //删除群组
    public function delete(){
        
    }
}