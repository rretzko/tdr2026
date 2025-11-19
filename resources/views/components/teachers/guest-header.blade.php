<header class="w-full lg:max-w-4xl max-w-[335px] mb-6">
    <div class="flex items-center justify-between gap-4">
        <div class="flex-1"></div>

        <div class="flex-1 text-center">
            <h1 class="text-lg font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">
                TheDirectorsRoom.com
            </h1>
        </div>

        <div class="flex-1 flex justify-end ">
            @if (Route::has('login'))
                <nav class="flex items-center gap-4 text-sm">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Demo
                        </a>
                    @endauth
                </nav>
            @endif
        </div>
    </div>
</header>
