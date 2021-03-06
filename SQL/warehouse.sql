CREATE ALGORITHM=UNDEFINED DEFINER=`hr`@`%` SQL SECURITY DEFINER VIEW `erp_warehouse`
AS
select `erp_warehouse_position`.`position_id` AS `position_id`,
`erp_warehouse_number`.`warehouse_name` AS `number_name`,
`erp_warehouse_area`.`area_name` AS `area_name`,
`erp_warehouse_position`.`position_name` AS `position_name`,
`erp_warehouse_position`.`position_content` AS `position_content`,
`erp_warehouse_position`.`position_status` AS `position_status`
from ((`erp_warehouse_number` join `erp_warehouse_area`) join `erp_warehouse_position`)
where ((`erp_warehouse_number`.`warehouse_id` = `erp_warehouse_area`.`warehouse_id`) and (`erp_warehouse_area`.`area_id` = `erp_warehouse_position`.`area_id`));
