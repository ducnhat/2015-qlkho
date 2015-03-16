/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : qlkho

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2015-03-16 22:25:02
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `customer`
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES ('1', 'test thử lần 2', '2015-03-14 04:22:11', '2015-03-14 05:15:15', null, 'asdasd aaa bbb', '01229012202', 'asda@asd.com', 'customer');
INSERT INTO `customer` VALUES ('3', 'Nhật', '2015-03-14 05:10:19', '2015-03-14 05:10:19', null, '195 qlộ 1A', '0906578610', 'ddnhat@gmail.com', 'customer');
INSERT INTO `customer` VALUES ('4', 'asdas', '2015-03-16 13:53:18', '2015-03-16 14:28:41', null, '123', '2211', '', 'supplier');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2015_03_07_075136_create_taxonomy_table', '2');
INSERT INTO `migrations` VALUES ('2015_03_07_075715_create_customer_table', '3');
INSERT INTO `migrations` VALUES ('2015_03_07_080222_create_brands_table', '4');
INSERT INTO `migrations` VALUES ('2015_03_07_081027_create_products_table', '4');
INSERT INTO `migrations` VALUES ('2015_03_07_081503_create_products_quantity_table', '4');
INSERT INTO `migrations` VALUES ('2015_03_07_082540_create_products_price_table', '5');
INSERT INTO `migrations` VALUES ('2015_03_10_123758_edit_taxonomy_table', '6');
INSERT INTO `migrations` VALUES ('2015_03_10_125809_add_column_order_into_taxonomy_table', '7');
INSERT INTO `migrations` VALUES ('2015_03_14_010613_edit_product_table', '8');
INSERT INTO `migrations` VALUES ('2015_03_14_022546_create_customers_table', '9');
INSERT INTO `migrations` VALUES ('2015_03_14_040113_edit_customer_table', '10');
INSERT INTO `migrations` VALUES ('2015_03_14_050922_edit_column_type_on_customer_table', '11');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand` int(10) unsigned NOT NULL,
  `type` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `products_brand_foreign` (`brand`),
  KEY `products_type_foreign` (`type`),
  CONSTRAINT `products_brand_foreign` FOREIGN KEY (`brand`) REFERENCES `taxonomy` (`id`),
  CONSTRAINT `products_type_foreign` FOREIGN KEY (`type`) REFERENCES `taxonomy` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'Dưỡng trắng ngừa nếp nhăn', ' BHTÍM ', '1', '7', '2015-03-14 01:26:33', '2015-03-14 02:19:08', null, '1231');
INSERT INTO `products` VALUES ('2', 'test lại', 'BHXanh', '4', '5', '2015-03-14 02:20:33', '2015-03-14 02:22:01', null, '0');

-- ----------------------------
-- Table structure for `products_price`
-- ----------------------------
DROP TABLE IF EXISTS `products_price`;
CREATE TABLE `products_price` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product` bigint(20) unsigned NOT NULL,
  `customer` int(10) unsigned NOT NULL,
  `price` double NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_price_product_foreign` (`product`),
  KEY `products_price_customer_foreign` (`customer`),
  CONSTRAINT `products_price_customer_foreign` FOREIGN KEY (`customer`) REFERENCES `customer` (`id`),
  CONSTRAINT `products_price_product_foreign` FOREIGN KEY (`product`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of products_price
-- ----------------------------

-- ----------------------------
-- Table structure for `products_quantity`
-- ----------------------------
DROP TABLE IF EXISTS `products_quantity`;
CREATE TABLE `products_quantity` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product` bigint(20) unsigned NOT NULL,
  `quantity` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_quantity_product_foreign` (`product`),
  CONSTRAINT `products_quantity_product_foreign` FOREIGN KEY (`product`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of products_quantity
-- ----------------------------

-- ----------------------------
-- Table structure for `taxonomy`
-- ----------------------------
DROP TABLE IF EXISTS `taxonomy`;
CREATE TABLE `taxonomy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `taxonomy_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of taxonomy
-- ----------------------------
INSERT INTO `taxonomy` VALUES ('1', 'OJEE My first update', '2015-03-09 00:45:14', '2015-03-11 13:43:53', null, 'brand', '0');
INSERT INTO `taxonomy` VALUES ('3', 'test', '2015-03-10 12:43:10', '2015-03-11 14:24:04', '2015-03-11 14:24:04', 'type', '0');
INSERT INTO `taxonomy` VALUES ('4', 'test thử', '2015-03-10 13:49:01', '2015-03-11 13:42:41', null, 'brand', '0');
INSERT INTO `taxonomy` VALUES ('5', 'asd dsa', '2015-03-11 14:22:22', '2015-03-11 14:26:10', null, 'type', '0');
INSERT INTO `taxonomy` VALUES ('6', 'add another type', '2015-03-11 14:22:59', '2015-03-11 14:22:59', null, 'type', '0');
INSERT INTO `taxonomy` VALUES ('7', 'and other type 1', '2015-03-11 14:23:39', '2015-03-11 14:26:18', null, 'type', '0');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
