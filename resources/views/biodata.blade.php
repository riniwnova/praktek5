@extends('layout.main')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .custom-label {
            color: #4F46E5;
        }

        .custom-button {
            background-color: #4F46E5;
        }

        .custom-button:hover {
            background-color: #4338CA;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-8 text-center">Biodata</h1>
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
            <div class="md:flex">
                <div class="md:w-1/3">
                    <img class="h-full w-full object-cover object-center" src="{{ asset('assets/img/hc.jpeg') }}" alt="Photo">
                </div>
                <div class="md:w-2/3 p-4">
                    <h2 class="text-gray-900 text-2xl font-bold">Lee Haechan</h2>
                    <p class="mt-2 text-gray-600">Lee Haechan adalah seorang makeup artist berpengalaman dan influencer kecantikan yang telah aktif di industri kecantikan selama lebih dari sepuluh tahun. Dikenal karena keahliannya dalam menciptakan tampilan yang unik dan menarik, John telah bekerja dengan berbagai merk. 
                        <div class="mt-4">
                        <label class="text-gray-700 custom-label">Age:</label>
                        <span class="text-gray-900 font-semibold">25 years</span>
                    </div>
                    <div class="mt-4">
                        <label class="text-gray-700 custom-label">Occupation:</label>
                        <span class="text-gray-900 font-semibold">Make Up Artist</span>
                    </div>
                    <div class="mt-4">
                        <label class="text-gray-700 custom-label">Location:</label>
                        <span class="text-gray-900 font-semibold">New York, USA</span>
                    </div>
                    <div class="mt-6">
                    <button type="submit" class="bg-gradient-to-r from-pink-500 to-purple-700 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded">Edit Biodata</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
