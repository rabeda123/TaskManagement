# TaskManagementSystem



create database and table:

CREATE DATABASE `task_management` /*!40100 DEFAULT CHARACTER SET latin1 */;
CREATE TABLE `tasks` (
  `task_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `task_name` varchar(100) NOT NULL,
  `task_status` int(11) NOT NULL DEFAULT '0' COMMENT '0 remaining\1 completed',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`task_id`),
  UNIQUE KEY `task_id_UNIQUE` (`task_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;



This is a Task Management System.
You can create new tasks and update existing tasks.
When you click "task types" ( total , complited and remaining ) in header at the top of the page,
the page displays your selection
(for example, if you select completed task you will only see completed tasks).
Each time you click on one of the rows in the table,
a dialog will be open with the option to edit/delete tasks, 
and there is also an accessible button 
to create a new task in the upper rigth corner of the table.

good luck!
