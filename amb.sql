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

 Date: 18/04/2022 21:33:36
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
) ENGINE = InnoDB AUTO_INCREMENT = 68 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `berkas` VALUES (41, NULL, 1, NULL, '16500299601.mpeg', 1);
INSERT INTO `berkas` VALUES (42, NULL, 1, NULL, '16500299651A.mpeg', 1);
INSERT INTO `berkas` VALUES (43, NULL, 2, NULL, '16500300722.mpeg', 1);
INSERT INTO `berkas` VALUES (44, NULL, 2, NULL, '16500300872A.mpeg', 1);
INSERT INTO `berkas` VALUES (45, NULL, 3, NULL, '16500301133.mpeg', 1);
INSERT INTO `berkas` VALUES (46, NULL, 3, NULL, '16500301183A.mpeg', 1);
INSERT INTO `berkas` VALUES (47, NULL, 4, NULL, '16500301254.mpeg', 1);
INSERT INTO `berkas` VALUES (48, NULL, 4, NULL, '16500301314A.mpeg', 1);
INSERT INTO `berkas` VALUES (49, NULL, 5, NULL, '16500301385.mpeg', 1);
INSERT INTO `berkas` VALUES (50, NULL, 5, NULL, '16500301435A.mpeg', 1);
INSERT INTO `berkas` VALUES (51, NULL, 6, NULL, '16500301506.mpeg', 1);
INSERT INTO `berkas` VALUES (52, NULL, 6, NULL, '16500301556A.mpeg', 1);
INSERT INTO `berkas` VALUES (53, NULL, 7, NULL, '16500301647.mpeg', 1);
INSERT INTO `berkas` VALUES (54, NULL, 7, NULL, '16500301697A.mpeg', 1);
INSERT INTO `berkas` VALUES (55, NULL, NULL, 1, '16500663921.mp3', 1);
INSERT INTO `berkas` VALUES (56, NULL, NULL, 2, '16500667282.mp3', 1);
INSERT INTO `berkas` VALUES (57, NULL, NULL, 3, '16500668183.mp3', 1);
INSERT INTO `berkas` VALUES (58, NULL, NULL, 4, '16500668754.mp3', 1);
INSERT INTO `berkas` VALUES (59, NULL, NULL, 5, '16500669745.mp3', 1);
INSERT INTO `berkas` VALUES (60, NULL, NULL, 6, '16500670146.mp3', 1);
INSERT INTO `berkas` VALUES (61, NULL, NULL, 7, '16500670557.mp3', 1);
INSERT INTO `berkas` VALUES (62, NULL, NULL, 8, '165006721118.jpg', 2);
INSERT INTO `berkas` VALUES (63, NULL, NULL, 9, '165006725820.png', 2);
INSERT INTO `berkas` VALUES (64, NULL, NULL, 10, '165006730715.jpg', 2);
INSERT INTO `berkas` VALUES (65, NULL, NULL, 11, '165006735411.mp3', 1);
INSERT INTO `berkas` VALUES (66, NULL, NULL, 12, '165006740912.mp3', 1);
INSERT INTO `berkas` VALUES (67, NULL, NULL, 13, '165006769513.mp3', 1);
INSERT INTO `berkas` VALUES (68, NULL, NULL, 14, '165006773414.mp3', 1);

-- ----------------------------
-- Table structure for jawaban
-- ----------------------------
DROP TABLE IF EXISTS `jawaban`;
CREATE TABLE `jawaban`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `tadrib_id` smallint NULL DEFAULT NULL,
  `jawaban` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 56 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jawaban
-- ----------------------------
INSERT INTO `jawaban` VALUES (1, 1, 'طَبِيْبٌ');
INSERT INTO `jawaban` VALUES (2, 1, 'شُرْطِيٌ');
INSERT INTO `jawaban` VALUES (3, 1, 'حَدَّادٌ');
INSERT INTO `jawaban` VALUES (4, 1, 'خَبَّار');
INSERT INTO `jawaban` VALUES (5, 2, 'حَلاَّقٌ');
INSERT INTO `jawaban` VALUES (6, 2, 'سَبَّاكٌ');
INSERT INTO `jawaban` VALUES (7, 2, 'طَبِيْبُ أَسْنَانِ');
INSERT INTO `jawaban` VALUES (8, 2, 'خَيَّاطٌ');
INSERT INTO `jawaban` VALUES (9, 3, 'عَامِلُ القَمَامَةِ');
INSERT INTO `jawaban` VALUES (10, 3, 'صَحَفِي');
INSERT INTO `jawaban` VALUES (11, 3, 'خَبَّازٌ');
INSERT INTO `jawaban` VALUES (12, 3, 'مُمَرِّضَةٌ');
INSERT INTO `jawaban` VALUES (13, 4, 'ساَعِيْ البَرِيدْ');
INSERT INTO `jawaban` VALUES (14, 4, 'قَاضِيْ');
INSERT INTO `jawaban` VALUES (15, 4, 'رَائِدُ قَضَاءِ');
INSERT INTO `jawaban` VALUES (16, 4, 'مِيْكَانِيْك سيَّارَاتْ');
INSERT INTO `jawaban` VALUES (17, 5, 'لاَ، بَلْ مِهْنَةُ مَرْيَمْ يَصْبَحَ مِيْكَانِيكْ سَيَّارَاتْ');
INSERT INTO `jawaban` VALUES (18, 5, 'نَعَمْ، مِهْنَةُ مَرْيَمْ يَصْبَحَ مُعَلِّمَةٌ');
INSERT INTO `jawaban` VALUES (19, 5, 'لاَ، بَلْ مِهْنَةُ مَرْيَمْ يَصْبَحَ القَاضِي');
INSERT INTO `jawaban` VALUES (20, 5, 'نَعَمْ، مِهْنَةُ مَرْيَمْ يَصْبَحَ مِيْكَانِيكْ سَيَّارَاتْ');
INSERT INTO `jawaban` VALUES (21, 6, 'نَعَمْ، يُرِيْدُ مُوْسَى أَنْ يَصْبَحَ حَلاَّقٌ');
INSERT INTO `jawaban` VALUES (22, 6, 'لاَ، يُرِيْدُ مُوْسَى أَنْ يَصْبَحَ مُعَلِّمَةٌ');
INSERT INTO `jawaban` VALUES (23, 6, 'نَعَمْ، يُرِيْدُ مُوْسَى أَنْ يَصْبَحَ مُعَلِّمَةٌ');
INSERT INTO `jawaban` VALUES (24, 6, 'لاَ، يُرِيْدُ مُوْسَى أَنْ يَصْبَحَ شُرْطِيٌ');
INSERT INTO `jawaban` VALUES (25, 7, 'عَامِلُ القَمَامَةٌ');
INSERT INTO `jawaban` VALUES (26, 7, 'صَحَفِيْ');
INSERT INTO `jawaban` VALUES (27, 7, 'عَامِلُ لَحَامِ');
INSERT INTO `jawaban` VALUES (28, 7, 'طَبِيْبٌ');
INSERT INTO `jawaban` VALUES (29, 8, 'مُعَلِّمةٌ');
INSERT INTO `jawaban` VALUES (30, 8, 'خَبَّاز');
INSERT INTO `jawaban` VALUES (31, 8, 'ساَئِقُ الحَافِلَةْ');
INSERT INTO `jawaban` VALUES (32, 8, 'سَاعِي البَريْدْ');
INSERT INTO `jawaban` VALUES (33, 9, 'طَبِيْبُ أسْنَانٌ');
INSERT INTO `jawaban` VALUES (34, 9, 'ساَئِقُ الحَافِلَةْ');
INSERT INTO `jawaban` VALUES (35, 9, 'قَاضِيْ');
INSERT INTO `jawaban` VALUES (36, 9, 'سَاعِي البَريْدْ');
INSERT INTO `jawaban` VALUES (37, 10, 'طَبِيْبُ');
INSERT INTO `jawaban` VALUES (38, 10, 'رَائِدُ قَضَاءِ');
INSERT INTO `jawaban` VALUES (39, 10, 'قَاضِيْ');
INSERT INTO `jawaban` VALUES (40, 10, 'حدَّادٌ');
INSERT INTO `jawaban` VALUES (41, 11, 'حَلاَّقٌ');
INSERT INTO `jawaban` VALUES (42, 11, 'رَائِدُ قَضَاءِ');
INSERT INTO `jawaban` VALUES (43, 11, 'مِيْكَانِيْكْ سَيَّارَاتْ');
INSERT INTO `jawaban` VALUES (44, 11, 'عَالِمٌ');
INSERT INTO `jawaban` VALUES (45, 12, 'عَامِلُ القَمَامَةُ');
INSERT INTO `jawaban` VALUES (46, 12, 'جَزَارٌ');
INSERT INTO `jawaban` VALUES (47, 12, 'شُرْطِيٌ');
INSERT INTO `jawaban` VALUES (48, 12, 'طَبِيْبٌ');
INSERT INTO `jawaban` VALUES (49, 13, 'خَيَاظٌ');
INSERT INTO `jawaban` VALUES (50, 13, 'سَبَّاكٌ');
INSERT INTO `jawaban` VALUES (51, 13, 'شُرْطِيٌ');
INSERT INTO `jawaban` VALUES (52, 13, 'سَاعِي البَريْدْ');
INSERT INTO `jawaban` VALUES (53, 14, 'عَامِلُ القَمَ');
INSERT INTO `jawaban` VALUES (54, 14, 'مُعَلِّمَةٌ');
INSERT INTO `jawaban` VALUES (55, 14, 'سَبَّاكٌ');
INSERT INTO `jawaban` VALUES (56, 14, 'مُمَرِّضَةٌ');

-- ----------------------------
-- Table structure for mufrodat
-- ----------------------------
DROP TABLE IF EXISTS `mufrodat`;
CREATE TABLE `mufrodat`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `bab` bigint NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

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
  `soal` tinyint NULL DEFAULT NULL,
  `bab` tinyint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of muhadasa
-- ----------------------------
INSERT INTO `muhadasa` VALUES (1, 1, 5);
INSERT INTO `muhadasa` VALUES (2, 2, 5);
INSERT INTO `muhadasa` VALUES (3, 3, 5);
INSERT INTO `muhadasa` VALUES (4, 4, 5);
INSERT INTO `muhadasa` VALUES (5, 5, 5);
INSERT INTO `muhadasa` VALUES (6, 6, 5);
INSERT INTO `muhadasa` VALUES (7, 7, 5);

-- ----------------------------
-- Table structure for tadrib
-- ----------------------------
DROP TABLE IF EXISTS `tadrib`;
CREATE TABLE `tadrib`  (
  `id` smallint NOT NULL AUTO_INCREMENT,
  `bab` tinyint NULL DEFAULT NULL,
  `nomor_soal` tinyint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tadrib
-- ----------------------------
INSERT INTO `tadrib` VALUES (1, 5, 1);
INSERT INTO `tadrib` VALUES (2, 5, 2);
INSERT INTO `tadrib` VALUES (3, 5, 3);
INSERT INTO `tadrib` VALUES (4, 5, 4);
INSERT INTO `tadrib` VALUES (5, 5, 5);
INSERT INTO `tadrib` VALUES (6, 5, 6);
INSERT INTO `tadrib` VALUES (7, 5, 7);
INSERT INTO `tadrib` VALUES (8, 5, 8);
INSERT INTO `tadrib` VALUES (9, 5, 9);
INSERT INTO `tadrib` VALUES (10, 5, 10);
INSERT INTO `tadrib` VALUES (11, 5, 11);
INSERT INTO `tadrib` VALUES (12, 5, 12);
INSERT INTO `tadrib` VALUES (13, 5, 13);
INSERT INTO `tadrib` VALUES (14, 5, 14);

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
