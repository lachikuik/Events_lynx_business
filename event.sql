DROP DATABASE IF EXISTS lynx;
CREATE DATABASE lynx;

USE lynx;

DROP TABLE IF EXISTS events;


CREATE TABLE events (
    id             INT             NOT NULL AUTO_INCREMENT,
    name           VARCHAR(255)    NOT NULL ,
    startDate      DATETIME       NOT NULL,
    endDate	   DATETIME       NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO events
	(name, startDate, endDate)
	VALUES ("axike", "2023-01-18", "2025-09-12"),
	       ("amar mend uu", "2022-09-17", "2025-09-18"),
               ("concert", "2023-11-17", "2025-09-18"),
               ("Arco", "2023-12-17", "2025-09-18"),
               ("plouf", "2020-01-17", "2025-09-18"),
               ("Raluca", "2023-09-17", "2025-09-18"),
               ("matchs", "2023-09-17", "2025-09-18"),
               ("Wololo", "2023-09-17", "2025-09-18"),
               ("pixelophonia", "2023-09-17", "2025-09-18");
	
