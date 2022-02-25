<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mekaniku</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>

	<div class="w-full text-gray-700 bg-white py-2">
		<div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
			<div class="p-4 flex flex-row items-center justify-between">
				<div class="flex items-center gap-x-4">
					<img class="w-8" src="/img/Logo.png" alt="">
					<a href="/" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Mekaniku</a>
				</div>
				<button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
					<svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
						<path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
						<path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
					</svg>
				</button>
			</div>
			<nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden md:flex md:justify-end md:flex-row">
				<a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">About</a>
				<a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Contact</a>
				<a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent border-2 border-gray-800 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/login">Login</a>
				<a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent border-2 border-gray-800 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/daftar">Daftar</a>
			</nav>
		</div>
	</div>

	<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
	<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

	<section class="relative  bg-blueGray-50">
		<div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
			<div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url('/img/bgLanding.png');">
				<span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
			</div>
			<div class="container relative mx-auto">
				<div class="items-center flex flex-wrap">
					<div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
						<div class="">
							<h1 class="text-white font-semibold text-5xl">
								Mekaniku
							</h1>
							<p class="mt-4 text-lg text-blueGray-200">
								Temukan bengkel yang ada disekitar atau panggil mekanik lokasi anda
							</p>
							<form action="/list_bengkel" method="POST">
								<input type="hidden" name="lat" id="lat" value="">
								<input type="hidden" name="long" id="long" value="">
								<button type="" class="mt-4 bg-amber-400 hover:bg-amber-300 py-2 px-8 rounded-md text-white">
									Mulai
								</button>
							</form>

						</div>
					</div>
				</div>
			</div>
			<div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
				<svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
					<polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
				</svg>
			</div>
		</div>
		<section class="pb-10 bg-blueGray-200 -mt-24">
			<div class="container mx-auto px-4">
				<div class="flex flex-wrap justify-center w-full">
					<div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
						<div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
							<div class="px-4 py-5 flex-auto">
								<div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
									</svg>
								</div>
								<h6 class="text-xl font-semibold">Temukan Bengkel disekitar</h6>
								<p class="mt-2 mb-4 text-blueGray-500">
									Membantu memudahkan para pengendara motor untuk mengetahui informasi seputar bengkel yang ada di sekitar
								</p>
							</div>
						</div>
					</div>
					<div class="w-full px-4 md:w-4/12 text-center">
						<div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
							<div class="px-4 py-5 flex-auto">
								<div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lightBlue-400">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
										<path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
									</svg>
								</div>
								<h6 class="text-xl font-semibold">Panggil Mekanik ke Lokasi anda</h6>
								<p class="mt-2 mb-4 text-blueGray-500">
									Membantu memudahkan para pengendara motor untuk memperbaiki kendaraannya di lokasi anda berada.
								</p>
							</div>
						</div>
					</div>
				</div>

				<footer class="relative  pt-8 pb-6 mt-1">
					<div class="container mx-auto px-4">
						<div class="flex flex-wrap items-center md:justify-between justify-center">
							<div class="w-full md:w-6/12 px-4 mx-auto text-center">
								<div class="text-sm text-blueGray-500 font-semibold py-1">
									<span>Copyright &copy; Mekaniku <?= date('Y'); ?></span>
								</div>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</section>
	</section>
	<div class="bg-white rounded-md shadow-md px-2 w-40 text-gray-400"><span>Visitor Total :</span> <?= $total_view; ?></div>

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