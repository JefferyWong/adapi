/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : yii2advanced

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-11-12 02:38:16
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
-- Records of bank_card
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `system_id` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------

-- ----------------------------
-- Table structure for user_info
-- ----------------------------
DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT '用户ID',
  `realname` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '姓名',
  `nation` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '民族',
  `hometown` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '籍贯',
  `id_number` varchar(18) COLLATE utf8_bin DEFAULT NULL COMMENT '身份证号',
  `birthday` int(11) DEFAULT NULL COMMENT '生日',
  `avatar` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '头像',
  `address` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '住址',
  `inviter` int(11) DEFAULT NULL COMMENT '邀请者',
  `education` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '学历',
  `religion` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '信仰',
  `bloodtype` varchar(4) COLLATE utf8_bin DEFAULT NULL COMMENT '血型',
  `tall` smallint(6) DEFAULT NULL COMMENT '身高',
  `weight` smallint(6) DEFAULT NULL COMMENT '体重',
  `phone` int(11) DEFAULT NULL COMMENT '电话',
  `is_have_baby` smallint(1) DEFAULT NULL COMMENT '是否有宝宝',
  `is_married` smallint(1) DEFAULT NULL COMMENT '是否结婚',
  `work` varchar(10) COLLATE utf8_bin DEFAULT NULL COMMENT '工作状况',
  `income` smallint(2) DEFAULT NULL COMMENT '收入',
  `is_accept_ad_money` smallint(1) DEFAULT NULL COMMENT '是否接收广告和红包',
  `habits` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '兴趣爱好',
  `online_shop_type` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `food_habits` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '饮食习惯',
  `car_info` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '车辆信息',
  PRIMARY KEY (`id`),
  KEY `user-userinfo` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of user_info
-- ----------------------------
