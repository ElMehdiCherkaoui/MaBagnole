<?php 
require_once __DIR__ . '/../../autoload.php';
session_start();
$user = (new User)->listUserLogged($_SESSION['userEmailLogin']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reserve Vehicle | MaBagnole</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-50 min-h-screen text-gray-800">

    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600 flex items-center">
                <i class="fas fa-car mr-2"></i> MaBagnole
            </h1>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-4 items-center">
                <div class="text-gray-700 font-medium">Welcome, <?= $user->userName;  ?></div>
                <a href="dashboard.php"
                    class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">Dashboard</a>
                <a href="../logout.php"
                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">Logout</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t">
            <div class="px-6 py-4 space-y-2">
                <div class="text-gray-700 font-medium">Welcome,  <?= $user->userName;  ?></div>
                <a href="dashboard.php"
                    class="block bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">Dashboard</a>
                <a href="../logout.php"
                    class="block bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">Logout</a>
            </div>
        </div>
    </nav>

    <script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }
    </script>

    <main class="max-w-4xl mx-auto mt-10 px-4">
        <div class="mb-6 flex items-center justify-between">
            <h1 class="text-4xl font-bold text-gray-800">Reserve Tesla Model S</h1>
            <a href="vehicle_details.php"
                class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition flex items-center">
                <i class="fas fa-arrow-left mr-2"></i> Back to Details
            </a>
        </div>

        <div class="bg-white shadow-lg rounded-2xl p-8 border-l-4 border-blue-500 hover:shadow-xl transition">
            <form action="#" method="POST" class="space-y-6">

                <div>
                    <label for="pickup_location" class="block font-semibold mb-2 text-gray-700 flex items-center">
                        <i class="fas fa-map-marker-alt mr-2 text-blue-500"></i> Pickup Location
                    </label>
                    <input type="text" id="pickup_location" name="pickup_location" placeholder="Enter city or address"
                        class="w-full pl-4 pr-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none focus:border-transparent">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="pickup_date" class="block font-semibold mb-2 text-gray-700 flex items-center">
                            <i class="fas fa-calendar-alt mr-2 text-blue-500"></i> Pickup Date
                        </label>
                        <input type="date" id="pickup_date" name="pickup_date"
                            class="w-full pl-4 pr-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none focus:border-transparent">
                    </div>
                    <div>
                        <label for="dropoff_date" class="block font-semibold mb-2 text-gray-700 flex items-center">
                            <i class="fas fa-calendar-check mr-2 text-blue-500"></i> Dropoff Date
                        </label>
                        <input type="date" id="dropoff_date" name="dropoff_date"
                            class="w-full pl-4 pr-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none focus:border-transparent">
                    </div>
                </div>

                <div>
                    <label for="vehicle_options" class="block font-semibold mb-2 text-gray-700 flex items-center">
                        <i class="fas fa-cogs mr-2 text-blue-500"></i> Vehicle Options
                    </label>
                    <select id="vehicle_options" name="vehicle_options"
                        class="w-full pl-4 pr-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none focus:border-transparent">
                        <option value="standard">Standard Tesla Model S</option>
                        <option value="premium">Premium Tesla Model S</option>
                        <option value="performance">Performance Tesla Model S</option>
                    </select>
                </div>

                <button type="submit"
                    class="w-full py-3 rounded-xl bg-blue-600 hover:bg-blue-700 font-semibold text-white shadow-lg transition flex items-center justify-center">
                    <i class="fas fa-calendar-check mr-2"></i> Reserve Now
                </button>

            </form>
        </div>
    </main>

    <footer class="bg-white border-t shadow-inner mt-16">
        <div class="max-w-7xl mx-auto px-6 py-4 text-center text-gray-500 flex items-center justify-center">
            <i class="fas fa-copyright mr-2"></i> 2025 MaBagnole — All rights reserved.
        </div>
    </footer>

</body>

</html>