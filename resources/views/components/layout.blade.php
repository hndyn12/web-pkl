<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('image/logopersegi.jpg') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('image/logopersegi.jpg') }}">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title }}</title>

    <style>
        [x-cloak] {
            display: none;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .transition-all {
            transition: all 0.3s ease;
        }
    </style>
</head>

<body class="h-full">
    <div class="min-h-full">

        <x-navbar></x-navbar>

        <x-header></x-header>

        <main>
            {{ $slot }}
        </main>
    </div>


    <script>
        function app() {
            return {
                mobileMenuOpen: false,
                currentSlide: 0,
                testimonials: [{
                        name: 'Budi Santoso',
                        position: 'Ketua Karang Taruna',
                        content: 'Program dari Dispora sangat membantu pengembangan pemuda di wilayah kami. Kami mendapatkan banyak pengetahuan dan keterampilan baru.',
                        image: 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ec3235ee-38d1-43a4-bfd8-42d42a236a2e.png'
                    },
                    {
                        name: 'Siti Rahayu',
                        position: 'Atlet Bulutangkis',
                        content: 'Berkat pembinaan dari Dispora, saya bisa meraih prestasi di tingkat nasional. Terima kasih untuk semua dukungannya.',
                        image: 'https://placehold.co/100x100'
                    },
                    {
                        name: 'Ahmad Junaedi',
                        position: 'Pelatih Sepak Bola',
                        content: 'Program pembinaan olahraga dari Dispora sangat bermanfaat untuk menumbuhkan bibit atlet muda yang berkualitas.',
                        image: 'https://placehold.co/100x100'
                    }
                ],
                nextSlide() {
                    this.currentSlide = (this.currentSlide + 1) % this.testimonials.length;
                },
                prevSlide() {
                    this.currentSlide = (this.currentSlide - 1 + this.testimonials.length) % this.testimonials.length;
                }
            }
        }
    </script>

</body>

</html>
