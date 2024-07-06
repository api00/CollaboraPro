<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CollaboraPro - Multi-Tenant Project Management Platform</title>
    <!-- Custom Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Include Tailwind CSS -->
    @vite(['resources/css/components/Home/app.css', 'resources/js/home/app.js'])


</head>
<body class="bg-gray-100">

<!-- Header -->
<header class="bg-gradient-to-r from-gray-900 via-purple-900  to-gray-900 text-gray-100 py-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center px-4">
        <!-- Logo -->
        <a href="/" class="text-2xl font-bold" style="font-family: 'Space Grotesk', sans-serif;">CollaboraPro</a>

        <!-- Navigation Menu -->
        <nav>
            <ul class="flex space-x-8 items-center" style="font-family: 'Space Grotesk', sans-serif;">
                <li><a href="#" class="text-lg hover:text-gray-200 transition duration-300">Home</a></li>
                <li><a href="#feature" class="text-lg hover:text-gray-200 transition duration-300">Features</a></li>
                <li><a href="#pricing" class="text-lg hover:text-gray-200 transition duration-300">Pricing</a></li>
                <li><a href="#faq" class="text-lg hover:text-gray-200 transition duration-300">FAQ</a></li>
                <li><a href="#footer" class="text-lg hover:text-gray-200 transition duration-300">Contact</a></li>
                <li><a href="/register" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-bold py-3 px-6 rounded-lg shadow-lg transition duration-300 transform hover:scale-105" style="font-family: 'Space Grotesk', sans-serif;">Join Now</a></li>
                <li><a href="/login" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg shadow-lg transition duration-300 transform hover:scale-105" style="font-family: 'Space Grotesk', sans-serif;">Sign In</a></li>
            </ul>

        </nav>

    </div>
</header>
<!-- Main Content -->
<main>
    @yield('content')
</main>

<footer id="footer" class="bg-gray-900 text-white py-8">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <p>&copy; {{ date('Y') }} CollaboraPro. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>
</html>
