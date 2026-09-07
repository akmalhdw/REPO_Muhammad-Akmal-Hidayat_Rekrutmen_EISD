<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl text-slate-800 leading-tight">
            {{ __('Dashboard Mitigasi') }}
        </h2>
    </x-slot>

    <div class="py-12 relative overflow-hidden">
        <!-- Background dekorasi -->

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="mb-8">
                <h3 class="text-3xl font-extrabold text-slate-900 mb-2">Pusat Informasi Terkini</h3>
                <p class="text-slate-600 font-medium">Pantau kondisi lapangan dan pengumuman resmi dari SATGAS Karhutla.</p>
            </div>

            <!-- Baris 1: Live Status & Statistik Utama -->
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 mb-8">
                
                <!-- Widget Kualitas Udara -->
                <div class="lg:col-span-1">
                    <div class="bg-white/90 backdrop-blur-xl rounded-3xl shadow-xl border border-slate-200 overflow-hidden relative group h-full">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-red-600 rounded-bl-full opacity-10 transform translate-x-8 -translate-y-8 group-hover:scale-110 transition-transform duration-500"></div>
                        
                        <div class="p-8 flex flex-col justify-center h-full">
                            <div class="flex justify-between items-start mb-6">
                                <div class="w-12 h-12 bg-red-100 text-red-700 rounded-xl flex items-center justify-center border border-red-200">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                                </div>
                                <span class="bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide shadow-md animate-pulse">Live</span>
                            </div>

                            <h4 class="text-slate-500 font-bold uppercase tracking-wider text-sm mb-1">Kualitas Udara Kota</h4>
                            <div class="flex items-baseline gap-2 mb-2">
                                <span class="text-5xl font-black text-slate-900">185</span>
                                <span class="text-slate-500 font-bold">µg/m³</span>
                            </div>
                            
                            <div class="mt-4 pt-4 border-t border-slate-100 mt-auto">
                                <div class="flex items-center gap-2 text-red-600 font-bold">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                    STATUS: BERBAHAYA
                                </div>
                                <p class="text-sm text-slate-500 mt-2">Kadar Partikulat (PM2.5) sangat tinggi. Warga dihimbau tidak keluar rumah tanpa masker N95.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kartu Statistik (3 Kolom) -->
                <div class="lg:col-span-3 grid grid-cols-1 sm:grid-cols-3 gap-4 h-full">
                    <div class="bg-white rounded-3xl shadow-lg border border-slate-200 p-5 text-center flex flex-col items-center justify-center">
                        <div class="w-16 h-16 bg-red-50 text-red-500 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path></svg>
                        </div>
                        <div class="text-sm font-bold text-slate-500 mb-1">Hutan & Lahan Terbakar 2026</div>
                        <div class="text-3xl font-black text-slate-900">45K+ Ha</div>
                    </div>
                    
                    <div class="bg-white rounded-3xl shadow-lg border border-slate-200 p-5 text-center flex flex-col items-center justify-center">
                        <div class="w-16 h-16 bg-orange-50 text-orange-500 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <div class="text-sm font-bold text-slate-500 mb-1">Penanganan Kebakaran 2026</div>
                        <div class="text-3xl font-black text-slate-900">1,142 Kasus</div>
                    </div>
                    
                    <div class="bg-white rounded-3xl shadow-lg border border-slate-200 p-5 text-center flex flex-col items-center justify-center">
                        <div class="w-16 h-16 bg-blue-50 text-blue-500 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div class="text-sm font-bold text-slate-500 mb-1">Lokasi Kebakaran 2026</div>
                        <div class="text-2xl font-black text-slate-900">12 Prov, 84 Kota</div>
                    </div>
                </div>
            </div>

            <!-- Baris 2: Grafik & Data Terbaru -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
                
                <!-- Kolom Kiri (Lebih Besar): Grafik -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-3xl shadow-lg border border-slate-200 p-6 h-full flex flex-col">
                        <div class="mb-6 flex flex-wrap items-center justify-between gap-4">
                            <span class="bg-emerald-600 text-white text-sm font-bold px-3 py-1.5 rounded uppercase tracking-wide">DATA INTERNAL</span>
                            <h5 class="text-sm md:text-base font-bold text-slate-700 text-center flex-1">Grafik Tren Kebakaran Hutan & Lahan</h5>
                        </div>
                        
                        <div class="flex-1 w-full relative min-h-[350px]">
                            <canvas id="hotspotChart"></canvas>
                        </div>
                    </div>
                </div>
                
                <!-- Kolom Kanan: Insiden Kebakaran Terbaru -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-3xl shadow-lg border border-slate-200 p-6 h-full flex flex-col">
                        <h4 class="text-xl font-bold text-slate-900 mb-4 border-b border-slate-100 pb-3">Insiden Terbaru</h4>
                        
                        <div class="space-y-6 flex-1">
                            <!-- Insiden 1 -->
                            <div class="text-sm">
                                <div class="flex justify-between text-slate-500 mb-2 font-medium">
                                    <span>Tgl: 06 Sep 2026</span>
                                    <span>06:39</span>
                                </div>
                                <div class="grid grid-cols-[70px_1fr] gap-x-2 gap-y-1">
                                    <span class="text-slate-500">Pelapor</span>
                                    <span class="font-bold flex items-center gap-1.5"><span class="w-2.5 h-2.5 bg-yellow-400 rounded-sm"></span> Warga</span>
                                    <span class="text-slate-500">Lokasi</span>
                                    <span class="font-bold text-slate-800">Sukamaju, Ogan Ilir (Sumsel)</span>
                                </div>
                            </div>
                            
                            <!-- Insiden 2 -->
                            <div class="text-sm pt-4 border-t border-slate-100">
                                <div class="flex justify-between text-slate-500 mb-2 font-medium">
                                    <span>Tgl: 06 Sep 2026</span>
                                    <span>06:39</span>
                                </div>
                                <div class="grid grid-cols-[70px_1fr] gap-x-2 gap-y-1">
                                    <span class="text-slate-500">Pelapor</span>
                                    <span class="font-bold flex items-center gap-1.5"><span class="w-2.5 h-2.5 bg-blue-400 rounded-sm"></span> Patroli Darat</span>
                                    <span class="text-slate-500">Lokasi</span>
                                    <span class="font-bold text-slate-800">Mendawai, Kotawaringin (Kalteng)</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-4 pt-4 border-t border-slate-100 text-center">
                            <a href="{{ route('insiden.index') }}" class="text-sm font-bold text-red-600 hover:text-red-800">Lihat Semua Insiden &rarr;</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Baris 3: Berita & Pengumuman -->
            <div class="mb-8">
                <div class="bg-white/90 backdrop-blur-xl rounded-3xl shadow-xl border border-slate-200 p-8">
                    <div class="flex items-center justify-between mb-6 border-b border-slate-100 pb-4">
                        <h4 class="text-xl font-bold text-slate-900 flex items-center gap-2">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                            Pengumuman Resmi SATGAS
                        </h4>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @forelse($beritas as $berita)
                            <a href="{{ route('berita.show', $berita->id) }}" class="group block bg-slate-50 hover:bg-slate-100 p-6 rounded-2xl border border-slate-200 transition-all hover:shadow-md h-full flex flex-col">
                                <div class="flex justify-between items-start mb-3">
                                    <span class="bg-red-50 text-red-700 text-xs font-bold px-2.5 py-1 rounded border border-red-100">{{ $berita->kategori_berita }}</span>
                                    <span class="text-xs font-bold text-slate-500">{{ $berita->created_at->diffForHumans() }}</span>
                                </div>
                                <h5 class="font-bold text-slate-900 text-lg mb-2 group-hover:text-red-700 transition">{{ $berita->judul }}</h5>
                                <p class="text-slate-600 text-sm line-clamp-3 mb-4 flex-1">{{ $berita->konten_lengkap }}</p>
                                <span class="text-sm font-bold text-red-600 group-hover:text-red-800 flex items-center gap-1">Baca selengkapnya <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></span>
                            </a>
                        @empty
                            <div class="col-span-full text-center py-10 bg-slate-50 rounded-2xl border border-slate-200 border-dashed">
                                <div class="text-slate-400 mb-2">
                                    <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                                </div>
                                <p class="text-slate-500 font-medium">Belum ada pengumuman terbaru.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('laporan.index') }}" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-lg font-bold rounded-xl shadow-lg text-white bg-slate-900 hover:bg-slate-800 transform transition hover:-translate-y-1">
                    Buat Laporan Baru
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

        </div>
    </div>

    <!-- Script untuk Grafik (Chart.js) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('hotspotChart').getContext('2d');
            
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                    datasets: [
                        {
                            label: 'Insiden 2026',
                            data: [120, 140, 220, 110, 130, 280, 750, 4800, 1100, null, null, null],
                            borderColor: '#38bdf8', // Light Blue
                            backgroundColor: '#38bdf8',
                            borderWidth: 3,
                            pointRadius: 4,
                            pointBackgroundColor: '#38bdf8',
                            tension: 0.1
                        },
                        {
                            label: 'Insiden 2025',
                            data: [60, 80, 90, 60, 70, 120, 850, 400, 800, 420, 110, 30],
                            borderColor: '#fb7185', // Rose
                            backgroundColor: '#fb7185',
                            borderWidth: 3,
                            pointRadius: 4,
                            pointBackgroundColor: '#fb7185',
                            tension: 0.1
                        },
                        {
                            label: 'Insiden 2024',
                            data: [15, 25, 40, 20, 30, 50, 80, 450, 1200, 600, 90, 15],
                            borderColor: '#fbbf24', // Amber
                            backgroundColor: '#fbbf24',
                            borderWidth: 3,
                            pointRadius: 4,
                            pointBackgroundColor: '#fbbf24',
                            tension: 0.1
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                font: {
                                    family: "'Inter', sans-serif",
                                    weight: 'bold'
                                },
                                usePointStyle: true,
                                padding: 20
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: '#f1f5f9',
                                drawBorder: false
                            },
                            ticks: {
                                font: {
                                    family: "'Inter', sans-serif"
                                },
                                color: '#64748b'
                            }
                        },
                        x: {
                            grid: {
                                color: '#f1f5f9',
                                drawBorder: false
                            },
                            ticks: {
                                font: {
                                    family: "'Inter', sans-serif"
                                },
                                color: '#64748b'
                            }
                        }
                    }
                }
            });
        });
    </script>
</x-app-layout>
