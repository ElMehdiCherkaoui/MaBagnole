<?php
require_once __DIR__ . '/../../autoload.php';
session_start();
$user = (new User)->listUserLogged($_SESSION['userEmailLogin']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Details | MaBagnole</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-50">

    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600 flex items-center">
                <i class="fas fa-car mr-2"></i> MaBagnole
            </h1>

            <div class="hidden md:flex space-x-4 items-center">
                <div class="text-gray-700 font-medium">Welcome, <?= htmlspecialchars($user->userName);  ?></div>
                <a href="dashboard.php"
                    class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">Dashboard</a>
                <a href="../logout.php"
                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">Logout</a>
            </div>
        </div>
    </nav>

    <div class="max-w-3xl mx-auto py-8">
        <div class="bg-white shadow-lg rounded-lg p-6">

            <h2 class="text-3xl font-semibold text-gray-800">How to Choose the Right Car for Your Trip</h2>
            <p class="mt-2 text-gray-600">By John Doe | Published on 2026-01-05</p>


            <div class="mt-4">
                <button class="text-red-500 hover:text-red-600 text-lg">
                    <i class="fas fa-heart"></i> Add to Favorites
                </button>
            </div>

            <div class="mt-6 text-gray-800">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula risus et neque fermentum, eu
                    consequat elit fringilla. Integer at malesuada purus, in tincidunt orci. Sed tempor neque vitae
                    justo feugiat, ac tincidunt velit pharetra. Curabitur sed est libero. Fusce hendrerit sollicitudin
                    erat, ac tristique purus interdum sit amet.</p>

                <p class="mt-4">Aliquam eget tincidunt lectus, vel laoreet urna. Quisque viverra dui in enim fermentum,
                    at eleifend mi mollis. Nunc varius tempor tortor, sit amet feugiat libero ultricies non. Nam luctus
                    sapien a nisi dignissim mollis. Aenean placerat tortor vel lorem vulputate, at egestas orci
                    vehicula.</p>

                <p class="mt-4">Curabitur euismod dolor eget turpis bibendum sollicitudin. Donec auctor odio eu lorem
                    porttitor, ut egestas nisl tincidunt. Integer quis turpis sit amet libero scelerisque iaculis non id
                    purus.</p>
            </div>

            <div class="mt-6">
                <a href="articles.php" class="text-blue-500 hover:text-blue-700">Back to Articles List</a>
            </div>

            <div class="mt-8">
                <h3 class="text-xl font-semibold text-gray-800">Comments</h3>
                <div class="space-y-4 mt-4">
                    <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-gray-800">Jane Doe</span>
                            <span class="text-sm text-gray-500">2026-01-05</span>
                        </div>
                        <p class="mt-2 text-gray-600">Great article! I found it very helpful when planning my trip.</p>
                    </div>
                </div>

                <div class="mt-6">
                    <h4 class="text-lg font-medium text-gray-800">Add a Comment</h4>
                    <form action="#" method="POST" class="mt-4">
                        <textarea name="comment" rows="4" class="w-full p-3 border border-gray-300 rounded-lg"
                            placeholder="Write your comment here..." required></textarea>
                        <button type="submit"
                            class="w-full mt-4 bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700">Post
                            Comment</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>

</html>