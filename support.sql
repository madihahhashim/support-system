-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2019 at 03:41 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `support`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE `actions` (
  `actionid` int(11) NOT NULL,
  `actiondate` date DEFAULT NULL,
  `acfile` blob,
  `comment` varchar(1000) DEFAULT NULL,
  `custid` int(11) DEFAULT NULL,
  `staffid` int(11) DEFAULT NULL,
  `inserttime` datetime DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actions`
--

INSERT INTO `actions` (`actionid`, `actiondate`, `acfile`, `comment`, `custid`, `staffid`, `inserttime`, `updatetime`) VALUES
(1, '2019-08-22', 0x74616d6261685f70656c616a61722e706870, 'haiiii', 120, 1, '2019-08-22 13:22:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `helpid` int(255) NOT NULL,
  `helpname` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`helpid`, `helpname`) VALUES
(1, 'FEEDBACK'),
(2, 'GENERAL INQUIRY'),
(3, 'REPORT A PROBLEM/ACCESS ISSUES');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` int(11) NOT NULL,
  `staffname` varchar(1000) DEFAULT NULL,
  `staffcode` varchar(1000) DEFAULT NULL,
  `pass` varchar(1000) DEFAULT NULL,
  `staffemail` varchar(1000) DEFAULT NULL,
  `status_stid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `staffname`, `staffcode`, `pass`, `staffemail`, `status_stid`) VALUES
(1, 'MADIHAH HANNANI BINTI HASHIM', '2017216966', '123', 'madihah@twincontinent.my', 1),
(2, 'MADIHAH HANNANI BINTI HASHIM', '2017216966', '123', '', NULL),
(3, 'NUR AIN EMYLIA BINTI MOHD VAUXHALL', '2017242148', '456', 'ain@twincontinent.my', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staffstatus`
--

CREATE TABLE `staffstatus` (
  `stid` int(255) NOT NULL,
  `stname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffstatus`
--

INSERT INTO `staffstatus` (`stid`, `stname`) VALUES
(1, 'ADMINISTRATOR');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `custid` int(255) NOT NULL,
  `custname` varchar(50) DEFAULT NULL,
  `ticketcode` varchar(6) DEFAULT NULL,
  `helpdesc` varchar(1000) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `extension` int(11) DEFAULT NULL,
  `tickdate` date DEFAULT NULL,
  `staffid` int(11) DEFAULT NULL,
  `helpid` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`custid`, `custname`, `ticketcode`, `helpdesc`, `phone`, `email`, `extension`, `tickdate`, `staffid`, `helpid`) VALUES
(120, 'madihah hannani binti hashim', '123456', '						hai cepatlah', '1117829700', 'madihahhashim99@gmail.com', NULL, '2019-08-08', 3, 1),
(121, 'ain', '789456', '						fdvfdvrg', '345235', 'grthre@gmail.com', NULL, NULL, NULL, NULL),
(122, 'izz', '654123', '			dfbjbfjf', '3432432', 'jghhbfgh@gmail.com', NULL, NULL, NULL, NULL),
(123, 'ain ', '963258', '						jgbfhgfgfgh', '435434334', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(124, 'ain', '147852', '						dfgjdfhgfd', '34534634', 'gfgfeuwr@gmail.com', NULL, NULL, NULL, NULL),
(125, 'ain', '789955', '						fvdfgfd', '323523', 'dgsd@gmail.com', NULL, NULL, NULL, NULL),
(126, 'ain emylia', '951236', '						hai', '2352522', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(127, 'madi', '987258', '						hghg', '1117829700', 'madihahhashim99@gmail.com', NULL, NULL, NULL, NULL),
(128, 'ain', '545565', '						hjfdgfdgfh', '234235436', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(129, 'madi', '357412', '						hI', '01117829700', 'madihahhashim99@gmail.com', NULL, NULL, NULL, NULL),
(130, 'ain', '963741', '	jvjdffgfhg					', '3445678', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(131, 'ain', '852369', '					hai	', '34654754754', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(132, 'ain', '789123', '						hai', '4556789', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(133, 'ain', '651234', '		ffhgghk				', '4235235524', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(134, 'madi', '951753', '				hajjj		', '01117829700', 'madihahhashim99@gmail.com', NULL, NULL, NULL, NULL),
(135, 'ain', '771929', '						adadadd', '475812369', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(136, 'ain emylia', '888888', '						hai', '34445556', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(137, 'ain emylia', '555555', 'hai', '2454254', 'ain@twincontinent.my', NULL, NULL, NULL, NULL),
(138, 'ain', '111111', '						hai', '354545', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(139, 'ain', '222222', '						hai', '34325', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(140, 'ain emylia', '333333', '					hai	', '436547658', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(141, 'ain', '444444', '						hai', '435346346', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(142, 'ain', '666666', '			hai			', '344365363', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(143, 'haziq', '000000', '			sfdgfdg			', '67674574', 'haziq@twincontinent.my', NULL, NULL, NULL, NULL),
(144, 'haziq', '842686', '						fhgh', '35637437', 'nadhirhaziq7@gmail.com', NULL, NULL, NULL, NULL),
(145, 'ain', '752256', '					gdfg	', '4436346', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(146, 'ain', '842682', '						fdhfdnfgb', '45746765', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(147, 'ain', '971482', '						hai', '23534654', 'ain@twincontinent.my', NULL, NULL, NULL, NULL),
(148, 'ain', '804434', '						gfhgh', '35465474', 'ain@twincontinent.my', NULL, NULL, NULL, NULL),
(149, 'ain', '726658', '					jhkhlhjljl	', '87989879', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(150, 'ain', '142117', '						fgjhfh', '5354764764', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(151, 'ain', '275090', '						ghgfhgdr', '43654664767', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(152, 'ain', '869942', '						dfhbfghgfh', '465454765', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(153, 'ain', '931038', '						fgfrf', '3445654767', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(154, 'ain', '963059', '						jghjghj', '57676565867', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(155, 'ain', '614987', '						gfhfghfdh', '54767674', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(156, 'ain ', '995525', '						dfgsdfcv', '67656876878', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(157, 'madihah hannani binti hashim', '779560', '			hai			', '01117829700', 'madihah@twincontinent.my', NULL, NULL, NULL, NULL),
(158, 'madihah hannani binti hashim', '219514', '						hai', '01117829700', 'madihah@twincontinent.my', NULL, NULL, NULL, NULL),
(159, 'madihah hannani', '928416', '				hfgjgjfgg		', '1117829700', 'madihahhashim99@gmail.com', NULL, NULL, NULL, NULL),
(160, 'ain emylia', '964232', '						ain ngantuk giler', '454654767', 'ain@twincontinent.my', NULL, NULL, NULL, NULL),
(161, 'madihah hannani binti hashim', '746637', '					haiiiii.....	', '01117829700', 'madihah@twincontinent.my', NULL, NULL, NULL, NULL),
(162, 'madihah', '874514', '						hai', '346363464', 'madihah@twincontinent.my', NULL, NULL, NULL, NULL),
(163, 'madi', '818434', '						huhuhuuh', '5365766', 'madihah@twincontinent.my', NULL, NULL, NULL, NULL),
(164, 'ain', '719586', '						hfgfghgf', '765675675', 'ainvauxh@gmail.com', NULL, NULL, NULL, NULL),
(165, 'madi', '541106', '			hahahhahaha			', '21454566677', 'madihahhashim99@gmail.com', NULL, NULL, NULL, NULL),
(166, 'madi', '796002', '						dfdsdfdd', '01117829700', 'madihahhashim99@gmail.com', NULL, NULL, NULL, NULL),
(167, 'madi', '235015', '						gjfggsdfggfj', '43852574757', 'madihahhashim99@gmail.com', NULL, NULL, NULL, NULL),
(168, 'madi', '984687', '						fhgfdghfjdgfg', '87943967396', 'madihah@twincontinent.my', NULL, NULL, NULL, NULL),
(169, 'madihah', '600522', '						hggdjdsjod', '01117829700', 'madihah@twincontinent.my', NULL, NULL, NULL, NULL),
(170, 'madi', '934569', '						fbafhsdfjfu', '4545556295', 'madihahhashim99@gmail.com', NULL, NULL, NULL, NULL),
(171, 'madi', '161580', '						dnkvdfjbngfj', '34545476775', 'madihahhashim99@gmail.com', NULL, NULL, NULL, NULL),
(172, 'madi', '324641', '						dfdnfjbfgfh', '43543546667', 'madihahhashim99@gmail.com', NULL, NULL, NULL, NULL),
(173, 'madi', '514895', '						gjfgffhfghgioh\r\n', '34546789', 'madihahhashim99@gmail.com', NULL, NULL, NULL, NULL),
(174, 'madi', '133020', '						dufgdugsddsh', '456767878', 'madihahhashim99@gmail.com', NULL, NULL, NULL, NULL),
(175, 'madi', '917649', '						dsfdghfirie', '54365756787', 'madihahhashim99@gmail.com', NULL, NULL, NULL, NULL),
(176, 'madi', '861437', '						dgfdsfgfhdusf', '57257439574', 'madihah@twincontinent.my', NULL, NULL, NULL, NULL),
(177, 'hakim', '528625', '						fgbdfjgfdjg', '654764765', 'm.hakim878.mh@gmail.com', NULL, NULL, NULL, NULL),
(178, 'izz', '190504', '						hai', '454565465', 'izz@twincontinent.my', NULL, NULL, NULL, NULL),
(179, 'madihah', '577666', '						bjfsdbfslgssnk', '55225230306', 'madihahhashim99@gmail.com', NULL, NULL, NULL, NULL),
(180, 'madihah hannani', '408154', '						fddfdfdsfsd', '01117829700', 'madihahhashim99@gmail.com', NULL, NULL, NULL, NULL),
(181, 'madihah hannani', '623591', '						dsfsgfdhfg', '01117829700', 'madihahhannani99@gmail.com', NULL, NULL, NULL, NULL),
(182, 'madihah hannani', '336133', '						hashddshdjsjadhfdhfdsfdfgdsgfdfgdfdgsfgdfgdsfdfljufhdhjbdhfgwhefhvjsdhfdufu', '43525435455', 'madihah@twincontinent.my', NULL, NULL, NULL, NULL),
(184, 'madihah hannani', '982030', 'fdgfaufayagfasadygfdygygfa																												', '1117829700', '', NULL, NULL, NULL, NULL),
(185, 'madihah hannani', '222756', '	fgdfhfdhsshf																											', '1117829700', '', NULL, NULL, NULL, NULL),
(186, 'madihah hannani', '772660', 'bdfhfhsgdshfhfs																												', '1117829700', 'madihah@twincontinent.my', NULL, NULL, NULL, NULL),
(187, 'madihah hannani', '938775', '		sdsdfdgfhgfhfgh																										', '1117829700', 'madihah@twincontinent.my', NULL, NULL, NULL, NULL),
(188, 'madihah hannani', '379006', '			fgsggsdfsfsdsd																									', '1117829700', 'madihah@twincontinent.my', NULL, '2019-08-15', NULL, NULL),
(189, 'madihah hannani', '173285', '		hai																										', '01117829700', 'madihahhashim99@gmail.com', NULL, '2019-08-21', NULL, NULL),
(190, '', '589257', '		gsdgsagdagasihdsaudsiada																										', '1117829700', '', NULL, '2019-08-29', NULL, NULL),
(191, 'madihah hannani', '115759', '				haiiiiiiiiiiiiiiiiiiiiiiiiii																								', '1117829700', 'madihah@twincontinent.my', NULL, '2019-06-06', NULL, NULL),
(192, '', '837963', '	haiiiiiiiiii																											', '01117829700', '', NULL, NULL, NULL, NULL),
(193, '', '574974', '	haiiiiiiii																											', '01117829700', '', NULL, NULL, NULL, NULL),
(194, '', '704264', '		haiiiiiii hallo																										', '87845611123', 'madihah@twincontinent.my', NULL, NULL, NULL, NULL),
(195, '', '330657', 'hallloooooo																												', '58974487544', 'madihah@twincontinent.my', NULL, NULL, NULL, NULL),
(196, '', '209584', '	haiiiii wassup																											', '88226845561', 'madihah@twincontinent.my', NULL, NULL, NULL, NULL),
(197, '', '108774', 'hello disana																												', '1117829700', 'madihahhashim99@gmail.com', NULL, NULL, NULL, NULL),
(198, '', '419416', 'hello laparrrrrrrrrrr																												', '1117829700', 'madihah@twincontinent.my', NULL, NULL, NULL, NULL),
(199, 'madihah hannani', '267824', 'lapar nyerrr																												', '1117829700', 'madihah@twincontinent.my', NULL, NULL, NULL, NULL),
(200, 'madihah hannani', '542934', '	ngantukkkkkk																											', '1117829700', 'madihah@twincontinent.my', NULL, NULL, NULL, NULL),
(201, 'madihah hannani', '414317', '	ngantuk 																											', '1117829700', 'madihah@twincontinent.my', NULL, '0000-00-00', NULL, NULL),
(202, 'madihah hannani', '108775', '	dgdsgdgdg  sfsafas																											', '1117829700', 'madihah@twincontinent.my', NULL, '0000-00-00', NULL, NULL),
(203, 'madihah hannani', '165561', 'ghfddfhdfh																												', '1117829700', 'madihah@twincontinent.my', NULL, '2019-08-16', NULL, NULL),
(204, 'madihah hannani', '939542', 'hello					', '1117829700', 'madihah@twincontinent.my', NULL, '2019-08-24', NULL, NULL),
(205, 'madihah hannani', '950366', 'ngaktukkkkk																												', '1117829700', 'madihah@twincontinent.my', NULL, '2019-08-17', NULL, NULL),
(206, 'madihah hannani', '439278', '			vzvsdfsfasdas																									', '1117829700', 'madihah@twincontinent.my', NULL, '2019-08-05', NULL, NULL),
(207, 'madihah hannani', '155637', '				fgdgdfhrhdr																								', '1117829700', 'madihahhashim99@gmail.com', NULL, '2019-08-16', NULL, NULL),
(208, 'madihah hannani', '652890', '	hello																											', '1117829700', 'madihah@twincontinent.my', NULL, '2019-08-16', NULL, NULL),
(209, 'madihah hannani', '107402', '				haiiii																								', '1117829700', 'madihahhashim99@gmail.com', NULL, '2019-08-14', NULL, NULL),
(210, 'madihah hannani', '944447', 'hgsghghiriiojjeijtieteijrje																												', '1117829700', 'madihahhashim99@gmail.com', NULL, '2019-08-21', NULL, NULL),
(211, 'madihah hannani', '221416', '					dssafsafs																							', '1117829700', 'madihahhashim99@gmail.com', NULL, '2019-08-17', NULL, NULL),
(212, 'madihah hannani', '598762', '		haiiiii																										', '1117829700', 'madihahhashim99@gmail.com', NULL, '2019-08-23', NULL, NULL),
(213, 'madihah hannani', '814027', '						FGFFMHGJGJJHJ																						', '1117829700', 'madihahhashim99@gmail.com', NULL, '2019-08-16', NULL, NULL),
(214, 'madihah hannani', '517259', '			hello																									', '1117829700', 'madihahhashim99@gmail.com', NULL, '2019-08-09', NULL, NULL),
(215, 'madihah hannani', '704893', '					hello																							', '1117829700', 'madihahhashim99@gmail.com', NULL, '2019-08-08', NULL, NULL),
(216, 'madihah hannani', '777897', '					hallo																							', '01117829700', 'madihah@twincontinent.my', 23, '2019-08-30', NULL, NULL),
(217, 'madihah hannani', '746308', '					jbjjggguugu																							', '1117829700', 'madihahhashim99@gmail.com', 23, '2019-08-15', NULL, NULL),
(218, 'madihah hannani', '134504', '			haiiii																									', '1117829700', 'madihah@twincontinent.my', 12, '2019-08-23', NULL, NULL),
(219, 'madihah hannani', '538262', '																						safsafadgad						', '1117829700', 'madihahhashim99@gmail.com', 11, '2019-08-23', NULL, NULL),
(220, 'madihah hannani', '434646', '					djfsdfdshfdshkg																							', '1117829700', 'madihahhashim99@gmail.com', 12, '2019-08-30', NULL, NULL),
(221, 'madihah hannani', '853209', '			vsdfgsdgsfgsf																									', '1117829700', 'madihahhashim99@gmail.com', 11, '2019-08-29', NULL, NULL),
(222, 'madihah hannani', '403652', '						dfdsgsdgsfg																						', '1117829700', 'madihah@twincontinent.my', 11, '2019-08-30', NULL, NULL),
(223, 'haziq', '974505', 'haiiii																										', '84551321215', 'haziq@twincontinent.my', 11, '2019-08-30', NULL, NULL),
(224, 'ain', '436831', 'hello																												', '1117829700', 'ain@twincontinent.my', 34, '2019-08-23', NULL, NULL),
(225, 'ain', '347274', '			sddsfsdgfhd																									', '34545457874', 'ainvauxh@gmail.com', 12, '2019-08-29', NULL, NULL),
(226, 'madihah hannani', '589907', '			haiiii																									', '1117829700', 'madihahhashim99@gmail.com', 11, '2019-08-23', NULL, NULL),
(227, 'madihah hannani', '138046', 'hello																												', '1117829700', 'madihahhashim99@gmail.com', 11, '2019-08-23', NULL, NULL),
(228, 'madihah hannani', '667126', '		haiiii																										', '1117829700', 'madihahhashim99@gmail.com', 11, '2019-08-30', NULL, NULL),
(229, 'madihah hannani', '272631', '	hello																											', '1117829700', 'madihahhashim99@gmail.com', 34, '2019-08-30', NULL, NULL),
(230, 'ain busuk', '319112', '	hello																											', '456455686', 'ainvauxh@gmail.com', 32, '2019-08-30', NULL, NULL),
(231, 'ain busuk', '388267', 'hi																												', '01212112122', 'madihahhashim99@gmail.com', 1212, '2020-04-23', NULL, NULL),
(232, 'madihah busuk', '208642', 'hi																												', '01212121212', 'madihahhashim99@gmail.com', 12121, '2020-04-23', NULL, NULL),
(233, 'madihah busuk', '702687', 'hi																												', '01212121212', 'madihahhashim99@gmail.com', 12121, '2020-04-23', NULL, NULL),
(237, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(238, 'madihah hannani', '267845', '			hello																									', '1117829700', 'madihahhashim99@gmail.com', 11, '2019-08-15', NULL, NULL),
(239, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(240, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(241, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(242, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(243, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(244, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(245, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(246, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(247, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(248, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(249, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(251, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(252, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(253, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(254, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(255, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(256, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(257, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(258, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(259, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(260, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(262, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(263, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(264, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(265, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(266, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(267, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(268, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(269, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(270, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(271, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(272, 'madihah hannani', '486390', '	hello																											', '1117829700', 'madihahhashim99@gmail.com', 11, '2019-08-30', NULL, NULL),
(273, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(274, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(275, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(276, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(277, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(278, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(279, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(280, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(281, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(282, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(283, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(284, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(285, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(286, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(287, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(288, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(289, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(290, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(291, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(292, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(293, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(294, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(295, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(296, 'madihah hannani', '430418', '		hwi																										', '01117829700', 'madihahhashim99@gmail.com', 23, '2019-08-07', NULL, NULL),
(297, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(298, 'madihah hannani', '402748', '	hei																											', '1117829700', 'madihahhashim99@gmail.com', 11, '2019-08-04', NULL, NULL),
(299, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(300, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(301, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(302, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(303, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(304, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(305, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(306, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(307, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(308, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`actionid`),
  ADD KEY `FK_actions_ticket` (`custid`),
  ADD KEY `FK_actions_staff` (`staffid`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`helpid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffid`),
  ADD KEY `FK_staff_status` (`status_stid`);

--
-- Indexes for table `staffstatus`
--
ALTER TABLE `staffstatus`
  ADD PRIMARY KEY (`stid`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`custid`),
  ADD KEY `FK_ticket_help` (`helpid`),
  ADD KEY `FK_ticket_staff` (`staffid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actions`
--
ALTER TABLE `actions`
  MODIFY `actionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `helpid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staffstatus`
--
ALTER TABLE `staffstatus`
  MODIFY `stid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `custid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actions`
--
ALTER TABLE `actions`
  ADD CONSTRAINT `FK_actions_staff` FOREIGN KEY (`staffid`) REFERENCES `staff` (`staffid`),
  ADD CONSTRAINT `FK_actions_ticket` FOREIGN KEY (`custid`) REFERENCES `ticket` (`custid`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `FK_staff_status` FOREIGN KEY (`status_stid`) REFERENCES `staffstatus` (`stid`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `FK_ticket_help` FOREIGN KEY (`helpid`) REFERENCES `help` (`helpid`),
  ADD CONSTRAINT `FK_ticket_staff` FOREIGN KEY (`staffid`) REFERENCES `staff` (`staffid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
