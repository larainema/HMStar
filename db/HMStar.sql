-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-08-29 18:27:51
-- 服务器版本： 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmstar`
--
CREATE DATABASE IF NOT EXISTS `hmstar` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `hmstar`;

-- --------------------------------------------------------

--
-- 表的结构 `hmstar_captcha`
--

DROP TABLE IF EXISTS `hmstar_captcha`;
CREATE TABLE IF NOT EXISTS `hmstar_captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `word` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=389 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hmstar_captcha`
--

INSERT INTO `hmstar_captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(26, 1440598781, '127.0.0.1', 'e1Yf'),
(27, 1440598852, '127.0.0.1', 'M8Pu'),
(28, 1440598876, '127.0.0.1', 'rn5u'),
(29, 1440598879, '127.0.0.1', 'cJGL'),
(30, 1440598883, '127.0.0.1', 'oH13'),
(31, 1440598962, '127.0.0.1', 'McQ0'),
(32, 1440599141, '127.0.0.1', 'pas5'),
(33, 1440599152, '127.0.0.1', 'w4TR'),
(34, 1440599154, '127.0.0.1', '1XMv'),
(35, 1440599157, '127.0.0.1', '5GGG'),
(36, 1440602607, '127.0.0.1', '7xWW'),
(37, 1440602699, '127.0.0.1', 'Iva4'),
(38, 1440602732, '127.0.0.1', 'QjaT'),
(39, 1440602733, '127.0.0.1', 'n0n5'),
(40, 1440602735, '127.0.0.1', 'vWaA'),
(41, 1440602737, '127.0.0.1', 'wJK5'),
(42, 1440602922, '127.0.0.1', 'LNOT'),
(43, 1440602945, '127.0.0.1', 'YClO'),
(44, 1440602965, '127.0.0.1', 'e4QU'),
(45, 1440602982, '127.0.0.1', '5whK'),
(46, 1440603006, '127.0.0.1', '6usl'),
(47, 1440603025, '127.0.0.1', '83j9'),
(48, 1440603031, '127.0.0.1', '3Izd'),
(49, 1440603032, '127.0.0.1', 'Lopm'),
(50, 1440603033, '127.0.0.1', 'YvtA'),
(51, 1440603145, '127.0.0.1', '4OEF'),
(52, 1440603208, '127.0.0.1', '5sqa'),
(53, 1440603852, '127.0.0.1', '6dQx'),
(54, 1440603884, '127.0.0.1', '1MCI'),
(55, 1440605745, '127.0.0.1', 'k93L'),
(56, 1440605758, '127.0.0.1', 'v47G'),
(57, 1440605798, '127.0.0.1', 'gFsl'),
(58, 1440605823, '127.0.0.1', 'CPFN'),
(59, 1440605835, '127.0.0.1', 'zE27'),
(60, 1440606053, '127.0.0.1', 'g14N'),
(61, 1440606070, '127.0.0.1', 'qSp9'),
(62, 1440606531, '127.0.0.1', 'Lewi'),
(63, 1440606552, '127.0.0.1', 'xOQD'),
(64, 1440606556, '127.0.0.1', 'eZIm'),
(65, 1440606590, '127.0.0.1', 'Qfsm'),
(66, 1440606592, '127.0.0.1', 'PbAt'),
(67, 1440606628, '127.0.0.1', 'njFy'),
(68, 1440606632, '127.0.0.1', 'mtnM'),
(69, 1440607332, '127.0.0.1', 'c3pA'),
(70, 1440607352, '127.0.0.1', 'BrZK'),
(71, 1440607370, '127.0.0.1', 'YAn4'),
(72, 1440607865, '127.0.0.1', 'eZCM'),
(73, 1440607891, '127.0.0.1', 'LDbf'),
(74, 1440608070, '127.0.0.1', 'yfRO'),
(75, 1440608102, '127.0.0.1', 'biG2'),
(76, 1440608158, '127.0.0.1', 'NUtn'),
(77, 1440608168, '127.0.0.1', '4H66'),
(78, 1440608491, '127.0.0.1', 'jJ7C'),
(79, 1440608495, '127.0.0.1', 'fsxK'),
(80, 1440608516, '127.0.0.1', 'Te5g'),
(81, 1440608521, '127.0.0.1', 'kc55'),
(82, 1440608537, '127.0.0.1', 'pQRy'),
(83, 1440608541, '127.0.0.1', 'UsWi'),
(84, 1440609171, '127.0.0.1', 'Yis3'),
(85, 1440611539, '127.0.0.1', 'xroi'),
(86, 1440611561, '127.0.0.1', 'I2aD'),
(87, 1440611787, '127.0.0.1', 'EBP8'),
(88, 1440611791, '127.0.0.1', 'xi2d'),
(89, 1440611794, '127.0.0.1', 'YqW7'),
(90, 1440611904, '127.0.0.1', 'rgXJ'),
(91, 1440611911, '127.0.0.1', '76Kq'),
(92, 1440611915, '127.0.0.1', 'zV7Z'),
(93, 1440611917, '127.0.0.1', '5pd4'),
(94, 1440611939, '127.0.0.1', 'uPuS'),
(95, 1440611953, '127.0.0.1', '1O07'),
(96, 1440611957, '127.0.0.1', 'mGPk'),
(97, 1440612075, '127.0.0.1', 'bcWV'),
(98, 1440612094, '127.0.0.1', 'fZMj'),
(99, 1440612097, '127.0.0.1', 'hTKv'),
(100, 1440642441, '127.0.0.1', 'LmJv'),
(101, 1440642467, '127.0.0.1', 'Zuu7'),
(102, 1440642682, '127.0.0.1', 'KaWS'),
(103, 1440642709, '127.0.0.1', 'CSLr'),
(104, 1440642723, '127.0.0.1', 'Vnfn'),
(105, 1440644741, '127.0.0.1', 'hfhy'),
(106, 1440644985, '127.0.0.1', 's7jP'),
(107, 1440645337, '127.0.0.1', '0tti'),
(108, 1440660327, '127.0.0.1', 'UCBM'),
(109, 1440660501, '127.0.0.1', '7h4o'),
(110, 1440661282, '127.0.0.1', 'uLme'),
(111, 1440661438, '127.0.0.1', 'qON8'),
(112, 1440661441, '127.0.0.1', 'q7fk'),
(113, 1440661511, '127.0.0.1', 'VtyF'),
(114, 1440661567, '127.0.0.1', 'Sofz'),
(115, 1440662914, '127.0.0.1', '4jCG'),
(116, 1440663267, '127.0.0.1', 'sbfB'),
(117, 1440663423, '127.0.0.1', 'pANO'),
(118, 1440663500, '127.0.0.1', 'j9qF'),
(119, 1440663533, '127.0.0.1', 'UORB'),
(120, 1440663740, '127.0.0.1', 'M0rM'),
(121, 1440663836, '127.0.0.1', 'GycZ'),
(122, 1440663899, '127.0.0.1', 'Xo62'),
(123, 1440665489, '127.0.0.1', 'KGLA'),
(124, 1440665753, '127.0.0.1', '9aAV'),
(125, 1440666298, '127.0.0.1', 'Mril'),
(126, 1440669031, '127.0.0.1', '7p4u'),
(127, 1440669102, '127.0.0.1', 'Ci8S'),
(128, 1440669176, '127.0.0.1', 'iUdp'),
(129, 1440669437, '127.0.0.1', 'zHsM'),
(130, 1440669610, '127.0.0.1', '8yUE'),
(131, 1440669616, '127.0.0.1', 'iwyh'),
(132, 1440670089, '127.0.0.1', 'BM2Z'),
(133, 1440670172, '127.0.0.1', 'WpiC'),
(134, 1440670342, '127.0.0.1', '1KGU'),
(135, 1440670346, '127.0.0.1', 'ItwD'),
(136, 1440670376, '127.0.0.1', '1J31'),
(137, 1440670483, '127.0.0.1', 'bTTV'),
(138, 1440670519, '127.0.0.1', 'UsS3'),
(139, 1440670621, '127.0.0.1', 'cVeh'),
(140, 1440670907, '127.0.0.1', 'JupK'),
(141, 1440672427, '127.0.0.1', 'cp9P'),
(142, 1440672691, '127.0.0.1', '4DRN'),
(143, 1440672698, '127.0.0.1', 'TB2o'),
(144, 1440672702, '127.0.0.1', '7mmY'),
(145, 1440672782, '127.0.0.1', 'W54j'),
(146, 1440672786, '127.0.0.1', 'wPJ6'),
(147, 1440672814, '127.0.0.1', 'XDoC'),
(148, 1440672989, '127.0.0.1', 'bQLi'),
(149, 1440672992, '127.0.0.1', 'XNt2'),
(150, 1440672995, '127.0.0.1', 'oqOf'),
(151, 1440674213, '127.0.0.1', 'QRrr'),
(152, 1440674484, '127.0.0.1', 'AGFP'),
(153, 1440674486, '127.0.0.1', 'Nk4I'),
(154, 1440674676, '127.0.0.1', 'Iz39'),
(155, 1440674686, '127.0.0.1', 'GmOO'),
(156, 1440674689, '127.0.0.1', 'mPzB'),
(157, 1440674756, '127.0.0.1', '3UEs'),
(158, 1440674766, '127.0.0.1', 'nnRY'),
(159, 1440674856, '127.0.0.1', 'AFPr'),
(160, 1440674871, '127.0.0.1', 'hpff'),
(161, 1440674874, '127.0.0.1', 'LHf1'),
(162, 1440674917, '127.0.0.1', 'ykrS'),
(163, 1440674920, '127.0.0.1', 'CMqS'),
(164, 1440675488, '127.0.0.1', 'EWZn'),
(165, 1440675576, '127.0.0.1', '9OYo'),
(166, 1440675898, '127.0.0.1', 'H2ES'),
(167, 1440675962, '127.0.0.1', '6rQ9'),
(168, 1440676056, '127.0.0.1', 'LtiQ'),
(169, 1440685736, '127.0.0.1', '7qnR'),
(170, 1440685842, '127.0.0.1', 'Jd0u'),
(171, 1440685943, '127.0.0.1', 'FFct'),
(172, 1440686017, '127.0.0.1', 'eXBT'),
(173, 1440686025, '127.0.0.1', '6xPk'),
(174, 1440686032, '127.0.0.1', 'fi0l'),
(175, 1440686139, '127.0.0.1', 'wyJM'),
(176, 1440686242, '127.0.0.1', 'bpvr'),
(177, 1440686323, '127.0.0.1', '4Gvh'),
(178, 1440686367, '127.0.0.1', 's6yO'),
(179, 1440686418, '127.0.0.1', 'yle8'),
(180, 1440686431, '127.0.0.1', 'o2Hv'),
(181, 1440686504, '127.0.0.1', 'bKIp'),
(182, 1440686982, '127.0.0.1', 'ugDh'),
(183, 1440687265, '127.0.0.1', 'NfSF'),
(184, 1440687489, '127.0.0.1', 'Q4ks'),
(185, 1440687495, '127.0.0.1', '3oUL'),
(186, 1440687502, '127.0.0.1', 'N4Lc'),
(187, 1440687547, '127.0.0.1', '9PJv'),
(188, 1440687551, '127.0.0.1', 'dW5B'),
(189, 1440687604, '127.0.0.1', '26X5'),
(190, 1440687607, '127.0.0.1', '8cqI'),
(191, 1440687617, '127.0.0.1', 'Qveh'),
(192, 1440687711, '127.0.0.1', 'dl76'),
(193, 1440687817, '127.0.0.1', '6YBr'),
(194, 1440688583, '127.0.0.1', 'Fny8'),
(195, 1440688773, '127.0.0.1', 'Vb2F'),
(196, 1440689179, '127.0.0.1', 'GZDr'),
(197, 1440689212, '127.0.0.1', 'Sh1f'),
(198, 1440689530, '127.0.0.1', '1itS'),
(199, 1440689543, '127.0.0.1', 'pRqZ'),
(200, 1440689546, '127.0.0.1', 'mToq'),
(201, 1440689773, '127.0.0.1', 'pord'),
(202, 1440689884, '127.0.0.1', 'I9xV'),
(203, 1440690094, '127.0.0.1', 'EJyF'),
(204, 1440690224, '127.0.0.1', 'fhXu'),
(205, 1440690513, '127.0.0.1', 'uuIP'),
(206, 1440693928, '127.0.0.1', 'RsxP'),
(207, 1440694012, '127.0.0.1', 'bTqI'),
(208, 1440694289, '127.0.0.1', 'gnow'),
(209, 1440694506, '127.0.0.1', '6scJ'),
(210, 1440694509, '127.0.0.1', 'aR6r'),
(211, 1440694906, '127.0.0.1', 'ocLN'),
(212, 1440695612, '127.0.0.1', 'H0tB'),
(213, 1440695685, '127.0.0.1', 'esOc'),
(214, 1440695758, '127.0.0.1', 'fYKu'),
(215, 1440695760, '127.0.0.1', '7Xcf'),
(216, 1440695777, '127.0.0.1', 'ErSg'),
(217, 1440695780, '127.0.0.1', '1vl3'),
(218, 1440695797, '127.0.0.1', 'GRxk'),
(219, 1440695871, '127.0.0.1', 'gub3'),
(220, 1440696160, '127.0.0.1', 'iY5H'),
(221, 1440696167, '127.0.0.1', 'ER6o'),
(222, 1440696171, '127.0.0.1', 'kd4u'),
(223, 1440696207, '127.0.0.1', 'qCpQ'),
(224, 1440696211, '127.0.0.1', 'XhfA'),
(225, 1440696213, '127.0.0.1', 'Hu9c'),
(226, 1440696220, '127.0.0.1', 'MZJx'),
(227, 1440696259, '127.0.0.1', 'WJaW'),
(228, 1440696278, '127.0.0.1', '6sb3'),
(229, 1440696303, '127.0.0.1', '5TBy'),
(230, 1440696410, '127.0.0.1', 'fR4R'),
(231, 1440696642, '127.0.0.1', 'e3D6'),
(232, 1440696655, '127.0.0.1', '0QGP'),
(233, 1440696660, '127.0.0.1', 'v7fS'),
(234, 1440696683, '127.0.0.1', 'ZXD3'),
(235, 1440696735, '127.0.0.1', 'SCGT'),
(236, 1440696866, '127.0.0.1', '2uJ9'),
(237, 1440696871, '127.0.0.1', 'GJ8J'),
(238, 1440697336, '127.0.0.1', 'WbiR'),
(239, 1440697351, '127.0.0.1', 'HTAR'),
(240, 1440697355, '127.0.0.1', '6fOJ'),
(241, 1440697393, '127.0.0.1', '2cSB'),
(242, 1440701611, '127.0.0.1', 'EjNN'),
(243, 1440701893, '127.0.0.1', 'HJqq'),
(244, 1440701916, '127.0.0.1', '228N'),
(245, 1440702073, '127.0.0.1', 'OXIm'),
(246, 1440702224, '127.0.0.1', '42QB'),
(247, 1440702628, '127.0.0.1', 'vkjW'),
(248, 1440702829, '127.0.0.1', 'aGpM'),
(249, 1440703104, '127.0.0.1', 'CXyP'),
(250, 1440703137, '127.0.0.1', 'lj3q'),
(251, 1440703301, '127.0.0.1', '7R6Y'),
(252, 1440703402, '127.0.0.1', 'DAi3'),
(253, 1440703768, '127.0.0.1', 'JVve'),
(254, 1440703770, '127.0.0.1', 'soFz'),
(255, 1440703829, '127.0.0.1', '5s77'),
(256, 1440747315, '127.0.0.1', 'l5Fd'),
(257, 1440747399, '127.0.0.1', 'z1P2'),
(258, 1440747966, '127.0.0.1', '4TdP'),
(259, 1440747997, '127.0.0.1', 'hsAu'),
(260, 1440748000, '127.0.0.1', 'iyLa'),
(261, 1440748039, '127.0.0.1', 'VJs1'),
(262, 1440748191, '127.0.0.1', '16PZ'),
(263, 1440748255, '127.0.0.1', 'BDtC'),
(264, 1440748443, '127.0.0.1', '0EAH'),
(265, 1440748494, '127.0.0.1', 'sFuv'),
(266, 1440748567, '127.0.0.1', '2HhL'),
(267, 1440748577, '127.0.0.1', 'NKeP'),
(268, 1440748635, '127.0.0.1', '5HCC'),
(269, 1440750238, '127.0.0.1', '3SLu'),
(270, 1440750248, '127.0.0.1', '5Q8Z'),
(271, 1440750319, '127.0.0.1', '6UBX'),
(272, 1440750399, '127.0.0.1', 'jhrL'),
(273, 1440750590, '127.0.0.1', 'ST5s'),
(274, 1440750617, '127.0.0.1', 'rF6m'),
(275, 1440750705, '127.0.0.1', '2MiX'),
(276, 1440750816, '127.0.0.1', 'oVM9'),
(277, 1440750841, '127.0.0.1', '07Ml'),
(278, 1440750980, '127.0.0.1', 'yvtq'),
(279, 1440751005, '127.0.0.1', 'XJv9'),
(280, 1440751058, '127.0.0.1', '32sE'),
(281, 1440751139, '127.0.0.1', 'HhOH'),
(282, 1440753604, '127.0.0.1', 'XhzZ'),
(283, 1440753650, '127.0.0.1', '7WLD'),
(284, 1440753809, '127.0.0.1', '28sY'),
(285, 1440753977, '127.0.0.1', 'hj4e'),
(286, 1440754060, '127.0.0.1', 'rIlY'),
(287, 1440754611, '127.0.0.1', '2ECl'),
(288, 1440754619, '127.0.0.1', '5bAk'),
(289, 1440754623, '127.0.0.1', 'QrRz'),
(290, 1440754631, '127.0.0.1', 'HY0h'),
(291, 1440754634, '127.0.0.1', 'lcbm'),
(292, 1440754684, '127.0.0.1', 'inH4'),
(293, 1440754748, '127.0.0.1', 'l2pO'),
(294, 1440754835, '127.0.0.1', 'Szl3'),
(295, 1440776910, '127.0.0.1', 'I4mB'),
(296, 1440776948, '127.0.0.1', 'ZEHi'),
(297, 1440776970, '127.0.0.1', 'AnQp'),
(298, 1440777062, '127.0.0.1', 'yNoO'),
(299, 1440777228, '127.0.0.1', 'KIcS'),
(300, 1440777483, '127.0.0.1', '282X'),
(301, 1440777709, '127.0.0.1', '7MHO'),
(302, 1440777729, '127.0.0.1', 'Xx3q'),
(303, 1440777732, '127.0.0.1', 'pkiC'),
(304, 1440777734, '127.0.0.1', 'EbdI'),
(305, 1440777744, '127.0.0.1', 'lUUM'),
(306, 1440777924, '127.0.0.1', 'wmVy'),
(307, 1440778004, '127.0.0.1', 'y6H3'),
(308, 1440778232, '127.0.0.1', '81Il'),
(309, 1440778243, '127.0.0.1', 'KqfH'),
(310, 1440778285, '127.0.0.1', 'YDhX'),
(311, 1440778388, '127.0.0.1', 'sLQY'),
(312, 1440778544, '127.0.0.1', 'ymgU'),
(313, 1440778805, '127.0.0.1', 'Rs7s'),
(314, 1440779013, '127.0.0.1', 'Fmnz'),
(315, 1440779127, '127.0.0.1', 'QAJ6'),
(316, 1440779348, '127.0.0.1', 'pIwi'),
(317, 1440779468, '127.0.0.1', 'ZwEz'),
(318, 1440779586, '127.0.0.1', 'HK9u'),
(319, 1440779921, '127.0.0.1', 'TpUx'),
(320, 1440779933, '127.0.0.1', 'liqo'),
(321, 1440779964, '127.0.0.1', '5o3i'),
(322, 1440780079, '127.0.0.1', '4cgq'),
(323, 1440780178, '127.0.0.1', '586B'),
(324, 1440780182, '127.0.0.1', 'jd6k'),
(325, 1440780264, '127.0.0.1', '8LKY'),
(326, 1440780305, '127.0.0.1', 'kSQF'),
(327, 1440780347, '127.0.0.1', 'CuY4'),
(328, 1440780481, '127.0.0.1', 'O2RX'),
(329, 1440780517, '127.0.0.1', 'YQP7'),
(330, 1440780615, '127.0.0.1', '39wA'),
(331, 1440780620, '127.0.0.1', 'e2nA'),
(332, 1440780622, '127.0.0.1', 'jNUJ'),
(333, 1440780623, '127.0.0.1', 'qE2f'),
(334, 1440780625, '127.0.0.1', 'dHNm'),
(335, 1440780626, '127.0.0.1', 'zM95'),
(336, 1440780627, '127.0.0.1', 'jPiC'),
(337, 1440781668, '127.0.0.1', 'HHck'),
(338, 1440781900, '127.0.0.1', '3R4N'),
(339, 1440781980, '127.0.0.1', '7B2H'),
(340, 1440781990, '127.0.0.1', 'ueH2'),
(341, 1440782026, '127.0.0.1', 'nCgN'),
(342, 1440782267, '127.0.0.1', 'lZx4'),
(343, 1440782275, '127.0.0.1', 'eELV'),
(344, 1440782597, '127.0.0.1', 'kOPd'),
(345, 1440782890, '127.0.0.1', 'CFYW'),
(346, 1440783395, '127.0.0.1', 'UKza'),
(347, 1440783486, '127.0.0.1', 'OhQ8'),
(348, 1440783495, '127.0.0.1', 'XDE9'),
(349, 1440783521, '127.0.0.1', 'oiDR'),
(350, 1440783637, '127.0.0.1', 'WuV2'),
(351, 1440784025, '127.0.0.1', 'XX9W'),
(352, 1440784056, '127.0.0.1', '0yqy'),
(353, 1440784073, '127.0.0.1', '5SEp'),
(354, 1440784076, '127.0.0.1', 'VDyo'),
(355, 1440784135, '127.0.0.1', '8LFE'),
(356, 1440860755, '127.0.0.1', 'cWra'),
(357, 1440861057, '127.0.0.1', 'mVOs'),
(358, 1440861061, '127.0.0.1', 'CfeF'),
(359, 1440861357, '127.0.0.1', 'hM7R'),
(360, 1440861435, '127.0.0.1', '3EUt'),
(361, 1440861438, '127.0.0.1', 'AjH8'),
(362, 1440861527, '127.0.0.1', 'tFmo'),
(363, 1440861529, '127.0.0.1', 'nYDt'),
(364, 1440861667, '127.0.0.1', 'gs9W'),
(365, 1440862350, '127.0.0.1', 'l188'),
(366, 1440862496, '127.0.0.1', 'U3Vt'),
(367, 1440862728, '127.0.0.1', 't1qh'),
(368, 1440862744, '127.0.0.1', 'Jm3N'),
(369, 1440862746, '127.0.0.1', '9al6'),
(370, 1440862927, '127.0.0.1', '3Df7'),
(371, 1440862935, '127.0.0.1', 'D3IJ'),
(372, 1440863026, '127.0.0.1', 'K1WO'),
(373, 1440863038, '127.0.0.1', 'w4Fj'),
(374, 1440863174, '127.0.0.1', 'u89S'),
(375, 1440863401, '127.0.0.1', '6Sbk'),
(376, 1440863621, '127.0.0.1', 'J749'),
(377, 1440863623, '127.0.0.1', '9uVO'),
(378, 1440864056, '127.0.0.1', 'bsdc'),
(379, 1440864087, '127.0.0.1', '1fCb'),
(380, 1440864437, '127.0.0.1', '4BWy'),
(381, 1440864446, '127.0.0.1', 'wEiJ'),
(382, 1440864923, '127.0.0.1', '6ZpM'),
(383, 1440864926, '127.0.0.1', 'fSdm'),
(384, 1440865091, '127.0.0.1', '4mpc'),
(385, 1440865095, '127.0.0.1', '4tUn'),
(386, 1440865138, '127.0.0.1', 'Be0s'),
(387, 1440865240, '127.0.0.1', 'rpM1'),
(388, 1440865247, '127.0.0.1', 'Z5CT');

-- --------------------------------------------------------

--
-- 表的结构 `hmstar_collaborate`
--

DROP TABLE IF EXISTS `hmstar_collaborate`;
CREATE TABLE IF NOT EXISTS `hmstar_collaborate` (
  `collaborateId` int(11) NOT NULL,
  `collaborateName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hmstar_collaborate`
--

INSERT INTO `hmstar_collaborate` (`collaborateId`, `collaborateName`) VALUES
(1, '融资'),
(2, '企业培训'),
(3, '法律咨询');

-- --------------------------------------------------------

--
-- 表的结构 `hmstar_deep`
--

DROP TABLE IF EXISTS `hmstar_deep`;
CREATE TABLE IF NOT EXISTS `hmstar_deep` (
  `deepId` int(11) NOT NULL,
  `deepTitle` varchar(16) NOT NULL,
  `deepContent` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hmstar_deep`
--

INSERT INTO `hmstar_deep` (`deepId`, `deepTitle`, `deepContent`) VALUES
(1, '深度评论', '深度评论内容');

-- --------------------------------------------------------

--
-- 表的结构 `hmstar_group`
--

DROP TABLE IF EXISTS `hmstar_group`;
CREATE TABLE IF NOT EXISTS `hmstar_group` (
  `groupId` int(11) NOT NULL,
  `groupName` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `hmstar_movie_category`
--

DROP TABLE IF EXISTS `hmstar_movie_category`;
CREATE TABLE IF NOT EXISTS `hmstar_movie_category` (
  `industryId` int(11) NOT NULL,
  `industryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hmstar_movie_category`
--

INSERT INTO `hmstar_movie_category` (`industryId`, `industryName`) VALUES
(1, '电子商务'),
(2, '移动互联网'),
(3, 'O2O模式'),
(4, '网络广告'),
(5, '社交网络'),
(6, '在线金融'),
(7, '在线旅游'),
(8, '生活服务'),
(9, '教育培训'),
(10, '智能硬件'),
(11, '医疗健康'),
(12, '网络媒体'),
(13, '文化艺术'),
(14, '游戏动漫'),
(15, '能源环保'),
(16, '特色餐饮'),
(17, '新农业'),
(18, '其他');

-- --------------------------------------------------------

--
-- 表的结构 `hmstar_project`
--

DROP TABLE IF EXISTS `hmstar_project`;
CREATE TABLE IF NOT EXISTS `hmstar_project` (
  `projectId` int(11) NOT NULL,
  `projectName` varchar(16) NOT NULL,
  `projectVideo` varchar(255) DEFAULT NULL,
  `projectDescription` mediumtext,
  `projectManagement` mediumtext,
  `projectVideoCategory` int(11) DEFAULT NULL,
  `projectMoveCategory` int(11) DEFAULT NULL,
  `projectCategory` int(11) DEFAULT NULL,
  `projectCreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `projectStatus` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hmstar_project`
--

INSERT INTO `hmstar_project` (`projectId`, `projectName`, `projectVideo`, `projectDescription`, `projectManagement`, `projectVideoCategory`, `projectMoveCategory`, `projectCategory`, `projectCreateTime`, `projectStatus`) VALUES
(1, 'hmstar', 'hmstar', 'hmstar', 'hmstar', 1, 1, 1, '2015-08-28 20:09:58', 0),
(2, 'hmstar1', 'hmstar1', 'hmstar1', 'hmstar1', 1, 1, 1, '2015-08-28 20:09:58', 0),
(3, 'hmstar2', 'hmstar2', 'hmstar2', 'hmstar2', 2, 2, 2, '2015-08-28 20:09:58', 0),
(4, 'Fineck脖适 职能项链', NULL, '项目介绍', 'CEO', 5, 11, 11, '2015-08-29 23:10:21', 0);

-- --------------------------------------------------------

--
-- 表的结构 `hmstar_project_category`
--

DROP TABLE IF EXISTS `hmstar_project_category`;
CREATE TABLE IF NOT EXISTS `hmstar_project_category` (
  `projectCategoryId` int(11) NOT NULL,
  `projectCategoryName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hmstar_project_category`
--

INSERT INTO `hmstar_project_category` (`projectCategoryId`, `projectCategoryName`) VALUES
(1, '生活健康'),
(2, '原创设计'),
(3, '影视'),
(4, '互联网'),
(5, '游戏'),
(6, '智能穿戴'),
(7, '数码产品'),
(8, '音乐'),
(9, '旅游'),
(10, '汽车'),
(11, '智能家电'),
(12, '家居良品'),
(13, '文化'),
(14, '时尚'),
(15, '公益'),
(16, '母婴用品'),
(17, '体育户外'),
(18, '出版'),
(19, '工艺品'),
(20, '其他');

-- --------------------------------------------------------

--
-- 表的结构 `hmstar_review`
--

DROP TABLE IF EXISTS `hmstar_review`;
CREATE TABLE IF NOT EXISTS `hmstar_review` (
  `reviewId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `projectId` int(11) NOT NULL,
  `reviewContent` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `hmstar_user`
--

DROP TABLE IF EXISTS `hmstar_user`;
CREATE TABLE IF NOT EXISTS `hmstar_user` (
  `userId` int(11) NOT NULL,
  `userName` varchar(16) NOT NULL,
  `userMobile` varchar(11) DEFAULT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userPassword` varchar(172) NOT NULL,
  `userCreateTime` datetime DEFAULT CURRENT_TIMESTAMP,
  `groupId` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hmstar_user`
--

INSERT INTO `hmstar_user` (`userId`, `userName`, `userMobile`, `userEmail`, `userPassword`, `userCreateTime`, `groupId`) VALUES
(5, '18610023880', '18610023880', 'test@test', '7d1c5b36bdc5b68d2cb4b0bce4949cd641b92cdeb4392f365c7c7273329eaa2a33f6789ba58a3472ab528f353c5fd46ae127334e334c08444f89879b3bda4f2faJ1BUuiwnkNURNhbDPaIXHUoLzT5PHNc1vAv3LZSJRU=', '2015-08-20 11:36:28', NULL),
(6, '18610023888', '18610023888', '', '6c11d3ee2c5b081a1691242d1c4e53b046180df26b4372b587eb171ab128e4d3775c029062b64369754e08706626f87ae1a07a92fff997aefc36c86282165ce9ErN39QY2w5USlMK2w17YuLuuYG0YhHtxi/xSANdThR8=', '2015-08-27 00:15:42', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `hmstar_video_category`
--

DROP TABLE IF EXISTS `hmstar_video_category`;
CREATE TABLE IF NOT EXISTS `hmstar_video_category` (
  `videoId` int(11) NOT NULL,
  `videoName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hmstar_video_category`
--

INSERT INTO `hmstar_video_category` (`videoId`, `videoName`) VALUES
(1, '独角兽'),
(2, '有故事'),
(3, '小清新'),
(4, '关于梦想'),
(5, '情怀落地'),
(6, '颠覆者'),
(7, '跨界狂'),
(8, '有内涵'),
(9, '极客'),
(10, '彪悍'),
(11, '公开课');

-- --------------------------------------------------------

--
-- 表的结构 `hmstar_vote`
--

DROP TABLE IF EXISTS `hmstar_vote`;
CREATE TABLE IF NOT EXISTS `hmstar_vote` (
  `voteId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `projectId` int(11) NOT NULL,
  `voteContent` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hmstar_vote`
--

INSERT INTO `hmstar_vote` (`voteId`, `userId`, `projectId`, `voteContent`) VALUES
(1, 5, 1, 'vote1'),
(2, 5, 1, 'vote2'),
(3, 5, 2, 'vote3'),
(4, 6, 1, 'vote4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hmstar_captcha`
--
ALTER TABLE `hmstar_captcha`
  ADD PRIMARY KEY (`captcha_id`),
  ADD KEY `word` (`word`);

--
-- Indexes for table `hmstar_collaborate`
--
ALTER TABLE `hmstar_collaborate`
  ADD PRIMARY KEY (`collaborateId`),
  ADD UNIQUE KEY `collaborateId_UNIQUE` (`collaborateId`);

--
-- Indexes for table `hmstar_deep`
--
ALTER TABLE `hmstar_deep`
  ADD PRIMARY KEY (`deepId`),
  ADD UNIQUE KEY `userName_UNIQUE` (`deepTitle`),
  ADD UNIQUE KEY `groupId_UNIQUE` (`deepId`);

--
-- Indexes for table `hmstar_group`
--
ALTER TABLE `hmstar_group`
  ADD PRIMARY KEY (`groupId`),
  ADD UNIQUE KEY `userName_UNIQUE` (`groupName`),
  ADD UNIQUE KEY `groupId_UNIQUE` (`groupId`);

--
-- Indexes for table `hmstar_movie_category`
--
ALTER TABLE `hmstar_movie_category`
  ADD PRIMARY KEY (`industryId`);

--
-- Indexes for table `hmstar_project`
--
ALTER TABLE `hmstar_project`
  ADD PRIMARY KEY (`projectId`),
  ADD UNIQUE KEY `userName_UNIQUE` (`projectName`),
  ADD KEY `project_videocategory_fk_idx` (`projectVideoCategory`),
  ADD KEY `project_movecategory_fk_idx` (`projectMoveCategory`),
  ADD KEY `project_category_fk_idx` (`projectCategory`);

--
-- Indexes for table `hmstar_project_category`
--
ALTER TABLE `hmstar_project_category`
  ADD PRIMARY KEY (`projectCategoryId`),
  ADD UNIQUE KEY `projectCategoryId_UNIQUE` (`projectCategoryId`);

--
-- Indexes for table `hmstar_review`
--
ALTER TABLE `hmstar_review`
  ADD PRIMARY KEY (`reviewId`),
  ADD KEY `userId_idx` (`userId`),
  ADD KEY `projectId_idx` (`projectId`);

--
-- Indexes for table `hmstar_user`
--
ALTER TABLE `hmstar_user`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userName_UNIQUE` (`userName`),
  ADD UNIQUE KEY `userMobile_UNIQUE` (`userMobile`),
  ADD KEY `groupId_idx` (`groupId`);

--
-- Indexes for table `hmstar_video_category`
--
ALTER TABLE `hmstar_video_category`
  ADD PRIMARY KEY (`videoId`);

--
-- Indexes for table `hmstar_vote`
--
ALTER TABLE `hmstar_vote`
  ADD PRIMARY KEY (`voteId`),
  ADD KEY `userId_idx` (`userId`),
  ADD KEY `projectId_idx` (`projectId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hmstar_captcha`
--
ALTER TABLE `hmstar_captcha`
  MODIFY `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=389;
--
-- AUTO_INCREMENT for table `hmstar_collaborate`
--
ALTER TABLE `hmstar_collaborate`
  MODIFY `collaborateId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hmstar_deep`
--
ALTER TABLE `hmstar_deep`
  MODIFY `deepId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hmstar_group`
--
ALTER TABLE `hmstar_group`
  MODIFY `groupId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hmstar_project`
--
ALTER TABLE `hmstar_project`
  MODIFY `projectId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hmstar_project_category`
--
ALTER TABLE `hmstar_project_category`
  MODIFY `projectCategoryId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `hmstar_review`
--
ALTER TABLE `hmstar_review`
  MODIFY `reviewId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hmstar_user`
--
ALTER TABLE `hmstar_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hmstar_vote`
--
ALTER TABLE `hmstar_vote`
  MODIFY `voteId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- 限制导出的表
--

--
-- 限制表 `hmstar_project`
--
ALTER TABLE `hmstar_project`
  ADD CONSTRAINT `project_category_fk` FOREIGN KEY (`projectCategory`) REFERENCES `hmstar_project_category` (`projectCategoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `project_movecategory_fk` FOREIGN KEY (`projectMoveCategory`) REFERENCES `hmstar_movie_category` (`industryId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_videocategory_fk` FOREIGN KEY (`projectVideoCategory`) REFERENCES `hmstar_video_category` (`videoId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `hmstar_review`
--
ALTER TABLE `hmstar_review`
  ADD CONSTRAINT `review_project_fk` FOREIGN KEY (`projectId`) REFERENCES `hmstar_project` (`projectId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_user_fk` FOREIGN KEY (`userId`) REFERENCES `hmstar_user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `hmstar_user`
--
ALTER TABLE `hmstar_user`
  ADD CONSTRAINT `user_group_fk` FOREIGN KEY (`groupId`) REFERENCES `hmstar_group` (`groupId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `hmstar_vote`
--
ALTER TABLE `hmstar_vote`
  ADD CONSTRAINT `vote_project_fk` FOREIGN KEY (`projectId`) REFERENCES `hmstar_project` (`projectId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vote_user_fk` FOREIGN KEY (`userId`) REFERENCES `hmstar_user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
