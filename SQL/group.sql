create table erp_group(
	group_id tinyint unsigned default 0 primary key,#gId
	group_name varchar(10) not null,#gName
    group_order_q tinyint unsigned default 0,#gOrderQ
    group_order_e tinyint unsigned default 0,#gOrderE
    group_materials_q tinyint unsigned default 0,#gMaterialsQ
    group_materials_e tinyint unsigned default 0,#gMaterialsE
    group_stock_q tinyint unsigned default 0,#gStockQ
    group_stock_e tinyint unsigned default 0,#gStockE
    group_work_schedule_q tinyint unsigned default 0,#gWorkScheQ
    group_work_schedule_e tinyint unsigned default 0,#gWorkScheE
    group_galvalume_q tinyint unsigned default 0,#gGalQ
    group_galvalume_e tinyint unsigned default 0,#gGalE
    group_color_coating_q tinyint unsigned default 0,#gColorQ
    group_color_coating_e tinyint unsigned default 0,#gColorE
    group_cost_q tinyint unsigned default 0,#gCostQ
    group_cost_e tinyint unsigned default 0,#gCostE
    group_quality_q tinyint unsigned default 0,#gQualityQ
    group_quality_e tinyint unsigned default 0,#gQualityE
    group_user_q tinyint unsigned default 0,#gUserQ
    group_user_e tinyint unsigned default 0,#gUserE
)