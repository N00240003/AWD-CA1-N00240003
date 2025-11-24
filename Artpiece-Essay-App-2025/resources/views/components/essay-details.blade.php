<!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->

@props(['id', 'essay_title', 'essay_text', 'essay', 'tags']) 

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition-shadow duration-300 max-w-xl mx-auto">
    {{-- Essay Title --}}
    <h1 class="font-bold text-black-600 " style="font-size: 3rem;">{{ $essay_title }}</h1>

    {{-- Essay Author --}}
    {{-- <h1 class="font-bold text-black-600 " style="font-size: 3rem;">{{ $essay->$user_id }}</h1> --}}

    {{-- Essay Text --}}
    <p class="text-gray-500 semi-bold mb-2" style="font-size: 1rem;">{{ $essay_text }}</p>

    {{-- Essay Tags --}}
    <p class="text-gray-500 semi-bold mb-2" style="font-size: 1rem;">Tags: {{ $tags }}</p>


</div>    
    