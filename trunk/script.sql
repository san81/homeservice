
drop database homeservice;
create database homeservice;
use homeservice;

Create table category(
category_id integer(6) auto_increment primary key,
category_name varchar(200) not null,
description text)ENGINE=InnoDB AUTO_INCREMENT=81;

Create table items(
item_id integer(6) auto_increment primary key,
item_name varchar(200) not null,
item_price float(8,2) not null,
item_description text )ENGINE=InnoDB AUTO_INCREMENT=81;

Create table zones(
zone_id integer(6) auto_increment primary key,
zone_code varchar(10) unique,
zone_name varchar(255) not null,
description text
)ENGINE=InnoDB;

Create table areas(
area_id integer(6) auto_increment primary key,
area_code varchar(5) unique,
area_name varchar(255) not null,
zone_id integer(6),
description text,
FOREIGN KEY(`zone_id`) REFERENCES zones(`zone_id`) ON UPDATE CASCADE
)ENGINE=InnoDB;


Create table customer(
customer_id integer(6) auto_increment primary key,
reg_date datetime,
person_code varchar(30) unique,
name varchar(100) not null,
sur_name varchar(100) not null,
mobile varchar(10) not null,
zone_id integer(6),
area_id integer(6),
reg_expiry datetime,
address text,
FOREIGN KEY(`zone_id`) REFERENCES zones(`zone_id`) ON UPDATE CASCADE,
FOREIGN KEY(`area_id`) REFERENCES areas(`area_id`) ON UPDATE CASCADE
)ENGINE=InnoDB;

create table cust_reg_items(
customer_id integer(6),
item_id integer(6),
FOREIGN KEY(`customer_id`) REFERENCES customer(`customer_id`) ON UPDATE CASCADE,
FOREIGN KEY(`item_id`) REFERENCES items(`item_id`) ON UPDATE CASCADE
)ENGINE=InnoDB;

-- role can be supervisor, manager, field employee, etc
-- working under - self join field point to his supervisor employee id
Create table employee(
emp_id integer(6) auto_increment primary key,
reg_date datetime,
emp_code varchar(30) unique,
name varchar(100) not null,
sur_name varchar(100) not null,
mobile varchar(10) not null,
zone_id integer(6),
area_id integer(6),
role varchar(30),
working_under integer(6),
skill_set text,
address text,
FOREIGN KEY(`working_under`) REFERENCES employee(`emp_id`) ON UPDATE CASCADE,
FOREIGN KEY(`zone_id`) REFERENCES zones(`zone_id`) ON UPDATE CASCADE,
FOREIGN KEY(`area_id`) REFERENCES areas(`area_id`) ON UPDATE CASCADE
)ENGINE=InnoDB;


-- status can be assigned,completed etc...
create table complaints(
id integer(6) auto_increment primary key,
complaint_date datetime,
complaint_code varchar(40) unique,
customer_id integer(6),
assigned_emp_id integer(6),
item_id integer(6),
status varchar(20),
closed_date datetime,
description text,
FOREIGN KEY(`customer_id`) REFERENCES customer(`customer_id`) ON UPDATE CASCADE,
FOREIGN KEY(`assigned_emp_id`) REFERENCES employee(`emp_id`) ON UPDATE CASCADE,
FOREIGN KEY(`item_id`) REFERENCES items(`item_id`) ON UPDATE CASCADE
)ENGINE=InnoDB;

-- default data

insert into items (item_name,item_price,item_description) values ('fan',100,'Fan repair');
insert into items (item_name,item_price,item_description) values ('Cooler',300,'Fan repair');
insert into items (item_name,item_price,item_description) values ('Water pump',500,'Fan repair');


insert into zones (zone_code,zone_name,description) values ('HydZone','Hyderabad zone','This is Hyderabad zone');
insert into zones (zone_code,zone_name,description) values ('SecZone','Secunderabad zone','This is secunderabad zone');

insert into areas (area_code,area_name,zone_id,description) values ('Thmg','Thirumalagiri',2,'');
insert into areas (area_code,area_name,zone_id,description) values ('Krkh','Kharkhana',2,'');
insert into areas (area_code,area_name,zone_id,description) values ('Begu','Begumpet',1,'');
insert into areas (area_code,area_name,zone_id,description) values ('Ameer','Ammerpet',1,'');