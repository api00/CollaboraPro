@extends('dashboard.layouts.app')
@section('content')
    <div class="px-4 py-8">
        <div id="tab-content" class="container mx-auto px-4 ">
            @include('dashboard.users.partials.home')
            @include('dashboard.users.partials.project')
            @include('dashboard.users.partials.task')
            @include('dashboard.users.partials.message')
            @include('dashboard.users.partials.notification')
            @include('dashboard.users.partials.profile')
            <!-- Settings Content -->
            <div id="settings" class="tab-content hidden bg-white-cream-gradient p-6 rounded-lg shadow-lg">
                <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-6">
                    <!-- Settings Menu -->
                    <div class="col-span-1 bg-gray-800 rounded-lg p-6 shadow-lg">
                        <h3 class="text-2xl font-bold text-white mb-6">Settings Menu</h3>
                        <ul class="space-y-4 text-lg">
                            <li>
                                <a href="#account-settings-section" class="settings-menu-link text-gray-300 hover:text-white block py-2 font-grotesk text-xl font-bold transition duration-300 border-b-2 border-transparent hover:border-white" data-target="account-settings-section">Account Settings</a>
                            </li>
                            <li>
                                <a href="#notification-settings-section" class="settings-menu-link text-gray-300 hover:text-white block py-2 font-grotesk text-xl font-bold transition duration-300 border-b-2 border-transparent hover:border-white" data-target="notification-settings-section">Notification Settings</a>
                            </li>
                            <li>
                                <a href="#logout-section" class="settings-menu-link text-gray-300 hover:text-white block py-2 font-grotesk text-xl font-bold transition duration-300 border-b-2 border-transparent hover:border-white" data-target="logout-section">Logout</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Settings Details -->
                    <div class="col-span-3 bg-white rounded-lg p-6 shadow-lg">
                        <!-- Account Settings -->
                        <div id="account-settings-section" class="settings-details">
                            <h4 class="text-2xl font-bold text-gray-800 mb-4">Account Settings</h4>
                            <!-- Update Password Form -->
                            <div class="mb-6">
                                <h5 class="text-xl font-semibold text-gray-700 mb-3">Update Password</h5>
                                <form>
                                    <div class="mb-4">
                                        <label for="current-password" class="block text-gray-700 font-semibold mb-2">Current Password</label>
                                        <input type="password" id="current-password" class="w-full p-2 border rounded-md focus:ring focus:ring-blue-200">
                                    </div>
                                    <div class="mb-4">
                                        <label for="new-password" class="block text-gray-700 font-semibold mb-2">New Password</label>
                                        <input type="password" id="new-password" class="w-full p-2 border rounded-md focus:ring focus:ring-blue-200">
                                    </div>
                                    <div class="mb-4">
                                        <label for="confirm-password" class="block text-gray-700 font-semibold mb-2">Confirm Password</label>
                                        <input type="password" id="confirm-password" class="w-full p-2 border rounded-md focus:ring focus:ring-blue-200">
                                    </div>
                                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">Update Password</button>
                                </form>
                            </div>
                            <!-- Delete Subscription -->
                            <div>
                                <h5 class="text-xl font-semibold text-gray-700 mb-3">Delete Subscription</h5>
                                <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition">Delete Subscription</button>
                            </div>
                        </div>
                        <!-- Notification Settings -->
                        <div id="notification-settings-section" class="settings-details hidden">
                            <h4 class="text-2xl font-bold text-gray-800 mb-4">Notification Settings</h4>
                            <form>
                                <div class="mb-4">
                                    <label for="email-notifications" class="block text-gray-700 font-semibold mb-2">Email Notifications</label>
                                    <input type="checkbox" id="email-notifications" class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                </div>
                                <div class="mb-4">
                                    <label for="push-notifications" class="block text-gray-700 font-semibold mb-2">Push Notifications</label>
                                    <input type="checkbox" id="push-notifications" class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                </div>
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">Save Changes</button>
                            </form>
                        </div>
                        <!-- Logout -->
                        <div id="logout-section" class="settings-details hidden">
                            <h4 class="text-2xl font-bold text-gray-800 mb-4">Logout</h4>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="bg-red-500 text-white text-xl px-6 py-3 rounded-md hover:bg-red-600 transition">Logout</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

