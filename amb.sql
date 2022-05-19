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

 Date: 19/05/2022 16:43:08
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
  `qasirah_id` smallint NULL DEFAULT NULL,
  `qisah_id` int NULL DEFAULT NULL,
  `tamrin_id` smallint NULL DEFAULT NULL,
  `file_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `type` tinyint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 161 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of berkas
-- ----------------------------
INSERT INTO `berkas` VALUES (1, 1, NULL, NULL, NULL, NULL, NULL, '16499773611.mp3', 1);
INSERT INTO `berkas` VALUES (2, 1, NULL, NULL, NULL, NULL, NULL, '16499773611.png', 2);
INSERT INTO `berkas` VALUES (3, 2, NULL, NULL, NULL, NULL, NULL, '16499792512.mp3', 1);
INSERT INTO `berkas` VALUES (4, 2, NULL, NULL, NULL, NULL, NULL, '16499792512.jpg', 2);
INSERT INTO `berkas` VALUES (5, 3, NULL, NULL, NULL, NULL, NULL, '16499793233.mp3', 1);
INSERT INTO `berkas` VALUES (6, 3, NULL, NULL, NULL, NULL, NULL, '16499793233.jpg', 2);
INSERT INTO `berkas` VALUES (7, 4, NULL, NULL, NULL, NULL, NULL, '16499793594.mp3', 1);
INSERT INTO `berkas` VALUES (8, 4, NULL, NULL, NULL, NULL, NULL, '16499793594.jpg', 2);
INSERT INTO `berkas` VALUES (9, 5, NULL, NULL, NULL, NULL, NULL, '16499794105.mp3', 1);
INSERT INTO `berkas` VALUES (10, 5, NULL, NULL, NULL, NULL, NULL, '16499794105.png', 2);
INSERT INTO `berkas` VALUES (11, 6, NULL, NULL, NULL, NULL, NULL, '16499796356.mp3', 1);
INSERT INTO `berkas` VALUES (12, 6, NULL, NULL, NULL, NULL, NULL, '16499796356.jpg', 2);
INSERT INTO `berkas` VALUES (13, 7, NULL, NULL, NULL, NULL, NULL, '16499804747.mp3', 1);
INSERT INTO `berkas` VALUES (14, 7, NULL, NULL, NULL, NULL, NULL, '16499804747.png', 2);
INSERT INTO `berkas` VALUES (15, 8, NULL, NULL, NULL, NULL, NULL, '16499805058.mp3', 1);
INSERT INTO `berkas` VALUES (16, 8, NULL, NULL, NULL, NULL, NULL, '16499805058.png', 2);
INSERT INTO `berkas` VALUES (17, 9, NULL, NULL, NULL, NULL, NULL, '16499805479.mp3', 1);
INSERT INTO `berkas` VALUES (18, 9, NULL, NULL, NULL, NULL, NULL, '16499805479.png', 2);
INSERT INTO `berkas` VALUES (19, 10, NULL, NULL, NULL, NULL, NULL, '164998057010.mp3', 1);
INSERT INTO `berkas` VALUES (20, 10, NULL, NULL, NULL, NULL, NULL, '164998057010.jpg', 2);
INSERT INTO `berkas` VALUES (21, 11, NULL, NULL, NULL, NULL, NULL, '164998059511.mp3', 1);
INSERT INTO `berkas` VALUES (22, 11, NULL, NULL, NULL, NULL, NULL, '164998059511.png', 2);
INSERT INTO `berkas` VALUES (23, 12, NULL, NULL, NULL, NULL, NULL, '164998062112.mp3', 1);
INSERT INTO `berkas` VALUES (24, 12, NULL, NULL, NULL, NULL, NULL, '164998062112.png', 2);
INSERT INTO `berkas` VALUES (25, 13, NULL, NULL, NULL, NULL, NULL, '164998064813.mp3', 1);
INSERT INTO `berkas` VALUES (26, 13, NULL, NULL, NULL, NULL, NULL, '164998064813.jpg', 2);
INSERT INTO `berkas` VALUES (27, 14, NULL, NULL, NULL, NULL, NULL, '164998067314.mp3', 1);
INSERT INTO `berkas` VALUES (28, 14, NULL, NULL, NULL, NULL, NULL, '164998067314.jpg', 2);
INSERT INTO `berkas` VALUES (29, 15, NULL, NULL, NULL, NULL, NULL, '164998069915.mp3', 1);
INSERT INTO `berkas` VALUES (30, 15, NULL, NULL, NULL, NULL, NULL, '164998069915.jpg', 2);
INSERT INTO `berkas` VALUES (31, 16, NULL, NULL, NULL, NULL, NULL, '164998072216.mp3', 1);
INSERT INTO `berkas` VALUES (32, 16, NULL, NULL, NULL, NULL, NULL, '164998072216.jpg', 2);
INSERT INTO `berkas` VALUES (33, 17, NULL, NULL, NULL, NULL, NULL, '164998123917.mp3', 1);
INSERT INTO `berkas` VALUES (34, 17, NULL, NULL, NULL, NULL, NULL, '164998123917.png', 2);
INSERT INTO `berkas` VALUES (35, 18, NULL, NULL, NULL, NULL, NULL, '164998126518.mp3', 1);
INSERT INTO `berkas` VALUES (36, 18, NULL, NULL, NULL, NULL, NULL, '164998126518.jpg', 2);
INSERT INTO `berkas` VALUES (37, 19, NULL, NULL, NULL, NULL, NULL, '164998129319.mp3', 1);
INSERT INTO `berkas` VALUES (38, 19, NULL, NULL, NULL, NULL, NULL, '164998129319.jpg', 2);
INSERT INTO `berkas` VALUES (39, 20, NULL, NULL, NULL, NULL, NULL, '164998131220.mp3', 1);
INSERT INTO `berkas` VALUES (40, 20, NULL, NULL, NULL, NULL, NULL, '164998131220.png', 2);
INSERT INTO `berkas` VALUES (41, NULL, 1, NULL, NULL, NULL, NULL, '16500299601.mpeg', 1);
INSERT INTO `berkas` VALUES (42, NULL, 1, NULL, NULL, NULL, NULL, '16500299651A.mpeg', 1);
INSERT INTO `berkas` VALUES (43, NULL, 2, NULL, NULL, NULL, NULL, '16500300722.mpeg', 1);
INSERT INTO `berkas` VALUES (44, NULL, 2, NULL, NULL, NULL, NULL, '16500300872A.mpeg', 1);
INSERT INTO `berkas` VALUES (45, NULL, 3, NULL, NULL, NULL, NULL, '16500301133.mpeg', 1);
INSERT INTO `berkas` VALUES (46, NULL, 3, NULL, NULL, NULL, NULL, '16500301183A.mpeg', 1);
INSERT INTO `berkas` VALUES (47, NULL, 4, NULL, NULL, NULL, NULL, '16500301254.mpeg', 1);
INSERT INTO `berkas` VALUES (48, NULL, 4, NULL, NULL, NULL, NULL, '16500301314A.mpeg', 1);
INSERT INTO `berkas` VALUES (49, NULL, 5, NULL, NULL, NULL, NULL, '16500301385.mpeg', 1);
INSERT INTO `berkas` VALUES (50, NULL, 5, NULL, NULL, NULL, NULL, '16500301435A.mpeg', 1);
INSERT INTO `berkas` VALUES (51, NULL, 6, NULL, NULL, NULL, NULL, '16500301506.mpeg', 1);
INSERT INTO `berkas` VALUES (52, NULL, 6, NULL, NULL, NULL, NULL, '16500301556A.mpeg', 1);
INSERT INTO `berkas` VALUES (53, NULL, 7, NULL, NULL, NULL, NULL, '16500301647.mpeg', 1);
INSERT INTO `berkas` VALUES (54, NULL, 7, NULL, NULL, NULL, NULL, '16500301697A.mpeg', 1);
INSERT INTO `berkas` VALUES (55, NULL, NULL, 1, NULL, NULL, NULL, '16500663921.mp3', 1);
INSERT INTO `berkas` VALUES (56, NULL, NULL, 2, NULL, NULL, NULL, '16500667282.mp3', 1);
INSERT INTO `berkas` VALUES (57, NULL, NULL, 3, NULL, NULL, NULL, '16500668183.mp3', 1);
INSERT INTO `berkas` VALUES (58, NULL, NULL, 4, NULL, NULL, NULL, '16500668754.mp3', 1);
INSERT INTO `berkas` VALUES (59, NULL, NULL, 5, NULL, NULL, NULL, '16500669745.mp3', 1);
INSERT INTO `berkas` VALUES (60, NULL, NULL, 6, NULL, NULL, NULL, '16500670146.mp3', 1);
INSERT INTO `berkas` VALUES (61, NULL, NULL, 7, NULL, NULL, NULL, '16500670557.mp3', 1);
INSERT INTO `berkas` VALUES (62, NULL, NULL, 8, NULL, NULL, NULL, '165006721118.jpg', 2);
INSERT INTO `berkas` VALUES (63, NULL, NULL, 9, NULL, NULL, NULL, '165006725820.png', 2);
INSERT INTO `berkas` VALUES (64, NULL, NULL, 10, NULL, NULL, NULL, '165006730715.jpg', 2);
INSERT INTO `berkas` VALUES (65, NULL, NULL, 11, NULL, NULL, NULL, '165006735411.mp3', 1);
INSERT INTO `berkas` VALUES (66, NULL, NULL, 12, NULL, NULL, NULL, '165006740912.mp3', 1);
INSERT INTO `berkas` VALUES (67, NULL, NULL, 13, NULL, NULL, NULL, '165006769513.mp3', 1);
INSERT INTO `berkas` VALUES (68, NULL, NULL, 14, NULL, NULL, NULL, '165006773414.mp3', 1);
INSERT INTO `berkas` VALUES (69, NULL, NULL, 8, NULL, NULL, NULL, '16500670621.mp3', 1);
INSERT INTO `berkas` VALUES (70, NULL, NULL, 9, NULL, NULL, NULL, '16500670621.mp3', 1);
INSERT INTO `berkas` VALUES (71, NULL, NULL, 10, NULL, NULL, NULL, '16500670621.mp3', 1);
INSERT INTO `berkas` VALUES (72, 21, NULL, NULL, NULL, NULL, NULL, '16505980341.mp3', 1);
INSERT INTO `berkas` VALUES (73, 21, NULL, NULL, NULL, NULL, NULL, '16505980351.jpg', 2);
INSERT INTO `berkas` VALUES (74, 22, NULL, NULL, NULL, NULL, NULL, '16505980612.mp3', 1);
INSERT INTO `berkas` VALUES (75, 22, NULL, NULL, NULL, NULL, NULL, '16505980612.png', 2);
INSERT INTO `berkas` VALUES (76, 23, NULL, NULL, NULL, NULL, NULL, '16505983983.mp3', 1);
INSERT INTO `berkas` VALUES (77, 23, NULL, NULL, NULL, NULL, NULL, '16505983983.jpg', 2);
INSERT INTO `berkas` VALUES (78, 24, NULL, NULL, NULL, NULL, NULL, '16505985604.mp3', 1);
INSERT INTO `berkas` VALUES (79, 24, NULL, NULL, NULL, NULL, NULL, '16505985604.jpg', 2);
INSERT INTO `berkas` VALUES (80, 25, NULL, NULL, NULL, NULL, NULL, '16505985885.mp3', 1);
INSERT INTO `berkas` VALUES (81, 25, NULL, NULL, NULL, NULL, NULL, '16505985885.png', 2);
INSERT INTO `berkas` VALUES (82, 26, NULL, NULL, NULL, NULL, NULL, '16505986146.mp3', 1);
INSERT INTO `berkas` VALUES (83, 26, NULL, NULL, NULL, NULL, NULL, '16505986146.png', 2);
INSERT INTO `berkas` VALUES (84, 27, NULL, NULL, NULL, NULL, NULL, '16505986417.mp3', 1);
INSERT INTO `berkas` VALUES (85, 27, NULL, NULL, NULL, NULL, NULL, '16505986417.png', 2);
INSERT INTO `berkas` VALUES (86, 28, NULL, NULL, NULL, NULL, NULL, '16505986598.mp3', 1);
INSERT INTO `berkas` VALUES (87, 28, NULL, NULL, NULL, NULL, NULL, '16505986598.png', 2);
INSERT INTO `berkas` VALUES (88, 29, NULL, NULL, NULL, NULL, NULL, '16505986979.mp3', 1);
INSERT INTO `berkas` VALUES (89, 29, NULL, NULL, NULL, NULL, NULL, '16505986979.jpg', 2);
INSERT INTO `berkas` VALUES (90, 30, NULL, NULL, NULL, NULL, NULL, '165059872910.mp3', 1);
INSERT INTO `berkas` VALUES (91, 30, NULL, NULL, NULL, NULL, NULL, '165059872910.jpg', 2);
INSERT INTO `berkas` VALUES (92, 31, NULL, NULL, NULL, NULL, NULL, '165059877111.mp3', 1);
INSERT INTO `berkas` VALUES (93, 31, NULL, NULL, NULL, NULL, NULL, '165059877111.png', 2);
INSERT INTO `berkas` VALUES (94, 32, NULL, NULL, NULL, NULL, NULL, '165059879712.mp3', 1);
INSERT INTO `berkas` VALUES (95, 32, NULL, NULL, NULL, NULL, NULL, '165059879712.jpg', 2);
INSERT INTO `berkas` VALUES (96, 33, NULL, NULL, NULL, NULL, NULL, '165059881313.mp3', 1);
INSERT INTO `berkas` VALUES (97, 33, NULL, NULL, NULL, NULL, NULL, '165059881313.jpg', 2);
INSERT INTO `berkas` VALUES (98, 34, NULL, NULL, NULL, NULL, NULL, '165059883314.mp3', 1);
INSERT INTO `berkas` VALUES (99, 34, NULL, NULL, NULL, NULL, NULL, '165059883314.png', 2);
INSERT INTO `berkas` VALUES (100, 35, NULL, NULL, NULL, NULL, NULL, '165059885415.mp3', 1);
INSERT INTO `berkas` VALUES (101, 35, NULL, NULL, NULL, NULL, NULL, '165059885415.jpg', 2);
INSERT INTO `berkas` VALUES (102, 36, NULL, NULL, NULL, NULL, NULL, '165059892916.mp3', 1);
INSERT INTO `berkas` VALUES (103, 36, NULL, NULL, NULL, NULL, NULL, '165059892916.png', 2);
INSERT INTO `berkas` VALUES (104, NULL, 8, NULL, NULL, NULL, NULL, '16506354991.mpeg', 1);
INSERT INTO `berkas` VALUES (105, NULL, 8, NULL, NULL, NULL, NULL, '16506355141A.mpeg', 1);
INSERT INTO `berkas` VALUES (106, NULL, 9, NULL, NULL, NULL, NULL, '16506355222.mpeg', 1);
INSERT INTO `berkas` VALUES (107, NULL, 9, NULL, NULL, NULL, NULL, '16506355272A.mpeg', 1);
INSERT INTO `berkas` VALUES (108, NULL, 10, NULL, NULL, NULL, NULL, '16506355343.mpeg', 1);
INSERT INTO `berkas` VALUES (109, NULL, 10, NULL, NULL, NULL, NULL, '16506355383A.mpeg', 1);
INSERT INTO `berkas` VALUES (110, NULL, 11, NULL, NULL, NULL, NULL, '16506355464.mpeg', 1);
INSERT INTO `berkas` VALUES (111, NULL, 11, NULL, NULL, NULL, NULL, '16506355524A.mpeg', 1);
INSERT INTO `berkas` VALUES (112, NULL, 12, NULL, NULL, NULL, NULL, '16506355615.mpeg', 1);
INSERT INTO `berkas` VALUES (113, NULL, 12, NULL, NULL, NULL, NULL, '16506355655A.mpeg', 1);
INSERT INTO `berkas` VALUES (114, NULL, 13, NULL, NULL, NULL, NULL, '16506355736.mpeg', 1);
INSERT INTO `berkas` VALUES (115, NULL, 13, NULL, NULL, NULL, NULL, '16506355786A.mpeg', 1);
INSERT INTO `berkas` VALUES (116, NULL, 14, NULL, NULL, NULL, NULL, '16506355847.mpeg', 1);
INSERT INTO `berkas` VALUES (117, NULL, 14, NULL, NULL, NULL, NULL, '16506355877A.mpeg', 1);
INSERT INTO `berkas` VALUES (118, NULL, 15, NULL, NULL, NULL, NULL, '16506355948.mpeg', 1);
INSERT INTO `berkas` VALUES (119, NULL, 15, NULL, NULL, NULL, NULL, '16506355988A.mpeg', 1);
INSERT INTO `berkas` VALUES (120, NULL, NULL, 15, NULL, NULL, NULL, '16506390651.mp3', 1);
INSERT INTO `berkas` VALUES (121, NULL, NULL, 16, NULL, NULL, NULL, '16506391022.mp3', 1);
INSERT INTO `berkas` VALUES (122, NULL, NULL, 17, NULL, NULL, NULL, '16506391333.mp3', 1);
INSERT INTO `berkas` VALUES (123, NULL, NULL, 18, NULL, NULL, NULL, '16506391714.mp3', 1);
INSERT INTO `berkas` VALUES (124, NULL, NULL, 19, NULL, NULL, NULL, '16506395805.mp3', 1);
INSERT INTO `berkas` VALUES (125, NULL, NULL, 20, NULL, NULL, NULL, '16506396236.mp3', 1);
INSERT INTO `berkas` VALUES (126, NULL, NULL, 21, NULL, NULL, NULL, '16506401567.mp3', 1);
INSERT INTO `berkas` VALUES (127, NULL, NULL, 22, NULL, NULL, NULL, '16506401918.mp3', 1);
INSERT INTO `berkas` VALUES (128, NULL, NULL, 23, NULL, NULL, NULL, '16506402469.mp3', 1);
INSERT INTO `berkas` VALUES (129, NULL, NULL, 24, NULL, NULL, NULL, '165064028810.mp3', 1);
INSERT INTO `berkas` VALUES (130, NULL, NULL, 25, NULL, NULL, NULL, '165064032411.mp3', 1);
INSERT INTO `berkas` VALUES (131, NULL, NULL, 26, NULL, NULL, NULL, '16506404175.png', 2);
INSERT INTO `berkas` VALUES (132, NULL, NULL, 26, NULL, NULL, NULL, '16506404214.mpeg', 1);
INSERT INTO `berkas` VALUES (133, NULL, NULL, 27, NULL, NULL, NULL, '16506407149.jpg', 2);
INSERT INTO `berkas` VALUES (134, NULL, NULL, 27, NULL, NULL, NULL, '16506404214.mpeg', 1);
INSERT INTO `berkas` VALUES (135, NULL, NULL, 28, NULL, NULL, NULL, '16506408098.png', 2);
INSERT INTO `berkas` VALUES (136, NULL, NULL, 28, NULL, NULL, NULL, '16506404214.mpeg', 1);
INSERT INTO `berkas` VALUES (137, NULL, NULL, NULL, 1, NULL, NULL, '16529199611.mpeg', 1);
INSERT INTO `berkas` VALUES (138, NULL, NULL, NULL, 1, NULL, NULL, '16529199611.jpg', 2);
INSERT INTO `berkas` VALUES (139, NULL, NULL, NULL, 2, NULL, NULL, '16529201372.mpeg', 1);
INSERT INTO `berkas` VALUES (140, NULL, NULL, NULL, 2, NULL, NULL, '16529201382.png', 2);
INSERT INTO `berkas` VALUES (141, NULL, NULL, NULL, 3, NULL, NULL, '16529201963.mpeg', 1);
INSERT INTO `berkas` VALUES (142, NULL, NULL, NULL, 3, NULL, NULL, '16529201963.jpg', 2);
INSERT INTO `berkas` VALUES (143, NULL, NULL, NULL, 4, NULL, NULL, '16529202754.mpeg', 1);
INSERT INTO `berkas` VALUES (144, NULL, NULL, NULL, 4, NULL, NULL, '16529202754.jpg', 2);
INSERT INTO `berkas` VALUES (145, NULL, NULL, NULL, 5, NULL, NULL, '16529202945.mpeg', 1);
INSERT INTO `berkas` VALUES (146, NULL, NULL, NULL, 5, NULL, NULL, '16529202945.jpg', 2);
INSERT INTO `berkas` VALUES (147, NULL, NULL, NULL, 6, NULL, NULL, '16529208576.mpeg', 1);
INSERT INTO `berkas` VALUES (148, NULL, NULL, NULL, 6, NULL, NULL, '16529208576.jpg', 2);
INSERT INTO `berkas` VALUES (149, NULL, NULL, NULL, 7, NULL, NULL, '16529208827.mpeg', 1);
INSERT INTO `berkas` VALUES (150, NULL, NULL, NULL, 7, NULL, NULL, '16529208827.jpg', 2);
INSERT INTO `berkas` VALUES (151, NULL, NULL, NULL, 8, NULL, NULL, '16529209538.mpeg', 1);
INSERT INTO `berkas` VALUES (152, NULL, NULL, NULL, 8, NULL, NULL, '16529209538.jpg', 2);
INSERT INTO `berkas` VALUES (153, NULL, NULL, NULL, 9, NULL, NULL, '16529211049.mpeg', 1);
INSERT INTO `berkas` VALUES (154, NULL, NULL, NULL, 9, NULL, NULL, '16529211049.jpg', 2);
INSERT INTO `berkas` VALUES (155, NULL, NULL, NULL, 10, NULL, NULL, '165292112710.mpeg', 1);
INSERT INTO `berkas` VALUES (156, NULL, NULL, NULL, 10, NULL, NULL, '165292112710.jpg', 2);
INSERT INTO `berkas` VALUES (157, NULL, NULL, NULL, 11, NULL, NULL, '165292115011.mpeg', 1);
INSERT INTO `berkas` VALUES (158, NULL, NULL, NULL, 11, NULL, NULL, '165292115011.jpg', 2);
INSERT INTO `berkas` VALUES (159, NULL, NULL, NULL, 12, NULL, NULL, '165292117312.mpeg', 1);
INSERT INTO `berkas` VALUES (160, NULL, NULL, NULL, 12, NULL, NULL, '165292117312.png', 2);
INSERT INTO `berkas` VALUES (161, NULL, NULL, NULL, NULL, 1, NULL, '6.mp4', 3);
INSERT INTO `berkas` VALUES (162, NULL, NULL, 29, NULL, NULL, 29, '16529317353.jpg', 2);
INSERT INTO `berkas` VALUES (163, NULL, NULL, 30, NULL, NULL, 30, '16529322182.mp3', 1);
INSERT INTO `berkas` VALUES (164, NULL, NULL, 31, NULL, NULL, 31, '16529323603.mp3', 1);
INSERT INTO `berkas` VALUES (165, NULL, NULL, 32, NULL, NULL, 32, '16529324524.mp3', 1);
INSERT INTO `berkas` VALUES (166, NULL, NULL, NULL, NULL, NULL, 33, '16529389401.mpeg', 1);
INSERT INTO `berkas` VALUES (167, NULL, NULL, NULL, NULL, NULL, 33, '16529389712.mpeg', 1);
INSERT INTO `berkas` VALUES (168, NULL, NULL, NULL, NULL, NULL, 33, '16529389793.mpeg', 1);
INSERT INTO `berkas` VALUES (169, NULL, NULL, NULL, NULL, NULL, 33, '16529389844.mpeg', 1);
INSERT INTO `berkas` VALUES (170, NULL, NULL, NULL, NULL, NULL, 33, '16529389885.mpeg', 1);
INSERT INTO `berkas` VALUES (171, NULL, NULL, NULL, NULL, NULL, 33, '16529389926.mpeg', 1);
INSERT INTO `berkas` VALUES (172, NULL, NULL, NULL, NULL, NULL, 33, '16529389967.mpeg', 1);
INSERT INTO `berkas` VALUES (173, NULL, NULL, NULL, NULL, NULL, 33, '16529390018.mpeg', 1);
INSERT INTO `berkas` VALUES (174, NULL, NULL, NULL, NULL, NULL, 34, '6.mp4', 3);

-- ----------------------------
-- Table structure for jawaban
-- ----------------------------
DROP TABLE IF EXISTS `jawaban`;
CREATE TABLE `jawaban`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `tadrib_id` smallint NULL DEFAULT NULL,
  `jawaban` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 113 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `jawaban` VALUES (57, 15, 'فَقْرُ الدَّمُ');
INSERT INTO `jawaban` VALUES (58, 15, 'حَمَّى وَ صُدَاعٌ');
INSERT INTO `jawaban` VALUES (59, 15, 'سُرْعَةُ التَّعْبِ');
INSERT INTO `jawaban` VALUES (60, 15, 'زُكَامٌ');
INSERT INTO `jawaban` VALUES (61, 16, 'يَذْهَبُ عَلِى إِلىَ المُسْتَشْفَى');
INSERT INTO `jawaban` VALUES (62, 16, 'يَذْهَبُ عَلِى إِلىَ الصَّيْدَالِيَةْ');
INSERT INTO `jawaban` VALUES (63, 16, 'يَذْهَبُ عَلِى إِلىَ المَطْبَحِ');
INSERT INTO `jawaban` VALUES (64, 16, 'يَذْهَبُ عَلِى إِلىَ المَدْرَسَةِ');
INSERT INTO `jawaban` VALUES (65, 17, 'فَاطِمَةْ');
INSERT INTO `jawaban` VALUES (66, 17, 'زَيْنَبْ');
INSERT INTO `jawaban` VALUES (67, 17, 'عَلِى');
INSERT INTO `jawaban` VALUES (68, 17, 'عُمَرْ');
INSERT INTO `jawaban` VALUES (69, 18, 'نَعَمْ، شَرَبَتْ زَيْنَبْ الماَءْ');
INSERT INTO `jawaban` VALUES (70, 18, 'لا، وَلَكِنْ شَرَبَتْ زَيْنَبْ الماَءُ');
INSERT INTO `jawaban` VALUES (71, 18, 'نَعَمْ، شَرَبَتْ زَيْنَبْ الدَّوَاءْ');
INSERT INTO `jawaban` VALUES (72, 18, 'لَا، وَلَكِنْ شَرَبَتْ زَيْنَبْ الشاَيِ');
INSERT INTO `jawaban` VALUES (73, 19, 'تَشْعُرُ فَاطِمَةْ حَمَّى وَ صُدَاعٌ');
INSERT INTO `jawaban` VALUES (74, 19, 'تَشْعُرُ فَاطِمَةْ سُرْعَةُ التَّعْبِ');
INSERT INTO `jawaban` VALUES (75, 19, 'تَشْعُرُ فَاطِمَةْ زُكَامٌ');
INSERT INTO `jawaban` VALUES (76, 19, 'تَشْعُرُ فَاطِمَةْ صِحَّةِ وَ عَافِيَةْ');
INSERT INTO `jawaban` VALUES (77, 20, 'شُكراً');
INSERT INTO `jawaban` VALUES (78, 20, 'عَفْوًا');
INSERT INTO `jawaban` VALUES (79, 20, 'لاَ');
INSERT INTO `jawaban` VALUES (80, 20, 'نَعَمْ');
INSERT INTO `jawaban` VALUES (81, 21, 'إنشاء اللّٰ');
INSERT INTO `jawaban` VALUES (82, 21, 'شفاكَ اللّٰه');
INSERT INTO `jawaban` VALUES (83, 21, 'شفاء عاجلا');
INSERT INTO `jawaban` VALUES (84, 21, 'شكرا كثيرا');
INSERT INTO `jawaban` VALUES (85, 22, 'صُدَاعٌ');
INSERT INTO `jawaban` VALUES (86, 22, 'حُمَّى');
INSERT INTO `jawaban` VALUES (87, 22, 'فَقْرُ الدَّمِ');
INSERT INTO `jawaban` VALUES (88, 22, 'سُرْعَةُ التَّعْبِ');
INSERT INTO `jawaban` VALUES (89, 23, 'صُدَاعٌ');
INSERT INTO `jawaban` VALUES (90, 23, 'فَقْرُ الدَّمِ');
INSERT INTO `jawaban` VALUES (91, 23, 'حُمَّى');
INSERT INTO `jawaban` VALUES (92, 23, 'سُرْعَةُ التَّعْبِ');
INSERT INTO `jawaban` VALUES (93, 24, 'صُدَاعٌ');
INSERT INTO `jawaban` VALUES (94, 24, 'ُمَّى');
INSERT INTO `jawaban` VALUES (95, 24, 'سُرْعَةُ التَّعْبِ');
INSERT INTO `jawaban` VALUES (96, 24, 'فَقْرُ الدَّمِ');
INSERT INTO `jawaban` VALUES (97, 25, 'صُدَاعٌ');
INSERT INTO `jawaban` VALUES (98, 25, 'حُمَّى');
INSERT INTO `jawaban` VALUES (99, 25, 'مَرِيْضٌ');
INSERT INTO `jawaban` VALUES (100, 25, 'سُرْعَةُ التَّعْبِ');
INSERT INTO `jawaban` VALUES (101, 26, 'تِلْكَ المُسْتَشْفَى');
INSERT INTO `jawaban` VALUES (102, 26, 'تِلْكَ البَيْتٌ');
INSERT INTO `jawaban` VALUES (103, 26, 'تِلْكَ الصَّيْدَلِيَةُ');
INSERT INTO `jawaban` VALUES (104, 26, 'تِلْكَ فُنْدُوْقٌ');
INSERT INTO `jawaban` VALUES (105, 27, 'تِلْكَ المُسْتَشْفَى');
INSERT INTO `jawaban` VALUES (106, 27, 'تِلْكَ البَيْتٌ');
INSERT INTO `jawaban` VALUES (107, 27, 'تِلْكَ الصَّيْدَلِيَةُ');
INSERT INTO `jawaban` VALUES (108, 27, 'تِلْكَ فُنْدُوْقٌ');
INSERT INTO `jawaban` VALUES (109, 28, 'هَذَا الدَّمُ');
INSERT INTO `jawaban` VALUES (110, 28, 'هَذَا مَرِيْضٌ');
INSERT INTO `jawaban` VALUES (111, 28, 'هَذَا الدَّوَاءُ');
INSERT INTO `jawaban` VALUES (112, 28, 'هَذَا الْوَصْفَةُ');
INSERT INTO `jawaban` VALUES (113, 29, 'سَرَطَانٌ');
INSERT INTO `jawaban` VALUES (114, 29, 'حُمَّى');
INSERT INTO `jawaban` VALUES (115, 29, 'زُكَامٌ');
INSERT INTO `jawaban` VALUES (116, 29, 'صُدَاعٌ');
INSERT INTO `jawaban` VALUES (117, 30, 'saya meminum air');
INSERT INTO `jawaban` VALUES (118, 30, 'saya meminum obat');
INSERT INTO `jawaban` VALUES (119, 30, 'saya memakan buah');
INSERT INTO `jawaban` VALUES (120, 30, 'saya memakan snack');
INSERT INTO `jawaban` VALUES (121, 31, 'تَشْعُرُ فَاطِمَةْ حَمَّى وَ صُدَاعٌ');
INSERT INTO `jawaban` VALUES (122, 31, 'تَشْعُرُ فَاطِمَةْ سُرْعَةُ التَّعْبِ');
INSERT INTO `jawaban` VALUES (123, 31, 'تَشْعُرُ فَاطِمَةْ زُكَامٌ');
INSERT INTO `jawaban` VALUES (124, 31, 'تَشْعُرُ فَاطِمَةْ صِحَّةِ وَ عَافِيَةْ');
INSERT INTO `jawaban` VALUES (125, 32, 'إنشاء اللّٰه');
INSERT INTO `jawaban` VALUES (126, 32, 'شفاكَ اللّٰه');
INSERT INTO `jawaban` VALUES (127, 32, 'شفاء عاجلا');
INSERT INTO `jawaban` VALUES (128, 32, 'شكرا كثيرا');

-- ----------------------------
-- Table structure for mufrodat
-- ----------------------------
DROP TABLE IF EXISTS `mufrodat`;
CREATE TABLE `mufrodat`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `bab` bigint NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `mufrodat` VALUES (21, 6, 'صُدَاعٌ');
INSERT INTO `mufrodat` VALUES (22, 6, 'حُمَّى');
INSERT INTO `mufrodat` VALUES (23, 6, 'زُكاَمٌ');
INSERT INTO `mufrodat` VALUES (24, 6, 'عِيَادَةُ الْمَرْضَى');
INSERT INTO `mufrodat` VALUES (25, 6, 'المُسْتَشْفَى');
INSERT INTO `mufrodat` VALUES (26, 6, 'مَرِيْضٌ');
INSERT INTO `mufrodat` VALUES (27, 6, 'الْوَصْفَةُ');
INSERT INTO `mufrodat` VALUES (28, 6, 'الدَّوَاءُ');
INSERT INTO `mufrodat` VALUES (29, 6, 'الصَّيْدَلِيَةُ');
INSERT INTO `mufrodat` VALUES (30, 6, 'شَفَى-يَشْفِي');
INSERT INTO `mufrodat` VALUES (31, 6, 'نَحِيْفٌ');
INSERT INTO `mufrodat` VALUES (32, 6, 'سَرَطَانٌ');
INSERT INTO `mufrodat` VALUES (33, 6, 'خَطِيْرٌ');
INSERT INTO `mufrodat` VALUES (34, 6, 'فَقْرُ الدَّمِ');
INSERT INTO `mufrodat` VALUES (35, 6, 'الدَّمُ');
INSERT INTO `mufrodat` VALUES (36, 6, 'سُرْعَةُ التَّعْبِ');

-- ----------------------------
-- Table structure for muhadasa
-- ----------------------------
DROP TABLE IF EXISTS `muhadasa`;
CREATE TABLE `muhadasa`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `soal` tinyint NULL DEFAULT NULL,
  `bab` tinyint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `muhadasa` VALUES (8, 1, 6);
INSERT INTO `muhadasa` VALUES (9, 2, 6);
INSERT INTO `muhadasa` VALUES (10, 3, 6);
INSERT INTO `muhadasa` VALUES (11, 4, 6);
INSERT INTO `muhadasa` VALUES (12, 5, 6);
INSERT INTO `muhadasa` VALUES (13, 6, 6);
INSERT INTO `muhadasa` VALUES (14, 7, 6);
INSERT INTO `muhadasa` VALUES (15, 8, 6);

-- ----------------------------
-- Table structure for qasirah
-- ----------------------------
DROP TABLE IF EXISTS `qasirah`;
CREATE TABLE `qasirah`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `bab` tinyint NULL DEFAULT NULL,
  `nomor` tinyint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qasirah
-- ----------------------------
INSERT INTO `qasirah` VALUES (1, 6, 1);
INSERT INTO `qasirah` VALUES (2, 6, 2);
INSERT INTO `qasirah` VALUES (3, 6, 3);
INSERT INTO `qasirah` VALUES (4, 6, 4);
INSERT INTO `qasirah` VALUES (5, 6, 5);
INSERT INTO `qasirah` VALUES (6, 6, 6);
INSERT INTO `qasirah` VALUES (7, 6, 7);
INSERT INTO `qasirah` VALUES (8, 6, 8);
INSERT INTO `qasirah` VALUES (9, 6, 9);
INSERT INTO `qasirah` VALUES (10, 6, 10);
INSERT INTO `qasirah` VALUES (11, 6, 11);
INSERT INTO `qasirah` VALUES (12, 6, 12);

-- ----------------------------
-- Table structure for qisah
-- ----------------------------
DROP TABLE IF EXISTS `qisah`;
CREATE TABLE `qisah`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `bab` tinyint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qisah
-- ----------------------------
INSERT INTO `qisah` VALUES (1, 6);

-- ----------------------------
-- Table structure for tadrib
-- ----------------------------
DROP TABLE IF EXISTS `tadrib`;
CREATE TABLE `tadrib`  (
  `id` smallint NOT NULL AUTO_INCREMENT,
  `bab` tinyint NULL DEFAULT NULL,
  `nomor_soal` tinyint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `tadrib` VALUES (15, 6, 1);
INSERT INTO `tadrib` VALUES (16, 6, 2);
INSERT INTO `tadrib` VALUES (17, 6, 3);
INSERT INTO `tadrib` VALUES (18, 6, 4);
INSERT INTO `tadrib` VALUES (19, 6, 5);
INSERT INTO `tadrib` VALUES (20, 6, 6);
INSERT INTO `tadrib` VALUES (21, 6, 7);
INSERT INTO `tadrib` VALUES (22, 6, 8);
INSERT INTO `tadrib` VALUES (23, 6, 9);
INSERT INTO `tadrib` VALUES (24, 6, 10);
INSERT INTO `tadrib` VALUES (25, 6, 11);
INSERT INTO `tadrib` VALUES (26, 6, 12);
INSERT INTO `tadrib` VALUES (27, 6, 13);
INSERT INTO `tadrib` VALUES (28, 6, 14);

-- ----------------------------
-- Table structure for tamrin
-- ----------------------------
DROP TABLE IF EXISTS `tamrin`;
CREATE TABLE `tamrin`  (
  `id` smallint NOT NULL AUTO_INCREMENT,
  `bab` tinyint NULL DEFAULT NULL,
  `nomor_soal` tinyint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tamrin
-- ----------------------------
INSERT INTO `tamrin` VALUES (29, 6, 1);
INSERT INTO `tamrin` VALUES (30, 6, 2);
INSERT INTO `tamrin` VALUES (31, 6, 3);
INSERT INTO `tamrin` VALUES (32, 6, 4);
INSERT INTO `tamrin` VALUES (33, 6, 5);
INSERT INTO `tamrin` VALUES (34, 6, 7);

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
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', '$2y$10$2R86LkuIgGUttBZCRCpTmOO7JCObIjKHHt1OdOyBEnf9/zrjrOGx6', '2022-04-12 14:20:26', '2022-04-12 14:20:26');

SET FOREIGN_KEY_CHECKS = 1;
