@props(['id','title', 'image','artpiece'])

{{-- <div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transistion duration-300"> --}}
    <h4 class="font-bold text-lg">{{ $title }}</h4>
    <img src="{{ asset( 'images/artpieces/' .$image) }}" alt="{{ $title }}"> 
{{-- </div> --}}
