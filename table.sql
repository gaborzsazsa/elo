drop table if exists users ;
CREATE TABLE `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
	name varchar(128),
	password varchar(128),
	email	varchar(128),
	PRIMARY KEY (id)
);

insert into users values(0,'a','a','a@a.com');
