-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2018 at 10:39 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `advice`
--

CREATE TABLE `advice` (
  `Date_of_advice` date NOT NULL,
  `Time` time NOT NULL,
  `serial_no` int(11) NOT NULL,
  `Medicine_name` varchar(20) NOT NULL,
  `M_Quantity` int(11) NOT NULL,
  `Times_per_day` int(11) NOT NULL,
  `Morning_before_meal` int(11) NOT NULL,
  `Morning_after-meal` int(11) NOT NULL,
  `noon_before_meal` int(11) NOT NULL,
  `noon_after_meal` int(11) NOT NULL,
  `dinner_before-meal` int(11) NOT NULL,
  `dinner_after_meal` int(11) NOT NULL,
  `test_serial` int(11) NOT NULL,
  `test_name` varchar(20) NOT NULL,
  `Advisor` varchar(20) NOT NULL,
  `A_designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advice`
--

INSERT INTO `advice` (`Date_of_advice`, `Time`, `serial_no`, `Medicine_name`, `M_Quantity`, `Times_per_day`, `Morning_before_meal`, `Morning_after-meal`, `noon_before_meal`, `noon_after_meal`, `dinner_before-meal`, `dinner_after_meal`, `test_serial`, `test_name`, `Advisor`, `A_designation`) VALUES
('0000-00-00', '00:00:00', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 2, '', 'akif', 'dd'),
('0000-00-00', '00:00:00', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 234, '', 'sfgd', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doctor_ID` int(11) NOT NULL,
  `D_First_name` varchar(20) NOT NULL,
  `D_middle_name` varchar(20) NOT NULL,
  `D_last_name` varchar(20) NOT NULL,
  `D_Date_of_birth` date NOT NULL,
  `D_Date_of_Appoinment` date NOT NULL,
  `D_Education_serial` int(11) NOT NULL,
  `D_Degree` varchar(10) NOT NULL,
  `D_Board` varchar(10) NOT NULL,
  `D_Year` int(11) NOT NULL,
  `D_division` varchar(10) NOT NULL,
  `D_position` varchar(10) NOT NULL,
  `D_experience_serial` int(11) NOT NULL,
  `D_job_title` varchar(20) NOT NULL,
  `D_From_Year` int(11) NOT NULL,
  `D_to_year` int(11) NOT NULL,
  `D_organization` varchar(20) NOT NULL,
  `Doctor_choice` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctor_ID`, `D_First_name`, `D_middle_name`, `D_last_name`, `D_Date_of_birth`, `D_Date_of_Appoinment`, `D_Education_serial`, `D_Degree`, `D_Board`, `D_Year`, `D_division`, `D_position`, `D_experience_serial`, `D_job_title`, `D_From_Year`, `D_to_year`, `D_organization`, `Doctor_choice`) VALUES
(12312, '', '', '', '0000-00-00', '0000-00-00', 213, '', '', 0, '', '', 0, '', 0, 0, '', 'American_Medical_Soc'),
(234542, 'akif', '', '', '0000-00-00', '0000-00-00', 0, '', '', 0, '', '', 0, '', 0, 0, '', 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `Supplier_ID` int(11) NOT NULL,
  `Supplier_name` varchar(20) NOT NULL,
  `Date_of_Supply` date NOT NULL,
  `Medicine_ID` int(11) NOT NULL,
  `Medicine_Name` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Unit_price` double NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Date_of_manufacture` date NOT NULL,
  `Expiry_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`Supplier_ID`, `Supplier_name`, `Date_of_Supply`, `Medicine_ID`, `Medicine_Name`, `Type`, `Unit_price`, `Quantity`, `Date_of_manufacture`, `Expiry_Date`) VALUES
(23, 'sdf', '2018-03-07', 132, 'sdaf', 'rh', 35, 1, '2018-03-07', '2018-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `Nurse_ID` int(11) NOT NULL,
  `N_First_name` varchar(20) NOT NULL,
  `N_Middle_name` varchar(20) NOT NULL,
  `N_Last_name` varchar(20) NOT NULL,
  `N_Date_of_birth` date NOT NULL,
  `N_Date_of_App` date NOT NULL,
  `Education_serial` int(11) NOT NULL,
  `Degree` varchar(10) NOT NULL,
  `Board` varchar(10) NOT NULL,
  `Year` int(11) NOT NULL,
  `division` varchar(20) NOT NULL,
  `position` varchar(10) NOT NULL,
  `Experience_serial` int(11) NOT NULL,
  `Job_Title` varchar(20) NOT NULL,
  `From_Year` int(11) NOT NULL,
  `To_Year` int(11) NOT NULL,
  `Organization` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`Nurse_ID`, `N_First_name`, `N_Middle_name`, `N_Last_name`, `N_Date_of_birth`, `N_Date_of_App`, `Education_serial`, `Degree`, `Board`, `Year`, `division`, `position`, `Experience_serial`, `Job_Title`, `From_Year`, `To_Year`, `Organization`) VALUES
(234, 'sdf', 'sdf', '', '0000-00-00', '0000-00-00', 1, '', 'dhaka', 1990, '', '', 1, 'pharamcist', 2005, 2007, ''),
(34223, '', '', '', '0000-00-00', '0000-00-00', 324, '', '', 0, '', '', 0, 'busfdfdsgfd', 0, 0, 'sfbd'),
(5475, 'jasia', '', '', '0000-00-00', '0000-00-00', 0, '', '', 0, '', '', 0, '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_ID` int(11) NOT NULL,
  `date_of_admission` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `first_name` varchar(20) DEFAULT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `mobile1` int(11) DEFAULT NULL,
  `mobile2` int(11) DEFAULT NULL,
  `pr_street_no` int(11) DEFAULT NULL,
  `pr_street_name` varchar(20) DEFAULT NULL,
  `pr_area` varchar(20) DEFAULT NULL,
  `pr_thana` varchar(20) DEFAULT NULL,
  `pr_district` varchar(20) DEFAULT NULL,
  `pstreet_no` int(11) DEFAULT NULL,
  `pstreet_name` varchar(20) DEFAULT NULL,
  `parea` varchar(20) DEFAULT NULL,
  `pthana` varchar(20) DEFAULT NULL,
  `pdistrict` varchar(20) DEFAULT NULL,
  `profession` varchar(20) DEFAULT NULL,
  `amount_deposited` varchar(20) DEFAULT NULL,
  `choice` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_ID`, `date_of_admission`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `mobile1`, `mobile2`, `pr_street_no`, `pr_street_name`, `pr_area`, `pr_thana`, `pr_district`, `pstreet_no`, `pstreet_name`, `parea`, `pthana`, `pdistrict`, `profession`, `amount_deposited`, `choice`) VALUES
(1, '2018-05-08 05:07:26', 'akif', 'hossain', 'bhuiyan', '1996-07-14', 1713031975, 0, 2, 'dsf', 'shabagh', 'ffsd', 'sdg', 11, 'asdfa', 'bfsd', '', '', 'student', '2000', 'Ward');

-- --------------------------------------------------------

--
-- Table structure for table `patient_investigation`
--

CREATE TABLE `patient_investigation` (
  `Name` varchar(20) DEFAULT NULL,
  `Height` double DEFAULT NULL,
  `Weight` double DEFAULT NULL,
  `symptoms` varchar(50) DEFAULT NULL,
  `Blood_pressure` varchar(20) DEFAULT NULL,
  `FoodHabit_Breakfast` varchar(20) DEFAULT NULL,
  `FoodHabit_Lunch` varchar(20) DEFAULT NULL,
  `FoodHabit_Dinner` varchar(20) DEFAULT NULL,
  `Hobby` varchar(20) DEFAULT NULL,
  `Sports` varchar(20) DEFAULT NULL,
  `Others` varchar(20) DEFAULT NULL,
  `Disease` varchar(20) DEFAULT NULL,
  `Doctor_ID` int(11) DEFAULT NULL,
  `Doctor_Name` varchar(20) DEFAULT NULL,
  `Designation` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_investigation`
--

INSERT INTO `patient_investigation` (`Name`, `Height`, `Weight`, `symptoms`, `Blood_pressure`, `FoodHabit_Breakfast`, `FoodHabit_Lunch`, `FoodHabit_Dinner`, `Hobby`, `Sports`, `Others`, `Disease`, `Doctor_ID`, `Doctor_Name`, `Designation`) VALUES
('akif', 6.1, 85, '', '120!', 'milk', '', '', '', 'Cricket', '', 'scarvy', 111, 'maria', 'nurse'),
('RAIDA', 5.1, 55, '', '', 'egg', '', '', 'reading', 'None', 'Writing', 'autism', 1123, 'akif', 'professor');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `Ward_ID` int(11) NOT NULL,
  `Ward_name` varchar(20) NOT NULL,
  `Registrar_ID` int(11) NOT NULL,
  `Registrar_Name` varchar(20) NOT NULL,
  `Nurse_SuperVisor_ID` int(11) NOT NULL,
  `Nurse_SuperVisor_Name` varchar(20) NOT NULL,
  `Serial_no` int(11) NOT NULL,
  `Bed_no` int(11) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Rent` double NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`Ward_ID`, `Ward_name`, `Registrar_ID`, `Registrar_Name`, `Nurse_SuperVisor_ID`, `Nurse_SuperVisor_Name`, `Serial_no`, `Bed_no`, `Type`, `Rent`, `Status`) VALUES
(234, '', 0, 'sfdg', 0, '', 0, 0, 'gf', 0, 'asdf'),
(74856, 'south wing', 32, 'akif', 43, 'jasia', 0, 0, '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
