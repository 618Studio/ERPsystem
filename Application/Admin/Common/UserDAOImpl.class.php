<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/10/11
 * Time: 7:32
 */
namespace Admin\Common;
use Think\Exception;
class UserDAOImpl implements IUserDAO
{
    //分页获取用户
    function getUser($param_array){
        $model = D('User');
        $return_data['draw'] = $param_array["draw"];
        $return_data['recordsTotal'] = $model->count();
        $return_data['recordsFiltered'] = $model->count();
        $data = $model->select();
        foreach ($data as $key=>$value) {
            $return_data['data'][$key] = $model->parseFieldsMap($data[$key], 1);
            $return_data['data'][$key]['update'] = "<a class=\"edit\" href=\"javascript:;\"><span class=\"label label-success\">编 辑</span></a>";
            $return_data['data'][$key]['delete'] = "<a class=\"delete\" href=\"javascript:;\"><span class=\"label label-danger\">删 除</span></a>";
        }
        return $return_data;
    }

    //增加用户
    function addUser(){
        try{
            $model = D('User');
            $model->create();
            $return_data['result'] = $model->add();
        }catch(Exception $e){
            $return_data['result'] = 0;
        }
        return $return_data;
    }

    //删除用户
    function deleteUser($id){
        $model = D('User');
        $return_data['result'] = $model->delete($id);
        return $return_data;
    }

    //修改用户
    function updateUser(){
        $model = D('User');
        $data = $model->create();

        if($model->save() == true){
            $return_data['result'] = true;
        }else{
            $return_data['result'] = false;
        }

        return $return_data;
    }
}