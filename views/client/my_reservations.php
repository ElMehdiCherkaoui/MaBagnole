<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Reservations</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

    <nav class="bg-indigo-600 shadow-md px-6 py-4 flex justify-between items-center">
        <div class="text-xl font-bold text-white">MaBagnole</div>
        <div class="flex gap-4 items-center">
            <div class="text-white font-medium">Welcome, John Doe</div>
            <a href="dashboard.php"
                class="bg-white text-indigo-600 px-3 py-1 rounded hover:bg-gray-100 transition">Dashboard</a>
            <a href="#" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">Logout</a>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto mt-10 px-4">
        <h1 class="text-3xl font-bold mb-8 text-gray-800">My Reservations</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition border-l-4 border-indigo-500">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Toyota Corolla</h2>
                <p class="text-gray-600 mb-1"><strong>Pickup:</strong> Casablanca – 2026-01-10</p>
                <p class="text-gray-600 mb-1"><strong>Return:</strong> Rabat – 2026-01-15</p>
                <p class="text-green-600 font-semibold mb-3">Status: Confirmed</p>
                <button
                    class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition w-full">Cancel</button>
            </div>

            <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition border-l-4 border-yellow-500">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Honda Civic</h2>
                <p class="text-gray-600 mb-1"><strong>Pickup:</strong> Marrakech – 2026-02-01</p>
                <p class="text-gray-600 mb-1"><strong>Return:</strong> Casablanca – 2026-02-05</p>
                <p class="text-yellow-500 font-semibold mb-3">Status: Pending</p>
                <button
                    class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition w-full">Cancel</button>
            </div>

            <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition border-l-4 border-gray-400">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Ford Focus</h2>
                <p class="text-gray-600 mb-1"><strong>Pickup:</strong> Rabat – 2026-03-05</p>
                <p class="text-gray-600 mb-1"><strong>Return:</strong> Marrakech – 2026-03-10</p>
                <p class="text-gray-500 font-semibold mb-3">Status: Cancelled</p>
                <button
                    class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition w-full">Cancel</button>
            </div>

        </div>
    </div>

</body>

</html>