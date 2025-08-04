<!-- Program Unggulan -->
<section id="programs" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Program Unggulan</h2>
            <div class="w-20 h-1 bg-yellow-400 mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Program 1 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
                <div class="h-48 overflow-hidden">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/fbf79a6e-3e07-42fa-a2fc-4922891268db.png"
                        alt="Pelatihan kepemimpinan untuk pemuda dengan peserta sedang berdiskusi dalam kelompok kecil"
                        class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Pelatihan Kepemimpinan Pemuda</h3>
                    <p class="text-gray-600 mb-4">Program pembinaan karakter dan kepemimpinan bagi pemuda usia 15-30
                        tahun untuk membentuk generasi yang mandiri dan bertanggung jawab.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm bg-blue-100 text-blue-800 px-3 py-1 rounded-full">Tahunan</span>
                        <button class="text-blue-600 hover:text-yellow-400 font-medium">Selengkapnya</button>
                    </div>
                </div>
            </div>

            <!-- Program 2 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
                <div class="h-48 overflow-hidden">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/5a034e5e-4e4a-4bb8-9c2e-84e4a62753a1.png"
                        alt="Turnamen sepak bola remaja di lapangan dengan banyak penonton menyemangati"
                        class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Kompetisi Olahraga Pelajar</h3>
                    <p class="text-gray-600 mb-4">Event tahunan untuk mengembangkan bakat olahraga pelajar dari tingkat
                        SD sampai SMA dalam berbagai cabang olahraga.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm bg-green-100 text-green-800 px-3 py-1 rounded-full">Bulanan</span>
                        <button class="text-blue-600 hover:text-yellow-400 font-medium">Selengkapnya</button>
                    </div>
                </div>
            </div>

            <!-- Program 3 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
                <div class="h-48 overflow-hidden">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/230c7098-b79c-4249-b259-c89b6b6fe456.png"
                        alt="Pemuda sedang melakukan kegiatan sosial membersihkan lingkungan sekitar permukiman"
                        class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Pemuda Peduli Lingkungan</h3>
                    <p class="text-gray-600 mb-4">Gerakan pemuda dalam menjaga kelestarian lingkungan melalui berbagai
                        kegiatan edukasi dan aksi nyata.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full">Mingguan</span>
                        <button class="text-blue-600 hover:text-yellow-400 font-medium">Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>
        {{ $slot }}
    </div>
</section>
