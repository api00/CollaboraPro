@extends('home.layouts.app')

@section('content')
    <!-- Login Section -->
    <section class="bg-gradient-to-r from-indigo-900 via-purple-900 to-gray-900 text-gray-100 py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto bg-gray-800 p-8 rounded-lg shadow-lg flex flex-col md:flex-row items-center justify-between">
                <!-- Left Column (Image Placeholder) -->
                <div class="w-full md:w-1/2 pr-0 md:pr-4 mb-8 md:mb-0">
                    <div class="hidden md:block"
                         style="width: 100%; height: 0; padding-bottom: 100%; position: relative;">
                        <img src="{{ asset('images/login.jpeg') }}" alt="Login Image"
                             class="absolute inset-0 w-full h-full object-cover rounded-lg shadow-lg">
                    </div>
                </div>

                <!-- Right Column (Login Form) -->
                <div class="w-full md:w-1/2 pl-0 md:pl-8">
                    <h2 class="text-3xl font-bold mb-6 text-center md:text-left"
                        style="font-family: 'Space Grotesk', sans-serif;">Login to CollaboraPro</h2>
                    <br>
                    <!-- Display Validation Errors -->
                    @if ($errors->any())
                        <div class="bg-red-500 text-white p-4 rounded-lg mb-6">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Display Authentication Error -->
                    @if (session('error'))
                        <div class="bg-red-500 text-center font-bold text-white p-4 rounded-lg mb-6">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Login Form -->
                    <form action="{{ route('login') }}" method="POST" class="max-w-sm mx-auto mb-6">
                        @csrf
                        <div class="mb-5">
                            <label for="email" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white pb-1">Your email</label>
                            <input type="email" id="email" name="email"
                                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                   placeholder="name@flowbite.com" required />
                        </div>

                        <div class="mb-5">
                            <label for="password" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white pb-1">Your password</label>
                            <input type="password" id="password" name="password"
                                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                   required />
                        </div>
                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full">
                            Login
                        </button>
                    </form>

                    <div class="text-center">
                        <a href="#"
                           class="inline-block font-bold text-lg text-blue-500 align-baseline hover:text-blue-800">
                            Forgot Password?
                        </a>
                    </div>

                    <!-- Register Link -->
                    <div class="text-center mt-4">
                        <p class="text-gray-400">Don't have an account?</p>
                        <br>
                        <a href="/register"
                           class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full">Create
                            an account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
