<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - SMPN 8 Padang</title>
    <!-- Favicon -->
    <link rel="icon" type="image/webp" href="{{ asset('images/logo.webp') }}">

    <!-- Optional untuk Apple -->
    <link rel="apple-touch-icon" href="{{ asset('images/logo.webp') }}">
    @vite('resources/css/app.css')

    <!-- Animasi Entry -->
    <style>
        @keyframes fadeInSlideUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-login-card {
            animation: fadeInSlideUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
    </style>
</head>

<!-- Background Gradasi (menyesuaikan warna primary lu) -->

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-primary via-primary-hover to-ink p-4">

    <!-- Card Form Login (Clean Style ala SMA 10) -->
    <div class="bg-canvas w-full max-w-sm rounded-lg shadow-2xl p-8 animate-login-card">

        <!-- Logo & Title -->
        <div class="text-center mb-6">
            <img src="{{ asset('images/logo.webp') }}" alt="Logo SMPN 8 Padang"
                class="w-24 h-auto mx-auto mb-4 object-contain">
            <h2 class="text-xl font-bold text-ink">Login Admin</h2>
        </div>

        <!-- Form -->
        <form action="/portal-admin" method="POST" class="space-y-4">
            @csrf

            <!-- Input Username -->
            <div>
                <input type="text" id="username" name="username"
                    class="w-full bg-canvas border border-border rounded px-3 py-2.5 text-ink focus:outline-none focus:border-primary transition-colors text-sm"
                    placeholder="Username" required autofocus>
                @error('username')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Input Password -->
            <div class="relative">
                <input type="password" id="password" name="password"
                    class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-3 text-gray-800 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors text-sm"
                    placeholder="Password" required>

                <!-- Tambahkan id="togglePassword" di button ini -->
                <button type="button" id="togglePassword"
                    class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-gray-600 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </button>
            </div>

            <!-- Tombol Login -->
            <div class="pt-2">
                <button type="submit"
                    class="w-full bg-primary hover:bg-primary-hover text-white font-medium py-2.5 px-4 rounded transition-colors text-sm">
                    Login
                </button>
            </div>
        </form>

    </div>


    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function() {
            // Cek tipe input, kalau password ubah ke text, kalau text ubah ke password
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Opsional: ganti warna ikon jadi agak gelap saat password terlihat
            this.classList.toggle('text-gray-800');
        });
    </script>

</body>

</html>
