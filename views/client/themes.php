<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Themes | MaBagnole</title>
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
                <div class="text-gray-700 font-medium">Welcome, User</div>
                <a href="dashboard.php"
                    class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">Dashboard</a>
                <a href="logout.php"
                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">Logout</a>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto mt-10 px-4">
        <div class="flex justify-between ">
            <h1 class="text-3xl font-bold text-gray-800">Browse Themes</h1>
            <a href="create_article.php"
                class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition transform hover:-translate-y-1">
                Create New Article
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6" id="themes-container">
        </div>

        <div class="flex justify-center mt-6">
            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">1</button>
            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 ml-2">2</button>
        </div>
    </div>

    <footer class="bg-white border-t shadow-inner mt-16">
        <div class="text-center text-gray-500 py-4">
            <i class="fas fa-copyright mr-2"></i> 2025 MaBagnole — All rights reserved.
        </div>
    </footer>

    <script>
    const themes = [{
            id: 1,
            name: "Car Maintenance",
            description: "Explore articles on maintaining your car efficiently.",
            slug: "car-maintenance"
        },
        {
            id: 2,
            name: "Vehicle Reviews",
            description: "Read reviews on the latest vehicles.",
            slug: "vehicle-reviews"
        },
        {
            id: 3,
            name: "Travel Tips",
            description: "Useful tips for traveling by car.",
            slug: "travel-tips"
        },
        {
            id: 4,
            name: "Car Insurance",
            description: "Find out more about car insurance options.",
            slug: "car-insurance"
        },
        {
            id: 5,
            name: "Car Gadgets",
            description: "Discover the latest gadgets for your vehicle.",
            slug: "car-gadgets"
        },
        {
            id: 6,
            name: "Road Safety",
            description: "Learn about road safety and driving best practices.",
            slug: "road-safety"
        }
    ];

    // Function to display themes dynamically
    function displayThemes() {
        const container = document.getElementById('themes-container');
        themes.forEach(theme => {
            const themeCard = document.createElement('div');
            themeCard.className =
                "bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition transform hover:-translate-y-1";
            themeCard.innerHTML = `
                    <h2 class="text-xl font-semibold text-gray-800">${theme.name}</h2>
                    <p class="text-gray-600 mt-2">${theme.description}</p>
                    <a href="articles.php?theme=${theme.slug}" class="text-blue-600 mt-4 inline-block">Explore Articles</a>
                `;
            container.appendChild(themeCard);
        });
    }

    // Call the function to display themes on page load
    window.onload = displayThemes;
    </script>

</body>

</html>