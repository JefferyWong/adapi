/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : yii2advanced

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-11-20 00:04:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bank_card
-- ----------------------------
DROP TABLE IF EXISTS `bank_card`;
CREATE TABLE `bank_card` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `card_number` varchar(20) COLLATE utf8_bin DEFAULT NULL COMMENT '银行卡号',
  `card_bank` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '开户银行',
  PRIMARY KEY (`id`),
  KEY `user_bank_card` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for trade_history
-- ----------------------------
DROP TABLE IF EXISTS `trade_history`;
CREATE TABLE `trade_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `account` decimal(10,2) DEFAULT NULL COMMENT '金额',
  `type` varchar(10) COLLATE utf8_bin DEFAULT NULL COMMENT '交易类型[支出(-), 收入(+)]',
  `remark` varchar(255) COLLATE utf8_bin DEFAULT '' COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` int(11) NOT NULL,
  `id_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `system_id` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '性别',
  `nation` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '民族',
  `home_town` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '籍贯',
  `inviter` int(11) DEFAULT NULL,
  `status` smallint(6) DEFAULT '10',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING HASH,
  UNIQUE KEY `id_number` (`id_number`) USING HASH,
  UNIQUE KEY `phone` (`phone`) USING HASH
) ENGINE=InnoDB AUTO_INCREMENT=8893 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for user_account
-- ----------------------------
DROP TABLE IF EXISTS `user_account`;
CREATE TABLE `user_account` (
  `user_id` int(11) NOT NULL,
  `available` decimal(10,2) DEFAULT '0.00',
  `unavailable` decimal(10,2) DEFAULT '0.00',
  `total` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for user_info
-- ----------------------------
DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `avatar` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '头像',
  `address` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '住址',
  `education` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '学历',
  `religion` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '信仰',
  `bloodtype` varchar(4) COLLATE utf8_bin DEFAULT NULL COMMENT '血型',
  `tall` smallint(6) DEFAULT NULL COMMENT '身高',
  `weight` smallint(6) DEFAULT NULL COMMENT '体重',
  `is_have_baby` smallint(1) DEFAULT NULL COMMENT '是否有宝宝',
  `is_married` smallint(1) DEFAULT NULL COMMENT '是否结婚',
  `work` varchar(10) COLLATE utf8_bin DEFAULT NULL COMMENT '工作状况',
  `income` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '收入',
  `habits` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '兴趣爱好',
  `online_shop_type` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `food_habits` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '饮食习惯',
  `car_info` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '车辆信息',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
