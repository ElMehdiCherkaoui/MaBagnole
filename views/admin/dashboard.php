<?php
require_once __DIR__ . '/../../autoload.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | MaBagnole</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-gray-100 min-h-screen font-sans flex">

    <aside class="bg-gray-950 w-64 min-h-screen flex flex-col fixed border-r border-gray-800">
        <div class="p-6 flex items-center justify-center border-b border-gray-800">
            <span class="text-2xl font-bold text-red-500">MaBagnole Admin</span>
        </div>

        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="dashboard.php"
                class="block px-4 py-3 rounded-lg bg-red-700 text-white  font-semibold hover:bg-red-900 hover:text-white transition"
                id="dashboardLink">Dashboard</a>

            <a href="vehicles.php"
                class="block px-4 py-3 rounded-lg text-red-500 font-semibold hover:bg-red-900 hover:text-white transition"
                id="vehiclesLink">Vehicles</a>

            <a href="categories.php"
                class="block px-4 py-3 rounded-lg text-red-500 font-semibold hover:bg-red-900 hover:text-white transition"
                id="categoriesLink">Categories</a>

            <a href="reservations.php"
                class="block px-4 py-3 rounded-lg text-red-500 font-semibold hover:bg-red-900 hover:text-white transition"
                id="reservationsLink">Reservations</a>

            <a href="reviews.php"
                class="block px-4 py-3 rounded-lg text-red-500 font-semibold hover:bg-red-900 hover:text-white transition"
                id="reviewsLink">Reviews</a>

            <a href="../logout.php"
                class="block px-4 py-3 rounded-lg text-gray-400 font-semibold hover:bg-red-900 hover:text-white transition">Logout</a>
        </nav>
    </aside>

    <main class="flex-1 ml-64 p-8">
        <h1 class="text-4xl font-bold text-orange-500 mb-12">Admin Dashboard</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <div
                class="bg-gray-800 p-6 rounded-2xl border-l-4 border-orange-500 shadow hover:scale-105 transform transition">
                <h2 class="text-xl font-semibold mb-2 text-orange-400">Vehicles</h2>
                <p class="text-4xl font-bold text-gray-100 text-center">24</p>
            </div>
            <div
                class="bg-gray-800 p-6 rounded-2xl border-l-4 border-orange-500 shadow hover:scale-105 transform transition">
                <h2 class="text-xl font-semibold mb-2 text-orange-400">Reservations</h2>
                <p class="text-4xl font-bold text-gray-100 text-center">56</p>
            </div>
            <div
                class="bg-gray-800 p-6 rounded-2xl border-l-4 border-orange-500 shadow hover:scale-105 transform transition">
                <h2 class="text-xl font-semibold mb-2 text-orange-400">Reviews</h2>
                <p class="text-4xl font-bold text-gray-100 text-center">18</p>
            </div>
            <div
                class="bg-gray-800 p-6 rounded-2xl border-l-4 border-orange-500 shadow hover:scale-105 transform transition">
                <h2 class="text-xl font-semibold mb-2 text-orange-400">Categories</h2>
                <p class="text-4xl font-bold text-gray-100 text-center">6</p>
            </div>
        </div>


    </main>

</body>

</html>