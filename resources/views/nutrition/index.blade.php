<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrition Calculator</title>
    @vite('resources/css/app.css')
</head>
<style>
    .hidden {
        display: none;
    }
</style>

<body class="box-border">

    <header class="box-border fixed top-0 z-50 backdrop-blur-xl w-full">
        <nav class="flex border border-b-black w-full">
            <ul class="flex justify-between items-center border border-red-200 w-full ">
                <li class=" absolute mx-4 font-bold"><a href="{{url('/')}}">Home</a></li>
                <div class="flex gap-4 font-semibold pr-2  box-border h-20  justify-end items-center w-[100%] border">
                    <li><a href="#bb"
                            class="section-link  hover:text-[1.2rem] transition-all hover:text-yellow-700">Berat
                            Badan</a></li>
                    <li><a href="#tb"
                            class="section-link hover:text-[1.2rem] transition-all hover:text-yellow-700 ">Tinggi
                            Badan</a></li>
                    <li><a href="#pb"
                            class="section-link hover:text-[1.2rem] transition-all hover:text-yellow-700 ">Panjang
                            Badan</a></li>
                </div>
            </ul>
        </nav>
    </header>

    <section id="bb" class="section ">
        <div class="absolute -z-10 w-screen h-screen  border border-black">
            <img src="background/index.jpg" alt="Example Image" class=" w-full h-full object-cover">
        </div>
        <div class=" flex items-center justify-center min-h-screen mx-10 ">
            <div
                class="bg-gradient-to-tl from-60% to-100% to-white  from-transparent p-8 rounded-lg shadow-2xl max-w-md w-full   ">
                <h1 class="text-2xl font-semibold mb-2 ">Kalkulator Berat Badan</h1>
                <p class="mb-6 italic text-sm ">Standart Berat Badan Menurut Umur 0-60 Bulan</p>
                <form method="POST" action="{{ route('calculate') }}">
                    @csrf
                    <input type="hidden" name="type" value="weight">
                    <div class="mb-4">
                        <label for="weight" class="block text-sm font-medium text-gray-700">Berat (kg):</label>
                        <input type="text" id="weight" name="weight" autofocus value="{{ old('weight') }}" required
                            class="px-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('weight')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="age_months" class="block text-sm font-medium text-gray-700">Umur (bulan):</label>
                        <input type="text" id="age_months" name="age_months" value="{{ old('age_months') }}"
                            maxlength="2" required
                            class="px-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('age_months')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="gender" class="block text-sm font-medium text-gray-700">Jenis Kelamin:</label>
                        <select id="gender" name="gender" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('gender')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">Calculate</button>
                </form>
            </div>
        </div>
    </section>

    <section id="tb" class="section hidden">
        <div class="absolute -z-10 w-full h-full  border border-black">
            <img src="background/index.jpg" alt="Example Image" class=" w-full h-full object-cover">
        </div>
        <div class=" flex items-center justify-center min-h-screen ">
            <div
                class="bg-gradient-to-tl from-60% to-100% to-white  from-transparent p-8 rounded-lg shadow-2xl max-w-md w-full   ">
                <h1 class="text-2xl font-semibold mb-2 ">Kalkulator Tinggi Badan</h1>
                <p class="mb-6 italic">Standar Tinggi Badan Umur Menurut 0-60 Bulan</p>
                <form method="POST" action="{{ route('calculate') }}">
                    @csrf
                    <input type="hidden" name="type" value="height">
                    <div class="mb-4">
                        <label for="height" class="block text-sm font-medium text-gray-700">Tinggi Badan (cm):</label>
                        <input type="text" id="height" name="height" value="{{ old('height') }}" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('height')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="age_months" class="block text-sm font-medium text-gray-700">Umur (bulan):</label>
                        <input type="text" id="age_months" name="age_months" value="{{ old('age_months') }}" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('age_months')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="gender" class="block text-sm font-medium text-gray-700">Jenis Kelamin:</label>
                        <select id="gender" name="gender" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('gender')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">Calculate</button>
                </form>
            </div>
        </div>
    </section>

    <section id="pb" class="section hidden">
        <div class="absolute -z-10 w-full h-full border border-black">
            <img src="background/index.jpg" alt="Example Image" class="w-full h-full object-cover">
        </div>
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-gradient-to-tl from-60% to-100% to-white from-transparent p-8 rounded-lg shadow-2xl max-w-md w-full">
                <h1 class="text-2xl font-semibold mb-2">Kalkulator Berat Badan menurut Tinggi Badan</h1>
                <p class="mb-6 italic">Standar Berat Badan menurut Tinggi Badan</p>
                <form method="POST" action="{{ route('calculate') }}">
                    @csrf
                    <input type="hidden" name="type" value="weight-for-height">
                    <div class="mb-4">
                        <label for="weight" class="block text-sm font-medium text-gray-700">Berat (kg):</label>
                        <input type="text" id="weight" name="weight" value="{{ old('weight') }}" 
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('weight')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                        <label for="height1" class="block text-sm font-medium text-gray-700">Tinggi (cm):</label>
                        <input type="text" id="height1" name="height" value="{{ old('height') }}" 
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('height')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="gender" class="block text-sm font-medium text-gray-700">Jenis Kelamin:</label>
                        <select id="gender" name="gender" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('gender')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">Calculate</button>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('.section-link').forEach(link => {
            link.addEventListener('click', function (event) {
                event.preventDefault();

                // Sembunyikan semua section
                document.querySelectorAll('.section').forEach(section => {
                    section.classList.add('hidden');
                });

                // Tampilkan section yang sesuai dengan ID
                const targetId = this.getAttribute('href').substring(1);
                document.getElementById(targetId).classList.remove('hidden');

                // Ubah URL tanpa reload halaman
                history.pushState(null, null, `#${targetId}`);
            });
        });

        // Menampilkan section sesuai hash pada URL saat halaman pertama kali dimuat
        window.addEventListener('DOMContentLoaded', (event) => {
            const hash = window.location.hash.substring(1);
            if (hash) {
                document.querySelectorAll('.section').forEach(section => {
                    section.classList.add('hidden');
                });
                document.getElementById(hash).classList.remove('hidden');
            }
        });
    </script>

</body>

</html>
