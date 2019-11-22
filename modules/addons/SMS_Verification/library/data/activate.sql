-- SMS Verification For WHMCS
-- version 1.0.0

CREATE TABLE `mod_sms_verification` (
  `code` varchar(16) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `number` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `mod_sms_verification`
  ADD PRIMARY KEY (`phone`),
  ADD UNIQUE KEY `code` (`code`),
  ADD UNIQUE KEY `phone` (`phone`);
COMMIT;