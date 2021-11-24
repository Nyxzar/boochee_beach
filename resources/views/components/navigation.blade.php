<nav class="w-full fixed top-0 z-50 theme-transition bg-cream">
    <div class="theme-container">
        <div class="w-full lg:w-10/12 px-8 lg:px-0  m-auto">
            <div>
                @if(Route::is('welcome'))
                    <h1 cla ss="flex-shrink-0 flex items-center">
                @else
                    <h2 class="flex-shrink-0 flex items-center">
                @endif
                        <a href="{{ route('welcome') }}"  class=" transition-all" >
                            {{-- <img src="{{asset('images/verdens-barn-logo.svg')}}" alt="Verdens Barn" {{ $attributes }}  class=" w-10/12 md:w-full"  > --}}
                            boochee beach
                        </a>
                @if(Route::is('welcome'))
                    </h1>
                @else
                    </h2>
                @endif
            </div>
        </div>
    </div>
</nav>