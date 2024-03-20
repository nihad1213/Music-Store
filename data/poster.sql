CREATE TABLE poster(
    posterID int NOT NULL AUTO_INCREMENT,
    posterTitle varchar(255) NOT NULL,
    posterPrice float NOT NULL,
    posterLabel varchar(255),
    posterImage varchar(255) NOT NULL,
    PRIMARY KEY (posterID)
);