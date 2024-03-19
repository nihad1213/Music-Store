CREATE TABLE dsitems(
    dsItemsID int NOT NULL AUTO_INCREMENT,
    dsItemsTitle varchar(255) NOT NULL,
    dsItemsPrice float NOT NULL,
    dsItemsLabel varchar(255),
    dsItemsImage varchar(255) NOT NULL,
    PRIMARY KEY (dsItemsID)
);