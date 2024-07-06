<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CollaboraPro - Multi-Tenant Project Management Platform</title>
    <!-- Custom Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
          rel="stylesheet">
    <!-- Include Tailwind CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Optional: Include Vite for Tailwind JIT mode -->
    @vite(['resources/css/components/user/app.css', 'resources/js/User/app.js'])
</head>
<body class="bg-gradient-to-r from-#2E3192-800 via-blue-900 to-#1BFFFF-900 ">

<!-- Header -->
<header class="bg-gray-900 text-white shadow-md relative">
    <div class="container nav-header mx-auto px-4">
        <!-- Desktop Navigation -->
        <nav class="hidden md:grid grid-cols-12 gap-4 py-4">
            <ul class="col-span-12 grid grid-cols-9 text-sm font-semibold text-center">
                <li class="col-span-1 border-r border-gray-700"><a href="#"
                                                                   class="tab-link text-gray-300 hover:text-white px-3 py-2 text-lg border-b-2 border-transparent hover:border-white transition duration-300 ease-in-out"
                                                                   data-tab="home">Home</a></li>
                <li class="col-span-1 border-r border-gray-700"><a href="#"
                                                                   class="tab-link text-gray-300 hover:text-white px-3 py-2 text-lg border-b-2 border-transparent hover:border-white transition duration-300 ease-in-out"
                                                                   data-tab="projects">Projects</a></li>
                <li class="col-span-1 border-r border-gray-700"><a href="#"
                                                                   class="tab-link text-gray-300 hover:text-white px-3 py-2 text-lg border-b-2 border-transparent hover:border-white transition duration-300 ease-in-out"
                                                                   data-tab="tasks">Tasks</a></li>
                <li class="col-span-1 border-r border-gray-700 relative"><a href="#"
                                                                            class="tab-link text-gray-300 hover:text-white px-3 py-2 text-lg border-b-2 border-transparent hover:border-white transition duration-300 ease-in-out"
                                                                            data-tab="messages">Messages
                        <span id="notification-count"
                              class="badge bg-red-500 absolute -top-1 -right-2">3</span></a></li>
                <li class="col-span-1 border-r border-gray-700 relative"><a href="#"
                                                                            class="tab-link text-gray-300 hover:text-white px-3 py-2 text-lg border-b-2 border-transparent hover:border-white transition duration-300 ease-in-out"
                                                                            data-tab="notifications">Notifications
                        <span id="notification-count"
                              class="badge bg-red-500 absolute -top-1 -right-2">5</span></a></li>
                <li class="col-span-1 border-r border-gray-700"><a href="#"
                                                                   class="tab-link text-gray-300 hover:text-white px-3 py-2 text-lg border-b-2 border-transparent hover:border-white transition duration-300 ease-in-out"
                                                                   data-tab="profile">Profile</a></li>
                <li class="col-span-1"><a href="#"
                                          class="tab-link text-gray-300 hover:text-white px-3 py-2 text-lg border-b-2 border-transparent hover:border-white transition duration-300 ease-in-out"
                                          data-tab="settings">Settings</a></li>
            </ul>
        </nav>
        <!-- Mobile Navigation -->
        <button id="mobileMenuBtn"
                class="md:hidden block absolute top-4 left-4 text-gray-300 hover:text-white focus:outline-none">
            <img src="{{ asset("/images/hamburger.png") }}" height="40" width="40" alt="" srcset="">
        </button>

        <div style="width: 50%" id="mobileMenu" class="mobile-menu">
            <ul class="space-y-2 text-sm font-semibold text-left">
                <li><a href="#"
                       class="tab-link block text-gray-300 hover:text-white px-3 py-2 text-lg border-b-2 border-transparent hover:border-white transition duration-300 ease-in-out"
                       data-tab="home">Home</a></li>
                <li><a href="#"
                       class="tab-link block text-gray-300 hover:text-white px-3 py-2 text-lg border-b-2 border-transparent hover:border-white transition duration-300 ease-in-out"
                       data-tab="projects">Projects</a></li>
                <li><a href="#"
                       class="tab-link block text-gray-300 hover:text-white px-3 py-2 text-lg border-b-2 border-transparent hover:border-white transition duration-300 ease-in-out"
                       data-tab="tasks">Tasks</a></li>
                <li><a href="#"
                       class="tab-link block text-gray-300 hover:text-white px-3 py-2 text-lg border-b-2 border-transparent hover:border-white transition duration-300 ease-in-out"
                       data-tab="messages">Messages</a></li>
                <li><a href="#"
                       class="tab-link block text-gray-300 hover:text-white px-3 py-2 text-lg border-b-2 border-transparent hover:border-white transition duration-300 ease-in-out"
                       data-tab="notifications">Notifications</a></li>
                <li><a href="#"
                       class="tab-link block text-gray-300 hover:text-white px-3 py-2 text-lg border-b-2 border-transparent hover:border-white transition duration-300 ease-in-out"
                       data-tab="profile">Profile</a></li>
                <li><a href="#"
                       class="tab-link block text-gray-300 hover:text-white px-3 py-2 text-lg border-b-2 border-transparent hover:border-white transition duration-300 ease-in-out"
                       data-tab="settings">Settings</a></li>
            </ul>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="bg-gradient-to-tr from-transparent via-light-white to-cream-white">
    @yield('content')
</main>

<!-- Footer -->
<footer id="footer" class="bg-gray-900 text-white py-8">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <p>&copy; {{ date('Y') }} CollaboraPro. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>
</html>
