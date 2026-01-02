<?php 
require_once __DIR__ . '/../../autoload.php';
session_start();
$user = (new User)->listUserLogged($_SESSION['userEmailLogin']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Vehicle Details | MaBagnole</title>
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
                <div class="text-gray-700 font-medium">Welcome, <?= $user->userName;  ?></div>
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

    <main class="max-w-6xl mx-auto mt-10 px-4">
        <div class="mb-6 flex items-center justify-between">
            <h1 class="text-4xl font-bold text-gray-800">Tesla Model S</h1>
            <a href="vehicles.php"
                class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition flex items-center">
                <i class="fas fa-arrow-left mr-2"></i> Back to Vehicles
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <div
                class="bg-white shadow-lg rounded-2xl p-8 border-l-4 border-blue-500 flex items-center justify-center hover:shadow-xl transition">
                <img src="https://images.unsplash.com/photo-1549924231-f129b911e442" alt="Tesla Model S"
                    class="rounded-xl w-full max-w-md">
            </div>

            <div
                class="bg-white shadow-lg rounded-2xl p-8 border-l-4 border-green-500 hover:shadow-xl transition space-y-6">
                <div class="flex items-center">
                    <i class="fas fa-tag text-gray-500 mr-3"></i>
                    <div>
                        <span class="font-semibold text-gray-500">Category:</span>
                        <span class="font-bold text-gray-800 ml-2">Car</span>
                    </div>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-dollar-sign text-gray-500 mr-3"></i>
                    <div>
                        <span class="font-semibold text-gray-500">Price per Day:</span>
                        <span class="font-bold text-gray-800 ml-2">$120</span>
                    </div>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-3"></i>
                    <div>
                        <span class="font-semibold text-gray-500">Availability:</span>
                        <span class="font-bold text-green-600 ml-2">Available</span>
                    </div>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-car text-gray-500 mr-3"></i>
                    <div>
                        <span class="font-semibold text-gray-500">Model:</span>
                        <span class="font-bold text-gray-800 ml-2">Tesla Model S 2025</span>
                    </div>
                </div>
                <div>
                    <div class="flex items-center mb-2">
                        <i class="fas fa-info-circle text-gray-500 mr-3"></i>
                        <span class="font-semibold text-gray-500">Description:</span>
                    </div>
                    <p class="text-gray-700 ml-8">Luxury electric sedan with autopilot, long range battery, and premium
                        interior. Perfect for city driving or long trips.</p>
                </div>

                <div class="pt-4">
                    <a href="reserve.php"
                        class="inline-block w-full text-center px-6 py-3 bg-blue-600 hover:bg-blue-700 rounded-xl font-semibold shadow-lg text-white transition">
                        <i class="fas fa-calendar-check mr-2"></i> Reserve Now
                    </a>
                </div>
            </div>

        </div>
    </main>

    <footer class="bg-white border-t shadow-inner mt-16">
        <div class="max-w-7xl mx-auto px-6 py-4 text-center text-gray-500 flex items-center justify-center">
            <i class="fas fa-copyright mr-2"></i> 2025 MaBagnole — All rights reserved.
        </div>
    </footer>

</body>

</html>