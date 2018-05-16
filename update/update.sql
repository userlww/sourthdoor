3.05;
ALTER TABLE `%DB_PREFIX%deal_submit`
MODIFY COLUMN `notes`  text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '购买需知' AFTER `dp_count`;

ALTER TABLE `%DB_PREFIX%deal`
ADD COLUMN `buyin_app`  tinyint(1) NOT NULL COMMENT '是否仅展示在app端0否 1是' AFTER `dp_count_5`,
ADD INDEX `buyin_app` (`buyin_app`);

ALTER TABLE `%DB_PREFIX%deal_city`
ADD COLUMN `is_hot`  tinyint(1) NOT NULL COMMENT '热门城市' AFTER `sort`;

INSERT INTO `%DB_PREFIX%conf` (`id`, `name`, `value`, `group_id`, `input_type`, `value_scope`, `is_effect`, `is_conf`, `sort`) VALUES ('182', 'QRCODE_ON', '1', '3', '1', '0,1', '1', '1', '41');

UPDATE  `%DB_PREFIX%m_config` SET  `title` =  '微信(开放)appSecret' WHERE  code ='wx_app_secret' LIMIT 1 ;
UPDATE  `%DB_PREFIX%m_config` SET  `title` =  '微信(开放)AppID' WHERE  code ='wx_app_key' LIMIT 1 ;
UPDATE  `%DB_PREFIX%m_config` SET  `title` =  '新浪App Key' WHERE  code ='sina_app_key' LIMIT 1 ;
UPDATE  `%DB_PREFIX%m_config` SET  `title` =  '新浪App Secret' WHERE  code ='sina_app_secret' LIMIT 1 ;
UPDATE  `%DB_PREFIX%m_config` SET  `title` =  '腾讯开放平台APP ID' WHERE  code ='qq_app_key' LIMIT 1 ;
UPDATE  `%DB_PREFIX%m_config` SET  `title` =  '腾讯开放平台APP KEY' WHERE  code ='qq_app_secret' LIMIT 1 ;

ALTER TABLE `%DB_PREFIX%ecv_type`
MODIFY COLUMN `send_type`  tinyint(1) NOT NULL COMMENT '发放方式 0:管理员手动发放 1:会员积分兑换 2:序列号兑换' AFTER `gen_count`,
ADD COLUMN `exchange_sn`  varchar(20) NULL COMMENT '红包兑换的序列号' AFTER `exchange_limit`,
ADD UNIQUE INDEX `exchange_sn` (`exchange_sn`);

ALTER TABLE `%DB_PREFIX%m_adv`
ADD COLUMN `zt_id`  int(11) NOT NULL COMMENT '手机端专题组的ID' AFTER `ctl`,
ADD COLUMN `zt_position`  varchar(255) NOT NULL COMMENT '专题模板的位置显示(广告位ID)' AFTER `zt_id`;

ALTER TABLE `%DB_PREFIX%m_adv`
MODIFY COLUMN `position`  tinyint(1) NOT NULL COMMENT '显示的位置 0:首页 1:启动页 2:专题位' AFTER `type`;

CREATE TABLE `%DB_PREFIX%m_zt` (
  `id` smallint(6) NOT NULL auto_increment,
  `name` varchar(100) default '' COMMENT '名称',
  `mobile_type` tinyint(1) default '0' COMMENT '手机类型0:ios/android; 1:wap',
  `type` tinyint(1) default '0' COMMENT '1分类标签广告\r\n2URL广告\r\n3分类排行\r\n4达人页\r\n5搜索页\r\n6拍照\r\n7热门\r\n8分享详细\r\n9团购列表\r\n10商品列表\r\n11活动列表\r\n12优惠列表\r\n13代金券列表\r\n14团购明细\r\n15商品明细\r\n16活动明细\r\n17优惠明细\r\n18代金券明细\r\n19关于我们\r\n20优惠券主页面\r\n21公告列表			',
  `data` text COMMENT '配置的序列化数据（根据不同的type存放不同的结果）',
  `sort` smallint(5) default '10' COMMENT '排序',
  `status` tinyint(1) default '1' COMMENT '状态 0:无效1:有效',
  `city_id` int(11) default '0' COMMENT '所属城市',
  `ctl` varchar(255) default NULL,
  `zt_moban` varchar(255) NOT NULL COMMENT '专题模板文件路径',
  `zt_title` varchar(255) NOT NULL COMMENT '专题显示的标题',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COMMENT='手机端首页专题位';


ALTER TABLE `%DB_PREFIX%delivery_fee`
ADD COLUMN `supplier_id`  int(11) NOT NULL COMMENT '归属于商户的运费配置项' AFTER `continue_weight`;



CREATE TABLE `%DB_PREFIX%deal_order_supplier_fee` (
  `id` int(11) NOT NULL auto_increment,
  `order_id` int(11) NOT NULL COMMENT '订单ID',
  `supplier_id` int(11) NOT NULL COMMENT '商户ID',
  `delivery_fee` decimal(20,4) NOT NULL COMMENT '运费',
  `is_arrival` tinyint(1) NOT NULL COMMENT '是否已收货 0未收货 1已收货（收货后将运费结算给商家）',
  PRIMARY KEY  (`id`),
  KEY `order_id` (`order_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


ALTER TABLE `%DB_PREFIX%deal_order_history`
ADD COLUMN `history_delivery_fee`  text NOT NULL AFTER `history_message`;

ALTER TABLE `%DB_PREFIX%supplier`
ADD COLUMN `allow_refund`  tinyint(1) NOT NULL COMMENT '是否支持退款审核' AFTER `h_tel`,
ADD COLUMN `allow_publish_verify`  tinyint(1) NOT NULL COMMENT '是否支持自动发布' AFTER `allow_refund`,
ADD COLUMN `publish_verify_balance`  decimal(20,4) NOT NULL COMMENT '自动审核时的结算费用率' AFTER `allow_publish_verify`;

ALTER TABLE `%DB_PREFIX%ecv_type`
ADD COLUMN `share_url`  varchar(255) NOT NULL COMMENT '分享连接' AFTER `exchange_sn`,
ADD COLUMN `memo`  varchar(255) NOT NULL COMMENT '红包备注' AFTER `share_url`,
ADD COLUMN `tpl`  varchar(255) NOT NULL COMMENT '红包模版' AFTER `memo`;


ALTER TABLE `%DB_PREFIX%deal_msg_list` MODIFY COLUMN `send_type`  tinyint(1) NOT NULL COMMENT '发送类型 0:短信 1:邮件;2:微信;3:andoird;4:ios' AFTER `dest`;
ALTER TABLE `%DB_PREFIX%msg_template` ADD COLUMN `is_allow_app`  tinyint(1) NOT NULL DEFAULT 0 COMMENT '0:不允许发给app;1:允许发给app' AFTER `is_html`;
ALTER TABLE `%DB_PREFIX%msg_template` ADD COLUMN `is_allow_wx`  tinyint(1) NOT NULL DEFAULT 0 COMMENT '0:不允许发给wx;1:允许发给wx' AFTER `is_allow_app`;
ALTER TABLE `%DB_PREFIX%supplier_account` ADD COLUMN `dev_type`  varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'android' COMMENT 'android,ios 客户手机类型,一个客户只绑定一个最新的手机' AFTER `mobile`;
ALTER TABLE `%DB_PREFIX%supplier_account` ADD COLUMN `device_token`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '推送device_token一个客户只绑定一个最新的手机' AFTER `dev_type`;
ALTER TABLE `%DB_PREFIX%user` ADD COLUMN `dev_type`  varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'android' COMMENT 'android,ios 客户手机类型,一个客户只绑定一个最新的手机' AFTER `t_name`;
ALTER TABLE `%DB_PREFIX%user` ADD COLUMN `device_token`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '推送device_token一个客户只绑定一个最新的手机' AFTER `dev_type`;

update `%DB_PREFIX%msg_template` set is_allow_app = 1 where name in ('TPL_SMS_SUPPLIER_ORDER','TPL_USER_WITHDRAW_SMS');


INSERT INTO `%DB_PREFIX%m_config` VALUES ('74', 'android_biz_master_secret', '商家android推送友盟AppMasterSecret', '', '0', '手机推送配置', '18');
INSERT INTO `%DB_PREFIX%m_config` VALUES ('75', 'android_biz_app_key', '商家android推送友盟AppKey', '', '0', '手机推送配置', '17');
INSERT INTO `%DB_PREFIX%m_config` VALUES ('76', 'ios_biz_app_key', '商家ios推送友盟AppKey', '', '0', '手机推送配置', '19');
INSERT INTO `%DB_PREFIX%m_config` VALUES ('77', 'ios_biz_master_secret', '商家ios推送友盟AppMasterSecret', '', '0', '手机推送配置', '20');
INSERT INTO `%DB_PREFIX%m_config` VALUES ('78', 'android_master_secret', 'android推送友盟AppMasterSecret', '', '0', '手机推送配置', '24');
INSERT INTO `%DB_PREFIX%m_config` VALUES ('79', 'android_app_key', 'android推送友盟AppKey', '', '0', '手机推送配置', '23');
INSERT INTO `%DB_PREFIX%m_config` VALUES ('80', 'ios_app_key', 'ios推送友盟AppKey', '', '0', '手机推送配置', '25');
INSERT INTO `%DB_PREFIX%m_config` VALUES ('81', 'ios_master_secret', 'ios推送友盟AppMasterSecret', '', '0', '手机推送配置', '26');

UPDATE `%DB_PREFIX%conf` set `value` = '3.05' where name = 'DB_VERSION';