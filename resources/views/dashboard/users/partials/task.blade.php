<!-- Tasks Section -->
<div id="tasks" class="tab-content hidden bg-gradient-to-tr from-transparent via-light-white to-cream-white ">
    <div class="container mx-auto">
        <!-- Add New Task Button -->
        <div class="flex justify-end mb-4">
            <div class="mb-8 flex justify-start">
                <button id="add-project-btn-task"
                        class="bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-700 hover:to-purple-800 text-white font-bold py-4 px-8 rounded-lg shadow-lg transition duration-300">
                    Add New Task
                </button>
            </div>
            <!-- Modal Background -->
            <div id="modal-bg-task"
                 class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center hidden">
                <!-- Modal Content -->
                <div
                    class="bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 rounded-lg shadow-lg p-8 mx-4 md:w-2/3 lg:w-1/2">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-semibold text-white">Add New Task</h2>
                        <button id="modal-close-btn-task"
                                class="text-white hover:text-gray-200 focus:outline-none">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Form Content -->
                    <form class="space-y-4">
                        <div>
                            <label for="task-name" class="block text-lg font-semibold text-white mb-1">Task Name</label>
                            <input type="text" id="task-name" name="task-name"
                                   class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
                        </div>
                        <div>
                            <label for="task-assignees"
                                   class="block text-lg font-semibold text-white mb-1">Assignees</label>
                            <input type="text" id="task-assignees" name="task-assignees"
                                   class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
                        </div>
                        <div>
                            <label for="task-due-date" class="block text-lg font-semibold text-white mb-1">Due
                                Date</label>
                            <input type="date" id="task-due-date" name="task-due-date"
                                   class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
                        </div>
                        <div>
                            <label for="task-priority"
                                   class="block text-lg font-semibold text-white mb-1">Priority</label>
                            <select id="task-priority" name="task-priority"
                                    class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
                                <option>Low</option>
                                <option>Medium</option>
                                <option>High</option>
                            </select>
                        </div>
                        <div>
                            <label for="task-status" class="block text-lg font-semibold text-white mb-1">Status</label>
                            <select id="task-status" name="task-status"
                                    class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
                                <option>Not Started</option>
                                <option>In Progress</option>
                                <option>Completed</option>
                            </select>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                                Add Task
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Tasks Table -->
        <div class="overflow-x-auto">

            <table class="min-w-full bg-white rounded-lg shadow-lg overflow-hidden">
                <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="p-4">

                    </th>
                    <th class="p-4 text-left">Todo</th>
                    <th class="p-4 text-left">Assigne</th>
                    <th class="p-4 text-left">Due Date</th>
                    <th class="p-4 text-left">Priority</th>
                    <th class="p-4 text-left">Status</th>
                    <th class="p-4 text-left">Created By</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b border-gray-200 hover:bg-gray-100 transition duration-300">
                    <td class="p-4">
                        <input type="checkbox">
                    </td>
                    <td class="p-4">Create design of form</td>
                    <td class="p-4 flex">
                        <img src="https://via.placeholder.com/32" alt="Assignee"
                             class="rounded-full w-8 h-8 mr-2">
                        <img src="https://via.placeholder.com/32" alt="Assignee"
                             class="rounded-full w-8 h-8 mr-2">
                        <img src="https://via.placeholder.com/32" alt="Assignee" class="rounded-full w-8 h-8">
                    </td>
                    <td class="p-4">12-10-2024</td>
                    <td class="p-4">High</td>
                    <td class="p-4">
                        <select class="border rounded px-2 py-1">
                            <option>In Progress</option>
                            <option>Completed</option>
                            <option>Not Started</option>
                        </select>
                    </td>
                    <td class="p-4">John Doe</td>
                </tr>
                <!-- Additional task rows go here -->
                </tbody>
            </table>
        </div>
    </div>
</div>
