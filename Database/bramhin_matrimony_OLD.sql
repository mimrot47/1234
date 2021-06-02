-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 05:21 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bramhin_matrimony`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `pass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`) VALUES
(1, 'admin', 'redhat');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(30) NOT NULL,
  `state_unique_id` varchar(250) NOT NULL,
  `state` varchar(200) NOT NULL,
  `city_unique_id` varchar(250) NOT NULL,
  `city` varchar(200) NOT NULL,
  `is_del` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `state_unique_id`, `state`, `city_unique_id`, `city`, `is_del`) VALUES
(1, 'Maharashtra_547306366', 'Maharashtra', 'nashik435345', 'Nashik', 'approved'),
(2, 'Maharashtra_547306366', 'Maharashtra', 'Pune4745', 'Pune', 'approved'),
(3, 'Maharashtra_547306366', 'Maharashtra', 'Mumbai_5457745', 'Mumbai', 'deleted'),
(4, 'Gujrat_259234655', 'Gujarat', 'Surat_1721597876', 'Surat', 'approved'),
(5, 'Rajasthan_730142681', 'Rajasthan', 'Ajmer_518149731', 'Ajmer', 'approved'),
(6, 'Rajasthan_730142681', 'Rajasthan', 'Jaipur_528505104', 'Jaipur', 'approved'),
(7, 'Karnataka_123988305', 'Karnataka', 'Vijaywada_1961867617', 'Vijaywada', 'deleted'),
(8, 'uttar_pradesh_879363859', 'uttar pradesh', 'Kanpur_699848639', 'Kanpur', 'approved'),
(9, 'uttar_pradesh_879363859', 'uttar pradesh', 'Agra_229914744', 'Agra', 'approved'),
(10, 'uttar_pradesh_879363859', 'uttar pradesh', 'Lucknow_1687506516', 'Lucknow', 'approved'),
(11, 'Gujrat_259234655', 'Gujarat', 'Ahmedabad_1106851046', 'Ahmedabad', 'approved'),
(12, 'Gujrat_259234655', 'Gujarat', 'Rajkot_905728859', 'Rajkot', 'approved'),
(13, 'Gujrat_259234655', 'Gujarat', 'Vadodara_1956090048', 'Vadodara', 'approved'),
(14, 'Rajasthan_730142681', 'Rajasthan', 'Jodhpur_645858012', 'Jodhpur', 'approved'),
(15, 'Rajasthan_730142681', 'Rajasthan', 'Kota_930897613', 'Kota', 'approved'),
(16, 'Rajasthan_730142681', 'Rajasthan', 'Bikaner_1852125110', 'Bikaner', 'approved'),
(17, 'Maharashtra_547306366', 'Maharashtra', 'Nagpur_734319587', 'Nagpur', 'approved'),
(18, 'Maharashtra_547306366', 'Maharashtra', 'Aurangabad_807583771', 'Aurangabad', 'approved'),
(19, 'Karnataka_123988305', 'Karnataka', 'Bengaluru_1337589412', 'Bengaluru', 'approved'),
(20, 'Karnataka_123988305', 'Karnataka', 'Bangalore_477011489', 'Bangalore', 'deleted'),
(21, 'Karnataka_123988305', 'Karnataka', 'Bijapur_697662244', 'Bijapur', 'deleted'),
(22, 'uttar_pradesh_879363859', 'uttar pradesh', 'Agra_349453159', 'Agra', 'deleted'),
(23, 'uttar_pradesh_879363859', 'uttar pradesh', 'Ghaziabad_570501406', 'Ghaziabad', 'approved'),
(24, 'Gujrat_259234655', 'Gujarat', 'Bhuj_1615147289', 'Bhuj', 'approved'),
(25, 'Gujrat_259234655', 'Gujarat', 'Valsad_1871181579', 'Valsad', 'approved'),
(26, 'Gujrat_259234655', 'Gujarat', 'Vapi_329980972', 'Vapi', 'approved'),
(27, 'Gujrat_259234655', 'Gujarat', 'Bhavnagar_842252971', 'Bhavnagar', 'approved'),
(28, 'Gujrat_259234655', 'Gujarat', 'Anand_2125068042', 'Anand', 'approved'),
(29, 'Gujrat_259234655', 'Gujarat', 'Jamnagar_1733311575', 'Jamnagar', 'approved'),
(30, 'Gujrat_259234655', 'Gujarat', 'Morbi_869186889', 'Morbi', 'approved'),
(31, 'Gujrat_259234655', 'Gujarat', 'Amreli_2134019857', 'Amreli', 'approved'),
(32, 'Maharashtra_547306366', 'Maharashtra', 'Akola_1053670451', 'Akola', 'deleted'),
(33, 'Maharashtra_547306366', 'Maharashtra', 'Solapur_442516239', 'Solapur', 'approved'),
(34, 'Maharashtra_547306366', 'Maharashtra', 'Vasai-Virar_1824746351', 'Vasai-Virar', 'approved'),
(35, 'Maharashtra_547306366', 'Maharashtra', 'Bhiwandi_1676659124', 'Bhiwandi', 'approved'),
(36, 'Maharashtra_547306366', 'Maharashtra', 'Amravati_1844170621', 'Amravati', 'approved'),
(37, 'Maharashtra_547306366', 'Maharashtra', 'Malegaon_1726680488', 'Malegaon', 'approved'),
(38, 'Maharashtra_547306366', 'Maharashtra', 'Kolhapur_1163000415', 'Kolhapur', 'approved'),
(39, 'Maharashtra_547306366', 'Maharashtra', 'Nanded_647991014', 'Nanded', 'approved'),
(40, 'Maharashtra_547306366', 'Maharashtra', 'Sangli_2005091108', 'Sangli', 'approved'),
(41, 'Maharashtra_547306366', 'Maharashtra', 'Jalgaon_1739241447', 'Jalgaon', 'approved'),
(42, 'Maharashtra_547306366', 'Maharashtra', 'Latur_1278036897', 'Latur', 'approved'),
(43, 'Maharashtra_547306366', 'Maharashtra', 'Ahmadnagar_1767729640', 'Ahmadnagar', 'approved'),
(44, 'Maharashtra_547306366', 'Maharashtra', 'Dhule_2092436051', 'Dhule', 'deleted'),
(45, 'Maharashtra_547306366', 'Maharashtra', 'Ichalkaranji_914052623', 'Ichalkaranji', 'approved'),
(46, 'Maharashtra_547306366', 'Maharashtra', 'Chandrapur_1536357356', 'Chandrapur', 'approved'),
(47, 'Maharashtra_547306366', 'Maharashtra', 'Parbhani_1563338580', 'Parbhani', 'approved'),
(48, 'Maharashtra_547306366', 'Maharashtra', 'Jalna_1726370921', 'Jalna', 'approved'),
(49, 'Maharashtra_547306366', 'Maharashtra', 'Bhusawal_109654519', 'Bhusawal', 'approved'),
(50, 'Maharashtra_547306366', 'Maharashtra', 'Navi_Mumbai_298062884', 'Navi Mumbai', 'approved'),
(51, 'Maharashtra_547306366', 'Maharashtra', 'Panvel_1535783495', 'Panvel', 'approved'),
(52, 'Maharashtra_547306366', 'Maharashtra', 'Pandharpur_136020063', 'Pandharpur', 'approved'),
(53, 'Maharashtra_547306366', 'Maharashtra', 'Kalyan__959899721', 'Kalyan ', 'approved'),
(54, 'Maharashtra_547306366', 'Maharashtra', 'Ulhasnagar_797439861', 'Ulhasnagar', 'approved'),
(55, 'Maharashtra_547306366', 'Maharashtra', 'Satara__1774874647', 'Satara ', 'approved'),
(56, 'Maharashtra_547306366', 'Maharashtra', 'Washim_740492295', 'Washim', 'approved'),
(57, 'Maharashtra_547306366', 'Maharashtra', 'Dombivli_590013826', 'Dombivli', 'approved'),
(58, 'Gujrat_259234655', 'Gujarat', 'Junagadh_1008502367', 'Junagadh', 'approved'),
(59, 'Gujrat_259234655', 'Gujarat', 'Gandhidham_648806601', 'Gandhidham', 'approved'),
(60, 'Gujrat_259234655', 'Gujarat', 'Nadiad_883036772', 'Nadiad', 'approved'),
(61, 'Gujrat_259234655', 'Gujarat', 'Gandhinagar	_1654594298', 'Gandhinagar	', 'approved'),
(62, 'Gujrat_259234655', 'Gujarat', 'Mehsana_111119706', 'Mehsana', 'approved'),
(63, 'Gujrat_259234655', 'Gujarat', 'Surendranagar_277030850', 'Surendranagar', 'approved'),
(64, 'Gujrat_259234655', 'Gujarat', 'Bharuch_1097337669', 'Bharuch', 'approved'),
(65, 'Gujrat_259234655', 'Gujarat', 'Navsari_1519370896', 'Navsari', 'approved'),
(66, 'Gujrat_259234655', 'Gujarat', 'Veraval_1541891840', 'Veraval', 'approved'),
(67, 'Gujrat_259234655', 'Gujarat', 'Porbandar_739061935', 'Porbandar', 'approved'),
(68, 'Gujrat_259234655', 'Gujarat', 'Godhra_1180838713', 'Godhra', 'approved'),
(69, 'Gujrat_259234655', 'Gujarat', 'Ankleshwar_764086367', 'Ankleshwar', 'approved'),
(70, 'Gujrat_259234655', 'Gujarat', 'Botad_521558972', 'Botad', 'approved'),
(71, 'Gujrat_259234655', 'Gujarat', 'Palanpur_840957743', 'Palanpur', 'approved'),
(72, 'Gujrat_259234655', 'Gujarat', 'Patan_1991115548', 'Patan', 'approved'),
(73, 'Gujrat_259234655', 'Gujarat', 'Dahod_873769363', 'Dahod', 'approved'),
(74, 'Gujrat_259234655', 'Gujarat', 'Jetpur_56377585', 'Jetpur', 'approved'),
(75, 'Gujrat_259234655', 'Gujarat', 'Kalol_1531492070', 'Kalol', 'approved'),
(76, 'Gujrat_259234655', 'Gujarat', 'Gondal_1483684768', 'Gondal', 'approved'),
(77, 'Goa_796382937', 'Goa', 'Bicholim_750609503', 'Bicholim', 'approved'),
(78, 'Goa_796382937', 'Goa', 'Canacona_1361391494', 'Canacona', 'approved'),
(79, 'Goa_796382937', 'Goa', 'Cuncolim_1486004711', 'Cuncolim', 'approved'),
(80, 'Goa_796382937', 'Goa', 'Curchorem_1381874817', 'Curchorem', 'approved'),
(81, 'Goa_796382937', 'Goa', 'Mapusa_658253806', 'Mapusa', 'approved'),
(82, 'Goa_796382937', 'Goa', 'Margao_1330388577', 'Margao', 'approved'),
(83, 'Goa_796382937', 'Goa', 'Mormugao_619254013', 'Mormugao', 'approved'),
(84, 'Goa_796382937', 'Goa', 'Panaji_1361854094', 'Panaji', 'approved'),
(85, 'Goa_796382937', 'Goa', 'Pernem_923450912', 'Pernem', 'approved'),
(86, 'Goa_796382937', 'Goa', 'Ponda_895093938', 'Ponda', 'approved'),
(87, 'Goa_796382937', 'Goa', 'Quepem_2040084597', 'Quepem', 'approved'),
(88, 'Goa_796382937', 'Goa', 'Quepem_228632168', 'Quepem', 'deleted'),
(89, 'Goa_796382937', 'Goa', 'Sanguem_323941382', 'Sanguem', 'approved'),
(90, 'Goa_796382937', 'Goa', 'Sanquelim_1804125516', 'Sanquelim', 'approved'),
(91, 'Goa_796382937', 'Goa', 'Valpoi_1478410800', 'Valpoi', 'approved'),
(92, 'Rajasthan_730142681', 'Rajasthan', 'Udaipur_1957731884', 'Udaipur', 'approved'),
(93, 'Rajasthan_730142681', 'Rajasthan', 'Bhilwara_1555799688', 'Bhilwara', 'approved'),
(94, 'Rajasthan_730142681', 'Rajasthan', 'Alwar_565851479', 'Alwar', 'approved'),
(95, 'Rajasthan_730142681', 'Rajasthan', 'Bharatpur_1718765935', 'Bharatpur', 'approved'),
(96, 'Rajasthan_730142681', 'Rajasthan', 'Sikar	_1419475975', 'Sikar	', 'approved'),
(97, 'Rajasthan_730142681', 'Rajasthan', 'Sri_Ganganagar_1109750422', 'Sri Ganganagar', 'approved'),
(98, 'Rajasthan_730142681', 'Rajasthan', 'Pali_2121779544', 'Pali', 'approved'),
(99, 'Rajasthan_730142681', 'Rajasthan', 'Chittorgarh_1354380403', 'Chittorgarh', 'approved'),
(100, 'Rajasthan_730142681', 'Rajasthan', 'Tonk_1893131753', 'Tonk', 'approved'),
(101, 'Rajasthan_730142681', 'Rajasthan', 'Kishangarh_1070106471', 'Kishangarh', 'approved'),
(102, 'Rajasthan_730142681', 'Rajasthan', 'Beawar_2015638608', 'Beawar', 'approved'),
(103, 'Rajasthan_730142681', 'Rajasthan', 'Hanumangarh_1683633047', 'Hanumangarh', 'approved'),
(104, 'Rajasthan_730142681', 'Rajasthan', 'Dholpur_355106470', 'Dholpur', 'approved'),
(105, 'Rajasthan_730142681', 'Rajasthan', 'Gangapur_city_1258781695', 'Gangapur city', 'approved'),
(106, 'Rajasthan_730142681', 'Rajasthan', 'Sawai_Madhopur_1595900927', 'Sawai Madhopur', 'approved'),
(107, 'Rajasthan_730142681', 'Rajasthan', 'Churu_1856398717', 'Churu', 'approved'),
(108, 'Rajasthan_730142681', 'Rajasthan', 'Jhunjhunu_2075284716', 'Jhunjhunu', 'approved'),
(110, 'Karnataka_123988305', 'Karnataka', 'Mysuru_603656562', 'Mysuru', 'approved'),
(111, 'Karnataka_123988305', 'Karnataka', 'Coorg_243931920', 'Coorg', 'approved'),
(112, 'Karnataka_123988305', 'Karnataka', 'Hampi_289039094', 'Hampi', 'approved'),
(113, 'Karnataka_123988305', 'Karnataka', 'Mangaluru_790683258', 'Mangaluru', 'approved'),
(114, 'Karnataka_123988305', 'Karnataka', 'Belagavi_1956223273', 'Belagavi', 'approved'),
(115, 'Karnataka_123988305', 'Karnataka', 'Shimoga_1532534965', 'Shimoga', 'deleted'),
(116, 'Karnataka_123988305', 'Karnataka', 'Hassan_78483845', 'Hassan', 'approved'),
(117, 'Karnataka_123988305', 'Karnataka', 'Jog_Falls_1309233153', 'Jog Falls', 'deleted'),
(118, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Barwani_1824765763', 'Barwani', 'deleted'),
(119, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Bhind_709567494', 'Bhind', 'deleted'),
(120, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Bhopal_1892004627', 'Bhopal', 'deleted'),
(121, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Burhanpur_1278518986', 'Burhanpur', 'deleted'),
(122, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Chhindwara_604258497', 'Chhindwara', 'deleted'),
(123, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Dewas_2055971067', 'Dewas', 'deleted'),
(124, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Guna_433106141', 'Guna', 'deleted'),
(125, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Gwalior_258498207', 'Gwalior', 'deleted'),
(126, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Itarsi_193270228', 'Itarsi', 'deleted'),
(127, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Jabalpur_1097215061', 'Jabalpur', 'deleted'),
(128, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Katni_1348653843', 'Katni', 'deleted'),
(129, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Khajuraho_349641008', 'Khajuraho', 'deleted'),
(130, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Khandwa_1248526581', 'Khandwa', 'deleted'),
(131, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Khargone_283002178', 'Khargone', 'deleted'),
(132, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Morena_1214999552', 'Morena', 'deleted'),
(133, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Neemuch_1106108636', 'Neemuch', 'deleted'),
(134, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Orchha_1726855684', 'Orchha', 'deleted'),
(135, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Ratlam_1207004313', 'Ratlam', 'deleted'),
(136, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Rewa_1530131058', 'Rewa', 'deleted'),
(137, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Sagar_871450318', 'Sagar', 'deleted'),
(138, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Sanchi_358355634', 'Sanchi', 'deleted'),
(139, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Satara__280633828', 'Satara ', 'deleted'),
(140, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Satna_2054614871', 'Satna', 'deleted'),
(141, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Sehore_1495556099', 'Sehore', 'deleted'),
(142, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Sehore_1997786214', 'Sehore', 'deleted'),
(143, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Shivpuri_1449848279', 'Shivpuri', 'deleted'),
(144, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Singrauli_978562302', 'Singrauli', 'deleted'),
(145, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Ujjain_1776943806', 'Ujjain', 'deleted'),
(146, 'Madhyapradesh_1732650584', 'Madhyapradesh', 'Vidisha_67975390', 'Vidisha', 'deleted'),
(147, 'Karnataka_123988305', 'Karnataka', 'Chitiradurga_1465858042', 'Chitiradurga', 'approved'),
(148, 'Karnataka_123988305', 'Karnataka', 'Hubhalli_1811737895', 'Hubhalli', 'approved'),
(149, 'Karnataka_123988305', 'Karnataka', 'Kalburgi_1397316131', 'Kalburgi', 'approved'),
(150, 'Karnataka_123988305', 'Karnataka', 'Davanagere_719140030', 'Davanagere', 'approved'),
(151, 'Karnataka_123988305', 'Karnataka', 'Ballari_1409146089', 'Ballari', 'approved'),
(152, 'Karnataka_123988305', 'Karnataka', 'Vijapura_350225011', 'Vijapura', 'approved'),
(153, 'Karnataka_123988305', 'Karnataka', 'Shivamogga_1793633896', 'Shivamogga', 'approved'),
(154, 'Karnataka_123988305', 'Karnataka', 'Tumakuru_1121230298', 'Tumakuru', 'approved'),
(155, 'Karnataka_123988305', 'Karnataka', 'Raichur_293041151', 'Raichur', 'approved'),
(156, 'Karnataka_123988305', 'Karnataka', 'Bidar_1733479082', 'Bidar', 'approved'),
(157, 'Karnataka_123988305', 'Karnataka', 'Hosapete_256592273', 'Hosapete', 'approved'),
(158, 'Karnataka_123988305', 'Karnataka', 'Udupi_1703684184', 'Udupi', 'approved'),
(159, 'Karnataka_123988305', 'Karnataka', 'Robertson_Pet_705792886', 'Robertson Pet', 'approved'),
(160, 'Karnataka_123988305', 'Karnataka', 'Bhadravati_666226888', 'Bhadravati', 'approved'),
(161, 'Karnataka_123988305', 'Karnataka', 'Chitradurga_421884383', 'Chitradurga', 'approved'),
(162, 'Karnataka_123988305', 'Karnataka', 'Kolar_1722743680', 'Kolar', 'approved'),
(163, 'Karnataka_123988305', 'Karnataka', 'Mandya_1543755974', 'Mandya', 'approved'),
(164, 'Karnataka_123988305', 'Karnataka', 'Chikkamagaluru_2130444814', 'Chikkamagaluru', 'approved'),
(165, 'Karnataka_123988305', 'Karnataka', 'Gangawati_1793164111', 'Gangawati', 'approved'),
(166, 'Karnataka_123988305', 'Karnataka', 'Bagalkot_294353974', 'Bagalkot', 'approved'),
(167, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Azamgarh_506462681', 'Azamgarh', 'approved'),
(168, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Aligarh_397090563', 'Aligarh', 'approved'),
(169, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Allahabad_933838404', 'Allahabad', 'approved'),
(170, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Ayodhya_2042193226', 'Ayodhya', 'approved'),
(171, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Bijnor_1684744037', 'Bijnor', 'approved'),
(172, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Ballia_997474819', 'Ballia', 'approved'),
(173, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Basti_1926587364', 'Basti', 'approved'),
(174, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Bareilly_2011252575', 'Bareilly', 'approved'),
(175, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Badaun_1898404047', 'Badaun', 'approved'),
(176, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Bhadohi_1200738875', 'Bhadohi', 'approved'),
(177, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Chandauli_1084911825', 'Chandauli', 'approved'),
(178, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Chitrakoot_1718204876', 'Chitrakoot', 'approved'),
(179, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Chandausi_51831208', 'Chandausi', 'approved'),
(180, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Deoria_1090296032', 'Deoria', 'approved'),
(181, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Etawah_1052664895', 'Etawah', 'approved'),
(182, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Etah_809275319', 'Etah', 'approved'),
(183, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Faizabad_1290486647', 'Faizabad', 'approved'),
(184, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Ferozepur_8956839', 'Ferozepur', 'approved'),
(185, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Greater_Noida_605133662', 'Greater Noida', 'approved'),
(186, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Gokul_1791767021', 'Gokul', 'approved'),
(187, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Gorakhpur_988979821', 'Gorakhpur', 'approved'),
(188, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Gonda_1534690198', 'Gonda', 'approved'),
(189, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Hardoi_1987323024', 'Hardoi', 'approved'),
(190, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Hapur_1700778700', 'Hapur', 'approved'),
(191, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Jaunpur_710750450', 'Jaunpur', 'approved'),
(192, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Jhansi_49251739', 'Jhansi', 'approved'),
(193, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Lalitpur_1614283530', 'Lalitpur', 'approved'),
(194, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Muzaffarnagar_1446329365', 'Muzaffarnagar', 'approved'),
(195, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Mirzapur_1543296928', 'Mirzapur', 'approved'),
(196, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Mathura_142978144', 'Mathura', 'approved'),
(197, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Meerut_1990801889', 'Meerut', 'approved'),
(198, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Moradabad_1829429339', 'Moradabad', 'approved'),
(199, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Noida__56542180', 'Noida ', 'approved'),
(200, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Pilibhit_663066411', 'Pilibhit', 'approved'),
(201, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Sitapur_29972135', 'Sitapur', 'approved'),
(202, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Sarnath_1733129777', 'Sarnath', 'approved'),
(203, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Sambhal_319919484', 'Sambhal', 'approved'),
(204, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Sultanpur_2022998783', 'Sultanpur', 'approved'),
(205, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Saharanpur_1068611528', 'Saharanpur', 'approved'),
(206, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Unnao_70839883', 'Unnao', 'approved'),
(207, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Vrindavan_1076254010', 'Vrindavan', 'approved'),
(208, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Vrindavan_1457205589', 'Vrindavan', 'deleted'),
(209, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'Varanasi_16818639', 'Varanasi', 'approved'),
(210, 'Andra_pradesh_397709114', 'Andhra Pradesh', 'Amalapuram_1733938131', 'Amalapuram', 'approved'),
(211, 'Andra_pradesh_397709114', 'Andhra Pradesh', 'Anakapalle_567617425', 'Anakapalle', 'approved'),
(212, 'Andra_pradesh_397709114', 'Andhra Pradesh', 'Anantpur_963416531', 'Anantpur', 'approved'),
(213, 'Andra_pradesh_397709114', 'Andhra Pradesh', 'Chittoor_1958236591', 'Chittoor', 'approved'),
(214, 'Andra_pradesh_397709114', 'Andhra Pradesh', 'Cuddapah_1019004251', 'Cuddapah', 'approved'),
(215, 'Andra_pradesh_397709114', 'Andhra Pradesh', 'Guntur_1021022371', 'Guntur', 'approved'),
(216, 'Andra_pradesh_397709114', 'Andhra Pradesh', 'Mahbubnagar_152014333', 'Mahbubnagar', 'approved'),
(217, 'Andra_pradesh_397709114', 'Andhra Pradesh', 'Nellore_758182354', 'Nellore', 'approved'),
(218, 'Andra_pradesh_397709114', 'Andhra Pradesh', 'Puttaparthi_863225549', 'Puttaparthi', 'approved'),
(219, 'Andra_pradesh_397709114', 'Andhra Pradesh', 'Rajahmundry_371699900', 'Rajahmundry', 'approved'),
(220, 'Andra_pradesh_397709114', 'Andhra Pradesh', 'Sriharikota_665846334', 'Sriharikota', 'approved'),
(221, 'Andra_pradesh_397709114', 'Andhra Pradesh', 'Abids_60792813', 'Abids', 'deleted'),
(222, 'Andra_pradesh_397709114', 'Andhra Pradesh', 'Srikakulam_769299182', 'Srikakulam', 'approved'),
(223, 'Andra_pradesh_397709114', 'Andhra Pradesh', 'Tirupati_528895546', 'Tirupati', 'approved'),
(224, 'Andra_pradesh_397709114', 'Andhra Pradesh', 'Tuni__472231107', 'Tuni ', 'approved'),
(225, 'Andra_pradesh_397709114', 'Andhra Pradesh', 'Vijayawada_129359613', 'Vijayawada', 'approved'),
(226, 'Andra_pradesh_397709114', 'Andhra Pradesh', 'Visakhapatnam_473871605', 'Visakhapatnam', 'approved'),
(227, 'Andra_pradesh_397709114', 'Andhra Pradesh', 'Vizianagaram_553954657', 'Vizianagaram', 'approved'),
(228, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Coimbatore_1643615425', 'Coimbatore', 'approved'),
(229, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Kanyakumari_161131703', 'Kanyakumari', 'approved'),
(230, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Madurai_1357795522', 'Madurai', 'approved'),
(231, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Ooty_213185041', 'Ooty', 'approved'),
(232, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Pudukkottai_1713031186', 'Pudukkottai', 'approved'),
(233, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Shiva_Ganga_1980123519', 'Shiva Ganga', 'approved'),
(234, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Tiruchirappalli_960491676', 'Tiruchirappalli', 'approved'),
(235, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Vellore_1943523823', 'Vellore', 'approved'),
(236, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Thiruvannamalai_309358175', 'Thiruvannamalai', 'approved'),
(237, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Chennai_2130499529', 'Chennai', 'approved'),
(238, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Erode_1020029436', 'Erode', 'approved'),
(239, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Kodaikanal_252899297', 'Kodaikanal', 'approved'),
(240, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Mahabalipuram_1958812132', 'Mahabalipuram', 'approved'),
(241, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Nagercoil_1736968285', 'Nagercoil', 'approved'),
(242, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Pollachi_2127436807', 'Pollachi', 'approved'),
(243, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Rameshwaram_977969067', 'Rameshwaram', 'approved'),
(244, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Thanjavur_1720523668', 'Thanjavur', 'approved'),
(245, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Tirunelveli_199914470', 'Tirunelveli', 'approved'),
(246, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Tiruppur_25549783', 'Tiruppur', 'approved'),
(247, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Chidambaram_1281452733', 'Chidambaram', 'approved'),
(248, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Karaikudi_707299264', 'Karaikudi', 'approved'),
(249, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Kanchipuram_287208941', 'Kanchipuram', 'approved'),
(250, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Kumbakonam_1543153198', 'Kumbakonam', 'approved'),
(251, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Namakkal_1490520245', 'Namakkal', 'approved'),
(252, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Porur_2054142261', 'Porur', 'approved'),
(253, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Salem_1526475857', 'Salem', 'approved'),
(254, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Theni_1180791356', 'Theni', 'approved'),
(255, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Annasalai_108457199', 'Annasalai', 'approved'),
(256, 'Tamilnadu_1563087594', 'Tamil Nadu', 'Hosur_1433699074', 'Hosur', 'approved'),
(258, 'Maharashtra_547306366', 'MAHARASHTRA', 'Malegaon_278528973', 'Malegaon', 'deleted'),
(259, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Indore_615239296', 'Indore', 'approved'),
(260, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Bhopal_1008596197', 'Bhopal', 'approved'),
(261, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Jabalpur_1079315750', 'Jabalpur', 'approved'),
(262, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Gwalior_2021688657', 'Gwalior', 'approved'),
(263, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Ujjain_1908857448', 'Ujjain', 'approved'),
(264, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Sagar_1129391928', 'Sagar', 'approved'),
(265, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Dewas_1827233298', 'Dewas', 'approved'),
(266, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Satna_256991715', 'Satna', 'approved'),
(267, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Ratlam_2093126268', 'Ratlam', 'approved'),
(268, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Rewa_1889018561', 'Rewa', 'approved'),
(269, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Murwara_918516786', 'Murwara', 'approved'),
(270, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Singrauli_1714538409', 'Singrauli', 'approved'),
(271, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Burhanpur_30685791', 'Burhanpur', 'approved'),
(272, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Khandwa_2143311002', 'Khandwa', 'approved'),
(273, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Bhind_614497073', 'Bhind', 'approved'),
(274, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Chhindwara_1385850450', 'Chhindwara', 'approved'),
(275, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Guna_1225254796', 'Guna', 'approved'),
(276, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Shivpuri_27707384', 'Shivpuri', 'approved'),
(277, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Vidisha_692971942', 'Vidisha', 'approved'),
(278, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Chhatarpur_875535311', 'Chhatarpur', 'approved'),
(279, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Damoh_1798872093', 'Damoh', 'approved'),
(280, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Mandsaur_510223650', 'Mandsaur', 'approved'),
(281, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Khargone_1712746626', 'Khargone', 'approved'),
(282, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Neemuch_470024222', 'Neemuch', 'approved'),
(283, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Pithampur_288202097', 'Pithampur', 'approved'),
(284, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Hoshangabad_1145840031', 'Hoshangabad', 'approved'),
(285, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Itarsi_801050959', 'Itarsi', 'approved'),
(286, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Sehore_269193668', 'Sehore', 'approved'),
(287, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Betul_38633822', 'Betul', 'approved'),
(288, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Seoni_1263113788', 'Seoni', 'approved'),
(289, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Datia_680779215', 'Datia', 'approved'),
(290, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'Nagda_1285253957', 'Nagda', 'approved'),
(291, 'Maharashtra_547306366', 'Maharashtra', 'malegaon__1992157991', 'malegaon ', 'deleted'),
(292, 'Maharashtra_547306366', 'Maharashtra', 'Akhola_1334299566', 'Akhola', 'deleted'),
(293, 'Maharashtra_547306366', 'Maharashtra', 'Akhola_1695612775', 'Akhola', 'approved'),
(294, 'Maharashtra_547306366', 'Maharashtra', 'Dhule_1865691557', 'Dhule', 'approved'),
(295, 'Andra_pradesh_397709114', 'Andhra Pradesh', 'Abids_111085237', 'Abids', 'deleted');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `msg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `email`, `msg`) VALUES
(6, 'vikram.mhaisdhune@gmail.com', 'Hello......................'),
(7, 'sam@gmail.com', 'kdmdsllkfmsdfsdmfmskldf');

-- --------------------------------------------------------

--
-- Table structure for table `matrimonialall`
--

CREATE TABLE `matrimonialall` (
  `candidate_id` int(11) NOT NULL,
  `unique_id` varchar(30) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `middle_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `states` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `address` varchar(300) NOT NULL,
  `mobile_no1` varchar(12) NOT NULL,
  `email` varchar(200) NOT NULL,
  `birth_date` varchar(50) NOT NULL,
  `birth_time` varchar(50) NOT NULL,
  `day_of_birth` varchar(100) NOT NULL,
  `birth_city` varchar(30) NOT NULL,
  `birth_district` varchar(30) NOT NULL,
  `birth_state` varchar(30) NOT NULL,
  `mobile_no2` varchar(20) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `cast` varchar(150) NOT NULL,
  `subcast` varchar(155) NOT NULL,
  `age` int(11) NOT NULL,
  `fit` int(10) NOT NULL,
  `inches` int(10) NOT NULL,
  `body_weight` int(11) NOT NULL,
  `skin_tone` varchar(20) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `spectacles` varchar(10) NOT NULL,
  `hobbies` varchar(200) NOT NULL,
  `any_disability` varchar(200) NOT NULL,
  `any_disability_desc` varchar(250) NOT NULL,
  `acceptation` varchar(300) NOT NULL,
  `describe_yourself` varchar(300) NOT NULL,
  `faculty` varchar(150) NOT NULL,
  `academic_level` varchar(150) NOT NULL,
  `college_name` varchar(150) NOT NULL,
  `college_address` varchar(300) NOT NULL,
  `office_contact` varchar(20) NOT NULL,
  `job_busi_status` varchar(150) NOT NULL,
  `working_post` varchar(150) NOT NULL,
  `annual_income` varchar(250) NOT NULL,
  `work_place_address` varchar(300) NOT NULL,
  `father_name` varchar(150) NOT NULL,
  `occupation_father` varchar(150) NOT NULL,
  `mother_name` varchar(150) NOT NULL,
  `occupation_mother` varchar(150) NOT NULL,
  `no_of_brother` varchar(150) NOT NULL,
  `married_brother` varchar(150) NOT NULL,
  `unmarried_brother` varchar(250) NOT NULL,
  `no_of_sister` int(20) NOT NULL,
  `married_sister` varchar(50) NOT NULL,
  `unmarried_sister` varchar(50) NOT NULL,
  `permanent_residential_address` varchar(150) NOT NULL,
  `parent_conatct_no` varchar(15) NOT NULL,
  `birth_name` varchar(50) NOT NULL,
  `own_kul` varchar(50) NOT NULL,
  `mamkul` varchar(50) NOT NULL,
  `gotra` varchar(150) NOT NULL,
  `nakshtra` varchar(150) NOT NULL,
  `charan` varchar(150) NOT NULL,
  `rashi` varchar(150) NOT NULL,
  `nadi` varchar(150) NOT NULL,
  `gan` varchar(150) NOT NULL,
  `guru` varchar(150) NOT NULL,
  `manglik_status` varchar(150) NOT NULL,
  `marriageType` varchar(150) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `cover_photo` varchar(255) NOT NULL,
  `acc_type` varchar(255) NOT NULL,
  `keyword` varchar(300) NOT NULL,
  `payment` varchar(3) NOT NULL DEFAULT 'No',
  `is_del` varchar(50) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matrimonialall`
--

INSERT INTO `matrimonialall` (`candidate_id`, `unique_id`, `first_name`, `middle_name`, `last_name`, `gender`, `states`, `city`, `address`, `mobile_no1`, `email`, `birth_date`, `birth_time`, `day_of_birth`, `birth_city`, `birth_district`, `birth_state`, `mobile_no2`, `pass`, `cast`, `subcast`, `age`, `fit`, `inches`, `body_weight`, `skin_tone`, `blood_group`, `spectacles`, `hobbies`, `any_disability`, `any_disability_desc`, `acceptation`, `describe_yourself`, `faculty`, `academic_level`, `college_name`, `college_address`, `office_contact`, `job_busi_status`, `working_post`, `annual_income`, `work_place_address`, `father_name`, `occupation_father`, `mother_name`, `occupation_mother`, `no_of_brother`, `married_brother`, `unmarried_brother`, `no_of_sister`, `married_sister`, `unmarried_sister`, `permanent_residential_address`, `parent_conatct_no`, `birth_name`, `own_kul`, `mamkul`, `gotra`, `nakshtra`, `charan`, `rashi`, `nadi`, `gan`, `guru`, `manglik_status`, `marriageType`, `profile_pic`, `cover_photo`, `acc_type`, `keyword`, `payment`, `is_del`, `created_on`) VALUES
(266, 'jagannath_1992485707', 'dhruv', 'vitthal', 'jagannath', 'Bride', 'Maharashtra', 'Latur', 'golai', '425445454564', 'dhruv@gmail.com', '1995-11-06', '02:56', 'Monday', 'nashik', 'nashik', 'Maharashtra', '45t465456546', 'dhruv', 'Brahmin', 'Rigvedi', 22, 5, 6, 65, 'Wheatish', 'B+', 'no', 'nothing', 'yes', 'waekness', 'pure', 'nice', 'MBA', '', 'svit', 'nashik', '165654654654', 'Goverment Job', 'manager', '5 - 10 Lac', 'nashik', 'vitthal', 'service', 'mina', 'hw', '2', '1', '1', 2, '1', '1', 'nashik', '465486752420', 'dhru', 'dfg', 'nbjbjb', 'n', 'Uttara Phalgun', '1', 'Mesh (Aries)', 'Aadya', 'Manush Gan', '3', 'No', 'Never married', '02-02-2018_259841.jpg', '', '', 'Bride,Never married,22,,Maharashtra,Latur,45t465456546,425445454564', 'Yes', 'no', '2017-12-11 07:16:20'),
(267, 'Bhavsar_818031298', 'Rajashree', 'ramnath', 'Bhavsar', 'Bride', 'Maharashtra', 'Nanded', 'nanded', '323215000000', 'rajshree@gmail.com', '1994-12-25', '03:21', 'Wednesday', 'nanded', 'nanded', 'Maharashtra', '000151654546', 'raj', 'Brahmin', 'Rigvedi', 22, 5, 7, 55, 'Wheatish', 'O+', 'no', 'rangoli', 'no', '', 'mature', 'handsome', 'CA', '', 'svit', 'nanded', '623465450000', 'Private Job', 'assistant ', '2.5 - 5 Lac', 'naneded', 'ramnath', 'workar', 'bhavna', 'service', '2', '1', '1', 2, '0', '2', 'nanede', '313236546544', 'pikku', 'jkb', 'kjbjk', 'j', 'Bharani', '3', 'Mithun (Gemini)', 'Aadya', 'Rakshas Gan', '2', 'No', 'Never married', '02-02-2018_166912.jpg', '', '', 'Bride,Never married,22,,Maharashtra,Nanded,000151654546,323215000000', 'Yes', 'no', '2017-12-11 07:40:38'),
(268, 'pagare_1452818466', 'ram', 'shyam', 'pagare', 'Groom', 'Maharashtra', 'Nashik', 'nashik', '9852145214', 'rampagare@gmail.com', '1985-04-05', '04:05', 'Sunday', 'nashik', 'nashik', 'Maharashtra', '9985475845', 'ram', 'Brahmin', 'Yajurvedi', 32, 5, 2, 53, 'Fair', 'O+', 'no', 'ppp', 'no', '', 'kkkkkkkkk', 'llllll', 'Graduate', '', 'kthm college', 'nashik', '9852145214', 'Goverment Job', 'employee', '1 - 2.5 Lac', 'nashik', 'shyam', 'business', 'kanchan', 'job', '2', '1', '1', 1, '0', '1', 'mkkkk', '985214521452', 'gokul', 'pp', 'pp', 'pp', 'Bharani', '4', 'Vrishabh (Taurus)', 'Antya', 'Dev Gan', '4', 'No', 'Never married', '02-02-2018_319843.jpg', '', '', 'Groom,Never married,32,,Maharashtra,Nashik,9985475845,9852145214', 'Yes', 'no', '2017-12-14 06:09:21'),
(269, 'sonawane_144787055', 'tushar', 'ram', 'sonawane', 'Groom', 'Maharashtra', 'Nashik', 'nashik', '9856895685', 'tushar@gmail.com', '1985-06-06', '05:06', 'Monday', 'nashik', 'nashik', 'Maharashtra', '99254148451', 'tushar', 'Brahmin', 'Yajurvedi', 32, 5, 2, 66, 'Fair', 'B+', 'no', 'ppp', 'no', 'no', 'puuiui ', 'uutu', 'PostGraduate', '', 'vn naik college', 'nashik', '9852145214', 'Business', 'employee', '1 - 2.5 Lac', 'nashik', 'ram', 'job', 'asha', 'job', '3', '0', '2', 4, '0', '2', 'nashik', '98521452142', 'krishna', 'ppp', 'ppp', 'pppp', 'Bharani', '4', 'Karka (Cancer)', 'Madhya', 'Manush Gan', '4', 'No', 'Never married', '02-02-2018_265534.jpg', '', '', 'Nashik,99254148451,9856895685', 'Yes', 'no', '2017-12-14 06:20:58'),
(270, 'wagh_1743456896', 'rekha', 'ram', 'wagh', 'Bride', 'Maharashtra', 'Nashik', 'nashik', '9011689022', 'rekha@gmail.com', '1983-05-05', '05:10', 'Monday', 'nashik', 'nashik', 'Maharashtra', '7769991874', 'rekhaji', 'Brahmin', 'Yajurvedi', 34, 5, 2, 65, 'Wheatish', 'A+', 'no', 'ppp', 'no', 'sdfsdf', 'ppp', 'ppp', 'Graduate', '', 'kthm college', 'nashik road', '9011689022', 'Business', 'own business', '5 - 10 Lac', 'nashik road ', 'shree', 'business', 'rani', 'job', '2', '1', '1', 2, '1', '1', 'nashik road', '9011689022', 'dolly', 'pppp', 'pppp', 'pppp', 'Ashwini', '2', 'Dhanu (Sagittarius)', 'Aadya', 'Manush Gan', '8', 'Yes', 'Never married', '02-02-2018_207263.jpg', '', '', 'Nashik,7769991874,9011689022', 'Yes', 'no', '2017-12-14 06:31:36'),
(271, 'waghmare_1040023508', 'asha', 'nitin', 'waghmare', 'Bride', 'Maharashtra', 'Nagpur', 'nasgpur', '9885421512', 'asha@gmail.com', '1984-05-06', '05:06', 'Tuesday', 'nagpur', 'nagpur', 'Maharashtra', '99854785458', 'ashaji', 'Brahmin', 'Kanva', 33, 4, 6, 63, 'Fair', 'O+', 'no', 'pp', 'no', '', 'pppp', 'pppp', 'PostGraduate', '', 'gj cbcb ', 'cbcbbf ', '9852412541', 'Business', 'business', '2.5 - 5 Lac', 'nagpur', 'nitin', 'job', 'rani', 'business', '2', '0', '2', 3, '1', '2', 'nagpur', '98521452145', 'rr', 'pp', 'pp', 'pp', 'Bharani', '4', 'Karka (Cancer)', 'Antya', 'Rakshas Gan', '4', 'No', 'Never married', '02-03-2018_250304.jpg', '', '', 'Bride,Never married,33,,Maharashtra,Nagpur,99854785458,9885421512', 'Yes', 'no', '2017-12-14 06:41:30'),
(272, 'kale_1630991686', 'meena', 'shyam', 'kale', 'Bride', 'Maharashtra', 'Nagpur', 'nagpur', '98521452145', 'meena@gmail.com', '1982-07-05', '05:06', 'Monday', 'nagpur', 'nagpur', 'Maharashtra', '9985487542', 'meenaji', 'Brahmin', 'Kokanastha', 35, 5, 2, 63, 'Fair', 'O+', 'no', 'ppp', 'yes', '', 'pp', 'ppp', 'Doctor', '', 'vn naik college', 'nagpur', '985214521452', 'Business', 'own business', '2.5 - 5 Lac', '  nagpur', 'shyam', 'job', 'rekha', 'job', '3', '1', '2', 2, '1', '1', 'nagpur', '985525412512', 'pp', 'pp', 'pp', 'pp', 'Rohini', '4', 'Tula (Libra)', 'Antya', 'Manush Gan', '4', 'No', 'Never married', '02-02-2018_98725.jpg', '', '', 'Nagpur,9985487542,98521452145', 'Yes', 'no', '2017-12-14 07:08:36'),
(273, 'navale_1147307365', 'shree', 'bhanu', 'navale', 'Groom', 'Maharashtra', 'Aurangabad', 'ajk', '465645464321', 'shree@gmail.com', '1992-12-05', '04:54', 'Tuesday', 'Jalgaon', 'Jalgaon', 'Maharashtra', '134654654654', 'shree', 'Brahmin', 'Kanva', 25, 5, 2, 63, 'Wheatish', 'O+', 'no', 'skdjs ', 'yes', ' sdfdfdf', 'dfdssfssdfs', 'sdffdsff', 'Doctor', '', 'kthm college', 'jalgaon', '546645654545', 'Private Job', 'manager', '5 - 10 Lac', '     jalgaon', 'cbcbc', 'bdsfffsdfs', 'sdfsdff', 'sdff', '2', '0', '2', 1, '0', '1', 'sdf', '3455', 'sdffs', 'sdfs', 'sdfsdf', 'sdfsd', 'Rohini', '3', 'Karka (Cancer)', 'Antya', 'Rakshas Gan', '3', 'Yes', 'divorcee', '02-02-2018_316255.jpg', '', '', 'Groom,divorcee,25,,Maharashtra,Aurangabad,134654654654,465645464321', 'Yes', 'no', '2017-12-14 07:13:27'),
(274, 'gore_1229686538', 'rani', 'tushar', 'gore', 'Bride', 'Maharashtra', 'Nashik', 'nashik', '998548547854', 'rani@gmail.com', '1982-08-11', '05:05', 'Tuesday', 'nashik', 'nashik', 'Maharashtra', '98547854785', 'raniji', 'Brahmin', 'Kanva', 35, 4, 1, 65, 'Wheatish', 'O+', 'yes', 'hk', 'no', '', 'hhh', 'jjgj', 'Graduate', '', 'hfhfnfgh fghfg', 'fghgfhg fnfnf', '9852145214', 'Goverment Job', 'employee', '5 - 10 Lac', 'nagpur', 'tushar', 'job', 'rekha', 'job', '2', '0', '2', 2, '0', '2', 'nagpur', '9852145242', 'pp', 'pp', 'pp', 'ppp', 'Bharani', '2', 'Vrishabh (Taurus)', 'Madhya', 'Rakshas Gan', '4', 'No', 'Never married', '02-02-2018_182766.jpg', '', '', 'Bride,Never married,35,,Maharashtra,Nashik,98547854785,998548547854', 'Yes', 'no', '2017-12-14 07:27:43'),
(276, 'shawale_63037089', 'manoj', 'manish', 'shawale', 'groom', 'Maharashtra', 'Nashik', 'nashik', '9885214851', 'manoj@gmail.com', '1984-02-05', '06:06', 'Tuesday', 'nashik', 'nashik', 'Maharashtra', '9985425845', 'manoj', 'Brahmin', 'Kokanastha', 33, 5, 1, 64, 'Fair', 'O+', 'no', 'ppppp', 'no', '', 'pppp', 'ppppppp', 'Undergraduate', '', 'njjj jjjj', 'jjj jjj', '9852145215', 'Goverment Job', 'employee', '5 - 10 Lac', 'nashik', 'manish', 'job', 'rani', 'business', '2', '0', '2', 3, '0', '2', 'nashik', '9856214523', 'pp', 'ppppppp', 'ppppp', 'ppp', 'Ashwini', '2', 'Vrishabh (Taurus)', 'Aadya', 'Dev Gan', '11', 'No', 'Never married', '02-02-2018_6177.jpg', '', '', 'Groom,Never married,33,,Maharashtra,Nashik,9985425845,9885214851', 'Yes', 'no', '2017-12-14 07:43:35'),
(278, 'bhavsar_987549886', 'manisha', 'madhav', 'bhavsar', 'Bride', 'Gujarat', 'Anand', 'sdfdf', '11654621300', 'manish@gmail.com', '1992-05-04', '13:35', 'Tuesday', 'sdf', 'sdfsd', 'Goa', '531565465421', 'manish', 'Brahmin', 'Kanva', 25, 5, 3, 65, 'Wheatish', 'O+', 'no', 'fgdfg', 'yes', 'dfgfd', 'mmdsfm', 'SDSDF', 'CA', '', 'DF', 'DFG', '564654646666', 'Goverment Job', 'xv', '2.5 - 5 Lac', 'dfgddggddg', 'dfgdg', 'dfggd', 'dffg', 'dfg', '1', '0', '1', 0, '0', '0', 'dfgdg', '546546466646', 'dfgfgf', 'dfg', 'gdf', 'dd', 'Krittika', '1', 'Mesh (Aries)', 'Aadya', 'Dev Gan', '1', 'Yes', 'Never married', '02-02-2018_135507.jpg', '', '', 'Anand,531565465421,11654621300', 'Yes', 'no', '2017-12-14 07:58:01'),
(279, 'shinde_2043382224', 'shilpa', 'tukaram', 'shinde', 'Bride', 'Maharashtra', 'Nagpur', 'nagpur', '98547845875', 'shilpashinde@gmail.com', '1982-06-10', '06:06', 'Tuesday', 'nagpur', 'nagpur', 'Maharashtra', '9985471245', 'shilpaji', 'Brahmin', 'Kokanastha', 35, 5, 2, 63, 'Fair', 'O+', 'no', 'ppp', 'no', '', 'pppp', 'pppp', 'Graduate', '', 'gdg jjfjj', 'fjh fhfgj fhh', '9852145214', 'Goverment Job', 'employee', '2.5 - 5 Lac', 'nagpur', 'tukaram', 'job', 'asha', 'job', '3', '1', '2', 2, '0', '2', 'kllll', '98521452145', 'pp', 'pp', 'pp', 'ppp', 'Ashwini', '2', 'Simha (Leo)', 'Madhya', 'Manush Gan', '8', 'No', 'Never married', '02-02-2018_19348.jpg', '', '', 'Bride,Never married,35,,Maharashtra,Nagpur,9985471245,98547845875', 'Yes', 'no', '2017-12-14 12:23:47'),
(281, 'Sharma_1070164495', 'Rohit', 'Roshan', 'Sharma', 'Groom', 'Maharashtra', 'Nashik', 'Flat no 13, Sharnapur road ,opposite takle jwale , gangapur road, nashik-422003', '457544656456', 'vikram@gmail.com', '1989-05-12', '23:59', 'Sunday', 'sbdfuyg', 'gsdyhufg', 'Andhra Pradesh', '454564645645', 'vikram', 'Brahmin', 'Yajurvedi', 28, 5, 1, 69, 'Fair', 'O+', 'yes', 'gjhfgf', 'no', 'fghf', 'fghf', 'fgh', 'Engineer', '', 'bjh', 'yguy', '989', 'Government Job', 'ouyhy', 'Upto 1 Lac', '  ghui', 'dfg', 'dfg', 'dfg', 'dfg', '0', '0', '0', 0, '0', '0', 'dfg', '345', 'dfd dfgsd ', 'sdf asease ', 'sdfsdase er', 'fsd re ', 'Vishaka', '1', 'Makara (Capricornus)', 'Aadya', 'Dev Gan', '2', 'Yes', 'Never married', '02-02-2018_70301.jpg', '02-02-2018_21879nature.jpg', '', 'Nashik,454564645645,457544656456', 'Yes', 'no', '2017-12-15 11:25:09'),
(282, 'patil_1730208518', 'nilesh', 'shyam', 'patil', 'Groom', 'Maharashtra', 'Nashik', 'nashik', '9852145214', 'nilesh@gmail.com', '1981-06-06', '05:05', 'Monday', 'nashik', 'nashik', 'Maharashtra', '9984751421', 'nileshbhai', 'Brahmin', 'Kanva', 36, 5, 1, 63, 'Fair', 'O+', 'yes', 'ppp', 'no', '', 'ijhkjjkk', 'jjklklll', 'Graduate', '', 'kthm college', 'nashik', '98521452145', 'Goverment Job', 'employee', '5 - 10 Lac', 'nashik', 'shyam', 'job', 'rekha', 'job', '2', '1', '1', 3, '1', '2', 'nashik', '9858745142', 'krishna', 'pp', 'ppp', 'ppp', 'Ashwini', '1', 'Vrishabh (Taurus)', 'Aadya', 'Dev Gan', '8', 'No', 'divorcee', '02-02-2018_35336.jpg', '', '', 'Groom,divorcee,36,,Maharashtra,Nashik,9984751421,9852145214', 'Yes', 'no', '2017-12-21 06:16:31'),
(283, 'sawant_1439099322', 'rakhi', 'shyam', 'sawant', 'Bride', 'Maharashtra', 'Nashik', 'nashik road', '99852145214', 'rakhisawant@gmail.com', '1982-06-10', '04:11', 'Tuesday', 'nashik', 'nashik', 'Maharashtra', '985214521452', 'rakhiji', 'Brahmin', 'Kokanastha', 35, 5, 1, 65, 'Fair', 'O+', 'no', 'ppp', 'no', '', 'jljljklk', 'jklljl', 'Graduate', '', 'kthm college', 'nashik road', '9987458741', 'Goverment Job', 'employeee', '5 - 10 Lac', ' nashik', 'shyam', 'business', 'rekha', 'job', '1', '0', '1', 2, '0', '2', 'nashik', '9856985695', 'dolly', 'ppp', 'ppp', 'ppp', 'Pushya', '4', 'Karka (Cancer)', 'Antya', 'Manush Gan', '4', 'No', 'divorcee', '02-02-2018_111839.jpg', '', '', 'Nashik,985214521452,99852145214', 'Yes', 'no', '2017-12-21 06:47:18'),
(284, 'Patil_16060', 'Vikram', 'U', 'Patil', 'Groom', 'Maharashtra', 'Nashik', 'Nashik', '8965471236', 'vikram.mhaisdhune1@gmail.com', '1987-06-24', '09:30', 'Wednesday', 'Nashik', 'Nashik', 'Maharashtra', '2312514545', 'vikram', 'Brahmin', 'Rigvedi', 30, 6, 0, 78, 'Fair', 'A+', 'no', 'sdghfdg', 'yes', 'sfgsgs', 'sdfjty', 'aauidgha', 'PostGraduate', '', 'asdsad', 'asdad', '234324', 'None', '0', '', 'zxdZXDZD', 'asdas', 'asd', 'asd', 'asdsad', '0', '0', '0', 0, '0', '0', 'asdsad', '9794654798', 'sdsd sdfasd', 'as aease', 'ase EWQE', 'QWE', 'Mrigcira', '1', 'Dhanu (Sagittarius)', 'Aadya', 'Dev Gan', '11', 'No', 'Never married', '16-02-2018_172971.jpg', '16-02-2018_17435nature.jpg', '', 'Nashik,2312514545,8965471236', 'Yes', 'no', '2018-02-16 07:20:21'),
(287, '_10515', '', '', '', '', '', '', '', '', 'vikram.mhaisdhune@gmail.com', '', '', '', '', '', '', '', '1', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ',,,,,,,', 'No', 'no', '2018-02-27 12:41:24'),
(288, 'sam_850065147', 'sam', 'sam', 'sam', 'Groom', 'Maharashtra', 'Aurangabad', 'garkheda parisar ', '9420926936', 'sam@gmail.com', '1998-03-07', '02:53', 'Monday', 'nanded', 'aurangabad', 'Maharashtra', '9420926936', '123456789', 'Mali', 'Jire Mali', 22, 6, 2, 40, 'Fair', 'A+', 'yes', 'cricket', 'no', '', 'nothingq', 'I am cool', 'Doctor', '', 'MGM ', 'garkheda paisar', '9420926936', 'Private Job', 'manager', '1 - 2.5 Lac', 'garkheda', 'sam', 'nothing', 'sam', 'nothing ', '2', '1', '1', 3, '2', '1', 'garkheda ', '9402926936', 'sam', 'def', 'dev', 'dev', 'Ashwini', '1', 'Mesh (Aries)', 'Aadya', 'Dev Gan', '1', 'Yes', 'Never married', '', '', '', 'Groom,Never married,22,,Maharashtra,Aurangabad,9420926936,9420926936', 'No', 'no', '2020-03-07 02:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `matrimonial_divorcee`
--

CREATE TABLE `matrimonial_divorcee` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(150) NOT NULL,
  `previous_marriage_date_divorcee` varchar(50) NOT NULL,
  `date_of_divorce` varchar(50) NOT NULL,
  `child_status_divorce` varchar(150) NOT NULL,
  `child_custody_status_divorce` varchar(150) NOT NULL,
  `previous_marriage_address_divorce` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matrimonial_divorcee`
--

INSERT INTO `matrimonial_divorcee` (`id`, `unique_id`, `previous_marriage_date_divorcee`, `date_of_divorce`, `child_status_divorce`, `child_custody_status_divorce`, `previous_marriage_address_divorce`) VALUES
(40, 'navale_1147307365', '2006-04-05', '2010-01-15', '2', 'Living With Me', ''),
(43, 'patil_1730208518', '2011-11-11', '2012-12-12', '1', 'Living With Me', ''),
(44, 'sawant_1439099322', '2014-04-04', '2015-05-05', '1', 'Living With Me', 'shalimar ');

-- --------------------------------------------------------

--
-- Table structure for table `matrimonial_gallery`
--

CREATE TABLE `matrimonial_gallery` (
  `id` int(50) NOT NULL,
  `unique_id` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `is_del` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matrimonial_gallery`
--

INSERT INTO `matrimonial_gallery` (`id`, `unique_id`, `email`, `img`, `status`, `is_del`) VALUES
(12, 'Sharma_1070164495', 'vikram@gmail.com', '02-02-2018_109684.jpg', '', 'no'),
(13, 'Sharma_1070164495', 'vikram@gmail.com', '02-02-2018_159213.jpg', '', 'no'),
(14, 'Sharma_1070164495', 'vikram@gmail.com', '02-02-2018_64662.jpg', '', 'no'),
(15, 'Sharma_1070164495', 'vikram@gmail.com', '02-02-2018_34111.jpg', '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `matrimonial_widow`
--

CREATE TABLE `matrimonial_widow` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(150) NOT NULL,
  `previous_marriage_date_widow` varchar(50) NOT NULL,
  `date_partner_death_widow` varchar(50) NOT NULL,
  `child_status_widow` varchar(200) NOT NULL,
  `previous_marriage_address_widow` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `state_unique_id` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `is_del` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state_unique_id`, `state`, `is_del`) VALUES
(1, 'Maharashtra_547306366', 'Maharashtra', 'approved'),
(2, 'Gujrat_259234655', 'Gujarat', 'approved'),
(3, 'Rajasthan_730142681', 'Rajasthan', 'deleted'),
(4, 'Karnataka_123988305', 'Karnataka', 'approved'),
(5, 'Andra_pradesh_397709114', 'Andhra Pradesh', 'approved'),
(6, 'uttar_pradesh_879363859', 'Uttar Pradesh', 'deleted'),
(7, 'Tamilnadu_1563087594', 'Tamil Nadu', 'approved'),
(8, 'Goa_796382937', 'Goa', 'approved'),
(9, 'Madhyapradesh_1732650584', 'Madhya Pradesh', 'approved'),
(10, 'Uttar_Pradesh_2008181514', 'Uttar Pradesh', 'deleted');

-- --------------------------------------------------------

--
-- Table structure for table `success_stories`
--

CREATE TABLE `success_stories` (
  `id` int(10) NOT NULL,
  `bride_name` varchar(200) NOT NULL,
  `groom_name` varchar(200) NOT NULL,
  `marriage_date` varchar(50) NOT NULL,
  `ss_heading` varchar(200) NOT NULL,
  `photo` longblob NOT NULL,
  `photo_path` varchar(200) NOT NULL,
  `ss_desc` varchar(250) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `keyword` varchar(250) NOT NULL,
  `is_del` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `success_stories`
--

INSERT INTO `success_stories` (`id`, `bride_name`, `groom_name`, `marriage_date`, `ss_heading`, `photo`, `photo_path`, `ss_desc`, `state`, `city`, `keyword`, `is_del`) VALUES
(6, 'Ankita', 'Sujay', '2017-01-01', 'Shubh Mangal Savdhan', 0x32322d31325f3134373233363936323161727469636c652d32303134313233343131303531343133393130313030305f2831292e6a7067, '', 'I would like to thanks the whole team of bhavsar matrimony. After so much waiting and anticipating two hearts unite for a single beating and finds love, joy, peace, and contentment. Thanks to bhavsar matrimony for getting me connected with my better ', 'Maharashtra', 'Nashik', 'ANKITA , SUJAY', 'no'),
(8, 'Pooja', 'Shrikant', '2017-03-03', 'THANKS TO ALL.', 0x32312d31325f323533303033373236322e6a7067, '', ' demo     ', 'Maharashtra', 'Nashik', 'Pooja , Shrikant', 'no'),
(17, 'Raj', 'rani', '2017-04-04', 'Success Marrriage', 0x32312d31325f32303734333037353935332e6a7067, '', ' Thanks for bhavsar matrimony site for our success marriage       ', 'maharashtra', 'Nagpur', 'Raj , rani', 'no'),
(19, 'shree', 'shreya', '2016-04-10', 'Congrulation All of you ', 0x32312d31325f32313435333138373630342e6a7067, '', ' Good site ', 'Maharashtra', 'Nashik', 'shree , shreya', 'no'),
(20, 'Ram', 'Sita', '2015-05-15', 'Happy Marriage', 0x32322d31325f33323434323939353141736877696e695f5372656572616d5f43616e6469642d57656464696e672d50686f746f677261706865725f436f696d6261746f7265303432392e6a7067, '', ' hello    ', 'Maharashtra', 'Nashik', 'Ram , Sita', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL,
  `is_del` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `email`, `description`, `status`, `is_del`) VALUES
(56, 'vikram@gmail.com', 'I would like to thanks the whole team of brahmin matrimony.\r\nAfter so much waiting and anticipating two hearts unite for a single beating and finds love, joy, peace, and contentment. Thanks to brahmin matrimony for getting me connected with my better half.\r\n', 'approved', 'no'),
(57, 'meena@gmail.com', 'I thank brahmin matrimony  for making my life beautiful and i suggest this matrimony website for the people who are still looking for their dream life partners as this website provides a wide range of choices so that we can make a successful decision. I found my life partner here and today i changed my status from unmarried to married.', 'approved', 'no'),
(58, 'rekha@gmail.com', 'After so much waiting and anticipating two hearts unite for a single beating and finds love, joy, peace, and contentment. Thanks to Brahmin matrimony for getting me connected with my better half.', 'approved', 'no'),
(59, 'jai@gmail.com', 'After so much waiting and anticipating two hearts unite for a single beating and finds love, joy, peace, and contentment. Thanks to Jeevansathi.com for getting me connected with my better half.', 'unread', 'deleted'),
(60, 'rakhisawant@gmail.com', 'We are very much thankful to brahminmatrimony.com for bringing two of us together. You have brought true love to our lives. Our story starts with a phone call where we got positive vibes and fixed up a meeting with families and proceed further with BIG YES !!.. That was the moment I am considering him my soul mate, And after that We are incredibly happy and are enjoying planning our wedding and future together. Thanks Again to brahminmatrimony.com  !!', 'approved', 'no'),
(61, 'rakhisawant@gmail.com', 'keep it up ', 'unread', 'deleted'),
(62, 'vikram@gmail.com', 'ghg\r\n', 'unread', 'deleted'),
(63, 'vikram@gmail.com', 'dfwer', 'unread', 'deleted'),
(64, 'vikram@gmail.com', 'sfdsdaasd', 'unread', 'deleted'),
(65, 'vikram@gmail.com', 'zxzxc', 'unread', 'deleted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matrimonialall`
--
ALTER TABLE `matrimonialall`
  ADD PRIMARY KEY (`candidate_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `matrimonial_divorcee`
--
ALTER TABLE `matrimonial_divorcee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matrimonial_gallery`
--
ALTER TABLE `matrimonial_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matrimonial_widow`
--
ALTER TABLE `matrimonial_widow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success_stories`
--
ALTER TABLE `success_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=296;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `matrimonialall`
--
ALTER TABLE `matrimonialall`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=289;

--
-- AUTO_INCREMENT for table `matrimonial_divorcee`
--
ALTER TABLE `matrimonial_divorcee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `matrimonial_gallery`
--
ALTER TABLE `matrimonial_gallery`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `matrimonial_widow`
--
ALTER TABLE `matrimonial_widow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `success_stories`
--
ALTER TABLE `success_stories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
