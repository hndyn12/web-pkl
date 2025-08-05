<!-- Kontak & Lokasi -->
<section id="contact" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Hubungi Kami</h2>
            <div class="w-20 h-1 bg-yellow-400 mx-auto"></div>
        </div>
        @foreach (\App\Models\Kontak::all() as $kontak)
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="lg:w-1/2">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17219.80630273163!2d112.18099645894071!3d-8.083211590378598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78ed0073c16f6f%3A0xc7c5b67e2d846942!2sDINAS%20KEPEMUDAAN%20DAN%20OLAHRAGA%20KABUPATEN%20BLITAR!5e0!3m2!1sid!2sid!4v1754361784157!5m2!1sid!2sid"
                        width="775" height="720" style="border:5px;" allowfullscreen loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="lg:w-1/2">
                    <div class="bg-gray-50 p-8 rounded-xl shadow-sm">
                        <h3 class="text-xl font-semibold text-gray-800 mb-6">Informasi Kontak</h3>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-medium text-gray-800">Alamat Kantor</h4>
                                    <p class="text-gray-600">{{ $kontak->alamat }}</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-medium text-gray-800">Telepon</h4>
                                    <p class="text-gray-600">{{ $kontak->telepon }}</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-medium text-gray-800">Email</h4>
                                    <p class="text-gray-600">{{ $kontak->email }}</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-medium text-gray-800">Jam Operasional</h4>
                                    <p class="text-gray-600">{{ $kontak->jam_operasional }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <h4 class="text-lg font-medium text-gray-800 mb-4">Lokasi Kantor</h4>
                            <div class="rounded-xl overflow-hidden h-64 shadow-md">
                                <img src="{{ asset('storage/' . $kontak->lokasi) }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
