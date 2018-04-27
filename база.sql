SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `up_check` (IN `usernameparam` VARCHAR(20))  NO SQL
select username from login where usernameparam=username$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `up_create` (IN `userpassparam` VARCHAR(20), IN `usernameparam` VARCHAR(20))  NO SQL
INSERT INTO login (username,password)
VALUES (usernameparam,userpassparam)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `up_login` (IN `userpassparam` VARCHAR(20), IN `usernameparam` VARCHAR(20))  NO SQL
select * from login where userpassparam=password AND usernameparam=username$$

DELIMITER ;

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(5, 'lika', 'lika'),


ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
