CREATE TABLE `crud_html`.`student` (
    `sid` INT NOT NULL AUTO_INCREMENT,
    `sname` VARCHAR(45) NOT NULL,
    `saddress` VARCHAR(255) NOT NULL,
    `sclass` INT NOT NULL,
    `sphone` VARCHAR(10) NOT NULL,
    PRIMARY KEY (`sid`));

CREATE TABLE `crud_html`.`studentclass` (
  `cid` INT NOT NULL AUTO_INCREMENT,
  `cname` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cid`));