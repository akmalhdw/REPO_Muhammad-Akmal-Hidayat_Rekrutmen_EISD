<x-guest-layout>
    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf
        
        <div class="mb-8 text-center">
            <h2 class="text-3xl font-extrabold text-gray-800 tracking-tight">Login Portal</h2>
            <p class="text-sm text-gray-500 mt-2 font-medium">Sistem Pelaporan Dampak Karhutla</p>
        </div>

        <!-- Email Address -->
        <div class="relative group">
            <label for="email" class="block text-sm font-bold text-gray-700 mb-1">Email</label>
            <input id="email" class="block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:border-brand-500 focus:ring focus:ring-brand-200 focus:bg-white transition-all duration-300 outline-none text-gray-800" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Masukkan email anda..." />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-xs font-semibold" />
        </div>

        <!-- Password -->
        <div class="relative mt-5 group">
            <label for="password" class="block text-sm font-bold text-gray-700 mb-1">Password</label>
            <input id="password" class="block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:border-brand-500 focus:ring focus:ring-brand-200 focus:bg-white transition-all duration-300 outline-none text-gray-800" type="password" name="password" required autocomplete="current-password" placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-xs font-semibold" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between mt-5">
            <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-brand-600 shadow-sm focus:ring-brand-500 w-4 h-4 transition duration-200 cursor-pointer" name="remember">
                <span class="ms-2 text-sm text-gray-600 font-semibold group-hover:text-brand-600 transition-colors">{{ __('Ingat saya') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm font-semibold text-brand-600 hover:text-brand-800 transition-colors" href="{{ route('password.request') }}">
                    {{ __('Lupa password?') }}
                </a>
            @endif
        </div>

        <div class="mt-8">
            <button type="submit" class="w-full flex justify-center items-center px-4 py-3.5 bg-gradient-to-r from-brand-600 to-orange-500 border border-transparent rounded-xl font-bold text-white uppercase tracking-widest hover:from-brand-700 hover:to-orange-600 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                {{ __('Masuk') }}
            </button>
        </div>
        
        <div class="mt-6 text-center text-sm text-gray-600 font-medium">
            Belum punya akun? 
            <a href="{{ route('register') }}" class="text-brand-600 hover:text-brand-800 transition-colors font-bold underline decoration-2 underline-offset-4">Daftar sekarang</a>
        </div>
    </form>
</x-guest-layout>
