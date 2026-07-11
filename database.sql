SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS hotel_management_system;
USE hotel_management_system;

-- --------------------------------------------------------

-- Table structure for `admin`
CREATE TABLE `admin` (
  `adminid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `empid` varchar(20) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`adminid`, `password`, `empid`) VALUES ('admin', '1234', 'admin');

-- Table structure for `balance`
CREATE TABLE `balance` (
  `balance` INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `balance` (`balance`) VALUES (13150);

-- Table structure for `booked_hist`
CREATE TABLE `booked_hist` (
  `phone` INT NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` INT NOT NULL,
  `ac` varchar(5) NOT NULL,
  `breakfast` varchar(5) NOT NULL,
  `lunch` varchar(5) NOT NULL,
  `snacks` varchar(5) NOT NULL,
  `dinner` varchar(5) NOT NULL,
  `swimming` varchar(5) NOT NULL,
  `price` INT NOT NULL,
  `book_id` INT NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `booked_hist` (`phone`, `name`, `idproof`, `room_type`, `checkin`, `checkout`, `days`, `ac`, `breakfast`, `lunch`, `snacks`, `dinner`, `swimming`, `price`, `book_id`) VALUES
(123, 'abc', '123', 'Single bed', '2019-10-09', '2019-10-17', 8, 'false', 'false', 'false', 'false', 'false', 'false', 1000, 10013),
(123, 'abc', '123', 'Single bed', '2019-10-09', '2019-10-12', 3, 'false', 'true', 'true', 'false', 'false', 'false', 2350, 10014),
(123, 'abc', '123', 'Single bed', '2019-10-17', '2019-10-19', 2, 'false', 'false', 'false', 'false', 'false', 'false', 1000, 10016),
(1234, 'maliha', '1234', 'Single bed', '2019-11-08', '2019-11-10', 2, 'false', 'true', 'true', 'false', 'false', 'false', 2900, 10019);

-- Table structure for `book_id`
CREATE TABLE `book_id` (
  `book_id` INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `book_id` (`book_id`) VALUES (10020);

-- Table structure for `confirmed_booking`
CREATE TABLE `confirmed_booking` (
  `phone` INT NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` INT NOT NULL,
  `ac` varchar(5) NOT NULL,
  `breakfast` varchar(5) NOT NULL,
  `lunch` varchar(5) NOT NULL,
  `snacks` varchar(5) NOT NULL,
  `dinner` varchar(5) NOT NULL,
  `swimming` varchar(5) NOT NULL,
  `price` INT NOT NULL,
  `book_id` INT NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `confirmed_booking` (`phone`, `name`, `idproof`, `room_type`, `checkin`, `checkout`, `days`, `ac`, `breakfast`, `lunch`, `snacks`, `dinner`, `swimming`, `price`, `book_id`) VALUES
(123, 'abc', '123', 'Double bed', '2019-10-09', '2019-10-19', 10, 'false', 'false', 'true', 'false', 'false', 'false', 20400, 10017),
(123, 'abc', '123', 'Single bed', '2019-10-02', '2019-10-04', 2, 'false', 'false', 'false', 'false', 'false', 'false', 2000, 10018);

-- Table structure for `rooms_count`
CREATE TABLE `rooms_count` (
  `room_type` varchar(20) NOT NULL,
  `available_rooms` INT NOT NULL,
  `occupied_rooms` INT NOT NULL,
  `price` INT NOT NULL,
  PRIMARY KEY (`room_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `rooms_count` (`room_type`, `available_rooms`, `occupied_rooms`, `price`) VALUES
('Single bed', 5, 1, 1000),
('Double bed', 4, 1, 1800),
('Four bed', 5, 0, 3000);

-- Other utility tables
CREATE TABLE `temp` (`pwd` varchar(20) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `temp_book_id_` (`book_id` INT NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `temp_room` (`phone` INT NOT NULL, `idproof` varchar(20) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `temp_session` (
  `phone` INT NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `temp_session` (`phone`, `password`, `name`, `email`, `idproof`, `dob`) VALUES
(1234, '12345', 'maliha', 'maliha@gmail.com', '1234', '2000-01-01');

CREATE TABLE `user_login` (
  `phone` INT NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user_login` (`phone`, `password`, `name`, `email`, `idproof`, `dob`) VALUES
(123, '1234', 'abc', 'abc@gmail.com', '123', '2000-01-01'),
(1234, '12345', 'maliha', 'maliha@gmail.com', '1234', '2000-01-01');

CREATE TABLE `user_room_book` (
  `phone` INT NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` INT NOT NULL,
  `ac` varchar(5) NOT NULL,
  `breakfast` varchar(5) NOT NULL,
  `lunch` varchar(5) NOT NULL,
  `snacks` varchar(5) NOT NULL,
  `dinner` varchar(5) NOT NULL,
  `swimming` varchar(5) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Waiting',
  `price` INT NOT NULL,
  `book_id` INT NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

COMMIT;
