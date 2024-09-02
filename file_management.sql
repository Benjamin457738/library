/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100432
 Source Host           : localhost:3306
 Source Schema         : file_management

 Target Server Type    : MySQL
 Target Server Version : 100432
 File Encoding         : 65001

 Date: 15/08/2024 21:04:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for files
-- ----------------------------
DROP TABLE IF EXISTS `files`;
CREATE TABLE `files`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `subjects` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dates` date NULL DEFAULT NULL,
  `info` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `teacher` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `school` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `filetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `grade` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `semester` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 110 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of files
-- ----------------------------
INSERT INTO `files` VALUES (94, 'web-design-proposal-file-pdf.pdf', 106792, 0, 'dfgdf', '2024-08-10', 'dfg', 'dfg', 'dfg', '???? ???', '1', '1', '');
INSERT INTO `files` VALUES (103, 'website-proposal-file-pdf.pdf', 96081, 0, 'dfg', '2024-08-01', 'dfg', 'dfg', 'dfg', 'ورقة عمل', '3', '1', '');
INSERT INTO `files` VALUES (108, 'bid-proposal-file-pdf.pdf', 86064, 0, 'التربية الصحية والبدنية', '2024-08-06', 'qwe', 'qwe', 'qwe', 'الكتاب الدراسي', '1', '1', 'qweqwe');
INSERT INTO `files` VALUES (109, 'business-proposal-file-pdf.pdf', 77438, 0, 'التفكير الناقد', '2024-08-07', 'asd', 'asd', 'asd', 'الكتاب الدراسي', '1', '1', 'asd');

SET FOREIGN_KEY_CHECKS = 1;
