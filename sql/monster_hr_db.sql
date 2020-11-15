CREATE DATABASE monster_hr_db;

CREATE TABLE monster_hr_db.tb_users(
	id			INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    company		VARCHAR(256) NULL DEFAULT NULL,
    user_name	VARCHAR(256) NOT NULL,
    email		VARCHAR(256) NOT NULL,
    pass		VARCHAR(256) NOT NULL,
    role		INTEGER NULL DEFAULT NULL
);

CREATE TABLE monster_hr_db.tb_users__data(
	user_id		INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name 	VARCHAR(256) NULL,
    last_name	VARCHAR(256) NULL,
    age			VARCHAR(256) NULL,
    address		VARCHAR(256) NULL,
    phone		VARCHAR(256) NULL,
    education	TEXT NULL,
    skills		TEXT NULL,
    experience	TEXT NULL
);

CREATE TABLE monster_hr_db.tb_job(
	id				INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title			VARCHAR(256) NOT NULL,
    content			VARCHAR(256) NOT NULL,
    preview_content	TEXT NOT NULL
);

CREATE TABLE monster_hr_db.tb_job__categories(
	id			INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title		VARCHAR(256) NOT NULL,
    priority	INTEGER NOT NULL
);

CREATE TABLE monster_hr_db.tb_job_post__categories(
	job_id 		INTEGER NULL,
    category_id INTEGER NULL
);





