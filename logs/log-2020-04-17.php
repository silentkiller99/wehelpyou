<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-17 06:53:07 --> Severity: error --> Exception: Unable to locate the model you have specified: Item_details_data I:\all_projects\efficientFarming\system\core\Loader.php 348
ERROR - 2020-04-17 10:23:34 --> Severity: error --> Exception: Call to undefined function getAllDataInOrder() I:\all_projects\efficientFarming\application\controllers\admin\User_details.php 17
ERROR - 2020-04-17 10:23:47 --> Query error: Unknown column 'user_id' in 'order clause' - Invalid query: SELECT *
FROM `tbl_user_registration`
ORDER BY `user_id` DESC
ERROR - 2020-04-17 10:23:47 --> Severity: error --> Exception: Call to a member function result_array() on bool I:\all_projects\efficientFarming\application\helpers\common_helper.php 25
ERROR - 2020-04-17 10:24:34 --> Severity: error --> Exception: Call to undefined function encrypt() I:\all_projects\efficientFarming\application\views\admin\user_all.php 69
ERROR - 2020-04-17 10:26:16 --> Severity: Notice --> Undefined index: user_id I:\all_projects\efficientFarming\application\views\admin\user_all.php 69
ERROR - 2020-04-17 10:26:16 --> Severity: Notice --> Undefined index: user_id I:\all_projects\efficientFarming\application\views\admin\user_all.php 82
ERROR - 2020-04-17 10:26:16 --> Query error: Table 'efficientfarming.tbl_book_prod' doesn't exist - Invalid query: SELECT *
FROM `tbl_book_prod`
WHERE `user_id` IS NULL
AND (`tbl_book_prod`.`booking_status` = '2' or `tbl_book_prod`.`booking_status` = '4')
ERROR - 2020-04-17 10:26:16 --> Severity: error --> Exception: Call to a member function num_rows() on bool I:\all_projects\efficientFarming\application\helpers\common_helper.php 86
ERROR - 2020-04-17 10:26:26 --> Severity: Notice --> Undefined index: user_id I:\all_projects\efficientFarming\application\views\admin\user_all.php 82
ERROR - 2020-04-17 10:26:26 --> Query error: Table 'efficientfarming.tbl_book_prod' doesn't exist - Invalid query: SELECT *
FROM `tbl_book_prod`
WHERE `user_id` IS NULL
AND (`tbl_book_prod`.`booking_status` = '2' or `tbl_book_prod`.`booking_status` = '4')
ERROR - 2020-04-17 10:26:26 --> Severity: error --> Exception: Call to a member function num_rows() on bool I:\all_projects\efficientFarming\application\helpers\common_helper.php 86
ERROR - 2020-04-17 10:26:40 --> Severity: Notice --> Undefined index: user_id I:\all_projects\efficientFarming\application\views\admin\user_all.php 82
ERROR - 2020-04-17 10:26:40 --> Query error: Table 'efficientfarming.tbl_book_prod' doesn't exist - Invalid query: SELECT *
FROM `tbl_book_prod`
WHERE `user_registration_id` IS NULL
AND (`tbl_book_prod`.`booking_status` = '2' or `tbl_book_prod`.`booking_status` = '4')
ERROR - 2020-04-17 10:26:40 --> Severity: error --> Exception: Call to a member function num_rows() on bool I:\all_projects\efficientFarming\application\helpers\common_helper.php 86
ERROR - 2020-04-17 10:26:49 --> Query error: Table 'efficientfarming.tbl_book_prod' doesn't exist - Invalid query: SELECT *
FROM `tbl_book_prod`
WHERE `user_id` = '1'
AND (`tbl_book_prod`.`booking_status` = '2' or `tbl_book_prod`.`booking_status` = '4')
ERROR - 2020-04-17 10:26:49 --> Severity: error --> Exception: Call to a member function num_rows() on bool I:\all_projects\efficientFarming\application\helpers\common_helper.php 86
ERROR - 2020-04-17 06:58:38 --> Severity: error --> Exception: Unable to locate the model you have specified: Item_details_data I:\all_projects\efficientFarming\system\core\Loader.php 348
ERROR - 2020-04-17 10:28:49 --> Query error: Table 'efficientfarming.tbl_merchant_registration' doesn't exist - Invalid query: SELECT *
FROM `tbl_merchant_registration`
ORDER BY `merchant_id` DESC
ERROR - 2020-04-17 10:28:49 --> Severity: error --> Exception: Call to a member function result_array() on bool I:\all_projects\efficientFarming\application\helpers\common_helper.php 25
ERROR - 2020-04-17 10:29:20 --> Severity: error --> Exception: Call to undefined function encrypt() I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 77
ERROR - 2020-04-17 10:29:57 --> Severity: error --> Exception: Call to undefined function encrypt() I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 77
ERROR - 2020-04-17 10:30:24 --> Severity: Notice --> Undefined index: merchant_id I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 77
ERROR - 2020-04-17 10:30:24 --> Severity: Notice --> Undefined index: shop_image I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 116
ERROR - 2020-04-17 10:30:24 --> Severity: Notice --> Undefined index: shop_address I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 161
ERROR - 2020-04-17 10:30:24 --> Severity: Notice --> Undefined index: shop_area I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 169
ERROR - 2020-04-17 10:30:25 --> Severity: Notice --> Undefined index: shop_pincode I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 169
ERROR - 2020-04-17 10:30:25 --> Severity: Notice --> Undefined index: shop_city I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 177
ERROR - 2020-04-17 10:30:25 --> Severity: Notice --> Undefined index: shop_state I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 177
ERROR - 2020-04-17 10:30:25 --> Severity: Notice --> Undefined index: open_time I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 186
ERROR - 2020-04-17 10:30:25 --> Severity: Notice --> Undefined index: close_time I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 194
ERROR - 2020-04-17 10:30:25 --> Severity: Notice --> Undefined index: merchant_id I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 212
ERROR - 2020-04-17 10:30:25 --> Query error: Table 'efficientfarming.tbl_book_prod' doesn't exist - Invalid query: SELECT *
FROM `tbl_book_prod`
WHERE `merchant_id` IS NULL
AND (`tbl_book_prod`.`booking_status` = '2' or `tbl_book_prod`.`booking_status` = '4')
ERROR - 2020-04-17 10:30:25 --> Severity: error --> Exception: Call to a member function num_rows() on bool I:\all_projects\efficientFarming\application\helpers\common_helper.php 86
ERROR - 2020-04-17 10:30:37 --> Severity: Notice --> Undefined index: shop_image I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 116
ERROR - 2020-04-17 10:30:37 --> Severity: Notice --> Undefined index: shop_address I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 161
ERROR - 2020-04-17 10:30:37 --> Severity: Notice --> Undefined index: shop_area I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 169
ERROR - 2020-04-17 10:30:37 --> Severity: Notice --> Undefined index: shop_pincode I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 169
ERROR - 2020-04-17 10:30:37 --> Severity: Notice --> Undefined index: shop_city I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 177
ERROR - 2020-04-17 10:30:37 --> Severity: Notice --> Undefined index: shop_state I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 177
ERROR - 2020-04-17 10:30:37 --> Severity: Notice --> Undefined index: open_time I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 186
ERROR - 2020-04-17 10:30:37 --> Severity: Notice --> Undefined index: close_time I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 194
ERROR - 2020-04-17 10:30:37 --> Severity: Notice --> Undefined index: merchant_id I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 212
ERROR - 2020-04-17 10:30:37 --> Query error: Table 'efficientfarming.tbl_book_prod' doesn't exist - Invalid query: SELECT *
FROM `tbl_book_prod`
WHERE `merchant_id` IS NULL
AND (`tbl_book_prod`.`booking_status` = '2' or `tbl_book_prod`.`booking_status` = '4')
ERROR - 2020-04-17 10:30:37 --> Severity: error --> Exception: Call to a member function num_rows() on bool I:\all_projects\efficientFarming\application\helpers\common_helper.php 86
ERROR - 2020-04-17 10:31:01 --> Severity: Notice --> Undefined index: shop_image I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 116
ERROR - 2020-04-17 10:31:01 --> Severity: Notice --> Undefined index: shop_address I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 161
ERROR - 2020-04-17 10:31:01 --> Severity: Notice --> Undefined index: shop_area I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 169
ERROR - 2020-04-17 10:31:01 --> Severity: Notice --> Undefined index: shop_pincode I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 169
ERROR - 2020-04-17 10:31:01 --> Severity: Notice --> Undefined index: shop_city I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 177
ERROR - 2020-04-17 10:31:01 --> Severity: Notice --> Undefined index: shop_state I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 177
ERROR - 2020-04-17 10:31:01 --> Severity: Notice --> Undefined index: open_time I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 186
ERROR - 2020-04-17 10:31:01 --> Severity: Notice --> Undefined index: close_time I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 194
ERROR - 2020-04-17 10:31:05 --> Severity: Notice --> Undefined index: shop_image I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 116
ERROR - 2020-04-17 10:31:05 --> Severity: Notice --> Undefined index: shop_address I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 161
ERROR - 2020-04-17 10:31:05 --> Severity: Notice --> Undefined index: shop_area I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 169
ERROR - 2020-04-17 10:31:05 --> Severity: Notice --> Undefined index: shop_pincode I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 169
ERROR - 2020-04-17 10:31:05 --> Severity: Notice --> Undefined index: shop_city I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 177
ERROR - 2020-04-17 10:31:05 --> Severity: Notice --> Undefined index: shop_state I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 177
ERROR - 2020-04-17 10:31:05 --> Severity: Notice --> Undefined index: open_time I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 186
ERROR - 2020-04-17 10:31:05 --> Severity: Notice --> Undefined index: close_time I:\all_projects\efficientFarming\application\views\admin\merchants_all.php 194
ERROR - 2020-04-17 10:33:43 --> Severity: error --> Exception: Call to undefined function decrypt() I:\all_projects\efficientFarming\application\controllers\admin\Merchant_details.php 122
ERROR - 2020-04-17 10:33:46 --> Severity: error --> Exception: Call to undefined function decrypt() I:\all_projects\efficientFarming\application\controllers\admin\Merchant_details.php 130
ERROR - 2020-04-17 10:33:50 --> Severity: error --> Exception: Call to undefined function decrypt() I:\all_projects\efficientFarming\application\controllers\admin\Merchant_details.php 101
