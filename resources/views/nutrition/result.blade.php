<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrition Result</title>
    @vite('resources/css/app.css')
</head>

<body class="box-border">
    <header class="box-border fixed top-0 z-50 backdrop-blur-xl w-full">
        <nav class="flex border border-b-black w-full">
            <ul class="flex justify-between items-center border border-red-200 w-full ">
                <li class=" absolute mx-4 font-bold"><a href="{{url('/')}}">Home</a></li>
            </ul>
        </nav>
    </header>

    <section class="min-h-screen flex items-center justify-center">
        <div class="bg-gradient-to-tl from-60% to-100% to-white from-transparent p-8 rounded-lg shadow-2xl max-w-md w-full">
            <h1 class="text-2xl font-semibold mb-2">Kalkulator Hasil</h1>
            <p class="mb-6 italic">Hasil dari perhitungan status gizi berdasarkan data yang Anda masukkan.</p>
            <div>
                <p><strong>Type:</strong> {{ $type === 'weight' ? 'Berat Badan' : ($type === 'height' ? 'Tinggi Badan' : 'Berat Badan untuk Tinggi Badan') }}</p>
                <p><strong>Berat (kg):</strong> {{ session('weight', 'N/A') }}</p>
                <p><strong>Tinggi (cm):</strong> {{ session('height', 'N/A') }}</p>
                <p><strong>Umur (bulan):</strong> {{ session('age', 'N/A') }}</p>
                <p><strong>Status:</strong> {{ $status }}</p>
                <p><strong>Z-Score:</strong> {{ number_format($z_score, 2) }}</p>
            </div>
            <a href="{{ url()->previous() }}" class="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 mt-4 inline-block">Back</a>
        </div>
    </section>
</body>

</html>
