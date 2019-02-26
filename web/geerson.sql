/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : geerson

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-02-26 10:38:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for mh_access
-- ----------------------------
DROP TABLE IF EXISTS `mh_access`;
CREATE TABLE `mh_access` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL COMMENT '层级关系',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '权限名称',
  `urls` varchar(1000) NOT NULL DEFAULT '' COMMENT 'json 数组',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态 1：有效 0：无效',
  `updated_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '最后一次更新时间',
  `created_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '插入时间',
  `sort` int(10) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8 COMMENT='权限详情表';

-- ----------------------------
-- Records of mh_access
-- ----------------------------
INSERT INTO `mh_access` VALUES ('5', '0', '首页', '[\"admin\\/default\\/index\"]', '1', '2017-09-13 16:37:24', '2017-04-12 13:44:04', '100');
INSERT INTO `mh_access` VALUES ('7', '0', '推荐位管理', '[\"admin\\/recommend\\/list\"]', '1', '2017-09-13 17:10:00', '2017-04-12 14:03:44', '96');
INSERT INTO `mh_access` VALUES ('8', '0', '系统设置', '[\"admin\\/system\\/config\\r\",\"admin\\/system\\/todo\"]', '1', '2017-09-14 11:02:41', '2017-04-12 15:28:06', '99');
INSERT INTO `mh_access` VALUES ('11', '7', '修改', '[\"admin\\/recommend\\/edit\"]', '1', '2017-09-13 17:13:00', '2017-04-13 15:03:58', '100');
INSERT INTO `mh_access` VALUES ('12', '7', '删除', '[\"admin\\/recommend\\/del\"]', '1', '2017-09-13 17:13:26', '2017-04-13 15:05:44', '100');
INSERT INTO `mh_access` VALUES ('13', '0', '内容模型管理', '[\"admin\\/model\\/list\"]', '1', '2017-09-13 16:47:31', '2017-04-19 16:09:33', '98');
INSERT INTO `mh_access` VALUES ('14', '0', '分类管理', '[\"admin\\/type\\/list\"]', '1', '2017-09-13 16:57:10', '2017-04-19 16:10:56', '97');
INSERT INTO `mh_access` VALUES ('15', '0', '广告位管理', '[\"admin\\/adverttype\\/list\"]', '1', '2017-09-13 17:22:54', '2017-04-19 16:13:01', '94');
INSERT INTO `mh_access` VALUES ('16', '0', '广告内容管理', '[\"admin\\/advert\\/adlist\"]', '1', '2017-09-13 17:28:50', '2017-04-19 16:14:39', '94');
INSERT INTO `mh_access` VALUES ('17', '0', '多语言管理', '[\"admin\\/lng\\/list\"]', '1', '2017-09-13 17:32:06', '2017-04-19 16:15:47', '93');
INSERT INTO `mh_access` VALUES ('18', '0', '网站管理员', '[\"admin\\/manage\\/list\"]', '1', '2017-09-13 17:36:05', '2017-04-19 16:16:53', '50');
INSERT INTO `mh_access` VALUES ('19', '0', '角色管理', '[\"admin\\/role\\/list\"]', '1', '2017-09-13 17:36:23', '2017-04-19 16:17:38', '49');
INSERT INTO `mh_access` VALUES ('20', '0', '权限管理', '[\"admin\\/access\\/list\"]', '1', '2017-09-13 17:36:33', '2017-04-19 16:18:31', '48');
INSERT INTO `mh_access` VALUES ('24', '13', '添加', '[\"admin\\/model\\/add\"]', '1', '2017-09-13 16:48:13', '2017-04-19 16:25:52', '100');
INSERT INTO `mh_access` VALUES ('25', '13', '修改', '[\"admin\\/model\\/edit\"]', '1', '2017-09-13 17:01:42', '2017-04-19 16:27:31', '100');
INSERT INTO `mh_access` VALUES ('26', '15', '添加', '[\"admin\\/adverttype\\/add\"]', '1', '2017-09-13 17:24:06', '2017-04-19 16:36:31', '100');
INSERT INTO `mh_access` VALUES ('27', '16', '添加', '[\"admin\\/advert\\/add\"]', '1', '2017-09-13 17:29:26', '2017-04-19 16:38:05', '100');
INSERT INTO `mh_access` VALUES ('28', '16', '编辑', '[\"admin\\/advert\\/mod\"]', '1', '2017-09-13 17:29:52', '2017-04-19 16:38:53', '100');
INSERT INTO `mh_access` VALUES ('29', '16', '删除与排序', '[\"admin\\/advert\\/deal\"]', '1', '2017-09-13 17:30:51', '2017-04-19 16:41:41', '100');
INSERT INTO `mh_access` VALUES ('30', '17', '添加', '[\"admin\\/lng\\/add\"]', '1', '2017-09-13 17:33:07', '2017-04-19 16:42:56', '100');
INSERT INTO `mh_access` VALUES ('31', '17', '修改', '[\"admin\\/lng\\/edit\"]', '1', '2017-09-13 17:34:15', '2017-04-19 16:44:17', '100');
INSERT INTO `mh_access` VALUES ('32', '18', '添加', '[\"admin\\/manage\\/reg\"]', '1', '0000-00-00 00:00:00', '2017-04-19 16:45:08', '100');
INSERT INTO `mh_access` VALUES ('33', '18', '修改密码', '[\"admin\\/manage\\/mod\"]', '1', '0000-00-00 00:00:00', '2017-04-19 16:45:50', '100');
INSERT INTO `mh_access` VALUES ('34', '18', '删除', '[\"admin\\/manage\\/del\"]', '1', '0000-00-00 00:00:00', '2017-04-19 16:46:55', '100');
INSERT INTO `mh_access` VALUES ('35', '18', '分配角色', '[\"admin\\/manage\\/make\"]', '1', '0000-00-00 00:00:00', '2017-04-19 16:48:08', '100');
INSERT INTO `mh_access` VALUES ('36', '19', '添加', '[\"admin\\/role\\/add\"]', '1', '2017-04-19 16:50:49', '2017-04-19 16:48:46', '100');
INSERT INTO `mh_access` VALUES ('37', '19', '编辑', '[\"admin\\/role\\/mod\"]', '1', '0000-00-00 00:00:00', '2017-04-19 16:49:37', '100');
INSERT INTO `mh_access` VALUES ('38', '19', '删除', '[\"admin\\/role\\/del\"]', '1', '0000-00-00 00:00:00', '2017-04-19 16:50:33', '100');
INSERT INTO `mh_access` VALUES ('39', '19', '设置权限', '[\"admin\\/role\\/setaccess\"]', '1', '0000-00-00 00:00:00', '2017-04-19 16:51:33', '100');
INSERT INTO `mh_access` VALUES ('40', '20', '添加', '[\"admin\\/access\\/add\"]', '1', '0000-00-00 00:00:00', '2017-04-19 16:52:20', '100');
INSERT INTO `mh_access` VALUES ('41', '20', '编辑', '[\"admin\\/access\\/mod\"]', '1', '0000-00-00 00:00:00', '2017-04-19 16:52:53', '100');
INSERT INTO `mh_access` VALUES ('42', '20', '删除', '[\"admin\\/access\\/del\"]', '1', '0000-00-00 00:00:00', '2017-04-19 16:54:05', '100');
INSERT INTO `mh_access` VALUES ('43', '13', '删除', '[\"admin\\/model\\/del\"]', '1', '0000-00-00 00:00:00', '2017-09-13 16:51:26', '100');
INSERT INTO `mh_access` VALUES ('44', '13', '字段管理', '[\"admin\\/model\\/attrlist\"]', '1', '0000-00-00 00:00:00', '2017-09-13 16:52:39', '100');
INSERT INTO `mh_access` VALUES ('45', '13', '模型字段添加', '[\"admin\\/model\\/attradd\"]', '1', '0000-00-00 00:00:00', '2017-09-13 16:53:43', '100');
INSERT INTO `mh_access` VALUES ('46', '13', '模型字段修改', '[\"admin\\/model\\/attredit\"]', '1', '0000-00-00 00:00:00', '2017-09-13 16:54:37', '100');
INSERT INTO `mh_access` VALUES ('47', '13', '模型字段排序与删除', '[\"admin\\/model\\/deal\"]', '1', '0000-00-00 00:00:00', '2017-09-13 16:56:00', '100');
INSERT INTO `mh_access` VALUES ('48', '14', '添加', '[\"admin\\/type\\/add\"]', '1', '0000-00-00 00:00:00', '2017-09-13 16:57:56', '100');
INSERT INTO `mh_access` VALUES ('49', '14', '修改', '[\"admin\\/type\\/mod\"]', '1', '0000-00-00 00:00:00', '2017-09-13 17:01:21', '100');
INSERT INTO `mh_access` VALUES ('50', '14', '删除', '[\"admin\\/type\\/del\"]', '1', '2017-09-13 17:07:50', '2017-09-13 17:06:08', '100');
INSERT INTO `mh_access` VALUES ('51', '14', '排序', '[\"admin\\/type\\/sort\"]', '1', '0000-00-00 00:00:00', '2017-09-13 17:07:27', '100');
INSERT INTO `mh_access` VALUES ('52', '0', '内容管理', '[\"admin\\/news\\/list\"]', '1', '2017-09-13 17:16:10', '2017-09-13 17:15:47', '95');
INSERT INTO `mh_access` VALUES ('53', '52', '添加', '[\"admin\\/news\\/add\\r\",\"admin\\/news\\/toadd\"]', '1', '0000-00-00 00:00:00', '2017-09-13 17:18:41', '100');
INSERT INTO `mh_access` VALUES ('54', '52', '修改', '[\"admin\\/news\\/edit\\r\",\"admin\\/news\\/toedit\"]', '1', '0000-00-00 00:00:00', '2017-09-13 17:19:55', '100');
INSERT INTO `mh_access` VALUES ('55', '52', '删除与排序', '[\"admin\\/news\\/deal\"]', '1', '2017-09-13 17:21:28', '2017-09-13 17:21:13', '100');
INSERT INTO `mh_access` VALUES ('56', '15', '编辑', '[\"admin\\/adverttype\\/edit\"]', '1', '0000-00-00 00:00:00', '2017-09-13 17:26:43', '100');
INSERT INTO `mh_access` VALUES ('57', '15', '删除', '[\"admin\\/adverttype\\/del\"]', '1', '0000-00-00 00:00:00', '2017-09-13 17:28:15', '100');
INSERT INTO `mh_access` VALUES ('58', '17', '删除与排序', '[\"admin\\/lng\\/deal\"]', '1', '0000-00-00 00:00:00', '2017-09-13 17:35:16', '100');
INSERT INTO `mh_access` VALUES ('59', '0', '网站主题', '[\"admin\\/skin\\/list\"]', '1', '0000-00-00 00:00:00', '2017-09-13 17:38:00', '92');
INSERT INTO `mh_access` VALUES ('60', '59', '添加', '[\"admin\\/skin\\/add\"]', '1', '0000-00-00 00:00:00', '2017-09-13 17:38:51', '100');
INSERT INTO `mh_access` VALUES ('61', '59', '开启', '[\"admin\\/skin\\/open\"]', '1', '0000-00-00 00:00:00', '2017-09-13 17:39:38', '100');
INSERT INTO `mh_access` VALUES ('62', '59', '删除', '[\"admin\\/skin\\/del\"]', '1', '0000-00-00 00:00:00', '2017-09-13 17:40:26', '100');
INSERT INTO `mh_access` VALUES ('63', '0', '自助表单管理', '[\"admin\\/formgroup\\/list\"]', '1', '2017-09-13 17:43:01', '2017-09-13 17:42:50', '91');
INSERT INTO `mh_access` VALUES ('64', '63', '添加', '[\"admin\\/formgroup\\/add\"]', '1', '0000-00-00 00:00:00', '2017-09-13 17:45:52', '100');
INSERT INTO `mh_access` VALUES ('65', '63', '修改', '[\"admin\\/formgroup\\/edit\"]', '1', '0000-00-00 00:00:00', '2017-09-13 17:49:51', '100');
INSERT INTO `mh_access` VALUES ('66', '63', '删除', '[\"admin\\/formgroup\\/del\"]', '1', '0000-00-00 00:00:00', '2017-09-13 17:51:01', '100');
INSERT INTO `mh_access` VALUES ('67', '63', '字段管理', '[\"admin\\/formgroup\\/attrlist\"]', '1', '0000-00-00 00:00:00', '2017-09-13 17:51:58', '100');
INSERT INTO `mh_access` VALUES ('68', '63', '表单字段添加', '[\"admin\\/formgroup\\/attradd\"]', '1', '0000-00-00 00:00:00', '2017-09-13 17:53:31', '100');
INSERT INTO `mh_access` VALUES ('69', '63', '表单字段修改', '[\"admin\\/formgroup\\/attredit\"]', '1', '0000-00-00 00:00:00', '2017-09-13 17:54:40', '100');
INSERT INTO `mh_access` VALUES ('70', '63', '表单字段排序与删除', '[\"admin\\/formgroup\\/deal\"]', '1', '0000-00-00 00:00:00', '2017-09-13 17:56:00', '100');
INSERT INTO `mh_access` VALUES ('71', '0', '密码修改', '[\"admin\\/pass\\/edit\"]', '1', '0000-00-00 00:00:00', '2017-09-14 14:53:48', '99');
INSERT INTO `mh_access` VALUES ('72', '63', '留言列表', '[\"admin\\/formgroup\\/message\"]', '1', '2017-09-21 14:13:53', '2017-09-21 14:13:42', '100');
INSERT INTO `mh_access` VALUES ('73', '63', '留言查看', '[\"admin\\/formgroup\\/check\"]', '1', '0000-00-00 00:00:00', '2017-09-21 14:14:46', '100');

-- ----------------------------
-- Table structure for mh_advert
-- ----------------------------
DROP TABLE IF EXISTS `mh_advert`;
CREATE TABLE `mh_advert` (
  `adid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned NOT NULL DEFAULT '0',
  `atid` int(11) unsigned NOT NULL DEFAULT '0',
  `lng` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `adtype` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `click` int(11) unsigned NOT NULL DEFAULT '0',
  `istime` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `starttime` int(11) unsigned NOT NULL DEFAULT '0',
  `endtime` int(11) unsigned NOT NULL DEFAULT '0',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0',
  `isclass` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `islink` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `gotoid` int(11) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `adid` (`adid`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mh_advert
-- ----------------------------
INSERT INTO `mh_advert` VALUES ('55', '50', '1', 'cn', 'banner_01', '/upfile/image/20190225/20190225170521_86420.jpg', 'http://www.baidu.com', '', '1', '0', '0', '0', '0', '1551085523', '1', '1', '0');
INSERT INTO `mh_advert` VALUES ('56', '50', '1', 'cn', 'banner_02', '/upfile/image/20190225/20190225170534_35905.jpg', 'http://www.baidu.com', '', '1', '0', '0', '0', '0', '1551085535', '1', '1', '0');
INSERT INTO `mh_advert` VALUES ('57', '50', '1', 'cn', 'banner_03', '/upfile/image/20190225/20190225170542_80260.jpg', 'http://www.baidu.com', '', '1', '0', '0', '0', '0', '1551085543', '1', '1', '0');
INSERT INTO `mh_advert` VALUES ('58', '50', '14', 'cn', '格尚底部广告', '/upfile/image/20190226/20190226095133_63703.jpg', 'http://www.baidu.com', '', '1', '0', '0', '0', '0', '1551145896', '1', '1', '0');

-- ----------------------------
-- Table structure for mh_advert_type
-- ----------------------------
DROP TABLE IF EXISTS `mh_advert_type`;
CREATE TABLE `mh_advert_type` (
  `atid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lng` varchar(50) NOT NULL DEFAULT '',
  `adtypename` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `width` int(4) unsigned NOT NULL DEFAULT '0',
  `height` int(4) unsigned NOT NULL DEFAULT '0',
  `isclass` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `iscode` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `isxml` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `xmltemplatefile` varchar(200) NOT NULL,
  `xmlfile` varchar(200) NOT NULL,
  `xmlpath` varchar(200) NOT NULL,
  UNIQUE KEY `adid` (`atid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mh_advert_type
-- ----------------------------
INSERT INTO `mh_advert_type` VALUES ('1', 'cn', '首页幻灯片广告', '', '1920', '1100', '1', '0', '0', '', '', '');
INSERT INTO `mh_advert_type` VALUES ('14', 'cn', '格尚底部广告', '', '0', '0', '1', '0', '0', '', '', '');

-- ----------------------------
-- Table structure for mh_app_access_log
-- ----------------------------
DROP TABLE IF EXISTS `mh_app_access_log`;
CREATE TABLE `mh_app_access_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) NOT NULL DEFAULT '0' COMMENT '品牌UID',
  `target_url` varchar(255) NOT NULL DEFAULT '' COMMENT '访问的url',
  `query_params` longtext NOT NULL COMMENT 'get和post参数',
  `ua` varchar(255) NOT NULL DEFAULT '' COMMENT '访问ua',
  `ip` varchar(32) NOT NULL DEFAULT '' COMMENT '访问ip',
  `note` varchar(1000) NOT NULL DEFAULT '' COMMENT 'json格式备注字段',
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idx_uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户操作记录表';

-- ----------------------------
-- Records of mh_app_access_log
-- ----------------------------

-- ----------------------------
-- Table structure for mh_config
-- ----------------------------
DROP TABLE IF EXISTS `mh_config`;
CREATE TABLE `mh_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '配置ID',
  `lng` varchar(50) NOT NULL DEFAULT 'cn',
  `name` varchar(100) NOT NULL COMMENT '配置名称',
  `value` text NOT NULL,
  `type` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mh_config
-- ----------------------------
INSERT INTO `mh_config` VALUES ('7', 'cn', 'sitename', '格尚', '0');
INSERT INTO `mh_config` VALUES ('8', 'cn', 'keyword', '格尚', '0');
INSERT INTO `mh_config` VALUES ('9', 'cn', 'description', '格尚', '0');
INSERT INTO `mh_config` VALUES ('10', 'cn', 'icpbeian', 'xxxxxx', '0');
INSERT INTO `mh_config` VALUES ('11', 'cn', 'logo', '/upfile/image/20180113/20180113083614_59290.png', '0');
INSERT INTO `mh_config` VALUES ('12', 'cn', 'site_closed', '1', '0');

-- ----------------------------
-- Table structure for mh_form_attr
-- ----------------------------
DROP TABLE IF EXISTS `mh_form_attr`;
CREATE TABLE `mh_form_attr` (
  `faid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fgid` int(11) unsigned NOT NULL DEFAULT '0',
  `pid` smallint(6) NOT NULL DEFAULT '50',
  `typename` varchar(200) NOT NULL DEFAULT '',
  `typeremark` varchar(200) NOT NULL,
  `attrname` varchar(150) NOT NULL DEFAULT '',
  `inputtype` varchar(20) NOT NULL DEFAULT 'string',
  `attrvalue` text NOT NULL,
  `validatetext` varchar(150) NOT NULL DEFAULT '',
  `attrsize` smallint(3) NOT NULL DEFAULT '20',
  `attrrow` smallint(3) NOT NULL DEFAULT '10',
  `attrlenther` smallint(3) NOT NULL DEFAULT '50',
  `isclass` tinyint(1) NOT NULL DEFAULT '1',
  `isvalidate` tinyint(1) NOT NULL DEFAULT '0',
  `isline` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`faid`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mh_form_attr
-- ----------------------------
INSERT INTO `mh_form_attr` VALUES ('21', '7', '2', '手机', '', 'ltelphone', 'string', '', '', '20', '5', '250', '1', '1', '0');
INSERT INTO `mh_form_attr` VALUES ('20', '7', '1', '姓名', '', 'lname', 'string', '', '', '20', '5', '250', '1', '1', '0');
INSERT INTO `mh_form_attr` VALUES ('22', '7', '3', '邮箱', '', 'lemail', 'string', '', '', '20', '5', '250', '1', '1', '0');
INSERT INTO `mh_form_attr` VALUES ('23', '7', '4', '加盟意向', '', 'ljoin', 'string', '', '', '20', '5', '250', '1', '1', '0');

-- ----------------------------
-- Table structure for mh_form_group
-- ----------------------------
DROP TABLE IF EXISTS `mh_form_group`;
CREATE TABLE `mh_form_group` (
  `fgid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) unsigned NOT NULL DEFAULT '50',
  `lng` varchar(50) NOT NULL DEFAULT '',
  `formgroupname` varchar(200) NOT NULL DEFAULT '' COMMENT '表单名称',
  `formcode` varchar(80) NOT NULL DEFAULT '' COMMENT '表单代号',
  `content` text NOT NULL COMMENT '表单说明显示文字',
  `successtext` text NOT NULL COMMENT '提交成功显示文字',
  `template` varchar(150) NOT NULL COMMENT '表单模板',
  `emailatt` varchar(100) NOT NULL DEFAULT '',
  `addtime` int(11) NOT NULL DEFAULT '0',
  `isclass` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '启用状态',
  `ismenu` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '导航显示',
  `isseccode` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '验证码',
  `ismail` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '邮箱提醒模式',
  `mailcode` varchar(100) NOT NULL,
  `putmail` varchar(100) NOT NULL,
  `inputtime` int(5) unsigned NOT NULL DEFAULT '300' COMMENT '提交间隔',
  `purview` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '提交权限',
  `issms` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '短信提醒模式',
  `smscode` varchar(100) NOT NULL,
  PRIMARY KEY (`fgid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mh_form_group
-- ----------------------------
INSERT INTO `mh_form_group` VALUES ('7', '50', 'cn', '在线留言', '', '', '', 'message', '', '0', '1', '0', '1', '0', '', '', '300', '0', '0', '');

-- ----------------------------
-- Table structure for mh_form_value
-- ----------------------------
DROP TABLE IF EXISTS `mh_form_value`;
CREATE TABLE `mh_form_value` (
  `fvid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fgid` int(11) unsigned NOT NULL DEFAULT '0',
  `did` int(11) unsigned NOT NULL DEFAULT '0',
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0',
  `retime` int(11) unsigned NOT NULL DEFAULT '0',
  `ipadd` varchar(11) NOT NULL DEFAULT '0',
  `isreply` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL,
  `recontent` text NOT NULL,
  `lname` varchar(250) NOT NULL,
  `ltelphone` varchar(250) NOT NULL,
  `lemail` varchar(250) NOT NULL,
  `ljoin` varchar(250) NOT NULL,
  PRIMARY KEY (`fvid`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mh_form_value
-- ----------------------------
INSERT INTO `mh_form_value` VALUES ('14', '7', '0', '0', '1515821403', '0', '', '0', '', '', '', '', '', '');
INSERT INTO `mh_form_value` VALUES ('15', '7', '0', '0', '1515821444', '0', '', '0', '', '', '', '', '', '');
INSERT INTO `mh_form_value` VALUES ('16', '7', '0', '0', '1515821694', '0', '', '0', '', '', '', '', '', '');
INSERT INTO `mh_form_value` VALUES ('17', '7', '0', '0', '1515821897', '0', '', '0', '', '', '', '', '', '');
INSERT INTO `mh_form_value` VALUES ('18', '7', '0', '0', '1515831554', '0', '', '0', '', '', '', '', '', '');
INSERT INTO `mh_form_value` VALUES ('19', '7', '0', '0', '1515835529', '0', '', '0', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for mh_lng
-- ----------------------------
DROP TABLE IF EXISTS `mh_lng`;
CREATE TABLE `mh_lng` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pid` tinyint(10) unsigned NOT NULL DEFAULT '0',
  `lng` varchar(50) NOT NULL DEFAULT '' COMMENT '语言标识符',
  `lngtitle` varchar(100) NOT NULL DEFAULT '' COMMENT '语言名称',
  `url` varchar(200) NOT NULL DEFAULT '',
  `lockin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `iswap` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `isopen` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '审核状态',
  `isuptype` tinyint(1) unsigned NOT NULL,
  `ispack` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `packname` varchar(100) NOT NULL,
  `sitename` varchar(100) NOT NULL DEFAULT '',
  `keyword` varchar(150) NOT NULL,
  `description` varchar(150) NOT NULL,
  `copyright` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mh_lng
-- ----------------------------
INSERT INTO `mh_lng` VALUES ('1', '1', 'cn', '简体中文版', '', '1', '0', '1', '0', '0', '', '', '', '', '');
INSERT INTO `mh_lng` VALUES ('2', '50', 'en', 'English', '', '1', '0', '0', '0', '0', '', '', '', '', '');

-- ----------------------------
-- Table structure for mh_member
-- ----------------------------
DROP TABLE IF EXISTS `mh_member`;
CREATE TABLE `mh_member` (
  `userid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `question` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `birthday` int(11) unsigned NOT NULL DEFAULT '0',
  `country` smallint(5) unsigned NOT NULL DEFAULT '0',
  `province` smallint(5) unsigned NOT NULL DEFAULT '0',
  `city` smallint(5) unsigned NOT NULL DEFAULT '0',
  `district` smallint(5) unsigned NOT NULL DEFAULT '0',
  `alias` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `zipcode` varchar(20) NOT NULL DEFAULT '0',
  `tel` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL DEFAULT '0',
  `qq` int(11) unsigned NOT NULL DEFAULT '0',
  `msn` varchar(150) NOT NULL,
  `integral` int(10) unsigned NOT NULL DEFAULT '0',
  `visitcount` smallint(6) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(11) NOT NULL DEFAULT '0',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0',
  `lasttime` int(11) unsigned NOT NULL DEFAULT '0',
  `mcid` smallint(2) unsigned NOT NULL DEFAULT '1',
  `isclass` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `ismoblie` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `mobliesn` varchar(10) NOT NULL,
  `mobliesntime` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mh_member
-- ----------------------------
INSERT INTO `mh_member` VALUES ('2', '15195861092', 'e10adc3949ba59abbe56e057f20f883e', '517987404@qq.com', '', '', '0', '0', '0', '0', '0', '0', '', '', '0', '', '0', '0', '', '0', '0', '2130706433', '1507881929', '1508289653', '1', '1', '0', '', '0');
INSERT INTO `mh_member` VALUES ('3', '18752069887', 'e10adc3949ba59abbe56e057f20f883e', '873525227@qq.com', '', '', '0', '0', '0', '0', '0', '0', '', '', '0', '', '0', '0', '', '0', '0', '0', '1508224759', '0', '1', '1', '0', '', '0');

-- ----------------------------
-- Table structure for mh_model
-- ----------------------------
DROP TABLE IF EXISTS `mh_model`;
CREATE TABLE `mh_model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lng` varchar(50) NOT NULL DEFAULT 'cn',
  `modelname` varchar(150) NOT NULL COMMENT '模型名称',
  `pagemax` smallint(3) unsigned NOT NULL DEFAULT '20' COMMENT '每页显示数',
  `tsnstyle` varchar(200) NOT NULL DEFAULT 'SN{datetime}{s}' COMMENT '编号生成格式',
  `pagesylte` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '翻页显示样式',
  `isclass` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `lockin` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `isbase` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '单页发布模型',
  `istsn` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '编号录入',
  `isalbum` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '相册功能',
  `isextid` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '附加分类',
  `issid` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '品牌专题',
  `isfgid` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '表单关联',
  `islinkdid` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '内容关联',
  `isorder` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '订购功能',
  `ismessage` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '评论功能',
  `ispurview` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '权限控制',
  `addtime` int(10) unsigned NOT NULL,
  `opid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '指定支付方式',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mh_model
-- ----------------------------
INSERT INTO `mh_model` VALUES ('1', 'cn', '新闻', '10', 'SN{datetime}{s}', '1', '1', '1', '0', '0', '0', '1', '0', '1', '1', '0', '1', '1', '0', '0');
INSERT INTO `mh_model` VALUES ('3', 'cn', '产品', '20', 'SN{datetime}{s}', '1', '1', '1', '0', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1280603581', '0');
INSERT INTO `mh_model` VALUES ('8', 'cn', '单页图文', '20', 'SN{datetime}{s}', '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1283911358', '0');
INSERT INTO `mh_model` VALUES ('18', 'cn', '案例', '20', 'SN{datetime}{s}', '1', '1', '0', '0', '1', '0', '1', '1', '1', '1', '1', '1', '1', '0', '0');
INSERT INTO `mh_model` VALUES ('19', 'cn', '视频', '20', 'SN{datetime}{s}', '1', '1', '0', '0', '1', '0', '1', '1', '1', '1', '1', '1', '1', '0', '0');

-- ----------------------------
-- Table structure for mh_model_att
-- ----------------------------
DROP TABLE IF EXISTS `mh_model_att`;
CREATE TABLE `mh_model_att` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `mid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `typename` varchar(100) NOT NULL DEFAULT '' COMMENT '简述文字',
  `typeremark` varchar(200) NOT NULL DEFAULT '' COMMENT '提示文字',
  `attrname` varchar(100) NOT NULL DEFAULT '' COMMENT '字段名称',
  `inputtype` varchar(15) NOT NULL DEFAULT 'string' COMMENT '字段类型',
  `attrvalue` text NOT NULL COMMENT '默认值',
  `attrsize` smallint(3) unsigned NOT NULL DEFAULT '20' COMMENT '输入框长度 	',
  `attrrow` smallint(3) unsigned NOT NULL DEFAULT '5' COMMENT '本文框高度',
  `attrlenther` smallint(3) unsigned NOT NULL DEFAULT '50',
  `isvalidate` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '字段验证',
  `validatetext` varchar(150) NOT NULL DEFAULT '' COMMENT '验证正则',
  `isclass` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `issearch` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `lockin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `islockin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `issys` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mh_model_att
-- ----------------------------
INSERT INTO `mh_model_att` VALUES ('1', '1', '0', '标题', '标题长度不能大于200个任意字符', 'title', 'string', '', '80', '5', '200', '1', '', '1', '0', '1', '0', '0');
INSERT INTO `mh_model_att` VALUES ('2', '2', '0', '副标题', '副标题长度不能大于200个任意字符', 'longtitle', 'string', '', '80', '5', '200', '0', '', '1', '0', '1', '0', '0');
INSERT INTO `mh_model_att` VALUES ('3', '0', '0', '作者', '', 'author', 'selectinput', '尔创网联\r\nEarcLink\r\nESPCMS', '20', '5', '20', '0', '', '1', '0', '1', '0', '0');
INSERT INTO `mh_model_att` VALUES ('4', '0', '0', '来源', '', 'source', 'selectinput', 'ESPCMS.COM\r\nECISP.CN\r\nEARCLINK.COM\r\nKUBCMS.COM\r\nYUNSYS.COM', '20', '5', '20', '0', '', '1', '0', '1', '0', '0');
INSERT INTO `mh_model_att` VALUES ('5', '3', '0', '代表图片', '', 'pic', 'img', '', '50', '5', '200', '0', '', '1', '0', '1', '0', '0');
INSERT INTO `mh_model_att` VALUES ('6', '4', '0', '简介', '', 'summary', 'htmltext', '', '99', '80', '50', '0', '', '1', '0', '1', '0', '0');
INSERT INTO `mh_model_att` VALUES ('7', '5', '0', '内容', '', 'content', 'editor', '', '99', '400', '50', '1', '', '1', '0', '1', '0', '0');
INSERT INTO `mh_model_att` VALUES ('9', '0', '0', '公开价格', '请填写数字型字符', 'oprice', 'decimal', '0', '15', '5', '15', '1', '/^[0-9.]+$/', '1', '0', '1', '0', '0');
INSERT INTO `mh_model_att` VALUES ('10', '0', '0', '购买价格', '请填写数字型字符', 'bprice', 'decimal', '0', '15', '5', '15', '1', '/^[0-9.]+$/', '1', '0', '1', '0', '0');
INSERT INTO `mh_model_att` VALUES ('26', '50', '8', '购买价格', '请填写数字型字符', 'bprice', 'decimal', '0', '15', '5', '50', '1', '/^[0-9.]+$/', '0', '0', '1', '1', '10');
INSERT INTO `mh_model_att` VALUES ('27', '50', '8', '公开价格', '请填写数字型字符', 'oprice', 'decimal', '0', '15', '5', '50', '1', '/^[0-9.]+$/', '0', '0', '1', '1', '9');
INSERT INTO `mh_model_att` VALUES ('28', '50', '8', '来源', '', 'source', 'selectinput', 'ESPCMS.COM\r\nECISP.CN\r\nEARCLINK.COM\r\nKUBCMS.COM\r\nYUNSYS.COM', '20', '5', '250', '0', '', '0', '0', '1', '1', '4');
INSERT INTO `mh_model_att` VALUES ('29', '50', '8', '作者', '', 'author', 'selectinput', '尔创网联\r\nEarcLink\r\nESPCMS', '20', '5', '250', '0', '', '0', '0', '1', '1', '3');
INSERT INTO `mh_model_att` VALUES ('30', '50', '3', '作者', '', 'author', 'selectinput', '尔创网联\r\nEarcLink\r\nESPCMS', '20', '5', '250', '0', '', '0', '0', '1', '1', '3');
INSERT INTO `mh_model_att` VALUES ('31', '50', '3', '来源', '', 'source', 'selectinput', 'ESPCMS.COM\r\nECISP.CN\r\nEARCLINK.COM\r\nKUBCMS.COM\r\nYUNSYS.COM', '20', '5', '250', '0', '', '0', '0', '1', '1', '4');
INSERT INTO `mh_model_att` VALUES ('32', '50', '1', '购买价格', '请填写数字型字符', 'bprice', 'decimal', '0', '15', '5', '50', '1', '/^[0-9.]+$/', '0', '0', '1', '1', '10');
INSERT INTO `mh_model_att` VALUES ('33', '50', '1', '公开价格', '请填写数字型字符', 'oprice', 'decimal', '0', '15', '5', '50', '1', '/^[0-9.]+$/', '0', '0', '1', '1', '9');
INSERT INTO `mh_model_att` VALUES ('34', '50', '1', '来源', '', 'source', 'selectinput', 'ESPCMS.COM\r\nECISP.CN\r\nEARCLINK.COM\r\nKUBCMS.COM\r\nYUNSYS.COM', '20', '5', '250', '0', '', '0', '0', '1', '1', '4');
INSERT INTO `mh_model_att` VALUES ('35', '50', '1', '作者', '', 'author', 'selectinput', '尔创网联\r\nEarcLink\r\nESPCMS', '20', '5', '250', '0', '', '0', '0', '1', '1', '3');
INSERT INTO `mh_model_att` VALUES ('36', '2', '1', '副标题', '副标题长度不能大于200个任意字符', 'longtitle', 'string', '', '80', '5', '250', '0', '', '0', '0', '1', '1', '2');
INSERT INTO `mh_model_att` VALUES ('37', '50', '3', '副标题', '副标题长度不能大于200个任意字符', 'longtitle', 'string', '', '80', '5', '250', '0', '', '0', '0', '1', '1', '2');
INSERT INTO `mh_model_att` VALUES ('38', '50', '8', '副标题', '副标题长度不能大于200个任意字符', 'longtitle', 'string', '', '80', '5', '250', '0', '', '0', '0', '1', '1', '2');
INSERT INTO `mh_model_att` VALUES ('43', '50', '18', '购买价格', '请填写数字型字符', 'bprice', 'decimal', '0', '15', '5', '50', '1', '/^[0-9.]+$/', '0', '0', '1', '1', '10');
INSERT INTO `mh_model_att` VALUES ('41', '50', '3', '公开价格', '请填写数字型字符', 'oprice', 'decimal', '0', '15', '5', '50', '1', '/^[0-9.]+$/', '0', '0', '1', '1', '9');
INSERT INTO `mh_model_att` VALUES ('42', '50', '3', '购买价格', '请填写数字型字符', 'bprice', 'decimal', '0', '15', '5', '50', '1', '/^[0-9.]+$/', '0', '0', '1', '1', '10');
INSERT INTO `mh_model_att` VALUES ('44', '50', '18', '公开价格', '请填写数字型字符', 'oprice', 'decimal', '0', '15', '5', '50', '1', '/^[0-9.]+$/', '0', '0', '1', '1', '9');
INSERT INTO `mh_model_att` VALUES ('45', '50', '18', '来源', '', 'source', 'selectinput', 'ESPCMS.COM\r\nECISP.CN\r\nEARCLINK.COM\r\nKUBCMS.COM\r\nYUNSYS.COM', '20', '5', '250', '0', '', '0', '0', '1', '1', '4');
INSERT INTO `mh_model_att` VALUES ('46', '50', '18', '作者', '', 'author', 'selectinput', '尔创网联\r\nEarcLink\r\nESPCMS', '20', '5', '250', '0', '', '0', '0', '1', '1', '3');
INSERT INTO `mh_model_att` VALUES ('47', '6', '18', '项目方', '', 'projectname', 'string', '', '20', '5', '250', '1', '', '1', '0', '0', '1', '0');
INSERT INTO `mh_model_att` VALUES ('48', '7', '18', '负责部门', '', 'department', 'string', '', '20', '5', '250', '1', '', '1', '0', '0', '1', '0');
INSERT INTO `mh_model_att` VALUES ('49', '8', '18', '项目位置', '', 'position', 'string', '', '20', '5', '250', '1', '', '1', '0', '0', '1', '0');
INSERT INTO `mh_model_att` VALUES ('50', '9', '18', '项目咨询', '', 'consult', 'string', '', '20', '5', '250', '1', '', '1', '0', '0', '1', '0');
INSERT INTO `mh_model_att` VALUES ('51', '50', '18', '副标题', '副标题长度不能大于200个任意字符', 'longtitle', 'string', '', '80', '5', '250', '0', '', '0', '0', '1', '1', '2');

-- ----------------------------
-- Table structure for mh_news
-- ----------------------------
DROP TABLE IF EXISTS `mh_news`;
CREATE TABLE `mh_news` (
  `did` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lng` varchar(50) NOT NULL DEFAULT 'cn' COMMENT '语言',
  `pid` smallint(6) unsigned NOT NULL DEFAULT '50' COMMENT '排序',
  `mid` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '模型id',
  `aid` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '后台登录用户id',
  `tid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '所属分类',
  `extid` varchar(200) NOT NULL COMMENT '附加分类',
  `sid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '专题品牌',
  `fgid` int(8) unsigned NOT NULL DEFAULT '0' COMMENT '关联表单',
  `linkdid` varchar(100) NOT NULL COMMENT '关联内容',
  `isclass` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '审核状态',
  `islink` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '跳转链接开关',
  `ishtml` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '生成静态开关',
  `ismess` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '留言开关',
  `isorder` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '订购开关',
  `ktid` int(6) unsigned NOT NULL DEFAULT '0',
  `purview` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '浏览权限',
  `istemplates` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '指定模板定义',
  `isbase` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否是单页内容',
  `recommend` varchar(100) NOT NULL COMMENT '推荐位',
  `tsn` varchar(50) NOT NULL DEFAULT '' COMMENT '编号',
  `title` varchar(200) NOT NULL COMMENT '标题',
  `longtitle` varchar(200) NOT NULL COMMENT '副标题',
  `color` varchar(8) NOT NULL COMMENT '颜色',
  `author` char(20) NOT NULL COMMENT '作者',
  `source` char(30) NOT NULL COMMENT '来源',
  `pic` varchar(200) NOT NULL COMMENT '代表图片',
  `tags` varchar(250) NOT NULL COMMENT 'TAG标签',
  `headtitle` varchar(200) NOT NULL COMMENT 'seo标题',
  `keywords` varchar(220) NOT NULL DEFAULT '' COMMENT 'seo关键词',
  `description` text NOT NULL COMMENT 'seo描述',
  `summary` text NOT NULL COMMENT '简介',
  `link` varchar(250) NOT NULL COMMENT '跳转地址',
  `oprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '公开价格',
  `bprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '购买价格',
  `click` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '点击数',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '发布时间',
  `uptime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `template` varchar(100) NOT NULL COMMENT '模板名',
  `filename` varchar(100) NOT NULL DEFAULT '' COMMENT '指定生成文件名',
  `filepath` varchar(200) NOT NULL,
  `filepage` smallint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`did`)
) ENGINE=MyISAM AUTO_INCREMENT=161 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mh_news
-- ----------------------------
INSERT INTO `mh_news` VALUES ('159', 'cn', '50', '1', '1', '108', '', '0', '0', '', '1', '0', '1', '1', '0', '0', '0', '0', '0', '', '', '品牌創建', '', '', '', '', '/upfile/image/20190226/20190226094020_13240.jpg', '', '', '', '', '', '', '0.00', '0.00', '0', '1551145037', '1551145223', 'company_read', '', '', '0');
INSERT INTO `mh_news` VALUES ('160', 'cn', '50', '1', '1', '108', '', '0', '0', '', '1', '0', '1', '1', '0', '0', '0', '0', '0', '', '', '品牌管理', '', '', '', '', '/upfile/image/20190226/20190226094133_12774.jpg', '', '', '', '', '', '', '0.00', '0.00', '0', '1551145240', '1551145304', 'company_read', '', '', '0');

-- ----------------------------
-- Table structure for mh_news_album
-- ----------------------------
DROP TABLE IF EXISTS `mh_news_album`;
CREATE TABLE `mh_news_album` (
  `daid` int(11) NOT NULL AUTO_INCREMENT,
  `did` int(11) NOT NULL,
  `picname` varchar(200) NOT NULL DEFAULT '',
  `filedes` text NOT NULL,
  `picfile` varchar(150) NOT NULL,
  `addtime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`daid`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mh_news_album
-- ----------------------------

-- ----------------------------
-- Table structure for mh_news_attr
-- ----------------------------
DROP TABLE IF EXISTS `mh_news_attr`;
CREATE TABLE `mh_news_attr` (
  `datid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `did` int(11) NOT NULL DEFAULT '0',
  `projectname` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `position` varchar(250) NOT NULL,
  `consult` varchar(250) NOT NULL,
  PRIMARY KEY (`datid`,`did`),
  UNIQUE KEY `daid` (`datid`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mh_news_attr
-- ----------------------------

-- ----------------------------
-- Table structure for mh_news_content
-- ----------------------------
DROP TABLE IF EXISTS `mh_news_content`;
CREATE TABLE `mh_news_content` (
  `dcid` int(11) NOT NULL AUTO_INCREMENT,
  `did` int(11) NOT NULL COMMENT '文章id',
  `content` text NOT NULL,
  PRIMARY KEY (`dcid`)
) ENGINE=MyISAM AUTO_INCREMENT=140 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mh_news_content
-- ----------------------------
INSERT INTO `mh_news_content` VALUES ('138', '159', '品牌創建重點在于品牌形象要素的組織與設計。形而上以品牌文化戰略的實施爲導向，結合客觀的品牌認知\n過程和原理，幷根據當下市場環境中項目品牌化操作的實際所需，開發出精簡實用、行之有效的品牌創建工具\n和方法。通過基于品牌文化創意的系統化組織和概念化設計，將品牌創建落實爲品牌識別、品牌知識、品牌物\n料、品牌店鋪四個形象要素層面。幷借助形而上從平面到空間的綜合性設計解决能力，爲您的項目提供一體化\n的品牌創建解决方案。');
INSERT INTO `mh_news_content` VALUES ('139', '160', '品牌管理重點在于項目品牌發展過程中的形象維護，具體落實到品牌的市場推廣、連鎖擴張、日常運營等方面\n的設計事務代理與監管。形而上基于既定的形象要素系統規範，在爲品牌發展提供標準化形象維護的同時，通\n過品牌文化的持續開發，也爲品牌帶來不斷更新的設計創意。幷根據品牌發展的不同階段和市場環境的不同變\n化，不斷完善和優化品牌形象要素系統。由此實現品牌形象的『動態標準化』維護過程，爲項目發展提供同步化\n的品牌管理解决方案。');

-- ----------------------------
-- Table structure for mh_news_label
-- ----------------------------
DROP TABLE IF EXISTS `mh_news_label`;
CREATE TABLE `mh_news_label` (
  `dlid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lng` varchar(50) NOT NULL,
  `mid` int(11) NOT NULL DEFAULT '0',
  `labelname` varchar(100) NOT NULL,
  PRIMARY KEY (`dlid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mh_news_label
-- ----------------------------
INSERT INTO `mh_news_label` VALUES ('8', 'en', '1', '2213');

-- ----------------------------
-- Table structure for mh_region
-- ----------------------------
DROP TABLE IF EXISTS `mh_region`;
CREATE TABLE `mh_region` (
  `region_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `thumb` varchar(255) DEFAULT NULL COMMENT '地区如偏',
  `region_name` varchar(100) NOT NULL DEFAULT '',
  `alias` char(50) DEFAULT NULL,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `description` text,
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '255',
  `hot` tinyint(1) NOT NULL COMMENT '热门',
  `closed` tinyint(1) NOT NULL,
  PRIMARY KEY (`region_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=477 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mh_region
-- ----------------------------
INSERT INTO `mh_region` VALUES ('3', null, '直辖市北京', null, '2', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('4', null, '北京', 'bj', '3', '', '255', '1', '0');
INSERT INTO `mh_region` VALUES ('22', null, '直辖市天津', null, '2', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('23', null, '天津', 'tj', '22', '', '255', '1', '0');
INSERT INTO `mh_region` VALUES ('41', null, '直辖市上海', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('42', null, '上海', 'sh', '41', '', '255', '1', '0');
INSERT INTO `mh_region` VALUES ('61', null, '直辖市重庆', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('62', null, '重庆', 'cq', '61', '', '255', '1', '0');
INSERT INTO `mh_region` VALUES ('104', null, '河北', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('105', null, '石家庄', 'sjz', '104', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('106', null, '衡水', 'hs', '104', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('107', null, '唐山', 'ts', '104', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('108', null, '秦皇岛', 'qhd', '104', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('109', null, '张家口', 'zjk', '104', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('110', null, '承德', 'cd', '104', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('111', null, '邯郸', 'hd', '104', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('112', null, '沧州', 'cangzhou', '104', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('113', null, '邢台', 'xt', '104', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('114', null, '保定', 'bd', '104', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('115', null, '廊坊', 'lf', '104', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('116', null, '山西', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('117', null, '太原', 'ty', '116', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('118', null, '大同', 'dt', '116', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('119', null, '朔州', 'shuozhou', '116', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('120', null, '忻州', 'xinzhou', '116', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('121', null, '长治', 'changzhi', '116', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('122', null, '阳泉', 'yq', '116', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('123', null, '晋中', 'jz', '116', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('124', null, '吕梁', 'lvliang', '116', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('125', null, '晋城', 'jc', '116', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('126', null, '临汾', 'linfen', '116', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('127', null, '运城', 'yuncheng', '116', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('128', null, '辽宁', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('129', null, '沈阳', 'shenyang', '128', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('130', null, '大连', 'dl', '128', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('131', null, '鞍山', 'anshan', '128', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('132', null, '抚顺', 'fushun', '128', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('133', null, '本溪', 'bx', '128', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('134', null, '丹东', 'dd', '128', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('135', null, '锦州', 'jinzhou', '128', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('136', null, '营口', 'yk', '128', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('137', null, '阜新', 'fx', '128', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('138', null, '辽阳', 'liaoyang', '128', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('139', null, '铁岭', 'tl', '128', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('140', null, '朝阳', 'cy', '128', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('141', null, '盘锦', 'pj', '128', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('142', null, '葫芦岛', 'hld', '128', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('143', null, '吉林', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('144', null, '长春', 'cc', '143', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('145', null, '吉林', 'jl', '143', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('146', null, '四平', 'sp', '143', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('147', null, '辽源', 'ly', '143', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('148', null, '通化', 'th', '143', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('149', null, '白山', 'bs', '143', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('150', null, '松原', 'songyuan', '143', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('151', null, '白城', 'bc', '143', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('152', null, '延边', 'yanbian', '143', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('153', null, '黑龙江', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('154', null, '哈尔滨', 'heb', '153', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('155', null, '齐齐哈尔', 'qqhe', '153', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('156', null, '牡丹江', 'mdj', '153', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('157', null, '佳木斯', 'jms', '153', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('158', null, '大庆', 'dq', '153', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('159', null, '鸡西', 'jx', '153', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('160', null, '伊春', 'yich', '153', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('161', null, '双鸭山', 'sys', '153', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('162', null, '七台河', 'qth', '153', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('163', null, '鹤岗', 'hg', '153', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('164', null, '黑河', 'heihe', '153', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('165', null, '绥化', 'suihua', '153', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('166', null, '大兴安岭', 'dxal', '153', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('167', null, '内蒙古', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('168', null, '呼和浩特', 'hhht', '167', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('169', null, '包头', 'bt', '167', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('170', null, '乌海', 'wuhai', '167', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('171', null, '赤峰', 'cf', '167', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('172', null, '通辽', 'tongliao', '167', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('173', null, '鄂尔多斯', 'erds', '167', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('174', null, '呼伦贝尔', 'hlbe', '167', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('175', null, '巴彦淖尔', 'bycem', '167', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('176', null, '乌兰察布', 'wlcb', '167', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('177', null, '锡林郭勒盟', 'xlglm', '167', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('178', null, '兴安盟', 'xam', '167', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('179', null, '阿拉善盟', 'alsm', '167', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('180', null, '江苏', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('181', '/uploadfiles/image/20170418/20170418131839_82883.jpg', '南京', 'nj', '180', '', '255', '1', '0');
INSERT INTO `mh_region` VALUES ('182', null, '苏州', 'su', '180', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('183', null, '无锡', 'wx', '180', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('184', null, '常州', 'cz', '180', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('185', null, '扬州', 'yz', '180', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('186', null, '南通', 'nt', '180', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('187', null, '镇江', 'zj', '180', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('188', null, '泰州', 'taizhou', '180', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('189', null, '淮安', 'ha', '180', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('190', null, '徐州', 'xz', '180', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('191', null, '盐城', 'yancheng', '180', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('192', null, '宿迁', 'suqian', '180', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('193', null, '连云港', 'lyg', '180', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('194', null, '浙江', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('195', null, '杭州', 'hz', '194', '', '255', '1', '0');
INSERT INTO `mh_region` VALUES ('196', null, '宁波', 'nb', '194', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('197', null, '温州', 'wz', '194', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('198', null, '嘉兴', 'jiaxing', '194', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('199', null, '湖州', 'huzhou', '194', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('200', null, '绍兴', 'sx', '194', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('201', null, '金华', 'jh', '194', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('202', null, '衢州', 'quzhou', '194', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('203', null, '舟山', 'zhoushan', '194', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('204', null, '台州', 'tz', '194', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('205', null, '丽水', 'lishui', '194', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('206', null, '安徽', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('207', null, '淮北', 'huaibei', '206', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('208', null, '合肥', 'hf', '206', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('209', null, '六安', 'la', '206', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('210', null, '亳州', 'bz', '206', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('211', null, '宿州', 'suzhou', '206', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('212', null, '阜阳', 'fy', '206', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('213', null, '蚌埠', 'bengbu', '206', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('214', null, '淮南', 'hn', '206', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('215', null, '滁州', 'chuzhou', '206', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('216', null, '巢湖', 'ch', '206', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('217', null, '芜湖', 'wuhu', '206', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('218', null, '马鞍山', 'mas', '206', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('219', null, '安庆', 'anqing', '206', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('220', null, '池州', 'chizhou', '206', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('221', null, '铜陵', 'tongling', '206', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('222', null, '宣城', 'xuanchen', '206', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('223', null, '黄山', 'huangshan', '206', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('224', null, '福建', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('225', null, '福州', 'fz', '224', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('226', null, '厦门', 'xm', '224', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('227', null, '莆田', 'pt', '224', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('228', null, '三明', 'sm', '224', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('229', null, '泉州', 'qz', '224', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('230', null, '漳州', 'zhangzhou', '224', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('231', null, '南平', 'np', '224', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('232', null, '龙岩', 'longyan', '224', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('233', null, '宁德', 'nd', '224', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('234', null, '江西', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('235', null, '南昌', 'nc', '234', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('236', null, '景德镇', 'jdz', '234', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('237', null, '萍乡', 'px', '234', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('238', null, '九江', 'jj', '234', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('239', null, '新余', 'xy', '234', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('240', null, '鹰潭', 'yingtan', '234', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('241', null, '赣州', 'ganzhou', '234', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('242', null, '吉安', 'ja', '234', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('243', null, '宜春', 'yichun', '234', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('244', null, '抚州', 'fuzhou', '234', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('245', null, '上饶', 'sr', '234', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('246', null, '山东', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('247', null, '济南', 'jn', '246', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('248', null, '青岛', 'qd', '246', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('249', null, '淄博', 'zb', '246', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('250', null, '泰安', 'ta', '246', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('251', null, '济宁', 'jining', '246', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('252', null, '德州', 'dz', '246', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('253', null, '日照', 'rz', '246', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('254', null, '潍坊', 'zf', '246', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('255', null, '枣庄', 'zaozhuang', '246', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('256', null, '临沂', 'linyi', '246', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('257', null, '莱芜', 'lw', '246', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('258', null, '滨州', 'binzhou', '246', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('259', null, '聊城', 'liaochen', '246', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('260', null, '菏泽', 'heze', '246', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('261', null, '烟台', 'yt', '246', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('262', null, '威海', 'weihai', '246', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('263', null, '东营', 'dy', '246', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('264', null, '河南', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('265', null, '郑州', 'zz', '264', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('266', null, '洛阳', 'luoyang', '264', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('267', null, '开封', 'kf', '264', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('268', null, '平顶山', 'pds', '264', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('269', null, '南阳', 'ny', '264', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('270', null, '焦作', 'jiaozuo', '264', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('271', null, '信阳', 'xinyang', '264', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('272', null, '济源', 'jiyuan', '264', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('273', null, '周口', 'zk', '264', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('274', null, '安阳', 'ay', '264', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('275', null, '驻马店', 'zmd', '264', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('276', null, '新乡', 'xx', '264', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('277', null, '鹤壁', 'hb', '264', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('278', null, '商丘', 'sq', '264', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('279', null, '漯河', 'luohe', '264', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('280', null, '许昌', 'xc', '264', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('281', null, '三门峡', 'smx', '264', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('282', null, '濮阳', 'py', '264', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('283', null, '湖北', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('284', null, '武汉', 'wh', '283', '', '255', '1', '0');
INSERT INTO `mh_region` VALUES ('285', null, '宜昌', 'yc', '283', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('286', null, '荆州', 'jingzhou', '283', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('287', null, '十堰', 'shiyan', '283', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('288', null, '襄樊', 'xf', '283', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('289', null, '黄石', 'huangshi', '283', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('290', null, '黄冈', 'huanggang', '283', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('291', null, '恩施', 'es', '283', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('292', null, '荆门', 'jingmen', '283', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('293', null, '咸宁', 'xianning', '283', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('294', null, '孝感', 'xg', '283', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('295', null, '鄂州', 'ez', '283', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('296', null, '天门', 'tm', '283', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('297', null, '仙桃', 'xiantao', '283', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('298', null, '随州', 'suizhou', '283', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('299', null, '潜江', 'qianjiang', '283', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('300', null, '神农架', 'snj', '283', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('301', null, '湖南', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('302', null, '长沙', 'cs', '301', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('303', null, '株洲', 'zhuzhou', '301', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('304', null, '湘潭', 'xiangtan', '301', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('305', null, '邵阳', 'shaoyang', '301', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('306', null, '吉首', 'js', '301', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('307', null, '岳阳', 'yy', '301', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('308', null, '娄底', 'ld', '301', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('309', null, '怀化', 'hh', '301', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('310', null, '永州', 'yonzhou', '301', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('311', null, '郴州', 'chenzhou', '301', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('312', null, '常德', 'changde', '301', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('313', null, '衡阳', 'hy', '301', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('314', null, '益阳', 'yiyang', '301', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('315', null, '张家界', 'zjj', '301', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('316', null, '湘西州', 'xxz', '301', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('317', null, '广东', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('318', null, '广州', 'gz', '317', '', '255', '1', '0');
INSERT INTO `mh_region` VALUES ('319', null, '深圳', 'sz', '317', '', '255', '1', '0');
INSERT INTO `mh_region` VALUES ('320', null, '珠海', 'zh', '317', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('321', null, '汕头', 'st', '317', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('322', null, '佛山', 'fs', '317', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('323', null, '东莞', 'dg', '317', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('324', null, '中山', 'zs', '317', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('325', null, '江门', 'jm', '317', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('326', null, '惠州', 'huizhou', '317', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('327', null, '肇庆', 'zq', '317', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('328', null, '阳江', 'yj', '317', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('329', null, '韶关', 'sg', '317', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('330', null, '河源', 'heyuan', '317', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('331', null, '梅州', 'mz', '317', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('332', null, '清远', 'qingyuan', '317', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('333', null, '云浮', 'yf', '317', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('334', null, '茂名', 'mm', '317', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('335', null, '汕尾', 'sw', '317', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('336', null, '揭阳', 'jy', '317', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('337', null, '潮州', 'chaozhou', '317', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('338', null, '湛江', 'zhanjiang', '317', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('339', null, '海南', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('340', null, '海口', 'hk', '339', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('341', null, '三亚', 'sy', '339', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('342', null, '广西', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('343', null, '南宁', 'nn', '342', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('344', null, '柳州', 'liuzhou', '342', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('345', null, '桂林', 'gl', '342', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('346', null, '梧州', 'wuzhou', '342', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('347', null, '北海', 'bh', '342', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('348', null, '防城港', 'fcg', '342', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('349', null, '钦州', 'qinzhou', '342', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('350', null, '贵港', 'gg', '342', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('351', null, '玉林', 'yulin', '342', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('352', null, '百色', 'baise', '342', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('353', null, '贺州', 'hezhou', '342', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('354', null, '河池', 'hc', '342', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('355', null, '来宾', 'lb', '342', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('356', null, '崇左', 'chongzuo', '342', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('357', null, '四川', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('358', null, '成都', 'chengdu', '357', '', '255', '1', '0');
INSERT INTO `mh_region` VALUES ('359', null, '自贡', 'zg', '357', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('360', null, '攀枝花', 'pzh', '357', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('361', null, '泸州', 'luzhou', '357', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('362', null, '德阳', 'deyang', '357', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('363', null, '绵阳', 'my', '357', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('364', null, '广元', 'guangyuan', '357', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('365', null, '遂宁', 'suining', '357', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('366', null, '内江', 'scnj', '357', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('367', null, '资阳', 'zy', '357', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('368', null, '乐山', 'ls', '357', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('369', null, '眉山', 'ms', '357', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('370', null, '南充', 'nanchong', '357', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('371', null, '宜宾', 'yb', '357', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('372', null, '广安', 'ga', '357', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('373', null, '达州', 'dazhou', '357', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('374', null, '巴中', 'bazhong', '357', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('375', null, '雅安', 'yaan', '357', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('376', null, '阿坝', 'ab', '357', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('377', null, '甘孜', 'ganzi', '357', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('378', null, '凉山', 'liangshan', '357', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('379', null, '贵州', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('380', null, '贵阳', 'gy', '379', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('381', null, '遵义', 'zunyi', '379', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('382', null, '安顺', 'as', '379', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('383', null, '六盘水', 'lps', '379', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('384', null, '毕节', 'bijie', '379', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('385', null, '铜仁', 'tr', '379', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('386', null, '黔东南', 'qdn', '379', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('387', null, '黔南', 'qn', '379', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('388', null, '黔西南', 'qxn', '379', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('389', null, '云南', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('390', null, '昆明', 'km', '389', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('391', null, '曲靖', 'qj', '389', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('392', null, '红河', 'honghe', '389', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('393', null, '昭通', 'zt', '389', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('394', null, '玉溪', 'yx', '389', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('395', null, '德宏', 'dh', '389', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('396', null, '丽江', 'lj', '389', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('397', null, '迪庆', 'diqing', '389', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('398', null, '文山', 'ws', '389', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('400', null, '大理', 'dali', '389', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('401', null, '怒江', 'nujiang', '389', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('402', null, '保山', 'baoshan', '389', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('403', null, '楚雄', 'cx', '389', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('404', null, '西双版纳', 'bn', '389', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('405', null, '临沧', 'lc', '389', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('406', null, '西藏', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('407', null, '拉萨', 'lasa', '406', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('408', null, '日喀则', 'rkz', '406', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('409', null, '林芝', 'linzhi', '406', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('410', null, '山南', 'sn', '406', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('411', null, '那曲', 'nq', '406', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('412', null, '昌都', 'changdu', '406', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('413', null, '阿里', 'al', '406', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('414', null, '陕西', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('415', null, '西安', 'xa', '414', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('416', null, '铜川', 'tc', '414', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('417', null, '宝鸡', 'baoji', '414', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('418', null, '咸阳', 'xianyang', '414', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('419', null, '渭南', 'wn', '414', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('420', null, '延安', 'ya', '414', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('421', null, '汉中', 'hanzhong', '414', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('422', null, '榆林', 'yl', '414', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('423', null, '安康', 'ak', '414', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('424', null, '商洛', 'sl', '414', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('425', null, '甘肃', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('426', null, '兰州', 'lz', '425', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('427', null, '嘉峪关', 'jyg', '425', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('428', null, '金昌', 'jinchang', '425', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('429', null, '白银', 'by', '425', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('430', null, '天水', 'tianshui', '425', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('431', null, '酒泉', 'jq', '425', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('432', null, '张掖', 'zhangye', '425', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('433', null, '武威', 'ww', '425', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('434', null, '定西', 'dx', '425', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('435', null, '陇南', 'ln', '425', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('436', null, '平凉', 'pl', '425', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('437', null, '庆阳', 'qy', '425', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('438', null, '临夏', 'linxia', '425', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('439', null, '甘南', 'gn', '425', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('440', null, '青海', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('441', null, '西宁', 'xn', '440', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('442', null, '海东', 'hdxs', '440', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('443', null, '海北', 'haibei', '440', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('444', null, '海南', 'hainan', '440', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('445', null, '海西', 'hx', '440', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('446', null, '黄南', 'huangnan', '440', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('447', null, '玉树', 'ys', '440', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('448', null, '果洛', 'guoluo', '440', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('449', null, '宁夏', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('450', null, '银川', 'yinchuan', '449', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('451', null, '石嘴山', 'szs', '449', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('452', null, '吴忠', 'wuzhong', '449', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('453', null, '固原', 'guyuan', '449', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('454', null, '中卫', 'zw', '449', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('455', null, '新疆', null, '2', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('456', null, '伊犁', 'yili', '455', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('457', null, '乌鲁木齐', 'wlmq', '455', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('458', null, '昌吉', 'cj', '455', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('459', null, '石河子', 'shz', '455', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('460', null, '克拉玛依', 'klmy', '455', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('461', null, '阿勒泰', 'alt', '455', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('462', null, '博尔塔拉', 'betl', '455', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('463', null, '塔城', 'tac', '455', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('464', null, '和田', 'ht', '455', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('465', null, '克孜勒苏', 'kzls', '455', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('466', null, '喀什', 'ks', '455', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('467', null, '阿克苏', 'aks', '455', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('468', null, '巴音郭楞', 'bygl', '455', null, '255', '0', '0');
INSERT INTO `mh_region` VALUES ('469', null, '吐鲁番', 'tlf', '455', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('470', null, '哈密', 'hm', '455', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('471', null, '五家渠', 'wjq', '455', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('472', null, '阿拉尔', 'ale', '455', '', '255', '0', '0');
INSERT INTO `mh_region` VALUES ('473', null, '图木舒克', 'tmsk', '455', '', '255', '0', '0');

-- ----------------------------
-- Table structure for mh_role
-- ----------------------------
DROP TABLE IF EXISTS `mh_role`;
CREATE TABLE `mh_role` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '角色名称',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态 1：有效 0：无效',
  `updated_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '最后一次更新时间',
  `created_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '插入时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='角色表';

-- ----------------------------
-- Records of mh_role
-- ----------------------------
INSERT INTO `mh_role` VALUES ('6', '编辑权限', '1', '0000-00-00 00:00:00', '2017-09-13 21:37:51');
INSERT INTO `mh_role` VALUES ('7', '123', '1', '0000-00-00 00:00:00', '2017-12-26 15:40:41');

-- ----------------------------
-- Table structure for mh_role_access
-- ----------------------------
DROP TABLE IF EXISTS `mh_role_access`;
CREATE TABLE `mh_role_access` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL DEFAULT '0' COMMENT '角色id',
  `access_id` int(11) NOT NULL DEFAULT '0' COMMENT '权限id',
  `created_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '插入时间',
  PRIMARY KEY (`id`),
  KEY `idx_role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=420 DEFAULT CHARSET=utf8 COMMENT='角色权限表';

-- ----------------------------
-- Records of mh_role_access
-- ----------------------------
INSERT INTO `mh_role_access` VALUES ('405', '6', '5', '2017-11-07 17:58:34');
INSERT INTO `mh_role_access` VALUES ('406', '6', '8', '2017-11-07 17:58:34');
INSERT INTO `mh_role_access` VALUES ('407', '6', '71', '2017-11-07 17:58:34');
INSERT INTO `mh_role_access` VALUES ('408', '6', '14', '2017-11-07 17:58:34');
INSERT INTO `mh_role_access` VALUES ('409', '6', '48', '2017-11-07 17:58:34');
INSERT INTO `mh_role_access` VALUES ('410', '6', '49', '2017-11-07 17:58:34');
INSERT INTO `mh_role_access` VALUES ('411', '6', '51', '2017-11-07 17:58:34');
INSERT INTO `mh_role_access` VALUES ('412', '6', '52', '2017-11-07 17:58:34');
INSERT INTO `mh_role_access` VALUES ('413', '6', '53', '2017-11-07 17:58:34');
INSERT INTO `mh_role_access` VALUES ('414', '6', '54', '2017-11-07 17:58:34');
INSERT INTO `mh_role_access` VALUES ('415', '6', '55', '2017-11-07 17:58:34');
INSERT INTO `mh_role_access` VALUES ('416', '6', '16', '2017-11-07 17:58:34');
INSERT INTO `mh_role_access` VALUES ('417', '6', '27', '2017-11-07 17:58:34');
INSERT INTO `mh_role_access` VALUES ('418', '6', '28', '2017-11-07 17:58:34');
INSERT INTO `mh_role_access` VALUES ('419', '6', '29', '2017-11-07 17:58:34');

-- ----------------------------
-- Table structure for mh_skin
-- ----------------------------
DROP TABLE IF EXISTS `mh_skin`;
CREATE TABLE `mh_skin` (
  `skid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `code` varchar(20) NOT NULL,
  `lockin` tinyint(1) NOT NULL DEFAULT '0',
  `isclass` tinyint(1) NOT NULL DEFAULT '0',
  `addtime` int(11) NOT NULL,
  `choice` tinyint(2) NOT NULL COMMENT '模板选中',
  PRIMARY KEY (`skid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mh_skin
-- ----------------------------
INSERT INTO `mh_skin` VALUES ('1', '默认风格', 'default', '1', '0', '0', '1');
INSERT INTO `mh_skin` VALUES ('7', '格尚', 'geerson', '0', '1', '1551066866', '0');

-- ----------------------------
-- Table structure for mh_typelist
-- ----------------------------
DROP TABLE IF EXISTS `mh_typelist`;
CREATE TABLE `mh_typelist` (
  `tid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` smallint(5) unsigned NOT NULL DEFAULT '50',
  `mid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '所属模型',
  `topid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `upid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `exmid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `linkid` int(11) unsigned NOT NULL DEFAULT '0',
  `gotoid` int(11) unsigned NOT NULL DEFAULT '0',
  `lng` varchar(50) NOT NULL DEFAULT 'cn',
  `typename` varchar(150) NOT NULL COMMENT '名称',
  `typename_en` varchar(150) NOT NULL,
  `content` text NOT NULL COMMENT '介绍',
  `headtitle` varchar(200) NOT NULL COMMENT '自定义TITLE',
  `keywords` varchar(80) NOT NULL DEFAULT '' COMMENT '自定义Keywords',
  `description` varchar(180) NOT NULL COMMENT '自定义Description',
  `typepic` varchar(200) NOT NULL COMMENT '代表图片',
  `dirname` varchar(50) NOT NULL DEFAULT '',
  `purview` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ismenu` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '主频道显示',
  `isaccessory` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `isclass` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `ispart` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '列表内容显示范围',
  `styleid` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1频道主页,2信息列表,3外部链接,4单网页',
  `pageclass` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `indextemplates` varchar(100) NOT NULL COMMENT '频道主页模板',
  `template` varchar(100) NOT NULL COMMENT '列表模板',
  `readtemplate` varchar(100) NOT NULL COMMENT '阅读模板',
  `filenamestyle` varchar(100) NOT NULL DEFAULT '',
  `readnamestyle` varchar(100) NOT NULL,
  `isline` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `gotoline` int(11) unsigned NOT NULL DEFAULT '0',
  `typeurl` varchar(200) NOT NULL,
  `dirpath` varchar(150) NOT NULL,
  `iswap` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `waptempalte` varchar(100) NOT NULL,
  `wapreadtemplate` varchar(100) NOT NULL,
  `pagemax` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '每页显示数量',
  `addtime` int(15) unsigned NOT NULL DEFAULT '0',
  `isorderby` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '显示排序',
  `ordertype` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '排序方式',
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=110 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mh_typelist
-- ----------------------------
INSERT INTO `mh_typelist` VALUES ('108', '50', '1', '0', '0', '0', '0', '0', 'cn', '格尚', 'GEERSON', '形而上設計，<br />\r\n集商業（品牌）設計與學術研究于一體。<br />\r\n長期以來，我們爲不同類型的項目提供品牌化設計支持，<br />\r\n致力于品牌形象的深度塑造，<br />\r\n協助客戶實現品牌的連鎖化、可持續發展。<br />\r\n我們堅持對品牌設計的本質思考與探索，<br />\r\n幷以專業觀念的持續創新，<br />\r\n引領業界走向新的未來。<br />', '格尚_t', '', '', '/upfile/image/20190225/20190225173302_62987.jpg', '', '0', '1', '0', '1', '1', '2', '1', '', 'company_list', 'company_read', '', '', '1', '0', '', '', '0', '', '', '0', '0', '1', '1');

-- ----------------------------
-- Table structure for mh_user
-- ----------------------------
DROP TABLE IF EXISTS `mh_user`;
CREATE TABLE `mh_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '姓名',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `email` varchar(30) NOT NULL DEFAULT '' COMMENT '邮箱',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否是超级管理员 1表示是 0 表示不是',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态 1：有效 0：无效',
  `updated_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '最后一次更新时间',
  `created_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '插入时间',
  `loginip` bigint(20) NOT NULL DEFAULT '0' COMMENT '登陆ip',
  PRIMARY KEY (`id`),
  KEY `idx_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of mh_user
-- ----------------------------
INSERT INTO `mh_user` VALUES ('1', 'admin', '059c3304b11925e30d95801da52b4828', 'apanly@163.com', '1', '1', '2019-02-25 11:53:18', '2016-11-15 13:36:30', '2130706433');
INSERT INTO `mh_user` VALUES ('4', 'njhrd', 'c6805afe7c696853f2fa052c63c43b79', '123456@163.com', '0', '1', '2017-12-05 17:55:46', '2017-11-06 09:15:07', '-564142239');

-- ----------------------------
-- Table structure for mh_user_role
-- ----------------------------
DROP TABLE IF EXISTS `mh_user_role`;
CREATE TABLE `mh_user_role` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `role_id` int(11) NOT NULL DEFAULT '0' COMMENT '角色ID',
  `created_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '插入时间',
  PRIMARY KEY (`id`),
  KEY `idx_uid` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='用户角色表';

-- ----------------------------
-- Records of mh_user_role
-- ----------------------------
INSERT INTO `mh_user_role` VALUES ('5', '4', '6', '2017-11-06 09:15:12');
