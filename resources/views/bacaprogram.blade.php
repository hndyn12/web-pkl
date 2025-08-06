<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="container mx-auto px-20 py-8 mx-w-screen-md border-b border-gray-300">
        <h2 class="mb-2 text-3xl tracking-tight font-bold text-gray-900">{{ $activity->judul }}</h2>
        <div class="text-base text-gray-500">
            <a href='#'>{{ $activity->kategori->jenis_kegiatan }}</a>
        </div>
        <div class="h-100 flex justify-center items-center overflow-hidden bg-gray-100">
            <img src="{{ asset('storage/' . $activity->gambar) }}" alt=""
                class="max-h-full max-w-full object-contain">
        </div>

        <p class="my-4 font-light">
            {{ strip_tags($activity->deskripsi) }}
        </p>
        <a href="/programunggulan" class="font-medium text-blue-500 hover">&laquo; Baca Program Unggulan Lainnya</a>
    </article>

</x-layout>
