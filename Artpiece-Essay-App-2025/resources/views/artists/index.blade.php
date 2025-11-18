<!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Artists') }}
        </h2>
    </x-slot>

    {{-- Component to display success message that may sent from controller eg when artist is created successfully --}}
    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>
    {{-- Component to display error message display eg when regular user tries to add new artist --}}
    <x-alert-error>
        {{ session('error') }}
    </x-alert-error>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">All Art Pieces:</h3>
                    <nav class="navbar bg-body-tertiary">
                        <div class="container-fluid">

                            {{-- Search input --}}
                            <form class="d-flex" action="{{ route('artists.search') }}" method="GET">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                    name="search" />
                                <button
                                    class="btn text-white hover:bg-indigo-700 bg-indigo-500 shadow-lg inset-ring-2 shadow-indigo-500/50"
                                    type="submit">Search
                                </button>
                            </form>

                            {{-- Radiogroup for adding sorting/filtering --}}
                            {{-- <input checked type="radio" id="sort-none" name="sorting" />
                            <label for="sort-none">None</label>

                            <input type="radio" id="sort-type-painting" name="sorting" />
                            <label for="sort-type-painting">Painting</label>

                            <input type="radio" id="sort-type-statue" name="sorting" />
                            <label for="sort-type-statue">Statue</label> --}}

                        </div>
                    </nav>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        {{-- Loop through artists to create each artist card --}}
                        @foreach ($artists as $artist)
                            <div
                                class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transistion duration-300">
                                <a href="{{ route('artists.show', $artist) }}">
                                    <x-artist-card :id="$artist->id" :name="$artist->name" :nationality="$artist->nationality"
                                        :birth_date="$artist->birth_date" :death_date="$artist->death_date" :bio="$artist->bio" :movement="$artist->movement"
                                        :portrait_url="$artist->portrait_url"
                                        :created_at="$artist->created_at" />
                                </a>
                                <div class="mt-4 flex justify-between">
                                    {{-- <a href="{{ route('artists.edit', $artist) }}"
                                        class="text-gray-600 bg-violet-300 hover:bg-blue-300 font-bold py-2 px-4 rounded">
                                        Edit
                                    </a> --}}
                                    {{-- @auth --}}
                                        @if (auth()->user()?->role === 'admin')
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-3 rounded">
                                                <a href="{{ route('artists.edit', $artist) }}">Edit</a>
                                            </button>

                                            <form action="{{ route('artists.destroy', $artist) }}" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this artist?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500
                                                    hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                    Delete
                                                </button>
                                            </form>
                                        @endif
                                    {{-- @endauth --}}
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
