<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin | PUH - President University Research & Teaching Hospital</title>

    <!-- Tailwind CSS (Vite) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>

    <!-- FontAwesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    
    <style>
        /* Fallback if needed, though strictly tailwind classes are used */
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="h-full" x-data="{ sidebarOpen: false }">

    <div class="min-h-full">
        <!-- Off-canvas menu for mobile -->
        <div x-show="sidebarOpen" class="relative z-50 lg:hidden" x-cloak role="dialog" aria-modal="true">
            <div x-show="sidebarOpen" x-transition.opacity class="fixed inset-0 bg-primary/80"></div>
            <div class="fixed inset-0 flex">
                <div x-show="sidebarOpen" 
                     x-transition:enter="transition ease-in-out duration-300 transform"
                     x-transition:enter-start="-translate-x-full"
                     x-transition:enter-end="translate-x-0"
                     x-transition:leave="transition ease-in-out duration-300 transform"
                     x-transition:leave-start="translate-x-0"
                     x-transition:leave-end="-translate-x-full"
                     class="relative mr-16 flex w-full max-w-xs flex-1">
                    <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                        <button type="button" @click="sidebarOpen = false" class="-m-2.5 p-2.5">
                            <span class="sr-only">Close sidebar</span>
                            <i class="fas fa-times text-white text-xl"></i>
                        </button>
                    </div>
                    <!-- Mobile Sidebar component -->
                    <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-slate-100 px-6 pb-4 ring-1 ring-white/10">
                        <div class="flex h-16 shrink-0 items-center">
                            <span class="text-white text-xl font-bold">Admin Panel</span>
                        </div>
                        <nav class="flex flex-1 flex-col">
                            <ul role="list" class="flex flex-1 flex-col gap-y-7">
                                <li>
                                    <ul role="list" class="-mx-2 space-y-1">
                                        <li>
                                            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'bg-primary-dark text-secondary' : 'text-gray-400 hover:text-white hover:bg-slate-400' }} group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                                <i class="fas fa-tachometer-alt text-lg w-6 shrink-0 text-center"></i>
                                                Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.users.index') }}" class="{{ request()->routeIs('admin.users.*') ? 'bg-primary-dark text-secondary' : 'text-gray-400 hover:text-white hover:bg-slate-400' }} group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                                <i class="fas fa-users text-lg w-6 shrink-0 text-center"></i>
                                                Users
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.doctors.index') }}" class="{{ request()->routeIs('admin.doctors.*') ? 'bg-primary-dark text-secondary' : 'text-gray-400 hover:text-white hover:bg-slate-400' }} group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                                <i class="fas fa-user-md text-lg w-6 shrink-0 text-center"></i>
                                                Leaders
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.settings.index') }}" class="{{ request()->routeIs('admin.settings.*') ? 'bg-primary-dark text-secondary' : 'text-gray-400 hover:text-white hover:bg-slate-400' }} group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                                <i class="fas fa-cog text-lg w-6 shrink-0 text-center"></i>
                                                Settings (Medsos)
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
            <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-slate-100 px-6 pb-4">
                <div class="flex h-16 shrink-0 items-center">
                    <img src="{{ asset('images/navbar-logo.png') }}" alt="Logo" class="h-10 w-auto">
                </div>
                <nav class="flex flex-1 flex-col">
                    <ul role="list" class="flex flex-1 flex-col gap-y-7">
                        <li>
                            <ul role="list" class="-mx-2 space-y-1">
                                <li>
                                    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'bg-primary-dark text-secondary' : 'text-gray-400 hover:text-white hover:bg-slate-400' }} group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                        <i class="fas fa-tachometer-alt text-lg w-6 shrink-0 text-center"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.users.index') }}" class="{{ request()->routeIs('admin.users.*') ? 'bg-primary-dark text-secondary' : 'text-gray-400 hover:text-white hover:bg-slate-400' }} group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                        <i class="fas fa-users text-lg w-6 shrink-0 text-center"></i>
                                        Users
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.doctors.index') }}" class="{{ request()->routeIs('admin.doctors.*') ? 'bg-primary-dark text-secondary' : 'text-gray-400 hover:text-white hover:bg-slate-400' }} group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                        <i class="fas fa-user-md text-lg w-6 shrink-0 text-center"></i>
                                        Leaders
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.settings.index') }}" class="{{ request()->routeIs('admin.settings.*') ? 'bg-primary-dark text-secondary' : 'text-gray-400 hover:text-white hover:bg-slate-400' }} group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                        <i class="fas fa-cog text-lg w-6 shrink-0 text-center"></i>
                                        Settings (Medsos)
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="lg:pl-72">
            <!-- Topbar -->
            <div class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
                <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden" @click="sidebarOpen = true">
                    <span class="sr-only">Open sidebar</span>
                    <i class="fas fa-bars text-xl h-6 w-6 flex items-center justify-center"></i>
                </button>

                <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
                    <div class="relative flex flex-1"></div>
                    <div class="flex items-center gap-x-4 lg:gap-x-6">
                        <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-200"></div>
                        <!-- Profile dropdown -->
                        <div class="relative" x-data="{ open: false }">
                            <button type="button" class="-m-1.5 flex items-center p-1.5" @click="open = !open" @click.outside="open = false">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full bg-gray-50" src="https://ui-avatars.com/api/?name=Admin&background=random" alt="">
                                <span class="hidden lg:flex lg:items-center">
                                    <span class="ml-4 text-sm font-semibold leading-6 text-gray-900" aria-hidden="true">Admin User</span>
                                    <i class="fas fa-chevron-down ml-2 text-xs text-gray-400"></i>
                                </span>
                            </button>
                            <div x-show="open" 
                                 x-transition:enter="transition ease-out duration-100" 
                                 x-transition:enter-start="transform opacity-0 scale-95" 
                                 x-transition:enter-end="transform opacity-100 scale-100" 
                                 x-transition:leave="transition ease-in duration-75" 
                                 x-transition:leave-start="transform opacity-100 scale-100" 
                                 x-transition:leave-end="transform opacity-0 scale-95" 
                                 class="absolute right-0 z-10 mt-2.5 w-48 origin-top-right rounded-xl bg-white py-2 shadow-lg ring-1 ring-slate-100 focus:outline-none border border-slate-100" role="menu" x-cloak>
                                <a href="{{ route('home') }}" class="block px-4 py-2 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors" role="menuitem">
                                    <div class="flex items-center">
                                        <i class="fas fa-home h-4 w-4 mr-2 flex items-center justify-center"></i>
                                        Kembali ke Home
                                    </div>
                                </a>
                                <form method="POST" action="{{ route('logout') }}" class="block w-full m-0 p-0">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors">
                                        <div class="flex items-center">
                                            <i class="fas fa-sign-out-alt h-4 w-4 mr-2 flex items-center justify-center"></i>
                                            Logout
                                        </div>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            <main class="py-10">
                <div class="px-4 sm:px-6 lg:px-8">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    @stack('scripts')
</body>
</html>
