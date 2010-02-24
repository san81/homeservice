CREATE TABLE areas (area_id INT AUTO_INCREMENT, area_code VARCHAR(5), area_name VARCHAR(255) DEFAULT '' NOT NULL, zone_id INT, description TEXT, INDEX zone_id_idx (zone_id), PRIMARY KEY(area_id)) ENGINE = INNODB;
CREATE TABLE complaints (id INT AUTO_INCREMENT, complaint_date DATETIME, complaint_code VARCHAR(40), customer_id INT, assigned_emp_id INT, item_id INT, status VARCHAR(20), closed_date DATETIME, description TEXT, INDEX customer_id_idx (customer_id), INDEX assigned_emp_id_idx (assigned_emp_id), INDEX item_id_idx (item_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE cust_reg_items (id BIGINT AUTO_INCREMENT, customer_id INT, item_id INT, INDEX customer_id_idx (customer_id), INDEX item_id_idx (item_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE customer (customer_id INT AUTO_INCREMENT, reg_date DATETIME, person_code VARCHAR(30), name VARCHAR(100) DEFAULT '' NOT NULL, sur_name VARCHAR(100) DEFAULT '' NOT NULL, mobile VARCHAR(10) DEFAULT '' NOT NULL, zone_id INT, area_id INT, reg_expiry DATETIME, address TEXT, INDEX zone_id_idx (zone_id), INDEX area_id_idx (area_id), PRIMARY KEY(customer_id)) ENGINE = INNODB;
CREATE TABLE employee (emp_id INT AUTO_INCREMENT, reg_date DATETIME, emp_code VARCHAR(30), name VARCHAR(100) DEFAULT '' NOT NULL, sur_name VARCHAR(100) DEFAULT '' NOT NULL, mobile VARCHAR(10) DEFAULT '' NOT NULL, zone_id INT, area_id INT, role VARCHAR(30), working_under INT, skill_set TEXT, address TEXT, INDEX zone_id_idx (zone_id), INDEX area_id_idx (area_id), PRIMARY KEY(emp_id)) ENGINE = INNODB;
CREATE TABLE items (item_id INT AUTO_INCREMENT, item_name VARCHAR(200) DEFAULT '' NOT NULL, item_price FLOAT(8, 2) DEFAULT 0 NOT NULL, item_description TEXT, PRIMARY KEY(item_id)) ENGINE = INNODB;
CREATE TABLE zones (zone_id INT AUTO_INCREMENT, zone_code VARCHAR(10), zone_name VARCHAR(255) DEFAULT '' NOT NULL, description TEXT, PRIMARY KEY(zone_id)) ENGINE = INNODB;
ALTER TABLE areas ADD CONSTRAINT areas_zone_id_zones_zone_id FOREIGN KEY (zone_id) REFERENCES zones(zone_id);
ALTER TABLE complaints ADD CONSTRAINT complaints_item_id_items_item_id FOREIGN KEY (item_id) REFERENCES items(item_id);
ALTER TABLE complaints ADD CONSTRAINT complaints_customer_id_customer_customer_id FOREIGN KEY (customer_id) REFERENCES customer(customer_id);
ALTER TABLE complaints ADD CONSTRAINT complaints_assigned_emp_id_employee_emp_id FOREIGN KEY (assigned_emp_id) REFERENCES employee(emp_id);
ALTER TABLE cust_reg_items ADD CONSTRAINT cust_reg_items_item_id_items_item_id FOREIGN KEY (item_id) REFERENCES items(item_id);
ALTER TABLE cust_reg_items ADD CONSTRAINT cust_reg_items_customer_id_customer_customer_id FOREIGN KEY (customer_id) REFERENCES customer(customer_id);
ALTER TABLE customer ADD CONSTRAINT customer_zone_id_zones_zone_id FOREIGN KEY (zone_id) REFERENCES zones(zone_id);
ALTER TABLE customer ADD CONSTRAINT customer_area_id_areas_area_id FOREIGN KEY (area_id) REFERENCES areas(area_id);
ALTER TABLE employee ADD CONSTRAINT employee_zone_id_zones_zone_id FOREIGN KEY (zone_id) REFERENCES zones(zone_id);
ALTER TABLE employee ADD CONSTRAINT employee_area_id_areas_area_id FOREIGN KEY (area_id) REFERENCES areas(area_id);
