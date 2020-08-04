drop schema if exists Survey;
create schema Survey;
use Survey;


create table users(
id int PRIMARY key NOT NULL AUTO_INCREMENT ,
username varchar(100),
regno varchar(100) UNIQUE not null,
passwrd varchar(100),
email VARCHAR(100)
);

create table responses(
id int primary key not null auto_increment,
username VARCHAR(100),
Res1 int not null, 
Res2 int not null, 
Res3 int not null,
Remarks varchar(148) 
);

--dummmy DATA
INSERT INTO `responses` (`id`, `username`, `Res1`, `Res2`, `Res3`, `Remarks`) VALUES 
(1, 'Waleed', '4', '2', '3', 'nothing'),
(2, 'Adil', '1', '4', '2', 'no'),
(3, 'Ali Haider', '3', '2', '1', 'yes imrpove'),
(4, 'Ali Adam', '2', '4', '4', 'new technologies'),
(5, 'Jawad', '4', '2', '3', 'best course'),
(6, 'Samia', '1', '4', '2', 'no'),
(7, 'Noor', '3', '2', '1', 'no issues'),
(8, 'Husnain', '2', '4', '4', 'no problem'),
(9, 'Rimsha', '4', '2', '3', 'plz enhance'),
(10, 'Sheroz', '1', '4', '2', 'nothing');