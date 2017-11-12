CREATE TABLE `attendance_api` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `user_did` INT(11) NOT NULL COMMENT 'Student Device ID',
  `log_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Log Time',
  `device_id` VARCHAR(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Device ID',
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'System Time',
  PRIMARY KEY (`id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `std_class1_tbl` ADD COLUMN `student_device_id` INT NOT NULL COMMENT 'Student Device ID' AFTER `std_photo`; 
ALTER TABLE `std_class2_tbl` ADD COLUMN `student_device_id` INT NOT NULL COMMENT 'Student Device ID' AFTER `std_photo`; 
ALTER TABLE `std_class3_tbl` ADD COLUMN `student_device_id` INT NOT NULL COMMENT 'Student Device ID' AFTER `std_photo`; 
ALTER TABLE `std_class4_tbl` ADD COLUMN `student_device_id` INT NOT NULL COMMENT 'Student Device ID' AFTER `std_photo`; 
ALTER TABLE `std_class5_tbl` ADD COLUMN `student_device_id` INT NOT NULL COMMENT 'Student Device ID' AFTER `std_photo`; 
ALTER TABLE `std_class6_tbl` ADD COLUMN `student_device_id` INT NOT NULL COMMENT 'Student Device ID' AFTER `std_photo`; 
ALTER TABLE `std_class7_tbl` ADD COLUMN `student_device_id` INT NOT NULL COMMENT 'Student Device ID' AFTER `std_photo`; 
ALTER TABLE `std_class8_tbl` ADD COLUMN `student_device_id` INT NOT NULL COMMENT 'Student Device ID' AFTER `std_photo`; 
ALTER TABLE `std_class9_tbl` ADD COLUMN `student_device_id` INT NOT NULL COMMENT 'Student Device ID' AFTER `std_photo`; 
ALTER TABLE `std_class10_tbl` ADD COLUMN `student_device_id` INT NOT NULL COMMENT 'Student Device ID' AFTER `std_photo`; 



SELECT rc.`std_name`,rc.`std_cls`,rc.`std_roll`,rc.`std_sft`,rc.`std_sec`,rc.`std_grp`,rc.`std_gen`,ap.`log_time` FROM `std_class1_tbl` rc
LEFT OUTER JOIN `attendance_api` ap ON rc.`student_device_id` = ap.`user_did` 
WHERE DATE(ap.log_time) BETWEEN "2017-09-30" AND "2017-09-30" 
ORDER BY rc.`s_id` ASC, ap.`log_time` ASC;

/* November 12, 2017 */
ALTER TABLE `preteach_tbl` ADD COLUMN `device_id` VARCHAR(20) NOT NULL AFTER `tech_photo`; 
