<?php 
require_once __DIR__ . '/../../autoload.php';
session_start();
$user = (new User)->listUserLogged($_SESSION['userEmailLogin']);

$vehicles = (new Vehicle)->getAllVehicles();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Vehicles | MaBagnole</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-50 min-h-screen">

    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600 flex items-center">
                <i class="fas fa-car mr-2"></i> MaBagnole
            </h1>

            <div class="hidden md:flex space-x-4 items-center">
                <div class="text-gray-700 font-medium">Welcome, <?= $user->userName;  ?></div>
                <a href="dashboard.php"
                    class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">Dashboard</a>
                <a href="../logout.php"
                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">Logout</a>
            </div>


        </div>



    </nav>

    <div class="max-w-6xl mx-auto mt-10 px-4">
        <div class="mb-6 flex items-center justify-between">
            <h1 class="text-3xl font-bold text-gray-800">Browse Vehicles</h1>
            <a href="dashboard.php"
                class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition flex items-center">
                <i class="fas fa-arrow-left mr-2"></i> Back to Dashboard
            </a>
        </div>


        <div class="flex flex-col md:flex-row gap-4 mb-8">
            <div class="relative w-full md:w-1/2">
                <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                <input id="searchInput" type="text" placeholder="Search by model or features..."
                    class="w-full pl-10 pr-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="relative w-full md:w-1/4">
                <i class="fas fa-filter absolute left-3 top-3 text-gray-400"></i>
                <select id="categoryFilter"
                    class="w-full pl-10 pr-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="all">All Categories</option>
                    <option value="car">Car</option>
                    <option value="motorbike">Motorbike</option>
                </select>
            </div>
            <button id="filterButton" type="button"
                class="bg-blue-600 hover:bg-blue-700 text-white w-full md:w-1/4 px-4 py-2 rounded-lg transition flex items-center justify-center">
                <i class="fas fa-search mr-2"></i> Filter
            </button>
        </div>

        <div id="vehicleGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($vehicles as $vehicle): ?>

            <div class="vehicle-card bg-white shadow-md rounded-xl overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1"
                data-name="tesla model s" data-features="electric automatic" data-category="car">
                <img src="<?= $vehicle->image ?>" alt="<?= $vehicle->image ?>" class="h-48 w-full object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2"><?= $vehicle->vehicleModel ?></h2>
                    <p class="text-gray-600 mb-2 flex items-center">
                        <i class="fas fa-car mr-2 text-blue-500"></i> Car · <?= $vehicle->categoryName ?>
                    </p>

                    <p class="text-gray-800 font-bold text-lg mb-4"><?= $vehicle->vehiclePricePerDay ?>/day</p>
                    <a href="vehicle_details.php?id=<?= $vehicle->Vehicle_id ?>"
                        class="inline-block w-full text-center px-4 py-2 rounded-lg bg-red-500 hover:bg-red-600 text-white font-medium transition">
                        <i class="fas fa-eye mr-2"></i> View Details
                    </a>
                </div>
            </div>
            <?php endforeach ?>
            <div class="vehicle-card bg-white shadow-md rounded-xl overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1"
                data-name="yamaha r1" data-features="sport bike" data-category="motorbike">
                <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c8" alt="Yamaha R1"
                    class="h-48 w-full object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">Yamaha R1</h2>
                    <p class="text-gray-600 mb-2 flex items-center">
                        <i class="fas fa-motorcycle mr-2 text-yellow-500"></i> Motorbike · Sport
                    </p>
                    <div class="flex items-center mb-2">
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <span class="text-sm text-gray-500">(5.0)</span>
                    </div>
                    <p class="text-gray-800 font-bold text-lg mb-4">$80/day</p>
                    <a href="vehicle_details.php"
                        class="inline-block w-full text-center px-4 py-2 rounded-lg bg-yellow-500 hover:bg-yellow-600 text-white font-medium transition">
                        <i class="fas fa-eye mr-2"></i> View Details
                    </a>
                </div>
            </div>

            <div class="vehicle-card bg-white shadow-md rounded-xl overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1"
                data-name="range rover" data-features="suv luxury" data-category="car">
                <img src="https://images.unsplash.com/photo-1617814072231-8c8db9d70f9c" alt="Range Rover"
                    class="h-48 w-full object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">Range Rover</h2>
                    <p class="text-gray-600 mb-2 flex items-center">
                        <i class="fas fa-car mr-2 text-green-500"></i> Car · SUV
                    </p>
                    <div class="flex items-center mb-2">
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <i class="fas fa-star-half-alt text-yellow-400 mr-1"></i>
                        <span class="text-sm text-gray-500">(4.7)</span>
                    </div>
                    <p class="text-gray-800 font-bold text-lg mb-4">$150/day</p>
                    <a href="vehicle_details.php"
                        class="inline-block w-full text-center px-4 py-2 rounded-lg bg-green-500 hover:bg-green-600 text-white font-medium transition">
                        <i class="fas fa-eye mr-2"></i> View Details
                    </a>
                </div>
            </div>

            <div class="vehicle-card bg-white shadow-md rounded-xl overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1"
                data-name="bmw x5" data-features="suv automatic" data-category="car">
                <img src="https://images.unsplash.com/photo-1590362891991-f776e747a588" alt="BMW X5"
                    class="h-48 w-full object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">BMW X5</h2>
                    <p class="text-gray-600 mb-2 flex items-center">
                        <i class="fas fa-car mr-2 text-red-500"></i> Car · SUV
                    </p>
                    <div class="flex items-center mb-2">
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <span class="text-sm text-gray-500">(4.8)</span>
                    </div>
                    <p class="text-gray-800 font-bold text-lg mb-4">$130/day</p>
                    <a href="vehicle_details.php"
                        class="inline-block w-full text-center px-4 py-2 rounded-lg bg-red-500 hover:bg-red-600 text-white font-medium transition">
                        <i class="fas fa-eye mr-2"></i> View Details
                    </a>
                </div>
            </div>

        </div>
    </div>

    <footer class="bg-white border-t shadow-inner mt-16">
        <div class="max-w-7xl mx-auto px-6 py-4 text-center text-gray-500 flex items-center justify-center">
            <i class="fas fa-copyright mr-2"></i> 2025 MaBagnole — All rights reserved.
        </div>
    </footer>

</body>

</html>