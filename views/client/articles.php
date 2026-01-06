<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles | MaBagnole</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600 flex items-center">
                <i class="fas fa-car mr-2"></i> MaBagnole
            </h1>
            <div class="hidden md:flex space-x-4 items-center">
                <div class="text-gray-700 font-medium">Welcome, User</div>
                <a href="dashboard.php"
                    class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">Dashboard</a>
                <a href="../logout.php"
                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">Logout</a>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto py-8">
        <div class="bg-white shadow-lg rounded-lg p-6">

            <h2 class="text-2xl font-semibold text-gray-800">Articles</h2>
            <p class="mt-2 text-gray-600">Explore articles and discussions related to your selected theme.</p>

            <div class="flex items-center mt-4 mb-6 space-x-4">
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                    <i class="fas fa-filter"></i> Filter
                </button>

                <select name="tags" id="tags" class="w-48 p-3 border border-gray-300 rounded-lg">
                    <option value="">Select a Tag</option>
                    <option value="car">Car</option>
                    <option value="travel">Travel</option>
                    <option value="guide">Guide</option>
                    <option value="accessories">Accessories</option>
                </select>

                <input type="text" name="search" class="w-full p-3 border border-gray-300 rounded-lg"
                    placeholder="Search for articles by title...">
            </div>

            <div class="mt-6 space-y-6">
                <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <h3 class="text-xl font-semibold text-blue-600 hover:text-blue-800 cursor-pointer">
                        <a href="article_detail.php">How to Choose the Right Car for Your Trip</a>
                    </h3>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="mt-4">
                        <span class="text-sm font-semibold text-gray-700">Tags: </span>
                        <span class="inline-block bg-blue-600 text-white px-3 py-1 rounded-full text-xs mr-2">Car</span>
                        <span
                            class="inline-block bg-green-600 text-white px-3 py-1 rounded-full text-xs mr-2">Travel</span>
                        <span class="inline-block bg-yellow-600 text-white px-3 py-1 rounded-full text-xs">Guide</span>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-sm text-gray-500">By John Doe</span>
                        <a href="article_detail.php" class="text-blue-600 hover:text-blue-800">Read More</a>
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <h3 class="text-xl font-semibold text-blue-600 hover:text-blue-800 cursor-pointer">
                        <a href="article_detail.php">The Best Car Accessories for Long Trips</a>
                    </h3>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="mt-4">
                        <span class="text-sm font-semibold text-gray-700">Tags: </span>
                        <span
                            class="inline-block bg-blue-600 text-white px-3 py-1 rounded-full text-xs mr-2">Accessories</span>
                        <span
                            class="inline-block bg-green-600 text-white px-3 py-1 rounded-full text-xs mr-2">Travel</span>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-sm text-gray-500">By Jane Smith</span>
                        <a href="article_detail.php" class="text-blue-600 hover:text-blue-800">Read More</a>
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <nav class="flex justify-center">
                    <ul class="flex space-x-4">
                        <li>
                            <a href="#" class="px-4 py-2 text-blue-600 hover:bg-blue-100 rounded-md">Previous</a>
                        </li>
                        <li>
                            <a href="#" class="px-4 py-2 text-blue-600 hover:bg-blue-100 rounded-md">1</a>
                        </li>
                        <li>
                            <a href="#" class="px-4 py-2 text-blue-600 hover:bg-blue-100 rounded-md">2</a>
                        </li>
                        <li>
                            <a href="#" class="px-4 py-2 text-blue-600 hover:bg-blue-100 rounded-md">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</body>

</html>