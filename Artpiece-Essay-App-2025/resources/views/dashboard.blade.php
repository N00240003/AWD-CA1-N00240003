<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-violet-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Your Favorite Artpieces:</h3>
                    @if (isset($favArtpieces) && $favArtpieces->isNotEmpty())
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($favArtpieces as $artpiece)
                                <div
                                    class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300">
                                    <a href="{{ route('artpieces.show', $artpiece) }}">
                                        <img src="{{ $artpiece->img_url }}" alt="{{ $artpiece->title }}" class="w-full h-48 object-cover mb-4">
                                        <h4>{{ $artpiece->title }}</h4>
                                        <p>{{ $artpiece->type }}</p>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>You have not favorited any artpieces yet.</p>
                    @endif
                </div>
            </div>
        </div>
</x-app-layout>
