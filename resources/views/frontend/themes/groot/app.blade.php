@php
    $content = [];
    if (isset($page)) {
        $content["page"] = $page;
    }
    if (isset($post)) {
        $content["post"] = $post;
    }
@endphp

<x-frontend-layout :content="$content">
    <div class="groot-theme flex flex-col min-h-screen">
        <header class="bg-primary text-white">
            <div class="grid grid-cols-3 p-5 lg:p-10">
                <div class="lg:order-first flex items-center">
                    @if (config("app.settings.enable_dark_mode"))
                        <div x-data="{
                            darkmode: localStorage.getItem('darkmode') == 'enabled' ? true : false,
                        }" class="ml-3 text-lg cursor-pointer">
                            <i onclick="enableDarkMode()" x-on:click="darkmode = true" x-show="!darkmode" class="fas fa-moon"></i>
                            <i onclick="disableDarkMode()" x-on:click="darkmode = false" x-show="darkmode" class="fas fa-sun hgi-sun-03 text-yellow-500"></i>
                        </div>
                    @endif
                </div>
                <div class="logo flex justify-center">
                    <a href="{{ Util::localizeRoute("home") }}">
                        @if (config("app.settings.logo") && Illuminate\Support\Facades\Storage::disk("public")->has(config("app.settings.logo")))
                            <img class="max-w-40" src="{{ url("storage/" . config("app.settings.logo")) }}" alt="logo" />
                        @elseif (Illuminate\Support\Facades\Storage::disk("public")->has("images/custom-logo.png"))
                            <img class="max-w-40" src="{{ url("storage/images/custom-logo.png") }}" alt="logo" />
                        @else
                            <img class="max-w-40" src="{{ asset("images/logo.png") }}" alt="logo" />
                        @endif
                    </a>
                </div>
                <div class="flex gap-5 items-center justify-end">
                    @if (auth()->check())
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex text-sm border border-gray-300 dark:border-gray-600 rounded-full focus:outline-none focus:border-gray-300 dark:focus:border-gray-600 transition">
                                        <img class="size-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                                            {{ Auth::user()->name }}

                                            <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __("Manage Account") }}
                                </div>
                                <x-dropdown-link href="{{ Util::localizeRoute('profile') }}">
                                    {{ __("Profile") }}
                                </x-dropdown-link>
                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __("API Tokens") }}
                                    </x-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100 dark:border-gray-700 my-1"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route("logout") }}" x-data>
                                    @csrf

                                    <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                        {{ __("Log Out") }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @endif

                    <div class="lg:hidden flex items-center gap-3" x-data="{ open: false }">
                        <button @click="open = !open">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div x-show="open" class="fixed top-0 left-0 w-screen h-screen backdrop-blur-sm bg-black/50 z-50 py-10">
                            <button @click="open = false" class="absolute top-5 right-5 p-2 text-lg">
                                <i class="fas fa-times"></i>
                            </button>
                            @livewire("frontend.nav")
                        </div>
                    </div>

                    <div class="hidden lg:block relative">
                        <form action="{{ route("locale") }}" id="locale-form" method="post">
                            @csrf
                            <select class="border-gray-300 dark:border-gray-600 block appearance-none cursor-pointer py-1 rounded-md focus:outline-none bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300" name="locale" id="locale" onchange="event.target.closest('form').submit()">
                                @foreach (config("app.settings.languages") as $code => $language)
                                    @if ($language["is_active"])
                                        <option {{ app()->getLocale() == $code ? "selected" : "" }} value="{{ $code }}">{{ $language["label"] }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block pb-5">
                @livewire("frontend.nav")
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 pb-5 lg:pb-10">
                <div class="flex justify-center items-center max-w-full m-4 adz-one">{!! config("app.settings.ads.one") !!}</div>

                @livewire("frontend.actions", ["in_app" => isset($page) || isset($category) || isset($post) || isset($profile) ? true : false])

                <div class="flex justify-center items-center max-w-full m-4 adz-five">{!! config("app.settings.ads.five") !!}</div>
            </div>
        </header>
        <div class="flex-1 grid grid-cols-1 lg:grid-cols-6 gap-5 bg-gray-100 dark:bg-gray-900 py-5 lg:py-10">
            <div class="flex justify-center items-center max-w-full adz-two">{!! config("app.settings.ads.two") !!}</div>

            <div class="col-span-4 mx-5 lg:mx-0">
                @if (isset($page))
                    @livewire("frontend.page", ["page" => $page])
                @elseif (isset($post))
                    @livewire("frontend.post", ["post" => $post])
                @elseif (isset($category))
                    <main class="category flex-1 p-5">
                        <h1 class="text-xl font-bold text-gray-900 dark:text-white">{{ __("Category") }}: {{ $category->name }}</h1>
                        @include("frontend.common.posts", ["posts" => $posts])
                    </main>
                @elseif (isset($profile))
                    @include("frontend.common.profile")
                @else
                    @livewire("frontend.app")
                @endif
                @if (isset($in_page->content))
                    <div class="in-app-page page py-5 lg:pt-10 flex justify-center">
                        @livewire("frontend.page", ["page" => $in_page])
                    </div>
                @endif
            </div>

            <div class="flex justify-center items-center max-w-full adz-three">{!! config("app.settings.ads.three") !!}</div>
        </div>
        <footer class="bg-gray-800 dark:bg-gray-950 px-6 py-4 text-white text-sm">
            <div class="flex items-center justify-center lg:hidden mb-5">
                @foreach (config("app.settings.socials", []) as $social)
                    <a href="{{ $social["link"] }}" target="_blank" class="ml-2 text-lg text-gray-200 hover:text-gray-300" rel="noopener noreferrer"><i class="{{ $social["icon"] }}"></i></a>
                @endforeach
            </div>
            <div class="flex flex-col lg:flex-row gap-5 justify-between items-center">
                <div class="flex space-x-3">
                    @foreach (\App\Models\Menu::where("status", true)->where("location", "secondary")->orderBy("order")->get() as $menu)
                        <a href="{{ Util::localizeUrl($menu->link) }}" class="text-white hover:text-gray-300 hover:underline">
                            {{ $menu->name }}
                        </a>
                        @if (! $loop->last)
                            <span class="opacity-50">•</span>
                        @endif
                    @endforeach
                </div>
                <div class="opacity-75 text-gray-300">{{ __("Copyright") }} &copy; {{ date("Y") }} {{ config("app.settings.name") }}.</div>
                <div class="hidden lg:block">
                    @foreach (config("app.settings.socials", []) as $social)
                        <a href="{{ $social["link"] }}" target="_blank" class="ml-2 text-lg text-gray-200 hover:text-gray-300" rel="noopener noreferrer"><i class="{{ $social["icon"] }}"></i></a>
                    @endforeach
                </div>
            </div>
        </footer>
    </div>
</x-frontend-layout>
