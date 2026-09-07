<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-3">
            <a href="{{ route('dashboard') }}" class="w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 flex items-center justify-center transition-colors">
                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </a>
            <h2 class="font-extrabold text-2xl text-gray-800 leading-tight">
                {{ __('Buat Laporan Baru') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12 relative overflow-hidden">
        <!-- Decor blobs removed for cleaner look -->
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white/90 backdrop-blur-xl overflow-hidden shadow-xl sm:rounded-2xl border border-slate-200">
                
                <div class="bg-gradient-to-r from-slate-800 to-slate-900 p-6 sm:px-10 text-white">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center backdrop-blur-sm border border-white/30">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Form Pelaporan Dampak Karhutla</h3>
                            <p class="text-slate-300 text-sm font-medium">Laporkan kondisi lingkungan dan kebutuhan bantuan di wilayah Anda.</p>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    @guest
                    <!-- Guest Overlay -->
                    <div class="absolute inset-0 z-20 bg-white/40 backdrop-blur-[6px] flex flex-col items-center justify-center p-6 text-center">
                        <div class="w-20 h-20 bg-slate-900 rounded-2xl flex items-center justify-center mb-6 shadow-2xl shadow-slate-900/30 transform -rotate-6">
                            <svg class="w-10 h-10 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        </div>
                        <h3 class="text-3xl font-extrabold text-slate-900 mb-4">Akses Terkunci</h3>
                        <p class="text-slate-700 font-bold max-w-md mb-8 text-lg bg-white/80 p-4 rounded-xl shadow-sm border border-white">
                            Anda harus <span class="text-red-600">Log In</span> terlebih dahulu untuk dapat membuat laporan baru dan melihat riwayat data.
                        </p>
                        <div class="flex gap-4">
                            <a href="{{ route('login') }}" class="px-8 py-3.5 bg-slate-900 hover:bg-slate-800 text-white font-bold rounded-xl shadow-lg transition-all transform hover:-translate-y-1">Log In Sekarang</a>
                        </div>
                    </div>
                    @endguest

                    <div class="p-6 sm:p-10 text-gray-900 bg-white {{ !Auth::check() ? 'opacity-30 pointer-events-none select-none filter blur-[2px]' : '' }}">
                    
                    @if (session('success'))
                        <div class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 rounded-r-lg mb-8 shadow-sm flex items-start" role="alert">
                            <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <div>
                                <strong class="font-bold block">Berhasil!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('laporan.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <!-- Judul Laporan -->
                        <div class="group">
                            <label for="judul_laporan" class="block text-sm font-bold text-gray-700 mb-2">Judul Laporan <span class="text-red-600">*</span></label>
                            <input type="text" name="judul_laporan" id="judul_laporan" 
                                   class="block w-full px-4 py-3 bg-gray-50 border @error('judul_laporan') border-red-300 ring-1 ring-red-300 @else border-gray-200 @enderror rounded-xl focus:border-slate-800 focus:ring focus:ring-slate-200 focus:bg-white transition-all duration-300 outline-none text-gray-800" 
                                   value="{{ old('judul_laporan') }}" 
                                   placeholder="Contoh: Kabut Asap Sangat Tebal di Desa ABC">
                            
                            @error('judul_laporan')
                                <p class="mt-2 text-sm text-red-600 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Deskripsi -->
                        <div class="group">
                            <label for="deskripsi" class="block text-sm font-bold text-gray-700 mb-2">Deskripsi Kondisi (Dampak) <span class="text-red-600">*</span></label>
                            <textarea name="deskripsi" id="deskripsi" rows="5" 
                                      class="block w-full px-4 py-3 bg-gray-50 border @error('deskripsi') border-red-300 ring-1 ring-red-300 @else border-gray-200 @enderror rounded-xl focus:border-slate-800 focus:ring focus:ring-slate-200 focus:bg-white transition-all duration-300 outline-none text-gray-800" 
                                      placeholder="Deskripsikan dengan jelas dampaknya seperti jarak pandang, kualitas udara, warga sesak nafas, dll...">{{ old('deskripsi') }}</textarea>
                            
                            @error('deskripsi')
                                <p class="mt-2 text-sm text-red-600 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Kategori Checkbox -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                            <label class="block text-sm font-bold text-gray-800 mb-3 border-b border-gray-200 pb-2">Kebutuhan / Kategori Dampak <span class="text-red-600">*</span> <span class="text-gray-400 font-normal text-xs ml-2">(Pilih minimal satu)</span></label>
                            
                            @if($kategoris->count() > 0)
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-4">
                                @foreach($kategoris as $kategori)
                                    <label class="relative flex items-start p-3 cursor-pointer rounded-lg border @error('kategori_id') border-red-200 bg-red-50/50 @else border-gray-200 bg-white hover:bg-gray-50 @enderror transition-colors shadow-sm">
                                        <div class="flex items-center h-5">
                                            <input type="checkbox" name="kategori_id[]" value="{{ $kategori->id }}" 
                                                   class="w-5 h-5 text-slate-800 bg-gray-100 border-gray-300 rounded focus:ring-slate-800 focus:ring-2 cursor-pointer"
                                                   {{ (is_array(old('kategori_id')) && in_array($kategori->id, old('kategori_id'))) ? 'checked' : '' }}>
                                        </div>
                                        <div class="ms-3 text-sm">
                                            <span class="font-bold text-gray-800">{{ $kategori->nama_kategori }}</span>
                                        </div>
                                    </label>
                                @endforeach
                                </div>
                            @else
                                <div class="p-4 bg-yellow-50 border border-yellow-200 rounded-lg text-yellow-700 text-sm font-medium flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                    Data kategori belum tersedia di database.
                                </div>
                            @endif
                            
                            @error('kategori_id')
                                <p class="mt-3 text-sm text-red-600 font-semibold flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end gap-4 pt-6 border-t border-gray-100 mt-8">
                            <a href="{{ route('dashboard') }}" class="px-6 py-3 font-semibold text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-xl transition-colors">
                                Batal
                            </a>
                            <button type="submit" class="flex justify-center items-center px-8 py-3 bg-slate-900 border border-transparent rounded-xl font-bold text-white tracking-wide hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-800 focus:ring-offset-2 transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                Kirim Laporan
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            
            <!-- Riwayat Laporan Section -->
            <div class="mt-12 bg-white/90 backdrop-blur-xl overflow-hidden shadow-xl sm:rounded-2xl border border-slate-200">
                <div class="bg-gray-50 border-b border-gray-100 p-6 flex items-center gap-3">
                    <div class="w-10 h-10 bg-slate-100 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-slate-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Riwayat Laporan Masuk</h3>
                </div>
                
                <div class="p-6">
                    @if(isset($laporans) && $laporans->count() > 0)
                        <div class="overflow-hidden rounded-xl border border-gray-200 shadow-sm">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50/80">
                                        <tr>
                                            <th scope="col" class="py-4 px-6 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">No</th>
                                            <th scope="col" class="py-4 px-6 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Pelapor</th>
                                            <th scope="col" class="py-4 px-6 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Judul & Detail</th>
                                            <th scope="col" class="py-4 px-6 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Kebutuhan</th>
                                            <th scope="col" class="py-4 px-6 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-100 bg-white">
                                        @foreach($laporans as $index => $laporan)
                                        <tr class="hover:bg-gray-50/50 transition-colors duration-200">
                                            <td class="py-4 px-6 whitespace-nowrap text-sm font-medium text-gray-900">{{ $index + 1 }}</td>
                                            <td class="py-4 px-6 whitespace-nowrap text-sm text-gray-800 font-bold">{{ $laporan->user->name ?? 'Anonim' }}</td>
                                            <td class="py-4 px-6 text-sm text-gray-800">
                                                <div class="font-bold text-gray-900 mb-1">{{ $laporan->judul_laporan }}</div>
                                                <div class="text-gray-500 text-xs line-clamp-2">{{ $laporan->deskripsi }}</div>
                                            </td>
                                            <td class="py-4 px-6 whitespace-nowrap">
                                                <div class="flex flex-wrap gap-1.5">
                                                    @foreach($laporan->kategoris as $kategori)
                                                        <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-bold bg-orange-50 text-orange-700 border border-orange-100 shadow-sm">
                                                            {{ $kategori->nama_kategori }}
                                                        </span>
                                                    @endforeach
                                                </div>
                                            </td>
                                            <td class="py-4 px-6 whitespace-nowrap text-sm text-gray-500 font-medium">
                                                {{ $laporan->created_at->format('d M Y') }}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @else
                        <div class="text-center py-12 px-6 bg-gray-50 rounded-xl border border-dashed border-gray-300">
                            <h3 class="text-lg font-bold text-gray-900 mb-1">Belum ada riwayat laporan</h3>
                            <p class="text-gray-500 mb-0">Silakan buat laporan pertama Anda menggunakan form di atas.</p>
                        </div>
                    @endif
                </div>
            </div>

            </div> <!-- End of relative wrapper -->
        </div>
    </div>
</x-app-layout>
