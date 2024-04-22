<div class="flex flex-col bg-cyan-300 dark:bg-cyan-800 rounded p-3">
    <div class="flex justify-center items-center gap-6 px-3">
        <img src="{{ asset('assets/user.png') }}" width="51" height="51" alt="user-photo" class="" />
        <div class="flex flex-col justify-center items-center ">
            <h3 class="font-bold text-1xl ">{{Auth::user()->name}}</h3>
            <p>{{Auth::user()->role}} </p>
        </div>
        <a href="#">
            <img class="h-7 w-7" id="dark-mode-toggle"  src="{{ asset('assets/notification.png') }}" alt="notifications" />
        </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
        <img class="h-7 w-7"  src="{{ asset('assets/shutdown.png') }}" alt="logout" />
    </x-dropdown-link>
        </form>
    </div>
</div>