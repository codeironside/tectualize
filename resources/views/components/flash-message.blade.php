@if (session()->has('message'))
    <div class="position-fixed top-0 start-50 translate-middle-x bg-danger text-white p-3 rounded shadow fade show"
        role="alert" style="z-index: 1050; transition: opacity 0.3s ease-in-out;" id="flashMessage">
        <p class="mb-0">{{ session('message') }}</p>
    </div>

    <script>
        setTimeout(() => {
            const flashMessage = document.getElementById('flashMessage');
            if (flashMessage) {
                flashMessage.classList.remove('show');
                flashMessage.classList.add('fade');
                setTimeout(() => flashMessage.remove(), 300);
            }
        }, 3000);
    </script>
@endif
