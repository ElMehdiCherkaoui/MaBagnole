<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manage Reviews | MaBagnole Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-gray-100 min-h-screen font-sans flex">

    <aside class="bg-gray-950 w-64 min-h-screen flex flex-col fixed border-r border-gray-800">
        <div class="p-6 flex items-center justify-center border-b border-gray-800">
            <span class="text-2xl font-bold text-red-500">MaBagnole Admin</span>
        </div>

        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="dashboard.php"
                class="block px-4 py-3 rounded-lg text-red-500 font-semibold hover:bg-red-900 hover:text-white transition">Dashboard</a>
            <a href="vehicles.php"
                class="block px-4 py-3 rounded-lg text-red-500 font-semibold hover:bg-red-900 hover:text-white transition">Vehicles</a>
            <a href="categories.php"
                class="block px-4 py-3 rounded-lg text-red-500 font-semibold hover:bg-red-900 hover:text-white transition">Categories</a>
            <a href="reservations.php"
                class="block px-4 py-3 rounded-lg text-red-500 font-semibold hover:bg-red-900 hover:text-white transition">Reservations</a>
            <a href="reviews.php"
                class="block px-4 py-3 rounded-lg text-white bg-red-700 font-semibold transition">Reviews</a>
            <a href="#"
                class="block px-4 py-3 rounded-lg text-gray-400 font-semibold hover:bg-red-900 hover:text-white transition">Logout</a>
        </nav>
    </aside>

    <main class="flex-1 ml-64 p-8">
        <h1 class="text-4xl font-bold text-red-500 mb-8">Manage Reviews</h1>



        <div class="overflow-x-auto">
            <table class="min-w-full bg-gray-800 rounded-xl border border-gray-700">
                <thead>
                    <tr class="text-left text-gray-300 border-b border-gray-700">
                        <th class="px-6 py-3">ID</th>
                        <th class="px-6 py-3">Vehicle</th>
                        <th class="px-6 py-3">Client</th>
                        <th class="px-6 py-3">Rating</th>
                        <th class="px-6 py-3">Comment</th>
                        <th class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-100">
                    <tr class="border-b border-gray-700 hover:bg-gray-700 transition">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">Tesla Model S</td>
                        <td class="px-6 py-4">John Doe</td>
                        <td class="px-6 py-4">5/5</td>
                        <td class="px-6 py-4">Excellent service and clean vehicle!</td>
                        <td class="px-6 py-4 flex gap-2">
                            <button
                                class="px-3 py-1 bg-red-800 hover:bg-red-900 rounded text-white font-semibold">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-b border-gray-700 hover:bg-gray-700 transition">
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">Range Rover</td>
                        <td class="px-6 py-4">Jane Smith</td>
                        <td class="px-6 py-4">4/5</td>
                        <td class="px-6 py-4">Very comfortable and smooth drive.</td>
                        <td class="px-6 py-4 flex gap-2">
                            <button
                                class="px-3 py-1 bg-red-800 hover:bg-red-900 rounded text-white font-semibold">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-b border-gray-700 hover:bg-gray-700 transition">
                        <td class="px-6 py-4">3</td>
                        <td class="px-6 py-4">Yamaha R1</td>
                        <td class="px-6 py-4">Mark Lee</td>
                        <td class="px-6 py-4">3/5</td>
                        <td class="px-6 py-4">Bike was okay, but could be better maintained.</td>
                        <td class="px-6 py-4 flex gap-2">
                            <button
                                class="px-3 py-1 bg-red-800 hover:bg-red-900 rounded text-white font-semibold">Delete</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </main>
</body>

</html>