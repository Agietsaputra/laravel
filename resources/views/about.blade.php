@extends('navbar')

@section('title', 'Dashboard - Laravel Admin Panel With Login and Registration')

@section('content')
<section class="dark:bg-gray-900 py-12">
    <div class="container mx-auto px-6 lg:px-8 py-12">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-black sm:text-4xl">Kredit  Motor</h2>
            <p class="mt-4 text-lg leading-6 text-black">
                JENIS JENIS Motor Yang Tersedia
            </p>
        </div>

        <div class="mt-10 flex flex-wrap justify-center">
            <div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden m-4 hover">
                <img class="w-full h-56 object-cover object-center hover-zoom"
                    src="https://i.pinimg.com/564x/d3/5a/15/d35a159e36cb91d309292487606dd685.jpg"
                    alt=""
                    style="transition: transform 0.5s ease;">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-black"> Scoopy</h3>
                    <p class="mt-4 text-gray-600">Warna scoopy 2022 ada Scoopy Prestige White, Black, Brown, Stylish Red, Fashion Black, Fashion Blue, Sporty Red, Sporty Black.</p>
                </div>
            </div>

            <div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden m-4">
                <img class="w-full h-56 object-cover object-center hover-zoom"
                    src="https://i.pinimg.com/564x/a0/31/66/a031669aeba03c3b4e2866ec0ab7240d.jpg" alt=""
                    style="transition: transform 0.5s ease;">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Vario 150</h3>
                    <p class="mt-4 text-gray-600">Honda Vario 150 eSP versi terbaru 2021 kini tersedia juga dalam varian Sporty dengan 2 pilihan warna yang lebih berani dan harga yang menarik.</p>
                </div>
            </div>

            <div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden m-4">
                <img class="w-full h-56 object-cover object-center hover-zoom"
                    src="https://i.pinimg.com/564x/ef/d5/dc/efd5dc9e10b1562f2c49bf7ea18da5f8.jpg" alt=""
                    style="transition: transform 0.5s ease;">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Beat Street</h3>
                    <p class="mt-4 text-gray-600">honda beat street 2020 hadir dengan desain baru dan fitur lampu led serta speedometer digital. honda beat street 2020.</p>
                </div>
            </div>

            <div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden m-4">
                <img class="w-full h-56 object-cover object-center hover-zoom"
                    src="https://i.pinimg.com/564x/78/d7/80/78d780c6df8a9cd1fe06c92a360dabcf.jpg"
                    alt=""
                    style="transition: transform 0.5s ease;">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Beat</h3>
                    <p class="mt-4 text-gray-600">mendapatkan warna baru yang berkesan mewah. Warna baru Honda PCX160 2023 itu melengkapi warna pilihan yang sudah ada..</p>
                </div>
            </div>

            <div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden m-4">
                <img class="w-full h-56 object-cover object-center hover-zoom"
                 src="https://i.pinimg.com/564x/3e/58/75/3e58752cbeffe4593b4335c93ddf7db4.jpg" alt=""
                    style="transition: transform 0.5s ease;">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">NMAX</h3>
                    <p class="mt-4 text-gray-600">gallery new yamaha nmax 155 2020 bisa dilihat pada foto di bawah ini. gallery new yamaha nmax 155 2020 terlihat sangat berbeda.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<script>
    // Menambahkan efek hover zoom pada semua gambar dengan class "hover-zoom"
    document.querySelectorAll('.hover-zoom').forEach(function(img) {
        img.addEventListener('mouseover', function() {
            this.style.transform = 'scale(1.2)';
        });

        img.addEventListener('mouseout', function() {
            this.style.transform = 'scale(1)';
        });
    });
</script>
@endsection
{{-- @extends('footer') --}}
