
drop table cust_reg_items;
drop table category;
drop table complaints;
drop table customer;
drop table employee;
drop table employee_profiles;
drop table items;
drop table category;
drop table areas;
drop table zones;
drop table city;

drop database homeservice;
create database homeservice;
use homeservice;


Create table category(
category_id integer(6) auto_increment primary key,
category_name varchar(200) not null,
description text)ENGINE=InnoDB;

Create table items(
item_id integer(6) auto_increment primary key,
item_name varchar(200) not null,
item_price float(8,2) not null,
category_id integer(6) not null,
item_description text,
FOREIGN KEY(category_id) REFERENCES category(category_id) ON UPDATE CASCADE)ENGINE=InnoDB;

Create table city(
city_id integer(6) auto_increment primary key,
city_name varchar(255) not null,
description text)ENGINE=InnoDB;

Create table zones(
zone_id integer(6) auto_increment primary key,
zone_code varchar(10) unique,
zone_name varchar(255) not null,
city_id integer(6),
description text,
FOREIGN KEY(`city_id`) REFERENCES city(`city_id`) ON UPDATE CASCADE
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
create table employee_profiles(
profile_id integer(6) auto_increment primary key,
profile_code varchar(30) not null,
description varchar(50) not null
)ENGINE=InnoDB;

-- working under - self join field point to his supervisor employee id
Create table employee(
emp_id integer(6) auto_increment primary key,
reg_date datetime,
emp_code varchar(60) unique,
emp_profile_id integer(6),
name varchar(100) not null,
sur_name varchar(100) not null,
mobile varchar(10) not null,
zone_id integer(6),
area_id integer(6),
working_under integer(6),
skill_set text,
category_id integer(6),
address text,
FOREIGN KEY(`working_under`) REFERENCES employee(`emp_id`) ON UPDATE CASCADE,
FOREIGN KEY(`zone_id`) REFERENCES zones(`zone_id`) ON UPDATE CASCADE,
FOREIGN KEY(`area_id`) REFERENCES areas(`area_id`) ON UPDATE CASCADE,
FOREIGN KEY(category_id) REFERENCES category(category_id) ON UPDATE CASCADE,
FOREIGN KEY(emp_profile_id) REFERENCES employee_profiles(profile_id) ON UPDATE CASCADE
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

insert into employee_profiles (profile_code,description) values ('Zone_Head','Zone head');
insert into employee_profiles (profile_code,description) values ('Techical_Expert','Techical Expert');
insert into employee_profiles (profile_code,description) values ('Supervisor','Supervisor');
insert into employee_profiles (profile_code,description) values ('Employee','Normal Employee');

insert into category ( category_name,description) values ('Electrical','Electrical');
insert into category ( category_name,description) values ('Electronics','Electronics');
insert into category ( category_name,description) values ('Mechanical','Mechanical');

insert into items (item_name,item_price,item_description,category_id) values ('fan',100,'Fan repair',1);
insert into items (item_name,item_price,item_description,category_id) values ('Cooler',300,'Fan repair',2);
insert into items (item_name,item_price,item_description,category_id) values ('Water pump',500,'Fan repair',3);

insert into city (city_name,description) values ('Hyd','Hyderabad');
insert into city (city_name,description) values ('Sec','Secunderabad');

insert into zones (zone_code,zone_name,city_id,description) values ('HydZone','Hyderabad zone',1,'This is Hyderabad zone');
insert into zones (zone_code,zone_name,city_id,description) values ('SecZone','Secunderabad zone',2,'This is secunderabad zone');

insert into areas (area_code,area_name,zone_id,description) values ('Thmg','Thirumalagiri',2,'Thirumalagiri');
insert into areas (area_code,area_name,zone_id,description) values ('Krkh','Kharkhana',2,'Kharkhana');
insert into areas (area_code,area_name,zone_id,description) values ('Begu','Begumpet',1,'Begumpet');
insert into areas (area_code,area_name,zone_id,description) values ('Ameer','Ammerpet',1,'Ammerpet');