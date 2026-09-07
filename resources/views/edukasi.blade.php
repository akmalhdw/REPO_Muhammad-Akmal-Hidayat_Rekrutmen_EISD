<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl text-slate-800 leading-tight">
            {{ __('Edukasi & Tips Mitigasi') }}
        </h2>
    </x-slot>

    <div class="py-12 relative overflow-hidden">
        <!-- Decor blobs removed for cleaner look -->

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white/90 backdrop-blur-xl overflow-hidden shadow-xl sm:rounded-2xl border border-slate-200">
                
                <div class="bg-gradient-to-r from-slate-800 to-slate-900 p-8 sm:px-10 text-white text-center">
                    <h3 class="text-3xl font-black mb-3">Panduan Darurat Kabut Asap</h3>
                    <p class="text-slate-300 font-medium max-w-2xl mx-auto">Tindakan preventif dan kuratif yang harus dilakukan warga saat kualitas udara berada pada level berbahaya (Siaga Darurat).</p>
                </div>

                <div class="p-8 sm:p-12">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        
                        <!-- List Tips -->
                        <div class="flex gap-4">
                            <div class="shrink-0">
                                <div class="w-14 h-14 bg-slate-100 text-slate-600 rounded-2xl flex items-center justify-center shadow-sm">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-slate-900 mb-2">Batasi Aktivitas Luar Ruangan</h4>
                                <p class="text-slate-600 leading-relaxed">Hindari aktivitas fisik berat di luar rumah. Partikel halus PM2.5 dapat masuk dalam-dalam ke paru-paru dan masuk ke aliran darah. Usahakan selalu berada di dalam ruangan yang tertutup rapat.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="shrink-0">
                                <div class="w-14 h-14 bg-slate-100 text-slate-600 rounded-2xl flex items-center justify-center shadow-sm">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-slate-900 mb-2">Gunakan Masker Standar N95</h4>
                                <p class="text-slate-600 leading-relaxed">Masker kain atau masker medis biasa tidak dapat menyaring partikel PM2.5 dari kabut asap. Pastikan Anda menggunakan masker N95, KN95, atau FFP2 yang menempel rapat pada wajah jika terpaksa keluar.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="shrink-0">
                                <div class="w-14 h-14 bg-slate-100 text-slate-600 rounded-2xl flex items-center justify-center shadow-sm">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-slate-900 mb-2">Nyalakan Air Purifier / Purifier DIY</h4>
                                <p class="text-slate-600 leading-relaxed">Gunakan penyaring udara (Air Purifier) bersertifikat HEPA di dalam rumah. Jika tidak ada, letakkan baskom berisi air di sudut-sudut ruangan atau gantung kain basah untuk menangkap sebagian abu yang masuk.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="shrink-0">
                                <div class="w-14 h-14 bg-slate-100 text-slate-600 rounded-2xl flex items-center justify-center shadow-sm">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-slate-900 mb-2">Perbanyak Minum Air Putih</h4>
                                <p class="text-slate-600 leading-relaxed">Asap Karhutla seringkali membuat tenggorokan kering dan meradang. Minumlah air putih minimal 8 gelas per hari untuk membantu tubuh membilas toksin dari saluran pernafasan dan menghindari dehidrasi.</p>
                            </div>
                        </div>

                    </div>
                    
                    <!-- Bagian Video Edukasi -->
                    <div class="mt-16 pt-12 border-t border-slate-100">
                        <div class="mb-8">
                            <h4 class="text-2xl font-black text-slate-900 mb-2">Video Edukasi Keselamatan</h4>
                            <p class="text-slate-600">Pelajari langkah-langkah mitigasi karhutla dan cara membuat penyaring udara mandiri (DIY) di rumah melalui panduan visual berikut.</p>
                        </div>
                        
                        <div class="aspect-w-16 aspect-h-9 w-full bg-slate-100 rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                            <!-- Video dari YouTube -->
                            <iframe 
                                class="w-full h-[400px] md:h-[500px]" 
                                src="https://www.youtube.com/embed/fgroV0MoMQo" 
                                title="Edukasi Bahaya Kabut Asap" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>

                    <!-- Bagian Gejala Asap -->
                    <div class="mt-16 pt-12 border-t border-slate-100">
                        <div class="mb-8">
                            <h4 class="text-2xl font-black text-slate-900 mb-2">Kenali Gejala Paparan Asap</h4>
                            <p class="text-slate-600">Jangan abaikan gejala fisik yang muncul. Lakukan penanganan pertama atau segera cari pertolongan medis jika kondisi memburuk.</p>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="bg-white border border-slate-200 p-6 rounded-2xl shadow-sm hover:shadow-md transition">
                                <div class="w-12 h-12 bg-amber-50 text-amber-600 rounded-xl flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                </div>
                                <h5 class="font-bold text-slate-900 mb-2">Iritasi Mata & Kulit</h5>
                                <p class="text-slate-600 text-sm">Mata merah, perih, dan berair. Kulit terasa gatal atau meradang.</p>
                                <div class="mt-4 text-sm font-semibold text-amber-700">Penanganan: Bilas dengan air bersih, tetes mata ringan.</div>
                            </div>

                            <div class="bg-white border border-slate-200 p-6 rounded-2xl shadow-sm hover:shadow-md transition">
                                <div class="w-12 h-12 bg-orange-50 text-orange-600 rounded-xl flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                </div>
                                <h5 class="font-bold text-slate-900 mb-2">Batuk & Radang Tenggorokan</h5>
                                <p class="text-slate-600 text-sm">Tenggorokan kering, sakit saat menelan, dan batuk kering terus-menerus.</p>
                                <div class="mt-4 text-sm font-semibold text-orange-700">Penanganan: Perbanyak minum air hangat, kurangi bicara.</div>
                            </div>

                            <div class="bg-white border border-slate-200 p-6 rounded-2xl shadow-sm hover:shadow-md transition">
                                <div class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                                </div>
                                <h5 class="font-bold text-slate-900 mb-2">Sesak Nafas (ISPA)</h5>
                                <p class="text-slate-600 text-sm">Dada terasa berat, nafas pendek, atau memicu serangan asma.</p>
                                <div class="mt-4 text-sm font-semibold text-red-700">Tindakan Medis Darurat! Segera ke faskes terdekat.</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-12 bg-red-50 p-6 rounded-2xl border border-red-100 flex items-start gap-4">
                        <div class="mt-1">
                            <svg class="w-6 h-6 text-red-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <h5 class="text-red-800 font-bold text-lg mb-1">Butuh Bantuan Medis Segera?</h5>
                            <p class="text-red-700 text-sm">Jika Anda atau keluarga mengalami sesak nafas parah, nyeri dada, atau asma akut akibat kabut asap, segera hubungi puskesmas terdekat atau gunakan fitur <a href="{{ route('laporan.index') }}" class="font-bold underline hover:text-red-900">Form Laporan Bantuan Darurat</a> di portal ini agar Satgas dapat mendistribusikan bantuan.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
