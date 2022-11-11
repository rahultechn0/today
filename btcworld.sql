-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 16, 2022 at 12:53 PM
-- Server version: 5.7.34-0ubuntu0.18.04.1
-- PHP Version: 7.2.34-22+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btcworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `matchingincomes`
--

CREATE TABLE `matchingincomes` (
  `id` int(11) NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(20,6) DEFAULT '0.000000',
  `user_id` int(11) DEFAULT '0',
  `left_point` int(11) DEFAULT '0',
  `right_point` int(10) DEFAULT '0',
  `matching_point` int(11) DEFAULT '0',
  `left_business` decimal(20,6) DEFAULT '0.000000',
  `right_business` decimal(20,6) DEFAULT '0.000000',
  `matching_business` decimal(20,6) DEFAULT '0.000000',
  `total_left` int(10) DEFAULT '0',
  `total_right` int(10) DEFAULT '0',
  `carry_left` decimal(20,6) DEFAULT '0.000000',
  `carry_right` decimal(20,6) DEFAULT '0.000000',
  `noncapping_income` decimal(20,6) DEFAULT '0.000000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matchingincomes`
--

INSERT INTO `matchingincomes` (`id`, `type`, `amount`, `user_id`, `left_point`, `right_point`, `matching_point`, `left_business`, `right_business`, `matching_business`, `total_left`, `total_right`, `carry_left`, `carry_right`, `noncapping_income`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Matching Income', '7.000000', 10, 1, 1, 1, '200.000000', '2000.000000', '200.000000', 200, 2000, '0.000000', '1800.000000', '13.000000', '2022-04-30 04:17:54', '2022-04-30 04:17:54', NULL),
(2, 'Matching Income', '5.000000', 13, 1, 1, 1, '50.000000', '11000.000000', '50.000000', 50, 11000, '0.000000', '10950.000000', '0.000000', '2022-04-30 04:17:54', '2022-04-30 04:17:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `metarequests`
--

CREATE TABLE `metarequests` (
  `id` int(11) NOT NULL,
  `trans_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pLimit` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT '0',
  `trans_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(20,6) DEFAULT NULL,
  `tokenAmt` decimal(20,6) DEFAULT NULL,
  `wallet_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `days` decimal(6,2) DEFAULT '0.00',
  `dailyRoi` decimal(10,6) DEFAULT '0.000000',
  `tariffId` int(1) DEFAULT '0' COMMENT '%',
  `status` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkCount` int(1) DEFAULT '0',
  `curl_response` longtext COLLATE utf8mb4_unicode_ci,
  `error_response` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metarequests`
--

INSERT INTO `metarequests` (`id`, `trans_type`, `pLimit`, `user_id`, `trans_id`, `amount`, `tokenAmt`, `wallet_address`, `days`, `dailyRoi`, `tariffId`, `status`, `checkCount`, `curl_response`, `error_response`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Package invest', '18 Months', 10, '0x5064f310a397397cfd32eac97bb09e3cd400c58ba3e6227368ed472ee815aa96', '100.000000', '50.000000', '0x5b61eb7b0fff94b4076a74715c625f7cd888c78a', '30.00', '0.266670', 2, 'Success', 1, ',{\"success\":true,\"message\":\"tx detail\",\"data\":{\"blockHash\":\"0x8510f04fbaa41b983cacb994b6d6648d67e149829a06a7d16a212925358e2e9c\",\"blockNumber\":18894152,\"contractAddress\":null,\"cumulativeGasUsed\":5451482,\"from\":\"0x5b61eb7b0fff94b4076a74715c625f7cd888c78a\",\"gasUsed\":61092,\"logs\":[{\"address\":\"0xD788F663b111fcA0428A8bAc96E5530E7123a8Db\",\"topics\":[\"0x8c5be1e5ebec7d5bd14f71427d1e84f3dd0314c0f7b2291e5b200ac8c7c3b925\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\"],\"data\":\"0x000000000000000000000000000000000000000000000002b5e3af16b1880000\",\"blockNumber\":18894152,\"transactionHash\":\"0x5064f310a397397cfd32eac97bb09e3cd400c58ba3e6227368ed472ee815aa96\",\"transactionIndex\":16,\"blockHash\":\"0x8510f04fbaa41b983cacb994b6d6648d67e149829a06a7d16a212925358e2e9c\",\"logIndex\":43,\"removed\":false,\"id\":\"log_089f3e40\"},{\"address\":\"0xD788F663b111fcA0428A8bAc96E5530E7123a8Db\",\"topics\":[\"0xddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef\",\"0x0000000000000000000000005b61eb7b0fff94b4076a74715c625f7cd888c78a\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\"],\"data\":\"0x000000000000000000000000000000000000000000000002b5e3af16b1880000\",\"blockNumber\":18894152,\"transactionHash\":\"0x5064f310a397397cfd32eac97bb09e3cd400c58ba3e6227368ed472ee815aa96\",\"transactionIndex\":16,\"blockHash\":\"0x8510f04fbaa41b983cacb994b6d6648d67e149829a06a7d16a212925358e2e9c\",\"logIndex\":44,\"removed\":false,\"id\":\"log_875018e6\"},{\"address\":\"0xD788F663b111fcA0428A8bAc96E5530E7123a8Db\",\"topics\":[\"0x8c5be1e5ebec7d5bd14f71427d1e84f3dd0314c0f7b2291e5b200ac8c7c3b925\",\"0x0000000000000000000000005b61eb7b0fff94b4076a74715c625f7cd888c78a\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\"],\"data\":\"0x000000000000000000000000000000000000000001217f5950e09819c8980000\",\"blockNumber\":18894152,\"transactionHash\":\"0x5064f310a397397cfd32eac97bb09e3cd400c58ba3e6227368ed472ee815aa96\",\"transactionIndex\":16,\"blockHash\":\"0x8510f04fbaa41b983cacb994b6d6648d67e149829a06a7d16a212925358e2e9c\",\"logIndex\":45,\"removed\":false,\"id\":\"log_9a07ce9e\"},{\"address\":\"0x172c352A238D1516d8540d06e40348ef9e0D9Baa\",\"topics\":[\"0xe37310595b6829b60fc17f9ee225b5a2d1ac64f161a8f96b7a9e1d87642b6441\"],\"data\":\"0x0000000000000000000000005b61eb7b0fff94b4076a74715c625f7cd888c78a00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000\",\"blockNumber\":18894152,\"transactionHash\":\"0x5064f310a397397cfd32eac97bb09e3cd400c58ba3e6227368ed472ee815aa96\",\"transactionIndex\":16,\"blockHash\":\"0x8510f04fbaa41b983cacb994b6d6648d67e149829a06a7d16a212925358e2e9c\",\"logIndex\":46,\"removed\":false,\"id\":\"log_736982b9\"}],\"logsBloom\":\"0x00000000800000000000000000000000000000000000000000000000000000000000000000000100000200000000000000000008000000000000000008200000000000000000000000004008000000000000000000000000000000000100000004000000020000000000000000000000000000000000000000000010000000000000000000000000080000000000000000000000000000000000000000000000020000000100000000000000000000000000200000000000000000000000000000000002000000000000000000000000000000000000400000000000000000000010000000000000040000000000000000000000000000000000000000000008\",\"status\":true,\"to\":\"0x172c352a238d1516d8540d06e40348ef9e0d9baa\",\"transactionHash\":\"0x5064f310a397397cfd32eac97bb09e3cd400c58ba3e6227368ed472ee815aa96\",\"transactionIndex\":16,\"type\":\"0x0\"}}', NULL, '2022-04-30 03:46:21', '2022-04-30 03:47:26', NULL),
(2, 'Package invest', '12 Months', 11, '0xb12328f8dfdd7a9ee387f3e7100b224768040935f27638bafd83fea4ca504866', '200.000000', '100.000000', '0xb5dd5970521860bcd07d027249dc4f82b8e8d376', '30.00', '0.300000', 3, 'Success', 1, ',{\"success\":true,\"message\":\"tx detail\",\"data\":{\"blockHash\":\"0xc8a9db56b880d9ee156548343c27e4471296c9aff79a93969b43543806e8722e\",\"blockNumber\":18894192,\"contractAddress\":null,\"cumulativeGasUsed\":1528744,\"from\":\"0xb5dd5970521860bcd07d027249dc4f82b8e8d376\",\"gasUsed\":61092,\"logs\":[{\"address\":\"0xD788F663b111fcA0428A8bAc96E5530E7123a8Db\",\"topics\":[\"0x8c5be1e5ebec7d5bd14f71427d1e84f3dd0314c0f7b2291e5b200ac8c7c3b925\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\"],\"data\":\"0x0000000000000000000000000000000000000000000000056bc75e2d63100000\",\"blockNumber\":18894192,\"transactionHash\":\"0xb12328f8dfdd7a9ee387f3e7100b224768040935f27638bafd83fea4ca504866\",\"transactionIndex\":16,\"blockHash\":\"0xc8a9db56b880d9ee156548343c27e4471296c9aff79a93969b43543806e8722e\",\"logIndex\":45,\"removed\":false,\"id\":\"log_e2b13147\"},{\"address\":\"0xD788F663b111fcA0428A8bAc96E5530E7123a8Db\",\"topics\":[\"0xddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef\",\"0x000000000000000000000000b5dd5970521860bcd07d027249dc4f82b8e8d376\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\"],\"data\":\"0x0000000000000000000000000000000000000000000000056bc75e2d63100000\",\"blockNumber\":18894192,\"transactionHash\":\"0xb12328f8dfdd7a9ee387f3e7100b224768040935f27638bafd83fea4ca504866\",\"transactionIndex\":16,\"blockHash\":\"0xc8a9db56b880d9ee156548343c27e4471296c9aff79a93969b43543806e8722e\",\"logIndex\":46,\"removed\":false,\"id\":\"log_e36aab36\"},{\"address\":\"0xD788F663b111fcA0428A8bAc96E5530E7123a8Db\",\"topics\":[\"0x8c5be1e5ebec7d5bd14f71427d1e84f3dd0314c0f7b2291e5b200ac8c7c3b925\",\"0x000000000000000000000000b5dd5970521860bcd07d027249dc4f82b8e8d376\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\"],\"data\":\"0x0000000000000000000000000000000000000000012181f419aad7e861480000\",\"blockNumber\":18894192,\"transactionHash\":\"0xb12328f8dfdd7a9ee387f3e7100b224768040935f27638bafd83fea4ca504866\",\"transactionIndex\":16,\"blockHash\":\"0xc8a9db56b880d9ee156548343c27e4471296c9aff79a93969b43543806e8722e\",\"logIndex\":47,\"removed\":false,\"id\":\"log_2b59a545\"},{\"address\":\"0x172c352A238D1516d8540d06e40348ef9e0D9Baa\",\"topics\":[\"0xe37310595b6829b60fc17f9ee225b5a2d1ac64f161a8f96b7a9e1d87642b6441\"],\"data\":\"0x000000000000000000000000b5dd5970521860bcd07d027249dc4f82b8e8d37600000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000\",\"blockNumber\":18894192,\"transactionHash\":\"0xb12328f8dfdd7a9ee387f3e7100b224768040935f27638bafd83fea4ca504866\",\"transactionIndex\":16,\"blockHash\":\"0xc8a9db56b880d9ee156548343c27e4471296c9aff79a93969b43543806e8722e\",\"logIndex\":48,\"removed\":false,\"id\":\"log_0cbf32f0\"}],\"logsBloom\":\"0x00000000000002000000000000000000000000000000000000000000000000000000000000000100000200020000000000000008000000000000000000200000000000000000000000004008000000000000000000000000000000000100000004000000000000000000000000000000000000000000000000000010000000000000000000000000080000000000000000000000000000000000000000000000020000000100000000000000000000000000200000000000000000000000000000000002000000000000000040000000000000000000400000000000000000000010000000000000040000000000000000000000000000000000000000000008\",\"status\":true,\"to\":\"0x172c352a238d1516d8540d06e40348ef9e0d9baa\",\"transactionHash\":\"0xb12328f8dfdd7a9ee387f3e7100b224768040935f27638bafd83fea4ca504866\",\"transactionIndex\":16,\"type\":\"0x0\"}}', NULL, '2022-04-30 03:48:24', '2022-04-30 03:48:34', NULL),
(3, 'Package invest', '12 Months', 12, '0xb5eea11fee23ea2593cf2b7e964072d4f03680d7065f50bf49a6c59e048b48e6', '2000.000000', '1000.000000', '0x0b54a42ce87f86ead5fc686ebfd5bff443cf7918', '30.00', '0.400000', 6, 'Success', 1, ',{\"success\":true,\"message\":\"tx detail\",\"data\":{\"blockHash\":\"0x97848203f61b8d1b4a517edd0aba672aaa3e3aac6c1b608a171c8da2c16e4d12\",\"blockNumber\":18894230,\"contractAddress\":null,\"cumulativeGasUsed\":2154161,\"from\":\"0x0b54a42ce87f86ead5fc686ebfd5bff443cf7918\",\"gasUsed\":61104,\"logs\":[{\"address\":\"0xD788F663b111fcA0428A8bAc96E5530E7123a8Db\",\"topics\":[\"0x8c5be1e5ebec7d5bd14f71427d1e84f3dd0314c0f7b2291e5b200ac8c7c3b925\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\"],\"data\":\"0x00000000000000000000000000000000000000000000003635c9adc5dea00000\",\"blockNumber\":18894230,\"transactionHash\":\"0xb5eea11fee23ea2593cf2b7e964072d4f03680d7065f50bf49a6c59e048b48e6\",\"transactionIndex\":17,\"blockHash\":\"0x97848203f61b8d1b4a517edd0aba672aaa3e3aac6c1b608a171c8da2c16e4d12\",\"logIndex\":53,\"removed\":false,\"id\":\"log_a1cabd65\"},{\"address\":\"0xD788F663b111fcA0428A8bAc96E5530E7123a8Db\",\"topics\":[\"0xddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef\",\"0x0000000000000000000000000b54a42ce87f86ead5fc686ebfd5bff443cf7918\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\"],\"data\":\"0x00000000000000000000000000000000000000000000003635c9adc5dea00000\",\"blockNumber\":18894230,\"transactionHash\":\"0xb5eea11fee23ea2593cf2b7e964072d4f03680d7065f50bf49a6c59e048b48e6\",\"transactionIndex\":17,\"blockHash\":\"0x97848203f61b8d1b4a517edd0aba672aaa3e3aac6c1b608a171c8da2c16e4d12\",\"logIndex\":54,\"removed\":false,\"id\":\"log_f166688c\"},{\"address\":\"0xD788F663b111fcA0428A8bAc96E5530E7123a8Db\",\"topics\":[\"0x8c5be1e5ebec7d5bd14f71427d1e84f3dd0314c0f7b2291e5b200ac8c7c3b925\",\"0x0000000000000000000000000b54a42ce87f86ead5fc686ebfd5bff443cf7918\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\"],\"data\":\"0x00000000000000000000000000000000000000000121832a7400a78ec89c0000\",\"blockNumber\":18894230,\"transactionHash\":\"0xb5eea11fee23ea2593cf2b7e964072d4f03680d7065f50bf49a6c59e048b48e6\",\"transactionIndex\":17,\"blockHash\":\"0x97848203f61b8d1b4a517edd0aba672aaa3e3aac6c1b608a171c8da2c16e4d12\",\"logIndex\":55,\"removed\":false,\"id\":\"log_7d19f4bb\"},{\"address\":\"0x172c352A238D1516d8540d06e40348ef9e0D9Baa\",\"topics\":[\"0xe37310595b6829b60fc17f9ee225b5a2d1ac64f161a8f96b7a9e1d87642b6441\"],\"data\":\"0x0000000000000000000000000b54a42ce87f86ead5fc686ebfd5bff443cf791800000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000\",\"blockNumber\":18894230,\"transactionHash\":\"0xb5eea11fee23ea2593cf2b7e964072d4f03680d7065f50bf49a6c59e048b48e6\",\"transactionIndex\":17,\"blockHash\":\"0x97848203f61b8d1b4a517edd0aba672aaa3e3aac6c1b608a171c8da2c16e4d12\",\"logIndex\":56,\"removed\":false,\"id\":\"log_372a653a\"}],\"logsBloom\":\"0x00000000000000000000000000000000000000000000000000000008000000000000000000000100000200000000000000000008000000000000000000200000000000000000000000004008000000000000000000000000000000000100000004000000000000000000000000000000000000000000000000000010000000000000000000000000080000000000000000000000000000000000000000000000020008000100000000000000000000000000200000000000000000000000000000000002000001000000000000000000000000000000400000000000000000000010000000000000040000000000000000000000000000000000000000000008\",\"status\":true,\"to\":\"0x172c352a238d1516d8540d06e40348ef9e0d9baa\",\"transactionHash\":\"0xb5eea11fee23ea2593cf2b7e964072d4f03680d7065f50bf49a6c59e048b48e6\",\"transactionIndex\":17,\"type\":\"0x0\"}}', NULL, '2022-04-30 03:50:16', '2022-04-30 03:50:28', NULL),
(4, 'Package invest', '12 Months', 13, '0x1ca6cdbe935c2dc6612bb295752d682889ff5208992be36d8cd497d9e16b7450', '1000.000000', '500.000000', '0xf3f8f373a98055008d35bff1209cb5b46d19b96f', '30.00', '0.366670', 5, 'Success', 1, ',{\"success\":true,\"message\":\"tx detail\",\"data\":{\"blockHash\":\"0x3f6d5a02f9b330f8d57a0adb4223a4c43566ddf202ba24bcfab592310aac1044\",\"blockNumber\":18894279,\"contractAddress\":null,\"cumulativeGasUsed\":3782003,\"from\":\"0xf3f8f373a98055008d35bff1209cb5b46d19b96f\",\"gasUsed\":61104,\"logs\":[{\"address\":\"0xD788F663b111fcA0428A8bAc96E5530E7123a8Db\",\"topics\":[\"0x8c5be1e5ebec7d5bd14f71427d1e84f3dd0314c0f7b2291e5b200ac8c7c3b925\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\"],\"data\":\"0x00000000000000000000000000000000000000000000001b1ae4d6e2ef500000\",\"blockNumber\":18894279,\"transactionHash\":\"0x1ca6cdbe935c2dc6612bb295752d682889ff5208992be36d8cd497d9e16b7450\",\"transactionIndex\":22,\"blockHash\":\"0x3f6d5a02f9b330f8d57a0adb4223a4c43566ddf202ba24bcfab592310aac1044\",\"logIndex\":84,\"removed\":false,\"id\":\"log_e2afa719\"},{\"address\":\"0xD788F663b111fcA0428A8bAc96E5530E7123a8Db\",\"topics\":[\"0xddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef\",\"0x000000000000000000000000f3f8f373a98055008d35bff1209cb5b46d19b96f\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\"],\"data\":\"0x00000000000000000000000000000000000000000000001b1ae4d6e2ef500000\",\"blockNumber\":18894279,\"transactionHash\":\"0x1ca6cdbe935c2dc6612bb295752d682889ff5208992be36d8cd497d9e16b7450\",\"transactionIndex\":22,\"blockHash\":\"0x3f6d5a02f9b330f8d57a0adb4223a4c43566ddf202ba24bcfab592310aac1044\",\"logIndex\":85,\"removed\":false,\"id\":\"log_bfc212a9\"},{\"address\":\"0xD788F663b111fcA0428A8bAc96E5530E7123a8Db\",\"topics\":[\"0x8c5be1e5ebec7d5bd14f71427d1e84f3dd0314c0f7b2291e5b200ac8c7c3b925\",\"0x000000000000000000000000f3f8f373a98055008d35bff1209cb5b46d19b96f\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\"],\"data\":\"0x000000000000000000000000000000000000000001218346e9d755fd10b00000\",\"blockNumber\":18894279,\"transactionHash\":\"0x1ca6cdbe935c2dc6612bb295752d682889ff5208992be36d8cd497d9e16b7450\",\"transactionIndex\":22,\"blockHash\":\"0x3f6d5a02f9b330f8d57a0adb4223a4c43566ddf202ba24bcfab592310aac1044\",\"logIndex\":86,\"removed\":false,\"id\":\"log_dbfb0b38\"},{\"address\":\"0x172c352A238D1516d8540d06e40348ef9e0D9Baa\",\"topics\":[\"0xe37310595b6829b60fc17f9ee225b5a2d1ac64f161a8f96b7a9e1d87642b6441\"],\"data\":\"0x000000000000000000000000f3f8f373a98055008d35bff1209cb5b46d19b96f00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000\",\"blockNumber\":18894279,\"transactionHash\":\"0x1ca6cdbe935c2dc6612bb295752d682889ff5208992be36d8cd497d9e16b7450\",\"transactionIndex\":22,\"blockHash\":\"0x3f6d5a02f9b330f8d57a0adb4223a4c43566ddf202ba24bcfab592310aac1044\",\"logIndex\":87,\"removed\":false,\"id\":\"log_1dbc8e1b\"}],\"logsBloom\":\"0x00800000000000000000008000000000000000000000000000000000000000000000000000000100000200000000000000000008000000004000000000200000000000000000000000004008000000000000000000000000000000000100000004000000000000000000000000000000000000000000000000000010000000000000000000000000080000000000000000000000000000000000000000000000020000000100000000000000000000000000200000000000000000000000000000000002000000000000000000000000000000000000400000000000000000000010000000000000040000000000000000000000000000000000000000000008\",\"status\":true,\"to\":\"0x172c352a238d1516d8540d06e40348ef9e0d9baa\",\"transactionHash\":\"0x1ca6cdbe935c2dc6612bb295752d682889ff5208992be36d8cd497d9e16b7450\",\"transactionIndex\":22,\"type\":\"0x0\"}}', NULL, '2022-04-30 03:52:45', '2022-04-30 03:53:01', NULL),
(5, 'Package invest', '12 Months', 14, '0x667742e29de6143e8f87921562598f1ed3151a80e2259e8234093c4bf9c4d683', '50.000000', '25.000000', '0x03483247f5e7604c01e5d43a32598f2d14c45b8a', '30.00', '0.266670', 1, 'Success', 1, ',{\"success\":true,\"message\":\"tx detail\",\"data\":{\"blockHash\":\"0xf650e2fed0a2efa9dc454dd5306ef3c2a4e267f50ab41542d83f89fda40609d3\",\"blockNumber\":18894326,\"contractAddress\":null,\"cumulativeGasUsed\":613844,\"from\":\"0x03483247f5e7604c01e5d43a32598f2d14c45b8a\",\"gasUsed\":61092,\"logs\":[{\"address\":\"0xD788F663b111fcA0428A8bAc96E5530E7123a8Db\",\"topics\":[\"0x8c5be1e5ebec7d5bd14f71427d1e84f3dd0314c0f7b2291e5b200ac8c7c3b925\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\"],\"data\":\"0x0000000000000000000000000000000000000000000000015af1d78b58c40000\",\"blockNumber\":18894326,\"transactionHash\":\"0x667742e29de6143e8f87921562598f1ed3151a80e2259e8234093c4bf9c4d683\",\"transactionIndex\":6,\"blockHash\":\"0xf650e2fed0a2efa9dc454dd5306ef3c2a4e267f50ab41542d83f89fda40609d3\",\"logIndex\":13,\"removed\":false,\"id\":\"log_6d2d11ee\"},{\"address\":\"0xD788F663b111fcA0428A8bAc96E5530E7123a8Db\",\"topics\":[\"0xddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef\",\"0x00000000000000000000000003483247f5e7604c01e5d43a32598f2d14c45b8a\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\"],\"data\":\"0x0000000000000000000000000000000000000000000000015af1d78b58c40000\",\"blockNumber\":18894326,\"transactionHash\":\"0x667742e29de6143e8f87921562598f1ed3151a80e2259e8234093c4bf9c4d683\",\"transactionIndex\":6,\"blockHash\":\"0xf650e2fed0a2efa9dc454dd5306ef3c2a4e267f50ab41542d83f89fda40609d3\",\"logIndex\":14,\"removed\":false,\"id\":\"log_cc65bef2\"},{\"address\":\"0xD788F663b111fcA0428A8bAc96E5530E7123a8Db\",\"topics\":[\"0x8c5be1e5ebec7d5bd14f71427d1e84f3dd0314c0f7b2291e5b200ac8c7c3b925\",\"0x00000000000000000000000003483247f5e7604c01e5d43a32598f2d14c45b8a\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\"],\"data\":\"0x000000000000000000000000000000000000000001218360a9ca5554a73c0000\",\"blockNumber\":18894326,\"transactionHash\":\"0x667742e29de6143e8f87921562598f1ed3151a80e2259e8234093c4bf9c4d683\",\"transactionIndex\":6,\"blockHash\":\"0xf650e2fed0a2efa9dc454dd5306ef3c2a4e267f50ab41542d83f89fda40609d3\",\"logIndex\":15,\"removed\":false,\"id\":\"log_9432338a\"},{\"address\":\"0x172c352A238D1516d8540d06e40348ef9e0D9Baa\",\"topics\":[\"0xe37310595b6829b60fc17f9ee225b5a2d1ac64f161a8f96b7a9e1d87642b6441\"],\"data\":\"0x00000000000000000000000003483247f5e7604c01e5d43a32598f2d14c45b8a00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000\",\"blockNumber\":18894326,\"transactionHash\":\"0x667742e29de6143e8f87921562598f1ed3151a80e2259e8234093c4bf9c4d683\",\"transactionIndex\":6,\"blockHash\":\"0xf650e2fed0a2efa9dc454dd5306ef3c2a4e267f50ab41542d83f89fda40609d3\",\"logIndex\":16,\"removed\":false,\"id\":\"log_994089d2\"}],\"logsBloom\":\"0x00000000000000000000008000000000000000000000000000000000000000000000000000000100000200000000000000000008000000000200000000200000000000000000000000004008000000000040000000000000000000000100000004000000000000000000000000000000000000000000000000000010000000000000000000000000080000000000000000000000000000000000000000000000020000000100000000000000000000000000200000000000000000000000000000000002000000000000000000000000000000000000400000000000000000000010000000000000040000000000000000000000000000000000000000000008\",\"status\":true,\"to\":\"0x172c352a238d1516d8540d06e40348ef9e0d9baa\",\"transactionHash\":\"0x667742e29de6143e8f87921562598f1ed3151a80e2259e8234093c4bf9c4d683\",\"transactionIndex\":6,\"type\":\"0x0\"}}', NULL, '2022-04-30 03:55:03', '2022-04-30 03:55:25', NULL),
(6, 'Package invest', '12 Months', 15, '0xeb39d8c16ba29a0500714debcfcea5a2057712c668911ff5cbfb033147e75a80', '11000.000000', '5500.000000', '0xc2237bceae70e187e03eca3ff7b30f7356ed1507', '30.00', '0.500000', 9, 'Success', 1, ',{\"success\":true,\"message\":\"tx detail\",\"data\":{\"blockHash\":\"0x397659be6cfe7e919cc4e5459ad350d828b34dc6bdad36ae2971e8c2f5db395a\",\"blockNumber\":18894386,\"contractAddress\":null,\"cumulativeGasUsed\":1804298,\"from\":\"0xc2237bceae70e187e03eca3ff7b30f7356ed1507\",\"gasUsed\":61104,\"logs\":[{\"address\":\"0xD788F663b111fcA0428A8bAc96E5530E7123a8Db\",\"topics\":[\"0x8c5be1e5ebec7d5bd14f71427d1e84f3dd0314c0f7b2291e5b200ac8c7c3b925\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\"],\"data\":\"0x00000000000000000000000000000000000000000000012a27d53bc048700000\",\"blockNumber\":18894386,\"transactionHash\":\"0xeb39d8c16ba29a0500714debcfcea5a2057712c668911ff5cbfb033147e75a80\",\"transactionIndex\":13,\"blockHash\":\"0x397659be6cfe7e919cc4e5459ad350d828b34dc6bdad36ae2971e8c2f5db395a\",\"logIndex\":32,\"removed\":false,\"id\":\"log_3a88339d\"},{\"address\":\"0xD788F663b111fcA0428A8bAc96E5530E7123a8Db\",\"topics\":[\"0xddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef\",\"0x000000000000000000000000c2237bceae70e187e03eca3ff7b30f7356ed1507\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\"],\"data\":\"0x00000000000000000000000000000000000000000000012a27d53bc048700000\",\"blockNumber\":18894386,\"transactionHash\":\"0xeb39d8c16ba29a0500714debcfcea5a2057712c668911ff5cbfb033147e75a80\",\"transactionIndex\":13,\"blockHash\":\"0x397659be6cfe7e919cc4e5459ad350d828b34dc6bdad36ae2971e8c2f5db395a\",\"logIndex\":33,\"removed\":false,\"id\":\"log_d9948902\"},{\"address\":\"0xD788F663b111fcA0428A8bAc96E5530E7123a8Db\",\"topics\":[\"0x8c5be1e5ebec7d5bd14f71427d1e84f3dd0314c0f7b2291e5b200ac8c7c3b925\",\"0x000000000000000000000000c2237bceae70e187e03eca3ff7b30f7356ed1507\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\"],\"data\":\"0x000000000000000000000000000000000000000001218237dce6f11fb7900000\",\"blockNumber\":18894386,\"transactionHash\":\"0xeb39d8c16ba29a0500714debcfcea5a2057712c668911ff5cbfb033147e75a80\",\"transactionIndex\":13,\"blockHash\":\"0x397659be6cfe7e919cc4e5459ad350d828b34dc6bdad36ae2971e8c2f5db395a\",\"logIndex\":34,\"removed\":false,\"id\":\"log_56be395d\"},{\"address\":\"0x172c352A238D1516d8540d06e40348ef9e0D9Baa\",\"topics\":[\"0xe37310595b6829b60fc17f9ee225b5a2d1ac64f161a8f96b7a9e1d87642b6441\"],\"data\":\"0x000000000000000000000000c2237bceae70e187e03eca3ff7b30f7356ed150700000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000\",\"blockNumber\":18894386,\"transactionHash\":\"0xeb39d8c16ba29a0500714debcfcea5a2057712c668911ff5cbfb033147e75a80\",\"transactionIndex\":13,\"blockHash\":\"0x397659be6cfe7e919cc4e5459ad350d828b34dc6bdad36ae2971e8c2f5db395a\",\"logIndex\":35,\"removed\":false,\"id\":\"log_0970f535\"}],\"logsBloom\":\"0x00000000000000000000000000000000000000000000000000000000000000000000000000000100000200000002000000000008000000000000000000200000000000000000000000004008000000000000000000000000000000000100000004000000000000000000000000000000000000000000000000000010000000000000000000000000080000000000000000000000000000000000000000004000020000000100000000000000000000000000200000000000000000000000000000000002000000080000000000000000000000000000400000000000000000000010000000000000040000000000000000000000000000000000000000000008\",\"status\":true,\"to\":\"0x172c352a238d1516d8540d06e40348ef9e0d9baa\",\"transactionHash\":\"0xeb39d8c16ba29a0500714debcfcea5a2057712c668911ff5cbfb033147e75a80\",\"transactionIndex\":13,\"type\":\"0x0\"}}', NULL, '2022-04-30 03:58:04', '2022-04-30 03:58:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Trx Prime Personal Access Client', 'qk30821IX34sdNxUpDL3EMYKWvGsglOTa09ZESHZ', NULL, 'http://localhost', 1, 0, 0, '2021-11-22 22:58:39', '2021-11-22 22:58:39'),
(2, NULL, 'Trx Prime Password Grant Client', 'bdtOR3hbb3A3PALfWUleRgxfvwdq45qRgjSsVkAC', 'users', 'http://localhost', 0, 1, 0, '2021-11-22 22:58:39', '2021-11-22 22:58:39');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-11-22 22:58:39', '2021-11-22 22:58:39');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tariffId` int(11) DEFAULT '0',
  `minDeposit` decimal(10,2) DEFAULT '0.00',
  `maxDeposit` decimal(10,2) DEFAULT '0.00',
  `dailyRoi` float(10,6) DEFAULT '0.000000' COMMENT '1-Active,2-Inactive',
  `days` int(10) DEFAULT '0',
  `groth_percentage` decimal(10,3) NOT NULL DEFAULT '0.000',
  `maxBinary` decimal(10,2) DEFAULT '0.00',
  `nextTopup` decimal(10,2) DEFAULT '0.00',
  `status` int(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `tariffId`, `minDeposit`, `maxDeposit`, `dailyRoi`, `days`, `groth_percentage`, `maxBinary`, `nextTopup`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Starter', 1, '50.00', '50.00', 0.266670, 30, '8.000', '7.00', '0.00', 1, '2022-01-11 18:30:00', '2022-01-11 18:30:00', NULL),
(2, 'Basic', 2, '100.00', '100.00', 0.266670, 30, '8.000', '7.00', '0.00', 1, '2022-01-11 18:30:00', '2022-01-11 18:30:00', NULL),
(3, 'Intermediate', 3, '200.00', '200.00', 0.300000, 30, '9.000', '8.00', '0.00', 1, '2022-01-11 18:30:00', '2022-01-11 18:30:00', NULL),
(4, 'Standard', 4, '500.00', '500.00', 0.333300, 30, '10.000', '8.00', '0.00', 1, '2022-01-11 18:30:00', '2022-01-11 18:30:00', NULL),
(5, 'Advanced', 5, '1000.00', '1000.00', 0.366670, 30, '11.000', '9.00', '0.00', 1, '2022-01-11 18:30:00', '2022-01-11 18:30:00', NULL),
(6, 'Professional', 6, '2000.00', '2000.00', 0.400000, 30, '12.000', '10.00', '0.00', 1, '2022-01-11 18:30:00', '2022-01-11 18:30:00', NULL),
(7, 'Master', 7, '5000.00', '5000.00', 0.433330, 30, '13.000', '11.00', '0.00', 1, '2022-01-11 18:30:00', '2022-01-11 18:30:00', NULL),
(8, 'Doctor', 8, '10000.00', '10000.00', 0.466670, 30, '14.000', '12.00', '0.00', 1, '2022-01-11 18:30:00', '2022-01-11 18:30:00', NULL),
(9, 'Designer', 9, '0.00', '0.00', 0.500000, 30, '15.000', '12.00', '0.00', 1, '2022-01-11 18:30:00', '2022-01-11 18:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `tokenValue` decimal(20,6) DEFAULT NULL,
  `trx` decimal(10,4) DEFAULT '0.0000',
  `usdt` decimal(10,4) DEFAULT '0.0000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `tokenValue`, `trx`, `usdt`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '0.500000', '16.6400', '1.0000', '2022-01-11 18:30:00', '2022-03-14 00:35:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT '0.00',
  `maxAmount` decimal(10,2) DEFAULT '0.00',
  `bonusAmt` decimal(10,2) DEFAULT '0.00',
  `status` int(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`id`, `name`, `amount`, `maxAmount`, `bonusAmt`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Reward 1', '1.00', '9.00', '100.00', 1, '2022-03-10 19:43:13', '2022-03-10 19:43:13', NULL),
(2, 'Reward 2', '10.00', '19.00', '500.00', 1, '2022-03-10 19:43:13', '2022-03-10 19:43:13', NULL),
(3, 'Reward 3', '20.00', '5000.00', '1500.00', 1, '2022-03-10 19:43:13', '2022-03-10 19:43:13', NULL),
(4, 'Reward 4', '25000.00', '74999.00', '3000.00', 1, '2022-03-10 19:43:13', '2022-03-10 19:43:13', NULL),
(5, 'Reward 5', '75000.00', '149999.00', '6000.00', 1, '2022-03-10 19:43:13', '2022-03-10 19:43:13', NULL),
(6, 'Reward 6', '150000.00', '299999.00', '11000.00', 1, '2022-03-10 19:43:13', '2022-03-10 19:43:13', NULL),
(7, 'Reward 7', '300000.00', '999999.00', '20000.00', 1, '2022-03-10 19:43:13', '2022-03-10 19:43:13', NULL),
(8, 'Reward 8', '1000000.00', '2499999.00', '35000.00', 1, '2022-03-10 19:43:13', '2022-03-10 19:43:13', NULL),
(9, 'Reward 9', '2500000.00', '4999999.00', '60000.00', 1, '2022-03-10 19:43:13', '2022-03-10 19:43:13', NULL),
(10, 'Reward 10', '5000000.00', '9999999.00', '100000.00', 1, '2022-03-10 19:43:13', '2022-03-10 19:43:13', NULL),
(11, 'Reward 11', '10000000.00', '0.00', '200000.00', 1, '2022-03-10 19:43:13', '2022-03-10 19:43:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `EMAIL_ADDRESS` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PHONE_NO` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CONTRACT_LINK` text COLLATE utf8mb4_unicode_ci,
  `CONTRACT_ADDRESS` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WALLET_LINK` text COLLATE utf8mb4_unicode_ci,
  `TRANS_LINK` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TOKEN_ADDRESS` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DEPOSIT_API` text COLLATE utf8mb4_unicode_ci,
  `WITHDRAWAL_API` text COLLATE utf8mb4_unicode_ci,
  `FB_LINK` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TW_LINK` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LINKED_LINK` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TELE_LINK` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `INSTA_LINK` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `EMAIL_ADDRESS`, `PHONE_NO`, `CONTRACT_LINK`, `CONTRACT_ADDRESS`, `WALLET_LINK`, `TRANS_LINK`, `TOKEN_ADDRESS`, `DEPOSIT_API`, `WITHDRAWAL_API`, `FB_LINK`, `TW_LINK`, `LINKED_LINK`, `TELE_LINK`, `INSTA_LINK`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'info@vintages.live', NULL, 'https://testnet.bscscan.com/address/0xae07f3252df8364825941ce29f405473a185406d', '0x172c352a238d1516d8540d06e40348ef9e0d9baa', 'https://testnet.bscscan.com/address/', 'https://testnet.bscscan.com/tx/', '0xD788F663b111fcA0428A8bAc96E5530E7123a8Db', 'http://127.0.0.1:3300/tx_details/', 'http://127.0.0.1:3300/withdrawal/', '#', '#', '#', '#', '#', '2022-03-10 22:06:13', '2022-03-10 22:06:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `packageId` int(10) DEFAULT '0',
  `trans_id` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) DEFAULT '0',
  `refrall_id` int(11) DEFAULT '0',
  `amount` decimal(20,6) DEFAULT '0.000000',
  `from_package` int(11) DEFAULT '0',
  `roi_per` decimal(10,6) DEFAULT '0.000000',
  `roi_max` int(11) DEFAULT '0',
  `roi_cnt` int(11) DEFAULT '0',
  `trans` int(1) DEFAULT '0' COMMENT '0-package,1-roi,2-level,3-referral,4-Luck Drawn,5-royal,6-crownIncome',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `planExpiryDate` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `packageId`, `trans_id`, `user_id`, `refrall_id`, `amount`, `from_package`, `roi_per`, `roi_max`, `roi_cnt`, `trans`, `type`, `planExpiryDate`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, '0x5064f310a397397cfd32eac97bb09e3cd400c58ba3e6227368ed472ee815aa96', 10, 0, '100.000000', 0, '0.266670', 30, 0, 0, 'Package invest', '2023-10-30', '2022-04-30 03:47:26', '2022-04-30 03:47:26', NULL),
(2, 0, NULL, 1, 10, '5.000000', 1, '0.000000', 0, 0, 3, 'Referral Bonus', NULL, '2022-04-30 03:47:26', '2022-04-30 03:47:26', NULL),
(3, 3, '0xb12328f8dfdd7a9ee387f3e7100b224768040935f27638bafd83fea4ca504866', 11, 0, '200.000000', 0, '0.300000', 30, 0, 0, 'Package invest', '2023-04-30', '2022-04-30 03:48:34', '2022-04-30 03:48:34', NULL),
(4, 0, NULL, 10, 11, '10.000000', 3, '0.000000', 0, 0, 3, 'Referral Bonus', NULL, '2022-04-30 03:48:34', '2022-04-30 03:48:34', NULL),
(5, 6, '0xb5eea11fee23ea2593cf2b7e964072d4f03680d7065f50bf49a6c59e048b48e6', 12, 0, '2000.000000', 0, '0.400000', 30, 0, 0, 'Package invest', '2023-04-30', '2022-04-30 03:50:28', '2022-04-30 03:50:28', NULL),
(6, 0, NULL, 10, 12, '100.000000', 5, '0.000000', 0, 0, 3, 'Referral Bonus', NULL, '2022-04-30 03:50:28', '2022-04-30 03:50:28', NULL),
(7, 5, '0x1ca6cdbe935c2dc6612bb295752d682889ff5208992be36d8cd497d9e16b7450', 13, 0, '1000.000000', 0, '0.366670', 30, 0, 0, 'Package invest', '2023-04-30', '2022-04-30 03:53:01', '2022-04-30 03:53:01', NULL),
(8, 0, NULL, 1, 13, '50.000000', 7, '0.000000', 0, 0, 3, 'Referral Bonus', NULL, '2022-04-30 03:53:01', '2022-04-30 03:53:01', NULL),
(9, 1, '0x667742e29de6143e8f87921562598f1ed3151a80e2259e8234093c4bf9c4d683', 14, 0, '50.000000', 0, '0.266670', 30, 0, 0, 'Package invest', '2023-04-30', '2022-04-30 03:55:25', '2022-04-30 03:55:25', NULL),
(10, 0, NULL, 13, 14, '2.500000', 9, '0.000000', 0, 0, 3, 'Referral Bonus', NULL, '2022-04-30 03:55:25', '2022-04-30 03:55:25', NULL),
(11, 9, '0xeb39d8c16ba29a0500714debcfcea5a2057712c668911ff5cbfb033147e75a80', 15, 0, '11000.000000', 0, '0.500000', 30, 0, 0, 'Package invest', '2023-04-30', '2022-04-30 03:58:15', '2022-04-30 03:58:15', NULL),
(12, 0, NULL, 13, 15, '550.000000', 11, '0.000000', 0, 0, 3, 'Referral Bonus', NULL, '2022-04-30 03:58:15', '2022-04-30 03:58:15', NULL),
(13, 0, NULL, 10, 0, '143.500000', 0, '0.000000', 0, 0, 5, 'Royal House Income', NULL, '2022-04-30 05:06:08', '2022-04-30 05:06:08', NULL),
(14, 0, NULL, 13, 0, '143.500000', 0, '0.000000', 0, 0, 5, 'Royal House Income', NULL, '2022-04-30 05:06:08', '2022-04-30 05:06:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `wallet_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registerId` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `levelParent` int(10) DEFAULT '0',
  `level_str` text COLLATE utf8mb4_unicode_ci,
  `binaryParent` int(10) NOT NULL DEFAULT '0',
  `binary_str` text COLLATE utf8mb4_unicode_ci,
  `packageId` int(10) DEFAULT '0',
  `position` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `packageAmt` decimal(10,2) DEFAULT '0.00',
  `current_invest` decimal(10,6) DEFAULT '0.000000',
  `levelCount` int(2) DEFAULT '0',
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1' COMMENT '1-Active,2-Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `wallet_address`, `registerId`, `levelParent`, `level_str`, `binaryParent`, `binary_str`, `packageId`, `position`, `packageAmt`, `current_invest`, `levelCount`, `session_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '0xacb50eb34471e68ddae156bda640fae75f0d6658', '100000', 0, ',1,', 0, ',1,', 0, '0', '100.00', '100.000000', 1, 'qJjffjGj9NNWxfo6ISLTv0jZMV2IgziCmFX91Oja', 1, '2022-01-21 02:56:04', '2022-04-30 03:38:40', NULL),
(10, '0x5b61eb7b0fff94b4076a74715c625f7cd888c78a', '71737965', 1, ',1,10,', 1, ',1,10,', 2, 'Left', '100.00', '0.000000', 0, 'gOf8ik0KUmjSqzba80QQkSDToqsfgSGywxh3EwOM', 1, '2022-04-30 03:41:00', '2022-05-02 01:48:37', NULL),
(11, '0xb5dd5970521860bcd07d027249dc4f82b8e8d376', '39752658', 10, ',1,10,11,', 10, ',1,10,11,', 3, 'Left', '200.00', '0.000000', 0, 'Y4YKnctv6ieW5z2rnDZtWJVaABpEz3EgsTLgLUqj', 1, '2022-04-30 03:48:04', '2022-04-30 03:48:34', NULL),
(12, '0x0b54a42ce87f86ead5fc686ebfd5bff443cf7918', '75523842', 10, ',1,10,12,', 10, ',1,10,12,', 6, 'Right', '2000.00', '0.000000', 0, '3eSED5fowGCt4I44F7GJX8JNa5mhqENuDiQAEd0X', 1, '2022-04-30 03:49:42', '2022-04-30 03:50:28', NULL),
(13, '0xf3f8f373a98055008d35bff1209cb5b46d19b96f', '39562659', 1, ',1,13,', 1, ',1,13,', 5, 'Right', '1000.00', '0.000000', 0, 's3yobbHLXulrmgfgop2KtNJj1TL8exMohBus21UA', 1, '2022-04-30 03:51:31', '2022-04-30 03:53:01', NULL),
(14, '0x03483247f5e7604c01e5d43a32598f2d14c45b8a', '38098056', 13, ',1,13,14,', 13, ',1,13,14,', 1, 'Left', '50.00', '0.000000', 0, 'zZG2vVuosfbACgbjvTdObMU1SZLx6wHZVch47Jyd', 1, '2022-04-30 03:54:12', '2022-04-30 03:55:25', NULL),
(15, '0xc2237bceae70e187e03eca3ff7b30f7356ed1507', '70420641', 13, ',1,13,15,', 13, ',1,13,15,', 9, 'Right', '11000.00', '0.000000', 0, 'j30AfI5litUeY0C44obLxIZFPWePJgenKrCN8u5X', 1, '2022-04-30 03:56:44', '2022-04-30 05:08:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT '0',
  `trans` int(1) DEFAULT '0' COMMENT '0-withdrawal,1-principle',
  `amount` decimal(20,6) DEFAULT '0.000000',
  `trans_id` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `curl_response` longtext COLLATE utf8mb4_unicode_ci,
  `error_response` text COLLATE utf8mb4_unicode_ci,
  `checkCount` int(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `user_id`, `trans`, `amount`, `trans_id`, `status`, `curl_response`, `error_response`, `checkCount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 10, 0, '253.000000', '0x1687418add7c9131259f77320ec0e1d22e3960060bf661f5fcde1bda1f4fa489', 'Success', ',,,{\"success\":true,\"message\":\"tx detail\",\"data\":{\"blockHash\":\"0x6468d396367aa1ef01f9aa4fa54759b7ee6f84728c9ab2d90b668b71f535c52f\",\"blockNumber\":18895796,\"contractAddress\":null,\"cumulativeGasUsed\":788250,\"from\":\"0x5b61eb7b0fff94b4076a74715c625f7cd888c78a\",\"gasUsed\":40120,\"logs\":[{\"address\":\"0xD788F663b111fcA0428A8bAc96E5530E7123a8Db\",\"topics\":[\"0xddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef\",\"0x000000000000000000000000172c352a238d1516d8540d06e40348ef9e0d9baa\",\"0x0000000000000000000000005b61eb7b0fff94b4076a74715c625f7cd888c78a\"],\"data\":\"0x000000000000000000000000000000000000000000000006d499ec6c63380000\",\"blockNumber\":18895796,\"transactionHash\":\"0x1687418add7c9131259f77320ec0e1d22e3960060bf661f5fcde1bda1f4fa489\",\"transactionIndex\":7,\"blockHash\":\"0x6468d396367aa1ef01f9aa4fa54759b7ee6f84728c9ab2d90b668b71f535c52f\",\"logIndex\":10,\"removed\":false,\"id\":\"log_80edc040\"}],\"logsBloom\":\"0x00000000800000000000000000000000000000000000000000000000000000000000000000000000000200000000000000000000000000000000000008000000000000000000000000000008000000000000000000000000000000000100000000000000020000000000000000000000000000000000000000000010000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000200000000000000000000000000000000002000000000000000000000000000000000000400000000000000000000000000000000000040000000000000000000000000000000000000000000008\",\"status\":true,\"to\":\"0x172c352a238d1516d8540d06e40348ef9e0d9baa\",\"transactionHash\":\"0x1687418add7c9131259f77320ec0e1d22e3960060bf661f5fcde1bda1f4fa489\",\"transactionIndex\":7,\"type\":\"0x0\"}}', NULL, 3, '2022-04-30 05:08:40', '2022-04-30 05:14:49', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matchingincomes`
--
ALTER TABLE `matchingincomes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trans` (`total_left`);

--
-- Indexes for table `metarequests`
--
ALTER TABLE `metarequests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trans_type` (`trans_type`),
  ADD KEY `status` (`status`),
  ADD KEY `checkCount` (`checkCount`),
  ADD KEY `trans_id` (`trans_id`),
  ADD KEY `trans_type_2` (`trans_type`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_2` (`status`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `maxAmount` (`maxAmount`),
  ADD KEY `status` (`status`),
  ADD KEY `amount` (`amount`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trans` (`trans`),
  ADD KEY `id` (`id`),
  ADD KEY `trans_2` (`trans`),
  ADD KEY `type` (`type`),
  ADD KEY `roi_per` (`roi_per`),
  ADD KEY `roi_cnt` (`roi_cnt`),
  ADD KEY `roi_max` (`roi_max`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `wallet_address` (`wallet_address`),
  ADD KEY `levelParent` (`levelParent`),
  ADD KEY `packageAmt` (`packageAmt`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status` (`status`),
  ADD KEY `checkCount` (`checkCount`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matchingincomes`
--
ALTER TABLE `matchingincomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `metarequests`
--
ALTER TABLE `metarequests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
