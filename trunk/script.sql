
create database homeservice;
use homeservice;

Create table Items(
item integer(6) auto_increment primary key,
item_name varchar(200) not null,
item_price float(8,2) not null,
item_description text )ENGINE=InnoDB AUTO_INCREMENT=81;