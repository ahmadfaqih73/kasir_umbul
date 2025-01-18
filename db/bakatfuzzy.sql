/*
 Navicat Premium Data Transfer

 Source Server         : data
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : bakatfuzzy

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 23/10/2022 20:46:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for fuzzy
-- ----------------------------
DROP TABLE IF EXISTS `fuzzy`;
CREATE TABLE `fuzzy`  (
  `id_fuzzy` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_kreatif_1` double NULL DEFAULT NULL,
  `status_1` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_komunikasi_1` double NULL DEFAULT NULL,
  `status_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_baik_1` double NULL DEFAULT NULL,
  `status_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_penghargaan_1` double NULL DEFAULT NULL,
  `status_4` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_kreatif_2` double NULL DEFAULT NULL,
  `status_5` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_komunikasi_2` double NULL DEFAULT NULL,
  `status_6` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_baik_2` double NULL DEFAULT NULL,
  `status_7` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_penghargaan_2` double NULL DEFAULT NULL,
  `status_8` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_kreatif_3` double NULL DEFAULT NULL,
  `status_9` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_komunikasi_3` double NULL DEFAULT NULL,
  `status_10` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_baik_3` double NULL DEFAULT NULL,
  `status_11` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_penghargaan_3` double NULL DEFAULT NULL,
  `status_12` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_fuzzy`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of fuzzy
-- ----------------------------
INSERT INTO `fuzzy` VALUES (1, 'ada', 0.25, 'Kurang', 0, 'Kurang', 0.1, 'Kurang', 0, 'Ku', 0.75, 'cukup', 0.75, 'Cukup', 0.9, 'Cukup', 0.25, 'Cu', 0, 'Baik', 0.25, 'Baik', 0, 'Baik', 0.75, 'ba');

-- ----------------------------
-- Table structure for hasil
-- ----------------------------
DROP TABLE IF EXISTS `hasil`;
CREATE TABLE `hasil`  (
  `id_hasil` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_hasil_1` double NULL DEFAULT NULL,
  `status_1` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_hasil_2` double NULL DEFAULT NULL,
  `status_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_hasil_3` double NULL DEFAULT NULL,
  `status_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_hasil`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of hasil
-- ----------------------------
INSERT INTO `hasil` VALUES (1, 'ada', 0.1, 'Tidak cocok', 0.4, 'Cocok', 0, 'Sangat Cocok');

-- ----------------------------
-- Table structure for implikasi
-- ----------------------------
DROP TABLE IF EXISTS `implikasi`;
CREATE TABLE `implikasi`  (
  `id_implikasi` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `R1` double NULL DEFAULT NULL,
  `R2` double NULL DEFAULT NULL,
  `R3` double NULL DEFAULT NULL,
  `R4` double NULL DEFAULT NULL,
  `R5` double NULL DEFAULT NULL,
  `R6` double NULL DEFAULT NULL,
  `R7` double NULL DEFAULT NULL,
  `R8` double NULL DEFAULT NULL,
  `R9` double NULL DEFAULT NULL,
  `R10` double NULL DEFAULT NULL,
  `R11` double NULL DEFAULT NULL,
  `R12` double NULL DEFAULT NULL,
  `R13` double NULL DEFAULT NULL,
  `R14` double NULL DEFAULT NULL,
  `R15` double NULL DEFAULT NULL,
  `R16` double NULL DEFAULT NULL,
  `R17` double NULL DEFAULT NULL,
  `R18` double NULL DEFAULT NULL,
  `R19` double NULL DEFAULT NULL,
  `R20` double NULL DEFAULT NULL,
  `R21` double NULL DEFAULT NULL,
  `R22` double NULL DEFAULT NULL,
  `R23` double NULL DEFAULT NULL,
  `R24` double NULL DEFAULT NULL,
  `R25` double NULL DEFAULT NULL,
  `R26` double NULL DEFAULT NULL,
  `R27` double NULL DEFAULT NULL,
  `R28` double NULL DEFAULT NULL,
  `R29` double NULL DEFAULT NULL,
  `R30` double NULL DEFAULT NULL,
  `R31` double NULL DEFAULT NULL,
  `R32` double NULL DEFAULT NULL,
  `R33` double NULL DEFAULT NULL,
  `R34` double NULL DEFAULT NULL,
  `R35` double NULL DEFAULT NULL,
  `R36` double NULL DEFAULT NULL,
  `R37` double NULL DEFAULT NULL,
  `R38` double NULL DEFAULT NULL,
  `R39` double NULL DEFAULT NULL,
  `R40` double NULL DEFAULT NULL,
  `R41` double NULL DEFAULT NULL,
  `R42` double NULL DEFAULT NULL,
  `R43` double NULL DEFAULT NULL,
  `R44` double NULL DEFAULT NULL,
  `R45` double NULL DEFAULT NULL,
  `R46` double NULL DEFAULT NULL,
  `R47` double NULL DEFAULT NULL,
  `R48` double NULL DEFAULT NULL,
  `R49` double NULL DEFAULT NULL,
  `R50` double NULL DEFAULT NULL,
  `R51` double NULL DEFAULT NULL,
  `R52` double NULL DEFAULT NULL,
  `R53` double NULL DEFAULT NULL,
  `R54` double NULL DEFAULT NULL,
  `R55` double NULL DEFAULT NULL,
  `R56` double NULL DEFAULT NULL,
  `R57` double NULL DEFAULT NULL,
  `R58` double NULL DEFAULT NULL,
  `R59` double NULL DEFAULT NULL,
  `R60` double NULL DEFAULT NULL,
  `R61` double NULL DEFAULT NULL,
  `R62` double NULL DEFAULT NULL,
  `R63` double NULL DEFAULT NULL,
  `R64` double NULL DEFAULT NULL,
  `R65` double NULL DEFAULT NULL,
  `R66` double NULL DEFAULT NULL,
  `R67` double NULL DEFAULT NULL,
  `R68` double NULL DEFAULT NULL,
  `R69` double NULL DEFAULT NULL,
  `R70` double NULL DEFAULT NULL,
  `R71` double NULL DEFAULT NULL,
  `R72` double NULL DEFAULT NULL,
  `R73` double NULL DEFAULT NULL,
  `R74` double NULL DEFAULT NULL,
  `R75` double NULL DEFAULT NULL,
  `R76` double NULL DEFAULT NULL,
  `R77` double NULL DEFAULT NULL,
  `R78` double NULL DEFAULT NULL,
  `R79` double NULL DEFAULT NULL,
  `R80` double NULL DEFAULT NULL,
  `R81` double NULL DEFAULT NULL,
  PRIMARY KEY (`id_implikasi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of implikasi
-- ----------------------------
INSERT INTO `implikasi` VALUES (1, 'ada', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.1, 0.1, 0, 0.25, 0.25, 0, 0, 0, 0, 0.1, 0.1, 0, 0.25, 0.25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.1, 0.1, 0, 0.25, 0.75, 0, 0, 0, 0, 0.1, 0.1, 0, 0.25, 0.25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- ----------------------------
-- Table structure for rule
-- ----------------------------
DROP TABLE IF EXISTS `rule`;
CREATE TABLE `rule`  (
  `id_rule` int NOT NULL AUTO_INCREMENT,
  `kreatif` int NULL DEFAULT NULL,
  `komunikasi_data` int NULL DEFAULT NULL,
  `baik_untuk_orang_lain` int NULL DEFAULT NULL,
  `penghargaan` int NULL DEFAULT NULL,
  `output` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_rule`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rule
-- ----------------------------

-- ----------------------------
-- Table structure for tb_var_input
-- ----------------------------
DROP TABLE IF EXISTS `tb_var_input`;
CREATE TABLE `tb_var_input`  (
  `id_var_input` int NOT NULL AUTO_INCREMENT,
  `nama_variabel` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kondisi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_awal` double NULL DEFAULT NULL,
  `nilai_akhir` double NULL DEFAULT NULL,
  `bentuk` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_var_input`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_var_input
-- ----------------------------
INSERT INTO `tb_var_input` VALUES (3, 'Kreatif', 'Kurang', 50, 70, 'trapesium');
INSERT INTO `tb_var_input` VALUES (4, 'kreatif ', 'cukup', 50, 70, 'segitiga');
INSERT INTO `tb_var_input` VALUES (5, 'kreatif', 'cukup', 70, 90, 'segitiga');
INSERT INTO `tb_var_input` VALUES (6, 'kreatif', 'Baik', 70, 90, 'trapesium');
INSERT INTO `tb_var_input` VALUES (7, 'Komunikasi data', 'Kurang', 50, 70, 'trapesium');
INSERT INTO `tb_var_input` VALUES (8, 'Komunikasi data', 'Cukup', 50, 70, 'segitiga');
INSERT INTO `tb_var_input` VALUES (9, 'Komunikasi data', 'Cukup', 70, 90, 'segitiga');
INSERT INTO `tb_var_input` VALUES (10, 'Komunikasi data', 'Baik', 70, 90, 'trapesium');
INSERT INTO `tb_var_input` VALUES (11, 'Baik untuk orang lain', 'Kurang', 50, 70, 'trapesium');
INSERT INTO `tb_var_input` VALUES (12, 'Baik untuk orang lain', 'Cukup', 50, 70, 'Segitiga');
INSERT INTO `tb_var_input` VALUES (13, 'Baik untuk orang lain', 'Cukup', 70, 90, 'Segitiga');
INSERT INTO `tb_var_input` VALUES (14, 'Baik untuk orang lain', 'Baik', 70, 90, 'trapesium');
INSERT INTO `tb_var_input` VALUES (15, 'Penghargaan dari orang lain', 'Kurang', 50, 70, 'trapesium');
INSERT INTO `tb_var_input` VALUES (16, 'Penghargaan dari orang lain', 'Cukup', 50, 70, 'Segitiga');
INSERT INTO `tb_var_input` VALUES (17, 'Penghargaan dari orang lain', 'Cukup', 70, 90, 'segitiga');
INSERT INTO `tb_var_input` VALUES (18, 'Penghargaan dari orang lain', 'baik', 70, 90, 'trapesium');

-- ----------------------------
-- Table structure for tb_var_output
-- ----------------------------
DROP TABLE IF EXISTS `tb_var_output`;
CREATE TABLE `tb_var_output`  (
  `id_var_output` int NOT NULL AUTO_INCREMENT,
  `nama_variabel` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kondisi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_awal` double NULL DEFAULT NULL,
  `nilai_akhir` double NULL DEFAULT NULL,
  `bentuk` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_var_output`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_var_output
-- ----------------------------
INSERT INTO `tb_var_output` VALUES (3, 'PENGELOLA KEPEGAWAIAN', 'Tidak cocok', 30, 50, 'trapesium');
INSERT INTO `tb_var_output` VALUES (4, 'PENGELOLA KEPEGAWAIAN', 'Cocok', 40, 60, 'Segitiga');
INSERT INTO `tb_var_output` VALUES (5, 'PENGELOLA KEPEGAWAIAN', 'Cocok', 60, 80, 'Segitiga');
INSERT INTO `tb_var_output` VALUES (6, 'PENGELOLA KEPEGAWAIAN', 'Sangat Cocok', 70, 90, 'Trapesium');

SET FOREIGN_KEY_CHECKS = 1;
