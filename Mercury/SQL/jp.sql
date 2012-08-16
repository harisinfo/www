-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.1.53-community-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2012-08-16 18:03:19
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table jp.category
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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table jp.category: 14 rows
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
REPLACE INTO `category` (`category_id`, `date_created`, `date_modified`, `language_localisation`, `category_name`, `category_label`, `sort_order`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES
	(1, '0000-00-00 00:00:00', '2012-08-13 15:03:16', 'en-GB', 'Prescription', 'Prescription', 1, 0, 0, 0),
	(2, '0000-00-00 00:00:00', '2012-08-13 15:03:26', 'en-GB', 'Embarrassing', 'Embarrassing', 2, 0, 0, 0),
	(3, '0000-00-00 00:00:00', '2012-08-13 15:03:36', 'en-GB', 'Medicine', 'Medicine', 3, 0, 0, 0),
	(4, '0000-00-00 00:00:00', '2012-08-13 15:03:42', 'en-GB', 'Sexual', 'Sexual', 4, 0, 0, 0),
	(5, '0000-00-00 00:00:00', '2012-08-13 15:03:48', 'en-GB', 'Health', 'Health', 5, 0, 0, 0),
	(6, '0000-00-00 00:00:00', '2012-08-13 15:03:54', 'en-GB', 'Toiletries', 'Toiletries', 6, 0, 0, 0),
	(7, '0000-00-00 00:00:00', '2012-08-13 15:03:59', 'en-GB', 'Vitamin', 'Vitamin', 7, 0, 0, 0),
	(8, '0000-00-00 00:00:00', '2012-08-13 15:04:05', 'en-GB', 'Beauty', 'Beauty', 8, 0, 0, 0),
	(9, '0000-00-00 00:00:00', '2012-08-13 15:04:11', 'en-GB', 'Fragrance', 'Fragrance', 9, 0, 0, 0),
	(10, '0000-00-00 00:00:00', '2012-08-13 15:04:16', 'en-GB', 'Baby', 'Baby', 10, 0, 0, 0),
	(11, '0000-00-00 00:00:00', '2012-08-13 15:04:21', 'en-GB', 'Electrical', 'Electrical', 11, 0, 0, 0),
	(12, '0000-00-00 00:00:00', '2012-08-13 15:06:30', 'en-GB', 'Pet', 'Pet', 12, 1, 0, 0),
	(13, '0000-00-00 00:00:00', '2012-08-13 15:04:32', 'en-GB', 'Travel', 'Travel', 13, 0, 0, 0),
	(14, '0000-00-00 00:00:00', '2012-08-13 15:04:38', 'en-GB', 'Offers', 'Offers', 14, 0, 0, 0);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;


-- Dumping structure for table jp.medical_condition
DROP TABLE IF EXISTS `medical_condition`;
CREATE TABLE IF NOT EXISTS `medical_condition` (
  `medical_condition_id` int(10) NOT NULL AUTO_INCREMENT,
  `sub_category_id` int(10) NOT NULL DEFAULT '0',
  `medical_condition_label` varchar(50) DEFAULT NULL,
  `medical_condition_label_en_UK` varchar(50) DEFAULT NULL,
  `gender` smallint(1) DEFAULT NULL COMMENT '0 - Male, 1 - Female, 2 - No Preference',
  `flag_hide` smallint(1) DEFAULT NULL,
  PRIMARY KEY (`medical_condition_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table jp.medical_condition: 3 rows
/*!40000 ALTER TABLE `medical_condition` DISABLE KEYS */;
REPLACE INTO `medical_condition` (`medical_condition_id`, `sub_category_id`, `medical_condition_label`, `medical_condition_label_en_UK`, `gender`, `flag_hide`) VALUES
	(1, 0, 'Weight Loss', 'Weight Loss', 2, 0),
	(2, 0, 'Emergency Contraception', 'Emergency Contraception', 2, 0),
	(3, 2, 'Hair Loss', 'Hair Loss', 0, 0);
/*!40000 ALTER TABLE `medical_condition` ENABLE KEYS */;


-- Dumping structure for table jp.medical_condition_product
DROP TABLE IF EXISTS `medical_condition_product`;
CREATE TABLE IF NOT EXISTS `medical_condition_product` (
  `medical_condition_product_id` int(50) NOT NULL AUTO_INCREMENT,
  `medical_condition_id` int(10) NOT NULL DEFAULT '0',
  `product_id` int(10) DEFAULT '0',
  PRIMARY KEY (`medical_condition_product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table jp.medical_condition_product: 0 rows
/*!40000 ALTER TABLE `medical_condition_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `medical_condition_product` ENABLE KEYS */;


-- Dumping structure for table jp.medical_condition_question
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
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Dumping data for table jp.medical_condition_question: 25 rows
/*!40000 ALTER TABLE `medical_condition_question` DISABLE KEYS */;
REPLACE INTO `medical_condition_question` (`medical_condition_question_id`, `medical_condition_question_group`, `sort_order`, `medical_condition_id`, `question_id`, `flag_required`, `validation_rule`, `show_medical_condition_question`) VALUES
	(1, 1, 1, 1, 1, 1, '', 1),
	(2, 1, 2, 1, 2, 1, '', 1),
	(3, 1, 3, 1, 3, 1, '', 1),
	(4, 1, 4, 1, 4, 1, '', 1),
	(5, 1, 5, 1, 5, 1, '', 1),
	(6, 1, 6, 1, 6, 1, '', 1),
	(7, 1, 7, 1, 7, 1, '', 1),
	(8, 1, 8, 1, 8, 1, '', 1),
	(9, 1, 9, 1, 9, 1, '', 1),
	(10, 1, 10, 1, 10, 1, '', 1),
	(11, 1, 11, 1, 11, 1, '', 1),
	(12, 1, 12, 1, 12, 1, '', 1),
	(13, 1, 13, 1, 13, 1, '', 1),
	(14, 1, 14, 1, 14, 1, '', 1),
	(15, 1, 15, 1, 15, 1, '', 1),
	(16, 1, 1, 2, 16, 1, '', 1),
	(17, 1, 2, 2, 17, 1, '', 1),
	(18, 1, 3, 2, 18, 1, '', 1),
	(19, 1, 4, 2, 19, 1, '', 1),
	(20, 1, 5, 2, 20, 1, '', 1),
	(21, 1, 6, 2, 21, 1, '', 1),
	(22, 1, 1, 3, 23, 1, 'AGE_18-65', 1),
	(23, 1, 2, 3, 24, 1, '', 1),
	(24, 1, 3, 3, 25, 1, '', 1),
	(25, 1, 4, 3, 26, 1, '', 1);
/*!40000 ALTER TABLE `medical_condition_question` ENABLE KEYS */;


-- Dumping structure for table jp.product
DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(8) NOT NULL DEFAULT '0',
  `sub_category_id` int(9) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `brand` varchar(75) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_keyword` varchar(255) NOT NULL,
  `product_title` text NOT NULL,
  `product_description` longtext NOT NULL,
  `product_attributes` longtext NOT NULL,
  `whole_sale_price` decimal(5,3) NOT NULL DEFAULT '0.000',
  `rrp` decimal(5,3) NOT NULL DEFAULT '0.000',
  `cost_price` decimal(5,3) NOT NULL DEFAULT '0.000',
  `selling_price` decimal(5,3) NOT NULL DEFAULT '0.000',
  `dispense_ml` int(10) NOT NULL DEFAULT '0',
  `dispense_mg` int(10) NOT NULL DEFAULT '0',
  `dispense_no` int(10) NOT NULL DEFAULT '0',
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table jp.product: 3 rows
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
REPLACE INTO `product` (`product_id`, `category_id`, `sub_category_id`, `date_created`, `date_modified`, `brand`, `product_name`, `product_keyword`, `product_title`, `product_description`, `product_attributes`, `whole_sale_price`, `rrp`, `cost_price`, `selling_price`, `dispense_ml`, `dispense_mg`, `dispense_no`, `flag_lock`, `flag_hide`, `flag_delete`, `flag_featured_product`, `flag_featured_home`, `flag_requires_questionaire`, `flag_requires_doctor_approval`) VALUES
	(3, 2, 12, '0000-00-00 00:00:00', '2012-08-16 15:25:53', 'Regaine', 'Regaine Foam Single Pack', 'Regaine Foam Single Pack', 'Regaine Foam Single Pack', 'REGAINE® Foam is the first and only clinically proven foam hair loss treatment for men. It works by increasing the blood supply to the hair follicles, which helps to strengthen existing hair and stimulate secondary hair growth. The easy-to-use foam takes very little time to apply, meaning it seamlessly fits into your daily grooming routine.\r\n\r\n\r\nHelps prevent further hair loss and regrow hair\r\nResults may be noticeable in just 8 weeks\r\nApply directly to your scalp—twice a day, every day\r\nGoes on easily and dries quickly\r\nIs unscented\r\nREGAINE® Foam is licensed for hereditary hair loss in Men aged 18 to 49. The cut off age of 49 is based on the upper age limit in the trials submitted for license.', '', 9.999, 34.950, 0.000, 0.000, 60, 0, 0, 0, 0, 0, 1, 1, 1, 0),
	(2, 4, 22, '0000-00-00 00:00:00', '2012-08-14 12:08:30', 'Bayer', 'Levonelle One-step Morning After Pill', 'Levonelle One-step Morning After Pill', 'Levonelle One-step Morning After Pill', 'Levonelle One-step Morning After Pill emergency contraception, or known as the morning-after-pill, is a form of birth control designed to be used should other methods fail or unprotected intercourse occur. Morning-after-pill is usually used the day after unprotected sexual activity.\r\n\r\nLondon Customers: Patients wishing to purchase from London Postcodes (N, NW, W, SW, EC and WC) can now receive their treatments via on the same day, absolutely FREE of shipping charge.', '', 9.990, 10.990, 0.000, 0.000, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
	(4, 2, 12, '0000-00-00 00:00:00', '2012-08-16 15:26:02', 'Regaine', 'Regaine Foam Triple Pack', 'Regaine Foam Triple Pack', 'Regaine Foam Triple Pack', 'REGAINE® Foam is the first and only clinically proven foam hair loss treatment for men. It works by increasing the blood supply to the hair follicles, which helps to strengthen existing hair and stimulate secondary hair growth. The easy-to-use foam takes very little time to apply, meaning it seamlessly fits into your daily grooming routine.\r\n\r\n\r\nHelps prevent further hair loss and regrow hair\r\nResults may be noticeable in just 8 weeks\r\nApply directly to your scalp—twice a day, every day\r\nGoes on easily and dries quickly\r\nIs unscented\r\nREGAINE® Foam is licensed for hereditary hair loss in Men aged 18 to 49. The cut off age of 49 is based on the upper age limit in the trials submitted for license.', '', 9.999, 69.900, 0.000, 0.000, 60, 0, 3, 0, 0, 0, 1, 1, 1, 0);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;


-- Dumping structure for table jp.product_group
DROP TABLE IF EXISTS `product_group`;
CREATE TABLE IF NOT EXISTS `product_group` (
  `product_group_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_group_name` varchar(120) DEFAULT '',
  `product_group_label` varchar(120) DEFAULT '',
  `product_group_label_en_UK` varchar(120) DEFAULT '',
  `product_group_brand` varchar(120) DEFAULT '',
  `product_group_brand_en_UK` varchar(120) DEFAULT '',
  `product_group_sales_rank` int(10) DEFAULT '0',
  `hide_product_group` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`product_group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table jp.product_group: 1 rows
/*!40000 ALTER TABLE `product_group` DISABLE KEYS */;
REPLACE INTO `product_group` (`product_group_id`, `product_group_name`, `product_group_label`, `product_group_label_en_UK`, `product_group_brand`, `product_group_brand_en_UK`, `product_group_sales_rank`, `hide_product_group`) VALUES
	(1, 'Beechams Cold & Flu', 'Beechams Cold & Flu', 'Beechams Cold & Flu', 'Hot Lemon & Honey', 'Hot Lemon & Honey', 0, 0);
/*!40000 ALTER TABLE `product_group` ENABLE KEYS */;


-- Dumping structure for table jp.product_image
DROP TABLE IF EXISTS `product_image`;
CREATE TABLE IF NOT EXISTS `product_image` (
  `product_image_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL DEFAULT '0',
  `image_id` int(11) NOT NULL DEFAULT '0',
  `flag_default` tinyint(1) NOT NULL DEFAULT '0',
  `flag_hide` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_image_id`),
  KEY `product_id` (`product_id`),
  KEY `image_id` (`image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table jp.product_image: 0 rows
/*!40000 ALTER TABLE `product_image` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_image` ENABLE KEYS */;


-- Dumping structure for table jp.question
DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `question_id` int(20) NOT NULL AUTO_INCREMENT,
  `question_text` text NOT NULL,
  `question_text_en_UK` text NOT NULL,
  `question_template` enum('YES_NO','YES_NO_MORE_DETAILS','YES_SOMETIMES_NO_MORE_DETAILS','YES_SOMETIMES_NO','MORE_DETAILS','YES_MORE_DETAILS_NO','DD_MM_YYYY') NOT NULL,
  `default_selection` enum('','YES','NO','TODAY-18','TODAY-16','TODAY-21') NOT NULL,
  `show_question_global` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- Dumping data for table jp.question: 26 rows
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
REPLACE INTO `question` (`question_id`, `question_text`, `question_text_en_UK`, `question_template`, `default_selection`, `show_question_global`) VALUES
	(1, 'To date, have you ever taken any weight loss prescription treatments such as Reductil, Xenical, Acomplia or Phentermine? If yes which one and when did you last take this treatment?', 'To date, have you ever taken any weight loss prescription treatments such as Reductil, Xenical, Acomplia or Phentermine? If yes which one and when did you last take this treatment?', 'YES_MORE_DETAILS_NO', 'NO', 1),
	(2, 'Are you currently on a course of any weight loss prescription treatments such as Reductil, Xenical, Acomplia or Phentermine? If so which treatment?', 'Are you currently on a course of any weight loss prescription treatments such as Reductil, Xenical, Acomplia or Phentermine? If so which treatment?', 'YES_MORE_DETAILS_NO', 'NO', 1),
	(3, 'If you wish to obtain a repeat prescription for a treatment you are currently taking please tell us how much weight you have lost since you have started using the medication and provide the exact name and dosage of this treatment. ', 'If you wish to obtain a repeat prescription for a treatment you are currently taking please tell us how much weight you have lost since you have started using the medication and provide the exact name and dosage of this treatment. ', 'YES_MORE_DETAILS_NO', 'NO', 1),
	(4, 'Is there any psychological cause for your condition (e.g. anxiety or depression)? Please indicate whether or not you have ever received any treatment for depression, include the duration and type of treatment.', 'Is there any psychological cause for your condition (e.g. anxiety or depression)? Please indicate whether or not you have ever received any treatment for depression, include the duration and type of treatment.', 'YES_MORE_DETAILS_NO', 'NO', 1),
	(5, 'Are you breastfeeding?', 'Are you breastfeeding?', 'YES_MORE_DETAILS_NO', 'NO', 1),
	(6, 'Have you ever suffered from an eating disorder such as Anorexia Nervosa?', 'Have you ever suffered from an eating disorder such as Anorexia Nervosa?', 'YES_MORE_DETAILS_NO', 'NO', 1),
	(7, 'Do you suffer from diabetes or have high cholesterol levels and if so, how are these conditions controlled?', 'Do you suffer from diabetes or have high cholesterol levels and if so, how are these conditions controlled?', 'YES_MORE_DETAILS_NO', 'NO', 1),
	(8, 'Do you suffer from severe hepatic (liver) impairment?', 'Do you suffer from severe hepatic (liver) impairment?', 'YES_MORE_DETAILS_NO', 'NO', 1),
	(9, 'Do you suffer from severe renal (kidney) impairment?', 'Do you suffer from severe renal (kidney) impairment?', 'YES_MORE_DETAILS_NO', 'NO', 1),
	(10, 'Do you suffer from epilepsy? If yes please indicate what treatments you are taking if any?', 'Do you suffer from epilepsy? If yes please indicate what treatments you are taking if any?', 'YES_MORE_DETAILS_NO', 'NO', 1),
	(11, 'Do you suffer from any of the following rare herediatary problems : Galactose intolerance, the Lapp Lactase deficiency or a glucose-galactose malabsorption?', 'Do you suffer from any of the following rare herediatary problems : Galactose intolerance, the Lapp Lactase deficiency or a glucose-galactose malabsorption?', 'YES_MORE_DETAILS_NO', 'NO', 1),
	(12, 'Are you currently taking any enzyme inhibitors such as ketoconazole, ritonavir, telitrhomycin, calithriomycin, nefazodon?', 'Are you currently taking any enzyme inhibitors such as ketoconazole, ritonavir, telitrhomycin, calithriomycin, nefazodon?', 'YES_MORE_DETAILS_NO', 'NO', 1),
	(13, 'Is there any possibility that you could be pregnant?', 'Is there any possibility that you could be pregnant?', 'YES_MORE_DETAILS_NO', 'NO', 1),
	(14, 'Have you suffered from any cardiovascular events in the last 6 months i.e. a heart attack or a stroke?', 'Have you suffered from any cardiovascular events in the last 6 months i.e. a heart attack or a stroke?', 'YES_MORE_DETAILS_NO', 'NO', 1),
	(15, 'How else have you tried to treat your condition. Have you consulted your GP? Have you tried regular exercise and a controlled diet? Is there anything else which you have tried to help remedy the condition?', 'How else have you tried to treat your condition. Have you consulted your GP? Have you tried regular exercise and a controlled diet? Is there anything else which you have tried to help remedy the condition?', 'MORE_DETAILS', '', 1),
	(16, 'Do you suffer from any form of liver disease (cirrhosis, liver cancer, hepatitis, liver failure)?', 'Do you suffer from any form of liver disease (cirrhosis, liver cancer, hepatitis, liver failure)?', 'YES_MORE_DETAILS_NO', 'NO', 1),
	(17, 'Unless the circumstances are exceptional we can only supply the medication for your own use, is this medication for your own use?', 'Unless the circumstances are exceptional we can only supply the medication for your own use, is this medication for your own use?', 'YES_NO_MORE_DETAILS', 'YES', 1),
	(18, 'Do you are suffer from any form of small bowel disease such as Crohn\'s Disease?', 'Do you are suffer from any form of small bowel disease such as Crohn\'s Disease?', 'YES_NO', 'NO', 1),
	(19, 'Have you ever had an allergy or other reaction to levonorgestrel, which is the active ingredient in Levonelle®. It is also found in some other hormonal products that your healthcare professional may have prescribed for you in the past such as the mini-pill and some combined contraceptive pills.', 'Have you ever had an allergy or other reaction to levonorgestrel, which is the active ingredient in Levonelle®. It is also found in some other hormonal products that your healthcare professional may have prescribed for you in the past such as the mini-pill and some combined contraceptive pills.', 'YES_MORE_DETAILS_NO', 'NO', 1),
	(20, 'Are you taking any other medication? If yes, please provide more information. You should include details of any herbal remedies that you are taking as well as remembering to include any pills, tablets, inhalers & syrups.', 'Are you taking any other medication? If yes, please provide more information. You should include details of any herbal remedies that you are taking as well as remembering to include any pills, tablets, inhalers & syrups.', 'YES_MORE_DETAILS_NO', 'NO', 1),
	(21, 'Have you had unprotected sex within the last 3 days (72 hours)? If yes, please provide more details as to the date and time of the event. Morning after pill is not a suitable form of contraception if you had unprotected sex more than 3 days (72 hours) ago.', 'Have you had unprotected sex within the last 3 days (72 hours)? If yes, please provide more details as to the date and time of the event. Morning after pill is not a suitable form of contraception if you had unprotected sex more than 3 days (72 hours) ago.', 'YES_MORE_DETAILS_NO', 'YES', 1),
	(22, 'Was your last period unusual in any way? If yes, please provide details in the box provided below', 'Was your last period unusual in any way? If yes, please provide details in the box provided below', 'YES_MORE_DETAILS_NO', 'NO', 1),
	(23, 'What is your date of birth?', 'What is your date of birth?', 'DD_MM_YYYY', 'TODAY-18', 1),
	(24, 'Will all the medication in your basket be taken by you?', 'Will all the medication in your basket be taken by you?', 'YES_NO_MORE_DETAILS', 'YES', 1),
	(25, 'Do you have any existing conditions or are you taking other medication?', 'Do you have any existing conditions or are you taking other medication?', 'YES_MORE_DETAILS_NO', 'NO', 1),
	(26, 'What symptoms are going to be treated with the medication?', 'What symptoms are going to be treated with the medication?', 'MORE_DETAILS', '', 1);
/*!40000 ALTER TABLE `question` ENABLE KEYS */;


-- Dumping structure for table jp.sub_category
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
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- Dumping data for table jp.sub_category: 23 rows
/*!40000 ALTER TABLE `sub_category` DISABLE KEYS */;
REPLACE INTO `sub_category` (`sub_category_id`, `date_created`, `date_modified`, `language_localisation`, `category_id`, `sub_category_name`, `sub_category_label`, `flag_hide`, `flag_delete`, `flag_featured`) VALUES
	(1, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Acne', 'Acne', 0, 0, 0),
	(2, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Bad Breath (Halitosis)', 'Bad Breath (Halitosis)', 0, 0, 0),
	(3, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Bladder Weakness', 'Bladder Weakness', 0, 0, 0),
	(4, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Cold Sores', 'Cold Sores', 0, 0, 0),
	(5, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Constipation', 'Constipation', 0, 0, 0),
	(6, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Cystitis', 'Cystitis', 0, 0, 0),
	(7, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Dandruff', 'Dandruff', 0, 0, 0),
	(8, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Diarrhoea', 'Diarrhoea', 0, 0, 0),
	(9, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Eczema &amp; Psoriasis', 'Eczema &amp; Psoriasis', 0, 0, 0),
	(10, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Excessive Sweating', 'Excessive Sweating', 0, 0, 0),
	(11, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Fungal Infections', 'Fungal Infections', 0, 0, 0),
	(12, '0000-00-00 00:00:00', '2012-08-16 15:16:24', 'en-GB', 2, 'Hair Loss', 'Hair Loss', 0, 0, 0),
	(13, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Headlice &amp; Scabies', 'Headlice &amp; Scabies', 0, 0, 0),
	(14, '0000-00-00 00:00:00', '2012-08-13 17:54:59', 'en-GB', 2, 'Impotence (Erectile Dysfunction)', 'Impotence (Erectile Dysfunction)', 0, 0, 0),
	(15, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Jock Itch', 'Jock Itch', 0, 0, 0),
	(16, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Menopause', 'Menopause', 0, 0, 0),
	(17, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 2, 'Vaginal Care', 'Vaginal Care', 0, 0, 0),
	(18, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 1, 'Private Prescription', 'Private Prescription', 0, 0, 0),
	(19, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 1, 'NHS Prescription', 'NHS Prescription', 0, 0, 0),
	(20, '0000-00-00 00:00:00', '2012-08-13 14:10:44', 'en-GB', 1, 'Prescription Medicines (A-Z)', 'Prescription Medicines (A-Z)', 0, 0, 0),
	(21, '0000-00-00 00:00:00', '2012-08-13 14:10:59', 'en-GB', 1, 'Online Doctor', 'Online Doctor', 1, 0, 0),
	(22, '0000-00-00 00:00:00', '2012-08-14 12:00:10', 'en-GB', 4, 'Emergency Contraception for Women', 'Emergency Contraception for Women', 0, 0, 1),
	(23, '0000-00-00 00:00:00', '2012-08-14 12:00:10', 'en-GB', 4, 'Contraception', 'Contraception', 0, 0, 0);
/*!40000 ALTER TABLE `sub_category` ENABLE KEYS */;


-- Dumping structure for table jp.treatment
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table jp.treatment: 0 rows
/*!40000 ALTER TABLE `treatment` DISABLE KEYS */;
/*!40000 ALTER TABLE `treatment` ENABLE KEYS */;


-- Dumping structure for table jp.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `state` int(3) unsigned DEFAULT '0',
  `user_name` varchar(190) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_email` (`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table jp.user: 1 rows
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`user_id`, `state`, `user_name`, `password`) VALUES
	(1, 1, 'hari.ramamurthy', 'hello');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;


-- Dumping structure for table jp.user_medical_condition
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table jp.user_medical_condition: 0 rows
/*!40000 ALTER TABLE `user_medical_condition` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_medical_condition` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
