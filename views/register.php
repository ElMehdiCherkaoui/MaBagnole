<?php


require_once "../config/Database.php";
require_once "../models/User.php";

$message = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $password = htmlspecialchars($_POST["password"]);
    $confirmPassword = htmlspecialchars($_POST["confirm_password"]);


    if ($password !== $confirmPassword) {
        $message = "Passwords do not match";
    } elseif (strlen($password) < 8) {
        $message = "Password must be at least 8 characters";
    } else {

        $user = new Users(
            null,
            $name,
            $email,
            "client",
            1,
            $password
        );

        $result = $user->register();

        if ($result === "success") {

            header("Location: login.php");
            exit;
        } else {
            $message = $result;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register | MaBagnole</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-xl w-full max-w-md p-8">

        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-blue-600">Create Account</h1>
            <p class="text-gray-500 mt-2">
                Join MaBagnole and start renting vehicles easily
            </p>
        </div>
        <?php if (!empty($message)): ?>
            <p class="text-red-600 text-sm mb-4">
                <?= htmlspecialchars($message) ?>
            </p>
        <?php endif; ?>

        <form method="POST">

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Full Name</label>
                <input type="text" name="name" placeholder="John Doe" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Email Address</label>
                <input type="email" name="email" placeholder="john@email.com" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Password</label>
                <input type="password" name="password" placeholder="********" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium mb-1">Confirm Password</label>
                <input type="password" name="confirm_password" placeholder="********" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Register
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-6">
            Already have an account?
            <a href="login.php" class="text-blue-600 font-medium hover:underline">
                Login
            </a>
        </p>

    </div>

</body>

</html>