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

INSERT INTO
    Category (
        categoryName,
        categoryDescription
    )
VALUES (
        'Sedan Cars',
        'Comfortable cars suitable for daily use and families'
    ),
    (
        'SUV Cars',
        'Sport Utility Vehicles for city and off-road driving'
    ),
    (
        'Hatchback Cars',
        'Compact cars ideal for urban environments'
    ),
    (
        'Sports Cars',
        'High-performance cars designed for speed and style'
    ),
    (
        'Luxury Cars',
        'Premium cars with high-end comfort and features'
    ),
    (
        'Electric Cars',
        'Cars powered fully by electric energy'
    ),
    (
        'Hybrid Cars',
        'Cars using both fuel and electric power'
    ),
    (
        'Convertible Cars',
        'Cars with removable or folding roofs'
    ),
    (
        'Coupe Cars',
        'Two-door cars with a sporty design'
    ),
    (
        'Pickup Cars',
        'Cars designed for transport and utility purposes'
    );

INSERT INTO
    Vehicle (
        image,
        vehicleModel,
        vehicleDescription,
        vehiclePricePerDay,
        vehicleAvailability,
        vehicleIdCategory
    )
VALUES (
        'sedan_toyota_camry.jpg',
        'Toyota Camry',
        'Reliable and comfortable sedan',
        45.00,
        1,
        1
    ),
    (
        'sedan_honda_accord.jpg',
        'Honda Accord',
        'Spacious sedan with smooth driving',
        48.00,
        1,
        1
    ),
    (
        'suv_toyota_rav4.jpg',
        'Toyota RAV4',
        'Compact SUV suitable for city and travel',
        65.00,
        1,
        2
    ),
    (
        'suv_bmw_x5.jpg',
        'BMW X5',
        'Luxury SUV with powerful performance',
        120.00,
        1,
        2
    ),
    (
        'hatchback_vw_golf.jpg',
        'Volkswagen Golf',
        'Compact hatchback for urban driving',
        40.00,
        1,
        3
    ),
    (
        'hatchback_ford_fiesta.jpg',
        'Ford Fiesta',
        'Economic and easy-to-drive hatchback',
        35.00,
        1,
        3
    ),
    (
        'sports_porsche_911.jpg',
        'Porsche 911',
        'High-performance sports car',
        250.00,
        1,
        4
    ),
    (
        'sports_ford_mustang.jpg',
        'Ford Mustang',
        'Iconic American muscle car',
        180.00,
        0,
        4
    ),
    (
        'luxury_mercedes_sclass.jpg',
        'Mercedes S-Class',
        'Top luxury sedan with premium comfort',
        220.00,
        1,
        5
    ),
    (
        'luxury_bmw_7series.jpg',
        'BMW 7 Series',
        'Executive luxury car',
        200.00,
        1,
        5
    ),
    (
        'electric_tesla_model3.jpg',
        'Tesla Model 3',
        'Fully electric car with autopilot features',
        90.00,
        1,
        6
    ),
    (
        'electric_nissan_leaf.jpg',
        'Nissan Leaf',
        'Affordable electric vehicle',
        70.00,
        1,
        6
    ),
    (
        'hybrid_toyota_prius.jpg',
        'Toyota Prius',
        'Fuel-efficient hybrid car',
        60.00,
        1,
        7
    ),
    (
        'hybrid_honda_insight.jpg',
        'Honda Insight',
        'Modern hybrid sedan',
        62.00,
        1,
        7
    ),
    (
        'convertible_mini.jpg',
        'Mini Cooper Convertible',
        'Stylish convertible for city rides',
        85.00,
        1,
        8
    ),
    (
        'convertible_bmw_z4.jpg',
        'BMW Z4',
        'Sporty luxury convertible',
        150.00,
        0,
        8
    ),
    (
        'coupe_audi_a5.jpg',
        'Audi A5 Coupe',
        'Elegant coupe with sporty look',
        110.00,
        1,
        9
    ),
    (
        'coupe_mercedes_c.jpg',
        'Mercedes C Coupe',
        'Premium compact coupe',
        115.00,
        1,
        9
    ),
    (
        'pickup_ford_ranger.jpg',
        'Ford Ranger',
        'Strong pickup for transport and work',
        75.00,
        1,
        10
    ),
    (
        'pickup_toyota_hilux.jpg',
        'Toyota Hilux',
        'Reliable pickup for heavy usage',
        80.00,
        1,
        10
    );

INSERT INTO
    Users (
        userName,
        userEmail,
        userRole,
        password_hash,
        userStatus
    )
VALUES (
        'John Doe',
        'john.doe@gmail.com',
        'client',
        '$2y$10$N9qo8uLOickgx2ZMRZo5i.UvL9p5VxC1zQG6H1m5JpLz3rO6R8F1K',
        'active'
    ),
    (
        'Jane Smith',
        'jane.smith@gmail.com',
        'client',
        '$2y$10$N9qo8uLOickgx2ZMRZo5i.UvL9p5VxC1zQG6H1m5JpLz3rO6R8F1K',
        'active'
    ),
    (
        'Mark Lee',
        'mark.lee@gmail.com',
        'client',
        '$2y$10$N9qo8uLOickgx2ZMRZo5i.UvL9p5VxC1zQG6H1m5JpLz3rO6R8F1K',
        'inactive'
    );

--password : Test@123

INSERT INTO
    Reservation (
        reservationStartDate,
        reservationEndDate,
        reservationPickUpLocation,
        reservationStatus,
        reservationTotalAmount,
        reservationIdUser,
        reservationIdVehicle
    )
VALUES (
        '2026-01-10',
        '2026-01-15',
        'Casablanca',
        'pending',
        3500.00,
        1,
        1
    ),
    (
        '2026-02-01',
        '2026-02-05',
        'Marrakech',
        'confirmed',
        4200.00,
        2,
        2
    ),
    (
        '2026-03-05',
        '2026-03-10',
        'Rabat',
        'cancelled',
        2800.00,
        3,
        3
    );