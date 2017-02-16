/*
 Navicat Premium Data Transfer

 Source Server         : SERVER
 Source Server Type    : MySQL
 Source Server Version : 100113
 Source Host           : localhost
 Source Database       : valija

 Target Server Type    : MySQL
 Target Server Version : 100113
 File Encoding         : utf-8

 Date: 01/16/2017 08:47:11 AM
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `v_choferes`
-- ----------------------------
DROP TABLE IF EXISTS `v_choferes`;
CREATE TABLE `v_choferes` (
  `id_chofer` int(11) NOT NULL AUTO_INCREMENT,
  `nombreChofer` varchar(200) DEFAULT NULL,
  `estatus` char(1) DEFAULT '1' COMMENT '1 => Activo\r\n0 => Inactivo',
  PRIMARY KEY (`id_chofer`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `v_choferes`
-- ----------------------------
BEGIN;
INSERT INTO `v_choferes` VALUES ('1', 'CASTILLO NEGRON ANGEL JOSEPH', '1'), ('2', 'SANSORES BAEZA MANUEL ROBERTO', '1');
COMMIT;

-- ----------------------------
--  Table structure for `v_ci_sessions`
-- ----------------------------
DROP TABLE IF EXISTS `v_ci_sessions`;
CREATE TABLE `v_ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `v_ci_sessions`
-- ----------------------------
BEGIN;
INSERT INTO `v_ci_sessions` VALUES ('2535a288dc7c6b4d5fff30809a404fdc', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '1484533999', 'a:5:{s:9:\"user_data\";s:0:\"\";s:12:\"sp_Idusuario\";s:1:\"1\";s:10:\"sp_usuario\";s:15:\"christian.lopez\";s:9:\"sp_nombre\";s:26:\"LOPEZ DIAZ CHRISTIAN AARON\";s:12:\"sp_logged_in\";b:1;}');
COMMIT;

-- ----------------------------
--  Table structure for `v_destino`
-- ----------------------------
DROP TABLE IF EXISTS `v_destino`;
CREATE TABLE `v_destino` (
  `id_destino` int(11) NOT NULL AUTO_INCREMENT,
  `destino` varchar(60) DEFAULT NULL,
  `estatus` char(1) DEFAULT '1' COMMENT '1 => Activo\r\n0 => Inactivo\r\n',
  PRIMARY KEY (`id_destino`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `v_destino`
-- ----------------------------
BEGIN;
INSERT INTO `v_destino` VALUES ('1', 'INALÁMBRICA', '1'), ('2', 'PAULO FREYRE', '1'), ('3', 'IZAMAL', '1'), ('4', 'MOTUL', '1'), ('5', 'TEKAX', '1'), ('6', 'TICUL', '1'), ('7', 'TIZIMIN', '1'), ('8', 'PETO', '1'), ('9', 'MAXCANU', '1'), ('10', 'HUNUCMA', '1'), ('11', 'VALLADOLID', '1'), ('12', 'YAXCABA', '1'), ('13', 'COORD. SOPTEC', '1');
COMMIT;

-- ----------------------------
--  Table structure for `v_estatus`
-- ----------------------------
DROP TABLE IF EXISTS `v_estatus`;
CREATE TABLE `v_estatus` (
  `id_estatus` tinyint(2) NOT NULL AUTO_INCREMENT,
  `estatus` varchar(30) DEFAULT NULL,
  `siglas` varchar(10) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_estatus`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `v_estatus`
-- ----------------------------
BEGIN;
INSERT INTO `v_estatus` VALUES ('1', 'NUEVO', 'NVO', 'Cuando el usuario elabora la solicitud y la firma.\rEl administrador de valija, tendra la facultad de modificar o cancelar, dicha solicitud si asÍ se requiere.', '1'), ('2', 'RECOLECTA EN VALIJA', 'RVA', 'El usuario entrega los sobres a enviar en las oficinas de valija.\nEl administrador de valija coteja la lista de solictudes, con los sobres y hace la recepcion de los mismos. Firma una copia de la solicitud como acuse de recibo de USR.', '1'), ('3', 'RECOLECTA ENLACE FORÁNEO', 'REN', 'USRE recolecta los paquetes de USR del área, esto es para programar envio a Mérida.', '1'), ('4', 'RECIBE VALIJA DE CEDE', 'RVC', 'ADMV recibe los paquetes foráneos del chofer para entrega en Mérida, firma y sella de recibido.', '1'), ('5', 'RECEPCIÓN ENLACE ', 'RE', 'Cuando el sobre que se traslado de Mérida a CEDE es entregado al enlace  fóraneo, se cambia cuando el USRE elabora su reporte de sobres recibidos.', '1'), ('6', 'RECEPCIÓN TRASLADO INTERCEDE', 'REF', 'USRE recibe paquete de otro USRE ', '1'), ('7', 'EN TRÁNSITO', 'TR', 'ADMV asigna fecha de entrega, así como chofer.\nLa oficina de valija hace entrega a los choferes, los sobres  recepcionados según la ruta correspondiente para su traslado al CEDE.', '1'), ('8', 'TRÁNSITO CEDE', 'TRC', 'Cuado el enlace foráneo envia a Mérida', '1'), ('9', 'TRÁNSITO INTER FORÁNEO', 'TRF', 'Traslados inter CEDE, cuando se envia de un CEDE a otro CEDE.', '1'), ('10', 'TRÁNSITO LOCAL', 'TL', 'Programación para entrega local con otro chofer', '1'), ('11', 'CANCELADO', 'C', 'El administrador de valija, tendra la facultad de modificar o cancelar, dicha solicitud si asi se requiere.', '1'), ('12', 'RECIBIDO DESTINATARI', 'RBD', 'Cuando el administrador de valija o el enlace  entrega los sobres  al destinatario, el destinatario (usuario) o administrador de valija son los autorizados para modificar este estatus. Se puede pasar de estatus RE a RBD', '1');
COMMIT;

-- ----------------------------
--  Table structure for `v_rel_rutas`
-- ----------------------------
DROP TABLE IF EXISTS `v_rel_rutas`;
CREATE TABLE `v_rel_rutas` (
  `id_rel` int(11) NOT NULL AUTO_INCREMENT,
  `id_destino` int(11) NOT NULL,
  `id_chofer` int(11) NOT NULL,
  `orden` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_rel`),
  KEY `id_destino` (`id_destino`),
  KEY `id_chofer` (`id_chofer`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `v_rel_rutas`
-- ----------------------------
BEGIN;
INSERT INTO `v_rel_rutas` VALUES ('1', '4', '1', '1'), ('2', '7', '1', '1'), ('3', '11', '1', '1'), ('4', '12', '1', '1'), ('5', '3', '1', '1'), ('6', '1', '1', '1'), ('7', '2', '1', '2'), ('8', '8', '2', '1'), ('9', '5', '2', '1'), ('10', '6', '2', '1'), ('11', '9', '2', '1'), ('12', '10', '2', '1'), ('13', '1', '2', '2'), ('14', '2', '2', '1');
COMMIT;

-- ----------------------------
--  Table structure for `v_solicitudes`
-- ----------------------------
DROP TABLE IF EXISTS `v_solicitudes`;
CREATE TABLE `v_solicitudes` (
  `id_sol` int(11) NOT NULL AUTO_INCREMENT,
  `folio` varchar(20) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_elaboracion` datetime DEFAULT NULL,
  `area_destino` int(11) NOT NULL,
  `destinatario` int(11) NOT NULL,
  `detalle_envio` text,
  `observaciones` varchar(255) DEFAULT NULL,
  `id_chofer` tinyint(3) DEFAULT '0',
  `fecha_envio` datetime DEFAULT NULL,
  `fecha_recepcion` datetime DEFAULT NULL,
  `fecha_modificacion` timestamp NULL DEFAULT NULL,
  `estatus` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_sol`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `v_solicitudes_historico_estatus`
-- ----------------------------
DROP TABLE IF EXISTS `v_solicitudes_historico_estatus`;
CREATE TABLE `v_solicitudes_historico_estatus` (
  `id_hist_status` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_sol` int(11) NOT NULL,
  `id_estatus` tinyint(2) NOT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  PRIMARY KEY (`id_hist_status`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_sol` (`id_sol`),
  KEY `id_estatus` (`id_estatus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `v_tiposusuarios`
-- ----------------------------
DROP TABLE IF EXISTS `v_tiposusuarios`;
CREATE TABLE `v_tiposusuarios` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_tipo`),
  KEY `id_tipo` (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `v_tiposusuarios`
-- ----------------------------
BEGIN;
INSERT INTO `v_tiposusuarios` VALUES ('1', 'ADMINISTRADOR VALIJA'), ('2', 'USUARIO ENLACE'), ('3', 'USUARIO');
COMMIT;

-- ----------------------------
--  Table structure for `v_usuarios`
-- ----------------------------
DROP TABLE IF EXISTS `v_usuarios`;
CREATE TABLE `v_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `correo` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(20) NOT NULL DEFAULT '',
  `ext` varchar(20) DEFAULT '',
  `cel` varchar(20) NOT NULL DEFAULT '',
  `cargo` varchar(150) NOT NULL DEFAULT '',
  `fecha_registro` datetime NOT NULL,
  `fecha_modificacion` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `fecha_ultimoAcceso` datetime NOT NULL,
  `estatus` char(1) NOT NULL DEFAULT '0' COMMENT '0 =>  Inactivo\r\n1 => Activo\r\n2 => Eliminado',
  PRIMARY KEY (`id_usuario`),
  KEY `usuario` (`usuario`),
  KEY ` pass` (`pass`),
  KEY `tipo` (`id_tipo`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `v_usuarios`
-- ----------------------------
BEGIN;
INSERT INTO `v_usuarios` VALUES ('1', '1', 'christian.lopez', 'e10adc3949ba59abbe56e057f20f883e', 'LOPEZ DIAZ CHRISTIAN AARON', 'christian.lopez@yucatan.gob.mx', '9303950', '51303', '9992385365', 'ADMINISTRADOR DEL SISTEMA', '2014-11-17 10:19:54', '2016-04-06 18:49:11', '2016-01-29 10:26:15', '1'), ('2', '1', 'flor.caro', 'e10adc3949ba59abbe56e057f20f883e', 'CARO CANTON FLOR EMIRE', '', '9303950', '51137', '', 'RECEPCIÓN VALIJA', '0000-00-00 00:00:00', '2017-01-12 20:31:49', '0000-00-00 00:00:00', '1'), ('3', '2', 'judith.cabrera', 'e10adc3949ba59abbe56e057f20f883e', 'CABRERA RIOSCOVIAN JUDITH', 'judith.cabrera@yucatan.gob.mx', '9303950', '51137', '', 'RESPOSABLE DE GESTIÓN DE LA CALIDAD', '0000-00-00 00:00:00', '2016-04-06 18:48:35', '0000-00-00 00:00:00', '1'), ('4', '2', 'luis.sanchez', 'e10adc3949ba59abbe56e057f20f883e', 'SANCHEZ PACHECO LUIS MANUEL', 'luis.sanchezp@yucatan.gob.mx', '9303950', '51262', '', 'RESPONSABLE DE SOPORTE TÉCNICO EN CEDE', '0000-00-00 00:00:00', '2017-01-12 20:32:13', '0000-00-00 00:00:00', '1'), ('5', '3', 'nicolas.parra', 'e10adc3949ba59abbe56e057f20f883e', 'PARRA CETINA NICOLAS DE JESUS', 'nickolas80p@gmail.com', '', '', '', 'REMITENTE 2', '0000-00-00 00:00:00', '2017-01-12 20:32:02', '0000-00-00 00:00:00', '1');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
