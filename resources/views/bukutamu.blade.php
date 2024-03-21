@extends('layout.main')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .custom-input {
            border-color: purple;
        }

        .custom-input:focus {
            border-color: pink;
            outline: none;
        }

        .form-container {
            margin-top: 3rem;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-8 text-center">Buku Tamu</h1>
        <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-md overflow-hidden form-container">
            <form class="p-6">
                <div class="mb-6">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap:</label>
                    <input type="text" id="name" name="name" class="custom-input appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" class="custom-input appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-6">
                    <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Pesan:</label>
                    <textarea id="message" name="message" rows="4" class="custom-input appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                </div>
                <div class="mb-6">
                    <label for="rating" class="block text-gray-700 text-sm font-bold mb-2">Rating:</label>
                    <select id="rating" name="rating" class="custom-input appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="5">★★★★★</option>
                        <option value="4">★★★★</option>
                        <option value="3">★★★</option>
                        <option value="2">★★</option>
                        <option value="1">★</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="contact-method" class="block text-gray-700 text-sm font-bold mb-2">Metode Kontak:</label>
                    <div class="flex items-center">
                        <input type="radio" id="contact-email" name="contact-method" value="email" class="mr-2">
                        <label for="contact-email" class="mr-4">Email</label>
                        <input type="radio" id="contact-phone" name="contact-method" value="phone" class="mr-2">
                        <label for="contact-phone">Telepon</label>
                    </div>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-gradient-to-r from-pink-500 to-purple-700 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded">Kirim Pesan</button>
                </div>
            </form>
        </div>
    </div>
</body>

@endsection
