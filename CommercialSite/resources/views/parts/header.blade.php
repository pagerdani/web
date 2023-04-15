<div class="row">
    <div class="col text-center d-flex">
        <div class="col-md-6 text-start">
            <a href="{{ route('home') }}">
                <h1 class="font-semibold dark:text-gray-400 my-5 mx-5" style="font-size: 30px">Cruise now</h1>
            </a>

        </div>
        <div class="col-md-6 ">
            @if (Route::has('login'))
                <div class="text-right  my-5 mx-5">
                    @auth
                        <p class="font-semibold text-gray-600 dark:text-gray-400">Bejelentkezett: {{ \Illuminate\Support\Facades\Auth::user()->first_name }} {{ \Illuminate\Support\Facades\Auth::user()->last_name }}</p>
                    <div class="row">
                        <div class="col">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" style="cursor: pointer" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                    Kilépés
                                </a>
                            </form>
                        </div>
                    </div>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Belépés</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Regisztráció</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</div>
