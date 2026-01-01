-- Active: 1765134969045@@localhost@3306@mabagnole
CREATE DATABASE MABAGNOLE;

use mabagnole;

create Table Users (
    Users_id INT AUTO_INCREMENT PRIMARY KEY,
    userName VARCHAR(100) NOT NULL,
    userEmail VARCHAR(100) NOT NULL UNIQUE,
    userRole VARCHAR(50) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    userStatus VARCHAR(20),
    userCreated DATETIME DEFAULT NOW()
);

CREATE Table Vehicle (
    Vehicle_id INT AUTO_INCREMENT PRIMARY KEY,
    image text NOT NULL,
    vehicleModel VARCHAR(100) NOT NULL,
    vehicleDescription TEXT NOT NULL,
    vehiclePricePerDay DECIMAL(6, 2) NOT NULL,
    vehicleAvailability BOOLEAN,
    vehicleIdCategory INT,
    FOREIGN KEY (vehicleIdCategory) REFERENCES Category (Category_id)
);

create table Category (
    Category_id INT AUTO_INCREMENT PRIMARY KEY,
    categoryName VARCHAR(100) NOT NULL,
    categoryDescription text NOT NULL
);

create table Reservation (
    reservation_id INT AUTO_INCREMENT PRIMARY KEY,
    reservationStartDate DATE NOT NULL,
    reservationEndDate DATE NOT NULL,
    reservationPickUpLocation VARCHAR(255) NOT NULL,
    reservationStatus VARCHAR(50) NOT NULL,
    reservationTotalAmount DECIMAL NOT NULL,
    reservationIdUser INT,
    reservationIdVehicle INT,
    FOREIGN KEY (reservationIdUser) REFERENCES Users (Users_id),
    FOREIGN KEY (reservationIdVehicle) REFERENCES Vehicle (Vehicle_id)
);

create TABLE Review (
    Review_id INT AUTO_INCREMENT PRIMARY KEY,
    reviewRate INT,
    reviewComment VARCHAR(255) NOT NULL,
    reviewDeleteTime DATETIME DEFAULT NULL,
    reviewIdUser INT,
    reviewIdVehicle INT,
    FOREIGN KEY (reviewIdUser) REFERENCES Users (Users_id),
    FOREIGN KEY (reviewIdVehicle) REFERENCES Vehicle (Vehicle_id)
);

SELECT * FROM Users;

UPDATE users set userRole = 'admin' where Users_id = 1;

INSERT INTO Category (categoryName, categoryDescription) VALUES
('Sedan Cars', 'Comfortable cars suitable for daily use and families'),
('SUV Cars', 'Sport Utility Vehicles for city and off-road driving'),
('Hatchback Cars', 'Compact cars ideal for urban environments'),
('Sports Cars', 'High-performance cars designed for speed and style'),
('Luxury Cars', 'Premium cars with high-end comfort and features'),
('Electric Cars', 'Cars powered fully by electric energy'),
('Hybrid Cars', 'Cars using both fuel and electric power'),
('Convertible Cars', 'Cars with removable or folding roofs'),
('Coupe Cars', 'Two-door cars with a sporty design'),
('Pickup Cars', 'Cars designed for transport and utility purposes');
