CREATE TABLE newproducts(
    productID int NOT NULL AUTO_INCREMENT,
    productTitle varchar(255) NOT NULL,
    productPrice float NOT NULL,
    productLabel varchar(255),
    productImage varchar(255) NOT NULL,
    PRIMARY KEY (productID)
);