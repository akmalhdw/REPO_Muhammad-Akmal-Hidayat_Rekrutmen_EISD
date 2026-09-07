<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Detail Informasi') }}
            </h2>
            <a href="{{ route('dashboard') }}" class="text-sm font-semibold text-slate-500 hover:text-slate-800 transition">
                &larr; Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-slate-100">
                <div class="p-8 md:p-12">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="bg-red-50 text-red-700 text-xs font-bold px-3 py-1 rounded-full border border-red-100">
                            {{ $berita->kategori_berita }}
                        </span>
                        <span class="text-slate-500 text-sm font-medium">
                            {{ $berita->created_at->translatedFormat('l, d F Y - H:i') }}
                        </span>
                    </div>

                    <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6 leading-tight">
                        {{ $berita->judul }}
                    </h1>

                    <div class="prose prose-slate prose-lg max-w-none text-slate-600 leading-relaxed">
                        <p>
                            {{ $berita->konten_lengkap }}
                        </p>
                    </div>

                    <div class="mt-12 pt-8 border-t border-slate-100 flex items-center gap-4">
                        <div class="w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center text-slate-400">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-slate-900">Pusat Informasi SATGAS</p>
                            <p class="text-sm text-slate-500">Satuan Tugas Penanggulangan Karhutla</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
