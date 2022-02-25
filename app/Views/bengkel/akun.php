<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>
    <div class="bg-gray-100 h-screen">
        <div class="flex justify-between items-center bg-amber-300 p-4 shadow-md sicky top-0">
            <div class="text-gray-500 flex items-center gap-x-2">
                <h1 class="text-gray-500 text-xl">Akun</h1>
            </div>
            <?php if (session()->get('id_bengkel')) : ?>
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
                        <a href="/bengkel/login/logout" class="block px-4 py-2 text-sm capitalize text-gray-700 ">
                            Logout
                        </a>
                    </div>
                </div>
            <?php endif ?>
        </div>
        <div class="m-8">
            <div class="flex items-center gap-x-4 mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                </svg>
                <h1 class="text-xl"><?= session()->get('username'); ?></h1>
            </div>
            <div class="space-y-4">
                <div class="space-y-2">
                    <h1 class="font-semibold">Nama Pemilik</h1>
                    <p class="text-gray-500 text-sm"><?= session()->get('nama_pemilik'); ?></p>
                </div>
                <div class="space-y-2">
                    <h1 class="font-semibold">No Telepon</h1>
                    <p class="text-gray-500 text-sm"><?= session()->get('no_telp'); ?></p>
                </div>
            </div>
        </div>
        <div class="bg-white flex justify-between py-2 items-center fixed bottom-0 w-full divide-x-2">
            <button type="button" class="text-gray-500 w-full">
                <a href="/bengkel">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 w-full" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    <h1 class="text-sm">Bengkel Saya</h1>
                </a>
            </button>
            <button type="button" class="text-gray-500 w-full">
                <a href="/bengkel/montir">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 w-full" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                    </svg>
                    <h1 class="text-sm">Montir</h1>
                </a>
            </button>
            <button type="button" class="text-gray-500 w-full">
                <a href="/bengkel/akun">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 w-full" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                    <h1 class="text-sm">Akun</h1>
                </a>
            </button>
        </div>
    </div>
</body>

</html>