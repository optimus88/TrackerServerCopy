--
-- Database: `tallyworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `tally_bidders`
--

CREATE TABLE IF NOT EXISTS `tally_bidders` (
  `bidder_id` int(50) NOT NULL AUTO_INCREMENT,
  `bidder_name` varchar(100) NOT NULL,
  `bidder_login_name` varchar(50) NOT NULL,
  `bidder_email_id` varchar(100) NOT NULL,
  `bidder_password` varchar(100) NOT NULL,
  `bidder_type` varchar(10) NOT NULL,
  PRIMARY KEY (`bidder_id`),
  UNIQUE KEY `unique_index_bidders` (`bidder_login_name`,`bidder_email_id`),
  KEY `bidder_login_name` (`bidder_login_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tally_bidders`
--

INSERT INTO `tally_bidders` (`bidder_id`, `bidder_name`, `bidder_login_name`, `bidder_email_id`, `bidder_password`, `bidder_type`) VALUES
(1, 'ADMIN', 'admin', 'keshav_optimus88@outlook.com', 'admin@123', 'admin'),
(2, 'guest', 'guest', 'guest@gmail.com', 'guest', 'user'),
(3, 'Bharat', 'India', 'Abharati111@gmail. Com', 'mnbvcxz1@', 'user'),
(4, 'Indrajeet', 'Indu', 'Indrajeet@gmail.com', 'indu', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tally_match_details`
--

CREATE TABLE IF NOT EXISTS `tally_match_details` (
  `match_details_id` int(10) NOT NULL AUTO_INCREMENT,
  `tally_team1` varchar(50) NOT NULL,
  `tally_team2` varchar(50) NOT NULL,
  `tally_match_type` text NOT NULL,
  `tally_match_venue` text NOT NULL,
  `tally_match_date` date NOT NULL,
  `tally_match_flag` int(2) NOT NULL DEFAULT '0',
  `tally_match_winner_team` varchar(50) NOT NULL DEFAULT '0',
  `tally_series_type` varchar(5) NOT NULL,
  PRIMARY KEY (`match_details_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `tally_match_details`
--

INSERT INTO `tally_match_details` (`match_details_id`, `tally_team1`, `tally_team2`, `tally_match_type`, `tally_match_venue`, `tally_match_date`, `tally_match_flag`, `tally_match_winner_team`, `tally_series_type`) VALUES
(1, 'AFG', 'ZIM', 'Day', 'Punjab', '2016-03-12', 1, 'AFG', 'WCT20'),
(2, 'HK', 'SCT', 'D/N', 'Punjab', '2016-03-12', 1, 'SCT', 'WCT20'),
(3, 'IRE', 'NER', 'Day', 'Punjab', '2016-03-13', 1, 'NER', 'WCT20'),
(4, 'BAN', 'OMN', 'D/N', 'Punjab', '2016-03-13', 1, 'BAN', 'WCT20'),
(5, 'IND', 'NZ', 'D/N', 'Punjab', '2016-03-15', 1, 'NZ', 'WCT20'),
(6, 'WI', 'ENG', 'D/N', 'Mumbai', '2016-03-16', 1, 'WI', 'WCT20'),
(7, 'PAK', 'BAN', 'Day', 'Kolkata', '2016-03-16', 1, 'PAK', 'WCT20'),
(8, 'SL', 'AFG', 'D/N', 'Kolkata', '2016-03-17', 1, 'SL', 'WCT20'),
(9, 'NZ', 'AUS', 'Day', 'Punjab', '2016-03-18', 1, 'NZ', 'WCT20'),
(10, 'RSA', 'ENG', 'D/N', 'Mumbai', '2016-03-18', 1, 'ENG', 'WCT20'),
(11, 'IND', 'PAK', 'D/N', 'Kolkata', '2016-03-19', 1, 'IND', 'WCT20'),
(12, 'RSA', 'AFG', 'Day', 'Mumbai', '2016-03-20', 1, 'RSA', 'WCT20'),
(13, 'SL', 'WI', 'D/N', 'Bngalore', '2016-03-20', 1, 'WI', 'WCT20'),
(14, 'AUS', 'BAN', 'D/N', 'Bngalore', '2016-03-21', 1, 'AUS', 'WCT20'),
(15, 'NZ', 'PAK', 'Day', 'Delhi', '2016-03-22', 1, 'NZ', 'WCT20'),
(16, 'AFG', 'ENG', 'Day', 'Delhi', '2016-03-23', 1, 'ENG', 'WCT20'),
(17, 'IND', 'BAN', 'D/N', 'Bngalore', '2016-03-23', 1, 'IND', 'WCT20'),
(18, 'AUS', 'PAK', 'Day', 'Punjab', '2016-03-25', 1, 'AUS', 'WCT20'),
(19, 'RSA', 'WI', 'D/N', 'Delhi', '2016-03-25', 1, 'WI', 'WCT20'),
(20, 'SL', 'ENG', 'D/N', 'Delhi', '2016-03-26', 1, 'ENG', 'WCT20'),
(21, 'BAN', 'NZ', 'Day', 'Kolkata', '2016-03-26', 1, 'NZ', 'WCT20'),
(22, 'IND', 'AUS', 'D/N', 'Punjab', '2016-03-27', 1, 'IND', 'WCT20'),
(23, 'NZ', 'ENG', 'D/N', 'Delhi', '2016-03-30', 1, 'ENG', 'WCT20'),
(24, 'IND', 'WI', 'D/N', 'Mumbai', '2016-03-31', 1, 'WI', 'WCT20'),
(25, 'ENG', 'WI', 'D/N', 'Kolkata', '2016-04-03', 1, 'WI', 'WCT20'),
(26, 'MI', 'RPS', 'D/N.', 'Mumbai', '2016-04-09', 1, 'RPS', 'IPL'),
(27, 'KKR', 'DD', 'D/N', 'Kolkata', '2016-04-10', 1, 'KKR', 'IPL'),
(28, 'PUN', 'GL', 'D/N', 'Punjab', '2016-04-11', 1, 'GL', 'IPL'),
(29, 'SRH', 'RCB', 'D/N', 'Bngalore', '2016-04-12', 1, 'RCB', 'IPL'),
(30, 'KKR', 'MI', 'D/N', 'Kolkata', '2016-04-13', 1, 'MI', 'IPL'),
(31, 'GL', 'RPS', 'D/N', 'Rajsthan', '2016-04-14', 1, 'GL', 'IPL'),
(32, 'DD', 'PUN', 'D/N', 'Delhi', '2016-04-15', 1, 'DD', 'IPL'),
(33, 'KKR', 'SRH', 'Day', 'Hydrabad', '2016-04-16', 1, 'KKR', 'IPL'),
(34, 'GL', 'MI', 'D/N', 'Mumbai', '2016-04-16', 1, 'GL', 'IPL'),
(35, 'RPS', 'PUN', 'Day', 'Punjab', '2016-04-17', 1, 'PUN', 'IPL'),
(36, 'DD', 'RCB', 'D/N', 'Bngalore', '2016-04-17', 1, 'DD', 'IPL'),
(37, 'MI', 'SRH', 'D/N', 'Hydrabad', '2016-04-18', 1, 'SRH', 'IPL'),
(38, 'MI', 'RCB', 'D/N', 'Mumbai', '2016-04-20', 1, 'MI', 'IPL'),
(39, 'GL', 'SRH', 'D/N', 'Hydrabad', '2016-04-21', 1, 'SRH', 'IPL'),
(40, 'RPS', 'RCB', 'D/N', 'Rajsthan', '2016-04-22', 1, 'RCB', 'IPL'),
(41, 'MI', 'DD', 'Day', 'Delhi', '2016-04-23', 1, 'DD', 'IPL'),
(42, 'PUN', 'SRH', 'D/N', 'Hydrabad', '2016-04-23', 1, 'SRH', 'IPL'),
(43, 'GL', 'RCB', 'Day', 'Rajsthan', '2016-04-24', 1, 'GL', 'IPL'),
(44, 'KKR', 'RPS', 'D/N', 'Chennai', '2016-04-24', 1, 'KKR', 'IPL'),
(45, 'PUN', 'MI', 'D/N', 'Punjab', '2016-04-25', 1, 'MI', 'IPL'),
(46, 'RPS', 'SRH', 'D/N', 'Hydrabad', '2016-04-26', 1, 'RPS', 'IPL'),
(47, 'GL', 'DD', 'D/N', 'Delhi', '2016-04-27', 1, 'GL', 'IPL'),
(48, 'KKR', 'MI', 'D/N', 'Mumbai', '2016-04-28', 1, 'MI', 'IPL'),
(49, 'GL', 'RPS', 'D/N', 'Rajsthan', '2016-04-29', 1, 'GL', 'IPL'),
(50, 'DD', 'KKR', 'D/N', 'Delhi', '2016-04-30', 1, 'DD', 'IPL'),
(51, 'RCB', 'SRH', 'D/N', 'Hydrabad', '2016-04-30', 1, 'SRH', 'IPL'),
(52, 'MI', 'RPS', 'D/N', 'Mumbai', '2016-05-01', 1, 'MI', 'IPL'),
(53, 'GL', 'PUN', 'Day', 'Rajsthan', '2016-05-01', 1, 'PUN', 'IPL'),
(54, 'KKR', 'RCB', 'D/N', 'Bngalore', '2016-05-02', 1, 'KKR', 'IPL'),
(55, 'DD', 'GL', 'D/N', 'Rajsthan', '2016-05-03', 1, 'DD', 'IPL'),
(56, 'PUN', 'KKR', 'D/N', 'Kolkata', '2016-05-04', 1, 'KKR', 'IPL'),
(57, 'RPS', 'DD', 'D/N', 'Delhi', '2016-05-05', 1, 'RPS', 'IPL'),
(58, 'GL', 'SRH', 'D/N', 'Hydrabad', '2016-05-06', 1, 'SRH', 'IPL'),
(59, 'RPS', 'RCB', 'Day', 'Bngalore', '2016-05-07', 1, 'RCB', 'IPL'),
(60, 'DD', 'PUN', 'D/N', 'Punjab', '2016-05-07', 1, 'PUN', 'IPL'),
(61, 'MI', 'SRH', 'Day', 'Mumbai', '2016-05-08', 1, 'SRH', 'IPL'),
(62, 'KKR', 'GL', 'D/N', 'Kolkata', '2016-05-08', 1, 'GL', 'IPL'),
(63, 'PUN', 'RCB', 'D/N', 'Punjab', '2016-05-09', 1, 'RCB', 'IPL'),
(64, 'RPS', 'SRH', 'D/N', 'Rajsthan', '2016-05-10', 1, 'SRH', 'IPL'),
(65, 'MI', 'RCB', 'D/N', 'Bngalore', '2016-05-11', 1, 'MI', 'IPL'),
(66, 'DD', 'SRH', 'D/N', 'Hydrabad', '2016-05-12', 1, 'DD', 'IPL'),
(67, 'PUN', 'MI', 'D/N', 'Mumbai', '2016-05-13', 1, 'PUN', 'IPL'),
(68, 'GL', 'RCB', 'Day', 'Rajsthan', '2016-05-14', 1, 'RCB', 'IPL'),
(69, 'KKR', 'RPS', 'D/N', 'Kolkata', '2016-05-14', 1, 'KKR', 'IPL'),
(70, 'PUN', 'SRH', 'Day', 'Punjab', '2016-05-15', 1, 'SRH', 'IPL'),
(71, 'DD', 'MI', 'D/N', 'Mumbai', '2016-05-15', 1, 'MI', 'IPL'),
(72, 'KKR', 'RCB', 'D/N', 'Kolkata', '2016-05-16', 1, 'RCB', 'IPL'),
(73, 'RPS', 'DD', 'D/N', 'Rajsthan', '2016-05-17', 1, 'RPS', 'IPL'),
(74, 'PUN', 'RCB', 'D/N', 'Bngalore', '2016-05-18', 1, 'RCB', 'IPL'),
(75, 'GL', 'KKR', 'D/N', 'Kolkata', '2016-05-19', 1, 'GL', 'IPL'),
(76, 'DD', 'SRH', 'D/N', 'Delhi', '2016-05-20', 1, 'DD', 'IPL'),
(77, 'PUN', 'RPS', 'D/N', 'Rajsthan', '2016-05-21', 1, 'RPS', 'IPL'),
(78, 'MI', 'GL', 'D/N', 'Chennai', '2016-05-22', 1, 'GL', 'IPL'),
(79, 'KKR', 'SRH', 'Day', 'Hydrabad', '2016-05-22', 1, 'KKR', 'IPL'),
(80, 'RCB', 'DD', 'D/N', 'Bngalore', '2016-05-22', 1, 'RCB', 'IPL'),
(81, 'GL', 'RCB', 'D/N', 'Bngalore', '2016-05-24', 1, 'RCB', 'IPL'),
(82, 'RCB', 'SRH', 'D/N', 'Bngalore', '2016-05-29', 1, 'SRH', 'IPL'),
(83, 'KKR', 'SRH', 'D/N', 'Delhi', '2016-05-25', 1, 'SRH', 'IPL'),
(84, 'GL', 'SRH', 'D/N', 'Delhi', '2016-05-27', 1, 'SRH', 'IPL');

-- --------------------------------------------------------

--
-- Table structure for table `tally_net_transaction`
--

CREATE TABLE IF NOT EXISTS `tally_net_transaction` (
  `tally_net_transc_id` int(2) NOT NULL AUTO_INCREMENT,
  `tally_net_transc_details_id_fk` int(2) NOT NULL,
  `tally_net_match_details_id_fk` int(2) NOT NULL,
  `tally_net_bidder_name` int(10) NOT NULL,
  `tally_net_amt` double NOT NULL,
  `tally_net_tranc_mdate` date NOT NULL,
  `tally_net_transc_flag` int(2) DEFAULT '0',
  PRIMARY KEY (`tally_net_transc_id`),
  KEY `FK_tally_net_transc_id` (`tally_net_transc_details_id_fk`),
  KEY `FK_tally_net_bidder_id` (`tally_net_bidder_name`),
  KEY `FK_tally_net_match_details_id` (`tally_net_match_details_id_fk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=225 ;

--
-- Dumping data for table `tally_net_transaction`
--

INSERT INTO `tally_net_transaction` (`tally_net_transc_id`, `tally_net_transc_details_id_fk`, `tally_net_match_details_id_fk`, `tally_net_bidder_name`, `tally_net_amt`, `tally_net_tranc_mdate`, `tally_net_transc_flag`) VALUES
(1, 2, 6, 3, 720, '2016-03-16', 1),
(2, 5, 3, 3, 700, '2016-03-13', 1),
(3, 6, 2, 3, -1500, '2016-03-12', 1),
(4, 7, 1, 3, 800, '2016-03-12', 1),
(5, 8, 1, 2, 400, '2016-03-12', 1),
(6, 1, 8, 3, 1350, '2016-03-17', 1),
(7, 9, 8, 2, -500, '2016-03-17', 1),
(8, 3, 5, 3, -2700, '2016-03-15', 1),
(9, 10, 5, 2, -2000, '2016-03-15', 1),
(10, 11, 4, 3, 600, '2016-03-13', 1),
(11, 12, 4, 2, 900, '2016-03-13', 1),
(12, 4, 7, 3, 600, '2016-03-16', 1),
(13, 13, 7, 2, 750, '2016-03-16', 1),
(17, 15, 9, 3, 600, '2016-03-18', 1),
(15, 12, 4, 2, 900, '2016-03-13', 1),
(16, 14, 4, 3, 200, '2016-03-13', 1),
(18, 16, 9, 2, -1500, '2016-03-18', 1),
(19, 17, 10, 3, 700, '2016-03-18', 1),
(20, 18, 10, 2, -2000, '2016-03-18', 1),
(21, 19, 11, 3, 600, '2016-03-19', 1),
(22, 20, 11, 2, 600, '2016-03-19', 1),
(23, 21, 12, 3, 750, '2016-03-20', 1),
(24, 22, 12, 2, 750, '2016-03-20', 1),
(25, 23, 13, 3, 400, '2016-03-20', 1),
(26, 24, 13, 2, 1350, '2016-03-20', 1),
(27, 25, 14, 3, 1050, '2016-03-21', 1),
(28, 26, 14, 2, -2000, '2016-03-21', 1),
(29, 27, 15, 3, 600, '2016-03-22', 1),
(30, 28, 15, 4, 250, '2016-03-22', 1),
(31, 29, 16, 3, 750, '2016-03-23', 1),
(32, 30, 16, 2, -1000, '2016-03-23', 1),
(213, 31, 17, 3, 500, '2016-03-23', 1),
(34, 32, 18, 3, 900, '2016-03-25', 1),
(35, 33, 18, 2, -1000, '2016-03-25', 1),
(36, 34, 19, 3, -800, '2016-03-25', 1),
(37, 37, 21, 3, 750, '2016-03-26', 1),
(38, 35, 20, 3, 500, '2016-03-26', 1),
(39, 36, 20, 4, -500, '2016-03-26', 1),
(43, 39, 22, 2, 1200, '2016-03-27', 1),
(42, 38, 22, 3, 800, '2016-03-27', 1),
(215, 45, 23, 3, -900, '2016-03-30', 1),
(45, 46, 24, 3, -2000, '2016-03-31', 1),
(46, 47, 24, 2, -3000, '2016-03-31', 1),
(47, 48, 25, 3, 900, '2016-04-03', 1),
(48, 49, 26, 3, -2000, '2016-04-09', 1),
(49, 50, 26, 4, -1000, '2016-04-09', 1),
(50, 51, 27, 3, 1200, '2016-04-10', 1),
(51, 52, 27, 4, -500, '2016-04-10', 1),
(52, 53, 27, 2, -2000, '2016-04-10', 1),
(53, 54, 28, 3, 1500, '2016-04-11', 1),
(54, 55, 28, 4, -1000, '2016-04-11', 1),
(55, 56, 28, 2, -2000, '2016-04-11', 1),
(56, 57, 29, 4, 500, '2016-04-12', 1),
(57, 58, 29, 2, 1000, '2016-04-12', 1),
(58, 59, 30, 3, 1050, '2016-04-13', 1),
(59, 60, 30, 4, -1000, '2016-04-13', 1),
(60, 61, 30, 2, -1500, '2016-04-13', 1),
(61, 63, 31, 3, 540, '2016-04-14', 1),
(62, 64, 31, 4, 1000, '2016-04-14', 1),
(63, 65, 31, 2, -1000, '2016-04-14', 1),
(64, 66, 32, 3, 840, '2016-04-15', 1),
(65, 67, 32, 4, 350, '2016-04-15', 1),
(66, 68, 32, 2, 1400, '2016-04-15', 1),
(67, 69, 33, 4, 400, '2016-04-16', 1),
(68, 70, 34, 3, 450, '2016-04-16', 1),
(69, 71, 34, 4, 500, '2016-04-16', 1),
(70, 72, 34, 2, 1000, '2016-04-16', 1),
(71, 73, 35, 3, -900, '2016-04-17', 1),
(72, 74, 35, 4, 350, '2016-04-17', 1),
(73, 75, 35, 2, 700, '2016-04-17', 1),
(74, 76, 36, 3, -2000, '2016-04-17', 1),
(75, 77, 36, 0, 0, '2016-04-17', 1),
(76, 78, 36, 4, -1000, '2016-04-17', 1),
(77, 80, 36, 2, 1750, '2016-04-17', 1),
(78, 81, 37, 3, -900, '2016-04-18', 1),
(79, 82, 37, 4, -500, '2016-04-18', 1),
(80, 84, 37, 2, 1050, '2016-04-18', 1),
(81, 85, 38, 3, 540, '2016-04-20', 1),
(82, 86, 38, 2, 600, '2016-04-20', 1),
(83, 87, 38, 4, -1000, '2016-04-20', 1),
(84, 88, 39, 3, -900, '2016-04-21', 1),
(85, 89, 39, 4, 650, '2016-04-21', 1),
(86, 90, 39, 2, -1000, '2016-04-21', 1),
(87, 91, 39, 2, 650, '2016-04-21', 1),
(88, 92, 40, 3, 720, '2016-04-22', 1),
(89, 93, 40, 4, -1000, '2016-04-22', 1),
(90, 94, 40, 2, -2000, '2016-04-22', 1),
(91, 95, 41, 3, -1200, '2016-04-23', 1),
(92, 96, 41, 4, -1500, '2016-04-23', 1),
(93, 97, 41, 2, -1500, '2016-04-23', 1),
(94, 98, 42, 4, -2000, '2016-04-23', 1),
(95, 99, 43, 3, -1500, '2016-04-24', 1),
(96, 100, 43, 4, 1200, '2016-04-24', 1),
(97, 102, 43, 2, 900, '2016-04-24', 1),
(98, 103, 44, 4, 200, '2016-04-24', 1),
(99, 104, 44, 2, 1250, '2016-04-24', 1),
(100, 105, 45, 3, 900, '2016-04-25', 1),
(101, 106, 45, 4, -1000, '2016-04-25', 1),
(102, 107, 45, 2, -500, '2016-04-25', 1),
(103, 108, 46, 3, 1400, '2016-04-26', 1),
(104, 109, 46, 4, 700, '2016-04-26', 1),
(105, 110, 46, 2, 1400, '2016-04-26', 1),
(111, 113, 47, 2, 500, '2016-04-27', 1),
(110, 112, 47, 4, -1000, '2016-04-27', 1),
(109, 111, 47, 3, -900, '2016-04-27', 1),
(112, 114, 48, 3, 1200, '2016-04-28', 1),
(113, 115, 48, 4, 600, '2016-04-28', 1),
(114, 116, 48, 2, 1200, '2016-04-28', 1),
(115, 117, 49, 3, 1000, '2016-04-29', 1),
(116, 118, 49, 4, 500, '2016-04-29', 1),
(117, 119, 49, 2, 1000, '2016-04-29', 1),
(118, 120, 50, 3, -2000, '2016-04-30', 1),
(119, 121, 50, 4, 490, '2016-04-30', 1),
(120, 122, 50, 2, -500, '2016-04-30', 1),
(121, 123, 50, 2, 500, '2016-04-30', 1),
(122, 124, 51, 3, -2200, '2016-04-30', 1),
(123, 125, 51, 4, -700, '2016-04-30', 1),
(124, 126, 51, 2, 1300, '2016-04-30', 1),
(130, 131, 53, 2, -2000, '2016-05-01', 1),
(129, 127, 53, 3, -2000, '2016-05-01', 1),
(127, 129, 52, 3, 1200, '2016-05-01', 1),
(128, 130, 52, 2, 1300, '2016-05-01', 1),
(131, 132, 54, 3, -2000, '2016-05-02', 1),
(132, 133, 54, 4, -1000, '2016-05-02', 1),
(133, 134, 54, 2, -2000, '2016-05-02', 1),
(134, 135, 55, 3, 770, '2016-05-03', 1),
(135, 136, 55, 3, 225, '2016-05-03', 1),
(136, 137, 55, 4, 700, '2016-05-03', 1),
(137, 138, 55, 2, 1050, '2016-05-03', 1),
(138, 139, 55, 2, 125, '2016-05-03', 1),
(139, 140, 56, 3, 1000, '2016-05-04', 1),
(140, 141, 56, 2, 1000, '2016-05-04', 1),
(141, 142, 56, 4, -700, '2016-05-04', 1),
(142, 143, 57, 3, 550, '2016-05-05', 1),
(143, 144, 57, 2, -1000, '2016-05-05', 1),
(144, 146, 58, 3, 660, '2016-05-06', 1),
(145, 147, 58, 4, 600, '2016-05-06', 1),
(146, 148, 58, 2, -2000, '2016-05-06', 1),
(147, 149, 59, 3, 1000, '2016-05-07', 1),
(148, 150, 59, 2, 1200, '2016-05-07', 1),
(154, 154, 60, 2, 1500, '2016-05-07', 1),
(153, 152, 60, 4, -1000, '2016-05-07', 1),
(152, 151, 60, 3, -2000, '2016-05-07', 1),
(155, 155, 61, 3, -2000, '2016-05-08', 1),
(156, 156, 61, 4, 650, '2016-05-08', 1),
(157, 157, 61, 2, 650, '2016-05-08', 1),
(158, 158, 62, 3, 1000, '2016-05-08', 1),
(159, 159, 62, 4, 350, '2016-05-08', 1),
(160, 160, 62, 2, 1000, '2016-05-08', 1),
(161, 161, 63, 2, -2000, '2016-05-09', 1),
(162, 162, 63, 3, 800, '2016-05-09', 1),
(163, 163, 63, 4, -1000, '2016-05-09', 1),
(168, 164, 64, 3, -1100, '2016-05-10', 1),
(166, 165, 65, 4, -1000, '2016-05-11', 1),
(167, 166, 65, 2, -1000, '2016-05-11', 1),
(169, 167, 64, 2, -3000, '2016-05-10', 1),
(170, 168, 66, 3, 585, '2016-05-12', 1),
(171, 169, 66, 3, 270, '2016-05-12', 1),
(172, 170, 66, 2, -1000, '2016-05-12', 1),
(173, 171, 66, 4, -1000, '2016-05-12', 1),
(174, 173, 67, 3, -2000, '2016-05-13', 1),
(175, 174, 67, 4, 640, '2016-05-13', 1),
(176, 175, 67, 2, 1200, '2016-05-13', 1),
(182, 178, 68, 2, -1500, '2016-05-14', 1),
(181, 177, 68, 4, -1000, '2016-05-14', 1),
(180, 176, 68, 3, 1200, '2016-05-14', 1),
(183, 179, 69, 3, 800, '2016-05-14', 1),
(184, 180, 69, 2, 600, '2016-05-14', 1),
(185, 181, 69, 4, 600, '2016-05-14', 1),
(186, 182, 70, 3, 800, '2016-05-15', 1),
(187, 183, 70, 2, 1200, '2016-05-15', 1),
(188, 184, 71, 3, 150, '2016-05-15', 1),
(189, 185, 71, 4, -2000, '2016-05-15', 1),
(190, 186, 71, 2, -2000, '2016-05-15', 1),
(191, 187, 72, 3, 1000, '2016-05-16', 1),
(192, 188, 72, 4, 750, '2016-05-16', 1),
(193, 189, 72, 2, 750, '2016-05-16', 1),
(194, 190, 73, 2, 2400, '2016-05-17', 1),
(195, 191, 73, 3, 1200, '2016-05-17', 1),
(196, 192, 74, 3, 800, '2016-05-18', 1),
(197, 193, 74, 4, 400, '2016-05-18', 1),
(198, 194, 74, 2, 800, '2016-05-18', 1),
(199, 195, 75, 3, 480, '2016-05-19', 1),
(200, 196, 76, 3, 360, '2016-05-20', 1),
(201, 197, 76, 4, 400, '2016-05-20', 1),
(202, 198, 76, 2, -2000, '2016-05-20', 1),
(203, 199, 77, 3, 550, '2016-05-21', 1),
(204, 200, 77, 4, 500, '2016-05-21', 1),
(205, 201, 77, 2, 1000, '2016-05-21', 1),
(206, 202, 78, 3, -900, '2016-05-22', 1),
(207, 203, 78, 4, -1000, '2016-05-22', 1),
(208, 205, 78, 2, 1250, '2016-05-22', 1),
(209, 206, 79, 3, 540, '2016-05-22', 1),
(210, 207, 79, 4, -1500, '2016-05-22', 1),
(211, 208, 79, 2, 1200, '2016-05-22', 1),
(212, 209, 80, 2, 600, '2016-05-22', 1),
(214, 210, 17, 2, 625, '2016-03-23', 1),
(216, 211, 23, 2, 1500, '2016-03-30', 1),
(217, 212, 81, 3, 800, '2016-05-24', 1),
(218, 213, 81, 2, 800, '2016-05-24', 1),
(219, 214, 82, 3, -2000, '2016-05-29', 1),
(220, 215, 82, 2, 1650, '2016-05-29', 1),
(221, 216, 83, 2, 1200, '2016-05-25', 1),
(222, 217, 83, 2, 900, '2016-05-25', 1),
(223, 218, 84, 2, 1250, '2016-05-27', 1),
(224, 219, 84, 2, 500, '2016-05-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tally_teams`
--

CREATE TABLE IF NOT EXISTS `tally_teams` (
  `team_id` varchar(20) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_series` varchar(5) NOT NULL,
  `team_active_flag` int(1) NOT NULL DEFAULT '1',
  `team_home_ground` varchar(50) DEFAULT '0',
  PRIMARY KEY (`team_id`),
  UNIQUE KEY `team_name` (`team_name`),
  FULLTEXT KEY `team_home_ground` (`team_home_ground`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tally_teams`
--

INSERT INTO `tally_teams` (`team_id`, `team_name`, `team_series`, `team_active_flag`, `team_home_ground`) VALUES
('RPS', 'Rising Pune Supergiants', 'IPL', 1, 'Pune'),
('DD', 'Delhi Daredevils', 'IPL', 1, 'Delhi'),
('PUN', 'Kings Punjab', 'IPL', 1, 'Punjab'),
('KKR', 'Kolkata Knight Riders', 'IPL', 1, 'Kolkata'),
('MI', 'Mumbai Indians', 'IPL', 1, 'Mumbai'),
('GL', 'Gujarat Lions', 'IPL', 1, 'Rajkot'),
('RCB', 'Royal Challengers Bangalore', 'IPL', 1, 'Bangalore'),
('SRH', 'Sunrisers Hydrabad', 'IPL', 1, 'Hyderabad'),
('IND', 'India', 'WCT20', 1, '0'),
('NZ', 'New Zealand', 'WCT20', 1, '0'),
('AUS', 'Australia', 'WCT20', 0, '0'),
('BAN', 'Bangladesh', 'WCT20', 0, '0'),
('AFG', 'Afganistan', 'WCT20', 0, '0'),
('WI', 'West Indies', 'WCT20', 1, '0'),
('RSA', 'South Africa', 'WCT20', 0, '0'),
('SL', 'Sri Lanka', 'WCT20', 0, '0'),
('ENG', 'England', 'WCT20', 1, '0'),
('PAK', 'Pakistan', 'WCT20', 0, '0'),
('ZIM', 'Zimbabwe', 'WCT20', 0, '0'),
('SCT', 'Scotland', 'WCT20', 0, '0'),
('HK', 'Hong Kong', 'WCT20', 0, '0'),
('NER', 'Netherlands', 'WCT20', 0, '0'),
('IRE', 'Ireland', 'WCT20', 0, '0'),
('OMN', 'Oman', 'WCT20', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tally_transaction_details`
--

CREATE TABLE IF NOT EXISTS `tally_transaction_details` (
  `tally_transc_id` int(2) NOT NULL AUTO_INCREMENT,
  `tally_match_details_id_fk` int(2) NOT NULL,
  `tally_bidder_name` int(10) NOT NULL,
  `tally_team_name` varchar(100) NOT NULL,
  `tally_rate` double NOT NULL,
  `tally_amt` double NOT NULL,
  `tally_date_of_match` date DEFAULT NULL,
  `tally_transc_flag` int(2) DEFAULT '0',
  `tally_match_result` varchar(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tally_transc_id`),
  KEY `fk_tally_transc_id` (`tally_match_details_id_fk`),
  KEY `FK_tally_transc_bidder` (`tally_bidder_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=220 ;

--
-- Dumping data for table `tally_transaction_details`
--

INSERT INTO `tally_transaction_details` (`tally_transc_id`, `tally_match_details_id_fk`, `tally_bidder_name`, `tally_team_name`, `tally_rate`, `tally_amt`, `tally_date_of_match`, `tally_transc_flag`, `tally_match_result`) VALUES
(1, 8, 3, 'SL', 0.45, 3000, '2016-03-17', 1, 'W'),
(2, 6, 3, 'WI', 0.6, 1200, '2016-03-16', 1, 'W'),
(3, 5, 3, 'IND', 0.35, 2700, '2016-03-15', 1, 'L'),
(4, 7, 3, 'PAK', 0.5, 1200, '2016-03-16', 1, 'W'),
(5, 3, 3, 'NER', 1, 700, '2016-03-13', 1, 'W'),
(6, 2, 3, 'HK', 0.8, 1500, '2016-03-12', 1, 'L'),
(7, 1, 3, 'AFG', 0.8, 1000, '2016-03-12', 1, 'W'),
(8, 1, 2, 'AFG', 0.8, 500, '2016-03-12', 1, 'W'),
(9, 8, 2, 'AFG', 1.2, 500, '2016-03-17', 1, 'L'),
(10, 5, 2, 'IND', 0.35, 2000, '2016-03-15', 1, 'L'),
(11, 4, 3, 'BAN', 0.6, 1000, '2016-03-13', 1, 'W'),
(12, 4, 2, 'BAN', 0.6, 1500, '2016-03-13', 1, 'W'),
(13, 7, 2, 'PAK', 0.5, 1500, '2016-03-16', 1, 'W'),
(14, 4, 3, 'BAN', 0.1, 2000, '2016-03-13', 1, 'W'),
(15, 9, 3, 'NZ', 0.75, 800, '2016-03-18', 1, 'W'),
(16, 9, 2, 'AUS', 0.4, 1500, '2016-03-18', 1, 'L'),
(17, 10, 3, 'ENG', 0.7, 1000, '2016-03-18', 1, 'W'),
(18, 10, 2, 'RSA', 0.4, 2000, '2016-03-18', 1, 'L'),
(19, 11, 3, 'IND', 0.3, 2000, '2016-03-19', 1, 'W'),
(20, 11, 2, 'IND', 0.3, 2000, '2016-03-19', 1, 'W'),
(21, 12, 3, 'RSA', 0.25, 3000, '2016-03-20', 1, 'W'),
(22, 12, 2, 'RSA', 0.25, 3000, '2016-03-20', 1, 'W'),
(23, 13, 3, 'WI', 0.2, 2000, '2016-03-20', 1, 'W'),
(24, 13, 2, 'WI', 0.45, 3000, '2016-03-20', 1, 'W'),
(25, 14, 3, 'AUS', 0.35, 3000, '2016-03-21', 1, 'W'),
(26, 14, 2, 'BAN', 0.8, 2000, '2016-03-21', 1, 'L'),
(27, 15, 3, 'NZ', 0.5, 1200, '2016-03-22', 1, 'W'),
(28, 15, 4, 'NZ', 0.5, 500, '2016-03-22', 1, 'W'),
(29, 16, 3, 'ENG', 0.25, 3000, '2016-03-23', 1, 'W'),
(30, 16, 2, 'AFG', 1.2, 1000, '2016-03-23', 1, 'L'),
(31, 17, 3, 'IND', 0.25, 2000, '2016-03-23', 1, 'W'),
(210, 17, 2, 'IND', 0.25, 2500, '2016-03-23', 1, 'W'),
(32, 18, 3, 'AUS', 0.3, 3000, '2016-03-25', 1, 'W'),
(33, 18, 2, 'PAK', 0.55, 1000, '2016-03-25', 1, 'L'),
(34, 19, 3, 'RSA', 0.25, 800, '2016-03-25', 1, 'L'),
(35, 20, 3, 'ENG', 0.2, 2500, '2016-03-26', 1, 'W'),
(36, 20, 4, 'SL', 0.65, 500, '2016-03-26', 1, 'L'),
(37, 21, 3, 'NZ', 0.25, 3000, '2016-03-26', 1, 'W'),
(38, 22, 3, 'IND', 0.4, 2000, '2016-03-27', 1, 'W'),
(39, 22, 2, 'IND', 0.4, 3000, '2016-03-27', 1, 'W'),
(45, 23, 3, 'NZ', 0.5, 900, '2016-03-30', 1, 'L'),
(211, 23, 2, 'ENG', 0.75, 2000, '2016-03-30', 1, 'W'),
(46, 24, 3, 'IND', 0.4, 2000, '2016-03-31', 1, 'L'),
(47, 24, 2, 'IND', 0.4, 3000, '2016-03-31', 1, 'L'),
(48, 25, 3, 'WI', 0.45, 2000, '2016-04-03', 1, 'W'),
(49, 26, 3, 'MI', 0.8, 2000, '2016-04-09', 1, 'L'),
(50, 26, 4, 'MI', 0.8, 1000, '2016-04-09', 1, 'L'),
(51, 27, 3, 'KKR', 0.6, 2000, '2016-04-10', 1, 'W'),
(52, 27, 4, 'DD', 0.85, 500, '2016-04-10', 1, 'L'),
(53, 27, 2, 'DD', 0.85, 2000, '2016-04-10', 1, 'L'),
(54, 28, 3, 'GL', 0.75, 2000, '2016-04-11', 1, 'W'),
(55, 28, 4, 'PUN', 0.6, 1000, '2016-04-11', 1, 'L'),
(56, 28, 2, 'PUN', 0.6, 2000, '2016-04-11', 1, 'L'),
(57, 29, 4, 'RCB', 0.5, 1000, '2016-04-12', 1, 'W'),
(58, 29, 2, 'RCB', 0.5, 2000, '2016-04-12', 1, 'W'),
(59, 30, 3, 'MI', 0.7, 1500, '2016-04-13', 1, 'W'),
(60, 30, 4, 'KKR', 0.7, 1000, '2016-04-13', 1, 'L'),
(61, 30, 2, 'KKR', 0.7, 1500, '2016-04-13', 1, 'L'),
(63, 31, 3, 'GL', 0.6, 900, '2016-04-14', 1, 'W'),
(64, 31, 4, 'GL', 0.5, 2000, '2016-04-14', 1, 'W'),
(65, 31, 2, 'RPS', 0.6, 1000, '2016-04-14', 1, 'L'),
(66, 32, 3, 'DD', 0.7, 1200, '2016-04-15', 1, 'W'),
(67, 32, 4, 'DD', 0.7, 500, '2016-04-15', 1, 'W'),
(68, 32, 2, 'DD', 0.7, 2000, '2016-04-15', 1, 'W'),
(69, 33, 4, 'KKR', 0.4, 1000, '2016-04-16', 1, 'W'),
(70, 34, 3, 'GL', 0.5, 900, '2016-04-16', 1, 'W'),
(71, 34, 4, 'GL', 0.5, 1000, '2016-04-16', 1, 'W'),
(72, 34, 2, 'GL', 0.5, 2000, '2016-04-16', 1, 'W'),
(73, 35, 3, 'RPS', 0.4, 900, '2016-04-17', 1, 'L'),
(74, 35, 4, 'PUN', 0.7, 500, '2016-04-17', 1, 'W'),
(75, 35, 2, 'PUN', 0.7, 1000, '2016-04-17', 1, 'W'),
(76, 36, 3, 'RCB', 0.4, 2000, '2016-04-17', 1, 'L'),
(77, 36, 0, 'select', 0, 0, '2016-04-17', 1, 'L'),
(78, 36, 4, 'RCB', 0.4, 1000, '2016-04-17', 1, 'L'),
(80, 36, 2, 'DD', 0.7, 2500, '2016-04-17', 1, 'W'),
(81, 37, 3, 'MI', 0.5, 900, '2016-04-18', 1, 'L'),
(82, 37, 4, 'MI', 0.5, 500, '2016-04-18', 1, 'L'),
(84, 37, 2, 'SRH', 0.7, 1500, '2016-04-18', 1, 'W'),
(85, 38, 3, 'MI', 0.6, 900, '2016-04-20', 1, 'W'),
(86, 38, 2, 'MI', 0.6, 1000, '2016-04-20', 1, 'W'),
(87, 38, 4, 'RCB', 0.6, 1000, '2016-04-20', 1, 'L'),
(88, 39, 3, 'GL', 0.5, 900, '2016-04-21', 1, 'L'),
(89, 39, 4, 'SRH', 0.65, 1000, '2016-04-21', 1, 'W'),
(90, 39, 2, 'GL', 0.5, 1000, '2016-04-21', 1, 'L'),
(91, 39, 2, 'SRH', 0.65, 1000, '2016-04-21', 1, 'W'),
(92, 40, 3, 'RCB', 0.6, 1200, '2016-04-22', 1, 'W'),
(93, 40, 4, 'RPS', 0.6, 1000, '2016-04-22', 1, 'L'),
(94, 40, 2, 'RPS', 0.6, 2000, '2016-04-22', 1, 'L'),
(95, 41, 3, 'MI', 0.5, 1200, '2016-04-23', 1, 'L'),
(96, 41, 4, 'MI', 0.5, 1500, '2016-04-23', 1, 'L'),
(97, 41, 2, 'MI', 0.5, 1500, '2016-04-23', 1, 'L'),
(98, 42, 4, 'PUN', 0.8, 2000, '2016-04-23', 1, 'L'),
(99, 43, 3, 'RCB', 0.6, 1500, '2016-04-24', 1, 'L'),
(100, 43, 4, 'GL', 0.6, 2000, '2016-04-24', 1, 'W'),
(102, 43, 2, 'GL', 0.6, 1500, '2016-04-24', 1, 'W'),
(103, 44, 4, 'KKR', 0.4, 500, '2016-04-24', 1, 'W'),
(104, 44, 2, 'KKR', 0.5, 2500, '2016-04-24', 1, 'W'),
(105, 45, 3, 'MI', 0.45, 2000, '2016-04-25', 1, 'W'),
(106, 45, 4, 'PUN', 0.7, 1000, '2016-04-25', 1, 'L'),
(107, 45, 2, 'PUN', 0.7, 500, '2016-04-25', 1, 'L'),
(108, 46, 3, 'RPS', 0.7, 2000, '2016-04-26', 1, 'W'),
(109, 46, 4, 'RPS', 0.7, 1000, '2016-04-26', 1, 'W'),
(110, 46, 2, 'RPS', 0.7, 2000, '2016-04-26', 1, 'W'),
(111, 47, 3, 'DD', 0.7, 900, '2016-04-27', 1, 'L'),
(112, 47, 4, 'DD', 0.7, 1000, '2016-04-27', 1, 'L'),
(113, 47, 2, 'GL', 0.5, 1000, '2016-04-27', 1, 'W'),
(114, 48, 3, 'MI', 0.6, 2000, '2016-04-28', 1, 'W'),
(115, 48, 4, 'MI', 0.6, 1000, '2016-04-28', 1, 'W'),
(116, 48, 2, 'MI', 0.6, 2000, '2016-04-28', 1, 'W'),
(117, 49, 3, 'GL', 0.5, 2000, '2016-04-29', 1, 'W'),
(118, 49, 4, 'GL', 0.5, 1000, '2016-04-29', 1, 'W'),
(119, 49, 2, 'GL', 0.5, 2000, '2016-04-29', 1, 'W'),
(120, 50, 3, 'KKR', 0.5, 2000, '2016-04-30', 1, 'L'),
(121, 50, 4, 'DD', 0.7, 700, '2016-04-30', 1, 'W'),
(122, 50, 2, 'KKR', 0.5, 500, '2016-04-30', 1, 'L'),
(123, 50, 2, 'DD', 0.25, 2000, '2016-04-30', 1, 'W'),
(124, 51, 3, 'RCB', 0.5, 2200, '2016-04-30', 1, 'L'),
(125, 51, 4, 'RCB', 0.5, 700, '2016-04-30', 1, 'L'),
(126, 51, 2, 'SRH', 0.65, 2000, '2016-04-30', 1, 'W'),
(127, 53, 3, 'GL', 0.45, 2000, '2016-05-01', 1, 'L'),
(131, 53, 2, 'GL', 0.45, 2000, '2016-05-01', 1, 'L'),
(129, 52, 3, 'MI', 0.5, 2400, '2016-05-01', 1, 'W'),
(130, 52, 2, 'MI', 0.5, 2600, '2016-05-01', 1, 'W'),
(132, 54, 3, 'RCB', 0.5, 2000, '2016-05-02', 1, 'L'),
(133, 54, 4, 'RCB', 0.5, 1000, '2016-05-02', 1, 'L'),
(134, 54, 2, 'RCB', 0.5, 2000, '2016-05-02', 1, 'L'),
(135, 55, 3, 'DD', 0.7, 1100, '2016-05-03', 1, 'W'),
(136, 55, 3, 'DD', 0.25, 900, '2016-05-03', 1, 'W'),
(137, 55, 4, 'DD', 0.7, 1000, '2016-05-03', 1, 'W'),
(138, 55, 2, 'DD', 0.7, 1500, '2016-05-03', 1, 'W'),
(139, 55, 2, 'DD', 0.25, 500, '2016-05-03', 1, 'W'),
(140, 56, 3, 'KKR', 0.5, 2000, '2016-05-04', 1, 'W'),
(141, 56, 2, 'KKR', 0.5, 2000, '2016-05-04', 1, 'W'),
(142, 56, 4, 'PUN', 0.7, 700, '2016-05-04', 1, 'L'),
(143, 57, 3, 'RPS', 0.5, 1100, '2016-05-05', 1, 'W'),
(144, 57, 2, 'DD', 0.5, 1000, '2016-05-05', 1, 'L'),
(146, 58, 3, 'SRH', 0.6, 1100, '2016-05-06', 1, 'W'),
(147, 58, 4, 'SRH', 0.6, 1000, '2016-05-06', 1, 'W'),
(148, 58, 2, 'GL', 0.6, 2000, '2016-05-06', 1, 'L'),
(149, 59, 3, 'RCB', 0.5, 2000, '2016-05-07', 1, 'W'),
(150, 59, 2, 'RCB', 0.5, 2400, '2016-05-07', 1, 'W'),
(151, 60, 3, 'DD', 0.4, 2000, '2016-05-07', 1, 'L'),
(152, 60, 4, 'DD', 0.4, 1000, '2016-05-07', 1, 'L'),
(154, 60, 2, 'PUN', 0.75, 2000, '2016-05-07', 1, 'W'),
(155, 61, 3, 'MI', 0.45, 2000, '2016-05-08', 1, 'L'),
(156, 61, 4, 'SRH', 0.65, 1000, '2016-05-08', 1, 'W'),
(157, 61, 2, 'SRH', 0.65, 1000, '2016-05-08', 1, 'W'),
(158, 62, 3, 'GL', 0.5, 2000, '2016-05-08', 1, 'W'),
(159, 62, 4, 'GL', 0.35, 1000, '2016-05-08', 1, 'W'),
(160, 62, 2, 'GL', 0.5, 2000, '2016-05-08', 1, 'W'),
(161, 63, 2, 'PUN', 0.8, 2000, '2016-05-09', 1, 'L'),
(162, 63, 3, 'RCB', 0.4, 2000, '2016-05-09', 1, 'W'),
(163, 63, 4, 'PUN', 0.8, 1000, '2016-05-09', 1, 'L'),
(164, 64, 3, 'RPS', 0.75, 1100, '2016-05-10', 1, 'L'),
(167, 64, 2, 'RPS', 0.75, 3000, '2016-05-10', 1, 'L'),
(165, 65, 4, 'RCB', 0.55, 1000, '2016-05-11', 1, 'L'),
(166, 65, 2, 'RCB', 0.55, 1000, '2016-05-11', 1, 'L'),
(168, 66, 3, 'DD', 0.65, 900, '2016-05-12', 1, 'W'),
(169, 66, 3, 'DD', 0.3, 900, '2016-05-12', 1, 'W'),
(170, 66, 2, 'SRH', 0.45, 1000, '2016-05-12', 1, 'L'),
(171, 66, 4, 'SRH', 0.45, 1000, '2016-05-12', 1, 'L'),
(173, 67, 3, 'MI', 0.4, 2000, '2016-05-13', 1, 'L'),
(174, 67, 4, 'PUN', 0.8, 800, '2016-05-13', 1, 'W'),
(175, 67, 2, 'PUN', 0.8, 1500, '2016-05-13', 1, 'W'),
(176, 68, 3, 'RCB', 0.6, 2000, '2016-05-14', 1, 'W'),
(177, 68, 4, 'GL', 0.6, 1000, '2016-05-14', 1, 'L'),
(178, 68, 2, 'GL', 0.6, 1500, '2016-05-14', 1, 'L'),
(179, 69, 3, 'KKR', 0.4, 2000, '2016-05-14', 1, 'W'),
(180, 69, 2, 'KKR', 0.4, 1500, '2016-05-14', 1, 'W'),
(181, 69, 4, 'KKR', 0.4, 1500, '2016-05-14', 1, 'W'),
(182, 70, 3, 'SRH', 0.4, 2000, '2016-05-15', 1, 'W'),
(183, 70, 2, 'SRH', 0.4, 3000, '2016-05-15', 1, 'W'),
(184, 71, 3, 'MI', 0.15, 1000, '2016-05-15', 1, 'W'),
(185, 71, 4, 'DD', 0.6, 2000, '2016-05-15', 1, 'L'),
(186, 71, 2, 'DD', 0.6, 2000, '2016-05-15', 1, 'L'),
(187, 72, 3, 'RCB', 0.5, 2000, '2016-05-16', 1, 'W'),
(188, 72, 4, 'RCB', 0.5, 1500, '2016-05-16', 1, 'W'),
(189, 72, 2, 'RCB', 0.5, 1500, '2016-05-16', 1, 'W'),
(190, 73, 2, 'RPS', 0.8, 3000, '2016-05-17', 1, 'W'),
(191, 73, 3, 'RPS', 0.8, 1500, '2016-05-17', 1, 'W'),
(192, 74, 3, 'RCB', 0.4, 2000, '2016-05-18', 1, 'W'),
(193, 74, 4, 'RCB', 0.4, 1000, '2016-05-18', 1, 'W'),
(194, 74, 2, 'RCB', 0.4, 2000, '2016-05-18', 1, 'W'),
(195, 75, 3, 'GL', 0.4, 1200, '2016-05-19', 1, 'W'),
(196, 76, 3, 'DD', 0.4, 900, '2016-05-20', 1, 'W'),
(197, 76, 4, 'DD', 0.4, 1000, '2016-05-20', 1, 'W'),
(198, 76, 2, 'SRH', 0.55, 2000, '2016-05-20', 1, 'L'),
(199, 77, 3, 'RPS', 0.5, 1100, '2016-05-21', 1, 'W'),
(200, 77, 4, 'RPS', 0.5, 1000, '2016-05-21', 1, 'W'),
(201, 77, 2, 'RPS', 0.5, 2000, '2016-05-21', 1, 'W'),
(202, 78, 3, 'MI', 0.5, 900, '2016-05-22', 1, 'L'),
(203, 78, 4, 'MI', 0.5, 1000, '2016-05-22', 1, 'L'),
(205, 78, 2, 'GL', 0.5, 2500, '2016-05-22', 1, 'W'),
(206, 79, 3, 'KKR', 0.6, 900, '2016-05-22', 1, 'W'),
(207, 79, 4, 'SRH', 0.4, 1500, '2016-05-22', 1, 'L'),
(208, 79, 2, 'KKR', 0.6, 2000, '2016-05-22', 1, 'W'),
(209, 80, 2, 'RCB', 0.3, 2000, '2016-05-22', 1, 'W'),
(212, 81, 3, 'RCB', 0.4, 2000, '2016-05-24', 1, 'W'),
(213, 81, 2, 'RCB', 0.4, 2000, '2016-05-24', 1, 'W'),
(214, 82, 3, 'RCB', 0.55, 2000, '2016-05-29', 1, 'L'),
(215, 82, 2, 'SRH', 0.55, 3000, '2016-05-29', 1, 'W'),
(216, 83, 2, 'SRH', 0.6, 2000, '2016-05-25', 1, 'W'),
(217, 83, 2, 'SRH', 0.6, 1500, '2016-05-25', 1, 'W'),
(218, 84, 2, 'SRH', 0.5, 2500, '2016-05-27', 1, 'W'),
(219, 84, 2, 'SRH', 0.5, 1000, '2016-05-27', 1, 'W');
