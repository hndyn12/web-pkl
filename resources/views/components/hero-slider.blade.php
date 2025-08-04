 <div class="relative overflow-hidden">
    <!-- Slider Navigation Arrows -->
    <div class="absolute inset-y-0 left-0 z-10 flex items-center pl-4">
        <button
            @click="currentSlide = currentSlide === 0 ? slides.length - 1 : currentSlide - 1"
            class="p-2 text-white bg-black bg-opacity-50 rounded-full hover:bg-opacity-75 transition-all"
            aria-label="Previous slide"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
    </div>
    <div class="absolute inset-y-0 right-0 z-10 flex items-center pr-4">
        <button
            @click="currentSlide = currentSlide === slides.length - 1 ? 0 : currentSlide + 1"
            class="p-2 text-white bg-black bg-opacity-50 rounded-full hover:bg-opacity-75 transition-all"
            aria-label="Next slide"
        >
            <svg xmlns="http://www.w3.org/200/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>

    <!-- Slider Indicators -->
    <div class="absolute bottom-4 left-0 right-0 z-10 flex justify-center space-x-2">
        <template x-for="(slide, index) in slides" :key="index">
            <button
                @click="currentSlide = index"
                class="w-3 h-3 rounded-full transition-all"
                :class="currentSlide === index ? 'bg-white' : 'bg-white bg-opacity-50'"
                :aria-label="Go to slide ${index + 1}"
            ></button>
        </template>
    </div>

    <!-- Slider Content -->
    <div class="relative h-[50vh] md:h-[70vh]" x-data="{
        currentSlide: 0,
        slides: [
            {
                title: 'Selamat Data Di Website Dispora Kabupaten Blitar',
                image: '/image/slider1.png'
            },
            {
                title: 'Info Kegiatan Dispora Kabupaten Blitar',
                description: 'Temukan berbagai kegiatan dan event terbaru yang diselenggarakan oleh Dispora Kabupaten Blitar',
                image: '{{ asset('assets/img/activities-banner.jpg') }}'
            }
        ],
        autoPlay: true,
        timer: null,
        startAutoPlay() {
            this.timer = setInterval(() => {
                this.currentSlide = this.currentSlide === this.slides.length - 1 ? 0 : this.currentSlide + 1;
            }, 5000);
        },
        pauseAutoPlay() {
            if (this.timer) {
                clearInterval(this.timer);
                this.timer = null;
            }
        }
    }" x-init="startAutoPlay()" @mouseenter="pauseAutoPlay()" @mouseleave="startAutoPlay()">
        <template x-for="(slide, index) in slides" :key="index">
            <div
                x-show="currentSlide === index"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute inset-0 w-full h-full flex flex-col justify-center"
            >
                <!-- Background Image -->
                <div class="absolute inset-0 z-0">
                    <img
                        :src="slide.image"
                        :alt="slide.title"
                        class="w-full h-full object-cover"
                    >
                </div>

                <!-- Overlay -->
                <div class="absolute inset-0 bg-black bg-opacity-30 z-1"></div>

                <!-- Content -->
                <div class="relative z-2 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 text-white">
                    <div class="max-w-2xl bg-black bg-opacity-50 p-6 md:p-8 rounded-lg backdrop-blur-sm">
                        <h2 class="text-2xl md:text-4xl font-bold mb-4" x-text="slide.title"></h2>
                        <p class="text-sm md:text-base mb-6" x-text="slide.description"></p>
                    </div>
                </div>
            </div>
        </template>
    </div>
</div>
