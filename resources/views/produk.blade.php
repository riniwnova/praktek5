@extends('layout.main')

@section('content')
    <div class="container mx-auto py-8 md:w-3/4">
        <h1 class="text-3xl font-bold mb-8 text-center">Product</h1>
        <div class="md:flex md:flex-row-reverse"> 
            <div class="md:w-1/2 mb-8">
                <div class="md:flex">
                    <div class="md:w-1/2 p-4 bg-white">
                        <img class="h-auto w-full object-cover object-center" src="{{ asset('assets/img/ss.jpeg') }}" alt="Product Image" style="max-height: 250px;"> <!-- Mengatur tinggi maksimum gambar agar tidak terlalu besar -->
                    </div>
                    <div class="md:w-1/2 p-4 bg-white">
                        <h2 class="text-gray-900 text-2xl font-bold">Matte Priming UV Shield Sunscreen</h2>
                        <p class="mt-2 text-gray-600">A primer and sunscreen in one with broad-spectrum SPF 37 to help protect skin while prepping it for makeup application.</p>
                        <div class="mt-4">
                            <span class="text-gray-700">Price:</span>
                            <span class="text-gray-900 font-semibold">$20.00</span>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <a href="#" class="text-blue-500 font-semibold hover:text-blue-700">See Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
