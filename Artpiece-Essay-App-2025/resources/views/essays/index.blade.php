<!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Essays') }}
        </h2>
    </x-slot>

    {{-- Component to display success message that may sent from controller eg when essay is created successfully --}}
    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>
    {{-- Component to display error message display eg when regular user tries to add new essay --}}
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
                            <form class="d-flex" action="{{ route('essays.search') }}" method="GET">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                    name="search" />
                                <button
                                    class="btn text-white hover:bg-indigo-700 bg-indigo-500 shadow-lg inset-ring-2 shadow-indigo-500/50"
                                    type="submit">Search
                                </button>
                            </form>

                        </div>
                    </nav>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        {{-- Loop through essays to create each essay card --}}
                        @foreach ($essays as $essay)
                            <div
                                class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transistion duration-300">
                                <a href="{{ route('essays.show', $essay) }}">
                                    <x-essay-card :id="$essay->id" :essay_title="$essay->title" 
                                        :description="$essay->description" :type="$essay->type" :year="$essay->year" :essay="$essay"
                                        :created_at="$essay->created_at" />
                                </a>
                                <div class="mt-4 flex justify-between">
                                    {{-- <a href="{{ route('essays.edit', $essay) }}"
                                        class="text-gray-600 bg-violet-300 hover:bg-blue-300 font-bold py-2 px-4 rounded">
                                        Edit
                                    </a> --}}
                                    {{-- @auth --}}
                                        @if (auth()->user()?->role === 'admin')
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-3 rounded">
                                                <a href="{{ route('essays.edit', $essay) }}">Edit</a>
                                            </button>

                                            <form action="{{ route('essays.destroy', $essay) }}" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this essay?');">
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
