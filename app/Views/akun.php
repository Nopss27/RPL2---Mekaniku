<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="bg-gray-100 h-screen">
    <div class="flex justify-between items-center bg-amber-300 p-4 shadow-md sicky top-0">
        <div class="text-gray-500 flex items-center gap-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            <h1 class="text-gray-500 text-xl">Akun</h1>
        </div>
        <?php if (session()->get('id_customer')) : ?>
            <div x-data="{ dropdownOpen: true }" class="relative">
                <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                    </svg>
                </button>
                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                    <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700">
                        Ubah Profile
                    </a>
                    <a href="/login/logout" class="block px-4 py-2 text-sm capitalize text-gray-700 ">
                        Logout
                    </a>
                </div>
            </div>
        <?php endif ?>
    </div>
    <?php if (session()->get('id_customer')) : ?>
        <div class="m-8">
            <div class="flex items-center gap-x-4 mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                </svg>
                <h1 class="text-xl"><?= session()->get('username_customer'); ?></h1>
            </div>
            <div class="space-y-4">
                <div class="space-y-2">
                    <h1 class="font-semibold">Nama Lengkap</h1>
                    <p class="text-gray-500 text-sm"><?= session()->get('nama_customer'); ?></p>
                </div>
                <div class="space-y-2">
                    <h1 class="font-semibold">No Telepon</h1>
                    <p class="text-gray-500 text-sm"><?= session()->get('no_telp_customer'); ?></p>
                </div>
                <div class="space-y-2">
                    <h1 class="font-semibold">Email</h1>
                    <p class="text-gray-500 text-sm">
                        <?php if (session()->get('email_customer') == null ? $email = '-' : $email = session()->get('email_customer')) ?>
                        <?= $email; ?>
                    </p>
                </div>
                <div class="space-y-2">
                    <h1 class="font-semibold">Tanggal Lahir</h1>
                    <p class="text-gray-500 text-sm">
                        <?php if (session()->get('tglLahir_customer') == null ? $tglLahir = '-' : $tglLahir = session()->get('tglLahir_customer')) ?>
                        <?= $tglLahir; ?>
                    </p>
                </div>
            </div>
        </div>
    <?php endif ?>
    <?php if (!session()->get('id_customer')) : ?>
        <div class="m-8 ">
            <div class="bg-white space-y-4 py-8 rounded-lg shadow-md">
                <p class="w-full text-center text-gray-400">anda belum login, silahkan!</p>
                <div class="text-center space-y-4">
                    <div>
                        <a href="/login" class="text-gray-500 bg-amber-300 hover:bg-amber-400 rounded-lg py-2 px-4 shadow-md">Login</a>
                    </div>
                    <div class="text-gray-400">atau</div>
                    <div>
                        <a href="/daftar" class="text-gray-500 bg-amber-300 hover:bg-amber-400 rounded-lg py-2 px-4 shadow-md">Daftar</a>
                    </div>
                </div>
            </div>
        </div>


    <?php endif ?>

    <?= $this->endSection(); ?>