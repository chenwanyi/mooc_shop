DROP TABLE IF EXISTS 'shop_admin';
CREATE TABLE IF NOT EXISTS 'shop_admin'(
  'adminid' INT  UNSIGNED NOT NULL AUTO_INCRENMENT COMMENT '',
  'adminuser' VARCHAR(32) NOT NULL DEFAULT '' COMMENT '',
  'adminpass' CHAR(32) NOT NULL DEFAULT ''  COMMENT '',
  'adminemail' VARCHAR(50) NOT NULL DEFAULT '' COMMENT  '',
  'logintime' INT UNSIGNED  NOT NULL DEFAULT '' COMMENT '',
  'loginip' BIGINT  NOT NULL DEFAULT '0'  COMMENT '',
  'createtime'  INT UNSIGNED  NOT NULL DEFAULT '0'  COMMENT '',
  PRIMARY KEY('adminid'),
  UNIQUE shop_admin_adminuser_adminpass('adminuser','adminpass'),
  UNIQUE shop_admin_adminuser_adminemail('adminuser','adminemail')
)ENGINE=InnoDB  DEFAULT CHARSET = utf8;

INSERT  INTO  'shop_admin'(adminuser,adminpass,adminemail,createtime)VALUES ('admin',md5('123456'),'ly66278@163.com',UNIX_TIMESTAMP());












