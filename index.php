<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MaBagnole | Vehicle Rental Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">MaBagnole</h1>

            <div class="space-x-4">
                <a href="login.php" class="text-gray-700 hover:text-blue-600 font-medium">
                    Login
                </a>
                <a href="register.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                    Register
                </a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="min-h-screen flex items-center justify-center">
        <div class="max-w-3xl text-center px-6">

            <h2 class="text-4xl md:text-5xl font-extrabold mb-6">
                Rent Vehicles Easily & Securely
            </h2>

            <p class="text-lg text-gray-600 mb-8">
                MaBagnole is a modern vehicle rental platform that allows you to
                explore, compare, and reserve cars or motorcycles in just a few clicks.
                Simple, fast, and reliable.
            </p>

            <div class="flex justify-center gap-6">
                <a href="login.php"
                    class="bg-blue-600 text-white px-8 py-3 rounded-lg text-lg font-semibold hover:bg-blue-700 transition">
                    Login
                </a>

                <a href="register.php"
                    class="border border-blue-600 text-blue-600 px-8 py-3 rounded-lg text-lg font-semibold hover:bg-blue-50 transition">
                    Create Account
                </a>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-white border-t">
        <div class="max-w-7xl mx-auto px-6 py-4 text-center text-gray-500">
            © 2025 MaBagnole — All rights reserved.
        </div>
    </footer>

</body>

</html>