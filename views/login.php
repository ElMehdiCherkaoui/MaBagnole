<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login | MaBagnole</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-xl w-full max-w-md p-8">

        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-blue-600">Welcome Back</h1>
            <p class="text-gray-500 mt-2">
                Login to access your MaBagnole account
            </p>
        </div>

        <form method="POST" action="">

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Email Address</label>
                <input type="email" name="email" placeholder="john@email.com" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium mb-1">Password</label>
                <input type="password" name="password" placeholder="********" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Login
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-6">
            Don’t have an account?
            <a href="register.php" class="text-blue-600 font-medium hover:underline">
                Register
            </a>
        </p>

    </div>

</body>

</html>