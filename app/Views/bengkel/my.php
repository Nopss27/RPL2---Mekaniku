<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Saya</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php if (session()->getFlashdata('success')) : ?>
        <script>
            alert("<?= session()->getFlashdata('success'); ?>")
        </script>
    <?php endif ?>
    <div class="bg-gray-100 h-full pb-20">
        <div class="flex justify-between items-center bg-amber-300 p-4 shadow-md sticky top-0">
            <div class="text-gray-500">
                <h1 class="text-gray-500 text-xl">Bengkel Saya</h1>
            </div>
            <div href="" class="text-gray-500 flex items-centers">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-300" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                </svg>
            </div>
        </div>
        <?php foreach ($bengkel as $b) : ?>
            <?php if ($b['id_bengkel'] == session()->get('id_bengkel')) : ?>
                <?php if ($b['nama_bengkel'] == null) : ?>
                    <div class="flex items-center justify-center h-screen -my-20 ">
                        <a class="bg-amber-300 rounded-lg py-2 px-5 shadow-md" href="/bengkel/form_tambah">
                            Tambah Bengkel
                        </a>
                    </div>
                <?php endif ?>
                <?php if ($b['nama_bengkel'] != null) : ?>
                    <div class="w-full flex justify-center">
                        <div class="max-w-lg w-full leading-normal">
                            <div class="h-64 w-full bg-cover" style="background-image: url(/img/<?= $b['gambar']; ?>)">
                            </div>
                            <div class="m-4 divide-y-2">
                                <div class="py-2">
                                    <h1 class="font-semibold">Nama Bengkel</h1>
                                    <p><?= $b['nama_bengkel']; ?></p>
                                </div>
                                <div class="py-2 ">
                                    <h1 class="font-semibold">Nama Pemilik</h1>
                                    <p><?= $b['nama_pemilik']; ?></p>
                                </div>
                                <div class="py-2">
                                    <h1 class="font-semibold">Jam Operasi</h1>
                                    <div class="flex w-full">
                                        <h1 class="w-1/3">Buka</h1>
                                        <p class="w-2/3"><?= $b['jam_buka']; ?></p>
                                    </div>
                                    <div class="flex w-full">
                                        <h1 class="w-1/3">Tutup</h1>
                                        <p class="w-2/3"><?= $b['jam_tutup']; ?></p>
                                    </div>
                                </div>
                                <div class="py-2">
                                    <h1 class="font-semibold">Alamat</h1>
                                    <p><?= $b['alamat']; ?></p>
                                </div>
                                <div class="py-2">
                                    <h1 class="font-semibold">Kontak</h1>
                                    <div class="flex w-full">
                                        <h1 class="w-1/3">No Telepon</h1>
                                        <p class="w-2/3"><?= $b['no_telp']; ?></p>
                                    </div>
                                    <div class="flex w-full">
                                        <h1 class="w-1/3">No Whatsapp</h1>
                                        <p class="w-2/3"><?= $b['whatsapp']; ?></p>
                                    </div>
                                </div>
                                <div class="py-2 space-y-2">
                                    <h1 class="font-semibold">Lokasi Bengkel</h1>
                                    <div class="bg-white rounded-lg overflow-x-scroll w-full h-40">
                                        <?= $b['link']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="/bengkel/form_edit" method="POST">
                        <input type="hidden" name="edit" id="" value="<?= $b['id_bengkel']; ?>">
                        <button type="submit" class="fixed flex items-center justify-center bottom-20 right-8 bg-amber-300 text-gray-500 text-xs rounded-full h-14 w-14 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                            Edit
                        </button>
                    </form>
                <?php endif ?>
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