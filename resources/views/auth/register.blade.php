<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf
        
        <div class="mb-8 text-center">
            <h2 class="text-3xl font-extrabold text-gray-800 tracking-tight">Daftar Akun</h2>
            <p class="text-sm text-gray-500 mt-2 font-medium">Portal Pelaporan Dampak Karhutla</p>
        </div>

        <!-- Name -->
        <div class="relative group">
            <label for="name" class="block text-sm font-bold text-gray-700 mb-1">Nama Lengkap</label>
            <input id="name" class="block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:border-brand-500 focus:ring focus:ring-brand-200 focus:bg-white transition-all duration-300 outline-none text-gray-800" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="John Doe" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500 text-xs font-semibold" />
        </div>

        <!-- Email Address -->
        <div class="relative group">
            <label for="email" class="block text-sm font-bold text-gray-700 mb-1">Email</label>
            <input id="email" class="block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:border-brand-500 focus:ring focus:ring-brand-200 focus:bg-white transition-all duration-300 outline-none text-gray-800" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="email@contoh.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-xs font-semibold" />
        </div>

        <!-- Password -->
        <div class="relative group">
            <label for="password" class="block text-sm font-bold text-gray-700 mb-1">Password</label>
            <input id="password" class="block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:border-brand-500 focus:ring focus:ring-brand-200 focus:bg-white transition-all duration-300 outline-none text-gray-800" type="password" name="password" required autocomplete="new-password" placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-xs font-semibold" />
        </div>

        <!-- Confirm Password -->
        <div class="relative group">
            <label for="password_confirmation" class="block text-sm font-bold text-gray-700 mb-1">Konfirmasi Password</label>
            <input id="password_confirmation" class="block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:border-brand-500 focus:ring focus:ring-brand-200 focus:bg-white transition-all duration-300 outline-none text-gray-800" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500 text-xs font-semibold" />
        </div>

        <div class="mt-8">
            <button type="submit" class="w-full flex justify-center items-center px-4 py-3.5 bg-gradient-to-r from-gray-800 to-gray-900 border border-transparent rounded-xl font-bold text-white uppercase tracking-widest hover:from-black hover:to-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                {{ __('Daftar') }}
            </button>
        </div>
        
        <div class="mt-6 text-center text-sm text-gray-600 font-medium">
            Sudah punya akun? 
            <a href="{{ route('login') }}" class="text-brand-600 hover:text-brand-800 transition-colors font-bold underline decoration-2 underline-offset-4">Login di sini</a>
        </div>
    </form>
</x-guest-layout>
