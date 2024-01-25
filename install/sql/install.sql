

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
-- Table structure for table `acc_coa`
--

CREATE TABLE IF NOT EXISTS `acc_coa` (
  `HeadCode` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HeadName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PHeadName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HeadLevel` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `IsTransaction` tinyint(1) NOT NULL,
  `IsGL` tinyint(1) NOT NULL,
  `HeadType` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `IsBudget` tinyint(1) NOT NULL,
  `IsDepreciation` tinyint(1) NOT NULL,
  `DepreciationRate` decimal(18,2) NOT NULL,
  `CreateBy` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CreateDate` datetime NOT NULL,
  `UpdateBy` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `UpdateDate` datetime NOT NULL,
  PRIMARY KEY (`HeadName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acc_coa`
--

INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES
('4021403', 'AC', 'Repair and Maintenance', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:33:55', '', '2019-08-10 11:01:12'),
('50202', 'Account Payable', 'Current Liabilities', 2, 1, 0, 1, 'L', 0, 0, '0.00', 'admin', '2015-10-15 19:50:43', '', '2019-08-10 11:01:12'),
('10203', 'Account Receivable', 'Current Asset', 2, 1, 0, 0, 'A', 0, 0, '0.00', '', '2019-08-10 11:01:12', 'admin', '2013-09-18 15:29:35'),
('1020201', 'Advance', 'Advance, Deposit And Pre-payments', 3, 1, 0, 1, 'A', 0, 0, '0.00', 'Zoherul', '2015-05-31 13:29:12', 'admin', '2015-12-31 16:46:32'),
('102020103', 'Advance House Rent', 'Advance', 4, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2016-10-02 16:55:38', 'admin', '2016-10-02 16:57:32'),
('10202', 'Advance, Deposit And Pre-payments', 'Current Asset', 2, 1, 0, 0, 'A', 0, 0, '0.00', '', '2019-08-10 11:01:12', 'admin', '2015-12-31 16:46:24'),
('4020602', 'Advertisement and Publicity', 'Promonational Expence', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 18:51:44', '', '2019-08-10 11:01:12'),
('1010410', 'Air Cooler', 'Others Assets', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2016-05-23 12:13:55', '', '2019-08-10 11:01:12'),
('4020603', 'AIT Against Advertisement', 'Promonational Expence', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 18:52:09', '', '2019-08-10 11:01:12'),
('1', 'Assets', 'COA', 0, 1, 0, 0, 'A', 0, 0, '0.00', '', '2019-08-10 11:01:12', '', '2019-08-10 11:01:12'),
('1010204', 'Attendance Machine', 'Office Equipment', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2015-10-15 15:49:31', '', '2019-08-10 11:01:12'),
('40216', 'Audit Fee', 'Other Expenses', 2, 1, 1, 1, 'E', 0, 0, '0.00', 'admin', '2017-07-18 12:54:30', '', '2019-08-10 11:01:12'),
('4021002', 'Bank Charge', 'Financial Expenses', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:21:03', '', '2019-08-10 11:01:12'),
('30203', 'Bank Interest', 'Other Income', 2, 1, 1, 1, 'I', 0, 0, '0.00', 'Obaidul', '2015-01-03 14:49:54', 'admin', '2016-09-25 11:04:19'),
('1010104', 'Book Shelf', 'Furniture & Fixturers', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2015-10-15 15:46:11', '', '2019-08-10 11:01:12'),
('1010407', 'Books and Journal', 'Others Assets', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2016-03-27 10:45:37', '', '2019-08-10 11:01:12'),
('4020604', 'Business Development Expenses', 'Promonational Expence', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 18:52:29', '', '2019-08-10 11:01:12'),
('4020606', 'Campaign Expenses', 'Promonational Expence', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 18:52:57', 'admin', '2016-09-19 14:52:48'),
('4020502', 'Campus Rent', 'House Rent', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 18:46:53', 'admin', '2017-04-27 17:02:39'),
('40212', 'Car Running Expenses', 'Other Expenses', 2, 1, 0, 1, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:28:43', '', '2019-08-10 11:01:12'),
('10201', 'Cash & Cash Equivalent', 'Current Asset', 2, 1, 0, 1, 'A', 0, 0, '0.00', '1', '2019-06-12 11:47:24', 'admin', '2015-10-15 15:57:55'),
('1020102', 'Cash At Bank', 'Cash & Cash Equivalent', 3, 1, 0, 1, 'A', 0, 0, '0.00', '1', '2019-03-18 06:08:18', 'admin', '2015-10-15 15:32:42'),
('1020101', 'Cash In Hand', 'Cash & Cash Equivalent', 3, 1, 1, 0, 'A', 0, 0, '0.00', '1', '2019-01-26 07:38:48', 'admin', '2016-05-23 12:05:43'),
('1010207', 'CCTV', 'Office Equipment', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2015-10-15 15:51:24', '', '2019-08-10 11:01:12'),
('102020102', 'CEO Current A/C', 'Advance', 4, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2016-09-25 11:54:54', '', '2019-08-10 11:01:12'),
('1010101', 'Class Room Chair', 'Furniture & Fixturers', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2015-10-15 15:45:29', '', '2019-08-10 11:01:12'),
('4021407', 'Close Circuit Cemera', 'Repair and Maintenance', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:35:35', '', '2019-08-10 11:01:12'),
('4020601', 'Commision on Admission', 'Promonational Expence', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 18:51:21', 'admin', '2016-09-19 14:42:54'),
('1010206', 'Computer', 'Office Equipment', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2015-10-15 15:51:09', '', '2019-08-10 11:01:12'),
('4021410', 'Computer (R)', 'Repair and Maintenance', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'Zoherul', '2016-03-24 12:38:52', 'Zoherul', '2016-03-24 12:41:40'),
('1010102', 'Computer Table', 'Furniture & Fixturers', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2015-10-15 15:45:44', '', '2019-08-10 11:01:12'),
('301020401', 'Continuing Registration fee - UoL (Income)', 'Registration Fee (UOL) Income', 4, 1, 1, 0, 'I', 0, 0, '0.00', 'admin', '2015-10-15 17:40:40', '', '2019-08-10 11:01:12'),
('4020904', 'Contratuall Staff Salary', 'Salary & Allowances', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:12:34', '', '2019-08-10 11:01:12'),
('4020709', 'Cultural Expense', 'Miscellaneous Expenses', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'nasmud', '2017-04-29 12:45:10', '', '2019-08-10 11:01:12'),
('102', 'Current Asset', 'Assets', 1, 1, 0, 0, 'A', 0, 0, '0.00', '', '2019-08-10 11:01:12', 'admin', '2018-07-07 11:23:00'),
('502', 'Current Liabilities', 'Liabilities', 1, 1, 0, 0, 'L', 0, 0, '0.00', 'anwarul', '2014-08-30 13:18:20', 'admin', '2015-10-15 19:49:21'),
('1020301', 'Customer Receivable', 'Account Receivable', 3, 1, 0, 1, 'A', 0, 0, '0.00', '1', '2019-01-24 12:10:05', 'admin', '2018-07-07 12:31:42'),
('1020202', 'Deposit', 'Advance, Deposit And Pre-payments', 3, 1, 0, 0, 'A', 0, 0, '0.00', 'admin', '2015-10-15 15:40:42', '', '2019-08-10 11:01:12'),
('4020605', 'Design & Printing Expense', 'Promonational Expence', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 18:55:00', '', '2019-08-10 11:01:12'),
('4020404', 'Dish Bill', 'Utility Expenses', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 18:58:21', '', '2019-08-10 11:01:12'),
('40215', 'Dividend', 'Other Expenses', 2, 1, 1, 1, 'E', 0, 0, '0.00', 'admin', '2016-09-25 14:07:55', '', '2019-08-10 11:01:12'),
('4020403', 'Drinking Water Bill', 'Utility Expenses', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 18:58:10', '', '2019-08-10 11:01:12'),
('1010211', 'DSLR Camera', 'Office Equipment', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2015-10-15 15:53:17', 'admin', '2016-01-02 16:23:25'),
('4020908', 'Earned Leave', 'Salary & Allowances', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:13:38', '', '2019-08-10 11:01:12'),
('4020607', 'Education Fair Expenses', 'Promonational Expence', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 18:53:42', '', '2019-08-10 11:01:12'),
('1010602', 'Electric Equipment', 'Electrical Equipment', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2016-03-27 10:44:51', '', '2019-08-10 11:01:12'),
('1010203', 'Electric Kettle', 'Office Equipment', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2015-10-15 15:49:07', '', '2019-08-10 11:01:12'),
('10106', 'Electrical Equipment', 'Non Current Assets', 2, 1, 0, 1, 'A', 0, 0, '0.00', 'admin', '2016-03-27 10:43:44', '', '2019-08-10 11:01:12'),
('4020407', 'Electricity Bill', 'Utility Expenses', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 18:59:31', '', '2019-08-10 11:01:12'),
('50204', 'Employee Ledger', 'Current Liabilities', 2, 1, 0, 1, 'L', 0, 0, '0.00', '1', '2019-04-08 10:36:32', '', '2019-08-10 11:01:12'),
('404', 'Employee Salary', 'Expence', 1, 1, 1, 0, 'E', 0, 0, '0.00', '1', '2019-05-23 05:46:14', '', '2019-08-10 11:01:12'),
('40201', 'Entertainment', 'Other Expenses', 2, 1, 1, 1, 'E', 0, 0, '0.00', 'admin', '2013-07-08 16:21:26', 'anwarul', '2013-07-17 14:21:47'),
('2', 'Equity', 'COA', 0, 1, 0, 0, 'L', 0, 0, '0.00', '', '2019-08-10 11:01:12', '', '2019-08-10 11:01:12'),
('4', 'Expence', 'COA', 0, 1, 1, 0, 'E', 0, 0, '0.00', '1', '2019-06-18 11:40:41', '', '2019-08-10 11:01:12'),
('4020903', 'Faculty,Staff Salary & Allowances', 'Salary & Allowances', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:12:21', '', '2019-08-10 11:01:12'),
('4021404', 'Fax Machine', 'Repair and Maintenance', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:34:15', '', '2019-08-10 11:01:12'),
('4020905', 'Festival & Incentive Bonus', 'Salary & Allowances', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:12:48', '', '2019-08-10 11:01:12'),
('1010103', 'File Cabinet', 'Furniture & Fixturers', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2015-10-15 15:46:02', '', '2019-08-10 11:01:12'),
('40210', 'Financial Expenses', 'Other Expenses', 2, 1, 0, 1, 'E', 0, 0, '0.00', 'anwarul', '2013-08-20 12:24:31', 'admin', '2015-10-15 19:20:36'),
('1010403', 'Fire Extingushier', 'Others Assets', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2016-03-27 10:39:32', '', '2019-08-10 11:01:12'),
('405', 'Fixed Assets Cost', 'Expence', 1, 1, 1, 0, 'E', 0, 0, '0.00', '1', '2019-05-29 05:32:01', '', '2019-08-10 11:01:12'),
('4021408', 'Furniture', 'Repair and Maintenance', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:35:47', '', '2019-08-10 11:01:12'),
('10101', 'Furniture & Fixturers', 'Non Current Assets', 2, 1, 0, 1, 'A', 0, 0, '0.00', 'anwarul', '2013-08-20 16:18:15', 'anwarul', '2013-08-21 13:35:40'),
('4020406', 'Gas Bill', 'Utility Expenses', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 18:59:20', '', '2019-08-10 11:01:12'),
('20201', 'General Reserve', 'Reserve & Surplus', 2, 1, 1, 0, 'L', 0, 0, '0.00', 'admin', '2016-09-25 14:07:12', 'admin', '2016-10-02 17:48:49'),
('10105', 'Generator', 'Non Current Assets', 2, 1, 1, 1, 'A', 0, 0, '0.00', 'Zoherul', '2016-02-27 16:02:35', 'admin', '2016-05-23 12:05:18'),
('4021414', 'Generator Repair', 'Repair and Maintenance', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'Zoherul', '2016-06-16 10:21:05', '', '2019-08-10 11:01:12'),
('40213', 'Generator Running Expenses', 'Other Expenses', 2, 1, 0, 1, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:29:29', '', '2019-08-10 11:01:12'),
('10103', 'Groceries and Cutleries', 'Non Current Assets', 2, 1, 1, 1, 'A', 0, 0, '0.00', '2', '2018-07-12 10:02:55', '', '2019-08-10 11:01:12'),
('1010408', 'Gym Equipment', 'Others Assets', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2016-03-27 10:46:03', '', '2019-08-10 11:01:12'),
('4020907', 'Honorarium', 'Salary & Allowances', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:13:26', '', '2019-08-10 11:01:12'),
('40205', 'House Rent', 'Other Expenses', 2, 1, 0, 1, 'E', 0, 0, '0.00', 'anwarul', '2013-08-24 10:26:56', '', '2019-08-10 11:01:12'),
('3', 'Income', 'COA', 0, 1, 0, 0, 'I', 0, 0, '0.00', '1', '2019-05-20 05:32:59', '', '2019-08-10 11:01:12'),
('30204', 'Income from Photocopy & Printing', 'Other Income', 2, 1, 1, 1, 'I', 0, 0, '0.00', 'Zoherul', '2015-07-14 10:29:54', 'admin', '2016-09-25 11:04:28'),
('5020302', 'Income Tax Payable', 'Liabilities for Expenses', 3, 1, 0, 1, 'L', 0, 0, '0.00', 'admin', '2016-09-19 11:18:17', 'admin', '2016-09-28 13:18:35'),
('10107', 'Inventory', 'Non Current Assets', 1, 1, 0, 0, 'A', 0, 0, '0.00', '2', '2018-07-07 15:21:58', '', '2019-08-10 11:01:12'),
('1010210', 'LCD TV', 'Office Equipment', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2015-10-15 15:52:27', '', '2019-08-10 11:01:12'),
('30103', 'Lease Sale', 'Store Income', 1, 1, 1, 1, 'I', 0, 0, '0.00', '2', '2018-07-08 07:51:52', '', '2019-08-10 11:01:12'),
('5', 'Liabilities', 'COA', 0, 1, 0, 0, 'L', 0, 0, '0.00', 'admin', '2013-07-04 12:32:07', 'admin', '2015-10-15 19:46:54'),
('50203', 'Liabilities for Expenses', 'Current Liabilities', 2, 1, 0, 0, 'L', 0, 0, '0.00', 'admin', '2015-10-15 19:50:59', '', '2019-08-10 11:01:12'),
('4020707', 'Library Expenses', 'Miscellaneous Expenses', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2017-01-10 15:34:54', '', '2019-08-10 11:01:12'),
('4021409', 'Lift', 'Repair and Maintenance', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:36:12', '', '2019-08-10 11:01:12'),
('1020302', 'Loan Receivable', 'Account Receivable', 3, 1, 0, 1, 'A', 0, 0, '0.00', '1', '2019-01-26 07:37:20', '', '2019-08-10 11:01:12'),
('50101', 'Long Term Borrowing', 'Non Current Liabilities', 2, 1, 0, 1, 'L', 0, 0, '0.00', 'admin', '2013-07-04 12:32:26', 'admin', '2015-10-15 19:47:40'),
('4020608', 'Marketing & Promotion Exp.', 'Promonational Expence', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 18:53:59', '', '2019-08-10 11:01:12'),
('4020901', 'Medical Allowance', 'Salary & Allowances', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:11:33', '', '2019-08-10 11:01:12'),
('1010411', 'Metal Ditector', 'Others Assets', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'Zoherul', '2016-08-22 10:55:22', '', '2019-08-10 11:01:12'),
('4021413', 'Micro Oven', 'Repair and Maintenance', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'Zoherul', '2016-05-12 14:53:51', '', '2019-08-10 11:01:12'),
('30202', 'Miscellaneous (Income)', 'Other Income', 2, 1, 1, 1, 'I', 0, 0, '0.00', 'anwarul', '2014-02-06 15:26:31', 'admin', '2016-09-25 11:04:35'),
('4020909', 'Miscellaneous Benifit', 'Salary & Allowances', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:13:53', '', '2019-08-10 11:01:12'),
('4020701', 'Miscellaneous Exp', 'Miscellaneous Expenses', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2016-09-25 12:54:39', '', '2019-08-10 11:01:12'),
('40207', 'Miscellaneous Expenses', 'Other Expenses', 2, 1, 0, 1, 'E', 0, 0, '0.00', 'anwarul', '2014-04-26 16:49:56', 'admin', '2016-09-25 12:54:19'),
('1010401', 'Mobile Phone', 'Others Assets', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2016-01-29 10:43:30', '', '2019-08-10 11:01:12'),
('1010212', 'Network Accessories', 'Office Equipment', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2016-01-02 16:23:32', '', '2019-08-10 11:01:12'),
('4020408', 'News Paper Bill', 'Utility Expenses', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2016-01-02 15:55:57', '', '2019-08-10 11:01:12'),
('101', 'Non Current Assets', 'Assets', 1, 1, 0, 0, 'A', 0, 0, '0.00', '', '2019-08-10 11:01:12', 'admin', '2015-10-15 15:29:11'),
('501', 'Non Current Liabilities', 'Liabilities', 1, 1, 0, 0, 'L', 0, 0, '0.00', 'anwarul', '2014-08-30 13:18:20', 'admin', '2015-10-15 19:49:21'),
('1010404', 'Office Decoration', 'Others Assets', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2016-03-27 10:40:02', '', '2019-08-10 11:01:12'),
('10102', 'Office Equipment', 'Non Current Assets', 2, 1, 0, 1, 'A', 0, 0, '0.00', 'anwarul', '2013-12-06 18:08:00', 'admin', '2015-10-15 15:48:21'),
('4021401', 'Office Repair & Maintenance', 'Repair and Maintenance', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:33:15', '', '2019-08-10 11:01:12'),
('30201', 'Office Stationary (Income)', 'Other Income', 2, 1, 1, 1, 'I', 0, 0, '0.00', 'anwarul', '2013-07-17 15:21:06', 'admin', '2016-09-25 11:04:50'),
('302', 'Other Income', 'Income', 1, 1, 0, 0, 'I', 0, 0, '0.00', '2', '2018-07-07 13:40:57', 'admin', '2016-09-25 11:04:09'),
('40211', 'Others (Non Academic Expenses)', 'Other Expenses', 2, 1, 0, 1, 'E', 0, 0, '0.00', 'Obaidul', '2014-12-03 16:05:42', 'admin', '2015-10-15 19:22:09'),
('30205', 'Others (Non-Academic Income)', 'Other Income', 2, 1, 0, 1, 'I', 0, 0, '0.00', 'admin', '2015-10-15 17:23:49', 'admin', '2015-10-15 17:57:52'),
('10104', 'Others Assets', 'Non Current Assets', 2, 1, 0, 1, 'A', 0, 0, '0.00', 'admin', '2016-01-29 10:43:16', '', '2019-08-10 11:01:12'),
('4020910', 'Outstanding Salary', 'Salary & Allowances', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'Zoherul', '2016-04-24 11:56:50', '', '2019-08-10 11:01:12'),
('4021405', 'Oven', 'Repair and Maintenance', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:34:31', '', '2019-08-10 11:01:12'),
('4021412', 'PABX-Repair', 'Repair and Maintenance', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'Zoherul', '2016-04-24 14:40:18', '', '2019-08-10 11:01:12'),
('4020902', 'Part-time Staff Salary', 'Salary & Allowances', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:12:06', '', '2019-08-10 11:01:12'),
('1010202', 'Photocopy & Fax Machine', 'Office Equipment', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2015-10-15 15:47:27', 'admin', '2016-05-23 12:14:40'),
('4021411', 'Photocopy Machine Repair', 'Repair and Maintenance', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'Zoherul', '2016-04-24 12:40:02', 'admin', '2017-04-27 17:03:17'),
('3020503', 'Practical Fee', 'Others (Non-Academic Income)', 3, 1, 1, 1, 'I', 0, 0, '0.00', 'admin', '2017-07-22 18:00:37', '', '2019-08-10 11:01:12'),
('1020203', 'Prepayment', 'Advance, Deposit And Pre-payments', 3, 1, 0, 1, 'A', 0, 0, '0.00', 'admin', '2015-10-15 15:40:51', 'admin', '2015-12-31 16:49:58'),
('1010201', 'Printer', 'Office Equipment', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2015-10-15 15:47:15', '', '2019-08-10 11:01:12'),
('40202', 'Printing and Stationary', 'Other Expenses', 2, 1, 1, 1, 'E', 0, 0, '0.00', 'admin', '2013-07-08 16:21:45', 'admin', '2016-09-19 14:39:32'),
('402', 'Product Purchase', 'Expence', 1, 1, 1, 0, 'E', 0, 0, '0.00', '1', '2019-05-20 07:46:59', '', '2019-08-10 11:01:12'),
('304', 'Product Sale', 'Income', 1, 1, 1, 0, 'I', 0, 0, '0.00', '1', '2019-06-16 12:15:40', '', '2019-08-10 11:01:12'),
('3020502', 'Professional Training Course(Oracal-1)', 'Others (Non-Academic Income)', 3, 1, 1, 0, 'I', 0, 0, '0.00', 'nasim', '2017-06-22 13:28:05', '', '2019-08-10 11:01:12'),
('30207', 'Professional Training Course(Oracal)', 'Other Income', 2, 1, 0, 1, 'I', 0, 0, '0.00', 'nasim', '2017-06-22 13:24:16', 'nasim', '2017-06-22 13:25:56'),
('1010208', 'Projector', 'Office Equipment', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2015-10-15 15:51:44', '', '2019-08-10 11:01:12'),
('40206', 'Promonational Expence', 'Other Expenses', 2, 1, 0, 1, 'E', 0, 0, '0.00', 'anwarul', '2013-07-11 13:48:57', 'anwarul', '2013-07-17 14:23:03'),
('40214', 'Repair and Maintenance', 'Other Expenses', 2, 1, 0, 1, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:32:46', '', '2019-08-10 11:01:12'),
('202', 'Reserve & Surplus', 'Equity', 1, 1, 0, 1, 'L', 0, 0, '0.00', 'admin', '2016-09-25 14:06:34', 'admin', '2016-10-02 17:48:57'),
('20102', 'Retained Earnings', 'Share Holders Equity', 2, 1, 1, 1, 'L', 0, 0, '0.00', 'admin', '2016-05-23 11:20:40', 'admin', '2016-09-25 14:05:06'),
('4020708', 'River Cruse', 'Miscellaneous Expenses', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2017-04-24 15:35:25', '', '2019-08-10 11:01:12'),
('102020105', 'Salary', 'Advance', 4, 1, 0, 0, 'A', 0, 0, '0.00', 'admin', '2018-07-05 11:46:44', '', '2019-08-10 11:01:12'),
('40209', 'Salary & Allowances', 'Other Expenses', 2, 1, 0, 1, 'E', 0, 0, '0.00', 'anwarul', '2013-12-12 11:22:58', '', '2019-08-10 11:01:12'),
('1010406', 'Security Equipment', 'Others Assets', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2016-03-27 10:41:30', '', '2019-08-10 11:01:12'),
('305', 'Service Income', 'Income', 1, 1, 1, 0, 'I', 0, 0, '0.00', '1', '2019-05-22 13:36:02', '', '2019-08-10 11:01:12'),
('20101', 'Share Capital', 'Share Holders Equity', 2, 1, 0, 1, 'L', 0, 0, '0.00', 'anwarul', '2013-12-08 19:37:32', 'admin', '2015-10-15 19:45:35'),
('201', 'Share Holders Equity', 'Equity', 1, 1, 0, 0, 'L', 0, 0, '0.00', '', '2019-08-10 11:01:12', 'admin', '2015-10-15 19:43:51'),
('50201', 'Short Term Borrowing', 'Current Liabilities', 2, 1, 0, 1, 'L', 0, 0, '0.00', 'admin', '2015-10-15 19:50:30', '', '2019-08-10 11:01:12'),
('40208', 'Software Development Expenses', 'Other Expenses', 2, 1, 0, 1, 'E', 0, 0, '0.00', 'anwarul', '2013-11-21 14:13:01', 'admin', '2015-10-15 19:02:51'),
('50205000001', 'Solayman-3IRQIF9E9KRWRUGRS6J4', 'Supplier Ledger', 3, 1, 1, 0, 'L', 0, 0, '0.00', '1', '2019-11-11 12:00:59', '', '2019-08-10 00:00:00'),
('4020906', 'Special Allowances', 'Salary & Allowances', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:13:13', '', '2019-08-10 11:01:12'),
('50102', 'Sponsors Loan', 'Non Current Liabilities', 2, 1, 0, 1, 'L', 0, 0, '0.00', 'admin', '2015-10-15 19:48:02', '', '2019-08-10 11:01:12'),
('4020706', 'Sports Expense', 'Miscellaneous Expenses', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'nasmud', '2016-11-09 13:16:53', '', '2019-08-10 11:01:12'),
('301', 'Store Income', 'Income', 1, 1, 0, 0, 'I', 0, 0, '0.00', '2', '2018-07-07 13:40:37', 'admin', '2015-09-17 17:00:02'),
('3020501', 'Students Info. Correction Fee', 'Others (Non-Academic Income)', 3, 1, 1, 0, 'I', 0, 0, '0.00', 'admin', '2015-10-15 17:24:45', '', '2019-08-10 11:01:12'),
('1010601', 'Sub Station', 'Electrical Equipment', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2016-03-27 10:44:11', '', '2019-08-10 11:01:12'),
('50205', 'Supplier Ledger', 'Current Liabilities', 2, 1, 0, 1, 'L', 0, 0, '0.00', '1', '2019-10-06 06:18:49', '', '2019-08-10 11:01:12'),
('4020704', 'TB Care Expenses', 'Miscellaneous Expenses', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2016-10-08 13:03:04', '', '2019-08-10 11:01:12'),
('30206', 'TB Care Income', 'Other Income', 2, 1, 1, 1, 'I', 0, 0, '0.00', 'admin', '2016-10-08 13:00:56', '', '2019-08-10 11:01:12'),
('4020501', 'TDS on House Rent', 'House Rent', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 18:44:07', 'admin', '2016-09-19 14:40:16'),
('502030201', 'TDS Payable House Rent', 'Income Tax Payable', 4, 1, 1, 0, 'L', 0, 0, '0.00', 'admin', '2016-09-19 11:19:42', 'admin', '2016-09-28 13:19:37'),
('502030203', 'TDS Payable on Advertisement Bill', 'Income Tax Payable', 4, 1, 1, 0, 'L', 0, 0, '0.00', 'admin', '2016-09-28 13:20:51', '', '2019-08-10 11:01:12'),
('502030202', 'TDS Payable on Salary', 'Income Tax Payable', 4, 1, 1, 0, 'L', 0, 0, '0.00', 'admin', '2016-09-28 13:20:17', '', '2019-08-10 11:01:12'),
('4020402', 'Telephone Bill', 'Utility Expenses', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 18:57:59', '', '2019-08-10 11:01:12'),
('1010209', 'Telephone Set & PABX', 'Office Equipment', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2015-10-15 15:51:57', 'admin', '2016-10-02 17:10:40'),
('30301', 'test in 1', 'Test Income', 2, 1, 1, 0, 'I', 0, 0, '0.00', '1', '2019-05-20 05:25:43', '', '2019-08-10 11:01:12'),
('303', 'Test Income', 'Income', 1, 1, 1, 0, 'I', 0, 0, '0.00', '1', '2019-05-20 05:24:33', '', '2019-08-10 11:01:12'),
('40203', 'Travelling & Conveyance', 'Other Expenses', 2, 1, 1, 1, 'E', 0, 0, '0.00', 'admin', '2013-07-08 16:22:06', 'admin', '2015-10-15 18:45:13'),
('4021406', 'TV', 'Repair and Maintenance', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 19:35:07', '', '2019-08-10 11:01:12'),
('1010205', 'UPS', 'Office Equipment', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2015-10-15 15:50:38', '', '2019-08-10 11:01:12'),
('40204', 'Utility Expenses', 'Other Expenses', 2, 1, 0, 1, 'E', 0, 0, '0.00', 'anwarul', '2013-07-11 16:20:24', 'admin', '2016-01-02 15:55:22'),
('4020503', 'VAT on House Rent Exp', 'House Rent', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 18:49:22', 'admin', '2016-09-25 14:00:52'),
('5020301', 'VAT Payable', 'Liabilities for Expenses', 3, 1, 0, 1, 'L', 0, 0, '0.00', 'admin', '2015-10-15 19:51:11', 'admin', '2016-09-28 13:23:53'),
('1010409', 'Vehicle A/C', 'Others Assets', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'Zoherul', '2016-05-12 12:13:21', '', '2019-08-10 11:01:12'),
('1010405', 'Voltage Stablizer', 'Others Assets', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2016-03-27 10:40:59', '', '2019-08-10 11:01:12'),
('10203000001', 'Walking Customer-1', 'Customer Receivable', 4, 1, 1, 0, 'A', 0, 0, '0.00', '1', '2019-11-12 07:06:55', '', '2019-08-10 00:00:00'),
('4020405', 'WASA Bill', 'Utility Expenses', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2015-10-15 18:58:51', '', '2019-08-10 11:01:12'),
('1010402', 'Water Purifier', 'Others Assets', 3, 1, 1, 0, 'A', 0, 0, '0.00', 'admin', '2016-01-29 11:14:11', '', '2019-08-10 11:01:12'),
('4020705', 'Website Development Expenses', 'Miscellaneous Expenses', 3, 1, 1, 0, 'E', 0, 0, '0.00', 'admin', '2016-10-15 12:42:47', '', '2019-08-10 11:01:12');

-- --------------------------------------------------------

--
-- Table structure for table `acc_transaction`
--

CREATE TABLE IF NOT EXISTS `acc_transaction` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VNo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Vtype` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VDate` date DEFAULT NULL,
  `COAID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Narration` text COLLATE utf8_unicode_ci,
  `Debit` decimal(18,2) DEFAULT NULL,
  `Credit` decimal(18,2) DEFAULT NULL,
  `IsPosted` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CreateBy` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `UpdateBy` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `IsAppove` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asset_purchase`
--

CREATE TABLE IF NOT EXISTS `asset_purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_date` date NOT NULL,
  `supplier_id` varchar(30) NOT NULL,
  `grand_total` float NOT NULL,
  `payment_type` tinyint(4) DEFAULT NULL,
  `bank_id` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `att_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `sign_in` varchar(30) NOT NULL,
  `sign_out` varchar(30) NOT NULL,
  `staytime` varchar(30) NOT NULL,
  PRIMARY KEY (`att_id`)
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
('NOILG8EGCRXXBWUEUQBM', 'bdtask Shop', 'bdtask@gmail.com', 'B-25, Mannan Plaza, 4th Floor, Khilkhet\r\nDhaka-1229, Bangladesh ', '1922296392', 'http://www.bdtask.com', 1);

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
  `customer_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_mobile` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_information`
--

INSERT INTO `customer_information` (`customer_id`, `customer_name`, `customer_address`, `customer_mobile`, `customer_email`, `status`) VALUES
(1, 'Walking Customer', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_ledger`
--

CREATE TABLE IF NOT EXISTS `customer_ledger` (
  `transaction_id` varchar(100) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `invoice_no` bigint(20) DEFAULT NULL,
  `receipt_no` varchar(50) DEFAULT NULL,
  `amount` decimal(12,2) DEFAULT '0.00',
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_ledger`
--

INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES
('R97QPVJ43X', 1, 0, NULL, '0.00', 'Previous adjustment with software', 'NA', 'NA', '2019-11-12', 1, 1, 'd');

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
-- Table structure for table `designation`
--

CREATE TABLE IF NOT EXISTS `designation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(150) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee_history`
--

CREATE TABLE IF NOT EXISTS `employee_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `rate_type` int(11) NOT NULL,
  `hrate` float NOT NULL,
  `email` varchar(50) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `address_line_1` text NOT NULL,
  `address_line_2` text NOT NULL,
  `image` text,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary_payment`
--

CREATE TABLE IF NOT EXISTS `employee_salary_payment` (
  `emp_sal_pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `generate_id` int(11) NOT NULL,
  `employee_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `total_salary` decimal(18,2) NOT NULL DEFAULT '0.00',
  `total_working_minutes` varchar(50) CHARACTER SET latin1 NOT NULL,
  `working_period` varchar(50) CHARACTER SET latin1 NOT NULL,
  `payment_due` varchar(50) CHARACTER SET latin1 NOT NULL,
  `payment_date` varchar(50) CHARACTER SET latin1 NOT NULL,
  `paid_by` varchar(50) CHARACTER SET latin1 NOT NULL,
  `salary_month` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`emp_sal_pay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary_setup`
--

CREATE TABLE IF NOT EXISTS `employee_salary_setup` (
  `e_s_s_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `sal_type` varchar(30) NOT NULL,
  `salary_type_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `create_date` date DEFAULT NULL,
  `update_date` datetime(6) DEFAULT NULL,
  `update_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `gross_salary` float NOT NULL,
  PRIMARY KEY (`e_s_s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE IF NOT EXISTS `expense` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `type` varchar(100) NOT NULL,
  `voucher_no` varchar(50) NOT NULL,
  `amount` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `expense_item`
--

CREATE TABLE IF NOT EXISTS `expense_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expense_item_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fixed_assets`
--

CREATE TABLE IF NOT EXISTS `fixed_assets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(50) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `insert_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_id` bigint(20) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `total_amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `invoice` bigint(20) DEFAULT NULL,
  `total_discount` decimal(10,2) DEFAULT '0.00' COMMENT 'total invoice discount',
  `invoice_discount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `total_tax` decimal(10,2) DEFAULT '0.00',
  `prevous_due` decimal(10,2) NOT NULL DEFAULT '0.00',
  `sales_by` varchar(30) DEFAULT NULL,
  `invoice_details` varchar(200) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `payment_type` int(11) NOT NULL DEFAULT '1',
  `bank_id` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE IF NOT EXISTS `invoice_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_details_id` varchar(30) NOT NULL,
  `invoice_id` bigint(20) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `batch_id` varchar(30) NOT NULL,
  `cartoon` float DEFAULT NULL,
  `quantity` float NOT NULL,
  `rate` decimal(12,2) DEFAULT NULL,
  `manufacturer_rate` decimal(10,2) DEFAULT NULL,
  `total_price` decimal(12,2) DEFAULT NULL,
  `discount` decimal(12,0) DEFAULT NULL,
  `tax` decimal(10,2) DEFAULT NULL,
  `paid_amount` decimal(12,0) DEFAULT NULL,
  `due_amount` decimal(10,2) DEFAULT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=908 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES
(1, 'user_profile', 'User Profile', NULL),
(2, 'setting', 'Web Setting', NULL),
(3, 'language', 'Language', NULL),
(4, 'manage_users', 'Manage Users', NULL),
(5, 'add_user', 'Add User', NULL),
(6, 'manage_company', 'Manage Company', NULL),
(7, 'web_settings', 'Software Settings', NULL),
(8, 'manage_accounts', 'Manage Accounts', NULL),
(9, 'create_accounts', 'Create Accounts', NULL),
(10, 'manage_bank', 'Manage Bank', NULL),
(11, 'add_new_bank', 'Add New Bank', NULL),
(12, 'settings', 'Settings', NULL),
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
(46, 'category', 'Category', NULL),
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
(240, 'update_your_web_setting', 'Update your Web setting', NULL),
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
(418, 'stock_report_product_wise', 'Stock Report (Medicine Wise)', NULL),
(419, 'select_manufacturer', 'Select Manufacturer', NULL),
(420, 'select_product', 'Select Medicine ', NULL),
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
(538, 'manage_loan', 'Manage Person', NULL),
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
(561, 'add_type', 'Add Medicine Type', NULL),
(562, 'add_new_type', 'Add New Medicine  Type', NULL),
(563, 'type', 'Type', NULL),
(564, 'type_name', 'Type Name', NULL),
(565, 'manage_type', 'Manage Medicine Type', NULL),
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
(588, 'user_assign_role', 'Assign  User Role', NULL),
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
(616, 'product_name', 'Medicine Name', NULL),
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
(631, 'product_not_found', 'Medicine  not found', NULL),
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
(679, 'this_product_not_found', 'This Medicine  Not Found !', NULL),
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
(694, 'product_id_model_manufacturer_id_can_not_null', 'Medicine Id & Medicine Type & Manufacturer Id Can not be Blank', NULL),
(695, 'product_name_can_not_be_null', 'Medicine  Name can Not be Blank', NULL),
(696, 'product_model_can_not_be_null', 'Medicine  Model Can Not be Blank', NULL),
(697, 'sms', 'SMS', NULL),
(698, 'sms_configure', 'Sms Configuration', NULL),
(699, 'url', 'Url', NULL),
(700, 'sender_id', 'Sender ID', NULL),
(701, 'api_key', 'Api Key', NULL),
(702, 'barcode_or_qrcode', 'Barcode Or QRcode ', NULL),
(703, 'currency_name', 'Currency Name', NULL),
(704, 'add_currency', 'Add Currency', NULL),
(705, 'currency_icon', 'Currency Icon', NULL),
(706, 'currency_list', 'Currency List', NULL),
(707, 'import', 'Import', NULL),
(708, 'c_o_a', 'Chart Of Account', NULL),
(709, 'supplier_payment', 'Supplier Payment', NULL),
(710, 'customer_receive', 'Customer Receive', NULL),
(711, 'debit_voucher', 'Debit Voucher', NULL),
(712, 'credit_voucher', 'Credit voucher', NULL),
(713, 'voucher_approval', 'Voucher Approval', NULL),
(714, 'contra_voucher', 'Contra Voucher', NULL),
(715, 'journal_voucher', 'Journal Voucher', NULL),
(716, 'voucher_report', 'Voucher Report', NULL),
(717, 'cash_book', 'Cash Book', NULL),
(718, 'inventory_ledger', 'Inventory Ledger', NULL),
(719, 'bank_book', 'Bank Book', NULL),
(720, 'general_ledger', 'General Ledger', NULL),
(721, 'trial_balance', 'Trial Balance', NULL),
(722, 'profit_loss_report', 'Profit Loss Report', NULL),
(723, 'cash_flow', 'Cash Flow', NULL),
(724, 'coa_print', 'COA Print', NULL),
(725, 'manufacturer_payment', 'Manufacturer Payment', NULL),
(726, 'add_more', 'Add More', NULL),
(727, 'code', 'Code', NULL),
(728, 'remark', 'Transaction Details', NULL),
(729, 'voucher_no', 'Voucher NO', NULL),
(730, 'accounts_tree_view', 'Accounts Tree view', NULL),
(731, 'find', 'Find', NULL),
(732, 'voucher_type', 'Voucher Type', NULL),
(733, 'particulars', 'Particulars', NULL),
(734, 'cash_flow_statement', 'Cash Flow Statement', NULL),
(735, 'amount_in_dollar', 'Amount In Dollar', NULL),
(736, 'opening_cash_and_equivalent', 'Opening Cash and Equivalent', NULL),
(737, 'with_details', 'With Details', NULL),
(738, 'transaction_head', 'Transaction Head', NULL),
(739, 'gl_head', 'General Ledger Head', NULL),
(740, 'no_report', 'No Report', NULL),
(741, 'pre_balance', 'Pre Balance', NULL),
(742, 'current_balance', 'Current Balance', NULL),
(743, 'from_date', 'From Date', NULL),
(744, 'to_date', 'To Date', NULL),
(745, 'profit_loss', 'Profit Loss Statement', NULL),
(746, 'add_expense_item', 'Add Expense Item', NULL),
(747, 'manage_expense_item', 'Manage Expense Item', NULL),
(748, 'add_expense', 'Add Expense', NULL),
(749, 'manage_expense', 'Manage Expense', NULL),
(750, 'expense_statement', 'Expense Statement', NULL),
(751, 'expense_type', 'Expense Type', NULL),
(752, 'expense_item_name', 'Expense Item Name', NULL),
(753, 'opening_balance', 'Opening Balance', NULL),
(754, 'tax_settings', 'Tax Settings', NULL),
(755, 'add_incometax', 'Add Income Tax', NULL),
(756, 'manage_income_tax', 'Manage Income tax', NULL),
(757, 'tax_report', 'Tax Report', NULL),
(758, 'invoice_wise_tax_report', 'Invoice Wise Tax Report', NULL),
(759, 'number_of_tax', 'Number of Tax', NULL),
(760, 'default_value', 'Default Value', NULL),
(761, 'reg_no', 'Registration No', NULL),
(762, 'tax_name', 'Tax Name', NULL),
(763, 'service_id', 'Service Id', NULL),
(764, 'service', 'Service', NULL),
(765, 'add_service', 'Add Service', NULL),
(766, 'manage_service', 'Manage Service', NULL),
(767, 'service_invoice', 'Service Invoice', NULL),
(768, 'manage_service_invoice', 'Manage Service Invoice', NULL),
(769, 'service_name', 'Service Name', NULL),
(770, 'charge', 'Charge', NULL),
(771, 'add', 'Add', NULL),
(772, 'previous', 'Previous', NULL),
(773, 'net_total', 'Net Total', NULL),
(774, 'hanging_over', 'Estimated Time Of Departure', NULL),
(775, 'service_discount', 'Service Discount', NULL),
(776, 'hrm', 'HRM', NULL),
(777, 'add_designation', 'Add Designation', NULL),
(778, 'manage_designation', 'Manage Designation', NULL),
(779, 'add_employee', 'Add Employee', NULL),
(780, 'manage_employee', 'Manage Employee', NULL),
(781, 'attendance', 'Attendance', NULL),
(782, 'add_attendance', 'Add Attendance', NULL),
(783, 'manage_attendance', 'Manage Attendance', NULL),
(784, 'attendance_report', 'Attendance Report', NULL),
(785, 'payroll', 'Payroll', NULL),
(786, 'add_benefits', 'Add Benefits', NULL),
(787, 'manage_benefits', 'Manage Benefits', NULL),
(788, 'add_salary_setup', 'Add Salary Setup', NULL),
(789, 'manage_salary_setup', 'Manage Salary Setup', NULL),
(790, 'salary_generate', 'Salary Generate', NULL),
(791, 'manage_salary_generate', 'Manage Salary Generate', NULL),
(792, 'salary_payment', 'Salary Payment', NULL),
(793, 'designation', 'Designation', NULL),
(794, 'rate_type', 'Rate Type', NULL),
(795, 'hour_rate_or_salary', 'Hourly Rate/Salary', NULL),
(796, 'blood_group', 'Blood Group', NULL),
(797, 'address_line_1', 'Address Line 1', NULL),
(798, 'address_line_2', 'Address Line 2', NULL),
(799, 'picture', 'Picture', NULL),
(800, 'country', 'Country', NULL),
(801, 'city', 'City', NULL),
(802, 'zip', 'Zip code', NULL),
(803, 'single_checkin', 'Single Check In', NULL),
(804, 'bulk_checkin', 'Bulk Check In', NULL),
(805, 'checkin', 'Check In', NULL),
(806, 'employee_name', 'Employee Name', NULL),
(807, 'check_in', 'Check In', NULL),
(808, 'checkout', 'Check Out', NULL),
(809, 'confirm_clock', 'Confirm Clock', NULL),
(810, 'stay', 'Stay', NULL),
(811, 'download_sample_file', 'Download Sample File', NULL),
(812, 'employee', 'Employee', NULL),
(813, 'sign_in', 'Check In', NULL),
(814, 'sign_out', 'Check  Out', NULL),
(815, 'staytime', 'Stay Time', NULL),
(816, 'benefits_list', 'Benefit List', NULL),
(817, 'benefits', 'Benefits', NULL),
(818, 'benefit_type', 'Benefit Type', NULL),
(819, 'salary_benefits', 'Salary Benefits', NULL),
(820, 'salary_benefits_type', 'Salary Benefits Type', NULL),
(821, 'hourly', 'Hourly', NULL),
(822, 'salary', 'Salary', NULL),
(823, 'timezone', 'Time Zone', NULL),
(824, 'request', 'Request', NULL),
(825, 'datewise_report', 'Date Wise Report', NULL),
(826, 'work_hour', 'Work Hours', NULL),
(827, 'employee_wise_report', 'Employee Wise Report', NULL),
(828, 'date_in_time_report', 'In Time Report', NULL),
(829, 'successfully_checkout', 'Successfully Checked Out', NULL),
(830, 'setup_tax', 'Setup Tax', NULL),
(831, 'start_amount', 'Start Amount', NULL),
(832, 'end_amount', 'End Amount', NULL),
(833, 'tax_rate', 'Tax Rate', NULL),
(834, 'setup', 'Setup', NULL),
(835, 'income_tax_updateform', 'Income Tax Update Form', NULL),
(836, 'salary_type', 'Salary Type', NULL),
(837, 'addition', 'Addition', NULL),
(838, 'gross_salary', 'Gross Salary', NULL),
(839, 'set', 'Set', NULL),
(840, 'salary_month', 'Salary Month', NULL),
(841, 'generate', 'Generate ', NULL),
(842, 'total_salary', 'Total Salary', NULL),
(843, 'total_working_minutes', 'Total Working Hours', NULL),
(844, 'working_period', 'Total Working Days', NULL),
(845, 'paid_by', 'Paid By', NULL),
(846, 'pay_now', 'Pay Now ?', NULL),
(847, 'confirm', 'Confirm', NULL),
(848, 'generate_by', 'Generate By', NULL),
(849, 'gui_pos', 'GUI POS', NULL),
(850, 'add_fixed_assets', 'Add Fixed Assets', NULL),
(851, 'fixed_assets_list', 'Fixed Asset List', NULL),
(852, 'fixed_assets_purchase', 'Purchase Fixed Assets', NULL),
(853, 'fixed_assets_purchase_manage', 'Fixed Assets Purchase List', NULL),
(854, 'fixed_assets', 'Fixed Assets', NULL),
(855, 'item_code', 'Item code', NULL),
(856, 'item_name', 'Item Name', NULL),
(857, 'opening_assets', 'Assets Qty', NULL),
(858, 'edit_fixed_asset', 'Edit Fixed Assets', NULL),
(859, 'save_change', 'Save Change', NULL),
(860, 'in_word', 'In Word', NULL),
(861, 'purchase_pad_print', 'Purchase Pad Print', NULL),
(862, 'fixed_assets_purchase_details', 'Fixed Assets Purchase Details', NULL),
(863, 'manage_language', 'Manage Language', NULL),
(864, 'person_edit', 'Person Edit', NULL),
(865, 'person_ledger', 'Person Ledger', NULL),
(866, 'medicine_name', 'Medicine Name', NULL),
(867, 'unit_list', 'Unit List', NULL),
(868, 'add_unit', 'Add Unit', NULL),
(869, 'edit_unit', 'Edit Unit', NULL),
(870, 'unit_name', 'Unit Name', NULL),
(871, 'unit_not_selected', 'Unit did not Selected', NULL),
(872, 'supplier', 'Supplier', NULL),
(873, 'add_supplier', 'Add Supplier', NULL),
(874, 'manage_supplier', 'Manage Supplier', NULL),
(875, 'supplier_ledger', 'Supplier Ledger', NULL),
(876, 'supplier_sales_details', 'Supplier Sales Details', NULL),
(877, 'purchase_detail', 'Purchase details', NULL),
(878, 'purchase_information', 'Purchase Information', NULL),
(879, 'account_head', 'Account Head', NULL),
(880, 'transaction_date', 'Transaction Date', NULL),
(881, 'approved', 'Approve', NULL),
(882, 'date_wise_report', 'Date Wise Report', NULL),
(883, 'time_wise_report', 'Time Wise Report', NULL),
(884, 'report_date', 'Report Date', NULL),
(885, 's_time', 'Start Time', NULL),
(886, 'e_time', 'End Time', NULL),
(887, 'basic', 'Basic', NULL),
(888, 'supplier_name', 'Supplier Name', NULL),
(889, 'supplier_mobile', 'Supplier Mobile', NULL),
(890, 'supplier_address', 'Supplier Address', NULL),
(891, 'supplier_details', 'Supplier Details', NULL),
(892, 'select_supplier', 'Select Supplier', NULL),
(893, 'accounts_report', 'Accounts Report', NULL),
(894, 'account_code', 'Account Code', NULL),
(895, 'human_resource_management', 'Human Resource ', NULL),
(896, 'menu_name', 'Menu Name', NULL),
(897, 'head_of_account', 'Account Head', NULL),
(898, 'successfully_approved', 'Successfully Approved', NULL),
(899, 'supplier_edit', 'Supplier Edit', NULL),
(900, 'supplier_id', 'Supplier ID', NULL),
(901, 'strength', 'Strength', NULL),
(902, 'out_of_date', 'Out Of Date', NULL),
(903, 'dis', 'Dis', NULL),
(904, 'date_expired_please_choose_another', 'Date Expire Please Choose another', NULL),
(905, 'expired', 'Expired', NULL),
(906, 'cash_adjustment', 'Cash Adjustment', NULL),
(907, 'adjustment_type', 'Adjustment Type', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_information`
--

CREATE TABLE IF NOT EXISTS `manufacturer_information` (
  `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturer_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `details` varchar(255) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`manufacturer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_ledger`
--

CREATE TABLE IF NOT EXISTS `manufacturer_ledger` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` varchar(100) NOT NULL,
  `manufacturer_id` bigint(20) NOT NULL,
  `chalan_no` varchar(100) DEFAULT NULL,
  `deposit_no` varchar(50) DEFAULT NULL,
  `amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `description` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `cheque_no` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `d_c` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `receipt_no` (`deposit_no`),
  KEY `receipt_no_2` (`deposit_no`),
  KEY `receipt_no_3` (`deposit_no`),
  KEY `receipt_no_4` (`deposit_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES
(1, 'Invoice', '', '', 'invoice', 1),
(2, 'Customer', '', '', 'customer', 1),
(3, 'Medicine', '', '', 'medicine', 1),
(4, 'Manufacturer', '', '', 'manufacturer', 1),
(5, 'Purchase', '', '', 'purchase', 1),
(6, 'Stock', '', '', 'stock', 1),
(7, 'Return', '', '', 'return', 1),
(8, 'Report', '', '', 'report', 1),
(9, 'Accounts', '', '', 'accounts', 1),
(10, 'Bank', '', '', 'bank', 1),
(11, 'Tax', '', '', 'tax', 1),
(12, 'Human Resource', '', '', 'human_resource_info', 1),
(13, 'Supplier', '', '', 'supplier', 1),
(14, 'Service', '', '', 'service', 1),
(15, 'Search', '', '', 'search', 1),
(16, 'Settings', '', '', 'settings', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payroll_tax_setup`
--

CREATE TABLE IF NOT EXISTS `payroll_tax_setup` (
  `tax_setup_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `start_amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `end_amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `rate` decimal(12,2) NOT NULL DEFAULT '0.00',
  `status` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`tax_setup_id`)
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
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
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
  `generic_name` varchar(250) NOT NULL,
  `strength` varchar(250) NOT NULL,
  `box_size` varchar(30) NOT NULL,
  `product_location` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `tax` varchar(20) DEFAULT NULL,
  `product_model` varchar(50) DEFAULT NULL,
  `manufacturer_id` bigint(20) NOT NULL,
  `manufacturer_price` decimal(10,2) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `product_details` varchar(250) DEFAULT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL,
  `tax0` text,
  `tax1` text,
  `tax2` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `bank_id` varchar(30) DEFAULT NULL,
  `payment_type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
-- Table structure for table `product_service`
--

CREATE TABLE IF NOT EXISTS `product_service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `charge` decimal(10,2) NOT NULL DEFAULT '0.00',
  `tax0` text,
  `tax1` text,
  `tax2` text,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `salary_sheet_generate`
--

CREATE TABLE IF NOT EXISTS `salary_sheet_generate` (
  `ssg_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `gdate` varchar(30) DEFAULT NULL,
  `start_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `end_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `generate_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`ssg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `salary_type`
--

CREATE TABLE IF NOT EXISTS `salary_type` (
  `salary_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `sal_name` varchar(100) NOT NULL,
  `salary_type` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`salary_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sec_role`
--

CREATE TABLE IF NOT EXISTS `sec_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sec_userrole`
--

CREATE TABLE IF NOT EXISTS `sec_userrole` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `roleid` int(11) NOT NULL,
  `createby` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `createdate` datetime DEFAULT NULL,
  UNIQUE KEY `ID` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_invoice`
--

CREATE TABLE IF NOT EXISTS `service_invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voucher_no` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `customer_id` varchar(30) NOT NULL,
  `total_amount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total_discount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `invoice_discount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `total_tax` decimal(10,2) NOT NULL DEFAULT '0.00',
  `paid_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `due_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `shipping_cost` decimal(10,2) NOT NULL DEFAULT '0.00',
  `previous` decimal(10,2) NOT NULL DEFAULT '0.00',
  `details` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service_invoice_details`
--

CREATE TABLE IF NOT EXISTS `service_invoice_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `service_inv_id` varchar(30) NOT NULL,
  `qty` decimal(10,2) NOT NULL DEFAULT '0.00',
  `charge` decimal(10,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `discount_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `total` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sms_settings`
--

CREATE TABLE IF NOT EXISTS `sms_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(100) NOT NULL,
  `sender_id` varchar(100) NOT NULL,
  `api_key` varchar(100) NOT NULL,
  `isinvoice` int(11) NOT NULL DEFAULT '0',
  `ispurchase` int(11) NOT NULL DEFAULT '0',
  `isservice` int(11) NOT NULL DEFAULT '0',
  `ispayment` int(11) NOT NULL DEFAULT '0',
  `isreceive` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sms_settings`
--

INSERT INTO `sms_settings` (`id`, `url`, `sender_id`, `api_key`, `isinvoice`, `ispurchase`, `isservice`, `ispayment`, `isreceive`) VALUES
(1, 'http://sms.demo.com/smsapi', '88018471369884', 'C20029865c42c504afc7113.77492546', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `stock_fixed_asset`
--

CREATE TABLE IF NOT EXISTS `stock_fixed_asset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_id` int(11) NOT NULL,
  `item_code` varchar(50) NOT NULL,
  `qty` float NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_module`
--

INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES
(1, 1, 'New Invoice', '', '', 'new_invoice', 1),
(2, 1, 'Manage Invoice', '', '', 'manage_invoice', 1),
(3, 1, 'POS INVOICE', '', '', 'pos_invoice', 1),
(4, 1, 'GUI POS', '', '', 'gui_pos', 1),
(5, 9, 'Chart Of Account', '', '', 'show_tree', 1),
(6, 9, 'Manufacturer Payment', '', '', 'manufacturer_payment', 1),
(7, 9, 'Supplier Payment', '', '', 'supplier_payment', 1),
(8, 9, 'Customer Receive', '', '', 'customer_receive', 1),
(9, 9, 'Debit Voucher', '', '', 'debit_voucher', 1),
(10, 9, 'Credit Voucher', '', '', 'credit_voucher', 1),
(11, 9, 'Contra Voucher', '', '', 'contra_voucher', 1),
(12, 9, 'Journal Voucher', '', '', 'journal_voucher', 1),
(13, 9, 'Voucher Approval', '', '', 'aprove_v', 1),
(14, 9, 'Report', '', '', 'ac_report', 1),
(15, 9, 'Cash Book', '', '', 'cash_book', 1),
(16, 9, 'Bank Book', '', '', 'bank_book', 1),
(17, 9, 'General Ledger', '', '', 'general_ledger', 1),
(18, 9, 'Inventory Ledger', '', '', 'Inventory_ledger', 1),
(19, 9, 'Cash Flow', '', '', 'cash_flow_report', 1),
(20, 9, 'Profit Loss Statement', '', '', 'profit_loss_report', 1),
(21, 9, 'Trial Balance', '', '', 'trial_balance', 1),
(22, 3, 'Category', '', '', 'add_category', 1),
(23, 3, 'Medicine Type', '', '', 'medicine_type', 1),
(24, 3, 'Add Medicine', '', '', 'add_medicine', 1),
(25, 3, 'Import Medicine(CSV)', '', '', 'import_medicine_csv', 1),
(26, 3, 'Manage Medicine', '', '', 'manage_medicine', 1),
(27, 2, 'Add Customer', '', '', 'add_customer', 1),
(28, 2, 'Manage Customer', '', '', 'manage_customer', 1),
(29, 2, 'Credit Customer', '', '', 'credit_customer', 1),
(30, 2, 'Paid Customer', '', '', 'paid_customer', 1),
(31, 4, 'Add Manufacturer', '', '', 'add_manufacturer', 1),
(32, 4, 'Manage Manufacturer', '', '', 'manage_manufacturer', 1),
(33, 4, 'Manufacturer Ledger', '', '', 'manufacturer_ledger', 1),
(34, 4, 'Manufacturer Sales Details', '', '', 'manufacturer_sales_details', 1),
(35, 5, 'Add Purchase', '', '', 'add_purchase', 1),
(36, 5, 'Manage Purchase', '', '', 'manage_purchase', 1),
(37, 12, 'Add Designation', '', '', 'add_designation', 1),
(38, 12, 'Manage Designation', '', '', 'manage_designation', 1),
(39, 12, 'Add Employee', '', '', 'add_employee', 1),
(40, 12, 'Manage Employee', '', '', 'manage_employee', 1),
(41, 12, 'Add Attendance', '', '', 'add_attendance', 1),
(42, 12, 'Manage Attendance', '', '', 'manage_attendance', 1),
(43, 12, 'Attendance Report', '', '', 'attendance_report', 1),
(44, 12, 'Add Benefits', '', '', 'add_benefits', 1),
(45, 12, 'Manage Benefits', '', '', 'manage_benefits', 1),
(46, 12, 'Add Salary Setup', '', '', 'add_salary_setup', 1),
(47, 12, 'Manage Salary Setup', '', '', 'manage_salary_setup', 1),
(48, 12, 'Salary Generate', '', '', 'salary_generate', 1),
(49, 12, 'Manage Salary Generate', '', '', 'manage_salary_generate', 1),
(50, 12, 'Salary Payment', '', '', 'salary_payment', 1),
(51, 12, 'Add Expense Item', '', '', 'add_expense_item', 1),
(52, 12, 'Manage Expense Item', '', '', 'manage_expense_item', 1),
(53, 12, 'Add Expense', '', '', 'add_expense', 1),
(54, 12, 'Manage Expense', '', '', 'manage_expense', 1),
(55, 12, 'Add Fixed Assets', '', '', 'add_fixed_assets', 1),
(56, 12, 'Fixed Asset List', '', '', 'fixed_assets_list', 1),
(57, 12, 'Purchase Fixed Assets', '', '', 'fixed_assets_purchase', 1),
(58, 12, 'Fixed Asset Purchase List', '', '', 'fixed_assets_purchase_manage', 1),
(59, 16, 'Manage Company', '', '', 'manage_company', 1),
(60, 7, 'Return', '', '', 'return', 1),
(61, 7, 'Stock Return List', '', '', 'stock_return_list', 1),
(62, 7, 'Manufacturer Return List', '', '', 'manufacturer_return_list', 1),
(63, 7, 'Wastage Return List', '', '', 'wastage_return_list', 1),
(64, 15, 'Medicine', '', '', 'medicine_search', 1),
(65, 15, 'Customer', '', '', 'customer_search', 1),
(66, 15, 'Invoice', '', '', 'invoice_search', 1),
(67, 15, 'Purchase', '', '', 'purcahse_search', 1),
(68, 14, 'Add Service', '', '', 'create_service', 1),
(69, 14, 'Manage Service', '', '', 'manage_service', 1),
(70, 14, 'Service Invoice', '', '', 'service_invoice', 1),
(71, 14, 'Manage Service Invoice', '', '', 'manage_service_invoice', 1),
(72, 11, 'Tax Settings', '', '', 'tax_settings', 1),
(73, 11, 'Add Income Tax', '', '', 'add_incometax', 1),
(74, 11, 'Manage Income Tax', '', '', 'manage_income_tax', 1),
(75, 11, 'Tax Report', '', '', 'tax_report', 1),
(76, 11, 'Invoice Wise Tax Report', '', '', 'invoice_wise_tax_report', 1),
(77, 6, 'Stock Report', '', '', 'stock_report', 1),
(80, 6, 'Stock Report(Batch Wise)', '', '', 'stock_report_batch_wise', 1),
(81, 8, 'Today\'s Report', '', '', 'todays_report', 1),
(82, 8, 'Sales Report', '', '', 'sales_report', 1),
(83, 8, 'Purchase Report', '', '', 'purchase_report', 1),
(84, 8, 'Sales Report(Medicine Wise)', '', '', 'sales_report_medicine_wise', 1),
(85, 8, 'Profit/Loss', '', '', 'profit_loss', 1),
(86, 10, 'Add New Bank', '', '', 'add_new_bank', 1),
(87, 10, 'Bank Transaction', '', '', 'bank_transaction', 1),
(88, 10, 'Manage Bank', '', '', 'manage_bank', 1),
(89, 12, 'Add Person(Personal Loan)', '', '', 'office_add_person', 1),
(90, 12, 'Manage Person(Personal Loan)', '', '', 'office_manage_loan', 1),
(91, 12, 'Add Person(Office Loan)', '', '', 'personal_add_person', 1),
(92, 12, 'Add Loan(Office Loan)', '', '', 'personal_add_loan', 1),
(93, 12, 'Add Payment(Office Loan)', '', '', 'personal_add_payment', 1),
(94, 12, 'Manage Loan(Office Loan)', '', '', 'personal_manage_loan', 1),
(95, 16, 'Add User', '', '', 'add_user', 1),
(96, 16, 'Manage Users', '', '', 'manage_users', 1),
(97, 16, 'Lanaguage', '', '', 'language', 1),
(98, 16, 'Currency', '', '', 'currency', 1),
(99, 16, 'Web Setting', '', '', 'soft_setting', 1),
(100, 16, 'Add Role', '', '', 'add_role', 1),
(101, 16, 'Role List', '', '', 'role_list', 1),
(102, 16, 'Assign User Role', '', '', 'user_assign_role', 1),
(103, 16, 'Permission', '', '', 'permission', 1),
(104, 16, 'SMS', '', '', 'configure_sms', 1),
(105, 3, 'Add Unit', '', '', 'add_unit', 1),
(106, 3, 'Unit List', '', '', 'unit_list', 1),
(107, 13, 'Add Supplier', '', '', 'add_supplier', 1),
(108, 13, 'Manage Supplier', '', '', 'manage_supplier', 1),
(109, 13, 'Supplier Ledger', '', '', 'supplier_ledger', 1),
(110, 9, 'COA Print', '', '', 'coa_print', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_information`
--

CREATE TABLE IF NOT EXISTS `supplier_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_id` varchar(100) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `details` varchar(255) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_ledger`
--

CREATE TABLE IF NOT EXISTS `supplier_ledger` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` varchar(100) NOT NULL,
  `supplier_id` varchar(100) NOT NULL,
  `chalan_no` varchar(100) DEFAULT NULL,
  `deposit_no` varchar(50) DEFAULT NULL,
  `amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `description` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `cheque_no` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `d_c` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
-- Table structure for table `tax_collection`
--

CREATE TABLE IF NOT EXISTS `tax_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `customer_id` varchar(30) NOT NULL,
  `relation_id` varchar(30) NOT NULL,
  `tax0` text,
  `tax1` text,
  `tax2` text,
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

-- --------------------------------------------------------

--
-- Table structure for table `tax_settings`
--

CREATE TABLE IF NOT EXISTS `tax_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `default_value` float NOT NULL,
  `tax_name` varchar(250) NOT NULL,
  `nt` int(11) NOT NULL,
  `reg_no` varchar(100) DEFAULT NULL,
  `is_show` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_name` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(2) DEFAULT NULL,
  `security_code` varchar(255) DEFAULT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `timezone` varchar(200) DEFAULT NULL,
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

INSERT INTO `web_setting` (`setting_id`, `logo`, `invoice_logo`, `favicon`, `currency`, `timezone`, `currency_position`, `footer_text`, `language`, `rtr`, `captcha`, `site_key`, `secret_key`, `discount_type`) VALUES
(1, 'http://softest8.bdtask.com/pharmacysasmodel/./my-assets/image/logo/5df28e7f70df1725d5763d7a925e9915.png', 'http://softest8.bdtask.com/pharmacysasmodel/my-assets/image/logo/ef9ff92adbea3b2d1afe4cfa8b02c04c.png', 'http://softest8.bdtask.com/pharmacysasmodel/my-assets/image/logo/ba8f3211bb73f7bcc05f7a3b5b91aef6.png', '৳', 'Asia/Dhaka', '0', 'Copyright© 2019 bdtask. All rights reserved.', 'english', '0', 1, '', '', 1);
