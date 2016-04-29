-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2016 at 08:46 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`) VALUES
(1, 'Maliyyə'),
(2, 'Markettinq'),
(3, 'İnformasiya Texnologiyaları'),
(4, 'İnzibati'),
(5, 'Satış'),
(6, 'Dizayn'),
(7, 'Hüquqşunaslıq'),
(8, 'Təhsil və elm'),
(9, 'Sənaye və kənd təsərrüfatı'),
(10, 'Xidmət'),
(11, 'Tibb və əczaçılıq'),
(12, 'Müxtəlif');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`) VALUES
(1, 'Ağcabədi'),
(2, 'Ağdam'),
(3, 'Ağdaş'),
(4, 'Ağsu'),
(5, 'Bakı'),
(6, 'Balakən'),
(7, 'Beyləqan'),
(8, 'Biləsuvar'),
(9, 'Bərdə'),
(10, 'Cəlilabad'),
(11, 'Füzuli'),
(12, 'Goranboy'),
(13, 'Göyçay'),
(14, 'Gəncə'),
(15, 'Kürdəmir'),
(16, 'Lerik'),
(17, 'Lənkəran'),
(18, 'Masallı'),
(19, 'Mingəçevir'),
(20, 'Naftalan'),
(21, 'Naxçıvan'),
(22, 'Qaradağ'),
(23, 'Qax'),
(24, 'Qazax'),
(25, 'Quba'),
(26, 'Qusar'),
(27, 'Qəbələ'),
(28, 'Saatlı'),
(29, 'Sabirabad'),
(30, 'Salyan'),
(31, 'Samux'),
(32, 'Siyəzən'),
(33, 'Sumqayıt'),
(34, 'Tovuz'),
(35, 'Tərtər'),
(36, 'Xaçmaz'),
(37, 'Xırdalan'),
(38, 'Xızı'),
(39, 'Yardımlı'),
(40, 'Yevlax'),
(41, 'Zaqatala'),
(42, 'İmişli'),
(43, 'İsmayıllı'),
(44, 'Şabran'),
(45, 'Şamaxı'),
(46, 'Şirvan'),
(47, 'Şəki'),
(48, 'Şəmkir'),
(49, 'Şərur'),
(50, 'Şirvan');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE IF NOT EXISTS `cv` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cv_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cv_surname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cv_midname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cv_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cv_phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cv_male` tinyint(4) NOT NULL,
  `cv_publish` tinyint(4) NOT NULL,
  `cv_age` int(11) NOT NULL,
  `cv_avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cv_edu_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `cv_exp_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `cv_skills_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `cv_personal_info` text COLLATE utf8_unicode_ci NOT NULL,
  `cv_position_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cv_min_salary` int(11) NOT NULL,
  `cv_experience_id` int(10) unsigned NOT NULL,
  `cv_education_id` int(10) unsigned NOT NULL,
  `cv_category_id` int(10) unsigned NOT NULL,
  `cv_city_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cv_phone1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cv_phone2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cv_premium` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cv_cv_experience_id_index` (`cv_experience_id`),
  KEY `cv_cv_education_id_index` (`cv_education_id`),
  KEY `cv_cv_category_id_index` (`cv_category_id`),
  KEY `cv_cv_city_id_index` (`cv_city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `cv_name`, `cv_surname`, `cv_midname`, `cv_email`, `cv_phone`, `cv_male`, `cv_publish`, `cv_age`, `cv_avatar`, `cv_edu_detail`, `cv_exp_detail`, `cv_skills_detail`, `cv_personal_info`, `cv_position_name`, `cv_min_salary`, `cv_experience_id`, `cv_education_id`, `cv_category_id`, `cv_city_id`, `created_at`, `updated_at`, `cv_phone1`, `cv_phone2`, `cv_premium`) VALUES
(1, 'Parviz', 'Aliyev', 'Hesen', 'byaliyev@outlook.com', '', 0, 0, 34, '', 'adadada', 'adadadad', 'askdjhadgaldlgayhdalj', '', '', 0, 2, 2, 10, 5, '2016-04-29 10:58:14', '2016-04-29 10:58:14', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `edu_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `edu_name`) VALUES
(1, 'Elmi dərəcə'),
(2, 'Ali'),
(3, 'Natamam Ali'),
(4, 'Orta texniki'),
(5, 'Orta Xüsusi'),
(6, 'Orta'),
(7, '-');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `exp_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `exp_name`) VALUES
(1, '1 ildən aşağı'),
(2, '1 ildən 3 ilə qədər'),
(3, '3 ildən 5 ilə qədər'),
(4, '5 ildən artıq');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `files_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `files_source` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `files_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `files_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `files_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_18_193227_create_cv_table', 1),
('2016_04_18_193455_create_vacancy_table', 1),
('2016_04_18_193614_create_categories_table', 1),
('2016_04_18_193651_create_city_table', 1),
('2016_04_18_193732_create_education_table', 1),
('2016_04_18_193825_create_experience_table', 1),
('2016_04_18_193904_create_pages_table', 1),
('2016_04_18_193935_create_files_table', 1),
('2016_04_26_105416_create_subcategories_table', 1),
('2016_04_26_124326_create_cv_edit_table', 1),
('2016_04_26_133318_create_vac_edit_table', 1),
('2016_04_26_133521_create_subcat_edit_table', 1),
('2016_04_29_104017_addcvphone', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subcat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `subcategories_cat_id_index` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=64 ;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `subcat_name`, `cat_id`) VALUES
(1, 'Kredit Mütəxəssisi', 1),
(2, 'Sığorta', 1),
(3, 'Audit', 1),
(4, 'Mühasibat', 1),
(5, 'Maliyyə Analiz', 1),
(6, 'Bank xidməti', 1),
(7, 'Kassir', 1),
(8, 'İqtisadçı', 1),
(9, 'Digər', 1),
(10, 'Marketinq menecement', 2),
(11, 'İctimayətlə əlaqələr', 2),
(12, 'Reklam', 2),
(13, 'Digər', 2),
(14, 'Sistem idarəetməsi', 3),
(15, 'Məlumat bazasının idarə edilməsi və inkişafı', 3),
(16, 'İT mütəxəsssisi / Məsləhətçi', 3),
(17, 'Proqramlaşdırma', 3),
(18, 'İT lahiyələrin idarə edilməsi', 3),
(19, 'Texniki avadanlıq mütəxəssisi', 3),
(20, 'Digər', 3),
(21, 'Daşınmaz əmlak agenti / Makler', 5),
(22, 'Satış üzrə mütəxəssis', 5),
(23, 'Veb-dizayn', 6),
(24, 'Memar / İnteryer dizaynı', 6),
(25, 'Geyim dizaynı', 6),
(26, 'Rəssam', 6),
(27, 'Digər', 6),
(28, 'Vəkil', 7),
(29, 'Hüquqşunas', 7),
(30, 'Cinayət Hüququ', 7),
(31, 'Digər', 7),
(32, 'Məktəb tədrisi', 8),
(33, 'Universitet tədrisi', 8),
(34, 'Repetitor', 8),
(35, 'Xüsusi təhsil / təlim', 8),
(36, 'Digər', 8),
(37, 'Avtomatlaşdırılmış idarəetmə', 9),
(38, 'Tikinti', 9),
(39, 'Kənd təsərrüfatı', 9),
(40, 'Mühəndis', 9),
(41, 'Geologiya və ətraf mühit', 9),
(42, 'Digər', 9),
(43, 'Kuryer', 10),
(44, 'Spa və gözəllik', 10),
(45, 'Xadimə', 10),
(46, 'Ambardar', 10),
(47, 'Restoran işi', 10),
(48, 'Sürücü', 10),
(49, 'Dayə', 10),
(50, 'Fəhlə', 10),
(51, 'Turizm və mehmanxana işi', 10),
(52, 'Tərcüməçi', 10),
(53, 'Mühafizə xidməti', 10),
(54, 'Digər', 10),
(55, 'Həkim', 11),
(56, 'Tibbi personal', 11),
(57, 'Tibb təmsilçisi', 11),
(58, 'Jurnalistika', 12),
(59, 'Tələbələr üçün', 12),
(60, 'İnzibati dəstək', 4),
(61, 'Menecement', 4),
(62, 'Ofis menecementi', 4),
(63, 'Katibə / Resepşn', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE IF NOT EXISTS `vacancy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vac_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vac_phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vac_position` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vac_min_salary` int(11) NOT NULL,
  `vac_max_salary` int(11) NOT NULL,
  `vac_min_age` int(11) NOT NULL,
  `vac_max_age` int(11) NOT NULL,
  `vac_requirements` text COLLATE utf8_unicode_ci NOT NULL,
  `vac_job_description` text COLLATE utf8_unicode_ci NOT NULL,
  `cv_skills_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `cv_personal_info` text COLLATE utf8_unicode_ci NOT NULL,
  `vac_company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vac_contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vac_experience_id` int(10) unsigned NOT NULL,
  `vac_education_id` int(10) unsigned NOT NULL,
  `vac_category_id` int(10) unsigned NOT NULL,
  `vac_city_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vacancy_vac_experience_id_index` (`vac_experience_id`),
  KEY `vacancy_vac_education_id_index` (`vac_education_id`),
  KEY `vacancy_vac_category_id_index` (`vac_category_id`),
  KEY `vacancy_vac_city_id_index` (`vac_city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `cv_cv_category_id_foreign` FOREIGN KEY (`cv_category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cv_cv_city_id_foreign` FOREIGN KEY (`cv_city_id`) REFERENCES `city` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cv_cv_education_id_foreign` FOREIGN KEY (`cv_education_id`) REFERENCES `education` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cv_cv_experience_id_foreign` FOREIGN KEY (`cv_experience_id`) REFERENCES `experience` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD CONSTRAINT `vacancy_vac_city_id_foreign` FOREIGN KEY (`vac_city_id`) REFERENCES `city` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vacancy_vac_category_id_foreign` FOREIGN KEY (`vac_category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vacancy_vac_education_id_foreign` FOREIGN KEY (`vac_education_id`) REFERENCES `education` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vacancy_vac_experience_id_foreign` FOREIGN KEY (`vac_experience_id`) REFERENCES `experience` (`id`) ON DELETE CASCADE;
--
-- Database: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `pma_bookmark`
--

CREATE TABLE IF NOT EXISTS `pma_bookmark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma_column_info`
--

CREATE TABLE IF NOT EXISTS `pma_column_info` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma_designer_coords`
--

CREATE TABLE IF NOT EXISTS `pma_designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma_history`
--

CREATE TABLE IF NOT EXISTS `pma_history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`,`db`,`table`,`timevalue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma_pdf_pages`
--

CREATE TABLE IF NOT EXISTS `pma_pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`page_nr`),
  KEY `db_name` (`db_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma_recent`
--

CREATE TABLE IF NOT EXISTS `pma_recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma_recent`
--

INSERT INTO `pma_recent` (`username`, `tables`) VALUES
('root', '[{"db":"jobportal","table":"cv"},{"db":"jobportal","table":"subcategories"},{"db":"jobportal","table":"experience"},{"db":"jobportal","table":"education"},{"db":"jobportal","table":"city"},{"db":"jobportal","table":"categories"},{"db":"users","table":"users"},{"db":"jobportal","table":"vacancy"},{"db":"jobportal","table":"users"},{"db":"jobportal","table":"migrations"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma_relation`
--

CREATE TABLE IF NOT EXISTS `pma_relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  KEY `foreign_field` (`foreign_db`,`foreign_table`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_coords`
--

CREATE TABLE IF NOT EXISTS `pma_table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_info`
--

CREATE TABLE IF NOT EXISTS `pma_table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_uiprefs`
--

CREATE TABLE IF NOT EXISTS `pma_table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`,`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma_tracking`
--

CREATE TABLE IF NOT EXISTS `pma_tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`db_name`,`table_name`,`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_userconfig`
--

CREATE TABLE IF NOT EXISTS `pma_userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma_userconfig`
--

INSERT INTO `pma_userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2016-04-29 14:36:45', '[]');
--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `male` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `rating` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
