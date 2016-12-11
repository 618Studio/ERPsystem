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

    //获得群组
    public function getGroup(){
        $model = D('group');
        $result = $model->getField("group_id,group_name",true);
        return $result;
    }

    //获取详细权限
    public function getPrivilege($id)
    {
        $group = D("group");
        $condition['group_id'] = $id;
        $result = $group->where($condition)->find();

        $return_data = array(
            'gOrder' =>$result['group_orderAuthority'],//订单管理
            'gMaterials' =>$result['group_materialsAuthority'],//资源管理
            'gWork' =>$result['group_workAuthority'],//生产管理
            'gQualityCost' =>$result['group_quality_costAuthority'],//成本与质量管理
            'gInfo' =>$result['group_informationAuthority'],//综合信息管理
        );
        return $return_data;
    }

    //增加群组
    public function add(){
        try{
            $model = D("group");
            $model->create();
            $return_data['result'] = $model->add();
        }catch(Exception $e){
            $return_data['result'] = 0;
        }
        return $return_data;
    }

    //编辑群组
    public function edit(){
        $group = D("group");

        $data = $group->create();

        if ($group->save($data) == true){
            $return_data['result'] = true;
        }else{
            $return_data['result'] = false;
        }

        return $return_data;
    }

    //删除群组
    public function delete($id){
        $group = D("group");
        $user = M("login");

        $condition['user_group'] = $id;
        $data['user_group'] = 0;
        $returnData['result'] = $user->where($condition)->save($data);

        if($returnData == true){
            $condition['group_id'] = $id;
            $returnData['result'] = $group->where($condition)->delete();
        }else{
            $returnData['result'] = false;
        }
        return $returnData;
    }
}