-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 07:38 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prueba_arnold_lainez`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalogos`
--

CREATE TABLE `catalogos` (
  `id` int(11) NOT NULL,
  `valor` varchar(100) DEFAULT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `id_padre` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catalogos`
--

INSERT INTO `catalogos` (`id`, `valor`, `grupo`, `id_padre`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'SAN SALVADOR', 'DEPARTAMENTO', NULL, NULL, '2023-07-04 15:25:41', '2023-07-04 15:25:41'),
(2, 'SAN SALVADOR', 'MUNICIPIO', 1, NULL, '2023-07-04 15:26:58', '2023-07-04 15:26:58'),
(3, 'AGUILARES', 'MUNICIPIO', 1, NULL, '2023-07-04 15:35:51', '2023-07-04 15:35:51'),
(4, 'APOPA', 'MUNICIPIO', 1, NULL, '2023-07-04 15:35:51', '2023-07-04 15:35:51'),
(5, 'SAN MIGUEL', 'DEPARTAMENTO', NULL, NULL, '2023-07-04 15:36:51', '2023-07-04 15:36:51'),
(6, 'SANTA ANA', 'DEPARTAMENTO', NULL, NULL, '2023-07-04 15:36:52', '2023-07-04 15:36:52'),
(7, 'SAN MIGUEL', 'MUNICIPIO', 5, NULL, '2023-07-04 15:49:54', '2023-07-04 15:49:54'),
(8, 'CIUDAD BARRIOS', 'MUNICIPIO', 5, NULL, '2023-07-04 15:49:54', '2023-07-04 15:49:54'),
(9, 'SANTA ANA', 'MUNICIPIO', 6, NULL, '2023-07-04 15:50:55', '2023-07-04 15:50:55'),
(10, 'COATEPEQUE', 'MUNICIPIO', 6, NULL, '2023-07-04 15:50:56', '2023-07-04 15:50:56'),
(11, 'CABAÑAS', 'DEPARTAMENTO', NULL, NULL, '2023-07-04 15:52:08', '2023-07-04 15:52:08'),
(12, 'ILOBASCO', 'MUNICIPIO', 11, NULL, '2023-07-04 15:53:05', '2023-07-04 15:53:05'),
(13, 'SENSUNTEPEQUE', 'MUNICIPIO', 11, NULL, '2023-07-04 15:53:05', '2023-07-04 15:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `telefono` varchar(8) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `id_municipio` int(11) DEFAULT NULL,
  `id_depto` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `apellido`, `correo`, `telefono`, `direccion`, `id_municipio`, `id_depto`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Arnold', 'Lainez', 'admin@admin.com', '90909090', 'ilobasco, cabañas', 12, 11, NULL, '2023-07-04 21:59:26', '2023-07-04 22:21:40'),
(2, 'Empleado 1', 'Apellido 1', 'admin@admin.com', '90909090', 'add 1.1', 3, 1, '2023-07-04 23:27:12', '2023-07-04 22:20:40', '2023-07-04 23:27:12'),
(3, 'empleado 2', 'Apellido 2', 'admin@admin.com', '90909009', 'add 2', 10, 6, '2023-07-04 23:37:33', '2023-07-04 22:21:10', '2023-07-04 23:37:33'),
(4, 'Empleado 3 update', 'apellido 3', 'admin@admin.com', '12341234', 'add 3', 13, 11, NULL, '2023-07-04 22:21:32', '2023-07-04 23:36:35'),
(5, 'Empleado 4', 'Apellido 4', 'admin@admin.com', '90909090', 'add 4', 3, 1, NULL, '2023-07-04 22:53:22', '2023-07-04 22:53:22'),
(6, 'Jose1.1', 'Lopez', 'jose.lopez@email.com', '90099090', 'add update', 10, 6, NULL, '2023-07-04 23:30:30', '2023-07-04 23:36:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalogos`
--
ALTER TABLE `catalogos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalogos`
--
ALTER TABLE `catalogos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
