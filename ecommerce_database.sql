CREATE DATABASE jewelry_store;
USE jewelry_store;

-- Customers table
CREATE TABLE customers (
    customer_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100),
    phone VARCHAR(20),
    address VARCHAR(200)
);

-- Products table
CREATE TABLE products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(100),
    description TEXT,
    price DECIMAL(10,2),
    stock INT
);

-- Orders table
CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    product_id INT,
    quantity INT,
    order_date DATE,
    FOREIGN KEY (customer_id) REFERENCES customers(customer_id),
    FOREIGN KEY (product_id) REFERENCES products(product_id)
);

-- Shipping table
CREATE TABLE shipping (
    shipping_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    shipping_address VARCHAR(200),
    shipping_method VARCHAR(50),
    shipping_date DATE,
    FOREIGN KEY (order_id) REFERENCES orders(order_id)
);

-- Authentication table
CREATE TABLE authentication (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    username VARCHAR(50),
    password VARCHAR(100),
    FOREIGN KEY (customer_id) REFERENCES customers(customer_id)
);

-- Insert customers
INSERT INTO customers (first_name, last_name, email, phone, address) VALUES
('Emma','Stone','emma@email.com','555-1111','123 Main St'),
('Liam','Johnson','liam@email.com','555-2222','456 Oak St'),
('Olivia','Brown','olivia@email.com','555-3333','789 Pine St'),
('Noah','Davis','noah@email.com','555-4444','321 Maple St'),
('Ava','Wilson','ava@email.com','555-5555','654 Cedar St');

-- Insert products
INSERT INTO products (product_name, description, price, stock) VALUES
('Gold Necklace','18k gold chain necklace',199.99,10),
('Diamond Ring','1 carat diamond ring',899.99,5),
('Silver Bracelet','Sterling silver bracelet',79.99,15),
('Pearl Earrings','Freshwater pearl earrings',129.99,8),
('Ruby Pendant','Ruby gemstone pendant',249.99,6);

-- Insert orders
INSERT INTO orders (customer_id, product_id, quantity, order_date) VALUES
(1,2,1,'2026-03-01'),
(2,3,2,'2026-03-02'),
(3,1,1,'2026-03-03'),
(4,5,1,'2026-03-04'),
(5,4,1,'2026-03-05');

-- Insert shipping
INSERT INTO shipping (order_id, shipping_address, shipping_method, shipping_date) VALUES
(1,'123 Main St','UPS','2026-03-02'),
(2,'456 Oak St','FedEx','2026-03-03'),
(3,'789 Pine St','USPS','2026-03-04'),
(4,'321 Maple St','UPS','2026-03-05'),
(5,'654 Cedar St','FedEx','2026-03-06');

-- Insert authentication users
INSERT INTO authentication (customer_id, username, password) VALUES
(1,'emma123','password1'),
(2,'liam123','password2'),
(3,'olivia123','password3'),
(4,'noah123','password4'),
(5,'ava123','password5');
