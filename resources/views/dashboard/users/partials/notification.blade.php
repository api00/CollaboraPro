<!-- Notification Section -->
<div id="notifications" class="tab-content hidden container mx-auto p-6 bg-white-creme rounded-lg shadow-lg space-y-4">

    <!-- Notification 1 -->
    <div class="notification bg-white p-4 rounded-lg shadow-md flex items-start space-x-4 border-l-4 border-blue-500 hover:bg-blue-50 transition-colors duration-300">
        <div class="flex-shrink-0">
            <span class="w-12 h-12 bg-blue-500 text-white flex items-center justify-center rounded-full">N</span>
        </div>
        <div class="flex-1">
            <h3 class="text-xl font-semibold text-gray-800">New Message</h3>
            <p class="text-gray-600">You have received a new message from John Doe.</p>
            <span class="text-gray-500 text-sm">2024-06-24 10:30 AM</span>
        </div>
        <div class="flex-shrink-0">
            <span class="text-sm text-blue-500 bg-blue-100 py-1 px-2 rounded-full">Unread</span>
        </div>
        <button onclick="removeNotification(this)" class="text-gray-400 hover:text-gray-600 transition-colors duration-300 ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <!-- Notification 2 -->
    <div class="notification bg-white p-4 rounded-lg shadow-md flex items-start space-x-4 border-l-4 border-yellow-500 hover:bg-yellow-50 transition-colors duration-300">
        <div class="flex-shrink-0">
            <span class="w-12 h-12 bg-yellow-500 text-white flex items-center justify-center rounded-full">W</span>
        </div>
        <div class="flex-1">
            <h3 class="text-xl font-semibold text-gray-800">Warning</h3>
            <p class="text-gray-600">Your project deadline is approaching.</p>
            <span class="text-gray-500 text-sm">2024-06-23 02:45 PM</span>
        </div>
        <div class="flex-shrink-0">
            <span class="text-sm text-yellow-500 bg-yellow-100 py-1 px-2 rounded-full">Read</span>
        </div>
        <button onclick="removeNotification(this)" class="text-gray-400 hover:text-gray-600 transition-colors duration-300 ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <!-- Notification 3 -->
    <div class="notification bg-white p-4 rounded-lg shadow-md flex items-start space-x-4 border-l-4 border-red-500 hover:bg-red-50 transition-colors duration-300">
        <div class="flex-shrink-0">
            <span class="w-12 h-12 bg-red-500 text-white flex items-center justify-center rounded-full">A</span>
        </div>
        <div class="flex-1">
            <h3 class="text-xl font-semibold text-gray-800">Alert</h3>
            <p class="text-gray-600">System maintenance scheduled for tomorrow.</p>
            <span class="text-gray-500 text-sm">2024-06-22 08:00 AM</span>
        </div>
        <div class="flex-shrink-0">
            <span class="text-sm text-red-500 bg-red-100 py-1 px-2 rounded-full">Read</span>
        </div>
        <button onclick="removeNotification(this)" class="text-gray-400 hover:text-gray-600 transition-colors duration-300 ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>
</div>
