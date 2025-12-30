<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Reviews | MaBagnole</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 min-h-screen">

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
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">My Reviews</h1>
            <a href="create_review.php"
                class="px-4 py-2 rounded-xl bg-indigo-500 hover:bg-indigo-600 text-white font-semibold transition">
                + Create Review
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition border-l-4 border-indigo-500">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Tesla Model S</h2>
                <p class="text-yellow-400 font-semibold mb-2">Rating: ★★★★☆</p>
                <p class="text-gray-600 mb-4">Amazing car! Smooth ride and excellent autopilot features.</p>
                <div class="flex gap-2">
                    <button
                        class="w-1/2 bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 rounded transition">
                        Edit
                    </button>
                    <button class="w-1/2 bg-red-500 hover:bg-red-600 text-white font-semibold py-2 rounded transition">
                        Delete
                    </button>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition border-l-4 border-yellow-500">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Yamaha R1</h2>
                <p class="text-yellow-400 font-semibold mb-2">Rating: ★★★☆☆</p>
                <p class="text-gray-600 mb-4">Good performance, but a bit hard for city traffic.</p>
                <div class="flex gap-2">
                    <button
                        class="w-1/2 bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 rounded transition">
                        Edit
                    </button>
                    <button class="w-1/2 bg-red-500 hover:bg-red-600 text-white font-semibold py-2 rounded transition">
                        Delete
                    </button>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition border-l-4 border-green-500">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Range Rover</h2>
                <p class="text-yellow-400 font-semibold mb-2">Rating: ★★★★★</p>
                <p class="text-gray-600 mb-4">Luxury SUV, extremely comfortable for long drives.</p>
                <div class="flex gap-2">
                    <button
                        class="w-1/2 bg-green-500 hover:bg-green-600 text-white font-semibold py-2 rounded transition">
                        Edit
                    </button>
                    <button class="w-1/2 bg-red-500 hover:bg-red-600 text-white font-semibold py-2 rounded transition">
                        Delete
                    </button>
                </div>
            </div>

        </div>
    </div>

    <footer class="mt-10 text-center text-gray-500 py-4 text-sm">
        © 2025 MaBagnole — All rights reserved
    </footer>

</body>

</html>