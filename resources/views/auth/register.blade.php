@extends('home.layouts.app')

@section('content')
    <!-- Container -->
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col (Image) -->
                <div
                    class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg overflow-hidden"
                >
                    <img src="{{ asset('images/registration.jpeg') }}" alt="" class="w-full h-auto object-cover">
                </div>
                <!-- Col (Form) -->
                <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Create an Account!</h3>
                    <form method="POST" action="{{ route('register') }}" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                        @csrf
                        <!-- Display validation errors -->
                        @if ($errors->any())
                            <div class="mb-4">
                                <ul class="bg-red-600 mt-3 list-disc list-inside text-lg p-4 text-white mb-3">
                                    @foreach ($errors->all() as $error)
                                        <li style="list-style-type: none;text-align: center;font-weight: bold">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="mb-4">
                            <label for="account-type" class="block mb-2 text-sm font-bold text-gray-700">Account Type</label>
                            <select id="account-type" name="account_type"
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    required>
                                <option value="individual">Individual</option>
                                <option value="company">Company</option>
                            </select>
                        </div>
                        <div id="company-fields" class="mb-4" style="display: none;">
                            <label for="company_name" class="block mb-2 text-sm font-bold text-gray-700">Company Name</label>
                            <input type="text" id="company_name" name="company_name"
                                   class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                   value="{{ old('company_name') }}"/>
                        </div>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label for="name" class="block mb-2 text-sm font-bold text-gray-700">Your Name</label>
                                <input type="text" id="name" name="name"
                                       class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                       placeholder="Your Name" value="{{ old('name') }}" required/>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block mb-2 text-sm font-bold text-gray-700">Your email</label>
                            <input type="email" id="email" name="email"
                                   class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                   placeholder="name@flowbite.com" value="{{ old('email') }}" required/>
                        </div>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label for="password" class="block mb-2 text-sm font-bold text-gray-700">Your password</label>
                                <input type="password" id="password" name="password"
                                       class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                       placeholder="******************" required/>
                            </div>
                            <div class="md:ml-2">
                                <label for="password_confirmation" class="block mb-2 text-sm font-bold text-gray-700">Repeat password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                       class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                       placeholder="******************" required/>
                            </div>
                        </div>
                        <div class="mb-6 text-center">
                            <button type="submit"
                                    class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                                Register Account
                            </button>
                        </div>
                        <hr class="mb-6 border-t"/>
                        <div class="text-center">
                            <a href="#"
                               class="inline-block font-bold text-lg text-blue-500 align-baseline hover:text-blue-800">
                                Forgot Password?
                            </a>
                        </div>

                        <div class="text-center mt-3">
                            <a href="/login"
                               class="inline-block font-semibold text-lg text-blue-500 align-baseline hover:text-blue-800">
                                Already have an account? Login!
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
