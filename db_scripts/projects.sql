CREATE TABLE projects (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_employee INT,
    description VARCHAR(255),
    value DECIMAL(10,2),
    status VARCHAR(50),
    delivery_date DATE,
    FOREIGN KEY (id_employee) REFERENCES employees(id)
);