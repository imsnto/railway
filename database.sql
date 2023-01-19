CREATE TABLE `route` (
  `tr_no` smallint(6) DEFAULT NULL,
  `src` varchar(50) DEFAULT NULL,
  `dest` varchar(50) DEFAULT NULL,
  `src_departure` time DEFAULT NULL,
  `dest_arrival` time DEFAULT NULL,
  KEY `tr_no` (`tr_no`),
  CONSTRAINT `route_ibfk_1` FOREIGN KEY (`tr_no`) REFERENCES `train` (`tr_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci

CREATE TABLE `train` (
  `tr_no` smallint(6) NOT NULL,
  `tr_name` varchar(100) DEFAULT NULL,
  `source` varchar(50) DEFAULT NULL,
  `dest` varchar(50) DEFAULT NULL,
  `available_seat` smallint(6) DEFAULT NULL,
  `sat` tinyint(1) DEFAULT 1,
  `sun` tinyint(1) DEFAULT 1,
  `mon` tinyint(1) DEFAULT 1,
  `tue` tinyint(1) DEFAULT 1,
  `wed` tinyint(1) DEFAULT 1,
  `thu` tinyint(1) DEFAULT 1,
  `fri` tinyint(1) DEFAULT 1,
  `departure_time` time DEFAULT NULL,
  `arrival_time` time DEFAULT NULL,
  PRIMARY KEY (`tr_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `phone` char(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nid` char(10) DEFAULT NULL,
  `password` text DEFAULT NULL,
  PRIMARY KEY (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci

CREATE TABLE `active` (
  `phone` char(11) DEFAULT NULL,
  `logintime` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `phone` (`phone`),
  CONSTRAINT `active_ibfk_1` FOREIGN KEY (`phone`) REFERENCES `users` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci


