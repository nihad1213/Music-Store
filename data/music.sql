CREATE TABLE music(
    musicID int NOT NULL AUTO_INCREMENT,
    musicTitle varchar(255) NOT NULL,
    musicPrice float NOT NULL,
    musicLabel varchar(255),
    musicImage varchar(255) NOT NULL,
    PRIMARY KEY (musicID)
);