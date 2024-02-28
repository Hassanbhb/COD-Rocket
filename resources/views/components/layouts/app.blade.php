<!DOCTYPE html>
<html x-init="$store.darkMode" x-bind:class="{ 'dark': $store.darkMode.on }" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link media="(prefers-color-scheme: dark)" rel="icon" href="/favicon-dark.ico" />
    <link media="(prefers-color-scheme: light)" rel="icon" href="/favicon-light.ico" />

    <title>@yield('title') - {{ config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/app.css?v=' . time()) }}">

    @livewireStyles
    @livewireScriptConfig
</head>

<body class="antialiased bg-gray-100 text-gray-800 font-body dark:text-gray-100 dark:bg-gray-700">
    <x-dialog.sideover id="notifications" title="Notifications">
        work
    </x-dialog.sideover>

    {{-- desktop menu --}}
    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 shadow w-72 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="overflow-y-auto h-full flex flex-col bg-white dark:bg-gray-800">
            <span data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" x-data="{ open: false }"
                x-on:click="open = !open"
                class="absolute lg:hidden -right-9 top-3.5 rounded-r-full px-2.5 py-2 text-gray-900 bg-white shadow -z-20 dark:bg-gray-800 dark:text-white">
                <x-ui.icon class="transition-transform !w-4" x-bind:class="open && 'rotate-180'"
                    name="chevron-double-right" />
            </span>

            <div class="flex w-full items-center p-6">
                <a class="text-xl font-semibold" href="/">
                    <x-logo class="h-8" />
                </a>
            </div>

            <nav class="h-full flex-1 z-30 px-6 py-4 overflow-y-auto dark:bg-gray-800 space-y-6">
                @include('deliverer.layout.sidebar')
            </nav>

            <div class="px-6 py-4">
                <livewire:merchant.balance.balance-badge />
            </div>
        </div>
    </aside>

    <div class="mx-auto sm:!ml-72">
        <section class="bg-white dark:bg-gray-800 shadow">
            {{-- topbar --}}
            <div class="px-5 py-4 bg-primary">
                <div class="relative flex gap-8 items-center w-max ml-auto">
                    <ul class="flex lg:justify-end space-x-6">
                        <li>
                            <button data-dropdown-toggle="language-menu"
                                class="flex items-center gap-2 text-white/60 hover:text-white">
                                <x-ui.icon name="language" />
                                <x-ui.icon name="chevron-down" class="!w-3" />
                            </button>

                            <x-menu.dropdown id="language-menu" class="!top-3 !w-32">
                                <x-menu.dropdown.item>English</x-menu.dropdown.item>
                                <x-menu.dropdown.item>العربية</x-menu.dropdown.item>
                            </x-menu.dropdown>
                        </li>

                        <li class="w-px h-5 bg-white/20"></li>

                        <li class="relative" data-drawer-target="notifications" data-drawer-show="notifications"
                            data-drawer-placement="right">
                            <div
                                class="absolute inline-flex items-center justify-center px-1.5 h-6 text-xs font-bold text-white bg-red-500 border-2 border-primary rounded-full -top-3.5 end-2">
                                2</div>
                            <x-ui.icon name="bell" class="text-white/60 hover:text-white" />
                        </li>

                        <li class="relative">
                            <a class="text-white/60 hover:text-white" href="#">
                                <div
                                    class="absolute inline-flex items-center justify-center px-1.5 h-6 text-xs font-bold text-white bg-red-500 border-2 border-primary rounded-full -top-3.5 end-2">
                                    2</div>
                                <x-ui.icon name="inbox" />
                            </a>
                        </li>
                    </ul>

                    <span class="w-px h-5 bg-white/20"></span>

                    <div class="block">
                        <button data-dropdown-toggle="user-menu" class="flex items-center gap-2">
                            <img class="w-9 h-9 rounded-md object-cover object-right"
                                src="https://ui-avatars.com/api/?name=mohammed&background=fff&color=000" alt="">
                            <x-ui.icon name="chevron-down" class="!w-4 text-white" />
                        </button>

                        <x-menu.dropdown id="user-menu" class="!-left-3 !top-1 w-52">
                            <x-menu.dropdown.item class="!block dark:hover:!bg-transparent hover:bg-transparent !p-2.5">
                                <strong class="capitalize">mohammed</strong>
                                <p class="font-medium truncate text-xs text-gray-500 dark:text-gray-400">
                                    mohammed@gmail.com</p>

                                <x-ui.button-groups class="mt-4 w-full" x-data>
                                    <x-ui.button-groups.item x-on:click="$store.darkMode.enable()"
                                        x-bind:class="{ 'text-white !bg-secondary hover:!text-white !dark:bg-secondary': $store
                                                .darkMode.on }">
                                        <x-ui.icon class="!w-4" name="moon" />
                                        <small>{{ __('Dark') }}</small>
                                </x-ui.button-groups>
                                <x-ui.button-groups.item x-on:click="$store.darkMode.disable()"
                                    x-bind:class="{ 'text-white !bg-secondary hover:!text-white !dark:bg-secondary': !$store.darkMode
                                            .on }">
                                    <x-ui.icon class="!w-4" name="sun" />
                                    <small>{{ __('Light') }}</small>
                                    </x-ui.button-groups>
                                    </x-ui.button-groups>
                            </x-menu.dropdown.item>

                            <ul class="py-2 text-sm">
                                <x-menu.dropdown.item icon="pencil-square">
                                    <a href="#">{{ __('Edit profile') }}</a>
                                </x-menu.dropdown.item>
                                <x-menu.dropdown.item icon="chat-bubble-oval-left-ellipsis">
                                    <a href="#">{{ __('Feedback') }}</a>
                                </x-menu.dropdown.item>
                            </ul>

                            <x-menu.dropdown.item icon="power">
                                <form method="post" class="flex items-center gap-3">
                                    @csrf
                                    <button>{{ __('Sign out') }}</button>
                                </form>
                            </x-menu.dropdown.item>
                        </x-menu.dropdown>
                    </div>
                </div>
            </div>

            {{-- breadcrumps --}}
            <x-ui.breadcrumps class="flex items-center py-4 group px-4">
                <x-ui.breadcrumps.item icon="home" path="home">{{ 'Dashboard' }}</x-ui.breadcrumps.item>
                @yield('breadcrumps')
            </x-ui.breadcrumps>
        </section>

        <div class="container px-4 py-7 mx-auto relative">
            <x-dialog.toast />

            {{ $slot }}
        </div>
    </div>

    <script src="{{ asset('scripts/app.js') }}"></script>
</body>

</html>
