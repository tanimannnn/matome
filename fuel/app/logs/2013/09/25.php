<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

WARNING - 2013-09-25 11:08:15 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 11:08:18 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 11:08:19 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 11:31:45 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 11:31:45 --> Error - Invalid basepath: "/home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/config/development/", cannot update a file at this location. in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/core/classes/file.php on line 321
WARNING - 2013-09-25 11:32:22 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 11:32:22 --> 1142 - DROP command denied to user 'matome'@'localhost' for table 'articleinfos' [ DROP TABLE IF EXISTS `articleinfos` ] in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/core/classes/database/mysqli/connection.php on line 243
WARNING - 2013-09-25 11:35:35 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 11:39:47 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 11:43:12 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 11:43:14 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 11:43:15 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 11:45:34 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 11:45:38 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 11:45:38 --> 1146 - Table 'matome.articleinfos' doesn't exist [ SELECT `t0`.`id` AS `t0_c0`, `t0`.`sitename` AS `t0_c1`, `t0`.`siteurl` AS `t0_c2`, `t0`.`title` AS `t0_c3`, `t0`.`link` AS `t0_c4`, `t0`.`description` AS `t0_c5`, `t0`.`date` AS `t0_c6`, `t0`.`guid` AS `t0_c7`, `t0`.`created_at` AS `t0_c8`, `t0`.`updated_at` AS `t0_c9` FROM `articleinfos` AS `t0` ] in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/core/classes/database/mysqli/connection.php on line 243
WARNING - 2013-09-25 11:55:19 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 11:56:40 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 11:58:07 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 12:14:31 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 12:14:31 --> 1146 - Table 'matome.articleinfos' doesn't exist [ SELECT `t0`.`id` AS `t0_c0`, `t0`.`article_id` AS `t0_c1`, `t0`.`site_title` AS `t0_c2`, `t0`.`site_url` AS `t0_c3`, `t0`.`title` AS `t0_c4`, `t0`.`url` AS `t0_c5`, `t0`.`description` AS `t0_c6`, `t0`.`date` AS `t0_c7`, `t0`.`guid` AS `t0_c8`, `t0`.`created_at` AS `t0_c9`, `t0`.`updated_at` AS `t0_c10` FROM `articleinfos` AS `t0` ] in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/core/classes/database/mysqli/connection.php on line 243
WARNING - 2013-09-25 12:14:49 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 12:14:49 --> 1146 - Table 'matome.articleinfos' doesn't exist [ INSERT INTO `articleinfos` (`article_id`, `site_title`, `site_url`, `title`, `url`, `description`, `date`, `guid`, `created_at`, `updated_at`) VALUES (null, null, null, 'あー！', null, 'あいうえお', null, 11234, 1380078889, 1380078889) ] in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/core/classes/database/mysqli/connection.php on line 243
WARNING - 2013-09-25 12:16:41 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 12:16:41 --> 1064 - You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '500 NOT NULL,
	`date` timestamp NOT NULL,
	`guid` varchar(100) NOT NULL,
	`creat' at line 8 [ CREATE TABLE IF NOT EXISTS `articleinfos` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`article_id` varchar(50) NOT NULL,
	`site_title` varchar(100) NOT NULL,
	`site_url` varchar(100) NOT NULL,
	`title` varchar(100) NOT NULL,
	`url` varchar(500) NOT NULL,
	`description` 500 NOT NULL,
	`date` timestamp NOT NULL,
	`guid` varchar(100) NOT NULL,
	`created_at` int(11) NULL,
	`updated_at` int(11) NULL,
	PRIMARY KEY `id` (`id`)
) DEFAULT CHARACTER SET utf8; ] in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/core/classes/database/mysqli/connection.php on line 243
WARNING - 2013-09-25 12:17:14 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 12:17:30 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 12:17:49 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 12:17:58 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 12:18:03 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 12:18:03 --> 1064 - You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '500 NOT NULL,
	`date` timestamp NOT NULL,
	`guid` varchar(100) NOT NULL,
	`creat' at line 8 [ CREATE TABLE IF NOT EXISTS `articleinfos` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`article_id` varchar(50) NOT NULL,
	`site_title` varchar(100) NOT NULL,
	`site_url` varchar(100) NOT NULL,
	`title` varchar(100) NOT NULL,
	`url` varchar(500) NOT NULL,
	`description` 500 NOT NULL,
	`date` timestamp NOT NULL,
	`guid` varchar(100) NOT NULL,
	`created_at` int(11) NULL,
	`updated_at` int(11) NULL,
	PRIMARY KEY `id` (`id`)
) DEFAULT CHARACTER SET utf8; ] in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/core/classes/database/mysqli/connection.php on line 243
WARNING - 2013-09-25 12:19:13 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 12:19:15 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 18:27:50 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 18:27:53 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 18:27:53 --> 1048 - Column 'article_id' cannot be null [ INSERT INTO `articleinfos` (`article_id`, `site_title`, `site_url`, `title`, `url`, `description`, `date`, `guid`, `created_at`, `updated_at`) VALUES (null, null, null, 'あー！', null, 'あいうえお', null, 11234, 1380101273, 1380101273) ] in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/core/classes/database/mysqli/connection.php on line 243
WARNING - 2013-09-25 18:27:55 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 18:31:06 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 18:31:06 --> 1048 - Column 'site_title' cannot be null [ INSERT INTO `articleinfos` (`article_id`, `site_title`, `site_url`, `title`, `url`, `description`, `date`, `guid`, `created_at`, `updated_at`) VALUES ('1234566789', null, '', 'あー！', 'http://wwww.yahoo.co.jp', 'あいうえお', null, 11234, 1380101466, 1380101466) ] in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/core/classes/database/mysqli/connection.php on line 243
WARNING - 2013-09-25 18:31:44 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 18:31:45 --> 1048 - Column 'article_id' cannot be null [ INSERT INTO `articleinfos` (`article_id`, `site_title`, `site_url`, `title`, `url`, `description`, `date`, `guid`, `created_at`, `updated_at`) VALUES (null, 'ああなる', '', 'あー！', 'http://wwww.yahoo.co.jp', 'あいうえお', null, 11234, 1380101504, 1380101504) ] in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/core/classes/database/mysqli/connection.php on line 243
WARNING - 2013-09-25 18:32:20 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 18:32:22 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 19:43:15 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 19:43:29 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 19:43:33 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 19:49:48 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 19:49:48 --> Parsing Error - syntax error, unexpected '}' in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/classes/controller/sample.php on line 11
WARNING - 2013-09-25 19:49:56 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 19:50:10 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 19:50:44 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 19:51:06 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 19:51:21 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 19:51:21 --> 8 - Undefined variable: title in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 3
WARNING - 2013-09-25 19:52:20 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 19:52:20 --> 8 - Undefined variable: data in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 3
WARNING - 2013-09-25 19:52:26 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 19:52:26 --> 8 - Undefined variable: data in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 3
WARNING - 2013-09-25 19:52:28 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 19:52:28 --> 8 - Undefined variable: data in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 3
WARNING - 2013-09-25 19:52:30 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 19:52:45 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 19:53:04 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 19:53:04 --> 8 - Undefined variable: data in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 3
WARNING - 2013-09-25 19:53:18 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 19:53:18 --> 8 - Undefined variable: url in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 3
WARNING - 2013-09-25 19:54:52 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 19:55:05 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 19:55:22 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 20:49:13 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 20:49:13 --> 8 - Undefined variable: vars in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 7
WARNING - 2013-09-25 20:49:20 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 20:49:20 --> 8 - Undefined variable: vars in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 7
WARNING - 2013-09-25 20:49:45 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 20:50:11 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 20:50:11 --> 8 - Undefined variable: vars in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 7
WARNING - 2013-09-25 20:50:11 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 20:50:11 --> 8 - Undefined variable: vars in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 7
WARNING - 2013-09-25 20:50:30 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 20:50:50 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 20:50:50 --> 8 - Undefined variable: vars in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 7
WARNING - 2013-09-25 20:51:34 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 20:51:34 --> 8 - Undefined variable: vars in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 7
WARNING - 2013-09-25 20:51:41 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 20:51:41 --> 8 - Undefined variable: vars in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 7
WARNING - 2013-09-25 20:52:13 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 20:52:13 --> 8 - Undefined variable: vars in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 7
WARNING - 2013-09-25 20:52:26 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 20:52:26 --> 8 - Undefined variable: vars in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 7
WARNING - 2013-09-25 20:53:11 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 20:53:27 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 20:54:21 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:01:20 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 21:01:20 --> 8 - Undefined variable: a in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 9
WARNING - 2013-09-25 21:01:33 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:02:18 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 21:02:18 --> 8 - Undefined index: _data in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/classes/controller/sample.php on line 10
WARNING - 2013-09-25 21:02:29 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:02:55 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 21:02:55 --> 8 - Trying to get property of non-object in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/classes/controller/sample.php on line 10
WARNING - 2013-09-25 21:03:00 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 21:03:00 --> 8 - Trying to get property of non-object in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/classes/controller/sample.php on line 10
WARNING - 2013-09-25 21:03:03 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 21:03:03 --> 8 - Trying to get property of non-object in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/classes/controller/sample.php on line 10
WARNING - 2013-09-25 21:04:02 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:06:19 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 21:06:19 --> 8 - Undefined variable: vars in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 9
WARNING - 2013-09-25 21:06:37 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:06:43 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:06:50 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:07:07 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:07:13 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:07:16 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:07:27 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:07:48 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:07:50 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:09:22 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:09:27 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:09:29 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:11:26 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:11:28 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:12:11 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:12:33 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:12:48 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:13:10 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:13:17 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:49:02 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:49:32 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:50:19 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 21:50:19 --> Error - Property "_data" not found for Model_Articleinfo. in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/packages/orm/classes/model.php on line 1022
WARNING - 2013-09-25 21:50:37 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:50:56 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:54:27 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 21:54:27 --> 8 - Undefined variable: vars in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 10
WARNING - 2013-09-25 21:54:46 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 21:54:46 --> Parsing Error - syntax error, unexpected '}' in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 16
WARNING - 2013-09-25 21:54:56 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 21:54:56 --> 8 - Undefined variable: vars in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 9
WARNING - 2013-09-25 21:55:17 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:56:17 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 21:56:17 --> Parsing Error - syntax error, unexpected ';' in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/classes/controller/sample.php on line 12
WARNING - 2013-09-25 21:56:23 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:56:57 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 21:57:39 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 22:43:10 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 22:43:43 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 22:44:05 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 22:52:27 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 22:54:57 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 22:56:44 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 22:56:44 --> Parsing Error - syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 12
WARNING - 2013-09-25 22:57:01 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 22:57:30 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 22:57:32 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 22:58:22 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 22:58:39 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 22:59:06 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 22:59:51 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:01:05 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 23:01:05 --> 8 - Undefined offset: 10 in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 11
WARNING - 2013-09-25 23:01:34 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:02:25 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 23:02:25 --> 8 - Undefined offset: 10 in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 11
WARNING - 2013-09-25 23:03:13 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:04:17 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:04:58 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:05:10 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:14:04 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:14:07 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:15:15 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 23:15:15 --> 8 - Undefined offset: 0 in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 13
WARNING - 2013-09-25 23:15:54 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 23:15:54 --> 8 - Undefined offset: 1 in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 13
WARNING - 2013-09-25 23:17:07 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
ERROR - 2013-09-25 23:17:07 --> 8 - Undefined offset: 10 in /home/y/share/tnp/matome/fuelphp-1.5.3/fuel/app/views/sample/index.php on line 13
WARNING - 2013-09-25 23:17:42 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:19:00 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:25:18 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:26:14 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:26:44 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:26:55 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:27:08 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:27:41 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:27:42 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:27:43 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:27:44 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:27:44 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:27:44 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:27:45 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:27:45 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:27:45 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:27:45 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:27:45 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:27:46 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:27:46 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:27:55 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:28:27 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:29:24 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:29:32 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:31:37 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:55:35 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:58:45 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:58:53 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:59:15 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
WARNING - 2013-09-25 23:59:43 --> Fuel\Core\Fuel::init - The configured locale ja_JP_UTF-8 is not installed on your system.
