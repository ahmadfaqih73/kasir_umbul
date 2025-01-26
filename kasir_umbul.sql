/*
 Navicat Premium Data Transfer

 Source Server         : PRIVATE
 Source Server Type    : MySQL
 Source Server Version : 100427 (10.4.27-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : kasir_umbul

 Target Server Type    : MySQL
 Target Server Version : 100427 (10.4.27-MariaDB)
 File Encoding         : 65001

 Date: 26/01/2025 15:19:40
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
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

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
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

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
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

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
  `harga_jual` int NULL DEFAULT NULL,
  `jumlah` double NULL DEFAULT NULL,
  `total_harga` double NULL DEFAULT NULL,
  `waktu` date NULL DEFAULT NULL,
  `nama_menu` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 40 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES (1, 3, 3, 10000, 12, 120000, '2025-01-25', 'minuman jerus');
INSERT INTO `transaksi` VALUES (2, 2, 2, 10000, 10, 100000, '2025-01-25', 'makanan');
INSERT INTO `transaksi` VALUES (3, 4, 2, 10000, 5, 50000, '2025-01-25', 'jasuke');
INSERT INTO `transaksi` VALUES (4, 5, 2, 15000, 8, 120000, '2025-01-25', 'Sosis');
INSERT INTO `transaksi` VALUES (6, 2, 2, 10000, 2, 20000, '2025-01-25', 'Rujak');
INSERT INTO `transaksi` VALUES (7, 3, 3, 10000, 10, 100000, '2025-01-25', 'minuman jeruk');
INSERT INTO `transaksi` VALUES (8, 7, 2, 5000, 20, 100000, '2025-01-25', 'Cilog');
INSERT INTO `transaksi` VALUES (9, 6, 2, 10000, 17, 170000, '2025-01-25', 'Arummanis');
INSERT INTO `transaksi` VALUES (11, 5, 2, 15000, 4, 60000, '2025-01-25', 'Sosis');
INSERT INTO `transaksi` VALUES (12, 4, 2, 10000, 5, 50000, '2025-01-25', 'jasuke');
INSERT INTO `transaksi` VALUES (13, 5, 2, 10000, 1, 10000, '2025-01-25', 'Sosis');
INSERT INTO `transaksi` VALUES (15, 7, 2, 5000, 5, 25000, '2025-01-25', 'Cilog');
INSERT INTO `transaksi` VALUES (16, 3, 3, 5000, 10, 50000, '2025-01-25', 'minuman jeruk');
INSERT INTO `transaksi` VALUES (17, 2, 2, 10000, 2, 20000, '2025-01-25', 'Rujak');
INSERT INTO `transaksi` VALUES (18, 2, 2, 10000, 1, 10000, '2025-01-25', 'Rujak');
INSERT INTO `transaksi` VALUES (19, 4, 2, 10000, 10, 100000, '2025-01-26', 'jasuke');
INSERT INTO `transaksi` VALUES (20, 7, 2, 5000, 24, 120000, '2025-01-26', 'cilog');
INSERT INTO `transaksi` VALUES (21, 5, 2, 10000, 5, 50000, '2025-01-26', 'sosis');
INSERT INTO `transaksi` VALUES (22, 2, 2, 10000, 14, 140000, '2025-01-26', 'rujak');
INSERT INTO `transaksi` VALUES (23, 2, 2, 10000, 1, 10000, '2025-01-26', 'rujak');
INSERT INTO `transaksi` VALUES (24, 6, 2, 10000, 21, 210000, '2025-01-26', 'arumanis');
INSERT INTO `transaksi` VALUES (26, 3, 3, 5000, 20, 100000, '2025-01-26', 'es jeruk');
INSERT INTO `transaksi` VALUES (27, 5, 2, 10000, 5, 50000, '2025-01-26', 'sosis');
INSERT INTO `transaksi` VALUES (28, 5, 2, 15000, 1, 15000, '2025-01-26', 'sosis');
INSERT INTO `transaksi` VALUES (29, 2, 2, 10000, 5, 50000, '2025-01-26', 'rujak');
INSERT INTO `transaksi` VALUES (30, 4, 2, 10000, 5, 50000, '2025-01-26', 'jasuke');
INSERT INTO `transaksi` VALUES (31, 7, 2, 5000, 10, 50000, '2025-01-26', 'cilog');
INSERT INTO `transaksi` VALUES (32, 6, 2, 10000, 11, 110000, '2025-01-26', 'arumanis');
INSERT INTO `transaksi` VALUES (33, 5, 2, 10000, 7, 70000, '2025-01-26', 'sosis');
INSERT INTO `transaksi` VALUES (34, 3, 3, 10000, 10, 100000, '2025-01-26', 'es jeruk');
INSERT INTO `transaksi` VALUES (35, 4, 2, 10000, 3, 30000, '2025-01-26', 'jasuke');
INSERT INTO `transaksi` VALUES (36, 3, 2, 10000, 3, 30000, '2025-01-26', 'es jeruk');
INSERT INTO `transaksi` VALUES (37, 7, 2, 5000, 7, 35000, '2025-01-26', 'cilog');
INSERT INTO `transaksi` VALUES (38, 5, 2, 15000, 2, 30000, '2025-01-26', 'sosis');
INSERT INTO `transaksi` VALUES (39, 6, 2, 10000, 1, 10000, '2025-01-26', 'arumanis');

SET FOREIGN_KEY_CHECKS = 1;
