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