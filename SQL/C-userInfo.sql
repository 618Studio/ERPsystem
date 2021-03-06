CREATE TABLE `erp_userInfo` (
  `user_id` varchar(11) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `user_password` varchar(16) NOT NULL DEFAULT '000000',
  `user_group` tinyint(3) unsigned DEFAULT '0',
  `user_login` tinyint(3) unsigned DEFAULT '0',
  `user_position` varchar(10) DEFAULT NULL,
  `user_email` varchar(20) DEFAULT NULL,
  `user_address` varchar(30) DEFAULT NULL,
  `user_phone1` varchar(12) DEFAULT NULL,
  `user_phone2` varchar(12) DEFAULT NULL,
  `user_phone3` varchar(12) DEFAULT NULL,
  `user_space1` varchar(20) DEFAULT NULL,
  `user_space2` varchar(20) DEFAULT NULL,
  `user_space3` varchar(20) DEFAULT NULL,
  `user_space4` varchar(20) DEFAULT NULL,
  `user_space5` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_group` (`user_group`),
  CONSTRAINT `erp_userInfo_ibfk_1` FOREIGN KEY (`user_group`) REFERENCES `erp_group` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
