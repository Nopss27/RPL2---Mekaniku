<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit bengkel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php if (session()->getFlashdata('success')) : ?>
        <script>
            alert("<?= session()->getFlashdata('success'); ?>")
        </script>
    <?php endif ?>
    <div class="bg-gray-100 h-full">
        <div class="flex justify-between items-center bg-amber-300 p-4 shadow-md sticky top-0">
            <div class="text-gray-500 flex items-center gap-x-2 ">
                <button type="button" onclick="history.back()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <h1 class="text-gray-500 text-xl">Edit Bengkel</h1>
            </div>
        </div>
        <form action="/bengkel/form_edit/edit_bengkel" method="POST" enctype="multipart/form-data">
            <div class="w-full flex justify-center">
                <div class="max-w-lg w-full leading-normal">
                    <div class="m-8 pb-20 space-y-4">
                        <input type="hidden" name="id_bengkel" id="" value="<?= $bengkel['id_bengkel']; ?>">
                        <input type="hidden" name="nama_pemilik" id="" value="<?= $bengkel['nama_pemilik']; ?>">
                        <input type="hidden" name="no_telp" id="" value="<?= $bengkel['no_telp']; ?>">
                        <input type="hidden" name="username" id="" value="<?= $bengkel['username']; ?>">
                        <input type="hidden" name="password" id="" value="<?= $bengkel['password']; ?>">
                        <input type="hidden" name="whatsapp" id="" value="<?= $bengkel['whatsapp']; ?>">
                        <input type="hidden" name="gambarLama" value="<?= $bengkel['gambar']; ?>">
                        <div class="w-full">
                            <label for="" class="block">Nama Bengkel</label>
                            <input class="w-full bg-gray-200 py-2 px-4 rounded-lg outline-none border border-gray-400" type="text" name="nama_bengkel" placeholder="masukan nama bengkel" value="<?= $bengkel['nama_bengkel']; ?>">
                        </div>
                        <div>
                            <label class="block" for="">Gambar</label>
                            <input name="gambar" type="file" id="gambar" class="hidden custom-file-input bg-white rounded md:w-4/6 w-full border text-gray-400" value="<?= $bengkel['gambar']; ?>" onchange="previewImg()">
                            <label class="custom-file-label flex" for="gambar">
                                <p class="bg-gray-200 w-26 px-2 text-sm py-1 text-center text-md rounded border-2 border-black">Choose File</p>
                                <input type="text" name="gambar" class="bg-white rounded md:w-3/6 w-full border text-gray-400 px-2" placeholder="Pilih gambar" value="<?= $bengkel['gambar']; ?>">
                            </label>
                        </div>
                        <div class="flex items-center justify-center">
                            <div class="w-full">
                                <label class="block" for="">Jam Buka</label>
                                <input class="bg-gray-200 rounded-lg py-2 px-4 border border-gray-400" type="time" name="jam_buka" id="" value="<?= $bengkel['jam_buka']; ?>">
                            </div>
                            <div class="w-full">
                                <label class="block" for="">Jam Tutup</label>
                                <input class="bg-gray-200 rounded-lg py-2 px-4 border border-gray-400" type="time" name="jam_tutup" value="<?= $bengkel['jam_tutup']; ?>">
                            </div>
                        </div>
                        <div>
                            <label class="block" for="">Alamat</label>
                            <textarea name="alamat" id="" class="bg-gray-200 rounded-lg py-2 px-4 border border-gray-400 outline-none w-full"><?= $bengkel['alamat']; ?></textarea>
                        </div>
                        <div class="border-b-2 pb-2 pt-4 flex justify-between items-center">
                            <div class="font-semibold ">
                                Setting Lokasi
                            </div>
                            <button class="" type="button" id="btn-buka">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                        </div>
                        <div>
                            <label class="block" for="">Latitude</label>
                            <input class="bg-gray-200 rounded-lg py-2 px-4 border border-gray-400 outline-none" type="text" name="lat" id="" value="<?= $bengkel['latitude']; ?>">
                        </div>
                        <div>
                            <label class="block" for="">Longitude</label>
                            <input class="bg-gray-200 rounded-lg py-2 px-4 border border-gray-400 outline-none" name="long" type="text" value="<?= $bengkel['longitude']; ?>">
                        </div>
                        <div>
                            <label class="block" for="">Link Lokasi Bengkel</label>
                            <textarea class="bg-gray-200 rounded-lg py-2 px-4 border border-gray-400 outline-none w-full" name="link" type="text"><?= $bengkel['link']; ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" name="edit" class="fixed bottom-20 right-8 bg-amber-300 rounded-full p-4 shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
            </button>
        </form>
        <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="modal-petunjuk">
            <div class="h-screen flex items-center justify-center">
                <div class="w-full max-w-2xl bg-white px-8 pb-8 mx-4 leading-normal shadow-lg rounded-lg">

                    <div class="flex justify-between items-center my-8 pb-2">
                        <div class="">
                            <div class="uppercase text-gray-600">Petunjuk Pengisian</div>
                        </div>
                        <button type="button" id="btn-tutup">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div class="overflow-y-scroll h-96">
                        <div class="font-sm space-y-2">
                            <h1 class="flex gap-x-2">
                                <div>1. </div>
                                <div>
                                    Di Komputer, buka <a href="https://maps.google.com/" class="text-blue-400 underline">Google Maps</a>
                                </div>
                            </h1>
                            <h1 class="flex gap-x-2">
                                <div>
                                    2.
                                </div>
                                <div>
                                    Untuk Mencari Latitude & longitude (garis lintang & bujur), cari tempat anda kemudian tekan sampai muncul pin merah kemudian <span class="font-bold">klik kanan</span> dan <span class="font-bold">copy angka</span> seperti berikut :
                                </div>
                            </h1>
                            <div class="w-full">
                                <img src="/img/copyLatLong.png" alt="">
                            </div>
                            <div class="flex gap-x-2">
                                <div>3.</div>
                                <div>ini adalah text yang berhasil di copy, -6.936562313119051 (latitude), 107.61207813115479 (longitude). kemudian isikan texfield seperti berikut :</div>
                            </div>
                            <div class="w-full">
                                <img src="/img/isiLatLong.png" alt="">
                            </div>
                            <div class="flex gap-x-2">
                                <div>4.</div>
                                <div>Isi Link Lokasi Bengkel, pilih pin kemudian <span class="font-bold">Bagikan</span> > <span class="font-bold">Sematkan Peta</span> > <span class="font-bold">Salin HTML</span> seperti berikut :</div>
                            </div>
                            <div class="w-full">
                                <img src="/img/bagikan.png" alt="">
                            </div>
                            <div class="w-full">
                                <img src="/img/sematkanPeta.png" alt="">
                            </div>
                            <div class="flex gap-x-2">
                                <div>5.</div>
                                <div>lalu isikan Link Lokasi Bengkel, seperti berikut:</div>
                            </div>
                            <div class="w-full">
                                <img class="" src="/img/linkLokasi.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white flex justify-between py-2 items-center fixed bottom-0 w-full divide-x-2">

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
    </div>

    <script>
        let mmd = document.getElementById("modal-petunjuk");
        let buka = document.getElementById("btn-buka");
        let tutup = document.getElementById("btn-tutup");

        buka.onclick = function() {
            mmd.style.display = "block";
        }
        // We want the modal to close when the OK button is clicked
        tutup.onclick = function() {
            mmd.style.display = "none";
        }
    </script>
</body>

</html>