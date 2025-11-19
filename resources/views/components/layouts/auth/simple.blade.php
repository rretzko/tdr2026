<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')

        <style>
            #guestForm{
                background-color: white;
                border-top: 1px solid rgba(0,0,0, 0.5);
                border-left: 1px solid rgba(0,0,0, 0.25);
                border-right: 1px solid gray;
                border-bottom: 1px solid gray;
                border-radius: 1rem;
                padding: 1rem;
                box-shadow:5px 5px 20px 0px  darkgray;
                opacity: 0.95;
            }
        </style>

    </head>

    <body
        class="welcome-bg flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col"
        style="background-image:url({{ Storage::disk('s3')->url('backgrounds/swirlGclef.png') }}); background-size:cover; background-repeat:no-repeat;"
    >

        <x-dynamic-component
            :component="str_contains(request()->url(), 'teachers') ? 'teachers.guest-header' : 'students.guest-header'"
        />

        <div class="bg-background flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
            <div class="flex w-full max-w-sm flex-col gap-2">
                {{-- LOGO --}}
{{--                <a href="{{ route('home') }}" class="flex flex-col items-center gap-2 font-medium" wire:navigate>--}}
{{--                    <span class="flex h-9 w-9 mb-1 items-center justify-center rounded-md">--}}
{{--                        <x-app-logo-icon class="size-9 fill-current text-black dark:text-white" />--}}
{{--                    </span>--}}
{{--                    <span class="sr-only">{{ config('app.name', 'TDR') }}</span>--}}
{{--                </a>--}}
                <div class="flex flex-col gap-6">
                    {{ $slot }}
                </div>
            </div>
        </div>
        @fluxScripts
    </body>
</html>
