CREATE TABLE user(
    userID int NOT NULL PRIMARY KEY,
    userName varchar(255)  NOT NULL,
    userMail varchar(255)  NOT NULL,
    userPassword varchar(255)  NOT NULL,
    userCardNumber varchar(16) NOT NULL
);