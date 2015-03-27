ALTER TABLE  `kwf_pages` ADD  `parent_subroot_id` VARCHAR( 255 ) NOT NULL ;
ALTER TABLE  `kwc_paragraphs` ADD  `device_visible` ENUM(  'all',  'hideOnMobile',  'onlyShowOnMobile' ) NOT NULL ;
ALTER TABLE  `kwc_basic_link_intern` ADD  `anchor` VARCHAR( 50 ) NOT NULL ;
ALTER TABLE  `cache_component` ADD  `microtime` BIGINT( 14 ) NOT NULL ;


CREATE TABLE IF NOT EXISTS `cache_component_includes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `component_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `target_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `source` (`component_id`,`type`),
  KEY `target_id` (`target_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE IF NOT EXISTS `kwf_update` (
  `data` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `kwf_update` (`data`) VALUES
('a:65:{i:0;s:31:"Kwc_Basic_LinkTag_Mail_Update_1";i:1;s:33:"Kwc_Basic_LinkTag_Extern_Update_1";i:2;s:33:"Kwc_Basic_LinkTag_Intern_Update_1";i:3;s:30:"Kwc_Basic_DownloadTag_Update_1";i:4;s:27:"Kwc_Abstract_Image_Update_1";i:5;s:23:"Kwc_Basic_Link_Update_1";i:6;s:27:"Kwc_Basic_Download_Update_1";i:7;s:24:"Kwc_Basic_Space_Update_1";i:8;s:27:"Kwc_Abstract_Cards_Update_1";i:9;s:26:"Kwc_Abstract_List_Update_1";i:10;s:23:"Kwc_Paragraphs_Update_1";i:11;s:23:"Kwc_Basic_Text_Update_1";i:12;s:26:"Kwc_Root_Category_Update_1";i:13;s:26:"Kwc_Root_Category_Update_2";i:14;s:23:"Kwc_Paragraphs_Update_2";i:15;s:27:"Kwc_Abstract_Cards_Update_2";i:16;s:27:"Kwc_Abstract_Cards_Update_3";i:17;s:23:"Kwc_Paragraphs_Update_3";i:18;s:35:"Kwc_Advanced_GoogleMap_Update_22701";i:19;s:24:"Kwc_Columns_Update_31678";i:20;s:37:"Kwc_Basic_LinkTag_Intern_Update_32519";i:21;s:31:"Kwc_Abstract_Image_Update_33317";i:22;s:27:"Kwc_Basic_Text_Update_34384";i:23;s:27:"Kwc_Basic_Text_Update_34385";i:24;s:30:"Kwc_Menu_Abstract_Update_35365";i:25;s:30:"Kwc_Menu_Abstract_Update_35366";i:26;s:16:"Kwf_Update_36000";i:27;s:16:"Kwf_Update_36001";i:28;s:16:"Kwf_Update_36002";i:29;s:16:"Kwf_Update_37010";i:30;s:30:"Kwc_Abstract_List_Update_37310";i:31;s:30:"Kwc_Abstract_List_Update_37311";i:32;s:30:"Kwc_Abstract_List_Update_37312";i:33;s:24:"Kwc_Columns_Update_37315";i:34;s:24:"Kwc_Columns_Update_37316";i:35;s:35:"Kwc_Advanced_GoogleMap_Update_37684";i:36;s:35:"Kwc_Advanced_GoogleMap_Update_37685";i:37;s:16:"Kwf_Update_38000";i:38;s:29:"Kwc_List_Gallery_Update_38000";i:39;s:16:"Kwf_Update_38004";i:40;s:16:"Kwf_Update_38005";i:41;s:16:"Kwf_Update_38006";i:42;s:16:"Kwf_Update_38007";i:43;s:26:"Kwc_Root_Category_Update_3";i:44;s:26:"Kwc_Root_Category_Update_4";i:45;s:16:"Kwf_Update_38008";i:46;s:16:"Kwf_Update_38009";i:47;s:37:"Kwc_Basic_LinkTag_Intern_Update_32520";i:48;s:16:"Kwf_Update_38010";i:49;s:16:"Kwf_Update_38011";i:50;s:31:"Kwc_Abstract_Image_Update_40000";i:51;s:31:"Kwc_Abstract_Image_Update_40001";i:52;s:31:"Kwc_Abstract_Image_Update_40002";i:53;s:30:"Kwc_Abstract_List_Trl_Update_1";i:54;s:25:"Kwc_Root_TrlRoot_Update_1";i:55;s:25:"Kwc_Root_TrlRoot_Update_3";i:56;s:26:"Kwc_Root_Category_Update_5";i:57;s:31:"Kwc_Legacy_Columns_Update_31678";i:58;s:31:"Kwc_Paragraphs_Trl_Update_33689";i:59;s:34:"Kwc_Root_Category_Trl_Update_33917";i:60;s:34:"Kwc_Root_Category_Trl_Update_33918";i:61;s:34:"Kwc_Root_Category_Trl_Update_33919";i:62;s:34:"Kwc_Abstract_List_Trl_Update_37311";i:63;s:31:"Kwc_Legacy_Columns_Update_37315";i:64;s:31:"Kwc_Legacy_Columns_Update_37316";}');
