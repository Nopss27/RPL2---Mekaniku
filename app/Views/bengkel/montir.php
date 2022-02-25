<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Montir</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="bg-gray-100 h-screen pb-20">
        <div class="flex justify-between items-center bg-amber-300 p-4 shadow-md sticky top-0">
            <div class="text-gray-500">
                <h1 class="text-gray-500 text-xl">Montir</h1>
            </div>
            <div class="text-gray-500 flex items-centers">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-300 opacity-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                </svg>
            </div>
        </div>

        <a href="/bengkel/montir/tambah_montir" class="fixed bottom-20 right-8 bg-amber-300 rounded-full p-4 shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
            </svg>
        </a>

        <?php foreach ($montir as $m) : ?>
            <?php if ($m['id_bengkel'] == session()->get('id_bengkel')) : ?>
                <div class="w-full flex justify-center">
                    <div class="max-w-lg w-full leading-normal">
                        <div class="bg-white rounded-md p-4 mx-4 my-2 flex items-center justify-between shadow-md">
                            <div class="space-y-2">
                                <h1><?= $m['nama']; ?></h1>
                                <p><?= $m['no_telp']; ?></p>
                                <p>
                                    <?php if ($m['jenis_kelamin'] != null) : ?>
                                        <?php if ($m['jenis_kelamin'] == 'l' ? $jk = 'Laki-laki' : $jk = 'Perempuan') ?>
                                        <?= $jk; ?>
                                    <?php endif ?>
                                </p>
                                <p><?= $m['email']; ?></p>
                            </div>
                            <button class="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif ?>
            <?php if ($m['id_bengkel'] != session()->get('id_bengkel')) : ?>
                <div class="text-gray-400 flex items-center justify-center h-screen -mt-20">
                    belum ada montir yang ditambahkan!
                </div>
            <?php endif ?>
        <?php endforeach ?>

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