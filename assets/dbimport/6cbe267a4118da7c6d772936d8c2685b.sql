CREATE TABLE IF NOT EXISTS `product_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` varchar(255) DEFAULT NULL,
  `type_name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `type_id`, `type_name`, `status`) VALUES
(1, '5FHNC672E79T5DH', 'Antibiotic', 1),
(2, 'UO3WC7PILCH26SV', 'test', 1),
(3, 'UO3WC7PILCH26hV', 'test Import', 1);