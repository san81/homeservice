
create database homeservice;
use homeservice;

Create table uss_items(
item_id integer(6) auto_increment primary key,
item_name varchar(200) not null,
item_price float(8,2) not null,
item_description text )ENGINE=InnoDB AUTO_INCREMENT=81;

Create table uss_zones(
zone_id integer(6) auto_increment primary key,
zone_code varchar(10) unique,
zone_name varchar(255),
description text
)ENGINE=InnoDB;

Create table uss_areas(
area_id integer(6) auto_increment primary key,
area_code varchar(5) unique,
area_name varchar(255),
zone_id integer(6),
description text,
FOREIGN KEY(`zone_id`) REFERENCES uss_zones(`zone_id`) ON UPDATE CASCADE
)ENGINE=InnoDB;


Create table uss_customer(
customer_id integer(6) auto_increment primary key,
reg_date datetime,
person_code varchar(30) unique,
name varchar(100) not null,
sur_name varchar(100) not null,
mobile varchar(10) not null,
zone_id integer(6),
area_id integer(6),
reg_expiry datetime,
address text
)ENGINE=InnoDB;

create table uss_cust_reg_items(
customer_id integer(6),
item_id integer(6),
FOREIGN KEY(`customer_id`) REFERENCES uss_customer(`customer_id`) ON UPDATE CASCADE,
FOREIGN KEY(`item_id`) REFERENCES uss_items(`item_id`) ON UPDATE CASCADE
)ENGINE=InnoDB;

-- role can be supervisor, manager, field employee, etc
-- working under - self join field point to his supervisor employee id
Create table uss_employee(
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
FOREIGN KEY(`working_under`) REFERENCES uss_employee(`emp_id`) ON UPDATE CASCADE
)ENGINE=InnoDB;


-- status can be assigned,completed etc...
create table uss_complaints(
id integer(6) auto_increment primary key,
complaint_date datetime,
complaint_code varchar(40) unique,
customer_id integer(6),
assigned_emp_id integer(6),
item_id integer(6),
status varchar(20),
closed_date datetime,
description text,
FOREIGN KEY(`customer_id`) REFERENCES uss_customer(`customer_id`) ON UPDATE CASCADE,
FOREIGN KEY(`assigned_emp_id`) REFERENCES uss_employee(`emp_id`) ON UPDATE CASCADE,
FOREIGN KEY(`item_id`) REFERENCES uss_items(`item_id`) ON UPDATE CASCADE
)ENGINE=InnoDB;
