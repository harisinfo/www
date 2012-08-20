-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2012 at 08:15 AM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jp`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `language_localisation` enum('en-GB','en-IE','en-US','it-IT','es-ES','de-DE','fr-FR') NOT NULL DEFAULT 'en-GB',
  `category_name` varchar(30) NOT NULL,
  `category_label` varchar(30) NOT NULL,
  `sort_order` int(2) NOT NULL DEFAULT '0',
  `flag_hide` tinyint(1) NOT NULL DEFAULT '1',
  `flag_delete` tinyint(1) NOT NULL DEFAULT '0',
  `flag_featured` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`category_id`),
  KEY `flag_hide` (`flag_hide`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `date_created`, `date_modified`, `language_localisation`, `category_name`, `category_label`, `sort_order`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(1, '0000-00-00 00:00:00', '2012-08-13 15:03:16', 'en-GB', 'Prescription', 'Prescription', 1, 0, 0, 0);
INSERT INTO `category` (`category_id`, `date_created`, `date_modified`, `language_localisation`, `category_name`, `category_label`, `sort_order`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(2, '0000-00-00 00:00:00', '2012-08-13 15:03:26', 'en-GB', 'Embarrassing', 'Embarrassing', 2, 0, 0, 0);
INSERT INTO `category` (`category_id`, `date_created`, `date_modified`, `language_localisation`, `category_name`, `category_label`, `sort_order`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(3, '0000-00-00 00:00:00', '2012-08-13 15:03:36', 'en-GB', 'Medicine', 'Medicine', 3, 0, 0, 0);
INSERT INTO `category` (`category_id`, `date_created`, `date_modified`, `language_localisation`, `category_name`, `category_label`, `sort_order`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(4, '0000-00-00 00:00:00', '2012-08-13 15:03:42', 'en-GB', 'Sexual', 'Sexual', 4, 0, 0, 0);
INSERT INTO `category` (`category_id`, `date_created`, `date_modified`, `language_localisation`, `category_name`, `category_label`, `sort_order`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(5, '0000-00-00 00:00:00', '2012-08-13 15:03:48', 'en-GB', 'Health', 'Health', 5, 0, 0, 0);
INSERT INTO `category` (`category_id`, `date_created`, `date_modified`, `language_localisation`, `category_name`, `category_label`, `sort_order`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(6, '0000-00-00 00:00:00', '2012-08-13 15:03:54', 'en-GB', 'Toiletries', 'Toiletries', 6, 0, 0, 0);
INSERT INTO `category` (`category_id`, `date_created`, `date_modified`, `language_localisation`, `category_name`, `category_label`, `sort_order`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(7, '0000-00-00 00:00:00', '2012-08-13 15:03:59', 'en-GB', 'Vitamin', 'Vitamin', 7, 0, 0, 0);
INSERT INTO `category` (`category_id`, `date_created`, `date_modified`, `language_localisation`, `category_name`, `category_label`, `sort_order`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(8, '0000-00-00 00:00:00', '2012-08-13 15:04:05', 'en-GB', 'Beauty', 'Beauty', 8, 0, 0, 0);
INSERT INTO `category` (`category_id`, `date_created`, `date_modified`, `language_localisation`, `category_name`, `category_label`, `sort_order`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(9, '0000-00-00 00:00:00', '2012-08-13 15:04:11', 'en-GB', 'Fragrance', 'Fragrance', 9, 0, 0, 0);
INSERT INTO `category` (`category_id`, `date_created`, `date_modified`, `language_localisation`, `category_name`, `category_label`, `sort_order`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(10, '0000-00-00 00:00:00', '2012-08-13 15:04:16', 'en-GB', 'Baby', 'Baby', 10, 0, 0, 0);
INSERT INTO `category` (`category_id`, `date_created`, `date_modified`, `language_localisation`, `category_name`, `category_label`, `sort_order`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(11, '0000-00-00 00:00:00', '2012-08-13 15:04:21', 'en-GB', 'Electrical', 'Electrical', 11, 0, 0, 0);
INSERT INTO `category` (`category_id`, `date_created`, `date_modified`, `language_localisation`, `category_name`, `category_label`, `sort_order`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(12, '0000-00-00 00:00:00', '2012-08-13 15:06:30', 'en-GB', 'Pet', 'Pet', 12, 1, 0, 0);
INSERT INTO `category` (`category_id`, `date_created`, `date_modified`, `language_localisation`, `category_name`, `category_label`, `sort_order`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(13, '0000-00-00 00:00:00', '2012-08-13 15:04:32', 'en-GB', 'Travel', 'Travel', 13, 0, 0, 0);
INSERT INTO `category` (`category_id`, `date_created`, `date_modified`, `language_localisation`, `category_name`, `category_label`, `sort_order`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(14, '0000-00-00 00:00:00', '2012-08-13 15:04:38', 'en-GB', 'Offers', 'Offers', 14, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `medical_condition`
--

DROP TABLE IF EXISTS `medical_condition`;
CREATE TABLE IF NOT EXISTS `medical_condition` (
  `medical_condition_id` int(10) NOT NULL AUTO_INCREMENT,
  `sub_category_id` int(10) NOT NULL DEFAULT '0',
  `medical_condition_label` varchar(50) DEFAULT NULL,
  `medical_condition_label_en_UK` varchar(50) DEFAULT NULL,
  `gender` smallint(1) DEFAULT NULL COMMENT '0 - Male, 1 - Female, 2 - No Preference',
  `flag_hide` smallint(1) DEFAULT NULL,
  PRIMARY KEY (`medical_condition_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `medical_condition`
--

INSERT INTO `medical_condition` (`medical_condition_id`, `sub_category_id`, `medical_condition_label`, `medical_condition_label_en_UK`, `gender`, `flag_hide`) VALUES(1, 0, 'Weight Loss', 'Weight Loss', 2, 0);
INSERT INTO `medical_condition` (`medical_condition_id`, `sub_category_id`, `medical_condition_label`, `medical_condition_label_en_UK`, `gender`, `flag_hide`) VALUES(2, 0, 'Emergency Contraception', 'Emergency Contraception', 2, 0);
INSERT INTO `medical_condition` (`medical_condition_id`, `sub_category_id`, `medical_condition_label`, `medical_condition_label_en_UK`, `gender`, `flag_hide`) VALUES(3, 2, 'Hair Loss', 'Hair Loss', 0, 0);
INSERT INTO `medical_condition` (`medical_condition_id`, `sub_category_id`, `medical_condition_label`, `medical_condition_label_en_UK`, `gender`, `flag_hide`) VALUES(4, 24, 'Stop Smoking', 'Stop Smoking', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `medical_condition_product`
--

DROP TABLE IF EXISTS `medical_condition_product`;
CREATE TABLE IF NOT EXISTS `medical_condition_product` (
  `medical_condition_product_id` int(50) NOT NULL AUTO_INCREMENT,
  `medical_condition_id` int(10) NOT NULL DEFAULT '0',
  `product_id` int(10) DEFAULT '0',
  PRIMARY KEY (`medical_condition_product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `medical_condition_product`
--

INSERT INTO `medical_condition_product` (`medical_condition_product_id`, `medical_condition_id`, `product_id`) VALUES(1, 4, 5);
INSERT INTO `medical_condition_product` (`medical_condition_product_id`, `medical_condition_id`, `product_id`) VALUES(2, 3, 3);
INSERT INTO `medical_condition_product` (`medical_condition_product_id`, `medical_condition_id`, `product_id`) VALUES(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `medical_condition_question`
--

DROP TABLE IF EXISTS `medical_condition_question`;
CREATE TABLE IF NOT EXISTS `medical_condition_question` (
  `medical_condition_question_id` int(25) NOT NULL AUTO_INCREMENT,
  `medical_condition_question_group` tinyint(2) DEFAULT NULL,
  `sort_order` int(3) DEFAULT NULL,
  `medical_condition_id` int(10) DEFAULT NULL,
  `question_id` int(20) DEFAULT NULL,
  `flag_required` tinyint(1) DEFAULT '0',
  `validation_rule` enum('','AGE_18-65') NOT NULL DEFAULT '',
  `show_medical_condition_question` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`medical_condition_question_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `medical_condition_question`
--

INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(1, 1, 1, 1, 1, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(2, 1, 2, 1, 2, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(3, 1, 3, 1, 3, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(4, 1, 4, 1, 4, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(5, 1, 5, 1, 5, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(6, 1, 6, 1, 6, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(7, 1, 7, 1, 7, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(8, 1, 8, 1, 8, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(9, 1, 9, 1, 9, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(10, 1, 10, 1, 10, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(11, 1, 11, 1, 11, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(12, 1, 12, 1, 12, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(13, 1, 13, 1, 13, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(14, 1, 14, 1, 14, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(15, 1, 15, 1, 15, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(16, 1, 1, 2, 16, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(17, 1, 2, 2, 17, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(18, 1, 3, 2, 18, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(19, 1, 4, 2, 19, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(20, 1, 5, 2, 20, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(21, 1, 6, 2, 21, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(22, 1, 1, 3, 23, 1, 'AGE_18-65', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(23, 1, 2, 3, 24, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(24, 1, 3, 3, 25, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(25, 1, 4, 3, 26, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(26, 1, 1, 4, 27, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(27, 1, 2, 4, 28, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(28, 1, 4, 4, 30, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(29, 1, 5, 4, 31, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(30, 1, 6, 4, 34, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(31, 1, 7, 4, 36, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(32, 1, 8, 4, 37, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(33, 1, 3, 4, 33, 1, '', 1);
INSERT INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES(34, 1, 9, 4, 35, 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(8) NOT NULL DEFAULT '0',
  `sub_category_id` int(9) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `brand` varchar(75) NOT NULL,
  `product_title` varchar(75) NOT NULL,
  `product_keyword` varchar(75) NOT NULL,
  `product_description` longtext NOT NULL,
  `product_attributes` longtext NOT NULL,
  `flag_lock` tinyint(1) NOT NULL DEFAULT '0',
  `flag_hide` tinyint(1) NOT NULL DEFAULT '1',
  `flag_delete` tinyint(1) NOT NULL DEFAULT '0',
  `flag_featured_product` tinyint(1) NOT NULL DEFAULT '0',
  `flag_featured_home` tinyint(1) NOT NULL DEFAULT '0',
  `flag_requires_questionaire` tinyint(1) NOT NULL DEFAULT '0',
  `flag_requires_doctor_approval` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_id`),
  KEY `category_id` (`category_id`),
  KEY `sub_category_id` (`sub_category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `sub_category_id`, `date_created`, `date_modified`, `brand`, `product_title`, `product_keyword`, `product_description`, `product_attributes`, `flag_lock`, `flag_hide`, `flag_delete`, `flag_featured_product`, `flag_featured_home`, `flag_requires_questionaire`, `flag_requires_doctor_approval`) VALUES(3, 2, 12, '0000-00-00 00:00:00', '2012-08-17 11:25:25', 'Regaine', 'Regaine', '', 'REGAINE® Foam is the first and only clinically proven foam hair loss treatment for men. It works by increasing the blood supply to the hair follicles, which helps to strengthen existing hair and stimulate secondary hair growth. The easy-to-use foam takes very little time to apply, meaning it seamlessly fits into your daily grooming routine.\r\n\r\n\r\nHelps prevent further hair loss and regrow hair\r\nResults may be noticeable in just 8 weeks\r\nApply directly to your scalp—twice a day, every day\r\nGoes on easily and dries quickly\r\nIs unscented\r\nREGAINE® Foam is licensed for hereditary hair loss in Men aged 18 to 49. The cut off age of 49 is based on the upper age limit in the trials submitted for license.', '', 0, 0, 0, 1, 1, 1, 0);
INSERT INTO `product` (`product_id`, `category_id`, `sub_category_id`, `date_created`, `date_modified`, `brand`, `product_title`, `product_keyword`, `product_description`, `product_attributes`, `flag_lock`, `flag_hide`, `flag_delete`, `flag_featured_product`, `flag_featured_home`, `flag_requires_questionaire`, `flag_requires_doctor_approval`) VALUES(2, 4, 22, '0000-00-00 00:00:00', '2012-08-17 11:25:34', 'Bayer', 'Levonelle', '', 'Levonelle One-step Morning After Pill emergency contraception, or known as the morning-after-pill, is a form of birth control designed to be used should other methods fail or unprotected intercourse occur. Morning-after-pill is usually used the day after unprotected sexual activity.\r\n\r\nLondon Customers: Patients wishing to purchase from London Postcodes (N, NW, W, SW, EC and WC) can now receive their treatments via on the same day, absolutely FREE of shipping charge.', '', 0, 0, 0, 0, 0, 1, 0);
INSERT INTO `product` (`product_id`, `category_id`, `sub_category_id`, `date_created`, `date_modified`, `brand`, `product_title`, `product_keyword`, `product_description`, `product_attributes`, `flag_lock`, `flag_hide`, `flag_delete`, `flag_featured_product`, `flag_featured_home`, `flag_requires_questionaire`, `flag_requires_doctor_approval`) VALUES(5, 5, 24, '0000-00-00 00:00:00', '2012-08-18 23:55:04', 'Pfizer', 'Champix (Varenicline)', 'Stop Smoking, Smoking Cessation, Champix, Varenicline', 'Champix is a non-nicotine pill.\r\n\r\nChampix is a non-nicotine prescription medicine specifically developed to help adults 18 and over quit smoking. Over 7 million people in the U.S. have already been prescribed Champix.*\r\nHow is Champix different from other smoking cessation products?\r\n\r\nChampix does not contain nicotine. It works in two ways. It targets nicotine receptors in the brain, attaches to them, and blocks nicotine from reaching them. It is believed that Champix also activates these receptors, causing a reduced release of dopamine compared to nicotine.\r\n\r\nIt''s recommended that you begin your Champix treatment a week before you stop smoking completely. This gives Champix a chance to build up in your body. You may smoke during the first week of your Champix treatment, but you should stop smoking completely on Day 8 of your treatment. ', 'Champix is a non-nicotine pill.\r\n\r\nChampix is a non-nicotine prescription medicine specifically developed to help adults 18 and over quit smoking. Over 7 million people in the U.S. have already been prescribed Champix.*\r\nHow is Champix different from other smoking cessation products?\r\n\r\nChampix does not contain nicotine. It works in two ways. It targets nicotine receptors in the brain, attaches to them, and blocks nicotine from reaching them. It is believed that Champix also activates these receptors, causing a reduced release of dopamine compared to nicotine.\r\n\r\nIt''s recommended that you begin your Champix treatment a week before you stop smoking completely. This gives Champix a chance to build up in your body. You may smoke during the first week of your Champix treatment, but you should stop smoking completely on Day 8 of your treatment. ', 0, 0, 0, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

DROP TABLE IF EXISTS `product_detail`;
CREATE TABLE IF NOT EXISTS `product_detail` (
  `product_detail_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) NOT NULL DEFAULT '0',
  `combine_product_id` int(10) NOT NULL DEFAULT '0',
  `product_detail_name` varchar(120) DEFAULT '',
  `product_detail_label` varchar(120) DEFAULT '',
  `product_detail_keyword` varchar(75) DEFAULT '',
  `product_detail_description` longtext,
  `product_detail_attribute` longtext,
  `dispense_type` enum('','Tablet','Tablets','Capsule','Capsules','Patch','Patches') NOT NULL DEFAULT '',
  `dispense_ml` int(10) DEFAULT '0',
  `dispense_mg` decimal(3,2) DEFAULT '0.00',
  `dispense_number` int(10) DEFAULT '0',
  `product_rrp` decimal(5,3) DEFAULT '0.000',
  `product_cost_price_inc_vat` decimal(5,3) DEFAULT '0.000',
  `product_sp_inc_vat` decimal(5,3) DEFAULT '0.000',
  PRIMARY KEY (`product_detail_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`product_detail_id`, `product_id`, `combine_product_id`, `product_detail_name`, `product_detail_label`, `product_detail_keyword`, `product_detail_description`, `product_detail_attribute`, `dispense_type`, `dispense_ml`, `dispense_mg`, `dispense_number`, `product_rrp`, `product_cost_price_inc_vat`, `product_sp_inc_vat`) VALUES(1, 0, 0, 'Beechams Cold & Flu', 'Beechams Cold & Flu', '', '', '', '', 0, 0.00, 0, 0.000, 0.000, 0.000);
INSERT INTO `product_detail` (`product_detail_id`, `product_id`, `combine_product_id`, `product_detail_name`, `product_detail_label`, `product_detail_keyword`, `product_detail_description`, `product_detail_attribute`, `dispense_type`, `dispense_ml`, `dispense_mg`, `dispense_number`, `product_rrp`, `product_cost_price_inc_vat`, `product_sp_inc_vat`) VALUES(2, 3, 0, 'Regaine Foam Single Pack', 'Regaine Foam Single Pack', '', '', '', '', 60, 0.00, 1, 0.000, 0.000, 0.000);
INSERT INTO `product_detail` (`product_detail_id`, `product_id`, `combine_product_id`, `product_detail_name`, `product_detail_label`, `product_detail_keyword`, `product_detail_description`, `product_detail_attribute`, `dispense_type`, `dispense_ml`, `dispense_mg`, `dispense_number`, `product_rrp`, `product_cost_price_inc_vat`, `product_sp_inc_vat`) VALUES(3, 3, 0, 'Regaine Foam Triple Pack', 'Regaine Foam Triple Pack', '', '', '', '', 60, 0.00, 3, 0.000, 0.000, 0.000);
INSERT INTO `product_detail` (`product_detail_id`, `product_id`, `combine_product_id`, `product_detail_name`, `product_detail_label`, `product_detail_keyword`, `product_detail_description`, `product_detail_attribute`, `dispense_type`, `dispense_ml`, `dispense_mg`, `dispense_number`, `product_rrp`, `product_cost_price_inc_vat`, `product_sp_inc_vat`) VALUES(4, 5, 0, 'Champix Initiation Pack', 'Champix Initiation Pack', 'Champix Initiation Pack, Champix Starter Pack, Stop Smoking', 'Champix Initiation Pack', 'Champix Initiation Pack', 'Tablets', 0, 0.50, 11, 0.000, 0.000, 13.959);
INSERT INTO `product_detail` (`product_detail_id`, `product_id`, `combine_product_id`, `product_detail_name`, `product_detail_label`, `product_detail_keyword`, `product_detail_description`, `product_detail_attribute`, `dispense_type`, `dispense_ml`, `dispense_mg`, `dispense_number`, `product_rrp`, `product_cost_price_inc_vat`, `product_sp_inc_vat`) VALUES(5, 5, 4, 'Champix Initiation Pack', 'Champix Initiation Pack', 'Champix Initiation Pack', 'Champix Initiation Pack', 'Champix Initiation Pack', 'Tablets', 0, 1.00, 14, 0.000, 0.000, 35.532);
INSERT INTO `product_detail` (`product_detail_id`, `product_id`, `combine_product_id`, `product_detail_name`, `product_detail_label`, `product_detail_keyword`, `product_detail_description`, `product_detail_attribute`, `dispense_type`, `dispense_ml`, `dispense_mg`, `dispense_number`, `product_rrp`, `product_cost_price_inc_vat`, `product_sp_inc_vat`) VALUES(6, 5, 0, 'Champix (Varenicline)', 'Champix (Varenicline)', 'Champix (Varenicline)', 'Champix (Varenicline)', 'Champix (Varenicline)', 'Tablets', 0, 1.00, 28, 0.000, 0.000, 49.950);

-- --------------------------------------------------------

--
-- Table structure for table `product_detail_image`
--

DROP TABLE IF EXISTS `product_detail_image`;
CREATE TABLE IF NOT EXISTS `product_detail_image` (
  `product_detail_image_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_detail_id` int(11) NOT NULL DEFAULT '0',
  `image_id` int(11) NOT NULL DEFAULT '0',
  `image_extension` varchar(7) NOT NULL DEFAULT 'png',
  `flag_default` tinyint(1) NOT NULL DEFAULT '0',
  `flag_hide` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_detail_image_id`),
  KEY `product_id` (`product_detail_id`),
  KEY `image_id` (`image_id`),
  KEY `product_detail_id_image_id` (`product_detail_id`,`image_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product_detail_image`
--

INSERT INTO `product_detail_image` (`product_detail_image_id`, `product_detail_id`, `image_id`, `image_extension`, `flag_default`, `flag_hide`) VALUES(1, 2, 1, 'jpg', 1, 0);
INSERT INTO `product_detail_image` (`product_detail_image_id`, `product_detail_id`, `image_id`, `image_extension`, `flag_default`, `flag_hide`) VALUES(2, 3, 2, 'jpg', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_detail_price_override`
--

DROP TABLE IF EXISTS `product_detail_price_override`;
CREATE TABLE IF NOT EXISTS `product_detail_price_override` (
  `product_detail_price_override_id` int(12) NOT NULL AUTO_INCREMENT,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product_detail_id` int(10) NOT NULL DEFAULT '0',
  `product_price_inc_vat` decimal(6,3) NOT NULL DEFAULT '0.000',
  `flag_delete` smallint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_detail_price_override_id`),
  KEY `product_detail_id` (`product_detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `product_detail_price_override`
--

INSERT INTO `product_detail_price_override` (`product_detail_price_override_id`, `date_created`, `product_detail_id`, `product_price_inc_vat`, `flag_delete`) VALUES(1, '2012-08-19 00:55:19', 4, 49.500, 0);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `question_id` int(20) NOT NULL AUTO_INCREMENT,
  `question_text` text NOT NULL,
  `question_text_en_UK` text NOT NULL,
  `question_template` enum('YES_NO','YES_NO_MORE_DETAILS','YES_SOMETIMES_NO_MORE_DETAILS','YES_SOMETIMES_NO','MORE_DETAILS','YES_MORE_DETAILS_NO','DD_MM_YYYY','YES_NO_FORCEYES') NOT NULL,
  `default_selection` enum('','YES','NO','TODAY-18','TODAY-16','TODAY-21') NOT NULL,
  `show_question_global` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(1, 'To date, have you ever taken any weight loss prescription treatments such as Reductil, Xenical, Acomplia or Phentermine? If yes which one and when did you last take this treatment?', 'To date, have you ever taken any weight loss prescription treatments such as Reductil, Xenical, Acomplia or Phentermine? If yes which one and when did you last take this treatment?', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(2, 'Are you currently on a course of any weight loss prescription treatments such as Reductil, Xenical, Acomplia or Phentermine? If so which treatment?', 'Are you currently on a course of any weight loss prescription treatments such as Reductil, Xenical, Acomplia or Phentermine? If so which treatment?', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(3, 'If you wish to obtain a repeat prescription for a treatment you are currently taking please tell us how much weight you have lost since you have started using the medication and provide the exact name and dosage of this treatment. ', 'If you wish to obtain a repeat prescription for a treatment you are currently taking please tell us how much weight you have lost since you have started using the medication and provide the exact name and dosage of this treatment. ', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(4, 'Is there any psychological cause for your condition (e.g. anxiety or depression)? Please indicate whether or not you have ever received any treatment for depression, include the duration and type of treatment.', 'Is there any psychological cause for your condition (e.g. anxiety or depression)? Please indicate whether or not you have ever received any treatment for depression, include the duration and type of treatment.', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(5, 'Are you breastfeeding?', 'Are you breastfeeding?', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(6, 'Have you ever suffered from an eating disorder such as Anorexia Nervosa?', 'Have you ever suffered from an eating disorder such as Anorexia Nervosa?', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(7, 'Do you suffer from diabetes or have high cholesterol levels and if so, how are these conditions controlled?', 'Do you suffer from diabetes or have high cholesterol levels and if so, how are these conditions controlled?', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(8, 'Do you suffer from severe hepatic (liver) impairment?', 'Do you suffer from severe hepatic (liver) impairment?', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(9, 'Do you suffer from severe renal (kidney) impairment?', 'Do you suffer from severe renal (kidney) impairment?', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(10, 'Do you suffer from epilepsy? If yes please indicate what treatments you are taking if any?', 'Do you suffer from epilepsy? If yes please indicate what treatments you are taking if any?', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(11, 'Do you suffer from any of the following rare herediatary problems : Galactose intolerance, the Lapp Lactase deficiency or a glucose-galactose malabsorption?', 'Do you suffer from any of the following rare herediatary problems : Galactose intolerance, the Lapp Lactase deficiency or a glucose-galactose malabsorption?', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(12, 'Are you currently taking any enzyme inhibitors such as ketoconazole, ritonavir, telitrhomycin, calithriomycin, nefazodon?', 'Are you currently taking any enzyme inhibitors such as ketoconazole, ritonavir, telitrhomycin, calithriomycin, nefazodon?', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(13, 'Is there any possibility that you could be pregnant?', 'Is there any possibility that you could be pregnant?', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(14, 'Have you suffered from any cardiovascular events in the last 6 months i.e. a heart attack or a stroke?', 'Have you suffered from any cardiovascular events in the last 6 months i.e. a heart attack or a stroke?', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(15, 'How else have you tried to treat your condition. Have you consulted your GP? Have you tried regular exercise and a controlled diet? Is there anything else which you have tried to help remedy the condition?', 'How else have you tried to treat your condition. Have you consulted your GP? Have you tried regular exercise and a controlled diet? Is there anything else which you have tried to help remedy the condition?', 'MORE_DETAILS', '', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(16, 'Do you suffer from any form of liver disease (cirrhosis, liver cancer, hepatitis, liver failure)?', 'Do you suffer from any form of liver disease (cirrhosis, liver cancer, hepatitis, liver failure)?', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(17, 'Unless the circumstances are exceptional we can only supply the medication for your own use, is this medication for your own use?', 'Unless the circumstances are exceptional we can only supply the medication for your own use, is this medication for your own use?', 'YES_NO_MORE_DETAILS', 'YES', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(18, 'Do you are suffer from any form of small bowel disease such as Crohn''s Disease?', 'Do you are suffer from any form of small bowel disease such as Crohn''s Disease?', 'YES_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(19, 'Have you ever had an allergy or other reaction to levonorgestrel, which is the active ingredient in Levonelle®. It is also found in some other hormonal products that your healthcare professional may have prescribed for you in the past such as the mini-pill and some combined contraceptive pills.', 'Have you ever had an allergy or other reaction to levonorgestrel, which is the active ingredient in Levonelle®. It is also found in some other hormonal products that your healthcare professional may have prescribed for you in the past such as the mini-pill and some combined contraceptive pills.', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(20, 'Are you taking any other medication? If yes, please provide more information. You should include details of any herbal remedies that you are taking as well as remembering to include any pills, tablets, inhalers & syrups.', 'Are you taking any other medication? If yes, please provide more information. You should include details of any herbal remedies that you are taking as well as remembering to include any pills, tablets, inhalers & syrups.', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(21, 'Have you had unprotected sex within the last 3 days (72 hours)? If yes, please provide more details as to the date and time of the event. Morning after pill is not a suitable form of contraception if you had unprotected sex more than 3 days (72 hours) ago.', 'Have you had unprotected sex within the last 3 days (72 hours)? If yes, please provide more details as to the date and time of the event. Morning after pill is not a suitable form of contraception if you had unprotected sex more than 3 days (72 hours) ago.', 'YES_MORE_DETAILS_NO', 'YES', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(22, 'Was your last period unusual in any way? If yes, please provide details in the box provided below', 'Was your last period unusual in any way? If yes, please provide details in the box provided below', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(23, 'What is your date of birth?', 'What is your date of birth?', 'DD_MM_YYYY', 'TODAY-18', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(24, 'Will all the medication in your basket be taken by you?', 'Will all the medication in your basket be taken by you?', 'YES_NO_MORE_DETAILS', 'YES', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(25, 'Do you have any existing conditions or are you taking other medication?', 'Do you have any existing conditions or are you taking other medication?', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(26, 'What symptoms are going to be treated with the medication?', 'What symptoms are going to be treated with the medication?', 'MORE_DETAILS', '', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(27, 'How long have you been a smoker?', 'How long have you been a smoker?', 'MORE_DETAILS', '', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(28, 'Why do you want to quit smoking?', 'Why do you want to quit smoking?', 'MORE_DETAILS', '', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(32, 'Have you tried to quit smoking before, if your answer is yes, please give us more details?', 'Have you tried to quit smoking before, if your answer is yes, please give us more details?', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(30, 'Are you pregnant or breast-feeding or planning to become pregnant whilst taking Champix?', 'Are you pregnant or breast-feeding or planning to become pregnant whilst taking Champix?', 'YES_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(31, 'Have you been diagnosed with renal (kidney) disease? ', 'Have you been diagnosed with renal (kidney) disease? ', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(33, 'How many do you smoke per day?', 'How many do you smoke per day?', 'MORE_DETAILS', '', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(34, 'Have you been diagnosed with epilepsy or do you have a history of any psychiatric illness including depression?', 'Have you been diagnosed with epilepsy or do you have a history of any psychiatric illness including depression?', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(35, 'You understand that Champix should be stopped if depression, changes in mood, agitation are causing concerns', 'You understand that Champix should be stopped if depression, changes in mood, agitation are causing concerns', 'YES_NO_FORCEYES', '', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(36, 'Are you taking Insulin, Warfarin, Theophylline?', 'Are you taking Insulin, Warfarin, Theophylline?', 'YES_MORE_DETAILS_NO', 'NO', 1);
INSERT INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES(37, 'Are you currently taking any other medication including over the counter medicines or herbal remedies?', 'Are you currently taking any other medication including over the counter medicines or herbal remedies?', 'YES_MORE_DETAILS_NO', 'NO', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `sub_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `language_localisation` enum('en-GB','en-IE','en-US','it-IT','es-ES','de-DE','fr-FR') NOT NULL DEFAULT 'en-GB',
  `category_id` int(11) NOT NULL DEFAULT '0',
  `sub_category_name` varchar(50) NOT NULL,
  `sub_category_label` varchar(50) NOT NULL,
  `flag_hide` tinyint(1) NOT NULL DEFAULT '1',
  `flag_delete` tinyint(1) NOT NULL DEFAULT '0',
  `flag_featured` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sub_category_id`),
  KEY `category_id` (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(1, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Acne', 'Acne', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(2, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Bad Breath (Halitosis)', 'Bad Breath (Halitosis)', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(3, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Bladder Weakness', 'Bladder Weakness', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(4, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Cold Sores', 'Cold Sores', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(5, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Constipation', 'Constipation', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(6, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Cystitis', 'Cystitis', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(7, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Dandruff', 'Dandruff', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(8, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Diarrhoea', 'Diarrhoea', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(9, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Eczema &amp; Psoriasis', 'Eczema &amp; Psoriasis', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(10, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Excessive Sweating', 'Excessive Sweating', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(11, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Fungal Infections', 'Fungal Infections', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(12, '0000-00-00 00:00:00', '2012-08-16 15:16:24', 'en-GB', 2, 'Hair Loss', 'Hair Loss', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(13, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Headlice &amp; Scabies', 'Headlice &amp; Scabies', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(14, '0000-00-00 00:00:00', '2012-08-13 17:54:59', 'en-GB', 2, 'Impotence (Erectile Dysfunction)', 'Impotence (Erectile Dysfunction)', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(15, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Jock Itch', 'Jock Itch', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(16, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Menopause', 'Menopause', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(17, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Vaginal Care', 'Vaginal Care', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(18, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 1, 'Private Prescription', 'Private Prescription', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(19, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 1, 'NHS Prescription', 'NHS Prescription', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(20, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 1, 'Prescription Medicines (A-Z)', 'Prescription Medicines (A-Z)', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(21, '0000-00-00 00:00:00', '2012-08-13 14:10:59', 'en-GB', 1, 'Online Doctor', 'Online Doctor', 1, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(22, '0000-00-00 00:00:00', '2012-08-14 12:00:10', 'en-GB', 4, 'Emergency Contraception for Women', 'Emergency Contraception for Women', 0, 0, 1);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(23, '0000-00-00 00:00:00', '2012-08-14 12:00:10', 'en-GB', 4, 'Contraception', 'Contraception', 0, 0, 0);
INSERT INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES(24, '0000-00-00 00:00:00', '2012-08-18 23:49:32', 'en-GB', 5, 'Stop Smoking', 'Stop Smoking', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

DROP TABLE IF EXISTS `treatment`;
CREATE TABLE IF NOT EXISTS `treatment` (
  `treatment_id` int(20) NOT NULL AUTO_INCREMENT,
  `medical_condition_id` int(10) NOT NULL,
  `product_id` int(20) NOT NULL DEFAULT '0' COMMENT 'Foreign key, product table',
  `flag_requires_general_medical_questions` smallint(1) NOT NULL DEFAULT '0' COMMENT '0 - No, 1 - Yes',
  `flag_requires_condition_related_questions` smallint(1) NOT NULL DEFAULT '0' COMMENT '0 - No, 1 - Yes',
  `flag_requires_treatment_related_questions` smallint(1) NOT NULL DEFAULT '0' COMMENT '0 - No, 1 - Yes',
  `treatment_label` varchar(70) NOT NULL,
  `treatment_label_en_UK` varchar(70) NOT NULL DEFAULT '0',
  `gender` smallint(1) NOT NULL DEFAULT '0' COMMENT '0 - Female, 1 - Male, 2 - No Preference',
  `flag_hide` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 - No, 1 - Yes',
  PRIMARY KEY (`treatment_id`),
  KEY `treatment_id_medical_condition_id` (`treatment_id`,`medical_condition_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `treatment`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `state` int(3) unsigned DEFAULT '0',
  `user_name` varchar(190) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_email` (`user_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `state`, `user_name`, `password`) VALUES(1, 1, 'hari.ramamurthy', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `user_medical_condition`
--

DROP TABLE IF EXISTS `user_medical_condition`;
CREATE TABLE IF NOT EXISTS `user_medical_condition` (
  `user_medical_condition_id` int(40) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `medical_condition_question_id` int(10) NOT NULL DEFAULT '0',
  `option` int(2) NOT NULL DEFAULT '0',
  `detail` text NOT NULL,
  `flag_change` smallint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_medical_condition_id`),
  KEY `user_id` (`user_id`),
  KEY `medical_condition_question_id` (`medical_condition_question_id`),
  KEY `user_id_medical_condition_question_id` (`user_id`,`medical_condition_question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_medical_condition`
--

