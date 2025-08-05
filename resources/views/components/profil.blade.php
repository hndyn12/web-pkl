<!-- Tentang Kami -->
<section id="about" class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Tentang Dinas Pemuda dan Olahraga</h2>
            <div class="w-20 h-1 bg-yellow-400 mx-auto"></div>
        </div>

        <div class="flex flex-col md:flex-row items-center gap-8">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <img src="{{ asset('image/pngwing.com.png') }}" alt="Logo Kabupaten Blitar"
                    class="rounded-lg shadow-xl w-full">
            </div>
            <div class="md:w-1/2">
                <h3 class="text-2xl font-semibold text-gray-800 mb-1">Visi</h3>
                @foreach (\App\Models\Profil::all() as $visi)
                    <p class="text-gray-600 mb-4">{{ $visi->visi }}</p>
                @endforeach
                <h3 class="text-2xl font-semibold text-gray-800 mb-1">Misi</h3>
                @foreach (\App\Models\Profil::all() as $misi)
                    @php
                        // Ambil misi, hilangkan tag HTML, lalu pecah berdasarkan titik koma
                        $misiPoints = explode(';', strip_tags($misi->misi));
                    @endphp
                    <ul class="mb-4">
                        @foreach ($misiPoints as $point)
                            @if (trim($point) != '')
                                <li class="flex items-start mb-2">
                                    <span class="flex-shrink-0 mt-1 bg-blue-100 rounded-full p-2 text-blue-600 mr-2">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </span>
                                    <span class="text-gray-600">{!! \Illuminate\Support\Str::of($point)->sanitizeHtml() !!}</span>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
</section>
