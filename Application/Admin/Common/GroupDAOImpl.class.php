<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/10/3
 * Time: 20:57
 */
namespace Admin\Common;
class GroupDAOImpl implements IGroupDAO{
    //获取id和名字
    public function getId_Name()
    {
        $group = D("group");

        $return_data = $group->getField('group_id,group_name');
        return $return_data;

    }

    //获取详细权限
    public function getPrivilege($id)
    {
        $group = D("group");
        $condition['group_id'] = $id;
        $result = $group->where($condition)->find();

        $return_data = array(
            'gOrderQ' =>$result['group_order_q'],
            'gOrderE' =>$result['group_order_e'],
            'gMaterialsQ' =>$result['group_materials_q'],
            'gMaterialsE' =>$result['group_materials_e'],
            'gStockQ' =>$result['group_stock_q'],
            'gStockE' =>$result['group_stock_e'],
            'gWorkScheQ' =>$result['group_work_schedule_q'],
            'gWorkScheE' =>$result['group_work_schedule_e'],
            'gGalQ' =>$result['group_galvalume_q'],
            'gGalE' =>$result['group_galvalume_e'],
            'gColorQ' =>$result['group_color_coating_q'],
            'gColorE' =>$result['group_color_coating_e'],
            'gCostQ' =>$result['group_cost_q'],
            'gCostE' =>$result['group_cost_e'],
            'gQualityQ' =>$result['group_quality_q'],
            'gQualityE' =>$result['group_quality_e'],
            'gUserQ' =>$result['group_user_q'],
            'gUserE' =>$result['group_user_e']
        );
        return $return_data;
        $data = $group->getField("group_id,group_name");
        return $data;
    }

    //增加群组
    public function add(){

    }

    //编辑群组
    public function edit()
    {
        // TODO: Implement edit() method.
    }

    //通过组id获取该组权限
    public function getPrivilegeByGid(){
        
    }

    //修改群组
    public function update(){
        //        $data = $group->select();
//        $count = $group->count();
//        if($count!=0){
//            foreach ($data as $key=>$value){
//                $return_data['data'][$key] = $group->parseFieldsMap($data[$key],1);
//            }
//        }
//        else{
//            $return_data['data'] = array();
//        }
    }

    //删除群组
    public function delete(){

    }
}