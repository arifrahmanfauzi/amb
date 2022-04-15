/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80028
 Source Host           : localhost:3306
 Source Schema         : amb

 Target Server Type    : MySQL
 Target Server Version : 80028
 File Encoding         : 65001

 Date: 15/04/2022 07:09:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bab
-- ----------------------------
DROP TABLE IF EXISTS `bab`;
CREATE TABLE `bab`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_bab` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bab
-- ----------------------------
INSERT INTO `bab` VALUES (1, '1');
INSERT INTO `bab` VALUES (2, '2');
INSERT INTO `bab` VALUES (3, '3');
INSERT INTO `bab` VALUES (4, '4');
INSERT INTO `bab` VALUES (5, '5');
INSERT INTO `bab` VALUES (6, '6');
INSERT INTO `bab` VALUES (7, '7');
INSERT INTO `bab` VALUES (8, '8');

-- ----------------------------
-- Table structure for berkas
-- ----------------------------
DROP TABLE IF EXISTS `berkas`;
CREATE TABLE `berkas`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `mufrodat_id` tinyint NULL DEFAULT NULL,
  `muhadasa_id` tinyint NULL DEFAULT NULL,
  `tadrib_id` smallint NULL DEFAULT NULL,
  `file_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `type` tinyint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of berkas
-- ----------------------------
INSERT INTO `berkas` VALUES (1, 1, NULL, NULL, '16499773611.mp3', 1);
INSERT INTO `berkas` VALUES (2, 1, NULL, NULL, '16499773611.png', 2);
INSERT INTO `berkas` VALUES (3, 2, NULL, NULL, '16499792512.mp3', 1);
INSERT INTO `berkas` VALUES (4, 2, NULL, NULL, '16499792512.jpg', 2);
INSERT INTO `berkas` VALUES (5, 3, NULL, NULL, '16499793233.mp3', 1);
INSERT INTO `berkas` VALUES (6, 3, NULL, NULL, '16499793233.jpg', 2);
INSERT INTO `berkas` VALUES (7, 4, NULL, NULL, '16499793594.mp3', 1);
INSERT INTO `berkas` VALUES (8, 4, NULL, NULL, '16499793594.jpg', 2);
INSERT INTO `berkas` VALUES (9, 5, NULL, NULL, '16499794105.mp3', 1);
INSERT INTO `berkas` VALUES (10, 5, NULL, NULL, '16499794105.png', 2);
INSERT INTO `berkas` VALUES (11, 6, NULL, NULL, '16499796356.mp3', 1);
INSERT INTO `berkas` VALUES (12, 6, NULL, NULL, '16499796356.jpg', 2);
INSERT INTO `berkas` VALUES (13, 7, NULL, NULL, '16499804747.mp3', 1);
INSERT INTO `berkas` VALUES (14, 7, NULL, NULL, '16499804747.png', 2);
INSERT INTO `berkas` VALUES (15, 8, NULL, NULL, '16499805058.mp3', 1);
INSERT INTO `berkas` VALUES (16, 8, NULL, NULL, '16499805058.png', 2);
INSERT INTO `berkas` VALUES (17, 9, NULL, NULL, '16499805479.mp3', 1);
INSERT INTO `berkas` VALUES (18, 9, NULL, NULL, '16499805479.png', 2);
INSERT INTO `berkas` VALUES (19, 10, NULL, NULL, '164998057010.mp3', 1);
INSERT INTO `berkas` VALUES (20, 10, NULL, NULL, '164998057010.jpg', 2);
INSERT INTO `berkas` VALUES (21, 11, NULL, NULL, '164998059511.mp3', 1);
INSERT INTO `berkas` VALUES (22, 11, NULL, NULL, '164998059511.png', 2);
INSERT INTO `berkas` VALUES (23, 12, NULL, NULL, '164998062112.mp3', 1);
INSERT INTO `berkas` VALUES (24, 12, NULL, NULL, '164998062112.png', 2);
INSERT INTO `berkas` VALUES (25, 13, NULL, NULL, '164998064813.mp3', 1);
INSERT INTO `berkas` VALUES (26, 13, NULL, NULL, '164998064813.jpg', 2);
INSERT INTO `berkas` VALUES (27, 14, NULL, NULL, '164998067314.mp3', 1);
INSERT INTO `berkas` VALUES (28, 14, NULL, NULL, '164998067314.jpg', 2);
INSERT INTO `berkas` VALUES (29, 15, NULL, NULL, '164998069915.mp3', 1);
INSERT INTO `berkas` VALUES (30, 15, NULL, NULL, '164998069915.jpg', 2);
INSERT INTO `berkas` VALUES (31, 16, NULL, NULL, '164998072216.mp3', 1);
INSERT INTO `berkas` VALUES (32, 16, NULL, NULL, '164998072216.jpg', 2);
INSERT INTO `berkas` VALUES (33, 17, NULL, NULL, '164998123917.mp3', 1);
INSERT INTO `berkas` VALUES (34, 17, NULL, NULL, '164998123917.png', 2);
INSERT INTO `berkas` VALUES (35, 18, NULL, NULL, '164998126518.mp3', 1);
INSERT INTO `berkas` VALUES (36, 18, NULL, NULL, '164998126518.jpg', 2);
INSERT INTO `berkas` VALUES (37, 19, NULL, NULL, '164998129319.mp3', 1);
INSERT INTO `berkas` VALUES (38, 19, NULL, NULL, '164998129319.jpg', 2);
INSERT INTO `berkas` VALUES (39, 20, NULL, NULL, '164998131220.mp3', 1);
INSERT INTO `berkas` VALUES (40, 20, NULL, NULL, '164998131220.png', 2);

-- ----------------------------
-- Table structure for jawaban
-- ----------------------------
DROP TABLE IF EXISTS `jawaban`;
CREATE TABLE `jawaban`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `tadrib_id` smallint NULL DEFAULT NULL,
  `jawaban` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jawaban
-- ----------------------------
INSERT INTO `jawaban` VALUES (1, 1, '	. طَبِيْبٌ');
INSERT INTO `jawaban` VALUES (2, 1, 'شُرْطِيٌ');
INSERT INTO `jawaban` VALUES (3, 1, 'حَدَّادٌ');
INSERT INTO `jawaban` VALUES (4, 1, 'خَبَّار');

-- ----------------------------
-- Table structure for mufrodat
-- ----------------------------
DROP TABLE IF EXISTS `mufrodat`;
CREATE TABLE `mufrodat`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `bab` bigint NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mufrodat
-- ----------------------------
INSERT INTO `mufrodat` VALUES (1, 5, 'خَيَّاطٌ');
INSERT INTO `mufrodat` VALUES (2, 5, 'عَلِمٌ');
INSERT INTO `mufrodat` VALUES (3, 5, 'مُعَلِّمَةٌ');
INSERT INTO `mufrodat` VALUES (4, 5, 'طَبِيْبٌ أَسْنَانِ');
INSERT INTO `mufrodat` VALUES (5, 5, 'سَاعِيْ البَرِيدْ');
INSERT INTO `mufrodat` VALUES (6, 5, 'مِيْكَانِيْكْ سَيَّارَات');
INSERT INTO `mufrodat` VALUES (7, 5, 'مُمَرِّضَةٌ');
INSERT INTO `mufrodat` VALUES (8, 5, 'شُرْطِيٌ');
INSERT INTO `mufrodat` VALUES (9, 5, 'عَامِلُ لَحَامْ');
INSERT INTO `mufrodat` VALUES (10, 5, 'حَدَادٌ');
INSERT INTO `mufrodat` VALUES (11, 5, 'حَلَاق');
INSERT INTO `mufrodat` VALUES (12, 5, 'طَبِيْبٌ');
INSERT INTO `mufrodat` VALUES (13, 5, 'سَبَّاكٌ');
INSERT INTO `mufrodat` VALUES (14, 5, 'جَزَارٌ');
INSERT INTO `mufrodat` VALUES (15, 5, 'رَائِدُ قَضَاءِ');
INSERT INTO `mufrodat` VALUES (16, 5, 'خَبَازٌ');
INSERT INTO `mufrodat` VALUES (17, 5, 'عَامِلُ القَمَامَةِ');
INSERT INTO `mufrodat` VALUES (18, 5, 'سَائِقُ الحَافِلَةِ');
INSERT INTO `mufrodat` VALUES (19, 5, 'صَحَفِيْ');
INSERT INTO `mufrodat` VALUES (20, 5, 'قَاضِيْ');

-- ----------------------------
-- Table structure for muhadasa
-- ----------------------------
DROP TABLE IF EXISTS `muhadasa`;
CREATE TABLE `muhadasa`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `soal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `bab` tinyint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of muhadasa
-- ----------------------------
INSERT INTO `muhadasa` VALUES (1, '1', 5);

-- ----------------------------
-- Table structure for tadrib
-- ----------------------------
DROP TABLE IF EXISTS `tadrib`;
CREATE TABLE `tadrib`  (
  `id` smallint NOT NULL AUTO_INCREMENT,
  `bab` tinyint NULL DEFAULT NULL,
  `nomor_soal` tinyint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tadrib
-- ----------------------------
INSERT INTO `tadrib` VALUES (1, 5, 1);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', '$2y$10$2R86LkuIgGUttBZCRCpTmOO7JCObIjKHHt1OdOyBEnf9/zrjrOGx6', '2022-04-12 14:20:26', '2022-04-12 14:20:26');

SET FOREIGN_KEY_CHECKS = 1;
