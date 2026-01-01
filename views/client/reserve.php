<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reserve Vehicle | MaBagnole</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-50 min-h-screen text-gray-800 font-inter">

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

    <main class="max-w-4xl mx-auto mt-10 px-4">
        <h1 class="text-4xl font-bold text-center mb-10 text-gray-800">Reserve Tesla Model S</h1>

        <div class="bg-white shadow-md rounded-2xl p-8 border-l-4 border-indigo-500 hover:shadow-xl transition">
            <form action="#" method="POST" class="space-y-6">

                <div>
                    <label for="pickup_location" class="block font-semibold mb-2">Pickup Location</label>
                    <input type="text" id="pickup_location" name="pickup_location" placeholder="Enter city or address"
                        class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="pickup_date" class="block font-semibold mb-2">Pickup Date</label>
                        <input type="date" id="pickup_date" name="pickup_date"
                            class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                    </div>
                    <div>
                        <label for="dropoff_date" class="block font-semibold mb-2">Dropoff Date</label>
                        <input type="date" id="dropoff_date" name="dropoff_date"
                            class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                    </div>
                </div>

                <div>
                    <label for="vehicle_options" class="block font-semibold mb-2">Vehicle Options</label>
                    <select id="vehicle_options" name="vehicle_options"
                        class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                        <option value="standard">Standard Tesla Model S</option>
                        <option value="premium">Premium Tesla Model S</option>
                        <option value="performance">Performance Tesla Model S</option>
                    </select>
                </div>

                <button type="submit"
                    class="w-full p-3 rounded-xl bg-indigo-500 hover:bg-indigo-600 font-semibold text-white shadow-lg transition">
                    Reserve Now
                </button>

            </form>
        </div>
    </main>

    <footer class="mt-16 text-center text-gray-500 py-6 text-sm">
        © 2025 MaBagnole — All rights reserved
    </footer>

</body>

</html>