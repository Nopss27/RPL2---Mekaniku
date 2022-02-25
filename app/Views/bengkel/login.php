<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Bengkel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <script type="text/javascript">
            alert("<?= session()->getFlashdata('pesan'); ?>");
        </script>
    <?php endif ?>
    <div class="flex justify-center items-center h-screen">
        <div class="flex items-center text-stone-500 justify-between fixed top-0 right-0 left-0 mt-4 mx-8">
            <div class="flex items-center gap-x-4">
                <button onclick="history.back()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <h1 class="text-2xl font-semibold text-stone-500">Login Bengkel</h1>
            </div>
            <img class="w-12" src="/img/Logo.png" alt="">
        </div>
        <div class="w-full max-w-sm leading-normal">
            <div class="mx-8">
                <form class="space-y-4" action="/bengkel/login/auth" method="POST">
                    <input type="hidden" name="lat" id="lat" value="">
                    <input type="hidden" name="long" id="long" value="">
                    <div class="space-y-2">
                        <label for="" class="block text-gray-400">Username</label>
                        <input class="border w-full bg-gray-100 rounded-lg border-gray-400 outline-none py-2 px-4" type="text" placeholder="Masukan Username" name="username" value="<?= old('username'); ?>">
                        <div class="text-red-500 ml-1 flex gap-x-2 items-center">
                            <?php if ($validation->hasError('username')) : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            <?php endif ?>
                            <?= $validation->getError('username'); ?>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label for="" class="block text-gray-400">Password</label>
                        <input class="border w-full bg-gray-100 rounded-lg border-gray-400 outline-none py-2 px-4" type="text" placeholder="Masukan Password" name="password" value="<?= old('password'); ?>">
                        <div class="text-red-500 ml-1 flex gap-x-2 items-center">
                            <?php if ($validation->hasError('password')) : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            <?php endif ?>
                            <?= $validation->getError('password'); ?>
                        </div>
                    </div>
                    <div>
                        <input type="checkbox">
                        <label class="text-gray-400" for="">Remember me</label>
                    </div>
                    <div class="">
                        <button type="submit" name="login" class="bg-amber-300 py-2 px-6 rounded-md hover:bg-amber-400 text-stone-500 mb-4 shadow-md">
                            Login
                        </button>
                    </div>
                </form>
                <div class="text-gray-400 space-y-2">
                    <a class="text-blue-500" href="">lupa Password?</a>
                    <p>Belum punya akun?<a href="/bengkel/daftar" class="text-blue-500">Daftar Bengkel</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>