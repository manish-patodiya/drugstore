
--
-- Table structure for table `accesslog`
--

CREATE TABLE IF NOT EXISTS `accesslog` (
  `sl_no` bigint(20) NOT NULL AUTO_INCREMENT,
  `action_page` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action_done` text COLLATE utf8_unicode_ci,
  `remarks` text COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entry_date` datetime DEFAULT NULL,
  UNIQUE KEY `SerialNo` (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `account_id` varchar(20) NOT NULL,
  `account_table_name` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `account_2`
--

CREATE TABLE IF NOT EXISTS `account_2` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_name` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `parent_id` int(1) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bank_add`
--

CREATE TABLE IF NOT EXISTS `bank_add` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_id` varchar(50) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `ac_name` varchar(250) DEFAULT NULL,
  `ac_number` varchar(250) DEFAULT NULL,
  `branch` varchar(250) DEFAULT NULL,
  `signature_pic` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bank_summary`
--

CREATE TABLE IF NOT EXISTS `bank_summary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_id` varchar(50) DEFAULT NULL,
  `description` text,
  `deposite_id` varchar(250) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  `ac_type` varchar(50) DEFAULT NULL,
  `dr` decimal(12,2) DEFAULT '0.00',
  `cr` decimal(10,2) DEFAULT '0.00',
  `ammount` decimal(12,2) DEFAULT '0.00',
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cheque_manger`
--

CREATE TABLE IF NOT EXISTS `cheque_manger` (
  `cheque_id` varchar(100) NOT NULL,
  `transection_id` varchar(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `bank_id` varchar(100) NOT NULL,
  `cheque_no` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `transection_type` varchar(100) NOT NULL,
  `cheque_status` varchar(30) NOT NULL,
  `amount` float NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`cheque_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `company_information`
--

CREATE TABLE IF NOT EXISTS `company_information` (
  `company_id` varchar(50) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `website` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company_information`
--

INSERT INTO `company_information` (`company_id`, `company_name`, `email`, `address`, `mobile`, `website`, `status`) VALUES
('NOILG8EGCRXXBWUEUQBM', 'sgmh Shop', 'sgmh@sgmh.com', '98,Green Road,Dhaka', '1922296392', 'http://www.sgmh.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `currency_tbl`
--

CREATE TABLE IF NOT EXISTS `currency_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_name` varchar(50) NOT NULL,
  `icon` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `currency_tbl`
--

INSERT INTO `currency_tbl` (`id`, `currency_name`, `icon`) VALUES
(1, 'Taka', '৳'),
(2, 'Azerbaijan Manat', '₼');

-- --------------------------------------------------------

--
-- Table structure for table `customer_information`
--

CREATE TABLE IF NOT EXISTS `customer_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(30) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_mobile` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_information`
--

INSERT INTO `customer_information` (`id`, `customer_id`, `customer_name`, `customer_address`, `customer_mobile`, `customer_email`, `status`) VALUES
(1, '8LL9E636CFWVMD4', 'Samsuddin', 'test address', '1955110016', 'samsuddin@sgmh.com', 1),
(2, 'S5NZ2Z2LXJFE11U', 'Shahabuddin', 'test address ', '01684964913', 'shahabuddin@sgmh.com', 1),
(3, 'EGLATNFLSV4A9VP', 'Isahaq', 'fsdfs ', '01852376598', 'isahaq@sgmh.com', 1),
(4, 'MHWJPOELVKGS1OS', 'Mubin', 'modhopara', '234234', 'mubin@sgmh.com', 1),
(5, '789XC11EWYDN5XT', 'Sagor', 'sdfsdaf', '01620214460', 'sagor@sgmh.com', 1),
(6, 'WKQJYOTTCBLDS3X', 'stest', 'dsfasdf', '234234', 'stest@sgmh.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_ledger`
--

CREATE TABLE IF NOT EXISTS `customer_ledger` (
  `transaction_id` varchar(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `invoice_no` varchar(100) DEFAULT NULL,
  `receipt_no` varchar(50) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `cheque_no` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `d_c` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `receipt_no` (`receipt_no`),
  KEY `receipt_no_2` (`receipt_no`),
  KEY `receipt_no_3` (`receipt_no`),
  KEY `receipt_no_4` (`receipt_no`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_ledger`
--

INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES
('7I4CEJZ6ZV', 'V144JHCY3R8T8OM', 'NA', NULL, NULL, 'Previous adjustment with software', 'NA', 'NA', '2019-02-03', 1, 21, 'd'),
('D7M4KFOVWZ', '8LL9E636CFWVMD4', 'NA', NULL, 100, 'Previous adjustment with software', 'NA', 'NA', '2019-02-03', 1, 22, 'd'),
('73EYCQ7B7Q', 'S5NZ2Z2LXJFE11U', 'NA', NULL, 200, 'Previous adjustment with software', 'NA', 'NA', '2019-02-03', 1, 23, 'd'),
('NLFZTR15U8', 'EGLATNFLSV4A9VP', 'NA', NULL, 300, 'Previous adjustment with software', 'NA', 'NA', '2019-02-03', 1, 24, 'd'),
('4JLNE33LXB', 'MHWJPOELVKGS1OS', 'NA', NULL, NULL, 'Previous adjustment with software', 'NA', 'NA', '2019-02-03', 1, 25, 'd'),
('NSO2539EQ31XTSR', 'S5NZ2Z2LXJFE11U', '6421231175', NULL, 70, 'Cash Paid By Customer', '', '', '2019-02-04', 1, 26, 'c'),
('NSO2539EQ31XTSR', 'S5NZ2Z2LXJFE11U', NULL, 'CB3IN1VOI3', 70, 'Medicine Received By Customer', '1', '', '2019-02-04', 1, 27, 'd'),
('FD2GOTTL', 'S5NZ2Z2LXJFE11U', '1s234235', NULL, 100, 'Cash Paid By Customer', '', '', '2020-02-05', 1, 28, 'c'),
('FD2GOTTL', 'S5NZ2Z2LXJFE11U', NULL, 'XGFI2YYN', 350, 'Medicine Received By Customer', '1', '', '2020-02-05', 1, 29, 'd'),
('TFG9S552DHJ5BP2', 'EGLATNFLSV4A9VP', '3959999927', NULL, 100, 'Cash Paid By Customer', '', '', '2019-02-08', 1, 30, 'c'),
('TFG9S552DHJ5BP2', 'EGLATNFLSV4A9VP', NULL, 'GFK4LRV9AT', 105, 'Medicine Received By Customer', '1', '', '2019-02-08', 1, 31, 'd'),
('AWZ6QI5QNN1DGND', 'EGLATNFLSV4A9VP', '2929982841', NULL, 140, 'Cash Paid By Customer', '', '', '2019-02-08', 1, 32, 'c'),
('AWZ6QI5QNN1DGND', 'EGLATNFLSV4A9VP', NULL, 'Z1CPN8G54N', 140, 'Medicine Received By Customer', '1', '', '2019-02-08', 1, 33, 'd'),
('EZ8KJMOHNQQYLPF', 'EGLATNFLSV4A9VP', '2597346371', NULL, 140, 'Cash Paid By Customer', '', '', '2019-02-08', 1, 34, 'c'),
('EZ8KJMOHNQQYLPF', 'EGLATNFLSV4A9VP', NULL, '7A9COCWMO5', 140, 'Medicine Received By Customer', '1', '', '2019-02-08', 1, 35, 'd'),
('6GT3N3JL988O43F', 'S5NZ2Z2LXJFE11U', '4744988398', NULL, 240, 'Cash Paid By Customer', '', '', '2019-02-08', 1, 36, 'c'),
('6GT3N3JL988O43F', 'S5NZ2Z2LXJFE11U', NULL, 'UAQ26BVGTY', 240, 'Medicine Received By Customer', '1', '', '2019-02-08', 1, 37, 'd'),
('3MF8ITX8ZJ6LO22', 'EGLATNFLSV4A9VP', '6582891923', NULL, 140, 'Cash Paid By Customer', '', '', '2019-02-08', 1, 38, 'c'),
('3MF8ITX8ZJ6LO22', 'EGLATNFLSV4A9VP', NULL, 'EBGAXX1XFG', 140, 'Medicine Received By Customer', '1', '', '2019-02-08', 1, 39, 'd'),
('9UCIJL492XE2B76', 'EGLATNFLSV4A9VP', '7382188714', NULL, 240, 'Cash Paid By Customer', '', '', '2019-02-08', 1, 40, 'c'),
('9UCIJL492XE2B76', 'EGLATNFLSV4A9VP', NULL, 'ICLBOWOMQ8', 240, 'Medicine Received By Customer', '1', '', '2019-02-08', 1, 41, 'd'),
('57QBBHNXZH', '789XC11EWYDN5XT', 'NA', NULL, 0, 'Previous adjustment with software', 'NA', 'NA', '2019-02-08', 1, 42, 'd'),
('49O761LLK2A5ZF7', '789XC11EWYDN5XT', '8681471136', NULL, 35, 'Cash Paid By Customer', '', '', '2019-02-08', 1, 43, 'c'),
('49O761LLK2A5ZF7', '789XC11EWYDN5XT', NULL, 'MLMVUI9TUF', 35, 'Medicine Received By Customer', '1', '', '2019-02-08', 1, 44, 'd'),
('JNB2Q1L2Y4DTFTM', 'EGLATNFLSV4A9VP', '2243542476', NULL, 70, 'Cash Paid By Customer', '', '', '2019-02-09', 1, 45, 'c'),
('JNB2Q1L2Y4DTFTM', 'EGLATNFLSV4A9VP', NULL, 'BT67J2MKJT', 70, 'Medicine Received By Customer', '1', '', '2019-02-09', 1, 46, 'd'),
('H72L1WMLWVB2E1M', 'EGLATNFLSV4A9VP', '9838815157', NULL, 70, 'Cash Paid By Customer', '', '', '2019-02-09', 1, 47, 'c'),
('H72L1WMLWVB2E1M', 'EGLATNFLSV4A9VP', NULL, 'ZYE9X49BGV', 70, 'Medicine Received By Customer', '1', '', '2019-02-09', 1, 48, 'd'),
('R5GFNC3XFH1AHAG', 'EGLATNFLSV4A9VP', '8721492818', NULL, 70, 'Cash Paid By Customer', '', '', '2019-02-09', 1, 49, 'c'),
('R5GFNC3XFH1AHAG', 'EGLATNFLSV4A9VP', NULL, 'K415G9T6WF', 70, 'Medicine Received By Customer', '1', '', '2019-02-09', 1, 50, 'd'),
('1NQK4IDJUQ3A5M4', 'EGLATNFLSV4A9VP', '7341765181', NULL, 35, 'Cash Paid By Customer', '', '', '2019-02-09', 1, 51, 'c'),
('1NQK4IDJUQ3A5M4', 'EGLATNFLSV4A9VP', NULL, 'RVOIXABZQA', 35, 'Medicine Received By Customer', '1', '', '2019-02-09', 1, 52, 'd'),
('E8FBJTXTF5AKMUT', 'EGLATNFLSV4A9VP', '1128441893', NULL, 35, 'Cash Paid By Customer', '', '', '2019-02-09', 1, 53, 'c'),
('E8FBJTXTF5AKMUT', 'EGLATNFLSV4A9VP', NULL, 'L936QLBZRH', 35, 'Medicine Received By Customer', '1', '', '2019-02-09', 1, 54, 'd'),
('35M5TYVDRH1LUNL', 'EGLATNFLSV4A9VP', '8864932286', NULL, 0, 'Cash Paid By Customer', '', '', '2019-05-16', 1, 55, 'c'),
('35M5TYVDRH1LUNL', 'EGLATNFLSV4A9VP', NULL, 'QOWYO4N57I', 70, 'Medicine Received By Customer', '1', '', '2019-05-16', 1, 56, 'd'),
('BQ9XK527M8', 'WKQJYOTTCBLDS3X', 'NA', NULL, 1000, 'Previous adjustment with software', 'NA', 'NA', '2019-05-16', 1, 57, 'd'),
('52M9U6QLZ7ZAPQ2', 'WKQJYOTTCBLDS3X', '5732315239', NULL, 0, 'Cash Paid By Customer', '', '', '2019-05-16', 1, 58, 'c'),
('52M9U6QLZ7ZAPQ2', 'WKQJYOTTCBLDS3X', NULL, 'J1U7J6JSUK', 70, 'Medicine Received By Customer', '1', '', '2019-05-16', 1, 59, 'd'),
('E95SGGLSGCBUIXW', 'WKQJYOTTCBLDS3X', 'NA', NULL, 1070, 'sdfsadf', '1', '', '2019-05-16', 1, 60, 'c'),
('VZY2INEOVL3JW49', 'EGLATNFLSV4A9VP', NULL, '2125656933', 375, 'dsfasdf', '1', '', '2019-05-16', 1, 61, 'c');

-- --------------------------------------------------------

--
-- Table structure for table `daily_banking_add`
--

CREATE TABLE IF NOT EXISTS `daily_banking_add` (
  `banking_id` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `bank_id` varchar(100) NOT NULL,
  `deposit_type` varchar(255) NOT NULL,
  `transaction_type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `amount` float NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `daily_closing`
--

CREATE TABLE IF NOT EXISTS `daily_closing` (
  `closing_id` varchar(255) NOT NULL,
  `last_day_closing` float NOT NULL,
  `cash_in` float NOT NULL,
  `cash_out` float NOT NULL,
  `date` varchar(50) NOT NULL,
  `amount` float NOT NULL,
  `adjustment` float NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`closing_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `invoice_id` varchar(50) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `date` varchar(50) DEFAULT NULL,
  `total_amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `invoice` varchar(255) NOT NULL,
  `total_discount` decimal(10,2) DEFAULT '0.00' COMMENT 'total invoice discount',
  `invoice_discount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `total_tax` float DEFAULT NULL,
  `invoice_details` varchar(200) DEFAULT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`invoice_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `invoice_details`, `status`) VALUES
('6421231175', 'S5NZ2Z2LXJFE11U', '2019-02-04', '70.00', '1000', '0.00', '0.00', 0, 'Some text Here', 1),
('1s234234', '8LL9E636CFWVMD4', '2/5/2020', '4100.00', '1001', '0.00', '0.00', 0, 'sdfs', 1),
('1s234235', 'S5NZ2Z2LXJFE11U', '2020-02-05', '650.00', '1002', '0.00', '0.00', 0, 'sdfs', 1),
('3959999927', 'EGLATNFLSV4A9VP', '2019-02-08', '105.00', '1003', '0.00', '0.00', 0, 'sdfsd', 1),
('2929982841', 'EGLATNFLSV4A9VP', '2019-02-08', '140.00', '1004', '0.00', '0.00', 0, 'sadfsdf', 1),
('2597346371', 'EGLATNFLSV4A9VP', '2019-02-08', '140.00', '1005', '0.00', '0.00', 0, 'sdf', 1),
('4744988398', 'S5NZ2Z2LXJFE11U', '2019-02-08', '240.00', '1006', '0.00', '0.00', 0, '', 1),
('6582891923', 'EGLATNFLSV4A9VP', '2019-02-08', '140.00', '1007', '0.00', '0.00', 0, 'sdfsdf', 1),
('7382188714', 'EGLATNFLSV4A9VP', '2019-02-08', '240.00', '1008', '0.00', '0.00', 0, '', 1),
('8681471136', '789XC11EWYDN5XT', '2019-02-08', '35.00', '1009', '0.00', '0.00', 0, '', 1),
('2243542476', 'EGLATNFLSV4A9VP', '2019-02-09', '70.00', '1010', '0.00', '0.00', 0, '', 1),
('9838815157', 'EGLATNFLSV4A9VP', '2019-02-09', '70.00', '1011', '0.00', '0.00', 0, '', 1),
('8721492818', 'EGLATNFLSV4A9VP', '2019-02-09', '70.00', '1012', '0.00', '0.00', 0, '', 1),
('7341765181', 'EGLATNFLSV4A9VP', '2019-02-09', '35.00', '1013', '0.00', '0.00', 0, '', 1),
('1128441893', 'EGLATNFLSV4A9VP', '2019-02-09', '35.00', '1014', '0.00', '0.00', 0, 'sdfasd', 1),
('8864932286', 'EGLATNFLSV4A9VP', '2019-05-16', '70.00', '1015', '0.00', '0.00', 0, 'sdfsdf', 1),
('5732315239', 'WKQJYOTTCBLDS3X', '2019-05-16', '70.00', '1016', '0.00', '0.00', 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE IF NOT EXISTS `invoice_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_details_id` varchar(30) NOT NULL,
  `invoice_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `batch_id` varchar(30) NOT NULL,
  `cartoon` float DEFAULT NULL,
  `quantity` float NOT NULL,
  `rate` decimal(12,2) NOT NULL DEFAULT '0.00',
  `manufacturer_rate` decimal(10,2) DEFAULT '0.00',
  `total_price` decimal(12,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(12,0) DEFAULT '0',
  `tax` decimal(10,2) DEFAULT '0.00',
  `paid_amount` decimal(12,0) DEFAULT '0',
  `due_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice_details`
--

INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES
(1, '933543334896866', '6421231175', '58391549', '111', NULL, 2, '35.00', '30.00', '70.00', '0', '0.00', '70', '0.00', 1),
(2, '881387948547151', '1s234234', '58391549', '111', NULL, 10, '35.00', '30.00', '100.00', NULL, '0.00', '100', '250.00', 1),
(3, '894564145468646', '1s234234', '58391549', '111', NULL, 10, '35.00', '30.00', '100.00', NULL, '0.00', '100', '250.00', 1),
(4, '927847978762643', '1s234234', '58391549', '111', NULL, 10, '35.00', '30.00', '100.00', NULL, '0.00', '100', '250.00', 1),
(5, '837128325767279', '1s234234', '58391549', '111', NULL, 10, '35.00', '30.00', '100.00', NULL, '0.00', '100', '250.00', 1),
(6, '22995325', '1s234234', '58391549', '111', NULL, 10, '35.00', '30.00', '100.00', NULL, '0.00', '100', '250.00', 1),
(7, '23138776', '1s234234', '58391549', '111', NULL, 10, '35.00', '30.00', '100.00', NULL, '0.00', '100', '250.00', 1),
(8, '84881356', '1s234234', '58391549', '111', NULL, 10, '35.00', '30.00', '100.00', NULL, '0.00', '100', '250.00', 1),
(9, '44358785', '1s234234', '58391549', '111', NULL, 10, '35.00', '30.00', '100.00', NULL, '0.00', '100', '250.00', 1),
(10, '74198121', '1s234234', '58391549', '111', NULL, 10, '35.00', '30.00', '100.00', '0', '0.00', '100', '250.00', 1),
(11, '73372498', '1s234234', '95173215', '222', NULL, 5, '60.00', '40.00', '25.00', '0', '0.00', '300', '0.00', 1),
(12, '26825128', '1s234234', '58391549', '111', NULL, 10, '35.00', '30.00', '100.00', '0', '0.00', '100', '250.00', 1),
(13, '15965853', '1s234234', '95173215', '222', NULL, 5, '60.00', '40.00', '25.00', '0', '0.00', '300', '0.00', 1),
(14, '36535627', '1s234235', '58391549', '111', NULL, 10, '35.00', '30.00', '100.00', '0', '0.00', '100', '250.00', 1),
(15, '69192139', '1s234235', '95173215', '222', NULL, 5, '60.00', '40.00', '25.00', '0', '0.00', '300', '0.00', 1),
(16, '695154147221815', '2929982841', '58391549', '112', NULL, 4, '35.00', '30.00', '140.00', '0', '0.00', '140', '0.00', 1),
(17, '788983927546293', '2597346371', '58391549', '112', NULL, 4, '35.00', '30.00', '140.00', '0', '0.00', '140', '0.00', 1),
(18, '543898644458689', '4744988398', '95173215', '222', NULL, 4, '60.00', '40.00', '240.00', '0', '0.00', '240', '0.00', 1),
(19, '854385353853777', '6582891923', '58391549', '112', NULL, 4, '35.00', '30.00', '140.00', '0', '0.00', '140', '0.00', 1),
(20, '176855281148345', '7382188714', '95173215', '222', NULL, 4, '60.00', '40.00', '240.00', '0', '0.00', '240', '0.00', 1),
(21, '477555438478513', '8681471136', '58391549', '112', NULL, 1, '35.00', '30.00', '35.00', '0', '0.00', '35', '0.00', 1),
(22, '955432832714697', '2243542476', '58391549', '112', NULL, 2, '35.00', '30.00', '70.00', '0', '0.00', '70', '0.00', 1),
(23, '759698451976174', '9838815157', '58391549', '112', NULL, 2, '35.00', '30.00', '70.00', '0', '0.00', '70', '0.00', 1),
(24, '478548375298218', '8721492818', '58391549', '112', NULL, 2, '35.00', '30.00', '70.00', '0', '0.00', '70', '0.00', 1),
(25, '584797896854734', '7341765181', '58391549', '112', NULL, 1, '35.00', '30.00', '35.00', '0', '0.00', '35', '0.00', 1),
(26, '638511153754766', '1128441893', '58391549', '112', NULL, 1, '35.00', '30.00', '35.00', '0', '0.00', '35', '0.00', 1),
(27, '688674353428791', '8864932286', '58391549', '112', NULL, 2, '35.00', '30.00', '70.00', '0', '0.00', '0', '70.00', 1),
(28, '833568225934768', '5732315239', '58391549', '112', NULL, 2, '35.00', '30.00', '70.00', '0', '0.00', '0', '70.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `phrase` text NOT NULL,
  `english` text,
  `bangla` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=707 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES
(1, 'user_profile', 'User Profile', NULL),
(2, 'setting', 'Setting', NULL),
(3, 'language', 'Language', NULL),
(4, 'manage_users', 'Manage Users', NULL),
(5, 'add_user', 'Add User', NULL),
(6, 'manage_company', 'Manage Company', NULL),
(7, 'web_settings', 'Software Settings', NULL),
(8, 'manage_accounts', 'Manage Accounts', NULL),
(9, 'create_accounts', 'Create Accounts', NULL),
(10, 'manage_bank', 'Manage Bank', NULL),
(11, 'add_new_bank', 'Add New Bank', NULL),
(12, 'settings', 'Bank', NULL),
(13, 'closing_report', 'Closing Report', NULL),
(14, 'closing', 'Closing', NULL),
(15, 'cheque_manager', 'Cheque Manager', NULL),
(16, 'accounts_summary', 'Accounts Summary', NULL),
(17, 'expense', 'Expense', NULL),
(18, 'income', 'Income', NULL),
(19, 'accounts', 'Accounts', NULL),
(20, 'stock_report', 'Stock Report', NULL),
(21, 'stock', 'Stock', NULL),
(22, 'pos_invoice', 'POS Invoice', NULL),
(23, 'manage_invoice', 'Manage Invoice ', NULL),
(24, 'new_invoice', 'New Invoice', NULL),
(25, 'invoice', 'Invoice', NULL),
(26, 'manage_purchase', 'Manage Purchase', NULL),
(27, 'add_purchase', 'Add Purchase', NULL),
(28, 'purchase', 'Purchase', NULL),
(29, 'paid_customer', 'Paid Customer', NULL),
(30, 'manage_customer', 'Manage Customer', NULL),
(31, 'add_customer', 'Add Customer', NULL),
(32, 'customer', 'Customer', NULL),
(33, 'manufacturer_payment_actual', 'Manufacturer Payment Actual', NULL),
(34, 'manufacturer_sales_summary', 'Manufacturer  Sales Summary', NULL),
(35, 'manufacturer_sales_details', 'Manufacturer Sales Details', NULL),
(36, 'manufacturer_ledger', 'Manufacturer Ledger', NULL),
(37, 'manage_manufacturer', 'Manage Manufacturer', NULL),
(38, 'add_manufacturer', 'Add Manufacturer', NULL),
(39, 'manufacturer', 'Manufacturer', NULL),
(40, 'product_statement', 'Medicine Statement', NULL),
(41, 'manage_product', 'Manage Medicine', NULL),
(42, 'add_product', 'Add Medicine', NULL),
(43, 'product', 'Medicine', NULL),
(44, 'manage_category', 'Manage Category', NULL),
(45, 'add_category', 'Add Category', NULL),
(46, 'category', 'Medicine Category', NULL),
(47, 'sales_report_product_wise', 'Sales Report (Medicine Wise)', NULL),
(48, 'purchase_report', 'Purchase Report', NULL),
(49, 'sales_report', 'Sales Report', NULL),
(50, 'todays_report', 'Todays Report', NULL),
(51, 'report', 'Report', NULL),
(52, 'dashboard', 'Dashboard', NULL),
(53, 'online', 'Online', NULL),
(54, 'logout', 'Logout', NULL),
(56, 'total_purchase', 'Total Purchase', NULL),
(57, 'total_amount', 'Total Amount', NULL),
(58, 'manufacturer_name', 'Manufacturer  Name', NULL),
(59, 'invoice_no', 'Invoice No', NULL),
(60, 'purchase_date', 'Purchase Date', NULL),
(61, 'todays_purchase_report', 'Todays Purchase Report', NULL),
(62, 'total_sales', 'Total Sales', NULL),
(63, 'customer_name', 'Customer Name', NULL),
(64, 'sales_date', 'Sales Date', NULL),
(65, 'todays_sales_report', 'Todays Sales Report', NULL),
(66, 'home', 'Home', NULL),
(67, 'todays_sales_and_purchase_report', 'Todays sales and purchase report', NULL),
(68, 'total_ammount', 'Total Amount', NULL),
(69, 'rate', 'Sale Price', NULL),
(70, 'product_model', 'Medicine Type', NULL),
(71, 'product_name', 'Medicine Name', NULL),
(72, 'search', 'Search', NULL),
(73, 'end_date', 'End Date', NULL),
(74, 'start_date', 'Start Date', NULL),
(75, 'total_purchase_report', 'Total Purchase Report', NULL),
(76, 'total_sales_report', 'Total Sales Report', NULL),
(77, 'total_seles', 'Total Sales', NULL),
(78, 'all_stock_report', 'All Stock Report', NULL),
(79, 'search_by_product', 'Search By Medicine', NULL),
(80, 'date', 'Date', NULL),
(81, 'print', 'Print', NULL),
(82, 'stock_date', 'Stock Date', NULL),
(83, 'print_date', 'Print Date', NULL),
(84, 'sales', 'Sales', NULL),
(85, 'price', 'Price', NULL),
(86, 'sl', 'SL.', NULL),
(87, 'add_new_category', 'Add new category', NULL),
(88, 'category_name', 'Category Name', NULL),
(89, 'save', 'Save', NULL),
(90, 'delete', 'Delete', NULL),
(91, 'update', 'Update', NULL),
(92, 'action', 'Action', NULL),
(93, 'manage_your_category', 'Manage your category ', NULL),
(94, 'category_edit', 'Category Edit', NULL),
(95, 'status', 'Status', NULL),
(96, 'active', 'Active', NULL),
(97, 'inactive', 'Inactive', NULL),
(98, 'save_changes', 'Save Changes', NULL),
(99, 'save_and_add_another', 'Save And Add Another', NULL),
(100, 'model', 'Medicine Type', NULL),
(101, 'manufacturer_price', 'Manufacturer Price', NULL),
(102, 'sell_price', 'Sell Price', NULL),
(103, 'image', 'Image', NULL),
(104, 'select_one', 'Select One', NULL),
(105, 'details', 'Details', NULL),
(106, 'new_product', 'New Medicine', NULL),
(107, 'add_new_product', 'Add new medicine', NULL),
(108, 'barcode', 'Barcode', NULL),
(109, 'qr_code', 'Qr-Code', NULL),
(110, 'product_details', 'Medicine Details', NULL),
(111, 'manage_your_product', 'Manage your medicine', NULL),
(112, 'product_edit', 'Medicine Edit', NULL),
(113, 'edit_your_product', 'Edit your medicine', NULL),
(114, 'cancel', 'Cancel', NULL),
(115, 'incl_vat', 'Incl. Vat', NULL),
(116, 'money', 'Dollar', NULL),
(117, 'grand_total', 'Grand Total', NULL),
(118, 'quantity', 'Quantity', NULL),
(119, 'product_report', 'Medicine Report', NULL),
(120, 'product_sales_and_purchase_report', 'Medicine sales and purchase report', NULL),
(121, 'previous_stock', 'Previous Stock', NULL),
(122, 'out', 'Out', NULL),
(123, 'in', 'In', NULL),
(124, 'to', 'To', NULL),
(125, 'previous_balance', 'Previous Balance', NULL),
(126, 'customer_address', 'Customer Address', NULL),
(127, 'customer_mobile', 'Customer Mobile', NULL),
(128, 'customer_email', 'Customer Email', NULL),
(129, 'add_new_customer', 'Add new customer', NULL),
(130, 'balance', 'Balance', NULL),
(131, 'mobile', 'Mobile', NULL),
(132, 'address', 'Address', NULL),
(133, 'manage_your_customer', 'Manage your customer', NULL),
(134, 'customer_edit', 'Customer Edit', NULL),
(135, 'paid_customer_list', 'Paid Customer List', NULL),
(136, 'ammount', 'Amount', NULL),
(137, 'customer_ledger', 'Customer Ledger', NULL),
(138, 'manage_customer_ledger', 'Manage Customer Ledger', NULL),
(139, 'customer_information', 'Customer Information', NULL),
(140, 'debit_ammount', 'Debit Amount', NULL),
(141, 'credit_ammount', 'Credit Amount', NULL),
(142, 'balance_ammount', 'Balance Amount', NULL),
(143, 'receipt_no', 'Receipt NO', NULL),
(144, 'description', 'Description', NULL),
(145, 'debit', 'Debit', NULL),
(146, 'credit', 'Credit', NULL),
(147, 'item_information', 'Item Information', NULL),
(148, 'total', 'Total', NULL),
(149, 'please_select_manufacturer', 'Please Select Manufacturer', NULL),
(150, 'submit', 'Submit', NULL),
(151, 'submit_and_add_another', 'Submit And Add Another One', NULL),
(152, 'add_new_item', 'Add New Item', NULL),
(153, 'manage_your_purchase', 'Manage your purchase', NULL),
(154, 'purchase_edit', 'Purchase Edit', NULL),
(155, 'purchase_ledger', 'Purchase Ledger', NULL),
(156, 'invoice_information', 'Invoice Information', NULL),
(157, 'paid_ammount', 'Paid Amount', NULL),
(158, 'discount', 'Discount / Pcs.', NULL),
(159, 'save_and_paid', 'Save And Paid', NULL),
(160, 'payee_name', 'Payee Name', NULL),
(161, 'manage_your_invoice', 'Manage your invoice', NULL),
(162, 'invoice_edit', 'Invoice Edit', NULL),
(163, 'new_pos_invoice', 'New POS invoice', NULL),
(164, 'add_new_pos_invoice', 'Add new pos invoice', NULL),
(165, 'product_id', 'Medicine ID', NULL),
(166, 'paid_amount', 'Paid Amount', NULL),
(167, 'authorised_by', 'Authorised By', NULL),
(168, 'checked_by', 'Checked By', NULL),
(169, 'received_by', 'Received By', NULL),
(170, 'prepared_by', 'Prepared By', NULL),
(171, 'memo_no', 'Memo No', NULL),
(172, 'website', 'Website', NULL),
(173, 'email', 'Email', NULL),
(174, 'invoice_details', 'Invoice Details', NULL),
(175, 'reset', 'Reset', NULL),
(176, 'payment_account', 'Payment Account', NULL),
(177, 'bank_name', 'Bank Name', NULL),
(178, 'cheque_or_pay_order_no', 'Cheque/Pay Order No', NULL),
(179, 'payment_type', 'Payment Type', NULL),
(180, 'payment_from', 'Payment From', NULL),
(181, 'payment_date', 'Payment Date', NULL),
(182, 'add_income', 'Add Income', NULL),
(183, 'cash', 'Cash', NULL),
(184, 'cheque', 'Cheque', NULL),
(185, 'pay_order', 'Pay Order', NULL),
(186, 'payment_to', 'Payment To', NULL),
(187, 'total_expense_ammount', 'Total Expense Amount', NULL),
(188, 'transections', 'Transactions', NULL),
(189, 'accounts_name', 'Accounts Name', NULL),
(190, 'outflow_report', 'Expense Report', NULL),
(191, 'inflow_report', 'Income Report', NULL),
(192, 'all', 'All', NULL),
(193, 'account', 'Account', NULL),
(194, 'from', 'From', NULL),
(195, 'account_summary_report', 'Account Summary Report', NULL),
(196, 'search_by_date', 'Search By Date', NULL),
(197, 'cheque_no', 'Cheque No', NULL),
(198, 'name', 'Name', NULL),
(199, 'closing_account', 'Closing Account', NULL),
(200, 'close_your_account', 'Close your account', NULL),
(201, 'last_day_closing', 'Last Day Closing', NULL),
(202, 'cash_in', 'Cash In', NULL),
(203, 'cash_out', 'Cash Out', NULL),
(204, 'cash_in_hand', 'Cash In Hand', NULL),
(205, 'add_new_bank', 'Add New Bank', NULL),
(206, 'day_closing', 'Day Closing', NULL),
(207, 'account_closing_report', 'Account Closing Report', NULL),
(208, 'last_day_ammount', 'Last Day Amount', NULL),
(209, 'adjustment', 'Adjustment', NULL),
(210, 'pay_type', 'Pay Type', NULL),
(211, 'customer_or_manufacturer', 'Customer,Manufacturer Or Others', NULL),
(212, 'transection_id', 'Transactions ID', NULL),
(213, 'accounts_summary_report', 'Accounts Summary Report', NULL),
(214, 'bank_list', 'Bank List', NULL),
(215, 'bank_edit', 'Bank Edit', NULL),
(216, 'debit_plus', 'Debit (+)', NULL),
(217, 'credit_minus', 'Credit (-)', NULL),
(218, 'account_name', 'Account Name', NULL),
(219, 'account_type', 'Account Type', NULL),
(220, 'account_real_name', 'Account Real Name', NULL),
(221, 'manage_account', 'Manage Account', NULL),
(222, 'company_name', 'Company Name', NULL),
(223, 'edit_your_company_information', 'Edit your company information', NULL),
(224, 'company_edit', 'Company Edit', NULL),
(225, 'admin', 'Admin', NULL),
(226, 'user', 'User', NULL),
(227, 'password', 'Password', NULL),
(228, 'last_name', 'Last Name', NULL),
(229, 'first_name', 'First Name', NULL),
(230, 'add_new_user_information', 'Add new user information', NULL),
(231, 'user_type', 'User Type', NULL),
(232, 'user_edit', 'User Edit', NULL),
(233, 'rtr', 'RTR', NULL),
(234, 'ltr', 'LTR', NULL),
(235, 'ltr_or_rtr', 'LTR/RTR', NULL),
(236, 'footer_text', 'Footer Text', NULL),
(237, 'favicon', 'Favicon', NULL),
(238, 'logo', 'Logo', NULL),
(239, 'update_setting', 'Update Setting', NULL),
(240, 'update_your_web_setting', 'Update your web setting', NULL),
(241, 'login', 'Login', NULL),
(242, 'your_strong_password', 'Your strong password', NULL),
(243, 'your_unique_email', 'Your unique email', NULL),
(244, 'please_enter_your_login_information', 'Please enter your login information.', NULL),
(245, 'update_profile', 'Update Profile', NULL),
(246, 'your_profile', 'Your Profile', NULL),
(247, 're_type_password', 'Re-Type Password', NULL),
(248, 'new_password', 'New Password', NULL),
(249, 'old_password', 'Old Password', NULL),
(250, 'new_information', 'New Information', NULL),
(251, 'old_information', 'Old Information', NULL),
(252, 'change_your_information', 'Change your information', NULL),
(253, 'change_your_profile', 'Change your profile', NULL),
(254, 'profile', 'Profile', NULL),
(255, 'wrong_username_or_password', 'Wrong User Name Or Password !', NULL),
(256, 'successfully_updated', 'Successfully Updated.', NULL),
(257, 'blank_field_does_not_accept', 'Blank Field Does Not Accept !', NULL),
(258, 'successfully_changed_password', 'Successfully changed password.', NULL),
(259, 'you_are_not_authorised_person', 'You are not authorised person !', NULL),
(260, 'password_and_repassword_does_not_match', 'Passwor and re-password does not match !', NULL),
(261, 'new_password_at_least_six_character', 'New Password At Least 6 Character.', NULL),
(262, 'you_put_wrong_email_address', 'You put wrong email address !', NULL),
(263, 'cheque_ammount_asjusted', 'Cheque amount adjusted.', NULL),
(264, 'successfully_payment_paid', 'Successfully Payment Paid.', NULL),
(265, 'successfully_added', 'Successfully Added.', NULL),
(266, 'successfully_updated_2_closing_ammount_not_changeale', 'Successfully Updated -2. Note: Closing Amount Not Changeable.', NULL),
(267, 'successfully_payment_received', 'Successfully Payment Received.', NULL),
(268, 'already_inserted', 'Already Inserted !', NULL),
(269, 'successfully_delete', 'Successfully Delete.', NULL),
(270, 'successfully_created', 'Successfully Created.', NULL),
(271, 'logo_not_uploaded', 'Logo not uploaded !', NULL),
(272, 'favicon_not_uploaded', 'Favicon not uploaded !', NULL),
(273, 'manufacturer_mobile', 'Manufacturer  Mobile', NULL),
(274, 'manufacturer_address', 'Manufacturer  Address', NULL),
(275, 'manufacturer_details', 'Manufacturer Details', NULL),
(276, 'add_new_manufacturer', 'Add New Manufacturer', NULL),
(277, 'manage_suppiler', 'Manage Manufacturer', NULL),
(278, 'manage_your_manufacturer', 'Manage your Manufacturer', NULL),
(279, 'manage_manufacturer_ledger', 'Manage Manufacturer', NULL),
(280, 'invoice_id', 'Invoice ID', NULL),
(281, 'deposite_id', 'Deposit ID', NULL),
(282, 'manufacturer_actual_ledger', 'Manufacturer Actual Ledger', NULL),
(283, 'manufacturer_information', 'Manufacturer Information', NULL),
(284, 'event', 'Event', NULL),
(285, 'add_new_income', 'Add New Income', NULL),
(286, 'add_expese', 'Add Expense', NULL),
(287, 'add_new_expense', 'Add New Expense', NULL),
(288, 'total_income_ammount', 'Total Income Amount', NULL),
(289, 'create_new_invoice', 'Create New Invoice', NULL),
(290, 'create_pos_invoice', 'Create POS Invoice', NULL),
(291, 'total_profit', 'Total Profit', NULL),
(292, 'monthly_progress_report', 'Monthly Progress Report', NULL),
(293, 'total_invoice', 'Total Invoice', NULL),
(294, 'account_summary', 'Account Summary', NULL),
(295, 'total_manufacturer', 'Total manufacturer', NULL),
(296, 'total_product', 'Total Medicine', NULL),
(297, 'total_customer', 'Total Customer', NULL),
(298, 'manufacturer_edit', 'Manufacturer Edit', NULL),
(299, 'add_new_invoice', 'Add New Invoice', NULL),
(300, 'add_new_purchase', 'Add new purchase', NULL),
(301, 'currency', 'Currency', NULL),
(302, 'currency_position', 'Currency Position', NULL),
(303, 'left', 'Left', NULL),
(304, 'right', 'Right', NULL),
(305, 'add_tax', 'Add Tax', NULL),
(306, 'manage_tax', 'Manage Tax', NULL),
(307, 'add_new_tax', 'Add new tax', NULL),
(308, 'enter_tax', 'Enter Tax', NULL),
(309, 'already_exists', 'Already Exists !', NULL),
(310, 'successfully_inserted', 'Successfully Inserted.', NULL),
(311, 'tax', 'Tax', NULL),
(312, 'tax_edit', 'Tax Edit', NULL),
(313, 'product_not_added', 'Medicine not added !', NULL),
(314, 'total_tax', 'Total Tax', NULL),
(315, 'manage_your_manufacturer_details', 'Manage your Manufacturer', NULL),
(316, 'invoice_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s                                       standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', NULL),
(317, 'thank_you_for_choosing_us', 'Thank you very much for choosing us.', NULL),
(318, 'billing_date', 'Billing Date', NULL),
(319, 'billing_to', 'Billing To', NULL),
(320, 'billing_from', 'Billing From', NULL),
(321, 'you_cant_delete_this_product', 'Sorry !!  You can\'t delete this medicine.This medicine already used in calculation system!', NULL),
(322, 'old_customer', 'Old Customer', NULL),
(323, 'new_customer', 'New Customer', NULL),
(324, 'new_manufacturer', 'New Manufacturer', NULL),
(325, 'old_manufacturer', 'Old Manufacturer', NULL),
(326, 'credit_customer', 'Credit Customer', NULL),
(327, 'account_already_exists', 'This Account Already Exists !', NULL),
(328, 'edit_income', 'Edit Income', NULL),
(329, 'you_are_not_access_this_part', 'You are not authorised person !', NULL),
(330, 'account_edit', 'Account Edit', NULL),
(331, 'due', 'Due', NULL),
(332, 'expense_edit', 'Expense Edit', NULL),
(333, 'please_select_customer', 'Please select customer !', NULL),
(334, 'profit_report', 'Profit Report (Invoice Wise)', NULL),
(335, 'total_profit_report', 'Total profit report', NULL),
(336, 'please_enter_valid_captcha', 'Please enter valid captcha.', NULL),
(337, 'category_not_selected', 'Category not selected.', NULL),
(338, 'manufacturer_not_selected', 'Manufacturer not selected.', NULL),
(339, 'please_select_product', 'Please select medicine', NULL),
(340, 'product_model_already_exist', 'Medicine model already exist !', NULL),
(341, 'invoice_logo', 'Invoice Logo', NULL),
(342, 'available_quantity', 'Available Quantity', NULL),
(343, 'you_can_not_buy_greater_than_available_quantity', 'You can not select grater than availale quantity !', NULL),
(344, 'customer_details', 'Customer details', NULL),
(345, 'manage_customer_details', 'Manage customer details.', NULL),
(346, 'box_size', 'Box size', NULL),
(347, 'expire_date', 'Expiry  date', NULL),
(348, 'product_location', 'Medicine  Shelf', NULL),
(349, 'generic_name', 'Generic name', NULL),
(350, 'payment_method', 'Payment Method', NULL),
(351, 'card_no', 'Card no', NULL),
(352, 'medicine', 'Medicine', NULL),
(353, 'medicine_search', 'Medicine Search', NULL),
(354, 'what_you_search', 'Enter what you search', NULL),
(355, 'company', 'Company', NULL),
(356, 'customer_search', 'Customer search', NULL),
(357, 'invoice_search', 'Invoice search', NULL),
(358, 'purchase_search', 'Purchase search', NULL),
(359, 'daily_closing_report', 'Daily closing report.', NULL),
(360, 'closing_search_report', 'Closing Search Report', NULL),
(361, 'category_list', 'Category List', NULL),
(362, 'company_list', 'Company List', NULL),
(363, 'customers_list', 'Customer List', NULL),
(364, 'credit_customer_list', 'Credit Customer List', NULL),
(365, 'previous_balance_adjustment', 'Previous Balance Adjustment', NULL),
(366, 'invoice_list', 'Invoice List', NULL),
(367, 'add_pos_invoice', 'Add POS Invoice', NULL),
(368, 'add_invoice', 'Add Invoice', NULL),
(369, 'product_list', 'Medicine List', NULL),
(370, 'purchases_list', 'Purchase List', NULL),
(371, 'purchase_list', 'Purchase List', NULL),
(372, 'stock_list', 'Stock List', NULL),
(373, 'all_report', 'All Report', NULL),
(374, 'daily_sales_report', 'Daily sales Report', NULL),
(375, 'product_wise_sales_report', 'Medicine Wise Sales Report', NULL),
(376, 'bank_update', 'Bank Update', NULL),
(377, 'account_list', 'Account List', NULL),
(378, 'manufacturer_list', 'Manufacturer  List', NULL),
(379, 'manufacturer_search_item', 'Manufacturer  Search Item', NULL),
(380, 'user_list', 'User List', NULL),
(381, 'user_search_item', 'User Search Item', NULL),
(382, 'change_password', 'Change Password', NULL),
(383, 'admin_login_area', 'Admin Login Area', NULL),
(384, 'accounts_inflow_form', 'Account Inflow Form', NULL),
(385, 'accounts_outflow_form', 'Accounts Outflow Form', NULL),
(386, 'accounts_tax_form', 'Accounts Tax Form', NULL),
(387, 'accounts_manage_tax', 'Accounts Manage Tax', NULL),
(388, 'accounts_tax_edit', 'Accounts Tax Edit', NULL),
(389, 'accounts_summary_data', 'Accounts Summary Data', NULL),
(390, 'accounts_details_data', 'Accounts Details Data', NULL),
(391, 'datewise_summary_data', 'Datewise Summary Data', NULL),
(392, 'accounts_cheque_manager', 'Account Cheque Manager', NULL),
(393, 'accounts_edit_data', 'Accounts Edit Data', NULL),
(394, 'print_barcode', 'Print Barcode', NULL),
(395, 'print_qrcode', 'Print Qrcode', NULL),
(396, 'add_new_account', 'Add New Account', NULL),
(397, 'table_edit', 'Table Edit', NULL),
(398, 'secret_key', 'Secret Key', NULL),
(399, 'site_key', 'Site Key', NULL),
(400, 'captcha', 'Captcha', NULL),
(401, 'please_add_walking_customer_for_default_customer', 'Please add walking customer for default customer. ', NULL),
(402, 'barcode_qrcode_scan_here', 'Barcode Or QRcode scan here', NULL),
(403, 'manage_your_credit_customer', 'Manage your credit customer', NULL),
(404, 'unit', 'Unit', NULL),
(405, 'total_discount', 'Total Discount', NULL),
(406, 'meter_m', 'Meter (M)', NULL),
(407, 'piece_pc', 'Piece (Pc)', NULL),
(408, 'kilogram_kg', 'Kilogram (Kg)', NULL),
(409, 'import_product_csv', 'Import Medicine (CSV)', NULL),
(410, 'close', 'Close', NULL),
(411, 'csv_file_informaion', 'File Information (CSV)', NULL),
(412, 'download_example_file', 'Download Example File', NULL),
(413, 'upload_csv_file', 'Upload CSV File', NULL),
(414, 'manufacturer_id', 'Manufacturer ID', NULL),
(415, 'category_id', 'Category ID', NULL),
(416, 'are_you_sure_to_delete', 'Are you sure,want to delete ?', NULL),
(417, 'stock_report_manufacturer_wise', 'Stock Report (Manufacturer Wise)', NULL),
(418, 'stock_report_product_wise', 'Stock Report (Product Wise)', NULL),
(419, 'select_manufacturer', 'Select Manufacturer', NULL),
(420, 'select_product', 'Select Product', NULL),
(421, 'phone', 'Phone', NULL),
(422, 'in_quantity', 'In Quantity', NULL),
(423, 'out_quantity', 'Sold QTY', NULL),
(424, 'in_taka', 'In Taka', NULL),
(425, 'out_taka', 'Out Taka', NULL),
(426, 'data_synchronizer', 'Data Synchronizer', NULL),
(427, 'synchronize', 'Synchronize', NULL),
(428, 'backup_restore', 'Backup And Restore', NULL),
(429, 'synchronizer_setting', 'Synchronizer Setting', NULL),
(430, 'backup_and_restore', 'Backup And Restore', NULL),
(431, 'hostname', 'Host Name', NULL),
(432, 'username', 'User Name', NULL),
(433, 'ftp_port', 'FTP Port', NULL),
(434, 'ftp_debug', 'FTP Debug', NULL),
(435, 'project_root', 'Project Root', NULL),
(436, 'internet_connection', 'Internet connection', NULL),
(437, 'ok', 'Ok', NULL),
(438, 'not_available', 'Not available', NULL),
(439, 'outgoing_file', 'Outgoing File', NULL),
(440, 'available', 'Available', NULL),
(441, 'incoming_file', 'Incoming file', NULL),
(442, 'data_upload_to_server', 'Data upload to server', NULL),
(443, 'download_data_from_server', 'Download data from server', NULL),
(444, 'data_import_to_database', 'Data import to database', NULL),
(445, 'please_wait', 'Please Wait', NULL),
(446, 'ooops_something_went_wrong', 'Ooops something went wrong', NULL),
(447, 'file_information', 'File Information', NULL),
(448, 'size', 'Size', NULL),
(449, 'backup_date', 'Backup date', NULL),
(450, 'backup_now', 'Backup Now', NULL),
(451, 'are_you_sure', 'Are you sure ?', NULL),
(452, 'download', 'Downlaod', NULL),
(453, 'database_backup', 'Database Backup', NULL),
(454, 'backup_successfully', 'Backup Successfully', NULL),
(455, 'please_try_again', 'Please Try Again', NULL),
(456, 'restore_successfully', 'Restore successfully', NULL),
(457, 'download_successfully', 'Download Successfully', NULL),
(458, 'delete_successfully', 'Delete Successfully', NULL),
(459, 'ftp_setting', 'FTP Setting', NULL),
(460, 'save_successfully', 'Save successfully', NULL),
(461, 'upload_successfully', 'Upload successfully.', NULL),
(462, 'unable_to_upload_file_please_check_configuration', 'unable to upload file please check configuration.', NULL),
(463, 'please_configure_synchronizer_settings', 'Please Configure Synchronizer Settings ', NULL),
(464, 'unable_to_download_file_please_check_configuration', 'Unable To Download File,Please Check Configuration.', NULL),
(465, 'data_import_first', 'Data Import First', NULL),
(466, 'data_import_successfully', 'Data Import Successfully', NULL),
(467, 'unable_to_import_data_please_check_config_or_sql_file', 'Unable to import data please check config or sql file.', NULL),
(468, 'restore_now', 'Restore Now', NULL),
(469, 'out_of_stock', 'Out Of Stock', NULL),
(470, 'others', 'Others', NULL),
(471, 'shelf', 'Shelf', NULL),
(472, 'discount_type', 'Discount Type ', NULL),
(473, 'discount_percentage', 'Discount', NULL),
(474, 'fixed_dis', 'Fixed Dis', NULL),
(475, 'full_paid', 'Full Paid', NULL),
(476, 'available_qnty', 'Ava.Qty', NULL),
(477, 'stock_ctn', 'Stock/Qnt', NULL),
(478, 'sale_price', 'Sale Price', NULL),
(479, 'manufacturer_rate', 'Manufacturer  Price', NULL),
(480, 'please_upload_image_type', 'Sorry!!! Please Upload jpg,jpeg,png,gif typeimage', NULL),
(481, 'ml', 'Milli liter(ml)', NULL),
(482, 'mg', 'Milli Gram(mg)', NULL),
(483, 'you_can_not_buy_greater_than_available_qnty', 'You can not sale more than available quantity ! please purchase this Product', NULL),
(484, 'due_amount', 'Due Amount', NULL),
(485, 'return_invoice', 'Return Invoice', NULL),
(486, 'sold_qty', 'Sold Qty', NULL),
(487, 'ret_quantity', 'Return QTY', NULL),
(488, 'deduction', 'Deduction', NULL),
(489, 'return', 'Return', NULL),
(490, 'note', 'Return Reasone', NULL),
(491, 'usablilties', 'Return Usability', NULL),
(492, 'adjs_with_stck', 'Adjust With Stock', NULL),
(493, 'return_to_manufacturer', 'Return To Manufacturer', NULL),
(494, 'wastage', 'Wastage', NULL),
(495, 'to_deduction', 'Total Deduction', NULL),
(496, 'nt_return', 'Net Return', NULL),
(497, 'return_id', 'Return Id', NULL),
(498, 'return_details', 'Return Details', NULL),
(499, 'add_return', 'Add Return', NULL),
(500, 'return_list', 'Return List', NULL),
(501, 'stock_return_list', 'Stock Return List', NULL),
(502, 'wastage_return_list', 'Wastage Return List', NULL),
(503, 'check_return', 'Check Return', NULL),
(504, 'quantity_must_be_fillup', 'Return Quantity Must be Fill Up', NULL),
(505, 'expeire_date', 'Expiry  date', NULL),
(506, 'batch_id', 'Batch ID', NULL),
(507, 'manufacturer_return_list', 'Manufacturer  Return List', NULL),
(508, 'c_r_slist', 'Customer Return List ', NULL),
(509, 'manufacturer_return', 'Manufacturer  Return List', NULL),
(510, 'wastage_list', 'Wastage List', NULL),
(511, 'in_qnty', 'In Quantity', NULL),
(512, 'out_qnty', 'Sold QTY', NULL),
(513, 'stock_sale', 'Stock Sell Price', NULL),
(514, 'add_product_csv', 'Import Medicine (CSV)', NULL),
(515, 'purchase_id', 'Purchase ID', NULL),
(516, 'add_payment', 'Add Payment', NULL),
(517, 'add_new_payment', 'Add new Payment', NULL),
(518, 'transaction', 'Transaction', NULL),
(519, 'manage_transaction', 'Manage Transaction', NULL),
(520, 'choose_transaction', 'Choose Transaction', NULL),
(521, 'receipt', 'Receipt', NULL),
(522, 'payment', 'Payment', NULL),
(523, 'transaction_categry', 'Transaction Category', NULL),
(524, 'transaction_mood', 'Transaction Mood', NULL),
(525, 'payment_amount', 'Payment Amount', NULL),
(526, 'receipt_amount', 'Receipt Amount', NULL),
(527, 'daily_summary', 'Daily Summary', NULL),
(528, 'daily_cash_flow', 'Daily  Cashflow', NULL),
(529, 'custom_report', 'Custom Report', NULL),
(530, 'root_account', 'Root Account', NULL),
(531, 'office', 'Office', NULL),
(532, 'loan', 'Loan', NULL),
(533, 'successfully_saved', 'Successfully Saved', NULL),
(534, 'bank', 'Bank', NULL),
(535, 'bank_transaction', 'Bank Transaction', NULL),
(536, 'office_loan', 'Office Loan', NULL),
(537, 'add_person', 'Add Person', NULL),
(538, 'manage_loan', 'Manage Loan', NULL),
(539, 'add_loan', 'Add Loan', NULL),
(540, 'ac_name', 'Account Name', NULL),
(541, 'ac_no', 'Account No', NULL),
(542, 'branch', 'Branch', NULL),
(543, 'signature_pic', 'Signature ', NULL),
(544, 'withdraw_deposite_id', 'Withdraw Deposit ID', NULL),
(545, 'select_report', 'Select Report', NULL),
(546, 'per_qty', 'Purchase Qty', NULL),
(547, 'stock_report_batch_wise', 'Stock Report(Batch Wise)', NULL),
(548, 'box', 'Box', NULL),
(549, 'gram', 'Gram', NULL),
(550, 'profit_report_manufacturer_wise', 'Profit/Loss Report(Manufacturer)', NULL),
(551, 'calculate', 'Calculate', NULL),
(552, 'profit_report_product_wise', 'Profit/Loss  Report Product Wise', NULL),
(553, 'view_report', 'View Report', NULL),
(554, 'report_for', 'Report For', NULL),
(555, 'total_sale_qty', 'Total Sale QTY', NULL),
(556, 'total_purchase_pric', 'Total purchase Price', NULL),
(557, 'total_sale', 'Total Sale', NULL),
(558, 'net_profit', 'Net Profit', NULL),
(559, 'loss', 'Loss', NULL),
(560, 'product_type', 'Medicine Type', NULL),
(561, 'add_type', 'Add Type', NULL),
(562, 'add_new_type', 'Add New  Type', NULL),
(563, 'type', 'Type', NULL),
(564, 'type_name', 'Type Name', NULL),
(565, 'manage_type', 'Manage Type', NULL),
(566, 'type_id', 'Type Id', NULL),
(567, 'type_edit', 'Edit Type', NULL),
(568, 'profitloss', 'profit/Loss', NULL),
(569, 'manufacturer_wise', 'Manufacturer Wise', NULL),
(570, 'product_wise', 'Medicine Wise', NULL),
(571, 'medicine_info', 'Medicine Information', NULL),
(572, 'choose_another_invno', 'Choose Another Invoice No !!', NULL),
(573, 'return_manufacturers', 'Return Manufacturers', NULL),
(574, 'return_manufacturer', 'Return Manufacturers', NULL),
(575, 'please_input_correct_invoice_no', 'Please Input Correct Invoice No', NULL),
(576, 'stock_purchase_price', 'Stock Purchase Price', NULL),
(577, 'manufacturer_returns', 'Manufacturer  Return ', NULL),
(578, 'invoice_discount', 'Invoice Discount', NULL),
(579, 'qty', 'Qty', NULL),
(580, 'discounts', 'Discount', NULL),
(581, 'sub_total', 'Sub Total', NULL),
(582, 'paid', 'Paid', NULL),
(583, 'change', 'Change', NULL),
(584, 'purchase_price', 'Purchase Price', NULL),
(585, 'expiry', 'Expiry', NULL),
(586, 'batch', 'Batch', NULL),
(587, 'role_permission', 'Role Permission', NULL),
(588, 'user_assign_role', 'User Assign Role', NULL),
(589, 'permission', 'Permission', NULL),
(590, 'personal_loan', 'Personal Loan', NULL),
(591, 'role_name', 'Role Name', NULL),
(592, 'create', 'Create', NULL),
(593, 'read', 'Read', NULL),
(594, 'add_role', 'Add Role', NULL),
(595, 'You do not have permission to access. Please contact with administrator.', 'You do not have permission to access. Please contact with administrator.', NULL),
(596, 'role_permission_added_successfully', 'Role Permission Added successfully.', NULL),
(597, 'role_list', 'Role List', NULL),
(598, 'role_permission_updated_successfully', 'Role Permission Updated Successfully.', NULL),
(599, 'add_phrase', 'Add Phrase', NULL),
(600, 'language_home', 'Language Home', NULL),
(601, 'phrase_edit', 'Phrase Edit', NULL),
(602, 'no_role_selected', 'No Role Selected', NULL),
(603, 'category_added_successfully', 'Category added successfully', NULL),
(604, 'category_already_exist', 'Category already exist', NULL),
(605, 'select_manufacturer', 'Select Manufacturer', NULL),
(607, 'select_tax', 'Select Tax', NULL),
(608, 'must_input_numbers', 'Must input numbers', NULL),
(609, 'please_check_your_price', 'Please Check Your Price', NULL),
(610, 'your_profit_is', 'Your Profit is', NULL),
(611, 'failed', 'Failed', NULL),
(612, 'you_have_reached_the_limit_of_adding', 'You have reached the limit of adding', NULL),
(613, 'inputs', 'inputs', NULL),
(614, 'expiry_date_should_be_greater_than_puchase_date', 'Expiry Date should be greater than Puchase Date', NULL),
(615, 'expiry_date_should_be_greater_than_puchase_date', 'Expiry Date should be greater than Puchase Date', NULL),
(616, 'product_name', 'Product Name', NULL),
(617, 'total_quantity', 'Total Quantity', NULL),
(618, 'rates', 'Rate', NULL),
(619, 'total_amount', 'Total Amount', NULL),
(621, 'receipt_detail', 'Receipt Detail', NULL),
(622, 'amount', 'Amount', NULL),
(623, 'save_and_add_another_one', 'Save and add another one', NULL),
(624, 'checque_number', 'Checque Number', NULL),
(625, 'edit_receipt', 'Edit Receipt', NULL),
(626, 'receipt_list', 'Receipt List', NULL),
(627, 'search_by_customer_name', 'Search By Customer Name', NULL),
(628, 'actions', 'Actions', NULL),
(629, 'no_data_found', 'No Data Found', NULL),
(630, 'edit', 'Edit', NULL),
(631, 'product_not_found', 'Product not found', NULL),
(632, 'request_failed_please_check_your_code_and_try_again', 'Request Failed, Please check your code and try again', NULL),
(633, 'You_can_not_return_more_than_sold_quantity', 'You Can Not Return More than Sold quantity', NULL),
(634, 'you_can_not_return_less_than_1', 'You Can Not Return Less than 1', NULL),
(635, 'transection_details', 'Transection Details', NULL),
(636, 'transection_details_datewise', 'Transection  Details Datewise', NULL),
(637, 'transection_id', 'Transactions ID', NULL),
(638, 'select_option', 'Select Option', NULL),
(639, 'loan_list', 'Loan List', NULL),
(640, 'todays_details', 'Todays Details', NULL),
(641, 'transaction_details', 'Transaction Details', NULL),
(642, 'person_id', 'Person ID', NULL),
(643, 'total_transection', 'Total Transection', NULL),
(644, 'transaction_id', 'Transaction ID', NULL),
(645, 'transection_report', 'Transection Report', NULL),
(646, 'add_transection', 'Add Transection', NULL),
(647, 'manage_transection', 'Manage Transection', NULL),
(648, 'select_id', 'Select ID', NULL),
(649, 'choose_transection', 'Choose Transection', NULL),
(650, 'update_transection', 'Update Transection', NULL),
(651, 'manufacturer_all', 'Manufacturer All', NULL),
(652, 'select_all', 'Select All', NULL),
(653, 'all', 'All', NULL),
(654, 'max_rate', 'Max Rate', NULL),
(655, 'min_rate', 'Min Rate', NULL),
(656, 'average_rate', 'Average Rate', NULL),
(657, 'date_expired_please_choose_another.', 'Date Expired!! Please Choose another', NULL),
(658, 'your_medicine_is_date_expiry_Please_choose_another', 'Your Medicine is Date Expiry !! Please Choose another', NULL),
(659, 'meno', 'MEMO', NULL),
(660, 'out_of_stock_and_date_expired_medicine', 'Out of Stock and Date Expired Medicine', NULL),
(661, 'edit_profile', 'Edit Profile', NULL),
(662, 'deposit_detail', 'Deposit detail', NULL),
(663, 'new_deposit', 'New Deposit', NULL),
(664, 'edit_deposit', 'Edit Deposit', NULL),
(665, 'select_customer', 'Select Customer', NULL),
(666, 'draw', 'Draw', NULL),
(667, 'deposit', 'Deposit', NULL),
(668, 'select_type', 'Select Type', NULL),
(669, 'transaction_type', 'Transaction Type', NULL),
(670, 'cash', 'Cash', NULL),
(671, 'select_bank', 'Select Bank', NULL),
(672, 'drawing', 'Drawing', NULL),
(673, 'expenses', 'Expenses', NULL),
(674, 'banking', 'Banking', NULL),
(675, 'daily_closing', 'Daily Closing', NULL),
(676, 'title', 'Title', NULL),
(677, 'error_get_data_from_ajax', 'Error get data from ajax', NULL),
(678, 'toggle_navigation', 'Toggle Navigation', NULL),
(679, 'this_product_not_found', 'This Product Not Found !', NULL),
(680, 'search_by_date_from', 'Search By Date: From', NULL),
(681, 'manufacturer_sales_report', 'Manufacturer Sales Report', NULL),
(682, 'transection', 'Transection', NULL),
(683, 'transection_mood', 'Transection Mood', NULL),
(684, 'transection_categry', 'Transection Categry', NULL),
(685, 'export_csv', 'Export CSV', NULL),
(686, 'select manufacturer', 'Select Manufacturer', NULL),
(687, 'customer_return', 'Customer Return', NULL),
(688, 'return_form', 'Return Form', NULL),
(689, 'data_not_found', 'Data Not Found', NULL),
(690, 'export_csv', 'Export CSV', NULL),
(691, 'manage_person', 'Manage Person', NULL),
(692, 'backup', 'Back Up', NULL),
(693, 'total_balance', 'Total Balance', NULL),
(694, 'product_id_model_manufacturer_id_can_not_null', 'Product Id & Product Model & Manufacturer Id Can not be Blank', NULL),
(695, 'product_name_can_not_be_null', 'Product Name can Not be Blank', NULL),
(696, 'product_model_can_not_be_null', 'Product Model Can Not be Blank', NULL),
(697, 'sms', 'SMS', NULL),
(698, 'sms_configure', 'Sms Configuration', NULL),
(699, 'url', 'Url', NULL),
(700, 'sender_id', 'Sender ID', NULL),
(701, 'api_key', 'Api Key', NULL),
(702, 'barcode_or_qrcode', 'Barcode Or QRcode ', NULL),
(703, 'currency_name', 'Currency Name', NULL),
(704, 'add_currency', 'Add Currency', NULL),
(705, 'currency_icon', 'Currency Icon', NULL),
(706, 'currency_list', 'Currency List', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_information`
--

CREATE TABLE IF NOT EXISTS `manufacturer_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturer_id` varchar(100) NOT NULL,
  `manufacturer_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `details` varchar(255) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `manufacturer_id` (`manufacturer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufacturer_information`
--

INSERT INTO `manufacturer_information` (`id`, `manufacturer_id`, `manufacturer_name`, `address`, `mobile`, `details`, `status`) VALUES
(1, '294FM67SJF3FYQXAPJV2', 'Tuhin Sarkar', 'khilkhet', '234234', 'sdfs', 1),
(2, 'VVUVQWE7GOF6C8NQIBIV', 'Ainal Hoque', 'Mirpur', '01852376598', 'sdfs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_ledger`
--

CREATE TABLE IF NOT EXISTS `manufacturer_ledger` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` varchar(100) NOT NULL,
  `manufacturer_id` varchar(100) NOT NULL,
  `chalan_no` varchar(100) DEFAULT NULL,
  `deposit_no` varchar(50) DEFAULT NULL,
  `amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `description` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `cheque_no` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `receipt_no` (`deposit_no`),
  KEY `receipt_no_2` (`deposit_no`),
  KEY `receipt_no_3` (`deposit_no`),
  KEY `receipt_no_4` (`deposit_no`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufacturer_ledger`
--

INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`) VALUES
(1, 'CTP8RM6A4J', '294FM67SJF3FYQXAPJV2', '234234', NULL, '3000.00', 'Purchase From Manufacturer. sdfs', '', '', '2020-02-04', 1),
(2, '3244fsfsdfs', '294FM67SJF3FYQXAPJV2', '1902041030', NULL, '25500.00', 'Purchase From Manufacturer. sdfs', '', '', '2020-02-04', 1),
(3, '44444sdfsdf', '294FM67SJF3FYQXAPJV2', '1902041034', NULL, '9500.00', 'Purchase From Manufacturer. sdfs', '', '', '2020-02-05', 1),
(4, '20190209073620', 'VVUVQWE7GOF6C8NQIBIV', '124564', NULL, '120.00', 'Purchase From Manufacturer. xcvxcv', '', '', '2019-02-09', 1),
(5, '20190516123730', '294FM67SJF3FYQXAPJV2', '325698', NULL, '1000.00', 'Purchase From Manufacturer. sdfasd', '', '', '2019-05-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_product`
--

CREATE TABLE IF NOT EXISTS `manufacturer_product` (
  `manufacturer_pr_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(30) NOT NULL,
  `products_model` varchar(50) DEFAULT NULL,
  `manufacturer_id` varchar(30) NOT NULL,
  `manufacturer_price` decimal(12,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`manufacturer_pr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer_product`
--

INSERT INTO `manufacturer_product` (`manufacturer_pr_id`, `product_id`, `products_model`, `manufacturer_id`, `manufacturer_price`) VALUES
(1, '58391549', 'Antibiotic', '294FM67SJF3FYQXAPJV2', '30.00'),
(3, '95173215', NULL, 'VVUVQWE7GOF6C8NQIBIV', '40.00'),
(4, '99882539', 'test', '294FM67SJF3FYQXAPJV2', '20.00');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text,
  `image` varchar(255) NOT NULL,
  `directory` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES
(3, 'Invoice', 'Store Management System', 'application/modules/store/assets/images/thumbnail.jpg', 'invoice', 1),
(4, 'Medicine Category', 'Medicine Category', 'application/modules/user_role/assets/images/thumbnail.jpg', 'medicine_category', 1),
(5, 'Medicine', 'Medicine Management System.', 'application/modules/employee/assets/images/thumbnail.jpg', 'medicine', 1),
(6, 'Customer', 'Customer Information', 'application/modules/customer/assets/images/thumbnail.jpg', 'customer', 1),
(7, 'Manufacturer', 'Manufacturer', 'application/modules/product/assets/images/thumbnail.jpg', 'manufacturer', 1),
(8, 'Purchase', 'Purchase', 'application/modules/category/assets/images/thumbnail.jpg', 'purchase', 1),
(9, 'Return', 'Return', 'application/modules/supplier/assets/images/thumbnail.jpg', 'return', 1),
(11, 'Accounts', 'Accounts', 'application/modules/warehouse/assets/images/thumbnail.jpg', 'accounts', 1),
(12, 'Stock', 'Stock', 'application/modules/sale/assets/images/thumbnail.jpg', 'stock', 1),
(13, 'Report', 'Report', 'application/modules/lease/assets/images/thumbnail.jpg', 'report', 1),
(14, 'Bank', 'Bank', 'application/modules/payment/assets/images/thumbnail.jpg', 'bank', 1),
(15, 'Office Loan', 'Office Loan', 'application/modules/stockmovment/assets/images/thumbnail.jpg', 'office_loan', 1),
(16, 'Personal Loan', 'Personal Loan', 'application/modules/store/assets/images/thumbnail.jpg', 'personal_loan', 1),
(17, 'Data Synchronizer', 'Data Synchronizer', 'application/modules/store/assets/images/thumbnail.jpg', 'data_Synchronizer', 1),
(18, 'Software Settings', 'Software Settings', 'application/modules/store/assets/images/thumbnail.jpg', 'software_settings', 1),
(19, 'Permission', 'Permission', 'application/modules/store/assets/images/thumbnail.jpg', 'permission', 1),
(20, 'SMS', 'SMS ', '', 'sms', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE IF NOT EXISTS `payment_method` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_type` varchar(250) DEFAULT NULL,
  `card_no` varchar(250) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `personal_loan`
--

CREATE TABLE IF NOT EXISTS `personal_loan` (
  `per_loan_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` varchar(30) NOT NULL,
  `person_id` varchar(30) NOT NULL,
  `debit` varchar(20) NOT NULL,
  `credit` float NOT NULL,
  `date` varchar(30) NOT NULL,
  `details` varchar(100) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=no paid,2=paid',
  PRIMARY KEY (`per_loan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `person_information`
--

CREATE TABLE IF NOT EXISTS `person_information` (
  `person_id` varchar(50) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `person_phone` varchar(50) NOT NULL,
  `person_address` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `person_ledger`
--

CREATE TABLE IF NOT EXISTS `person_ledger` (
  `transaction_id` varchar(50) NOT NULL,
  `person_id` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `debit` decimal(12,2) NOT NULL DEFAULT '0.00',
  `credit` decimal(10,2) NOT NULL DEFAULT '0.00',
  `details` text NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=no paid,2=paid',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pesonal_loan_information`
--

CREATE TABLE IF NOT EXISTS `pesonal_loan_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` varchar(50) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `person_phone` varchar(30) NOT NULL,
  `person_address` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` varchar(255) DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_information`
--

CREATE TABLE IF NOT EXISTS `product_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(30) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `generic_name` varchar(50) NOT NULL,
  `box_size` varchar(30) NOT NULL,
  `product_location` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `tax` varchar(20) DEFAULT NULL,
  `product_model` varchar(50) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `product_details` varchar(250) DEFAULT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_information`
--

INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `generic_name`, `box_size`, `product_location`, `price`, `tax`, `product_model`, `unit`, `product_details`, `image`, `status`) VALUES
(1, '58391549', '', 'Napa', 'Paracitamol', '20', 'N', '35', '0', 'Antibiotic', 'pc', 'sdfsdf', 'http://localhost/pharmacy8.5/my-assets/image/product.png', 1),
(2, '95173215', '0', 'Floxin', 'Flora', '20', 'F', '60', '0.02', 'test', 'Box', 'asdfasdf', 'http://localhost/pharmacy8.5/my-assets/image/product.png', 1),
(3, '99882539', '', 'jtestMedicine', 'Test', '20', 'T', '30', '0.02', 'test', 'Box', 'sdfasdf', 'http://localhost/pharmacy8.5/my-assets/image/product/00d8a1d45f41473f0f652cd682a1d0c2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_purchase`
--

CREATE TABLE IF NOT EXISTS `product_purchase` (
  `chalan_no` varchar(100) NOT NULL,
  `manufacturer_id` varchar(100) NOT NULL,
  `grand_total_amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `total_discount` decimal(10,2) DEFAULT '0.00',
  `purchase_date` varchar(50) NOT NULL,
  `purchase_details` text NOT NULL,
  `status` int(2) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_id` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_purchase`
--

INSERT INTO `product_purchase` (`chalan_no`, `manufacturer_id`, `grand_total_amount`, `total_discount`, `purchase_date`, `purchase_details`, `status`, `id`, `purchase_id`) VALUES
('234234', '294FM67SJF3FYQXAPJV2', '3000.00', '0.00', '2020-02-04', 'sdfs', 1, 1, 'CTP8RM6A4J'),
('1902041030', '294FM67SJF3FYQXAPJV2', '25500.00', '0.00', '2020-02-04', 'sdfs', 1, 2, '3244fsfsdfs'),
('1902041034', '294FM67SJF3FYQXAPJV2', '9500.00', '0.00', '2020-02-05', 'sdfs', 1, 3, '44444sdfsdf'),
('234234', '294FM67SJF3FYQXAPJV2', '1500.00', '0.00', '2019-02-04', 'sdfs', 1, 4, 'TKOEWBZ5JK'),
('124564', 'VVUVQWE7GOF6C8NQIBIV', '120.00', NULL, '2019-02-09', 'xcvxcv', 1, 5, '20190209073620'),
('325698', '294FM67SJF3FYQXAPJV2', '1000.00', NULL, '2019-05-16', 'sdfasd', 1, 6, '20190516123730');

-- --------------------------------------------------------

--
-- Table structure for table `product_purchase_details`
--

CREATE TABLE IF NOT EXISTS `product_purchase_details` (
  `purchase_detail_id` varchar(100) NOT NULL,
  `purchase_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `quantity` decimal(12,2) NOT NULL DEFAULT '0.00',
  `rate` decimal(10,2) NOT NULL DEFAULT '0.00',
  `total_amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(10,2) DEFAULT '0.00',
  `batch_id` varchar(25) NOT NULL,
  `expeire_date` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_purchase_details`
--

INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES
('9thpSSUI2mqDgw7', 'CTP8RM6A4J', '58391549', '100.00', '30.00', '3000.00', '0.00', '112', '2019-12-12', 1, 18),
('pk6hTewt0nDVC9T', '3244fsfsdfs', '58391549', '100.00', '30.00', '3000.00', '0.00', '114', '2019-12-12', 1, 19),
('DA0P3CYpQfCKeGC', '3244fsfsdfs', '95173215', '50.00', '40.00', '2000.00', '0.00', '222', '2020-12-12', 1, 20),
('gZuSMbl0c9aoGCC', 'TKOEWBZ5JK', '58391549', '50.00', '30.00', '1500.00', '0.00', '111', '2019-12-12', 1, 16),
('dMKl9Zy1A6Z8kSs', '3244fsfsdfs', '58391549', '100.00', '30.00', '3000.00', '0.00', '114', '2019-12-12', 1, 21),
('jiXu2zMkKBW6iiS', '3244fsfsdfs', '58391549', '100.00', '30.00', '3000.00', '0.00', '114', '2019-12-12', 1, 22),
('7u90ahqGbQD8FUN', '3244fsfsdfs', '58391549', '100.00', '30.00', '3000.00', '0.00', '114', '2019-12-12', 1, 23),
('qOzmTCjdZgrLQvC', '3244fsfsdfs', '95173215', '50.00', '40.00', '2000.00', '0.00', '222', '2020-12-12', 1, 24),
('3oWYz5GAxt0NVbt', '3244fsfsdfs', '58391549', '100.00', '30.00', '3000.00', '0.00', '114', '2019-12-12', 1, 25),
('mHYVmj8cZzSpPVD', '3244fsfsdfs', '95173215', '50.00', '40.00', '2000.00', '0.00', '222', '2020-12-12', 1, 26),
('MAhBtyQYv8lD926', '44444sdfsdf', '58391549', '100.00', '30.00', '3000.00', '0.00', '114', '2019-12-12', 1, 27),
('aLS3AjbdU6ug9zI', '44444sdfsdf', '95173215', '50.00', '40.00', '2000.00', '0.00', '222', '2020-12-12', 1, 28),
('4wU7ezUQFEGqxhj', '20190209073620', '95173215', '3.00', '40.00', '120.00', NULL, '321', '2020-04-06', 1, 29),
('Du8XN2JgTzQ7CfJ', '20190516123730', '99882539', '50.00', '20.00', '1000.00', NULL, '1234', '2020-05-30', 1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `product_return`
--

CREATE TABLE IF NOT EXISTS `product_return` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `return_id` varchar(30) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `invoice_id` varchar(20) NOT NULL,
  `purchase_id` varchar(30) DEFAULT NULL,
  `date_purchase` varchar(20) NOT NULL,
  `date_return` varchar(30) NOT NULL,
  `byy_qty` decimal(12,2) NOT NULL DEFAULT '0.00',
  `ret_qty` decimal(10,2) NOT NULL DEFAULT '0.00',
  `customer_id` varchar(20) NOT NULL,
  `manufacturer_id` varchar(30) NOT NULL,
  `product_rate` decimal(12,2) NOT NULL DEFAULT '0.00',
  `deduction` decimal(10,2) NOT NULL DEFAULT '0.00',
  `total_deduct` decimal(12,2) NOT NULL DEFAULT '0.00',
  `total_tax` decimal(12,2) NOT NULL DEFAULT '0.00',
  `total_ret_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `net_total_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `reason` text NOT NULL,
  `usablity` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE IF NOT EXISTS `product_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` varchar(255) DEFAULT NULL,
  `type_name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `type_id`, `type_name`, `status`) VALUES
(1, '5FHNC672E79T5DH', 'Antibiotic', 1),
(2, 'UO3WC7PILCH26SV', 'test', 1),
(3, 'UO3WC7PILCH26hV', 'test import', 1);


-- --------------------------------------------------------

--
-- Table structure for table `role_permission`
--

CREATE TABLE IF NOT EXISTS `role_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_module_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `create` tinyint(1) DEFAULT NULL,
  `read` tinyint(1) DEFAULT NULL,
  `update` tinyint(1) DEFAULT NULL,
  `delete` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_module_id` (`fk_module_id`),
  KEY `fk_user_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=253 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_permission`
--

INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES
(64, 3, 23, 1, 1, 1, 1),
(65, 4, 23, 1, 1, 1, 1),
(66, 5, 23, 1, 1, 1, 1),
(67, 6, 23, 1, 1, 1, 1),
(68, 7, 23, 1, 1, 1, 1),
(69, 8, 23, 1, 1, 1, 1),
(70, 9, 23, 1, 1, 1, 1),
(71, 10, 23, 1, 1, 1, 1),
(72, 11, 23, 1, 1, 1, 1),
(73, 12, 23, 1, 1, 1, 1),
(74, 13, 23, 1, 1, 1, 1),
(75, 14, 23, 1, 1, 1, 1),
(76, 15, 23, 1, 1, 1, 1),
(77, 16, 23, 1, 1, 1, 1),
(78, 17, 23, 1, 1, 1, 1),
(79, 18, 23, 1, 1, 1, 1),
(80, 19, 23, 1, 1, 1, 1),
(81, 20, 23, 1, 1, 1, 1),
(82, 21, 23, 1, 1, 1, 1),
(83, 22, 23, 1, 1, 1, 1),
(84, 23, 23, 1, 1, 1, 1),
(85, 65, 23, 1, 1, 1, 1),
(86, 24, 23, 1, 1, 1, 1),
(87, 25, 23, 1, 1, 1, 1),
(88, 26, 23, 1, 1, 1, 1),
(89, 27, 23, 1, 1, 1, 1),
(90, 28, 23, 1, 1, 1, 1),
(91, 29, 23, 1, 1, 1, 1),
(92, 30, 23, 1, 1, 1, 1),
(93, 31, 23, 1, 1, 1, 1),
(94, 32, 23, 1, 1, 1, 1),
(95, 62, 23, 1, 1, 1, 1),
(96, 63, 23, 1, 1, 1, 1),
(97, 33, 23, 1, 1, 1, 1),
(98, 34, 23, 1, 1, 1, 1),
(99, 35, 23, 1, 1, 1, 1),
(100, 36, 23, 1, 1, 1, 1),
(101, 37, 23, 1, 1, 1, 1),
(102, 38, 23, 1, 1, 1, 1),
(103, 39, 23, 1, 1, 1, 1),
(104, 40, 23, 1, 1, 1, 1),
(105, 41, 23, 1, 1, 1, 1),
(106, 42, 23, 1, 1, 1, 1),
(107, 43, 23, 1, 1, 1, 1),
(108, 44, 23, 1, 1, 1, 1),
(109, 45, 23, 1, 1, 1, 1),
(110, 46, 23, 1, 1, 1, 1),
(111, 47, 23, 1, 1, 1, 1),
(112, 48, 23, 1, 1, 1, 1),
(113, 49, 23, 1, 1, 1, 1),
(114, 50, 23, 1, 1, 1, 1),
(115, 51, 23, 1, 1, 1, 1),
(116, 52, 23, 1, 1, 1, 1),
(117, 53, 23, 1, 1, 1, 1),
(118, 54, 23, 0, 0, 0, 0),
(119, 55, 23, 0, 0, 0, 0),
(120, 56, 23, 0, 0, 0, 0),
(121, 57, 23, 0, 0, 0, 0),
(122, 58, 23, 0, 0, 0, 0),
(123, 59, 23, 0, 0, 0, 0),
(124, 60, 23, 0, 0, 0, 0),
(125, 61, 23, 0, 0, 0, 0),
(126, 64, 23, 0, 0, 0, 0),
(127, 3, 24, 1, 0, 0, 0),
(128, 4, 24, 1, 1, 1, 0),
(129, 5, 24, 1, 1, 1, 0),
(130, 6, 24, 0, 0, 0, 0),
(131, 7, 24, 0, 0, 0, 0),
(132, 8, 24, 0, 0, 0, 0),
(133, 9, 24, 0, 0, 0, 0),
(134, 10, 24, 0, 0, 0, 0),
(135, 11, 24, 1, 0, 0, 0),
(136, 12, 24, 1, 1, 1, 0),
(137, 13, 24, 1, 1, 1, 0),
(138, 14, 24, 1, 1, 1, 0),
(139, 15, 24, 0, 0, 0, 0),
(140, 16, 24, 0, 0, 0, 0),
(141, 17, 24, 0, 0, 0, 0),
(142, 18, 24, 0, 0, 0, 0),
(143, 19, 24, 1, 0, 0, 0),
(144, 20, 24, 1, 1, 1, 0),
(145, 21, 24, 0, 0, 0, 0),
(146, 22, 24, 0, 0, 0, 0),
(147, 23, 24, 0, 0, 0, 0),
(148, 65, 24, 0, 0, 0, 0),
(149, 24, 24, 0, 0, 0, 0),
(150, 25, 24, 1, 1, 1, 0),
(151, 26, 24, 1, 1, 1, 0),
(152, 27, 24, 0, 0, 0, 0),
(153, 28, 24, 0, 0, 0, 0),
(154, 29, 24, 0, 0, 0, 0),
(155, 30, 24, 0, 0, 0, 0),
(156, 31, 24, 1, 0, 0, 0),
(157, 32, 24, 1, 1, 0, 0),
(158, 62, 24, 1, 1, 0, 0),
(159, 63, 24, 1, 1, 0, 0),
(160, 33, 24, 0, 0, 0, 0),
(161, 34, 24, 0, 0, 0, 0),
(162, 35, 24, 0, 0, 0, 0),
(163, 36, 24, 0, 0, 0, 0),
(164, 37, 24, 1, 1, 0, 0),
(165, 38, 24, 1, 1, 1, 0),
(166, 39, 24, 0, 0, 0, 0),
(167, 40, 24, 0, 0, 0, 0),
(168, 41, 24, 0, 0, 0, 0),
(169, 42, 24, 0, 0, 0, 0),
(170, 43, 24, 0, 0, 0, 0),
(171, 44, 24, 0, 0, 0, 0),
(172, 45, 24, 1, 1, 1, 0),
(173, 46, 24, 1, 1, 1, 0),
(174, 47, 24, 0, 0, 0, 0),
(175, 48, 24, 0, 0, 0, 0),
(176, 49, 24, 0, 0, 0, 0),
(177, 50, 24, 0, 0, 0, 0),
(178, 51, 24, 0, 0, 0, 0),
(179, 52, 24, 0, 0, 0, 0),
(180, 53, 24, 0, 0, 0, 0),
(181, 54, 24, 0, 0, 0, 0),
(182, 55, 24, 0, 0, 0, 0),
(183, 56, 24, 0, 0, 0, 0),
(184, 57, 24, 0, 0, 0, 0),
(185, 58, 24, 0, 0, 0, 0),
(186, 59, 24, 0, 0, 0, 0),
(187, 60, 24, 0, 0, 0, 0),
(188, 61, 24, 0, 0, 0, 0),
(189, 64, 24, 0, 0, 0, 0),
(190, 3, 26, 1, 1, 1, 1),
(191, 4, 26, 1, 1, 1, 1),
(192, 5, 26, 1, 1, 1, 1),
(193, 6, 26, 1, 1, 1, 0),
(194, 7, 26, 1, 0, 0, 0),
(195, 8, 26, 1, 1, 1, 1),
(196, 9, 26, 1, 1, 1, 1),
(197, 10, 26, 1, 1, 1, 1),
(198, 11, 26, 1, 0, 0, 0),
(199, 12, 26, 1, 1, 1, 1),
(200, 13, 26, 1, 1, 1, 1),
(201, 14, 26, 1, 1, 1, 1),
(202, 15, 26, 1, 0, 0, 0),
(203, 16, 26, 1, 1, 1, 1),
(204, 17, 26, 1, 1, 1, 1),
(205, 18, 26, 1, 1, 1, 1),
(206, 19, 26, 1, 1, 0, 0),
(207, 20, 26, 1, 1, 1, 1),
(208, 21, 26, 1, 0, 0, 0),
(209, 22, 26, 1, 1, 1, 1),
(210, 23, 26, 1, 1, 1, 1),
(211, 65, 26, 1, 1, 1, 1),
(212, 24, 26, 1, 0, 0, 0),
(213, 25, 26, 1, 1, 1, 0),
(214, 26, 26, 1, 1, 1, 0),
(215, 27, 26, 1, 1, 1, 0),
(216, 28, 26, 1, 1, 1, 0),
(217, 29, 26, 1, 1, 1, 0),
(218, 30, 26, 1, 1, 1, 0),
(219, 31, 26, 1, 1, 1, 0),
(220, 32, 26, 1, 1, 1, 0),
(221, 62, 26, 1, 1, 1, 0),
(222, 63, 26, 1, 1, 1, 0),
(223, 33, 26, 1, 1, 1, 0),
(224, 34, 26, 1, 1, 1, 0),
(225, 35, 26, 1, 1, 1, 0),
(226, 36, 26, 1, 1, 1, 0),
(227, 37, 26, 1, 1, 1, 1),
(228, 38, 26, 1, 1, 1, 1),
(229, 39, 26, 1, 1, 1, 1),
(230, 40, 26, 1, 1, 1, 1),
(231, 41, 26, 1, 1, 1, 1),
(232, 42, 26, 1, 1, 1, 1),
(233, 43, 26, 1, 1, 1, 1),
(234, 44, 26, 1, 1, 1, 1),
(235, 45, 26, 1, 1, 1, 1),
(236, 46, 26, 1, 1, 1, 1),
(237, 47, 26, 1, 1, 1, 1),
(238, 48, 26, 1, 1, 1, 1),
(239, 49, 26, 1, 1, 1, 1),
(240, 50, 26, 1, 1, 1, 1),
(241, 51, 26, 0, 0, 0, 0),
(242, 52, 26, 0, 0, 0, 0),
(243, 53, 26, 0, 0, 0, 0),
(244, 54, 26, 0, 0, 0, 0),
(245, 55, 26, 0, 0, 0, 0),
(246, 56, 26, 0, 0, 0, 0),
(247, 57, 26, 0, 0, 0, 0),
(248, 58, 26, 0, 0, 0, 0),
(249, 59, 26, 0, 0, 0, 0),
(250, 60, 26, 0, 0, 0, 0),
(251, 61, 26, 0, 0, 0, 0),
(252, 64, 26, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sec_role`
--

CREATE TABLE IF NOT EXISTS `sec_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_role`
--

INSERT INTO `sec_role` (`id`, `type`) VALUES
(23, 'Admin'),
(24, 'Sales Man'),
(26, 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `sec_userrole`
--

CREATE TABLE IF NOT EXISTS `sec_userrole` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `roleid` int(11) NOT NULL,
  `createby` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `createdate` datetime NOT NULL,
  UNIQUE KEY `ID` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sms_settings`
--

CREATE TABLE IF NOT EXISTS `sms_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(100) NOT NULL,
  `sender_id` varchar(100) NOT NULL,
  `api_key` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sms_settings`
--

INSERT INTO `sms_settings` (`id`, `url`, `sender_id`, `api_key`, `status`) VALUES
(1, 'http://sms.sgmh.com/smsapi', '8801847169884', 'C20029865c42c504afc711.77492546', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_module`
--

CREATE TABLE IF NOT EXISTS `sub_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `directory` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_module`
--

INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES
(3, 3, 'New Invoice', 'New Invoice', 'application/modules/store/assets/images/thumbnail.jpg', 'new_invoice', 1),
(4, 3, 'Manage  Invoice', 'Manage Invoice', 'application/modules/store/assets/images/thumbnail.jpg', 'manage_invoice', 1),
(5, 3, 'Pos Invoice', 'Pos Invoice', 'application/modules/store/assets/images/thumbnail.jpg', 'pos_invoice', 1),
(6, 4, 'Add Category', 'Add Category', 'application/modules/store/assets/images/thumbnail.jpg', 'add_category', 1),
(7, 5, 'Medicine Type', 'Medicine Type', 'application/modules/store/assets/images/thumbnail.jpg', 'medicine_type', 1),
(8, 5, 'Add Medicine', 'Add Medicine', 'application/modules/store/assets/images/thumbnail.jpg', 'add_medicine', 1),
(9, 5, 'Import Medicine Csv', 'Import Medicine Csv', 'application/modules/store/assets/images/thumbnail.jpg', 'import_medicine_csv', 1),
(10, 5, 'Manage Medicine', 'Manage Medicine ', 'application/modules/store/assets/images/thumbnail.jpg', 'manage_medicine', 1),
(11, 6, 'Add Customer', 'Add Customer', 'application/modules/store/assets/images/thumbnail.jpg', 'add_customer', 1),
(12, 6, 'Manage Customer', 'Manage Customer', 'application/modules/store/assets/images/thumbnail.jpg', 'manage_customer', 1),
(13, 6, 'Credit Customer', 'Credit Customer', 'application/modules/store/assets/images/thumbnail.jpg', 'credit_customer', 1),
(14, 6, 'Paid Customer', 'Paid Customer', 'application/modules/store/assets/images/thumbnail.jpg', 'paid_customer', 1),
(15, 7, 'Add Manufacturer', 'Add Manufacturer', 'application/modules/store/assets/images/thumbnail.jpg', 'add_manufacturer', 1),
(16, 7, 'Manage Manufacturer', 'manage_manufacturer', 'application/modules/store/assets/images/thumbnail.jpg', 'manage_manufacturer', 1),
(17, 7, 'Manufacturer ledger', 'Manufacturer ledger', 'application/modules/store/assets/images/thumbnail.jpg', 'manufacturer_ledger', 1),
(18, 7, 'Manufacturer Sales Details', 'Manufacturer Sales Details', 'application/modules/store/assets/images/thumbnail.jpg', 'manufacturer_sales_details', 1),
(19, 8, 'Add Purchase', 'Add Purchase', 'application/modules/store/assets/images/thumbnail.jpg', 'add_purchase', 1),
(20, 8, 'Manage Purchase', 'Manage Purchase', 'application/modules/store/assets/images/thumbnail.jpg', 'manage_purchase', 1),
(21, 9, 'Return', 'Return', 'application/modules/store/assets/images/thumbnail.jpg', 'return', 1),
(22, 9, 'Stock Return List', 'Stock Return List', 'application/modules/store/assets/images/thumbnail.jpg', 'stock_return_list', 1),
(23, 9, 'Manufacturer Return List', 'Manufacturer Return List', 'application/modules/store/assets/images/thumbnail.jpg', 'manufacturer_return_list', 1),
(24, 11, 'Create Accounts', 'Create Accounts', 'application/modules/store/assets/images/thumbnail.jpg', 'create_accounts', 1),
(25, 11, 'Manage Account', 'Manage Account', 'application/modules/store/assets/images/thumbnail.jpg', 'manage_account', 1),
(26, 11, 'Payment', 'Payment', 'application/modules/store/assets/images/thumbnail.jpg', 'payment', 1),
(27, 11, 'Receipt', 'Receipt', 'application/modules/store/assets/images/thumbnail.jpg', 'receipt', 1),
(28, 11, 'Manage Transaction', 'Manage Transaction', 'application/modules/store/assets/images/thumbnail.jpg', 'manage_transaction', 1),
(29, 11, 'Day Closing', 'Day Closing', 'application/modules/store/assets/images/thumbnail.jpg', 'day_closing', 1),
(30, 11, 'Report', 'Report', 'application/modules/store/assets/images/thumbnail.jpg', 'report', 1),
(31, 11, 'Add Tax', 'Add Tax', 'application/modules/store/assets/images/thumbnail.jpg', 'add_tax', 1),
(32, 11, 'Manage Tax', 'Manage Tax', 'application/modules/store/assets/images/thumbnail.jpg', 'manage_tax', 1),
(33, 12, 'Stock Report', 'Stock Report', 'application/modules/store/assets/images/thumbnail.jpg', 'stock_report', 1),
(34, 12, 'Stock Report Manufacturer Wise', 'Stock Report Manufacturer Wise', 'application/modules/store/assets/images/thumbnail.jpg', 'stock_report_manufacturer_wise', 1),
(35, 12, 'Stock Report Product Wise', 'Stock Report Product Wise', 'application/modules/store/assets/images/thumbnail.jpg', 'stock_report_product_wise', 1),
(36, 12, 'Stock Report Batch Wise', 'Stock Report Batch Wise', 'application/modules/store/assets/images/thumbnail.jpg', 'stock_report_batch_wise', 1),
(37, 13, 'Todays Report', 'Todays Report', 'application/modules/store/assets/images/thumbnail.jpg', 'todays_report', 1),
(38, 13, 'Sales Report', 'Sales Report', 'application/modules/store/assets/images/thumbnail.jpg', 'sales_report', 1),
(39, 13, 'Purchase Report', 'Purchase Report', 'application/modules/store/assets/images/thumbnail.jpg', 'purchase_report', 1),
(40, 13, 'Sales Report Medicine Wise', 'Sales Report Medicine Wise', 'application/modules/store/assets/images/thumbnail.jpg', 'sales_report_medicine_wise', 1),
(41, 13, 'Profit Loss', 'Profit Loss', 'application/modules/store/assets/images/thumbnail.jpg', 'profit_loss', 1),
(42, 14, 'Add New Bank', 'Add New Bank', 'application/modules/store/assets/images/thumbnail.jpg', 'add_new_bank', 1),
(43, 14, 'Bank Transaction', 'Bank Transaction', 'application/modules/store/assets/images/thumbnail.jpg', 'bank_transaction', 1),
(44, 14, 'Manage Bank', 'Manage Bank', 'application/modules/store/assets/images/thumbnail.jpg', 'manage_bank', 1),
(45, 15, 'Office Add Person', 'Office Add Person', 'application/modules/store/assets/images/thumbnail.jpg', 'office_add_person', 1),
(46, 15, 'Office Manage Loan', 'Office Manage Loan', 'application/modules/store/assets/images/thumbnail.jpg', 'office_manage_loan', 1),
(47, 16, 'Personal Add Person', 'Personal Add Person', 'application/modules/store/assets/images/thumbnail.jpg', 'personal_add_person', 1),
(48, 16, 'Personal Add Loan', 'Personal Add Loan', 'application/modules/store/assets/images/thumbnail.jpg', 'personal_add_loan', 1),
(49, 16, 'Personal Add Payment', 'Personal Add Payment', 'application/modules/store/assets/images/thumbnail.jpg', 'personal_add_payment', 1),
(50, 16, 'Personal Manage Loan', 'Personal Manage Loan', 'application/modules/store/assets/images/thumbnail.jpg', 'personal_manage_loan', 1),
(51, 17, 'Data Setting', 'Data Setting', 'application/modules/store/assets/images/thumbnail.jpg', 'data_setting', 1),
(52, 17, 'Synchronize', 'Synchronize', 'application/modules/store/assets/images/thumbnail.jpg', 'synchronize', 1),
(53, 17, 'Backup And Restore', 'Backup And Restore', 'application/modules/store/assets/images/thumbnail.jpg', 'backup_and_restore', 1),
(54, 18, 'Manage Company', 'Manage Company', 'application/modules/store/assets/images/thumbnail.jpg', 'manage_company', 1),
(55, 18, 'Add User', 'Add User', 'application/modules/store/assets/images/thumbnail.jpg', 'add_user', 1),
(56, 18, 'Manage Users', 'Manage Users', 'application/modules/store/assets/images/thumbnail.jpg', 'manage_users', 1),
(57, 18, 'Language', 'Language', 'application/modules/store/assets/images/thumbnail.jpg', 'language', 1),
(58, 18, 'Setting', 'Setting', 'application/modules/store/assets/images/thumbnail.jpg', 'setting', 1),
(59, 19, 'User Assign Role', 'User Assign Role', 'application/modules/stockmovment/assets/images/thumbnail.jpg', 'user_assign_role', 1),
(60, 19, 'Permission', 'Permission', 'application/modules/stockmovment/assets/images/thumbnail.jpg', 'permission', 1),
(61, 19, 'Add Role', 'Add Role', 'application/modules/store/assets/images/thumbnail.jpg', 'add_role', 1),
(62, 11, 'Account Summary', 'Account Summary', 'application/modules/store/assets/images/thumbnail.jpg', 'account_summary', 1),
(63, 11, 'Monthly Progress Report', 'Monthly Progress Report', 'application/modules/store/assets/images/thumbnail.jpg', 'monthly_progress_report', 1),
(64, 19, 'Role List', 'Role List', 'application/modules/store/assets/images/thumbnail.jpg', 'role_list', 1),
(65, 9, 'Wastage Return List', 'Wastage Return List', 'application/modules/store/assets/images/thumbnail.jpg', 'wastage_return_list', 1),
(66, 20, 'Sms Configuration', 'sdfsd', '', 'sms_configure', 1);

-- --------------------------------------------------------

--
-- Table structure for table `synchronizer_setting`
--

CREATE TABLE IF NOT EXISTS `synchronizer_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hostname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `port` varchar(10) NOT NULL,
  `debug` varchar(10) NOT NULL,
  `project_root` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tax_information`
--

CREATE TABLE IF NOT EXISTS `tax_information` (
  `tax_id` varchar(15) NOT NULL,
  `tax` float DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`tax_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tax_information`
--

INSERT INTO `tax_information` (`tax_id`, `tax`, `status`) VALUES
('3H6JW9GG2Z', 5, 1),
('VAIVGH6WCV', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transection`
--

CREATE TABLE IF NOT EXISTS `transection` (
  `transaction_id` varchar(30) NOT NULL,
  `date_of_transection` varchar(30) NOT NULL,
  `transection_type` varchar(30) NOT NULL,
  `transection_category` varchar(30) NOT NULL,
  `transection_mood` varchar(25) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `pay_amount` float DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `relation_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transection`
--

INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES
('NSO2539EQ31XTSR', '2019-02-04', '2', '2', '1', '70.00', NULL, 'Medicine Cost', 'S5NZ2Z2LXJFE11U'),
('TFG9S552DHJ5BP2', '2019-02-08', '2', '2', '1', '100', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP'),
('AWZ6QI5QNN1DGND', '2019-02-08', '2', '2', '1', '140.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP'),
('EZ8KJMOHNQQYLPF', '2019-02-08', '2', '2', '1', '140.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP'),
('6GT3N3JL988O43F', '2019-02-08', '2', '2', '1', '240.00', NULL, 'Medicine Cost', 'S5NZ2Z2LXJFE11U'),
('3MF8ITX8ZJ6LO22', '2019-02-08', '2', '2', '1', '140.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP'),
('9UCIJL492XE2B76', '2019-02-08', '2', '2', '1', '240.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP'),
('49O761LLK2A5ZF7', '2019-02-08', '2', '2', '1', '35.00', NULL, 'Medicine Cost', '789XC11EWYDN5XT'),
('JNB2Q1L2Y4DTFTM', '2019-02-09', '2', '2', '1', '70.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP'),
('H72L1WMLWVB2E1M', '2019-02-09', '2', '2', '1', '70.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP'),
('R5GFNC3XFH1AHAG', '2019-02-09', '2', '2', '1', '70.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP'),
('1NQK4IDJUQ3A5M4', '2019-02-09', '2', '2', '1', '35.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP'),
('E8FBJTXTF5AKMUT', '2019-02-09', '2', '2', '1', '35.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP'),
('35M5TYVDRH1LUNL', '2019-05-16', '2', '2', '1', '', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP'),
('52M9U6QLZ7ZAPQ2', '2019-05-16', '2', '2', '1', '', NULL, 'Medicine Cost', 'WKQJYOTTCBLDS3X'),
('E95SGGLSGCBUIXW', '2019-05-16', '1', '2', '1', '', 1070, 'sdfsadf', 'WKQJYOTTCBLDS3X'),
('VZY2INEOVL3JW49', '2019-05-16', '2', '2', '1', '375', 0, 'dsfasdf', 'EGLATNFLSV4A9VP');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `last_name`, `first_name`, `gender`, `date_of_birth`, `logo`, `status`) VALUES
(1, 'User', 'Admin', '', '', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(2) DEFAULT NULL,
  `security_code` varchar(255) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `username`, `password`, `user_type`, `security_code`, `status`) VALUES
(1, 'admin@sgmh.com', '5ebe9dd4ea7517bd2c30bc46985ef823', 1, '', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_a_customer_transection_summary`
-- (See below for the actual view)
--
CREATE TABLE IF NOT EXISTS `view_a_customer_transection_summary` (
`customer_name` varchar(255)
,`customer_id` varchar(100)
,`type` varchar(6)
,`amount` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_b_customer_transection`
-- (See below for the actual view)
--
CREATE TABLE IF NOT EXISTS `view_b_customer_transection` (
`transaction_id` varchar(30)
,`customer_name` varchar(255)
,`invoice_no` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_c_manufacturer_transection`
-- (See below for the actual view)
--
CREATE TABLE IF NOT EXISTS `view_c_manufacturer_transection` (
`transaction_id` varchar(30)
,`manufacturer_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_d_person_transection`
-- (See below for the actual view)
--
CREATE TABLE IF NOT EXISTS `view_d_person_transection` (
`transaction_id` varchar(30)
,`person_name` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_e_product_manufacturer`
-- (See below for the actual view)
--
CREATE TABLE IF NOT EXISTS `view_e_product_manufacturer` (
`product_id` varchar(100)
,`product_name` varchar(50)
,`product_model` varchar(50)
,`manufacturer_id` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_f_purchase_report`
-- (See below for the actual view)
--
CREATE TABLE IF NOT EXISTS `view_f_purchase_report` (
`purchase_date` varchar(50)
,`chalan_no` varchar(100)
,`manufacturer_id` varchar(100)
,`purchase_detail_id` varchar(100)
,`purchase_id` varchar(100)
,`product_id` varchar(100)
,`quantity` decimal(12,2)
,`rate` decimal(10,2)
,`total_amount` decimal(12,2)
,`status` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_g_sales_abreport`
-- (See below for the actual view)
--
CREATE TABLE IF NOT EXISTS `view_g_sales_abreport` (
`date` varchar(50)
,`invoice_id` varchar(50)
,`invoice_details_id` varchar(30)
,`customer_id` varchar(100)
,`manufacturer_id` varchar(100)
,`product_id` varchar(100)
,`product_model` varchar(50)
,`product_name` varchar(50)
,`cartoon` float
,`quantity` float
,`sell_rate` decimal(12,2)
,`manufacturer_rate` decimal(10,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_h_product_report`
-- (See below for the actual view)
--
CREATE TABLE IF NOT EXISTS `view_h_product_report` (
`date` varchar(50)
,`product_id` varchar(100)
,`quantity` double
,`rate` decimal(10,2)
,`total_amount` double
,`account` varchar(1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_i_sales_actual`
-- (See below for the actual view)
--
CREATE TABLE IF NOT EXISTS `view_i_sales_actual` (
`DATE` varchar(50)
,`manufacturer_id` varchar(100)
,`sub_total` double
,`no_transection` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_j_sales_report`
-- (See below for the actual view)
--
CREATE TABLE IF NOT EXISTS `view_j_sales_report` (
`date` varchar(50)
,`invoice_id` varchar(50)
,`invoice_details_id` varchar(30)
,`customer_id` varchar(100)
,`manufacturer_id` varchar(100)
,`product_id` varchar(100)
,`product_model` varchar(50)
,`product_name` varchar(50)
,`cartoon` float
,`quantity` float
,`sell_rate` decimal(12,2)
,`manufacturer_rate` decimal(10,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_k_stock_batch_qty`
-- (See below for the actual view)
--
CREATE TABLE IF NOT EXISTS `view_k_stock_batch_qty` (
`batch_id` varchar(30)
,`product_id` varchar(100)
,`sell` double
,`Purchase` decimal(34,2)
,`expeire_date` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_l_stock_history`
-- (See below for the actual view)
--
CREATE TABLE IF NOT EXISTS `view_l_stock_history` (
`vdate` varchar(50)
,`product_id` varchar(100)
,`sell` double
,`Purchase` decimal(34,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_m_total_batch_stock`
-- (See below for the actual view)
--
CREATE TABLE IF NOT EXISTS `view_m_total_batch_stock` (
`product_id` varchar(100)
,`batch_id` varchar(30)
,`expeire_date` varchar(30)
,`stock` double
);

-- --------------------------------------------------------

--
-- Table structure for table `web_setting`
--

CREATE TABLE IF NOT EXISTS `web_setting` (
  `setting_id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) DEFAULT NULL,
  `invoice_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `currency_position` varchar(10) DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `rtr` varchar(255) DEFAULT NULL,
  `captcha` int(11) DEFAULT '1' COMMENT '0=active,1=inactive',
  `site_key` varchar(250) DEFAULT NULL,
  `secret_key` varchar(250) DEFAULT NULL,
  `discount_type` int(11) DEFAULT '1',
  PRIMARY KEY (`setting_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_setting`
--

INSERT INTO `web_setting` (`setting_id`, `logo`, `invoice_logo`, `favicon`, `currency`, `currency_position`, `footer_text`, `language`, `rtr`, `captcha`, `site_key`, `secret_key`, `discount_type`) VALUES
(1, 'http://soft12.sgmh.com/pharmacy/my-assets/image/logo/8737f3780b307b79554b12cfee4f5508.png', 'http://soft12.sgmh.com/pharmacy/my-assets/image/logo/7f0144941b9f4888ac82741ca19b1f06.png', 'http://soft12.sgmh.com/pharmacy/my-assets/image/logo/13ce2ba4f439628320674dc0fad86f64.png', '৳', '0', 'Copyright© 2016-2017 sgmh. All rights reserved.', 'english', '0', 1, '', '', 2);

-- --------------------------------------------------------

--
-- Structure for view `view_a_customer_transection_summary`
--
DROP TABLE IF EXISTS `view_a_customer_transection_summary`;

CREATE  VIEW `view_a_customer_transection_summary`  AS  select `customer_information`.`customer_name` AS `customer_name`,`customer_ledger`.`customer_id` AS `customer_id`,'debit' AS `type`,sum(-(`customer_ledger`.`amount`)) AS `amount` from (`customer_ledger` join `customer_information` on((`customer_information`.`customer_id` = `customer_ledger`.`customer_id`))) where (`customer_ledger`.`d_c` = 'd') group by `customer_ledger`.`customer_id` union all select `customer_information`.`customer_name` AS `customer_name`,`customer_ledger`.`customer_id` AS `customer_id`,'credit' AS `type`,sum(`customer_ledger`.`amount`) AS `amount` from (`customer_ledger` join `customer_information` on((`customer_information`.`customer_id` = `customer_ledger`.`customer_id`))) where (`customer_ledger`.`d_c` = 'c') group by `customer_ledger`.`customer_id` ;

-- --------------------------------------------------------


-- Structure for view `view_k_stock_batch_qty`
--
DROP TABLE IF EXISTS `view_k_stock_batch_qty`;

CREATE  VIEW `view_k_stock_batch_qty`  AS  select `invoice_details`.`batch_id` AS `batch_id`,`invoice_details`.`product_id` AS `product_id`,sum(`invoice_details`.`quantity`) AS `sell`,0 AS `Purchase`,0 AS `expeire_date` from `invoice_details` group by `invoice_details`.`batch_id`,`invoice_details`.`product_id` union select `product_purchase_details`.`batch_id` AS `batch_id`,`product_purchase_details`.`product_id` AS `product_id`,0 AS `Sell`,sum(`product_purchase_details`.`quantity`) AS `purchase`,`product_purchase_details`.`expeire_date` AS `expeire_date` from `product_purchase_details` group by `product_purchase_details`.`batch_id`,`product_purchase_details`.`product_id` ;

-- --------------------------------------------------------

--
-- Structure for view `view_l_stock_history`
--
DROP TABLE IF EXISTS `view_l_stock_history`;

CREATE  VIEW `view_l_stock_history`  AS  select `invoice`.`date` AS `vdate`,`invoice_details`.`product_id` AS `product_id`,sum(`invoice_details`.`quantity`) AS `sell`,0 AS `Purchase` from (`invoice_details` join `invoice` on((`invoice_details`.`invoice_id` = `invoice`.`invoice_id`))) group by `invoice_details`.`product_id`,`invoice`.`date` union select `product_purchase`.`purchase_date` AS `purchase_date`,`product_purchase_details`.`product_id` AS `product_id`,0 AS `0`,sum(`product_purchase_details`.`quantity`) AS `purchase` from (`product_purchase_details` join `product_purchase` on((`product_purchase_details`.`purchase_id` = `product_purchase`.`purchase_id`))) group by `product_purchase_details`.`product_id`,`product_purchase`.`purchase_date` ;

-- --------------------------------------------------------

--
-- Structure for view `view_m_total_batch_stock`
--
DROP TABLE IF EXISTS `view_m_total_batch_stock`;

CREATE  VIEW `view_m_total_batch_stock`  AS  select `b`.`product_id` AS `product_id`,`b`.`batch_id` AS `batch_id`,`b`.`expeire_date` AS `expeire_date`,(sum(`b`.`Purchase`) - sum(`b`.`sell`)) AS `stock` from `view_k_stock_batch_qty` `b` group by `b`.`batch_id` ;

