<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Montir</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="bg-gray-100 h-screen pb-20">
        <div class="flex justify-between items-center bg-amber-300 p-4 shadow-md sticky top-0">
            <div onclick="history.back()" class="text-gray-500 flex items-center gap-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                <h1 class="text-gray-500 text-xl">Tambah Montir</h1>
            </div>
            <form action="/bengkel/montir/tambah" method="POST">
                <button type="submit" class="text-gray-500 flex items-centers gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    Simpan
                </button>
        </div>
        <div class="w-full flex justify-center">
            <div class="max-w-lg w-full leading-normal">
                <div class="m-8 space-y-4">
                    <input type="hidden" name="id_bengkel" id="" value="<?= session()->get('id_bengkel'); ?>">
                    <div class="space-y-2">
                        <label for="" class="block text-gray-400">Nama Lengkap</label>
                        <input class="border w-full bg-gray-200 rounded-lg border-gray-400 outline-none py-2 px-4" type="text" placeholder="Masukan Nama lengkap" name="nama">
                    </div>
                    <div class="space-y-2">
                        <label for="" class="block text-gray-400">No Telepon</label>
                        <input class="border w-full bg-gray-200 rounded-lg border-gray-400 outline-none py-2 px-4" type="text" placeholder="Nomor Telepon Montir" name="no_telp">
                    </div>
                    <div class="space-y-2">
                        <label for="" class="block text-gray-400">No Whatsapp</label>
                        <input class="border w-full bg-gray-200 rounded-lg border-gray-400 outline-none py-2 px-4" type="text" placeholder="Nomor Whatsapp Montir" name="whatsapp">
                    </div>
                    <div class="space-y-2 text-gray-500">
                        <label for="" class="block text-gray-400">jenis kelamin</label>
                        <input type="radio" name="jk" value="l"> Laki-laki
                        <input type="radio" name="jk" value="p"> Perempuan
                    </div>
                    <div class="space-y-2">
                        <label for="" class="block text-gray-400">Email</label>
                        <input class="border w-full bg-gray-200 rounded-lg border-gray-400 outline-none py-2 px-4" type="text" placeholder="Masukan Email Montir" name="email">
                    </div>
                </div>
            </div>
        </div>
        </form>

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