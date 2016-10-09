CREATE TABLE `erp_warehouse_position` (
  `position_id` tinyint(3) NOT NULL,
  `position_name` varchar(5) DEFAULT NULL,
  `area_id` tinyint(3) NOT NULL,
  `position_content` varchar(30) DEFAULT NULL,
  `position_status` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`position_id`),
  UNIQUE KEY `position_name_UNIQUE` (`position_name`),
  KEY `area_id_idx` (`area_id`),
  CONSTRAINT `area_id` FOREIGN KEY (`area_id`) REFERENCES `erp_warehouse_area` (`area_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
