SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- CREATE DATABASE Sparks_Foundation_Bank;
-- USE Sparks_Foundation_Bank;
-- CREATE TABLE transaction (
--   sno int(3) NOT NULL,
--   sender text NOT NULL,
--   receiver text NOT NULL,
--   balance int(8) NOT NULL,
--   datetime datetime NOT NULL DEFAULT current_timestamp()
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table 'transaction'
--

CREATE TABLE 'transaction' (
  'sno' int(3) NOT NULL,
  'sender' text NOT NULL,
  'receiver' text NOT NULL,
  'balance' int(8) NOT NULL,
  'datetime' datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table 'users'
--

CREATE TABLE 'users' (
  'id' int(3) NOT NULL,
  'name' text NOT NULL,
  'email' varchar(30) NOT NULL,
  'balance' int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table 'users'
--

INSERT INTO 'users' ('id', 'name', 'email', 'balance') VALUES
(1, 'Disha', 'disha@gmail.com', 538459),
(2, 'Tejal', 'tejal@gmail.com', 1611),
(3, 'Tanisha', 'tanisha@gmail.com', 40000),
(4, 'Mansi', 'mansi@gmail.com', 5000),
(5, 'Abhimanyu', 'kapoor@gmail.com', 80000),
(6, 'Izabelle', 'princess@gmail.com', 6000),
(7, 'Kevin', 'pannu@gmail.com', 70000),
(8, 'Leonardo', 'football@gmail.com', 40000),
(9, 'Bella', 'advani@gmail.com', 10000),
(10, 'Gaurang', 'patel@gmail.com', 90000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table 'transaction'
--
ALTER TABLE 'transaction'
  ADD PRIMARY KEY ('sno');

--
-- Indexes for table 'users'
--
ALTER TABLE 'users'
  ADD PRIMARY KEY ('id');

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table 'transaction'
--
ALTER TABLE 'transaction'
  MODIFY 'sno' int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table 'users'
--
ALTER TABLE 'users'
  MODIFY 'id' int(3) NOT NULL AUTO_INCREMENT;
