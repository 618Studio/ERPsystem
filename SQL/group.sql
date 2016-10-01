create table erp_group(
	group_id tinyint unsigned default 0 primary key,
    group_order tinyint unsigned default 0,
    group_materials tinyint unsigned default 0,
    group_stock tinyint unsigned default 0
)