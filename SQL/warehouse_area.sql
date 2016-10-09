CREATE TABLE `erp_warehouse_area` (
  `area_id` tinyint(3) NOT NULL,
  `area_name` varchar(5) DEFAULT NULL,
  `warehouse_id` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`area_id`),
  UNIQUE KEY `area_name_UNIQUE` (`area_name`),
  KEY `warehouse_id_idx` (`warehouse_id`),
  CONSTRAINT `warehouse_id` FOREIGN KEY (`warehouse_id`) REFERENCES `erp_warehouse_number` (`warehouse_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
