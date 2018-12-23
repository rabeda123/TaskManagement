# TaskManagementSystem



create database and table:

CREATE DATABASE `task_management` /*!40100 DEFAULT CHARACTER SET latin1 */;
CREATE TABLE `tasks` (
  `task_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `task_name` varchar(100) NOT NULL,
  `task_status` int(11) NOT NULL DEFAULT '0' COMMENT '0 open\n1 close\n2 delete',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `closed_on` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`task_id`),
  UNIQUE KEY `task_id_UNIQUE` (`task_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
