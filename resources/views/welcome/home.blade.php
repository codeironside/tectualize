<x-layout>
    <main class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="text-center">
            <!-- Image -->
            <img src="{{ asset('img/Frame 2 (1).png') }}" alt="Coming Soon" class="img-fluid mb-3">

            <!-- Heading -->
            <h2 class="mb-3 .text-stylez-cs">COMING SOON</h2>

            <!-- Text -->
            <p class="mb-4 .text-stylez-st gradient-color ">STAY TUNED....</p>

            <!-- Input Field and Button -->
            <form class="d-flex flex-column flex-sm-row justify-content-center align-items-center gap-2">
                <div class="email-input-group">
                    <i class="fas fa-envelope email-icon"></i>
                    <input type="email" class="form-control" placeholder="Enter your email">
                </div>
                <button type="submit" class="btn gradient-button">
                    <i class="fas fa-bell me-2"></i> Notify Me
                </button>
            </form>
        </div>
    </main>
</x-layout>
