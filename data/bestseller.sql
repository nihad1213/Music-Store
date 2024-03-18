CREATE TABLE bestsellers(
    bestSellerID int NOT NULL AUTO_INCREMENT,
    bestSellerTitle varchar(255) NOT NULL,
    bestSellerPrice float NOT NULL,
    bestSellerLabel varchar(255),
    bestSellerImage varchar(255) NOT NULL,
    PRIMARY KEY (bestSellerID)
);