--DB name = the_company

--create table users
CREATE TABLE users (
    id INT(11) NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    username VARCHAR(15) NOT NULL,
    passwors VARCHAR(255) NOT NULL,
    photo VARCHAR(255) DEFAULT NULL,
    PRIMARY KEY(id)
);


-- CRUD ->dabase operation
--C means CREATE / INSERT
--R means SELECT
--U means UPDATE
--D means DELETE