<!-- Footer -->
@props(['activities' => \App\Models\Activity::take(4)->get()])
@props(['news' => \App\Models\News::take(2)->get()])

<footer class="bg-gray-800 text-white pt-12 pb-6">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <div>
                <h3 class="text-xl font-bold mb-4">Tentang Kami</h3>
                <p class="text-gray-300 mb-4">Dinas Pemuda dan Olahraga Kabupaten Blitar bertanggung jawab dalam
                    pembinaan dan pengembangan pemuda serta olahraga di wilayah kabupaten Blitar.</p>
                <div class="flex space-x-4">
                    <a href="https://www.instagram.com/disporakabblitar?igsh=Z3IxdjVvcHhyZmd4"
                        class="text-gray-300 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-4">Tautan Cepat</h3>
                <ul class="space-y-2">
                    <li><a href="\" class="text-gray-300 hover:text-white transition-colors">Home</a></li>
                    <li><a href="\kontakkami" class="text-gray-300 hover:text-white transition-colors">Kontak</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-4">Program Unggulan</h3>
                <ul class="space-y-2">
                    @foreach ($activities as $activity)
                        <li><a href="/programunggulan/{{ $activity->slug }}"
                                class="text-gray-300 hover:text-white transition-colors">{{ $activity->judul }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4">Berita Terbaru</h3>
                <div class="space-y-4">
                    @foreach ($news as $item)
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mr-3">
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt=""
                                    class="w-12 h-12 rounded object-cover">
                            </div>
                            <div>
                                <a href="/berita/{{ $item['slug'] }}"
                                    class="text-gray-300 hover:text-white font-small">{{ Str::limit(strip_tags($item->judul), 30) }}</a>
                                <p class="text-xs text-gray-400 mt-1">{{ $item->create_at }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="border-t border-gray-700 pt-6 text-sm text-gray-400 text-center">
            <p>© 2025 Dinas Pemuda dan Olahraga Kabupaten Blitar</p>
        </div>
    </div>
</footer>
