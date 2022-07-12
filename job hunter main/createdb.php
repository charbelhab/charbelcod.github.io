<?php
$GLOBALS["conn"] = mysqli_connect("localhost", "root", "") or die(mysqli_error($GLOBALS["conn"]));
echo "Connected to MySQL server<br />";
mysqli_select_db($GLOBALS["conn"],"jobhuner") or die(mysqli_error($GLOBALS["conn"]));
echo "Connected to Database jobhunter";





mysqli_query("CREATE TABLE IF NOT EXISTS `country` (
  `country_id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `country` varchar(70) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;")

mysqli_query("CREATE TABLE IF NOT EXISTS `entreprise` (
  `entnum` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `number` varchar(70) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `logo` varchar(999) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `entnum` (`entnum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;")

mysqli_query("CREATE TABLE IF NOT EXISTS `job` (
  `job_code` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `entnum` bigint(20) UNSIGNED NOT NULL,
  `major_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `level` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `time` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `salary` int(10) UNSIGNED NOT NULL,
  `attention` varchar(300) COLLATE utf8mb4_bin NOT NULL,
  `experience` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `education` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `daysoff` varchar(70) COLLATE utf8mb4_bin NOT NULL,
  `showhide` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT 'show',
  PRIMARY KEY (`job_code`),
  KEY `entnum` (`entnum`),
  KEY `major_id` (`major_id`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;")


mysqli_query("CREATE TABLE IF NOT EXISTS `major` (
  `major_id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `major` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`major_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;")

mysqli_query("CREATE TABLE IF NOT EXISTS `signup` (
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;")


mysqli_query("ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_2` FOREIGN KEY (`major_id`) REFERENCES `major` (`major_id`),
  ADD CONSTRAINT `job_ibfk_3` FOREIGN KEY (`entnum`) REFERENCES `entreprise` (`entnum`),
  ADD CONSTRAINT `job_ibfk_4` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`);
COMMIT;")

















?>




