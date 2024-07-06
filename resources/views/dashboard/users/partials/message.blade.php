<!-- Chat System -->
<div id="messages" class="tab-content flex flex-col">
    <div class="container mx-auto shadow-lg rounded-lg overflow-hidden bg-white-creme">
        <!-- Chat Header -->
        <div class="px-5 py-2 flex justify-between items-center bg-white border-b-2 border-gray-200">
            <div class="font-bold text-xl text-gray-700">Projects Discussions</div>
            <div class="flex items-center space-x-4">
                <div class="text-lg font-semibold text-gray-600">Welcome, User!</div>
                <img src="https://via.placeholder.com/40" class="object-cover h-10 w-10 rounded-full"
                     alt="User Avatar"/>
            </div>
        </div>
        <!-- End Chat Header -->

        <!-- Chatting -->
        <div class="flex flex-col md:flex-row justify-between">
            <!-- Chat List -->
            <div id="chat-list" class="flex flex-col w-full md:w-1/4 border-r-2 overflow-y-auto bg-white">
                <!-- Search Component -->
                <div class="border-b-2 py-4 px-2">
                    <input type="text" placeholder="Search chats"
                           class="py-2 px-2 border-2 border-gray-300 rounded-2xl w-full bg-gray-100 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                </div>
                <!-- End Search Component -->

                <!-- User List -->
                <div class="flex flex-col space-y-2">
                    <div
                        class="chat-item flex items-center py-4 px-2 hover:bg-gray-100 transition duration-300 cursor-pointer"
                        onclick="openChatWindow()">
                        <img src="https://via.placeholder.com/50" class="object-cover h-12 w-12 rounded-full"
                             alt="User"/>
                        <div class="ml-4">
                            <div class="font-semibold text-gray-800">Project Alpha</div>
                            <span class="text-gray-500">Api : Happy holidays, guys!...</span>
                        </div>
                    </div>
                    <div
                        class="chat-item flex items-center py-4 px-2 hover:bg-gray-100 transition duration-300 cursor-pointer"
                        onclick="openChatWindow()">
                        <img src="https://via.placeholder.com/50" class="object-cover h-12 w-12 rounded-full"
                             alt="User"/>
                        <div class="ml-4">
                            <div class="font-semibold text-gray-800">Project Beta</div>
                            <span class="text-gray-500">Hi Sam, Welcome</span>
                        </div>
                    </div>
                    <div
                        class="chat-item flex items-center py-4 px-2 hover:bg-gray-100 transition duration-300 cursor-pointer"
                        onclick="openChatWindow()">
                        <img src="https://via.placeholder.com/50" class="object-cover h-12 w-12 rounded-full"
                             alt="User"/>
                        <div class="ml-4">
                            <div class="font-semibold text-gray-800">Project Theta</div>
                            <span class="text-gray-500">Lusi: Thanks Everyone</span>
                        </div>
                    </div>
                    <div
                        class="chat-item flex items-center py-4 px-2 hover:bg-gray-100 transition duration-300 cursor-pointer"
                        onclick="openChatWindow()">
                        <img src="https://via.placeholder.com/50" class="object-cover h-12 w-12 rounded-full"
                             alt="User"/>
                        <div class="ml-4">
                            <div class="font-semibold text-gray-800">JavaScript Indonesia</div>
                            <span class="text-gray-500">Evan: Can someone fix this?</span>
                        </div>
                    </div>
                </div>
                <!-- End User List -->
            </div>
            <!-- End Chat List -->

            <!-- Chat Window -->
            <div id="chat-window" class="hidden md:flex w-full md:w-1/2 px-5 flex-col justify-between bg-white-creme">
                <div class="flex items-center justify-between border-b-2 border-gray-200 py-4">
                    <button class="text-lg text-gray-600" onclick="closeChatWindow()">Back</button>
                    <div class="font-semibold text-xl text-gray-700">Project Alpha</div>
                </div>
                <div class="flex-grow py-5 overflow-y-auto chat-messages">
                    <div class="flex justify-end mb-4">
                        <div
                            class="mr-2 py-3 px-4 bg-blue-400 rounded-bl-3xl rounded-tl-3xl rounded-tr-xl text-white shadow-md">
                            Welcome to the group, everyone!
                        </div>
                        <img src="https://via.placeholder.com/30" class="object-cover h-8 w-8 rounded-full" alt="User"/>
                    </div>
                    <div class="flex justify-start mb-4">
                        <img src="https://via.placeholder.com/50" class="object-cover h-8 w-8 rounded-full" alt="User"/>
                        <div
                            class="ml-2 py-3 px-4 bg-gray-400 rounded-br-3xl rounded-tr-3xl rounded-tl-xl text-white shadow-md">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </div>
                    </div>
                    <div class="flex justify-end mb-4">
                        <div
                            class="mr-2 py-3 px-4 bg-blue-400 rounded-bl-3xl rounded-tl-3xl rounded-tr-xl text-white shadow-md">
                            Lorem ipsum dolor sit amet consectetur.
                        </div>
                        <img src="https://via.placeholder.com/30" class="object-cover h-8 w-8 rounded-full" alt="User"/>
                    </div>
                    <div class="flex justify-start mb-4">
                        <img src="https://via.placeholder.com/30" class="object-cover h-8 w-8 rounded-full" alt="User"/>
                        <div
                            class="ml-2 py-3 px-4 bg-gray-400 rounded-br-3xl rounded-tr-3xl rounded-tl-xl text-white shadow-md">
                            Happy holidays, guys!
                        </div>
                    </div>
                </div>
                <div class="py-5 flex items-center">
                    <input
                        class="w-full py-5 px-3 rounded-xl bg-white border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-md"
                        type="text" placeholder="Type your message here..."/>
                    <button
                        class="ml-2 py-5 px-4 bg-blue-500 text-white rounded-xl shadow-md hover:bg-blue-600 transition duration-300">
                        Send
                    </button>
                </div>
            </div>
            <!-- End Chat Window -->

            <!-- Chat Info -->
            <div id="chat-info" class="hidden md:flex w-full md:w-1/4 border-l-2 px-5 bg-white">
                <div class="flex flex-col">
                    <div class="font-semibold text-xl py-4 text-gray-700">Project Alpha Group</div>
                    <img src="https://via.placeholder.com/200" class="object-cover rounded-xl h-64 shadow-md"
                         alt="Group Image"/>
                    <div class="font-semibold py-4 text-gray-600">Created on 22 Sep 2021</div>
                    <div class="font-light text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, perspiciatis!
                    </div>
                </div>
            </div>
            <!-- End Chat Info -->
        </div>
        <!-- End Chatting -->
    </div>
</div>
