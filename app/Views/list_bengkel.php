<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="bg-gray-100 h-screen">
    <div class="flex justify-between items-center bg-amber-300 py-2 px-4 shadow-md sicky top-0">
        <div onclick="history.back()" class="text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="flex items-center text-gray-400 gap-x-2 rounded-full bg-white py-2 px-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
            </svg>
            <input class="outline-none" type="text" name="" id="" placeholder="search">
        </div>
        <a href="../Mekaniku/filter.html" class="text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
            </svg>
            <h1 class="text-sm">Filter</h1>
        </a>
    </div>
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="fixed w-full flex justify-center">
            <div class="bg-white mx-8 py-4 px-8 space-y-6 rounded-lg shadow-lg">
                <div>
                    Selamat datang, <?= session()->get('nama_customer'); ?>
                </div>
                <form class="flex justify-end" action="/list_bengkel" method="POST">
                    <input type="hidden" name="lat" id="lat" value="">
                    <input type="hidden" name="long" id="long" value="">
                    <button type="submit" class="bg-blue-600 rounded-lg py-2 px-4 text-white">
                        oke
                    </button>
                </form>
            </div>
        </div>
    <?php endif ?>
    <?php
    function distance($lat1, $lon1, $lat2, $lon2, $unit)
    {

        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K") {
            return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }
    ?>
    <div class="m-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 md:gap-4 gap-2">
        <?php foreach ($bengkel as $b) : ?>
            <?php if ($b['latitude'] != null || $b['longitude'] != null) : ?>
                <a href="/detail_bengkel/<?= $b['id_bengkel']; ?>" class="bg-white rounded-lg flex shadow-md">
                    <div class="">
                        <img class="h-full w-40 rounded-lg" src="/img/<?= $b['gambar']; ?>" alt="">
                    </div>
                    <div class="my-2 mx-4">
                        <h1 class="font-bold"><?= $b['nama_bengkel']; ?></h1>
                        <?php date_default_timezone_set('Asia/Jakarta'); ?>
                        <?php if (date('H:i:s') >= $b['jam_buka'] && date('H:i:s') <= $b['jam_tutup']) : ?>
                            <p class="text-green-600">Buka</p>
                        <?php endif ?>
                        <?php if (date('H:i:s') <= $b['jam_buka'] || date('H:i:s') >= $b['jam_tutup']) : ?>
                            <p class="text-red-600">Tutup</p>
                        <?php endif ?>
                        <p class="text-gray-400">Jarak <?= number_format(distance($lat, $long, $b['latitude'], $b['longitude'], "K"), 2) ?> KM</p>
                        <p class="text-sm underline text-blue-500">lihat detail</p>
                    </div>
                </a>
            <?php endif ?>
        <?php endforeach ?>
    </div>

    <?= $this->endSection(); ?>