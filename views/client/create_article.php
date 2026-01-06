<?php 
require_once __DIR__ . '/../../autoload.php';
session_start();

// Check if user is logged in
if (!isset($_SESSION['userEmailLogin'])) {
    header("Location: login.php");  // Redirect to login if not logged in
    exit();
}

$user = (new User)->listUserLogged($_SESSION['userEmailLogin']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article | MaBagnole</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600 flex items-center">
                <i class="fas fa-car mr-2"></i> MaBagnole
            </h1>
            <div class="hidden md:flex space-x-4 items-center">
                <div class="text-gray-700 font-medium">Welcome, <?= htmlspecialchars($user->userName); ?></div>
                <a href="dashboard.php"
                    class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">Dashboard</a>
                <a href="../logout.php"
                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">Logout</a>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto py-8 px-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Create a New Article</h1>

        <form action="save_article.php" method="POST" class="space-y-6">
            <div>
                <label for="title" class="block text-gray-700 font-medium">Article Title</label>
                <input type="text" name="title" id="title" class="w-full p-3 border border-gray-300 rounded-lg"
                    required>
            </div>

            <div>
                <label for="content" class="block text-gray-700 font-medium">Article Content</label>
                <textarea name="content" id="content" rows="6" class="w-full p-3 border border-gray-300 rounded-lg"
                    required></textarea>
            </div>

            <div>
                <label for="theme" class="block text-gray-700 font-medium">Select Theme</label>
                <select name="theme" id="theme" class="w-full p-3 border border-gray-300 rounded-lg" required>
                    <option value="car-maintenance">Car Maintenance</option>
                    <option value="vehicle-reviews">Vehicle Reviews</option>
                    <option value="travel-tips">Travel Tips</option>
                    <option value="car-insurance">Car Insurance</option>
                    <option value="car-gadgets">Car Gadgets</option>
                    <option value="road-safety">Road Safety</option>
                </select>
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">Publish
                    Article</button>
            </div>
        </form>
    </div>

</body>

</html>