<!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->

@props(['title', 'image', 'description','type','year'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition-shadow duration-300 max-w-xl mx-auto">
    {{-- Artpiece Title --}}
    <h1 class="font-bold text-black-600 " style="font-size: 3rem;">{{ $title }}</h1>

    {{-- Artpiece Year --}}
    <p class="text-gray-500 semi-bold mb-2" style="font-size: 1rem;">{{ $year }}</p>

    {{-- Artpiece Type --}}
    <p class="text-gray-500 semi-bold mb-2" style="font-size: 1rem;">Type: {{ $type }}</p>

    {{-- Artpiece Image --}}
    <div class="overflow-hidden rounded-lg mb-4 flex justify-center">
        <img src="{{ asset('images/artpieces/' . $image) }}" alt="{{ $title }}" class="w-full max-w-xs h-auto object-cover">
    </div>

    {{-- Artpiece Description --}}
    <h3 class="text-gray-800 semi-bold mb-2" style="font-size: 2rem;">Description</h3>
    <p class="text-gray-700 mb-4">{{ $description }}</p>

</div>    
    