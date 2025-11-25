<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
</div>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artist Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Artist Details</h3>
                    <x-artist-details :name="$artist->name" :nationality="$artist->nationality" :birth_date="$artist->birth_date" :death_date="$artist->death_date"
                        :bio="$artist->bio" :movement="$artist->movement" :portrait_url="$artist->portrait_url" />
                </div>

                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">This Artist's works</h3>
                    @if ($artist->artpieces->isEmpty())
                        <p class="text-gray-600">No artpieces for this artist yet.</p>
                    @else
                        <ul class="space-y-4">
                            @foreach ($artist->artpieces as $artpiece)
                                <li class="flex border rounded-lg p-4 bg-gray-50">
                                    <img class="w-64 object-cover mb-4 flex justify-center rounded-lg"
                                        src="{{ asset('images/artpieces/' . $artpiece->img_url) }}" alt="{{ $artpiece->title }}">
                                    
                                    <span class="mx-2">
                                        <h4 class="font-bold text-lg">{{ $artpiece->title }}</h4>
                                        <p class="text-gray-700 mt-2">{{ Str::limit($artpiece->description, 200) }}</p>
                                    </span>
                                    
                                    {{-- <p class="text-sm text-gray-500 mt-2">By: {{ $artpiece->user->name }}</p> --}}
                                </li>
                                @if ($artpiece->user?->is(auth()->user()) || auth()->user()?->role === 'admin')
                                    <a href="{{ route('artpieces.edit', $artpiece) }}"
                                        class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-2 rounded">
                                        {{ __('Edit Artpiece') }}
                                    </a>

                                    <form action="{{ route('artpieces.destroy', $artpiece) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button :href="route('artpieces.destroy', $artpiece)"
                                            onclick="return confirm('Are you sure you want to delete this artpiece?');">
                                            {{ __('Delete Artpiece') }}
                                        </x-danger-button>
                                    </form>
                                @endif
                            @endforeach
                        </ul>
                    @endif
                </div>

                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Essays on this Artist's works</h3>
                    @if ($artist->essays->isEmpty())
                        <p class="text-gray-600">No essays have been written for this artist yet.</p>
                    @else
                        <ul class="space-y-4">
                            @foreach ($artist->essays as $essay)
                                <li class="border rounded-lg p-4 bg-gray-50">
                                    <h4 class="font-bold text-lg">{{ $essay->essay_title }}</h4>
                                    <p class="text-gray-700 mt-2">{{ Str::limit($essay->essay_text, 200) }}</p>
                                    <p class="text-sm text-gray-500 mt-2">By: {{ $essay->user->name }}</p>
                                </li>
                                @if ($essay->user->is(auth()->user()) || auth()->user()?->role === 'admin')
                                    <a href="{{ route('essays.edit', $essay) }}"
                                        class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-2 rounded">
                                        {{ __('Edit Essay') }}
                                    </a>

                                    <form action="{{ route('essays.destroy', $essay) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button :href="route('essays.destroy', $essay)"
                                            onclick="return confirm('Are you sure you want to delete this essay?');">
                                            {{ __('Delete Essay') }}
                                        </x-danger-button>
                                    </form>
                                @endif
                            @endforeach
                        </ul>
                    @endif
                </div>


            </div>
        </div>
    </div>

</x-app-layout>
