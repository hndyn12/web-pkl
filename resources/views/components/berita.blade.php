 <!-- Berita Terkini -->
 <section id="news" class="py-16 bg-white">
     <div class="container mx-auto px-4">

         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
             @foreach (\App\Models\News::all() as $news)
                 <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all card-hover">
                     <div class="h-48 overflow-hidden">
                         <img src="{{ asset('storage/' . $news->gambar) }}" alt=""
                             class="w-full h-full object-cover">
                     </div>
                     <div class="p-6">
                         <div class="flex justify-between items-center mb-2">
                             <span class="text-sm text-gray-500">{{ $news->create_at }}</span>
                             <span
                                 class="text-sm bg-blue-100 text-blue-800 px-2 py-1 rounded">{{ $news->kategori->jenis_kegiatan }}</span>
                         </div>
                         <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $news->judul }}</h3>
                         <p class="text-gray-600 mb-4">{{ Str::limit(strip_tags($news->deskripsi), 100) }}</p>
                         <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Baca Selengkapnya →</a>
                     </div>
                 </div>
             @endforeach
         </div>
         {{ $slot }}
 </section>
