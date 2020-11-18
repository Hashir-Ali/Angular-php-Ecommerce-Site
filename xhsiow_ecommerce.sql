-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 10:03 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xhsiow_ecommerce`
--
CREATE DATABASE IF NOT EXISTS `xhsiow_ecommerce` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `xhsiow_ecommerce`;

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE IF NOT EXISTS `addresses` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `AddressName` varchar(255) NOT NULL,
  `AddressLine1` varchar(255) NOT NULL,
  `AddressLine2` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `ZipCode` varchar(255) NOT NULL,
  `CountryCode` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Code` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ParentId` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Code` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `credit_card_types`
--

CREATE TABLE IF NOT EXISTS `credit_card_types` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE IF NOT EXISTS `currencies` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CurrencyName` varchar(255) NOT NULL,
  `CurrencySymbol` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `currency_settings`
--

CREATE TABLE IF NOT EXISTS `currency_settings` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `PCurrencyId` int(11) NOT NULL,
  `SCurrencyId` int(11) NOT NULL,
  `MarkupRate` decimal(10,0) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ordered_platforms`
--

CREATE TABLE IF NOT EXISTS `ordered_platforms` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Code` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE IF NOT EXISTS `orderitems` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `OrderId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `SortOrder` varchar(255) NOT NULL,
  `SalesPrice` decimal(10,0) NOT NULL,
  `CostPrice` decimal(10,0) NOT NULL,
  `ShippingCost` decimal(10,0) NOT NULL,
  `DiscountCode` varchar(255) NOT NULL,
  `DiscountRate` decimal(10,0) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Quantity` decimal(10,0) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `OrderedBy` int(11) NOT NULL,
  `CurrencyId` int(11) NOT NULL,
  `OrderType` varchar(255) NOT NULL,
  `PlatformId` int(11) NOT NULL,
  `IsTaxed` tinyint(1) NOT NULL,
  `TaxDesc` varchar(255) NOT NULL,
  `TaxRate` decimal(10,0) NOT NULL,
  `OrderStatus` varchar(255) NOT NULL,
  `OrderNo` varchar(255) NOT NULL,
  `TrackingNo` varchar(255) NOT NULL,
  `DiscountCode` varchar(255) NOT NULL,
  `DiscountRate` decimal(10,0) NOT NULL,
  `IsApproved` tinyint(1) NOT NULL,
  `IsCancelled` tinyint(1) NOT NULL,
  `CancelledOn` datetime NOT NULL,
  `CancelledBy` int(11) NOT NULL,
  `CancelRemarks` varchar(255) NOT NULL,
  `HandledBy` int(11) NOT NULL,
  `IsDropship` tinyint(1) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `InternalNotes` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_addresses`
--

CREATE TABLE IF NOT EXISTS `order_addresses` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `orderId` int(11) NOT NULL,
  `AddressType` varchar(255) NOT NULL,
  `AddressLine1` varchar(255) NOT NULL,
  `AddressLine2` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `ZipCode` varchar(255) NOT NULL,
  `CountryCode` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_tracklogs`
--

CREATE TABLE IF NOT EXISTS `order_tracklogs` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `OrderId` int(11) NOT NULL,
  `SortOrder` int(11) NOT NULL,
  `LogDesc` varchar(255) NOT NULL,
  `IsDeparted` tinyint(1) NOT NULL,
  `IsReached` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `OrderId` int(11) NOT NULL,
  `TypeId` int(11) NOT NULL,
  `WalletId` int(11) NOT NULL,
  `CurrencyId` int(11) NOT NULL,
  `IsPaidByWallet` tinyint(1) NOT NULL,
  `Amount` decimal(10,0) NOT NULL,
  `CardNumber` varchar(255) NOT NULL,
  `RefCode` varchar(255) NOT NULL,
  `PaymentStatus` varchar(255) NOT NULL,
  `ProcessedBy` int(11) NOT NULL,
  `ProcessesOn` datetime NOT NULL,
  `ApprovedBy` int(11) NOT NULL,
  `ApprovedOn` datetime NOT NULL,
  `Remarks` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_types`
--

CREATE TABLE IF NOT EXISTS `payment_types` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Code` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `IsLock` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `GroupId` int(11) NOT NULL,
  `Ucode` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `permission_group`
--

CREATE TABLE IF NOT EXISTS `permission_group` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `SupplierId` int(11) NOT NULL,
  `BrandId` int(11) NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `SKU` varchar(255) NOT NULL,
  `SupplierSKU` varchar(255) NOT NULL,
  `StockType` varchar(255) NOT NULL,
  `InitialStock` decimal(10,0) NOT NULL,
  `InitialCostPrice` decimal(10,0) NOT NULL,
  `IsSellable` tinyint(1) NOT NULL,
  `IsPurchaseable` tinyint(1) NOT NULL,
  `IsTaxFree` tinyint(1) NOT NULL,
  `IsTaxInclusive` tinyint(1) NOT NULL,
  `IsBatchTracked` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_barcodes`
--

CREATE TABLE IF NOT EXISTS `product_barcodes` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `productId` int(11) NOT NULL,
  `Barcode` varchar(255) NOT NULL,
  `IsLatest` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TenantId` int(11) NOT NULL,
  `RoleName` varchar(255) NOT NULL,
  `LoweredRoleName` varchar(255) NOT NULL,
  `IsLocked` tinyint(1) NOT NULL,
  `Description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE IF NOT EXISTS `role_permissions` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `RoleId` int(11) NOT NULL,
  `PermissionId` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `BillingAddressId` int(11) NOT NULL,
  `ShippingAddressId` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Code` varchar(255) NOT NULL,
  `BaseCurrency` varchar(255) NOT NULL,
  `TaxNumber` varchar(255) NOT NULL,
  `Website` varchar(255) NOT NULL,
  `ContactPersonName` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `FaxNumber` varchar(255) NOT NULL,
  `MobileNumber` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Remarks` varchar(255) NOT NULL,
  `IsVatSupplier` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE IF NOT EXISTS `taxes` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `TaxName` varchar(255) NOT NULL,
  `TaxCode` varchar(255) NOT NULL,
  `TaxRate` decimal(10,0) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE IF NOT EXISTS `tenants` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `TenantId` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tenant_settings`
--

CREATE TABLE IF NOT EXISTS `tenant_settings` (
  `SettingId` int(11) NOT NULL AUTO_INCREMENT,
  `TenantId` int(11) NOT NULL,
  `BaseCurrencyId` int(11) NOT NULL,
  `TaxId` int(11) NOT NULL,
  `IsEnabledTaobaoAPI` tinyint(1) NOT NULL,
  `IsEnabledTmallAPI` tinyint(1) NOT NULL,
  `IsEnabled1688API` tinyint(1) NOT NULL,
  `RapidAPICallLimit` int(11) NOT NULL,
  `OrderPrefix` varchar(255) NOT NULL,
  `OrderInitialNumber` varchar(255) NOT NULL,
  PRIMARY KEY (`SettingId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trx_mediums`
--

CREATE TABLE IF NOT EXISTS `trx_mediums` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Code` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `IsOwner` tinyint(1) NOT NULL,
  `IsApproved` tinyint(1) NOT NULL,
  `IsTickedUA` tinyint(1) NOT NULL,
  `IsLockedOut` tinyint(1) NOT NULL,
  `POSLastLoginDate` date NOT NULL,
  `LastLoginDate` date NOT NULL,
  `LastPasswordChangeDate` date NOT NULL,
  `LastLockoutDate` date NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usersintenants`
--

CREATE TABLE IF NOT EXISTS `usersintenants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `TenantId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE IF NOT EXISTS `users_roles` (
  `users_roles` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `RoleId` int(11) NOT NULL,
  PRIMARY KEY (`users_roles`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_credit_cards`
--

CREATE TABLE IF NOT EXISTS `user_credit_cards` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `TypeId` int(11) NOT NULL,
  `CardNumber` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_settings`
--

CREATE TABLE IF NOT EXISTS `user_settings` (
  `SettingId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `ShippingAddressId` int(11) NOT NULL,
  `BillingAddressId` int(11) NOT NULL,
  `BaseCurrency` varchar(255) NOT NULL,
  `RapidAPICallLimit` varchar(255) NOT NULL,
  `AvatarImg` varchar(255) NOT NULL,
  `CoverImg` varchar(255) NOT NULL,
  PRIMARY KEY (`SettingId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_wallet`
--

CREATE TABLE IF NOT EXISTS `user_wallet` (
  `WalletId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `WalletRank` varchar(255) NOT NULL,
  `WalletName` varchar(255) NOT NULL,
  `MaxTrxLimit` decimal(10,0) NOT NULL,
  `BaseCurrency` int(11) NOT NULL,
  PRIMARY KEY (`WalletId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_wishlists`
--

CREATE TABLE IF NOT EXISTS `user_wishlists` (
  `listId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `dateAdded` datetime NOT NULL,
  PRIMARY KEY (`listId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wallet_topup_pops`
--

CREATE TABLE IF NOT EXISTS `wallet_topup_pops` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `HandledBy` int(11) NOT NULL,
  `HandledOn` datetime NOT NULL,
  `UtrxCode` int(11) NOT NULL,
  `Amount` decimal(10,0) NOT NULL,
  `PopImg` varchar(255) NOT NULL,
  `PopStatus` varchar(255) NOT NULL,
  `IsArchived` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wallet_trx`
--

CREATE TABLE IF NOT EXISTS `wallet_trx` (
  `TrxId` int(11) NOT NULL AUTO_INCREMENT,
  `WalletId` int(11) NOT NULL,
  `TrxType` varchar(255) NOT NULL,
  `TrxMediumId` int(11) NOT NULL,
  `PrimaryCurrencyId` int(11) NOT NULL,
  `SecondaryCurrencyId` int(11) NOT NULL,
  `UtrxCode` varchar(255) NOT NULL,
  `TrxAmount` decimal(10,0) NOT NULL,
  `ExchgRate` decimal(10,0) NOT NULL,
  `DebitCard` varchar(255) NOT NULL,
  `IsRefunded` tinyint(1) NOT NULL,
  `IsApproved` tinyint(1) NOT NULL,
  `ApprovedBy` int(11) NOT NULL,
  `UpdatedBy` int(11) NOT NULL,
  `ApprovedOn` datetime NOT NULL,
  `UpdatedOn` datetime NOT NULL,
  `CancelledOn` datetime NOT NULL,
  `CancelledBy` int(11) NOT NULL,
  `CancelReason` varchar(255) NOT NULL,
  `Remarks` varchar(255) NOT NULL,
  PRIMARY KEY (`TrxId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
