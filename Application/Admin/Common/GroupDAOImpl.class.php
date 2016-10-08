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
            'gOrderQ' =>$result['group_order_q'],//订单
            'gOrderE' =>$result['group_order_e'],
            'gMaterialsQ' =>$result['group_materials_q'],//物资
            'gMaterialsE' =>$result['group_materials_e'],
            'gStockQ' =>$result['group_stock_q'],//库存
            'gStockE' =>$result['group_stock_e'],
            'gWorkScheQ' =>$result['group_work_schedule_q'],//生产计划
            'gWorkScheE' =>$result['group_work_schedule_e'],
            'gGalQ' =>$result['group_galvalume_q'],//镀铝锌生产管理
            'gGalE' =>$result['group_galvalume_e'],
            'gColorQ' =>$result['group_color_coating_q'],//彩涂生产管理
            'gColorE' =>$result['group_color_coating_e'],
            'gCostQ' =>$result['group_cost_q'],//成本管理
            'gCostE' =>$result['group_cost_e'],
            'gQualityQ' =>$result['group_quality_q'],//质量管理
            'gQualityE' =>$result['group_quality_e'],
            'gUserQ' =>$result['group_user_q'],//用户管理
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
    public function edit(){
        $group = D("group");

        $data = $group->create();

        if ($group->save($data) == true){
            $returnData = true;
        }else{
            $returnData = false;
        }

        return $returnData;
    }

    //删除群组
    public function delete($id){
        $group = D("group");

        $returnData = $group->delete($id);

        return $returnData;
    }
}