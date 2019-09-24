/*
Navicat MySQL Data Transfer

Source Server         : laravel17
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : php18

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-09-24 10:14:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bills
-- ----------------------------
DROP TABLE IF EXISTS `bills`;
CREATE TABLE `bills` (
  `CODE` varchar(255) NOT NULL,
  `TIME` datetime DEFAULT NULL,
  `EMPLOYEE_CODE` varchar(255) DEFAULT NULL,
  `CUSTOMER_CODE` varchar(255) DEFAULT NULL,
  `TOTAL_MONEY` decimal(10,0) DEFAULT NULL,
  `STATUS` varchar(255) DEFAULT NULL,
  `TIME_SHIP` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bills
-- ----------------------------

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `CATEGORY_CODE` varchar(255) DEFAULT NULL,
  `CATEGORY_NAME` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('LSP001', 'Điện thoại');
INSERT INTO `categories` VALUES ('LSP002', 'Máy tính bảng');
INSERT INTO `categories` VALUES ('LSP003', 'Laptop');
INSERT INTO `categories` VALUES ('LSP004', 'Phụ kiện');

-- ----------------------------
-- Table structure for customers
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `CODE` varchar(255) NOT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `MOBILE` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `DATE` datetime DEFAULT NULL,
  `PICTURE` varchar(255) DEFAULT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customers
-- ----------------------------
INSERT INTO `customers` VALUES ('KH1569293450', 'Nguyễn Văn Khánh', 'khanhnet2632000@gmail.com', '0975819200', '25d55ad283aa400af464c76d713c07ad', '2019-09-07 00:00:00', 'profile.png', 'Ứng Hòa');

-- ----------------------------
-- Table structure for detail_bill
-- ----------------------------
DROP TABLE IF EXISTS `detail_bill`;
CREATE TABLE `detail_bill` (
  `BILL_CODE` varchar(255) DEFAULT NULL,
  `PRODUCT_CODE` varchar(255) DEFAULT NULL,
  `QUANTITY_BUY` varchar(255) DEFAULT NULL,
  `PRICE` decimal(10,0) DEFAULT NULL,
  `TOTAL_MONEY` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of detail_bill
-- ----------------------------

-- ----------------------------
-- Table structure for employees
-- ----------------------------
DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `CODE` varchar(255) NOT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `MOBILE` varchar(255) DEFAULT NULL,
  `PICTURE` varchar(255) DEFAULT NULL,
  `DATE` datetime DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of employees
-- ----------------------------
INSERT INTO `employees` VALUES ('NV1569293450', 'khanhnet2632000@gmail.com', 'khanhnet2632000@gmail.com', '0975819200', 'profile.png', '2019-09-07 00:00:00', '25d55ad283aa400af464c76d713c07ad', 'Ứng Hòa');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `CODE` varchar(255) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `QUANTITY` varchar(255) NOT NULL,
  `PRICE` int(11) DEFAULT NULL,
  `PICTURE` varchar(255) DEFAULT NULL,
  `TYPE` varchar(255) DEFAULT NULL,
  `NOTE` varchar(255) DEFAULT NULL,
  `OLD_PRICE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('SP1569293848', 'Ip 5', '3', '2000000', 'iphone-5s-32gb-cu-5.jpg', 'LSP001', null, '2000000');
INSERT INTO `products` VALUES ('SP1569293960', 'IP7', '4', '6000000', 'iphone-7-plus-32g-quoc-te-dep-95-99-8.jpg', 'LSP001', null, '6000000');
INSERT INTO `products` VALUES ('SP1569294127', 'IP 6 S 128G', '6', '4000000', 'iphone-6s-128gb-quoc-te-dep-95-99-9.jpg', 'LSP001', null, null);
