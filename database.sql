SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `personid` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `job` varchar(255) NOT NULL,
  `personid` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `pet` (
  `id` int(11) NOT NULL,
  `petname` varchar(255) NOT NULL,
  `personid` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personid` (`personid`);

ALTER TABLE `job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personid` (`personid`);

ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personid` (`personid`);

ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `pet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT; 

ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`personid`) REFERENCES `person` (`id`) ON DELETE CASCADE;

ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`personid`) REFERENCES `person` (`id`) ON DELETE CASCADE;

ALTER TABLE `pet`
  ADD CONSTRAINT `pet_ibfk_1` FOREIGN KEY (`personid`) REFERENCES `person` (`id`) ON DELETE CASCADE;
COMMIT;       