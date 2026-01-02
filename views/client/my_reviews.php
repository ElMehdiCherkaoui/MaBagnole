<?php 
require_once __DIR__ . '/../../autoload.php';
session_start();
$user = (new User)->listUserLogged($_SESSION['userEmailLogin']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Reviews | MaBagnole</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>

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
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 flex items-center">
                <i class="fas fa-star mr-3 text-yellow-500"></i> My Reviews
            </h1>
            <a href="create_review.php"
                class="px-4 py-2 rounded-xl bg-blue-500 hover:bg-blue-600 text-white font-semibold transition flex items-center">
                <i class="fas fa-plus mr-2"></i> Create Review
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition border-l-4 border-blue-500">
                <div class="flex items-center mb-4">
                    <i class="fas fa-car text-blue-600 text-2xl mr-3"></i>
                    <h2 class="text-xl font-semibold text-gray-800">Tesla Model S</h2>
                </div>
                <div class="flex items-center mb-2">
                    <i class="fas fa-star text-yellow-400 mr-1"></i>
                    <span class="text-yellow-400 font-semibold">★★★★☆ (4/5)</span>
                </div>
                <p class="text-gray-600 mb-4">Amazing car! Smooth ride and excellent autopilot features.</p>
                <div class="flex gap-2">
                    <button
                        class="w-1/2 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded transition flex items-center justify-center">
                        <i class="fas fa-edit mr-1"></i> Edit
                    </button>
                    <button
                        class="w-1/2 bg-red-500 hover:bg-red-600 text-white font-semibold py-2 rounded transition flex items-center justify-center">
                        <i class="fas fa-trash mr-1"></i> Delete
                    </button>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition border-l-4 border-yellow-500">
                <div class="flex items-center mb-4">
                    <i class="fas fa-motorcycle text-blue-600 text-2xl mr-3"></i>
                    <h2 class="text-xl font-semibold text-gray-800">Yamaha R1</h2>
                </div>
                <div class="flex items-center mb-2">
                    <i class="fas fa-star text-yellow-400 mr-1"></i>
                    <span class="text-yellow-400 font-semibold">★★★☆☆ (3/5)</span>
                </div>
                <p class="text-gray-600 mb-4">Good performance, but a bit hard for city traffic.</p>
                <div class="flex gap-2">
                    <button
                        class="w-1/2 bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 rounded transition flex items-center justify-center">
                        <i class="fas fa-edit mr-1"></i> Edit
                    </button>
                    <button
                        class="w-1/2 bg-red-500 hover:bg-red-600 text-white font-semibold py-2 rounded transition flex items-center justify-center">
                        <i class="fas fa-trash mr-1"></i> Delete
                    </button>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition border-l-4 border-green-500">
                <div class="flex items-center mb-4">
                    <i class="fas fa-car text-blue-600 text-2xl mr-3"></i>
                    <h2 class="text-xl font-semibold text-gray-800">Range Rover</h2>
                </div>
                <div class="flex items-center mb-2">
                    <i class="fas fa-star text-yellow-400 mr-1"></i>
                    <span class="text-yellow-400 font-semibold">★★★★★ (5/5)</span>
                </div>
                <p class="text-gray-600 mb-4">Luxury SUV, extremely comfortable for long drives.</p>
                <div class="flex gap-2">
                    <button
                        class="w-1/2 bg-green-500 hover:bg-green-600 text-white font-semibold py-2 rounded transition flex items-center justify-center">
                        <i class="fas fa-edit mr-1"></i> Edit
                    </button>
                    <button
                        class="w-1/2 bg-red-500 hover:bg-red-600 text-white font-semibold py-2 rounded transition flex items-center justify-center">
                        <i class="fas fa-trash mr-1"></i> Delete
                    </button>
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