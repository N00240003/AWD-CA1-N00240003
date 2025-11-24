@props(['id', 'name', 'nationality', 'birth_date', 'death_date', 'bio', 'movement', 'portrait_url'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition-shadow duration-300 max-w-xl mx-auto">

    {{-- Artist Name --}}
    <h1 class="font-bold text-black-600 " style="font-size: 3rem;">{{ $name }}</h1>

    {{-- Artist Portrait --}}
    <img class="width:auto object-cover mb-4 flex justify-center"
         src="{{ asset('images/artists/' . $portrait_url) }}"
         alt="{{ $name }}">

    {{-- Artist Nationality --}}
    <p class="text-gray-500 semi-bold mb-2" style="font-size: 1rem;">
        Nationality: {{ $nationality }}
    </p>

    {{-- Artist Birth and Death Dates --}}
    <p class="text-gray-500 semi-bold mb-2" style="font-size: 1rem;">
        Born: {{ $birth_date }}
        @if($death_date)
            | Died: {{ $death_date }}
        @endif
    </p>

    {{-- Movement --}}
    <p class="text-gray-700 italic mb-3">{{ $movement }}</p>

    {{-- Bio --}}
    <p class="text-gray-700 leading-relaxed">{{ $bio }}</p>

</div>
