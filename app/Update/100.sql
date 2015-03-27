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
