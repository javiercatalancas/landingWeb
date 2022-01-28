-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-01-2022 a las 19:21:23
-- Versión del servidor: 8.0.22
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `landingdapda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_01_27_103245_usuario_promocion', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `id` int NOT NULL,
  `id_modelo` int NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`id`, `id_modelo`, `nombre`) VALUES
(1, 1, 'Corsa'),
(2, 1, 'Astra'),
(3, 2, 'Corsa'),
(4, 2, 'Astra'),
(5, 3, 'Crossland'),
(6, 3, 'Mokka');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariopromocion`
--

CREATE TABLE `usuariopromocion` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int NOT NULL,
  `vehicleclass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `call` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehiclemodel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuariopromocion`
--

INSERT INTO `usuariopromocion` (`id`, `created_at`, `updated_at`, `name`, `phone`, `vehicleclass`, `call`, `lastname`, `email`, `vehiclemodel`) VALUES
(1, '2022-01-28 16:36:13', '2022-01-28 16:36:13', 'Javier', 953636265, '3', 'morning', 'Catalán', 'pedrito@gmail.com', 'Crossland'),
(2, '2022-01-28 17:31:57', '2022-01-28 17:31:57', 'holi', 666666666, '3', 'morning', 'Casado', 'emaileditado@gmail.com', 'Crossland'),
(3, '2022-01-28 17:34:17', '2022-01-28 17:34:17', 'holi', 666666666, '3', 'tarde', 'sdfsdfsd', 'sdfsdfsd@gmail.com', 'Crossland'),
(4, '2022-01-28 17:51:44', '2022-01-28 17:51:44', 'holi', 666666666, '3', 'morning', 'sdfsdfsd', 'javier.catalan7@gmail.com', 'Crossland'),
(5, '2022-01-28 17:52:22', '2022-01-28 17:52:22', 'holi', 666666666, '1', 'morning', 'sdfsdfsd', 'javier.catalan7@gmail.com', 'Corsa'),
(6, '2022-01-28 17:53:34', '2022-01-28 17:53:34', 'holi', 666666666, '1', 'morning', 'Casado', 'javier.catalan7@gmail.com', 'Corsa'),
(7, '2022-01-28 17:54:32', '2022-01-28 17:54:32', 'holi', 666666666, '1', 'morning', 'Casado', 'javier.catalan7@gmail.com', 'Corsa'),
(8, '2022-01-28 17:56:54', '2022-01-28 17:56:54', 'holi', 666666666, '2', 'morning', 'Casado', 'javier.catalan7@gmail.com', 'Corsa'),
(9, '2022-01-28 18:04:58', '2022-01-28 18:04:58', 'holi', 666666666, '1', 'morning', 'Casado', 'javier.catalan7@gmail.com', 'Corsa'),
(10, '2022-01-28 18:06:32', '2022-01-28 18:06:32', 'holi', 666666666, '2', 'morning', 'Casado', 'javier.catalan7@gmail.com', 'Corsa'),
(11, '2022-01-28 18:11:20', '2022-01-28 18:11:20', 'holi', 666666666, '1', 'morning', 'Casado', 'javier.catalan7@gmail.com', 'Corsa'),
(12, '2022-01-28 18:11:58', '2022-01-28 18:11:58', 'holi', 666666666, '3', 'morning', 'Casado', 'javier.catalan7@gmail.com', 'Crossland'),
(13, '2022-01-28 18:13:40', '2022-01-28 18:13:40', 'holi', 666666666, '1', 'morning', 'sdfsdfsd', 'javier.catalan7@gmail.com', 'Corsa'),
(14, '2022-01-28 18:17:11', '2022-01-28 18:17:11', 'holi', 666666666, '1', 'morning', 'Casado', 'javier.catalan7@gmail.com', 'Corsa'),
(15, '2022-01-28 18:18:12', '2022-01-28 18:18:12', 'asd', 666666666, '1', 'morning', 'asdd', 'javier.catalan7@gmail.com', 'Corsa'),
(16, '2022-01-28 18:19:05', '2022-01-28 18:19:05', 'holi', 666666666, '1', 'morning', 'sdfsdfsd', 'javier.catalan7@gmail.com', 'Corsa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id` int NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id`, `nombre`) VALUES
(1, 'Turismo'),
(2, 'Comercial'),
(3, 'Todoterreno');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_modelo` (`id_modelo`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuariopromocion`
--
ALTER TABLE `usuariopromocion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuariopromocion`
--
ALTER TABLE `usuariopromocion`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `fk_modelo` FOREIGN KEY (`id_modelo`) REFERENCES `vehiculo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
