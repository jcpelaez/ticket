/*
Navicat MySQL Data Transfer

Source Server         : conexionMysql
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2021-06-19 22:20:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `compania`
-- ----------------------------
DROP TABLE IF EXISTS `compania`;
CREATE TABLE `compania` (
`id_compania`  int(10) NOT NULL AUTO_INCREMENT ,
`nombre`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`nit`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`direccion`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`telefono`  bigint(20) NULL DEFAULT NULL ,
`correo`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
PRIMARY KEY (`id_compania`)
)
ENGINE=MyISAM
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Table structure for `cuenta`
-- ----------------------------
DROP TABLE IF EXISTS `cuenta`;
CREATE TABLE `cuenta` (
`id_usuario`  int(11) NOT NULL AUTO_INCREMENT ,
`usuario`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`clave`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`id_compania`  int(11) NOT NULL ,
PRIMARY KEY (`id_usuario`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
;

-- ----------------------------
-- Table structure for `historia`
-- ----------------------------
DROP TABLE IF EXISTS `historia`;
CREATE TABLE `historia` (
`id_historia`  int(11) NOT NULL AUTO_INCREMENT ,
`nombre_historia`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`id_proyecto`  int(11) NOT NULL ,
`id_usuario`  int(11) NOT NULL ,
PRIMARY KEY (`id_historia`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
;

-- ----------------------------
-- Table structure for `proyecto`
-- ----------------------------
DROP TABLE IF EXISTS `proyecto`;
CREATE TABLE `proyecto` (
`id_proyecto`  int(11) NOT NULL AUTO_INCREMENT ,
`nombre_proyecto`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`id_compania`  int(11) NOT NULL ,
PRIMARY KEY (`id_proyecto`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
;

-- ----------------------------
-- Table structure for `ticket`
-- ----------------------------
DROP TABLE IF EXISTS `ticket`;
CREATE TABLE `ticket` (
`id_ticket`  int(11) NOT NULL AUTO_INCREMENT ,
`ticket`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`comentarios`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`estado`  varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`id_historia`  int(11) NOT NULL ,
PRIMARY KEY (`id_ticket`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;
