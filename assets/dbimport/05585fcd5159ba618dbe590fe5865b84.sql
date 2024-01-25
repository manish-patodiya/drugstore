#
# TABLE STRUCTURE FOR: acc_coa
#

DROP TABLE IF EXISTS `acc_coa`;

CREATE TABLE `acc_coa` (
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

INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020200007', ' A.C.I.-441UBRSOC25RYNPAMYON', 'Account Payable', '3', '1', '1', '0', 'L', '0', '0', '0.00', '1', '2019-06-15 08:41:35', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020401', '2-MdBosir', 'Employee Ledger', '3', '1', '1', '0', 'L', '0', '0', '0.00', '1', '2019-05-21 06:38:48', '1', '2019-05-29 10:11:27');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020402', '3-Tarin Khan', 'Employee Ledger', '3', '1', '1', '0', 'L', '0', '0', '0.00', '1', '2019-06-13 06:38:09', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020402', '4-RaisaKhan', 'Employee Ledger', '3', '1', '1', '0', 'L', '0', '0', '0.00', '1', '2019-06-18 13:50:26', '1', '2019-06-18 13:51:41');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102010201', 'AB Bank', 'Cash At Bank', '4', '1', '1', '0', 'A', '0', '0', '0.00', '1', '2019-05-20 10:20:32', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030102', 'Ab-XHVT1EYRU9GJSF7', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '0.00', '1', '2019-05-22 13:42:53', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021403', 'AC', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:33:55', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('50202', 'Account Payable', 'Current Liabilities', '2', '1', '0', '1', 'L', '0', '0', '0.00', 'admin', '2015-10-15 19:50:43', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10203', 'Account Receivable', 'Current Asset', '2', '1', '0', '0', 'A', '0', '0', '0.00', '', '0000-00-00 00:00:00', 'admin', '2013-09-18 15:29:35');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020200006', 'ACME-O3G5STXHZKOW5SM9VO1S', 'Account Payable', '3', '1', '1', '0', 'L', '0', '0', '0.00', '1', '2019-06-15 08:41:11', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1020201', 'Advance', 'Advance, Deposit And Pre-payments', '3', '1', '0', '1', 'A', '0', '0', '0.00', 'Zoherul', '2015-05-31 13:29:12', 'admin', '2015-12-31 16:46:32');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102020103', 'Advance House Rent', 'Advance', '4', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-10-02 16:55:38', 'admin', '2016-10-02 16:57:32');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10202', 'Advance, Deposit And Pre-payments', 'Current Asset', '2', '1', '0', '0', 'A', '0', '0', '0.00', '', '0000-00-00 00:00:00', 'admin', '2015-12-31 16:46:24');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020602', 'Advertisement and Publicity', 'Promonational Expence', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:51:44', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010410', 'Air Cooler', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-05-23 12:13:55', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020603', 'AIT Against Advertisement', 'Promonational Expence', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:52:09', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1', 'Assets', 'COA', '0', '1', '0', '0', 'A', '0', '0', '0.00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010204', 'Attendance Machine', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:49:31', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40216', 'Audit Fee', 'Other Expenses', '2', '1', '1', '1', 'E', '0', '0', '0.00', 'admin', '2017-07-18 12:54:30', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021002', 'Bank Charge', 'Financial Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:21:03', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('30203', 'Bank Interest', 'Other Income', '2', '1', '1', '1', 'I', '0', '0', '0.00', 'Obaidul', '2015-01-03 14:49:54', 'admin', '2016-09-25 11:04:19');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020501', 'Sgmh-6GEBWMXNNM8C3Y7Q4RH8', 'Supplier Ledger', '3', '1', '1', '0', 'L', '0', '0', '0.00', '1', '2019-10-06 06:28:45', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020200005', 'BEXIMCO-35IHYBJZ6UWRIP7YUN3V', 'Account Payable', '3', '1', '1', '0', 'L', '0', '0', '0.00', '1', '2019-06-15 08:40:44', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010104', 'Book Shelf', 'Furniture & Fixturers', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:46:11', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010407', 'Books and Journal', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-03-27 10:45:37', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020604', 'Business Development Expenses', 'Promonational Expence', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:52:29', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020606', 'Campaign Expenses', 'Promonational Expence', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:52:57', 'admin', '2016-09-19 14:52:48');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020502', 'Campus Rent', 'House Rent', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:46:53', 'admin', '2017-04-27 17:02:39');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40212', 'Car Running Expenses', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:28:43', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10201', 'Cash & Cash Equivalent', 'Current Asset', '2', '1', '0', '1', 'A', '0', '0', '0.00', '1', '2019-06-12 11:47:24', 'admin', '2015-10-15 15:57:55');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1020102', 'Cash At Bank', 'Cash & Cash Equivalent', '3', '1', '0', '1', 'A', '0', '0', '0.00', '1', '2019-03-18 06:08:18', 'admin', '2015-10-15 15:32:42');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1020101', 'Cash In Hand', 'Cash & Cash Equivalent', '3', '1', '1', '0', 'A', '0', '0', '0.00', '1', '2019-01-26 07:38:48', 'admin', '2016-05-23 12:05:43');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010207', 'CCTV', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:51:24', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102020102', 'CEO Current A/C', 'Advance', '4', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-09-25 11:54:54', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102010202', 'City Bank', 'Cash At Bank', '4', '1', '1', '0', 'A', '0', '0', '0.00', '1', '2019-06-12 12:09:30', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010101', 'Class Room Chair', 'Furniture & Fixturers', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:45:29', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021407', 'Close Circuit Cemera', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:35:35', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020601', 'Commision on Admission', 'Promonational Expence', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:51:21', 'admin', '2016-09-19 14:42:54');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010206', 'Computer', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:51:09', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021410', 'Computer (R)', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'Zoherul', '2016-03-24 12:38:52', 'Zoherul', '2016-03-24 12:41:40');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010102', 'Computer Table', 'Furniture & Fixturers', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:45:44', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('301020401', 'Continuing Registration fee - UoL (Income)', 'Registration Fee (UOL) Income', '4', '1', '1', '0', 'I', '0', '0', '0.00', 'admin', '2015-10-15 17:40:40', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020904', 'Contratuall Staff Salary', 'Salary & Allowances', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:12:34', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020709', 'Cultural Expense', 'Miscellaneous Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'nasmud', '2017-04-29 12:45:10', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102', 'Current Asset', 'Assets', '1', '1', '0', '0', 'A', '0', '0', '0.00', '', '0000-00-00 00:00:00', 'admin', '2018-07-07 11:23:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502', 'Current Liabilities', 'Liabilities', '1', '1', '0', '0', 'L', '0', '0', '0.00', 'anwarul', '2014-08-30 13:18:20', 'admin', '2015-10-15 19:49:21');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1020301', 'Customer Receivable', 'Account Receivable', '3', '1', '0', '1', 'A', '0', '0', '0.00', '1', '2019-01-24 12:10:05', 'admin', '2018-07-07 12:31:42');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102010203', 'DBBL', 'Cash At Bank', '4', '1', '1', '0', 'A', '0', '0', '0.00', '1', '2019-06-13 10:27:34', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020200008', 'Dell-C34RZAELMF7WYLVKVS8D', 'Account Payable', '3', '1', '1', '0', 'L', '0', '0', '0.00', '1', '2019-06-18 09:24:03', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1020202', 'Deposit', 'Advance, Deposit And Pre-payments', '3', '1', '0', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:40:42', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020605', 'Design & Printing Expense', 'Promonational Expence', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:55:00', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020404', 'Dish Bill', 'Utility Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:58:21', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40215', 'Dividend', 'Other Expenses', '2', '1', '1', '1', 'E', '0', '0', '0.00', 'admin', '2016-09-25 14:07:55', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020403', 'Drinking Water Bill', 'Utility Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:58:10', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010211', 'DSLR Camera', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:53:17', 'admin', '2016-01-02 16:23:25');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020908', 'Earned Leave', 'Salary & Allowances', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:13:38', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020607', 'Education Fair Expenses', 'Promonational Expence', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:53:42', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030205', 'EIWA3A4HT1-jisan', 'Loan Receivable', '4', '1', '1', '0', 'A', '0', '0', '0.00', '1', '2019-02-01 11:28:12', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010602', 'Electric Equipment', 'Electrical Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-03-27 10:44:51', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010203', 'Electric Kettle', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:49:07', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10106', 'Electrical Equipment', 'Non Current Assets', '2', '1', '0', '1', 'A', '0', '0', '0.00', 'admin', '2016-03-27 10:43:44', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020407', 'Electricity Bill', 'Utility Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:59:31', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('50204', 'Employee Ledger', 'Current Liabilities', '2', '1', '0', '1', 'L', '0', '0', '0.00', '1', '2019-04-08 10:36:32', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('404', 'Employee Salary', 'Expence', '1', '1', '1', '0', 'E', '0', '0', '0.00', '1', '2019-05-23 05:46:14', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40201', 'Entertainment', 'Other Expenses', '2', '1', '1', '1', 'E', '0', '0', '0.00', 'admin', '2013-07-08 16:21:26', 'anwarul', '2013-07-17 14:21:47');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('2', 'Equity', 'COA', '0', '1', '0', '0', 'L', '0', '0', '0.00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('401', 'exp1', 'Expence', '1', '1', '1', '0', 'E', '0', '0', '0.00', '1', '2019-05-20 05:32:52', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4', 'Expence', 'COA', '0', '1', '1', '0', 'E', '0', '0', '0.00', '1', '2019-06-18 11:40:41', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020903', 'Faculty,Staff Salary & Allowances', 'Salary & Allowances', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:12:21', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021404', 'Fax Machine', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:34:15', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020905', 'Festival & Incentive Bonus', 'Salary & Allowances', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:12:48', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010103', 'File Cabinet', 'Furniture & Fixturers', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:46:02', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40210', 'Financial Expenses', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'anwarul', '2013-08-20 12:24:31', 'admin', '2015-10-15 19:20:36');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010403', 'Fire Extingushier', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-03-27 10:39:32', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('405', 'Fixed Assets Cost', 'Expence', '1', '1', '1', '0', 'E', '0', '0', '0.00', '1', '2019-05-29 05:32:01', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021408', 'Furniture', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:35:47', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10101', 'Furniture & Fixturers', 'Non Current Assets', '2', '1', '0', '1', 'A', '0', '0', '0.00', 'anwarul', '2013-08-20 16:18:15', 'anwarul', '2013-08-21 13:35:40');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020406', 'Gas Bill', 'Utility Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:59:20', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('403', 'Gass Bill', 'Expence', '1', '1', '1', '0', 'E', '1', '1', '1.00', '1', '2019-05-20 09:56:58', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('20201', 'General Reserve', 'Reserve & Surplus', '2', '1', '1', '0', 'L', '0', '0', '0.00', 'admin', '2016-09-25 14:07:12', 'admin', '2016-10-02 17:48:49');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10105', 'Generator', 'Non Current Assets', '2', '1', '1', '1', 'A', '0', '0', '0.00', 'Zoherul', '2016-02-27 16:02:35', 'admin', '2016-05-23 12:05:18');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021414', 'Generator Repair', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'Zoherul', '2016-06-16 10:21:05', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40213', 'Generator Running Expenses', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:29:29', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10103', 'Groceries and Cutleries', 'Non Current Assets', '2', '1', '1', '1', 'A', '0', '0', '0.00', '2', '2018-07-12 10:02:55', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010408', 'Gym Equipment', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-03-27 10:46:03', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020907', 'Honorarium', 'Salary & Allowances', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:13:26', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40205', 'House Rent', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'anwarul', '2013-08-24 10:26:56', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020200004', 'INCEPTA PHARMA-SXQJWCLR9GOS26CTVXMI', 'Account Payable', '3', '1', '1', '0', 'L', '0', '0', '0.00', '1', '2019-06-15 08:40:15', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('3', 'Income', 'COA', '0', '1', '0', '0', 'I', '0', '0', '0.00', '1', '2019-05-20 05:32:59', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('30204', 'Income from Photocopy & Printing', 'Other Income', '2', '1', '1', '1', 'I', '0', '0', '0.00', 'Zoherul', '2015-07-14 10:29:54', 'admin', '2016-09-25 11:04:28');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020302', 'Income Tax Payable', 'Liabilities for Expenses', '3', '1', '0', '1', 'L', '0', '0', '0.00', 'admin', '2016-09-19 11:18:17', 'admin', '2016-09-28 13:18:35');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10107', 'Inventory', 'Non Current Assets', '1', '1', '0', '0', 'A', '0', '0', '0.00', '2', '2018-07-07 15:21:58', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030104', 'justin tuto-L6L6PZWWV96JSBJ', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '0.00', '1', '2019-05-25 13:41:41', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020200010', 'Kamrul Hasan-JQGGDI9NT6YLNT6UAZSV', 'Account Payable', '3', '1', '1', '0', 'L', '0', '0', '0.00', '1', '2019-10-06 11:05:25', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010210', 'LCD TV', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:52:27', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('30103', 'Lease Sale', 'Store Income', '1', '1', '1', '1', 'I', '0', '0', '0.00', '2', '2018-07-08 07:51:52', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5', 'Liabilities', 'COA', '0', '1', '0', '0', 'L', '0', '0', '0.00', 'admin', '2013-07-04 12:32:07', 'admin', '2015-10-15 19:46:54');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('50203', 'Liabilities for Expenses', 'Current Liabilities', '2', '1', '0', '0', 'L', '0', '0', '0.00', 'admin', '2015-10-15 19:50:59', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020707', 'Library Expenses', 'Miscellaneous Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2017-01-10 15:34:54', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021409', 'Lift', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:36:12', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1020302', 'Loan Receivable', 'Account Receivable', '3', '1', '0', '1', 'A', '0', '0', '0.00', '1', '2019-01-26 07:37:20', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('50101', 'Long Term Borrowing', 'Non Current Liabilities', '2', '1', '0', '1', 'L', '0', '0', '0.00', 'admin', '2013-07-04 12:32:26', 'admin', '2015-10-15 19:47:40');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020200011', 'Mamun-8W5RBSGJBYJM6ANZYGNM', 'Account Payable', '3', '1', '1', '0', 'L', '0', '0', '0.00', '1', '2019-10-10 06:40:50', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020608', 'Marketing & Promotion Exp.', 'Promonational Expence', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:53:59', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020901', 'Medical Allowance', 'Salary & Allowances', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:11:33', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010411', 'Metal Ditector', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'Zoherul', '2016-08-22 10:55:22', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021413', 'Micro Oven', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'Zoherul', '2016-05-12 14:53:51', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('30202', 'Miscellaneous (Income)', 'Other Income', '2', '1', '1', '1', 'I', '0', '0', '0.00', 'anwarul', '2014-02-06 15:26:31', 'admin', '2016-09-25 11:04:35');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020909', 'Miscellaneous Benifit', 'Salary & Allowances', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:13:53', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020701', 'Miscellaneous Exp', 'Miscellaneous Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2016-09-25 12:54:39', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40207', 'Miscellaneous Expenses', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'anwarul', '2014-04-26 16:49:56', 'admin', '2016-09-25 12:54:19');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010401', 'Mobile Phone', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-01-29 10:43:30', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102020101', 'Mr Ashiqur Rahman', 'Advance', '4', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-12-31 16:47:23', 'admin', '2016-09-25 11:55:13');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('407', 'Nasta', 'Expence', '1', '1', '1', '0', 'E', '1', '1', '1.00', '1', '2019-06-16 12:13:06', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010212', 'Network Accessories', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-01-02 16:23:32', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020408', 'News Paper Bill', 'Utility Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2016-01-02 15:55:57', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('101', 'Non Current Assets', 'Assets', '1', '1', '0', '0', 'A', '0', '0', '0.00', '', '0000-00-00 00:00:00', 'admin', '2015-10-15 15:29:11');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('501', 'Non Current Liabilities', 'Liabilities', '1', '1', '0', '0', 'L', '0', '0', '0.00', 'anwarul', '2014-08-30 13:18:20', 'admin', '2015-10-15 19:49:21');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010404', 'Office Decoration', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-03-27 10:40:02', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10102', 'Office Equipment', 'Non Current Assets', '2', '1', '0', '1', 'A', '0', '0', '0.00', 'anwarul', '2013-12-06 18:08:00', 'admin', '2015-10-15 15:48:21');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021401', 'Office Repair & Maintenance', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:33:15', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('30201', 'Office Stationary (Income)', 'Other Income', '2', '1', '1', '1', 'I', '0', '0', '0.00', 'anwarul', '2013-07-17 15:21:06', 'admin', '2016-09-25 11:04:50');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('302', 'Other Income', 'Income', '1', '1', '0', '0', 'I', '0', '0', '0.00', '2', '2018-07-07 13:40:57', 'admin', '2016-09-25 11:04:09');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40211', 'Others (Non Academic Expenses)', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'Obaidul', '2014-12-03 16:05:42', 'admin', '2015-10-15 19:22:09');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('30205', 'Others (Non-Academic Income)', 'Other Income', '2', '1', '0', '1', 'I', '0', '0', '0.00', 'admin', '2015-10-15 17:23:49', 'admin', '2015-10-15 17:57:52');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10104', 'Others Assets', 'Non Current Assets', '2', '1', '0', '1', 'A', '0', '0', '0.00', 'admin', '2016-01-29 10:43:16', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020910', 'Outstanding Salary', 'Salary & Allowances', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'Zoherul', '2016-04-24 11:56:50', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021405', 'Oven', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:34:31', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021412', 'PABX-Repair', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'Zoherul', '2016-04-24 14:40:18', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020902', 'Part-time Staff Salary', 'Salary & Allowances', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:12:06', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('406', 'Pc', 'Expence', '1', '1', '1', '0', 'E', '1', '1', '1.00', '1', '2019-06-13 07:10:11', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010202', 'Photocopy & Fax Machine', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:47:27', 'admin', '2016-05-23 12:14:40');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021411', 'Photocopy Machine Repair', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'Zoherul', '2016-04-24 12:40:02', 'admin', '2017-04-27 17:03:17');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('3020503', 'Practical Fee', 'Others (Non-Academic Income)', '3', '1', '1', '1', 'I', '0', '0', '0.00', 'admin', '2017-07-22 18:00:37', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1020203', 'Prepayment', 'Advance, Deposit And Pre-payments', '3', '1', '0', '1', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:40:51', 'admin', '2015-12-31 16:49:58');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010201', 'Printer', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:47:15', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40202', 'Printing and Stationary', 'Other Expenses', '2', '1', '1', '1', 'E', '0', '0', '0.00', 'admin', '2013-07-08 16:21:45', 'admin', '2016-09-19 14:39:32');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('402', 'Product Purchase', 'Expence', '1', '1', '1', '0', 'E', '0', '0', '0.00', '1', '2019-05-20 07:46:59', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('304', 'Product Sale', 'Income', '1', '1', '1', '0', 'I', '0', '0', '0.00', '1', '2019-06-16 12:15:40', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('3020502', 'Professional Training Course(Oracal-1)', 'Others (Non-Academic Income)', '3', '1', '1', '0', 'I', '0', '0', '0.00', 'nasim', '2017-06-22 13:28:05', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('30207', 'Professional Training Course(Oracal)', 'Other Income', '2', '1', '0', '1', 'I', '0', '0', '0.00', 'nasim', '2017-06-22 13:24:16', 'nasim', '2017-06-22 13:25:56');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010208', 'Projector', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:51:44', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40206', 'Promonational Expence', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'anwarul', '2013-07-11 13:48:57', 'anwarul', '2013-07-17 14:23:03');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40214', 'Repair and Maintenance', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:32:46', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('202', 'Reserve & Surplus', 'Equity', '1', '1', '0', '1', 'L', '0', '0', '0.00', 'admin', '2016-09-25 14:06:34', 'admin', '2016-10-02 17:48:57');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('20102', 'Retained Earnings', 'Share Holders Equity', '2', '1', '1', '1', 'L', '0', '0', '0.00', 'admin', '2016-05-23 11:20:40', 'admin', '2016-09-25 14:05:06');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020708', 'River Cruse', 'Miscellaneous Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2017-04-24 15:35:25', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030103', 'sakib-BULO85O55VU3IQC', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '0.00', '1', '2019-05-23 07:02:33', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102020105', 'Salary', 'Advance', '4', '1', '0', '0', 'A', '0', '0', '0.00', 'admin', '2018-07-05 11:46:44', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40209', 'Salary & Allowances', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'anwarul', '2013-12-12 11:22:58', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020200009', 'Samsung-2RX1VVFN9AQ3OC8PN8BE', 'Account Payable', '3', '1', '1', '0', 'L', '0', '0', '0.00', '1', '2019-06-18 09:39:27', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030107', 'sdsdf-531JU3H37SRQ6MW', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '0.00', '1', '2019-06-13 12:07:01', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010406', 'Security Equipment', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-03-27 10:41:30', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('305', 'Service Income', 'Income', '1', '1', '1', '0', 'I', '0', '0', '0.00', '1', '2019-05-22 13:36:02', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('20101', 'Share Capital', 'Share Holders Equity', '2', '1', '0', '1', 'L', '0', '0', '0.00', 'anwarul', '2013-12-08 19:37:32', 'admin', '2015-10-15 19:45:35');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('201', 'Share Holders Equity', 'Equity', '1', '1', '0', '0', 'L', '0', '0', '0.00', '', '0000-00-00 00:00:00', 'admin', '2015-10-15 19:43:51');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('50201', 'Short Term Borrowing', 'Current Liabilities', '2', '1', '0', '1', 'L', '0', '0', '0.00', 'admin', '2015-10-15 19:50:30', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40208', 'Software Development Expenses', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'anwarul', '2013-11-21 14:13:01', 'admin', '2015-10-15 19:02:51');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020906', 'Special Allowances', 'Salary & Allowances', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:13:13', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('50102', 'Sponsors Loan', 'Non Current Liabilities', '2', '1', '0', '1', 'L', '0', '0', '0.00', 'admin', '2015-10-15 19:48:02', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020706', 'Sports Expense', 'Miscellaneous Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'nasmud', '2016-11-09 13:16:53', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020200003', 'Square Pharma-KEDGDDOPO6VJTYU256B5', 'Account Payable', '3', '1', '1', '0', 'L', '0', '0', '0.00', '1', '2019-06-15 06:50:59', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('301', 'Store Income', 'Income', '1', '1', '0', '0', 'I', '0', '0', '0.00', '2', '2018-07-07 13:40:37', 'admin', '2015-09-17 17:00:02');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('3020501', 'Students Info. Correction Fee', 'Others (Non-Academic Income)', '3', '1', '1', '0', 'I', '0', '0', '0.00', 'admin', '2015-10-15 17:24:45', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010601', 'Sub Station', 'Electrical Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-03-27 10:44:11', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('50205', 'Supplier Ledger', 'Current Liabilities', '2', '1', '0', '1', 'L', '0', '0', '0.00', '1', '2019-10-06 06:18:49', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030106', 'tarin-TNY6WQ4SYID648C', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '0.00', '2', '2019-06-13 11:16:00', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020704', 'TB Care Expenses', 'Miscellaneous Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2016-10-08 13:03:04', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('30206', 'TB Care Income', 'Other Income', '2', '1', '1', '1', 'I', '0', '0', '0.00', 'admin', '2016-10-08 13:00:56', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020501', 'TDS on House Rent', 'House Rent', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:44:07', 'admin', '2016-09-19 14:40:16');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502030201', 'TDS Payable House Rent', 'Income Tax Payable', '4', '1', '1', '0', 'L', '0', '0', '0.00', 'admin', '2016-09-19 11:19:42', 'admin', '2016-09-28 13:19:37');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502030203', 'TDS Payable on Advertisement Bill', 'Income Tax Payable', '4', '1', '1', '0', 'L', '0', '0', '0.00', 'admin', '2016-09-28 13:20:51', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502030202', 'TDS Payable on Salary', 'Income Tax Payable', '4', '1', '1', '0', 'L', '0', '0', '0.00', 'admin', '2016-09-28 13:20:17', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020402', 'Telephone Bill', 'Utility Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:57:59', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010209', 'Telephone Set & PABX', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:51:57', 'admin', '2016-10-02 17:10:40');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102020104', 'Test', 'Advance', '4', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2018-07-05 11:42:48', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('30301', 'test in 1', 'Test Income', '2', '1', '1', '0', 'I', '0', '0', '0.00', '1', '2019-05-20 05:25:43', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('303', 'Test Income', 'Income', '1', '1', '1', '0', 'I', '0', '0', '0.00', '1', '2019-05-20 05:24:33', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030105', 'Tonu-QMY32P1IAKFL4HQ', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '0.00', '2', '2019-06-13 11:13:41', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40203', 'Travelling & Conveyance', 'Other Expenses', '2', '1', '1', '1', 'E', '0', '0', '0.00', 'admin', '2013-07-08 16:22:06', 'admin', '2015-10-15 18:45:13');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021406', 'TV', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:35:07', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010205', 'UPS', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:50:38', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40204', 'Utility Expenses', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'anwarul', '2013-07-11 16:20:24', 'admin', '2016-01-02 15:55:22');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020503', 'VAT on House Rent Exp', 'House Rent', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:49:22', 'admin', '2016-09-25 14:00:52');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020301', 'VAT Payable', 'Liabilities for Expenses', '3', '1', '0', '1', 'L', '0', '0', '0.00', 'admin', '2015-10-15 19:51:11', 'admin', '2016-09-28 13:23:53');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010409', 'Vehicle A/C', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'Zoherul', '2016-05-12 12:13:21', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010405', 'Voltage Stablizer', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-03-27 10:40:59', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010105', 'Waiting Sofa - Steel', 'Furniture & Fixturers', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:46:29', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102030101', 'Walking Customer-P3NY6D1AKZQPHB7', 'Customer Receivable', '4', '1', '1', '0', 'A', '0', '0', '0.00', '1', '2019-05-20 06:55:07', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020405', 'WASA Bill', 'Utility Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:58:51', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010402', 'Water Purifier', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-01-29 11:14:11', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020705', 'Website Development Expenses', 'Miscellaneous Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2016-10-15 12:42:47', '', '0000-00-00 00:00:00');


#
# TABLE STRUCTURE FOR: acc_transaction
#

DROP TABLE IF EXISTS `acc_transaction`;

CREATE TABLE `acc_transaction` (
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
) ENGINE=InnoDB AUTO_INCREMENT=460 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('1', 'Contra-1', 'Contra', '2019-05-20', '401', 'ssdfsdf', '1000.00', '500.00', '1', NULL, '2019-05-20 05:33:48', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('2', 'Contra-2', 'Contra', '2019-05-20', '401', 'testassf', '0.00', '1000.00', '1', NULL, '2019-05-20 05:38:13', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('3', 'Contra-3', 'Contra', '2019-05-20', '30301', 'income', '1000.00', '0.00', '1', NULL, '2019-05-20 05:39:33', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('4', 'Contra-4', 'Contra', '2019-05-20', '30301', 'dsfasdf', '1000.00', '0.00', '1', NULL, '2019-05-20 05:42:20', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('5', '75GUI54XJL', 'PR Balance', '2019-05-20', '102030101', 'Customer debit For Transaction No75GUI54XJL', '1000.00', '0.00', '1', '1', '2019-05-20 06:55:07', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('6', '75GUI54XJL', 'PR Balance', '2019-05-20', '10107', 'Inventory credit For Old sale ForP3NY6D1AKZQPHB7', '0.00', '1000.00', '1', '1', '2019-05-20 06:55:07', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('7', '2019052027', 'PR Balance', '2019-05-20', '5020200001', 'manufacturer debit For voucher no2019052027 For Rahat-RZ82QCYZ33SNX5BW4XA5', '0.00', '1500.00', '1', '1', '2019-05-20 07:27:53', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('8', '2019052027', 'PR Balance', '2019-05-20', '10107', 'Inventory credit For Purchase  For voucher no2019052027 For Rahat-RZ82QCYZ33SNX5BW4XA5', '1500.00', '0.00', '1', '1', '2019-05-20 07:27:53', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('9', '20190520080137', 'Purchase', '2019-05-20', '10107', 'Inventory Debit For Purchase No20190520080137', '5000.00', '0.00', '1', '1', '2019-05-20 08:01:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('10', '20190520080137', 'Purchase', '2019-05-20', '5020200001', 'Purchase No.20190520080137', '0.00', '5000.00', '1', '1', '2019-05-20 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('11', '20190520080137', 'Purchase', '2019-05-20', '402', 'Company Credit For Purchase No20190520080137', '0.00', '5000.00', '1', '1', '2019-05-20 08:01:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('20', '6223874951', 'INVOICE', '2019-05-20', '10107', 'Inventory credit For Invoice No6223874951', '0.00', '0.00', '1', NULL, NULL, NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('21', '6223874951', 'INVOICE', '2019-05-20', '304', 'Customer debit For Invoice No6223874951', '367.20', '0.00', '1', NULL, NULL, NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('22', '5578879796', 'INVOICE', '2019-05-20', '10107', 'Inventory credit For Invoice No5578879796', '0.00', '300.00', '1', '1', '2019-05-20 09:01:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('23', '5578879796', 'INVOICE', '2019-05-20', '102030101', 'Customer debit For Invoice No5578879796', '367.20', '0.00', '1', '1', '2019-05-20 09:01:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('24', '5578879796', 'INVOICE', '2019-05-20', '304', 'Customer debit For Invoice No5578879796', '367.20', '0.00', '1', '1', '2019-05-20 09:01:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('25', '5578879796', 'INVOICE', '2019-05-20', '102030101', 'Customer credit for Paid Amount For Invoice No5578879796', '0.00', '367.20', '1', '1', '2019-05-20 09:01:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('26', '5578879796', 'INVOICE', '2019-05-20', '1020101', 'Cash in Hand For Invoice No5578879796', '367.20', '0.00', '1', '1', '2019-05-20 09:01:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('27', '20190520095737', 'Expense', '2019-05-20', '403', 'Gass Bill Expense 20190520095737', '0.00', '500.00', '1', '1', '2019-05-20 09:57:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('28', '20190520095737', 'Expense', '2019-05-20', '1020101', 'Gass Bill Expense20190520095737', '0.00', '500.00', '1', '1', '2019-05-20 09:57:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('29', '1ZGSOEVX8V', 'Bank Transaction', '2019-05-20', '102010201', 'Opening Balance', '1000.00', '0.00', '1', '1', '2019-05-20 10:20:32', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('30', '124564', 'Bank Transaction', '2019-05-20', '102010201', 'Deposit No.124564', '0.00', '200.00', '1', '1', '2019-05-20 10:32:32', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('31', '20190521094539', 'Purchase', '2019-05-21', '10107', 'Inventory Debit For Purchase No20190521094539', '2250.00', '0.00', '1', '1', '2019-05-21 09:45:39', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('32', '20190521094539', 'Purchase', '2019-05-21', '5020200001', 'Purchase No.20190521094539', '0.00', '2250.00', '1', '1', '2019-05-21 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('33', '20190521094539', 'Purchase', '2019-05-21', '402', 'Company Credit For Purchase No20190521094539', '2250.00', '0.00', '1', '1', '2019-05-21 09:45:39', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('34', '4173683884', 'INVOICE', '2019-05-21', '10107', 'Inventory credit For Invoice No4173683884', '0.00', '290.00', '1', '1', '2019-05-21 12:20:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('35', '4173683884', 'INVOICE', '2019-05-21', '102030101', 'Customer debit For Invoice No4173683884', '359.78', '0.00', '1', '1', '2019-05-21 12:20:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('36', '4173683884', 'INVOICE', '2019-05-21', '304', 'Customer debit For Invoice No4173683884', '359.78', '0.00', '1', '1', '2019-05-21 12:20:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('37', '4173683884', 'INVOICE', '2019-05-21', '102030101', 'Customer credit for Paid Amount For Invoice No4173683884', '0.00', '1000.00', '1', '1', '2019-05-21 12:20:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('38', '4173683884', 'INVOICE', '2019-05-21', '1020101', 'Cash in Hand For Invoice No4173683884', '1000.00', '0.00', '1', '1', '2019-05-21 12:20:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('39', '4399776421', 'INVOICE', '2019-05-21', '10107', 'Inventory credit For Invoice No4399776421', '0.00', '335.00', '1', '1', '2019-05-21 12:26:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('40', '4399776421', 'INVOICE', '2019-05-21', '102030101', 'Customer debit For Invoice No4399776421', '415.84', '0.00', '1', '1', '2019-05-21 12:26:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('41', '4399776421', 'INVOICE', '2019-05-21', '304', 'Customer debit For Invoice No4399776421', '415.84', '0.00', '1', '1', '2019-05-21 12:26:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('42', '4399776421', 'INVOICE', '2019-05-21', '102030101', 'Customer credit for Paid Amount For Invoice No4399776421', '0.00', '1000.00', '1', '1', '2019-05-21 12:26:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('43', '4399776421', 'INVOICE', '2019-05-21', '1020101', 'Cash in Hand For Invoice No4399776421', '1000.00', '0.00', '1', '1', '2019-05-21 12:26:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('44', '2394811457', 'INVOICE', '2019-05-21', '10107', 'Inventory credit For Invoice No2394811457', '0.00', '300.00', '1', '1', '2019-05-21 12:31:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('45', '6757379735', 'INVOICE', '2019-05-21', '10107', 'Inventory credit For Invoice No6757379735', '0.00', '200.00', '1', '1', '2019-05-21 12:32:18', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('46', '6757379735', 'INVOICE', '2019-05-21', '102030101', 'Customer debit For Invoice No6757379735', '254.14', '0.00', '1', '1', '2019-05-21 12:32:18', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('47', '6757379735', 'INVOICE', '2019-05-21', '304', 'Customer debit For Invoice No6757379735', '0.00', '254.14', '1', '1', '2019-05-21 12:32:18', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('48', '6757379735', 'INVOICE', '2019-05-21', '102030101', 'Customer credit for Paid Amount For Invoice No6757379735', '0.00', '396.96', '1', '1', '2019-05-21 12:32:18', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('49', '6757379735', 'INVOICE', '2019-05-21', '1020101', 'Cash in Hand For Invoice No6757379735', '396.96', '0.00', '1', '1', '2019-05-21 12:32:18', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('75', '9755728113', 'INVOICE', '2019-05-22', '304', 'Customer debit For Invoice No9755728113', '0.00', '450.01', '1', '1', '2019-05-22 12:51:13', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('76', '9755728113', 'INVOICE', '2019-05-22', '10107', 'Inventory credit For Invoice No9755728113', '0.00', '335.00', '1', '1', '2019-05-22 12:51:13', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('77', '9755728113', 'INVOICE', '2019-05-22', '102030101', 'Customer debit For Invoice No9755728113', '450.01', '0.00', '1', '1', '2019-05-22 12:51:13', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('78', '9755728113', 'INVOICE', '2019-05-22', '304', 'Customer debit For Invoice No9755728113', '450.01', '0.00', '1', '1', '2019-05-22 12:51:13', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('79', '9755728113', 'INVOICE', '2019-05-22', '102030101', 'Customer credit for Paid Amount For Invoice No9755728113', '0.00', '450.01', '1', '1', '2019-05-22 12:51:13', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('80', '9755728113', 'INVOICE', '2019-05-22', '1020101', 'Cash in Hand For Invoice No9755728113', '450.01', '0.00', '1', '1', '2019-05-22 12:51:13', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('81', 'serv-20190522014117', 'SERVICE', '2019-05-22', '305', 'Service Income For SERVICE Noserv-20190522014117', '63.54', '0.00', '1', '1', '2019-05-22 13:41:17', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('82', 'serv-20190522014209', 'SERVICE', '2019-05-22', '305', 'Service Income For SERVICE Noserv-20190522014209', '63.54', '0.00', '1', '1', '2019-05-22 13:42:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('83', 'serv-20190522014405', 'SERVICE', '2019-05-22', '305', 'Service Income For SERVICE Noserv-20190522014405', '211.78', '0.00', '1', '1', '2019-05-22 13:44:05', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('84', 'serv-20190522014512', 'SERVICE', '2019-05-22', '305', 'Service Income For SERVICE Noserv-20190522014512', '211.78', '0.00', '1', '1', '2019-05-22 13:45:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('85', 'serv-20190522014512', 'SERVICE', '2019-05-22', '102030102', 'Customer debit For service Noserv-20190522014512', '211.78', '0.00', '1', '1', '2019-05-22 13:45:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('86', 'serv-20190522014512', 'SERVICE', '2019-05-22', '102030102', 'Customer credit for Paid Amount For Service Noserv-20190522014512', '0.00', '211.78', '1', '1', '2019-05-22 13:45:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('87', 'serv-20190522014512', 'SERVICE', '2019-05-22', '1020101', 'Cash in Hand For SERVICE Noserv-20190522014512', '211.78', '0.00', '1', '1', '2019-05-22 13:45:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('88', 'May 2019', 'Salary', '2019-05-22', '5020401', 'Employee Salary Generate Month ofMay 2019', '0.00', '3.76', '1', '1', '2019-05-22 14:00:17', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('91', 'May 2019', 'Salary', '2019-05-23', '5020401', 'Employee Salary Generate Month ofMay 2019', '0.00', '11.29', '1', '1', '2019-05-23 05:57:14', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('92', '1', 'Salary', '2019-05-23', '1020101', 'Cash in hand Credit For Employee Salary for May 2019', '0.00', '11.29', '1', 'Admin User', '2019-05-23 05:57:44', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('93', '1', 'Salary', '2019-05-23', '404', 'Salary paid ForMay 2019', '11.29', '0.00', '1', 'Admin User', '2019-05-23 05:57:44', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('94', '1', 'Salary', '2019-05-23', '5020401', 'Salary paid ForMay 2019', '11.29', '0.00', '1', 'Admin User', '2019-05-23 05:57:44', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('95', '5161369973', 'INVOICE', '2019-05-23', '10107', 'Inventory credit For Invoice No5161369973', '0.00', '200.00', '1', '1', '2019-05-23 07:04:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('96', '5161369973', 'INVOICE', '2019-05-23', '102030103', 'Customer debit For Invoice No5161369973', '240.00', '0.00', '1', '1', '2019-05-23 07:04:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('97', '5161369973', 'INVOICE', '2019-05-23', '304', 'Customer debit For Invoice No5161369973', '0.00', '240.00', '1', '1', '2019-05-23 07:04:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('98', '5161369973', 'INVOICE', '2019-05-23', '102030103', 'Customer credit for Paid Amount For Invoice No5161369973', '0.00', '240.00', '1', '1', '2019-05-23 07:04:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('99', '5161369973', 'INVOICE', '2019-05-23', '102010201', 'Paid amount for5161369973', '240.00', '0.00', '1', '1', '2019-05-23 07:04:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('100', '6914845124', 'INVOICE', '2019-05-23', '10107', 'Inventory credit For Invoice No6914845124', '0.00', '100.00', '1', '1', '2019-05-23 07:42:39', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('101', '6914845124', 'INVOICE', '2019-05-23', '102030103', 'Customer debit For Invoice No6914845124', '120.00', '0.00', '1', '1', '2019-05-23 07:42:39', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('102', '6914845124', 'INVOICE', '2019-05-23', '304', 'Customer debit For Invoice No6914845124', '0.00', '120.00', '1', '1', '2019-05-23 07:42:39', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('103', '6914845124', 'INVOICE', '2019-05-23', '102030103', 'Customer credit for Paid Amount For Invoice No6914845124', '0.00', '120.00', '1', '1', '2019-05-23 07:42:39', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('104', '6914845124', 'INVOICE', '2019-05-23', '1020101', 'Cash in Hand For Invoice No6914845124', '120.00', '0.00', '1', '1', '2019-05-23 07:42:39', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('105', '4258396635', 'INVOICE', '2019-05-25', '10107', 'Inventory credit For Invoice No4258396635', '0.00', '500.00', '1', '1', '2019-05-25 06:37:11', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('106', '4258396635', 'INVOICE', '2019-05-25', '102030103', 'Customer debit For Invoice No4258396635', '600.00', '0.00', '1', '1', '2019-05-25 06:37:11', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('107', '4258396635', 'INVOICE', '2019-05-25', '304', 'Customer debit For Invoice No4258396635', '0.00', '600.00', '1', '1', '2019-05-25 06:37:11', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('108', '4258396635', 'INVOICE', '2019-05-25', '102030103', 'Customer credit for Paid Amount For Invoice No4258396635', '0.00', '300.00', '1', '1', '2019-05-25 06:37:11', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('109', '4258396635', 'INVOICE', '2019-05-25', '1020101', 'Cash in Hand For Invoice No4258396635', '300.00', '0.00', '1', '1', '2019-05-25 06:37:11', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('110', 'CR-1', 'CR', '2019-05-25', '102030104', '', '0.00', '500.00', '1', '1', '2019-05-25 13:42:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('111', 'CR-1', 'CR', '2019-05-25', '1020101', 'Cash in Hand For Voucher NoCR-1', '500.00', '0.00', '1', '1', '2019-05-25 13:42:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('112', 'CR-1', 'CR', '2019-05-25', '102030104', '', '0.00', '500.00', '1', '1', '2019-05-25 13:44:06', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('113', 'CR-1', 'CR', '2019-05-25', '1020101', 'Cash in Hand For Voucher NoCR-1', '500.00', '0.00', '1', '1', '2019-05-25 13:44:06', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('114', 'PM-1', 'PM', '2019-05-29', '5020200001', 'sdfsdf', '100.00', '0.00', '1', '1', '2019-05-29 05:08:34', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('115', 'PM-1', 'PM', '2019-05-29', '1020101', 'Cash in Hand For Voucher NoPM-1', '0.00', '100.00', '1', '1', '2019-05-29 05:08:34', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('116', '1', 'Assets', '2019-05-29', '10107', 'Inventory Debit For Purchase Assets Purchase No1', '0.00', '0.00', '1', '1', '2019-05-29 05:27:20', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('117', '2', 'Assets', '2019-05-29', '10107', 'Inventory Debit For Purchase Assets Purchase No2', '0.00', '1500.00', '1', '1', '2019-05-29 05:29:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('118', '2', 'Assets', '2019-05-29', '5020200001', 'Purchase Assets Purchase No.2', '0.00', '1500.00', '1', '1', '2019-05-29 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('119', '2', 'Assets', '2019-05-29', '10107', 'Inventory Debit For Purchase Assets Purchase No2', '1500.00', '0.00', '1', '1', '2019-05-29 05:29:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('120', '2', 'Purcahse Assets', '2019-05-29', '5020200001', 'Purchase Assets Purchase No.2', '1500.00', '0.00', '1', '1', '2019-05-29 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('121', '2', 'Purcahse Assets', '2019-05-29', '102010201', 'Fixed assets purchase', '0.00', '1500.00', '1', '1', '2019-05-29 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('122', '2', 'Purcahse Assets', '2019-05-29', '1020101', 'Cash in Hand For Voucher No2', '0.00', '1500.00', '1', '1', '2019-05-29 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('123', '3', 'Assets', '2019-05-29', '10107', 'Inventory Debit For Purchase Assets Purchase No3', '0.00', '2500.00', '1', '1', '2019-05-29 06:36:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('124', '3', 'Assets', '2019-05-29', '5020200001', 'Purchase Assets Purchase No.3', '0.00', '2500.00', '1', '1', '2019-05-29 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('125', '3', 'Assets', '2019-05-29', '10107', 'Inventory Debit For Purchase Assets Purchase No3', '2500.00', '0.00', '1', '1', '2019-05-29 06:36:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('126', '3', 'Purcahse Assets', '2019-05-29', '5020200001', 'Purchase Assets Purchase No.3', '2500.00', '0.00', '1', '1', '2019-05-29 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('127', '3', 'Purcahse Assets', '2019-05-29', '102010201', 'Fixed assets purchase', '0.00', '2500.00', '1', '1', '2019-05-29 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('128', '3', 'Purcahse Assets', '2019-05-29', '1020101', 'Cash in Hand For Voucher No3', '0.00', '2500.00', '1', '1', '2019-05-29 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('129', '5', 'Purcahse Assets', '2019-05-29', '405', 'Purchase Assets Purchase No.5', '2500.00', '0.00', '1', '1', '2019-05-29 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('130', '5', 'Assets', '2019-05-29', '10107', 'Inventory Debit For Purchase Assets Purchase No5', '0.00', '2500.00', '1', '1', '2019-05-29 06:40:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('131', '5', 'Assets', '2019-05-29', '5020200001', 'Purchase Assets Purchase No.5', '0.00', '2500.00', '1', '1', '2019-05-29 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('132', '5', 'Assets', '2019-05-29', '10107', 'Inventory Debit For Purchase Assets Purchase No5', '2500.00', '0.00', '1', '1', '2019-05-29 06:40:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('133', '5', 'Purcahse Assets', '2019-05-29', '5020200001', 'Purchase Assets Purchase No.5', '2500.00', '0.00', '1', '1', '2019-05-29 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('134', '5', 'Purcahse Assets', '2019-05-29', '1020101', 'Cash in Hand For Voucher No5', '0.00', '2500.00', '1', '1', '2019-05-29 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('135', '5628231696', 'INVOICE', '2019-05-30', '10107', 'Inventory credit For Invoice No5628231696', '0.00', '145.00', '1', '1', '2019-05-30 07:07:01', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('136', '5628231696', 'INVOICE', '2019-05-30', '102030103', 'Customer debit For Invoice No5628231696', '170.00', '0.00', '1', '1', '2019-05-30 07:07:01', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('137', '5628231696', 'INVOICE', '2019-05-30', '304', 'Customer debit For Invoice No5628231696', '0.00', '170.00', '1', '1', '2019-05-30 07:07:01', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('138', '5628231696', 'INVOICE', '2019-05-30', '102030103', 'Customer credit for Paid Amount For Invoice No5628231696', '0.00', '400.00', '1', '1', '2019-05-30 07:07:01', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('139', '5628231696', 'INVOICE', '2019-05-30', '1020101', 'Cash in Hand For Invoice No5628231696', '400.00', '0.00', '1', '1', '2019-05-30 07:07:01', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('140', '8915554399', 'INVOICE', '2019-05-30', '10107', 'Inventory credit For Invoice No8915554399', '0.00', '20.00', '1', '1', '2019-05-30 07:25:40', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('141', '8915554399', 'INVOICE', '2019-05-30', '304', 'Customer debit For Invoice No8915554399', '0.00', '31.76', '1', '1', '2019-05-30 07:25:40', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('142', '8915554399', 'INVOICE', '2019-05-30', '102010201', 'Paid amount for Invoice No 8915554399', '31.76', '0.00', '1', '1', '2019-05-30 07:25:40', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('143', '2636312184', 'INVOICE', '2019-05-30', '10107', 'Inventory credit For Invoice No2636312184', '0.00', '20.00', '1', '1', '2019-05-30 07:27:27', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('144', '7337717641', 'INVOICE', '2019-05-30', '10107', 'Inventory credit For Invoice No7337717641', '0.00', '20.00', '1', '1', '2019-05-30 07:30:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('145', '7337717641', 'INVOICE', '2019-05-30', '102030103', 'Customer debit For Invoice No7337717641', '31.76', '0.00', '1', '1', '2019-05-30 07:30:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('146', '7337717641', 'INVOICE', '2019-05-30', '304', 'Customer debit For Invoice No7337717641', '0.00', '31.76', '1', '1', '2019-05-30 07:30:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('147', '7337717641', 'INVOICE', '2019-05-30', '102030103', 'Customer credit for Paid Amount For Invoice No7337717641', '0.00', '101.76', '1', '1', '2019-05-30 07:30:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('148', '7337717641', 'INVOICE', '2019-05-30', '102010201', 'Paid amount for Invoice No 7337717641', '101.76', '0.00', '1', '1', '2019-05-30 07:30:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('149', '2499261131', 'INVOICE', '2019-05-30', '10107', 'Inventory credit For Invoice No2499261131', '0.00', '20.00', '1', '1', '2019-05-30 07:33:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('150', '9923112343', 'INVOICE', '2019-05-30', '10107', 'Inventory credit For Invoice No9923112343', '0.00', '20.00', '1', '1', '2019-05-30 07:34:57', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('151', '9511562226', 'INVOICE', '2019-05-30', '10107', 'Inventory credit For Invoice No9511562226', '0.00', '20.00', '1', '1', '2019-05-30 07:36:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('152', '9511562226', 'INVOICE', '2019-05-30', '102030101', 'Customer debit For Invoice No9511562226', '31.76', '0.00', '1', '1', '2019-05-30 07:36:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('153', '9511562226', 'INVOICE', '2019-05-30', '304', 'Customer debit For Invoice No9511562226', '0.00', '31.76', '1', '1', '2019-05-30 07:36:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('154', '9511562226', 'INVOICE', '2019-05-30', '102030101', 'Customer credit for Paid Amount For Invoice No9511562226', '0.00', '31.76', '1', '1', '2019-05-30 07:36:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('155', '9511562226', 'INVOICE', '2019-05-30', '1020101', 'Cash in Hand For Invoice No9511562226', '31.76', '0.00', '1', '1', '2019-05-30 07:36:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('156', '2733838696', 'INVOICE', '2019-05-30', '10107', 'Inventory credit For Invoice No2733838696', '0.00', '20.00', '1', '1', '2019-05-30 07:46:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('157', '2733838696', 'INVOICE', '2019-05-30', '102030101', 'Customer debit For Invoice No2733838696', '31.76', '0.00', '1', '1', '2019-05-30 07:46:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('158', '2733838696', 'INVOICE', '2019-05-30', '304', 'Customer debit For Invoice No2733838696', '0.00', '31.76', '1', '1', '2019-05-30 07:46:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('159', '2733838696', 'INVOICE', '2019-05-30', '102030101', 'Customer credit for Paid Amount For Invoice No2733838696', '0.00', '31.76', '1', '1', '2019-05-30 07:46:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('160', '2733838696', 'INVOICE', '2019-05-30', '1020101', 'Cash in Hand For Invoice No2733838696', '31.76', '0.00', '1', '1', '2019-05-30 07:46:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('161', '20190530074715', 'Expense', '2019-05-30', '403', 'Gass Bill Expense 20190530074715', '0.00', '20.00', '1', '1', '2019-05-30 07:47:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('162', '20190530074715', 'Expense', '2019-05-30', '102010201', 'AB Bank Expense 20190530074715', '0.00', '20.00', '1', '1', '2019-05-30 07:47:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('163', '44444sdfsdf', 'Purchase', '2020-02-05', '10107', 'Inventory Debit For Purchase No44444sdfsdf', '9500.00', '0.00', '1', NULL, NULL, NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('164', 'CTP8RM6A4J', 'Purchase', '2020-02-04', '10107', 'Inventory Debit For Purchase NoCTP8RM6A4J', '3000.00', '0.00', '1', '1', '2019-05-30 09:06:38', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('165', '3244fsfsdfs', 'Purchase', '2020-02-04', '10107', 'Inventory Debit For Purchase No3244fsfsdfs', '25500.00', '0.00', '1', '1', '2019-05-30 09:07:30', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('166', '3244fsfsdfs', 'Purchase', '2020-02-04', '5020200001', 'Purchase No.3244fsfsdfs', '0.00', '25500.00', '1', '1', '2019-05-30 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('167', '3244fsfsdfs', 'Purchase', '2020-02-04', '402', 'Company Credit For Purchase No3244fsfsdfs', '25500.00', '0.00', '1', '1', '2019-05-30 09:07:30', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('168', '3244fsfsdfs', 'Purchase', '2020-02-04', '102010201', 'Paid amount for Purchase No 3244fsfsdfs', '25500.00', '0.00', '1', '1', '2019-05-30 09:07:30', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('169', '3244fsfsdfs', 'Purchase', '2020-02-04', '5020200001', 'Purchase No.3244fsfsdfs', '25500.00', '0.00', '1', '1', '2019-05-30 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('170', 'CR-2', 'CR', '2019-05-30', '102030104', 'sdfsdf', '0.00', '100.00', '1', '1', '2019-05-30 09:59:58', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('171', 'CR-2', 'CR', '2019-05-30', '102010201', 'Payment amount from justin tuto', '100.00', '0.00', '1', '1', '2019-05-30 09:59:58', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('172', 'PM-2', 'PM', '2019-06-12', '5020200001', 'test', '2000.00', '0.00', '1', '1', '2019-06-12 11:54:50', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('173', 'PM-2', 'PM', '2019-06-12', '1020101', 'Cash in Hand For Voucher NoPM-2', '0.00', '2000.00', '1', '1', '2019-06-12 11:54:50', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('174', 'QOT1QFRYSK', 'Bank Transaction', '2019-06-12', '102010202', 'Opening Balance', '5000.00', '0.00', '1', '1', '2019-06-12 12:09:30', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('175', 'June 2019', 'Salary', '2019-06-13', '5020401', 'Employee Salary Generate Month ofJune 2019', '0.00', '1.25', '1', '1', '2019-06-13 06:46:44', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('176', 'June 2019', 'Salary', '2019-06-13', '5020402', 'Employee Salary Generate Month ofJune 2019', '0.00', '1.32', '1', '1', '2019-06-13 06:46:44', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('177', '3', 'Salary', '2019-06-13', '1020101', 'Cash in hand Credit For Employee Salary for June 2019', '0.00', '1.32', '1', 'Admin User', '2019-06-13 06:48:57', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('178', '3', 'Salary', '2019-06-13', '404', 'Salary paid ForJune 2019', '1.32', '0.00', '1', 'Admin User', '2019-06-13 06:48:57', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('179', '3', 'Salary', '2019-06-13', '5020402', 'Salary paid ForJune 2019', '1.32', '0.00', '1', 'Admin User', '2019-06-13 06:48:57', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('180', '20190613071049', 'Expense', '2019-06-13', '406', 'Pc Expense 20190613071049', '0.00', '20000.00', '1', '1', '2019-06-13 07:10:49', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('181', '20190613071049', 'Expense', '2019-06-13', '102010202', 'City Bank Expense 20190613071049', '0.00', '20000.00', '1', '1', '2019-06-13 07:10:49', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('182', 'R3385L4MRL', 'Bank Transaction', '2019-06-13', '102010203', 'Opening Balance', '5000.00', '0.00', '1', '1', '2019-06-13 10:27:34', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('183', 'Y8VY8CKK1H', 'PR Balance', '2019-06-13', '102030106', 'Customer debit For Transaction NoY8VY8CKK1H', '600.00', '0.00', '1', '2', '2019-06-13 11:16:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('184', 'Y8VY8CKK1H', 'PR Balance', '2019-06-13', '10107', 'Inventory credit For Old sale ForTNY6WQ4SYID648C', '0.00', '600.00', '1', '2', '2019-06-13 11:16:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('185', '2019061320', 'PR Balance', '2019-06-13', '5020200002', 'manufacturer debit For voucher no2019061320 For Raisa-WA7L3RD4T5VSA6VHCTKB', '0.00', '50.00', '1', '2', '2019-06-13 11:20:51', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('186', '2019061320', 'PR Balance', '2019-06-13', '10107', 'Inventory credit For Purchase  For voucher no2019061320 For Raisa-WA7L3RD4T5VSA6VHCTKB', '50.00', '0.00', '1', '2', '2019-06-13 11:20:51', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('187', '20190615085946', 'Purchase', '2019-06-15', '10107', 'Inventory Debit For Purchase No20190615085946', '200000.00', '0.00', '1', '1', '2019-06-15 08:59:46', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('188', '20190615085946', 'Purchase', '2019-06-15', '5020200003', 'Purchase No.20190615085946', '0.00', '200000.00', '1', '1', '2019-06-15 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('189', '20190615085946', 'Purchase', '2019-06-15', '402', 'Company Credit For Purchase No20190615085946', '200000.00', '0.00', '1', '1', '2019-06-15 08:59:46', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('190', '20190615085946', 'Purchase', '2019-06-15', '1020101', 'Cash in Hand For Purchase No20190615085946', '0.00', '200000.00', '1', '1', '2019-06-15 08:59:46', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('191', '20190615085946', 'Purchase', '2019-06-15', '5020200003', 'Purchase No.20190615085946', '200000.00', '0.00', '1', '1', '2019-06-15 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('192', '20190615090737', 'Purchase', '2019-06-15', '10107', 'Inventory Debit For Purchase No20190615090737', '95000.00', '0.00', '1', '1', '2019-06-15 09:07:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('193', '20190615090737', 'Purchase', '2019-06-15', '5020200003', 'Purchase No.20190615090737', '0.00', '95000.00', '1', '1', '2019-06-15 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('194', '20190615090737', 'Purchase', '2019-06-15', '402', 'Company Credit For Purchase No20190615090737', '95000.00', '0.00', '1', '1', '2019-06-15 09:07:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('195', '20190615090737', 'Purchase', '2019-06-15', '1020101', 'Cash in Hand For Purchase No20190615090737', '0.00', '95000.00', '1', '1', '2019-06-15 09:07:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('196', '20190615090737', 'Purchase', '2019-06-15', '5020200003', 'Purchase No.20190615090737', '95000.00', '0.00', '1', '1', '2019-06-15 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('197', '20190615090929', 'Purchase', '2019-06-15', '10107', 'Inventory Debit For Purchase No20190615090929', '150000.00', '0.00', '1', '1', '2019-06-15 09:09:29', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('198', '20190615090929', 'Purchase', '2019-06-15', '5020200003', 'Purchase No.20190615090929', '0.00', '150000.00', '1', '1', '2019-06-15 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('199', '20190615090929', 'Purchase', '2019-06-15', '402', 'Company Credit For Purchase No20190615090929', '150000.00', '0.00', '1', '1', '2019-06-15 09:09:29', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('200', '20190615090929', 'Purchase', '2019-06-15', '1020101', 'Cash in Hand For Purchase No20190615090929', '0.00', '150000.00', '1', '1', '2019-06-15 09:09:29', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('201', '20190615090929', 'Purchase', '2019-06-15', '5020200003', 'Purchase No.20190615090929', '150000.00', '0.00', '1', '1', '2019-06-15 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('202', '1194992873', 'INVOICE', '2019-06-15', '10107', 'Inventory credit For Invoice No1194992873', '0.00', '6570.00', '1', '1', '2019-06-15 09:35:19', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('203', '1194992873', 'INVOICE', '2019-06-15', '304', 'Customer debit For Invoice No1194992873', '0.00', '13342.22', '1', '1', '2019-06-15 09:35:19', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('204', '1194992873', 'INVOICE', '2019-06-15', '102010203', 'Paid amount for Invoice No 1194992873', '5000.00', '0.00', '1', '1', '2019-06-15 09:35:19', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('205', '4717379265', 'INVOICE', '2019-06-15', '10107', 'Inventory credit For Invoice No4717379265', '0.00', '5330.00', '1', '1', '2019-06-15 09:57:14', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('206', '4717379265', 'INVOICE', '2019-06-15', '304', 'Customer debit For Invoice No4717379265', '0.00', '9953.72', '1', '1', '2019-06-15 09:57:14', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('207', '4717379265', 'INVOICE', '2019-06-15', '1020101', 'Cash in Hand For Invoice No4717379265', '9953.72', '0.00', '1', '1', '2019-06-15 09:57:14', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('208', '20190615124416', 'Purchase', '2019-06-15', '10107', 'Inventory Debit For Purchase No20190615124416', '2500000.00', '0.00', '1', '1', '2019-06-15 12:44:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('209', '20190615124416', 'Purchase', '2019-06-15', '5020200005', 'Purchase No.20190615124416', '0.00', '2500000.00', '1', '1', '2019-06-15 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('210', '20190615124416', 'Purchase', '2019-06-15', '402', 'Company Credit For Purchase No20190615124416', '2500000.00', '0.00', '1', '1', '2019-06-15 12:44:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('211', '20190615124416', 'Purchase', '2019-06-15', '1020101', 'Cash in Hand For Purchase No20190615124416', '0.00', '2500000.00', '1', '1', '2019-06-15 12:44:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('212', '20190615124416', 'Purchase', '2019-06-15', '5020200005', 'Purchase No.20190615124416', '2500000.00', '0.00', '1', '1', '2019-06-15 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('213', '5875993999', 'INVOICE', '2019-06-15', '10107', 'Inventory credit For Invoice No5875993999', '0.00', '50000.00', '1', '1', '2019-06-15 12:48:27', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('214', '5875993999', 'INVOICE', '2019-06-15', '304', 'Customer debit For Invoice No5875993999', '0.00', '7412.34', '1', '1', '2019-06-15 12:48:27', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('215', '5875993999', 'INVOICE', '2019-06-15', '102010203', 'Paid amount for Invoice No 5875993999', '7412.34', '0.00', '1', '1', '2019-06-15 12:48:27', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('216', '20190616074053', 'Purchase', '2019-06-16', '10107', 'Inventory Debit For Purchase No20190616074053', '10000.00', '0.00', '1', '1', '2019-06-16 07:40:53', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('217', '20190616074053', 'Purchase', '2019-06-16', '5020200003', 'Purchase No.20190616074053', '0.00', '10000.00', '1', '1', '2019-06-16 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('218', '20190616074053', 'Purchase', '2019-06-16', '402', 'Company Credit For Purchase No20190616074053', '10000.00', '0.00', '1', '1', '2019-06-16 07:40:53', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('219', '20190616074053', 'Purchase', '2019-06-16', '1020101', 'Cash in Hand For Purchase No20190616074053', '0.00', '10000.00', '1', '1', '2019-06-16 07:40:53', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('220', '20190616074053', 'Purchase', '2019-06-16', '5020200003', 'Purchase No.20190616074053', '10000.00', '0.00', '1', '1', '2019-06-16 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('221', '1337844645', 'INVOICE', '2019-06-16', '10107', 'Inventory credit For Invoice No1337844645', '0.00', '700.00', '1', '1', '2019-06-16 08:03:42', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('222', '1337844645', 'INVOICE', '2019-06-16', '304', 'Customer debit For Invoice No1337844645', '0.00', '1058.91', '1', '1', '2019-06-16 08:03:42', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('223', '1337844645', 'INVOICE', '2019-06-16', '102010203', 'Paid amount for Invoice No 1337844645', '500.00', '0.00', '1', '1', '2019-06-16 08:03:42', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('224', '2893355527', 'INVOICE', '2019-06-16', '10107', 'Inventory credit For Invoice No2893355527', '0.00', '600.00', '1', '1', '2019-06-16 08:15:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('225', '2893355527', 'INVOICE', '2019-06-16', '304', 'Customer debit For Invoice No2893355527', '0.00', '1058.91', '1', '1', '2019-06-16 08:15:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('226', '1549954566', 'INVOICE', '2019-06-16', '10107', 'Inventory credit For Invoice No1549954566', '0.00', '600.00', '1', '1', '2019-06-16 08:16:40', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('227', '1549954566', 'INVOICE', '2019-06-16', '304', 'Customer debit For Invoice No1549954566', '0.00', '1058.91', '1', '1', '2019-06-16 08:16:40', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('228', '1549954566', 'INVOICE', '2019-06-16', '102010202', 'Paid amount for Invoice No 1549954566', '1058.91', '0.00', '1', '1', '2019-06-16 08:16:40', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('229', '1716929527', 'INVOICE', '2019-06-16', '10107', 'Inventory credit For Invoice No1716929527', '0.00', '1000.00', '1', '1', '2019-06-16 10:46:54', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('230', '1716929527', 'INVOICE', '2019-06-16', '304', 'Customer debit For Invoice No1716929527', '0.00', '2117.81', '1', '1', '2019-06-16 10:46:54', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('231', '1716929527', 'INVOICE', '2019-06-16', '102010202', 'Paid amount for Invoice No 1716929527', '1000.00', '0.00', '1', '1', '2019-06-16 10:46:54', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('232', '6368534916', 'INVOICE', '2019-06-16', '10107', 'Inventory credit For Invoice No6368534916', '0.00', '2000.00', '1', '1', '2019-06-16 10:48:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('233', '6368534916', 'INVOICE', '2019-06-16', '304', 'Customer debit For Invoice No6368534916', '0.00', '4235.62', '1', '1', '2019-06-16 10:48:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('234', '6368534916', 'INVOICE', '2019-06-16', '1020101', 'Cash in Hand For Invoice No6368534916', '2000.00', '0.00', '1', '1', '2019-06-16 10:48:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('235', '9374992955', 'INVOICE', '2019-06-16', '10107', 'Inventory credit For Invoice No9374992955', '0.00', '1800.00', '1', '1', '2019-06-16 11:23:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('236', '9374992955', 'INVOICE', '2019-06-16', '304', 'Customer debit For Invoice No9374992955', '0.00', '3176.72', '1', '1', '2019-06-16 11:23:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('237', '9374992955', 'INVOICE', '2019-06-16', '102010203', 'Paid amount for Invoice No 9374992955', '2000.00', '0.00', '1', '1', '2019-06-16 11:23:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('238', '20190616121331', 'Expense', '2019-06-16', '407', 'Nasta Expense 20190616121331', '0.00', '300.00', '1', '1', '2019-06-16 12:13:31', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('239', '20190616121331', 'Expense', '2019-06-16', '1020101', 'Nasta Expense20190616121331', '0.00', '300.00', '1', '1', '2019-06-16 12:13:31', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('240', 'PM-3', 'PM', '2019-06-16', '5020200003', '', '1000.00', '0.00', '1', '1', '2019-06-16 12:16:35', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('241', 'PM-3', 'PM', '2019-06-16', '1020101', 'Cash in Hand For Voucher NoPM-3', '0.00', '1000.00', '1', '1', '2019-06-16 12:16:35', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('242', '6', 'Purcahse Assets', '2019-06-18', '405', 'Purchase Assets Purchase No.6', '0.00', '70000.00', '1', '1', '2019-06-18 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('243', '6', 'Assets', '2019-06-18', '10107', 'Inventory Debit For Purchase Assets Purchase No6', '0.00', '70000.00', '1', '1', '2019-06-18 09:42:53', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('244', '6', 'Assets', '2019-06-18', '5020200008', 'Purchase Assets Purchase No.6', '0.00', '70000.00', '1', '1', '2019-06-18 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('245', '6', 'Assets', '2019-06-18', '10107', 'Inventory Debit For Purchase Assets Purchase No6', '70000.00', '0.00', '1', '1', '2019-06-18 09:42:53', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('246', '6', 'Purcahse Assets', '2019-06-18', '5020200008', 'Purchase Assets Purchase No.6', '70000.00', '0.00', '1', '1', '2019-06-18 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('247', '6', 'Purcahse Assets', '2019-06-18', '102010203', 'Fixed assets purchase', '0.00', '70000.00', '1', '1', '2019-06-18 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('248', '6', 'Purcahse Assets', '2019-06-18', '1020101', 'Cash in Hand For Voucher No6', '0.00', '70000.00', '1', '1', '2019-06-18 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('249', 'DV-1', 'DV', '2019-06-19', '1020101', '', '0.00', '500.00', '1', NULL, '2019-06-19 07:00:34', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('250', 'DV-1', 'DV', '2019-06-19', '5020402', '', '500.00', '0.00', '1', NULL, '2019-06-19 07:00:34', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('251', 'CV-1', 'CV', '2019-06-19', '1020101', 'tgtr', '600.00', '0.00', '1', NULL, '2019-06-19 07:01:52', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('252', 'CV-1', 'CV', '2019-06-19', '5020402', 'tgtr', '0.00', '600.00', '1', NULL, '2019-06-19 07:01:52', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('253', 'CV-2', 'CV', '2019-06-19', '102010202', 'gwfgr', '400.00', '0.00', '1', NULL, '2019-06-19 07:05:14', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('254', 'CV-2', 'CV', '2019-06-19', '5020401', 'gwfgr', '0.00', '400.00', '1', NULL, '2019-06-19 07:05:14', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('255', 'DV-2', 'DV', '2019-06-19', '102010203', 'dfgf', '0.00', '4000.00', '1', NULL, '2019-06-19 07:06:34', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('256', 'DV-2', 'DV', '2019-06-19', '102010201', 'dfgf', '4000.00', '0.00', '1', NULL, '2019-06-19 07:06:34', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('257', 'Contra-5', 'Contra', '2019-06-19', '5020402', 'g', '300.00', '4000.00', '1', NULL, '2019-06-19 07:48:39', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('258', 'Journal-1', 'JV', '2019-06-19', '4020709', '', '2000.00', '0.00', '1', NULL, '2019-06-19 08:17:14', NULL, NULL, '0');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('259', 'Journal-2', 'JV', '2019-06-19', '4020403', 'rewre', '5000.00', '6000.00', '1', NULL, '2019-06-19 08:18:01', NULL, NULL, '0');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('260', 'DV-3', 'DV', '2019-06-19', '1020101', '', '0.00', '1000.00', '1', NULL, '2019-06-19 09:14:34', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('261', 'DV-3', 'DV', '2019-06-19', '102010201', '', '1000.00', '0.00', '1', NULL, '2019-06-19 09:14:34', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('262', 'CV-3', 'CV', '2019-06-19', '102010202', 'cfsf', '300.00', '0.00', '1', NULL, '2019-06-19 09:21:03', NULL, NULL, '0');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('263', 'CV-3', 'CV', '2019-06-19', '5020401', 'cfsf', '0.00', '300.00', '1', NULL, '2019-06-19 09:21:03', NULL, NULL, '0');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('264', '20190805044552', 'Purchase', '2019-08-05', '10107', 'Inventory Debit For Purchase No20190805044552', '2000.00', '0.00', '1', '1', '2019-08-05 04:45:52', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('265', '20190805044552', 'Purchase', '2019-08-05', '402', 'Company Credit For Purchase No20190805044552', '2000.00', '0.00', '1', '1', '2019-08-05 04:45:52', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('266', '20190805044552', 'Purchase', '2019-08-05', '1020101', 'Cash in Hand For Purchase No20190805044552', '0.00', '2000.00', '1', '1', '2019-08-05 04:45:52', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('267', '2357444577', 'INVOICE', '2019-09-15', '10107', 'Inventory credit For Invoice No2357444577', '0.00', '200.00', '1', '1', '2019-09-15 13:47:27', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('268', '2357444577', 'INVOICE', '2019-09-15', '304', 'Customer debit For Invoice No2357444577', '0.00', '240.00', '1', '1', '2019-09-15 13:47:27', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('269', '2357444577', 'INVOICE', '2019-09-15', '1020101', 'Cash in Hand For Invoice No2357444577', '240.00', '0.00', '1', '1', '2019-09-15 13:47:27', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('270', '4397745619', 'INVOICE', '2019-09-15', '10107', 'Inventory credit For Invoice No4397745619', '0.00', '200.00', '1', '1', '2019-09-15 13:47:41', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('271', '4397745619', 'INVOICE', '2019-09-15', '304', 'Customer debit For Invoice No4397745619', '0.00', '240.00', '1', '1', '2019-09-15 13:47:41', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('272', '4397745619', 'INVOICE', '2019-09-15', '1020101', 'Cash in Hand For Invoice No4397745619', '240.00', '0.00', '1', '1', '2019-09-15 13:47:41', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('273', '2889369457', 'INVOICE', '2019-09-15', '10107', 'Inventory credit For Invoice No2889369457', '0.00', '100.00', '1', '1', '2019-09-15 13:51:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('274', '2889369457', 'INVOICE', '2019-09-15', '304', 'Customer debit For Invoice No2889369457', '0.00', '120.00', '1', '1', '2019-09-15 13:51:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('275', '2889369457', 'INVOICE', '2019-09-15', '1020101', 'Cash in Hand For Invoice No2889369457', '120.00', '0.00', '1', '1', '2019-09-15 13:51:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('276', '3497846252', 'INVOICE', '2019-09-15', '10107', 'Inventory credit For Invoice No3497846252', '0.00', '100.00', '1', '1', '2019-09-15 13:52:01', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('277', '3497846252', 'INVOICE', '2019-09-15', '304', 'Customer debit For Invoice No3497846252', '0.00', '120.00', '1', '1', '2019-09-15 13:52:01', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('278', '3497846252', 'INVOICE', '2019-09-15', '1020101', 'Cash in Hand For Invoice No3497846252', '120.00', '0.00', '1', '1', '2019-09-15 13:52:01', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('279', '4349145515', 'INVOICE', '2019-09-18', '10107', 'Inventory credit For Invoice No4349145515', '0.00', '45.00', '1', '1', '2019-09-18 10:30:51', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('280', '4349145515', 'INVOICE', '2019-09-18', '304', 'Customer debit For Invoice No4349145515', '0.00', '50.00', '1', '1', '2019-09-18 10:30:51', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('281', '4349145515', 'INVOICE', '2019-09-18', '1020101', 'Cash in Hand For Invoice No4349145515', '50.00', '0.00', '1', '1', '2019-09-18 10:30:51', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('282', '4819859856', 'INVOICE', '2019-09-18', '10107', 'Inventory credit For Invoice No4819859856', '0.00', '30.00', '1', '1', '2019-09-18 10:39:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('283', '4819859856', 'INVOICE', '2019-09-18', '304', 'Customer debit For Invoice No4819859856', '0.00', '35.00', '1', '1', '2019-09-18 10:39:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('284', '4819859856', 'INVOICE', '2019-09-18', '1020101', 'Cash in Hand For Invoice No4819859856', '35.00', '0.00', '1', '1', '2019-09-18 10:39:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('285', '9188745284', 'INVOICE', '2019-09-18', '10107', 'Inventory credit For Invoice No9188745284', '0.00', '30.00', '1', '1', '2019-09-18 10:40:42', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('286', '9188745284', 'INVOICE', '2019-09-18', '304', 'Customer debit For Invoice No9188745284', '0.00', '35.00', '1', '1', '2019-09-18 10:40:42', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('287', '9188745284', 'INVOICE', '2019-09-18', '1020101', 'Cash in Hand For Invoice No9188745284', '35.00', '0.00', '1', '1', '2019-09-18 10:40:42', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('288', '6887248818', 'INVOICE', '2019-09-18', '10107', 'Inventory credit For Invoice No6887248818', '0.00', '60.00', '1', '1', '2019-09-18 10:46:13', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('289', '6887248818', 'INVOICE', '2019-09-18', '304', 'Customer debit For Invoice No6887248818', '0.00', '70.00', '1', '1', '2019-09-18 10:46:13', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('290', '6887248818', 'INVOICE', '2019-09-18', '1020101', 'Cash in Hand For Invoice No6887248818', '70.00', '0.00', '1', '1', '2019-09-18 10:46:13', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('291', '2556888428', 'INVOICE', '2019-09-18', '10107', 'Inventory credit For Invoice No2556888428', '0.00', '60.00', '1', '1', '2019-09-18 10:48:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('292', '2556888428', 'INVOICE', '2019-09-18', '304', 'Customer debit For Invoice No2556888428', '0.00', '70.00', '1', '1', '2019-09-18 10:48:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('293', '2556888428', 'INVOICE', '2019-09-18', '1020101', 'Cash in Hand For Invoice No2556888428', '70.00', '0.00', '1', '1', '2019-09-18 10:48:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('294', '8232565794', 'INVOICE', '2019-09-19', '10107', 'Inventory credit For Invoice No8232565794', '0.00', '60.00', '1', '1', '2019-09-19 07:23:32', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('295', '8232565794', 'INVOICE', '2019-09-19', '304', 'Customer debit For Invoice No8232565794', '0.00', '70.00', '1', '1', '2019-09-19 07:23:32', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('296', '8232565794', 'INVOICE', '2019-09-19', '1020101', 'Cash in Hand For Invoice No8232565794', '70.00', '0.00', '1', '1', '2019-09-19 07:23:32', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('297', '5816359211', 'INVOICE', '2019-09-22', '10107', 'Inventory credit For Invoice No5816359211', '0.00', '160.00', '1', '1', '2019-09-22 06:20:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('298', '5816359211', 'INVOICE', '2019-09-22', '304', 'Customer debit For Invoice No5816359211', '0.00', '240.00', '1', '1', '2019-09-22 06:20:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('299', '5816359211', 'INVOICE', '2019-09-22', '1020101', 'Cash in Hand For Invoice No5816359211', '240.00', '0.00', '1', '1', '2019-09-22 06:20:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('300', '7589434143', 'INVOICE', '2019-09-22', '10107', 'Inventory credit For Invoice No7589434143', '0.00', '30.00', '1', '1', '2019-09-22 06:21:18', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('301', '7589434143', 'INVOICE', '2019-09-22', '304', 'Customer debit For Invoice No7589434143', '0.00', '35.00', '1', '1', '2019-09-22 06:21:18', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('302', '7589434143', 'INVOICE', '2019-09-22', '1020101', 'Cash in Hand For Invoice No7589434143', '35.00', '0.00', '1', '1', '2019-09-22 06:21:18', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('303', '2457865981', 'INVOICE', '2019-09-22', '10107', 'Inventory credit For Invoice No2457865981', '0.00', '100.00', '1', '1', '2019-09-22 06:28:27', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('304', '1984311715', 'INVOICE', '2019-09-22', '10107', 'Inventory credit For Invoice No1984311715', '0.00', '100.00', '1', '1', '2019-09-22 06:28:34', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('305', '3246988817', 'INVOICE', '2019-09-22', '10107', 'Inventory credit For Invoice No3246988817', '0.00', '0.00', '1', '1', '2019-09-22 06:42:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('306', '3246988817', 'INVOICE', '2019-09-22', '304', 'Customer debit For Invoice No3246988817', '0.00', '0.00', '1', '1', '2019-09-22 06:42:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('307', '3246988817', 'INVOICE', '2019-09-22', '1020101', 'Cash in Hand For Invoice No3246988817', '0.00', '0.00', '1', '1', '2019-09-22 06:42:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('308', '6342619132', 'INVOICE', '2019-09-22', '10107', 'Inventory credit For Invoice No6342619132', '0.00', '300.00', '1', '1', '2019-09-22 06:45:25', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('309', '6342619132', 'INVOICE', '2019-09-22', '304', 'Customer debit For Invoice No6342619132', '0.00', '500.00', '1', '1', '2019-09-22 06:45:25', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('310', '6342619132', 'INVOICE', '2019-09-22', '1020101', 'Cash in Hand For Invoice No6342619132', '500.00', '0.00', '1', '1', '2019-09-22 06:45:25', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('311', '8274592153', 'INVOICE', '2019-09-22', '10107', 'Inventory credit For Invoice No8274592153', '0.00', '60.00', '1', '1', '2019-09-22 06:47:06', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('312', '8274592153', 'INVOICE', '2019-09-22', '304', 'Customer debit For Invoice No8274592153', '0.00', '70.00', '1', '1', '2019-09-22 06:47:06', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('313', '8274592153', 'INVOICE', '2019-09-22', '1020101', 'Cash in Hand For Invoice No8274592153', '70.00', '0.00', '1', '1', '2019-09-22 06:47:06', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('314', '3964297319', 'INVOICE', '2019-09-22', '10107', 'Inventory credit For Invoice No3964297319', '0.00', '30.00', '1', '1', '2019-09-22 06:49:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('315', '3964297319', 'INVOICE', '2019-09-22', '304', 'Customer debit For Invoice No3964297319', '0.00', '35.00', '1', '1', '2019-09-22 06:49:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('316', '3964297319', 'INVOICE', '2019-09-22', '1020101', 'Cash in Hand For Invoice No3964297319', '35.00', '0.00', '1', '1', '2019-09-22 06:49:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('317', '4849938327', 'INVOICE', '2019-09-22', '10107', 'Inventory credit For Invoice No4849938327', '0.00', '100.00', '1', '1', '2019-09-22 06:49:51', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('318', '4849938327', 'INVOICE', '2019-09-22', '304', 'Customer debit For Invoice No4849938327', '0.00', '120.00', '1', '1', '2019-09-22 06:49:51', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('319', '4849938327', 'INVOICE', '2019-09-22', '1020101', 'Cash in Hand For Invoice No4849938327', '120.00', '0.00', '1', '1', '2019-09-22 06:49:51', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('320', '4366657224', 'INVOICE', '2019-09-22', '10107', 'Inventory credit For Invoice No4366657224', '0.00', '30.00', '1', '1', '2019-09-22 06:52:31', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('321', '4366657224', 'INVOICE', '2019-09-22', '304', 'Customer debit For Invoice No4366657224', '0.00', '35.00', '1', '1', '2019-09-22 06:52:31', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('322', '4366657224', 'INVOICE', '2019-09-22', '1020101', 'Cash in Hand For Invoice No4366657224', '35.00', '0.00', '1', '1', '2019-09-22 06:52:31', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('323', '6572548126', 'INVOICE', '2019-09-22', '10107', 'Inventory credit For Invoice No6572548126', '0.00', '100.00', '1', '1', '2019-09-22 06:55:32', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('324', '6572548126', 'INVOICE', '2019-09-22', '102030101', 'Customer debit For Invoice No6572548126', '120.00', '0.00', '1', '1', '2019-09-22 06:55:32', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('325', '6572548126', 'INVOICE', '2019-09-22', '304', 'Customer debit For Invoice No6572548126', '0.00', '120.00', '1', '1', '2019-09-22 06:55:32', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('326', '6572548126', 'INVOICE', '2019-09-22', '102030101', 'Customer credit for Paid Amount For Invoice No6572548126', '0.00', '120.00', '1', '1', '2019-09-22 06:55:32', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('327', '6572548126', 'INVOICE', '2019-09-22', '1020101', 'Cash in Hand For Invoice No6572548126', '120.00', '0.00', '1', '1', '2019-09-22 06:55:32', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('328', '7476575834', 'INVOICE', '2019-09-25', '10107', 'Inventory credit For Invoice No7476575834', '0.00', '30.00', '1', '1', '2019-09-25 13:47:36', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('329', '7476575834', 'INVOICE', '2019-09-25', '304', 'Customer debit For Invoice No7476575834', '0.00', '35.00', '1', '1', '2019-09-25 13:47:36', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('330', '7476575834', 'INVOICE', '2019-09-25', '1020101', 'Cash in Hand For Invoice No7476575834', '35.00', '0.00', '1', '1', '2019-09-25 13:47:36', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('331', '2546488688', 'INVOICE', '2019-09-25', '10107', 'Inventory credit For Invoice No2546488688', '0.00', '0.00', '1', '1', '2019-09-25 13:48:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('332', '2546488688', 'INVOICE', '2019-09-25', '304', 'Customer debit For Invoice No2546488688', '0.00', '0.00', '1', '1', '2019-09-25 13:48:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('333', '2546488688', 'INVOICE', '2019-09-25', '1020101', 'Cash in Hand For Invoice No2546488688', '0.00', '0.00', '1', '1', '2019-09-25 13:48:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('334', '2498163329', 'INVOICE', '2019-09-25', '10107', 'Inventory credit For Invoice No2498163329', '0.00', '40.00', '1', '1', '2019-09-25 13:49:05', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('335', '2498163329', 'INVOICE', '2019-09-25', '102030101', 'Customer debit For Invoice No2498163329', '60.00', '0.00', '1', '1', '2019-09-25 13:49:05', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('336', '2498163329', 'INVOICE', '2019-09-25', '304', 'Customer debit For Invoice No2498163329', '0.00', '60.00', '1', '1', '2019-09-25 13:49:05', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('337', '2498163329', 'INVOICE', '2019-09-25', '102030101', 'Customer credit for Paid Amount For Invoice No2498163329', '0.00', '60.00', '1', '1', '2019-09-25 13:49:05', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('338', '2498163329', 'INVOICE', '2019-09-25', '1020101', 'Cash in Hand For Invoice No2498163329', '60.00', '0.00', '1', '1', '2019-09-25 13:49:05', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('339', '20190925143021', 'Purchase', '2019-09-25', '10107', 'Inventory Debit For Purchase No20190925143021', '6000.00', '0.00', '1', '1', '2019-09-25 14:30:21', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('340', '20190925143021', 'Purchase', '2019-09-25', '402', 'Company Credit For Purchase No20190925143021', '6000.00', '0.00', '1', '1', '2019-09-25 14:30:21', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('341', '20190925143021', 'Purchase', '2019-09-25', '1020101', 'Cash in Hand For Purchase No20190925143021', '0.00', '6000.00', '1', '1', '2019-09-25 14:30:21', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('342', '2682413866', 'INVOICE', '2019-09-25', '10107', 'Inventory credit For Invoice No2682413866', '0.00', '360.00', '1', '1', '2019-09-25 14:31:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('343', '2682413866', 'INVOICE', '2019-09-25', '304', 'Customer debit For Invoice No2682413866', '0.00', '476.51', '1', '1', '2019-09-25 14:31:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('344', '2682413866', 'INVOICE', '2019-09-25', '1020101', 'Cash in Hand For Invoice No2682413866', '476.51', '0.00', '1', '1', '2019-09-25 14:31:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('345', '9895528273', 'INVOICE', '2019-09-25', '10107', 'Inventory credit For Invoice No9895528273', '0.00', '240.00', '1', '1', '2019-09-25 14:47:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('346', '9895528273', 'INVOICE', '2019-09-25', '304', 'Customer debit For Invoice No9895528273', '0.00', '317.67', '1', '1', '2019-09-25 14:47:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('347', '9895528273', 'INVOICE', '2019-09-25', '1020101', 'Cash in Hand For Invoice No9895528273', '317.67', '0.00', '1', '1', '2019-09-25 14:47:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('348', '8225271174', 'INVOICE', '2019-09-25', '10107', 'Inventory credit For Invoice No8225271174', '0.00', '120.00', '1', '1', '2019-09-25 14:50:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('349', '8225271174', 'INVOICE', '2019-09-25', '304', 'Customer debit For Invoice No8225271174', '0.00', '157.25', '1', '1', '2019-09-25 14:50:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('350', '8225271174', 'INVOICE', '2019-09-25', '1020101', 'Cash in Hand For Invoice No8225271174', '157.25', '0.00', '1', '1', '2019-09-25 14:50:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('351', '4364231861', 'INVOICE', '2019-09-25', '10107', 'Inventory credit For Invoice No4364231861', '0.00', '120.00', '1', '1', '2019-09-25 14:51:27', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('352', '4364231861', 'INVOICE', '2019-09-25', '304', 'Customer debit For Invoice No4364231861', '0.00', '157.25', '1', '1', '2019-09-25 14:51:27', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('353', '4364231861', 'INVOICE', '2019-09-25', '1020101', 'Cash in Hand For Invoice No4364231861', '157.25', '0.00', '1', '1', '2019-09-25 14:51:27', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('354', '9375835462', 'INVOICE', '2019-09-26', '10107', 'Inventory credit For Invoice No9375835462', '0.00', '40.00', '1', '1', '2019-09-26 06:28:19', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('355', '9375835462', 'INVOICE', '2019-09-26', '102030101', 'Customer debit For Invoice No9375835462', '63.54', '0.00', '1', '1', '2019-09-26 06:28:19', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('356', '9375835462', 'INVOICE', '2019-09-26', '304', 'Customer debit For Invoice No9375835462', '0.00', '63.54', '1', '1', '2019-09-26 06:28:19', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('357', '9375835462', 'INVOICE', '2019-09-26', '102030101', 'Customer credit for Paid Amount For Invoice No9375835462', '0.00', '63.54', '1', '1', '2019-09-26 06:28:19', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('358', '9375835462', 'INVOICE', '2019-09-26', '1020101', 'Cash in Hand For Invoice No9375835462', '63.54', '0.00', '1', '1', '2019-09-26 06:28:19', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('359', '7478513273', 'INVOICE', '2019-09-26', '10107', 'Inventory credit For Invoice No7478513273', '0.00', '60.00', '1', '1', '2019-09-26 06:42:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('360', '7478513273', 'INVOICE', '2019-09-26', '102030101', 'Customer debit For Invoice No7478513273', '91.76', '0.00', '1', '1', '2019-09-26 06:42:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('361', '7478513273', 'INVOICE', '2019-09-26', '304', 'Customer debit For Invoice No7478513273', '0.00', '91.76', '1', '1', '2019-09-26 06:42:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('362', '7478513273', 'INVOICE', '2019-09-26', '102030101', 'Customer credit for Paid Amount For Invoice No7478513273', '0.00', '91.76', '1', '1', '2019-09-26 06:42:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('363', '7478513273', 'INVOICE', '2019-09-26', '1020101', 'Cash in Hand For Invoice No7478513273', '91.76', '0.00', '1', '1', '2019-09-26 06:42:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('364', '7949351373', 'INVOICE', '2019-09-26', '10107', 'Inventory credit For Invoice No7949351373', '0.00', '200.00', '1', '1', '2019-09-26 08:57:53', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('365', '9537276848', 'INVOICE', '2019-09-26', '10107', 'Inventory credit For Invoice No9537276848', '0.00', '20.00', '1', '1', '2019-09-26 08:58:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('366', '3439327186', 'INVOICE', '2019-09-26', '10107', 'Inventory credit For Invoice No3439327186', '0.00', '20.00', '1', '1', '2019-09-26 08:58:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('367', '6417174793', 'INVOICE', '2019-09-26', '10107', 'Inventory credit For Invoice No6417174793', '0.00', '200.00', '1', '1', '2019-09-26 08:59:01', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('368', '3451623335', 'INVOICE', '2019-09-26', '10107', 'Inventory credit For Invoice No3451623335', '0.00', '60.00', '1', '1', '2019-09-26 08:59:18', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('369', '5136766345', 'INVOICE', '2019-09-26', '10107', 'Inventory credit For Invoice No5136766345', '0.00', '20.00', '1', '1', '2019-09-26 08:59:53', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('370', '5136766345', 'INVOICE', '2019-09-26', '102030101', 'Customer debit For Invoice No5136766345', '31.76', '0.00', '1', '1', '2019-09-26 08:59:53', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('371', '5136766345', 'INVOICE', '2019-09-26', '304', 'Customer debit For Invoice No5136766345', '0.00', '31.76', '1', '1', '2019-09-26 08:59:53', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('372', '5136766345', 'INVOICE', '2019-09-26', '102030101', 'Customer credit for Paid Amount For Invoice No5136766345', '0.00', '31.76', '1', '1', '2019-09-26 08:59:53', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('373', '5136766345', 'INVOICE', '2019-09-26', '1020101', 'Cash in Hand For Invoice No5136766345', '31.76', '0.00', '1', '1', '2019-09-26 08:59:53', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('374', '2527777432', 'INVOICE', '2019-09-26', '10107', 'Inventory credit For Invoice No2527777432', '0.00', '60.00', '1', '1', '2019-09-26 09:01:29', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('375', '4232219582', 'INVOICE', '2019-09-26', '10107', 'Inventory credit For Invoice No4232219582', '0.00', '60.00', '1', '1', '2019-09-26 09:01:31', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('376', '8469112396', 'INVOICE', '2019-09-26', '10107', 'Inventory credit For Invoice No8469112396', '0.00', '30.00', '1', '1', '2019-09-26 09:18:51', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('377', '7683384435', 'INVOICE', '2019-09-26', '10107', 'Inventory credit For Invoice No7683384435', '0.00', '30.00', '1', '1', '2019-09-26 09:19:20', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('378', '7683384435', 'INVOICE', '2019-09-26', '304', 'Customer debit For Invoice No7683384435', '0.00', '35.00', '1', '1', '2019-09-26 09:19:20', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('379', '7683384435', 'INVOICE', '2019-09-26', '1020101', 'Cash in Hand For Invoice No7683384435', '35.00', '0.00', '1', '1', '2019-09-26 09:19:20', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('380', '2259793278', 'INVOICE', '2019-09-26', '10107', 'Inventory credit For Invoice No2259793278', '0.00', '200.00', '1', '1', '2019-09-26 09:19:46', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('381', '2259793278', 'INVOICE', '2019-09-26', '304', 'Customer debit For Invoice No2259793278', '0.00', '240.00', '1', '1', '2019-09-26 09:19:46', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('382', '2259793278', 'INVOICE', '2019-09-26', '1020101', 'Cash in Hand For Invoice No2259793278', '240.00', '0.00', '1', '1', '2019-09-26 09:19:46', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('383', '1498336438', 'INVOICE', '2019-09-26', '10107', 'Inventory credit For Invoice No1498336438', '0.00', '0.00', '1', '1', '2019-09-26 10:23:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('384', '1498336438', 'INVOICE', '2019-09-26', '304', 'Customer debit For Invoice No1498336438', '0.00', '0.00', '1', '1', '2019-09-26 10:23:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('385', '1498336438', 'INVOICE', '2019-09-26', '1020101', 'Cash in Hand For Invoice No1498336438', '0.00', '0.00', '1', '1', '2019-09-26 10:23:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('386', '3569712289', 'INVOICE', '2019-09-26', '10107', 'Inventory credit For Invoice No3569712289', '0.00', '30.00', '1', '1', '2019-09-26 10:24:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('387', '3569712289', 'INVOICE', '2019-09-26', '102030101', 'Customer debit For Invoice No3569712289', '35.00', '0.00', '1', '1', '2019-09-26 10:24:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('388', '3569712289', 'INVOICE', '2019-09-26', '304', 'Customer debit For Invoice No3569712289', '0.00', '35.00', '1', '1', '2019-09-26 10:24:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('389', '3569712289', 'INVOICE', '2019-09-26', '102030101', 'Customer credit for Paid Amount For Invoice No3569712289', '0.00', '35.00', '1', '1', '2019-09-26 10:24:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('390', '3569712289', 'INVOICE', '2019-09-26', '1020101', 'Cash in Hand For Invoice No3569712289', '35.00', '0.00', '1', '1', '2019-09-26 10:24:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('391', 'October 2019', 'Salary', '2019-10-05', '5020401', 'Employee Salary Generate Month ofOctober 2019', '0.00', '0.00', '1', '1', '2019-10-05 14:44:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('392', 'October 2019', 'Salary', '2019-10-05', '5020402', 'Employee Salary Generate Month ofOctober 2019', '0.00', '0.00', '1', '1', '2019-10-05 14:44:16', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('393', '0', 'Purcahse Assets', '2019-10-06', '405', 'Purchase Assets Purchase No.0', '0.00', '120.00', '1', '1', '2019-10-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('394', '0', 'Assets', '2019-10-06', '10107', 'Inventory Debit For Purchase Assets Purchase No0', '0.00', '120.00', '1', '1', '2019-10-06 06:39:40', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('395', '0', 'Assets', '2019-10-06', '5020501', 'Purchase Assets Purchase No.0', '0.00', '120.00', '1', '1', '2019-10-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('396', '0', 'Assets', '2019-10-06', '10107', 'Inventory Debit For Purchase Assets Purchase No0', '120.00', '0.00', '1', '1', '2019-10-06 06:39:40', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('397', '0', 'Purcahse Assets', '2019-10-06', '5020501', 'Purchase Assets Purchase No.0', '120.00', '0.00', '1', '1', '2019-10-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('398', '0', 'Purcahse Assets', '2019-10-06', '1020101', 'Cash in Hand For Voucher No0', '0.00', '120.00', '1', '1', '2019-10-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('399', '7', 'Purcahse Assets', '2019-10-06', '405', 'Purchase Assets Purchase No.7', '0.00', '240.00', '1', '1', '2019-10-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('400', '7', 'Assets', '2019-10-06', '10107', 'Inventory Debit For Purchase Assets Purchase No7', '0.00', '240.00', '1', '1', '2019-10-06 06:48:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('401', '7', 'Assets', '2019-10-06', '5020501', 'Purchase Assets Purchase No.7', '0.00', '240.00', '1', '1', '2019-10-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('402', '7', 'Assets', '2019-10-06', '10107', 'Inventory Debit For Purchase Assets Purchase No7', '240.00', '0.00', '1', '1', '2019-10-06 06:48:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('403', '7', 'Purcahse Assets', '2019-10-06', '5020501', 'Purchase Assets Purchase No.7', '240.00', '0.00', '1', '1', '2019-10-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('404', '7', 'Purcahse Assets', '2019-10-06', '1020101', 'Cash in Hand For Voucher No7', '0.00', '240.00', '1', '1', '2019-10-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('405', 'PS-1', 'PM', '2019-10-06', '5020501', 'some text here', '100.00', '0.00', '1', '1', '2019-10-06 07:51:26', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('406', 'PS-1', 'PM', '2019-10-06', '1020101', 'Cash in Hand For Voucher NoPS-1', '0.00', '100.00', '1', '1', '2019-10-06 07:51:26', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('407', '20191006080228', 'Purchase', '2019-10-06', '10107', 'Inventory Debit For Purchase No20191006080228', '840.00', '0.00', '1', '1', '2019-10-06 08:02:28', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('408', '20191006080314', 'Purchase', '2019-10-06', '10107', 'Inventory Debit For Purchase No20191006080314', '80.00', '0.00', '1', '1', '2019-10-06 08:03:14', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('409', '20191006080439', 'Purchase', '2019-10-06', '10107', 'Inventory Debit For Purchase No20191006080439', '2000.00', '0.00', '1', '1', '2019-10-06 08:04:39', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('410', '20191006080439', 'Purchase', '2019-10-06', '5020200003', 'Purchase No.20191006080439', '0.00', '2000.00', '1', '1', '2019-10-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('411', '20191006080439', 'Purchase', '2019-10-06', '402', 'Company Credit For Purchase No20191006080439', '2000.00', '0.00', '1', '1', '2019-10-06 08:04:39', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('412', '20191006080439', 'Purchase', '2019-10-06', '1020101', 'Cash in Hand For Purchase No20191006080439', '0.00', '2000.00', '1', '1', '2019-10-06 08:04:39', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('413', '20191006080439', 'Purchase', '2019-10-06', '5020200003', 'Purchase No.20191006080439', '2000.00', '0.00', '1', '1', '2019-10-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('414', '20191006110842', 'Purchase', '2019-10-06', '10107', 'Inventory Debit For Purchase No20191006110842', '5000.00', '0.00', '1', '1', '2019-10-06 11:08:42', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('415', '20191006110842', 'Purchase', '2019-10-06', '5020200010', 'Purchase No.20191006110842', '0.00', '5000.00', '1', '1', '2019-10-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('416', '20191006110842', 'Purchase', '2019-10-06', '402', 'Company Credit For Purchase No20191006110842', '5000.00', '0.00', '1', '1', '2019-10-06 11:08:42', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('417', '20191006110842', 'Purchase', '2019-10-06', '1020101', 'Cash in Hand For Purchase No20191006110842', '0.00', '5000.00', '1', '1', '2019-10-06 11:08:42', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('418', '20191006110842', 'Purchase', '2019-10-06', '5020200010', 'Purchase No.20191006110842', '5000.00', '0.00', '1', '1', '2019-10-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('419', '20191006110842', 'Return', '2019-10-06', '5020200010', 'manufacturer .Kamrul Hasan', '0.00', '1000.00', '1', '1', '2019-10-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('420', '20191006110842', 'Return', '2019-10-06', '5020200010', 'manufacturer Return to .Kamrul Hasan', '0.00', '1000.00', '1', '1', '2019-10-06 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('421', '8788656989', 'INVOICE', '2019-10-06', '10107', 'Inventory credit For Invoice No8788656989', '0.00', '60.00', '1', '1', '2019-10-06 12:55:24', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('422', '8788656989', 'INVOICE', '2019-10-06', '304', 'Customer debit For Invoice No8788656989', '0.00', '70.00', '1', '1', '2019-10-06 12:55:24', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('423', '8788656989', 'INVOICE', '2019-10-06', '1020101', 'Cash in Hand For Invoice No8788656989', '70.00', '0.00', '1', '1', '2019-10-06 12:55:24', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('424', '4572666298', 'INVOICE', '2019-10-06', '10107', 'Inventory credit For Invoice No4572666298', '0.00', '200.00', '1', '1', '2019-10-06 12:56:19', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('425', '4572666298', 'INVOICE', '2019-10-06', '304', 'Customer debit For Invoice No4572666298', '0.00', '240.00', '1', '1', '2019-10-06 12:56:19', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('426', '4572666298', 'INVOICE', '2019-10-06', '1020101', 'Cash in Hand For Invoice No4572666298', '250.00', '0.00', '1', '1', '2019-10-06 12:56:19', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('427', '1928262497', 'INVOICE', '2019-10-06', '10107', 'Inventory credit For Invoice No1928262497', '0.00', '200.00', '1', '1', '2019-10-06 12:57:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('428', '1928262497', 'INVOICE', '2019-10-06', '102030101', 'Customer debit For Invoice No1928262497', '240.00', '0.00', '1', '1', '2019-10-06 12:57:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('429', '1928262497', 'INVOICE', '2019-10-06', '304', 'Customer debit For Invoice No1928262497', '0.00', '240.00', '1', '1', '2019-10-06 12:57:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('430', '1928262497', 'INVOICE', '2019-10-06', '102030101', 'Customer credit for Paid Amount For Invoice No1928262497', '0.00', '250.00', '1', '1', '2019-10-06 12:57:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('431', '1928262497', 'INVOICE', '2019-10-06', '1020101', 'Cash in Hand For Invoice No1928262497', '250.00', '0.00', '1', '1', '2019-10-06 12:57:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('432', '20191010064228', 'Purchase', '2019-10-10', '10107', 'Inventory Debit For Purchase No20191010064228', '2000.00', '0.00', '1', '1', '2019-10-10 06:42:28', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('433', '20191010064228', 'Purchase', '2019-10-10', '5020200011', 'Purchase No.20191010064228', '0.00', '2000.00', '1', '1', '2019-10-10 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('434', '20191010064228', 'Purchase', '2019-10-10', '402', 'Company Credit For Purchase No20191010064228', '2000.00', '0.00', '1', '1', '2019-10-10 06:42:28', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('435', '20191010064228', 'Purchase', '2019-10-10', '1020101', 'Cash in Hand For Purchase No20191010064228', '0.00', '2000.00', '1', '1', '2019-10-10 06:42:28', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('436', '20191010064228', 'Purchase', '2019-10-10', '5020200011', 'Purchase No.20191010064228', '2000.00', '0.00', '1', '1', '2019-10-10 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('437', '20191010064439', 'Purchase', '2019-10-10', '10107', 'Inventory Debit For Purchase No20191010064439', '4500.00', '0.00', '1', '1', '2019-10-10 06:44:39', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('438', '20191010064439', 'Purchase', '2019-10-10', '5020200011', 'Purchase No.20191010064439', '0.00', '4500.00', '1', '1', '2019-10-10 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('439', '20191010064439', 'Purchase', '2019-10-10', '402', 'Company Credit For Purchase No20191010064439', '4500.00', '0.00', '1', '1', '2019-10-10 06:44:39', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('440', '20191010064439', 'Purchase', '2019-10-10', '1020101', 'Cash in Hand For Purchase No20191010064439', '0.00', '4500.00', '1', '1', '2019-10-10 06:44:39', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('441', '20191010064439', 'Purchase', '2019-10-10', '5020200011', 'Purchase No.20191010064439', '4500.00', '0.00', '1', '1', '2019-10-10 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('442', '1156572723', 'INVOICE', '2019-10-10', '10107', 'Inventory credit For Invoice No1156572723', '0.00', '360.00', '1', '1', '2019-10-10 06:45:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('443', '1156572723', 'INVOICE', '2019-10-10', '304', 'Customer debit For Invoice No1156572723', '0.00', '400.00', '1', '1', '2019-10-10 06:45:22', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('444', '3458758819', 'INVOICE', '2019-10-10', '10107', 'Inventory credit For Invoice No3458758819', '0.00', '0.00', '1', '1', '2019-10-10 06:46:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('445', '3458758819', 'INVOICE', '2019-10-10', '102030101', 'Customer debit For Invoice No3458758819', '0.00', '0.00', '1', '1', '2019-10-10 06:46:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('446', '3458758819', 'INVOICE', '2019-10-10', '304', 'Customer debit For Invoice No3458758819', '0.00', '0.00', '1', '1', '2019-10-10 06:46:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('447', '3458758819', 'INVOICE', '2019-10-10', '102030101', 'Customer credit for Paid Amount For Invoice No3458758819', '0.00', '-10.00', '1', '1', '2019-10-10 06:46:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('448', '3458758819', 'INVOICE', '2019-10-10', '1020101', 'Cash in Hand For Invoice No3458758819', '-10.00', '0.00', '1', '1', '2019-10-10 06:46:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('449', '9972194591', 'INVOICE', '2019-10-10', '10107', 'Inventory credit For Invoice No9972194591', '0.00', '180.00', '1', '1', '2019-10-10 06:46:35', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('450', '9972194591', 'INVOICE', '2019-10-10', '304', 'Customer debit For Invoice No9972194591', '0.00', '200.00', '1', '1', '2019-10-10 06:46:35', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('451', '9972194591', 'INVOICE', '2019-10-10', '1020101', 'Cash in Hand For Invoice No9972194591', '200.00', '0.00', '1', '1', '2019-10-10 06:46:35', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('452', '4813115177', 'INVOICE', '2019-10-10', '10107', 'Inventory credit For Invoice No4813115177', '0.00', '180.00', '1', '1', '2019-10-10 06:47:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('453', '4813115177', 'INVOICE', '2019-10-10', '102030101', 'Customer debit For Invoice No4813115177', '200.00', '0.00', '1', '1', '2019-10-10 06:47:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('454', '4813115177', 'INVOICE', '2019-10-10', '304', 'Customer debit For Invoice No4813115177', '0.00', '200.00', '1', '1', '2019-10-10 06:47:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('455', '4813115177', 'INVOICE', '2019-10-10', '102030101', 'Customer credit for Paid Amount For Invoice No4813115177', '0.00', '200.00', '1', '1', '2019-10-10 06:47:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('456', '4813115177', 'INVOICE', '2019-10-10', '1020101', 'Cash in Hand For Invoice No4813115177', '200.00', '0.00', '1', '1', '2019-10-10 06:47:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('457', '4532655864', 'INVOICE', '2019-10-10', '10107', 'Inventory credit For Invoice No4532655864', '0.00', '40.00', '1', '1', '2019-10-10 08:04:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('458', '4532655864', 'INVOICE', '2019-10-10', '304', 'Customer debit For Invoice No4532655864', '0.00', '50.00', '1', '1', '2019-10-10 08:04:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('459', '4532655864', 'INVOICE', '2019-10-10', '1020101', 'Cash in Hand For Invoice No4532655864', '50.00', '0.00', '1', '1', '2019-10-10 08:04:12', NULL, NULL, '1');


#
# TABLE STRUCTURE FOR: accesslog
#

DROP TABLE IF EXISTS `accesslog`;

CREATE TABLE `accesslog` (
  `sl_no` bigint(20) NOT NULL AUTO_INCREMENT,
  `action_page` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action_done` text COLLATE utf8_unicode_ci,
  `remarks` text COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entry_date` datetime DEFAULT NULL,
  UNIQUE KEY `SerialNo` (`sl_no`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `accesslog` (`sl_no`, `action_page`, `action_done`, `remarks`, `user_name`, `entry_date`) VALUES ('1', 'Role Permission', 'create', 'Role id :353', '1', '2019-06-13 06:13:07');
INSERT INTO `accesslog` (`sl_no`, `action_page`, `action_done`, `remarks`, `user_name`, `entry_date`) VALUES ('2', 'Role Permission', 'create', 'Role id :457', '1', '2019-06-13 06:18:46');


#
# TABLE STRUCTURE FOR: account_2
#

DROP TABLE IF EXISTS `account_2`;

CREATE TABLE `account_2` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_name` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `parent_id` int(1) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: accounts
#

DROP TABLE IF EXISTS `accounts`;

CREATE TABLE `accounts` (
  `account_id` varchar(20) NOT NULL,
  `account_table_name` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: asset_purchase
#

DROP TABLE IF EXISTS `asset_purchase`;

CREATE TABLE `asset_purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_date` date NOT NULL,
  `supplier_id` varchar(30) NOT NULL,
  `grand_total` float NOT NULL,
  `payment_type` tinyint(4) DEFAULT NULL,
  `bank_id` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `asset_purchase` (`id`, `p_date`, `supplier_id`, `grand_total`, `payment_type`, `bank_id`) VALUES ('2', '2019-05-29', 'RZ82QCYZ33SNX5BW4XA5', '1500', '3', 'IGI844263K');
INSERT INTO `asset_purchase` (`id`, `p_date`, `supplier_id`, `grand_total`, `payment_type`, `bank_id`) VALUES ('3', '2019-05-29', 'RZ82QCYZ33SNX5BW4XA5', '2500', '3', 'IGI844263K');
INSERT INTO `asset_purchase` (`id`, `p_date`, `supplier_id`, `grand_total`, `payment_type`, `bank_id`) VALUES ('4', '2019-05-29', 'RZ82QCYZ33SNX5BW4XA5', '2500', '3', 'IGI844263K');
INSERT INTO `asset_purchase` (`id`, `p_date`, `supplier_id`, `grand_total`, `payment_type`, `bank_id`) VALUES ('5', '2019-05-29', 'RZ82QCYZ33SNX5BW4XA5', '2500', '1', '');
INSERT INTO `asset_purchase` (`id`, `p_date`, `supplier_id`, `grand_total`, `payment_type`, `bank_id`) VALUES ('6', '2019-06-18', 'C34RZAELMF7WYLVKVS8D', '70000', '3', 'UR9A6S7I92');
INSERT INTO `asset_purchase` (`id`, `p_date`, `supplier_id`, `grand_total`, `payment_type`, `bank_id`) VALUES ('7', '2019-10-06', '6GEBWMXNNM8C3Y7Q4RH8', '240', '1', '');


#
# TABLE STRUCTURE FOR: attendance
#

DROP TABLE IF EXISTS `attendance`;

CREATE TABLE `attendance` (
  `att_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `sign_in` varchar(30) NOT NULL,
  `sign_out` varchar(30) NOT NULL,
  `staytime` varchar(30) NOT NULL,
  PRIMARY KEY (`att_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('1', '2', '2019-05-21', '10:48:46 am', '10:50:46 am', '00:02:00');
INSERT INTO `attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('2', '2', '2019-05-23', '09:53:40 am', '09:56:54 am', '00:03:14');
INSERT INTO `attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('3', '2', '2019-06-12', '05:11:53 pm', '05:12:09 pm', '00:00:16');
INSERT INTO `attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('4', '2', '2019-06-12', '05:13:23 pm', '', '');
INSERT INTO `attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('5', '2', '2019-06-12', '05:16:36 pm', '05:16:51 pm', '00:00:15');
INSERT INTO `attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('6', '3', '2019-06-13', '12:43:37 pm', '12:44:13 pm', '00:00:36');
INSERT INTO `attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('7', '3', '2019-06-13', '06:03:01 pm', '06:03:10 pm', '00:00:09');


#
# TABLE STRUCTURE FOR: bank_add
#

DROP TABLE IF EXISTS `bank_add`;

CREATE TABLE `bank_add` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_id` varchar(50) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `ac_name` varchar(250) DEFAULT NULL,
  `ac_number` varchar(250) DEFAULT NULL,
  `branch` varchar(250) DEFAULT NULL,
  `signature_pic` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `bank_add` (`id`, `bank_id`, `bank_name`, `ac_name`, `ac_number`, `branch`, `signature_pic`, `status`) VALUES ('1', 'IGI844263K', 'AB Bank', 'isahaq', '2342345234', 'Khilkhete', NULL, '1');
INSERT INTO `bank_add` (`id`, `bank_id`, `bank_name`, `ac_name`, `ac_number`, `branch`, `signature_pic`, `status`) VALUES ('2', '2OVBJZ6NJX', 'City Bank', 'Monalisa', '3456878990890', 'Dhanmondi', NULL, '1');
INSERT INTO `bank_add` (`id`, `bank_id`, `bank_name`, `ac_name`, `ac_number`, `branch`, `signature_pic`, `status`) VALUES ('3', 'UR9A6S7I92', 'DBBL', 'Raisa', '85176975976', 'Dhanmondi-10 a', NULL, '1');


#
# TABLE STRUCTURE FOR: bank_summary
#

DROP TABLE IF EXISTS `bank_summary`;

CREATE TABLE `bank_summary` (
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO `bank_summary` (`id`, `bank_id`, `description`, `deposite_id`, `date`, `ac_type`, `dr`, `cr`, `ammount`, `status`) VALUES ('1', 'IGI844263K', 'Opening balance', 'TPZFJI5UBJ', '2019-05-20', 'Debit(+)', '1000.00', NULL, '1000.00', '1');
INSERT INTO `bank_summary` (`id`, `bank_id`, `description`, `deposite_id`, `date`, `ac_type`, `dr`, `cr`, `ammount`, `status`) VALUES ('2', 'IGI844263K', 'sdfasdf', '124564', '2019-05-20', 'Credit(-)', NULL, '200.00', '200.00', '1');
INSERT INTO `bank_summary` (`id`, `bank_id`, `description`, `deposite_id`, `date`, `ac_type`, `dr`, `cr`, `ammount`, `status`) VALUES ('3', 'IGI844263K', 'Gass Bill Expense', '20190530074715', '2019-05-30', 'Credit (-)', NULL, '20.00', '20.00', '1');
INSERT INTO `bank_summary` (`id`, `bank_id`, `description`, `deposite_id`, `date`, `ac_type`, `dr`, `cr`, `ammount`, `status`) VALUES ('4', 'IGI844263K', 'product purchase', '3244fsfsdfs', '2020-02-04', 'Credit(-)', NULL, '25500.00', '25500.00', '1');
INSERT INTO `bank_summary` (`id`, `bank_id`, `description`, `deposite_id`, `date`, `ac_type`, `dr`, `cr`, `ammount`, `status`) VALUES ('5', '2OVBJZ6NJX', 'Opening balance', 'P2JB13LD9B', '2019-06-12', 'Debit(+)', '5000.00', NULL, '5000.00', '1');
INSERT INTO `bank_summary` (`id`, `bank_id`, `description`, `deposite_id`, `date`, `ac_type`, `dr`, `cr`, `ammount`, `status`) VALUES ('6', '2OVBJZ6NJX', 'Pc Expense', '20190613071049', '2019-06-13', 'Credit (-)', NULL, '20000.00', '20000.00', '1');
INSERT INTO `bank_summary` (`id`, `bank_id`, `description`, `deposite_id`, `date`, `ac_type`, `dr`, `cr`, `ammount`, `status`) VALUES ('7', 'UR9A6S7I92', 'Opening balance', 'E72YRKIARR', '2019-06-13', 'Debit(+)', '5000.00', NULL, '5000.00', '1');
INSERT INTO `bank_summary` (`id`, `bank_id`, `description`, `deposite_id`, `date`, `ac_type`, `dr`, `cr`, `ammount`, `status`) VALUES ('8', 'UR9A6S7I92', 'product sale', '1194992873', '2019-06-15 09:35:19', 'Debit(+)', '5000.00', NULL, '5000.00', '1');
INSERT INTO `bank_summary` (`id`, `bank_id`, `description`, `deposite_id`, `date`, `ac_type`, `dr`, `cr`, `ammount`, `status`) VALUES ('9', 'UR9A6S7I92', 'product sale', '5875993999', '2019-06-15 12:48:27', 'Debit(+)', '7412.34', NULL, '7412.34', '1');
INSERT INTO `bank_summary` (`id`, `bank_id`, `description`, `deposite_id`, `date`, `ac_type`, `dr`, `cr`, `ammount`, `status`) VALUES ('10', 'UR9A6S7I92', 'product sale', '1337844645', '2019-06-16 08:03:42', 'Debit(+)', '500.00', NULL, '500.00', '1');
INSERT INTO `bank_summary` (`id`, `bank_id`, `description`, `deposite_id`, `date`, `ac_type`, `dr`, `cr`, `ammount`, `status`) VALUES ('11', '2OVBJZ6NJX', 'product sale', '1549954566', '2019-06-16 08:16:40', 'Debit(+)', '1058.91', NULL, '1058.91', '1');
INSERT INTO `bank_summary` (`id`, `bank_id`, `description`, `deposite_id`, `date`, `ac_type`, `dr`, `cr`, `ammount`, `status`) VALUES ('12', '2OVBJZ6NJX', 'product sale', '1716929527', '2019-06-16 10:46:54', 'Debit(+)', '1000.00', NULL, '1000.00', '1');
INSERT INTO `bank_summary` (`id`, `bank_id`, `description`, `deposite_id`, `date`, `ac_type`, `dr`, `cr`, `ammount`, `status`) VALUES ('13', 'UR9A6S7I92', 'product sale', '9374992955', '2019-06-16 11:23:12', 'Debit(+)', '2000.00', NULL, '2000.00', '1');


#
# TABLE STRUCTURE FOR: cheque_manger
#

DROP TABLE IF EXISTS `cheque_manger`;

CREATE TABLE `cheque_manger` (
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

#
# TABLE STRUCTURE FOR: ci_sessions
#

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: company_information
#

DROP TABLE IF EXISTS `company_information`;

CREATE TABLE `company_information` (
  `company_id` varchar(50) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `website` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `company_information` (`company_id`, `company_name`, `email`, `address`, `mobile`, `website`, `status`) VALUES ('NOILG8EGCRXXBWUEUQBM', 'sgmh Shop', 'sgmh@sgmh.com', 'B-25, Mannan Plaza, 4th Floor, Khilkhet\r\nDhaka-1229, Bangladesh ', '1922296392', 'http://www.sgmh.com', '1');


#
# TABLE STRUCTURE FOR: currency_tbl
#

DROP TABLE IF EXISTS `currency_tbl`;

CREATE TABLE `currency_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_name` varchar(50) NOT NULL,
  `icon` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `currency_tbl` (`id`, `currency_name`, `icon`) VALUES ('1', 'Taka', '৳');
INSERT INTO `currency_tbl` (`id`, `currency_name`, `icon`) VALUES ('2', 'Azerbaijan Manat', '₼');


#
# TABLE STRUCTURE FOR: customer_information
#

DROP TABLE IF EXISTS `customer_information`;

CREATE TABLE `customer_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(30) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_mobile` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

INSERT INTO `customer_information` (`id`, `customer_id`, `customer_name`, `customer_address`, `customer_mobile`, `customer_email`, `status`) VALUES ('1', '8LL9E636CFWVMD4', 'Samsuddin', 'test address', '1955110016', 'samsuddin@sgmh.com', '1');
INSERT INTO `customer_information` (`id`, `customer_id`, `customer_name`, `customer_address`, `customer_mobile`, `customer_email`, `status`) VALUES ('2', 'S5NZ2Z2LXJFE11U', 'Shahabuddin', 'test address ', '01684964913', 'shahabuddin@sgmh.com', '1');
INSERT INTO `customer_information` (`id`, `customer_id`, `customer_name`, `customer_address`, `customer_mobile`, `customer_email`, `status`) VALUES ('3', 'EGLATNFLSV4A9VP', 'Isahaq', 'fsdfs ', '01852376598', 'isahaq@sgmh.com', '1');
INSERT INTO `customer_information` (`id`, `customer_id`, `customer_name`, `customer_address`, `customer_mobile`, `customer_email`, `status`) VALUES ('4', 'MHWJPOELVKGS1OS', 'Mubin', 'modhopara', '234234', 'mubin@sgmh.com', '1');
INSERT INTO `customer_information` (`id`, `customer_id`, `customer_name`, `customer_address`, `customer_mobile`, `customer_email`, `status`) VALUES ('5', '789XC11EWYDN5XT', 'Sagor', 'sdfsdaf', '01620214460', 'sagor@sgmh.com', '1');
INSERT INTO `customer_information` (`id`, `customer_id`, `customer_name`, `customer_address`, `customer_mobile`, `customer_email`, `status`) VALUES ('6', 'WKQJYOTTCBLDS3X', 'stest', 'dsfasdf', '234234', 'stest@sgmh.com', '1');
INSERT INTO `customer_information` (`id`, `customer_id`, `customer_name`, `customer_address`, `customer_mobile`, `customer_email`, `status`) VALUES ('7', 'P3NY6D1AKZQPHB7', 'Walking Customer', '', '01852376598', '', '1');
INSERT INTO `customer_information` (`id`, `customer_id`, `customer_name`, `customer_address`, `customer_mobile`, `customer_email`, `status`) VALUES ('8', 'XHVT1EYRU9GJSF7', 'Ab', 'fsdfsd', '2341234', 'ab@sgmh.com', '1');
INSERT INTO `customer_information` (`id`, `customer_id`, `customer_name`, `customer_address`, `customer_mobile`, `customer_email`, `status`) VALUES ('9', 'BULO85O55VU3IQC', 'sakib', 'sdfsdaf', '12312312', 'sakib@sgmh.com', '1');
INSERT INTO `customer_information` (`id`, `customer_id`, `customer_name`, `customer_address`, `customer_mobile`, `customer_email`, `status`) VALUES ('10', 'L6L6PZWWV96JSBJ', 'justin tuto', 'sdfsdf', '12423123', 'justin@sgmh.com', '2');
INSERT INTO `customer_information` (`id`, `customer_id`, `customer_name`, `customer_address`, `customer_mobile`, `customer_email`, `status`) VALUES ('11', 'QMY32P1IAKFL4HQ', 'Tonu', 'dhaka', '354678', 'tonu@sgmh.com', '2');
INSERT INTO `customer_information` (`id`, `customer_id`, `customer_name`, `customer_address`, `customer_mobile`, `customer_email`, `status`) VALUES ('12', 'TNY6WQ4SYID648C', 'tarin', 'dhaka', '3479008o809', 'tarin@sgmh.com', '2');
INSERT INTO `customer_information` (`id`, `customer_id`, `customer_name`, `customer_address`, `customer_mobile`, `customer_email`, `status`) VALUES ('13', '531JU3H37SRQ6MW', 'sdsdf', 'sdfsdgfsdfg', '234534534', 'ssdfsd@sgmh.com', '2');
INSERT INTO `customer_information` (`id`, `customer_id`, `customer_name`, `customer_address`, `customer_mobile`, `customer_email`, `status`) VALUES ('14', 'VP9733OXV5XSFTQ', 'Rini', 'dhaka', '', '', '1');
INSERT INTO `customer_information` (`id`, `customer_id`, `customer_name`, `customer_address`, `customer_mobile`, `customer_email`, `status`) VALUES ('15', 'IFD4RYQ1NLHX1H2', 'jtest', 'sdfsd', '', '', '1');
INSERT INTO `customer_information` (`id`, `customer_id`, `customer_name`, `customer_address`, `customer_mobile`, `customer_email`, `status`) VALUES ('16', 'FTIVY6Q8W66TA4F', 'kona', 'mirpur', '', '', '1');


#
# TABLE STRUCTURE FOR: customer_ledger
#

DROP TABLE IF EXISTS `customer_ledger`;

CREATE TABLE `customer_ledger` (
  `transaction_id` varchar(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `invoice_no` varchar(100) DEFAULT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=253 DEFAULT CHARSET=utf8;

INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('7I4CEJZ6ZV', 'V144JHCY3R8T8OM', 'NA', NULL, NULL, 'Previous adjustment with software', 'NA', 'NA', '2019-02-03', '1', '21', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('D7M4KFOVWZ', '8LL9E636CFWVMD4', 'NA', NULL, '100.00', 'Previous adjustment with software', 'NA', 'NA', '2019-02-03', '1', '22', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('73EYCQ7B7Q', 'S5NZ2Z2LXJFE11U', 'NA', NULL, '200.00', 'Previous adjustment with software', 'NA', 'NA', '2019-02-03', '1', '23', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('NLFZTR15U8', 'EGLATNFLSV4A9VP', 'NA', NULL, '300.00', 'Previous adjustment with software', 'NA', 'NA', '2019-02-03', '1', '24', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('4JLNE33LXB', 'MHWJPOELVKGS1OS', 'NA', NULL, NULL, 'Previous adjustment with software', 'NA', 'NA', '2019-02-03', '1', '25', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('NSO2539EQ31XTSR', 'S5NZ2Z2LXJFE11U', '6421231175', NULL, '70.00', 'Cash Paid By Customer', '', '', '2019-02-04', '1', '26', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('NSO2539EQ31XTSR', 'S5NZ2Z2LXJFE11U', NULL, 'CB3IN1VOI3', '70.00', 'Medicine Received By Customer', '1', '', '2019-02-04', '1', '27', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('FD2GOTTL', 'S5NZ2Z2LXJFE11U', '1s234235', NULL, '100.00', 'Cash Paid By Customer', '', '', '2020-02-05', '1', '28', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('FD2GOTTL', 'S5NZ2Z2LXJFE11U', NULL, 'XGFI2YYN', '350.00', 'Medicine Received By Customer', '1', '', '2020-02-05', '1', '29', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('TFG9S552DHJ5BP2', 'EGLATNFLSV4A9VP', '3959999927', NULL, '100.00', 'Cash Paid By Customer', '', '', '2019-02-08', '1', '30', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('TFG9S552DHJ5BP2', 'EGLATNFLSV4A9VP', NULL, 'GFK4LRV9AT', '105.00', 'Medicine Received By Customer', '1', '', '2019-02-08', '1', '31', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('AWZ6QI5QNN1DGND', 'EGLATNFLSV4A9VP', '2929982841', NULL, '140.00', 'Cash Paid By Customer', '', '', '2019-02-08', '1', '32', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('AWZ6QI5QNN1DGND', 'EGLATNFLSV4A9VP', NULL, 'Z1CPN8G54N', '140.00', 'Medicine Received By Customer', '1', '', '2019-02-08', '1', '33', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('EZ8KJMOHNQQYLPF', 'EGLATNFLSV4A9VP', '2597346371', NULL, '140.00', 'Cash Paid By Customer', '', '', '2019-02-08', '1', '34', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('EZ8KJMOHNQQYLPF', 'EGLATNFLSV4A9VP', NULL, '7A9COCWMO5', '140.00', 'Medicine Received By Customer', '1', '', '2019-02-08', '1', '35', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('6GT3N3JL988O43F', 'S5NZ2Z2LXJFE11U', '4744988398', NULL, '240.00', 'Cash Paid By Customer', '', '', '2019-02-08', '1', '36', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('6GT3N3JL988O43F', 'S5NZ2Z2LXJFE11U', NULL, 'UAQ26BVGTY', '240.00', 'Medicine Received By Customer', '1', '', '2019-02-08', '1', '37', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('3MF8ITX8ZJ6LO22', 'EGLATNFLSV4A9VP', '6582891923', NULL, '140.00', 'Cash Paid By Customer', '', '', '2019-02-08', '1', '38', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('3MF8ITX8ZJ6LO22', 'EGLATNFLSV4A9VP', NULL, 'EBGAXX1XFG', '140.00', 'Medicine Received By Customer', '1', '', '2019-02-08', '1', '39', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('9UCIJL492XE2B76', 'EGLATNFLSV4A9VP', '7382188714', NULL, '240.00', 'Cash Paid By Customer', '', '', '2019-02-08', '1', '40', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('9UCIJL492XE2B76', 'EGLATNFLSV4A9VP', NULL, 'ICLBOWOMQ8', '240.00', 'Medicine Received By Customer', '1', '', '2019-02-08', '1', '41', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('57QBBHNXZH', '789XC11EWYDN5XT', 'NA', NULL, '0.00', 'Previous adjustment with software', 'NA', 'NA', '2019-02-08', '1', '42', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('49O761LLK2A5ZF7', '789XC11EWYDN5XT', '8681471136', NULL, '35.00', 'Cash Paid By Customer', '', '', '2019-02-08', '1', '43', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('49O761LLK2A5ZF7', '789XC11EWYDN5XT', NULL, 'MLMVUI9TUF', '35.00', 'Medicine Received By Customer', '1', '', '2019-02-08', '1', '44', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('JNB2Q1L2Y4DTFTM', 'EGLATNFLSV4A9VP', '2243542476', NULL, '70.00', 'Cash Paid By Customer', '', '', '2019-02-09', '1', '45', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('JNB2Q1L2Y4DTFTM', 'EGLATNFLSV4A9VP', NULL, 'BT67J2MKJT', '70.00', 'Medicine Received By Customer', '1', '', '2019-02-09', '1', '46', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('H72L1WMLWVB2E1M', 'EGLATNFLSV4A9VP', '9838815157', NULL, '70.00', 'Cash Paid By Customer', '', '', '2019-02-09', '1', '47', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('H72L1WMLWVB2E1M', 'EGLATNFLSV4A9VP', NULL, 'ZYE9X49BGV', '70.00', 'Medicine Received By Customer', '1', '', '2019-02-09', '1', '48', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('R5GFNC3XFH1AHAG', 'EGLATNFLSV4A9VP', '8721492818', NULL, '70.00', 'Cash Paid By Customer', '', '', '2019-02-09', '1', '49', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('R5GFNC3XFH1AHAG', 'EGLATNFLSV4A9VP', NULL, 'K415G9T6WF', '70.00', 'Medicine Received By Customer', '1', '', '2019-02-09', '1', '50', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('1NQK4IDJUQ3A5M4', 'EGLATNFLSV4A9VP', '7341765181', NULL, '35.00', 'Cash Paid By Customer', '', '', '2019-02-09', '1', '51', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('1NQK4IDJUQ3A5M4', 'EGLATNFLSV4A9VP', NULL, 'RVOIXABZQA', '35.00', 'Medicine Received By Customer', '1', '', '2019-02-09', '1', '52', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('E8FBJTXTF5AKMUT', 'EGLATNFLSV4A9VP', '1128441893', NULL, '35.00', 'Cash Paid By Customer', '', '', '2019-02-09', '1', '53', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('E8FBJTXTF5AKMUT', 'EGLATNFLSV4A9VP', NULL, 'L936QLBZRH', '35.00', 'Medicine Received By Customer', '1', '', '2019-02-09', '1', '54', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('35M5TYVDRH1LUNL', 'EGLATNFLSV4A9VP', '8864932286', NULL, '0.00', 'Cash Paid By Customer', '', '', '2019-05-16', '1', '55', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('35M5TYVDRH1LUNL', 'EGLATNFLSV4A9VP', NULL, 'QOWYO4N57I', '70.00', 'Medicine Received By Customer', '1', '', '2019-05-16', '1', '56', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('BQ9XK527M8', 'WKQJYOTTCBLDS3X', 'NA', NULL, '1000.00', 'Previous adjustment with software', 'NA', 'NA', '2019-05-16', '1', '57', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('52M9U6QLZ7ZAPQ2', 'WKQJYOTTCBLDS3X', '5732315239', NULL, '0.00', 'Cash Paid By Customer', '', '', '2019-05-16', '1', '58', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('52M9U6QLZ7ZAPQ2', 'WKQJYOTTCBLDS3X', NULL, 'J1U7J6JSUK', '70.00', 'Medicine Received By Customer', '1', '', '2019-05-16', '1', '59', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('E95SGGLSGCBUIXW', 'WKQJYOTTCBLDS3X', 'NA', NULL, '1070.00', 'sdfsadf', '1', '', '2019-05-16', '1', '60', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('VZY2INEOVL3JW49', 'EGLATNFLSV4A9VP', NULL, '2125656933', '375.00', 'dsfasdf', '1', '', '2019-05-16', '1', '61', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('75GUI54XJL', 'P3NY6D1AKZQPHB7', 'NA', NULL, '1000.00', 'Previous adjustment with software', 'NA', 'NA', '2019-05-20', '1', '62', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('KWIAUMO1MQKJSLS', 'P3NY6D1AKZQPHB7', '4173683884', NULL, '1000.00', 'Cash Paid By Customer', '', '', '2019-05-21', '1', '73', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('QVWJ3GRV4JCG8D1', 'P3NY6D1AKZQPHB7', NULL, 'JJTHZR9KWW', '367.20', 'Medicine Received By Customer', '1', '', '2019-05-20', '1', '72', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('QVWJ3GRV4JCG8D1', 'P3NY6D1AKZQPHB7', '5578879796', NULL, '367.20', 'Cash Paid By Customer', '', '', '2019-05-20', '1', '71', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('L11CHMZ9VTY9CF2', 'P3NY6D1AKZQPHB7', NULL, 'MLCZ4VSXTL', '0.00', 'Cash Paid By Customer', '1', '', '2019-05-20', '1', '70', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('L11CHMZ9VTY9CF2', 'P3NY6D1AKZQPHB7', '6223874951', NULL, '367.20', 'Medicine Received By Customer', '1', '', '2019-05-20', '1', '69', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('KWIAUMO1MQKJSLS', 'P3NY6D1AKZQPHB7', NULL, '896TT27UU2', '359.78', 'Medicine Received By Customer', '1', '', '2019-05-21', '1', '74', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('VTAC53AH83JO8H8', 'P3NY6D1AKZQPHB7', '4399776421', NULL, '1000.00', 'Cash Paid By Customer', '', '', '2019-05-21', '1', '75', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('VTAC53AH83JO8H8', 'P3NY6D1AKZQPHB7', NULL, 'LAHRUKASEF', '415.84', 'Medicine Received By Customer', '1', '', '2019-05-21', '1', '76', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('XZWRWU3SK5EXQOY', 'EGLATNFLSV4A9VP', '2394811457', NULL, '381.21', 'Cash Paid By Customer', '', '', '2019-05-21', '1', '77', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('XZWRWU3SK5EXQOY', 'EGLATNFLSV4A9VP', NULL, 'OYYU17RFSD', '381.21', 'Medicine Received By Customer', '1', '', '2019-05-21', '1', '78', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('PHYVZXL4S2CKZ2P', 'P3NY6D1AKZQPHB7', '6757379735', NULL, '396.96', 'Cash Paid By Customer', '', '', '2019-05-21', '1', '79', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('PHYVZXL4S2CKZ2P', 'P3NY6D1AKZQPHB7', NULL, '2VYVVBU8EL', '254.14', 'Medicine Received By Customer', '1', '', '2019-05-21', '1', '80', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('KRFREAHZX7S2CIR', 'P3NY6D1AKZQPHB7', NULL, 'MMBX8P45TC', '450.01', 'Cash Paid By Customer', '1', '', '2019-05-21', '1', '90', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('KRFREAHZX7S2CIR', 'P3NY6D1AKZQPHB7', '9755728113', NULL, '450.01', 'Medicine Received By Customer', '1', '', '2019-05-21', '1', '89', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('X88HHBLWAXWKY15', '789XC11EWYDN5XT', 'serv-20190522014117', NULL, '63.54', 'Service ', '', '', '2019-05-22', '1', '91', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('X88HHBLWAXWKY15', '789XC11EWYDN5XT', 'serv-20190522014117', 'RXFRH54GA3', '63.54', 'Paid by customer', '1', '', '2019-05-22', '1', '92', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('YNAKCZKVTHU2C8M', 'P3NY6D1AKZQPHB7', 'serv-20190522014209', NULL, '63.54', 'Service ', '', '', '2019-05-22', '1', '93', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('YNAKCZKVTHU2C8M', 'P3NY6D1AKZQPHB7', 'serv-20190522014209', '3515AIFKLC', '63.54', 'Paid by customer', '1', '', '2019-05-22', '1', '94', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('OBP2J6VSA6', 'XHVT1EYRU9GJSF7', 'NA', NULL, '0.00', 'Previous adjustment with software', 'NA', 'NA', '2019-05-22', '1', '95', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('SAV7U2KRXXTHRVM', 'XHVT1EYRU9GJSF7', 'serv-20190522014405', NULL, '211.78', 'Service ', '', '', '2019-05-22', '1', '96', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('SAV7U2KRXXTHRVM', 'XHVT1EYRU9GJSF7', 'serv-20190522014405', '52STFGGKUA', '211.78', 'Paid by customer', '1', '', '2019-05-22', '1', '97', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('PPXUS1NH9M9F3VS', 'XHVT1EYRU9GJSF7', 'serv-20190522014512', NULL, '211.78', 'Service ', '', '', '2019-05-22', '1', '98', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('PPXUS1NH9M9F3VS', 'XHVT1EYRU9GJSF7', 'serv-20190522014512', 'X9QRP2NFEI', '211.78', 'Paid by customer', '1', '', '2019-05-22', '1', '99', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('ZAW6TF4WMB', 'BULO85O55VU3IQC', 'NA', NULL, '0.00', 'Previous adjustment with software', 'NA', 'NA', '2019-05-23', '1', '100', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('P5APPKV8LAXEB6X', 'BULO85O55VU3IQC', '5161369973', NULL, '240.00', 'Cash Paid By Customer', '', '', '2019-05-23', '1', '101', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('P5APPKV8LAXEB6X', 'BULO85O55VU3IQC', NULL, 'SVD3V5ZDCB', '240.00', 'Medicine Received By Customer', '1', '', '2019-05-23', '1', '102', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('XZ9K7SZYJFTM1ZA', 'BULO85O55VU3IQC', '6914845124', NULL, '120.00', 'Cash Paid By Customer', '', '', '2019-05-23', '1', '103', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('XZ9K7SZYJFTM1ZA', 'BULO85O55VU3IQC', NULL, 'TWJ8TNB6WU', '120.00', 'Medicine Received By Customer', '1', '', '2019-05-23', '1', '104', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('VY2XN4BXVDSXJSU', 'BULO85O55VU3IQC', '4258396635', NULL, '300.00', 'Cash Paid By Customer', '', '', '2019-05-25', '1', '105', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('VY2XN4BXVDSXJSU', 'BULO85O55VU3IQC', NULL, 'CUDQTNO1D1', '600.00', 'Medicine Received By Customer', '1', '', '2019-05-25', '1', '106', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('GW8WNNFGDO', 'L6L6PZWWV96JSBJ', 'NA', NULL, '0.00', 'Previous adjustment with software', 'NA', 'NA', '2019-05-25', '1', '107', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('CR-1', 'L6L6PZWWV96JSBJ', NULL, 'receipt', '500.00', '', '1', '', '2019-05-25', '1', '108', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('X84OTBC3G96OXR3', 'BULO85O55VU3IQC', '5628231696', NULL, '400.00', 'Cash Paid By Customer', '', '', '2019-05-30', '1', '109', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('X84OTBC3G96OXR3', 'BULO85O55VU3IQC', NULL, 'VVSKCNP794', '170.00', 'Medicine Received By Customer', '1', '', '2019-05-30', '1', '110', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('S1O8FGBAXPYGV7C', '', '8915554399', NULL, '31.76', 'Cash Paid By Customer', '', '', '2019-05-30', '1', '111', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('S1O8FGBAXPYGV7C', '', NULL, 'VEZS3CG7QN', '31.76', 'Medicine Received By Customer', '1', '', '2019-05-30', '1', '112', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('3SUTUGL22BKQ3J7', '', '2636312184', NULL, '31.76', 'Cash Paid By Customer', '', '', '2019-05-30', '1', '113', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('3SUTUGL22BKQ3J7', '', NULL, 'AXDKYKOWJU', '31.76', 'Medicine Received By Customer', '1', '', '2019-05-30', '1', '114', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('XFUYFMBPGWYR979', 'BULO85O55VU3IQC', '7337717641', NULL, '101.76', 'Cash Paid By Customer', '', '', '2019-05-30', '1', '115', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('XFUYFMBPGWYR979', 'BULO85O55VU3IQC', NULL, 'J5MNQ75FCG', '31.76', 'Medicine Received By Customer', '1', '', '2019-05-30', '1', '116', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('5UJQD5DYBMYXKHK', '', '2499261131', NULL, '31.76', 'Cash Paid By Customer', '', '', '2019-05-30', '1', '117', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('5UJQD5DYBMYXKHK', '', NULL, 'TXSSMT6WR6', '31.76', 'Medicine Received By Customer', '1', '', '2019-05-30', '1', '118', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('2QZJQFR19QE723H', '', '9923112343', NULL, '31.76', 'Cash Paid By Customer', '', '', '2019-05-30', '1', '119', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('2QZJQFR19QE723H', '', NULL, 'NVOHP23O67', '31.76', 'Medicine Received By Customer', '1', '', '2019-05-30', '1', '120', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('4QFJM769AA4QO7G', 'P3NY6D1AKZQPHB7', '9511562226', NULL, '31.76', 'Cash Paid By Customer', '', '', '2019-05-30', '1', '121', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('4QFJM769AA4QO7G', 'P3NY6D1AKZQPHB7', NULL, '3XHPY86S4R', '31.76', 'Medicine Received By Customer', '1', '', '2019-05-30', '1', '122', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('RVU3RKFE121999V', 'P3NY6D1AKZQPHB7', '2733838696', NULL, '31.76', 'Cash Paid By Customer', '', '', '2019-05-30', '1', '123', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('RVU3RKFE121999V', 'P3NY6D1AKZQPHB7', NULL, 'HDU9DTGALS', '31.76', 'Medicine Received By Customer', '1', '', '2019-05-30', '1', '124', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('CR-2', 'L6L6PZWWV96JSBJ', NULL, 'receipt', '100.00', 'sdfsdf', '1', '', '2019-05-30', '1', '125', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('S1GC2OSFDL', 'QMY32P1IAKFL4HQ', 'NA', NULL, '0.00', 'Previous adjustment with software', 'NA', 'NA', '2019-06-13', '1', '126', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('Y8VY8CKK1H', 'TNY6WQ4SYID648C', 'NA', NULL, '600.00', 'Previous adjustment with software', 'NA', 'NA', '2019-06-13', '1', '127', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('I69JHCFB3O', '531JU3H37SRQ6MW', 'NA', NULL, '0.00', 'Previous adjustment with software', 'NA', 'NA', '2019-06-13', '1', '128', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('B27YNQZWPQBJJNX', '', '1194992873', NULL, '5000.00', 'Cash Paid By Customer', '', '', '2019-06-15', '1', '129', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('B27YNQZWPQBJJNX', '', NULL, 'PHD8PWASTP', '13342.22', 'Medicine Received By Customer', '1', '', '2019-06-15', '1', '130', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('YLY2FOH71HO14K3', '', '4717379265', NULL, '9953.72', 'Cash Paid By Customer', '', '', '2019-06-15', '1', '131', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('YLY2FOH71HO14K3', '', NULL, 'IMZVW59N8Y', '9953.72', 'Medicine Received By Customer', '1', '', '2019-06-15', '1', '132', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('FSKHTH2YVB', 'VP9733OXV5XSFTQ', 'NA', NULL, '0.00', 'Previous adjustment with software', 'NA', 'NA', '2019-06-15', '1', '133', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('64CD6UDMIN542Q8', 'VP9733OXV5XSFTQ', '5875993999', NULL, '7412.34', 'Cash Paid By Customer', '', '', '2019-06-15', '1', '134', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('64CD6UDMIN542Q8', 'VP9733OXV5XSFTQ', NULL, 'BQ5384OM3L', '7412.34', 'Medicine Received By Customer', '1', '', '2019-06-15', '1', '135', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('D2Y7SHGG8OUDH8Y', '', '1337844645', NULL, '500.00', 'Cash Paid By Customer', '', '', '2019-06-16', '1', '136', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('D2Y7SHGG8OUDH8Y', '', NULL, 'CTO1EI2PRU', '1058.91', 'Medicine Received By Customer', '1', '', '2019-06-16', '1', '137', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('WUHH78UHJU12M62', '', '2893355527', NULL, '0.00', 'Cash Paid By Customer', '', '', '2019-06-16', '1', '138', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('WUHH78UHJU12M62', '', NULL, 'DMIO28ST64', '1058.91', 'Medicine Received By Customer', '1', '', '2019-06-16', '1', '139', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('GBSBK3ET1LHH1TS', '', '1549954566', NULL, '1058.91', 'Cash Paid By Customer', '', '', '2019-06-16', '1', '140', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('GBSBK3ET1LHH1TS', '', NULL, 'JCTU1WUH9U', '1058.91', 'Medicine Received By Customer', '1', '', '2019-06-16', '1', '141', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('687KJQH6QMBG8WS', '', '1716929527', NULL, '1000.00', 'Cash Paid By Customer', '', '', '2019-06-16', '1', '142', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('687KJQH6QMBG8WS', '', NULL, 'TB87IVA9VW', '2117.81', 'Medicine Received By Customer', '1', '', '2019-06-16', '1', '143', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('MM6W7MI4F7', 'IFD4RYQ1NLHX1H2', 'NA', NULL, '0.00', 'Previous adjustment with software', 'NA', 'NA', '2019-06-16', '1', '144', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('GEIUQT61YEPLLZ2', 'IFD4RYQ1NLHX1H2', '6368534916', NULL, '2000.00', 'Cash Paid By Customer', '', '', '2019-06-16', '1', '145', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('GEIUQT61YEPLLZ2', 'IFD4RYQ1NLHX1H2', NULL, '9VILLBVQEO', '4235.62', 'Medicine Received By Customer', '1', '', '2019-06-16', '1', '146', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('R16V6H63IV', 'FTIVY6Q8W66TA4F', 'NA', NULL, '0.00', 'Previous adjustment with software', 'NA', 'NA', '2019-06-16', '1', '147', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('71CFLL6AY4QT3W2', 'FTIVY6Q8W66TA4F', '9374992955', NULL, '2000.00', 'Cash Paid By Customer', '', '', '2019-06-16', '1', '148', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('71CFLL6AY4QT3W2', 'FTIVY6Q8W66TA4F', NULL, 'XYGQL9W7IH', '3176.72', 'Medicine Received By Customer', '1', '', '2019-06-16', '1', '149', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('71CFLL6AY4QT3W2', 'FTIVY6Q8W66TA4F', '9374992955', NULL, '-1500.00', 'Return', '', '', '2019-06-19', '1', '150', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('12VFNA1YN1T1F56', '', '2357444577', NULL, '240.00', 'Cash Paid By Customer', '', '', '2019-09-15', '1', '151', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('12VFNA1YN1T1F56', '', NULL, '6QDAMLDPE3', '240.00', 'Medicine Received By Customer', '1', '', '2019-09-15', '1', '152', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('4WXM8R2X4ZQLBUT', '', '4397745619', NULL, '240.00', 'Cash Paid By Customer', '', '', '2019-09-15', '1', '153', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('4WXM8R2X4ZQLBUT', '', NULL, 'PGV71OWN4T', '240.00', 'Medicine Received By Customer', '1', '', '2019-09-15', '1', '154', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('KZ54N17YCYF1NZ3', '', '2889369457', NULL, '120.00', 'Cash Paid By Customer', '', '', '2019-09-15', '1', '155', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('KZ54N17YCYF1NZ3', '', NULL, 'UU2TYIYLON', '120.00', 'Medicine Received By Customer', '1', '', '2019-09-15', '1', '156', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('MZQUQSW879E5YDO', '', '3497846252', NULL, '120.00', 'Cash Paid By Customer', '', '', '2019-09-15', '1', '157', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('MZQUQSW879E5YDO', '', NULL, 'LI8UOMK1NI', '120.00', 'Medicine Received By Customer', '1', '', '2019-09-15', '1', '158', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('6LLJ79AQPDDXDS9', '', '4349145515', NULL, '50.00', 'Cash Paid By Customer', '', '', '2019-09-18', '1', '159', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('6LLJ79AQPDDXDS9', '', NULL, 'NM69N9CYOQ', '50.00', 'Medicine Received By Customer', '1', '', '2019-09-18', '1', '160', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('C81G2IYIWFL9P94', '', '4819859856', NULL, '35.00', 'Cash Paid By Customer', '', '', '2019-09-18', '1', '161', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('C81G2IYIWFL9P94', '', NULL, '5CNJ4DIA78', '35.00', 'Medicine Received By Customer', '1', '', '2019-09-18', '1', '162', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('W3TTXOUHM44W1UI', '', '9188745284', NULL, '35.00', 'Cash Paid By Customer', '', '', '2019-09-18', '1', '163', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('W3TTXOUHM44W1UI', '', NULL, 'SKONJ6I7IY', '35.00', 'Medicine Received By Customer', '1', '', '2019-09-18', '1', '164', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('8UUTJO36OBD7GLA', '', '6887248818', NULL, '70.00', 'Cash Paid By Customer', '', '', '2019-09-18', '1', '165', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('8UUTJO36OBD7GLA', '', NULL, 'QRN15AMDKR', '70.00', 'Medicine Received By Customer', '1', '', '2019-09-18', '1', '166', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('HDEKXEVO82LCFAI', '', '2556888428', NULL, '70.00', 'Cash Paid By Customer', '', '', '2019-09-18', '1', '167', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('HDEKXEVO82LCFAI', '', NULL, '2GJ9IULH2I', '70.00', 'Medicine Received By Customer', '1', '', '2019-09-18', '1', '168', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('GYHQUEGWRJM7Q89', '', '8232565794', NULL, '70.00', 'Cash Paid By Customer', '', '', '2019-09-19', '1', '169', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('GYHQUEGWRJM7Q89', '', NULL, '8ADAQ7SCPC', '70.00', 'Medicine Received By Customer', '1', '', '2019-09-19', '1', '170', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('1MXHB6JGZX7QBLY', '', '5816359211', NULL, '240.00', 'Cash Paid By Customer', '', '', '2019-09-22', '1', '171', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('1MXHB6JGZX7QBLY', '', NULL, 'IUHB88MTH1', '240.00', 'Medicine Received By Customer', '1', '', '2019-09-22', '1', '172', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('GVQ1PO7R9LEPRUJ', '', '7589434143', NULL, '35.00', 'Cash Paid By Customer', '', '', '2019-09-22', '1', '173', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('GVQ1PO7R9LEPRUJ', '', NULL, 'VPE8QXOX1A', '35.00', 'Medicine Received By Customer', '1', '', '2019-09-22', '1', '174', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('V972D1WM8GXICYD', '', '2457865981', NULL, '120.00', 'Cash Paid By Customer', '', '', '2019-09-22', '1', '175', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('V972D1WM8GXICYD', '', NULL, 'QTZ3IQ5MKV', '120.00', 'Medicine Received By Customer', '1', '', '2019-09-22', '1', '176', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('74H7C4NPLYT3E2V', '', '1984311715', NULL, '120.00', 'Cash Paid By Customer', '', '', '2019-09-22', '1', '177', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('74H7C4NPLYT3E2V', '', NULL, 'WNPHY14BF5', '120.00', 'Medicine Received By Customer', '1', '', '2019-09-22', '1', '178', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('3PZDMAXQ1AK5Q3B', '', '3246988817', NULL, '0.00', 'Cash Paid By Customer', '', '', '2019-09-22', '1', '179', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('3PZDMAXQ1AK5Q3B', '', NULL, '4GEVUA34TE', '0.00', 'Medicine Received By Customer', '1', '', '2019-09-22', '1', '180', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('B1Z6VRJYSIZSNX9', '', '6342619132', NULL, '500.00', 'Cash Paid By Customer', '', '', '2019-09-22', '1', '181', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('B1Z6VRJYSIZSNX9', '', NULL, 'YE9M7W2JLB', '500.00', 'Medicine Received By Customer', '1', '', '2019-09-22', '1', '182', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('YT5XSHJB5XWZOSA', '', '8274592153', NULL, '70.00', 'Cash Paid By Customer', '', '', '2019-09-22', '1', '183', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('YT5XSHJB5XWZOSA', '', NULL, '1BTOTR3VUP', '70.00', 'Medicine Received By Customer', '1', '', '2019-09-22', '1', '184', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('LVTIH5PE3WB8G8Q', '', '3964297319', NULL, '35.00', 'Cash Paid By Customer', '', '', '2019-09-22', '1', '185', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('LVTIH5PE3WB8G8Q', '', NULL, 'KJ91A5VHHZ', '35.00', 'Medicine Received By Customer', '1', '', '2019-09-22', '1', '186', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('KIKW6IFOB4VYBXE', '', '4849938327', NULL, '120.00', 'Cash Paid By Customer', '', '', '2019-09-22', '1', '187', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('KIKW6IFOB4VYBXE', '', NULL, 'M1G1XOH8DA', '120.00', 'Medicine Received By Customer', '1', '', '2019-09-22', '1', '188', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('Y8ZJPY1R1MLB4A3', 'EGLATNFLSV4A9VP', '4366657224', NULL, '35.00', 'Cash Paid By Customer', '', '', '2019-09-22', '1', '189', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('Y8ZJPY1R1MLB4A3', 'EGLATNFLSV4A9VP', NULL, 'OWY98U5EER', '35.00', 'Medicine Received By Customer', '1', '', '2019-09-22', '1', '190', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('TXZY8VYN5JZPQVJ', 'P3NY6D1AKZQPHB7', '6572548126', NULL, '120.00', 'Cash Paid By Customer', '', '', '2019-09-22', '1', '191', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('TXZY8VYN5JZPQVJ', 'P3NY6D1AKZQPHB7', NULL, '6AX8U6AJET', '120.00', 'Medicine Received By Customer', '1', '', '2019-09-22', '1', '192', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('ISDPFLA7DGAQ8OZ', '', '7476575834', NULL, '35.00', 'Cash Paid By Customer', '', '', '2019-09-25', '1', '193', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('ISDPFLA7DGAQ8OZ', '', NULL, 'GN3FQMNZD3', '35.00', 'Medicine Received By Customer', '1', '', '2019-09-25', '1', '194', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('H61D9RHRBR7PG1P', 'EGLATNFLSV4A9VP', '2546488688', NULL, '0.00', 'Cash Paid By Customer', '', '', '2019-09-25', '1', '195', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('H61D9RHRBR7PG1P', 'EGLATNFLSV4A9VP', NULL, 'C1A7S2XOPY', '0.00', 'Medicine Received By Customer', '1', '', '2019-09-25', '1', '196', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('WF338XTYCHN9LIC', 'P3NY6D1AKZQPHB7', '2498163329', NULL, '60.00', 'Cash Paid By Customer', '', '', '2019-09-25', '1', '197', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('WF338XTYCHN9LIC', 'P3NY6D1AKZQPHB7', NULL, 'YN1XHODP1G', '60.00', 'Medicine Received By Customer', '1', '', '2019-09-25', '1', '198', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('QI2RKYRNIGSWZ6S', '', '2682413866', NULL, '476.51', 'Cash Paid By Customer', '', '', '2019-09-25', '1', '199', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('QI2RKYRNIGSWZ6S', '', NULL, 'G38FPNLB7R', '476.51', 'Medicine Received By Customer', '1', '', '2019-09-25', '1', '200', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('KLWVWUTWST5HP3Y', 'EGLATNFLSV4A9VP', '9895528273', NULL, '317.67', 'Cash Paid By Customer', '', '', '2019-09-25', '1', '201', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('KLWVWUTWST5HP3Y', 'EGLATNFLSV4A9VP', NULL, '8Z5N4EEIBN', '317.67', 'Medicine Received By Customer', '1', '', '2019-09-25', '1', '202', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('JGRGWKG9R9JYNSO', 'EGLATNFLSV4A9VP', '8225271174', NULL, '157.25', 'Cash Paid By Customer', '', '', '2019-09-25', '1', '203', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('JGRGWKG9R9JYNSO', 'EGLATNFLSV4A9VP', NULL, 'NX4R9UQYR1', '157.25', 'Medicine Received By Customer', '1', '', '2019-09-25', '1', '204', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('RCTN2564JHOL3OP', 'EGLATNFLSV4A9VP', '4364231861', NULL, '157.25', 'Cash Paid By Customer', '', '', '2019-09-25', '1', '205', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('RCTN2564JHOL3OP', 'EGLATNFLSV4A9VP', NULL, 'AMTSXCIB1E', '157.25', 'Medicine Received By Customer', '1', '', '2019-09-25', '1', '206', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('6KWLNUL8LOCMRHN', 'P3NY6D1AKZQPHB7', '9375835462', NULL, '63.54', 'Cash Paid By Customer', '', '', '2019-09-26', '1', '207', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('6KWLNUL8LOCMRHN', 'P3NY6D1AKZQPHB7', NULL, '9WHXPVFUCO', '63.54', 'Medicine Received By Customer', '1', '', '2019-09-26', '1', '208', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('9JWZI895DI5D87V', 'P3NY6D1AKZQPHB7', '7478513273', NULL, '91.76', 'Cash Paid By Customer', '', '', '2019-09-26', '1', '209', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('9JWZI895DI5D87V', 'P3NY6D1AKZQPHB7', NULL, 'A6QDUETY1C', '91.76', 'Medicine Received By Customer', '1', '', '2019-09-26', '1', '210', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('P4O18I2J6SN3WF2', '', '7949351373', NULL, '240.00', 'Cash Paid By Customer', '', '', '2019-09-26', '1', '211', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('P4O18I2J6SN3WF2', '', NULL, 'IW22RHDK7K', '240.00', 'Medicine Received By Customer', '1', '', '2019-09-26', '1', '212', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('VWXT4LME2L2F37O', '', '9537276848', NULL, '30.00', 'Cash Paid By Customer', '', '', '2019-09-26', '1', '213', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('VWXT4LME2L2F37O', '', NULL, 'NUB6TZ7MGZ', '30.00', 'Medicine Received By Customer', '1', '', '2019-09-26', '1', '214', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('IEXI3CPZ9M78T5F', 'EGLATNFLSV4A9VP', '3439327186', NULL, '30.00', 'Cash Paid By Customer', '', '', '2019-09-26', '1', '215', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('IEXI3CPZ9M78T5F', 'EGLATNFLSV4A9VP', NULL, 'M33MRXMF8A', '30.00', 'Medicine Received By Customer', '1', '', '2019-09-26', '1', '216', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('5QJK9F23ZWN7CUZ', '', '6417174793', NULL, '240.00', 'Cash Paid By Customer', '', '', '2019-09-26', '1', '217', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('5QJK9F23ZWN7CUZ', '', NULL, 'ZP96WZ91A9', '240.00', 'Medicine Received By Customer', '1', '', '2019-09-26', '1', '218', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('F4GHBEOCYM2VMRF', '', '3451623335', NULL, '240.00', 'Cash Paid By Customer', '', '', '2019-09-26', '1', '219', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('F4GHBEOCYM2VMRF', '', NULL, '7M4E72QFH3', '240.00', 'Medicine Received By Customer', '1', '', '2019-09-26', '1', '220', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('H4QF949BZ7PHD39', 'P3NY6D1AKZQPHB7', '5136766345', NULL, '31.76', 'Cash Paid By Customer', '', '', '2019-09-26', '1', '221', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('H4QF949BZ7PHD39', 'P3NY6D1AKZQPHB7', NULL, 'U78BTXT1T9', '31.76', 'Medicine Received By Customer', '1', '', '2019-09-26', '1', '222', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('4PD46FX3ZMNMEWZ', 'S5NZ2Z2LXJFE11U', '2527777432', NULL, '520.00', 'Cash Paid By Customer', '', '', '2019-09-26', '1', '223', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('4PD46FX3ZMNMEWZ', 'S5NZ2Z2LXJFE11U', NULL, 'PVNIK3DHMN', '70.00', 'Medicine Received By Customer', '1', '', '2019-09-26', '1', '224', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('96SQYDJKWJKIIZT', 'S5NZ2Z2LXJFE11U', '4232219582', NULL, '520.00', 'Cash Paid By Customer', '', '', '2019-09-26', '1', '225', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('96SQYDJKWJKIIZT', 'S5NZ2Z2LXJFE11U', NULL, 'M7CO6EXIAC', '70.00', 'Medicine Received By Customer', '1', '', '2019-09-26', '1', '226', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('MCVQ9GBAXKNDNNY', '', '8469112396', NULL, '35.00', 'Cash Paid By Customer', '', '', '2019-09-26', '1', '227', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('MCVQ9GBAXKNDNNY', '', NULL, 'YNZQ45NNY2', '35.00', 'Medicine Received By Customer', '1', '', '2019-09-26', '1', '228', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('6Q8M5O9LYB6W65C', '', '7683384435', NULL, '35.00', 'Cash Paid By Customer', '', '', '2019-09-26', '1', '229', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('6Q8M5O9LYB6W65C', '', NULL, 'VHOR9IDEXC', '35.00', 'Medicine Received By Customer', '1', '', '2019-09-26', '1', '230', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('DFXFGOU6BS4WSAN', 'EGLATNFLSV4A9VP', '2259793278', NULL, '240.00', 'Cash Paid By Customer', '', '', '2019-09-26', '1', '231', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('DFXFGOU6BS4WSAN', 'EGLATNFLSV4A9VP', NULL, 'UJQGFVDKDP', '240.00', 'Medicine Received By Customer', '1', '', '2019-09-26', '1', '232', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('B2HIPP2J8OZPZU9', '', '1498336438', NULL, '0.00', 'Cash Paid By Customer', '', '', '2019-09-26', '1', '233', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('B2HIPP2J8OZPZU9', '', NULL, 'CUJEBE4OIX', '0.00', 'Medicine Received By Customer', '1', '', '2019-09-26', '1', '234', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('R2OKPMM7WYZE1YA', 'P3NY6D1AKZQPHB7', '3569712289', NULL, '35.00', 'Cash Paid By Customer', '', '', '2019-09-26', '1', '235', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('R2OKPMM7WYZE1YA', 'P3NY6D1AKZQPHB7', NULL, 'HSFGI7KPSI', '35.00', 'Medicine Received By Customer', '1', '', '2019-09-26', '1', '236', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('NHG3SI17HWL6KVE', '', '8788656989', NULL, '70.00', 'Cash Paid By Customer', '', '', '2019-10-06', '1', '237', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('NHG3SI17HWL6KVE', '', NULL, '3SBHXHJYYZ', '70.00', 'Medicine Received By Customer', '1', '', '2019-10-06', '1', '238', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('YIJ6YCTWQA23PKZ', '', '4572666298', NULL, '250.00', 'Cash Paid By Customer', '', '', '2019-10-06', '1', '239', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('YIJ6YCTWQA23PKZ', '', NULL, '42CILCDHLR', '240.00', 'Medicine Received By Customer', '1', '', '2019-10-06', '1', '240', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('VPPA74XK7GGZFQC', 'P3NY6D1AKZQPHB7', '1928262497', NULL, '250.00', 'Cash Paid By Customer', '', '', '2019-10-06', '1', '241', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('VPPA74XK7GGZFQC', 'P3NY6D1AKZQPHB7', NULL, '3X5U14923A', '240.00', 'Medicine Received By Customer', '1', '', '2019-10-06', '1', '242', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('JVQ3MF61KD839NK', '', '1156572723', NULL, '0.00', 'Cash Paid By Customer', '', '', '2019-10-10', '1', '243', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('JVQ3MF61KD839NK', '', NULL, 'XRDY1X1A37', '400.00', 'Medicine Received By Customer', '1', '', '2019-10-10', '1', '244', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('COGLF3OOY25WPI1', 'P3NY6D1AKZQPHB7', '3458758819', NULL, '-10.00', 'Cash Paid By Customer', '', '', '2019-10-10', '1', '245', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('COGLF3OOY25WPI1', 'P3NY6D1AKZQPHB7', NULL, '698AAOHKMH', '0.00', 'Medicine Received By Customer', '1', '', '2019-10-10', '1', '246', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('2M7HXLZTVE4B8ZQ', '', '9972194591', NULL, '200.00', 'Cash Paid By Customer', '', '', '2019-10-10', '1', '247', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('2M7HXLZTVE4B8ZQ', '', NULL, 'T5IBCDIS9I', '200.00', 'Medicine Received By Customer', '1', '', '2019-10-10', '1', '248', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('O6DRL8JQN6DHTGA', 'P3NY6D1AKZQPHB7', '4813115177', NULL, '200.00', 'Cash Paid By Customer', '', '', '2019-10-10', '1', '249', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('O6DRL8JQN6DHTGA', 'P3NY6D1AKZQPHB7', NULL, 'TA7EORQ171', '200.00', 'Medicine Received By Customer', '1', '', '2019-10-10', '1', '250', 'd');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('R1HVOFHGIIAU16O', '', '4532655864', NULL, '50.00', 'Cash Paid By Customer', '', '', '2019-10-10', '1', '251', 'c');
INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `id`, `d_c`) VALUES ('R1HVOFHGIIAU16O', '', NULL, 'RSPP3VF2MR', '50.00', 'Medicine Received By Customer', '1', '', '2019-10-10', '1', '252', 'd');


#
# TABLE STRUCTURE FOR: daily_banking_add
#

DROP TABLE IF EXISTS `daily_banking_add`;

CREATE TABLE `daily_banking_add` (
  `banking_id` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `bank_id` varchar(100) NOT NULL,
  `deposit_type` varchar(255) NOT NULL,
  `transaction_type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `amount` float NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: daily_closing
#

DROP TABLE IF EXISTS `daily_closing`;

CREATE TABLE `daily_closing` (
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

#
# TABLE STRUCTURE FOR: designation
#

DROP TABLE IF EXISTS `designation`;

CREATE TABLE `designation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(150) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `designation` (`id`, `designation`, `details`) VALUES ('1', 'Hr', 'sdfsdf');
INSERT INTO `designation` (`id`, `designation`, `details`) VALUES ('2', 'Accountant', 'Accountant officer in sgmh');
INSERT INTO `designation` (`id`, `designation`, `details`) VALUES ('3', 'Engineer', 'Software Tester');


#
# TABLE STRUCTURE FOR: employee_history
#

DROP TABLE IF EXISTS `employee_history`;

CREATE TABLE `employee_history` (
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `employee_history` (`id`, `first_name`, `last_name`, `designation`, `phone`, `rate_type`, `hrate`, `email`, `blood_group`, `address_line_1`, `address_line_2`, `image`, `country`, `city`, `zip`) VALUES ('2', 'Md', 'Bosir', '1', '234234', '1', '123', 'bosir@sgmh.com', 'B+', 'sdfasd', 'fasdf', 'http://localhost/pharmacy8.5/my-assets/image/employee/45bb980a78158581f563ba0c7fec2175.png', 'Bangladesh', 'Dhaka', '1234');
INSERT INTO `employee_history` (`id`, `first_name`, `last_name`, `designation`, `phone`, `rate_type`, `hrate`, `email`, `blood_group`, `address_line_1`, `address_line_2`, `image`, `country`, `city`, `zip`) VALUES ('3', 'Tarin ', 'Khan', '2', '23645365', '1', '120', 'tarin@sgmh.com', 'A+', 'adfgf', 'fgfd', '', 'Bangladesh', 'Dhaka', '');
INSERT INTO `employee_history` (`id`, `first_name`, `last_name`, `designation`, `phone`, `rate_type`, `hrate`, `email`, `blood_group`, `address_line_1`, `address_line_2`, `image`, `country`, `city`, `zip`) VALUES ('4', 'Raisa', 'Khan', '3', '365789780778', '1', '0', '', 'B+', '', '', '', '', '', '');


#
# TABLE STRUCTURE FOR: employee_salary_payment
#

DROP TABLE IF EXISTS `employee_salary_payment`;

CREATE TABLE `employee_salary_payment` (
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `generate_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`, `salary_month`) VALUES ('1', '1', '2', '11.29', '0.09', '2', 'paid', '2019-05-23', 'Admin User', 'May 2019');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `generate_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`, `salary_month`) VALUES ('2', '2', '2', '1.25', '0.01', '3', '', '', '', 'June 2019');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `generate_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`, `salary_month`) VALUES ('3', '2', '3', '1.32', '0.01', '1', 'paid', '2019-06-13', 'Admin User', 'June 2019');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `generate_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`, `salary_month`) VALUES ('4', '3', '2', '0.00', '0.00', '0', '', '', '', 'October 2019');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `generate_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`, `salary_month`) VALUES ('5', '3', '3', '0.00', '0.00', '0', '', '', '', 'October 2019');


#
# TABLE STRUCTURE FOR: employee_salary_setup
#

DROP TABLE IF EXISTS `employee_salary_setup`;

CREATE TABLE `employee_salary_setup` (
  `e_s_s_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `sal_type` varchar(30) NOT NULL,
  `salary_type_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `create_date` date DEFAULT NULL,
  `update_date` datetime(6) DEFAULT NULL,
  `update_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `gross_salary` float NOT NULL,
  PRIMARY KEY (`e_s_s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('1', '2', '1', '1', '2.00', '2019-05-22', NULL, '', '125.46');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('2', '3', '1', '1', '5.00', '2019-06-13', NULL, '', '132');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('3', '3', '1', '3', '10.00', '2019-06-13', NULL, '', '132');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('4', '3', '1', '2', '5.00', '2019-06-13', NULL, '', '132');


#
# TABLE STRUCTURE FOR: expense
#

DROP TABLE IF EXISTS `expense`;

CREATE TABLE `expense` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `type` varchar(100) NOT NULL,
  `voucher_no` varchar(50) NOT NULL,
  `amount` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `expense` (`id`, `date`, `type`, `voucher_no`, `amount`) VALUES ('1', '2019-05-20', 'Gass Bill', '20190520095737', '500');
INSERT INTO `expense` (`id`, `date`, `type`, `voucher_no`, `amount`) VALUES ('2', '2019-05-30', 'Gass Bill', '20190530074715', '20');
INSERT INTO `expense` (`id`, `date`, `type`, `voucher_no`, `amount`) VALUES ('3', '2019-06-13', 'Pc', '20190613071049', '20000');
INSERT INTO `expense` (`id`, `date`, `type`, `voucher_no`, `amount`) VALUES ('4', '2019-06-16', 'Nasta', '20190616121331', '300');


#
# TABLE STRUCTURE FOR: expense_item
#

DROP TABLE IF EXISTS `expense_item`;

CREATE TABLE `expense_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expense_item_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `expense_item` (`id`, `expense_item_name`) VALUES ('1', 'Gass Bill');
INSERT INTO `expense_item` (`id`, `expense_item_name`) VALUES ('2', 'Pc');
INSERT INTO `expense_item` (`id`, `expense_item_name`) VALUES ('3', 'Nasta');


#
# TABLE STRUCTURE FOR: fixed_assets
#

DROP TABLE IF EXISTS `fixed_assets`;

CREATE TABLE `fixed_assets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(50) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `insert_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO `fixed_assets` (`id`, `item_code`, `item_name`, `price`, `insert_date`) VALUES ('1', '1233', 'Test Assets', '1500', '2019-05-28');
INSERT INTO `fixed_assets` (`id`, `item_code`, `item_name`, `price`, `insert_date`) VALUES ('3', '01', 'Laptop', '30000', '2019-06-18');
INSERT INTO `fixed_assets` (`id`, `item_code`, `item_name`, `price`, `insert_date`) VALUES ('4', '02', 'Desktop', '40000', '2019-06-18');
INSERT INTO `fixed_assets` (`id`, `item_code`, `item_name`, `price`, `insert_date`) VALUES ('5', '1234', 'Test Y', '120', '2019-10-05');
INSERT INTO `fixed_assets` (`id`, `item_code`, `item_name`, `price`, `insert_date`) VALUES ('6', '23434', 'UUU', '234234', '2019-10-05');


#
# TABLE STRUCTURE FOR: invoice
#

DROP TABLE IF EXISTS `invoice`;

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_id` varchar(30) DEFAULT NULL,
  `customer_id` varchar(100) NOT NULL,
  `date` date DEFAULT NULL,
  `total_amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `invoice` varchar(255) NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=utf8;

INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('1', '6421231175', 'S5NZ2Z2LXJFE11U', '2019-02-04', '70.00', '1000', '0.00', '0.00', '0.00', '0.00', NULL, 'Some text Here', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('2', '1s234234', '8LL9E636CFWVMD4', '0000-00-00', '4100.00', '1001', '0.00', '0.00', '0.00', '0.00', NULL, 'sdfs', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('3', '1s234235', 'S5NZ2Z2LXJFE11U', '2020-02-05', '650.00', '1002', '0.00', '0.00', '0.00', '0.00', NULL, 'sdfs', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('4', '3959999927', 'EGLATNFLSV4A9VP', '2019-02-08', '105.00', '1003', '0.00', '0.00', '0.00', '0.00', NULL, 'sdfsd', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('5', '2929982841', 'EGLATNFLSV4A9VP', '2019-02-08', '140.00', '1004', '0.00', '0.00', '0.00', '0.00', NULL, 'sadfsdf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('6', '2597346371', 'EGLATNFLSV4A9VP', '2019-02-08', '140.00', '1005', '0.00', '0.00', '0.00', '0.00', NULL, 'sdf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('7', '4744988398', 'S5NZ2Z2LXJFE11U', '2019-02-08', '240.00', '1006', '0.00', '0.00', '0.00', '0.00', NULL, '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('8', '6582891923', 'EGLATNFLSV4A9VP', '2019-02-08', '140.00', '1007', '0.00', '0.00', '0.00', '0.00', NULL, 'sdfsdf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('9', '7382188714', 'EGLATNFLSV4A9VP', '2019-02-08', '240.00', '1008', '0.00', '0.00', '0.00', '0.00', NULL, '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('10', '8681471136', '789XC11EWYDN5XT', '2019-02-08', '35.00', '1009', '0.00', '0.00', '0.00', '0.00', NULL, '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('11', '2243542476', 'EGLATNFLSV4A9VP', '2019-02-09', '70.00', '1010', '0.00', '0.00', '0.00', '0.00', NULL, '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('12', '9838815157', 'EGLATNFLSV4A9VP', '2019-02-09', '70.00', '1011', '0.00', '0.00', '0.00', '0.00', NULL, '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('13', '8721492818', 'EGLATNFLSV4A9VP', '2019-02-09', '70.00', '1012', '0.00', '0.00', '0.00', '0.00', NULL, '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('14', '7341765181', 'EGLATNFLSV4A9VP', '2019-02-09', '35.00', '1013', '0.00', '0.00', '0.00', '0.00', NULL, '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('15', '1128441893', 'EGLATNFLSV4A9VP', '2019-02-09', '35.00', '1014', '0.00', '0.00', '0.00', '0.00', NULL, 'sdfasd', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('16', '8864932286', 'EGLATNFLSV4A9VP', '2019-05-16', '70.00', '1015', '0.00', '0.00', '0.00', '0.00', NULL, 'sdfsdf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('17', '5732315239', 'WKQJYOTTCBLDS3X', '2019-05-16', '70.00', '1016', '0.00', '0.00', '0.00', '0.00', NULL, '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('18', '6223874951', 'P3NY6D1AKZQPHB7', '2019-05-20', '367.20', '1017', '0.00', '0.00', '7.20', '0.00', NULL, 'testing sale ', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('19', '5578879796', 'P3NY6D1AKZQPHB7', '2019-05-20', '367.20', '1018', '0.00', '0.00', '7.20', '0.00', NULL, '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('20', '4399776421', 'P3NY6D1AKZQPHB7', '2019-05-21', '415.84', '1019', '0.00', '0.00', '25.84', '726.98', '1', 'sdfasdf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('21', '2394811457', 'EGLATNFLSV4A9VP', '2019-05-21', '381.21', '1020', '0.00', '0.00', '21.21', '0.00', '1', 'sdfsadf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('22', '6757379735', 'P3NY6D1AKZQPHB7', '2019-05-21', '254.14', '1021', '0.00', '0.00', '14.14', '142.82', '1', 'sdfsadf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('23', '9755728113', 'P3NY6D1AKZQPHB7', '2019-05-21', '450.01', '1022', '37.20', '10.00', '27.21', '0.00', '1', 'This is test invoicess', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('24', '5161369973', 'BULO85O55VU3IQC', '2019-05-23', '240.00', '1023', '0.00', '0.00', '0.00', '0.00', '1', 'sadfsadf', '1', '2', 'IGI844263K');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('25', '6914845124', 'BULO85O55VU3IQC', '2019-05-23', '120.00', '1024', '0.00', '0.00', '0.00', '0.00', '1', 'asdfsadf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('26', '4258396635', 'BULO85O55VU3IQC', '2019-05-25', '600.00', '1025', '0.00', '0.00', '0.00', '0.00', '1', 'due 300', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('27', '5628231696', 'BULO85O55VU3IQC', '2019-05-30', '170.00', '1026', '0.00', '0.00', '0.00', '300.00', '1', 'sdfsdfsadf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('28', '8915554399', '', '2019-05-30', '31.76', '1027', '0.00', '0.00', '1.76', '0.00', '1', 'dfsasdf', '1', '2', 'IGI844263K');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('29', '2636312184', '', '2019-05-30', '31.76', '1028', '0.00', '0.00', '1.76', '0.00', '1', 'sdfdsf', '1', '2', 'IGI844263K');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('30', '7337717641', 'BULO85O55VU3IQC', '2019-05-30', '31.76', '1029', '0.00', '0.00', '1.76', '70.00', '1', 'sdfdsf', '1', '2', 'IGI844263K');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('31', '2499261131', '', '2019-05-30', '31.76', '1030', '0.00', '0.00', '1.76', '0.00', '1', 'sdfsdf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('32', '9923112343', '', '2019-05-30', '31.76', '1031', '0.00', '0.00', '1.76', '0.00', '1', 'sdfsdf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('33', '9511562226', 'P3NY6D1AKZQPHB7', '2019-05-30', '31.76', '1032', '0.00', '0.00', '1.76', '0.00', '1', 'sdfsdf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('34', '2822797799', 'P3NY6D1AKZQPHB7', NULL, '31.76', '1033', '0.00', '0.00', '1.76', '0.00', '1', NULL, '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('35', '2733838696', 'P3NY6D1AKZQPHB7', '2019-05-30', '31.76', '1034', '0.00', '0.00', '1.76', '0.00', '1', NULL, '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('36', '1194992873', '', '2019-06-15', '13342.22', '1035', '0.00', '0.00', '742.22', '0.00', '1', '', '1', '2', 'UR9A6S7I92');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('37', '4717379265', '', '2019-06-15', '9953.72', '1036', '0.00', '0.00', '553.72', '0.00', '1', '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('38', '5875993999', 'VP9733OXV5XSFTQ', '2019-06-15', '7412.34', '1037', '0.00', '0.00', '412.34', '0.00', '1', '', '1', '2', 'UR9A6S7I92');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('39', '1337844645', '', '2019-06-16', '1058.91', '1038', '0.00', '0.00', '58.91', '0.00', '1', '', '1', '2', 'UR9A6S7I92');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('40', '2893355527', '', '2019-06-16', '1058.91', '1039', '0.00', '0.00', '58.91', '0.00', '1', '', '1', '2', '2OVBJZ6NJX');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('41', '1549954566', '', '2019-06-16', '1058.91', '1040', '0.00', '0.00', '58.91', '0.00', '1', '', '1', '2', '2OVBJZ6NJX');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('42', '1716929527', '', '2019-06-16', '2117.81', '1041', '0.00', '0.00', '117.81', '0.00', '1', '', '1', '2', '2OVBJZ6NJX');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('43', '6368534916', 'IFD4RYQ1NLHX1H2', '2019-06-16', '4235.62', '1042', '0.00', '0.00', '235.62', '0.00', '1', 'sdfsd', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('44', '9374992955', 'FTIVY6Q8W66TA4F', '2019-06-16', '3176.72', '1043', '0.00', '0.00', '176.72', '0.00', '1', '', '1', '2', 'UR9A6S7I92');
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('45', '2357444577', '', '2019-09-15', '240.00', '1044', '0.00', '0.00', '0.00', '0.00', '1', '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('46', '4397745619', '', '2019-09-15', '240.00', '1045', '0.00', '0.00', '0.00', '0.00', '1', '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('47', '2889369457', '', '2019-09-15', '120.00', '1046', '0.00', '0.00', '0.00', '0.00', '1', '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('48', '3497846252', '', '2019-09-15', '120.00', '1047', '0.00', '0.00', '0.00', '0.00', '1', '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('49', '4349145515', '', '2019-09-18', '50.00', '1048', '0.00', '0.00', '0.00', '0.00', '1', '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('50', '4819859856', '', '2019-09-18', '35.00', '1049', '0.00', '0.00', '0.00', '0.00', '1', '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('51', '9188745284', '', '2019-09-18', '35.00', '1050', '0.00', '0.00', '0.00', '0.00', '1', '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('52', '6887248818', '', '2019-09-18', '70.00', '1051', '0.00', '0.00', '0.00', '0.00', '1', '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('53', '2556888428', '', '2019-09-18', '70.00', '1052', '0.00', '0.00', '0.00', '0.00', '1', '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('54', '8232565794', '', '2019-09-19', '70.00', '1053', '0.00', '0.00', '0.00', '0.00', '1', '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('55', '5816359211', '', '2019-09-22', '240.00', '1054', '0.00', '0.00', '0.00', '0.00', '1', '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('56', '7589434143', '', '2019-09-22', '35.00', '1055', '0.00', '0.00', '0.00', '0.00', '1', '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('57', '2457865981', '', '2019-09-22', '120.00', '1056', '0.00', '0.00', '0.00', '0.00', '1', 'sfdsdf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('58', '1984311715', '', '2019-09-22', '120.00', '1057', '0.00', '0.00', '0.00', '0.00', '1', 'sfdsdf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('59', '3246988817', '', '2019-09-22', '0.00', '1058', '0.00', '0.00', '0.00', '0.00', '1', '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('60', '6342619132', '', '2019-09-22', '500.00', '1059', '0.00', '0.00', '0.00', '0.00', '1', '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('61', '8274592153', '', '2019-09-22', '70.00', '1060', '0.00', '0.00', '0.00', '0.00', '1', 'sdfsadf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('62', '3964297319', '', '2019-09-22', '35.00', '1061', '0.00', '0.00', '0.00', '0.00', '1', 'dfgdsfg', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('63', '4849938327', '', '2019-09-22', '120.00', '1062', '0.00', '0.00', '0.00', '0.00', '1', 'fdgdfg', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('64', '4366657224', 'EGLATNFLSV4A9VP', '2019-09-22', '35.00', '1063', '0.00', '0.00', '0.00', '0.00', '1', 'sdfasdf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('65', '6572548126', 'P3NY6D1AKZQPHB7', '2019-09-22', '120.00', '1064', '0.00', '0.00', '0.00', '0.00', '1', 'sadfsadf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('66', '7476575834', '', '2019-09-25', '35.00', '1065', '0.00', '0.00', '0.00', '0.00', '1', 'sdf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('67', '2546488688', 'EGLATNFLSV4A9VP', '2019-09-25', '0.00', '1066', '0.00', '0.00', '0.00', '0.00', '1', 'sdfsad', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('68', '2498163329', 'P3NY6D1AKZQPHB7', '2019-09-25', '60.00', '1067', '0.00', '0.00', '0.00', '0.00', '1', '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('69', '2682413866', '', '2019-09-25', '476.51', '1068', '0.00', '0.00', '26.51', '0.00', '1', 'demo text', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('70', '9895528273', 'EGLATNFLSV4A9VP', '2019-09-25', '317.67', '1069', '0.00', '0.00', '17.67', '0.00', '1', 'sdfasdf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('71', '8225271174', 'EGLATNFLSV4A9VP', '2019-09-25', '157.25', '1070', '1.50', '0.00', '8.75', '0.00', '1', 'sdfasd', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('72', '4364231861', 'EGLATNFLSV4A9VP', '2019-09-25', '157.25', '1071', '1.50', '0.00', '8.75', '0.00', '1', 'some text here', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('73', '9375835462', 'P3NY6D1AKZQPHB7', '2019-09-26', '63.54', '1072', '0.00', '0.00', '3.54', '0.00', '1', NULL, '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('74', '7478513273', 'P3NY6D1AKZQPHB7', '2019-09-26', '91.76', '1073', '0.00', '0.00', '1.76', '0.00', '1', NULL, '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('75', '7949351373', '', '2019-09-26', '240.00', '1074', '0.00', '0.00', '0.00', '0.00', '1', 'sdfsad', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('76', '9537276848', '', '2019-09-26', '30.00', '1075', '0.00', '0.00', '0.00', '0.00', '1', 'sdfsad', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('77', '3439327186', 'EGLATNFLSV4A9VP', '2019-09-26', '30.00', '1076', '0.00', '0.00', '0.00', '0.00', '1', 'sdfsad', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('78', '6417174793', '', '2019-09-26', '240.00', '1077', '0.00', '0.00', '0.00', '0.00', '1', 'sdfasd', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('79', '3451623335', '', '2019-09-26', '240.00', '1078', '0.00', '0.00', '0.00', '0.00', '1', 'sdfasd', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('80', '5136766345', 'P3NY6D1AKZQPHB7', '2019-09-26', '31.76', '1079', '0.00', '0.00', '1.76', '0.00', '1', NULL, '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('81', '2527777432', 'S5NZ2Z2LXJFE11U', '2019-09-26', '70.00', '1080', '0.00', '0.00', '0.00', '450.00', '1', 'sdfasdf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('82', '4232219582', 'S5NZ2Z2LXJFE11U', '2019-09-26', '70.00', '1081', '0.00', '0.00', '0.00', '450.00', '1', 'sdfasdf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('83', '8469112396', '', '2019-09-26', '35.00', '1082', '0.00', '0.00', '0.00', '0.00', '1', 'sadfasdf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('84', '7683384435', '', '2019-09-26', '35.00', '1083', '0.00', '0.00', '0.00', '0.00', '1', 'sdfasdf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('85', '2259793278', 'EGLATNFLSV4A9VP', '2019-09-26', '240.00', '1084', '0.00', '0.00', '0.00', '0.00', '1', 'sdfsadf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('86', '1498336438', '', '2019-09-26', '0.00', '1085', '0.00', '0.00', '0.00', '0.00', '1', '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('87', '3569712289', 'P3NY6D1AKZQPHB7', '2019-09-26', '35.00', '1086', '0.00', '0.00', '0.00', '0.00', '1', NULL, '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('88', '8788656989', '', '2019-10-06', '70.00', '1087', '0.00', '0.00', '0.00', '0.00', '1', 'dfgdsafg', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('89', '4572666298', '', '2019-10-06', '240.00', '1088', '0.00', '0.00', '0.00', '0.00', '1', 'sadfasdf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('90', '1928262497', 'P3NY6D1AKZQPHB7', '2019-10-06', '240.00', '1089', '0.00', '0.00', '0.00', '0.00', '1', 'sdfsadf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('91', '1156572723', '', '2019-10-10', '400.00', '1090', '0.00', '0.00', '0.00', '0.00', '1', 'sdfsadf', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('93', '9972194591', '', '2019-10-10', '200.00', '1091', '0.00', '0.00', '0.00', '0.00', '1', '', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('94', '4813115177', 'P3NY6D1AKZQPHB7', '2019-10-10', '200.00', '1092', '0.00', '0.00', '0.00', '0.00', '1', 'asdfasd', '1', '1', NULL);
INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `invoice_discount`, `total_tax`, `prevous_due`, `sales_by`, `invoice_details`, `status`, `payment_type`, `bank_id`) VALUES ('95', '4532655864', '', '2019-10-10', '50.00', '1093', '0.00', '0.00', '0.00', '0.00', '1', '', '1', '1', NULL);


#
# TABLE STRUCTURE FOR: invoice_details
#

DROP TABLE IF EXISTS `invoice_details`;

CREATE TABLE `invoice_details` (
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
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;

INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('1', '933543334896866', '6421231175', '58391549', '111', NULL, '2', '35.00', '30.00', '70.00', '0', '0.00', '70', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('2', '881387948547151', '1s234234', '58391549', '111', NULL, '10', '35.00', '30.00', '100.00', NULL, '0.00', '100', '250.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('3', '894564145468646', '1s234234', '58391549', '111', NULL, '10', '35.00', '30.00', '100.00', NULL, '0.00', '100', '250.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('4', '927847978762643', '1s234234', '58391549', '111', NULL, '10', '35.00', '30.00', '100.00', NULL, '0.00', '100', '250.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('5', '837128325767279', '1s234234', '58391549', '111', NULL, '10', '35.00', '30.00', '100.00', NULL, '0.00', '100', '250.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('6', '22995325', '1s234234', '58391549', '111', NULL, '10', '35.00', '30.00', '100.00', NULL, '0.00', '100', '250.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('7', '23138776', '1s234234', '58391549', '111', NULL, '10', '35.00', '30.00', '100.00', NULL, '0.00', '100', '250.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('8', '84881356', '1s234234', '58391549', '111', NULL, '10', '35.00', '30.00', '100.00', NULL, '0.00', '100', '250.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('9', '44358785', '1s234234', '58391549', '111', NULL, '10', '35.00', '30.00', '100.00', NULL, '0.00', '100', '250.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('10', '74198121', '1s234234', '58391549', '111', NULL, '10', '35.00', '30.00', '100.00', '0', '0.00', '100', '250.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('11', '73372498', '1s234234', '95173215', '222', NULL, '5', '60.00', '40.00', '25.00', '0', '0.00', '300', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('12', '26825128', '1s234234', '58391549', '111', NULL, '10', '35.00', '30.00', '100.00', '0', '0.00', '100', '250.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('13', '15965853', '1s234234', '95173215', '222', NULL, '5', '60.00', '40.00', '25.00', '0', '0.00', '300', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('14', '36535627', '1s234235', '58391549', '111', NULL, '10', '35.00', '30.00', '100.00', '0', '0.00', '100', '250.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('15', '69192139', '1s234235', '95173215', '222', NULL, '5', '60.00', '40.00', '25.00', '0', '0.00', '300', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('16', '695154147221815', '2929982841', '58391549', '112', NULL, '4', '35.00', '30.00', '140.00', '0', '0.00', '140', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('17', '788983927546293', '2597346371', '58391549', '112', NULL, '4', '35.00', '30.00', '140.00', '0', '0.00', '140', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('18', '543898644458689', '4744988398', '95173215', '222', NULL, '4', '60.00', '40.00', '240.00', '0', '0.00', '240', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('19', '854385353853777', '6582891923', '58391549', '112', NULL, '4', '35.00', '30.00', '140.00', '0', '0.00', '140', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('20', '176855281148345', '7382188714', '95173215', '222', NULL, '4', '60.00', '40.00', '240.00', '0', '0.00', '240', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('21', '477555438478513', '8681471136', '58391549', '112', NULL, '1', '35.00', '30.00', '35.00', '0', '0.00', '35', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('22', '955432832714697', '2243542476', '58391549', '112', NULL, '2', '35.00', '30.00', '70.00', '0', '0.00', '70', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('23', '759698451976174', '9838815157', '58391549', '112', NULL, '2', '35.00', '30.00', '70.00', '0', '0.00', '70', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('24', '478548375298218', '8721492818', '58391549', '112', NULL, '2', '35.00', '30.00', '70.00', '0', '0.00', '70', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('25', '584797896854734', '7341765181', '58391549', '112', NULL, '1', '35.00', '30.00', '35.00', '0', '0.00', '35', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('26', '638511153754766', '1128441893', '58391549', '112', NULL, '1', '35.00', '30.00', '35.00', '0', '0.00', '35', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('27', '688674353428791', '8864932286', '58391549', '112', NULL, '2', '35.00', '30.00', '70.00', '0', '0.00', '0', '70.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('28', '833568225934768', '5732315239', '58391549', '112', NULL, '2', '35.00', '30.00', '70.00', '0', '0.00', '0', '70.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('32', '578541615844843', '6223874951', '36273326', '5643', NULL, '3', '120.00', '0.00', '360.00', '0', '7.20', '0', '367.20', '0');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('33', '315197996571848', '5578879796', '36273326', '5643', NULL, '3', '120.00', '100.00', '360.00', '0', '7.20', '367', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('34', '357111926199536', '4173683884', '36273326', '5643', NULL, '2', '120.00', '100.00', '240.00', '0', '2.40', '1000', '726.98', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('35', '233899849158376', '4173683884', '39763666', '2345', NULL, '2', '50.00', '45.00', '100.00', '2', '4.75', '1000', '726.98', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('36', '798616923173124', '4399776421', '36273326', '5643', NULL, '2', '120.00', '100.00', '240.00', '0', '2.40', '1000', '142.82', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('37', '532579672863957', '4399776421', '39763666', '2345', NULL, '3', '50.00', '45.00', '150.00', '0', '4.75', '1000', '142.82', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('38', '423768268393616', '6757379735', '36273326', '5643', NULL, '2', '120.00', '100.00', '240.00', '0', '2.40', '397', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('48', '922174588564789', '9755728113', '36273326', '5643', NULL, '3', '120.00', '0.00', '360.00', '2', '1.76', '450', '0.00', '0');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('47', '789981534226443', '9755728113', '39763666', '2345', NULL, '2', '50.00', '0.00', '100.00', '0', '1.80', '450', '0.00', '0');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('49', '548826225684645', '5161369973', '36273326', '5643', NULL, '2', '120.00', '100.00', '240.00', '0', '0.00', '240', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('50', '859153369378953', '6914845124', '36273326', '5643', NULL, '1', '120.00', '100.00', '120.00', '0', '0.00', '120', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('51', '411622444317881', '4258396635', '36273326', '5643', NULL, '5', '120.00', '100.00', '600.00', '0', '0.00', '300', '300.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('52', '462539327772749', '5628231696', '39763666', '2345', NULL, '1', '50.00', '45.00', '50.00', '0', '0.00', '400', '70.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('53', '553753116886122', '5628231696', '36273326', '5643', NULL, '1', '120.00', '100.00', '120.00', '0', '0.00', '400', '70.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('54', '246973844525628', '8915554399', '99882539', '1234', NULL, '1', '30.00', '20.00', '30.00', '0', '0.30', '32', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('55', '282591247391283', '7337717641', '99882539', '1234', NULL, '1', '30.00', '20.00', '30.00', '0', '0.30', '102', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('56', '112581599129773', '9511562226', '99882539', '1234', NULL, '1', '30.00', '20.00', '30.00', '0', '0.30', '32', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('57', '274651521952857', '2733838696', '99882539', '1234', NULL, '1', '30.00', '20.00', '30.00', '0', '0.30', '32', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('58', '566339418143717', '1194992873', '62847656', '777', NULL, '6', '2000.00', '1000.00', '12000.00', '0', '120.00', '5000', '8342.22', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('59', '321557977924971', '1194992873', '66749416', '333', NULL, '3', '200.00', '190.00', '600.00', '0', '237.60', '5000', '8342.22', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('60', '666831568472579', '4717379265', '62847656', '777', NULL, '4', '2000.00', '1000.00', '8000.00', '0', '80.00', '9954', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('61', '717645873442472', '4717379265', '66749416', '333', NULL, '7', '200.00', '190.00', '1400.00', '0', '158.40', '9954', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('62', '267826577229752', '5875993999', '67564716', '789', NULL, '1', '7000.00', '50000.00', '7000.00', '0', '70.00', '7412', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('63', '389934112964273', '1337844645', '92611999', '67898', NULL, '1', '1000.00', '700.00', '1000.00', '0', '10.00', '500', '558.91', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('64', '944462124313836', '2893355527', '33939612', '78901', NULL, '2', '500.00', '300.00', '1000.00', '0', '10.00', '0', '1058.91', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('65', '259616821959116', '1549954566', '33939612', '78901', NULL, '2', '500.00', '300.00', '1000.00', '0', '10.00', '1059', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('66', '975493382626812', '1716929527', '62847656', '777', NULL, '1', '2000.00', '1000.00', '2000.00', '0', '20.00', '1000', '1117.81', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('67', '989722989264559', '6368534916', '62847656', '777', NULL, '2', '2000.00', '1000.00', '4000.00', '0', '40.00', '2000', '2235.62', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('68', '627686546351156', '9374992955', '33939612', '78901', NULL, '6', '500.00', '300.00', '3000.00', '0', '30.00', '2000', '1176.72', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('69', '389852464957475', '9374992955', '33939612', '78901', NULL, '-3', '500.00', '0.00', '-1500.00', '0', '0.00', '-1500', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('70', '876656836924571', '2357444577', '36273326', '5643', NULL, '2', '120.00', '100.00', '240.00', '0', '0.00', '240', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('71', '386558577856737', '4397745619', '36273326', '5643', NULL, '2', '120.00', '100.00', '240.00', '0', '0.00', '240', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('72', '496838342847324', '2889369457', '36273326', '5643', NULL, '1', '120.00', '100.00', '120.00', '0', '0.00', '120', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('73', '243944784392883', '3497846252', '36273326', '5643', NULL, '1', '120.00', '100.00', '120.00', '0', '0.00', '120', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('74', '558954399292192', '4349145515', '39763666', 'Select One', NULL, '1', '50.00', '45.00', '50.00', '0', '0.00', '50', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('75', '562883567265364', '4819859856', '58391549', 'Select One', NULL, '1', '35.00', '30.00', '35.00', '0', '0.00', '35', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('76', '231462948291882', '9188745284', '58391549', '114', NULL, '1', '35.00', '30.00', '35.00', '0', '0.00', '35', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('77', '845811282498156', '6887248818', '58391549', '114', NULL, '2', '35.00', '30.00', '70.00', '0', '0.00', '70', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('78', '372385986474244', '2556888428', '58391549', '114', NULL, '2', '35.00', '30.00', '70.00', '0', '0.00', '70', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('79', '278992836476617', '8232565794', '58391549', '114', NULL, '2', '35.00', '30.00', '70.00', '0', '0.00', '70', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('80', '726275163977986', '5816359211', '95173215', '222', NULL, '4', '60.00', '40.00', '240.00', '0', '0.00', '240', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('81', '637393495793645', '7589434143', '58391549', '114', NULL, '1', '35.00', '30.00', '35.00', '0', '0.00', '35', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('82', '336943252566747', '3246988817', '36273326', '5643', NULL, '0', '120.00', '100.00', '0.00', '0', '0.00', '0', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('83', '271372678433611', '6342619132', '33939612', '78901', NULL, '1', '500.00', '300.00', '500.00', '0', '0.00', '500', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('84', '271258141173539', '8274592153', '58391549', '114', NULL, '2', '35.00', '30.00', '70.00', '0', '0.00', '70', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('85', '849322277667217', '3964297319', '58391549', '114', NULL, '1', '35.00', '30.00', '35.00', '0', '0.00', '35', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('86', '733647138451532', '4849938327', '36273326', '5643', NULL, '1', '120.00', '100.00', '120.00', '0', '0.00', '120', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('87', '692251924735515', '4366657224', '58391549', '114', NULL, '1', '35.00', '30.00', '35.00', '0', '0.00', '35', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('88', '465458956185896', '6572548126', '36273326', '5643', NULL, '1', '120.00', '100.00', '120.00', '0', '0.00', '120', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('89', '255385996515831', '7476575834', '58391549', '114', NULL, '1', '35.00', '30.00', '35.00', '0', '0.00', '35', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('90', '645171795663967', '2546488688', '36273326', '5643', NULL, '0', '120.00', '100.00', '0.00', '0', '0.00', '0', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('91', '753173747952746', '2498163329', '99882539', '1234', NULL, '2', '30.00', '20.00', '60.00', '0', '0.00', '60', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('92', '995257868815979', '2682413866', '880196268664', '2342', NULL, '3', '150.00', '120.00', '450.00', '0', '4.50', '477', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('93', '632437213135372', '9895528273', '880196268664', '2342', NULL, '2', '150.00', '120.00', '300.00', '0', '3.00', '318', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('94', '495367326411122', '8225271174', '880196268664', '2342', NULL, '1', '150.00', '120.00', '150.00', '1', '1.49', '157', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('95', '746414838459453', '4364231861', '880196268664', '2342', NULL, '1', '150.00', '120.00', '150.00', '1', '1.49', '157', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('96', '696196972849173', '9375835462', '99882539', '1234', NULL, '2', '30.00', '20.00', '60.00', '0', '0.60', '64', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('97', '962386182239311', '7478513273', '95173215', '222', NULL, '1', '60.00', '40.00', '60.00', '0', '0.00', '92', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('98', '621952592962917', '7478513273', '99882539', '1234', NULL, '1', '30.00', '20.00', '30.00', '0', '0.00', '92', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('99', '935729282843599', '5136766345', '99882539', '1234', NULL, '1', '30.00', '20.00', '30.00', '0', '0.30', '32', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('100', '926783498955117', '7683384435', '58391549', '114', NULL, '1', '35.00', '30.00', '35.00', '0', '0.00', '35', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('101', '439365443153897', '2259793278', '36273326', '5643', NULL, '2', '120.00', '100.00', '240.00', '0', '0.00', '240', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('102', '881758233339937', '1498336438', '36273326', '5643', NULL, '0', '120.00', '100.00', '0.00', '0', '0.00', '0', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('103', '318668951521566', '3569712289', '58391549', '114', NULL, '1', '35.00', '30.00', '35.00', '0', '0.00', '35', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('104', '828723643245921', '8788656989', '58391549', 'Select One', NULL, '2', '35.00', '30.00', '70.00', '0', '0.00', '70', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('105', '396282869895512', '4572666298', '22394388', '01234', NULL, '2', '120.00', '100.00', '240.00', '0', '0.00', '250', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('106', '179495882276426', '1928262497', '22394388', '01234', NULL, '2', '120.00', '100.00', '240.00', '0', '0.00', '250', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('107', '839444833815421', '1156572723', '34126953', '8934', NULL, '4', '100.00', '90.00', '400.00', '0', '0.00', '0', '400.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('109', '149236619792985', '9972194591', '34126953', '8934', NULL, '2', '100.00', '90.00', '200.00', '0', '0.00', '200', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('110', '468657969679633', '4813115177', '34126953', '8934', NULL, '2', '100.00', '90.00', '200.00', '0', '0.00', '200', '0.00', '1');
INSERT INTO `invoice_details` (`id`, `invoice_details_id`, `invoice_id`, `product_id`, `batch_id`, `cartoon`, `quantity`, `rate`, `manufacturer_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES ('111', '424482177792496', '4532655864', '75217998', '12312', NULL, '1', '50.00', '40.00', '50.00', '0', '0.00', '50', '0.00', '1');


#
# TABLE STRUCTURE FOR: language
#

DROP TABLE IF EXISTS `language`;

CREATE TABLE `language` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `phrase` text NOT NULL,
  `english` text,
  `bangla` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=899 DEFAULT CHARSET=utf8;

INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('1', 'user_profile', 'User Profile', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('2', 'setting', 'Web Setting', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('3', 'language', 'Language', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('4', 'manage_users', 'Manage Users', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('5', 'add_user', 'Add User', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('6', 'manage_company', 'Manage Company', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('7', 'web_settings', 'Software Settings', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('8', 'manage_accounts', 'Manage Accounts', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('9', 'create_accounts', 'Create Accounts', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('10', 'manage_bank', 'Manage Bank', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('11', 'add_new_bank', 'Add New Bank', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('12', 'settings', 'Settings', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('13', 'closing_report', 'Closing Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('14', 'closing', 'Closing', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('15', 'cheque_manager', 'Cheque Manager', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('16', 'accounts_summary', 'Accounts Summary', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('17', 'expense', 'Expense', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('18', 'income', 'Income', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('19', 'accounts', 'Accounts', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('20', 'stock_report', 'Stock Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('21', 'stock', 'Stock', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('22', 'pos_invoice', 'POS Invoice', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('23', 'manage_invoice', 'Manage Invoice ', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('24', 'new_invoice', 'New Invoice', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('25', 'invoice', 'Invoice', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('26', 'manage_purchase', 'Manage Purchase', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('27', 'add_purchase', 'Add Purchase', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('28', 'purchase', 'Purchase', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('29', 'paid_customer', 'Paid Customer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('30', 'manage_customer', 'Manage Customer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('31', 'add_customer', 'Add Customer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('32', 'customer', 'Customer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('33', 'manufacturer_payment_actual', 'Manufacturer Payment Actual', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('34', 'manufacturer_sales_summary', 'Manufacturer  Sales Summary', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('35', 'manufacturer_sales_details', 'Manufacturer Sales Details', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('36', 'manufacturer_ledger', 'Manufacturer Ledger', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('37', 'manage_manufacturer', 'Manage Manufacturer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('38', 'add_manufacturer', 'Add Manufacturer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('39', 'manufacturer', 'Manufacturer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('40', 'product_statement', 'Medicine Statement', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('41', 'manage_product', 'Manage Medicine', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('42', 'add_product', 'Add Medicine', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('43', 'product', 'Medicine', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('44', 'manage_category', 'Manage Category', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('45', 'add_category', 'Add Category', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('46', 'category', 'Medicine Category', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('47', 'sales_report_product_wise', 'Sales Report (Medicine Wise)', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('48', 'purchase_report', 'Purchase Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('49', 'sales_report', 'Sales Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('50', 'todays_report', 'Todays Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('51', 'report', 'Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('52', 'dashboard', 'Dashboard', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('53', 'online', 'Online', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('54', 'logout', 'Logout', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('56', 'total_purchase', 'Total Purchase', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('57', 'total_amount', 'Total Amount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('58', 'manufacturer_name', 'Manufacturer  Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('59', 'invoice_no', 'Invoice No', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('60', 'purchase_date', 'Purchase Date', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('61', 'todays_purchase_report', 'Todays Purchase Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('62', 'total_sales', 'Total Sales', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('63', 'customer_name', 'Customer Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('64', 'sales_date', 'Sales Date', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('65', 'todays_sales_report', 'Todays Sales Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('66', 'home', 'Home', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('67', 'todays_sales_and_purchase_report', 'Todays sales and purchase report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('68', 'total_ammount', 'Total Amount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('69', 'rate', 'Sale Price', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('70', 'product_model', 'Medicine Type', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('71', 'product_name', 'Medicine Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('72', 'search', 'Search', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('73', 'end_date', 'End Date', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('74', 'start_date', 'Start Date', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('75', 'total_purchase_report', 'Total Purchase Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('76', 'total_sales_report', 'Total Sales Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('77', 'total_seles', 'Total Sales', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('78', 'all_stock_report', 'All Stock Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('79', 'search_by_product', 'Search By Medicine', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('80', 'date', 'Date', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('81', 'print', 'Print', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('82', 'stock_date', 'Stock Date', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('83', 'print_date', 'Print Date', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('84', 'sales', 'Sales', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('85', 'price', 'Price', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('86', 'sl', 'SL.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('87', 'add_new_category', 'Add new category', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('88', 'category_name', 'Category Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('89', 'save', 'Save', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('90', 'delete', 'Delete', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('91', 'update', 'Update', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('92', 'action', 'Action', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('93', 'manage_your_category', 'Manage your category ', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('94', 'category_edit', 'Category Edit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('95', 'status', 'Status', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('96', 'active', 'Active', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('97', 'inactive', 'Inactive', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('98', 'save_changes', 'Save Changes', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('99', 'save_and_add_another', 'Save And Add Another', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('100', 'model', 'Medicine Type', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('101', 'manufacturer_price', 'Manufacturer Price', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('102', 'sell_price', 'Sell Price', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('103', 'image', 'Image', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('104', 'select_one', 'Select One', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('105', 'details', 'Details', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('106', 'new_product', 'New Medicine', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('107', 'add_new_product', 'Add new medicine', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('108', 'barcode', 'Barcode', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('109', 'qr_code', 'Qr-Code', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('110', 'product_details', 'Medicine Details', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('111', 'manage_your_product', 'Manage your medicine', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('112', 'product_edit', 'Medicine Edit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('113', 'edit_your_product', 'Edit your medicine', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('114', 'cancel', 'Cancel', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('115', 'incl_vat', 'Incl. Vat', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('116', 'money', 'Dollar', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('117', 'grand_total', 'Grand Total', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('118', 'quantity', 'Quantity', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('119', 'product_report', 'Medicine Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('120', 'product_sales_and_purchase_report', 'Medicine sales and purchase report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('121', 'previous_stock', 'Previous Stock', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('122', 'out', 'Out', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('123', 'in', 'In', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('124', 'to', 'To', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('125', 'previous_balance', 'Previous Balance', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('126', 'customer_address', 'Customer Address', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('127', 'customer_mobile', 'Customer Mobile', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('128', 'customer_email', 'Customer Email', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('129', 'add_new_customer', 'Add new customer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('130', 'balance', 'Balance', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('131', 'mobile', 'Mobile', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('132', 'address', 'Address', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('133', 'manage_your_customer', 'Manage your customer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('134', 'customer_edit', 'Customer Edit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('135', 'paid_customer_list', 'Paid Customer List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('136', 'ammount', 'Amount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('137', 'customer_ledger', 'Customer Ledger', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('138', 'manage_customer_ledger', 'Manage Customer Ledger', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('139', 'customer_information', 'Customer Information', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('140', 'debit_ammount', 'Debit Amount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('141', 'credit_ammount', 'Credit Amount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('142', 'balance_ammount', 'Balance Amount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('143', 'receipt_no', 'Receipt NO', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('144', 'description', 'Description', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('145', 'debit', 'Debit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('146', 'credit', 'Credit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('147', 'item_information', 'Item Information', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('148', 'total', 'Total', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('149', 'please_select_manufacturer', 'Please Select Manufacturer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('150', 'submit', 'Submit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('151', 'submit_and_add_another', 'Submit And Add Another One', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('152', 'add_new_item', 'Add New Item', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('153', 'manage_your_purchase', 'Manage your purchase', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('154', 'purchase_edit', 'Purchase Edit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('155', 'purchase_ledger', 'Purchase Ledger', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('156', 'invoice_information', 'Invoice Information', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('157', 'paid_ammount', 'Paid Amount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('158', 'discount', 'Discount / Pcs.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('159', 'save_and_paid', 'Save And Paid', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('160', 'payee_name', 'Payee Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('161', 'manage_your_invoice', 'Manage your invoice', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('162', 'invoice_edit', 'Invoice Edit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('163', 'new_pos_invoice', 'New POS invoice', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('164', 'add_new_pos_invoice', 'Add new pos invoice', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('165', 'product_id', 'Medicine ID', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('166', 'paid_amount', 'Paid Amount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('167', 'authorised_by', 'Authorised By', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('168', 'checked_by', 'Checked By', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('169', 'received_by', 'Received By', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('170', 'prepared_by', 'Prepared By', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('171', 'memo_no', 'Memo No', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('172', 'website', 'Website', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('173', 'email', 'Email', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('174', 'invoice_details', 'Invoice Details', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('175', 'reset', 'Reset', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('176', 'payment_account', 'Payment Account', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('177', 'bank_name', 'Bank Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('178', 'cheque_or_pay_order_no', 'Cheque/Pay Order No', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('179', 'payment_type', 'Payment Type', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('180', 'payment_from', 'Payment From', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('181', 'payment_date', 'Payment Date', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('182', 'add_income', 'Add Income', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('183', 'cash', 'Cash', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('184', 'cheque', 'Cheque', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('185', 'pay_order', 'Pay Order', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('186', 'payment_to', 'Payment To', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('187', 'total_expense_ammount', 'Total Expense Amount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('188', 'transections', 'Transactions', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('189', 'accounts_name', 'Accounts Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('190', 'outflow_report', 'Expense Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('191', 'inflow_report', 'Income Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('192', 'all', 'All', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('193', 'account', 'Account', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('194', 'from', 'From', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('195', 'account_summary_report', 'Account Summary Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('196', 'search_by_date', 'Search By Date', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('197', 'cheque_no', 'Cheque No', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('198', 'name', 'Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('199', 'closing_account', 'Closing Account', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('200', 'close_your_account', 'Close your account', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('201', 'last_day_closing', 'Last Day Closing', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('202', 'cash_in', 'Cash In', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('203', 'cash_out', 'Cash Out', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('204', 'cash_in_hand', 'Cash In Hand', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('205', 'add_new_bank', 'Add New Bank', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('206', 'day_closing', 'Day Closing', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('207', 'account_closing_report', 'Account Closing Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('208', 'last_day_ammount', 'Last Day Amount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('209', 'adjustment', 'Adjustment', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('210', 'pay_type', 'Pay Type', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('211', 'customer_or_manufacturer', 'Customer,Manufacturer Or Others', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('212', 'transection_id', 'Transactions ID', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('213', 'accounts_summary_report', 'Accounts Summary Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('214', 'bank_list', 'Bank List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('215', 'bank_edit', 'Bank Edit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('216', 'debit_plus', 'Debit (+)', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('217', 'credit_minus', 'Credit (-)', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('218', 'account_name', 'Account Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('219', 'account_type', 'Account Type', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('220', 'account_real_name', 'Account Real Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('221', 'manage_account', 'Manage Account', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('222', 'company_name', 'Company Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('223', 'edit_your_company_information', 'Edit your company information', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('224', 'company_edit', 'Company Edit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('225', 'admin', 'Admin', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('226', 'user', 'User', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('227', 'password', 'Password', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('228', 'last_name', 'Last Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('229', 'first_name', 'First Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('230', 'add_new_user_information', 'Add new user information', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('231', 'user_type', 'User Type', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('232', 'user_edit', 'User Edit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('233', 'rtr', 'RTR', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('234', 'ltr', 'LTR', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('235', 'ltr_or_rtr', 'LTR/RTR', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('236', 'footer_text', 'Footer Text', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('237', 'favicon', 'Favicon', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('238', 'logo', 'Logo', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('239', 'update_setting', 'Update Setting', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('240', 'update_your_web_setting', 'Update your Web setting', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('241', 'login', 'Login', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('242', 'your_strong_password', 'Your strong password', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('243', 'your_unique_email', 'Your unique email', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('244', 'please_enter_your_login_information', 'Please enter your login information.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('245', 'update_profile', 'Update Profile', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('246', 'your_profile', 'Your Profile', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('247', 're_type_password', 'Re-Type Password', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('248', 'new_password', 'New Password', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('249', 'old_password', 'Old Password', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('250', 'new_information', 'New Information', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('251', 'old_information', 'Old Information', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('252', 'change_your_information', 'Change your information', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('253', 'change_your_profile', 'Change your profile', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('254', 'profile', 'Profile', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('255', 'wrong_username_or_password', 'Wrong User Name Or Password !', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('256', 'successfully_updated', 'Successfully Updated.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('257', 'blank_field_does_not_accept', 'Blank Field Does Not Accept !', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('258', 'successfully_changed_password', 'Successfully changed password.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('259', 'you_are_not_authorised_person', 'You are not authorised person !', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('260', 'password_and_repassword_does_not_match', 'Passwor and re-password does not match !', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('261', 'new_password_at_least_six_character', 'New Password At Least 6 Character.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('262', 'you_put_wrong_email_address', 'You put wrong email address !', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('263', 'cheque_ammount_asjusted', 'Cheque amount adjusted.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('264', 'successfully_payment_paid', 'Successfully Payment Paid.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('265', 'successfully_added', 'Successfully Added.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('266', 'successfully_updated_2_closing_ammount_not_changeale', 'Successfully Updated -2. Note: Closing Amount Not Changeable.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('267', 'successfully_payment_received', 'Successfully Payment Received.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('268', 'already_inserted', 'Already Inserted !', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('269', 'successfully_delete', 'Successfully Delete.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('270', 'successfully_created', 'Successfully Created.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('271', 'logo_not_uploaded', 'Logo not uploaded !', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('272', 'favicon_not_uploaded', 'Favicon not uploaded !', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('273', 'manufacturer_mobile', 'Manufacturer  Mobile', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('274', 'manufacturer_address', 'Manufacturer  Address', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('275', 'manufacturer_details', 'Manufacturer Details', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('276', 'add_new_manufacturer', 'Add New Manufacturer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('277', 'manage_suppiler', 'Manage Manufacturer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('278', 'manage_your_manufacturer', 'Manage your Manufacturer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('279', 'manage_manufacturer_ledger', 'Manage Manufacturer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('280', 'invoice_id', 'Invoice ID', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('281', 'deposite_id', 'Deposit ID', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('282', 'manufacturer_actual_ledger', 'Manufacturer Actual Ledger', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('283', 'manufacturer_information', 'Manufacturer Information', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('284', 'event', 'Event', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('285', 'add_new_income', 'Add New Income', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('286', 'add_expese', 'Add Expense', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('287', 'add_new_expense', 'Add New Expense', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('288', 'total_income_ammount', 'Total Income Amount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('289', 'create_new_invoice', 'Create New Invoice', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('290', 'create_pos_invoice', 'Create POS Invoice', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('291', 'total_profit', 'Total Profit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('292', 'monthly_progress_report', 'Monthly Progress Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('293', 'total_invoice', 'Total Invoice', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('294', 'account_summary', 'Account Summary', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('295', 'total_manufacturer', 'Total manufacturer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('296', 'total_product', 'Total Medicine', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('297', 'total_customer', 'Total Customer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('298', 'manufacturer_edit', 'Manufacturer Edit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('299', 'add_new_invoice', 'Add New Invoice', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('300', 'add_new_purchase', 'Add new purchase', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('301', 'currency', 'Currency', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('302', 'currency_position', 'Currency Position', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('303', 'left', 'Left', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('304', 'right', 'Right', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('305', 'add_tax', 'Add Tax', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('306', 'manage_tax', 'Manage Tax', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('307', 'add_new_tax', 'Add new tax', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('308', 'enter_tax', 'Enter Tax', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('309', 'already_exists', 'Already Exists !', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('310', 'successfully_inserted', 'Successfully Inserted.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('311', 'tax', 'Tax', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('312', 'tax_edit', 'Tax Edit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('313', 'product_not_added', 'Medicine not added !', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('314', 'total_tax', 'Total Tax', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('315', 'manage_your_manufacturer_details', 'Manage your Manufacturer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('316', 'invoice_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s                                       standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('317', 'thank_you_for_choosing_us', 'Thank you very much for choosing us.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('318', 'billing_date', 'Billing Date', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('319', 'billing_to', 'Billing To', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('320', 'billing_from', 'Billing From', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('321', 'you_cant_delete_this_product', 'Sorry !!  You can\'t delete this medicine.This medicine already used in calculation system!', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('322', 'old_customer', 'Old Customer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('323', 'new_customer', 'New Customer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('324', 'new_manufacturer', 'New Manufacturer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('325', 'old_manufacturer', 'Old Manufacturer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('326', 'credit_customer', 'Credit Customer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('327', 'account_already_exists', 'This Account Already Exists !', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('328', 'edit_income', 'Edit Income', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('329', 'you_are_not_access_this_part', 'You are not authorised person !', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('330', 'account_edit', 'Account Edit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('331', 'due', 'Due', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('332', 'expense_edit', 'Expense Edit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('333', 'please_select_customer', 'Please select customer !', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('334', 'profit_report', 'Profit Report (Invoice Wise)', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('335', 'total_profit_report', 'Total profit report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('336', 'please_enter_valid_captcha', 'Please enter valid captcha.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('337', 'category_not_selected', 'Category not selected.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('338', 'manufacturer_not_selected', 'Manufacturer not selected.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('339', 'please_select_product', 'Please select medicine', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('340', 'product_model_already_exist', 'Medicine model already exist !', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('341', 'invoice_logo', 'Invoice Logo', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('342', 'available_quantity', 'Available Quantity', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('343', 'you_can_not_buy_greater_than_available_quantity', 'You can not select grater than availale quantity !', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('344', 'customer_details', 'Customer details', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('345', 'manage_customer_details', 'Manage customer details.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('346', 'box_size', 'Box size', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('347', 'expire_date', 'Expiry  date', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('348', 'product_location', 'Medicine  Shelf', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('349', 'generic_name', 'Generic name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('350', 'payment_method', 'Payment Method', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('351', 'card_no', 'Card no', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('352', 'medicine', 'Medicine', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('353', 'medicine_search', 'Medicine Search', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('354', 'what_you_search', 'Enter what you search', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('355', 'company', 'Company', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('356', 'customer_search', 'Customer search', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('357', 'invoice_search', 'Invoice search', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('358', 'purchase_search', 'Purchase search', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('359', 'daily_closing_report', 'Daily closing report.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('360', 'closing_search_report', 'Closing Search Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('361', 'category_list', 'Category List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('362', 'company_list', 'Company List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('363', 'customers_list', 'Customer List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('364', 'credit_customer_list', 'Credit Customer List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('365', 'previous_balance_adjustment', 'Previous Balance Adjustment', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('366', 'invoice_list', 'Invoice List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('367', 'add_pos_invoice', 'Add POS Invoice', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('368', 'add_invoice', 'Add Invoice', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('369', 'product_list', 'Medicine List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('370', 'purchases_list', 'Purchase List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('371', 'purchase_list', 'Purchase List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('372', 'stock_list', 'Stock List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('373', 'all_report', 'All Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('374', 'daily_sales_report', 'Daily sales Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('375', 'product_wise_sales_report', 'Medicine Wise Sales Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('376', 'bank_update', 'Bank Update', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('377', 'account_list', 'Account List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('378', 'manufacturer_list', 'Manufacturer  List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('379', 'manufacturer_search_item', 'Manufacturer  Search Item', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('380', 'user_list', 'User List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('381', 'user_search_item', 'User Search Item', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('382', 'change_password', 'Change Password', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('383', 'admin_login_area', 'Admin Login Area', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('384', 'accounts_inflow_form', 'Account Inflow Form', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('385', 'accounts_outflow_form', 'Accounts Outflow Form', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('386', 'accounts_tax_form', 'Accounts Tax Form', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('387', 'accounts_manage_tax', 'Accounts Manage Tax', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('388', 'accounts_tax_edit', 'Accounts Tax Edit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('389', 'accounts_summary_data', 'Accounts Summary Data', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('390', 'accounts_details_data', 'Accounts Details Data', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('391', 'datewise_summary_data', 'Datewise Summary Data', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('392', 'accounts_cheque_manager', 'Account Cheque Manager', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('393', 'accounts_edit_data', 'Accounts Edit Data', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('394', 'print_barcode', 'Print Barcode', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('395', 'print_qrcode', 'Print Qrcode', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('396', 'add_new_account', 'Add New Account', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('397', 'table_edit', 'Table Edit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('398', 'secret_key', 'Secret Key', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('399', 'site_key', 'Site Key', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('400', 'captcha', 'Captcha', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('401', 'please_add_walking_customer_for_default_customer', 'Please add walking customer for default customer. ', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('402', 'barcode_qrcode_scan_here', 'Barcode Or QRcode scan here', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('403', 'manage_your_credit_customer', 'Manage your credit customer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('404', 'unit', 'Unit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('405', 'total_discount', 'Total Discount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('406', 'meter_m', 'Meter (M)', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('407', 'piece_pc', 'Piece (Pc)', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('408', 'kilogram_kg', 'Kilogram (Kg)', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('409', 'import_product_csv', 'Import Medicine (CSV)', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('410', 'close', 'Close', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('411', 'csv_file_informaion', 'File Information (CSV)', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('412', 'download_example_file', 'Download Example File', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('413', 'upload_csv_file', 'Upload CSV File', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('414', 'manufacturer_id', 'Manufacturer ID', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('415', 'category_id', 'Category ID', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('416', 'are_you_sure_to_delete', 'Are you sure,want to delete ?', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('417', 'stock_report_manufacturer_wise', 'Stock Report (Manufacturer Wise)', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('418', 'stock_report_product_wise', 'Stock Report (Medicine Wise)', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('419', 'select_manufacturer', 'Select Manufacturer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('420', 'select_product', 'Select Medicine ', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('421', 'phone', 'Phone', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('422', 'in_quantity', 'In Quantity', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('423', 'out_quantity', 'Sold QTY', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('424', 'in_taka', 'In Taka', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('425', 'out_taka', 'Out Taka', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('426', 'data_synchronizer', 'Data Synchronizer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('427', 'synchronize', 'Synchronize', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('428', 'backup_restore', 'Backup And Restore', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('429', 'synchronizer_setting', 'Synchronizer Setting', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('430', 'backup_and_restore', 'Backup And Restore', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('431', 'hostname', 'Host Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('432', 'username', 'User Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('433', 'ftp_port', 'FTP Port', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('434', 'ftp_debug', 'FTP Debug', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('435', 'project_root', 'Project Root', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('436', 'internet_connection', 'Internet connection', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('437', 'ok', 'Ok', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('438', 'not_available', 'Not available', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('439', 'outgoing_file', 'Outgoing File', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('440', 'available', 'Available', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('441', 'incoming_file', 'Incoming file', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('442', 'data_upload_to_server', 'Data upload to server', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('443', 'download_data_from_server', 'Download data from server', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('444', 'data_import_to_database', 'Data import to database', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('445', 'please_wait', 'Please Wait', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('446', 'ooops_something_went_wrong', 'Ooops something went wrong', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('447', 'file_information', 'File Information', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('448', 'size', 'Size', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('449', 'backup_date', 'Backup date', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('450', 'backup_now', 'Backup Now', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('451', 'are_you_sure', 'Are you sure ?', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('452', 'download', 'Downlaod', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('453', 'database_backup', 'Database Backup', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('454', 'backup_successfully', 'Backup Successfully', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('455', 'please_try_again', 'Please Try Again', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('456', 'restore_successfully', 'Restore successfully', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('457', 'download_successfully', 'Download Successfully', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('458', 'delete_successfully', 'Delete Successfully', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('459', 'ftp_setting', 'FTP Setting', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('460', 'save_successfully', 'Save successfully', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('461', 'upload_successfully', 'Upload successfully.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('462', 'unable_to_upload_file_please_check_configuration', 'unable to upload file please check configuration.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('463', 'please_configure_synchronizer_settings', 'Please Configure Synchronizer Settings ', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('464', 'unable_to_download_file_please_check_configuration', 'Unable To Download File,Please Check Configuration.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('465', 'data_import_first', 'Data Import First', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('466', 'data_import_successfully', 'Data Import Successfully', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('467', 'unable_to_import_data_please_check_config_or_sql_file', 'Unable to import data please check config or sql file.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('468', 'restore_now', 'Restore Now', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('469', 'out_of_stock', 'Out Of Stock', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('470', 'others', 'Others', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('471', 'shelf', 'Shelf', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('472', 'discount_type', 'Discount Type ', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('473', 'discount_percentage', 'Discount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('474', 'fixed_dis', 'Fixed Dis', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('475', 'full_paid', 'Full Paid', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('476', 'available_qnty', 'Ava.Qty', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('477', 'stock_ctn', 'Stock/Qnt', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('478', 'sale_price', 'Sale Price', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('479', 'manufacturer_rate', 'Manufacturer  Price', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('480', 'please_upload_image_type', 'Sorry!!! Please Upload jpg,jpeg,png,gif typeimage', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('481', 'ml', 'Milli liter(ml)', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('482', 'mg', 'Milli Gram(mg)', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('483', 'you_can_not_buy_greater_than_available_qnty', 'You can not sale more than available quantity ! please purchase this Product', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('484', 'due_amount', 'Due Amount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('485', 'return_invoice', 'Return Invoice', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('486', 'sold_qty', 'Sold Qty', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('487', 'ret_quantity', 'Return QTY', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('488', 'deduction', 'Deduction', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('489', 'return', 'Return', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('490', 'note', 'Return Reasone', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('491', 'usablilties', 'Return Usability', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('492', 'adjs_with_stck', 'Adjust With Stock', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('493', 'return_to_manufacturer', 'Return To Manufacturer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('494', 'wastage', 'Wastage', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('495', 'to_deduction', 'Total Deduction', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('496', 'nt_return', 'Net Return', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('497', 'return_id', 'Return Id', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('498', 'return_details', 'Return Details', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('499', 'add_return', 'Add Return', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('500', 'return_list', 'Return List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('501', 'stock_return_list', 'Stock Return List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('502', 'wastage_return_list', 'Wastage Return List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('503', 'check_return', 'Check Return', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('504', 'quantity_must_be_fillup', 'Return Quantity Must be Fill Up', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('505', 'expeire_date', 'Expiry  date', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('506', 'batch_id', 'Batch ID', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('507', 'manufacturer_return_list', 'Manufacturer  Return List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('508', 'c_r_slist', 'Customer Return List ', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('509', 'manufacturer_return', 'Manufacturer  Return List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('510', 'wastage_list', 'Wastage List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('511', 'in_qnty', 'In Quantity', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('512', 'out_qnty', 'Sold QTY', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('513', 'stock_sale', 'Stock Sell Price', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('514', 'add_product_csv', 'Import Medicine (CSV)', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('515', 'purchase_id', 'Purchase ID', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('516', 'add_payment', 'Add Payment', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('517', 'add_new_payment', 'Add new Payment', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('518', 'transaction', 'Transaction', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('519', 'manage_transaction', 'Manage Transaction', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('520', 'choose_transaction', 'Choose Transaction', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('521', 'receipt', 'Receipt', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('522', 'payment', 'Payment', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('523', 'transaction_categry', 'Transaction Category', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('524', 'transaction_mood', 'Transaction Mood', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('525', 'payment_amount', 'Payment Amount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('526', 'receipt_amount', 'Receipt Amount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('527', 'daily_summary', 'Daily Summary', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('528', 'daily_cash_flow', 'Daily  Cashflow', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('529', 'custom_report', 'Custom Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('530', 'root_account', 'Root Account', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('531', 'office', 'Office', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('532', 'loan', 'Loan', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('533', 'successfully_saved', 'Successfully Saved', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('534', 'bank', 'Bank', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('535', 'bank_transaction', 'Bank Transaction', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('536', 'office_loan', 'Office Loan', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('537', 'add_person', 'Add Person', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('538', 'manage_loan', 'Manage Person', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('539', 'add_loan', 'Add Loan', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('540', 'ac_name', 'Account Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('541', 'ac_no', 'Account No', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('542', 'branch', 'Branch', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('543', 'signature_pic', 'Signature ', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('544', 'withdraw_deposite_id', 'Withdraw Deposit ID', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('545', 'select_report', 'Select Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('546', 'per_qty', 'Purchase Qty', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('547', 'stock_report_batch_wise', 'Stock Report(Batch Wise)', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('548', 'box', 'Box', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('549', 'gram', 'Gram', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('550', 'profit_report_manufacturer_wise', 'Profit/Loss Report(Manufacturer)', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('551', 'calculate', 'Calculate', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('552', 'profit_report_product_wise', 'Profit/Loss  Report Product Wise', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('553', 'view_report', 'View Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('554', 'report_for', 'Report For', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('555', 'total_sale_qty', 'Total Sale QTY', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('556', 'total_purchase_pric', 'Total purchase Price', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('557', 'total_sale', 'Total Sale', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('558', 'net_profit', 'Net Profit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('559', 'loss', 'Loss', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('560', 'product_type', 'Medicine Type', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('561', 'add_type', 'Add Medicine Type', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('562', 'add_new_type', 'Add New Medicine  Type', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('563', 'type', 'Type', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('564', 'type_name', 'Type Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('565', 'manage_type', 'Manage Medicine Type', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('566', 'type_id', 'Type Id', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('567', 'type_edit', 'Edit Type', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('568', 'profitloss', 'profit/Loss', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('569', 'manufacturer_wise', 'Manufacturer Wise', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('570', 'product_wise', 'Medicine Wise', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('571', 'medicine_info', 'Medicine Information', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('572', 'choose_another_invno', 'Choose Another Invoice No !!', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('573', 'return_manufacturers', 'Return Manufacturers', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('574', 'return_manufacturer', 'Return Manufacturers', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('575', 'please_input_correct_invoice_no', 'Please Input Correct Invoice No', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('576', 'stock_purchase_price', 'Stock Purchase Price', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('577', 'manufacturer_returns', 'Manufacturer  Return ', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('578', 'invoice_discount', 'Invoice Discount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('579', 'qty', 'Qty', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('580', 'discounts', 'Discount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('581', 'sub_total', 'Sub Total', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('582', 'paid', 'Paid', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('583', 'change', 'Change', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('584', 'purchase_price', 'Purchase Price', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('585', 'expiry', 'Expiry', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('586', 'batch', 'Batch', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('587', 'role_permission', 'Role Permission', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('588', 'user_assign_role', 'Assign  User Role', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('589', 'permission', 'Permission', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('590', 'personal_loan', 'Personal Loan', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('591', 'role_name', 'Role Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('592', 'create', 'Create', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('593', 'read', 'Read', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('594', 'add_role', 'Add Role', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('595', 'You do not have permission to access. Please contact with administrator.', 'You do not have permission to access. Please contact with administrator.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('596', 'role_permission_added_successfully', 'Role Permission Added successfully.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('597', 'role_list', 'Role List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('598', 'role_permission_updated_successfully', 'Role Permission Updated Successfully.', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('599', 'add_phrase', 'Add Phrase', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('600', 'language_home', 'Language Home', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('601', 'phrase_edit', 'Phrase Edit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('602', 'no_role_selected', 'No Role Selected', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('603', 'category_added_successfully', 'Category added successfully', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('604', 'category_already_exist', 'Category already exist', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('605', 'select_manufacturer', 'Select Manufacturer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('607', 'select_tax', 'Select Tax', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('608', 'must_input_numbers', 'Must input numbers', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('609', 'please_check_your_price', 'Please Check Your Price', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('610', 'your_profit_is', 'Your Profit is', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('611', 'failed', 'Failed', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('612', 'you_have_reached_the_limit_of_adding', 'You have reached the limit of adding', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('613', 'inputs', 'inputs', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('614', 'expiry_date_should_be_greater_than_puchase_date', 'Expiry Date should be greater than Puchase Date', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('615', 'expiry_date_should_be_greater_than_puchase_date', 'Expiry Date should be greater than Puchase Date', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('616', 'product_name', 'Medicine Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('617', 'total_quantity', 'Total Quantity', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('618', 'rates', 'Rate', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('619', 'total_amount', 'Total Amount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('621', 'receipt_detail', 'Receipt Detail', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('622', 'amount', 'Amount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('623', 'save_and_add_another_one', 'Save and add another one', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('624', 'checque_number', 'Checque Number', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('625', 'edit_receipt', 'Edit Receipt', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('626', 'receipt_list', 'Receipt List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('627', 'search_by_customer_name', 'Search By Customer Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('628', 'actions', 'Actions', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('629', 'no_data_found', 'No Data Found', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('630', 'edit', 'Edit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('631', 'product_not_found', 'Medicine  not found', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('632', 'request_failed_please_check_your_code_and_try_again', 'Request Failed, Please check your code and try again', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('633', 'You_can_not_return_more_than_sold_quantity', 'You Can Not Return More than Sold quantity', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('634', 'you_can_not_return_less_than_1', 'You Can Not Return Less than 1', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('635', 'transection_details', 'Transection Details', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('636', 'transection_details_datewise', 'Transection  Details Datewise', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('637', 'transection_id', 'Transactions ID', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('638', 'select_option', 'Select Option', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('639', 'loan_list', 'Loan List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('640', 'todays_details', 'Todays Details', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('641', 'transaction_details', 'Transaction Details', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('642', 'person_id', 'Person ID', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('643', 'total_transection', 'Total Transection', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('644', 'transaction_id', 'Transaction ID', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('645', 'transection_report', 'Transection Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('646', 'add_transection', 'Add Transection', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('647', 'manage_transection', 'Manage Transection', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('648', 'select_id', 'Select ID', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('649', 'choose_transection', 'Choose Transection', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('650', 'update_transection', 'Update Transection', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('651', 'manufacturer_all', 'Manufacturer All', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('652', 'select_all', 'Select All', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('653', 'all', 'All', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('654', 'max_rate', 'Max Rate', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('655', 'min_rate', 'Min Rate', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('656', 'average_rate', 'Average Rate', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('657', 'date_expired_please_choose_another.', 'Date Expired!! Please Choose another', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('658', 'your_medicine_is_date_expiry_Please_choose_another', 'Your Medicine is Date Expiry !! Please Choose another', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('659', 'meno', 'MEMO', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('660', 'out_of_stock_and_date_expired_medicine', 'Out of Stock and Date Expired Medicine', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('661', 'edit_profile', 'Edit Profile', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('662', 'deposit_detail', 'Deposit detail', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('663', 'new_deposit', 'New Deposit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('664', 'edit_deposit', 'Edit Deposit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('665', 'select_customer', 'Select Customer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('666', 'draw', 'Draw', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('667', 'deposit', 'Deposit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('668', 'select_type', 'Select Type', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('669', 'transaction_type', 'Transaction Type', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('670', 'cash', 'Cash', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('671', 'select_bank', 'Select Bank', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('672', 'drawing', 'Drawing', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('673', 'expenses', 'Expenses', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('674', 'banking', 'Banking', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('675', 'daily_closing', 'Daily Closing', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('676', 'title', 'Title', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('677', 'error_get_data_from_ajax', 'Error get data from ajax', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('678', 'toggle_navigation', 'Toggle Navigation', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('679', 'this_product_not_found', 'This Medicine  Not Found !', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('680', 'search_by_date_from', 'Search By Date: From', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('681', 'manufacturer_sales_report', 'Manufacturer Sales Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('682', 'transection', 'Transection', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('683', 'transection_mood', 'Transection Mood', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('684', 'transection_categry', 'Transection Categry', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('685', 'export_csv', 'Export CSV', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('686', 'select manufacturer', 'Select Manufacturer', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('687', 'customer_return', 'Customer Return', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('688', 'return_form', 'Return Form', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('689', 'data_not_found', 'Data Not Found', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('690', 'export_csv', 'Export CSV', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('691', 'manage_person', 'Manage Person', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('692', 'backup', 'Back Up', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('693', 'total_balance', 'Total Balance', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('694', 'product_id_model_manufacturer_id_can_not_null', 'Medicine Id & Medicine Type & Manufacturer Id Can not be Blank', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('695', 'product_name_can_not_be_null', 'Medicine  Name can Not be Blank', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('696', 'product_model_can_not_be_null', 'Medicine  Model Can Not be Blank', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('697', 'sms', 'SMS', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('698', 'sms_configure', 'Sms Configuration', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('699', 'url', 'Url', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('700', 'sender_id', 'Sender ID', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('701', 'api_key', 'Api Key', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('702', 'barcode_or_qrcode', 'Barcode Or QRcode ', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('703', 'currency_name', 'Currency Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('704', 'add_currency', 'Add Currency', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('705', 'currency_icon', 'Currency Icon', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('706', 'currency_list', 'Currency List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('707', 'import', 'Import', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('708', 'c_o_a', 'Chart Of Account', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('709', 'supplier_payment', 'Supplier Payment', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('710', 'customer_receive', 'Customer Receive', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('711', 'debit_voucher', 'Debit Voucher', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('712', 'credit_voucher', 'Credit voucher', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('713', 'voucher_approval', 'Voucher Approval', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('714', 'contra_voucher', 'Contra Voucher', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('715', 'journal_voucher', 'Journal Voucher', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('716', 'voucher_report', 'Voucher Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('717', 'cash_book', 'Cash Book', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('718', 'inventory_ledger', 'Inventory Ledger', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('719', 'bank_book', 'Bank Book', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('720', 'general_ledger', 'General Ledger', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('721', 'trial_balance', 'Trial Balance', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('722', 'profit_loss_report', 'Profit Loss Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('723', 'cash_flow', 'Cash Flow', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('724', 'coa_print', 'COA Print', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('725', 'manufacturer_payment', 'Manufacturer Payment', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('726', 'add_more', 'Add More', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('727', 'code', 'Code', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('728', 'remark', 'Transaction Details', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('729', 'voucher_no', 'Voucher NO', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('730', 'accounts_tree_view', 'Accounts Tree view', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('731', 'find', 'Find', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('732', 'voucher_type', 'Voucher Type', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('733', 'particulars', 'Particulars', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('734', 'cash_flow_statement', 'Cash Flow Statement', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('735', 'amount_in_dollar', 'Amount In Dollar', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('736', 'opening_cash_and_equivalent', 'Opening Cash and Equivalent', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('737', 'with_details', 'With Details', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('738', 'transaction_head', 'Transaction Head', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('739', 'gl_head', 'General Ledger Head', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('740', 'no_report', 'No Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('741', 'pre_balance', 'Pre Balance', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('742', 'current_balance', 'Current Balance', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('743', 'from_date', 'From Date', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('744', 'to_date', 'To Date', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('745', 'profit_loss', 'Profit Loss Statement', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('746', 'add_expense_item', 'Add Expense Item', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('747', 'manage_expense_item', 'Manage Expense Item', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('748', 'add_expense', 'Add Expense', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('749', 'manage_expense', 'Manage Expense', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('750', 'expense_statement', 'Expense Statement', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('751', 'expense_type', 'Expense Type', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('752', 'expense_item_name', 'Expense Item Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('753', 'opening_balance', 'Opening Balance', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('754', 'tax_settings', 'Tax Settings', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('755', 'add_incometax', 'Add Income Tax', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('756', 'manage_income_tax', 'Manage Income tax', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('757', 'tax_report', 'Tax Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('758', 'invoice_wise_tax_report', 'Invoice Wise Tax Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('759', 'number_of_tax', 'Number of Tax', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('760', 'default_value', 'Default Value', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('761', 'reg_no', 'Registration No', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('762', 'tax_name', 'Tax Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('763', 'service_id', 'Service Id', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('764', 'service', 'Service', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('765', 'add_service', 'Add Service', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('766', 'manage_service', 'Manage Service', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('767', 'service_invoice', 'Service Invoice', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('768', 'manage_service_invoice', 'Manage Service Invoice', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('769', 'service_name', 'Service Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('770', 'charge', 'Charge', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('771', 'add', 'Add', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('772', 'previous', 'Previous', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('773', 'net_total', 'Net Total', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('774', 'hanging_over', 'Estimated Time Of Departure', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('775', 'service_discount', 'Service Discount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('776', 'hrm', 'HRM', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('777', 'add_designation', 'Add Designation', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('778', 'manage_designation', 'Manage Designation', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('779', 'add_employee', 'Add Employee', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('780', 'manage_employee', 'Manage Employee', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('781', 'attendance', 'Attendance', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('782', 'add_attendance', 'Add Attendance', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('783', 'manage_attendance', 'Manage Attendance', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('784', 'attendance_report', 'Attendance Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('785', 'payroll', 'Payroll', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('786', 'add_benefits', 'Add Benefits', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('787', 'manage_benefits', 'Manage Benefits', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('788', 'add_salary_setup', 'Add Salary Setup', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('789', 'manage_salary_setup', 'Manage Salary Setup', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('790', 'salary_generate', 'Salary Generate', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('791', 'manage_salary_generate', 'Manage Salary Generate', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('792', 'salary_payment', 'Salary Payment', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('793', 'designation', 'Designation', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('794', 'rate_type', 'Rate Type', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('795', 'hour_rate_or_salary', 'Hourly Rate/Salary', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('796', 'blood_group', 'Blood Group', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('797', 'address_line_1', 'Address Line 1', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('798', 'address_line_2', 'Address Line 2', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('799', 'picture', 'Picture', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('800', 'country', 'Country', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('801', 'city', 'City', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('802', 'zip', 'Zip code', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('803', 'single_checkin', 'Single Check In', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('804', 'bulk_checkin', 'Bulk Check In', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('805', 'checkin', 'Check In', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('806', 'employee_name', 'Employee Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('807', 'check_in', 'Check In', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('808', 'checkout', 'Check Out', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('809', 'confirm_clock', 'Confirm Clock', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('810', 'stay', 'Stay', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('811', 'download_sample_file', 'Download Sample File', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('812', 'employee', 'Employee', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('813', 'sign_in', 'Check In', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('814', 'sign_out', 'Check  Out', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('815', 'staytime', 'Stay Time', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('816', 'benefits_list', 'Benefit List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('817', 'benefits', 'Benefits', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('818', 'benefit_type', 'Benefit Type', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('819', 'salary_benefits', 'Salary Benefits', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('820', 'salary_benefits_type', 'Salary Benefits Type', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('821', 'hourly', 'Hourly', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('822', 'salary', 'Salary', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('823', 'timezone', 'Time Zone', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('824', 'request', 'Request', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('825', 'datewise_report', 'Date Wise Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('826', 'work_hour', 'Work Hours', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('827', 'employee_wise_report', 'Employee Wise Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('828', 'date_in_time_report', 'In Time Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('829', 'successfully_checkout', 'Successfully Checked Out', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('830', 'setup_tax', 'Setup Tax', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('831', 'start_amount', 'Start Amount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('832', 'end_amount', 'End Amount', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('833', 'tax_rate', 'Tax Rate', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('834', 'setup', 'Setup', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('835', 'income_tax_updateform', 'Income Tax Update Form', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('836', 'salary_type', 'Salary Type', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('837', 'addition', 'Addition', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('838', 'gross_salary', 'Gross Salary', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('839', 'set', 'Set', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('840', 'salary_month', 'Salary Month', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('841', 'generate', 'Generate ', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('842', 'total_salary', 'Total Salary', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('843', 'total_working_minutes', 'Total Working Hours', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('844', 'working_period', 'Total Working Days', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('845', 'paid_by', 'Paid By', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('846', 'pay_now', 'Pay Now ?', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('847', 'confirm', 'Confirm', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('848', 'generate_by', 'Generate By', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('849', 'gui_pos', 'GUI POS', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('850', 'add_fixed_assets', 'Add Fixed Assets', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('851', 'fixed_assets_list', 'Fixed Asset List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('852', 'fixed_assets_purchase', 'Purchase Fixed Assets', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('853', 'fixed_assets_purchase_manage', 'Fixed Assets Purchase List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('854', 'fixed_assets', 'Fixed Assets', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('855', 'item_code', 'Item code', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('856', 'item_name', 'Item Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('857', 'opening_assets', 'Assets Qty', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('858', 'edit_fixed_asset', 'Edit Fixed Assets', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('859', 'save_change', 'Save Change', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('860', 'in_word', 'In Word', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('861', 'purchase_pad_print', 'Purchase Pad Print', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('862', 'fixed_assets_purchase_details', 'Fixed Assets Purchase Details', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('863', 'manage_language', 'Manage Language', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('864', 'person_edit', 'Person Edit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('865', 'person_ledger', 'Person Ledger', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('866', 'medicine_name', 'Medicine Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('867', 'unit_list', 'Unit List', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('868', 'add_unit', 'Add Unit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('869', 'edit_unit', 'Edit Unit', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('870', 'unit_name', 'Unit Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('871', 'unit_not_selected', 'Unit did not Selected', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('872', 'supplier', 'Supplier', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('873', 'add_supplier', 'Add Supplier', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('874', 'manage_supplier', 'Manage Supplier', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('875', 'supplier_ledger', 'Supplier Ledger', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('876', 'supplier_sales_details', 'Supplier Sales Details', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('877', 'purchase_detail', 'Purchase details', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('878', 'purchase_information', 'Purchase Information', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('879', 'account_head', 'Account Head', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('880', 'transaction_date', 'Transaction Date', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('881', 'approved', 'Approve', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('882', 'date_wise_report', 'Date Wise Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('883', 'time_wise_report', 'Time Wise Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('884', 'report_date', 'Report Date', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('885', 's_time', 'Start Time', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('886', 'e_time', 'End Time', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('887', 'basic', 'Basic', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('888', 'supplier_name', 'Supplier Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('889', 'supplier_mobile', 'Supplier Mobile', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('890', 'supplier_address', 'Supplier Address', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('891', 'supplier_details', 'Supplier Details', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('892', 'select_supplier', 'Select Supplier', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('893', 'accounts_report', 'Accounts Report', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('894', 'account_code', 'Account Code', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('895', 'human_resource_management', 'Human Resource Information', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('896', 'menu_name', 'Menu Name', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('897', 'head_of_account', 'Account Head', NULL);
INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES ('898', 'successfully_approved', 'Successfully Approved', NULL);


#
# TABLE STRUCTURE FOR: manufacturer_information
#

DROP TABLE IF EXISTS `manufacturer_information`;

CREATE TABLE `manufacturer_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturer_id` varchar(100) NOT NULL,
  `manufacturer_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `details` varchar(255) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `manufacturer_id` (`manufacturer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO `manufacturer_information` (`id`, `manufacturer_id`, `manufacturer_name`, `address`, `mobile`, `details`, `status`) VALUES ('2', 'VVUVQWE7GOF6C8NQIBIV', 'Ainal Hoque', 'Mirpur', '01852376598', 'sdfs', '1');
INSERT INTO `manufacturer_information` (`id`, `manufacturer_id`, `manufacturer_name`, `address`, `mobile`, `details`, `status`) VALUES ('11', '2RX1VVFN9AQ3OC8PN8BE', 'Samsung', '', '', '', '1');
INSERT INTO `manufacturer_information` (`id`, `manufacturer_id`, `manufacturer_name`, `address`, `mobile`, `details`, `status`) VALUES ('10', 'C34RZAELMF7WYLVKVS8D', 'Dell', 'ghgnvvvgf', '1568970', 'ghgfh', '1');
INSERT INTO `manufacturer_information` (`id`, `manufacturer_id`, `manufacturer_name`, `address`, `mobile`, `details`, `status`) VALUES ('5', 'KEDGDDOPO6VJTYU256B5', 'Square Pharma', 'Dhaka', '2354787', 'rthytjghj', '1');
INSERT INTO `manufacturer_information` (`id`, `manufacturer_id`, `manufacturer_name`, `address`, `mobile`, `details`, `status`) VALUES ('6', 'SXQJWCLR9GOS26CTVXMI', 'INCEPTA PHARMA', 'sferhyt', '1565767879', 'ghjdghb', '1');
INSERT INTO `manufacturer_information` (`id`, `manufacturer_id`, `manufacturer_name`, `address`, `mobile`, `details`, `status`) VALUES ('7', '35IHYBJZ6UWRIP7YUN3V', 'BEXIMCO', 'wfdfgfjh', '867534', 'uiueth', '1');
INSERT INTO `manufacturer_information` (`id`, `manufacturer_id`, `manufacturer_name`, `address`, `mobile`, `details`, `status`) VALUES ('8', 'O3G5STXHZKOW5SM9VO1S', 'ACME', 'fghfghghjv', '346757', 'hnghjgh', '1');
INSERT INTO `manufacturer_information` (`id`, `manufacturer_id`, `manufacturer_name`, `address`, `mobile`, `details`, `status`) VALUES ('9', '441UBRSOC25RYNPAMYON', ' A.C.I.', 'hfhgkmnbm', '76865561345', 'muliulhj', '1');
INSERT INTO `manufacturer_information` (`id`, `manufacturer_id`, `manufacturer_name`, `address`, `mobile`, `details`, `status`) VALUES ('12', 'JQGGDI9NT6YLNT6UAZSV', 'Kamrul Hasan', 'sdfasdf', '23423423', '', '1');
INSERT INTO `manufacturer_information` (`id`, `manufacturer_id`, `manufacturer_name`, `address`, `mobile`, `details`, `status`) VALUES ('13', '8W5RBSGJBYJM6ANZYGNM', 'Mamun', '', '12312423', '', '1');


#
# TABLE STRUCTURE FOR: manufacturer_ledger
#

DROP TABLE IF EXISTS `manufacturer_ledger`;

CREATE TABLE `manufacturer_ledger` (
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
  `d_c` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `receipt_no` (`deposit_no`),
  KEY `receipt_no_2` (`deposit_no`),
  KEY `receipt_no_3` (`deposit_no`),
  KEY `receipt_no_4` (`deposit_no`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('27', '20190615124416', '35IHYBJZ6UWRIP7YUN3V', '777', NULL, '2500000.00', 'Purchase From Manufacturer. huijh', '', '', '2019-06-15', '1', 'd');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('26', '20190615124416', '35IHYBJZ6UWRIP7YUN3V', '777', NULL, '2500000.00', 'Purchase From Manufacturer. huijh', '', '', '2019-06-15', '1', 'c');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('4', '20190209073620', 'VVUVQWE7GOF6C8NQIBIV', '124564', NULL, '120.00', 'Purchase From Manufacturer. xcvxcv', '', '', '2019-02-09', '1', 'c');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('28', '20190616074053', 'KEDGDDOPO6VJTYU256B5', '5678', NULL, '10000.00', 'Purchase From Manufacturer. ', '', '', '2019-06-16', '1', 'c');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('25', '20190615090929', 'KEDGDDOPO6VJTYU256B5', NULL, 'C9FMZX1VVQ', '50000.00', 'Return', '', '', '2019-06-15', '1', NULL);
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('24', '20190615090929', 'KEDGDDOPO6VJTYU256B5', '656', NULL, '150000.00', 'Purchase From Manufacturer. ', '', '', '2019-06-15', '1', 'd');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('23', '20190615090929', 'KEDGDDOPO6VJTYU256B5', '656', NULL, '150000.00', 'Purchase From Manufacturer. ', '', '', '2019-06-15', '1', 'c');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('22', '20190615090737', 'KEDGDDOPO6VJTYU256B5', '45678', NULL, '95000.00', 'Purchase From Manufacturer. ', '', '', '2019-06-15', '1', 'd');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('21', '20190615090737', 'KEDGDDOPO6VJTYU256B5', '45678', NULL, '95000.00', 'Purchase From Manufacturer. ', '', '', '2019-06-15', '1', 'c');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('20', '20190615085946', 'KEDGDDOPO6VJTYU256B5', '123456789', NULL, '200000.00', 'Purchase From Manufacturer. ytdfzcvbnm,', '', '', '2019-06-15', '1', 'd');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('19', '20190615085946', 'KEDGDDOPO6VJTYU256B5', '123456789', NULL, '200000.00', 'Purchase From Manufacturer. ytdfzcvbnm,', '', '', '2019-06-15', '1', 'c');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('29', '20190616074053', 'KEDGDDOPO6VJTYU256B5', '5678', NULL, '10000.00', 'Purchase From Manufacturer. ', '', '', '2019-06-16', '1', 'd');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('30', 'PM-3', 'KEDGDDOPO6VJTYU256B5', NULL, 'PM-3', '1000.00', 'Paid From Accounts', '1', '', '2019-06-16', '1', 'd');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('31', '6', 'C34RZAELMF7WYLVKVS8D', '201906180942', NULL, '70000.00', '', '', '', '2019-06-18', '1', 'c');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('32', '6', 'C34RZAELMF7WYLVKVS8D', '201906180942', NULL, '70000.00', '', '', '', '2019-06-18', '1', 'd');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('33', '20190805044552', 'VVUVQWE7GOF6C8NQIBIV', '435234', NULL, '2000.00', 'Purchase From Manufacturer. 234234', '', '', '2019-08-05', '1', 'c');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('34', '20190805044552', 'VVUVQWE7GOF6C8NQIBIV', '435234', NULL, '2000.00', 'Purchase From Manufacturer. 234234', '', '', '2019-08-05', '1', 'd');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('35', '20190925143021', 'VVUVQWE7GOF6C8NQIBIV', '234232', NULL, '6000.00', 'Purchase From Manufacturer. sdfasd', '', '', '2019-09-25', '1', 'c');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('36', '20190925143021', 'VVUVQWE7GOF6C8NQIBIV', '234232', NULL, '6000.00', 'Purchase From Manufacturer. sdfasd', '', '', '2019-09-25', '1', 'd');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('37', '20191006080228', 'VVUVQWE7GOF6C8NQIBIV', '234234', NULL, '840.00', 'Purchase From Manufacturer. sdfsdf', '', '', '2019-10-06', '1', 'c');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('38', '20191006080314', 'VVUVQWE7GOF6C8NQIBIV', '234234234', NULL, '80.00', 'Purchase From Manufacturer. sdfsdf', '', '', '2019-10-06', '1', 'c');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('39', '20191006080439', 'KEDGDDOPO6VJTYU256B5', '345345', NULL, '2000.00', 'Purchase From Manufacturer. ', '', '', '2019-10-06', '1', 'c');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('40', '20191006080439', 'KEDGDDOPO6VJTYU256B5', '345345', NULL, '2000.00', 'Purchase From Manufacturer. ', '', '', '2019-10-06', '1', 'd');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('41', '20191006110842', 'JQGGDI9NT6YLNT6UAZSV', '111', NULL, '5000.00', 'Purchase From Manufacturer. some thing', '', '', '2019-10-06', '1', 'c');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('42', '20191006110842', 'JQGGDI9NT6YLNT6UAZSV', '111', NULL, '5000.00', 'Purchase From Manufacturer. some thing', '', '', '2019-10-06', '1', 'd');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('43', '20191006110842', 'JQGGDI9NT6YLNT6UAZSV', NULL, 'D7L8BSR1S1', '1000.00', 'Return', '', '', '2019-10-06', '1', 'c');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('44', '20191006110842', 'JQGGDI9NT6YLNT6UAZSV', NULL, 'A8M5ED6EMB', '1000.00', 'Return', '', '', '2019-10-06', '1', 'c');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('45', '20191006110842', 'JQGGDI9NT6YLNT6UAZSV', NULL, 'MJ31ELYUBZ', '1000.00', 'Return', '', '', '2019-10-06', '1', 'c');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('46', '20191010064228', '8W5RBSGJBYJM6ANZYGNM', '46575', NULL, '2000.00', 'Purchase From Manufacturer. dfgfg', '', '', '2019-10-10', '1', 'c');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('47', '20191010064228', '8W5RBSGJBYJM6ANZYGNM', '46575', NULL, '2000.00', 'Purchase From Manufacturer. dfgfg', '', '', '2019-10-10', '1', 'd');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('48', '20191010064439', '8W5RBSGJBYJM6ANZYGNM', '234878', NULL, '4500.00', 'Purchase From Manufacturer. sdfasd', '', '', '2019-10-10', '1', 'c');
INSERT INTO `manufacturer_ledger` (`id`, `transaction_id`, `manufacturer_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('49', '20191010064439', '8W5RBSGJBYJM6ANZYGNM', '234878', NULL, '4500.00', 'Purchase From Manufacturer. sdfasd', '', '', '2019-10-10', '1', 'd');


#
# TABLE STRUCTURE FOR: manufacturer_product
#

DROP TABLE IF EXISTS `manufacturer_product`;

CREATE TABLE `manufacturer_product` (
  `manufacturer_pr_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(30) NOT NULL,
  `products_model` varchar(50) DEFAULT NULL,
  `manufacturer_id` varchar(30) NOT NULL,
  `manufacturer_price` decimal(12,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`manufacturer_pr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

INSERT INTO `manufacturer_product` (`manufacturer_pr_id`, `product_id`, `products_model`, `manufacturer_id`, `manufacturer_price`) VALUES ('3', '95173215', NULL, 'VVUVQWE7GOF6C8NQIBIV', '40.00');
INSERT INTO `manufacturer_product` (`manufacturer_pr_id`, `product_id`, `products_model`, `manufacturer_id`, `manufacturer_price`) VALUES ('7', '39763666', NULL, 'RZ82QCYZ33SNX5BW4XA5', '45.00');
INSERT INTO `manufacturer_product` (`manufacturer_pr_id`, `product_id`, `products_model`, `manufacturer_id`, `manufacturer_price`) VALUES ('8', '36273326', NULL, 'RZ82QCYZ33SNX5BW4XA5', '100.00');
INSERT INTO `manufacturer_product` (`manufacturer_pr_id`, `product_id`, `products_model`, `manufacturer_id`, `manufacturer_price`) VALUES ('9', '99882539', NULL, '294FM67SJF3FYQXAPJV2', '20.00');
INSERT INTO `manufacturer_product` (`manufacturer_pr_id`, `product_id`, `products_model`, `manufacturer_id`, `manufacturer_price`) VALUES ('10', '54675', 'Liquid', 'RZ82QCYZ33SNX5BW4XA5', '90.00');
INSERT INTO `manufacturer_product` (`manufacturer_pr_id`, `product_id`, `products_model`, `manufacturer_id`, `manufacturer_price`) VALUES ('12', '66749416', 'Tablet', 'KEDGDDOPO6VJTYU256B5', '190.00');
INSERT INTO `manufacturer_product` (`manufacturer_pr_id`, `product_id`, `products_model`, `manufacturer_id`, `manufacturer_price`) VALUES ('13', '13537278', 'Tablet', 'O3G5STXHZKOW5SM9VO1S', '600.00');
INSERT INTO `manufacturer_product` (`manufacturer_pr_id`, `product_id`, `products_model`, `manufacturer_id`, `manufacturer_price`) VALUES ('15', '88512717', NULL, '441UBRSOC25RYNPAMYON', '200.00');
INSERT INTO `manufacturer_product` (`manufacturer_pr_id`, `product_id`, `products_model`, `manufacturer_id`, `manufacturer_price`) VALUES ('16', '67564716', 'Tablet', '35IHYBJZ6UWRIP7YUN3V', '50000.00');
INSERT INTO `manufacturer_product` (`manufacturer_pr_id`, `product_id`, `products_model`, `manufacturer_id`, `manufacturer_price`) VALUES ('17', '92611999', 'Injections', 'KEDGDDOPO6VJTYU256B5', '700.00');
INSERT INTO `manufacturer_product` (`manufacturer_pr_id`, `product_id`, `products_model`, `manufacturer_id`, `manufacturer_price`) VALUES ('18', '33939612', 'Drops', 'KEDGDDOPO6VJTYU256B5', '300.00');
INSERT INTO `manufacturer_product` (`manufacturer_pr_id`, `product_id`, `products_model`, `manufacturer_id`, `manufacturer_price`) VALUES ('22', '58391549', NULL, '0', '30.00');
INSERT INTO `manufacturer_product` (`manufacturer_pr_id`, `product_id`, `products_model`, `manufacturer_id`, `manufacturer_price`) VALUES ('23', '880196268664', 'Tablet', 'VVUVQWE7GOF6C8NQIBIV', '120.00');
INSERT INTO `manufacturer_product` (`manufacturer_pr_id`, `product_id`, `products_model`, `manufacturer_id`, `manufacturer_price`) VALUES ('24', '62847656', NULL, 'KEDGDDOPO6VJTYU256B5', '1000.00');
INSERT INTO `manufacturer_product` (`manufacturer_pr_id`, `product_id`, `products_model`, `manufacturer_id`, `manufacturer_price`) VALUES ('25', '22394388', 'Antibiotic', 'JQGGDI9NT6YLNT6UAZSV', '100.00');
INSERT INTO `manufacturer_product` (`manufacturer_pr_id`, `product_id`, `products_model`, `manufacturer_id`, `manufacturer_price`) VALUES ('26', '75217998', 'Antibiotic', '8W5RBSGJBYJM6ANZYGNM', '40.00');
INSERT INTO `manufacturer_product` (`manufacturer_pr_id`, `product_id`, `products_model`, `manufacturer_id`, `manufacturer_price`) VALUES ('27', '34126953', 'test import', '8W5RBSGJBYJM6ANZYGNM', '90.00');


#
# TABLE STRUCTURE FOR: module
#

DROP TABLE IF EXISTS `module`;

CREATE TABLE `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text,
  `image` varchar(255) NOT NULL,
  `directory` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('1', 'Invoice', '', '', 'invoice', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('2', 'Customer', '', '', 'customer', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('3', 'Medicine', '', '', 'medicine', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('4', 'Manufacturer', '', '', 'manufacturer', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('5', 'Purchase', '', '', 'purchase', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('6', 'Stock', '', '', 'stock', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('7', 'Return', '', '', 'return', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('8', 'Report', '', '', 'report', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('9', 'Accounts', '', '', 'accounts', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('10', 'Bank', '', '', 'bank', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('11', 'Tax', '', '', 'tax', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('12', 'Human Resource Information', '', '', 'human_resource_info', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('13', 'Supplier', '', '', 'supplier', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('14', 'Service', '', '', 'service', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('15', 'Search', '', '', 'search', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('16', 'Settings', '', '', 'settings', '1');


#
# TABLE STRUCTURE FOR: payment_method
#

DROP TABLE IF EXISTS `payment_method`;

CREATE TABLE `payment_method` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_type` varchar(250) DEFAULT NULL,
  `card_no` varchar(250) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: payroll_tax_setup
#

DROP TABLE IF EXISTS `payroll_tax_setup`;

CREATE TABLE `payroll_tax_setup` (
  `tax_setup_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `start_amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `end_amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `rate` decimal(12,2) NOT NULL DEFAULT '0.00',
  `status` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`tax_setup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `payroll_tax_setup` (`tax_setup_id`, `start_amount`, `end_amount`, `rate`, `status`) VALUES ('1', '50000.00', '100000.00', '2.00', '');
INSERT INTO `payroll_tax_setup` (`tax_setup_id`, `start_amount`, `end_amount`, `rate`, `status`) VALUES ('2', '100001.00', '200000.00', '3.00', '');


#
# TABLE STRUCTURE FOR: person_information
#

DROP TABLE IF EXISTS `person_information`;

CREATE TABLE `person_information` (
  `person_id` varchar(50) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `person_phone` varchar(50) NOT NULL,
  `person_address` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `person_information` (`person_id`, `person_name`, `person_phone`, `person_address`, `status`) VALUES ('YYWEXW3349', 'tarin', '2346545', 'dhaka', '1');


#
# TABLE STRUCTURE FOR: person_ledger
#

DROP TABLE IF EXISTS `person_ledger`;

CREATE TABLE `person_ledger` (
  `transaction_id` varchar(50) NOT NULL,
  `person_id` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `debit` decimal(12,2) NOT NULL DEFAULT '0.00',
  `credit` decimal(10,2) NOT NULL DEFAULT '0.00',
  `details` text NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=no paid,2=paid',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: personal_loan
#

DROP TABLE IF EXISTS `personal_loan`;

CREATE TABLE `personal_loan` (
  `per_loan_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` varchar(30) NOT NULL,
  `person_id` varchar(30) NOT NULL,
  `debit` varchar(20) NOT NULL,
  `credit` float NOT NULL,
  `date` varchar(30) NOT NULL,
  `details` varchar(100) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=no paid,2=paid',
  PRIMARY KEY (`per_loan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `personal_loan` (`per_loan_id`, `transaction_id`, `person_id`, `debit`, `credit`, `date`, `details`, `status`) VALUES ('1', 'QW68YZEIXG', 'RBLJ7XTXI3', '900', '0', '2019-06-12', 'uyuyhb', '1');
INSERT INTO `personal_loan` (`per_loan_id`, `transaction_id`, `person_id`, `debit`, `credit`, `date`, `details`, `status`) VALUES ('2', 'KYBBXQ1XAD', 'RBLJ7XTXI3', '', '900', '2019-06-12', 'tyutyu', '2');
INSERT INTO `personal_loan` (`per_loan_id`, `transaction_id`, `person_id`, `debit`, `credit`, `date`, `details`, `status`) VALUES ('3', 'F2ZCNEP7KV', '84BXQJHNNK', '20000', '0', '2019-06-15', 'Need Loan', '1');
INSERT INTO `personal_loan` (`per_loan_id`, `transaction_id`, `person_id`, `debit`, `credit`, `date`, `details`, `status`) VALUES ('4', 'M7ZJ3IA8LI', 'RBLJ7XTXI3', '4000', '0', '2019-06-13', 'gdfghfd', '1');
INSERT INTO `personal_loan` (`per_loan_id`, `transaction_id`, `person_id`, `debit`, `credit`, `date`, `details`, `status`) VALUES ('5', 'GVCN1Y3G5V', 'RBLJ7XTXI3', '', '2000', '2019-06-13', 'fgdfg', '2');


#
# TABLE STRUCTURE FOR: pesonal_loan_information
#

DROP TABLE IF EXISTS `pesonal_loan_information`;

CREATE TABLE `pesonal_loan_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` varchar(50) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `person_phone` varchar(30) NOT NULL,
  `person_address` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `pesonal_loan_information` (`id`, `person_id`, `person_name`, `person_phone`, `person_address`, `status`) VALUES ('1', 'RBLJ7XTXI3', 'Monalisa', '765417896', 'Dhanmondi', '1');
INSERT INTO `pesonal_loan_information` (`id`, `person_id`, `person_name`, `person_phone`, `person_address`, `status`) VALUES ('2', '84BXQJHNNK', 'Nipa', '82768567', 'Dhanmondi', '1');


#
# TABLE STRUCTURE FOR: product_category
#

DROP TABLE IF EXISTS `product_category`;

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` varchar(255) DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO `product_category` (`id`, `category_id`, `category_name`, `status`) VALUES ('1', '11I7JG7GVJ94JIQ', ' Antiviral drug', '1');
INSERT INTO `product_category` (`id`, `category_id`, `category_name`, `status`) VALUES ('2', '1UJ4TO3DRR986V8', '  Penicillin', '1');
INSERT INTO `product_category` (`id`, `category_id`, `category_name`, `status`) VALUES ('3', '5TX8EZHJVH5MKKX', 'humanized antibody', '1');
INSERT INTO `product_category` (`id`, `category_id`, `category_name`, `status`) VALUES ('4', 'RKFF2KWR3JHNW1X', ' glycopeptides', '1');
INSERT INTO `product_category` (`id`, `category_id`, `category_name`, `status`) VALUES ('5', '1DO7NWL7EK2253L', 'Leukotriene ', '1');
INSERT INTO `product_category` (`id`, `category_id`, `category_name`, `status`) VALUES ('6', 'GLIUX5IOATGD455', 'Calcium', '1');


#
# TABLE STRUCTURE FOR: product_information
#

DROP TABLE IF EXISTS `product_information`;

CREATE TABLE `product_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(30) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `generic_name` varchar(250) NOT NULL,
  `box_size` varchar(30) NOT NULL,
  `product_location` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `tax` varchar(20) DEFAULT NULL,
  `product_model` varchar(50) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `product_details` varchar(250) DEFAULT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL,
  `tax0` text,
  `tax1` text,
  `tax2` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `generic_name`, `box_size`, `product_location`, `price`, `tax`, `product_model`, `unit`, `product_details`, `image`, `status`, `tax0`, `tax1`, `tax2`) VALUES ('1', '58391549', '0', 'Napa', 'Paracitamol demo adfsad,aasdfsad sdfasdf asdfasdfsadf sadfasdf asdf', '20', 'N', '35', '0', 'Antibiotic', '0', 'sdfsdf', 'http://localhost/pharmacy8.5/my-assets/image/product.png', '1', '0', '0', '0');
INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `generic_name`, `box_size`, `product_location`, `price`, `tax`, `product_model`, `unit`, `product_details`, `image`, `status`, `tax0`, `tax1`, `tax2`) VALUES ('2', '95173215', '0', 'Floxin', 'Flora', '20', 'F', '60', '0.02', 'test', 'Box', 'asdfasdf', 'http://localhost/pharmacy8.5/my-assets/image/product.png', '1', NULL, NULL, NULL);
INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `generic_name`, `box_size`, `product_location`, `price`, `tax`, `product_model`, `unit`, `product_details`, `image`, `status`, `tax0`, `tax1`, `tax2`) VALUES ('3', '99882539', '0', 'jtestMedicine', 'Test', '20', 'T', '30', '0', 'test', 'Box', 'sdfasdf', 'http://localhost/pharmacy8.5/my-assets/image/product/00d8a1d45f41473f0f652cd682a1d0c2.jpg', '1', '0.01', '0.02', '0.03');
INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `generic_name`, `box_size`, `product_location`, `price`, `tax`, `product_model`, `unit`, `product_details`, `image`, `status`, `tax0`, `tax1`, `tax2`) VALUES ('4', '36273326', '0', 'Adovas', 'paracitamol', '12', 'T', '120', '0', 'Antibiotic', 'Box', 'dfasdf', 'http://localhost/pharmacy8.5/my-assets/image/product/8e44956df6748aeb9cfb075deedb3597.jpg', '1', NULL, NULL, NULL);
INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `generic_name`, `box_size`, `product_location`, `price`, `tax`, `product_model`, `unit`, `product_details`, `image`, `status`, `tax0`, `tax1`, `tax2`) VALUES ('5', '39763666', '0', 'Mojo', 'Drinking', '12', 'M', '50', '0', 'test', 'pc', 'sdfasdf', 'http://localhost/pharmacy8.5/my-assets/image/product.png', '1', NULL, NULL, NULL);
INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `generic_name`, `box_size`, `product_location`, `price`, `tax`, `product_model`, `unit`, `product_details`, `image`, `status`, `tax0`, `tax1`, `tax2`) VALUES ('6', '54675', '11I7JG7GVJ94JIQ', 'Cough Syrup', 'Cough Syrup', '12', '', '100', '0', 'Liquid', 'Mg', '', 'http://localhost/pharmacy/my-assets/image/product.png', '1', '0.01', '0.02', '0.03');
INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `generic_name`, `box_size`, `product_location`, `price`, `tax`, `product_model`, `unit`, `product_details`, `image`, `status`, `tax0`, `tax1`, `tax2`) VALUES ('7', '62847656', 'GLIUX5IOATGD455', 'Acamprosate Calcium', 'Acamprosate', '3', '2', '2000', '0', 'Capsules', 'Kg', 'tyrghfjryt', 'http://localhost/pharmacy/my-assets/image/product.png', '1', '0.01', '0.02', '0.03');
INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `generic_name`, `box_size`, `product_location`, `price`, `tax`, `product_model`, `unit`, `product_details`, `image`, `status`, `tax0`, `tax1`, `tax2`) VALUES ('8', '66749416', '', 'Vitamin B Complex', 'B', '1', 'B', '200', '0', 'Tablet', 'Box', '', 'http://localhost/pharmacy/my-assets/image/product.png', '1', '0.01', '0.02', '0.03');
INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `generic_name`, `box_size`, `product_location`, `price`, `tax`, `product_model`, `unit`, `product_details`, `image`, `status`, `tax0`, `tax1`, `tax2`) VALUES ('9', '13537278', '11I7JG7GVJ94JIQ', 'Olux', 'Olux', '5', 'G', '1000', '0', 'Tablet', 'Box', 'ytrh', 'http://localhost/pharmacy/my-assets/image/product.png', '1', '0.01', '0.02', '0');
INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `generic_name`, `box_size`, `product_location`, `price`, `tax`, `product_model`, `unit`, `product_details`, `image`, `status`, `tax0`, `tax1`, `tax2`) VALUES ('10', '88512717', 'RKFF2KWR3JHNW1X', 'Olux-E', 'Olux-E', '4', 'R', '400', '0', 'Tablet', 'pc', '', 'http://localhost/pharmacy/my-assets/image/product/c0d1411fe49a50ccd1aa5332fc3e5f16.jpg', '1', '0.01', '0.02', '0');
INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `generic_name`, `box_size`, `product_location`, `price`, `tax`, `product_model`, `unit`, `product_details`, `image`, `status`, `tax0`, `tax1`, `tax2`) VALUES ('11', '67564716', '1UJ4TO3DRR986V8', 'Papain', 'Papain', '4', 'I', '7000', '0', 'Tablet', 'Box', 'jhujhjh', 'http://localhost/pharmacy/my-assets/image/product.png', '1', '0.01', '0.02', '0.03');
INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `generic_name`, `box_size`, `product_location`, `price`, `tax`, `product_model`, `unit`, `product_details`, `image`, `status`, `tax0`, `tax1`, `tax2`) VALUES ('12', '92611999', '11I7JG7GVJ94JIQ', 'Linzess', 'Linzess', '5', 'k', '1000', '0', 'Injections', 'Box', 'fgfg', 'http://localhost/pharmacy/my-assets/image/product.png', '1', '0.01', '0.02', '0.03');
INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `generic_name`, `box_size`, `product_location`, `price`, `tax`, `product_model`, `unit`, `product_details`, `image`, `status`, `tax0`, `tax1`, `tax2`) VALUES ('13', '33939612', '1DO7NWL7EK2253L', 'Boniva', 'Boniva', '3', 'p', '500', '0', 'Drops', 'Box', 'ghgh', 'http://localhost/pharmacy/my-assets/image/product.png', '1', '0.01', '0.02', '0.03');
INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `generic_name`, `box_size`, `product_location`, `price`, `tax`, `product_model`, `unit`, `product_details`, `image`, `status`, `tax0`, `tax1`, `tax2`) VALUES ('14', '880196268664', '', 'Demo Medicine', 'Demo Generic Name', '30', 'M', '150', '0', 'Tablet', 'Kg', '', 'http://localhost/pharmacysasmodel-version1/my-assets/image/product.png', '1', '0.01', '0.02', '0.03');
INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `generic_name`, `box_size`, `product_location`, `price`, `tax`, `product_model`, `unit`, `product_details`, `image`, `status`, `tax0`, `tax1`, `tax2`) VALUES ('15', '22394388', '11I7JG7GVJ94JIQ', 'Zinzar', 'zinzibar', '120', 'M', '120', '0', 'Antibiotic', 'Kg', 'asdfasd', 'http://localhost/pharmacysasmodel-version1/my-assets/image/product.png', '1', '0.01', '0.02', '0.03');
INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `generic_name`, `box_size`, `product_location`, `price`, `tax`, `product_model`, `unit`, `product_details`, `image`, `status`, `tax0`, `tax1`, `tax2`) VALUES ('16', '75217998', '', 'bbq', 'bb', '10', 'B', '50', '0', 'Antibiotic', 'Pices', 'dfgdf', 'http://localhost/pharmacysasmodel-version1/my-assets/image/product.png', '1', '0.01', '0.02', '0.03');
INSERT INTO `product_information` (`id`, `product_id`, `category_id`, `product_name`, `generic_name`, `box_size`, `product_location`, `price`, `tax`, `product_model`, `unit`, `product_details`, `image`, `status`, `tax0`, `tax1`, `tax2`) VALUES ('17', '34126953', '1UJ4TO3DRR986V8', 'CCQ', 'cc', '12', 'C', '100', '0', 'test import', 'Pices', 'sdfsdf', 'http://localhost/pharmacysasmodel-version1/my-assets/image/product.png', '1', '0.01', '0.02', '0.03');


#
# TABLE STRUCTURE FOR: product_purchase
#

DROP TABLE IF EXISTS `product_purchase`;

CREATE TABLE `product_purchase` (
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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

INSERT INTO `product_purchase` (`chalan_no`, `manufacturer_id`, `grand_total_amount`, `total_discount`, `purchase_date`, `purchase_details`, `status`, `id`, `purchase_id`, `bank_id`, `payment_type`) VALUES ('1902041030', 'RZ82QCYZ33SNX5BW4XA5', '25500.00', NULL, '2020-02-04', 'sdfs', '1', '2', '3244fsfsdfs', 'IGI844263K', '2');
INSERT INTO `product_purchase` (`chalan_no`, `manufacturer_id`, `grand_total_amount`, `total_discount`, `purchase_date`, `purchase_details`, `status`, `id`, `purchase_id`, `bank_id`, `payment_type`) VALUES ('234234', '294FM67SJF3FYQXAPJV2', '1500.00', '0.00', '2019-02-04', 'sdfs', '1', '4', 'TKOEWBZ5JK', NULL, '0');
INSERT INTO `product_purchase` (`chalan_no`, `manufacturer_id`, `grand_total_amount`, `total_discount`, `purchase_date`, `purchase_details`, `status`, `id`, `purchase_id`, `bank_id`, `payment_type`) VALUES ('124564', 'VVUVQWE7GOF6C8NQIBIV', '120.00', NULL, '2019-02-09', 'xcvxcv', '1', '5', '20190209073620', NULL, '0');
INSERT INTO `product_purchase` (`chalan_no`, `manufacturer_id`, `grand_total_amount`, `total_discount`, `purchase_date`, `purchase_details`, `status`, `id`, `purchase_id`, `bank_id`, `payment_type`) VALUES ('325698', '294FM67SJF3FYQXAPJV2', '1000.00', NULL, '2019-05-16', 'sdfasd', '1', '6', '20190516123730', NULL, '0');
INSERT INTO `product_purchase` (`chalan_no`, `manufacturer_id`, `grand_total_amount`, `total_discount`, `purchase_date`, `purchase_details`, `status`, `id`, `purchase_id`, `bank_id`, `payment_type`) VALUES ('42342', 'RZ82QCYZ33SNX5BW4XA5', '5000.00', NULL, '2019-05-20', 'sdfsdf', '1', '7', '20190520080137', NULL, '0');
INSERT INTO `product_purchase` (`chalan_no`, `manufacturer_id`, `grand_total_amount`, `total_discount`, `purchase_date`, `purchase_details`, `status`, `id`, `purchase_id`, `bank_id`, `payment_type`) VALUES ('123445', 'RZ82QCYZ33SNX5BW4XA5', '2250.00', NULL, '2019-05-21', '', '1', '8', '20190521094539', NULL, '0');
INSERT INTO `product_purchase` (`chalan_no`, `manufacturer_id`, `grand_total_amount`, `total_discount`, `purchase_date`, `purchase_details`, `status`, `id`, `purchase_id`, `bank_id`, `payment_type`) VALUES ('123456789', 'KEDGDDOPO6VJTYU256B5', '200000.00', NULL, '2019-06-15', 'ytdfzcvbnm,', '1', '9', '20190615085946', '', '1');
INSERT INTO `product_purchase` (`chalan_no`, `manufacturer_id`, `grand_total_amount`, `total_discount`, `purchase_date`, `purchase_details`, `status`, `id`, `purchase_id`, `bank_id`, `payment_type`) VALUES ('45678', 'KEDGDDOPO6VJTYU256B5', '95000.00', NULL, '2019-06-15', '', '1', '10', '20190615090737', '', '1');
INSERT INTO `product_purchase` (`chalan_no`, `manufacturer_id`, `grand_total_amount`, `total_discount`, `purchase_date`, `purchase_details`, `status`, `id`, `purchase_id`, `bank_id`, `payment_type`) VALUES ('656', 'KEDGDDOPO6VJTYU256B5', '150000.00', NULL, '2019-06-15', '', '1', '11', '20190615090929', '', '1');
INSERT INTO `product_purchase` (`chalan_no`, `manufacturer_id`, `grand_total_amount`, `total_discount`, `purchase_date`, `purchase_details`, `status`, `id`, `purchase_id`, `bank_id`, `payment_type`) VALUES ('777', '35IHYBJZ6UWRIP7YUN3V', '2500000.00', NULL, '2019-06-15', 'huijh', '1', '12', '20190615124416', '', '1');
INSERT INTO `product_purchase` (`chalan_no`, `manufacturer_id`, `grand_total_amount`, `total_discount`, `purchase_date`, `purchase_details`, `status`, `id`, `purchase_id`, `bank_id`, `payment_type`) VALUES ('5678', 'KEDGDDOPO6VJTYU256B5', '10000.00', NULL, '2019-06-16', '', '1', '13', '20190616074053', '', '1');
INSERT INTO `product_purchase` (`chalan_no`, `manufacturer_id`, `grand_total_amount`, `total_discount`, `purchase_date`, `purchase_details`, `status`, `id`, `purchase_id`, `bank_id`, `payment_type`) VALUES ('435234', 'VVUVQWE7GOF6C8NQIBIV', '2000.00', NULL, '2019-08-05', '234234', '1', '14', '20190805044552', '', '1');
INSERT INTO `product_purchase` (`chalan_no`, `manufacturer_id`, `grand_total_amount`, `total_discount`, `purchase_date`, `purchase_details`, `status`, `id`, `purchase_id`, `bank_id`, `payment_type`) VALUES ('234232', 'VVUVQWE7GOF6C8NQIBIV', '6000.00', NULL, '2019-09-25', 'sdfasd', '1', '15', '20190925143021', '', '1');
INSERT INTO `product_purchase` (`chalan_no`, `manufacturer_id`, `grand_total_amount`, `total_discount`, `purchase_date`, `purchase_details`, `status`, `id`, `purchase_id`, `bank_id`, `payment_type`) VALUES ('234234', 'VVUVQWE7GOF6C8NQIBIV', '840.00', NULL, '2019-10-06', 'sdfsdf', '1', '16', '20191006080228', '', '1');
INSERT INTO `product_purchase` (`chalan_no`, `manufacturer_id`, `grand_total_amount`, `total_discount`, `purchase_date`, `purchase_details`, `status`, `id`, `purchase_id`, `bank_id`, `payment_type`) VALUES ('234234234', 'VVUVQWE7GOF6C8NQIBIV', '80.00', NULL, '2019-10-06', 'sdfsdf', '1', '17', '20191006080314', '', '1');
INSERT INTO `product_purchase` (`chalan_no`, `manufacturer_id`, `grand_total_amount`, `total_discount`, `purchase_date`, `purchase_details`, `status`, `id`, `purchase_id`, `bank_id`, `payment_type`) VALUES ('345345', 'KEDGDDOPO6VJTYU256B5', '2000.00', NULL, '2019-10-06', '', '1', '18', '20191006080439', '', '1');
INSERT INTO `product_purchase` (`chalan_no`, `manufacturer_id`, `grand_total_amount`, `total_discount`, `purchase_date`, `purchase_details`, `status`, `id`, `purchase_id`, `bank_id`, `payment_type`) VALUES ('111', 'JQGGDI9NT6YLNT6UAZSV', '5000.00', NULL, '2019-10-06', 'some thing', '1', '19', '20191006110842', '', '1');
INSERT INTO `product_purchase` (`chalan_no`, `manufacturer_id`, `grand_total_amount`, `total_discount`, `purchase_date`, `purchase_details`, `status`, `id`, `purchase_id`, `bank_id`, `payment_type`) VALUES ('46575', '8W5RBSGJBYJM6ANZYGNM', '2000.00', NULL, '2019-10-10', 'dfgfg', '1', '20', '20191010064228', '', '1');
INSERT INTO `product_purchase` (`chalan_no`, `manufacturer_id`, `grand_total_amount`, `total_discount`, `purchase_date`, `purchase_details`, `status`, `id`, `purchase_id`, `bank_id`, `payment_type`) VALUES ('234878', '8W5RBSGJBYJM6ANZYGNM', '4500.00', NULL, '2019-10-10', 'sdfasd', '1', '21', '20191010064439', '', '1');


#
# TABLE STRUCTURE FOR: product_purchase_details
#

DROP TABLE IF EXISTS `product_purchase_details`;

CREATE TABLE `product_purchase_details` (
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
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('N1ByAR6Xb1z3tGz', '3244fsfsdfs', '95173215', '50.00', '40.00', '2000.00', NULL, '222', '2020-12-12', '0', '40');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('gZuSMbl0c9aoGCC', 'TKOEWBZ5JK', '58391549', '50.00', '30.00', '1500.00', '0.00', '111', '2019-12-12', '1', '16');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('KZYxLObfXzGcbhu', '3244fsfsdfs', '58391549', '100.00', '30.00', '3000.00', NULL, '114', '2019-12-12', '0', '39');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('VblepWrbKLeHp2L', '3244fsfsdfs', '95173215', '50.00', '40.00', '2000.00', NULL, '222', '2020-12-12', '0', '38');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('aakz9jN2VSkuBoO', '3244fsfsdfs', '58391549', '100.00', '30.00', '3000.00', NULL, '114', '2019-12-12', '0', '37');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('pbHQli5ElySf8Jg', '3244fsfsdfs', '58391549', '100.00', '30.00', '3000.00', NULL, '114', '2019-12-12', '0', '36');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('z5t7hWS1uTt8BjL', '3244fsfsdfs', '58391549', '100.00', '30.00', '3000.00', NULL, '114', '2019-12-12', '0', '33');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('qPaTeuJgfGWQcpM', '3244fsfsdfs', '95173215', '50.00', '40.00', '2000.00', NULL, '222', '2020-12-12', '0', '34');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('NeEsjGkin6GyXip', '3244fsfsdfs', '58391549', '100.00', '30.00', '3000.00', NULL, '114', '2019-12-12', '0', '35');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('4wU7ezUQFEGqxhj', '20190209073620', '95173215', '3.00', '40.00', '120.00', NULL, '321', '2020-04-06', '1', '29');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('Du8XN2JgTzQ7CfJ', '20190516123730', '99882539', '50.00', '20.00', '1000.00', NULL, '1234', '2020-05-30', '1', '30');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('6iNPAsADM4fSu5b', '20190520080137', '36273326', '50.00', '100.00', '5000.00', NULL, '5643', '2020-03-31', '1', '31');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('X45RPPGVjbvdJiM', '20190521094539', '39763666', '50.00', '45.00', '2250.00', NULL, '2345', '2019-08-31', '1', '32');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('ny1mjDn4Ul5ha61', '20190615085946', '62847656', '200.00', '1000.00', '200000.00', NULL, '112', '2019-06-30', '1', '41');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('9XoFxem9tk5NBRL', '20190615090737', '66749416', '500.00', '190.00', '95000.00', NULL, '333', '2019-09-30', '1', '42');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('7Izgo6NNxtiqD2S', '20190615090929', '62847656', '150.00', '1000.00', '150000.00', NULL, '777', '2019-10-30', '1', '43');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('415892624717527', '20190615090929', '62847656', '-50.00', '1000.00', '-50000.00', '0.00', '777', '2019-10-30', '1', '44');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('3IPFMw4qZhQu5US', '20190615124416', '67564716', '50.00', '50000.00', '2500000.00', NULL, '789', '2019-09-07', '1', '45');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('fZzycTEqD0yVuLr', '20190616074053', '92611999', '10.00', '700.00', '7000.00', NULL, '67898', '2020-01-31', '1', '46');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('Hek2dx2rW3zvEF4', '20190616074053', '33939612', '10.00', '300.00', '3000.00', NULL, '78901', '2020-09-29', '1', '47');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('UWzUVmKYfh7DmkQ', '20190805044552', '95173215', '50.00', '40.00', '2000.00', NULL, '32423', '2019-11-30', '1', '48');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('ZCsOwzrVkvHiVnx', '20190925143021', '880196268664', '50.00', '120.00', '6000.00', NULL, '2342', '2020-01-31', '1', '49');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('XRAeG0qlaWDgPc2', '20191006080439', '62847656', '2.00', '1000.00', '2000.00', NULL, '234', '2020-01-25', '1', '50');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('bP5plSf2LBDmIjw', '20191006110842', '22394388', '50.00', '100.00', '5000.00', NULL, '01234', '2020-01-31', '1', '51');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('722799854612537', '20191006110842', '22394388', '-10.00', '100.00', '-1000.00', '0.00', '01234', '2020-01-31', '1', '52');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('578136686542649', '20191006110842', '22394388', '-10.00', '100.00', '-1000.00', '0.00', '01234', '2020-01-31', '1', '53');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('XCLxfGAfvenn7Ib', '20191010064228', '75217998', '50.00', '40.00', '2000.00', NULL, '12312', '2020-02-29', '1', '54');
INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `discount`, `batch_id`, `expeire_date`, `status`, `id`) VALUES ('uDIhOByGVzlpkeW', '20191010064439', '34126953', '50.00', '90.00', '4500.00', NULL, '8934', '2019-09-31', '1', '55');


#
# TABLE STRUCTURE FOR: product_return
#

DROP TABLE IF EXISTS `product_return`;

CREATE TABLE `product_return` (
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `product_return` (`id`, `return_id`, `product_id`, `invoice_id`, `purchase_id`, `date_purchase`, `date_return`, `byy_qty`, `ret_qty`, `customer_id`, `manufacturer_id`, `product_rate`, `deduction`, `total_deduct`, `total_tax`, `total_ret_amount`, `net_total_amount`, `reason`, `usablity`) VALUES ('2', '846873157499644', '33939612', '9374992955', NULL, '2019-06-16', '2019-06-19', '6.00', '3.00', 'FTIVY6Q8W66TA4F', '', '500.00', '0.00', '0.00', '0.00', '1500.00', '1500.00', '', '1');
INSERT INTO `product_return` (`id`, `return_id`, `product_id`, `invoice_id`, `purchase_id`, `date_purchase`, `date_return`, `byy_qty`, `ret_qty`, `customer_id`, `manufacturer_id`, `product_rate`, `deduction`, `total_deduct`, `total_tax`, `total_ret_amount`, `net_total_amount`, `reason`, `usablity`) VALUES ('3', '269716115222449', '22394388', '', '20191006110842', '2019-10-06', '2019-10-06', '50.00', '10.00', '', 'JQGGDI9NT6YLNT6UAZSV', '100.00', '0.00', '0.00', '0.00', '1000.00', '1000.00', '', '2');


#
# TABLE STRUCTURE FOR: product_service
#

DROP TABLE IF EXISTS `product_service`;

CREATE TABLE `product_service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `charge` decimal(10,2) NOT NULL DEFAULT '0.00',
  `tax0` text,
  `tax1` text,
  `tax2` text,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `product_service` (`service_id`, `service_name`, `description`, `charge`, `tax0`, `tax1`, `tax2`) VALUES ('1', 'Pressure Mesurement', 'sdfdsf', '30.00', NULL, NULL, NULL);
INSERT INTO `product_service` (`service_id`, `service_name`, `description`, `charge`, `tax0`, `tax1`, `tax2`) VALUES ('2', 'Blood Group Test', 'sdfsd', '100.00', NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: product_type
#

DROP TABLE IF EXISTS `product_type`;

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` varchar(255) DEFAULT NULL,
  `type_name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

INSERT INTO `product_type` (`id`, `type_id`, `type_name`, `status`) VALUES ('1', '5FHNC672E79T5DH', 'Antibiotic', '1');
INSERT INTO `product_type` (`id`, `type_id`, `type_name`, `status`) VALUES ('2', 'UO3WC7PILCH26SV', 'test', '1');
INSERT INTO `product_type` (`id`, `type_id`, `type_name`, `status`) VALUES ('3', 'UO3WC7PILCH26hV', 'test import', '1');
INSERT INTO `product_type` (`id`, `type_id`, `type_name`, `status`) VALUES ('4', 'UHCB5JTUSEFOZOQ', 'Liquid or syrups', '1');
INSERT INTO `product_type` (`id`, `type_id`, `type_name`, `status`) VALUES ('5', 'JLII8RWD1E48MO8', 'Tablet', '1');
INSERT INTO `product_type` (`id`, `type_id`, `type_name`, `status`) VALUES ('6', '77L4UNTYE3VI9KR', 'Capsules', '1');
INSERT INTO `product_type` (`id`, `type_id`, `type_name`, `status`) VALUES ('7', 'BTY1FPXRANVGOTP', 'Drops', '1');
INSERT INTO `product_type` (`id`, `type_id`, `type_name`, `status`) VALUES ('8', 'HKJUKICWBCTLH6S', 'Eye drops', '1');
INSERT INTO `product_type` (`id`, `type_id`, `type_name`, `status`) VALUES ('9', 'EYSKDXBKQ3RFV5K', 'Inhalers', '1');
INSERT INTO `product_type` (`id`, `type_id`, `type_name`, `status`) VALUES ('10', 'VTBH7VPW8IYC1II', 'Injections', '1');
INSERT INTO `product_type` (`id`, `type_id`, `type_name`, `status`) VALUES ('11', 'JJCCZIKHA89D2NI', 'Granules or powder', '1');


#
# TABLE STRUCTURE FOR: role_permission
#

DROP TABLE IF EXISTS `role_permission`;

CREATE TABLE `role_permission` (
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
) ENGINE=InnoDB AUTO_INCREMENT=461 DEFAULT CHARSET=utf8;

INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('64', '3', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('65', '4', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('66', '5', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('67', '6', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('68', '7', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('69', '8', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('70', '9', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('71', '10', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('72', '11', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('73', '12', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('74', '13', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('75', '14', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('76', '15', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('77', '16', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('78', '17', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('79', '18', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('80', '19', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('81', '20', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('82', '21', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('83', '22', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('84', '23', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('85', '65', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('86', '24', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('87', '25', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('88', '26', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('89', '27', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('90', '28', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('91', '29', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('92', '30', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('93', '31', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('94', '32', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('95', '62', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('96', '63', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('97', '33', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('98', '34', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('99', '35', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('100', '36', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('101', '37', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('102', '38', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('103', '39', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('104', '40', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('105', '41', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('106', '42', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('107', '43', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('108', '44', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('109', '45', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('110', '46', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('111', '47', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('112', '48', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('113', '49', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('114', '50', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('115', '51', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('116', '52', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('117', '53', '23', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('118', '54', '23', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('119', '55', '23', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('120', '56', '23', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('121', '57', '23', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('122', '58', '23', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('123', '59', '23', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('124', '60', '23', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('125', '61', '23', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('126', '64', '23', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('127', '3', '24', '1', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('128', '4', '24', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('129', '5', '24', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('130', '6', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('131', '7', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('132', '8', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('133', '9', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('134', '10', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('135', '11', '24', '1', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('136', '12', '24', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('137', '13', '24', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('138', '14', '24', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('139', '15', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('140', '16', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('141', '17', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('142', '18', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('143', '19', '24', '1', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('144', '20', '24', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('145', '21', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('146', '22', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('147', '23', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('148', '65', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('149', '24', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('150', '25', '24', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('151', '26', '24', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('152', '27', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('153', '28', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('154', '29', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('155', '30', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('156', '31', '24', '1', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('157', '32', '24', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('158', '62', '24', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('159', '63', '24', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('160', '33', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('161', '34', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('162', '35', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('163', '36', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('164', '37', '24', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('165', '38', '24', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('166', '39', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('167', '40', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('168', '41', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('169', '42', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('170', '43', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('171', '44', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('172', '45', '24', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('173', '46', '24', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('174', '47', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('175', '48', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('176', '49', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('177', '50', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('178', '51', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('179', '52', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('180', '53', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('181', '54', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('182', '55', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('183', '56', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('184', '57', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('185', '58', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('186', '59', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('187', '60', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('188', '61', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('189', '64', '24', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('190', '3', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('191', '4', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('192', '5', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('193', '6', '26', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('194', '7', '26', '1', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('195', '8', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('196', '9', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('197', '10', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('198', '11', '26', '1', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('199', '12', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('200', '13', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('201', '14', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('202', '15', '26', '1', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('203', '16', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('204', '17', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('205', '18', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('206', '19', '26', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('207', '20', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('208', '21', '26', '1', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('209', '22', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('210', '23', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('211', '65', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('212', '24', '26', '1', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('213', '25', '26', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('214', '26', '26', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('215', '27', '26', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('216', '28', '26', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('217', '29', '26', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('218', '30', '26', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('219', '31', '26', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('220', '32', '26', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('221', '62', '26', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('222', '63', '26', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('223', '33', '26', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('224', '34', '26', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('225', '35', '26', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('226', '36', '26', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('227', '37', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('228', '38', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('229', '39', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('230', '40', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('231', '41', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('232', '42', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('233', '43', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('234', '44', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('235', '45', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('236', '46', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('237', '47', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('238', '48', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('239', '49', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('240', '50', '26', '1', '1', '1', '1');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('241', '51', '26', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('242', '52', '26', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('243', '53', '26', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('244', '54', '26', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('245', '55', '26', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('246', '56', '26', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('247', '57', '26', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('248', '58', '26', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('249', '59', '26', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('250', '60', '26', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('251', '61', '26', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('252', '64', '26', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('357', '1', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('358', '2', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('359', '3', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('360', '4', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('361', '5', '27', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('362', '6', '27', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('363', '7', '27', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('364', '8', '27', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('365', '9', '27', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('366', '10', '27', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('367', '11', '27', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('368', '12', '27', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('369', '13', '27', '0', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('370', '14', '27', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('371', '15', '27', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('372', '16', '27', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('373', '17', '27', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('374', '18', '27', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('375', '19', '27', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('376', '20', '27', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('377', '21', '27', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('378', '22', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('379', '23', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('380', '24', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('381', '25', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('382', '26', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('383', '27', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('384', '28', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('385', '29', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('386', '30', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('387', '31', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('388', '32', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('389', '33', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('390', '34', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('391', '35', '27', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('392', '36', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('393', '37', '27', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('394', '38', '27', '0', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('395', '39', '27', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('396', '40', '27', '0', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('397', '41', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('398', '42', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('399', '43', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('400', '44', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('401', '45', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('402', '46', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('403', '47', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('404', '48', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('405', '49', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('406', '50', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('407', '51', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('408', '52', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('409', '53', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('410', '54', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('411', '55', '27', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('412', '56', '27', '0', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('413', '57', '27', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('414', '58', '27', '0', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('415', '59', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('416', '60', '27', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('417', '61', '27', '0', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('418', '62', '27', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('419', '63', '27', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('420', '64', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('421', '65', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('422', '66', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('423', '67', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('424', '68', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('425', '69', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('426', '70', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('427', '71', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('428', '72', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('429', '73', '27', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('430', '74', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('431', '75', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('432', '76', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('433', '77', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('434', '78', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('435', '79', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('436', '80', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('437', '81', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('438', '82', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('439', '83', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('440', '84', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('441', '85', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('442', '86', '27', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('443', '87', '27', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('444', '88', '27', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('445', '89', '27', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('446', '90', '27', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('447', '91', '27', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('448', '92', '27', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('449', '93', '27', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('450', '94', '27', '1', '1', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('451', '95', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('452', '96', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('453', '97', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('454', '98', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('455', '99', '27', '1', '1', '1', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('456', '100', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('457', '101', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('458', '102', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('459', '103', '27', '0', '0', '0', '0');
INSERT INTO `role_permission` (`id`, `fk_module_id`, `role_id`, `create`, `read`, `update`, `delete`) VALUES ('460', '104', '27', '0', '0', '0', '0');


#
# TABLE STRUCTURE FOR: salary_sheet_generate
#

DROP TABLE IF EXISTS `salary_sheet_generate`;

CREATE TABLE `salary_sheet_generate` (
  `ssg_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `gdate` varchar(30) DEFAULT NULL,
  `start_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `end_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `generate_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`ssg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `salary_sheet_generate` (`ssg_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('1', 'May', 'May 2019', '2019-5-1', '2019-5-31', 'Admin User');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('2', 'may', 'June 2019', '2019-6-1', '2019-6-30', 'Admin User');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('3', NULL, 'October 2019', '2019-10-1', '2019-10-31', 'Admin User');


#
# TABLE STRUCTURE FOR: salary_type
#

DROP TABLE IF EXISTS `salary_type`;

CREATE TABLE `salary_type` (
  `salary_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `sal_name` varchar(100) NOT NULL,
  `salary_type` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`salary_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `salary_type` (`salary_type_id`, `sal_name`, `salary_type`, `status`) VALUES ('1', 'House Rent', '1', '1');
INSERT INTO `salary_type` (`salary_type_id`, `sal_name`, `salary_type`, `status`) VALUES ('2', 'provident', '0', '1');
INSERT INTO `salary_type` (`salary_type_id`, `sal_name`, `salary_type`, `status`) VALUES ('3', 'Health', '1', '1');


#
# TABLE STRUCTURE FOR: sec_role
#

DROP TABLE IF EXISTS `sec_role`;

CREATE TABLE `sec_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

INSERT INTO `sec_role` (`id`, `type`) VALUES ('23', 'Admin');
INSERT INTO `sec_role` (`id`, `type`) VALUES ('24', 'Sales Man');
INSERT INTO `sec_role` (`id`, `type`) VALUES ('26', 'Manager');
INSERT INTO `sec_role` (`id`, `type`) VALUES ('27', 'Accountant');


#
# TABLE STRUCTURE FOR: sec_userrole
#

DROP TABLE IF EXISTS `sec_userrole`;

CREATE TABLE `sec_userrole` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `roleid` int(11) NOT NULL,
  `createby` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `createdate` datetime NOT NULL,
  UNIQUE KEY `ID` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `sec_userrole` (`id`, `user_id`, `roleid`, `createby`, `createdate`) VALUES ('1', '2', '26', '1', '2019-06-12 10:56:23');
INSERT INTO `sec_userrole` (`id`, `user_id`, `roleid`, `createby`, `createdate`) VALUES ('2', '3', '24', '1', '2019-06-12 10:56:44');
INSERT INTO `sec_userrole` (`id`, `user_id`, `roleid`, `createby`, `createdate`) VALUES ('3', '2', '26', '1', '2019-06-13 05:59:23');


#
# TABLE STRUCTURE FOR: service_invoice
#

DROP TABLE IF EXISTS `service_invoice`;

CREATE TABLE `service_invoice` (
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `service_invoice` (`id`, `voucher_no`, `date`, `employee_id`, `customer_id`, `total_amount`, `total_discount`, `invoice_discount`, `total_tax`, `paid_amount`, `due_amount`, `shipping_cost`, `previous`, `details`) VALUES ('1', 'serv-20190522014117', '2019-05-22', '2', '789XC11EWYDN5XT', '63.54', '0.00', '0.00', '3.54', '63.54', '0.00', '0.00', '0.00', 'test service');
INSERT INTO `service_invoice` (`id`, `voucher_no`, `date`, `employee_id`, `customer_id`, `total_amount`, `total_discount`, `invoice_discount`, `total_tax`, `paid_amount`, `due_amount`, `shipping_cost`, `previous`, `details`) VALUES ('2', 'serv-20190522014209', '2019-05-22', '2', 'P3NY6D1AKZQPHB7', '63.54', '0.00', '0.00', '3.54', '63.54', '0.00', '0.00', '0.00', 'test service');
INSERT INTO `service_invoice` (`id`, `voucher_no`, `date`, `employee_id`, `customer_id`, `total_amount`, `total_discount`, `invoice_discount`, `total_tax`, `paid_amount`, `due_amount`, `shipping_cost`, `previous`, `details`) VALUES ('3', 'serv-20190522014405', '2019-05-22', '2', 'XHVT1EYRU9GJSF7', '211.78', '0.00', '0.00', '11.78', '211.78', '0.00', '0.00', '0.00', 'sdfasdf');
INSERT INTO `service_invoice` (`id`, `voucher_no`, `date`, `employee_id`, `customer_id`, `total_amount`, `total_discount`, `invoice_discount`, `total_tax`, `paid_amount`, `due_amount`, `shipping_cost`, `previous`, `details`) VALUES ('4', 'serv-20190522014512', '2019-05-22', '2', 'XHVT1EYRU9GJSF7', '211.78', '0.00', '0.00', '11.78', '211.78', '0.00', '0.00', '0.00', 'dsfasd');


#
# TABLE STRUCTURE FOR: service_invoice_details
#

DROP TABLE IF EXISTS `service_invoice_details`;

CREATE TABLE `service_invoice_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `service_inv_id` varchar(30) NOT NULL,
  `qty` decimal(10,2) NOT NULL DEFAULT '0.00',
  `charge` decimal(10,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `discount_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `total` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `service_invoice_details` (`id`, `service_id`, `service_inv_id`, `qty`, `charge`, `discount`, `discount_amount`, `total`) VALUES ('1', '2', 'serv-20190522014512', '2.00', '100.00', '0.00', '0.00', '200.00');


#
# TABLE STRUCTURE FOR: sms_settings
#

DROP TABLE IF EXISTS `sms_settings`;

CREATE TABLE `sms_settings` (
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

INSERT INTO `sms_settings` (`id`, `url`, `sender_id`, `api_key`, `isinvoice`, `ispurchase`, `isservice`, `ispayment`, `isreceive`) VALUES ('1', 'http://sms.sgmh.com/smsapi', '8801847169884', 'C20029865c42c504afc711.77492546', '1', '1', '1', '1', '1');


#
# TABLE STRUCTURE FOR: stock_fixed_asset
#

DROP TABLE IF EXISTS `stock_fixed_asset`;

CREATE TABLE `stock_fixed_asset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_id` int(11) NOT NULL,
  `item_code` varchar(50) NOT NULL,
  `qty` float NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `stock_fixed_asset` (`id`, `purchase_id`, `item_code`, `qty`, `price`) VALUES ('1', '2', '1233', '1', '1500');
INSERT INTO `stock_fixed_asset` (`id`, `purchase_id`, `item_code`, `qty`, `price`) VALUES ('4', '6', '01', '1', '30000');
INSERT INTO `stock_fixed_asset` (`id`, `purchase_id`, `item_code`, `qty`, `price`) VALUES ('5', '6', '02', '1', '40000');
INSERT INTO `stock_fixed_asset` (`id`, `purchase_id`, `item_code`, `qty`, `price`) VALUES ('6', '0', '1234', '1', '120');
INSERT INTO `stock_fixed_asset` (`id`, `purchase_id`, `item_code`, `qty`, `price`) VALUES ('7', '7', '1234', '2', '120');


#
# TABLE STRUCTURE FOR: sub_module
#

DROP TABLE IF EXISTS `sub_module`;

CREATE TABLE `sub_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `directory` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;

INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('1', '1', 'New Invoice', '', '', 'new_invoice', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('2', '1', 'Manage Invoice', '', '', 'manage_invoice', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('3', '1', 'POS INVOICE', '', '', 'pos_invoice', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('4', '1', 'GUI POS', '', '', 'gui_pos', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('5', '9', 'Chart Of Account', '', '', 'show_tree', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('6', '9', 'Manufacturer Payment', '', '', 'manufacturer_payment', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('7', '9', 'Supplier Payment', '', '', 'supplier_payment', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('8', '9', 'Customer Receive', '', '', 'customer_receive', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('9', '9', 'Debit Voucher', '', '', 'debit_voucher', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('10', '9', 'Credit Voucher', '', '', 'credit_voucher', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('11', '9', 'Contra Voucher', '', '', 'contra_voucher', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('12', '9', 'Journal Voucher', '', '', 'journal_voucher', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('13', '9', 'Voucher Approval', '', '', 'aprove_v', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('14', '9', 'Report', '', '', 'ac_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('15', '9', 'Cash Book', '', '', 'cash_book', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('16', '9', 'Bank Book', '', '', 'bank_book', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('17', '9', 'General Ledger', '', '', 'general_ledger', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('18', '9', 'Inventory Ledger', '', '', 'Inventory_ledger', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('19', '9', 'Cash Flow', '', '', 'cash_flow_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('20', '9', 'Profit Loss Statement', '', '', 'profit_loss_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('21', '9', 'Trial Balance', '', '', 'trial_balance', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('22', '3', 'Add Category', '', '', 'add_category', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('23', '3', 'Medicine Type', '', '', 'medicine_type', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('24', '3', 'Add Medicine', '', '', 'add_medicine', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('25', '3', 'Import Medicine(CSV)', '', '', 'import_medicine_csv', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('26', '3', 'Manage Medicine', '', '', 'manage_medicine', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('27', '2', 'Add Customer', '', '', 'add_customer', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('28', '2', 'Manage Customer', '', '', 'manage_customer', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('29', '2', 'Credit Customer', '', '', 'credit_customer', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('30', '2', 'Paid Customer', '', '', 'paid_customer', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('31', '4', 'Add Manufacturer', '', '', 'add_manufacturer', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('32', '4', 'Manage Manufacturer', '', '', 'manage_manufacturer', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('33', '4', 'Manufacturer Ledger', '', '', 'manufacturer_ledger', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('34', '4', 'Manufacturer Sales Details', '', '', 'manufacturer_sales_details', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('35', '5', 'Add Purchase', '', '', 'add_purchase', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('36', '5', 'Manage Purchase', '', '', 'manage_purchase', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('37', '12', 'Add Designation', '', '', 'add_designation', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('38', '12', 'Manage Designation', '', '', 'manage_designation', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('39', '12', 'Add Employee', '', '', 'add_employee', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('40', '12', 'Manage Employee', '', '', 'manage_employee', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('41', '12', 'Add Attendance', '', '', 'add_attendance', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('42', '12', 'Manage Attendance', '', '', 'manage_attendance', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('43', '12', 'Attendance Report', '', '', 'attendance_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('44', '12', 'Add Benefits', '', '', 'add_benefits', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('45', '12', 'Manage Benefits', '', '', 'manage_benefits', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('46', '12', 'Add Salary Setup', '', '', 'add_salary_setup', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('47', '12', 'Manage Salary Setup', '', '', 'manage_salary_setup', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('48', '12', 'Salary Generate', '', '', 'salary_generate', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('49', '12', 'Manage Salary Generate', '', '', 'manage_salary_generate', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('50', '12', 'Salary Payment', '', '', 'salary_payment', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('51', '12', 'Add Expense Item', '', '', 'add_expense_item', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('52', '12', 'Manage Expense Item', '', '', 'manage_expense_item', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('53', '12', 'Add Expense', '', '', 'add_expense', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('54', '12', 'Manage Expense', '', '', 'manage_expense', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('55', '12', 'Add Fixed Assets', '', '', 'add_fixed_assets', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('56', '12', 'Fixed Asset List', '', '', 'fixed_assets_list', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('57', '12', 'Purchase Fixed Assets', '', '', 'fixed_assets_purchase', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('58', '12', 'Fixed Asset Purchase List', '', '', 'fixed_assets_purchase_manage', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('59', '16', 'Manage Company', '', '', 'manage_company', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('60', '7', 'Return', '', '', 'return', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('61', '7', 'Stock Return List', '', '', 'stock_return_list', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('62', '7', 'Manufacturer Return List', '', '', 'manufacturer_return_list', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('63', '7', 'Wastage Return List', '', '', 'wastage_return_list', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('64', '15', 'Medicine', '', '', 'medicine_search', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('65', '15', 'Customer', '', '', 'customer_search', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('66', '15', 'Invoice', '', '', 'invoice_search', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('67', '15', 'Purchase', '', '', 'purcahse_search', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('68', '14', 'Add Service', '', '', 'create_service', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('69', '14', 'Manage Service', '', '', 'manage_service', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('70', '14', 'Service Invoice', '', '', 'service_invoice', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('71', '14', 'Manage Service Invoice', '', '', 'manage_service_invoice', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('72', '11', 'Tax Settings', '', '', 'tax_settings', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('73', '11', 'Add Income Tax', '', '', 'add_incometax', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('74', '11', 'Manage Income Tax', '', '', 'manage_income_tax', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('75', '11', 'Tax Report', '', '', 'tax_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('76', '11', 'Invoice Wise Tax Report', '', '', 'invoice_wise_tax_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('77', '6', 'Stock Report', '', '', 'stock_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('78', '6', 'Stock Report(Manufacturer Wise)', '', '', 'stock_report_manufacturer_wise', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('79', '6', 'Stock Report(Product Wise)', '', '', 'stock_report_product_wise', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('80', '6', 'Stock Report(Batch Wise)', '', '', 'stock_report_batch_wise', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('81', '8', 'Today\'s Report', '', '', 'todays_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('82', '8', 'Sales Report', '', '', 'sales_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('83', '8', 'Purchase Report', '', '', 'purchase_report', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('84', '8', 'Sales Report(Medicine Wise)', '', '', 'sales_report_medicine_wise', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('85', '8', 'Profit/Loss', '', '', 'profit_loss', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('86', '10', 'Add New Bank', '', '', 'add_new_bank', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('87', '10', 'Bank Transaction', '', '', 'bank_transaction', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('88', '10', 'Manage Bank', '', '', 'manage_bank', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('89', '12', 'Add Person(Personal Loan)', '', '', 'office_add_person', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('90', '12', 'Manage Person(Personal Loan)', '', '', 'office_manage_loan', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('91', '12', 'Add Person(Office Loan)', '', '', 'personal_add_person', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('92', '12', 'Add Loan(Office Loan)', '', '', 'personal_add_loan', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('93', '12', 'Add Payment(Office Loan)', '', '', 'personal_add_payment', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('94', '12', 'Manage Loan(Office Loan)', '', '', 'personal_manage_loan', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('95', '16', 'Add User', '', '', 'add_user', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('96', '16', 'Manage Users', '', '', 'manage_users', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('97', '16', 'Lanaguage', '', '', 'language', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('98', '16', 'Currency', '', '', 'currency', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('99', '16', 'Web Setting', '', '', 'soft_setting', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('100', '16', 'Add Role', '', '', 'add_role', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('101', '16', 'Role List', '', '', 'role_list', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('102', '16', 'Assign User Role', '', '', 'user_assign_role', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('103', '16', 'Permission', '', '', 'permission', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('104', '16', 'SMS', '', '', 'configure_sms', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('105', '3', 'Add Unit', '', '', 'add_unit', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('106', '3', 'Unit List', '', '', 'unit_list', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('107', '13', 'Add Supplier', '', '', 'add_supplier', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('108', '13', 'Manage Supplier', '', '', 'manage_supplier', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('109', '13', 'Supplier Ledger', '', '', 'supplier_ledger', '1');
INSERT INTO `sub_module` (`id`, `mid`, `name`, `description`, `image`, `directory`, `status`) VALUES ('110', '9', 'COA Print', '', '', 'coa_print', '1');


#
# TABLE STRUCTURE FOR: supplier_information
#

DROP TABLE IF EXISTS `supplier_information`;

CREATE TABLE `supplier_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_id` varchar(100) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `details` varchar(255) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `supplier_information` (`id`, `supplier_id`, `supplier_name`, `address`, `mobile`, `details`, `status`) VALUES ('3', '6GEBWMXNNM8C3Y7Q4RH8', 'Sgmh', 'sdfasdf', '234234', '', '1');


#
# TABLE STRUCTURE FOR: supplier_ledger
#

DROP TABLE IF EXISTS `supplier_ledger`;

CREATE TABLE `supplier_ledger` (
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `supplier_ledger` (`id`, `transaction_id`, `supplier_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('1', '0', '6GEBWMXNNM8C3Y7Q4RH8', '201910060639', NULL, '120.00', '', '', '', '2019-10-06', '1', 'c');
INSERT INTO `supplier_ledger` (`id`, `transaction_id`, `supplier_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('2', '0', '6GEBWMXNNM8C3Y7Q4RH8', '201910060639', NULL, '120.00', '', '', '', '2019-10-06', '1', 'd');
INSERT INTO `supplier_ledger` (`id`, `transaction_id`, `supplier_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('3', '7', '6GEBWMXNNM8C3Y7Q4RH8', '201910060648', NULL, '240.00', '', '', '', '2019-10-06', '1', 'c');
INSERT INTO `supplier_ledger` (`id`, `transaction_id`, `supplier_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('4', '7', '6GEBWMXNNM8C3Y7Q4RH8', '201910060648', NULL, '240.00', '', '', '', '2019-10-06', '1', 'd');
INSERT INTO `supplier_ledger` (`id`, `transaction_id`, `supplier_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES ('5', 'PS-1', '6GEBWMXNNM8C3Y7Q4RH8', NULL, 'PS-1', '100.00', 'Paid From Accounts', '1', '', '2019-10-06', '1', 'd');


#
# TABLE STRUCTURE FOR: synchronizer_setting
#

DROP TABLE IF EXISTS `synchronizer_setting`;

CREATE TABLE `synchronizer_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hostname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `port` varchar(10) NOT NULL,
  `debug` varchar(10) NOT NULL,
  `project_root` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: tax_collection
#

DROP TABLE IF EXISTS `tax_collection`;

CREATE TABLE `tax_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `customer_id` varchar(30) NOT NULL,
  `relation_id` varchar(30) NOT NULL,
  `tax0` text,
  `tax1` text,
  `tax2` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('1', '2019-05-21', 'P3NY6D1AKZQPHB7', '4173683884', NULL, NULL, NULL);
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('2', '2019-05-21', 'P3NY6D1AKZQPHB7', '4399776421', NULL, NULL, NULL);
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('3', '2019-05-21', 'EGLATNFLSV4A9VP', '2394811457', NULL, NULL, NULL);
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('4', '2019-05-21', 'P3NY6D1AKZQPHB7', '6757379735', NULL, NULL, NULL);
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('9', '2019-05-21', 'P3NY6D1AKZQPHB7', '9755728113', NULL, NULL, NULL);
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('10', '2019-05-22', 'XHVT1EYRU9GJSF7', 'serv-20190522014512', NULL, NULL, NULL);
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('11', '2019-05-23', 'BULO85O55VU3IQC', '5161369973', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('12', '2019-05-23', 'BULO85O55VU3IQC', '6914845124', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('13', '2019-05-25', 'BULO85O55VU3IQC', '4258396635', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('14', '2019-05-30', 'BULO85O55VU3IQC', '5628231696', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('15', '2019-05-30', '', '8915554399', '0.30', '0.59', '0.87');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('16', '2019-05-30', '', '2636312184', '0.30', '0.59', '0.87');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('17', '2019-05-30', 'BULO85O55VU3IQC', '7337717641', '0.30', '0.59', '0.87');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('18', '2019-05-30', '', '2499261131', '0.30', '0.59', '0.87');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('19', '2019-05-30', '', '9923112343', '0.30', '0.59', '0.87');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('20', '2019-05-30', 'P3NY6D1AKZQPHB7', '9511562226', '0.30', '0.59', '0.87');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('21', '2019-05-30', 'P3NY6D1AKZQPHB7', '2822797799', '0.30', '0.59', '0.87');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('22', '2019-05-30', 'P3NY6D1AKZQPHB7', '2733838696', '0.30', '0.59', '0.87');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('23', '2019-06-15', '', '1194992873', '126.00', '249.48', '366.74');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('24', '2019-06-15', '', '4717379265', '94.00', '186.12', '273.60');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('25', '2019-06-15', 'VP9733OXV5XSFTQ', '5875993999', '70.00', '138.60', '203.74');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('26', '2019-06-16', '', '1337844645', '10.00', '19.80', '29.11');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('27', '2019-06-16', '', '2893355527', '10.00', '19.80', '29.11');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('28', '2019-06-16', '', '1549954566', '10.00', '19.80', '29.11');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('29', '2019-06-16', '', '1716929527', '20.00', '39.60', '58.21');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('30', '2019-06-16', 'IFD4RYQ1NLHX1H2', '6368534916', '40.00', '79.20', '116.42');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('31', '2019-06-16', 'FTIVY6Q8W66TA4F', '9374992955', '30.00', '59.40', '87.32');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('32', '2019-09-15', '', '2357444577', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('33', '2019-09-15', '', '4397745619', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('34', '2019-09-15', '', '2889369457', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('35', '2019-09-15', '', '3497846252', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('36', '2019-09-18', '', '4349145515', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('37', '2019-09-18', '', '4819859856', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('38', '2019-09-18', '', '9188745284', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('39', '2019-09-18', '', '6887248818', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('40', '2019-09-18', '', '2556888428', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('41', '2019-09-19', '', '8232565794', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('42', '2019-09-22', '', '5816359211', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('43', '2019-09-22', '', '7589434143', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('44', '2019-09-22', '', '2457865981', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('45', '2019-09-22', '', '1984311715', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('46', '2019-09-22', '', '3246988817', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('47', '2019-09-22', '', '6342619132', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('48', '2019-09-22', '', '8274592153', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('49', '2019-09-22', '', '3964297319', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('50', '2019-09-22', '', '4849938327', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('51', '2019-09-22', 'EGLATNFLSV4A9VP', '4366657224', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('52', '2019-09-22', 'P3NY6D1AKZQPHB7', '6572548126', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('53', '2019-09-25', '', '7476575834', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('54', '2019-09-25', 'EGLATNFLSV4A9VP', '2546488688', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('55', '2019-09-25', 'P3NY6D1AKZQPHB7', '2498163329', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('56', '2019-09-25', '', '2682413866', '4.50', '8.91', '13.10');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('57', '2019-09-25', 'EGLATNFLSV4A9VP', '9895528273', '3.00', '5.94', '8.73');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('58', '2019-09-25', 'EGLATNFLSV4A9VP', '8225271174', '1.49', '2.94', '4.32');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('59', '2019-09-25', 'EGLATNFLSV4A9VP', '4364231861', '1.49', '2.94', '4.32');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('60', '2019-09-26', 'P3NY6D1AKZQPHB7', '9375835462', '0.60', '1.19', '1.75');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('61', '2019-09-26', 'P3NY6D1AKZQPHB7', '7478513273', '0.30', '0.59', '0.87');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('62', '2019-09-26', '', '7949351373', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('63', '2019-09-26', '', '9537276848', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('64', '2019-09-26', 'EGLATNFLSV4A9VP', '3439327186', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('65', '2019-09-26', '', '6417174793', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('66', '2019-09-26', '', '3451623335', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('67', '2019-09-26', 'P3NY6D1AKZQPHB7', '5136766345', '0.30', '0.59', '0.87');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('68', '2019-09-26', 'S5NZ2Z2LXJFE11U', '2527777432', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('69', '2019-09-26', 'S5NZ2Z2LXJFE11U', '4232219582', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('70', '2019-09-26', '', '8469112396', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('71', '2019-09-26', '', '7683384435', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('72', '2019-09-26', 'EGLATNFLSV4A9VP', '2259793278', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('73', '2019-09-26', '', '1498336438', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('74', '2019-09-26', 'P3NY6D1AKZQPHB7', '3569712289', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('75', '2019-10-06', '', '8788656989', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('76', '2019-10-06', '', '4572666298', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('77', '2019-10-06', 'P3NY6D1AKZQPHB7', '1928262497', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('78', '2019-10-10', '', '1156572723', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('79', '2019-10-10', 'P3NY6D1AKZQPHB7', '3458758819', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('80', '2019-10-10', '', '9972194591', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('81', '2019-10-10', 'P3NY6D1AKZQPHB7', '4813115177', '0.00', '0.00', '0.00');
INSERT INTO `tax_collection` (`id`, `date`, `customer_id`, `relation_id`, `tax0`, `tax1`, `tax2`) VALUES ('82', '2019-10-10', '', '4532655864', '0.00', '0.00', '0.00');


#
# TABLE STRUCTURE FOR: tax_information
#

DROP TABLE IF EXISTS `tax_information`;

CREATE TABLE `tax_information` (
  `tax_id` varchar(15) NOT NULL,
  `tax` float DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`tax_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tax_information` (`tax_id`, `tax`, `status`) VALUES ('3H6JW9GG2Z', '5', '1');
INSERT INTO `tax_information` (`tax_id`, `tax`, `status`) VALUES ('VAIVGH6WCV', '2', '1');


#
# TABLE STRUCTURE FOR: tax_settings
#

DROP TABLE IF EXISTS `tax_settings`;

CREATE TABLE `tax_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `default_value` float NOT NULL,
  `tax_name` varchar(250) NOT NULL,
  `nt` int(11) NOT NULL,
  `reg_no` varchar(100) DEFAULT NULL,
  `is_show` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

INSERT INTO `tax_settings` (`id`, `default_value`, `tax_name`, `nt`, `reg_no`, `is_show`) VALUES ('32', '1', 'Vat', '3', '234234', '1');
INSERT INTO `tax_settings` (`id`, `default_value`, `tax_name`, `nt`, `reg_no`, `is_show`) VALUES ('33', '2', 'Tax', '3', '23423', '1');
INSERT INTO `tax_settings` (`id`, `default_value`, `tax_name`, `nt`, `reg_no`, `is_show`) VALUES ('34', '3', 'Igst', '3', '2342341', '1');


#
# TABLE STRUCTURE FOR: transection
#

DROP TABLE IF EXISTS `transection`;

CREATE TABLE `transection` (
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

INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('NSO2539EQ31XTSR', '2019-02-04', '2', '2', '1', '70.00', NULL, 'Medicine Cost', 'S5NZ2Z2LXJFE11U');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('TFG9S552DHJ5BP2', '2019-02-08', '2', '2', '1', '100', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('AWZ6QI5QNN1DGND', '2019-02-08', '2', '2', '1', '140.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('EZ8KJMOHNQQYLPF', '2019-02-08', '2', '2', '1', '140.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('6GT3N3JL988O43F', '2019-02-08', '2', '2', '1', '240.00', NULL, 'Medicine Cost', 'S5NZ2Z2LXJFE11U');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('3MF8ITX8ZJ6LO22', '2019-02-08', '2', '2', '1', '140.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('9UCIJL492XE2B76', '2019-02-08', '2', '2', '1', '240.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('49O761LLK2A5ZF7', '2019-02-08', '2', '2', '1', '35.00', NULL, 'Medicine Cost', '789XC11EWYDN5XT');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('JNB2Q1L2Y4DTFTM', '2019-02-09', '2', '2', '1', '70.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('H72L1WMLWVB2E1M', '2019-02-09', '2', '2', '1', '70.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('R5GFNC3XFH1AHAG', '2019-02-09', '2', '2', '1', '70.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('1NQK4IDJUQ3A5M4', '2019-02-09', '2', '2', '1', '35.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('E8FBJTXTF5AKMUT', '2019-02-09', '2', '2', '1', '35.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('35M5TYVDRH1LUNL', '2019-05-16', '2', '2', '1', '', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('52M9U6QLZ7ZAPQ2', '2019-05-16', '2', '2', '1', '', NULL, 'Medicine Cost', 'WKQJYOTTCBLDS3X');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('E95SGGLSGCBUIXW', '2019-05-16', '1', '2', '1', '', '1070', 'sdfsadf', 'WKQJYOTTCBLDS3X');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('VZY2INEOVL3JW49', '2019-05-16', '2', '2', '1', '375', '0', 'dsfasdf', 'EGLATNFLSV4A9VP');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('L11CHMZ9VTY9CF2', '2019-05-20', '2', '2', '1', '0', NULL, 'Medicine Cost', 'P3NY6D1AKZQPHB7');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('QVWJ3GRV4JCG8D1', '2019-05-20', '2', '2', '1', '367.20', NULL, 'Medicine Cost', 'P3NY6D1AKZQPHB7');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('KWIAUMO1MQKJSLS', '2019-05-21', '2', '2', '1', '1000', NULL, 'Medicine Cost', 'P3NY6D1AKZQPHB7');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('VTAC53AH83JO8H8', '2019-05-21', '2', '2', '1', '1000', NULL, 'Medicine Cost', 'P3NY6D1AKZQPHB7');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('XZWRWU3SK5EXQOY', '2019-05-21', '2', '2', '1', '381.21', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('PHYVZXL4S2CKZ2P', '2019-05-21', '2', '2', '1', '396.96', NULL, 'Medicine Cost', 'P3NY6D1AKZQPHB7');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('KRFREAHZX7S2CIR', '2019-05-21', '2', '2', '1', '450.01', NULL, 'Medicine Cost', 'P3NY6D1AKZQPHB7');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('P5APPKV8LAXEB6X', '2019-05-23', '2', '2', '1', '240.00', NULL, 'Medicine Cost', 'BULO85O55VU3IQC');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('XZ9K7SZYJFTM1ZA', '2019-05-23', '2', '2', '1', '120.00', NULL, 'Medicine Cost', 'BULO85O55VU3IQC');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('VY2XN4BXVDSXJSU', '2019-05-25', '2', '2', '1', '300', NULL, 'Medicine Cost', 'BULO85O55VU3IQC');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('X84OTBC3G96OXR3', '2019-05-30', '2', '2', '1', '400', NULL, 'Medicine Cost', 'BULO85O55VU3IQC');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('S1O8FGBAXPYGV7C', '2019-05-30', '2', '2', '1', '31.76', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('3SUTUGL22BKQ3J7', '2019-05-30', '2', '2', '1', '31.76', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('XFUYFMBPGWYR979', '2019-05-30', '2', '2', '1', '101.76', NULL, 'Medicine Cost', 'BULO85O55VU3IQC');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('5UJQD5DYBMYXKHK', '2019-05-30', '2', '2', '1', '31.76', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('2QZJQFR19QE723H', '2019-05-30', '2', '2', '1', '31.76', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('4QFJM769AA4QO7G', '2019-05-30', '2', '2', '1', '31.76', NULL, 'Medicine Cost', 'P3NY6D1AKZQPHB7');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('RVU3RKFE121999V', '2019-05-30', '2', '2', '1', '31.76', NULL, 'Medicine Cost', 'P3NY6D1AKZQPHB7');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('B27YNQZWPQBJJNX', '2019-06-15', '2', '2', '1', '5000', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('YLY2FOH71HO14K3', '2019-06-15', '2', '2', '1', '9953.72', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('64CD6UDMIN542Q8', '2019-06-15', '2', '2', '1', '7412.34', NULL, 'Medicine Cost', 'VP9733OXV5XSFTQ');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('D2Y7SHGG8OUDH8Y', '2019-06-16', '2', '2', '1', '500', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('WUHH78UHJU12M62', '2019-06-16', '2', '2', '1', '', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('GBSBK3ET1LHH1TS', '2019-06-16', '2', '2', '1', '1058.91', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('687KJQH6QMBG8WS', '2019-06-16', '2', '2', '1', '1000', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('GEIUQT61YEPLLZ2', '2019-06-16', '2', '2', '1', '2000', NULL, 'Medicine Cost', 'IFD4RYQ1NLHX1H2');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('71CFLL6AY4QT3W2', '2019-06-16', '2', '2', '1', '2000', NULL, 'Medicine Cost', 'FTIVY6Q8W66TA4F');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('12VFNA1YN1T1F56', '2019-09-15', '2', '2', '1', '240.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('4WXM8R2X4ZQLBUT', '2019-09-15', '2', '2', '1', '240.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('KZ54N17YCYF1NZ3', '2019-09-15', '2', '2', '1', '120.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('MZQUQSW879E5YDO', '2019-09-15', '2', '2', '1', '120.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('6LLJ79AQPDDXDS9', '2019-09-18', '2', '2', '1', '50.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('C81G2IYIWFL9P94', '2019-09-18', '2', '2', '1', '35.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('W3TTXOUHM44W1UI', '2019-09-18', '2', '2', '1', '35.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('8UUTJO36OBD7GLA', '2019-09-18', '2', '2', '1', '70.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('HDEKXEVO82LCFAI', '2019-09-18', '2', '2', '1', '70.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('GYHQUEGWRJM7Q89', '2019-09-19', '2', '2', '1', '70.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('1MXHB6JGZX7QBLY', '2019-09-22', '2', '2', '1', '240.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('GVQ1PO7R9LEPRUJ', '2019-09-22', '2', '2', '1', '35.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('V972D1WM8GXICYD', '2019-09-22', '2', '2', '1', '120.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('74H7C4NPLYT3E2V', '2019-09-22', '2', '2', '1', '120.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('3PZDMAXQ1AK5Q3B', '2019-09-22', '2', '2', '1', '0.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('B1Z6VRJYSIZSNX9', '2019-09-22', '2', '2', '1', '500.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('YT5XSHJB5XWZOSA', '2019-09-22', '2', '2', '1', '70.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('LVTIH5PE3WB8G8Q', '2019-09-22', '2', '2', '1', '35.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('KIKW6IFOB4VYBXE', '2019-09-22', '2', '2', '1', '120.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('Y8ZJPY1R1MLB4A3', '2019-09-22', '2', '2', '1', '35.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('TXZY8VYN5JZPQVJ', '2019-09-22', '2', '2', '1', '120.00', NULL, 'Medicine Cost', 'P3NY6D1AKZQPHB7');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('ISDPFLA7DGAQ8OZ', '2019-09-25', '2', '2', '1', '35.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('H61D9RHRBR7PG1P', '2019-09-25', '2', '2', '1', '0.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('WF338XTYCHN9LIC', '2019-09-25', '2', '2', '1', '60.00', NULL, 'Medicine Cost', 'P3NY6D1AKZQPHB7');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('QI2RKYRNIGSWZ6S', '2019-09-25', '2', '2', '1', '476.51', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('KLWVWUTWST5HP3Y', '2019-09-25', '2', '2', '1', '317.67', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('JGRGWKG9R9JYNSO', '2019-09-25', '2', '2', '1', '157.25', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('RCTN2564JHOL3OP', '2019-09-25', '2', '2', '1', '157.25', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('6KWLNUL8LOCMRHN', '2019-09-26', '2', '2', '1', '63.54', NULL, 'Medicine Cost', 'P3NY6D1AKZQPHB7');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('9JWZI895DI5D87V', '2019-09-26', '2', '2', '1', '91.76', NULL, 'Medicine Cost', 'P3NY6D1AKZQPHB7');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('P4O18I2J6SN3WF2', '2019-09-26', '2', '2', '1', '240.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('VWXT4LME2L2F37O', '2019-09-26', '2', '2', '1', '30.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('IEXI3CPZ9M78T5F', '2019-09-26', '2', '2', '1', '30.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('5QJK9F23ZWN7CUZ', '2019-09-26', '2', '2', '1', '240.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('F4GHBEOCYM2VMRF', '2019-09-26', '2', '2', '1', '240.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('H4QF949BZ7PHD39', '2019-09-26', '2', '2', '1', '31.76', NULL, 'Medicine Cost', 'P3NY6D1AKZQPHB7');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('4PD46FX3ZMNMEWZ', '2019-09-26', '2', '2', '1', '520.00', NULL, 'Medicine Cost', 'S5NZ2Z2LXJFE11U');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('96SQYDJKWJKIIZT', '2019-09-26', '2', '2', '1', '520.00', NULL, 'Medicine Cost', 'S5NZ2Z2LXJFE11U');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('MCVQ9GBAXKNDNNY', '2019-09-26', '2', '2', '1', '35.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('6Q8M5O9LYB6W65C', '2019-09-26', '2', '2', '1', '35.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('DFXFGOU6BS4WSAN', '2019-09-26', '2', '2', '1', '240.00', NULL, 'Medicine Cost', 'EGLATNFLSV4A9VP');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('B2HIPP2J8OZPZU9', '2019-09-26', '2', '2', '1', '0.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('R2OKPMM7WYZE1YA', '2019-09-26', '2', '2', '1', '35.00', NULL, 'Medicine Cost', 'P3NY6D1AKZQPHB7');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('NHG3SI17HWL6KVE', '2019-10-06', '2', '2', '1', '70.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('YIJ6YCTWQA23PKZ', '2019-10-06', '2', '2', '1', '250', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('VPPA74XK7GGZFQC', '2019-10-06', '2', '2', '1', '250', NULL, 'Medicine Cost', 'P3NY6D1AKZQPHB7');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('JVQ3MF61KD839NK', '2019-10-10', '2', '2', '1', '', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('COGLF3OOY25WPI1', '2019-10-10', '2', '2', '1', '-10.00', NULL, 'Medicine Cost', 'P3NY6D1AKZQPHB7');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('2M7HXLZTVE4B8ZQ', '2019-10-10', '2', '2', '1', '200.00', NULL, 'Medicine Cost', '');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('O6DRL8JQN6DHTGA', '2019-10-10', '2', '2', '1', '200.00', NULL, 'Medicine Cost', 'P3NY6D1AKZQPHB7');
INSERT INTO `transection` (`transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`) VALUES ('R1HVOFHGIIAU16O', '2019-10-10', '2', '2', '1', '50.00', NULL, 'Medicine Cost', '');


#
# TABLE STRUCTURE FOR: unit
#

DROP TABLE IF EXISTS `unit`;

CREATE TABLE `unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_name` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `unit` (`id`, `unit_name`, `status`) VALUES ('1', 'Kg', '1');
INSERT INTO `unit` (`id`, `unit_name`, `status`) VALUES ('2', 'Pices', '1');


#
# TABLE STRUCTURE FOR: user_login
#

DROP TABLE IF EXISTS `user_login`;

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(2) DEFAULT NULL,
  `security_code` varchar(255) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `user_login` (`user_id`, `username`, `password`, `user_type`, `security_code`, `status`) VALUES ('1', 'admin@sgmh.com', '5ebe9dd4ea7517bd2c30bc46985ef823', '1', '', '1');
INSERT INTO `user_login` (`user_id`, `username`, `password`, `user_type`, `security_code`, `status`) VALUES ('2', 'admin1@sgmh.com', '41d99b369894eb1ec3f461135132d8bb', NULL, '', '1');
INSERT INTO `user_login` (`user_id`, `username`, `password`, `user_type`, `security_code`, `status`) VALUES ('3', 'rsk@sgmh.com', '5ebe9dd4ea7517bd2c30bc46985ef823', NULL, '', '1');


#
# TABLE STRUCTURE FOR: users
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `users` (`user_id`, `last_name`, `first_name`, `gender`, `date_of_birth`, `logo`, `status`) VALUES ('1', 'User', 'Admin', '', '', 'http://localhost/pharmacy/assets/dist/img/profile_picture/15de170f61aed25828bd9ebdc4961eed.png', '1');
INSERT INTO `users` (`user_id`, `last_name`, `first_name`, `gender`, `date_of_birth`, `logo`, `status`) VALUES ('2', 'Monalisa', 'Nipa ', '', '', NULL, '1');
INSERT INTO `users` (`user_id`, `last_name`, `first_name`, `gender`, `date_of_birth`, `logo`, `status`) VALUES ('3', 'Khan', 'Raisa', '', '', NULL, '1');


#
# TABLE STRUCTURE FOR: view_a_customer_transection_summary
#

DROP TABLE IF EXISTS `view_a_customer_transection_summary`;

CREATE   VIEW `view_a_customer_transection_summary` AS select `customer_ledger`.`customer_id` AS `customer_id`,'debit' AS `type`,sum(-(`customer_ledger`.`amount`)) AS `amount` from (`customer_ledger` join `customer_information` on((`customer_information`.`customer_id` = `customer_ledger`.`customer_id`))) where (`customer_ledger`.`d_c` = 'd') group by `customer_ledger`.`customer_id` union all select `customer_ledger`.`customer_id` AS `customer_id`,'credit' AS `type`,sum(`customer_ledger`.`amount`) AS `amount` from (`customer_ledger` join `customer_information` on((`customer_information`.`customer_id` = `customer_ledger`.`customer_id`))) where (`customer_ledger`.`d_c` = 'c') group by `customer_ledger`.`customer_id`;

utf8_general_ci;

#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('531JU3H37SRQ6MW', 'debit', '0.00');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('789XC11EWYDN5XT', 'debit', '-98.54');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('8LL9E636CFWVMD4', 'debit', '-100.00');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('BULO85O55VU3IQC', 'debit', '-1161.76');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('EGLATNFLSV4A9VP', 'debit', '-2733.38');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('FTIVY6Q8W66TA4F', 'debit', '-1676.72');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('IFD4RYQ1NLHX1H2', 'debit', '-4235.62');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('L6L6PZWWV96JSBJ', 'debit', '0.00');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('MHWJPOELVKGS1OS', 'debit', NULL);
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('P3NY6D1AKZQPHB7', 'debit', '-4183.29');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('QMY32P1IAKFL4HQ', 'debit', '0.00');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('S5NZ2Z2LXJFE11U', 'debit', '-1000.00');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('TNY6WQ4SYID648C', 'debit', '-600.00');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('VP9733OXV5XSFTQ', 'debit', '-7412.34');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('WKQJYOTTCBLDS3X', 'debit', '-1070.00');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('XHVT1EYRU9GJSF7', 'debit', '-423.56');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('789XC11EWYDN5XT', 'credit', '98.54');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('BULO85O55VU3IQC', 'credit', '1161.76');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('EGLATNFLSV4A9VP', 'credit', '2733.38');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('FTIVY6Q8W66TA4F', 'credit', '2000.00');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('IFD4RYQ1NLHX1H2', 'credit', '2000.00');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('L6L6PZWWV96JSBJ', 'credit', '600.00');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('P3NY6D1AKZQPHB7', 'credit', '4183.29');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('S5NZ2Z2LXJFE11U', 'credit', '1450.00');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('VP9733OXV5XSFTQ', 'credit', '7412.34');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('WKQJYOTTCBLDS3X', 'credit', '1070.00');
#INSERT INTO `view_a_customer_transection_summary` (`customer_id`, `type`, `amount`) VALUES ('XHVT1EYRU9GJSF7', 'credit', '423.56');


#
# TABLE STRUCTURE FOR: view_e_product_manufacturer
#

DROP TABLE IF EXISTS `view_e_product_manufacturer`;

CREATE   VIEW `view_e_product_manufacturer` AS select `b`.`product_id` AS `product_id`,`c`.`product_name` AS `product_name`,`c`.`product_model` AS `product_model`,`a`.`manufacturer_id` AS `manufacturer_id` from ((`product_purchase` `a` join `product_purchase_details` `b`) join `product_information` `c`) where ((`a`.`purchase_id` = `b`.`purchase_id`) and (convert(`c`.`product_id` using utf8) = `b`.`product_id`)) group by `b`.`product_id`;

 

#INSERT INTO `view_e_product_manufacturer` (`product_id`, `product_name`, `product_model`, `manufacturer_id`) VALUES ('22394388', 'Zinzar', 'Antibiotic', 'JQGGDI9NT6YLNT6UAZSV');
#INSERT INTO `view_e_product_manufacturer` (`product_id`, `product_name`, `product_model`, `manufacturer_id`) VALUES ('33939612', 'Boniva', 'Drops', 'KEDGDDOPO6VJTYU256B5');
#INSERT INTO `view_e_product_manufacturer` (`product_id`, `product_name`, `product_model`, `manufacturer_id`) VALUES ('34126953', 'CCQ', 'test import', '8W5RBSGJBYJM6ANZYGNM');
#INSERT INTO `view_e_product_manufacturer` (`product_id`, `product_name`, `product_model`, `manufacturer_id`) VALUES ('36273326', 'Adovas', 'Antibiotic', 'RZ82QCYZ33SNX5BW4XA5');
#INSERT INTO `view_e_product_manufacturer` (`product_id`, `product_name`, `product_model`, `manufacturer_id`) VALUES ('39763666', 'Mojo', 'test', 'RZ82QCYZ33SNX5BW4XA5');
#INSERT INTO `view_e_product_manufacturer` (`product_id`, `product_name`, `product_model`, `manufacturer_id`) VALUES ('58391549', 'Napa', 'Antibiotic', '294FM67SJF3FYQXAPJV2');
#INSERT INTO `view_e_product_manufacturer` (`product_id`, `product_name`, `product_model`, `manufacturer_id`) VALUES ('62847656', 'Acamprosate Calcium', 'Capsules', 'KEDGDDOPO6VJTYU256B5');
#INSERT INTO `view_e_product_manufacturer` (`product_id`, `product_name`, `product_model`, `manufacturer_id`) VALUES ('66749416', 'Vitamin B Complex', 'Tablet', 'KEDGDDOPO6VJTYU256B5');
#INSERT INTO `view_e_product_manufacturer` (`product_id`, `product_name`, `product_model`, `manufacturer_id`) VALUES ('67564716', 'Papain', 'Tablet', '35IHYBJZ6UWRIP7YUN3V');
#INSERT INTO `view_e_product_manufacturer` (`product_id`, `product_name`, `product_model`, `manufacturer_id`) VALUES ('75217998', 'bbq', 'Antibiotic', '8W5RBSGJBYJM6ANZYGNM');
#INSERT INTO `view_e_product_manufacturer` (`product_id`, `product_name`, `product_model`, `manufacturer_id`) VALUES ('880196268664', 'Demo Medicine', 'Tablet', 'VVUVQWE7GOF6C8NQIBIV');
#INSERT INTO `view_e_product_manufacturer` (`product_id`, `product_name`, `product_model`, `manufacturer_id`) VALUES ('92611999', 'Linzess', 'Injections', 'KEDGDDOPO6VJTYU256B5');
#INSERT INTO `view_e_product_manufacturer` (`product_id`, `product_name`, `product_model`, `manufacturer_id`) VALUES ('95173215', 'Floxin', 'test', 'RZ82QCYZ33SNX5BW4XA5');
#INSERT INTO `view_e_product_manufacturer` (`product_id`, `product_name`, `product_model`, `manufacturer_id`) VALUES ('99882539', 'jtestMedicine', 'test', '294FM67SJF3FYQXAPJV2');


#
# TABLE STRUCTURE FOR: view_g_sales_abreport
#

DROP TABLE IF EXISTS `view_g_sales_abreport`;

CREATE   VIEW `view_g_sales_abreport` AS select `b`.`date` AS `date`,`b`.`invoice_id` AS `invoice_id`,`a`.`invoice_details_id` AS `invoice_details_id`,`b`.`customer_id` AS `customer_id`,`c`.`manufacturer_id` AS `manufacturer_id`,`a`.`product_id` AS `product_id`,`c`.`product_model` AS `product_model`,`c`.`product_name` AS `product_name`,`a`.`cartoon` AS `cartoon`,`a`.`quantity` AS `quantity`,`a`.`rate` AS `sell_rate`,`a`.`manufacturer_rate` AS `manufacturer_rate` from ((`invoice_details` `a` join `invoice` `b`) join `view_e_product_manufacturer` `c`) where ((`a`.`invoice_id` = `b`.`invoice_id`) and (`a`.`product_id` = `c`.`product_id`));

 

#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-02-04', '6421231175', '933543334896866', 'S5NZ2Z2LXJFE11U', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '2', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('0000-00-00', '1s234234', '881387948547151', '8LL9E636CFWVMD4', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '10', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('0000-00-00', '1s234234', '894564145468646', '8LL9E636CFWVMD4', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '10', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('0000-00-00', '1s234234', '927847978762643', '8LL9E636CFWVMD4', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '10', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('0000-00-00', '1s234234', '837128325767279', '8LL9E636CFWVMD4', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '10', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('0000-00-00', '1s234234', '22995325', '8LL9E636CFWVMD4', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '10', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('0000-00-00', '1s234234', '23138776', '8LL9E636CFWVMD4', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '10', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('0000-00-00', '1s234234', '84881356', '8LL9E636CFWVMD4', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '10', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('0000-00-00', '1s234234', '44358785', '8LL9E636CFWVMD4', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '10', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('0000-00-00', '1s234234', '74198121', '8LL9E636CFWVMD4', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '10', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('0000-00-00', '1s234234', '73372498', '8LL9E636CFWVMD4', 'RZ82QCYZ33SNX5BW4XA5', '95173215', 'test', 'Floxin', NULL, '5', '60.00', '40.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('0000-00-00', '1s234234', '26825128', '8LL9E636CFWVMD4', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '10', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('0000-00-00', '1s234234', '15965853', '8LL9E636CFWVMD4', 'RZ82QCYZ33SNX5BW4XA5', '95173215', 'test', 'Floxin', NULL, '5', '60.00', '40.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2020-02-05', '1s234235', '36535627', 'S5NZ2Z2LXJFE11U', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '10', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2020-02-05', '1s234235', '69192139', 'S5NZ2Z2LXJFE11U', 'RZ82QCYZ33SNX5BW4XA5', '95173215', 'test', 'Floxin', NULL, '5', '60.00', '40.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-02-08', '2929982841', '695154147221815', 'EGLATNFLSV4A9VP', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '4', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-02-08', '2597346371', '788983927546293', 'EGLATNFLSV4A9VP', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '4', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-02-08', '4744988398', '543898644458689', 'S5NZ2Z2LXJFE11U', 'RZ82QCYZ33SNX5BW4XA5', '95173215', 'test', 'Floxin', NULL, '4', '60.00', '40.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-02-08', '6582891923', '854385353853777', 'EGLATNFLSV4A9VP', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '4', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-02-08', '7382188714', '176855281148345', 'EGLATNFLSV4A9VP', 'RZ82QCYZ33SNX5BW4XA5', '95173215', 'test', 'Floxin', NULL, '4', '60.00', '40.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-02-08', '8681471136', '477555438478513', '789XC11EWYDN5XT', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '1', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-02-09', '2243542476', '955432832714697', 'EGLATNFLSV4A9VP', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '2', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-02-09', '9838815157', '759698451976174', 'EGLATNFLSV4A9VP', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '2', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-02-09', '8721492818', '478548375298218', 'EGLATNFLSV4A9VP', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '2', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-02-09', '7341765181', '584797896854734', 'EGLATNFLSV4A9VP', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '1', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-02-09', '1128441893', '638511153754766', 'EGLATNFLSV4A9VP', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '1', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-05-16', '8864932286', '688674353428791', 'EGLATNFLSV4A9VP', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '2', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-05-16', '5732315239', '833568225934768', 'WKQJYOTTCBLDS3X', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '2', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-05-20', '6223874951', '578541615844843', 'P3NY6D1AKZQPHB7', 'RZ82QCYZ33SNX5BW4XA5', '36273326', 'Antibiotic', 'Adovas', NULL, '3', '120.00', '0.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-05-20', '5578879796', '315197996571848', 'P3NY6D1AKZQPHB7', 'RZ82QCYZ33SNX5BW4XA5', '36273326', 'Antibiotic', 'Adovas', NULL, '3', '120.00', '100.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-05-21', '4399776421', '798616923173124', 'P3NY6D1AKZQPHB7', 'RZ82QCYZ33SNX5BW4XA5', '36273326', 'Antibiotic', 'Adovas', NULL, '2', '120.00', '100.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-05-21', '4399776421', '532579672863957', 'P3NY6D1AKZQPHB7', 'RZ82QCYZ33SNX5BW4XA5', '39763666', 'test', 'Mojo', NULL, '3', '50.00', '45.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-05-21', '6757379735', '423768268393616', 'P3NY6D1AKZQPHB7', 'RZ82QCYZ33SNX5BW4XA5', '36273326', 'Antibiotic', 'Adovas', NULL, '2', '120.00', '100.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-05-21', '9755728113', '922174588564789', 'P3NY6D1AKZQPHB7', 'RZ82QCYZ33SNX5BW4XA5', '36273326', 'Antibiotic', 'Adovas', NULL, '3', '120.00', '0.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-05-21', '9755728113', '789981534226443', 'P3NY6D1AKZQPHB7', 'RZ82QCYZ33SNX5BW4XA5', '39763666', 'test', 'Mojo', NULL, '2', '50.00', '0.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-05-23', '5161369973', '548826225684645', 'BULO85O55VU3IQC', 'RZ82QCYZ33SNX5BW4XA5', '36273326', 'Antibiotic', 'Adovas', NULL, '2', '120.00', '100.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-05-23', '6914845124', '859153369378953', 'BULO85O55VU3IQC', 'RZ82QCYZ33SNX5BW4XA5', '36273326', 'Antibiotic', 'Adovas', NULL, '1', '120.00', '100.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-05-25', '4258396635', '411622444317881', 'BULO85O55VU3IQC', 'RZ82QCYZ33SNX5BW4XA5', '36273326', 'Antibiotic', 'Adovas', NULL, '5', '120.00', '100.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-05-30', '5628231696', '462539327772749', 'BULO85O55VU3IQC', 'RZ82QCYZ33SNX5BW4XA5', '39763666', 'test', 'Mojo', NULL, '1', '50.00', '45.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-05-30', '5628231696', '553753116886122', 'BULO85O55VU3IQC', 'RZ82QCYZ33SNX5BW4XA5', '36273326', 'Antibiotic', 'Adovas', NULL, '1', '120.00', '100.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-05-30', '8915554399', '246973844525628', '', '294FM67SJF3FYQXAPJV2', '99882539', 'test', 'jtestMedicine', NULL, '1', '30.00', '20.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-05-30', '7337717641', '282591247391283', 'BULO85O55VU3IQC', '294FM67SJF3FYQXAPJV2', '99882539', 'test', 'jtestMedicine', NULL, '1', '30.00', '20.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-05-30', '9511562226', '112581599129773', 'P3NY6D1AKZQPHB7', '294FM67SJF3FYQXAPJV2', '99882539', 'test', 'jtestMedicine', NULL, '1', '30.00', '20.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-05-30', '2733838696', '274651521952857', 'P3NY6D1AKZQPHB7', '294FM67SJF3FYQXAPJV2', '99882539', 'test', 'jtestMedicine', NULL, '1', '30.00', '20.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-06-15', '1194992873', '566339418143717', '', 'KEDGDDOPO6VJTYU256B5', '62847656', 'Capsules', 'Acamprosate Calcium', NULL, '6', '2000.00', '1000.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-06-15', '1194992873', '321557977924971', '', 'KEDGDDOPO6VJTYU256B5', '66749416', 'Tablet', 'Vitamin B Complex', NULL, '3', '200.00', '190.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-06-15', '4717379265', '666831568472579', '', 'KEDGDDOPO6VJTYU256B5', '62847656', 'Capsules', 'Acamprosate Calcium', NULL, '4', '2000.00', '1000.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-06-15', '4717379265', '717645873442472', '', 'KEDGDDOPO6VJTYU256B5', '66749416', 'Tablet', 'Vitamin B Complex', NULL, '7', '200.00', '190.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-06-15', '5875993999', '267826577229752', 'VP9733OXV5XSFTQ', '35IHYBJZ6UWRIP7YUN3V', '67564716', 'Tablet', 'Papain', NULL, '1', '7000.00', '50000.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-06-16', '1337844645', '389934112964273', '', 'KEDGDDOPO6VJTYU256B5', '92611999', 'Injections', 'Linzess', NULL, '1', '1000.00', '700.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-06-16', '2893355527', '944462124313836', '', 'KEDGDDOPO6VJTYU256B5', '33939612', 'Drops', 'Boniva', NULL, '2', '500.00', '300.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-06-16', '1549954566', '259616821959116', '', 'KEDGDDOPO6VJTYU256B5', '33939612', 'Drops', 'Boniva', NULL, '2', '500.00', '300.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-06-16', '1716929527', '975493382626812', '', 'KEDGDDOPO6VJTYU256B5', '62847656', 'Capsules', 'Acamprosate Calcium', NULL, '1', '2000.00', '1000.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-06-16', '6368534916', '989722989264559', 'IFD4RYQ1NLHX1H2', 'KEDGDDOPO6VJTYU256B5', '62847656', 'Capsules', 'Acamprosate Calcium', NULL, '2', '2000.00', '1000.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-06-16', '9374992955', '627686546351156', 'FTIVY6Q8W66TA4F', 'KEDGDDOPO6VJTYU256B5', '33939612', 'Drops', 'Boniva', NULL, '6', '500.00', '300.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-06-16', '9374992955', '389852464957475', 'FTIVY6Q8W66TA4F', 'KEDGDDOPO6VJTYU256B5', '33939612', 'Drops', 'Boniva', NULL, '-3', '500.00', '0.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-15', '2357444577', '876656836924571', '', 'RZ82QCYZ33SNX5BW4XA5', '36273326', 'Antibiotic', 'Adovas', NULL, '2', '120.00', '100.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-15', '4397745619', '386558577856737', '', 'RZ82QCYZ33SNX5BW4XA5', '36273326', 'Antibiotic', 'Adovas', NULL, '2', '120.00', '100.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-15', '2889369457', '496838342847324', '', 'RZ82QCYZ33SNX5BW4XA5', '36273326', 'Antibiotic', 'Adovas', NULL, '1', '120.00', '100.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-15', '3497846252', '243944784392883', '', 'RZ82QCYZ33SNX5BW4XA5', '36273326', 'Antibiotic', 'Adovas', NULL, '1', '120.00', '100.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-18', '4349145515', '558954399292192', '', 'RZ82QCYZ33SNX5BW4XA5', '39763666', 'test', 'Mojo', NULL, '1', '50.00', '45.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-18', '4819859856', '562883567265364', '', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '1', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-18', '9188745284', '231462948291882', '', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '1', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-18', '6887248818', '845811282498156', '', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '2', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-18', '2556888428', '372385986474244', '', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '2', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-19', '8232565794', '278992836476617', '', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '2', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-22', '5816359211', '726275163977986', '', 'RZ82QCYZ33SNX5BW4XA5', '95173215', 'test', 'Floxin', NULL, '4', '60.00', '40.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-22', '7589434143', '637393495793645', '', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '1', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-22', '3246988817', '336943252566747', '', 'RZ82QCYZ33SNX5BW4XA5', '36273326', 'Antibiotic', 'Adovas', NULL, '0', '120.00', '100.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-22', '6342619132', '271372678433611', '', 'KEDGDDOPO6VJTYU256B5', '33939612', 'Drops', 'Boniva', NULL, '1', '500.00', '300.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-22', '8274592153', '271258141173539', '', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '2', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-22', '3964297319', '849322277667217', '', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '1', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-22', '4849938327', '733647138451532', '', 'RZ82QCYZ33SNX5BW4XA5', '36273326', 'Antibiotic', 'Adovas', NULL, '1', '120.00', '100.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-22', '4366657224', '692251924735515', 'EGLATNFLSV4A9VP', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '1', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-22', '6572548126', '465458956185896', 'P3NY6D1AKZQPHB7', 'RZ82QCYZ33SNX5BW4XA5', '36273326', 'Antibiotic', 'Adovas', NULL, '1', '120.00', '100.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-25', '7476575834', '255385996515831', '', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '1', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-25', '2546488688', '645171795663967', 'EGLATNFLSV4A9VP', 'RZ82QCYZ33SNX5BW4XA5', '36273326', 'Antibiotic', 'Adovas', NULL, '0', '120.00', '100.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-25', '2498163329', '753173747952746', 'P3NY6D1AKZQPHB7', '294FM67SJF3FYQXAPJV2', '99882539', 'test', 'jtestMedicine', NULL, '2', '30.00', '20.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-25', '2682413866', '995257868815979', '', 'VVUVQWE7GOF6C8NQIBIV', '880196268664', 'Tablet', 'Demo Medicine', NULL, '3', '150.00', '120.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-25', '9895528273', '632437213135372', 'EGLATNFLSV4A9VP', 'VVUVQWE7GOF6C8NQIBIV', '880196268664', 'Tablet', 'Demo Medicine', NULL, '2', '150.00', '120.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-25', '8225271174', '495367326411122', 'EGLATNFLSV4A9VP', 'VVUVQWE7GOF6C8NQIBIV', '880196268664', 'Tablet', 'Demo Medicine', NULL, '1', '150.00', '120.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-25', '4364231861', '746414838459453', 'EGLATNFLSV4A9VP', 'VVUVQWE7GOF6C8NQIBIV', '880196268664', 'Tablet', 'Demo Medicine', NULL, '1', '150.00', '120.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-26', '9375835462', '696196972849173', 'P3NY6D1AKZQPHB7', '294FM67SJF3FYQXAPJV2', '99882539', 'test', 'jtestMedicine', NULL, '2', '30.00', '20.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-26', '7478513273', '962386182239311', 'P3NY6D1AKZQPHB7', 'RZ82QCYZ33SNX5BW4XA5', '95173215', 'test', 'Floxin', NULL, '1', '60.00', '40.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-26', '7478513273', '621952592962917', 'P3NY6D1AKZQPHB7', '294FM67SJF3FYQXAPJV2', '99882539', 'test', 'jtestMedicine', NULL, '1', '30.00', '20.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-26', '5136766345', '935729282843599', 'P3NY6D1AKZQPHB7', '294FM67SJF3FYQXAPJV2', '99882539', 'test', 'jtestMedicine', NULL, '1', '30.00', '20.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-26', '7683384435', '926783498955117', '', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '1', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-26', '2259793278', '439365443153897', 'EGLATNFLSV4A9VP', 'RZ82QCYZ33SNX5BW4XA5', '36273326', 'Antibiotic', 'Adovas', NULL, '2', '120.00', '100.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-26', '1498336438', '881758233339937', '', 'RZ82QCYZ33SNX5BW4XA5', '36273326', 'Antibiotic', 'Adovas', NULL, '0', '120.00', '100.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-09-26', '3569712289', '318668951521566', 'P3NY6D1AKZQPHB7', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '1', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-10-06', '8788656989', '828723643245921', '', '294FM67SJF3FYQXAPJV2', '58391549', 'Antibiotic', 'Napa', NULL, '2', '35.00', '30.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-10-06', '4572666298', '396282869895512', '', 'JQGGDI9NT6YLNT6UAZSV', '22394388', 'Antibiotic', 'Zinzar', NULL, '2', '120.00', '100.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-10-06', '1928262497', '179495882276426', 'P3NY6D1AKZQPHB7', 'JQGGDI9NT6YLNT6UAZSV', '22394388', 'Antibiotic', 'Zinzar', NULL, '2', '120.00', '100.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-10-10', '1156572723', '839444833815421', '', '8W5RBSGJBYJM6ANZYGNM', '34126953', 'test import', 'CCQ', NULL, '4', '100.00', '90.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-10-10', '9972194591', '149236619792985', '', '8W5RBSGJBYJM6ANZYGNM', '34126953', 'test import', 'CCQ', NULL, '2', '100.00', '90.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-10-10', '4813115177', '468657969679633', 'P3NY6D1AKZQPHB7', '8W5RBSGJBYJM6ANZYGNM', '34126953', 'test import', 'CCQ', NULL, '2', '100.00', '90.00');
#INSERT INTO `view_g_sales_abreport` (`date`, `invoice_id`, `invoice_details_id`, `customer_id`, `manufacturer_id`, `product_id`, `product_model`, `product_name`, `cartoon`, `quantity`, `sell_rate`, `manufacturer_rate`) VALUES ('2019-10-10', '4532655864', '424482177792496', '', '8W5RBSGJBYJM6ANZYGNM', '75217998', 'Antibiotic', 'bbq', NULL, '1', '50.00', '40.00');


#
# TABLE STRUCTURE FOR: view_k_stock_batch_qty
#

DROP TABLE IF EXISTS `view_k_stock_batch_qty`;

CREATE   VIEW `view_k_stock_batch_qty` AS select `invoice_details`.`batch_id` AS `batch_id`,`invoice_details`.`product_id` AS `product_id`,sum(`invoice_details`.`quantity`) AS `sell`,0 AS `Purchase`,0 AS `expeire_date` from `invoice_details` group by `invoice_details`.`batch_id`,`invoice_details`.`product_id` union select `product_purchase_details`.`batch_id` AS `batch_id`,`product_purchase_details`.`product_id` AS `product_id`,0 AS `Sell`,sum(`product_purchase_details`.`quantity`) AS `purchase`,`product_purchase_details`.`expeire_date` AS `expeire_date` from `product_purchase_details` group by `product_purchase_details`.`batch_id`,`product_purchase_details`.`product_id`;

utf8_general_ci;

#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('01234', '22394388', '4', '0.00', '0');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('111', '58391549', '112', '0.00', '0');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('112', '58391549', '25', '0.00', '0');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('114', '58391549', '15', '0.00', '0');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('12312', '75217998', '1', '0.00', '0');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('1234', '99882539', '10', '0.00', '0');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('222', '95173215', '28', '0.00', '0');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('2342', '880196268664', '7', '0.00', '0');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('2345', '39763666', '8', '0.00', '0');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('333', '66749416', '10', '0.00', '0');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('5643', '36273326', '34', '0.00', '0');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('67898', '92611999', '1', '0.00', '0');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('777', '62847656', '13', '0.00', '0');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('789', '67564716', '1', '0.00', '0');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('78901', '33939612', '8', '0.00', '0');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('8934', '34126953', '8', '0.00', '0');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('Select One', '39763666', '1', '0.00', '0');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('Select One', '58391549', '3', '0.00', '0');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('01234', '22394388', '0', '30.00', '2020-01-31');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('111', '58391549', '0', '50.00', '2019-12-12');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('112', '62847656', '0', '200.00', '2019-06-30');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('114', '58391549', '0', '500.00', '2019-12-12');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('12312', '75217998', '0', '50.00', '2020-02-29');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('1234', '99882539', '0', '50.00', '2020-05-30');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('222', '95173215', '0', '150.00', '2020-12-12');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('234', '62847656', '0', '2.00', '2020-01-25');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('2342', '880196268664', '0', '50.00', '2020-01-31');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('2345', '39763666', '0', '50.00', '2019-08-31');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('321', '95173215', '0', '3.00', '2020-04-06');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('32423', '95173215', '0', '50.00', '2019-11-30');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('333', '66749416', '0', '500.00', '2019-09-30');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('5643', '36273326', '0', '50.00', '2020-03-31');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('67898', '92611999', '0', '10.00', '2020-01-31');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('777', '62847656', '0', '100.00', '2019-10-30');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('789', '67564716', '0', '50.00', '2019-09-07');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('78901', '33939612', '0', '10.00', '2020-09-29');
#INSERT INTO `view_k_stock_batch_qty` (`batch_id`, `product_id`, `sell`, `Purchase`, `expeire_date`) VALUES ('8934', '34126953', '0', '50.00', '2019-09-31');


#
# TABLE STRUCTURE FOR: view_l_stock_history
#

DROP TABLE IF EXISTS `view_l_stock_history`;

CREATE   VIEW `view_l_stock_history` AS select `invoice_details`.`product_id` AS `product_id`,`invoice`.`date` AS `vdate`,sum(`invoice_details`.`quantity`) AS `sell`,0 AS `Purchase` from (`invoice_details` join `invoice` on((`invoice_details`.`invoice_id` = `invoice`.`invoice_id`))) group by `invoice`.`date`,`invoice_details`.`product_id` union select `product_purchase_details`.`product_id` AS `product_id`,`product_purchase`.`purchase_date` AS `purchase_date`,0 AS `0`,sum(`product_purchase_details`.`quantity`) AS `purchase` from (`product_purchase_details` join `product_purchase` on((`product_purchase_details`.`purchase_id` = `product_purchase`.`purchase_id`))) group by `product_purchase`.`purchase_date`,`product_purchase_details`.`product_id`;

utf8_general_ci;

#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('58391549', '0000-00-00', '100', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('95173215', '0000-00-00', '10', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('58391549', '2019-02-04', '2', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('58391549', '2019-02-08', '13', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('95173215', '2019-02-08', '8', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('58391549', '2019-02-09', '8', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('58391549', '2019-05-16', '4', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('36273326', '2019-05-20', '6', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('36273326', '2019-05-21', '7', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('39763666', '2019-05-21', '5', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('36273326', '2019-05-23', '3', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('36273326', '2019-05-25', '5', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('36273326', '2019-05-30', '1', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('39763666', '2019-05-30', '1', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('99882539', '2019-05-30', '4', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('62847656', '2019-06-15', '10', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('66749416', '2019-06-15', '10', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('67564716', '2019-06-15', '1', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('33939612', '2019-06-16', '7', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('62847656', '2019-06-16', '3', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('92611999', '2019-06-16', '1', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('36273326', '2019-09-15', '6', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('39763666', '2019-09-18', '1', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('58391549', '2019-09-18', '6', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('58391549', '2019-09-19', '2', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('33939612', '2019-09-22', '1', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('36273326', '2019-09-22', '2', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('58391549', '2019-09-22', '5', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('95173215', '2019-09-22', '4', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('36273326', '2019-09-25', '0', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('58391549', '2019-09-25', '1', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('880196268664', '2019-09-25', '7', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('99882539', '2019-09-25', '2', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('36273326', '2019-09-26', '2', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('58391549', '2019-09-26', '2', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('95173215', '2019-09-26', '1', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('99882539', '2019-09-26', '4', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('22394388', '2019-10-06', '4', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('58391549', '2019-10-06', '2', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('34126953', '2019-10-10', '8', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('75217998', '2019-10-10', '1', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('58391549', '2020-02-05', '10', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('95173215', '2020-02-05', '5', '0.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('58391549', '2019-02-04', '0', '50.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('95173215', '2019-02-09', '0', '3.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('99882539', '2019-05-16', '0', '50.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('36273326', '2019-05-20', '0', '50.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('39763666', '2019-05-21', '0', '50.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('62847656', '2019-06-15', '0', '300.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('66749416', '2019-06-15', '0', '500.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('67564716', '2019-06-15', '0', '50.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('33939612', '2019-06-16', '0', '10.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('92611999', '2019-06-16', '0', '10.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('95173215', '2019-08-05', '0', '50.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('880196268664', '2019-09-25', '0', '50.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('22394388', '2019-10-06', '0', '30.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('62847656', '2019-10-06', '0', '2.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('34126953', '2019-10-10', '0', '50.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('75217998', '2019-10-10', '0', '50.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('58391549', '2020-02-04', '0', '500.00');
#INSERT INTO `view_l_stock_history` (`product_id`, `vdate`, `sell`, `Purchase`) VALUES ('95173215', '2020-02-04', '0', '150.00');


#
# TABLE STRUCTURE FOR: view_m_total_batch_stock
#

DROP TABLE IF EXISTS `view_m_total_batch_stock`;

CREATE   VIEW `view_m_total_batch_stock` AS select `b`.`product_id` AS `product_id`,`b`.`batch_id` AS `batch_id`,`b`.`expeire_date` AS `expeire_date`,(sum(`b`.`Purchase`) - sum(`b`.`sell`)) AS `stock` from `view_k_stock_batch_qty` `b` group by `b`.`batch_id`;

utf8_general_ci;

#INSERT INTO `view_m_total_batch_stock` (`product_id`, `batch_id`, `expeire_date`, `stock`) VALUES ('22394388', '01234', '0', '26');
#INSERT INTO `view_m_total_batch_stock` (`product_id`, `batch_id`, `expeire_date`, `stock`) VALUES ('58391549', '111', '0', '-62');
#INSERT INTO `view_m_total_batch_stock` (`product_id`, `batch_id`, `expeire_date`, `stock`) VALUES ('58391549', '112', '0', '175');
#INSERT INTO `view_m_total_batch_stock` (`product_id`, `batch_id`, `expeire_date`, `stock`) VALUES ('58391549', '114', '0', '485');
#INSERT INTO `view_m_total_batch_stock` (`product_id`, `batch_id`, `expeire_date`, `stock`) VALUES ('75217998', '12312', '0', '49');
#INSERT INTO `view_m_total_batch_stock` (`product_id`, `batch_id`, `expeire_date`, `stock`) VALUES ('99882539', '1234', '0', '40');
#INSERT INTO `view_m_total_batch_stock` (`product_id`, `batch_id`, `expeire_date`, `stock`) VALUES ('95173215', '222', '0', '122');
#INSERT INTO `view_m_total_batch_stock` (`product_id`, `batch_id`, `expeire_date`, `stock`) VALUES ('62847656', '234', '2020-01-25', '2');
#INSERT INTO `view_m_total_batch_stock` (`product_id`, `batch_id`, `expeire_date`, `stock`) VALUES ('880196268664', '2342', '0', '43');
#INSERT INTO `view_m_total_batch_stock` (`product_id`, `batch_id`, `expeire_date`, `stock`) VALUES ('39763666', '2345', '0', '42');
#INSERT INTO `view_m_total_batch_stock` (`product_id`, `batch_id`, `expeire_date`, `stock`) VALUES ('95173215', '321', '2020-04-06', '3');
#INSERT INTO `view_m_total_batch_stock` (`product_id`, `batch_id`, `expeire_date`, `stock`) VALUES ('95173215', '32423', '2019-11-30', '50');
#INSERT INTO `view_m_total_batch_stock` (`product_id`, `batch_id`, `expeire_date`, `stock`) VALUES ('66749416', '333', '0', '490');
#INSERT INTO `view_m_total_batch_stock` (`product_id`, `batch_id`, `expeire_date`, `stock`) VALUES ('36273326', '5643', '0', '16');
#INSERT INTO `view_m_total_batch_stock` (`product_id`, `batch_id`, `expeire_date`, `stock`) VALUES ('92611999', '67898', '0', '9');
#INSERT INTO `view_m_total_batch_stock` (`product_id`, `batch_id`, `expeire_date`, `stock`) VALUES ('62847656', '777', '0', '87');
#INSERT INTO `view_m_total_batch_stock` (`product_id`, `batch_id`, `expeire_date`, `stock`) VALUES ('67564716', '789', '0', '49');
#INSERT INTO `view_m_total_batch_stock` (`product_id`, `batch_id`, `expeire_date`, `stock`) VALUES ('33939612', '78901', '0', '2');
#INSERT INTO `view_m_total_batch_stock` (`product_id`, `batch_id`, `expeire_date`, `stock`) VALUES ('34126953', '8934', '0', '42');
#INSERT INTO `view_m_total_batch_stock` (`product_id`, `batch_id`, `expeire_date`, `stock`) VALUES ('39763666', 'Select One', '0', '-4');


#
# TABLE STRUCTURE FOR: web_setting
#

DROP TABLE IF EXISTS `web_setting`;

CREATE TABLE `web_setting` (
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

INSERT INTO `web_setting` (`setting_id`, `logo`, `invoice_logo`, `favicon`, `currency`, `timezone`, `currency_position`, `footer_text`, `language`, `rtr`, `captcha`, `site_key`, `secret_key`, `discount_type`) VALUES ('1', 'http://softest8.sgmh.com/pharmacysasmodel/./my-assets/image/logo/5df28e7f70df1725d5763d7a925e9915.png', 'http://localhost/pharmacy/my-assets/image/logo/ef9ff92adbea3b2d1afe4cfa8b02c04c.png', 'http://localhost/pharmacy/my-assets/image/logo/ba8f3211bb73f7bcc05f7a3b5b91aef6.png', '৳', 'Asia/Dhaka', '0', 'Copyright© 2016-2017 sgmh. All rights reserved.', 'english', '0', '1', '', '', '1');


