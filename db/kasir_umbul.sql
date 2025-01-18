/*
 Navicat Premium Data Transfer

 Source Server         : pribadi
 Source Server Type    : MySQL
 Source Server Version : 100427 (10.4.27-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : kasir_umbul

 Target Server Type    : MySQL
 Target Server Version : 100427 (10.4.27-MariaDB)
 File Encoding         : 65001

 Date: 18/01/2025 07:40:49
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for harga
-- ----------------------------
DROP TABLE IF EXISTS `harga`;
CREATE TABLE `harga`  (
  `id_harga` int NOT NULL AUTO_INCREMENT,
  `jualan_jenis` int NULL DEFAULT NULL,
  `penjual_id` int NULL DEFAULT NULL,
  `harga` double NULL DEFAULT NULL,
  `nama_menu` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_harga`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of harga
-- ----------------------------
INSERT INTO `harga` VALUES (1, 2, 7, 5000, 'cilog');
INSERT INTO `harga` VALUES (2, 2, 2, 10000, 'Rujak');
INSERT INTO `harga` VALUES (3, 3, 2, 5000, 'Aqua Kecil');
INSERT INTO `harga` VALUES (4, 3, 2, 10000, 'Aqua Besar');
INSERT INTO `harga` VALUES (5, 3, 2, 5000, 'Kopi');
INSERT INTO `harga` VALUES (6, 3, 3, 10000, 'Es jeruk');
INSERT INTO `harga` VALUES (7, 3, 3, 5000, 'pop ice');
INSERT INTO `harga` VALUES (8, 2, 6, 10000, 'Arum Manis');
INSERT INTO `harga` VALUES (9, 2, 6, 5000, 'salad kecil');
INSERT INTO `harga` VALUES (10, 2, 4, 10000, 'Jasuke besar');
INSERT INTO `harga` VALUES (11, 2, 5, 10000, 'Sosis');

-- ----------------------------
-- Table structure for jenis_jualan
-- ----------------------------
DROP TABLE IF EXISTS `jenis_jualan`;
CREATE TABLE `jenis_jualan`  (
  `id_jenis_jualan` int NOT NULL AUTO_INCREMENT,
  `jenis_dijual` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_jenis_jualan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jenis_jualan
-- ----------------------------
INSERT INTO `jenis_jualan` VALUES (2, 'makanan');
INSERT INTO `jenis_jualan` VALUES (3, 'Minuman');
INSERT INTO `jenis_jualan` VALUES (5, 'Mainan');

-- ----------------------------
-- Table structure for penjual
-- ----------------------------
DROP TABLE IF EXISTS `penjual`;
CREATE TABLE `penjual`  (
  `id_penjual` int NOT NULL AUTO_INCREMENT,
  `nama_penjual` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_penjual`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of penjual
-- ----------------------------
INSERT INTO `penjual` VALUES (2, 'Bu Partini');
INSERT INTO `penjual` VALUES (3, 'Pak Rowaji');
INSERT INTO `penjual` VALUES (4, 'Pak Suyono');
INSERT INTO `penjual` VALUES (5, 'Pak Hadi');
INSERT INTO `penjual` VALUES (6, 'Pak Nur');
INSERT INTO `penjual` VALUES (7, 'Pak Habib');

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi`  (
  `id_transaksi` int NOT NULL AUTO_INCREMENT,
  `penjual_nama` int NULL DEFAULT NULL,
  `jenis_menu` int NULL DEFAULT NULL,
  `harga` int NULL DEFAULT NULL,
  `jumlah` double NULL DEFAULT NULL,
  `total_harga` double NULL DEFAULT NULL,
  `waktu` date NULL DEFAULT NULL,
  `nama_menu` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES (1, 7, 2, 5000, 20, 100000, '2025-01-17', 'cilog');
INSERT INTO `transaksi` VALUES (2, 7, 2, 5000, 15, 75000, '2025-01-17', 'cilog');
INSERT INTO `transaksi` VALUES (3, 2, 2, 10000, 5, 50000, '2025-01-17', 'Rujak');
INSERT INTO `transaksi` VALUES (4, 2, 3, 10000, 5, 50000, '2025-01-17', 'botol');
INSERT INTO `transaksi` VALUES (5, 3, 3, 10000, 10, 100000, '2025-01-17', 'Es Jeruk');
INSERT INTO `transaksi` VALUES (6, 3, 3, 5000, 15, 75000, '2025-01-17', 'Pop Ice');
INSERT INTO `transaksi` VALUES (7, 4, 2, 10000, 15, 150000, '2025-01-17', 'Jasuke');
INSERT INTO `transaksi` VALUES (8, 5, 2, 15000, 5, 75000, '2025-01-17', 'Sosis');
INSERT INTO `transaksi` VALUES (9, 5, 5, 40000, 2, 80000, '2025-01-17', 'Mainan 1');
INSERT INTO `transaksi` VALUES (10, 6, 2, 10000, 15, 150000, '2025-01-17', 'Arummanis');
INSERT INTO `transaksi` VALUES (11, 6, 2, 5000, 7, 35000, '2025-01-17', 'salad');
INSERT INTO `transaksi` VALUES (12, 7, 2, 5000, 15, 75000, '2025-01-18', 'cilog');
INSERT INTO `transaksi` VALUES (13, 2, 2, 10000, 5, 50000, '2025-01-18', 'Botol');
INSERT INTO `transaksi` VALUES (14, 2, 3, 5000, 5, 25000, '2025-01-18', 'Botol');
INSERT INTO `transaksi` VALUES (15, 3, 3, 5000, 25, 125000, '2025-01-18', 'pop ice');
INSERT INTO `transaksi` VALUES (16, 3, 2, 15000, 14, 210000, '2025-01-18', 'ice');
INSERT INTO `transaksi` VALUES (17, 4, 2, 10000, 7, 70000, '2025-01-18', 'sosis');
INSERT INTO `transaksi` VALUES (18, 4, 2, 10000, 8, 80000, '2025-01-18', 'sosis');
INSERT INTO `transaksi` VALUES (19, 5, 2, 10000, 9, 90000, '2025-01-18', 'jasuke');
INSERT INTO `transaksi` VALUES (20, 5, 5, 25000, 2, 50000, '2025-01-18', 'jasuke');
INSERT INTO `transaksi` VALUES (21, 6, 2, 10000, 13, 130000, '2025-01-18', 'arummanis');
INSERT INTO `transaksi` VALUES (22, 6, 2, 5000, 1, 5000, '2025-01-18', 'salad');

SET FOREIGN_KEY_CHECKS = 1;
