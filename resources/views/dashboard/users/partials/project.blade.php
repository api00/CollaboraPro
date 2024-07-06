<!-- Projects Section -->
<div id="projects" class="tab-content hidden bg-gradient-to-tr from-transparent via-light-white to-cream-white  min-h-screen">
    <!-- Add New Project Button -->
    <div class="mb-8 flex justify-start">
        <button id="add-project-btn"
                class="bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-700 hover:to-purple-800 text-white font-bold py-4 px-8 rounded-lg shadow-lg transition duration-300">
            Add New Project
        </button>
    </div>

    <!-- Projects Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Project Card 1 -->
        <div class="project-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300 w-10/12 mx-auto">
            <img src="https://via.placeholder.com/300x150" alt="Project Image" class="w-full h-32 object-cover">
            <div class="p-4">
                <h3 class="text-2xl font-semibold text-white mb-2">Project Alpha</h3>
                <div class="flex items-center mb-4">
                    <span class="text-green-400 bg-green-900 bg-opacity-25 py-1 px-2 rounded-full text-lg">Ongoing</span>
                    <span class="ml-4 text-gray-300 text-lg">Due: 2023-12-31</span>
                </div>
                <div class="mb-4">
                    <div class="flex items-center justify-between text-gray-300 text-lg">
                        <span>Progress:</span>
                        <span>60%</span>
                    </div>
                    <div class="w-full bg-gray-700 rounded-full h-2.5 mt-1">
                        <div class="bg-blue-500 h-2.5 rounded-full" style="width: 60%"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="flex items-center justify-between text-gray-300 text-lg">
                        <span>Tasks:</span>
                        <span>12/20</span>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="text-gray-400 text-lg">Team Members:</span>
                    <div class="flex mt-2">
                        <img src="https://via.placeholder.com/40" alt="Team Member" class="w-8 h-8 rounded-full border-2 border-gray-300">
                        <img src="https://via.placeholder.com/40" alt="Team Member" class="w-8 h-8 rounded-full border-2 border-gray-300 -ml-2">
                        <img src="https://via.placeholder.com/40" alt="Team Member" class="w-8 h-8 rounded-full border-2 border-gray-300 -ml-2">
                        <span class="ml-2 text-gray-400 text-lg">+3 more</span>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">View</button>
                    <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">Edit</button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">Delete</button>
                </div>
            </div>
        </div>
        <!-- Project Card 2 -->
        <div class="project-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300 w-10/12 mx-auto">
            <img src="https://via.placeholder.com/300x150" alt="Project Image" class="w-full h-32 object-cover">
            <div class="p-4">
                <h3 class="text-2xl font-semibold text-white mb-2">Project Beta</h3>
                <div class="flex items-center mb-4">
                    <span class="text-yellow-400 bg-yellow-900 bg-opacity-25 py-1 px-2 rounded-full text-lg">Upcoming</span>
                    <span class="ml-4 text-gray-300 text-lg">Due: 2024-03-15</span>
                </div>
                <div class="mb-4">
                    <div class="flex items-center justify-between text-gray-300 text-lg">
                        <span>Progress:</span>
                        <span>0%</span>
                    </div>
                    <div class="w-full bg-gray-700 rounded-full h-2.5 mt-1">
                        <div class="bg-blue-500 h-2.5 rounded-full" style="width: 0%"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="flex items-center justify-between text-gray-300 text-lg">
                        <span>Tasks:</span>
                        <span>0/10</span>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="text-gray-400 text-lg">Team Members:</span>
                    <div class="flex mt-2">
                        <img src="https://via.placeholder.com/40" alt="Team Member" class="w-8 h-8 rounded-full border-2 border-gray-300">
                        <img src="https://via.placeholder.com/40" alt="Team Member" class="w-8 h-8 rounded-full border-2 border-gray-300 -ml-2">
                        <span class="ml-2 text-gray-400 text-lg">+1 more</span>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">View</button>
                    <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">Edit</button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">Delete</button>
                </div>
            </div>
        </div>
        <!-- Project Card 3 -->
        <div class="project-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300 w-10/12 mx-auto">
            <img src="https://via.placeholder.com/300x150" alt="Project Image" class="w-full h-32 object-cover">
            <div class="p-4">
                <h3 class="text-2xl font-semibold text-white mb-2">Project Gamma</h3>
                <div class="flex items-center mb-4">
                    <span class="text-red-400 bg-red-900 bg-opacity-25 py-1 px-2 rounded-full text-lg">Completed</span>
                    <span class="ml-4 text-gray-300 text-lg">Due: 2023-06-30</span>
                </div>
                <div class="mb-4">
                    <div class="flex items-center justify-between text-gray-300 text-lg">
                        <span>Progress:</span>
                        <span>100%</span>
                    </div>
                    <div class="w-full bg-gray-700 rounded-full h-2.5 mt-1">
                        <div class="bg-blue-500 h-2.5 rounded-full" style="width: 100%"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="flex items-center justify-between text-gray-300 text-lg">
                        <span>Tasks:</span>
                        <span>15/15</span>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="text-gray-400 text-lg">Team Members:</span>
                    <div class="flex mt-2">
                        <img src="https://via.placeholder.com/40" alt="Team Member" class="w-8 h-8 rounded-full border-2 border-gray-300">
                        <img src="https://via.placeholder.com/40" alt="Team Member" class="w-8 h-8 rounded-full border-2 border-gray-300 -ml-2">
                        <img src="https://via.placeholder.com/40" alt="Team Member" class="w-8 h-8 rounded-full border-2 border-gray-300 -ml-2">
                        <span class="ml-2 text-gray-400 text-lg">+4 more</span>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">View</button>
                    <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">Edit</button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Background -->
        <div id="modal-bg"
             class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center hidden">
            <!-- Modal Content -->
            <div
                class="bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 rounded-lg shadow-lg p-8 mx-4 md:w-2/3 lg:w-1/2">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-semibold text-white">Add New Project</h2>
                    <button id="modal-close-btn" class="text-white hover:text-gray-200 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Form Content -->
                <form id="add-project-form" class="space-y-4">
                    <div class="form-group">
                        <label for="project-name" class="block text-lg font-semibold text-white mb-1">Project
                            Name</label>
                        <input type="text" id="project-name" name="project-name"
                               placeholder="Enter project name"
                               class="w-full px-4 py-2 bg-gray-800 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="form-group">
                        <label for="project-description"
                               class="block text-lg font-semibold text-white mb-1">Project
                            Description</label>
                        <textarea id="project-description" name="project-description" rows="3"
                                  placeholder="Enter project description"
                                  class="w-full px-4 py-2 bg-gray-800 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:border-blue-500"></textarea>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="form-group">
                            <label for="teams"
                                   class="block text-lg font-semibold text-white mb-1">Teams</label>
                            <input type="text" id="teams" name="teams" placeholder="Enter teams"
                                   class="w-full px-4 py-2 bg-gray-800 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="form-group">
                            <label for="project-deadline"
                                   class="block text-lg font-semibold text-white mb-1">Project
                                Deadline</label>
                            <input type="date" id="project-deadline" name="project-deadline"
                                   class="w-full px-4 py-2 bg-gray-800 border border-gray-600 rounded-md text-white focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="project-status" class="block text-lg font-semibold text-white mb-1">Project
                            Status</label>
                        <select id="project-status" name="project-status"
                                class="w-full px-4 py-2 bg-gray-800 border border-gray-600 rounded-md text-white focus:outline-none focus:border-blue-500">
                            <option value="ongoing">Ongoing</option>
                            <option value="completed">Completed</option>
                            <option value="future">Future</option>
                        </select>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">
                            Create Project
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
