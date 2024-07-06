<div id="profile" class="tab-content container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Sidebar Menu -->
        <div class="col-span-1 bg-gray-800 rounded-lg p-6 shadow-lg">
            <h3 class="text-2xl font-bold text-white mb-6">Profile Menu</h3>
            <ul class="space-y-4 text-lg">
                <li>
                    <a href="#profile-info" class="menu-link text-gray-300 hover:text-white block py-2 font-grotesk text-xl font-bold transition duration-300 border-b-2 border-transparent hover:border-white" data-target="profile-info">Profile Info</a>
                </li>


            </ul>
        </div>

        <!-- Profile Content -->
        <div class="col-span-3 space-y-8">
            <!-- Profile Info Section -->
            <div id="profile-info" class="profile-section bg-gray-200 rounded-lg p-8 shadow-lg">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="w-24 h-24 rounded-full overflow-hidden">
                        <img src="https://via.placeholder.com/150" alt="Profile Picture" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="text-lg font-semibold text-gray-700">{{ $user->name }}</p>
                        <p class="text-gray-600">{{ $user->role }}</p>
                    </div>
                </div>
                <!-- Profile Info Form -->
                <form class="space-y-4" method="POST" action="{{ route('user.profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="name" class="block text-gray-700 font-medium">Full Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500" value="{{ $user->name }}">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 font-medium">Email Address</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500" value="{{ $user->email }}">
                    </div>
                    <div>
                        <label for="current-role" class="block text-gray-700 font-medium">Current Role</label>
                        <select disabled id="current-role" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
                            <option value="{{ $user->role }}" selected>{{ $user->role }}</option>
                        </select>
                    </div>

                    <div>
                        <label for="profile_image" class="block text-gray-700 font-medium">Profile Image</label>
                        <input type="file" id="profile_image" name="profile_image" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500" accept="image/*" onchange="previewImage(event)">
                        <img id="image_preview" src="{{ $user->profile_image }}" alt="Profile Image" class="mt-4 w-32 h-32 rounded-full object-cover" style="display: {{ $user->profile_image ? 'block' : 'none' }};">
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">Update Info</button>
                </form>
            </div>





        </div>
    </div>
</div>
