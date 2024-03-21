@extends('layouts.app')
 
@section('title', 'Halaman 1')
 
@section('content')

<br>
  <h1 class="text-6xl font-bold text-pink-300 ">
    Hello World!
  </h1>

  <br>

<a href="{{ url('/halaman2')}}" class="text-white bg-pink-500 hover:bg-pink-500 focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-pink-500 dark:hover:bg-pink-700 dark:focus:ring-pink-900">Tekan woy</button>
</a>

@endsection
