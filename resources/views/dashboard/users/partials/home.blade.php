<div id="home" class="tab-content">
    <div class="bg-gradient-to-r from-gray-900 via-purple-800 to-blue-900 rounded-lg p-8 mb-8 shadow-lg">
        <h2 class="text-4xl font-bold text-white mb-4" style="font-family: 'Space Grotesk', sans-serif;">Welcome to CollaboraPro!</h2>
        <p class="text-lg text-gray-200 mb-6" style="font-family: 'Space Grotesk', sans-serif;">CollaboraPro is a powerful multi-tenant project management platform designed to streamline collaboration, task management, and team communication.</p>
        <a href="#" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" style="font-family: 'Montserrat', sans-serif;">Get Started</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Left Column: Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Card 1: Profile Section -->
            <div class="bg-gradient-to-r from-blue-900 via-purple-800 to-gray-900  rounded-lg p-6 shadow-lg cursor-pointer hover:shadow-2xl transition-transform transform hover:scale-105" onclick="document.querySelector('[data-tab=profile]').click();">
                <img src="https://via.placeholder.com/300" alt="Profile" class="w-full h-48 object-cover mb-4 rounded-md">
                <h3 class="text-2xl font-semibold text-white mb-2" style="font-family: 'Montserrat', sans-serif;">Profile Section</h3>
                <p class="text-gray-300" style="font-family: 'Roboto', sans-serif;">Update your profile picture and personal information.</p>
            </div>

            <!-- Card 2: Create Project -->
            <div class="bg-gradient-to-r from-gray-800 via-gray-700 to-gray-900 rounded-lg p-6 shadow-lg cursor-pointer hover:shadow-2xl transition-transform transform hover:scale-105" onclick="document.querySelector('[data-tab=projects]').click();">
                <img src="https://via.placeholder.com/300" alt="Create Project" class="w-full h-48 object-cover mb-4 rounded-md">
                <h3 class="text-2xl font-semibold text-white mb-2" style="font-family: 'Montserrat', sans-serif;">Create Project</h3>
                <p class="text-gray-300" style="font-family: 'Roboto', sans-serif;">Start new projects, assign tasks, and manage deadlines.</p>
            </div>

            <!-- Card 3: Messages Section -->
            <div class="bg-gradient-to-r from-gray-800 via-gray-700 to-gray-900 rounded-lg p-6 shadow-lg cursor-pointer hover:shadow-2xl transition-transform transform hover:scale-105" onclick="document.querySelector('[data-tab=messages]').click();">
                <img src="https://via.placeholder.com/300" alt="Messages" class="w-full h-48 object-cover mb-4 rounded-md">
                <h3 class="text-2xl font-semibold text-white mb-2" style="font-family: 'Montserrat', sans-serif;">Messages</h3>
                <p class="text-gray-300" style="font-family: 'Roboto', sans-serif;">Communicate with your team effectively.</p>
            </div>

            <!-- Card 4: Tasks Section -->
            <div class="bg-gradient-to-r from-gray-900 via-purple-800 to-blue-900  rounded-lg p-6 shadow-lg cursor-pointer hover:shadow-2xl transition-transform transform hover:scale-105" onclick="document.querySelector('[data-tab=tasks]').click();">
                <img src="https://via.placeholder.com/300" alt="Tasks" class="w-full h-48 object-cover mb-4 rounded-md">
                <h3 class="text-2xl font-semibold text-white mb-2" style="font-family: 'Montserrat', sans-serif;">Tasks</h3>
                <p class="text-gray-300" style="font-family: 'Roboto', sans-serif;">Manage your tasks and deadlines.</p>
            </div>
        </div>

        <!-- Right Column: Image Placeholder -->
        <div class="flex justify-center items-center">
            <div class="w-full md:w-3/4 rounded-lg overflow-hidden shadow-lg">
                <img src="https://via.placeholder.com/800x600" alt="CollaboraPro Platform" class="w-full h-auto">
            </div>
        </div>
    </div>
</div>
