/*
 Navicat Premium Data Transfer

 Source Server         : DB_Local
 Source Server Type    : MySQL
 Source Server Version : 100421
 Source Host           : localhost:3306
 Source Schema         : project_laravel

 Target Server Type    : MySQL
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 22/05/2022 13:07:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for brands
-- ----------------------------
DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `disk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of brands
-- ----------------------------
INSERT INTO `brands` VALUES (1, 'Adidas', 'brands/qQiLhQvDmotns5jblxmhdI8lzUrYFGykPynGJSP2.jpg', 'images', '2022-05-12 12:44:27', '2022-05-12 13:53:40');
INSERT INTO `brands` VALUES (6, 'Nike', 'brands/nLEPoTvoAL0t2g8iMsxPCwyljqHmMiJ159SbOIF9.jpg', 'images', '2022-05-20 19:45:08', '2022-05-20 19:45:08');
INSERT INTO `brands` VALUES (7, 'Vans', 'brands/0vAhmP5ZgRk28h8Fi5nFdljroSN1hbsah3mFfh0w.jpg', 'images', '2022-05-20 19:47:31', '2022-05-20 19:47:31');
INSERT INTO `brands` VALUES (8, 'MC Queen', 'brands/ILPso54WTrwD7yaCjtmgWsaMTvtYsb1f42hw8N3O.png', 'images', '2022-05-20 19:49:46', '2022-05-22 10:56:39');
INSERT INTO `brands` VALUES (9, 'Converse', 'brands/XBbPF9nzhTV7eQfMYVwbgaQy1CZ3dxynFxeEAqEC.jpg', 'images', '2022-05-20 19:51:49', '2022-05-20 19:51:49');
INSERT INTO `brands` VALUES (10, 'Balenciaga', 'brands/6Oh97ao19D9G4raakJzmvTQQHI5bc2KI7XXyp1fi.jpg', 'images', '2022-05-20 19:53:35', '2022-05-20 19:53:35');
INSERT INTO `brands` VALUES (11, 'Valentino Rudy', 'brands/hrEw2FzdwYwFtXFEYtDSHiOn2qEVKNtRTqcDRBYh.png', 'images', '2022-05-22 09:50:35', '2022-05-22 09:50:35');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `disk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `images` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (11, 'Gi??y th??? thao', NULL, NULL, 'giay-adidas', '2022-05-12 02:58:38', '2022-05-12 02:58:38');
INSERT INTO `categories` VALUES (19, 'Gi??y th???i trang', NULL, NULL, 'giay-thoi-trang', '2022-05-20 19:54:47', '2022-05-20 19:54:47');
INSERT INTO `categories` VALUES (20, 'Gi??y t??y', NULL, NULL, 'giay-tay', '2022-05-20 20:49:20', '2022-05-20 20:49:20');
INSERT INTO `categories` VALUES (21, 'Gi??y ??i m??a', NULL, NULL, 'giay-di-mua', '2022-05-20 20:49:34', '2022-05-20 20:49:34');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES (17, 8, 15, 'Gi??y ?????p', 0, '2022-05-20 18:28:19', '2022-05-22 03:39:19');
INSERT INTO `comments` VALUES (18, 8, 28, 'Gi??y ?????p,,,', 0, '2022-05-22 03:09:37', '2022-05-22 03:09:37');
INSERT INTO `comments` VALUES (19, 8, 28, 'Gi??y ??i t???t', 0, '2022-05-22 03:10:53', '2022-05-22 03:10:53');
INSERT INTO `comments` VALUES (20, 8, 9, 'Gi??y  ?????p', 0, '2022-05-22 10:40:01', '2022-05-22 10:40:01');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int NOT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `disk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 234 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES (66, '1652324753_MG_4978.jpg', 9, 'http://127.0.0.1:8000/images/products/1652324753_MG_4978.jpg', 'images', '2022-05-12 03:05:53', '2022-05-12 03:05:53');
INSERT INTO `images` VALUES (67, '1652324753_MG_4979.jpg', 9, 'http://127.0.0.1:8000/images/products/1652324753_MG_4979.jpg', 'images', '2022-05-12 03:05:53', '2022-05-12 03:05:53');
INSERT INTO `images` VALUES (68, '1652324753_MG_4980.jpg', 9, 'http://127.0.0.1:8000/images/products/1652324753_MG_4980.jpg', 'images', '2022-05-12 03:05:53', '2022-05-12 03:05:53');
INSERT INTO `images` VALUES (69, '1652324753_MG_4981.jpg', 9, 'http://127.0.0.1:8000/images/products/1652324753_MG_4981.jpg', 'images', '2022-05-12 03:05:53', '2022-05-12 03:05:53');
INSERT INTO `images` VALUES (70, '1652327426_z2291635574804_53cb4f79d5300da1f852db4ba55d65d9-scaled.jpg', 10, 'http://127.0.0.1:8000/images/products/1652327426_z2291635574804_53cb4f79d5300da1f852db4ba55d65d9-scaled.jpg', 'images', '2022-05-12 03:50:26', '2022-05-12 03:50:26');
INSERT INTO `images` VALUES (71, '1652327426_z2291635578513_6fb2bcd7acc31a049683fdb77cfdd480-scaled.jpg', 10, 'http://127.0.0.1:8000/images/products/1652327426_z2291635578513_6fb2bcd7acc31a049683fdb77cfdd480-scaled.jpg', 'images', '2022-05-12 03:50:26', '2022-05-12 03:50:26');
INSERT INTO `images` VALUES (72, '1652327426_z2291635581460_bdb94e710df15755dba7aaa3098029b1-scaled.jpg', 10, 'http://127.0.0.1:8000/images/products/1652327426_z2291635581460_bdb94e710df15755dba7aaa3098029b1-scaled.jpg', 'images', '2022-05-12 03:50:26', '2022-05-12 03:50:26');
INSERT INTO `images` VALUES (73, '1652327426_z2291635585201_99450e3fc8b79374a790c7b36819a68e-scaled.jpg', 10, 'http://127.0.0.1:8000/images/products/1652327426_z2291635585201_99450e3fc8b79374a790c7b36819a68e-scaled.jpg', 'images', '2022-05-12 03:50:26', '2022-05-12 03:50:26');
INSERT INTO `images` VALUES (78, '1652328663_MG_7089.jpg', 11, 'http://127.0.0.1:8000/images/products/1652328663_MG_7089.jpg', 'images', '2022-05-12 04:11:03', '2022-05-12 04:11:03');
INSERT INTO `images` VALUES (79, '1652328663_MG_7090.jpg', 11, 'http://127.0.0.1:8000/images/products/1652328663_MG_7090.jpg', 'images', '2022-05-12 04:11:03', '2022-05-12 04:11:03');
INSERT INTO `images` VALUES (80, '1652328663_MG_7091.jpg', 11, 'http://127.0.0.1:8000/images/products/1652328663_MG_7091.jpg', 'images', '2022-05-12 04:11:03', '2022-05-12 04:11:03');
INSERT INTO `images` VALUES (81, '1652328663_MG_7092.jpg', 11, 'http://127.0.0.1:8000/images/products/1652328663_MG_7092.jpg', 'images', '2022-05-12 04:11:03', '2022-05-12 04:11:03');
INSERT INTO `images` VALUES (82, '1652328996_MG_7083.jpg', 12, 'http://127.0.0.1:8000/images/products/1652328996_MG_7083.jpg', 'images', '2022-05-12 04:16:36', '2022-05-12 04:16:36');
INSERT INTO `images` VALUES (83, '1652328996_MG_7084.jpg', 12, 'http://127.0.0.1:8000/images/products/1652328996_MG_7084.jpg', 'images', '2022-05-12 04:16:36', '2022-05-12 04:16:36');
INSERT INTO `images` VALUES (84, '1652328996_MG_7085.jpg', 12, 'http://127.0.0.1:8000/images/products/1652328996_MG_7085.jpg', 'images', '2022-05-12 04:16:36', '2022-05-12 04:16:36');
INSERT INTO `images` VALUES (85, '1652328996_MG_7086.jpg', 12, 'http://127.0.0.1:8000/images/products/1652328996_MG_7086.jpg', 'images', '2022-05-12 04:16:36', '2022-05-12 04:16:36');
INSERT INTO `images` VALUES (86, '1652329293_z2077558321688_9048fd5ff5d1734365f111e2e3134040.jpg', 13, 'http://127.0.0.1:8000/images/products/1652329293_z2077558321688_9048fd5ff5d1734365f111e2e3134040.jpg', 'images', '2022-05-12 04:21:33', '2022-05-12 04:21:33');
INSERT INTO `images` VALUES (87, '1652329293_z2077558358938_253b54356da6fef17475a7d45c822971.jpg', 13, 'http://127.0.0.1:8000/images/products/1652329293_z2077558358938_253b54356da6fef17475a7d45c822971.jpg', 'images', '2022-05-12 04:21:33', '2022-05-12 04:21:33');
INSERT INTO `images` VALUES (88, '1652329293_z2077558385645_dcfa059238a2d583ff8a30b616b847aa (1).jpg', 13, 'http://127.0.0.1:8000/images/products/1652329293_z2077558385645_dcfa059238a2d583ff8a30b616b847aa (1).jpg', 'images', '2022-05-12 04:21:33', '2022-05-12 04:21:33');
INSERT INTO `images` VALUES (89, '1652329293_z2077558385645_dcfa059238a2d583ff8a30b616b847aa.jpg', 13, 'http://127.0.0.1:8000/images/products/1652329293_z2077558385645_dcfa059238a2d583ff8a30b616b847aa.jpg', 'images', '2022-05-12 04:21:34', '2022-05-12 04:21:34');
INSERT INTO `images` VALUES (90, '1652329410_MG_4335.jpg', 14, 'http://127.0.0.1:8000/images/products/1652329410_MG_4335.jpg', 'images', '2022-05-12 04:23:30', '2022-05-12 04:23:30');
INSERT INTO `images` VALUES (91, '1652329410_MG_4336.jpg', 14, 'http://127.0.0.1:8000/images/products/1652329410_MG_4336.jpg', 'images', '2022-05-12 04:23:30', '2022-05-12 04:23:30');
INSERT INTO `images` VALUES (92, '1652329410_MG_4338.jpg', 14, 'http://127.0.0.1:8000/images/products/1652329410_MG_4338.jpg', 'images', '2022-05-12 04:23:30', '2022-05-12 04:23:30');
INSERT INTO `images` VALUES (93, '1652329410_MG_4340.jpg', 14, 'http://127.0.0.1:8000/images/products/1652329410_MG_4340.jpg', 'images', '2022-05-12 04:23:30', '2022-05-12 04:23:30');
INSERT INTO `images` VALUES (94, '1652329538_z2273641545422_7da51908ec5b467380057ce9258addf9-scaled.jpg', 15, 'http://127.0.0.1:8000/images/products/1652329538_z2273641548302_a0c2ba54a62a9050c4707372598092b5-scaled.jpg', 'images', '2022-05-12 04:25:38', '2022-05-12 04:25:38');
INSERT INTO `images` VALUES (95, '1652329538_z2273641548302_a0c2ba54a62a9050c4707372598092b5-scaled.jpg', 15, 'http://127.0.0.1:8000/images/products/1652329538_z2273641545422_7da51908ec5b467380057ce9258addf9-scaled.jpg', 'images', '2022-05-12 04:25:38', '2022-05-12 04:25:38');
INSERT INTO `images` VALUES (96, '1652329538_z2273641550097_194a8501b6dab675f18a748790dda5eb-scaled.jpg', 15, 'http://127.0.0.1:8000/images/products/1652329538_z2273641553805_3ec4ecae0afb22346145501c58d1d03c-scaled.jpg', 'images', '2022-05-12 04:25:38', '2022-05-12 04:25:38');
INSERT INTO `images` VALUES (97, '1652329538_z2273641553805_3ec4ecae0afb22346145501c58d1d03c-scaled.jpg', 15, 'http://127.0.0.1:8000/images/products/1652329538_z2273641550097_194a8501b6dab675f18a748790dda5eb-scaled.jpg', 'images', '2022-05-12 04:25:38', '2022-05-12 04:25:38');
INSERT INTO `images` VALUES (134, '1653129349_z2216607970275_b8fe23be35a5fc16cfec3e744cd6f6ca-scaled.jpg', 25, 'http://127.0.0.1:8000/images/products/1653129349_z2216607970275_b8fe23be35a5fc16cfec3e744cd6f6ca-scaled.jpg', 'images', '2022-05-21 10:35:49', '2022-05-21 10:35:49');
INSERT INTO `images` VALUES (135, '1653129349_z2216607970361_185bd764fbbfc09647e48d3fff39da1c-scaled.jpg', 25, 'http://127.0.0.1:8000/images/products/1653129349_z2216607970361_185bd764fbbfc09647e48d3fff39da1c-scaled.jpg', 'images', '2022-05-21 10:35:49', '2022-05-21 10:35:49');
INSERT INTO `images` VALUES (136, '1653129349_z2216607977968_00230a8098dfc278b76deaa07ae76abc-scaled.jpg', 25, 'http://127.0.0.1:8000/images/products/1653129349_z2216607977968_00230a8098dfc278b76deaa07ae76abc-scaled.jpg', 'images', '2022-05-21 10:35:49', '2022-05-21 10:35:49');
INSERT INTO `images` VALUES (137, '1653129349_z2216608000317_c329b4c6e585192cefe08bf730972861-scaled.jpg', 25, 'http://127.0.0.1:8000/images/products/1653129349_z2216608000317_c329b4c6e585192cefe08bf730972861-scaled.jpg', 'images', '2022-05-21 10:35:49', '2022-05-21 10:35:49');
INSERT INTO `images` VALUES (138, '1653130507_MG_7262.jpg', 26, 'http://127.0.0.1:8000/images/products/1653130507_MG_7262.jpg', 'images', '2022-05-21 10:55:07', '2022-05-21 10:55:07');
INSERT INTO `images` VALUES (139, '1653130507_MG_7263.jpg', 26, 'http://127.0.0.1:8000/images/products/1653130507_MG_7263.jpg', 'images', '2022-05-21 10:55:07', '2022-05-21 10:55:07');
INSERT INTO `images` VALUES (140, '1653130507_MG_7264.jpg', 26, 'http://127.0.0.1:8000/images/products/1653130507_MG_7264.jpg', 'images', '2022-05-21 10:55:07', '2022-05-21 10:55:07');
INSERT INTO `images` VALUES (141, '1653130507_MG_7265.jpg', 26, 'http://127.0.0.1:8000/images/products/1653130507_MG_7265.jpg', 'images', '2022-05-21 10:55:07', '2022-05-21 10:55:07');
INSERT INTO `images` VALUES (142, '1653130642_MG_0351.jpg', 27, 'http://127.0.0.1:8000/images/products/1653130642_MG_0351.jpg', 'images', '2022-05-21 10:57:22', '2022-05-21 10:57:22');
INSERT INTO `images` VALUES (143, '1653130642_MG_0352.jpg', 27, 'http://127.0.0.1:8000/images/products/1653130642_MG_0352.jpg', 'images', '2022-05-21 10:57:22', '2022-05-21 10:57:22');
INSERT INTO `images` VALUES (144, '1653130642_MG_0354.jpg', 27, 'http://127.0.0.1:8000/images/products/1653130642_MG_0354.jpg', 'images', '2022-05-21 10:57:22', '2022-05-21 10:57:22');
INSERT INTO `images` VALUES (145, '1653130642_MG_0357.jpg', 27, 'http://127.0.0.1:8000/images/products/1653130642_MG_0357.jpg', 'images', '2022-05-21 10:57:22', '2022-05-21 10:57:22');
INSERT INTO `images` VALUES (146, '1653162348_xoa-phong-2-696.jpg', 28, 'http://127.0.0.1:8000/images/products/1653162348_xoa-phong-2-696.jpg', 'images', '2022-05-22 02:45:48', '2022-05-22 02:45:48');
INSERT INTO `images` VALUES (147, '1653162348_xoa-phong-2-697.jpg', 28, 'http://127.0.0.1:8000/images/products/1653162348_xoa-phong-2-697.jpg', 'images', '2022-05-22 02:45:48', '2022-05-22 02:45:48');
INSERT INTO `images` VALUES (148, '1653162348_xoa-phong-2-698.jpg', 28, 'http://127.0.0.1:8000/images/products/1653162348_xoa-phong-2-698.jpg', 'images', '2022-05-22 02:45:48', '2022-05-22 02:45:48');
INSERT INTO `images` VALUES (149, '1653162348_xoa-phong-2-699.jpg', 28, 'http://127.0.0.1:8000/images/products/1653162348_xoa-phong-2-699.jpg', 'images', '2022-05-22 02:45:48', '2022-05-22 02:45:48');
INSERT INTO `images` VALUES (150, '1653185106_MG_6943.jpg', 29, 'http://127.0.0.1:8000/images/products/1653185106_MG_6943.jpg', 'images', '2022-05-22 09:05:06', '2022-05-22 09:05:06');
INSERT INTO `images` VALUES (151, '1653185106_MG_6944.jpg', 29, 'http://127.0.0.1:8000/images/products/1653185106_MG_6944.jpg', 'images', '2022-05-22 09:05:06', '2022-05-22 09:05:06');
INSERT INTO `images` VALUES (152, '1653185106_MG_6945.jpg', 29, 'http://127.0.0.1:8000/images/products/1653185106_MG_6945.jpg', 'images', '2022-05-22 09:05:06', '2022-05-22 09:05:06');
INSERT INTO `images` VALUES (153, '1653185106_MG_6946.jpg', 29, 'http://127.0.0.1:8000/images/products/1653185106_MG_6946.jpg', 'images', '2022-05-22 09:05:06', '2022-05-22 09:05:06');
INSERT INTO `images` VALUES (154, '1653185373_xoa-phong-2-688.jpg', 30, 'http://127.0.0.1:8000/images/products/1653185373_xoa-phong-2-688.jpg', 'images', '2022-05-22 09:09:33', '2022-05-22 09:09:33');
INSERT INTO `images` VALUES (155, '1653185373_xoa-phong-2-689.jpg', 30, 'http://127.0.0.1:8000/images/products/1653185373_xoa-phong-2-689.jpg', 'images', '2022-05-22 09:09:33', '2022-05-22 09:09:33');
INSERT INTO `images` VALUES (156, '1653185373_xoa-phong-2-690.jpg', 30, 'http://127.0.0.1:8000/images/products/1653185373_xoa-phong-2-690.jpg', 'images', '2022-05-22 09:09:33', '2022-05-22 09:09:33');
INSERT INTO `images` VALUES (157, '1653185373_xoa-phong-2-691.jpg', 30, 'http://127.0.0.1:8000/images/products/1653185373_xoa-phong-2-691.jpg', 'images', '2022-05-22 09:09:33', '2022-05-22 09:09:33');
INSERT INTO `images` VALUES (158, '1653185626_z2220226635250_4d426abccf008e8034bcd741b5ba5dd5-scaled.jpg', 31, 'http://127.0.0.1:8000/images/products/1653185626_z2220226635250_4d426abccf008e8034bcd741b5ba5dd5-scaled.jpg', 'images', '2022-05-22 09:13:46', '2022-05-22 09:13:46');
INSERT INTO `images` VALUES (159, '1653185626_z2220226635253_5e442812a326f6b57a778f416e6f3a02-scaled.jpg', 31, 'http://127.0.0.1:8000/images/products/1653185626_z2220226635253_5e442812a326f6b57a778f416e6f3a02-scaled.jpg', 'images', '2022-05-22 09:13:46', '2022-05-22 09:13:46');
INSERT INTO `images` VALUES (160, '1653185626_z2220226635264_48b9a0dbafe27176c8500afb246624a9-scaled.jpg', 31, 'http://127.0.0.1:8000/images/products/1653185626_z2220226635264_48b9a0dbafe27176c8500afb246624a9-scaled.jpg', 'images', '2022-05-22 09:13:46', '2022-05-22 09:13:46');
INSERT INTO `images` VALUES (161, '1653185626_z2220226635266_d928b1eeb3a5e7cdd1bcdc180617b0bb-scaled.jpg', 31, 'http://127.0.0.1:8000/images/products/1653185626_z2220226635266_d928b1eeb3a5e7cdd1bcdc180617b0bb-scaled.jpg', 'images', '2022-05-22 09:13:46', '2022-05-22 09:13:46');
INSERT INTO `images` VALUES (162, '1653185993_MG_5045.jpg', 32, 'http://127.0.0.1:8000/images/products/1653185993_MG_5045.jpg', 'images', '2022-05-22 09:19:53', '2022-05-22 09:19:53');
INSERT INTO `images` VALUES (163, '1653185993_MG_5046.jpg', 32, 'http://127.0.0.1:8000/images/products/1653185993_MG_5046.jpg', 'images', '2022-05-22 09:19:53', '2022-05-22 09:19:53');
INSERT INTO `images` VALUES (164, '1653185993_MG_5047.jpg', 32, 'http://127.0.0.1:8000/images/products/1653185993_MG_5047.jpg', 'images', '2022-05-22 09:19:53', '2022-05-22 09:19:53');
INSERT INTO `images` VALUES (165, '1653185993_MG_5048.jpg', 32, 'http://127.0.0.1:8000/images/products/1653185993_MG_5048.jpg', 'images', '2022-05-22 09:19:53', '2022-05-22 09:19:53');
INSERT INTO `images` VALUES (166, '1653186303_z1344034623842_cd86893e88409c15989bfec0989fc717-scaled.jpg', 33, 'http://127.0.0.1:8000/images/products/1653186303_z1344034623842_cd86893e88409c15989bfec0989fc717-scaled.jpg', 'images', '2022-05-22 09:25:03', '2022-05-22 09:25:03');
INSERT INTO `images` VALUES (167, '1653186303_z2344033733207_41be6d9de4c0a742dc0fe5931d1cde64-scaled.jpg', 33, 'http://127.0.0.1:8000/images/products/1653186303_z2344033733207_41be6d9de4c0a742dc0fe5931d1cde64-scaled.jpg', 'images', '2022-05-22 09:25:03', '2022-05-22 09:25:03');
INSERT INTO `images` VALUES (168, '1653186303_z2344035133762_4be64bfcf37e4c4e4aa59f5bf500f544-scaled.jpg', 33, 'http://127.0.0.1:8000/images/products/1653186303_z2344035133762_4be64bfcf37e4c4e4aa59f5bf500f544-scaled.jpg', 'images', '2022-05-22 09:25:03', '2022-05-22 09:25:03');
INSERT INTO `images` VALUES (169, '1653186303_z2344035644984_21abccc1c22544f979f93e45dd4dc653-scaled.jpg', 33, 'http://127.0.0.1:8000/images/products/1653186303_z2344035644984_21abccc1c22544f979f93e45dd4dc653-scaled.jpg', 'images', '2022-05-22 09:25:03', '2022-05-22 09:25:03');
INSERT INTO `images` VALUES (170, '1653186421_z2077503002271_01faf21b4b4c32f91923383638f5b371.jpg', 34, 'http://127.0.0.1:8000/images/products/1653186421_z2077503002271_01faf21b4b4c32f91923383638f5b371.jpg', 'images', '2022-05-22 09:27:01', '2022-05-22 09:27:01');
INSERT INTO `images` VALUES (171, '1653186421_z2077503029753_3c3dc8d68f95c74dc9127b97c3b3882c.jpg', 34, 'http://127.0.0.1:8000/images/products/1653186421_z2077503029753_3c3dc8d68f95c74dc9127b97c3b3882c.jpg', 'images', '2022-05-22 09:27:01', '2022-05-22 09:27:01');
INSERT INTO `images` VALUES (172, '1653186421_z2077503049735_999c450727bb88232fa43faf8e753103.jpg', 34, 'http://127.0.0.1:8000/images/products/1653186421_z2077503049735_999c450727bb88232fa43faf8e753103.jpg', 'images', '2022-05-22 09:27:01', '2022-05-22 09:27:01');
INSERT INTO `images` VALUES (173, '1653186421_z2077503060485_74d0a291ea703a05059f653862d93af4.jpg', 34, 'http://127.0.0.1:8000/images/products/1653186421_z2077503060485_74d0a291ea703a05059f653862d93af4.jpg', 'images', '2022-05-22 09:27:01', '2022-05-22 09:27:01');
INSERT INTO `images` VALUES (174, '1653186664_z2065884116497_5f96b1b793125d3108d4a0e71d2dbaa7.jpg', 35, 'http://127.0.0.1:8000/images/products/1653186664_z2065884116497_5f96b1b793125d3108d4a0e71d2dbaa7.jpg', 'images', '2022-05-22 09:31:04', '2022-05-22 09:31:04');
INSERT INTO `images` VALUES (175, '1653186664_z2075884072580_f6908c662bf1ddd971668894c585750f.jpg', 35, 'http://127.0.0.1:8000/images/products/1653186664_z2075884072580_f6908c662bf1ddd971668894c585750f.jpg', 'images', '2022-05-22 09:31:04', '2022-05-22 09:31:04');
INSERT INTO `images` VALUES (176, '1653186664_z2075884099511_b10b1c8769ef4dbf879a236d0d02368a.jpg', 35, 'http://127.0.0.1:8000/images/products/1653186664_z2075884099511_b10b1c8769ef4dbf879a236d0d02368a.jpg', 'images', '2022-05-22 09:31:04', '2022-05-22 09:31:04');
INSERT INTO `images` VALUES (177, '1653186664_z2075884130523_b69ab2200f56b47e7e4cf7105c5f5ccb.jpg', 35, 'http://127.0.0.1:8000/images/products/1653186664_z2075884130523_b69ab2200f56b47e7e4cf7105c5f5ccb.jpg', 'images', '2022-05-22 09:31:04', '2022-05-22 09:31:04');
INSERT INTO `images` VALUES (178, '1653186806_z2058675484277_0c275d96eb87ed59af9da37c17a53b9c-scaled.jpg', 36, 'http://127.0.0.1:8000/images/products/1653186806_z2058675484277_0c275d96eb87ed59af9da37c17a53b9c-scaled.jpg', 'images', '2022-05-22 09:33:27', '2022-05-22 09:33:27');
INSERT INTO `images` VALUES (179, '1653186807_z2158675484276_ec136c25f07293422ae8f9e6eb95746c-scaled.jpg', 36, 'http://127.0.0.1:8000/images/products/1653186807_z2158675484276_ec136c25f07293422ae8f9e6eb95746c-scaled.jpg', 'images', '2022-05-22 09:33:27', '2022-05-22 09:33:27');
INSERT INTO `images` VALUES (180, '1653186807_z2158675484292_8d70f8c2f411064f0a3dc2cbc2c1d4a5-scaled.jpg', 36, 'http://127.0.0.1:8000/images/products/1653186807_z2158675484292_8d70f8c2f411064f0a3dc2cbc2c1d4a5-scaled.jpg', 'images', '2022-05-22 09:33:27', '2022-05-22 09:33:27');
INSERT INTO `images` VALUES (181, '1653186807_z2158675484299_546c869dc0deea6f76d97c60ded6726e-scaled.jpg', 36, 'http://127.0.0.1:8000/images/products/1653186807_z2158675484299_546c869dc0deea6f76d97c60ded6726e-scaled.jpg', 'images', '2022-05-22 09:33:27', '2022-05-22 09:33:27');
INSERT INTO `images` VALUES (182, '1653186948_z2534504627240_d3adc7bb9b0862ec11832aadfeac58cb-scaled.jpg', 37, 'http://127.0.0.1:8000/images/products/1653186948_z2534504627240_d3adc7bb9b0862ec11832aadfeac58cb-scaled.jpg', 'images', '2022-05-22 09:35:48', '2022-05-22 09:35:48');
INSERT INTO `images` VALUES (183, '1653186948_z2534504628874_a37c7fd7c005fe6a8508abee7ad7fc48-scaled.jpg', 37, 'http://127.0.0.1:8000/images/products/1653186948_z2534504628874_a37c7fd7c005fe6a8508abee7ad7fc48-scaled.jpg', 'images', '2022-05-22 09:35:48', '2022-05-22 09:35:48');
INSERT INTO `images` VALUES (184, '1653186948_z2534504636051_5e841141e1bae4c2e1c9677dd105648b-scaled.jpg', 37, 'http://127.0.0.1:8000/images/products/1653186948_z2534504636051_5e841141e1bae4c2e1c9677dd105648b-scaled.jpg', 'images', '2022-05-22 09:35:48', '2022-05-22 09:35:48');
INSERT INTO `images` VALUES (185, '1653186948_z2534504642762_02decb48672de2a62525e070cb80a236-scaled.jpg', 37, 'http://127.0.0.1:8000/images/products/1653186948_z2534504642762_02decb48672de2a62525e070cb80a236-scaled.jpg', 'images', '2022-05-22 09:35:48', '2022-05-22 09:35:48');
INSERT INTO `images` VALUES (186, '1653187618_z2534506701449_94c8f679edcb11903629d94626ef34a9.jpg', 38, 'http://127.0.0.1:8000/images/products/1653187618_z2534506701449_94c8f679edcb11903629d94626ef34a9.jpg', 'images', '2022-05-22 09:46:58', '2022-05-22 09:46:58');
INSERT INTO `images` VALUES (187, '1653187618_z2534506702528_c1f761c7047f37ffa3fdf6873e7c47e0.jpg', 38, 'http://127.0.0.1:8000/images/products/1653187618_z2534506702528_c1f761c7047f37ffa3fdf6873e7c47e0.jpg', 'images', '2022-05-22 09:46:58', '2022-05-22 09:46:58');
INSERT INTO `images` VALUES (188, '1653187618_z2534506705661_79cd7a03b5c609c747df3c5cd8067786.jpg', 38, 'http://127.0.0.1:8000/images/products/1653187618_z2534506705661_79cd7a03b5c609c747df3c5cd8067786.jpg', 'images', '2022-05-22 09:46:58', '2022-05-22 09:46:58');
INSERT INTO `images` VALUES (189, '1653187618_z2534506710838_470fbcdd06b2371f36ebb52c72adb1e9.jpg', 38, 'http://127.0.0.1:8000/images/products/1653187618_z2534506710838_470fbcdd06b2371f36ebb52c72adb1e9.jpg', 'images', '2022-05-22 09:46:58', '2022-05-22 09:46:58');
INSERT INTO `images` VALUES (190, '1653188728_4a76945d7fcb17553f8ac310126ae96ca.jpg', 39, 'http://127.0.0.1:8000/images/products/1653188728_4a76945d7fcb17553f8ac310126ae96ca.jpg', 'images', '2022-05-22 10:05:28', '2022-05-22 10:05:28');
INSERT INTO `images` VALUES (191, '1653188728_4ba535e99fe22e3dbd53d93f6cfc9ecd (1).jpg', 39, 'http://127.0.0.1:8000/images/products/1653188728_4ba535e99fe22e3dbd53d93f6cfc9ecd (1).jpg', 'images', '2022-05-22 10:05:28', '2022-05-22 10:05:28');
INSERT INTO `images` VALUES (192, '1653188728_4ba535e99fe22e3dbd53d93f6cfc9ecd.jpg', 39, 'http://127.0.0.1:8000/images/products/1653188728_4ba535e99fe22e3dbd53d93f6cfc9ecd.jpg', 'images', '2022-05-22 10:05:28', '2022-05-22 10:05:28');
INSERT INTO `images` VALUES (193, '1653188728_1186af5377b8e7bcc557bbad35d015ad.jpg', 39, 'http://127.0.0.1:8000/images/products/1653188728_1186af5377b8e7bcc557bbad35d015ad.jpg', 'images', '2022-05-22 10:05:28', '2022-05-22 10:05:28');
INSERT INTO `images` VALUES (194, '1653189029_79fbf8e5260db733c738da1215e9d3f6.jpg', 40, 'http://127.0.0.1:8000/images/products/1653189029_79fbf8e5260db733c738da1215e9d3f6.jpg', 'images', '2022-05-22 10:10:29', '2022-05-22 10:10:29');
INSERT INTO `images` VALUES (195, '1653189029_165e859b616203a72ba9880222ded6db.jpg', 40, 'http://127.0.0.1:8000/images/products/1653189029_165e859b616203a72ba9880222ded6db.jpg', 'images', '2022-05-22 10:10:29', '2022-05-22 10:10:29');
INSERT INTO `images` VALUES (196, '1653189029_3892e498a2162934324af7b162676081.jpg', 40, 'http://127.0.0.1:8000/images/products/1653189029_3892e498a2162934324af7b162676081.jpg', 'images', '2022-05-22 10:10:29', '2022-05-22 10:10:29');
INSERT INTO `images` VALUES (197, '1653189351_51HsXQKRqGL._SR476,476_.jpg', 41, 'http://127.0.0.1:8000/images/products/1653189351_51HsXQKRqGL._SR476,476_.jpg', 'images', '2022-05-22 10:15:51', '2022-05-22 10:15:51');
INSERT INTO `images` VALUES (198, '1653189351_61B8SqIudpL._SR476,476_.jpg', 41, 'http://127.0.0.1:8000/images/products/1653189351_61B8SqIudpL._SR476,476_.jpg', 'images', '2022-05-22 10:15:51', '2022-05-22 10:15:51');
INSERT INTO `images` VALUES (199, '1653189351_71lKR4RsBvL._SR476,476_.jpg', 41, 'http://127.0.0.1:8000/images/products/1653189351_71lKR4RsBvL._SR476,476_.jpg', 'images', '2022-05-22 10:15:51', '2022-05-22 10:15:51');
INSERT INTO `images` VALUES (200, '1653189351_615waIgNjPL._SR476,476_.jpg', 41, 'http://127.0.0.1:8000/images/products/1653189351_615waIgNjPL._SR476,476_.jpg', 'images', '2022-05-22 10:15:51', '2022-05-22 10:15:51');
INSERT INTO `images` VALUES (201, '1653189795_51JsTBnMUSL._SR476,476_.jpg', 42, 'http://127.0.0.1:8000/images/products/1653189795_51JsTBnMUSL._SR476,476_.jpg', 'images', '2022-05-22 10:23:15', '2022-05-22 10:23:15');
INSERT INTO `images` VALUES (202, '1653189795_51VpKyfrSwL._SR476,476_.jpg', 42, 'http://127.0.0.1:8000/images/products/1653189795_51VpKyfrSwL._SR476,476_.jpg', 'images', '2022-05-22 10:23:15', '2022-05-22 10:23:15');
INSERT INTO `images` VALUES (203, '1653189795_71CpgsEtY5L._SR476,476_.jpg', 42, 'http://127.0.0.1:8000/images/products/1653189795_71CpgsEtY5L._SR476,476_.jpg', 'images', '2022-05-22 10:23:15', '2022-05-22 10:23:15');
INSERT INTO `images` VALUES (204, '1653189795_710YnLGHCiL._SR476,476_.jpg', 42, 'http://127.0.0.1:8000/images/products/1653189795_710YnLGHCiL._SR476,476_.jpg', 'images', '2022-05-22 10:23:15', '2022-05-22 10:23:15');
INSERT INTO `images` VALUES (205, '1653189980_xoa-phong-186.jpg', 43, 'http://127.0.0.1:8000/images/products/1653189980_xoa-phong-186.jpg', 'images', '2022-05-22 10:26:20', '2022-05-22 10:26:20');
INSERT INTO `images` VALUES (206, '1653189980_xoa-phong-187-1.jpg', 43, 'http://127.0.0.1:8000/images/products/1653189980_xoa-phong-187-1.jpg', 'images', '2022-05-22 10:26:20', '2022-05-22 10:26:20');
INSERT INTO `images` VALUES (207, '1653189980_xoa-phong-188-1.jpg', 43, 'http://127.0.0.1:8000/images/products/1653189980_xoa-phong-188-1.jpg', 'images', '2022-05-22 10:26:20', '2022-05-22 10:26:20');
INSERT INTO `images` VALUES (208, '1653189980_xoa-phong-189-1.jpg', 43, 'http://127.0.0.1:8000/images/products/1653189980_xoa-phong-189-1.jpg', 'images', '2022-05-22 10:26:20', '2022-05-22 10:26:20');
INSERT INTO `images` VALUES (209, '1653190108_z2115186104022_a7ca4df682ff7d87e37d15bacb598b75.jpg', 44, 'http://127.0.0.1:8000/images/products/1653190108_z2115186104022_a7ca4df682ff7d87e37d15bacb598b75.jpg', 'images', '2022-05-22 10:28:28', '2022-05-22 10:28:28');
INSERT INTO `images` VALUES (210, '1653190108_z2115186104115_6fae68cc7e828689c6fa3ed3ba4bfd37.jpg', 44, 'http://127.0.0.1:8000/images/products/1653190108_z2115186104115_6fae68cc7e828689c6fa3ed3ba4bfd37.jpg', 'images', '2022-05-22 10:28:28', '2022-05-22 10:28:28');
INSERT INTO `images` VALUES (211, '1653190108_z2115186104621_f864a82a410ec61caa59285a3153aa02.jpg', 44, 'http://127.0.0.1:8000/images/products/1653190108_z2115186104621_f864a82a410ec61caa59285a3153aa02.jpg', 'images', '2022-05-22 10:28:28', '2022-05-22 10:28:28');
INSERT INTO `images` VALUES (212, '1653190108_z2115186104964_3a9a62f64349c7a65ceba65b1e905ee1.jpg', 44, 'http://127.0.0.1:8000/images/products/1653190108_z2115186104964_3a9a62f64349c7a65ceba65b1e905ee1.jpg', 'images', '2022-05-22 10:28:28', '2022-05-22 10:28:28');
INSERT INTO `images` VALUES (214, '1653190952_z2216607970275_b8fe23be35a5fc16cfec3e744cd6f6ca-scaled.jpg', 45, 'http://127.0.0.1:8000/images/products/1653190952_z2216607970275_b8fe23be35a5fc16cfec3e744cd6f6ca-scaled.jpg', 'images', '2022-05-22 10:42:32', '2022-05-22 10:42:32');
INSERT INTO `images` VALUES (215, '1653190952_z2216607970361_185bd764fbbfc09647e48d3fff39da1c-scaled.jpg', 45, 'http://127.0.0.1:8000/images/products/1653190952_z2216607970361_185bd764fbbfc09647e48d3fff39da1c-scaled.jpg', 'images', '2022-05-22 10:42:32', '2022-05-22 10:42:32');
INSERT INTO `images` VALUES (216, '1653190952_z2216607977968_00230a8098dfc278b76deaa07ae76abc-scaled.jpg', 45, 'http://127.0.0.1:8000/images/products/1653190952_z2216607977968_00230a8098dfc278b76deaa07ae76abc-scaled.jpg', 'images', '2022-05-22 10:42:32', '2022-05-22 10:42:32');
INSERT INTO `images` VALUES (217, '1653190952_z2216608000317_c329b4c6e585192cefe08bf730972861-scaled.jpg', 45, 'http://127.0.0.1:8000/images/products/1653190952_z2216608000317_c329b4c6e585192cefe08bf730972861-scaled.jpg', 'images', '2022-05-22 10:42:32', '2022-05-22 10:42:32');
INSERT INTO `images` VALUES (218, '1653191139_MG_2141.jpg', 46, 'http://127.0.0.1:8000/images/products/1653191139_MG_2141.jpg', 'images', '2022-05-22 10:45:39', '2022-05-22 10:45:39');
INSERT INTO `images` VALUES (219, '1653191139_MG_2142.jpg', 46, 'http://127.0.0.1:8000/images/products/1653191139_MG_2142.jpg', 'images', '2022-05-22 10:45:39', '2022-05-22 10:45:39');
INSERT INTO `images` VALUES (220, '1653191139_MG_2143.jpg', 46, 'http://127.0.0.1:8000/images/products/1653191139_MG_2143.jpg', 'images', '2022-05-22 10:45:39', '2022-05-22 10:45:39');
INSERT INTO `images` VALUES (221, '1653191139_MG_2144.jpg', 46, 'http://127.0.0.1:8000/images/products/1653191139_MG_2144.jpg', 'images', '2022-05-22 10:45:39', '2022-05-22 10:45:39');
INSERT INTO `images` VALUES (222, '1653191350_z2281256796406_1b6477aaf00bfdb965d19cc2c0ea0742.jpg', 47, 'http://127.0.0.1:8000/images/products/1653191350_z2281256796406_1b6477aaf00bfdb965d19cc2c0ea0742.jpg', 'images', '2022-05-22 10:49:10', '2022-05-22 10:49:10');
INSERT INTO `images` VALUES (223, '1653191350_z3281256733041_8cc32083fc7899c8d0de7f4080945afd.jpg', 47, 'http://127.0.0.1:8000/images/products/1653191350_z3281256733041_8cc32083fc7899c8d0de7f4080945afd.jpg', 'images', '2022-05-22 10:49:10', '2022-05-22 10:49:10');
INSERT INTO `images` VALUES (224, '1653191350_z3281256754972_9200999c5c066310d8fd09f059caa0ec.jpg', 47, 'http://127.0.0.1:8000/images/products/1653191350_z3281256754972_9200999c5c066310d8fd09f059caa0ec.jpg', 'images', '2022-05-22 10:49:10', '2022-05-22 10:49:10');
INSERT INTO `images` VALUES (225, '1653191350_z3281256763162_d3ff700aef5ae1a3bb51e8f865edc2c5.jpg', 47, 'http://127.0.0.1:8000/images/products/1653191350_z3281256763162_d3ff700aef5ae1a3bb51e8f865edc2c5.jpg', 'images', '2022-05-22 10:49:11', '2022-05-22 10:49:11');
INSERT INTO `images` VALUES (226, '1653191473_xoa-phong-206.jpg', 48, 'http://127.0.0.1:8000/images/products/1653191473_xoa-phong-206.jpg', 'images', '2022-05-22 10:51:13', '2022-05-22 10:51:13');
INSERT INTO `images` VALUES (227, '1653191473_xoa-phong-207.jpg', 48, 'http://127.0.0.1:8000/images/products/1653191473_xoa-phong-207.jpg', 'images', '2022-05-22 10:51:13', '2022-05-22 10:51:13');
INSERT INTO `images` VALUES (228, '1653191473_xoa-phong-208.jpg', 48, 'http://127.0.0.1:8000/images/products/1653191473_xoa-phong-208.jpg', 'images', '2022-05-22 10:51:13', '2022-05-22 10:51:13');
INSERT INTO `images` VALUES (229, '1653191473_xoa-phong-209.jpg', 48, 'http://127.0.0.1:8000/images/products/1653191473_xoa-phong-209.jpg', 'images', '2022-05-22 10:51:13', '2022-05-22 10:51:13');
INSERT INTO `images` VALUES (230, '1653199486_z3367119743610_292f8848a6527f0b87451e857f46a354.jpg', 49, 'http://127.0.0.1:8000/images/products/1653199486_z3367119743610_292f8848a6527f0b87451e857f46a354.jpg', 'images', '2022-05-22 13:04:46', '2022-05-22 13:04:46');
INSERT INTO `images` VALUES (231, '1653199486_z3367119829478_8b8bab1ad99734655ee16517a1b560f7.jpg', 49, 'http://127.0.0.1:8000/images/products/1653199486_z3367119829478_8b8bab1ad99734655ee16517a1b560f7.jpg', 'images', '2022-05-22 13:04:46', '2022-05-22 13:04:46');
INSERT INTO `images` VALUES (232, '1653199486_z3367130223380_a5c504000840b9a3ca7d48750c859cf9.jpg', 49, 'http://127.0.0.1:8000/images/products/1653199486_z3367130223380_a5c504000840b9a3ca7d48750c859cf9.jpg', 'images', '2022-05-22 13:04:46', '2022-05-22 13:04:46');
INSERT INTO `images` VALUES (233, '1653199486_z3367130328591_53d5bb4122628274b434ddc485da0388.jpg', 49, 'http://127.0.0.1:8000/images/products/1653199486_z3367130328591_53d5bb4122628274b434ddc485da0388.jpg', 'images', '2022-05-22 13:04:46', '2022-05-22 13:04:46');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 69 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (16, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (17, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (18, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (21, '2022_04_17_162016_add_deleted_at_column_categories_table', 1);
INSERT INTO `migrations` VALUES (39, '2022_04_17_161154_create_categories_table', 2);
INSERT INTO `migrations` VALUES (41, '2022_04_17_191226_create_roles_table', 2);
INSERT INTO `migrations` VALUES (42, '2022_04_17_191353_create_permissions_table', 2);
INSERT INTO `migrations` VALUES (43, '2022_04_17_191530_create_roles_permissions_table', 2);
INSERT INTO `migrations` VALUES (44, '2022_04_17_191713_create_users_roles_table', 2);
INSERT INTO `migrations` VALUES (45, '2022_04_17_192206_create_users_permissions_table', 2);
INSERT INTO `migrations` VALUES (47, '2022_04_19_151756_create_images_table', 2);
INSERT INTO `migrations` VALUES (49, '2022_04_19_152326_create_comments_table', 2);
INSERT INTO `migrations` VALUES (50, '2022_04_19_152554_create_reviews_table', 2);
INSERT INTO `migrations` VALUES (56, '2014_10_12_000000_create_users_table', 4);
INSERT INTO `migrations` VALUES (57, '2022_04_17_154704_add_address_phone_image_disk_status_deleted_at_columns_table_users', 4);
INSERT INTO `migrations` VALUES (60, '2022_04_19_153956_create_order_product_table', 7);
INSERT INTO `migrations` VALUES (61, '2022_04_19_154952_create_orders_table', 7);
INSERT INTO `migrations` VALUES (63, '2022_04_17_180458_create_products_table', 8);
INSERT INTO `migrations` VALUES (64, '2022_04_19_152053_create_brands_table', 9);
INSERT INTO `migrations` VALUES (65, '2022_05_20_125926_add_price_input_colunm_product_table', 10);
INSERT INTO `migrations` VALUES (66, '2022_05_20_173732_add_note_colunm_order_table', 11);
INSERT INTO `migrations` VALUES (68, '2022_05_21_050959_create_statisticals_table', 12);

-- ----------------------------
-- Table structure for order_product
-- ----------------------------
DROP TABLE IF EXISTS `order_product`;
CREATE TABLE `order_product`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(13, 2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 74 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of order_product
-- ----------------------------
INSERT INTO `order_product` VALUES (70, 49, 28, 1, 550000.00, '2022-05-22 03:08:24', '2022-05-22 03:08:24');
INSERT INTO `order_product` VALUES (71, 50, 9, 1, 600000.00, '2022-05-22 10:40:25', '2022-05-22 10:40:25');
INSERT INTO `order_product` VALUES (72, 51, 48, 1, 400000.00, '2022-05-22 12:01:02', '2022-05-22 12:01:02');
INSERT INTO `order_product` VALUES (73, 52, 49, 1, 600000.00, '2022-05-22 13:05:31', '2022-05-22 13:05:31');

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `total` decimal(13, 2) NOT NULL,
  `note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'S???n ph???m-Size 39',
  `status` int NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 53 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES (49, 8, 550000.00, NULL, 4, '2022-05-22 03:08:24', '2022-05-22 03:08:35');
INSERT INTO `orders` VALUES (50, 8, 600000.00, 'size 40', 4, '2022-05-22 10:40:25', '2022-05-22 10:40:42');
INSERT INTO `orders` VALUES (51, 8, 400000.00, 'size 40', 4, '2022-05-22 12:01:02', '2022-05-22 12:01:40');
INSERT INTO `orders` VALUES (52, 8, 600000.00, NULL, 4, '2022-05-22 13:05:31', '2022-05-22 13:05:47');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissions
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `quantity` int NOT NULL DEFAULT 1,
  `price_origin` decimal(13, 2) NOT NULL DEFAULT 0.00,
  `price_sale` decimal(13, 2) NOT NULL DEFAULT 0.00,
  `review_count` int NOT NULL DEFAULT 0,
  `sell_count` int NOT NULL DEFAULT 0,
  `like_count` int NOT NULL DEFAULT 0,
  `user_id` int NOT NULL,
  `brand_id` int NULL DEFAULT NULL,
  `attribute` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL,
  `status` int NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `price_input` decimal(13, 2) NOT NULL DEFAULT 0.00,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 50 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (9, 'Gi??y Alpha.bounce beyond ?????p', 'adidas-alphabounce-beyond-rep', 11, '<p>Ch???t li???u cao c???p, b???n ?????p theo th???i gian. Thi???t k??? th???i trang. Ki???u d&aacute;ng cute phong c&aacute;ch cute. ????? b???n cao. D??? ph???i ?????.</p>\n\n<h1>??&ocirc;i gi&agrave;y ch???y k???t h???p training v???i ????? ???n ?????nh tuy???t ?????i.</h1>\n\n<ul>\n	<li>Upper v???i thi???t k??? l?????i nguy&ecirc;n kh???i h??? tr??? tuy???t v???i cho c&aacute;c chuy???n ?????ng ??a chi???u.</li>\n	<li>?????m midsole &rdquo; ph???n ???ng nhanh&rdquo; ??? ph???n mu tr?????c v&agrave; g&oacute;t ch&acirc;n t???o n&ecirc;n s??? ch???c ch???n cho c&aacute;c b&agrave;i t???p s???c m???nh.</li>\n	<li>Ngo&agrave;i ra Alphabounce c??ng ???????c xem l&agrave; m???u gi&agrave;y th???i trang n??ng ?????ng v???i phong c&aacute;ch thi???t k??? hi???n ?????i.</li>\n</ul>', 88, 1000000.00, 600000.00, 1, 12, 0, 8, 1, NULL, 1, '2022-05-12 03:01:44', '2022-05-22 10:41:12', NULL, 0.00);
INSERT INTO `products` VALUES (10, 'Gi??y Alphabounce Beyond REP Gi?? R???', 'add-alphabounce-beyond-rep-gia-re', 11, '<ul>\r\n	<li>Ki???u d&aacute;ng:&nbsp;Gi&agrave;y sneaker, gi&agrave;y th??? thao</li>\r\n	<li>????? cao:3cm</li>\r\n	<li>M&agrave;u s???c: n&acirc;u kem</li>\r\n	<li>K&iacute;ch c???: 40-43</li>\r\n	<li>Ch???t v???i d???t knitt, &ecirc;m &aacute;i</li>\r\n	<li>????? ??&agrave;n h???i, co d&atilde;n t???t, &ocirc;m kh&iacute;t v???a ch&acirc;n</li>\r\n	<li>????? ??&uacute;c cao su nguy&ecirc;n kh???i, ch???c ch???n.</li>\r\n</ul>', 46, 820000.00, 500000.00, 0, 4, 0, 8, 1, NULL, 1, '2022-05-12 03:50:26', '2022-05-22 03:02:37', NULL, 0.00);
INSERT INTO `products` VALUES (11, 'Adidas Ultra Boost l??? size ?????p gi?? r???', 'adidas-ultra-boost-le-size-dep-gia-re', 11, '<p>Ch???t li???u cao c???p, b???n ?????p theo th???i gian. Thi???t k??? th???i trang. Ki???u d&aacute;ng cute phong c&aacute;ch cute. ????? b???n cao. D??? ph???i ?????.</p>\r\n\r\n<h1>??&ocirc;i gi&agrave;y ch???y k???t h???p training v???i ????? ???n ?????nh tuy???t ?????i.</h1>\r\n\r\n<ul>\r\n	<li>Upper v???i thi???t k??? l?????i nguy&ecirc;n kh???i h??? tr??? tuy???t v???i cho c&aacute;c chuy???n ?????ng ??a chi???u.</li>\r\n	<li>?????m midsole &rdquo; ph???n ???ng nhanh&rdquo; ??? ph???n mu tr?????c v&agrave; g&oacute;t ch&acirc;n t???o n&ecirc;n s??? ch???c ch???n cho c&aacute;c b&agrave;i t???p s???c m???nh.</li>\r\n	<li>Ngo&agrave;i ra Alphabounce c??ng ???????c xem l&agrave; m???u gi&agrave;y th???i trang n??ng ?????ng v???i phong c&aacute;ch thi???t k??? hi???n ?????i.</li>\r\n</ul>', 50, 500000.00, 250000.00, 0, 0, 0, 8, 1, NULL, 1, '2022-05-12 03:59:09', '2022-05-12 04:17:40', NULL, 0.00);
INSERT INTO `products` VALUES (12, 'Adidas EQT Bask Adv Xanh D????ng REP', 'adidas-eqt-bask-adv-xanh-duong-rep', 11, '<ul>\r\n	<li>Ki???u d&aacute;ng:&nbsp;Gi&agrave;y sneaker, gi&agrave;y th??? thao</li>\r\n	<li>????? cao:3cm</li>\r\n	<li>M&agrave;u s???c: n&acirc;u kem</li>\r\n	<li>K&iacute;ch c???: 40-43</li>\r\n	<li>Ch???t v???i d???t knitt, &ecirc;m &aacute;i</li>\r\n	<li>????? ??&agrave;n h???i, co d&atilde;n t???t, &ocirc;m kh&iacute;t v???a ch&acirc;n</li>\r\n	<li>????? ??&uacute;c cao su nguy&ecirc;n kh???i, ch???c ch???n.</li>\r\n</ul>', 50, 500000.00, 250000.00, 0, 0, 0, 8, 1, NULL, 1, '2022-05-12 04:16:36', '2022-05-12 04:16:36', NULL, 0.00);
INSERT INTO `products` VALUES (13, 'Gi??y Th??? Thao XSPORT A102 Ch???t L?????ng Cao', 'giay-the-thao-xsport-a102-chat-luong-cao', 11, '<h3>Ki???u d&aacute;ng ????n gi???n nh??? nh&agrave;ng, &ecirc;m ch&acirc;n.</h3>\r\n\r\n<ul>\r\n	<li>??&ocirc;i gi&agrave;y v???a mang phong c&aacute;ch l?????t v&aacute;n, v???a mang phong c&aacute;ch ???????ng ph???</li>\r\n	<li>C&oacute; th??? mix ?????p d??? d&agrave;ng v???i h???u h???t t???t c??? c&aacute;c b??? qu???n &aacute;o, nhi???u phong c&aacute;ch kh&aacute;c nhau.</li>\r\n	<li>&nbsp;M???i s???n ph???m ?????u mang c&aacute;c ?????c tr??ng, chi ti???t nguy&ecirc;n b???n v???i 3 ???????ng s???c logo c???a Adidas v&agrave; ph???n ng&oacute;n ch&acirc;n b???ng cao su</li>\r\n</ul>', 60, 500000.00, 300000.00, 0, 0, 0, 8, 1, NULL, 1, '2022-05-12 04:21:33', '2022-05-12 04:21:33', NULL, 0.00);
INSERT INTO `products` VALUES (14, 'Gi??y Th??? Thao XSPORT Prophere Rep', 'giay-the-thao-xsport-prophere-rep', 11, '<h3><strong>Adidas Prophere -&nbsp; ??&ocirc;i gi&agrave;y c???c ch???t nh??ng gi&aacute; r???t ??u Vi???t</strong></h3>\r\n\r\n<ul>\r\n	<li>Th???t s??? Adidas ??&atilde; t???o ra m???t s???n ph???m th&uacute; v??? d&agrave;nh cho c&aacute;c sneakerhead tr&ecirc;n to&agrave;n th??? gi???i: kh&ocirc;ng gi???i h???n, kh&ocirc;ng gi&aacute; tr???, ch??? ????n gi???n l&agrave; ?????p v&agrave; ch???t l?????ng</li>\r\n	<li>&nbsp;B???n ho&agrave;n to&agrave;n c&oacute; th??? mang ??&ocirc;i gi&agrave;y cho b???t k&igrave; ho???t ?????ng th?????ng ng&agrave;y n&agrave;o: ??i l&agrave;m, ??i h???c, ??i bar v&agrave; c??? t???p gym</li>\r\n	<li>????? Chunky n??ng ?????ng, m???nh m??? v&agrave; h???m h???</li>\r\n</ul>', 49, 700000.00, 400000.00, 0, 1, 0, 8, 1, NULL, 1, '2022-05-12 04:23:30', '2022-05-20 17:55:23', NULL, 0.00);
INSERT INTO `products` VALUES (15, 'Gi??y XSPORT ADD Ultra Boost 6.0 REP', 'giay-xsport-add-ultra-boost-60-rep', 11, '<ul>\r\n	<li>Ki???u d&aacute;ng:&nbsp;Gi&agrave;y sneaker, gi&agrave;y th??? thao</li>\r\n	<li>????? cao:3cm</li>\r\n	<li>M&agrave;u s???c: H???ng, ??en, tr???ng, ghi</li>\r\n	<li>K&iacute;ch c???: 36-43</li>\r\n	<li>Ch???t v???i d???t knitt, &ecirc;m &aacute;i</li>\r\n	<li>????? ??&agrave;n h???i, co d&atilde;n t???t, &ocirc;m kh&iacute;t v???a ch&acirc;n</li>\r\n	<li>????? ??&uacute;c cao su nguy&ecirc;n kh???i, ch???c ch???n.</li>\r\n</ul>', 42, 500000.00, 300000.00, 1, 8, 0, 8, 1, NULL, 1, '2022-05-12 04:25:38', '2022-05-20 18:28:30', NULL, 200000.00);
INSERT INTO `products` VALUES (25, 'Gi??y XSPORT ADD Alphabounce Beyond X??m H???ng', 'giay-xsport-add-alphabounce-beyond-xam-hong', 11, '<ul>\r\n	<li>Ki???u d&aacute;ng:&nbsp;Gi&agrave;y sneaker, gi&agrave;y th??? thao</li>\r\n	<li>????? cao:3cm</li>\r\n	<li>M&agrave;u s???c: H???ng</li>\r\n	<li>K&iacute;ch c???: 36-39</li>\r\n	<li>Ch???t v???i d???t knitt, &ecirc;m &aacute;i</li>\r\n	<li>????? ??&agrave;n h???i, co d&atilde;n t???t, &ocirc;m kh&iacute;t v???a ch&acirc;n</li>\r\n	<li>????? ??&uacute;c cao su nguy&ecirc;n kh???i, ch???c ch???n.</li>\r\n</ul>', 50, 400000.00, 300000.00, 0, 0, 0, 8, 1, NULL, 1, '2022-05-21 10:35:48', '2022-05-21 10:35:48', NULL, 100000.00);
INSERT INTO `products` VALUES (26, 'Converse 1970s V??ng REP 1:1', 'converse-1970s-vang-rep-11', 19, '<h3>Thi???t k??? ?????c ??&aacute;o v???i ch???t ri&ecirc;ng c???a Yeezy.</h3>\r\n\r\n<ul>\r\n	<li>Ch???t v???i primeknit co d&atilde;n linh ho???t, si&ecirc;u nh???, si&ecirc;u &ecirc;m.</li>\r\n	<li>Outfit mang ?????m v??? hi???n ?????i, cu???n h&uacute;t.</li>\r\n	<li>????? boost t???o ????? n???y cao, ??&agrave;n h???i t???t, b?????c ??i nh??? nh&agrave;ng.</li>\r\n</ul>', 49, 500000.00, 400000.00, 0, 1, 0, 8, 9, NULL, 1, '2022-05-21 10:55:07', '2022-05-22 02:30:32', NULL, 300000.00);
INSERT INTO `products` VALUES (27, 'Gi??y Th??? Thao XSPORT  Yeezy boost sesame REP', 'giay-the-thao-xsport-yeezy-boost-sesame-rep', 19, '<ul>\r\n	<li>Ki???u d&aacute;ng: Gi&agrave;y sneaker, gi&agrave;y th??? thao</li>\r\n	<li>Ch???t li???u: V???i da</li>\r\n	<li>????? cao:3cm</li>\r\n	<li>M&agrave;u s???c: ????? &ndash; ??en &ndash; Kem</li>\r\n	<li>????? ??&agrave;n h???i, co d&atilde;n t???t, &ocirc;m kh&iacute;t v???a ch&acirc;n</li>\r\n	<li>????? cao su ??&uacute;c nguy&ecirc;n kh???i, ch???ng tr??n tr?????t</li>\r\n</ul>\r\n\r\n<div class=\"ddict_btn\" style=\"left:276.646px; top:109px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>', 55, 400000.00, 350000.00, 0, 5, 0, 8, 9, NULL, 1, '2022-05-21 10:57:22', '2022-05-22 03:01:59', NULL, 300000.00);
INSERT INTO `products` VALUES (28, 'Gi??y Th??? Thao XSPORT Con.verse C??? Cao', 'giay-the-thao-xsport-converse-co-cao', 11, '<p>Ch???t li???u cao c???p, b???n ?????p theo th???i gian. Thi???t k??? th???i trang. Ki???u d&aacute;ng phong c&aacute;ch. ????? b???n cao. D??? ph???i ?????.</p>', 56, 600000.00, 550000.00, 2, 4, 0, 8, 1, NULL, 1, '2022-05-22 02:45:48', '2022-05-22 03:37:33', NULL, 500000.00);
INSERT INTO `products` VALUES (29, 'Gi??y Th??? Thao XSPORT Conver.se cao c??? 1970s', 'giay-the-thao-xsport-converse-cao-co-1970s', 19, '<h3>KI???U D&Aacute;NG RETRO, VINTAGE HUY???N THO???I</h3>\r\n\r\n<ul>\r\n	<li>Ch???t v???i canvas d&agrave;y d???n 340g, form gi&agrave;y c???ng c&aacute;p.</li>\r\n	<li>????? gi&agrave;y cao 3.5cm m&agrave;u tr???ng ng&agrave; v&agrave; ???????c ph??? b&oacute;ng ????? d??? d&agrave;ng d??? v??? sinh.</li>\r\n	<li>?????m ch&acirc;n Ortholite m???m m???i h??? tr??? ??i l???i c??? ng&agrave;y.</li>\r\n	<li>&nbsp;Khoen x??? l??? gi&agrave;y v&agrave; khoen b&ecirc;n h&ocirc;ng gi&agrave;y ???????c l&agrave;m t??? kim lo???i cao c???p ch???ng r??? s&eacute;t.</li>\r\n</ul>', 50, 500000.00, 300000.00, 0, 0, 0, 16, 9, NULL, 1, '2022-05-22 09:05:06', '2022-05-22 09:05:06', NULL, 200000.00);
INSERT INTO `products` VALUES (30, 'Gi??y Th??? Thao XSPORT Con.verse C??? Th???p', 'giay-the-thao-xsport-converse-co-thap', 19, '<h3>KI???U D&Aacute;NG RETRO, VINTAGE HUY???N THO???I</h3>\r\n\r\n<ul>\r\n	<li>Ch???t v???i d&agrave;y d???n, form gi&agrave;y c???ng c&aacute;p.</li>\r\n	<li>????? gi&agrave;y cao ???????c ph??? b&oacute;ng ????? d??? d&agrave;ng d??? v??? sinh.</li>\r\n	<li>?????m ch&acirc;n Ortholite m???m m???i h??? tr??? ??i l???i c??? ng&agrave;y.</li>\r\n	<li>&nbsp;Khoen x??? l??? gi&agrave;y v&agrave; khoen b&ecirc;n h&ocirc;ng gi&agrave;y ???????c l&agrave;m t??? kim lo???i cao c???p ch???ng r??? s&eacute;t</li>\r\n</ul>', 50, 500000.00, 400000.00, 0, 0, 0, 8, 9, NULL, 1, '2022-05-22 09:09:33', '2022-05-22 09:09:33', NULL, 300000.00);
INSERT INTO `products` VALUES (31, 'Gi??y Th??? Thao XSPORT Ni.ke Jordan  Retro Off White Kem', 'giay-the-thao-xsport-nike-jordan-retro-off-white-kem', 19, '<ul>\r\n	<li>Ki???u d&aacute;ng:&nbsp;Gi&agrave;y sneaker, gi&agrave;y th??? thao</li>\r\n	<li>Ch???t li???u: Da tr??n</li>\r\n	<li>????? cao: 3cm</li>\r\n	<li>M&agrave;u s???c: kem</li>\r\n	<li>K&iacute;ch c???: ????? lo???i</li>\r\n	<li>Ch???t li???u v???i da, d??? l&agrave;m s???ch, &ecirc;m ch&acirc;n</li>\r\n	<li>????? ??&agrave;n h???i, co d&atilde;n t???t, &ocirc;m kh&iacute;t v???a ch&acirc;n</li>\r\n	<li>????? ??&uacute;c cao su nguy&ecirc;n kh???i, ch???c ch???n</li>\r\n</ul>', 30, 400000.00, 300000.00, 0, 0, 0, 8, 6, NULL, 1, '2022-05-22 09:13:46', '2022-05-22 09:13:46', NULL, 200000.00);
INSERT INTO `products` VALUES (32, 'Gi??y Th??? Thao XSPORT Ni.ke Air Force 1 Full Tr???ng', 'giay-the-thao-xsport-nike-air-force-1-full-trang', 11, '<h3>THI???T K??? G???N G&Agrave;NG, ?????P M???T, C&Aacute; T&Iacute;NH.</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>???????c l&agrave;m t??? ch???t li???u da ?????c tr??ng v???i ch???t l?????ng ho&agrave;n h???o</li>\r\n	<li>Nike Air Force 1 ???????c thi???t k??? h?????ng t???i s??? ????n gi???n nh??ng v&ocirc; c&ugrave;ng tinh t???. ??&acirc;y l&agrave; s??? l???a ch???n ho&agrave;n h???o cho c&aacute;c t&iacute;n ????? y&ecirc;u th??? thao khi c&oacute; th??? d??? d&agrave;ng ph???i h???p trang ph???c h???ng ng&agrave;y ????? kh???ng ?????nh phong c&aacute;ch th???i trang.</li>\r\n	<li>Ph???i m&agrave;u ????n gi???n nh??ng v&ocirc; c&ugrave;ng tinh t???.</li>\r\n</ul>', 20, 400000.00, 300000.00, 0, 0, 0, 8, 6, NULL, 1, '2022-05-22 09:19:53', '2022-05-22 09:19:53', NULL, 200000.00);
INSERT INTO `products` VALUES (33, 'Gi??y Th??? Thao XSPORT Ni.ke air shadow Rep 1:1', 'giay-the-thao-xsport-nike-air-shadow-rep-11', 19, '<p>Gi&agrave;y Nike Air Force 1 Shadow l&agrave; m???t trong nh???ng s???n ph???m m???i nh???t.</p>\r\n\r\n<p>V???i t???t c??? nh???ng ai ??&atilde; s??? h???u ??&ocirc;i gi&agrave;y Nike Air Force 1 Shadow ?????u kh???ng ?????nh r???ng ch???t l?????ng v&agrave; m???u m&atilde; m&agrave; n&oacute; mang l???i l&agrave; v&ocirc; c&ugrave;ng t???t.&nbsp;C&ograve;n nh???ng ng?????i ch??a t???ng s??? d???ng th&igrave; ???n t?????ng ?????u ti&ecirc;n v??? n&oacute; c??ng ch&iacute;nh l&agrave; thi???t k??? ?????p m???t, g???n g&agrave;ng, m&agrave;u s???c ?????p, trang nh&atilde;.</p>\r\n\r\n<p>M&agrave;u s???c: xanh ng???c, kem xanh h???ng, kim c????ng, kem v&agrave;ng</p>', 50, 1000000.00, 700000.00, 0, 0, 0, 8, 6, NULL, 1, '2022-05-22 09:25:03', '2022-05-22 09:25:03', NULL, 500000.00);
INSERT INTO `products` VALUES (34, 'Gi??y Th??? Thao XSPORT Ni.ke air  Rep 1:1', 'giay-the-thao-xsport-nike-air-rep-11', 19, '<p>Gi&agrave;y Nike Air Force 1 Shadow l&agrave; m???t trong nh???ng s???n ph???m m???i nh???t.</p>\r\n\r\n<p>V???i t???t c??? nh???ng ai ??&atilde; s??? h???u ??&ocirc;i gi&agrave;y Nike Air Force 1 Shadow ?????u kh???ng ?????nh r???ng ch???t l?????ng v&agrave; m???u m&atilde; m&agrave; n&oacute; mang l???i l&agrave; v&ocirc; c&ugrave;ng t???t.&nbsp;C&ograve;n nh???ng ng?????i ch??a t???ng s??? d???ng th&igrave; ???n t?????ng ?????u ti&ecirc;n v??? n&oacute; c??ng ch&iacute;nh l&agrave; thi???t k??? ?????p m???t, g???n g&agrave;ng, m&agrave;u s???c ?????p, trang nh&atilde;.</p>\r\n\r\n<p>M&agrave;u s???c: xanh ng???c, kem xanh h???ng, kim c????ng, kem v&agrave;ng</p>', 50, 600000.00, 550000.00, 0, 0, 0, 8, 6, NULL, 1, '2022-05-22 09:27:01', '2022-05-22 09:27:01', NULL, 500000.00);
INSERT INTO `products` VALUES (35, 'Gi??y Th??? Thao XSPORT Ni.ke air shadow c???u v???ng Rep 1:1', 'giay-the-thao-xsport-nike-air-shadow-cau-vong-rep-11', 19, '<p>Gi&agrave;y Nike Air Force 1 Shadow l&agrave; m???t trong nh???ng s???n ph???m m???i nh???t.</p>\r\n\r\n<p>V???i t???t c??? nh???ng ai ??&atilde; s??? h???u ??&ocirc;i gi&agrave;y Nike Air Force 1 Shadow ?????u kh???ng ?????nh r???ng ch???t l?????ng v&agrave; m???u m&atilde; m&agrave; n&oacute; mang l???i l&agrave; v&ocirc; c&ugrave;ng t???t.&nbsp;C&ograve;n nh???ng ng?????i ch??a t???ng s??? d???ng th&igrave; ???n t?????ng ?????u ti&ecirc;n v??? n&oacute; c??ng ch&iacute;nh l&agrave; thi???t k??? ?????p m???t, g???n g&agrave;ng, m&agrave;u s???c ?????p, trang nh&atilde;.</p>\r\n\r\n<p>M&agrave;u s???c: xanh ng???c, kem xanh h???ng, kim c????ng, kem v&agrave;ng</p>', 40, 400000.00, 300000.00, 0, 0, 0, 8, 6, NULL, 1, '2022-05-22 09:31:04', '2022-05-22 09:31:04', NULL, 200000.00);
INSERT INTO `products` VALUES (36, 'Gi??y Th??? Thao XSPORT Ni.ke Jordan 1 F1', 'giay-the-thao-xsport-nike-jordan-1-f1', 19, '<p>Ch???t li???u cao c???p, b???n ?????p theo th???i gian. Thi???t k??? th???i trang. Ki???u d&aacute;ng phong c&aacute;ch. ????? b???n cao. D??? ph???i ?????.</p>', 60, 500000.00, 400000.00, 0, 0, 0, 8, 6, NULL, 1, '2022-05-22 09:33:26', '2022-05-22 09:33:26', NULL, 300000.00);
INSERT INTO `products` VALUES (37, 'Gi??y Th??? Thao XSPORT Ni.ke Jordan Low REP', 'giay-the-thao-xsport-nike-jordan-low-rep', 19, '<ul>\r\n	<li>Ki???u d&aacute;ng:&nbsp;Gi&agrave;y sneaker, gi&agrave;y th??? thao</li>\r\n	<li>Ch???t li???u: V???i da</li>\r\n	<li>????? cao: 3cm</li>\r\n	<li>M&agrave;u s???c: xanh, tr???ng, x&aacute;m cam</li>\r\n	<li>K&iacute;ch c???: 40-43</li>\r\n	<li>Ch???t li???u v???i da, d??? l&agrave;m s???ch, &ecirc;m ch&acirc;n</li>\r\n	<li>????? ??&agrave;n h???i, co d&atilde;n t???t, &ocirc;m kh&iacute;t v???a ch&acirc;n</li>\r\n	<li>????? ??&uacute;c cao su nguy&ecirc;n kh???i, ch???c ch???n.</li>\r\n</ul>', 40, 400000.00, 300000.00, 0, 0, 0, 8, 6, NULL, 1, '2022-05-22 09:35:48', '2022-05-22 09:35:48', NULL, 200000.00);
INSERT INTO `products` VALUES (38, 'Gi??y Th??? Thao XSPORT Ni.ke Jordan Low REP Tr???ng X??m', 'giay-the-thao-xsport-nike-jordan-low-rep-trang-xam', 11, '<ul>\r\n	<li>Ki???u d&aacute;ng:&nbsp;Gi&agrave;y sneaker, gi&agrave;y th??? thao</li>\r\n	<li>Ch???t li???u: V???i da</li>\r\n	<li>????? cao: 3cm</li>\r\n	<li>M&agrave;u s???c: xanh, tr???ng, x&aacute;m cam</li>\r\n	<li>Ch???t li???u v???i da, d??? l&agrave;m s???ch, &ecirc;m ch&acirc;n</li>\r\n	<li>????? ??&agrave;n h???i, co d&atilde;n t???t, &ocirc;m kh&iacute;t v???a ch&acirc;n</li>\r\n	<li>????? ??&uacute;c cao su nguy&ecirc;n kh???i, ch???c ch???n.</li>\r\n</ul>\r\n\r\n<div class=\"ddict_btn\" style=\"left:145.125px; top:108px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>', 30, 500000.00, 400000.00, 0, 0, 0, 8, 6, NULL, 1, '2022-05-22 09:46:58', '2022-05-22 09:46:58', NULL, 200000.00);
INSERT INTO `products` VALUES (39, 'Gi??y t??y nam da m???m, ????? cao, ???? kh??u ?????', 'giay-tay-nam-da-mem-de-cao-da-khau-de', 20, '<p>Gi&agrave;y T&acirc;y Nam L&ecirc; Sang Ph???i D&acirc;y ????? Cao v???i ch???t li???u b???n ?????p k???t h???p ????? cao su &ecirc;m nh??? ch???ng tr??n tr?????t gi&uacute;p b???n nam lu&ocirc;n tho???i m&aacute;i, t??? tin khi ??i ch??i, d???o ph???, ??i l&agrave;m n??i c&ocirc;ng s??? hay ??i d??? ti???c. Gi&agrave;y ???????c thi???t k??? tinh x???o v???i ???????ng may ch???c ch???n, ki???u d&aacute;ng sang tr???ng, l???ch s???. Gi&agrave;y v???i m???t t&ocirc;ng m&agrave;u ch??? ?????o gi&uacute;p cho vi???c ph???i ????? tr??? n&ecirc;n d??? d&agrave;ng h??n, b???n c&oacute; th??? k???t h???p v???i c&aacute;c lo???i trang ph???c h???ng ng&agrave;y t&ugrave;y theo s??? th&iacute;ch v&agrave; phong c&aacute;ch mix &amp; match ri&ecirc;ng bi???t c???a m&igrave;nh...</p>\r\n\r\n<div class=\"ddict_btn\" style=\"left:900.24px; top:-45px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>', 50, 5500000.00, 5400000.00, 0, 0, 0, 8, 11, NULL, 1, '2022-05-22 10:03:21', '2022-05-22 10:06:09', NULL, 5000000.00);
INSERT INTO `products` VALUES (40, 'Gi??y t??y nam da cao c???p, t??ng chi???u cao 6-7cm, ????? cao su nguy??n t???m ch???ng tr??n', 'giay-tay-nam-da-cao-cap-tang-chieu-cao-6-7cm-de-cao-su-nguyen-tam-chong-tron', 20, '<p>Gi&agrave;y T&acirc;y ????? T??NG CHI???U CAO 6-7CM L???ch L&atilde;m v???i ch???t li???u b???n ?????p k???t h???p ????? cao su &ecirc;m nh??? ch???ng tr??n tr?????t gi&uacute;p b???n nam lu&ocirc;n tho???i m&aacute;i, t??? tin khi ??i ch??i, d???o ph???, ??i l&agrave;m n??i c&ocirc;ng s??? hay ??i d??? ti???c. Gi&agrave;y ???????c thi???t k??? tinh x???o v???i ???????ng may ch???c ch???n, ki???u d&aacute;ng sang tr???ng, l???ch s???. Gi&agrave;y v???i m???t t&ocirc;ng m&agrave;u ch??? ?????o gi&uacute;p cho vi???c ph???i ????? tr??? n&ecirc;n d??? d&agrave;ng h??n, b???n c&oacute; th??? k???t h???p v???i c&aacute;c lo???i trang ph???c h???ng ng&agrave;y t&ugrave;y theo s??? th&iacute;ch v&agrave; phong c&aacute;ch mix &amp; match ri&ecirc;ng bi???t c???a m&igrave;nh.</p>\r\n\r\n<div class=\"ddict_btn\" style=\"left:154.885px; top:26px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>', 50, 2000000.00, 1500000.00, 0, 0, 0, 8, 1, NULL, 1, '2022-05-22 10:10:29', '2022-05-22 10:11:12', NULL, 1000000.00);
INSERT INTO `products` VALUES (41, 'adidas Terrex Trailmaker Gore-TEX Walking Shoes - AW20-8.5 - Grey', 'adidas-terrex-trailmaker-gore-tex-walking-shoes-aw20-85-grey', 21, '<p>Ch???t li???u cao c???p, b???n ?????p theo th???i gian. Thi???t k??? th???i trang. Ki???u d&aacute;ng cute phong c&aacute;ch cute. ????? b???n cao. D??? ph???i ?????.</p>\r\n\r\n<h1>??&ocirc;i gi&agrave;y k???t h???p training v???i ????? ???n ?????nh tuy???t ?????i.</h1>\r\n\r\n<ul>\r\n	<li>Upper v???i thi???t k??? l?????i nguy&ecirc;n kh???i h??? tr??? tuy???t v???i cho c&aacute;c chuy???n ?????ng ??a chi???u.</li>\r\n	<li>?????m midsole &rdquo; ph???n ???ng nhanh&rdquo; ??? ph???n mu tr?????c v&agrave; g&oacute;t ch&acirc;n t???o n&ecirc;n s??? ch???c ch???n cho c&aacute;c b&agrave;i t???p s???c m???nh.</li>\r\n	<li>Ngo&agrave;i ra Alphabounce c??ng ???????c xem l&agrave; m???u gi&agrave;y th???i trang n??ng ?????ng v???i phong c&aacute;ch thi???t k??? hi???n ?????i.</li>\r\n</ul>', 50, 300000.00, 250000.00, 0, 0, 0, 8, 1, NULL, 1, '2022-05-22 10:15:51', '2022-05-22 10:15:51', NULL, 200000.00);
INSERT INTO `products` VALUES (42, 'Gi??y ??i m??a adidas mens Cross Trainers', 'giay-di-mua-adidas-mens-cross-trainers', 21, '<p>Thi???t k??? ??en tuy???n, ch???ng th???m n?????c, d??? ph???i ?????</p>', 20, 300000.00, 250000.00, 0, 0, 0, 8, 1, NULL, 1, '2022-05-22 10:23:15', '2022-05-22 10:23:15', NULL, 100000.00);
INSERT INTO `products` VALUES (43, 'Gi??y Th??? Thao XSPORT Van.s Old Skool V???i tr???ng', 'giay-the-thao-xsport-vans-old-skool-vai-trang', 19, '<ul>\r\n	<li>Ch???t li???u Cao C???p , ????? Cao su ,phong c&aacute;ch th???i trang; kh&oacute; b&aacute;m b???n</li>\r\n	<li>Ki???u gi&agrave;y th??? thao th???t d&acirc;y n??ng ?????ng</li>\r\n	<li>Gi&agrave;y ???????c thi???t k??? ?????p m???t , c&oacute; t&iacute;nh th???m m??? cao , nhi???u ng?????i y&ecirc;u th&iacute;ch</li>\r\n	<li>M??i gi&agrave;y &ocirc;m theo d&aacute;ng b&agrave;n ch&acirc;n; kh&ocirc;ng g&acirc;y kh&oacute; ch???u trong l&uacute;c di chuy???n</li>\r\n</ul>', 50, 500000.00, 400000.00, 0, 0, 0, 8, 7, NULL, 1, '2022-05-22 10:26:20', '2022-05-22 10:26:20', NULL, 300000.00);
INSERT INTO `products` VALUES (44, 'Gi??y Th??? Thao XSPORT Van.s Vault Old Skool REP', 'giay-the-thao-xsport-vans-vault-old-skool-rep', 19, '<ul>\r\n	<li>Ki???u d&aacute;ng:&nbsp;Gi&agrave;y sneaker, gi&agrave;y th??? thao</li>\r\n	<li>Ch???t li???u: Knit</li>\r\n	<li>????? cao:3cm</li>\r\n	<li>M&agrave;u s???c: ??en, caro</li>\r\n	<li>Ch???t li???u v???i da l???n, &ecirc;m ch&acirc;n</li>\r\n	<li>????? ??&agrave;n h???i, co d&atilde;n t???t, &ocirc;m kh&iacute;t v???a ch&acirc;n</li>\r\n	<li>????? ??&uacute;c cao su nguy&ecirc;n kh???i, ch???c ch???n.</li>\r\n</ul>\r\n\r\n<div class=\"ddict_btn\" style=\"left:145.125px; top:115px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>', 10, 500000.00, 450000.00, 0, 0, 0, 8, 7, NULL, 1, '2022-05-22 10:28:28', '2022-05-22 10:28:28', NULL, 300000.00);
INSERT INTO `products` VALUES (45, 'G??ay th??? thao XSPORT Vans f1', 'giay-the-thao-xsport-vans-f1', 21, '<ul>\r\n	<li>Ch???t li???u: V???i da</li>\r\n	<li>????? cao: 3cm</li>\r\n	<li>M&agrave;u s???c: caro</li>\r\n	<li>Ch???t li???u v???i da, d??? l&agrave;m s???ch, &ecirc;m &aacute;i.</li>\r\n	<li>????? ??&agrave;n h???i, co d&atilde;n t???t, &ocirc;m kh&iacute;t v???a ch&acirc;n</li>\r\n	<li>????? ??&uacute;c cao su nguy&ecirc;n</li>\r\n</ul>\r\n\r\n<div class=\"ddict_btn\" style=\"left:145.125px; top:99px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>', 10, 400000.00, 300000.00, 0, 0, 0, 8, 7, NULL, 1, '2022-05-22 10:30:26', '2022-05-22 10:42:32', NULL, 200000.00);
INSERT INTO `products` VALUES (46, 'Vans Old Skool V???i ????? ?????p, Ch???t L?????ng', 'vans-old-skool-vai-do-dep-chat-luong', 19, '<p>Ch???t li???u v???i t???t, v???i n&eacute;t ch??? b&eacute;, d??? ph???i ?????, di chuy???n d??? d&agrave;ng</p>', 30, 600000.00, 550000.00, 0, 0, 0, 8, 7, NULL, 1, '2022-05-22 10:45:39', '2022-05-22 10:45:39', NULL, 500000.00);
INSERT INTO `products` VALUES (47, 'Gi??y Fashion BALENCIAGA Da L???n ??en Tr???ng', 'giay-fashion-balenciaga-da-lon-den-trang', 19, '<p>Ch???t li???u cao c???p, b???n ?????p theo th???i gian. Thi???t k??? th???i trang. Ki???u d&aacute;ng cute phong c&aacute;ch cute. ????? b???n cao. D??? ph???i ?????.</p>\r\n\r\n<h1>??&ocirc;i gi&agrave;y ch???y k???t h???p training v???i ????? ???n ?????nh tuy???t ?????i.</h1>\r\n\r\n<ul>\r\n	<li>Upper v???i thi???t k??? l?????i nguy&ecirc;n kh???i h??? tr??? tuy???t v???i cho c&aacute;c chuy???n ?????ng ??a chi???u.</li>\r\n	<li>?????m midsole &rdquo; ph???n ???ng nhanh&rdquo; ??? ph???n mu tr?????c v&agrave; g&oacute;t ch&acirc;n t???o n&ecirc;n s??? ch???c ch???n cho c&aacute;c b&agrave;i t???p s???c m???nh.</li>\r\n	<li>Ngo&agrave;i ra Alphabounce c??ng ???????c xem l&agrave; m???u gi&agrave;y th???i trang n??ng ?????ng v???i phong c&aacute;ch thi???t k??? hi???n ?????i.</li>\r\n</ul>', 20, 500000.00, 400000.00, 0, 0, 0, 8, 10, NULL, 1, '2022-05-22 10:49:10', '2022-05-22 10:49:10', NULL, 200000.00);
INSERT INTO `products` VALUES (48, 'Gi??y Th??? Thao XSPORT Balen.ciaga Triple S', 'giay-the-thao-xsport-balenciaga-triple-s', 19, '<h3>??&Ocirc;I GI&Agrave;Y &quot;X???U L???&quot; - L&Agrave;M GI???I TR??? M&Ecirc; M???N.</h3>\r\n\r\n<ul>\r\n	<li>Ch??? ngh??a v??? s??? t??? do, tho???i m&aacute;i v&agrave; c&aacute; t&iacute;nh ??&atilde; ???????c ph&aacute;t huy t???t ?????</li>\r\n	<li>Balenciaga Triple S &ndash; d&ograve;ng gi&agrave;y ??a s???c m&agrave;u, ph&aacute; b??? m???i gi???i h???n, ????? ?????p, ????? ch???t ????? khi???n gi???i m??? ??i???u l???i m???t l???n n???a ph???i ??i&ecirc;n ?????o.</li>\r\n</ul>', 19, 500000.00, 400000.00, 0, 1, 0, 8, 10, NULL, 1, '2022-05-22 10:51:13', '2022-05-22 12:01:02', NULL, 300000.00);
INSERT INTO `products` VALUES (49, 'Gi??y Alexander McQueen SF+', 'giay-alexander-mcqueen-sf', 11, '<p>V???i ch???t li???u v???i ch???t l?????ng cao, t&ocirc;n v??? ?????p, d??? ph???i ?????</p>\r\n\r\n<ul>\r\n	<li>Ki???u d&aacute;ng:&nbsp;Gi&agrave;y McQueen, gi&agrave;y th??? thao</li>\r\n	<li>????? cao:3cm</li>\r\n	<li>M&agrave;u s???c:&nbsp; tr???ng</li>\r\n	<li>Ch???t v???i d???t knitt, &ecirc;m &aacute;i</li>\r\n	<li>????? ??&agrave;n h???i, co d&atilde;n t???t, &ocirc;m kh&iacute;t v???a ch&acirc;n</li>\r\n	<li>????? ??&uacute;c cao su nguy&ecirc;n kh???i, ch???c ch???n.</li>\r\n</ul>', 19, 1000000.00, 600000.00, 0, 1, 0, 8, 8, NULL, 1, '2022-05-22 13:04:46', '2022-05-22 13:05:31', NULL, 500000.00);

-- ----------------------------
-- Table structure for reviews
-- ----------------------------
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_count` int NOT NULL,
  `status` int NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reviews
-- ----------------------------
INSERT INTO `reviews` VALUES (8, 8, 15, '?????p', 5, 0, '2022-05-20 18:28:30', '2022-05-20 18:28:30');
INSERT INTO `reviews` VALUES (9, 8, 28, 'Gi??y ??i r???t t???t nha', 4, 0, '2022-05-22 03:11:53', '2022-05-22 03:11:53');
INSERT INTO `reviews` VALUES (10, 8, 28, 'Gi??y ??i t???m ???n', 2, 0, '2022-05-22 03:37:33', '2022-05-22 03:37:33');
INSERT INTO `reviews` VALUES (11, 8, 9, 'Gi??y ??i ?????p, r???t t???t', 5, 0, '2022-05-22 10:41:12', '2022-05-22 10:41:12');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------

-- ----------------------------
-- Table structure for roles_permissions
-- ----------------------------
DROP TABLE IF EXISTS `roles_permissions`;
CREATE TABLE `roles_permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` int NOT NULL,
  `permission_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for statisticals
-- ----------------------------
DROP TABLE IF EXISTS `statisticals`;
CREATE TABLE `statisticals`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales` decimal(13, 2) NOT NULL,
  `profit` decimal(13, 2) NOT NULL,
  `quantity` int NOT NULL,
  `total_order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `statisticals_order_date_unique`(`order_date`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of statisticals
-- ----------------------------
INSERT INTO `statisticals` VALUES (3, '2022-05-22', 5900000.00, 2200000.00, 12, 8, '2022-05-22 02:26:47', '2022-05-22 13:05:47');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `disk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` int NOT NULL DEFAULT 0,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (6, 'Nguyen Van Hoang1', 'hoang@gmail.com', NULL, '$2y$10$TdkKT.EMP9XFznHP.lK9Ney515h4RO2uGr7mxIh2dQafphAM3ZDN.', 'Thai Binh', '0395515962', 'images', 'avatars/1F30v1LLKtyCRzySxuwDJxaCSuwuVb47uWxATwln.jpg', 0, 'user', 'zf9HJaaZgwNvB5FHQ4VJBJaEZmkqEaHOf1rFWKUjThPvsWJsW9nWhhF09ywz', '2022-05-01 10:05:16', '2022-05-01 10:27:40', NULL);
INSERT INTO `users` VALUES (8, 'Admin', 'admin@gmail.com', NULL, '$2y$10$PUiljiPLWOtZwAZDa4zgFOevtLH8VrklFK2eGLmxJbZr3L.VEeJ7a', 'Thai Binh', '0395515962', 'images', 'avatars/VBeokElZKeSH1fInK1VHGX6emr3bRyjQ1TTEe5yI.jpg', 0, 'admin', 'ppHj1UkVBSzOty6MmMY5PHJiqtLPSKsGGE5Fx4VMz1hcQoZiTQLyRuycFYaW', '2022-05-01 10:18:19', '2022-05-01 10:18:19', NULL);
INSERT INTO `users` VALUES (11, 'Nguyen Van Hoang', 'hoang123456789@gmail.com', NULL, '$2y$10$9JPs4ycb2jcwp03oBxvvl.7dYRnAAYG4p1WeRjw4xYx6/XKFtuFWO', 'Thai Binh', '0395515962', 'images', 'avatars/JoOUXjK17jun3V8UHflx7LrsFNPgT7tvexd5yMAI.jpg', 0, 'user', 'nQxzzVeq7LqUW7Yg8IRf4esJ79aA5NbQpPP2CyyHI9ospeFwKhTGttLdTPci', '2022-05-01 17:50:21', '2022-05-01 17:50:21', NULL);
INSERT INTO `users` VALUES (13, 'admod', 'admod@gmail.com', NULL, '$2y$10$D/5a3bnR4EkJuW3/Hortr.nJ/ymRmzzayT2UhnWC7IyWVj9/X2bgW', 'Thai Binh', '0395515962', 'images', 'avatars/Wo8IXH4kP3ZVRrTGu9t4w22wE8VbA0Dxo7MVnN4C.jpg', 0, 'admod', 'ZGI9g8DIeQnjIcFNMHl2b81D5cqnQJ4WwqqCfKcE00PA5oN6IzyDUjnQE3WF', '2022-05-01 18:45:16', '2022-05-01 18:46:02', NULL);
INSERT INTO `users` VALUES (14, 'Ha Thi Dao', 'dao123456789@gmail.com', NULL, '$2y$10$it1ClDCSD.t.3XqikbLCXeQGlARNIwMb3SnlcOw5k19JSPfugRDya', 'Son La', '0395515962', NULL, NULL, 0, 'user', '38Pg1cSd4SD2feyC9oaQhBQfqjThCOC4ppGFlC1f64FDyhxofqVlUijE5GaZ', '2022-05-10 09:31:21', '2022-05-10 09:31:21', NULL);
INSERT INTO `users` VALUES (15, 'Nguyen Van Hoang', '123@gmail.com', NULL, '$2y$10$1SddMHcYn4r.YhEcCKOJCOZCE/QqVvIRwH6L.MEvAJESo.Wp3RPHe', 'Thai Binh', '0395515962', 'images', 'avatars/KZ9S3KdDcKaz7nJ2DybS4IxQKy5SO1P13WnT5eEp.jpg', 0, 'admod', NULL, '2022-05-12 15:52:39', '2022-05-12 15:53:27', '2022-05-12 15:53:27');
INSERT INTO `users` VALUES (16, 'Nguyen Van Hoang', 'nvhoang1709@gmail.com', NULL, '$2y$10$WJbumNeVWqfbmYjmo1i3UeuB9MDte.3QYYLa70yRXBYgfzGKCzlue', 'Thai Binh', '0395515962', 'images', 'avatars/EVrA82DU6FDDyIF0rl2mCz1hmWNKgRrjKwP23POc.jpg', 0, 'admod', '9jQkfeJMUlmq9zgQZdOxvqYQSOaj5s4Vh3FTXhOXbFhS9FTYjmXelJllS9TR', '2022-05-13 12:34:27', '2022-05-13 12:37:08', NULL);
INSERT INTO `users` VALUES (17, 'T??? ????nh D??ng', 'Dung123@gmail.com', NULL, '$2y$10$.emWs7ZMvWm4znjcgprsYeQnkgjpf4WUY.ObyKTiXCb/bpCkIQTLq', 'S??? 8 ng?? 173 Tr??u Qu??? -Gia L??m - H?? N???i', '0395515962', 'images', 'avatars/FvzThQ35yf7UH3yW9FywVnvlLDn5Y9B9qr21ZRZg.jpg', 0, 'user', 'QFHtBXasfkjfV3VKt0ZMCuRotfW1N4z8tMffEleLfkDcF5MhKX2mH239GsO4', '2022-05-22 03:01:44', '2022-05-22 03:01:44', NULL);

-- ----------------------------
-- Table structure for users_permissions
-- ----------------------------
DROP TABLE IF EXISTS `users_permissions`;
CREATE TABLE `users_permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `permission_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for users_roles
-- ----------------------------
DROP TABLE IF EXISTS `users_roles`;
CREATE TABLE `users_roles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `role_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users_roles
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
