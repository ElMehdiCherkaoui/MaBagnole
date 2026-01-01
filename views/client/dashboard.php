<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard | MaBagnole</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

    <nav class="bg-indigo-600 shadow-md px-6 py-4 flex justify-between items-center">
        <div class="text-xl font-bold text-white">MaBagnole</div>
        <div class="flex gap-4 items-center">
            <div class="text-white font-medium">Welcome, John Doe</div>
            <a href="dashboard.php"
                class="bg-white text-indigo-600 px-3 py-1 rounded hover:bg-gray-100 transition">Dashboard</a>
            <a href="../logout.php"
                class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">Logout</a>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto mt-10 px-4">
        <h1 class="text-3xl font-bold mb-8 text-gray-800">Your Dashboard</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <a href="vehicles.php"
                class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition border-l-4 border-indigo-500">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Browse Vehicles</h2>
                <p class="text-gray-600 mb-3">Explore all available cars & bikes</p>
            </a>

            <a href="my_reservations.php"
                class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition border-l-4 border-green-500">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">My Reservations</h2>
                <p class="text-gray-600 mb-3">Manage your bookings easily</p>
            </a>

            <a href="my_reviews.php"
                class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition border-l-4 border-yellow-500">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">My Reviews</h2>
                <p class="text-gray-600 mb-3">Edit or remove your feedback</p>
            </a>

            <a href="reserve.php"
                class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition border-l-4 border-red-500">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Reserve</h2>
                <p class="text-gray-600 mb-3">Reserve your Car</p>

            </a>
        </div>
    </div>

    <footer class="mt-10 text-center text-gray-500 py-4">
        © 2025 MaBagnole — Crafted with precision
    </footer>

</body>

</html>