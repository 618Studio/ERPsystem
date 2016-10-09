CREATE TABLE `erp_warehouse_number` (
  `warehouse_id` tinyint(3) NOT NULL COMMENT '仓库ID',
  `warehouse_name` varchar(5) DEFAULT NULL COMMENT '仓库名称',
  PRIMARY KEY (`warehouse_id`),
  UNIQUE KEY `warehouse_name_UNIQUE` (`warehouse_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
