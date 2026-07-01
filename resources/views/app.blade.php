<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <title>PresiMedic - Hospital for you and your family</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Hospital, Medical Care, PresiMedic" name="keywords">
    <meta content="Best Medical Care For Yourself and Your Family" name="description">

    <!-- Favicon -->
    <link href="{{ asset('favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Vite Styles/Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Roboto Condensed', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-700 antialiased min-h-screen flex flex-col">
    
    {{-- Notification Toast --}}
    @if(session('success') || session('error') || $errors->any())
    <div id="notification-toast" class="fixed top-24 right-6 z-50 max-w-md w-full bg-white rounded-xl shadow-2xl border-l-4 transform transition-all duration-500 translate-x-full opacity-0 {{ session('success') ? 'border-emerald-500' : 'border-red-500' }}">
        <div class="p-4 flex items-start gap-3">
            <div class="flex-shrink-0 mt-0.5">
                @if(session('success'))
                    <i class="fas fa-check-circle text-emerald-500 text-xl"></i>
                @else
                    <i class="fas fa-exclamation-circle text-red-500 text-xl"></i>
                @endif
            </div>
            
            <div class="flex-grow">
                <h5 class="font-bold text-slate-800 text-sm">
                    {{ session('success') ? 'Berhasil!' : 'Oops, Terjadi Kesalahan!' }}
                </h5>
                <p class="text-xs text-slate-500 mt-1 leading-relaxed">
                    @if(session('success'))
                        {{ session('success') }}
                    @elseif(session('error'))
                        {{ session('error') }}
                    @elseif($errors->any())
                        {{ $errors->first() }}
                    @endif
                </p>
            </div>
            
            <button onclick="dismissNotification()" class="text-slate-400 hover:text-slate-600 transition-colors p-1">
                <i class="fas fa-times text-sm"></i>
            </button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toast = document.getElementById('notification-toast');
            
            setTimeout(() => {
                toast.classList.remove('translate-x-full', 'opacity-0');
                toast.classList.add('translate-x-0', 'opacity-100');
            }, 150);
            setTimeout(() => {
                dismissNotification();
            }, 4000);
        });

        function dismissNotification() {
            const toast = document.getElementById('notification-toast');
            if (toast) {
                toast.classList.remove('translate-x-0', 'opacity-100');
                toast.classList.add('translate-x-full', 'opacity-0');
                setTimeout(() => { toast.remove(); }, 500);
            }
        }
    </script>
    @endif

    {{-- Top Bar --}}
    <div class="w-full bg-white border-b border-slate-100 py-2 hidden lg:block">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center text-sm text-slate-500">
                <div class="flex items-center space-x-6">
                    <a href="tel:+0123456789" class="hover:text-primary transition-colors flex items-center">
                        <i class="bi bi-telephone text-primary mr-2"></i>
                        <span>+012 345 6789</span>
                    </a>
                    <span class="text-slate-200">|</span>
                    <a href="mailto:info@president.ac.id" class="hover:text-primary transition-colors flex items-center">
                        <i class="bi bi-envelope text-primary mr-2"></i>
                        <span>info@president.ac.id</span>
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <a class="text-slate-400 hover:text-primary transition-colors" href="#!" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-slate-400 hover:text-primary transition-colors" href="#!" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-slate-400 hover:text-primary transition-colors" href="#!" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-slate-400 hover:text-primary transition-colors" href="#!" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-slate-400 hover:text-primary transition-colors" href="#!" aria-label="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md shadow-sm border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-2">
                        <i class="fa fa-clinic-medical text-3xl text-primary"></i>
                        <span class="text-2xl font-bold tracking-wider text-secondary uppercase">PresiMedic</span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <nav class="hidden lg:flex space-x-1 items-center">
                    <a href="{{ route('home') }}" class="px-4 py-2 rounded-md text-base font-medium transition-colors {{ request()->routeIs('home') ? 'text-primary bg-slate-50' : 'text-slate-600 hover:text-primary hover:bg-slate-50' }}">Home</a>
                    <a href="{{ route('about') }}" class="px-4 py-2 rounded-md text-base font-medium transition-colors {{ request()->routeIs('about') ? 'text-primary bg-slate-50' : 'text-slate-600 hover:text-primary hover:bg-slate-50' }}">About</a>
                    <a href="{{ route('service') }}" class="px-4 py-2 rounded-md text-base font-medium transition-colors {{ request()->routeIs('service') ? 'text-primary bg-slate-50' : 'text-slate-600 hover:text-primary hover:bg-slate-50' }}">Service</a>
                    <a href="{{ route('price') }}" class="px-4 py-2 rounded-md text-base font-medium transition-colors {{ request()->routeIs('price') ? 'text-primary bg-slate-50' : 'text-slate-600 hover:text-primary hover:bg-slate-50' }}">Pricing</a>
                    <a href="{{ route('contact') }}" class="px-4 py-2 rounded-md text-base font-medium transition-colors {{ request()->routeIs('contact') ? 'text-primary bg-slate-50' : 'text-slate-600 hover:text-primary hover:bg-slate-50' }}">Contact</a>
                    
                    <!-- MENU ADMIN JIKA LOGIN (DESKTOP) -->
                    @auth
                        <div class="h-6 w-px bg-slate-300 mx-2"></div> <!-- Garis pemisah -->
                        <a href="#" class="px-4 py-2 rounded-md text-base font-medium text-emerald-600 hover:text-emerald-700 hover:bg-emerald-50 transition-colors">
                            <i class="fas fa-cog mr-1"></i> Dashboard
                        </a>
                        <!-- Form Logout agar aman -->
                        <form action="{{ route('logout') ?? '#' }}" method="POST" class="inline m-0 p-0">
                            @csrf
                            <button type="submit" class="px-4 py-2 rounded-md text-base font-medium text-red-600 hover:text-red-700 hover:bg-red-50 transition-colors">
                                <i class="fas fa-sign-out-alt mr-1"></i> Logout
                            </button>
                        </form>
                    @endauth
                </nav>

                <!-- Mobile Menu Button -->
                <div class="flex items-center lg:hidden">
                    <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-slate-400 hover:text-slate-500 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <i class="fas fa-bars text-xl" id="menu-icon-closed"></i>
                        <i class="fas fa-times text-xl hidden" id="menu-icon-open"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="hidden lg:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-white border-t border-slate-100 shadow-lg">
                <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'text-primary bg-slate-50' : 'text-slate-600 hover:text-primary hover:bg-slate-50' }}">Home</a>
                <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('about') ? 'text-primary bg-slate-50' : 'text-slate-600 hover:text-primary hover:bg-slate-50' }}">About</a>
                <a href="{{ route('service') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('service') ? 'text-primary bg-slate-50' : 'text-slate-600 hover:text-primary hover:bg-slate-50' }}">Service</a>
                <a href="{{ route('price') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('price') ? 'text-primary bg-slate-50' : 'text-slate-600 hover:text-primary hover:bg-slate-50' }}">Pricing</a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('contact') ? 'text-primary bg-slate-50' : 'text-slate-600 hover:text-primary hover:bg-slate-50' }}">Contact</a>
                
                <!-- MENU ADMIN JIKA LOGIN (MOBILE) -->
                @auth
                    <div class="border-t border-slate-200 my-2"></div> <!-- Garis pemisah horizontal -->
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-emerald-600 hover:text-emerald-700 hover:bg-emerald-50">
                        <i class="fas fa-cog mr-2"></i> Dashboard
                    </a>
                    <form action="{{ route('logout') ?? '#' }}" method="POST" class="block m-0 p-0">
                        @csrf
                        <button type="submit" class="w-full text-left px-3 py-2 rounded-md text-base font-medium text-red-600 hover:text-red-700 hover:bg-red-50">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </header>
    <!-- Navbar End -->


    <!-- Content Area -->
    <main class="flex-grow">
        @yield('content')
    </main>


    <!-- Footer Start -->
    <footer class="bg-secondary text-slate-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Column 1: Contact -->
                <div>
                    <h4 class="text-white text-lg font-semibold uppercase tracking-wider border-b-4 border-primary pb-3 mb-6 inline-block">Get In Touch</h4>
                    <p class="mb-6 text-slate-400">At PresiMedic, we deliver state-of-the-art care. Reach out to us for any medical emergencies or inquiries.</p>
                    <div class="space-y-4 text-sm">
                        <div class="flex items-start">
                            <i class="fa fa-map-marker-alt text-primary mt-1 mr-3 w-4 text-center"></i>
                            <span>123 Street, New York, USA</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fa fa-envelope text-primary mr-3 w-4 text-center"></i>
                            <a href="mailto:info@example.com" class="hover:text-primary transition-colors">info@example.com</a>
                        </div>
                        <div class="flex items-center">
                            <i class="fa fa-phone-alt text-primary mr-3 w-4 text-center"></i>
                            <a href="tel:+01234567890" class="hover:text-primary transition-colors">+012 345 67890</a>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div>
                    <h4 class="text-white text-lg font-semibold uppercase tracking-wider border-b-4 border-primary pb-3 mb-6 inline-block">Quick Links</h4>
                    <ul class="space-y-3 text-sm">
                        <li>
                            <a href="{{ route('home') }}" class="hover:text-primary transition-colors flex items-center">
                                <i class="fa fa-angle-right mr-2 text-primary"></i>Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="hover:text-primary transition-colors flex items-center">
                                <i class="fa fa-angle-right mr-2 text-primary"></i>About Us
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('service') }}" class="hover:text-primary transition-colors flex items-center">
                                <i class="fa fa-angle-right mr-2 text-primary"></i>Our Services
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('price') }}" class="hover:text-primary transition-colors flex items-center">
                                <i class="fa fa-angle-right mr-2 text-primary"></i>Pricing Plan
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" class="hover:text-primary transition-colors flex items-center">
                                <i class="fa fa-angle-right mr-2 text-primary"></i>Contact Us
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Column 3: Popular Links -->
                <div>
                    <h4 class="text-white text-lg font-semibold uppercase tracking-wider border-b-4 border-primary pb-3 mb-6 inline-block">Popular Links</h4>
                    <ul class="space-y-3 text-sm">
                        <li>
                            <a href="{{ route('home') }}" class="hover:text-primary transition-colors flex items-center">
                                <i class="fa fa-angle-right mr-2 text-primary"></i>Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="hover:text-primary transition-colors flex items-center">
                                <i class="fa fa-angle-right mr-2 text-primary"></i>About Us
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('service') }}" class="hover:text-primary transition-colors flex items-center">
                                <i class="fa fa-angle-right mr-2 text-primary"></i>Our Services
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('price') }}" class="hover:text-primary transition-colors flex items-center">
                                <i class="fa fa-angle-right mr-2 text-primary"></i>Pricing Plan
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" class="hover:text-primary transition-colors flex items-center">
                                <i class="fa fa-angle-right mr-2 text-primary"></i>Contact Us
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Column 4: Newsletter -->
                <div>
                    <h4 class="text-white text-lg font-semibold uppercase tracking-wider border-b-4 border-primary pb-3 mb-6 inline-block">Newsletter</h4>
                    <p class="mb-4 text-slate-400 text-sm">Subscribe to our newsletter to receive the latest updates, medical tips, and news.</p>
                    <form action="#" class="mb-6">
                        <div class="flex">
                            <input type="email" class="w-full px-4 py-3 bg-slate-800 text-white rounded-l border-0 focus:ring-2 focus:ring-primary text-sm placeholder-slate-500" placeholder="Your Email Address" required>
                            <button type="submit" class="bg-primary hover:bg-primary-hover text-secondary font-semibold px-4 py-3 rounded-r text-sm transition-colors uppercase">Sign Up</button>
                        </div>
                    </form>
                    <h5 class="text-primary text-sm font-semibold uppercase tracking-wider mb-3">Follow Us</h5>
                    <div class="flex space-x-2">
                        <a class="w-10 h-10 bg-slate-800 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-all text-slate-400" href="#!" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="w-10 h-10 bg-slate-800 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-all text-slate-400" href="#!" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="w-10 h-10 bg-slate-800 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-all text-slate-400" href="#!" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="w-10 h-10 bg-slate-800 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-all text-slate-400" href="#!" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Copyright Banner -->
        <div class="border-t border-slate-800 bg-[#151e37] py-6 text-sm text-slate-400">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center md:text-left">
                    <div>
                        <p>&copy; <a class="text-primary hover:underline" href="{{ route('home') }}">PresiMedic</a>. All Rights Reserved.</p>
                    </div>
                    <div class="md:text-right">
                        <p>Designed by <span class="text-primary">HTML Codex</span>. Distributed by <span class="text-primary">ThemeWagon</span>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->


    {{-- Floating Buttons --}}
    @auth
        <div class="fixed bottom-6 right-6 flex flex-col gap-3 z-50">
            <a href="{{ url()->current() }}" 
                class="w-14 h-14 bg-white text-slate-500 border border-slate-200 rounded-full flex items-center justify-center shadow-lg hover:bg-red-50 hover:text-danger hover:border-danger hover:scale-110 active:scale-95 transition-all duration-300" 
                title="Batal & Refresh">
                <i class="fas fa-times text-xl"></i>
            </a>

            <button type="submit" form="content-edit-form"
                    class="w-14 h-14 bg-primary text-secondary rounded-full flex items-center justify-center shadow-lg shadow-primary/30 hover:bg-white hover:text-primary hover:scale-110 active:scale-95 transition-all duration-300" 
                    title="Simpan Perubahan">
                <i class="fas fa-save text-xl"></i>
            </button>
        </div>
    @endauth

    <!-- Mobile Navigation Menu Script and Back to Top Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Mobile Menu Toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIconClosed = document.getElementById('menu-icon-closed');
            const menuIconOpen = document.getElementById('menu-icon-open');

            mobileMenuButton.addEventListener('click', () => {
                const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
                mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
                mobileMenu.classList.toggle('hidden');
                menuIconClosed.classList.toggle('hidden');
                menuIconOpen.classList.toggle('hidden');
            });
        });
    </script>
</body>

</html>