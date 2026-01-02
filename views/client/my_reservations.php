<?php 
require_once __DIR__ . '/../../autoload.php';
session_start();
$user = (new User)->listUserLogged($_SESSION['userEmailLogin']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Reservations</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-50">

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

    <div class="max-w-6xl mx-auto mt-10 px-4">
        <h1 class="text-3xl font-bold mb-8 text-gray-800">My Reservations</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition border-l-4 border-green-500">
                <div class="flex items-center mb-4">
                    <i class="fas fa-car text-blue-600 text-2xl mr-3"></i>
                    <h2 class="text-xl font-semibold text-gray-800">Toyota Corolla</h2>
                </div>
                <div class="space-y-2 mb-4">
                    <p class="text-gray-600 flex items-center">
                        <i class="fas fa-map-marker-alt text-gray-500 mr-2"></i>
                        <strong>Pickup:</strong> Casablanca – 2026-01-10
                    </p>
                    <p class="text-gray-600 flex items-center">
                        <i class="fas fa-map-marker-alt text-gray-500 mr-2"></i>
                        <strong>Return:</strong> Rabat – 2026-01-15
                    </p>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <span
                        class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                        <i class="fas fa-check-circle mr-1"></i> Confirmed
                    </span>
                </div>
                <button
                    class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition w-full flex items-center justify-center">
                    <i class="fas fa-times mr-2"></i> Cancel Reservation
                </button>
            </div>

            <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition border-l-4 border-yellow-500">
                <div class="flex items-center mb-4">
                    <i class="fas fa-car text-blue-600 text-2xl mr-3"></i>
                    <h2 class="text-xl font-semibold text-gray-800">Honda Civic</h2>
                </div>
                <div class="space-y-2 mb-4">
                    <p class="text-gray-600 flex items-center">
                        <i class="fas fa-map-marker-alt text-gray-500 mr-2"></i>
                        <strong>Pickup:</strong> Marrakech – 2026-02-01
                    </p>
                    <p class="text-gray-600 flex items-center">
                        <i class="fas fa-map-marker-alt text-gray-500 mr-2"></i>
                        <strong>Return:</strong> Casablanca – 2026-02-05
                    </p>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <span
                        class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800">
                        <i class="fas fa-clock mr-1"></i> Pending
                    </span>
                </div>
                <button
                    class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition w-full flex items-center justify-center">
                    <i class="fas fa-times mr-2"></i> Cancel Reservation
                </button>
            </div>

            <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition border-l-4 border-gray-400">
                <div class="flex items-center mb-4">
                    <i class="fas fa-car text-blue-600 text-2xl mr-3"></i>
                    <h2 class="text-xl font-semibold text-gray-800">Ford Focus</h2>
                </div>
                <div class="space-y-2 mb-4">
                    <p class="text-gray-600 flex items-center">
                        <i class="fas fa-map-marker-alt text-gray-500 mr-2"></i>
                        <strong>Pickup:</strong> Rabat – 2026-03-05
                    </p>
                    <p class="text-gray-600 flex items-center">
                        <i class="fas fa-map-marker-alt text-gray-500 mr-2"></i>
                        <strong>Return:</strong> Marrakech – 2026-03-10
                    </p>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <span
                        class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                        <i class="fas fa-ban mr-1"></i> Cancelled
                    </span>
                </div>
                <button
                    class="bg-gray-400 text-white px-4 py-2 rounded-lg cursor-not-allowed w-full flex items-center justify-center"
                    disabled>
                    <i class="fas fa-times mr-2"></i> Cancel Reservation
                </button>
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