 <!-- Berita Terkini -->
 <section id="news" class="py-16 bg-white">
     <div class="container mx-auto px-4">
         <div class="text-center mb-12">
             <h2 class="text-3xl font-bold text-gray-800 mb-4">Berita Terkini</h2>
             <div class="w-20 h-1 bg-yellow-400 mx-auto"></div>
         </div>

         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
             <!-- Berita 1 -->
             <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
                 <div class="h-48 overflow-hidden">
                     <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/bd21cd80-127b-42c0-866e-561b5843f2fa.png"
                         alt="Pelepasan balon oleh para peserta kegiatan pemuda sebagai simbol dimulainya event besar"
                         class="w-full h-full object-cover">
                 </div>
                 <div class="p-6">
                     <div class="flex justify-between items-center mb-2">
                         <span class="text-sm text-gray-500">3 Hari Lalu</span>
                         <span class="text-sm bg-blue-100 text-blue-800 px-2 py-1 rounded">Kegiatan</span>
                     </div>
                     <h3 class="text-xl font-semibold text-gray-800 mb-2">Pembukaan Festival Pemuda Kreatif 2023</h3>
                     <p class="text-gray-600 mb-4">Festival tahunan pemuda kreatif resmi dibuka oleh Bupati dengan
                         menampilkan berbagai inovasi karya pemuda lokal.</p>
                     <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Baca Selengkapnya →</a>
                 </div>
             </div>

             <!-- Berita 2 -->
             <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
                 <div class="h-48 overflow-hidden">
                     <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/719fea26-2b71-42aa-a5cc-59918dd71a90.png"
                         alt="Atlet muda menerima medali emas dengan latar belakang bendera merah putih"
                         class="w-full h-full object-cover">
                 </div>
                 <div class="p-6">
                     <div class="flex justify-between items-center mb-2">
                         <span class="text-sm text-gray-500">1 Minggu Lalu</span>
                         <span class="text-sm bg-green-100 text-green-800 px-2 py-1 rounded">Prestasi</span>
                     </div>
                     <h3 class="text-xl font-semibold text-gray-800 mb-2">Atlet Kabupaten Raih Medali Emas di POPNAS
                         2023</h3>
                     <p class="text-gray-600 mb-4">Atlet bulutangkis kabupaten berhasil meraih medali emas dalam Pekan
                         Olahraga Pelajar Nasional tahun ini.</p>
                     <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Baca Selengkapnya →</a>
                 </div>
             </div>

             <!-- Berita 3 -->
             <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
                 <div class="h-48 overflow-hidden">
                     <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/2fe2b0c3-60a4-4983-a832-178dcbea248f.png"
                         alt="Penandatanganan dokumen kerjasama antara dua organisasi di meja dengan panitia berdiri di belakang"
                         class="w-full h-full object-cover">
                 </div>
                 <div class="p-6">
                     <div class="flex justify-between items-center mb-2">
                         <span class="text-sm text-gray-500">2 Minggu Lalu</span>
                         <span class="text-sm bg-purple-100 text-purple-800 px-2 py-1 rounded">Kerjasama</span>
                     </div>
                     <h3 class="text-xl font-semibold text-gray-800 mb-2">Penandatanganan MoU dengan Kemenpora</h3>
                     <p class="text-gray-600 mb-4">Dinas Pemuda dan Olahraga melakukan penandatanganan kerjasama dengan
                         Kementerian Pemuda dan Olahraga untuk program pembinaan atlet.</p>
                     <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Baca Selengkapnya →</a>
                 </div>
             </div>
         </div>
         {{ $slot }}
     </div>
 </section>
