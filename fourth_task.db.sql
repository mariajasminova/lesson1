BEGIN TRANSACTION;
DROP TABLE IF EXISTS `producer`;
CREATE TABLE IF NOT EXISTS `producer` (
	`id_producer`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`first_name`	VARCHAR,
	`last_name`	VARCHAR
);
INSERT INTO `producer` VALUES (1,'Mark','Palansky'),
 (2,'Christopher','Nolan'),
 (3,'Denis','Villeneuve'),
 (4,'Olivier','Nakache'),
 (5,'Amanda','Sthers');
DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
	`id_genre`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`title`	VARCHAR
);
INSERT INTO `genre` VALUES (1,'Science fiction'),
 (2,'Biography'),
 (3,'Comedy');
DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
	`id_films`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`title`	VARCHAR,
	`release_date`	INTEGER,
	`genre_id`	VARCHAR,
	`producer_id`	INTEGER,
	FOREIGN KEY(`producer_id`) REFERENCES `producer`(`id_producer`),
	FOREIGN KEY(`genre_id`) REFERENCES `genre`(`id_genre`)
);
INSERT INTO `films` VALUES (1,'Rememory',2017,'1',1),
 (2,'Interstellar',2014,'1',2),
 (3,'Blade runner 2049',2017,'1',3),
 (4,'Madame',2012,'3',5),
 (5,'The intouchables',2011,'2',4);
DROP TABLE IF EXISTS `film_genre`;
CREATE TABLE IF NOT EXISTS `film_genre` (
	`film_id`	INTEGER,
	`genre_id`	INTEGER,
	FOREIGN KEY(`film_id`) REFERENCES `films`(`id_films`),
	FOREIGN KEY(`genre_id`) REFERENCES `genre`(`id_genre`),
	PRIMARY KEY(`film_id`,`genre_id`)
);
INSERT INTO `film_genre` VALUES (1,1),
 (2,1),
 (3,1),
 (4,3),
 (5,2);
COMMIT;
