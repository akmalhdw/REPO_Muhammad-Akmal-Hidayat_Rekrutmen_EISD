<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl text-slate-800 leading-tight">
            {{ __('Data Semua Insiden Kebakaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-8 flex justify-between items-end">
                <div>
                    <h3 class="text-3xl font-extrabold text-slate-900 mb-2">Rekapitulasi Insiden</h3>
                    <p class="text-slate-600 font-medium">Daftar riwayat laporan kebakaran hutan dan lahan yang masuk ke sistem.</p>
                </div>
                <a href="{{ route('dashboard') }}" class="text-sm font-bold text-slate-500 hover:text-slate-800 transition">
                    &larr; Kembali ke Dashboard
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-slate-200">
                <div class="p-6 bg-white border-b border-slate-200 flex justify-between items-center">
                    <h4 class="text-lg font-bold text-slate-800">Tabel Data Insiden</h4>
                    <div class="flex gap-2">
                        <input type="text" placeholder="Cari lokasi..." class="border-slate-200 rounded-lg text-sm focus:ring-red-500 focus:border-red-500">
                        <button class="bg-slate-100 hover:bg-slate-200 text-slate-700 px-4 py-2 rounded-lg text-sm font-bold transition">Filter</button>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-200">
                        <thead class="bg-slate-50">
                            <tr>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Tanggal & Waktu</th>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Pelapor</th>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Lokasi Kejadian</th>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Status</th>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-slate-200">
                            <!-- Dummy Data 1 -->
                            <tr class="hover:bg-slate-50 transition">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-bold text-slate-900">06 Sep 2026</div>
                                    <div class="text-sm text-slate-500">06:39 WIB</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center gap-2">
                                        <span class="w-2.5 h-2.5 bg-yellow-400 rounded-sm"></span>
                                        <span class="text-sm font-bold text-slate-700">Warga (Terverifikasi)</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm font-bold text-slate-900">Sukamaju, Indralaya</div>
                                    <div class="text-sm text-slate-500">Ogan Ilir, Sumatera Selatan</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-bold rounded-full bg-red-100 text-red-800">
                                        Dalam Penanganan
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="{{ route('insiden.detail') }}" class="text-blue-600 hover:text-blue-900 font-bold">Detail</a>
                                </td>
                            </tr>
                            
                            <!-- Dummy Data 2 -->
                            <tr class="hover:bg-slate-50 transition">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-bold text-slate-900">05 Sep 2026</div>
                                    <div class="text-sm text-slate-500">14:15 WIB</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center gap-2">
                                        <span class="w-2.5 h-2.5 bg-blue-400 rounded-sm"></span>
                                        <span class="text-sm font-bold text-slate-700">Patroli Darat</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm font-bold text-slate-900">Mendawai, Arut Selatan</div>
                                    <div class="text-sm text-slate-500">Kotawaringin Barat, Kalteng</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-bold rounded-full bg-emerald-100 text-emerald-800">
                                        Selesai / Padam
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="{{ route('insiden.detail') }}" class="text-blue-600 hover:text-blue-900 font-bold">Detail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Footer Informasi Data -->
                <div class="bg-white px-4 py-3 border-t border-slate-200 flex items-center justify-between sm:px-6">
                    <p class="text-sm text-slate-500">
                        Menampilkan <span class="font-medium text-slate-900">2</span> data insiden terakhir.
                    </p>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
