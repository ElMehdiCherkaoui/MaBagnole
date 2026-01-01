<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Vehicle Details | MaBagnole</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-50 min-h-screen font-inter text-gray-800">

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

    <main class="max-w-5xl mx-auto mt-10 px-4">
        <h1 class="text-4xl font-bold text-center mb-10 text-gray-800">Tesla Model S</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <div
                class="bg-white shadow-md rounded-2xl p-8 border-l-4 border-indigo-500 flex items-center justify-center hover:shadow-xl transition">
                <img src="https://via.placeholder.com/250x150?text=Tesla+Model+S" alt="Tesla Model S"
                    class="rounded-xl">
            </div>

            <div
                class="bg-white shadow-md rounded-2xl p-8 border-l-4 border-green-500 hover:shadow-xl transition space-y-4">
                <div>
                    <span class="font-semibold text-gray-500">Category:</span>
                    <span class="font-bold text-gray-800">Car</span>
                </div>
                <div>
                    <span class="font-semibold text-gray-500">Price per Day:</span>
                    <span class="font-bold text-gray-800">$120</span>
                </div>
                <div>
                    <span class="font-semibold text-gray-500">Availability:</span>
                    <span class="font-bold text-green-600">Available</span>
                </div>
                <div>
                    <span class="font-semibold text-gray-500">Model:</span>
                    <span class="font-bold text-gray-800">Tesla Model S 2025</span>
                </div>
                <div>
                    <span class="font-semibold text-gray-500">Description:</span>
                    <p class="text-gray-700">Luxury electric sedan with autopilot, long range battery, and premium
                        interior. Perfect for city driving or long trips.</p>
                </div>

                <a href="reserve.php"
                    class="inline-block mt-4 px-6 py-3 bg-indigo-500 hover:bg-indigo-600 rounded-xl font-semibold shadow-lg text-white transition">
                    Reserve Now
                </a>
            </div>

        </div>
    </main>

    <footer class="mt-16 text-center text-gray-500 py-6 text-sm">
        © 2025 MaBagnole — All rights reserved
    </footer>

</body>

</html>