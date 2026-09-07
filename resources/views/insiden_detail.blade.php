<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl text-slate-800 leading-tight">
            {{ __('Detail Insiden Kebakaran') }}
        </h2>
    </x-slot>

    <div class="py-12 relative">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6 flex justify-between items-center">
                <a href="{{ route('insiden.index') }}" class="text-sm font-bold text-slate-500 hover:text-slate-800 transition flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali ke Daftar Insiden
                </a>
            </div>

            <div class="bg-white rounded-3xl shadow-xl border border-slate-200 overflow-hidden">
                <!-- Header Card -->
                <div class="bg-slate-50 p-6 border-b border-slate-200 flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div>
                        <div class="flex items-center gap-3 mb-2">
                            <span class="bg-red-100 text-red-800 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Dalam Penanganan</span>
                            <span class="text-slate-500 text-sm font-medium">#ID-KHT-20260906-001</span>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900">Kebakaran Lahan Gambut - Sukamaju</h3>
                    </div>
                    <div class="text-right">
                        <div class="text-slate-500 text-sm font-medium">Dilaporkan pada</div>
                        <div class="text-slate-900 font-bold">06 September 2026, 06:39 WIB</div>
                    </div>
                </div>

                <!-- Body Card -->
                <div class="p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                        <div>
                            <h4 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Lokasi Detail</h4>
                            <p class="text-slate-900 font-medium">Desa Sukamaju, Kec. Indralaya<br>Kab. Ogan Ilir, Sumatera Selatan</p>
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Pelapor</h4>
                            <p class="text-slate-900 font-medium flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-yellow-400"></span> Warga (Akun Terverifikasi)
                            </p>
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Estimasi Luas Area</h4>
                            <p class="text-slate-900 font-medium">&plusmn; 2.5 Hektar</p>
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Tingkat Bahaya</h4>
                            <p class="text-red-600 font-bold flex items-center gap-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                Tinggi (Dekat Pemukiman)
                            </p>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h4 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Deskripsi Laporan</h4>
                        <div class="bg-slate-50 p-4 rounded-xl border border-slate-100 text-slate-700 text-sm leading-relaxed">
                            "Terlihat kepulan asap tebal dari arah lahan kosong di belakang balai desa sejak subuh tadi. Api sepertinya cepat membesar karena angin cukup kencang. Mohon segera ditindaklanjuti karena asap mulai masuk ke rumah-rumah warga."
                        </div>
                    </div>

                    <div class="mb-8">
                        <h4 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-3">Tindakan SATGAS</h4>
                        <ul class="space-y-4">
                            <li class="flex gap-4">
                                <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div>
                                    <div class="text-sm font-bold text-slate-900">Verifikasi Laporan</div>
                                    <div class="text-xs text-slate-500">06 Sep 2026, 06:45 WIB - Tim pemantau mengkonfirmasi titik api via satelit.</div>
                                </div>
                            </li>
                            <li class="flex gap-4">
                                <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                </div>
                                <div>
                                    <div class="text-sm font-bold text-slate-900">Pengerahan Regu Darat</div>
                                    <div class="text-xs text-slate-500">06 Sep 2026, 07:10 WIB - 2 Unit truk pemadam dan regu Manggala Agni diberangkatkan ke lokasi.</div>
                                </div>
                            </li>
                            <li class="flex gap-4">
                                <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center shrink-0">
                                    <div class="w-2 h-2 rounded-full bg-slate-400 animate-pulse"></div>
                                </div>
                                <div>
                                    <div class="text-sm font-bold text-slate-900">Proses Pemadaman (Water Bombing)</div>
                                    <div class="text-xs text-slate-500">Menunggu estimasi bantuan udara jika api tidak terkendali.</div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="pt-6 border-t border-slate-100 text-center">
                        <button class="bg-red-50 text-red-600 font-bold py-2 px-6 rounded-lg hover:bg-red-100 transition">
                            Cetak Laporan PDF
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
