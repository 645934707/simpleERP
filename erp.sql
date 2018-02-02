-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        5.7.19 - MySQL Community Server (GPL)
-- 服务器操作系统:                      Win64
-- HeidiSQL 版本:                  9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- 导出 erp 的数据库结构
CREATE DATABASE IF NOT EXISTS `erp` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `erp`;

-- 导出  表 erp.er_brand 结构
CREATE TABLE IF NOT EXISTS `er_brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `pid` int(11) DEFAULT NULL COMMENT '所属父级 0-顶级',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='分类表';

-- 正在导出表  erp.er_brand 的数据：3 rows
DELETE FROM `er_brand`;
/*!40000 ALTER TABLE `er_brand` DISABLE KEYS */;
INSERT INTO `er_brand` (`id`, `brand_name`, `created_at`, `pid`) VALUES
	(1, '分类1', '2018-01-22 18:23:43', 0),
	(2, '分类2', '2018-01-30 11:29:17', 0),
	(3, '分类3', '2018-01-30 17:32:49', 2);
/*!40000 ALTER TABLE `er_brand` ENABLE KEYS */;

-- 导出  表 erp.er_migrations 结构
CREATE TABLE IF NOT EXISTS `er_migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  erp.er_migrations 的数据：0 rows
DELETE FROM `er_migrations`;
/*!40000 ALTER TABLE `er_migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `er_migrations` ENABLE KEYS */;

-- 导出  表 erp.er_users 结构
CREATE TABLE IF NOT EXISTS `er_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0' COMMENT '0-正常 1-删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  erp.er_users 的数据：20 rows
DELETE FROM `er_users`;
/*!40000 ALTER TABLE `er_users` DISABLE KEYS */;
INSERT INTO `er_users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
	(1, 'admin', 'admin@admin.com', '$2y$10$65bqidtymATGBAxjgRkGfer1nO93CDAEkglKh6TkNda68AyxnQlai', '9H4gYxNcB2pt8TS2bHM0N0Nn9BxazAcEHfj0RgSMpnmDG7fAROihSjrukBNJ', '2018-01-18 01:36:31', '2018-01-18 01:36:31', 0),
	(4, 'user2', 'email', 'password', 'sd', NULL, NULL, 1),
	(3, 'user1', 'email', 'password', 'sd', NULL, NULL, 1),
	(5, 'user2', 'email', 'password', 'sd', NULL, NULL, 1),
	(6, 'user2', 'email', 'password', 'sd', NULL, NULL, 1),
	(7, 'user2', 'email', 'password', 'sd', NULL, NULL, 1),
	(8, 'user2', 'email', 'password', 'sd', NULL, NULL, 1),
	(9, 'user2', 'email', 'password', 'sd', NULL, NULL, 1),
	(10, 'user2', 'email', 'password', 'sd', NULL, NULL, 1),
	(11, 'user2', 'email', 'password', 'sd', NULL, NULL, 1),
	(12, 'user2', 'email', 'password', 'sd', NULL, NULL, 1),
	(13, 'user2', 'email', 'password', 'sd', NULL, NULL, 1),
	(14, 'user2', 'email', 'password', 'sd', NULL, NULL, 1),
	(15, '是的范德萨', '645934707@qq.com', '$2y$10$XmkKFDk9gvq2dNpzjtsOx.QQWNhguNQMCPJfxcSDuSVPH2pEsDKki', NULL, NULL, NULL, 0),
	(16, '士大夫撒', 'hansaina@staff.cntv.cn', '$2y$10$UCbkNY.rOI0Dlv3VbEY4tuFlcXXRAcaF6FolO0W7Q33j2IV3uEAUi', NULL, '2018-01-18 10:40:02', NULL, 0),
	(17, '士大夫撒1', 'hansaina@staff.cntv.cn2', '$2y$10$j3TgBjdHnSHZDIeuoasa7.8xDhKe1a3Lo.Pe.j1K52M7TfWyRDsou', NULL, '2018-01-18 18:40:42', NULL, 0),
	(18, '士大夫撒12', 'hansaina@staff.cntv.cn22', '$2y$10$5QwxlOXr7GTNke0hXwTFuurHib2oxaRyZRsH1Wbt9zYzjQmi2HuFe', NULL, '2018-01-18 18:52:04', NULL, 0),
	(19, '士大夫撒等等', 'admin@admin.com222', '$2y$10$.1ZcSdTV6sT.ZYDyhLXtju7bxH4mRNqIrxmrZ70YSstj7qReKrJJ2', NULL, '2018-01-18 18:53:55', NULL, 0),
	(20, '水电费水电费算法', 'admin@admin.comdd', '$2y$10$6N2.ZxNNOxy7svpx6RGmaeMNQs1ZFS3zLtCjZhiwqs9I4GD24Ep/q', NULL, '2018-01-18 18:54:24', NULL, 0),
	(21, 'wangzuoyaddd', 'zhaopin@cntv.cn11', '$2y$10$f1s6M7SwrFW8TC4C8O/pcuzVjyWP3T6E8s46IZV/3z6p42n3KUcBy', NULL, '2018-01-18 18:55:08', NULL, 0);
/*!40000 ALTER TABLE `er_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
