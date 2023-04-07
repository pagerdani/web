<div class="row">
    <div class="col text-center d-flex">
        <div class="col-md-6 text-start">
            <h1 class="font-semibold dark:text-gray-400 my-5 mx-5" style="font-size: 30px">Cruise now</h1>
        </div>
        <div class="col-md-6 ">
            @if (Route::has('login'))
                <div class="text-right  my-5 mx-5">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</div>