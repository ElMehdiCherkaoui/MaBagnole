<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Vehicles | MaBagnole</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 min-h-screen">

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
        <h1 class="text-3xl font-bold mb-8 text-gray-800 text-center">Browse Vehicles</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <div
                class="bg-white shadow-md rounded-xl p-4 hover:shadow-xl transition border-l-4 border-indigo-500 flex flex-col items-center">
                <img src="https://via.placeholder.com/250x150?text=Tesla+Model+S" alt="Tesla Model S"
                    class="rounded-lg mb-4">
                <h2 class="text-xl font-semibold text-gray-800 mb-1">Tesla Model S</h2>
                <p class="text-gray-600 mb-1">Car</p>
                <p class="text-gray-600 mb-3">$120/day</p>
                <a href="vehicle_details.php"
                    class="px-3 py-1 rounded bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-semibold transition">
                    View Details
                </a>
            </div>

            <div
                class="bg-white shadow-md rounded-xl p-4 hover:shadow-xl transition border-l-4 border-yellow-500 flex flex-col items-center">
                <img src="https://via.placeholder.com/250x150?text=Yamaha+R1" alt="Yamaha R1" class="rounded-lg mb-4">
                <h2 class="text-xl font-semibold text-gray-800 mb-1">Yamaha R1</h2>
                <p class="text-gray-600 mb-1">Motorbike</p>
                <p class="text-gray-600 mb-3">$80/day</p>
                <a href="vehicle_details.php"
                    class="px-3 py-1 rounded bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-semibold transition">
                    View Details
                </a>
            </div>

            <div
                class="bg-white shadow-md rounded-xl p-4 hover:shadow-xl transition border-l-4 border-green-500 flex flex-col items-center">
                <img src="https://via.placeholder.com/250x150?text=Range+Rover" alt="Range Rover"
                    class="rounded-lg mb-4">
                <h2 class="text-xl font-semibold text-gray-800 mb-1">Range Rover</h2>
                <p class="text-gray-600 mb-1">Car</p>
                <p class="text-gray-600 mb-3">$150/day</p>
                <a href="vehicle_details.php"
                    class="px-3 py-1 rounded bg-green-500 hover:bg-green-600 text-white text-sm font-semibold transition">
                    View Details
                </a>
            </div>

            <div
                class="bg-white shadow-md rounded-xl p-4 hover:shadow-xl transition border-l-4 border-red-500 flex flex-col items-center">
                <img src="https://via.placeholder.com/250x150?text=BMW+X5" alt="BMW X5" class="rounded-lg mb-4">
                <h2 class="text-xl font-semibold text-gray-800 mb-1">BMW X5</h2>
                <p class="text-gray-600 mb-1">Car</p>
                <p class="text-gray-600 mb-3">$130/day</p>
                <a href="vehicle_details.php"
                    class="px-3 py-1 rounded bg-red-500 hover:bg-red-600 text-white text-sm font-semibold transition">
                    View Details
                </a>
            </div>

        </div>
    </div>

    <footer class="mt-10 text-center text-gray-500 py-4 text-sm">
        © 2025 MaBagnole — All rights reserved
    </footer>

</body>

</html>