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

    <?= $this->renderSection('content'); ?>
    <div class="bg-white flex justify-between py-2 items-center fixed bottom-0 w-full divide-x-2">
        <form class="text-gray-500 w-full" action="/list_bengkel" method="POST">
            <input type="hidden" name="lat" id="lat" value="">
            <input type="hidden" name="long" id="long" value="">
            <button type="submit" class="w-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 w-full" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                </svg>
                <h1 class="text-sm">List Bengkel</h1>
            </button>
        </form>
        <button type="button" class="text-gray-500 w-full">
            <a href="/akun">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 w-full" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                </svg>
                <h1 class="text-sm">Akun</h1>
            </a>
        </button>
    </div>
    </div>

    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            const lat = position.coords.latitude;
            const long = position.coords.longitude;

            document.getElementById("lat").value = lat;
            document.getElementById("long").value = long;
        }

        getLocation();
    </script>
</body>

</html>