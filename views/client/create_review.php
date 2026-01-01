<?php
require_once __DIR__ . '/../../autoload.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Review | MaBagnole</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 min-h-screen font-inter">


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

    <main class="max-w-3xl mx-auto mt-10 px-4">
        <h1 class="text-4xl font-bold text-center mb-12 text-gray-800">Create a Review</h1>

        <div class="bg-white shadow-md rounded-2xl p-8 border-l-4 border-indigo-500 hover:shadow-xl transition">
            <form action="#" method="POST" class="space-y-6">

                <div>
                    <label for="vehicle" class="block font-semibold mb-2 text-gray-700">Select Vehicle</label>
                    <select id="vehicle" name="vehicle"
                        class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                        <option value="tesla_model_s">Tesla Model S</option>
                        <option value="yamaha_r1">Yamaha R1</option>
                        <option value="range_rover">Range Rover</option>
                        <option value="bmw_x5">BMW X5</option>
                    </select>
                </div>

                <div>
                    <label for="rating" class="block font-semibold mb-2 text-gray-700">Rating</label>
                    <select id="rating" name="rating"
                        class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                        <option value="1">★☆☆☆☆</option>
                        <option value="2">★★☆☆☆</option>
                        <option value="3">★★★☆☆</option>
                        <option value="4">★★★★☆</option>
                        <option value="5">★★★★★</option>
                    </select>
                </div>

                <div>
                    <label for="comment" class="block font-semibold mb-2 text-gray-700">Comment</label>
                    <textarea id="comment" name="comment" rows="4" placeholder="Write your review..."
                        class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:outline-none"></textarea>
                </div>

                <button type="submit"
                    class="w-full p-3 rounded-xl bg-indigo-500 hover:bg-indigo-600 font-semibold text-white shadow-lg transition">
                    Submit Review
                </button>

            </form>
        </div>
    </main>

    <footer class="mt-16 text-center text-gray-500 py-6 text-sm">
        © 2025 MaBagnole — All rights reserved
    </footer>

</body>

</html>