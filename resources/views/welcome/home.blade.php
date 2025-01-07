<x-layout>
    <main class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="text-center">

            <img src="{{ asset('img/Frame 2 (1).png') }}" alt="Coming Soon" class="img-fluid mb-3">


            <h2 class="mb-3 .text-stylez-cs">COMING SOON</h2>

            <p class="mb-4 .text-stylez-st gradient-color ">STAY TUNED....</p>

            <form class="d-flex flex-column flex-sm-row justify-content-center align-items-center gap-2" method="POST"
                action="/waitingList">
                @csrf
                <div class="email-input-group">
                    <i class="fas fa-envelope email-icon"></i>
                    <input type="email" class="form-control" name="email" placeholder="Email"
                        value="{{ old('email') }}">
                </div>
                <button type="submit" class="btn gradient-button">
                    <i class="fas fa-bell me-2"></i> Notify Me
                </button>
            </form>
        </div>
    </main>
    @error('email')
        <div class="modal fade {{ $message ? 'show' : '' }}" tabindex="-1" role="dialog" data-bs-backdrop="static"
            data-bs-keyboard="false" style="{{ $message ? 'display: block;' : '' }}">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center p-lg-4">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                            <circle class="path circle" fill="none" stroke="#db3646" stroke-width="6"
                                stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                            <line class="path line" fill="none" stroke="#db3646" stroke-width="6" stroke-linecap="round"
                                stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3" />
                            <line class="path line" fill="none" stroke="#db3646" stroke-width="6" stroke-linecap="round"
                                stroke-miterlimit="10" x1="95.8" y1="38" x2="34.4" y2="92.2" />
                        </svg>
                        <h4 class="text-danger mt-3">Invalid email!</h4>
                        <p class="mt-3">{{ $message }}</p>
                        <button type="button" class="btn btn-sm mt-3 btn-danger" data-bs-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                if (document.querySelector('.modal.show')) {
                    const myModal = new bootstrap.Modal(document.querySelector('.modal.show'));
                    myModal.show();
                    document.querySelectorAll('[data-bs-dismiss="modal"]').forEach(button => {
                        button.addEventListener('click', function() {
                            myModal.hide();
                        });
                    });
                }
            });
        </script>
    @enderror


</x-layout>
