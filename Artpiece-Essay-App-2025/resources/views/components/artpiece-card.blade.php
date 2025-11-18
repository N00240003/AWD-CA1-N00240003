@props(['id','title', 'image','artpiece']) 
{{-- @props defines the properties that may be passed into the component --}}

{{-- Arpiece Card Component --}}
{{-- <div class="flex"> --}}
    <h4 class="font-bold text-lg">{{ $title }}</h4>
    <img class="width:auto object-cover" src="{{ asset( 'images/artpieces/' .$image) }}" alt="{{ $title }}"> 
    <p class="mt-2 text-gray-600">{{ Str::limit($artpiece->description, 100) }}</p>
{{-- </div> --}}
