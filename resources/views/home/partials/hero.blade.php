<section class="relative bg-gray-900 text-gray-100 py-20">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/hero2.jpeg') }}" alt="Hero Image" class="w-full h-full object-cover opacity-40">
    </div>
    <!-- Overlay -->
    <div class="absolute inset-0 bg-indigo-900 opacity-80"></div>
    <!-- Content -->
    <div class="relative container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <!-- Hero Content -->
            <div class="text-center md:text-left md:pr-10">
                <h1 class="text-4xl md:text-5xl font-bold mb-6" style="font-family: 'Space Grotesk', sans-serif;">
                    Welcome to CollaboraPro</h1>
                <p class="text-lg md:text-xl mb-8" style="font-family: 'Space Grotesk', sans-serif;">Manage and
                    collaborate on projects seamlessly with our powerful platform.</p>
                <p class="text-lg md:text-xl mb-8 text-gray-400" style="font-family: 'Space Grotesk', sans-serif;">
                    Boost your team's productivity with our intuitive tools, real-time communication features, and
                    comprehensive project management solutions.</p>
                <p class="text-lg md:text-xl mb-8 text-gray-400" style="font-family: 'Space Grotesk', sans-serif;">
                    Join thousands of teams worldwide who trust CollaboraPro to streamline their workflows and
                    achieve their goals more efficiently.</p>
                <a href="/register"
                   class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-bold py-3 px-6 rounded-lg shadow-lg transition duration-300 transform hover:scale-105"
                   style="font-family: 'Space Grotesk', sans-serif;">It's Free, Join Now!</a>
            </div>
            <!-- Hero Image -->
            <div class="mt-10 md:mt-0 relative">
                <img src="{{ asset('images/hero1.jpeg') }}" alt="Hero Image"
                     class="w-full rounded-lg shadow-lg transform transition duration-300 hover:scale-105 opacity-90">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-50 rounded-lg"></div>
                <div class="absolute bottom-4 left-4 text-white text-lg font-bold"
                     style="font-family: 'Space Grotesk', sans-serif;">
                    Collaboration at its Best
                </div>
            </div>
        </div>
    </div>
</section>
