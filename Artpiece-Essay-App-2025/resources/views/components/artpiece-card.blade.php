@props(['id','title', 'image','artpiece']) {{-- @props defines the properties that may be passed into the component --}}

{{-- Arpiece Card Component --}}
{{-- <div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transistion duration-300"> --}}
    <h4 class="font-bold text-lg">{{ $title }}</h4>
    <img src="{{ asset( 'images/artpieces/' .$image) }}" alt="{{ $title }}"> 
{{-- </div> --}}
