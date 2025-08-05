    <!-- Tim Dinas -->
    <section id="about" class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Data Kepegawaian</h2>
                <div class="w-20 h-1 bg-yellow-400 mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach (\App\Models\Employee::all() as $employee)
                    <div
                        class="text-center bg-white p-5 rounded-lg overflow-hidden transition-all transform hover:scale-105 shadow-md">
                        <div class="rounded-full overflow-hidden w-40 h-40 mx-auto mb-4 border-4 border-blue-100">
                            <img src="{{ asset('storage/' . $employee->foto) }}" alt=""
                                class="w-full h-full object-cover">
                        </div>
                        <h4 class="text-xl font-semibold">{{ $employee->nama }}</h4>
                        <p class="text-blue-600 mb-2">{{ $employee->jabatan }}</p>
                    </div>
                @endforeach
            </div>
            {{ $slot }}
    </section>
