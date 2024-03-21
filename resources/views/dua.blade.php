@extends('layouts.app')
 
@section('title', 'Halaman')
 
@section('content')
<br>


<button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-pink-700 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800" type="button">Pilih lah <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>

<div id="dropdown" class="z-10 hidden bg-white divide-y divide-pink-100 rounded-lg shadow w-44 dark:bg-pink-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-pink-100 dark:hover:bg-pink-600 dark:hover:text-white">Makan</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-pink-100 dark:hover:bg-pink-600 dark:hover:text-white">Minum</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-pink-100 dark:hover:bg-pink-600 dark:hover:text-white">Mandi</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-pink-100 dark:hover:bg-pink-600 dark:hover:text-white">Main</a>
      </li>
    </ul>
</div>

@endsection