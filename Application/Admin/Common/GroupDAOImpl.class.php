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
        $data = $group->select();
        $count = $group->count();
        if($count!=0){
            foreach ($data as $key=>$value){
                $return_data['data'][$key] = $group->parseFieldsMap($data[$key],1);
            }
        }
        else{
            $return_data['data'] = array();
        }
        var_dump($return_data);
        return $return_data;
    }

    //增加群组
    public function add(){

    }

    //修改群组
    public function update(){

    }

    //删除群组
    public function delete(){
        
    }
}