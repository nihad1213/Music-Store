CREATE TABLE book(
    bookID int NOT NULL AUTO_INCREMENT,
    bookTitle varchar(255) NOT NULL,
    bookPrice float NOT NULL,
    bookLabel varchar(255),
    bookImage varchar(255) NOT NULL,
    PRIMARY KEY (bookID)
);