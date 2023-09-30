-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2023 at 11:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `status`, `img`) VALUES
(1, 'Hasnain Sadid', 'sadid@gmail.com', 'e105c0d48507572c33c3667c46b35ac92999bb7e', 1, 'dist/img/user1.jpg'),
(2, 'Ikbal Hossain', 'ikbal@gmail.com', '407787d868a438469f1705b51ebe2e19b5f98cbf', 1, 'dist/img/ikbal.jpg'),
(3, 'Mamun Or Rashid', 'mamun@gmail.com', 'f87095637ed82c1e6d131b714674b30174b7e83c', 1, 'dist/img/mamun.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `p_id` int(50) NOT NULL,
  `date` date NOT NULL,
  `reason` varchar(100) NOT NULL,
  `doc_id` int(15) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `p_id`, `date`, `reason`, `doc_id`, `status`) VALUES
(1, 1, '2023-09-16', 'demo text.', 4, 1),
(2, 3, '2023-09-17', 'Demo text', 1, 1),
(3, 6, '2023-09-16', 'demo text.', 4, 1),
(4, 8, '2023-09-17', 'Demo text', 2, 1),
(5, 14, '2023-09-18', 'Demo text', 6, 0),
(9, 14, '2023-09-20', 'Increasing pain', 3, 1),
(10, 14, '2023-09-21', 'demo text', 19, 1),
(11, 14, '2023-09-23', 'demo text', 5, 1),
(12, 14, '2023-09-20', 'demo text', 2, 1),
(13, 14, '2023-09-19', 'demo text', 2, 1),
(14, 14, '2023-09-26', 'Increasing back pain', 16, 1),
(15, 15, '2023-09-27', 'Increasing pain', 4, 0),
(16, 16, '2023-09-27', 'demo text', 4, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `appointment_view`
-- (See below for the actual view)
--
CREATE TABLE `appointment_view` (
`id` int(11)
,`patient` varchar(50)
,`address` varchar(100)
,`doctor` varchar(50)
,`date` date
,`reason` varchar(100)
,`status` tinyint(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `description`, `status`) VALUES
(1, 'Orthopedics', 'Orthopedics focuses on treating the musculoskeletal system. This system comprises muscles, bones, joints, ligaments, and tendons.', 1),
(2, 'Medicine', 'Medicines are chemicals or compounds used to cure, halt, or prevent disease; ease symptoms; or help in the diagnosis of illnesses. Advances in medicines have enabled doctors to cure many diseases and save lives.', 1),
(3, 'Dermatology', 'Dermatology involves the study, research, diagnosis, and management of any health conditions that may affect the skin, fat hair, nails, and membranes.', 1),
(4, 'Hematology', 'Hematology is the science or study of blood and blood diseases.', 1),
(5, 'Psychology', 'Psychology is the scientific study of the mind and behavior.', 1),
(6, 'Gynaecology', 'Gynaecology or gynecology is the area of medicine that involves the treatment of women\'s diseases, especially those of the reproductive organs.', 1),
(8, 'Neurology', 'Neurology is the branch of medicine that deals with disorders of the nervous system, which include the brain, blood vessels, muscles and nerves.', 1),
(9, 'Pediatrics', 'Pediatrics is the branch of medicine that involves the medical care of infants, children, adolescents, and young adults.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `img` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `d_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `designation`, `email`, `password`, `phone`, `img`, `status`, `d_id`) VALUES
(1, 'Dr. Amzad Hossain', 'Professor', 'amzadhossain@gmail.com', '5f6955d227a320c7f1f6c7da2a6d96a851a8118f', '01723835125', 'dist/img/user8-128x128.jpg', 1, 1),
(2, 'Dr. Nazul Islam', 'Associate Professor', 'nazrulislam@gmail.com', '5f6955d227a320c7f1f6c7da2a6d96a851a8118f', '01521782881', 'dist/img/doctor_2.jpg', 1, 4),
(3, 'Dr. Nadia Sultana', 'Consultant ', 'nadiasultana@gmail.com', '5f6955d227a320c7f1f6c7da2a6d96a851a8118f', '01723835126', 'dist/img/user3-128x128.jpg', 1, 3),
(4, 'Dr. Mehedi Hasan', 'Associate Professor', 'shuvo@gmail.com', '5f6955d227a320c7f1f6c7da2a6d96a851a8118f', '01521782887', 'dist/img/avatar4.png', 1, 5),
(5, 'Dr. Nasrin Jaman', 'Professor ', 'dr.n.jaman@gmail.com', '5f6955d227a320c7f1f6c7da2a6d96a851a8118f', '01723835126', 'dist/img/user7-128x128.jpg', 1, 6),
(6, 'Dr. Masum Hossain', 'Assistant Professor', 'dr.masum@gmail.com', '5f6955d227a320c7f1f6c7da2a6d96a851a8118f', '01521782887', 'dist/img/avatar5.png', 1, 8),
(16, 'Dr. Abdul Malek', 'Professor', 'drmalek@gmail.com', '73d3febb659ea118d8f1f9f1ff5f5ae09f3ca6d6', '01521782881', 'dist/img/avatar.png', 1, 8),
(17, 'Dr. Humayra', 'Professor', 'humayra@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '01420733512', 'dist/img/doctor_3.jpg', 1, 1),
(19, 'Dr. Shahin Kamal', 'Professor', 'shahin@gmail.com', '2bef2169b8a5ac06500af683dbd89cca348d175b', '01420733509', 'dist/img/user6-128x128.jpg', 1, 9);

-- --------------------------------------------------------

--
-- Stand-in structure for view `doc_dept_view`
-- (See below for the actual view)
--
CREATE TABLE `doc_dept_view` (
`doctors_id` int(11)
,`name` varchar(50)
,`designation` varchar(50)
,`department` varchar(50)
,`email` varchar(50)
,`phone` varchar(15)
,`img` varchar(100)
,`status` tinyint(1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `doc_patient`
-- (See below for the actual view)
--
CREATE TABLE `doc_patient` (
`name` varchar(50)
,`address` varchar(100)
,`dob` date
,`gender` enum('Male','Female')
,`blood_grp` varchar(10)
,`email` varchar(50)
,`phone` varchar(20)
,`doctor` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `date_discharge` date NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `p_id`, `date_discharge`, `amount_paid`, `status`) VALUES
(1, 14, '2023-09-28', '150', 0),
(2, 5, '2023-09-28', '120', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `blood_grp` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `d_id` int(10) NOT NULL,
  `trt_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `address`, `dob`, `gender`, `blood_grp`, `email`, `password`, `phone`, `d_id`, `trt_id`) VALUES
(1, 'Ali Hossain', 'Mirpur', '1993-03-08', 'Male', 'AB+', 'alihossain@gmail.com', 'fbe14af7a98b711b883b4d4e429a51cfd0ca7cfa', '01723835127', 4, 2),
(2, 'Mossaraf Khan', 'Banani', '1989-03-17', 'Male', 'O+', 'mosharraf@gmail.com', '8ae5912da117090e0f6427dc2833d95e3cdd1d05', '01798546235', 4, 1),
(3, 'Iqbal Molla', 'Mirpur', '1995-07-18', 'Male', 'A+', 'iqbal99@gmail.com', '65f568e1b3ac89d15bd804b9f1bd95cd37ca0ecb', '01723837589', 4, 3),
(4, 'Nargis Begum', 'Rampura', '1992-03-17', 'Female', 'B+', 'nargis@gmail.com', 'c3236c9bee12894f14c79d16297d21ffa93cbc77', '01934781690', 4, 5),
(5, 'Rajani Banu', 'Mohakhali', '1992-08-29', 'Female', 'O-', 'rajani@gmail.com', 'f2a11732b3327ae3a2ba1e78509f9d5ed46c754f', '01347500861', 4, 8),
(6, 'Jamal Akter', 'Hatirjheel', '1996-12-31', 'Male', 'B+', 'jamal@gmail.com', 'e0195770807aa8c82b0b128d9c0423b5ad035172', '01742557780', 4, 4),
(7, 'Tofayeel Ahmed Tuhin', 'Uttara', '2000-09-22', 'Male', 'B+', 'tofayeeltuhin@gmail.com', '6290094d18c7086fa6ae322c2a8bdecf184372d7', '01420733512', 4, 1),
(8, 'Rasel Ahmed', 'Bashundhara R/A', '1998-05-21', 'Male', 'O+', 'rasel@gmail.com', '91f2bbf604a2b02aa1cc14209d21f9852bba1829', '01992144720', 4, 5),
(9, 'Kamruzzaman Khan', 'Rampura', '1995-11-29', 'Male', 'A-', 'khamruzzaman@gmail.com', 'eba082ff45517c06bd365c2fde1fc77cda7a8f6f', '01541330870', 4, 3),
(10, 'Ataullah Khan', 'Farmgate', '1989-11-09', 'Male', 'AB+', 'ataullah@gmail.com', '91d66c777f21155c12200865f30bec795ec0a8d5', '01541785409', 4, 1),
(11, 'Kamrunnahar', 'Motijheel', '1994-08-07', 'Female', 'B+', 'kamrunnahar@gmail.com', '50a9967c5b8eb6c48e9fe167be85672f6d192da6', '01420739150', 4, 8),
(12, 'Farid Ahmed', 'Savar', '1994-06-07', 'Male', 'O+', 'farid@gmail.com', '6a214fde6c1f8c84902a5576bbe98834623913cc', '01521753951', 4, 8),
(13, 'Rahima Banu', 'Mirpur', '1986-06-23', 'Female', 'O+', 'rahima@gmail.com', '9c48958c94e20018a2c6cd205bc8b0ae095ace8a', '01511783108', 4, 4),
(14, 'Labiba Mim', 'Mirpur', '2005-03-09', 'Female', 'B+', 'mim@gmail.com', '51034e408cbd36dcbecb529031b34ec09535f1f7', '01798537130', 4, 2),
(15, 'Shah Rukh Khan', 'Dhanmondi', '1974-07-24', 'Male', 'O+', 'hero@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '01798537139', 4, 0),
(16, 'Sumon Hossain', 'Badda', '2000-04-10', 'Male', 'A+', 'sumon@gmail.com', '6fc525d8e16be49daef17d5a9eeeffba73c2a82b', '01421921005', 4, 0),
(17, 'Billal Mia', 'Rampura', '1992-04-23', 'Male', 'O+', 'billal@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '01798537121', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cost` int(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id`, `name`, `cost`, `status`) VALUES
(1, 'Blood Test', 150, 1),
(2, 'Echocardiogram', 550, 1),
(3, 'Bone Density Testing', 345, 1),
(4, 'IV Therapy', 220, 1),
(5, 'CT Scan', 167, 1),
(8, 'Oxygen therapy', 137, 1);

-- --------------------------------------------------------

--
-- Structure for view `appointment_view`
--
DROP TABLE IF EXISTS `appointment_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `appointment_view`  AS SELECT `appointment`.`id` AS `id`, `patients`.`name` AS `patient`, `patients`.`address` AS `address`, `doctors`.`name` AS `doctor`, `appointment`.`date` AS `date`, `appointment`.`reason` AS `reason`, `appointment`.`status` AS `status` FROM ((`doctors` join `patients`) join `appointment`) WHERE `doctors`.`id` = `appointment`.`doc_id` AND `patients`.`id` = `appointment`.`p_id` ;

-- --------------------------------------------------------

--
-- Structure for view `doc_dept_view`
--
DROP TABLE IF EXISTS `doc_dept_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `doc_dept_view`  AS SELECT `d`.`id` AS `doctors_id`, `d`.`name` AS `name`, `d`.`designation` AS `designation`, `dept`.`name` AS `department`, `d`.`email` AS `email`, `d`.`phone` AS `phone`, `d`.`img` AS `img`, `d`.`status` AS `status` FROM (`doctors` `d` join `department` `dept`) WHERE `d`.`d_id` = `dept`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `doc_patient`
--
DROP TABLE IF EXISTS `doc_patient`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `doc_patient`  AS SELECT `patients`.`name` AS `name`, `patients`.`address` AS `address`, `patients`.`dob` AS `dob`, `patients`.`gender` AS `gender`, `patients`.`blood_grp` AS `blood_grp`, `patients`.`email` AS `email`, `patients`.`phone` AS `phone`, `doctors`.`name` AS `doctor` FROM (`doctors` join `patients`) WHERE `doctors`.`id` = `patients`.`d_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
