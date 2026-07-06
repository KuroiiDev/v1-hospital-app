<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PURTH</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Roboto Condensed', sans-serif;
        }
    </style>
</head>
<body class="bg-slate-100 antialiased">

    {{-- Notification Toast Menggunakan SweetAlert2 --}}
    {{-- @if(session('success') || session('error') || $errors->any()) --}}
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 4000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });

                Toast.fire({
                    icon: "info",
                    title: "Halaman Login",
                    text: "Siahkan login sebagai admin untuk melanjutkan!"
                });
            });
        </script>
    {{-- @endif --}}
    
    <div class="flex min-h-screen items-center justify-center px-4 py-12">
        <div class="w-full max-w-md rounded-2xl bg-white p-8 shadow-xl border border-slate-100 space-y-6">
            
            <div class="text-center">
                <div class="mb-3 flex justify-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo PresiMedic" class="w-20 h-20">
                </div>
                <h2 class="text-2xl font-bold text-primary tracking-tight">Selamat Datang Kembali</h2>
                <p class="text-sm text-secondary mt-1">Silahkan masukkan data Anda untuk login</p>
            </div>

            <form method="POST" action="{{ route('login.auth') }}" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700 mb-1.5">Alamat Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                        class="w-full px-4 py-3 border @error('email') border-red-400 focus:ring-red-200 @else border-slate-200 focus:ring-primary/20 focus:border-primary @enderror rounded-lg focus:ring-4 outline-none transition-all bg-slate-50/50 text-sm placeholder-slate-400"
                        placeholder="you@example.com">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-slate-700 mb-1.5">Password</label>
                    <input type="password" name="password" id="password" required
                        class="w-full px-4 py-3 border @error('email') border-red-400 focus:ring-red-200 @else border-slate-200 focus:ring-primary/20 focus:border-primary @enderror rounded-lg focus:ring-4 outline-none transition-all bg-slate-50/50 text-sm placeholder-slate-400"
                        placeholder="••••••••">
                </div>
                
                <div class="pt-2">
                    <button type="submit"
                        class="w-full bg-primary hover:bg-secondary text-white py-3 rounded-lg font-semibold transition-all duration-300 flex items-center justify-center space-x-2 shadow-md shadow-primary/20 active:scale-[0.98]">
                        <span>Sign In</span>
                        <i class="bi bi-arrow-right text-sm"></i>
                    </button>
                </div>

                @error('email')
                        <span class="text-xs text-red-500 mt-1.5 block font-medium">
                            <i class="fas fa-info-circle mr-1"></i> {{ $message }}
                        </span>
                    @enderror
            </form>

        </div>
    </div>    

</body>
</html>