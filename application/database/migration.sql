ALTER TABLE `member` CHANGE `state` `state` INT NOT NULL;
ALTER TABLE `stock_order` CHANGE `state` `state` INT NOT NULL;
ALTER TABLE `member` ADD `is_modified` TINYINT(1) NOT NULL AFTER `is_wr_locked`;
-- import state.sql

ALTER TABLE `stock_order` ADD `track_num` VARCHAR(50) NOT NULL AFTER `delivery_option`;
ALTER TABLE `stock_order` ADD `is_completed` TINYINT(1) NOT NULL AFTER `approved_by`, ADD `completed_at` DATETIME NOT NULL AFTER `is_completed`, ADD `completed_by` VARCHAR(50) NOT NULL AFTER `completed_at`;
ALTER TABLE `withdrawal_request` ADD `bank_stat` VARCHAR(200) NOT NULL AFTER `created_by`;
ALTER TABLE `stock_order` ADD `courier_name` VARCHAR(200) NOT NULL AFTER `track_num`;
-- import activation.sql

-- import web_enquiry.sql

